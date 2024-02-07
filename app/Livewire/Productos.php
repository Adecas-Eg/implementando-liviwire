<?php

namespace App\Livewire;

use App\Livewire\Forms\ProductosCreateForm;
use App\Models\Producto;
use Livewire\Component;

class Productos extends Component
{

    public $productos;
    public ProductosCreateForm $productosCreate;
    public function mount(){
        $this->productos = Producto::get();
    }
    

    public function create(){
        $this->productosCreate->create();

    }

    public function store(){
        $this->productosCreate->store();  
        $this->productos = Producto::get();

    }

    public function render()
    {
        return view('livewire.productos');
    }
}
