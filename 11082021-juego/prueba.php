<?php
//Esta es la variable bandera que se activara.
    $bandera = 0;

    if( isset($_GET[ 'dev' ] ) )
    {
        //echo "<h1>", substr($_GET[ 'dev' ] )."
        $r = str_split( $_GET[ 'dev' ] );
        //var_dump( $r );
        $bandera = 1;
    }
?>

<html>
    <head>
        <title>  </title>
    </head>
        <body>
            <form action="operaciones.php">

                <?php
               
                    if( $bandera == 1) // 0 3 6 validando
                    {
                        for( $i = 0; $i <= 6; $i = $i + 3 )
                        {
                            if( substr( $_GET[ 'dev' ], $i, 3 ) == "XXX" || substr( $_GET[ 'dev' ], $i, 3 ) == "xxx")
                            {
                                echo "<h1> !Has Ganado!</h1>";
                            }

                            if( substr( $_GET[ 'dev' ], $i, 3 ) == "OOO" || substr( $_GET[ 'dev' ], $i, 3 ) == "ooo")
                            {
                                echo "<h1> !Has Perdido!</h1>";
                            }
                        }
                    }


                
                    $i = 0;
                    for( $i = 1; $i <= 9; $i ++)
                    {
                        //la bandera se activa
                        if( $bandera == 1 )
                        {
                            echo "<input type='text' name='texto$i' value='".$r[$i - 1 ]."' >";
                                    
                        }else{
                                echo "<input type='text' name='texto$i' value=''>";
                            
                            }
                    }
                ?>
                
                <input type="submit" value="Enviar">

            </form>
   
        </body>
</html>