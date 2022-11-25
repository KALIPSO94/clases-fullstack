<?php
            require "funciones.php";

            /**1 pedir que se ingrese un numero 
         * 2 pedir otro numero y almacenarlo en otra variable
         * 3 pedir que se ingrese una letra , puede ser (s,r,d,m)
         */
        $primerNumero = readline ("ingrese  su numero:    ");

        $segundoNumero = readline ("ingrese  su numero:    ");

        $operacion=readline ("ingrese la operacion [s,r,d,m]");

    switch ($operacion){
        case "s":
            print suma ($primerNumero,$segundoNumero );
            break;
         case "r":
                print suma ($primerNumero,$segundoNumero );
                break;
         case "d":
              print suma ($primerNumero,$segundoNumero );
              break;
          case "m":
              print suma ($primerNumero,$segundoNumero );
              break;

        default: 
        print "no existe la operacion $operacion";
        break;

    }
        
