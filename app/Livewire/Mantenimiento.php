<?php

namespace App\Livewire;

use App\Models\mantenimientos;
use Livewire\Component;

class Mantenimiento extends Component
{
    public $openModal = false, $openModalEdit = false;

    public $id_vehiculos, $tipomantenimiento, $costomantenimiento,  $estado;
    public $vehiculoSel;


    public function render()
    {
        $mantenimientos = mantenimientos::all();
        return view('livewire.Mantenimiento', compact('mantenimientos'));
    }

    public function guardarMantenimiento(){

        
        $mantenimiento = mantenimientos::create([
            'id_vehiculos' => $this->id_vehiculos,
            'tipomantenimiento' => $this->tipomantenimiento,
            'costomantenimiento' => $this->costomantenimiento,
            'estado' => $this->estado
        ]);

        $this->id_vehiculos='';
        $this->tipomantenimiento='';
        $this->costomantenimiento='';
        $this->estado='';

        $this->openModal = false;

    }

    public function mostrarMantenimiento($id){

        $this->vehiculoSel = mantenimientos::find($id);
        $this->id_vehiculos = $this->vehiculoSel->id_vehiculos;
        $this->tipomantenimiento = $this->vehiculoSel->tipomantenimiento;
        $this->costomantenimiento = $this->vehiculoSel->costomantenimiento;
        $this->estado = $this->vehiculoSel->estado;
        $this->openModalEdit = true;

    }

      public function updateMantenimiento(){

        $this->vehiculoSel->id_vehiculos = $this->id_vehiculos;
        $this->vehiculoSel->tipomantenimiento = $this->tipomantenimiento;
        $this->vehiculoSel->costomantenimiento = $this->costomantenimiento;
        $this->vehiculoSel->estado = $this->estado;

        $this->vehiculoSel->save();


        $this->id_vehiculos='';
        $this->tipomantenimiento='';
        $this->costomantenimiento='';
        $this->estado='';


        $this->openModalEdit = false;
        }

    public function eliminarMantenimiento($id){

        $mantenimiento = mantenimientos::find($id);

        $mantenimiento->delete();

    }

}
