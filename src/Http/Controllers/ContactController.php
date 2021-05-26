<?php

namespace Eservice\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Eservice\Contact\Http\Requests\StoreContactRequest;
use Eservice\Contact\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
       
        return view(
            'Contact::pages.backend.index',
            [
             'contact'=>Contact::paginate(8)
            ]);
    }

    public function create()
    {
        return view('Contact::pages.backend.create',[
            'contact'=> new Contact(),
            'button'=>'Ajouter'
        ]);
    }

    public function store(StoreContactRequest $request)
    {
       Contact::create($request->all());
       return redirect()->route('caontact-list')->with('success','Contact ajouté avec success.');
    }
    public function edit($uuid)
    {
        return view('Contact::pages.backend.create',[
            'contact'=> Contact::where('uuid', $uuid)->first(),
            'button'=>'Modifier'
        ]);
    }
    public function update(Request $request, $uuid)
    {
        Contact::where('uuid', $uuid)->update([
            'libelle'=> $request->libelle,
            'lieu'=> $request->lieu,
            'liem_map'=> $request->liem_map,
            'adresse'=> $request->adresse,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            ]);
            return redirect()->route('caontact-list')->with('success','Contact modifié avec success.');
    }
    public function delete($uuid)
    {
        Contact::where('uuid', $uuid)->delete();
        return redirect()->route('caontact-list')->with('success','Contact supprimé avec success.');

    }
}
