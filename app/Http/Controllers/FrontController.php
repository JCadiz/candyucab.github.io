<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Mail;
use App\Mail\MailContact;
use Exception;
use App\Oferta;
use App\Prueba;

class FrontController extends Controller
{

    public function home(){

        return view('web.index');
    }

    public function contact(){
        return view('web.contact');
    }

    public function about(){
        return view('web.about');
    }

     public function tienda(){
        $test = Prueba::orderBy('id', 'ASC')->paginate(3);

        return view('web.tienda', compact('test'));
    }

     public function novedades(){
        return view('web.novedades');
    }

     public function promociones(){
        return view('web.promociones');
    }

     public function send(Request $request){
        Mail::to('jesuscadiz22@gmail.com', "Admin")->send(new MailContact($request));
        return redirect()->route('contact')->with("status", "Email Send");
    }

}
