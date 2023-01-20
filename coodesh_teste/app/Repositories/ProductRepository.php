<?php
namespace App\Repositories;
use App\Models\Product;
use Illuminate\Http\Request;


interface ProductRepository{

    public function store();
    public function depositConfirm(Request $request, $id);
    public function withdrawConfirm(Request $request, $id);

}
