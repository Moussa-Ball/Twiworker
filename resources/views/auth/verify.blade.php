@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center items-center">
    <div class="flex flex-wrap justify-center pt-16 pb-32">
        <div class="w-auto mx-3">
            <div class="my-16 flex flex-col justify-center items-center break-words rounded-none">
                <div class="flex justify-center h-32 mt-12">        
                    <svg class="h-32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 788.38181 719"><defs><linearGradient id="aeee3e51-5d06-43ae-b234-e7a12d326f50" x1="365" y1="605" x2="365" y2="286" gradientUnits="userSpaceOnUse"><stop offset="0" stop-opacity="0.12"/><stop offset="0.55135" stop-opacity="0.09"/><stop offset="1" stop-opacity="0.02"/></linearGradient><linearGradient id="acb63a3b-00bb-44a8-8877-bb0607d49a63" x1="1117.61899" y1="-43.05793" x2="1117.61899" y2="-102.40539" gradientTransform="matrix(-0.64881, 0.76095, 0.76095, 0.64881, 817.40491, -656.85567)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="gray" stop-opacity="0.25"/><stop offset="0.53514" stop-color="gray" stop-opacity="0.12"/><stop offset="1" stop-color="gray" stop-opacity="0.1"/></linearGradient></defs><title>Mail sent</title><polygon points="125 410 0 268 374 0 748 268 621 410 125 410" fill="#293fdf"/><polygon points="125 410 0 268 374 0 748 268 621 410 125 410" fill="#514abf"/><rect y="286" width="730" height="319" fill="#293fdf"/><rect y="286" width="730" height="319" fill="url(#aeee3e51-5d06-43ae-b234-e7a12d326f50)"/><polygon points="748 719 0 719 0 268 374 494 748 268 748 719" fill="#293fdf"/><polygon points="652.582 116.818 573.252 55.99 363.113 330.042 246.402 240.55 185.573 319.879 341.938 439.598 341.938 439.598 382.036 469.649 652.582 116.818" fill="#3ad29f"/><polygon points="3.153 166.882 0.179 168.334 0.521 167.726 0.26 167.81 0.626 167.539 40.653 96.307 61.114 113.753 78.667 130.004 73.627 132.465 79.293 142.459 3.153 166.882" fill="url(#acb63a3b-00bb-44a8-8877-bb0607d49a63)"/><polygon points="59.087 115.617 75.131 130.493 2.411 166.646 41.11 117.046 59.087 115.617" fill="#293fdf"/><polygon points="59.087 115.617 75.131 130.493 2.411 166.646 41.11 117.046 59.087 115.617" opacity="0.2"/><polygon points="40.373 99.66 2.411 166.646 59.087 115.617 40.373 99.66" fill="#293fdf"/><polygon points="75.599 142.01 2.489 166.16 63.604 120.539 75.599 142.01" fill="#293fdf"/><polygon points="686.959 38.73 670.942 66.499 788.382 85.622 712.742 32.949 686.959 38.73" fill="#293fdf"/><polygon points="686.959 38.73 670.942 66.499 788.382 85.622 712.742 32.949 686.959 38.73" opacity="0.2"/><polygon points="706.247 8.293 788.382 85.622 686.959 38.73 706.247 8.293" fill="#293fdf"/><polygon points="675.274 82.821 788.062 84.976 682.769 47.576 675.274 82.821" fill="#293fdf"/></svg>
                </div>

                <div class="gotham-rounded text-xl font-semibold text-gray-800 py-3 px-6 mb-0 self-center mt-6">
                    {{ __('Verify your email address and start using Twiworker') }}
                </div>

                @if (session('resent'))
                <div class="text-sm text-green-700 border-green-600 bg-green-100 px-6 py-4 mb-4 mt-2" role="alert">
                    {{ __('A verification link has been sent to your email address.') }}
                </div>
                @endif

                <div class="flex flex-col">
                    <div class="leading-normal text-sm text-gray-700">
                        {{ __('Before starting to use Twiworker, it is necessary to verify your email address by a verification link.') }}
                    </div>

                    <div class="leading-normal text-sm text-gray-700">
                        {{ __('If you did not receive the email') }}, <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline cursor-pointer" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('click here to request another') }}</a>.
                    </div>

                    <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
