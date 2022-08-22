<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Providers\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;

class ProductsController extends Controller
{
    public function create()
    {
        return view('admin.products.add', [
            'title' => 'Thêm Sản Phẩm'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'name'      => 'required',
                'price'     => 'required',
                // 'image'     => 'mimes:jpeg,jpg,png,gif|max:10000',
            ],
            [
                'required'  => ':attribute không được để trống',
            ],
            [
                'name'      => 'Tên Sản Phẩm',
                'price'     => 'Giá Tiền',
            ]);

            $inputs = ProductService::getInputProduct();
            
            if($request -> file('image')){
                
                $file            = $request->file('image');
                $filename        = date('YmdHi').$file->getClientOriginalName();  // nối với đuôi file ảnh
                $file            -> move(public_path('public/Image'), $filename);
                $inputs['image'] = 'public/Image/'.$filename;
            } 

            ProductModel::create($inputs);
            // Session::flash('success', 'Đã thêm sản phẩm thành công!');
    
            return redirect()->back()->with('success', 'Đã thêm sản phẩm thành công');  
    }

    public function edit(ProductModel $product)
    {
        //$product bây giờ là một hàng trong DB
         //dd($new);
        return view('admin.products.edit', [
            'title' => 'Sửa Sản Phẩm'
        ])->with('product', $product);
       
    }


    public function show()
    {
        $products = ProductModel::get()->toArray();
        //    dd($news);
            return view('admin.products.list', [
                'title' => 'Danh Sách Sản Phẩm',
            ])->with('products', $products);
        
    }

    public function update(Request $request, ProductModel $product)
    {
        $this->validate($request, 
            [
                'name'     => 'required',
                'price'    => 'required',
            ],
            [
                'required' => ':attribute không được để trống',
            ],
            [
                'name'     => 'Tên Sản Phẩm',
                'price'    => 'Giá Tiền',
            ]);

            
            $inputs = ProductService::getInputProduct();

            $inputs['image'] = $product->image;  // mặc định
            if($request -> file('image')){
                $file            = $request->file('image');
                $filename        = date('YmdHi').$file->getClientOriginalName();  // nối với đuôi file ảnh
                $file            -> move(public_path('public/Image'), $filename);
                $inputs['image'] = 'public/Image/'.$filename;

                if (File::exists(public_path($product->image))) {
                    File::delete(public_path($product->image));
                };
            };
            
            $product->name  = $inputs['name'];
            $product->price = $inputs['price'];
            $product->image = $inputs['image']; // error

            $product->save();
            
            return redirect()->back()->with('success', 'Đã sửa sản phẩm thành công!');
        
    }

    public function destroy($id)
    {
        try {
            $product = ProductModel::find($id);
            $product->delete();

            return response()->json(['success' => 'Đã xóa']);
        } catch(\Exception $e) {
            return response()->json(['error' => 'Xóa không thành công']);
        }
    }

}
