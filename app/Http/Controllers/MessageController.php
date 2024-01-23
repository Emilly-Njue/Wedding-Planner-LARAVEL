<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin.messages', compact('messages'));
    }

    public function delete($id)
    {
        // Logic to delete booking
        $messages = Message::find($id);
        $messages->delete();

        return redirect()->back()->with('success', 'Message deleted successfully!');
    }

}


