<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\core\Model;

class Exercicio extends Model
{
private $id;
private $nome;
private $preco;
private $unidade;





public function getId()
{
return $this->id;
}



public function setId($id)
{
$this->id = $id;
}



public function getNome()
{
return $this->nome;
}



public function setNome($nome)
{
$this->nome = $nome;
}



public function getPreco()
{
return $this->preco;
}



public function setPreco($preco)
{
$this->preco = $preco;
}



public function getUnidade()
{
return $this->unidade;
}



public function setUnidade($unidade)
{
$this->unidade = $unidade;
}






}
