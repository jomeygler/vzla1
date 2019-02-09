<?php

namespace vzla1\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
   public function index() {
   	return view('evento.index');
   }
}
