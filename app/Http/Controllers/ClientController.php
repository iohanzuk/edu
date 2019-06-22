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
        $builder = $this->clientService->getClients($request->all());
        $sales   = $builder->paginateWithLimit($data['itemsPerPage'], $data['page'], [$field]);
        $sales->setCollection($strategy->individualSalePermissions($sales->getCollection()));

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