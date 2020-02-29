<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contact() {
        return view('contacts.contact');
    }

    public function confirm() {
        return view('contacts.confirm');
    }

    public function send() {
        return view('contacts.send');
    }
}