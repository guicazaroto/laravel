@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
@endsection

@section('content')
<div id="wrapper">
	<div id="page" class="container">
    <form action="/articles" method="post">
      @csrf
      <h1 class="title">New Article</h1>
      <div class="field">
        <label class="label">Title</label>
        <div class="control">
          <input class="input" type="text" name="title" id="title">
        </div>
      </div>
      <div class="field">
        <label class="label">Excerpt</label>
        <div class="control">
          <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
        </div>
      </div>
      <div class="field">
        <label class="label">Body</label>
        <div class="control">
          <textarea class="textarea" name="body" id="body"></textarea>
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