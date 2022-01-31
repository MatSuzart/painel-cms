<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Iluminate\Support\Facades\Auth;
use Iluminate\Support\Facades\Validator;
use Iluminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller
{
    public function __cunstruct(){
        $this->middleware('auth');
    }

    public function index(){
        $loggedId = intval(Auth::id());

        $user = User::find($loggedId);

        if($user){
            return view('admin.profile.index',[
            'user' =>$user]
        );

        }
        return redirect()->route('admin');
    }

    public function save(Request $request)
    {
        $loggedId = intval(Auth::id() );
        $user = User::find($loggedId);

        if($user){

            $data = $request->only([
                'name',
                'email',
                'passwrd',
                'password_confirmed'
            ]);

            $validator = Validate::make([
                'name'=> $data['name'],
                'email'=> $data['email']
            ],[
                'name'=>['required','string','max:100'],
                'name'=>['required','string','email','max:100']
            ]);

        }

        $users->name = $data['name'];
        if($users->email != $data['email']){
            $hasEmail = User::where('email', $data['email'])->get();
            if(count(hasEmail)==0){
                $user->email = $data['email'];
            }else{
                $validator->erros()->add('password',___('validation.unique.email',[
                    'attribute'=> 'email'
               ]));

               return redirect()->route('porfile',[
                   'user'=> $loggedId
               ])->withErrors($validator);
            }
        }
        if(!empty($data['password'])){
            if(strlen($data['password'])>=4){
            if($data['password'] ==$data['password_confirmation']){
                $user->password = Hash::make($data['password']);
            }else{
                $validator->erros()->add('password',___('validation.confirmed.password',[
                    'attribute'=> 'password'
               ]));
            }
        }
    }else {
        $validator->erros()->add('password',___('validation.min.string',[
             'attribute'=> 'password',
             'min'=>4
        ]));
        if(count($validator->erros())>0){
            return redirect()->route('users.edit',[
                'user'=> $id
            ])->withErrors($validator);
        }
        $user->save();
      }

      return redirect()->route('users.index');

      if(!empty($data['password'])){
        if(strlen($data['password'])>=4){
        if($data['password'] ==$data['password_confirmation']){
            $user->password = Hash::make($data['password']);
        }else{
            $validator->erros()->add('password',___('validation.confirmed.password',[
                'attribute'=> 'password'
           ]));
        }
    }
}else {
    $validator->erros()->add('password',___('validation.min.string',[
         'attribute'=> 'password',
         'min'=>4
    ]));
    if(count($validator->erros())>0){
        return redirect()->route('profile',[
            'user'=> $loggedId
        ])->withErrors($validator);
    }
    $user->save();

    return redirect()->route('profile')->with('warning','Informações Alterado com sucesso');
  }

  return redirect()->route('profile');

        }
    }

