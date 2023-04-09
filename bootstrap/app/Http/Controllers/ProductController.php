<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\Cart;
use App\Models\User;
Use App\Models\Bill;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;




class ProductController extends Controller
{
    public function getAllProduct()
    {
        $product = Product::All();
        return view('product', compact("product"));
    }


    public function getAllAdminProduct()
    {

        $product = DB::table('product')
            // ->join('category', 'product.category', '=', 'category.categoryid')
            // ->join('color', 'product.color', '=', 'color.colorid')
            // ->select('product.*','category.category','color.colorname')
            ->get();
        return view('admin.admin-product', compact("product"));
    }

    public function addProduct(Request $request)
    {
        $product = new product;
        $product->productid = $request->productid;
        $product->productname = $request->productname;
        $product->price = $request->price;
        $product->categoryid = $request->categoryid;
        $product->colorid = $request->colorid;
        $product->sizeid = $request->sizeid;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('admin-product');
    }
    public function DeleteProduct($productid)
    {
        $product = Product::find($productid);
        $product->delete();
        return back();
    }

    public function Detail($productid)
    {
        $data = Product::find($productid);
        $size = Size::all();
        // $color = DB::table('color')
        //     ->join('product', 'product.color', '=', 'color.colorid')
        //     ->select('color.*')
        //     ->where('product.productid', $productid)
        //     ->get();
        $color = Color::all();
        $category = DB::table('category')
            ->join('product', 'product.category', '=', 'category.categoryid')
            ->select('category.*')
            ->where('product.productid', $productid)
            ->get();


        return view('detail', compact('data', 'size', 'color','category'));
        // return view('detail',compact('size','color'), ['data' => $data]);

    }

    public function updateProduct(Request $request, $productid)
    {
        $product = Product::find($productid);
        $product->productid = $request->productid;
        $product->productname = $request->productname;
        $product->price = $request->price;
        $product->colorid = $request->colorid;
        $product->image = $request->image;
        $product->categoryid = $request->categoryid;
        $product->description = $request->description;
      
        $product->save();
        return back();
    }

    public function getUpdateProduct($productid)
    {
        $data['product'] = Product::find($productid);
        return view('admin.admin-updateProduct',$data);
    }



    public function getCart(Request $request)
    {
        $data = new Cart;
        $data->username = Auth()->user()->username;
        $data->product = $request->productid;
        $data->quantity = $value ?? '1';
        $data->size = $request->size;
        $data->save();
        $alertadd = 'Add to cart successfully!';
        return back()->with('alertadd', $alertadd);
    }

    public function getAllCart()
    {
        $cart = DB::table('cart')
            ->join('product', 'cart.product', '=', 'product.productid')
            ->join('users', 'cart.username', '=', 'users.username')
            ->join('size', 'cart.size', '=', 'size.sizeid')
            ->select('cart.*','product.*','size.size','users.username')
            ->where('cart.username', Auth()->user()->username)
            ->get();

        if (Auth()->user()->role == '1') {
            $voucher = 0;
        }
        elseif(Auth()->user()->role == '4')
        {
            $voucher = 5;
        }
        elseif(Auth()->user()->role == '3')
        {
            $voucher = 10;
        } else
        {
            $voucher = 100;
        }
        $total = 0;
        foreach ($cart as $key => $value) {
            $total += ($value->price * $value->quantity) ;
        }
        $total -=  $voucher;
        return view('cart', ['cart' => $cart, 'total' => $total]);
    }


    public function DeleteCart($cartid)
    {
        $data = Cart::find($cartid);
        $data->delete();
        return back();
    }




}


