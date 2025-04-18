<?php

namespace App\Http\Controllers;

use App\Models\AddDoctor;
<<<<<<< HEAD
use App\Models\DoctorAvailability;
=======
>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddDoctorController extends Controller
{
<<<<<<< HEAD
    public function store(Request $request)
    {
        $request->validate([
            'file_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
=======
    //
    public function index(){

    }

    public function store(Request $request){
        $request->validate([
            'file_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string',
            'contact' => 'required|string|max:15',
<<<<<<< HEAD
            'email' => 'required|email|max:255|unique:add_doctors,email',
=======
            'email' => 'required|email|max:255',
>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174
            'marital' => 'nullable|string',
            'street' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'postal' => 'nullable|string|max:10',
            'specialization' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
        ]);

<<<<<<< HEAD
        $doctorData = $request->only([
            'firstname', 'lastname', 'age', 'gender', 'contact', 'email',
            'marital', 'street', 'city', 'country', 'postal',
            'specialization', 'qualification', 'bio'
        ]);

        if ($request->hasFile('file_image')) {
            $imagePath = $request->file('file_image')->store('doctor_images', 'public');
            $doctorData['image_path'] = $imagePath;
        }

        AddDoctor::create($doctorData);
=======
        AddDoctor::create($request->only([ 'firstname', 'lastname', 'age', 'gender', 'contact', 'email', 
        'marital', 'street', 'city', 'country', 'postal', 
        'specialization', 'qualification', 'bio']));
>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174

        return redirect()->route('DoctorList')->with('success', 'Doctor added successfully!');
    }

<<<<<<< HEAD
    public function show()
    {
        $DoctorRecord = AddDoctor::all(); 
        return view('doctor_record', compact('DoctorRecord')); 
    }

    public function list()
    {
        $Doctorlist = AddDoctor::all();
        return view('doctor_list', compact('Doctorlist')); 
    }

    public function edit($id)
    {
        $doctor = AddDoctor::findOrFail($id);
        return view('EditDoctor.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = AddDoctor::findOrFail($id);

        $request->validate([
            'file_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string',
            'contact' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:add_doctors,email,'.$doctor->id,
            'marital' => 'nullable|string',
            'street' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'postal' => 'nullable|string|max:10',
            'specialization' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
        ]);

        $doctorData = $request->only([
            'firstname', 'lastname', 'age', 'gender', 'contact', 'email',
            'marital', 'street', 'city', 'country', 'postal',
            'specialization', 'qualification', 'bio'
        ]);

        if ($request->hasFile('file_image')) {
            // Delete old image if exists
            if ($doctor->image_path) {
                Storage::disk('public')->delete($doctor->image_path);
            }
            
            $imagePath = $request->file('file_image')->store('doctor_images', 'public');
            $doctorData['image_path'] = $imagePath;
        }

        $doctor->update($doctorData);

        return redirect()->route('DoctorList')->with('success', 'Doctor updated successfully!');
    }

    public function destroy($id)
    {
        $doctor = AddDoctor::findOrFail($id);

        // Delete the doctor's availability records
        DoctorAvailability::where('DoctorId', $doctor->DoctorId)->delete();

        // Delete the image file if it exists
        if ($doctor->image_path) {
            Storage::disk('public')->delete($doctor->image_path);
        }

        // Delete the doctor record
        $doctor->delete();

        return redirect()->route('DoctorRecord')->with('success', 'Doctor and associated availability deleted successfully!');
    }
}
=======
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
>>>>>>> 9ca211229af9b8a0fb97ed01c8718f3908d74174
