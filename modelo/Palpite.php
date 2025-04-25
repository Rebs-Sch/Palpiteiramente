<?php

class Palpite{
    private $img;
    private $nome;
    private $elemento;
    private $arma;
    private $habilidade;
    private $tipo;

    public function __construct($i,$n,$e,$a,$h,$t){
        $this->img = $i;
        $this->nome = $n;
        $this->elemento = $e;
        $this->arma = $a;
        $this->habilidade = $h;
        $this->tipo = $t;
    }
    
    public function __toString(){
        return "Este personagem é do elemento: <strong>".$this->elemento."</strong><br> Utiliza a arma: <strong>".$this->arma."</strong><br> Sua habilidade é: <strong>".$this->habilidade."</strong><br> E é do tipo: <strong>".$this->tipo."</strong>";
    }

    public function getImg(){
        return $this->img;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getElemento(){
        return $this->elemento;
    }


    public function getArma(){
        return $this->arma;
    }

    public function getHabilidade(){
        return $this->habilidade;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo): self{
        $this->tipo = $tipo;

        return $this;
    }
}