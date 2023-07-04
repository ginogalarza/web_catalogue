
<x-guest-layout>
    <div class="card">
        <div class="card-body p-4"> 
            <div class="text-center mt-2">
                <h5 class="text-primary">¡Bienvenido de nuevo!</h5>
                <p class="text-muted">Inicia sesión para continuar con Motos.</p>
            </div>
            <div class="p-2 mt-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="email">{{ __('Email') }}</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Ingresar correo electronico" required autofocus autocomplete="username" aria-describedby="validation-email">
                        @error('email')
                            <div id="validation-email" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @if (Route::has('password.request'))
                            <div class="float-end">
                                <a href="{{ route('password.request') }}" class="text-muted">{{ __('Forgot your password?') }}</a>
                            </div>
                        @endif
                        <label class="form-label" for="password">{{ __('Password') }}</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingresar contraseña" required autocomplete="current-password" aria-describedby="validation-password">
                        @error('password')
                            <div id="validation-password" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
                    </div>
                    
                    <div class="mt-3 text-end">
                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">{{ __('Log in') }}</button>
                    </div>

                    <div class="mt-4 text-center">
                        <div class="signin-other-title">
                            <h5 class="font-size-14 mb-3 title">Iniciar Sesión con</h5>
                        </div>
                        
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                    <i class="mdi mdi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                    <i class="mdi mdi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                    <i class="mdi mdi-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4 text-center">
                        <p class="mb-0">¿No tienes una cuenta aun? 
                            <a href="{{ route('register') }}" class="fw-medium text-primary"> Registrate </a> 
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>{{-- 
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}