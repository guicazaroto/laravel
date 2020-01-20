@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
<div id="wrapper">
	<div id="page" class="container">
    <form action="/articles/{{$article->id}}" method="post">
      @csrf
      @method('put')
      <h1 class="title">Edit Article</h1>
      <div class="field">
        <label class="label">Title</label>
        <div class="control">
          <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
        </div>
      </div>
      <div class="field">
        <label class="label">Excerpt</label>
        <div class="control">
          <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
        </div>
      </div>
      <div class="field">
        <label class="label">Body</label>
        <div class="control">
          <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
        </div>
      </div>
      <div class="field">
        <div class="control">
          <button class="button is-link">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection