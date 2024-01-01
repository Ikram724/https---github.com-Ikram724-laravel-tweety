<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="mx-auto px-12 py-8 bg-gray-300 rounded-lg">
            <div class="col-md-8">

                <div class="mb-4">
                    <h1 class="font-bold">Login</h1>
                </div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                        <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" autocomplete="email" value="{{old('email')}}" required>
                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror



                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Password</label>
                        <input class="border border-gray-400 p-2 w-full" type="password" name="password" autocomplete="current-password" id="password" required>
                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror

                    </div>




                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="px-4 py-2 mt-2 rounded text-sm uppercase bg-blue-400 text-white">
                                {{ __('Login') }}
                            </button>
                            <a href="{{route('password.request')}}" class="text-xs text-gray-700">Forgot Your Password?</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>