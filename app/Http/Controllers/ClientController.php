<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('admin.clients', compact('clients'));
    }

    public function delete($id)
    {
        // Logic to delete 
        $clients = Client::find($id);
        $clients->delete();

        return redirect()->back()->with('success', 'client deleted successfully!');
    }
}
