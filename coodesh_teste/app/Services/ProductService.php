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

    
    public function depositConfirm(Request $request)
    {
        $data = json_encode(auth()->user()->BankAccount()->get());
        $obj = json_decode($data);

        return $this->BankAccountRepository->depositConfirm($request, $obj[0]->id);
    }

    public function withdrawConfirm(Request $request)
    {
        $data = json_encode(auth()->user()->BankAccount()->get());
        $obj = json_decode($data);

        return $this->BankAccountRepository->withdrawConfirm($request, $obj[0]->id);
    }

}
