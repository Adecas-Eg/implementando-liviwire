<?php

namespace App\Livewire\Forms;

use App\Models\Producto;
use Livewire\Form;

class ProductosCreateForm extends Form
{
    public $cantidad = 0;
    public $name = '';
    public $open= false;


    public function create(){
        $this->open = true;
    }

    public function store(){
        Producto::create($this->only('name','cantidad'));
        $this->reset();
    }
}
