@extends('master')

@section('content')
    <p class="category-title text-info">
        {{$category->name}}
    </p>
<div class="article-preview-container">
    @foreach($category->articles as $article)
            <div class="article-preview">
                <p class="article-preview-title">
                {{$article->title}}
                </p>
                <p class="article-preview-writer">
                Written By {{$article->user->name}}
                </p>
                <p class="article-preview-short-description">
                {{$article->description}}
                </p>
                
                <a href="/article/{{$article->id}}"><button class="article-preview-btn">
                Read Full Story
                </button></a>
            </div>
        @endforeach
    </div>
@endsection