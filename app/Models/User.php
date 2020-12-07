<?php

namespace App\Models;


use http\Env\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//암호화할때 추가하는 것
use Illuminate\Support\Facades\Hash;



class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // 비밀번호를 표시하
    protected $hidden = [
        //'password',
        'id',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    function getUser(){
        //테이블의 모든 항목을 불러옵니다.
        return $this->get();
        //괄호안의 원하는 항목을 지정하여 가져온
        //return $this->where('id', 1)->get();
    }

    //모델의 컨트롤에서의 변수를 ()안에 지정합니다.
    public function setUser($username, $password){

        //Hash::check로 암호화를 매칭할수있다.
        //컨트롤러에서 받아온 변수를 이 모델의 변수로 지정합니다.
        $this->username = $username;
        //암호화 시작 아래의 실행
        $password=Hash::make($password);
        //컨트롤러에서 받아온 변수를 이 모델의 변수로 지정합니다.
        $this->password = $password;
        //DB에 저장합니다.
        $this->save();

    }


}
