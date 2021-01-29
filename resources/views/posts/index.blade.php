@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">

            <form action="{{ route('posts') }}" method="POST" class="mb-4">

                @csrf

                <div class="mb-4">

                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" class="w-full bg-gray-100 rounded-lg p-4 border-2 @error('body') border-red-500 @enderror "  placeholder="What is on your mind?"></textarea>
                </div>

                @error('body')
                    <div class="text-red-500 m-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div>
                    <button type="submit" class="text-white bg-blue-500 rounded font-medium px-4 py-2">Post</button>
                </div>

            </form>
            @if($posts->count())
                @foreach($posts as $post)
                    <div class="mb-4">
                        <a href="" class="font-bold">{{ $post->user->name }}</a>
                        <span class="text-gray-600 text-sm">&nbsp;{{ $post->created_at->diffForHumans() }}</span>
                        <p class="mb-2">{{ $post->body }}</p>

                        <div class="flex items-center">
                            @if(!$post->likedBy(auth()->user()))
                                <form action="{{ route('posts.likes', $post ) }}" method="post" class="mr-1">
                                    @csrf
                                    <button type="submit" class="text-blue-500">Like</button>
                                </form>
                            @else
                                <form action="{{ route('posts.likes', $post ) }}" method="post" class="mr-1">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="text-blue-500">Unlike</button>
                                </form>
                            @endif
                            <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
                        </div>

                    </div>
                @endforeach

                {{$posts->links()}}
            @else
                <div class="mt-4">There is no posts.</div>
            @endif

        </div>
    </div>
@endsection
