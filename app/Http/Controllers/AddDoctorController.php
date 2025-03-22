<?php

namespace App\Http\Controllers;

use App\Models\AddDoctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddDoctorController extends Controller
{
    //
    public function index(){

    }

    public function store(Request $request){
        $request->validate([
            'file_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string',
            'contact' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'marital' => 'nullable|string',
            'street' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'postal' => 'nullable|string|max:10',
            'specialization' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
        ]);

        AddDoctor::create($request->only([ 'firstname', 'lastname', 'age', 'gender', 'contact', 'email', 
        'marital', 'street', 'city', 'country', 'postal', 
        'specialization', 'qualification', 'bio']));

        return redirect()->route('DoctorList')->with('success', 'Doctor added successfully!');
    }

    public function show(){

    }

    public function create(){

    }
    public function edit(){
    
    
    
    }

    public function update(){

    
    
    }
    
    public function destroy(){

    }
    
}
