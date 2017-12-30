<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientFormRequest;
use App\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    protected $service;
    public function __construct(ClientService $service)
    {
        $this->service = $service;
    }
    public function index()
    {

      //  DB::raw('asdsad');

 //       $clients = new Client();
//
//        if(request()->has('name'))
//        {
//            $clients = $clients->where('name','fakhar');
//        }
//
//        dd($clients->get());
//
//        return $clients->get();

      //  dd($clients->where('name','fakhar'));


        //$clients->fromQuery('');

        $clients=$this->service->all(); //Return Collection

//        $clients->where('name','Fakhar Khan')[0]->name='Akber Ali'; //find a record

//        $clients->map(function ($client, $index){
//           return $client->name='Nawaz Sharif';
//        });
//
       // $client  = $clients[0];
       // $client->name ="Aslam Khan";

 //       return $clients;

       // Client::all()->sortBy('name')->where('name','aa');

        //$clients->where('name','aa'); //executes where method on colleciton

        //$clients=Client::where('name','aa'); //executes where method of query builder

      // $clients = Client::orderBy('name')->where('name','Fakhar Khan');

      //  return $clients->get();

       // return $clients->sortBy('name');

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

    public function store(ClientFormRequest $request)
    {

        Client::create(request()->all());

        return redirect()->to('clients')->with('status','Client Saved!');
    }

    public function download()
    {
        return response()->download('robots.txt');
    }

}
