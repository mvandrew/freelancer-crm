<x-guest-layout title="Вход" class="text-center form-signin">
    <x-form-signin>
        <form action="{{ route('login') }}" method="post" class="form-signin__form">
            @csrf
            <h1 class="form-signin__title">Вход</h1>

            <div class="form-floating form-signin__row">
                <x-form-signin-input type="email"
                                     id="email"
                                     name="email"
                                     :value="old('email')" required autofocus
                                     suffix="first"
                                     placeholder="your@e.mail" />
                <x-form-signin-label for="email" :value="'E-Mail'" />
            </div>

            <div class="form-floating form-signin__row">
                <x-form-signin-input type="password"
                                     id="password"
                                     name="password"
                                     :value="old('password')" required autocomplete="current-password"
                                     suffix="last"
                                     placeholder="Пароль" />
                <x-form-signin-label for="password" :value="'Пароль'" />
            </div>

            <div class="checkbox mb-3 form-signin__checkbox">
                <label>
                    <input type="checkbox" value="1" name="remember" id="remember"> Запомнить меня
                </label>
            </div>

            <button class="w-100 btn btn-lg btn-primary form-signin__button form-signin__button_submit"
                    type="submit">Войти</button>

            <ul class="form-signin__action-links">
                <li class="form-signin__action-item"><a href="{{ route('register') }}" class="form-signin__action-link">Регистрация</a></li>
                <li class="form-signin__action-item"><a href="{{ route('password.request') }}" class="form-signin__action-link">Забыли пароль?</a></li>
            </ul>
        </form>
    </x-form-signin>
</x-guest-layout>
