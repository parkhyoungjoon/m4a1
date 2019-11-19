@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>새 글쓰기</h1>
        <hr/>
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {{--==> title을 key로 하는 유효성 체크 오류가 있는지 확인--}}
                {{--has-error : bootstrap의 css--}}
                <label for="title">제목</label>
                <input type="text" name ="title" id="title" value="{{ old('title') }}" class="form-control">
                {{--old('title') 도우미함수, 이전 요청의 입력값--}}
                {!! $errors->first('title', '<span class="form-error">:message</span>') !!}
                {{--$errors 체크 오류 발생시 컨트롤러가 Illuminate\Support\MessageBag--}}
                {{--객체(instance)로 $errors에 저장--}}
                {{--first(string $key=null, string $format=null):key에 지정--}}
                {{--메시지들에서 첫번째 메시지를 $format에 맞춰서 변환--}}
                <br/>
                <label for="title">본문</label>
                <textarea name ="content" id="content" row="10" value="{{ old('content') }}" class="form-control"></textarea>
                {!! $errors->first('content', '<span class="form-error">:message</span>') !!}
            </div>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary">저장하기</button>
            </div>
        </form>
    </div>
@stop