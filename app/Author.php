<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Author extends Model{
    // authors라는 테이블이 생성됨
    public $timestamps = false;
    // create_at, update_at 필드를 사용하지 않게 설정
    protected $fillable = ['email','password'];
}
?>