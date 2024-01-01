<x-app>
    <div class="mt-6">
        @foreach($users as $user)
        <div class="flex items-center mb-4">
            <a href="/profile/{{$user->username}}"><img src="{{$user->avatar}}" alt="{{$user->username}} 's avatar" width="60" class="mb-4 rounded"></a>
            <div class="font-bold ml-4">
                <a href="/profile/{{$user->username}}">{{'@'. $user->username}}</a>
            </div>
        </div>
        @endforeach
    </div>
</x-app>