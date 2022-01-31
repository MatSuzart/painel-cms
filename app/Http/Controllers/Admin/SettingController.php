<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\Validator;
use App\Setting;

class SettingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $setting = [];

        $dbsettings = Setting::get();

        foreach($dbsettings as $dbsetting){
            $settings[ $dbsetting['name'] ] = $dbsetting['content'];
        }

        return view('admin.setting.index',[
            'setting'=> $setting
        ]);
    }

    public function save(Request $request){

        $data = $request->only([
            'title','subtitle','email','bgcolor','textcolor'
        ]);
        $validator = $this->validator($data);

        if($validator->fails()){
            return redirect()->route('settings')
            ->withErros($validator)
            ->withInput();

        }
            foreach($data as $item=>$value){

                Setting::where('name', $item)->update([
                    'content'=> $value
                ]);

                return redirect()->route('settings')->
                with('warning','informações aletradas com sucesso');
            }
    }



    protected function validator($data){
        return Validator::make($data,[
            'title'=>['string', 'max:100'],
            'subtitle'=>['string', 'max:100'],
            'email'=>['string', 'email'],
            'bgcolor'=>['string', 'regex:/#[a-Z0-9]{6}/i'],
            'textcolor'=>['string', 'regex:/#[a-Z0-9]{6}/i']
        ]);
    }
}
