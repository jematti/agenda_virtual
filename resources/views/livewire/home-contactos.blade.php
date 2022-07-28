<div>
    <livewire:filtrar-contactos />
    <div class="py-2 bg-gray-100">
        <div class="max-w-screen-xl px-4 py-4 mx-auto sm:px-6 lg:px-8 ">
            <div class="grid grid-cols-2 gap-3 mt-4 sm:grid-cols-2 lg:grid-cols-3 ">
                {{-- seccion de Contactos --}}
                @forelse ($contactos as $contacto)
                    <div class="relative block p-2 border border-indigo-600  border-t-4  shadow-xl rounded-xl">
                        <div class="flex  cursor-pointer my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <p class="line-clamp-2 lg:text-justify text-xl font-bold text-dark ">
                                {{ $contacto->name }}

                            </p>

                        </div>
                        <hr>

                        <div class="flex  cursor-pointer my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <p class="truncate text-base font-medium">
                                <span class="font-bold">Correo:</span>{{ $contacto->email }}
                            </p>
                        </div>

                        <div class="flex  cursor-pointer my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <p class="truncate text-base font-medium">
                                <span class="font-bold">Celular:</span> {{ $contacto->celular }}
                            </p>
                        </div>

                        @if ($contacto->telefono)
                            <div class="flex  cursor-pointer my-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <p class="truncate text-base font-medium">
                                    <span class="font-bold">Telefono:</span>
                                    {{ $contacto->telefono }}
                                </p>
                            </div>
                        @endif

                        @if ($contacto->departamento)
                            <div class="flex  cursor-pointer my-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <p class="truncate text-base font-medium">
                                    <span class="font-bold">Departamento:</span>
                                    {{ $contacto->departamento }}
                                </p>
                            </div>
                        @endif

                        @if ($contacto->puesto)
                            <div class="flex  cursor-pointer my-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <p class="truncate text-base font-medium">
                                    <span class="font-bold">Puesto:</span>
                                    {{ $contacto->puesto }}
                                </p>
                            </div>
                        @endif

                    </div>
                @empty
                    <h3 class="font-extrabold text-2xl text-gray-600">No hay ningun contacto registrado</h3>
                @endforelse

                {{-- fin de seccion libros --}}

            </div>

            {{-- paginacion --}}
            <div class="my-10">
                {{ $contactos->links() }}
            </div>
        </div>
    </div>
</div>
