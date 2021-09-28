<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    //
    public function createView(){
        return view('create');
    }
    
    

    public function store(Request $request){
        $name         = $request->name;
        $email        = $request->email;
        $password     = $request->password;
        $address      = $request->address;
        $gender       = $request->gender;
        $linkedinurl  = $request->linkedinurl;
   
        $errors = [];
        if(empty($name)){
          $errors['Name'] = "Field Required";
        }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $errors['Name'] = "Only letters and white space allowed";
          }
        
        if(empty($email)){
           $errors['email'] = "Field Required";
         }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
            }

            if (empty($password)) {
                $errors['password'] = "Password  is required";
              } elseif(strlen($password) < 6){
            
                $errors['password'] = "Length Must be > 5 ch";
                }

                if (empty($address)) {
                    $errors['address'] = "Address  is required";
                  } elseif(strlen($address) < 10){
                
                    $errors['address'] = "Length Must be > 9 ch";
                    }

                    if (empty($gender)) {
                        $errors['gender'] = "Gender is required";
                      }

                      if (empty($linkedinurl)) {
                        $errors['linkedinurl'] = "Field is required";
                      } elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedinurl)) {
                        $errors['linkedinurl'] = "Invalid URL";
                        }    
            
   
        if(count($errors) > 0 ){
            foreach($errors as $key => $value){
   
              echo '* '.$key.' : '.$value;
   
           }
        }else{
             
              return view('profile',['data' => $request->except(['_token'])]);
        }
    }
 }
