@extends('layouts.master') {{-- layouts폴더내에 master.blade.php--}}

@section('content')
<p>여는 자식 블레이드 파일의 content부분임</p>
@endsection

@section('foot')
<p>발부분</p>
@include('partials.footer')
@stop

@section('script')
    <script>
        alert('저는 자식뷰의 script 섹션입니다.');
    </script>
@endsection
