<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $visitsCount = 0;
        $onlineCount = 0;
        $pagesCount = 0;
        $userCount = 0;
        $interval = intval($request->input('interval',30));
        if($interval > 120){
            $interval = 120;
        }

        $dateInterval = date('Y-m-d H:i:s', strtotime('-'.$interval.'days'));
        $visitsCount = Visitor::where('date_acess','>=',$dateInterval)->count();



        $dateLimit = date('Y-m-d H:i:s', strotime('-5 minutes'));
        $onlineList = Visitor::select('ip')->where('date_acess','>=', $dateLimit)->where('date_acess','>=',$dateInterval)->groupBy('ip')->get();
        $onlineCount = count($onlineList);

        $pagesCount = Page::count();
        $userCount = User::count();

        $visitsAll = Visitor::selectRaw('page, count(page) as c')->groupBy('page')->get();

        foreach($visitsAll as $visit){
            $pagePie[ $visit['page'] ]= intval($visit['c']);
        }

        $pagePie = [

        ];

        $pageLabels = json_encode(array_keys($pagePie));
        $pageValues = json_encode(array_values($pagePie));

        return view('admin.home',[
            'visitsCount'=> $visitsCount,
            'onlineCount'=> $onlineCount,
            'pagesCount'=> $pagesCount,
            'userCount'=> $userCount,

            'pageLabels'=>'$pageLabels',
            'pageValues'=>'$pageValues',
            'dateInterval'=> '$interval'
        ]);
    }
}
