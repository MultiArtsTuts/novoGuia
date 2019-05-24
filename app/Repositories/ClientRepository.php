<?php

namespace guiasbn\Repositories;

use guiasbn\Repositories\Contracts\ClientRepositoryInterface;
use guiasbn\Client;
use guiasbn\Http\Requests\ClientRequest;
// use Image;

class ClientRepository extends AbstractRepository implements ClientRepositoryInterface
{
	// private $model;

	public function __construct(Client $model)
	{
		$this->model = $model;
	}

	public function findAll()
	{
		return $this->model->all();
	}

	public function find($id)
	{
		return $this->model->find($id);
	}

	public function create(array $data)
	{
		return $this->model->create($data);
	}
}