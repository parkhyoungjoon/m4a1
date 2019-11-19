<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});
//Route::pattern("param",'[0-9a-zA-Z]{3}');
Route::get('/{param?}', function ($param='디폴트값') {
    return $param;
})->where("param",'[0-9a-zA-Z]{3}');;

Route::get(
    '/',
    ['as' => 'home',
    function (){
        return '제이름은 홈입니다.';
    }
    ]
);

Route::get('/home',function(){
    echo 'test3etsest';
    return redirect(route('home'));    //laravel의 도우미 함수
}); 

Route::get('/',function(){
    return view('errors/503');
    //resources/views/errors/503.blade.php 
});


Route::get('/',function(){
    $fruits = ['사과','배','바나나','포도','멜론'];
    return view('test',[
        'name'=>'김영진',
        'greeting'=>'안녕이요',
        'items'=>$fruits
    ]);
});

Route::get('/layoutTest',function(){
    return phpinfo();
});

Route::get('auth/login',function (){
    $credentials = [
        'email'=>'wdj1@yju.ac.kr',
        'password'=>'password' //암호화 필요 ex) bcrypt
    ];

    if(! auth()->attempt($credentials)){
        return '로그인 정보가 정확하지 않습니다.';
    }
    /*
        auth : 도우미함수, 로그인처리 객체 반환
        attemp() : 도우미메서드, 로그인 시도
        성공 : true, 실패 : false 반환
    
    return redirect('protected');
});
Route::get('protected',function(){
    dump(session()->all());
    // session : 로그인 사용자의 세션정보 객체 반환
    // all : 로그인한 사용자의 정보객체 반환
    if(! auth()->check()){
        return '누구세요?';
    }
    return '어서 오세요'.auth()->user()->name;
    // 로그인 사용자의 users 객체 전부
});
Route::get('auth/logout',function(){
    auth()->logout(); // 로그아웃
    return '또 봐요.';
});

Route::resource('/wel','WelcomeController');
Route::get('auth/login',function (){
    $credentials = [
        'email'=>'wdj1@yju.ac.kr',
        'password'=>'password' //암호화 필요 ex) bcrypt
    ];

    if(! auth()->attempt($credentials)){
        return '로그인 정보가 정확하지 않습니다.';
    }

        auth : 도우미함수, 로그인처리 객체 반환
        attemp() : 도우미메서드, 로그인 시도
        성공 : true, 실패 : false 반환


    return redirect('protected');
});
Route::get('protected',
[
    'middleware'=>'auth',
    'users'=>function(){
        dump(session()->all());
        return '어서 오세요'.auth()->user()->name;
    }
]);
Route::get('auth/logout',function(){
    auth()->logout(); // 로그아웃
    return '또 봐요.';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('articles','ArticlesController');
DB::listen(function ($query ){
    var_dump($query->sql);
});
Route::get(
    'reqjson',
    function(){
         //$data = ['name'=>'김영진','gender'=>'남'];  //연관배열
         $data = \App\Article::get();
         return response()->json($data);
    }
);