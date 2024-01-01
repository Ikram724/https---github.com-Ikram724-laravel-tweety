<div class="bg-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-centre text-sm">
                <a href=" {{$user->path()}}"><img src="{{$user->avatar}}
             " alt="" class="rounded-full mr-2" width="40" height="40"></a>

                <a class=" font-bold" href=" {{$user->path()}}">{{$user->name}}</a>


            </div>
        </li>
        @empty
        <li>No Friends Yet.</li>
        @endforelse
    </ul>
</div>