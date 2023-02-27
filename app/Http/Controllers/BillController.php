<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillDetails;
use App\Models\Product;
use App\Models\Product_bill;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::all();
        $user =  User::all();
        $billDetails = BillDetails ::all();


        $OverAllPrice=0;

        $billDetails = Bill::join('users' , 'users.id' ,'=','bills.user_id')->
        join('bill_details' , 'bill_details.bill_id' , '=' , 'bills.id')->
        join('products', 'products.id' , '=' ,'bill_details.product_id')->
        select('users.name as user_name' , 'bill_details.*' , 'bills.id as bill_id' , 'products.name as product_name' , 'products.price')->
        where('bills.id' , session("bill_id"))->get();

        $OverAllPrice=0;
        foreach($billDetails as $billdetail){
            $OverAllPrice+=$billdetail->total;
        }


        return view('admin/bill/index', compact( 'user', 'products','OverAllPrice','billDetails'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $products =  Product::all();
        $allproducts = Product::select('id' , 'name')->get();
        $users = User::select('id' , 'name')->get();

        return view('admin.bill.create',compact('products','users' , 'allproducts'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $bill = new Bill;
        $bill->user_id = $request->user_id;

        $bill->save();

        $data = json_decode($request->billDetails);
        foreach($data as $y){
            $price = Product::find($y->product_id)->price;
            $total= $price * $y->quantity;

                 BillDetails::Create([
                    'bill_id'=> $bill->id,
                    'product_id'=> $y->product_id,
                    'product_price'=>$price,
                    'quantity'=>$y->quantity,
                    'total'=>$total
             ]);
            }

        return redirect('admin/bill' )->with(["bill_id"=>$bill->id]);

        }



    /**
     * Display the specified resour
     */



    }