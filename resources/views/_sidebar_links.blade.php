<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{route('home')}}">
            Home
        </a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block" href="/explore">
            Explore
        </a>
    </li>


    <li>
        <a class="font-bold text-lg mb-4 block" href="{{route('profile',auth()->user())}}">
            Profile
        </a>
    </li>

    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="font-bold text-lg mb-4 block">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf

        </form>
    </li>

</ul>