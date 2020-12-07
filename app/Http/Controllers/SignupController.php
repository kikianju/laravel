<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{

    public function signupdone(Request $request){
        //패스워드의 동일하지 않을시에 비즈니스 로직처
        if($request->password1 != $request->password2){
        // signup의 뷰로 지정합니다. @if(isset($error)){{$error}} 로 뷰에 지정하여 뷰에 표시합니다. with('여기부분에 설정했음', (에러메세지설정))
            return view('signup')->with('error','not the same password');
        }

        //모델에 그릇만들기
        $user = new User();
        //생성한 모델의 그릇에 모델의 $user->setUser로 클래스를 사용하여 $user의 넣는다.
        $user = $user->setUser($request->username, $request->password1);
        //\Illuminate\Support\Facades\Log::debug($user);
        return view('signupdone');
    }
    public function showSignup(){

        return view('signup');
    }

}
