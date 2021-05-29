<?php

namespace Modules\Api\Http\Controllers;

use App\Models\Zpp0037;
use Modules\Api\Http\Requests\Zpp0037Request;
use Modules\Api\Http\Response\Zpp0037Response;
use Modules\Api\Repositories\Zpp0037Repository\Zpp0037RepositoryInterface;

class Zpp0037Controller extends BaseApiController
{
    public $repository;

    public function __construct(Zpp0037RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function list(Zpp0037Request $request)
    {
        $response = new Zpp0037Response();
        $zpp0037List = $this->repository->getList($request);
        if (!$zpp0037List) {
            $response->code = 1;
            $response->message = "Data not found ";
            $response->responseData = [];
        } else {
            $response->code = 200;
            $response->responseData = $zpp0037List;
        }

        return $this->sendSuccessResponseCustom($response);
    }
}
