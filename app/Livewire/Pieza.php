<?php

namespace App\Livewire;

use App\Models\piezas;
use Livewire\Component;

class Pieza extends Component
{

    public $openModal = false, $openModalEdit = false;

    public $id_vehiculos, $nombre, $fechainstalacion, $estadopieza, $estadocompra, $estado;
    public $vehiculoSel;


    public function render()
    {
        $piezas = piezas::all();
        return view('livewire.Pieza', compact('piezas'));
    }

    public function guardarPieza(){

        
        $mantenimiento = piezas::create([
            'id_vehiculos' => $this->id_vehiculos,
            'nombre' => $this->nombre,
            'fechainstalacion' => $this->fechainstalacion,
            'estadocompra' => $this->estadocompra,
            'estadopieza' => $this->estadopieza,
            'estado' => $this->estado
        ]);

        $this->id_vehiculos='';
        $this->nombre='';
        $this->fechainstalacion='';
        $this->estadopieza='';
        $this->estadocompra='';
        $this->estado='';

        $this->openModal = false;

    }

    public function mostrarPieza($id){

        $this->vehiculoSel = piezas::find($id);
        $this->id_vehiculos = $this->vehiculoSel->id_vehiculos;
        $this->nombre = $this->vehiculoSel->nombre;
        $this->fechainstalacion = $this->vehiculoSel->fechainstalacion;
        $this->estadocompra = $this->vehiculoSel->estadocompra;
        $this->estadopieza = $this->vehiculoSel->estadopieza;
        $this->estado = $this->vehiculoSel->estado;
        $this->openModalEdit = true;

    }

      public function updatePieza(){

        $this->vehiculoSel->id_vehiculos = $this->id_vehiculos;
        $this->vehiculoSel->nombre = $this->nombre;
        $this->vehiculoSel->fechainstalacion = $this->fechainstalacion;
        $this->vehiculoSel->estadopieza = $this->estadopieza;
        $this->vehiculoSel->estadocompra = $this->estadocompra;
        $this->vehiculoSel->estado = $this->estado;

        $this->vehiculoSel->save();

        $this->openModalEdit = false;
        }

    public function eliminarPieza($id){

        $pieza = piezas::find($id);

        $pieza->delete();

    }
}
