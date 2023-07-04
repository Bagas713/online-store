<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
    // public function index()
    // {
    //     $viewData = [];
    //     $viewData["abouts"] = About::all();
    //     return view('about.index')->with("viewData", $viewData);
    // }

    public function createForm(Request $request) {
        return view('abouts');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //  Store data in database
        About::create($request->all());

        //
        return back()->with('success', 'Terima Kasih telah memberi masukan');
    }
}
