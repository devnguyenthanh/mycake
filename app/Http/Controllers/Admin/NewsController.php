<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewModel;
use App\Providers\NewService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Str;

class NewsController extends Controller
{
    public function create()
    {
        // dd(asset(''));
        return view('admin.news.them', [
            'title' => 'Tạo Bài Viết'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'title'     => 'required',
                'sub_title' => 'required',
                'content'   => 'required',
                // 'image'     => 'mimes:jpeg,jpg,png,gif|max:10000',
            ],
            [
                'required'  => ':attribute không được để trống',
            ],
            [
                'title'     => 'Tiêu Đề',
                'sub_title' =>'Tiêu Đề Phụ',
                'content'   => 'Nội Dung Bài Viết',
            ]);


            $inputs = NewService::getInputNew();
            
            if($request->file('image')){  
                $file = $request->file('image');
                $filename = date('YmdHi').$file->getClientOriginalName();  // nối với đuôi file ảnh
                $file-> move(public_path('public/Image'), $filename);
                $inputs['image'] = 'public/Image/'.$filename;
            }

            NewModel::create($inputs);

            return redirect()->back()->with('success', 'Đã thêm bài viết thành công!');      
    }

    public function edit(NewModel $new)
    {
        //$new bây giờ là một hàng trong DB
         //dd($new);
        return view('admin.news.sua', [
            'title' => 'Sửa Bài Viết'
        ])->with('new',$new);
       
    }

    public function show()
    {
        $news =NewModel::get()->toArray();
        //    dd($news);
         return view('admin.news.list', [
            'title' => 'Danh Sách',
                 ]) -> with('news', $news);
        
    }

    public function update(Request $request, NewModel $new)
    {
        $this->validate($request, 
            [
                'title'     => 'required',
                'sub_title' => 'required',
                'content'   => 'required',
            ], 
            [
                'required'  => ':attribute không được để trống',
            ],
            [
                'title'     => 'Tiêu Đề',
                'sub_title' => 'Tiêu Đề Phụ',
                'content'   => 'Nội Dung Bài Viết',
            ]);

            if($request->file('image')){  
                $file = $request->file('image');
                $filename = date('YmdHi').$file->getClientOriginalName();  // nối với đuôi file ảnh
                $file-> move(public_path('public/Image'), $filename);
                $inputs['image'] = 'public/Image/'.$filename;
            }

            $inputs         = NewService::getInputNew();
            $new->title     = $inputs['title'];
            $new->sub_title = $inputs['sub_title'];
            $new->content   = $inputs['content'];
            $new->image   = $inputs['image'];


            $new->save(); 
            return redirect()->back()->with('success', 'Đã sửa bài viết thành công!');
    }

    public function destroy($id)
    {
        try {
            $new = NewModel::find($id);
            $new ->delete();

            return response()->json(['success' => 'Đã xóa']);
        } catch(\Exception $e) {
            return response()->json(['error' => 'Xóa không thành công']);
        }
    }



}
