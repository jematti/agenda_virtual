<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" novalidate>
            @csrf

            <!-- Nombre -->
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Direccion de Correo-->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo Institucional')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class=" flex flex-wrap">
                <!-- Celular  -->
                <div class="w-full md:w-1/2  pr-3  mt-4">
                    <x-label for="celular" :value="__('Celular')" />

                    <x-input id="celular" class="block mt-1 w-full" type="number" name="celular" :value="old('celular')"
                        required />
                </div>

                <!-- Telefono -->
                <div class="w-full md:w-1/2 mt-4">
                    <x-label for="telefono" :value="__('Telefono (Interno)')" />

                    <x-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')"
                        required />
                </div>
            </div>



            <!-- Departamento -->
            <div class="my-4">
                <x-label for="departamento" :value="__('Departamento')" />


                <select name="departamento" id="departamento"
                class="rounded-md shadow-sm border-gray-300 focus:border-gray-700 focus:ring focus:ring-gray-700 focus:ring-opacity-50 w-full">
                    <option value="">-- Seleccione un Departamento --</option>
                    <option value="recursos_humanos">Departamento de Recursos Humanos</option>
                    <option value="administracion">Departamento de Administracion</option>
                    <option value="juridica">Departamento de Juridica</option>
                    <option value="finanzas">Departamento de Finanzas</option>
                    <option value="culturas">Departamento de Culturas</option>
                    <option value="diseño">Departamento de Diseño</option>
                    <option value="soporte">Departamento de Soporte Tecnico</option>
                    <option value="eventual">Personal Eventual</option>
                    <option value="otro">Otro</option>
                </select>

            </div>

            <!-- Puesto de Trabajo -->
            <div>
                <x-label for="puesto" :value="__('Puesto')" />

                <x-input id="puesto" class="block mt-1 w-full" type="text" name="puesto" :value="old('puesto')"
                    required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Repetir Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex justify-between my-5">
                <x-link :href="route('login')">
                    Iniciar Sesión
                </x-link>

                <x-link :href="route('password.request')">
                    Olvidaste tu Contraseña
                </x-link>
            </div>

            <x-button class="w-full justify-center">
                {{ __('Crear Cuenta') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
