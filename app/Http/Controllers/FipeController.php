<?php

namespace App\Http\Controllers;

use App\Services\FipeService;
use Illuminate\Http\Request;


class FipeController extends Controller
{
    protected $fipeService;

    public function __construct(FipeService $fipeService)
    {
        $this->fipeService = $fipeService;
    }

    public function brands()
    {
        return response()->json($this->fipeService->getCarBrands());
    }

    public function models($brandId)
    {
        return response()->json($this->fipeService->getModelsByBrand($brandId));
    }
}
