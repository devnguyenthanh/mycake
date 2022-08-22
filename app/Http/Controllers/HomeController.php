<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Models\NewModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title'  => 'Trang Chủ',

        ]);
    }

    public function menu()
    {
        $products = ProductModel::paginate(8);
        return view('products', [
            'title'  => 'sản phẩm',
        ])->with('products', $products);
    }

    public function detail(ProductModel $product)
    {
        return view('chitietsanpham', [
            'title'  => 'chi tiết sản phẩm',
         ])->with('product', $product);
    }


    public function gallery()
    {

        $products = ProductModel::paginate(8);
        return view('gallery', [
            'title'  => 'bộ sưu tập',
        ])->with('products', $products);
    }

    public function news()
    {
        $news = NewModel::paginate(3);
        return view('news', [
            'title'  => 'tin tức',
        ])->with('news', $news);
    }

    public function contacts()
    {
        $contacts = ContactModel::get();
        return view('contacts', [
            'title'  => 'thông tin liên hệ',
        ])->with('contacts', $contacts);
    }

   
}
