<?php
            require "funciones.php";

            /**1 pedir que se ingrese un numero 
         * 2 pedir otro numero y almacenarlo en otra variable
         * 3 pedir que se ingrese una letra , puede ser (s,r,d,m)
         */
        $primerNumero = readline ("ingrese  su numero:    ");

        $segundoNumero = readline ("ingrese  su numero:    ");

        $operacion=readline ("ingrese la operacion [s,r,d,m]");

        if ($operacion == "s")
        {
            print suma ($primerNumero,$segundoNumero);
        }
        elseif ($operacion =="r")
        {
           

            print resta ($primerNumero,$segundoNumero);
    
        }
        elseif  ($operacion =="d")
        {
            print divicion  ($primerNumero,$segundoNumero);

        }
        elseif  ($operacion =="m")
        {
            print multiplicacion  ($primerNumero,$segundoNumero);
        }
        
