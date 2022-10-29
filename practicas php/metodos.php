<?php

class unaclase{

    public static function unmetodo(){
        echo "Hola soy un metodo estatico, los objetos son para imbeciles Bv";
    }

}



unaclase::unmetodo();//no necesita un objeto
?>