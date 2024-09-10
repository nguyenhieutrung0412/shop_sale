<?php

namespace App\Repositories\Handle;
use App\Http\Requests\Request;
use App\Repositories\Base\RepositoryInterface;

interface HandleInterface
{
    public function imageHandle($files_upload);
    public function price_after_discount($price,$discount);



}