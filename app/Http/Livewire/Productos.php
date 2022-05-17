<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class Productos extends Component
{
    public  $nombre,$categoria,$tipo, $fechaV, $valor, $search,  $suma=0;

    public function guardar(){
        $producto = new Producto();
        $producto->nombre= $this->nombre;
        $producto->categoria= $this->categoria;
        $producto->tipo= $this->tipo;
        $producto->fechaV = $this->fechaV;
        $producto->valor=$this->valor;
        $producto->save();
        $this->limpiar();
    }
    
    public function limpiar(){
        $this->nombre ="";
        $this->categoria ="";
        $this->tipo="";
        $this->fechaV="";
        $this->valor="";
    }

    public function render()
    {
        $producto=DB::table('productos')
                        ->select('productos.*') 
                        ->where('categoria','like','%'.$this->search.'%')
                        ->get();

        return view('livewire.productos',['producto'=>$producto]);
    }


}
