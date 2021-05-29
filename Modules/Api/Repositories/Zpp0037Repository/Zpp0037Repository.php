<?php

namespace Modules\Api\Repositories\Zpp0037Repository;

use App\Models\Zpp0037;

class Zpp0037Repository implements Zpp0037RepositoryInterface
{
    protected $model;

    public function __construct(Zpp0037 $model)
    {
        $this->model = $model;
    }

    public function getList($request)
    {
        return $this->model::all();
   }
}
