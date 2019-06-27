<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Subscriber;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
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
                    toastr()->error('Your email has been exsited in our system.', '', ['timeOut' => 3000]);
                } else {
                    $obj->fill($data);
                    $obj->save();
                    toastr()->success('Data has been saved successfully!', '', ['timeOut' => 3000]);
                }
            } else {
                toastr()->error('Please input a right format in your email address.', '', ['timeOut' => 3000]);
            }
            return back();

        } catch (\Exception $e) {
            \Log::debug($e->getMessage());
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
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    // Authentication passed...
                    toastr()->success('Logged in successfully!', '', ['timeOut' => 3000]);
                    return redirect('/profile');
                } else {
                    toastr()->error('Login failed.', '', ['timeOut' => 3000]);    
                }
            } else {
                toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
            }
            return back();

        } catch (\Exception $e) {
            \Log::debug($e->getMessage());
            toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
        }
    }

    public function postRegister(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, [
                'email'     => 'required|unique:users|email|max:255',
                'national_id_file' => 'nullable|file|max:4096',
                'selfie_file' => 'nullable|file|max:4096',
                'password' => 'min:6',
                'password_confirmation' => 'required_with:password|same:password|min:6'
            ]);

            if ($validator->passes()) {
                $obj = new User();
                $obj->fill($data);
                $obj->password = Hash::make($obj->password);
                $tokenKey = array_rand(User::$ethTokenList, 1);
                $obj->eth_token = User::$ethTokenList[$tokenKey];
                $obj->save();

                if($request->hasFile('selfie_file')){
                    $selfieFile = $obj->id.'_selfie_file_'.time().'.'.request()->selfie_file->getClientOriginalExtension();
                    $request->selfie_file->storeAs(public_path().'selfie_file', $selfieFile);
                    $obj->selfie_file = $selfieFile;
                    $obj->save();
                }
                if($request->hasFile('national_id_file')){
                    $nationalIDFile = $obj->id.'_national_id_file_'.time().'.'.request()->national_id_file->getClientOriginalExtension();
                    $request->national_id_file->storeAs(public_path().'national_id_file', $nationalIDFile);
                    $obj->national_id_file = $nationalIDFile;
                    $obj->save();
                }

                toastr()->success('Registered successfully!', '', ['timeOut' => 3000]);
                return redirect('/login');
            } else {
                toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
            }
            return back();

        } catch (\Exception $e) {
            \Log::debug($e->getMessage());
            toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
        }
    }

    public function smartContract()
    {
        return view('smart-contract');
    }

    public function careers()
    {
        return view('career');
    }

    public function roadMap()
    {
        return view('roap-map');
    }

    public function extraInformation()
    {
        return view('extra-information');
    }

    public function boardOfMarkers()
    {
        return view('board-marker');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function documents()
    {
        return view('documents');
    }

    public function postProfile(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, [
                'email'     => [
                    'required',
                    'email',
                    'max:255',
                    function ($attribute, $value, $fail) {
                       if (User::whereEmail($value)->whereActive(0)->count() > 0) {
                           $fail($attribute.' is already used.');
                       }
                   },
                ],
                'national_id_file' => 'nullable|file|max:4096',
                'selfie_file' => 'nullable|file|max:4096',
                // 'password' => 'min:6',
                // 'password_confirmation' => 'required_with:password|same:password|min:6'
            ]);

            if ($validator->passes()) {
                $obj = Auth::user();
                $oldPassword = $obj->password;
                $obj->fill($data);
                $obj->password = $oldPassword;
                $obj->save();

                if($request->hasFile('selfie_file')){
                    $selfieFile = $obj->id.'_selfie_file_'.time().'.'.request()->selfie_file->getClientOriginalExtension();
                    $request->selfie_file->storeAs(public_path().'selfie_file', $selfieFile);
                    $obj->selfie_file = $selfieFile;
                    $obj->save();
                }
                if($request->hasFile('national_id_file')){
                    $nationalIDFile = $obj->id.'_national_id_file_'.time().'.'.request()->national_id_file->getClientOriginalExtension();
                    $request->national_id_file->storeAs(public_path().'national_id_file', $nationalIDFile);
                    $obj->national_id_file = $nationalIDFile;
                    $obj->save();
                }
                if (!empty($data['password'])) {
                    # code...
                }

                toastr()->success('Updated successfully!', '', ['timeOut' => 3000]);
                return redirect('/profile');
            } else {
                toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
            }
            return back();

        } catch (\Exception $e) {
            \Log::debug($e->getMessage());
            toastr()->error('An error has occurred please try again later.', '', ['timeOut' => 3000]);
        }
    }

    public function profile()
    {
        $user = Auth::user();
        if ($user) {
            return view('profile', compact('user'));
        } else {
            return view('login');
        }
    }

    public function login()
    {
        if (Auth::user()) {
            return redirect('/profile');
        }
        return view('login');
    }

    public function register()
    {
        if (Auth::user()) {
            return redirect('/profile');
        }
        return view('register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
