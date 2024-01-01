<x-master>
    <section class="px-8">


        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if(auth()->check())
                <div class="lg:w-32  rounded-lg p-4">
                    @include('_sidebar_links')
                </div>
                @endif
                <div class=" lg:flex-1 mx-10" style="max-width: 700px;">
                    {{$slot}}
                </div>
                @if(auth()->check())
                <div style="width: 200px;">
                    @include('_friends-list')
                </div>
                @endif
            </div>
        </main>
    </section>
</x-master>