<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index(){
        $datos=Message::all();
    
         return view ('index',compact('datos'));
     }

     public function delete($id){
        Message::find($id)->delete();

        return redirect('index');
    }
}

