<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use Carbon\Carbon;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        $unit=array('b','kb','mb','gb','tb','pb');
        $size = memory_get_usage();

        $memory_usage = round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];

        try {
            DB::connection()->getPdo();
            $db_status = 'Connected';
        } catch (\Exception $e) {
            $db_status = 'Not Connected';
        }
        $uptime = '';

        return response()->json([
            'db_status' => $db_status,
            'uptime' => $uptime,
            'memoria_usada' => $memory_usage,
        ]);
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
