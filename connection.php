        <?php

			// Conectando, seleccionando la base de datos
			// $mysqli = new mysqli('HOST', 'USER', 'PASS', 'NOMBRE_BD');
			$mysqli = new mysqli('localhost', 'root', 'Root.123', 'webPrueba');
			$mysqli->set_charset("utf8");


			/* En caso de que haya error... */
			if ($mysqli->connect_errno) {
				echo "No se pudo conectar a la BD";
				echo "Error: Fallo al conectarse a MySQL debido a: \n";
				echo "Errno: " . $mysqli->connect_errno . "\n";
				echo "Error: " . $mysqli->connect_error . "\n";
				exit;
			 } /*else {
			 	echo "Conected!";
			 }*/

			// Creamos variable $item que recoge el valor del id del form
			$id_form = $_POST["id"];

			// La tabla Prueba formada por columna id y columna nombre.
			$tabla = "prueba";

			//$sql = 'select nombre from '.$tabla.' where id = '.$id_form.';';
			$sql = 'select * from '.$tabla.' where id = '.$id_form.';';


			// objeto que contiene tablas, datos, etc...
			$resultado = $mysqli->query($sql);

			// Si la consulta falla....
			if(!$resultado = $mysqli->query($sql)) {
				echo "La consulta falló ";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $mysqli->errno . "\n";
				echo "Error: " . $mysqli->error . "\n";
				exit;
			}

			// No hay datos en esa consulta
			if ($resultado->num_rows === 0) {
				echo "No hay datos contenidos.";
				exit;
			} else {

			    /* obtener el array de objetos */
			    while ($fila = $resultado->fetch_row()) {
			    	// Obtiene segundo elemento
			        echo $fila[1];
			    }

			    /* liberar el conjunto de resultados */
			    $resultado->close();
			}


			/* cerrar la conexión */
			$mysqli->close();


        ?>