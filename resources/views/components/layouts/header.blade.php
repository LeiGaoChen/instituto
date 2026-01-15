<header class="h-header bg-header flex flex-row justify-between items-center">

    <img class="h-17 max-h-full px-3" src="{{ asset('./images/logo.png') }}" alt="logo">

    <h1 class="text-blue-800 text-6xl">{{ __('Gestión de instituto') }}</h1>

    <div class="flex flex-row items-center space-x-2 px-2">

        <x-layouts.lang />

        @guest
            <a href="login">
                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
            </a>
            <a href="register">
                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </a>
        @endguest

        @auth
                <div class="flex flex-col text-right">
                    <span class="text-xl text-blue-900">
                        {{ auth()->user()->name }}
                    </span>

                    @hasrole('admin')
                        <p class="text-sm text-green-700">
                            Administrador
                        </p>
                    @endhasrole

                    @hasrole('profesor')
                        <p class="text-sm text-blue-700">
                            Profesor
                        </p>
                    @endhasrole

                    @hasrole('alumnnno')
                        <p class="text-sm text-gray-700">
                            Alumno
                        </p>
                    @endhasrole
                </div>

            <form action="logout" method="POST">
                @csrf
                <input class="btn btn-secondary" type="submit" value="logout">
            </form>
        @endauth

    </div>
</header>
