<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use Exception;

class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function getAllProduct()
    {
        try {
            $this->productService->getAllProduct();

        } catch (Exception $e) {
          //  return
        }

    }



    public function store(StoreProductRequest $request)
    {

    }


    public function show(Product $product)
    {

    }


    public function edit(Product $product)
    {

    }


    public function update(UpdateProductRequest $request, Product $product)
    {

    }

    public function destroy(Product $product)
    {

    }
}
