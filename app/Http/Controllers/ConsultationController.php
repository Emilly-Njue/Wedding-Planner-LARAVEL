<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Mail;

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
        $consultation->email = $request->input('email');
        $consultation->phone = $request->input('phone');
        $consultation->topic = $request->input('topic');
        $consultation->message = $request->input('message');
        $consultation->status = 'Not Consulted Yet'; 
        $consultation->save();

            // Send email notification to the admin
            $adminEmail = 'wedco212@gmail.com';
            $adminSubject = 'Hot off the press! New wedding planning inquiry';
            $adminMessage = "Hey Team, \n\nHeads up! We have a new consultation submission from {$consultation->name}! They're excited to chat about their dream wedding and {$consultation->topic}
            \n\nGet ready to spread the wedding magic! Check out their message and let's connect with them soon to make their vision a reality.";
            
            Mail::raw($adminMessage, function ($mail) use ($adminEmail, $adminSubject) {
                $mail->to($adminEmail)->subject($adminSubject);
            });

            // Send email notification to the user
            $userSubject = "Your love story, our expertise: Consultation confirmed! Let's chat!";
            $userMessage = "Hi {$consultation->name},\n\nWe got your love story in our sights! Your consultation message is nestled in our wedding vault, and we're thrilled to help make your dream day a reality. ✨
            \n\nGet ready for a call soon where we'll chat vision, preferences, and answer all your questions. Think of it as the first brushstroke on your magical masterpiece!\nWe're thrilled to have you on board!
            \n\nCheers🥂,\nThe Wedco Team.";
        
            Mail::raw($userMessage, function ($mail) use ($consultation, $userSubject) {
                $mail->to($consultation->email)->subject($userSubject);
            });

        return redirect()->back()->with('success', 'Consultation submitted successfully!');
    }

    public function markAsCompleted($id)
    {
        // Logic to mark consultation as completed
        $consultation = Consultation::find($id);
        $consultation->status = 'Successful';
        $consultation->save();

            // Send email notification to the user
            $userSubject = "Your love story, our expertise: Consultation confirmed! Let's chat!";
            $userMessage = "Hi {$consultation->name},\n\nWe got your love story in our sights! Your consultation message is nestled in our wedding vault, and we're thrilled to help make your dream day a reality. ✨
            \n\nGet ready for a call soon where we'll chat vision, preferences, and answer all your questions. Think of it as the first brushstroke on your magical masterpiece!\nWe're thrilled to have you on board!
            \n\nCheers🥂,\nThe Wedco Team.";
        
            Mail::raw($userMessage, function ($mail) use ($consultation, $userSubject) {
                $mail->to($consultation->email)->subject($userSubject);
            });

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

