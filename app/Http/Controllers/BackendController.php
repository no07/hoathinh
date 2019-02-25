<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use function PHPSTORM_META\elementType;

class BackendController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('manager.login');
        } else {
            if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
                return Redirect::route('manager::dashboard');
            } else {
                return Redirect::route('manager::login')->with('notice', 'Sai mật khẩu hoặc tài khoản');
            }
        }
    }

    public function dashboard(Request $request)
    {
        if ($request->isMethod('get')) {
            if ($request->has('del')) {
                Slide::where('id', $request->get('del'))->delete();
                return Redirect::route('manager::dashboard')->with('notice', 'Xóa hình ảnh slide thành công');
            }
            $slides = Slide::all();
            return view('manager.slider', ['slides' => $slides]);
        } else {
            $photoName = time() . '.' . $request->slide->getClientOriginalExtension();
            $request->slide->move(public_path('slides'), $photoName);
            if (Slide::updateOrCreate(['image' => $photoName], [
                'name' => $photoName,
                'image' => $photoName,
                'order' => $request->order
            ])) {
                return Redirect::route('manager::dashboard')->with('notice', 'Thêm hình ảnh slide thành công');
            } else {
                return Redirect::route('manager::dashboard')->with('notice', 'Có lỗi xảy ra!');
            }

        }
    }

    public function category(Request $request)
    {
        if ($request->isMethod('get')) {

            if ($request->has('del')) {
                Category::where('id', $request->get('del'))->delete();
                return Redirect::route('manager::category')->with('notice', 'Xóa danh mục sản phẩm thành công');
            }
            if ($request->has('edit')) {
                return view('manager.category', ['categories' => Category::all(), 'category' => Category::find($request->get('edit'))]);
            }
            $categories = Category::all();
            return view('manager.category', ['categories' => $categories]);
        } else {

            if (Category::updateOrCreate(['id' => $request->get('id')], [
                'name' => $request->get('name'),
                'order' => $request->order
            ])) {
                return Redirect::route('manager::category')->with('notice', 'Thêm danh mục sản phẩm thành công');
            } else {
                return Redirect::route('manager::category')->with('notice', 'Có lỗi xảy ra!');
            }

        }
    }

    public function product(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('manager.product.index', ['products' => Product::all()]);
        }
    }

    public function productUpdate(Request $request)
    {
        if ($request->isMethod('get')) {
            if($request->has('edit')){
                return view('manager.product.update', ['product' => Product::find(($request->get('edit')))]);

            }
            return view('manager.product.update');
        }else{
            $arr = [
                'name' => $request->get('name'),
                'pack' => $request->get('pack'),
                'description' => $request->get('description'),
                'content' => $request->get('content'),
                'category_id' => $request->get('category_id'),
                'isFeatured' => $request->has('featured') ? 1 : 0,
            ];
            if($request->hasFile('image')){
                $photoName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('products'), $photoName);
                $arr['image'] = $photoName;
            }
            if (Product::updateOrCreate(['id' => $request->has('id')? $request->get('id') : ''],$arr)) {
                return Redirect::route('manager::product')->with('notice', 'Thêm danh mục sản phẩm thành công');
            } else {
                return Redirect::route('manager::product')->with('notice', 'Có lỗi xảy ra!');
            }
        }
    }

}