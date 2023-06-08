<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->first_name = $request->input('firstName');
        $client->last_name = $request->input('lastName');
        $client->email = $request->input('email');
        $client->contacts = $request->input('phone_contact');
        $client->address = $request->input('address');
        $client->save();

        //return redirect()->back()->with('success', 'Client Successfully Added');
        return redirect()->route('clients')->with('success', 'Client Successfully Added');
    }

    public function list()
    {
        $clients = Client::all();

        return view('clients', compact('clients', $clients));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::find($id);

        return view('editClient', compact('clients', $clients));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clients = Client::find($id);
        $clients->first_name = $request->input('firstName');
        $clients->last_name = $request->input('lastName');
        $clients->email = $request->input('email');
        $clients->contacts = $request->input('phone_contact');
        $clients->address = $request->input('address');
        $clients->update();

        return redirect()->route('clients')->with('success', 'Client Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = Client::find($id);

        $clients -> delete();
        
        return redirect()->route('clients')->with('success', 'Client Deleted!!');
    }
}
