@extends('layouts.app')
@section('content')
    <div>
        <h1>포럼 글 주목</h1>
        <hr/>
        <ul>
            @forelse($articles as $article)
                <li>
                    {{$article->title}}
                        <small>
                            by {{$article->user->name}}
                        </small>
                </li>
            @empty
                <p>글이 없습니다.</p>
            @endforelse
        </ul>
    </div>
    @if($articles->count())
        <div class="text-center">
            {!! $articles->render() !!}
        </div>
    @endif
@stop