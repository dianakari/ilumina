<?php
include "Nodo.php";

class Lista
{
    private $root;
    private $length;

    public function __Construct($valor=null){
        if ($valor != null) {
            $this->root = new Nodo($valor);
            $this->length = 1;
        } else {
            $this->root  = null;
            $this->length=0;
        }
    }

    public function agregarInicio($valor){
        /*
        if ($this->root == null)
        {
          $this->root = new Nodo($valor);
        }
        else
        {
          $nodoNuevo = new Nodo($valor, $this->root);
          $this->root = $nodoNuevo;
        }
        */
        $this->root == null ? $this->root = new Nodo($valor) : $this->root = new Nodo($valor, $this->root);
        $this->length++;
    }

    public function agregarIndice($valor, $indice){
        $nodoEncontrado = $this->buscarIndice($indice-1);
        if ( $nodoEncontrado != null ){
           /*
             $nuevo = new Nodo($valor);
             $nuevo->setSig($nodoEncontrado->getSig());
             $nodoEncontrado->setSig($nuevo);
           */
            $nodoEncontrado->setSig( new Nodo($valor, $nodoEncontrado->getSig()) );
            $this->length++;
        }
    }

    public function agregarUltimo($valor){
        $nodoEncontrado = $this->buscarIndice($this->length - 1);
        if ( $nodoEncontrado != null ){
            $nodoEncontrado->setSig( new Nodo($valor) );
            $this->length++;
        }
    }

    public function buscarIndice($indice){
        if ( $this->length > 0 && ($indice >=0 && $indice < $this->length)){
            $ap = $this->root;
            $cont = 0;
            while($ap->getSig() != null && $cont < $indice){
                $ap = $ap->getSig();
                $cont++;
            }
            if ($cont == $indice){
                return $ap;
            }
        }
        return null;
    }

    public function buscarValor($valor){
        if ( $this->root != null ){
            $ap = $this->root;
            while ($ap->getSig() != null && $valor != $ap->getVal()){
                $ap = $ap->getSig();
            }
            if ($valor == $ap->getVal()){
                return $ap;
            }
        }
        return null;
    }

    public function eliminarInicio(){
        if ($this->root != null) {
            if ($this->length > 1){
                $rootOriginal=$this->root;
                $this->root = $this->root->getSig();  
                $rootOriginal->setSig(null);
                $this->length--;          
            }
            else{   
                $this->root= null;
                $this->length--;
            }
        }
    }

    public function eliminarIndice($indice){
        if ($this->root != null && $indice <= $this->length) {
            if($indice == 0){
                $this->eliminarInicio();
            } else {
                $nodoAnterior = $this->buscarIndice($indice-1);
                $nodoEncontrado = $nodoAnterior->getSig();
                if ( $nodoEncontrado ){
                  $nodoAnterior->setSig( $nodoEncontrado->getSig() );
                  $nodoEncontrado->setSig( null );
                  $this->length--;
                }
            }
        }
    }

    public function eliminarUltimo(){
        if ($this->root != null) {
            $this->eliminarIndice($this->length - 1);
        }
    }
    
    public function mostrar(){
        if ( $this->length > 0 ){
            $ap = $this->root;
            while($ap->getSig() != null ){
                echo $ap->getVal()."->";
                $ap = $ap->getSig();
            }
            echo $ap->getVal()."->";
        }
        echo "null";
    }
}

?>