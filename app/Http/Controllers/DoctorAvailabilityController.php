<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorAvailability;

class DoctorAvailabilityController extends Controller
{

   
    public function create($DoctorId)
    {
        $availabilities = DoctorAvailability::where('DoctorId', $DoctorId)->get();
        return view('availability', compact('DoctorId', 'availabilities'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'DoctorId' => 'required|exists:add_doctors,DoctorId',
            'day' => 'required|string|unique:doctor_availabilities,day,NULL,id,DoctorId,' . $request->DoctorId,
            'morning_from' => 'nullable|date_format:H:i',
            'morning_to' => 'nullable|date_format:H:i',
            'afternoon_from' => 'nullable|date_format:H:i',
            'afternoon_to' => 'nullable|date_format:H:i',
      
        ]);

        DoctorAvailability::create([
            'DoctorId' => $validated['DoctorId'],
            'day' => $validated['day'],
            'morning_from' => $validated['morning_from'],
            'morning_to' => $validated['morning_to'],
            'afternoon_from' => $validated['afternoon_from'],
            'afternoon_to' => $validated['afternoon_to'],
        ]);

        return redirect()->route('Availability', $validated['DoctorId'])->with('success', 'Availability added successfully.');
    }

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {
       
    }

    public function destroy($id)
    {

    }
}
