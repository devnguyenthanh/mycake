<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use App\Providers\ContactService;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('admin.contacts.add', [
            'title' => 'Thêm Thông Tin Liên Hệ'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'address'   => 'required',
                'phone'     => 'required',
                'email'     => 'required',
                // 'image'     => 'mimes:jpeg,jpg,png,gif|max:10000',
            ],
            [
                'required'  => ':attribute không được để trống',
            ],
            [
                'address'      => 'Địa Chỉ Cửa Hàng',
                'phone'     => 'Số Điện Thoại',
                'email'     => 'Email Cửa Hàng',
            ]);

            $inputs = ContactService::getInputContact();
            
            if($request->file('image')){  
                $file = $request->file('image');
                $filename = date('YmdHi').$file->getClientOriginalName();  // nối với đuôi file ảnh
                $file-> move(public_path('public/Image'), $filename);
                $inputs['image'] = 'public/Image/'.$filename;
            }

            ContactModel::create($inputs);

            return redirect()->back()->with('success', 'Đã thêm liên hệ thành công!');  
    }

    
    public function show()
    {
        $contacts = ContactModel::get()->toArray();
        //    dd($contact);
            return view('admin.contacts.list', [
                'title' => 'Hiển Thị Thông Tin Liên Hệ',
            ])->with('contacts', $contacts);
        
    }

    public function edit(ContactModel $contact)
    {
        //$contact bây giờ là một hàng trong DB
         //dd($contact);
        return view('admin.contacts.edit', [
            'title' => 'Sửa Thông Tin Liên Hệ'
        ])->with('contact', $contact);
        
       
    }

    public function update(Request $request, ContactModel $contact)
    {
        $this->validate($request, 
        [
            'address'   => 'required',
            'phone'     => 'required',
            'email'     => 'required',
        //  'image'     => 'mimes:jpeg,jpg,png,gif|max:10000',
        ],
        [
            'required'  => ':attribute không được để trống',
        ],
        [
            'address'      => 'Địa Chỉ Cửa Hàng',
            'phone'     => 'Số Điện Thoại',
            'email'     => 'Email Cửa Hàng',
        ]);

            $inputs = ContactService::getInputContact();
            $contact->address  = $inputs['address'];
            $contact->phone    = $inputs['phone'];
            $contact->email    = $inputs['email'];

            $contact->save();
            
            return redirect()->back()->with('success', 'Đã sửa sản phẩm thành công!');
        
    }

    public function destroy($id)
    {
        try {
            $contact = ContactModel::find($id);
            $contact->delete();

            return response()->json(['success' => 'Đã xóa']);
        } catch(\Exception $e) {
            return response()->json(['error' => 'Xóa không thành công']);
        }
    };

    $arr = array(1, 2, 3, 4);
    public function maxArr($arr)
    {
        $max = $arr[0];
        foreach ($arr as $value) {
            if($max < $value) {
                $max = $value;
            }
            return $max;
          }
          
    }
}
