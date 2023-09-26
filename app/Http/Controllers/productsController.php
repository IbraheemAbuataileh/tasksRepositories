<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\merchants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class productsController extends Controller
{
    
    public function getLeastOrderedProducts(Request $request)
    {
        //from 1694003425000

        // $to  1695731425000


        // $dateString = "2023-09-06 12:30:25";
        // $date = Carbon::parse($dateString);

        // $timestampInMilliseconds = $date->timestamp * 1000;

        // echo $timestampInMilliseconds;
        // die();


        $from = $request->from;
        $to = $request->to;
        $day = $request->day;
        $day_number  = $this->_getDayNumber($day);
       
        if( $day_number == 0){
            die('wrong day');
        }

        $fromDate = Carbon::createFromTimestampMs($from);
        $toDate = Carbon::createFromTimestampMs($to)->endOfDay();
       // dd($toDate);
        // dd($toDate, $toDate);
        // $products =  DB::table('products');

        $products = DB::table('orders')
            ->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')
            ->Join('merchants', 'orders.user_id', '=', 'merchants.id')
            ->whereBetween('orders.created_at', [$fromDate, $toDate])
            ->where('orders.day', $day_number)
            ->select('orders.id','orders.*','merchants.merchant_name', DB::raw('SUM(order_items.quantity) as total_ordered'))
            ->groupBy('orders.id')
            ->orderBy('total_ordered', 'asc')
            ->get();    

            return view('products', ['products' => $products]);
 
       //echo '<>';
      //  return response()->json($products);
       
    }
    private function _getDayNumber($day){
        $day_number = 0;
        switch ($day) {
            case "sunday":
                $day_number = 1;
              break;
            case "monday":
                $day_number = 2;
              break;
            case "tuesday":
                $day_number = 3;
              break;
            case "wendnesday":
                $day_number = 4;
              break;
            case "Thursday":
                $day_number = 5;
              break;
            case "friday":
                $day_number = 6;
              break;
            case "Saturday":
                $day_number = 7;
              break;
        }
        return $day_number;
    }
}


