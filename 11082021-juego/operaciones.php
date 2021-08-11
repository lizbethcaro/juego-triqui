<?php

    $b = 0;
    $contador = 0;

    while( $b == 0 && $contador <= 1000)
    {
        $v1 = "";//es para recoger los valores jugados

        for( $i = 1; $i <= 9; $i ++ )//recibamos las casillas vacias.
        {
      
            if( isset( $_GET[ 'texto'.$i ] ) )   //Si el texto exixte
            {
                //Si el campo enviado es vacio o tiene, que es lo mismo.
            if( $_GET[ 'texto'.$i ] != "" && $_GET[ 'texto'.$i ] != "." )
            {
                    $v1 .= $_GET[ 'texto'.$i ]; //Se captura esa casilla jugada.
            }else{
                    
            
                    if( rand( 1, 2) == 1 && $b == 0 )
                    {
                        $v1 .= "O"; //Aqui juega la maquina.
                        $b = 1; //Marcamos ese turno. No deberia jugar mas de una vez.
                    }else{

                        $v1 .= "."; //Cuando la casill está vacia, trasmitimos un punto.
                    }    
                }//fin del else.
            }//fin del if.
        }//fin del for.

        $contador ++;
        //while( $b == 0 && $contador <==100 )
        
    }


    //echo "::=>".$v1;
    header("location: juego.php?dev=$v1"); //volvemos al formulario del jugador


    