<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;


class LoginController extends Controller
{
    public function login()
    {
        $user = new User();
        $userdate = $user->getUser();
        return view('login')->with('user', $userdate);

    }

    public function top(Request $request){

        $user = new User();
        $userdate = $user->getUser();

        //\Illuminate\Support\Facades\Log::debug($request);

        //dbから
        //\Illuminate\Support\Facades\Log::debug($userdate[0]->username);
        //入力した
        //\Illuminate\Support\Facades\Log::debug($request->username);

        //1번은 뷰에서 온 ID / 2번은 Databases 항입니다.
        if($request->username == $userdate[0]->username){

            echo "<script> alert ('Welcome'); location.href='/top';</script>";

        }else{
           echo "<script> alert ('Wrong information'); history.back();</script>";
        }

        return view('top');
    }


}





