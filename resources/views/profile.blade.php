<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="{{ asset('images/Bbunny.jpg') }}" alt="" style="height:223px;width:700px;
         border-radius:20px;background-color:rgba(246, 248, 250, 0)" class="mb-4">
            <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -transform-x-1/2" style="left:40%" width="100">

        </div>
        <div class="flex justify-between items-center mb-4">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl mb-1">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                @can('edit',$user)
                <a href="{{$user->path('edit')}}" class="rounded-full shadow py-2 px-4 text-black text-xs">Edit Profile</a>
                @endcan
                <x-follow_button :user="$user"></x-follow_button>



            </div>
        </div>

    </header>


    <p class="text-sm mb-4">Lorem ipsum dolor sit amet. Id facilis quidem
        non beatae labore est expedita illum ea magni
        quisquam et magni illum! Et galisum aliquid
        et repellat saepe est inventore distinctio
        est dolore maiores et cumque odio aut
        incidunt animi. Est molestiae quia aut
        provident perferendis ut adipisci cumque.
        Qui maxime architecto ut dolores repudiandae
        non molestiae dolores sed consequuntur quia quo omnis
        laudantium eos repellendus consequuntur.</p>



    @include('_timeline',[
    'tweets'=> $tweets])

</x-app>