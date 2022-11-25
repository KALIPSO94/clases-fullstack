<?php
/**
 * 
 */
    function esPar (int $numero) : bool // es la firma de la funcion
    {
        $resto = $numero % 2 ;
        if($resto ==0) //par
        {
    
            return true ;
    
        } else {
            return false ;
    
        }
    }



    //*funcion devuelve el resultado de la suma de 
    //2 numeros pasados por parametros 

    function suma (float $numero1, float $numero2) : float
    {
        return $numero1 + $numero2;

    }

    function resta (float $numero1, float $numero2) : float
     {
        return $numero1 - $numero2 ;
     }


     function multiplicacion (float $numero1, float $numero2) : float
     {
        return $numero1 * $numero2 ;
    
     }

     function divicion (float $numero1, float $numero2) : float
     {
        return $numero1 / $numero2 ;
     }

    

