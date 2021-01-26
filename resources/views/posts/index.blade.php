@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">

            <form action="{{ route('posts') }}" method="POST">

                @csrf

                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" class="w-full bg-gray-100 rounded-lg p-4 border-2" placeholder="What is on your mind?"></textarea>
                </div>

                @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div>
                    <button type="submit" class="text-white bg-blue-500 rounded font-medium px-4 py-2">Post</button>
                </div>

            </form>

        </div>
    </div>
@endsection
