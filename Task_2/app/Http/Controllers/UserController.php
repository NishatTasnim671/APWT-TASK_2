<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function signin()
    {
        $mes="";
        return view("pages.login")->with('data',$mes);
    }
    public function loginform(Request $request)
    {
        $validate=$request->validate([

             'name'=>'required',
             'password'=>'required'
        ],
        [
            'name.required'=>'Please put your name',
            'password.required'=>'Please put your password'
        ]
        
        );
        $name=$request->name;
        $password=$request->password;
        $user="";
        $data="";
        $result="ok";
        $mes="";

        $data=["Nishat"=>"12345","Jisun"=>"123456","Mahin"=>"1234567"];
            foreach ($data as $key => $value) {
                if($name==$key && $password==$value )
                {
    
                    $user=$name;
                    return view("pages.userview",['user'=>$user]);
                    
                    
    
                }
                else {
                    $data="ok";
                }

              
            }
            if ($result==$data) {
                $mes="user name password not match";
                return view("pages.login")->with('data',$mes);
            }
        
        
        
    }


    public function create(){
        return view('pages.registration');
    }
    public function createSubmit(Request $request){
        
        $validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'dob'=>'required',
                'email'=>'required|email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password'=>'required|min:8'
                              
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 5 charcters',
                'name.max'=>'Name must be smaller than 10 charcters',
                'dob.required'=>'Please put your date of birth',
                'email.required'=>'Please put your email',
                'email.email'=>'please put your valid email',
                'phone.required'=>'Please put your phone number',
                'phone.regex'=>'Phone number must be numbers',
                'password.required'=>'Please put your password',
                'password.min'=>'Name must be greater than 8 charcters'
            
               


            ]
        );
        

        return "OK";      
    }
    
    

}
