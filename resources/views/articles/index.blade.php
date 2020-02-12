@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
    @forelse($articles as $article)
      <div id="content">
        <div class="title">
          <h2>
            <a href="{{ $article->path() }}">{{$article->title}}</a>
            </h2>
          <span class="byline">{{$article->excerpt}}</span> 
        </div>
        <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
        <p>{{$article->body}} </p>
      </div>
      @empty
      <div>
        <h3>Não existem artigos para essa tag</h3>
      </div>
    @endforelse
	</div>
</div>
@endsection