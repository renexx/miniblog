@extends('master')
@section('title','All the posts')

@section('content')

 <section class="box post-list">
     <h1 class="box-heading text-muted">
         This is a blog
     </h1>
     <h1>Tvorba článku</h1>

     <form action="{{ route('post.store') }}" method="POST">
         @csrf
 
        
 
        
 
 
         <div class="form-group">
             <label for="content">Obsah článku</label>
             <textarea name="content" id="content" class="form-control" rows="8">{{ old('content') }}</textarea>
         </div>
 
         <button type="submit" class="btn btn-primary">Vytvořit článek</button>
     </form>

     @forelse($posts as $post)

        <article id="post-{{$post->id }}" class="post">
            <header class="post-header">
                <h2>
                    <time>
                        <small>Date: {{$post->created_at}}</small>
                    </time>
                </h2>
            </header>
            <div class="post-content"></div>
                <p>
                    {{$post->content}}
                </p>
            <footer class="post-footer">

            </footer>
        </article>
        @empty
            <h1>Nebol pridaný zatiaľ žiadný post</h1>
        @endforelse

@endsection