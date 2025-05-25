<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FipeService
{
    protected $baseUrl = "https://parallelum.com.br/fipe/api/v1";

    public function getCarBrands()
    {
        return Http::get("{$this->baseUrl}/carros/marcas")->json();
    }

    public function getModelsByBrand($brandId)
    {
        return Http::get("{$this->baseUrl}/carros/marcas/{$brandId}/modelos")->json();
    }
}

