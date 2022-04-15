<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

trait CartTrait
{

    /**
     * @param Request $request
     * @return $this|false|string
     */

     public function CartData()
     {
         $data = Session::get('cart');
         return $data;
     }

     public function getCartTotal()
     {
         $total = 0;
         $data = Session::get('cart');
         if(isset($data) && !empty($data)):
           foreach ($data as $value) {
               foreach ($value as $val) {
                    $total += $val['quantity'];
               }

           }
           return $total;
         endif;
     }
}
