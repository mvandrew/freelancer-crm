<x-guest-layout title="Регистрация" class="text-center form-signin">
    <x-form-signin>
        <form action="{{ route('register') }}" method="post" class="form-signin__form">
            @csrf
            <h1 class="form-signin__title">Регистрация</h1>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-floating form-signin__row">
                <x-form-signin-input type="text"
                                     id="name"
                                     name="name"
                                     :value="old('name')" required autofocus
                                     suffix="first"
                                     placeholder="Ваше имя" />
                <x-form-signin-label for="name" :value="'Имя'" />
            </div>

            <div class="form-floating form-signin__row">
                <x-form-signin-input type="email"
                                     id="email"
                                     name="email"
                                     :value="old('email')" required
                                     placeholder="your@e.mail" />
                <x-form-signin-label for="email" :value="'E-Mail'" />
            </div>

            <div class="form-floating form-signin__row">
                <x-form-signin-input type="password"
                                     id="password"
                                     name="password"
                                     :value="old('password')" required autocomplete="current-password"
                                     placeholder="Пароль" />
                <x-form-signin-label for="password" :value="'Пароль'" />
            </div>

            <div class="form-floating form-signin__row">
                <x-form-signin-input type="password"
                                     id="password_confirmation"
                                     name="password_confirmation"
                                     :value="old('password_confirmation')" required autocomplete="current-password"
                                     suffix="last"
                                     placeholder="Подтверждение пароля" />
                <x-form-signin-label for="password_confirmation" :value="'Подтверждение пароля'" />
            </div>

            <button class="w-100 btn btn-lg btn-primary form-signin__button form-signin__button_submit"
                    type="submit">Регистрация</button>

            <ul class="form-signin__action-links">
                <li class="form-signin__action-item"><a href="{{ route('login') }}" class="form-signin__action-link">Уже зарегистрированы?</a></li>
                <li class="form-signin__action-item"><a href="{{ route('password.request') }}" class="form-signin__action-link">Забыли пароль?</a></li>
            </ul>
        </form>
    </x-form-signin>
</x-guest-layout>
