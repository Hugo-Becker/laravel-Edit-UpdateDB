<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public function index()
    {
        $animals=Animal::all();

        return view ('welcome',compact('animals'));
    }

    public function addAnimal()
    {
        return view ('page.addAnimal');
    }

    public function store(Request $request)
    {
        $newEntry = new Animal();
        $newEntry->genre=$request->genre;
        $newEntry->age=$request->age;
        $newEntry->save();
        return redirect('/');
    }

    public function delete($id)
    {
        
        $destroy=Animal::find($id);
        $destroy->delete();
        return redirect('/');

    }

    public function show($id)
    {
        $show=Animal::find($id);
        return view('page.showAnimal',compact('show'));
    }

    public function edit($id){

        $edit=Animal::find($id);
        return view('page.editAnimal',compact('edit'));
        
    }



    public function update($id,Request $request)
    {
        $update = Animal::find($id);
        $update->genre=$request->genre;
        $update->age=$request->age;
        $update->save();
        return redirect('/');
    }
}
