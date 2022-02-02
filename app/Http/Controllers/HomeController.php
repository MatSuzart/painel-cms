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
    public function index()
    {
        $visitsCount = 0;
        $onlineCount = 0;
        $pagesCount = 0;
        $userCount = 0;

        $visitsCount = Visitor::count();

        $dateLimit = date('Y-m-d H:i:s', strotime('-5 minutes'));
        $onlineList = Visitor::select('ip')->where('date_acess','>=', $dateLimit)->groupBy('ip')->get();
        $onlineCount = count($onlineList);

        $pagesCount = Page::count();
        $userCount = User::count();


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
            'pageValues'=>'$pageValues'
        ]);
    }
}
