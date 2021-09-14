<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-1000">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
            <x-jet-label for="email" value="NIM" />

<input type="text" style="border-radius: 5px;"   placeholder="Masukkan NIM" class="block mt-1 w-full" id="email" name="email" :value="old('email')" required autofocus>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <input type="password" style="border-radius: 5px;"  placeholder="Masukkan Nama+Tanggal Lahir" class="block mt-1 w-full" id="password" placeholder="" name="password" required>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
        <script>
            function visibility3() {
    var x = document.getElementById('password');
    if (x.type === 'password') {
      x.type = "text";
      $('#eyeShow').show();
      $('#eyeSlash').hide();
    }else {
      x.type = "password";
      $('#eyeShow').hide();
      $('#eyeSlash').show();
    }
  }
  function myFunction() {
    var x = document.getElementById("*passwordbox-id*");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
        </script>
    </x-jet-authentication-card>
</x-guest-layout>
