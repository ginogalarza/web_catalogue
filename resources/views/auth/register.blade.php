<x-guest-layout>
    <div class="card">
                           
        <div class="card-body p-4"> 

            <div class="text-center mt-2">
                <h5 class="text-primary">Register Account</h5>
                <p class="text-muted">Get your free Minible account now.</p>
            </div>
            <div class="p-2 mt-4">
                <form action="https://themesbrand.com/minible/layouts/index.html">

                    <div class="mb-3">
                        <label class="form-label" for="useremail">Email</label>
                        <input type="email" class="form-control" id="useremail" placeholder="Enter email">        
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="userpassword">Password</label>
                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">        
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
                        <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                    </div>

                
                    
                    <div class="mt-3 text-end">
                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Register</button>
                    </div>

                    <div class="mt-4 text-center">
                        <div class="signin-other-title">
                            <h5 class="font-size-14 mb-3 title">Sign up using</h5>
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
                        <p class="text-muted mb-0">Already have an account ? <a href="auth-login.html" class="fw-medium text-primary"> Login</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-guest-layout>

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
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
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
</x-guest-layout>
 --}}