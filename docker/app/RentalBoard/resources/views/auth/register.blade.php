<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                <div class="header-title">
                    <h1 class="title"><a href="{{ route('top') }}" class="headerBtn">Rent a Board</a></h1>
                </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- role_id -->
            <div>
                <x-input id="role_id" class="block mt-1 w-full" type="hidden" name="role_id" :value="old('role_id')" required autofocus />
            </div>

            <!-- fullName -->
            <div>
                <x-label for="fullname" :value="__('氏名')" />

                <x-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />
            </div>

            <!-- address -->
            <div class="mt-4">
                <x-label for="address" :value="__('住所')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <!-- Email-->
            <div class="mt-4">
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- tel-->
            <div class="mt-4">
                <x-label for="tel" :value="__('電話番号')" />

                <x-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required />
            </div>
            
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('確認パスワード')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('会員登録がお済みの方はこちら') }}
                </a>

                <x-button class="ml-4">
                    {{ __('登録') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
