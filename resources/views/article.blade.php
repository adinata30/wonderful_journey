
@extends('master')
@section('content')
    <div class="article-content">
        <div class="article-container">
            <p class="article-title">
                {{$article->title}}
            </p>
            <p>
            Category: <a href="/category/<?=strtolower($article->category->name)?>">{{$article->category->name}}</a>
            </p>
            <p class="article-writer">
                Written by {{$article->user->name}} at <?= substr($article->created_at,0,10)?>
            </p>
            <img src="../storage/imgs/{{$article->category->id}}/{{$article->image}}"" alt="" class="article-thumbnail">
            <br>
            <p class="article-description">
                {{$article->description}}
            </p>
            <a href="{{ url()->previous() }}">
                <button> Back
            </a>
        </div>
        <div class="other-article-preview">
            <div class="other-article-writer">
                Articles written by {{$article->user->name}}
            </div>
            
            @foreach($articles as $a)
            <div class="article-preview">
                <p class="article-preview-title">
                {{$a->title}} <a href="/category/<?=strtolower($a->category->name)?>">{{$a->category->name}}</a>
                </p>
                <p class="article-preview-writer">
                Written By {{$a->user->name}}
                </p>
                <p class="article-preview-short-description">
                {{$a->description}}
                </p>
                
                <a href="/article/{{$a->id}}"><button class="article-preview-btn">
                Read Full Story
                </button></a>
            </div>
            @endforeach
        </div>
    </div>
@endsection

