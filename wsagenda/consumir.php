
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
    </head>
    <body>
        
        <?php
            //insertando usuario
         //   $datos = array('nombre'    => 'Morticia',
           //                'apellidos' => 'addams frug',
             //              'email'     => 'morticia1@est',
               //            'contra'    => 'caramia');
        
            //$url = 'http://10.90.30.210/RDMAZTER/wsagenda/index.php/signup';
        
            //$options = array('http' => array('header'  => "Content-Type:application/json",
              //                               'header'  => "Accept:application/json",
                //                             'method'  => 'POST',
                  //                           'content' => json_encode($datos)));
        
      //      $context  = stream_context_create($options);
        //    $result = file_get_contents($url,false,$context);
          //  $valores = json_decode($result,TRUE);
		
       //     echo '<h3>Resultado de la transacción</h3>';
        //
          //  echo '<strong>Status:</strong> '.        $valores['status'].        "<br>";
           // echo '<strong>Status Message:</strong> '.$valores['status_message']."<br>";
        
       //     echo '<strong>Token:</strong> '.     $valores['data']['token'].     "<br>";
         //   echo '<strong>Usuario:</strong> '.   $valores['data']['nombre'].    "<br>";
          //  echo '<strong>Apellidos:</strong> '. $valores['data']['apellidos']. "<br>";
           // echo '<strong>eMail:</strong> '.     $valores['data']['email'].     "<br>";
           // echo '<strong>Contraseña:</strong> '.$valores['data']['clave'].     "<br>";
     //   ?>
        
        
        <?php
            //Consultando mensaje
            $datos = '';
            $url = 'http://10.90.30.210/RDMAZTER/wsagenda/index.php/3CEB1175/task';
        
            $options = array('http' => array('header'  => "Content-Type:application/json",
                                             'header'  => "Accept:application/json",
                                             'method'  => 'GET',
                                             'content' => $datos));
        
        
            //http_build_query($datos)	 
            $context  = stream_context_create($options);
            $result = file_get_contents($url,false,$context);
        
            echo '<h3>Datos completos</h3>';		
            
            var_dump($result);
		
            echo '<br><br><h3>Datos en vector</h3>';		
            
            $valores = json_decode($result,TRUE);	
            
            print_r($valores);
		
            echo '<br><br><h3>Datos formateados</h3>';
        
            echo '<strong>Status:</strong> '.        $valores['status']."<br>";
            echo '<strong>Status Message:</strong> '.$valores['status_message'].   "<br>";            
            echo '<strong>Usuario:</strong> '.       $valores['data']['nombre'].   "<br>";
            echo '<strong>Apellidos:</strong> '.     $valores['data']['apellidos']."<br>";
        
            echo '<strong>Mensajes</strong><br>';
        
            foreach($valores['data']['tareas'] as $tarea){
                echo $tarea['id']."....".$tarea['descripcion']."....".$tarea['registrada']."....".$tarea['estado']."<br>";
            }
        ?>
    </body>
</html>
