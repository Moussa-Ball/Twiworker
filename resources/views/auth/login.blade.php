@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex justify-center items-center">
        <div class="flex flex-wrap justify-center">
            <div class="md:w-400px lg:w-400px w-auto mx-3">
                <div class="my-16 flex flex-col break-words bg-white border border-2 rounded-none shadow-dropdown">
                    <div class="font-semibold text-gray-700 py-3 px-6 mb-0 uppercase self-center mt-6">
                        {{ __('Login to your account') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror text-sm rounded-none shadow-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">

                            @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror text-sm rounded-none shadow-none" name="password" required placeholder="Password">

                            @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap flex-row items-center justify-between mb-6">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox rounded-none p-2" {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-primary hover:text-opacity-75 whitespace-no-wrap no-underline ml-auto" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="bg-primary hover:bg-opacity-95 shadow-sm text-gray-100 font-medium py-3 px-4 rounded-none text-sm focus:outline-none w-full uppercase">
                                {{ __('Sign in') }}
                            </button>

                            <div class="w-full flex items-center my-6 text-xs text-gray-600 font-gotham-rounded font-medium">
                                <div class="flex-1 border-b"></div>
                                <div class="px-2 uppercase">or</div>
                                <div class="flex-1 border-b"></div>
                            </div>

                            <a href="#" class="flex items-center justify-center bg-facebook hover:bg-opacity-95 shadow-sm text-gray-100 font-medium mb-3 py-3 px-4 rounded-none text-center text-sm focus:outline-none w-full uppercase">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="h-4 pr-2 fill-current text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                </svg>
                                <span>{{ __('Sign in with facebook') }}</span>
                            </a>
                            <a href="#" class="flex items-center justify-center bg-google hover:bg-opacity-95 shadow-sm text-gray-100 font-medium py-3 px-4 rounded-none text-center text-sm focus:outline-none w-full uppercase">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" class="h-4 pr-2 fill-current text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                </svg>
                                <span>{{ __('Sign in with google') }}</span>
                            </a>

                            <div class="w-full border-b my-6"></div>

                            @if (Route::has('register'))
                                <p class="w-full text-sm text-center text-gray-800 mt-2 mb-2">
                                    {{ __("You don't have an account?") }}
                                    <a class="text-primary hover:text-opacity-75 no-underline" href="{{ route('register') }}">
                                        {{ __('Sign up') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
