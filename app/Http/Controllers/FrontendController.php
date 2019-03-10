<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    // protected $repository;

    // public function __construct(CouponRepository $repository)
    // {
    //     $this->repository = $repository;
    // }
    
    public function subscriber(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make([
                'email'     => $data['email']
            ], [
                'email'     => 'required|email'
            ]);

            if ($validator->passes()) {
                $response = response()->json([
                    'status' => true,
                    'data' => [
                        'message' => 'OK'
                    ],
                ]);
                // $coupon = $this->repository->findByCouponCode($data['coupon_code']);
                // if (!empty($coupon)) {
                //     $couponOrder = new CouponOrder();
                //     $couponOrder->fill($data);
                //     $couponOrder['coupon_id']   = $coupon->id;
                //     $couponOrder->save();

                //     if ($data['customer_id']) {
                //         foreach ($coupon->users as $couponUser) {
                //             if ($couponUser['customer_id'] == $data['customer_id']) {
                //                 $couponUser->updateNumberOfUseage();
                //                 break;
                //             }
                //         }
                //     }
                //     // Update total usage coupon
                //     $coupon->max_number_of_coupon -= $coupon->max_number_of_coupon > 0 ? 1 : 0;
                //     $coupon->update(['max_number_of_coupon']);

                //     $response = response()->json([
                //         'status' => true,
                //         'data' => [
                //             'message' => 'OK'
                //         ],
                //     ]);
                // } else {
                //     // $response = response()->json([
                //     //     'status' => false,
                //     //     'error' => [
                //     //         'code' => "CP-12",
                //     //         'message' => "Coupon not found."
                //     //     ],
                //     // ]);
                // }
            } else {
                // $response = response()->json([
                //     'status' => false,
                //     'error' => [
                //         'code' => "CP-15",
                //         'message' => "Coupon failed validation."
                //     ],
                // ]);
            }
            // return $response;
        } catch (\Exception $e) {
            report($e);
            // return response()->json([
            //     'status'    => false,
            //     'error'     => [
            //         'code'      => "CP-01",
            //         'message'   => $e->getMessage()
            //     ],
            // ]);
        }
    }

    public function postLogin(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make([
                'email'     => $data['email']
            ], [
                'email'     => 'required|email'
            ]);

            if ($validator->passes()) {
                $response = response()->json([
                    'status' => true,
                    'data' => [
                        'message' => 'OK'
                    ],
                ]);
            } else {
            }
        } catch (\Exception $e) {
            report($e);
        }
    }

    public function postRegister(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make([
                'email'     => $data['email']
            ], [
                'email'     => 'required|email'
            ]);

            if ($validator->passes()) {
                $response = response()->json([
                    'status' => true,
                    'data' => [
                        'message' => 'OK'
                    ],
                ]);
            } else {
            }
        } catch (\Exception $e) {
            report($e);
        }
    }
}
