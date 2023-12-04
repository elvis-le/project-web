<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use App\Models\Category;
use App\Models\Chat;
use App\Models\Cpu;
use App\Models\Drive;
use App\Models\Product_category;
use App\Models\Product_cpu;
use App\Models\Product_drive;
use App\Models\Product_ram;
use App\Models\Ram;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductAddRequest;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    public function home()
    {
        $chat = Chat::get();
        $id_users = Chat::select('user_id')
            ->distinct('user_id')
            ->get();
        foreach ($id_users as $id_user) {
            $users = User::where('id', $id_user->user_id)->get();
        }
        return view('admin.home', [
            'chat' => $chat,
            'users' => $users,
        ]);
    }

    public function product()
    {
        $chat = Chat::get();
        $id_users = Chat::select('user_id')
            ->distinct('user_id')
            ->get();

        $product = Product::where('isDelete', '0')->get();
        return view('admin.product', [
            'product' => $product,
            'chat' => $chat,
            ]);
    }

    public function customer(Request $request): View
    {
        $chat = Chat::get();
        $id_users = Chat::select('user_id')
            ->distinct('user_id')
            ->get();

        $user = User::where('isAdmin', '0')->get();
        return view('admin.customer', [
            'user' => $user,
            'chat' => $chat,
        ]);
    }

    public function productAdd()
    {
        $rams = Ram::get();
        $cpus = Cpu::get();
        $drives = Drive::get();
        $categories = Category::get();
        $chat = Chat::get();
        $id_users = Chat::select('user_id')
            ->distinct('user_id')
            ->get();

        return view('admin.product-add', [
            'categories' => $categories,
            'rams' => $rams,
            'cpus' => $cpus,
            'drives' => $drives,
            'chat' => $chat,
            ]);
    }


    public function save(ProductAddRequest $request): RedirectResponse
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $url = Storage::url($path);
            $product->img = $url;
        }
        $product->quantity = $request->quantity;
        $product->detail = $request->detail;
        $product->save();


            $ram = Ram::select('id')->where('name', $request->ram)->first();

                $productRam = new Product_ram;
                $productRam->product_id = $product->id;
                $productRam->ram_id = $ram->id;
                $productRam->save();



            $cpu = Cpu::select('id')->where('name', $request->cpu)->first();

                $productCpu = new Product_cpu;
                $productCpu->product_id = $product->id;
                $productCpu->cpu_id = $cpu->id;
                $productCpu->save();


            $drive = Drive::select('id')->where('name', $request->drive)->first();

                $productDrive = new Product_drive;
                $productDrive->product_id = $product->id;
                $productDrive->drive_id = $drive->id;
                $productDrive->save();


        $type = Category::select('id')->where('name', $request->category)->first();
        $productCategory = new Product_category;
        $productCategory->product_id = $product->id;
        $productCategory->category_id = $type->id;
        $productCategory->save();

        return Redirect::route('admin.product');
    }

    public function edit(Request $request): View
    {
        $product = DB::table('products')->where('id', $request->id)->first();
        $rams = Product_ram::where('product_id', $request->id)->join('rams', 'product_rams.ram_id', '=', 'rams.id')->pluck('name')->toArray();
        $cpus = Product_cpu::where('product_id', $request->id)->join('cpus', 'product_cpus.cpu_id', '=', 'cpus.id')->pluck('name')->toArray();
        $drives = Product_drive::where('product_id', $request->id)->join('drives', 'product_drives.drive_id', '=', 'drives.id')->pluck('name')->toArray();
        $category = Product_category::where('product_id', $request->id)->join('categories', 'product_categories.category_id', '=', 'categories.id')->first('name');
        $getrams = Ram::get();
        $getcpus = Cpu::get();
        $getdrives = Drive::get();
        $getcategories = Category::get();
        $chat = Chat::get();


        return view('admin.product-edit', [
            'product' => $product,
            'rams' => $rams,
            'cpus' => $cpus,
            'drives' => $drives,
            'categorie' => $category,
            'getcategories' => $getcategories,
            'getrams' => $getrams,
            'getcpus' => $getcpus,
            'getdrives' => $getdrives,
            'chat' => $chat,
        ]);
    }

    public function editSave(ProductAddRequest $request): RedirectResponse{
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $url = Storage::url($path);
            $product->img = $url;
        }
        $product->quantity = $request->quantity;
        $product->detail = $request->detail;
        $product->save();

        Product_ram::where('product_id', '=', $product->id)->delete();
        Product_cpu::where('product_id', '=', $product->id)->delete();
        Product_drive::where('product_id', '=', $product->id)->delete();
        Product_category::where('product_id', '=', $product->id)->delete();

        $ram = Ram::select('id')->where('name', $request->ram)->first();

        $productRam = new Product_ram;
        $productRam->product_id = $product->id;
        $productRam->ram_id = $ram->id;
        $productRam->save();



        $cpu = Cpu::select('id')->where('name', $request->cpu)->first();

        $productCpu = new Product_cpu;
        $productCpu->product_id = $product->id;
        $productCpu->cpu_id = $cpu->id;
        $productCpu->save();


        $drive = Drive::select('id')->where('name', $request->drive)->first();

        $productDrive = new Product_drive;
        $productDrive->product_id = $product->id;
        $productDrive->drive_id = $drive->id;
        $productDrive->save();

        $type = Category::select('id')->where('name', $request->category)->first();
        $productCategory = new Product_category;
        $productCategory->product_id = $product->id;
        $productCategory->category_id = $type->id;
        $productCategory->save();

        return Redirect::route('admin.product');
    }

    public function delete(ProductAddRequest $request): RedirectResponse{
        Product::where('id', $request->id)->update(['isDelete'=>1]);
        return Redirect::route('admin.product');
    }

//    public function search(Request $request)
//    {
//        if ($request->ajax())
//        {
//            $output = "";
//            $products = DB::table('products')
//                ->where('name', 'LIKE', '%'.$request->search.'%')
//                ->get();
//            if ($products)
//            {
//                foreach ($products as $key)
//                {
//                    $output.='<tr>'.
//                        '<td>'.$key->name.'</td>'.
//                        '<td>'.'<img src="' . asset($key->img) . '">'.'</td>'.
//                        '<td>'.$key->detail.'</td>'.
//                        '<td>'.$key->price.'</td>'.
//                        '<td><form method="get" action="/admin/productEdit">
//                            <button type="submit" name="id" value="'.$key->id.'">Edit</button>
//                        </form></td>'.
//                        '</tr>';
//                }
//
//                return Response($output);
//            }
//        }
//    }
}
