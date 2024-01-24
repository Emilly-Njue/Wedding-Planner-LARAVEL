<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::all();
        return view('admin.consult', compact('consultations'));
    }

    public function store(Request $request)
    {
        $consultation = new Consultation();
        $consultation->name = $request->input('name');
        $consultation->phone = $request->input('phone');
        $consultation->topic = $request->input('topic');
        $consultation->message = $request->input('message');
        $consultation->status = 'Not Consulted Yet'; 
        $consultation->save();

        return redirect()->back()->with('success', 'Consultation submitted successfully!');
    }

    public function markAsCompleted($id)
    {
        // Logic to mark consultation as completed
        $consultation = Consultation::find($id);
        $consultation->status = 'Successful';
        $consultation->save();

        return redirect()->back()->with('success', 'Consultation marked as completed!');
    }

    public function delete($id)
    {
        // Logic to delete consultation
        $consultation = Consultation::find($id);
        $consultation->delete();

        return redirect()->back()->with('success', 'Consultation deleted successfully!');
    }

}

