@extends('master')
@section('title','All the posts')

@section('content')

 <section class="box post-list">
     <h1 class="box-heading text-muted">
         Odkazy
     </h1>
     

     <form action="{{ route('post.store') }}" method="POST">
         @csrf

         <div class="form-group">
             <label for="content">Odkaz</label>
             <textarea name="content"
                       id="content"
                       class="form-control" 
                       placeholder="tu môžete pisat"
                       rows="3">{{ old('content') }}</textarea>
         </div>
 
         <button type="submit" class="btn btn-primary">Odoslať</button>
     </form>

     @forelse($posts as $post)

        <article id="post-{{$post->id }}" class="post">
            <header class="post-header">
               
                    <time>
                        <small>Date: {{$post->created_at}}</small>
                    </time>
                
            </header>
            <div class="post-content"></div>
                <p>
                    {{$post->content}}
                </p>
                <p class="written-by small">
                    <small> - writte by
                        <a href="{{ url('user',$post->user->id)}}">
                            {{$post->user->name}}
                        </a>
                    </small>
                </p>
            <footer class="post-footer">

            </footer>
        </article>
        @empty
            <h1>Nebol pridaný zatiaľ žiadný post</h1>
        @endforelse

@endsection