
@extends('master')


@section('content')
    <div class="article-preview-container">
        @foreach($articles as $article)
            <div class="article-preview">
                <p class="article-preview-title">
                {{$article->title}} <a href="category/<?=strtolower($article->category->name)?>">{{$article->category->name}}</a>
                </p>
                <p class="article-preview-writer">
                Written By {{$article->user->name}}
                </p>
                <p class="article-preview-short-description">
                {{$article->description}}
                </p>
                
                <a href="article/{{$article->id}}"><button class="article-preview-btn">
                Read Full Story
                </button></a>
            </div>
        @endforeach
    </div>
@endsection
