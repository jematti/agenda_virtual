<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarContactos extends Component
{
    public $termino;
    public $dato;

    public function leerDatosFormulario(){
        //emite al componente padre homecontactos
        $this->emit('terminosBusqueda',$this->termino,$this->dato);
    }
    public function render()
    {
        return view('livewire.filtrar-contactos');
    }
}
