<?php
//Esta es la variable bandera que se activara.
    $bandera = 0;
    if( isset($_GET[ 'dev' ] ) )
    {
        $r = str_split( $_GET[ 'dev' ] );
        var_dump( $r );
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
                $i = 0;
                for( $i = 1; $i <= 9; $i ++)
                {
                    //la bandera se activa
                    if( $bandera == 1 )
                    {
                        echo "<input type='text' name='texto$i' value='".$r[$i - 1 ]."'>";
                                  
                    }else{
                            echo "<input type='text' name='texto$i' value=''>";
                          
                        }
                }
            ?>
              
            <input type="submit" value="Enviar">

         

            </option>

        </form>
   
        </body>
</html>