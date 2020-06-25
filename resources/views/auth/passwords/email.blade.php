@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center items-center">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-400px lg:w-400px w-auto mx-3">
            <div class="my-16 flex flex-col break-words bg-white border border-2 rounded-none shadow-dropdown">
                <div class="font-semibold text-gray-700 py-3 px-6 mb-0 uppercase self-center mt-6">
                    {{ __('Reset Password') }}
                </div>

                <form class="w-full p-6" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    @if (session('status'))
                    <div class="text-sm text-green-700 border-green-600 bg-green-100 px-6 py-4 mb-6" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="flex flex-wrap mb-6">
                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror text-sm rounded-none shadow-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">

                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap items-center">
                        <button type="submit" class="bg-primary hover:bg-opacity-95 shadow-sm text-gray-100 font-medium py-3 px-4 rounded-none text-sm focus:outline-none w-full uppercase">
                            {{ __('Get password reset link') }}
                        </button>

                        <div class="w-full border-b my-6"></div>

                        @if (Route::has('register'))
                            <p class="w-full text-sm text-center text-gray-800">
                                <a class="text-primary hover:text-opacity-75 no-underline" href="{{ route('login') }}">
                                    {{ __('Go back to login page') }}
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
