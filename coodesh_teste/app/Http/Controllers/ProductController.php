<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use Exception;
use Symfony\Component\HttpFoundation\Request;

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
            return $this->productService->getAllProduct();

        } catch (Exception $e) {
            return 'Caught exception: '.$e->getMessage();
        }

    }
    public function getProductCode($code)
    {
        try {
            return $this->productService->getProductCode($code);

        } catch (Exception $e) {
            return 'Caught exception: '.$e->getMessage();
        }

    }
    public function updateProductCode(Request $request, $code)
    {
        try {
            return $this->productService->updateProductCode($request, $code);

        } catch (Exception $e) {
            return 'Caught exception: '.$e->getMessage();
        }

    }
    public function deleteProductCode(Request $request, $code)
    {
        try {
            return $this->productService->deleteProductCode($request, $code);

        } catch (Exception $e) {
            return 'Caught exception: '.$e->getMessage();
        }

    }

}
