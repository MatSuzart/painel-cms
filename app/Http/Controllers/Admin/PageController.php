<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\Validator;
use Iluminate\Support\Str;
use App\Page;

class PageController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(10);

        return view('admin.pages.index', [
           'pages' => $pages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request ->only([
            'title',
            'body'
        ]);

        $data['slug'] = Str::slug($data['title'], '-');

        $validator = Validator::make($data,[
            'title'=> ['required', 'string', 'max:100'],
            'body'=>['string'],
            'slug'=> ['required', 'string','max:200', 'unique:pages']
        ]);


        if($validator->fails()){
            return redirect()->route('users.create')->withErros($validator)->withInput();
        }

        $page = new Page;
        $page->title = $data['title'];
        $page->slug = $data['slug'];
        $page->body = $data['body'];
        $page->save();

        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);

        if($page){
            return view('admin.pages.edit',[
                'page'=>$page
            ]);
        }

        return redirect()->route('pages.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id);

        if($page){

            $data = $request->only([
                'title',
                'body',
            ]);

            if($pages['title'] !==$data['title']){
                $data['slug'] = Str::slug($data['title'], '-');

                $validator = Validator::make($data,[
                    'title'=> ['required', 'string', 'max:100'],
                    'body'=> ['string'],
                    'slug'=> ['required', 'string','max:100', 'unique:pages']
                ]);

            }else{
            $validator = Validate::make([
                'title'=> $data['name'],
                'body'=> $data['email']
            ]);

        }

        if($validator->fails()){
            return redirect()->route('pages.edit',[
                'pages' => $id
            ])
            ->withErros($validator)
            ->withInput();
        }
            $pages->title = $data['title'];
            $pages->body = $data['body'];

            if(!empty($pages['title'])){
                $page->slug = $data['slug'];
            }

            $page->save();
        }



      return redirect()->route('pages.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $page = Page::find($id);
            $page->delete();

        return redirect()->route('pages.index');

    }
}
