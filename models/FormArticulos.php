<?php

namespace app\models;
use Yii;
use yii\base\model;

class FormArticulos extends model{

public $id_articulo;
public $nombre_articulo;
public $cantidad_articulo;
public $precio;

public function rules()
 {
  return [
   ['id_articulo', 'integer', 'message' => 'Id incorrecto'],
   ['nombre_articulo', 'required', 'message' => 'Campo requerido'],
   ['nombre_articulo', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
   ['nombre_articulo', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
   ['cantidad_articulo', 'required', 'message' => 'Campo requerido'],
   ['cantidad_articulo', 'required', 'message' => 'Campo requerido'],
   ['cantidad_articulo', 'number', 'message' => 'Sólo números'],
   ['precio', 'required', 'message' => 'Campo requerido'],
   ['precio', 'number', 'message' => 'Sólo números'],
  ];
 }
 
}
?>