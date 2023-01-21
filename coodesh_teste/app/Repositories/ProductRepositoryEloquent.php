<?php
namespace App\Repositories;
use App\Repositories\ProductRepository;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductRepositoryEloquent implements ProductRepository{

    public function getAllProduct(){
        return  DB::transaction(function () {
           return Product::where('status', '<>', 'trash')->paginate(10);
         });

    }
    public function getProductCode($code){
        return DB::transaction(function () use ($code) {
            return DB::table('products')->where('code', $code)->where('status', '<>', 'trash')->get();
         });

    }
    public function updateProductCode(Request $request, $code){
        return DB::transaction(function () use ($request ,$code) {
            $data = $request->all();

            return Product::where('code', $code)->update($data);
 
         });

    }
    public function deleteProductCode(Request $request, $code){
        return DB::transaction(function () use ($request ,$code) {
            $data = $request->all();
            $data['status'] = 'trash';
            return Product::where('code', $code)->update($data);
 
         });

    }

    }
