<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    
    function __construct(Contact $contact) {
        $this->contact = $contact;
    }

    public function store(Request $request) {
        return $this->contact->store($request);
    }

}
