<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;


class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request)
    {
        return view('home.contacto');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:09',
            'subject' => 'required',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('proagua2@gmail.com', 'infoAgroSanfrancisco')->subject($request->get('subject'));
        });

        //
        return back()->with('success', 'Gracias, hemos recibido su mensaje y nos comunicaremos a la brevedad.');
    }

    public function ContactShow()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('contact.index', compact('contacts'));
    }

    public function ContactDelete($id) {
        Contact::where('id', $id)->delete();
        return redirect()->route('contact.list')->with('message', 'El mensaje ha sido eliminado correctamente!');;
    }
}