<x-app>
    <div>
        @include('_publish-tweets')
        @include('_timeline',[
        'tweets'=> $tweets])
    </div>
    @if(session()->has('success'))
    <div class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-xs">
        <p>{{session('success')}}</p>
    </div>
    @endif

</x-app>