@extends('master')
@section('title','Odkazy')

@section('content')

 <section class="box post-list">
     <h1 class="box-heading text-muted">
         Odkazy
     </h1>

     <form action="{{ route('post.store') }}" method="POST">
         @csrf
         <div class="form-group">

             <textarea name="content"
                       id="content"
                       class="form-control"
                       placeholder="Tu môžete zanechať odkaz"
                       rows="3">{{ old('content') }}</textarea>
         </div>
         <button type="submit" class="btn btn-primary">Odoslať</button>
     </form>

     @forelse($posts as $post)

        <article id="post-{{$post->id }}" class="post">
            <header class="post-header">

            </header>
            <div class="post-content">
                <p>
                    {{$post->content}}
                </p>
                <p class="written-by small">
                    <small> - napísal
                        <a href="{{ url('user',$post->user->id)}}">
                            {{$post->user->name}}
                        </a>
                    </small>
                    <time>
                        <small>Dátum: {{$post->created_at}}</small>
                    </time>
                </p>
                 <form action="{{route('post.destroy',$post->id_post) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="trash"><i class="fas fa-trash-alt"></i></button>
                    <a href="{{route('post.edit', $post->id_post)}}" class="edit"><i class="fas fa-edit"></i></a>
              </form>
            </div>
        </article>
        @empty
            <h1>Nebol pridaný zatiaľ žiadný post</h1>
        @endforelse

@endsection
