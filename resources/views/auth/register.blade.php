<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <!-- Name -->
        <div class="input-field">
            <label for="name" :value="__('Name')" />
            <input id="name"  type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
    
        <!-- Email Address -->
        <div class="input-field">
            <label for="email" :value="__('Email')" />
            <input id="email"  type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    
        <!-- Password -->
        <div class="input-field">
            <label for="password" :value="__('Password')" />
    
            <input id="password"  type="password" name="password" required
                autocomplete="new-password" />
    
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    
        <!-- Confirm Password -->
        <div class="input-field">
            <label for="password_confirmation" :value="__('Confirm Password')" />
    
            <input id="password_confirmation"  type="password" name="password_confirmation"
                required autocomplete="new-password" />
    
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
    
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
