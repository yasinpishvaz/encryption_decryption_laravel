<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class indexController extends Controller
{
    public function Result(Request $request)
    {

        if(null !== $request->input('action')){
            switch($request->radioopt) {
                case 'Encrypt':
                 $value = $request->session()->get('iv');
                 $iv = random_bytes(16);
                 Session::put('iv', $iv);
                 $message = $request->inputMessage;
                 $key = $request->inputPass;
                 $cipher = "AES-256-CBC";
                 $Finalmessage = openssl_encrypt($message, $cipher, $key, 0, $iv);
                 return view('index', compact('Finalmessage'));
                break;
              
                case 'Decrypt':
                 $iv = Session::get('iv');       
                 $message = $request->inputMessage;
                 $key = $request->inputPass;
                 $cipher = "AES-256-CBC";
                 $Finalmessage = openssl_decrypt($message, $cipher, $key, 0, $iv);
                 return view('index', compact('Finalmessage'));
                break;
            }
        }




    }


}
