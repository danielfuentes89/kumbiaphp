<?php 
class SaludoController extends AppController {
 
    //public function hola($nombre) 
    public function hola() 
    {
        //Ver método select[1]
        //View::select(NULL); //no mostramos la vista, solo el template
        $this->fecha = date("Y-m-d H:i");
        //$this->nombre = $nombre;
    }

    //dice adios...
      public function adios() 
      {
      }
}