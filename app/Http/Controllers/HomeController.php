<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Kamaln7\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    public function getHome(){
        return view('home.home');
    }
    public function getContact(){
        return view('home.contact');
    }
    public function getVideo(){
        return view('home.video');
    }

    public function addContact(Request $request)
    {  
        $data = $request->all();

        $rules = [

            'fullName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
          
         


        ];

        $messages = [
            'fullName.required' => "Champ fullName est obligatoire",
            'email.required' => "Champ email est obligatoire",
            'phone.required' => "Champ phone est obligatoire",
            'message.required' => "Champ message est obligatoire",

        ];

        $validation = Validator::make($data, $rules, $messages);

        if ($validation->fails()) {
            Toastr::warning("message ne peut pas etre envoyé");
            return redirect()->back();
        }
        $contact= new Contact();

        $contact->fullName =$request->fullName;
        $contact->email =$request->email;
        $contact->phone =$request->phone;
        $contact->message =$request->message;
      
         
        $contact->save();
        Toastr::success('message envoyé');
        return back();
    
    

    }
    //
}
