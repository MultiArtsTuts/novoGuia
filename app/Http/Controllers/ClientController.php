<?php

namespace guiasbn\Http\Controllers;

use guiasbn\Client;
use Illuminate\Http\Request;
use guiasbn\Http\Requests\ClientRequest;
use guiasbn\Repositories\Contracts\ClientRepositoryInterface;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "tudo ok";
    }

    public function apiIndex(Client $client)
	 {
		return $client->all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \guiasbn\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(ClientRepositoryInterface $repository, $id)
    {
		//   return $client;
		return $repository->find($id);
    }

    public function showApi($id)
    {
        $client = Client::where('category_id', $id)->paginate(10);
        return $client;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \guiasbn\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \guiasbn\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \guiasbn\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
