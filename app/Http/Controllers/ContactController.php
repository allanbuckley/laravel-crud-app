<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view ('contacts.index')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'mobile' => 'required',
        ]);
    
        Contact::create($input);
        return redirect('contact')->with('flash_message', 'Contact Addedd!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);
    
        $input = $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'address' => 'required',
            'country' => 'required',
            'mobile' => 'required',
        ]);
    
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');
    }



    public function destroy(string $id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }
}
