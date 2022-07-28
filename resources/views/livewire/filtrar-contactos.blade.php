<div>
    <div class="bg-gray-100 py-5">
        <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Contacto</h2>

        <div class="max-w-7xl mx-auto">
            <form
                wire:submit.prevent="leerDatosFormulario"
            >
                <div class="md:grid md:grid-cols-2 gap-5">
                    <div class="mb-5">
                        <label class="block mb-1 text-sm text-gray-700 uppercase font-bold " for="termino">Término de
                            Búsqueda
                        </label>
                        <input
                        id="termino"
                        type="text"
                        placeholder="Buscar por Término: Nombre, Apellido, Correo, Celular, Telefono"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="termino"/>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Categoría</label>
                        <select wire:model="dato" class="border-gray-300 p-2 w-full">
                            <option value="">-- Seleccione un Dato --</option>
                            <option value="name">Nombre</option>
                            <option value="celular">Celular</option>
                            <option value="email">Correo</option>
                            <option value="telefono">Telefono</option>
                            <option value="departamento">Departamento</option>
                            <option value="puesto">Puesto</option>
                        </select>
                    </div>


                </div>

                <div class="flex justify-end">
                    <input type="submit"
                        class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                        value="Buscar" />
                </div>
            </form>
        </div>
    </div>
</div>
