<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}", enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
                                
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            
            <!-- NickName -->
            <div>
                <x-input-label for="nickname" :value="__('NickName')" />
                <x-text-input id="nickname" class="block mt-1 w-full" type="text" name="nickname" :value="old('nickname')" required autofocus />
                <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
            </div>
            
            <!-- Age -->
            <div>
                <x-input-label for="age" :value="__('Age')" />
                <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus />
                <x-input-error :messages="$errors->get('age')" class="mt-2" />
            </div>
            
            <!-- Sex -->
            <div>
                <x-input-label for="sex" :value="__('Sex')" />
                <select name="sex">
                    <option value="男">男性</option>
                    <option value="女">女性</option>
                </select>
                <x-input-error :messages="$errors->get('sex')" class="mt-2" />
            </div>
            
            <!-- Self_introduction -->
            <div>
                <x-input-label for="self_introduction" :value="__('Self_introduction')" />
                <x-text-input id="self_introduction" class="block mt-1 w-full" type="text" name="self_introduction" :value="old('self_introduction')" required autofocus />
                <x-input-error :messages="$errors->get('self_introduction')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
