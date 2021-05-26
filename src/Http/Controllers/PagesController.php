<?php

namespace Eservice\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Eservice\Contact\Models\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('vendor.contact.pages.frontend.index', [
            'contact'=>Contact::all()
        ]);
    }
}
