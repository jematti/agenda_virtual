<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HomeContactos extends Component
{
    //definir los atributos de la clase filtrar contactos
    public $termino;
    public $dato;
    //escucha desde filtrar contactos
    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($termino,$dato){
        //asignar los valores a los atributos traidos desde filtrarContactos
        $this->termino = $termino;
        $this->dato = $dato;
    }
    public function render()
    {
        //$contactos = User::orderBy('id','desc')->simplepaginate(10);

        $contactos = User::when($this->termino, function ($query) {
            return $query->where('name', 'like', '%'.$this->termino.'%');
        })
        ->when($this->dato, function ($query) {
            return $query->orWhere($this->dato, 'like', '%'.$this->termino.'%');
        })
        ->orderBy('id','desc')->simplepaginate(10);

        return view('livewire.home-contactos',[
            'contactos' => $contactos
        ]);
    }
}
