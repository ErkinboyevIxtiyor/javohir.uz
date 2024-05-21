<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __("Parolni unutdingizmi? Muammo yo'q. Elektron pochta manzilingizni bizga xabar bering va biz sizga parolni tiklash havolasini elektron pochta orqali yuboramiz, bu sizga yangisini tanlash imkonini beradi.") }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Elektron pochta')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Elektron Pochta Parolini Tiklash Havolasi') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
