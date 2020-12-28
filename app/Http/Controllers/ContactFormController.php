<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function addContact(Request $request)
    {
        $contactForm = new ContactForm();
        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->address = $request->address;
       $valueStore = $contactForm->save();

        if ($contactForm->save()) {
            $notification = array(
                'message' => 'Form Submitted Successfully',
                'alert-type' => 'success',
            );

            return Redirect()->route('all.contact')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function viewData()
    {
        $viewAllData = ContactForm::all();
        return view('/all_contact_data')->with('viewAllData',$viewAllData);
    }
}
