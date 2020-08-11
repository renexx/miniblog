@extends('master')
@section('title','All the posts')

@section('content')

 <section class="box post-list">
     <h1 class="box-heading text-muted">
        EDITACIA ODKAZU
     </h1>


     <form action="{{ route('post.update',['post' => $post]) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="form-group">

             <textarea name="content"
                       id="content"
                       class="form-control"

                       rows="3">{{ old('content') ?: $post->content }}</textarea>
         </div>

         <button type="submit" class="btn btn-primary">Odoslať</button>
     </form>


@endsection
