<?php
namespace App\Repositories;
use App\Models\Product;
use Illuminate\Http\Request;


interface ProductRepository{

    public function getAllProduct();
    public function getProductCode($code);
    public function updateProductCode(Request $request, $code);
    public function deleteProductCode(Request $request, $code);

}
