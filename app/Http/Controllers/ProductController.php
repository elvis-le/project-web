<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Chat;
use App\Models\Comment;
use App\Models\Favorite_product;
use App\Models\Order;
use App\Models\Product;
use App\Models\Product_cpu;
use App\Models\Product_drive;
use App\Models\Product_ram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function product(Request $request)
    {
        $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
            ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
            ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
            ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
            ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
            ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
            ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
            ->where('products.isDelete', 0)
            ->get();
        return view('customer.product', ['products' => $products]);
    }

    public function homeProduct(Request $request)
    {
        $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
            ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
            ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
            ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
            ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
            ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
            ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
            ->where('products.isDelete', 0)
            ->get();
        return view('product', ['products' => $products]);
    }
    public function productDetail(Request $request)
    {
        $product = Product::get();
        $comments = Comment::where('product_id',$request->id ) ->get();

        $users = Comment::select('users.img', 'users.name', 'comments.value', 'comments.created_at', 'comments.evaluate')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->get();



        $productDetail = Product::where('id', $request->id)->where('isDelete', 0)->first();
        $productRam = Product_ram::leftjoin('rams', 'product_rams.ram_id', '=', 'rams.id')->where('product_id', '=', $request->id)->first();
        $productCpu = Product_cpu::leftjoin('cpus', 'product_cpus.cpu_id', '=', 'cpus.id')->where('product_id', '=', $request->id)->first();
        $productDrive = Product_drive::leftjoin('drives', 'product_drives.drive_id', '=', 'drives.id')->where('product_id', '=', $request->id)->first();
        $favoriteProduct = Favorite_product::where('product_id', '=', $request->id)->where('user_id', $request->user()->id)->where('status', 0)->pluck('product_id')->toArray();
        return view('customer.detail-product', [
            'productDetail' => $productDetail,
            'product' => $product,
            'productRam' => $productRam,
            'productCpu' => $productCpu,
            'productDrive' => $productDrive,
            'comments' => $comments,
            'users' => $users,
            'favoriteProduct' => $favoriteProduct,
        ]);
    }

    public function homeProductDetail(Request $request)
    {
        $product = Product::get();
        $comments = Comment::where('product_id',$request->id ) ->get();

        $users = Comment::select('users.img', 'users.name', 'comments.value', 'comments.created_at', 'comments.evaluate')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->get();



        $productDetail = Product::where('id', $request->id)->where('isDelete', 0)->first();
        $productRam = Product_ram::leftjoin('rams', 'product_rams.ram_id', '=', 'rams.id')->where('product_id', '=', $request->id)->first();
        $productCpu = Product_cpu::leftjoin('cpus', 'product_cpus.cpu_id', '=', 'cpus.id')->where('product_id', '=', $request->id)->first();
        $productDrive = Product_drive::leftjoin('drives', 'product_drives.drive_id', '=', 'drives.id')->where('product_id', '=', $request->id)->first();
        return view('detail-product', [
            'productDetail' => $productDetail,
            'product' => $product,
            'productRam' => $productRam,
            'productCpu' => $productCpu,
            'productDrive' => $productDrive,
            'comments' => $comments,
            'users' => $users,
        ]);
    }

    public function addBag(Request $request)
    {
        $bags = Bag::where('product_id', $request->productId)->where('user_id',  $request->user_id)->exists();
        if ($bags){
            if ($request->ajax()) {
                $output ='<input type="hidden" name="product_id_bag" id="product_id_bag" value="'. $request->productId .'">';


                return response($output);
            }
        }
        else{
            $bag = new Bag;
            $bag->user_id = $request->user_id;
            $bag->product_id = $request->productId;
            $bag->save();

            if ($request->ajax()) {
                $output ='<input type="hidden" name="product_id_bag" id="product_id_bag" value="'. $request->productId .'">';


                return response($output);
            }
        }

    }

    public function addFavorite(Request $request)
    {
        $favorites = Favorite_product::where('product_id', $request->productId)
            ->where('user_id', $request->user_id)
            ->exists();

        if ($favorites) {
            $favorite = Favorite_product::where('product_id', $request->productId)
                ->where('user_id', $request->user_id)
                ->get();

            if ($favorite[0]->status === 0) {
                Favorite_product::where('product_id', $request->productId)
                    ->where('user_id', $request->user_id)
                    ->update(['status' => 1]);

                if ($request->ajax()) {
                    $output = '<a class="tym-tym"><i class="bx bx-heart"></i></a>';
                    return response($output);
                }
            } else {
                Favorite_product::where('product_id', $request->productId)
                    ->where('user_id', $request->user_id)
                    ->update(['status' => 0]);

                if ($request->ajax()) {
                    $output = '<a class="tym-tym"><i class="fa-solid fa-heart"></i></a>';
                    return response($output);
                }
            }
        } else {
            $favorite = new Favorite_product;
            $favorite->user_id = $request->user_id;
            $favorite->product_id = $request->productId;
            $favorite->save();

            if ($request->ajax()) {
                $output = '<a class="tym-tym"><i class="fa-solid fa-heart"></i></a>';
                return response($output);
            }
        }


    }


    public function unFavorite(Request $request)
    {
        Favorite_product::where('product_id', '=', $request->productId)->where('user_id', $request->user()->id)->update(['status' => 1]);
        $favorite_products = Favorite_product::where('user_id', $request->user()->id)->where('status', 0)->join('products', 'products.id', '=', 'favorite_products.product_id')->get();
        if ($request->ajax()) {
            $output = "";
            foreach ($favorite_products as $favoriteProduct){
                $output .= '<tr>'.
                            '<td>'. $favoriteProduct->name.'</td>'.
                            '<td><img src="'. $favoriteProduct->img.'"></td>'.
                            '<td>'.$favoriteProduct->detail.'</td>'.
                            '<td>'.$favoriteProduct->price.'</td>'.
                            '<td><form>
                                    <button type="button" value="'.$favoriteProduct->id.'" name="product_id" id="un_favorite_product" style="border: none; background-color: inherit;"><i class="fa-solid fa-heart"></i></button>
                                </form>
                                </td>'.
                        '</tr>';
            }
            return response($output);
        }
    }

    public function Buy(Request $request)
    {
        $ram = Product_ram::where('product_id', '=', $request->product_id);
        $cpu = Product_cpu::where('product_id', '=', $request->product_id);
        $drive = Product_drive::where('product_id', '=', $request->product_id);
        $order = new Order;
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->ram_id = $ram->ram_id;
        $order->cpu_id = $cpu->cpu_id;
        $order->drive_id = $drive->drive_id;
        $order->save();

        $product = Product::get();
        $productDetail = Product::where('id', $request->product_id)->where('isDelete', 0)->first();
        return view('customer.detail-product', ['productDetail' => $productDetail], ['product' => $product]);
    }

    public function Comment(Request $request)
    {
        $comments = Comment::where('user_id', $request->userId)->where('product_id', $request->productId)->exists();
        if ($comments){

        }
        else{
            $comment = new Comment;
            $comment->user_id = $request->userId;
            $comment->product_id = $request->productId;
            $comment->value = $request->comment;
            $comment->evaluate = $request->rate;
            $comment->save();

            if ($request->ajax()) {
                $users = Comment::select('users.img', 'users.name', 'comments.value', 'comments.created_at', 'comments.evaluate')
                    ->join('users', 'comments.user_id', '=', 'users.id')
                    ->get();

                $output = '';
                foreach ($users as $user) {
                    $output .= '<div class="flex-user">'.
                        '<span class="image-my-cart-0202"><img src="'.$user->img.'" alt="photo" class="d-block">'.
                        '<p class="name-cart">'.$user->name.'</p></span>'.
                        '</div>'.

                        '<div class="rates">'.
                        '<input type="radio" id="star5" name="'.$user->name.'" value="5" ' . ($user->evaluate === 5 ? 'checked' : '') . '>'.
                        '<label for="star5" title="text"></label>'.
                        '<input type="radio" id="star4" name="'.$user->name.'" value="4" ' . ($user->evaluate === 4 ? 'checked' : '') . '>'.
                        '<label for="star4" title="text"></label>'.
                        '<input type="radio" id="star3" name="'.$user->name.'" value="3" ' . ($user->evaluate === 3 ? 'checked' : '') . '>'.
                        '<label for="star3" title="text"></label>'.
                        '<input type="radio" id="star2" name="'.$user->name.'" value="2" ' . ($user->evaluate === 2 ? 'checked' : '') . '>'.
                        '<label for="star2" title="text"></label>'.
                        '<input type="radio" id="star1" name="'.$user->name.'" value="1" ' . ($user->evaluate === 1 ? 'checked' : '') . '>'.
                        '<label for="star1" title="text"></label>'.
                        '</div>'.

                        '<div class="description">'.$user->value.'</div>'.

                        '<div class="post-info">'.
                        '<div class="cr">'.
                        '<dd class="dd">'.$user->created_at.'</dd>'.
                        '</div>'.
                        '</div>';
                }
                return response($output);
            }
        }

    }

    public function buyProduct(Request $request)
    {
        $productDetail = Product::where('id', $request->product_id)->where('isDelete', 0)->first();
        return view('customer.buy-item-product', [
            'productDetail' => $productDetail,
        ]);
    }

    public function amount(Request $request)
    {
        if ($request->ajax()) {
            $output = $request->productPrice * $request->amount;
            return response()->json($output);
        }
    }

    public function order(Request $request)
    {
        $total = $request->total * $request->amount;
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->product_id = $request->productId;
        $order->address = $request->address;
        $order->number = $request->amount;
        $order->payment = $request->payment;
        $order->total = $total;
        $order->save();
    }

    public function orderDetail(Request $request)
    {
        $orders = Order::where('user_id', $request->user()->id)->join('products', 'products.id', '=', 'orders.product_id')->get();
        return view('customer.order', [
            'orders' => $orders,
        ]);
    }


    public function findProduct(Request $request)
    {
        if ($request->ram === 'all' && $request->cpu === 'all' && $request->drive === 'all')
        {
            $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
                ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
                ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
                ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
                ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
                ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
                ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
                ->where('products.isDelete', 0)
                ->get();
        }
        elseif ($request->ram === 'all' &&  $request->cpu === 'all')
        {
            $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
                ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
                ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
                ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
                ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
                ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
                ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
                ->where('products.isDelete', 0)
                ->where('drives.name', $request->drive)
                ->get();
        }
        elseif ($request->cpu === 'all' &&   $request->drive === 'all')
        {
            $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
                ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
                ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
                ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
                ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
                ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
                ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
                ->where('products.isDelete', 0)
                ->where('rams.name', $request->ram)
                ->get();
        }
        elseif ($request->ram === 'all' && $request->drive === 'all')
        {
            $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
                ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
                ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
                ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
                ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
                ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
                ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
                ->where('products.isDelete', 0)
                ->where('cpus.name', $request->cpu)
                ->get();
        }
        elseif ($request->ram === 'all')
        {
            $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
                ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
                ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
                ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
                ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
                ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
                ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
                ->where('products.isDelete', 0)
                ->where('cpus.name', $request->cpu)
                ->where('drives.name', $request->drive)
                ->get();
        }
        elseif ($request->cpu === 'all')
        {
            $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
                ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
                ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
                ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
                ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
                ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
                ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
                ->where('products.isDelete', 0)
                ->where('rams.name', $request->ram)
                ->where('drives.name', $request->drive)
                ->get();
        }
        else
        {
            $products = Product::select('products.id as id', 'products.name as name', 'products.price as price', 'products.img as img', 'rams.name as ram', 'cpus.name as cpu', 'drives.name as drive')
                ->join('product_rams', 'product_rams.product_id', '=' , 'products.id')
                ->join('rams', 'rams.id', '=', 'product_rams.ram_id')
                ->join('product_cpus', 'product_cpus.product_id', '=' , 'products.id')
                ->join('cpus', 'cpus.id', '=', 'product_cpus.cpu_id')
                ->join('product_drives', 'product_drives.product_id', '=' , 'products.id')
                ->join('drives', 'drives.id', '=', 'product_drives.drive_id')
                ->where('products.isDelete', 0)
                ->where('rams.name', $request->ram)
                ->where('cpus.name', $request->cpu)
                ->get();
        }

        if ($request->ajax()){
            $output = '';
            foreach ($products as $product)
            {
                $output .= '<div class="main-sort-0101 col-sm-3">'.
                        '<div class="tab-0404">'.
                            '<div class="tab-image">'.
                                '<a href="#" ><img src="'. $product->img .'" alt="Asus tuf" class="d-block" style="width:100%"> </a>'.
                            '</div>'.

                            '<div class="name-product">'.
                                '<p> <a href="#">'. $product->name .'</a> </p>'.
                            '</div>'.

                            '<div class="detail-product">'.
                                '<li>Ram:'. $product->ram .'</li>'.
                                '<li>CPU:'. $product->cpu .'</li>'.
                                '<li>Drive:'. $product->drive .'</li>'.
                            '</div>'.

                            '<div class="buy-product">'.
                                '<form method="get" action="/buy-product">'.
                                    '<input type="hidden" value="'. $product->id .'" name="product_id">'.
                                    '<input type="hidden" value="'. $request->user()->id .'" name="user_id">'.
                                    '<button type="submit" > Buy Now </button>'.
                                '</form>'.
                           ' </div>'.

                        '</div>'.
                    '</div>';
            }
            return response($output);
        }
    }


}
