<nav class="p-6 bg-white justify-between flex mb-6">

    <ul class="flex items-center">
        <li>
            <a href="/" class="p-3">Home</a>
        </li>
        <li>
            <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('posts') }}" class="p-3">Post</a>
        </li>
    </ul>

    <ul class="flex items-center">
        @auth

            <li>
                <a href="" class="p-3">All Chit</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="p-3">logout</a>
            </li>

        @endauth
        @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            
        @endguest
        
    </ul>

</nav>
