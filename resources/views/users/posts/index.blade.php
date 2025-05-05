@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="post-content p-5">
                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <div class="mb-4">
                                <a href="{{ route('users.posts', $post->user) }}"
                                    class="text-bold me-2">{{ $post->user->name }}</a>
                                <span class="text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
                                <p class="mt-2 mb-2">{{ $post->body }}</p>


                                <form action="{{ route('posts.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red">Delete</button>
                                </form>



                                <div class="d-flex align-items-center">
                                    @auth
                                        @if (!$post->likedBy(auth()->user()))
                                            <form action="{{ route('posts.likes', $post) }}" method="post" class="me-3">
                                                @csrf
                                                <button type="submit" class="text-blue">Like</button>
                                            </form>
                                        @else
                                            <form action="{{ route('posts.likes', $post) }}" method="post" class="me-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red">@lang('UnlikeF')</button>
                                            </form>
                                        @endif
                                    @endauth
                                    <span>{{ $post->likes->count() }}
                                        {{ Str::plural('like', $post->likes->count()) }}</span>
                                </div>
                            </div>
                        @endforeach
                        {{ $posts->links('pagination::bootstrap-5') }}
                    @else
                        <p>There are no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
