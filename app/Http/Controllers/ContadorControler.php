<?php
namespace appcontrollers;

use Illuminate\Http\Request;
use App\Models\Contador;


class ContadorControler{

	public function index(){
		echo "contador";
	}
	publicn function assinatura(){

		$objContador = new Contador();
		$objContador->assinar();

	}
}