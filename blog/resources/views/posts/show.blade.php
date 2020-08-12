@extends('master')
@section('title','Moje odkazy')

@section('content')

 <section class="box post-list">
     <h1 class="box-heading text-muted">
         Moje odkazy
     </h1>


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
                @if(Auth::check())
                @can('edit-post',$post)
                 <form action="{{route('post.destroy',$post->id_post) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="trash"><i class="fas fa-trash-alt"></i></button>
                    <a href="{{route('post.edit', $post->id_post)}}" class="edit"><i class="fas fa-edit"></i></a>
              </form>
              @endcan
              @endif
            </div>
        </article>
        @empty
            <h1>Nebol pridaný zatiaľ žiadný post</h1>
        @endforelse

@endsection
