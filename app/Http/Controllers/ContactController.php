<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
        // return view('contact.index', ['data'=> $data]);
    }
    public function edit($id){
        $contact = Contact::find($id);
        $contacts = Contact::all();
        return view('contact.index', compact('contacts', 'contact'));

    }
    public function delete($id){
        dd('$contact');
    }


    public function update(Request $request, $id){
        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom', ''),
            'date_naissance' => $request->input('date_naissance'),
            'sexe' => $request->input('sexe', 'masculin'),
        ];
        Contact::where('id', '=', $id)->update($data);
        // Contact::where('id', $id)->update($data);

        return redirect()->route('contact.index')->with('message', 'Mise à jour effectuée!');

        // dd($request->all());
        // dd($data);
    }
    public function save(Request $request){
        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom', ''),
            'date_naissance' => $request->input('date_naissance'),
            'sexe' => $request->input('sexe', 'masculin'),
        ];
        Contact::create($data);
        return redirect()->back()->with('message', 'Ajout effectuée!');

        // dd($request->all());
        // dd($data);
    }
}
