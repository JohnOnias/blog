@extends('layouts.app')

@section('content')
<div class="container">
    <div class="titlebar">
        <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">
            Add Postagem
        </a>
        <h1>Mini post list</h1>
    </div>
    <hr>

    <!-- Message if a post is posted successfully! -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if (count($posts) > 0)
        @foreach ($posts as $post)
<!-- card post feed-->
    <div class="card" style="width: 18rem;">
  <img src="{{ asset('images/'.$post->image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{ $post->description}}</p>
    <?php
        $id = $post->id; 
  
   print(" <a href=" . route('/editar') . "class='btn btn-primary'>editar</a>");
      ?>
    <a href="" class="btn btn-primary">excluir</a>
  </div>
</div>
    

<!-- -->
            
        @endforeach
    @else
        <p>No Posts found</p>
    @endif
</div>
@endsection
