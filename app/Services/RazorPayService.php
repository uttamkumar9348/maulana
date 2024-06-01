<?php

namespace App\Services;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;

class RazorPayService
{
    public static function storeOrder()
    {
        try{
            $key_id = 'rzp_live_7K6wvuUTFOGlx9';
            $secret = 'Edbmp2uSnI4IE7jHx4holFxy';
            $api = new Api($key_id, $secret);
            $order = $api->order->create(
                array(
                    'amount' => 10*100, 
                    'currency' => 'INR', 
                    'notes'=> array(
                        'key1'=> 'Student Profile Order For Admission',
                        'key2'=> ''
                    )
                )
            );
            if($order && $order->id)
            {
                $studentProfile = Auth::user()->studentProfile;
                $studentProfile->update([
                    'order_id' => $order->id
                ]);
                return [
                    'success' => true,
                    'order_id' => $order->id
                ];
            }
            return [
                'success' => false,
                'message' => 'Something Went Wrong',
            ];
        }catch (Exception $e)
        {
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];

        }
    } 
}
