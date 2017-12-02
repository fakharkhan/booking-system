<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index',compact('clients'));
    }

    public function show($id)
    {
        return "Customer Detail for ID:". $id;
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store()
    {
        Client::create(request()->all());
        return redirect()->to('/clients');
    }
}
