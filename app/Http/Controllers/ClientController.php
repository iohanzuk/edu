<?php

namespace App\Http\Controllers;

use App\Domain\Models\Client;
use App\Domain\Services\ClientService;
use App\Requests\ClientGetRequest;
use App\Requests\ClientPostRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientService
     */
    private $clientService;

    public function __construct()
    {
        $this->clientService = new ClientService();
    }

    public function get(ClientGetRequest $request)
    {
        $collection = $this->clientService->getClients($request->all());
        return $collection->toJson();
    }

    public function getById(Request $quest)
    {

    }

    public function post(ClientPostRequest $request)
    {
        return new Client($request->toArray());
    }

    public function put()
    {

    }
}