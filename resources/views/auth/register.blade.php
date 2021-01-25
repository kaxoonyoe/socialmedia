@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-3/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">

                <div class="mb-2">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" />
                </div>

                <div class="mb-2">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" />
                </div>

                <div class="mb-2">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" />
                </div>

                <div class="mb-2">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" />
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 w-full font-medium rounded">Register</button>
                </div>

            </form>
        </div>
    </div>
@endsection
