<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    public function index() {
        $entries = Entry::all();

        return view('entries.index', ['entries'=>$entries]);
    }

    public function news() {
        $entries = Entry::all();

        return view('entries.news', ['entries'=>$entries]);
    }

    public function menu() {
        $entries = Entry::all();

        return view('entries.menu', ['entries'=>$entries]);
    }

    public function view($id) {
        $entry = Entry::findOrFail($id);

        return view('entries.view', ['entry'=>$entry]);
    }
}
