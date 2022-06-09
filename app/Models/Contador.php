<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\core\Model;

class Contador extends Model
{
   

    public function assinar(){
    	echo"O contador ja verificou os pagamentos;";
    	echo"Joao irá receber $2.100,00 esse mês!";
    	echo"Marcos irá receber $2.500,00 esse mês!";
    	echo"Maria irá receber $5.000,00 esse mês!";
    }
}