@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$article->title}}</h2>
				<span class="byline">{{$article->excerpt}}</span> </div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{{$article->body}} </p>
			
			<br>

			<p style="font-size: 20px">
					@foreach($article->tags as $tag)
					<a href="{{ route('articles.index', ['tag' => $tag->name]) }}" style="margin-right:8px">
						{{$tag->name}}
					</a>
					@endforeach
			</p>

		</div>
	</div>
</div>
@endsection