<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('test2');
    }
    public function create(){
        return __METHOD__.'은 컬렉션 생성';
    }
    public function show($id){
        return __METHOD__."{$id}번째 데이터 조회 기능 구현";
    }
    public function edit(){
        return __METHOD__."{$id}번째 데이터 수정폼 조회 기  능 구현";
    }
    public function destroy($id){
        return __METHOD__."{$id}번째 데이터 삭제 기능 구현";
    }
    public function update(Request $request, $id){
        return __METHOD__."{$id}번째 데이터 수정 기능 구현";
    }
    public function requset(Request $requst){
        return __METHOD__."{$request}반환";
    }
}
