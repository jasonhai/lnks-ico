<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Subscriber;

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
                $obj = new Subscriber();
                if ($obj->findByEmail($data['email'])) {
                    toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
                } else {
                    $obj->fill($data);
                    $obj->save();
                    toastr()->success('Data has been saved successfully!', '', ['timeOut' => 3000]);
                }
            } else {
                toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
            }
            return back();

        } catch (\Exception $e) {
            report($e);
            toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
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
                toastr()->success('Logged in successfully!', '', ['timeOut' => 3000]);
            } else {
                toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
            }
            return back();

        } catch (\Exception $e) {
            report($e);
            toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
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
                toastr()->success('Logged in successfully!', '', ['timeOut' => 3000]);
            } else {
                toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
            }
            return back();

        } catch (\Exception $e) {
            report($e);
            toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
        }
    }
}
