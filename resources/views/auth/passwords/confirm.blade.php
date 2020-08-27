@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex justify-center items-center">
         <div class="flex flex-wrap justify-center">
            <div class="md:w-400px lg:w-400px w-auto mx-3">
                <div class="my-16 flex flex-col break-words bg-white rounded-none shadow-dropdown">
                    <div class="font-semibold text-gray-700 py-3 px-6 mb-0 uppercase self-center mt-6">
                        {{ __('Confirm Password') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <p class="text-orange-500 text-sm italic -mt-3 mb-6 text-center">
                            {{ __('Please confirm your password before continuing.') }}
                        </p>

                        <div class="flex flex-wrap mb-6">
                            <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror text-sm rounded-none shadow-none" name="password" required placeholder="Password">

                            @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="transitionn duration-300 shadow-dropdown hover:shadow-btn-hover bg-primary hover:bg-opacity-95 text-gray-100 font-medium py-3 px-4 rounded-none text-sm focus:outline-none w-full uppercase">
                                {{ __('Comfirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                            <div class="w-full border-b my-6"></div>
                            <p class="w-full text-sm text-center text-gray-800 mb-2">
                                <a class="text-primary hover:text-opacity-75 no-underline" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
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
