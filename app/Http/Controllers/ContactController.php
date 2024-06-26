<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    private $contact;

    public function __construct(Contact $contact){
        $this->contact = $contact;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("welcome");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required | min:5",
            "phone" => "required",
            "email" => "required | email",
            "company" => "required",
            "message" => "required",
        ]);
    
        $this->contact->name = $request->name;
        $this->contact->phone = $request->phone;
        $this->contact->email = $request->email;
        $this->contact->company = $request->company; // Assuming you have a 'company' field in your Contact model
        $this->contact->message = $request->message;
    
        if ($this->contact->save()) {
            // Send email
            Mail::to('sourcedart.itservices.event@gmail.com')->send(new ContactFormSubmitted($this->contact));
    
            $response = "We will contact you soon";
            return view('welcome', compact('response'));
        } else {
            $response = "Failed to save the data"; // Add appropriate error message
            return redirect("/")->with(compact("response"));
        }
    }    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
