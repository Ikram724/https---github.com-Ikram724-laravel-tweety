<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea name="body" class="w-full rounded-xl" required placeholder="what's up doc?" autofocus></textarea>
        <hr class="mb-4">

        <footer class="flex justify-between items-center">
            <img src="{{auth()->user()->avatar}}" alt="" class="rounded-full mr-2" width="40" height="40">
            <button type="submit" class="bg-blue-500 hover:bg-green-600 shadow h-10 rounded-2xl  px-10 text-m white-text">Publish</button>
        </footer>

    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror


</div>