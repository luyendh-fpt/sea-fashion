<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 7/14/18
 * Time: 8:32 AM
 */

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{

    function index(){
        $foods = Product::all();
        return view('admin.product.list') -> with('foods', $foods);
    }

    function create()
    {
        return view('admin.product.form');
    }

    function store()
    {
        $product = new Product();
        $product->name = Input::get('name');
        $product->description = Input::get('description');
        $product->price = Input::get('price');
        $product->image = Input::get('thumbnail');
        $product->save();
        return redirect('/admin/product');
    }

    function edit($id){
        $product = Product::find($id);
        if($product == null){
            return 'Sản phẩm không tồn tại hoặc đã bị xoá.';
        }
        return view('admin.product.edit')->with('product', $product);
    }

    function update($id){
        $product = Product::find($id);
        if($product == null){
            return 'Sản phẩm không tồn tại hoặc đã bị xoá.';
        }
        $product->name = Input::get('name');
        $product->description = Input::get('description');
        $product->price = Input::get('price');
        $product->image = Input::get('thumbnail');
        $product->save();
        return redirect('/admin/product');
    }
}