@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center items-center">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-400px lg:w-400px w-auto mx-3">
            <div class="my-16 flex flex-col break-words bg-white border border-2 rounded-none shadow-dropdown">
                <div class="font-semibold text-gray-700 py-3 px-6 mb-0 uppercase self-center mt-6">
                    {{ __('Reset Password') }}
                </div>

                <form class="w-full p-6" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="flex flex-wrap mb-6">
                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror text-sm rounded-none shadow-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">

                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <input type="password" class="form-input w-full @error('password') border-red-500 @enderror text-sm rounded-none shadow-none" name="password" placeholder="Password" required autocomplete="new-password">

                        @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <input type="password" class="form-input w-full text-sm rounded-none shadow-none" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirmation">
                    </div>

                    <div class="flex flex-wrap items-center pb-4">
                        <button type="submit" class="transitionn duration-300 shadow-dropdown hover:shadow-btn-hover bg-primary hover:bg-opacity-95 text-gray-100 font-medium py-3 px-4 rounded-none text-sm focus:outline-none w-full uppercase">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
