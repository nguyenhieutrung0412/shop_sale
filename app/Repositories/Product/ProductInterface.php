<?php

namespace App\Repositories\Product;
use App\Http\Requests\Request;
use App\Repositories\Base\RepositoryInterface;

interface ProductInterface
{
    public function getProduct();
}