<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    private $productRepository;
    public function __construct(ProductRepository $productRepository)
    {

        $this->productRepository = $productRepository;
    }

    public function getAllProduct()
    {

        return $this->productRepository->getAllProduct();
    }
    
    public function getProductCode($code)
    {

        return $this->productRepository->getProductCode($code);
    }

    public function updateProductCode(Request $request, $code){
        return $this->productRepository->updateProductCode($request, $code);
    }
    public function deleteProductCode(Request $request, $code){
        return $this->productRepository->deleteProductCode($request, $code);
    }

}
