<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="actualizar" method="POST" action="{{ route('perfil.store') }}" novalidate>
            @csrf

            <!-- Nombre -->
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input
                id="name"
                class="block mt-1 w-full"
                type="text"
                name="name"
                value="{{auth()->user()->name}}"
                required
                    autofocus />
            </div>

            <!-- Direccion de Correo-->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo Institucional')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{auth()->user()->email}}"
                    required />
            </div>

            <div class=" flex flex-wrap">
                <!-- Celular  -->
                <div class="w-full md:w-1/2  pr-3  mt-4">
                    <x-label for="celular" :value="__('Celular')" />

                    <x-input id="celular" class="block mt-1 w-full" type="number" name="celular" value="{{auth()->user()->celular}}"
                        required />
                </div>

                <!-- Telefono -->
                <div class="w-full md:w-1/2 mt-4">
                    <x-label for="telefono" :value="__('Telefono (Interno)')" />

                    <x-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" value="{{auth()->user()->telefono}}"
                        required />
                </div>
            </div>



            <!-- Departamento -->
            <div class="my-4">
                <x-label for="departamento" :value="__('Departamento')" />


                <select name="departamento" id="departamento"
                class="rounded-md shadow-sm border-gray-300 focus:border-gray-700 focus:ring focus:ring-gray-700 focus:ring-opacity-50 w-full">
                    <option value="">-- Seleccione un Departamento --</option>
                    <option value="recursos humanos"  {{ (auth()->user()->departamento)=='recursos humanos' ? 'selected' : ''  }}>Departamento de Recursos Humanos</option>
                    <option value="administracion" {{ (auth()->user()->departamento)=='administracion' ? 'selected' : ''  }}>Departamento de Administracion</option>
                    <option value="juridica" {{ (auth()->user()->departamento)=='juridica' ? 'selected' : ''  }}>Departamento de Juridica</option>
                    <option value="finanzas" {{ (auth()->user()->departamento)=='finanzas' ? 'selected' : ''  }}>Departamento de Finanzas</option>
                    <option value="culturas" {{ (auth()->user()->departamento)=='culturas' ? 'selected' : ''  }}>Departamento de Culturas</option>
                    <option value="diseño" {{ (auth()->user()->departamento)=='diseño' ? 'selected' : ''  }}>Departamento de Diseño</option>
                    <option value="soporte tecnico" {{ (auth()->user()->departamento)=='soporte tecnico' ? 'selected' : ''  }}>Departamento de Soporte Tecnico</option>
                    <option value="eventual" {{ (auth()->user()->departamento)=='eventual' ? '' : ''  }}>Personal Eventual</option>
                    <option value="otro" {{ (auth()->user()->departamento)=='otro' ? 'selected' : ''  }}>Otro</option>
                </select>

            </div>

            <!-- Puesto de Trabajo -->
            <div>
                <x-label for="puesto" :value="__('Puesto')" />

                <x-input id="puesto" class="block mt-1 w-full" type="text" name="puesto" value="{{auth()->user()->name}}"
                    required autofocus />
            </div>


            <x-button class="w-full justify-center my-5">
                {{ __('Actualizar Datos') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
