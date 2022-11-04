<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<?php
if (isset($_GET['eliminado'])) {
	$eliminado = $_GET['eliminado'];
} else {
	die('Parámetro "eliminado" no detectado...');
}

if (!empty($eliminado) || $eliminado==0) {
	/** SE CREA EL OBJETO DE CONEXION */
	@$link = new mysqli('localhost:3310', 'valdo', 'olvera21', 'marketzone2');

	/** comprobar la conexión */
	if ($link->connect_errno) {
		die('Falló la conexión: ' . $link->connect_error . '<br/>');
		/** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
	}

	/** Crear una tabla que no devuelve un conjunto de resultados */
	if ($result = $link->query("SELECT * FROM productos WHERE eliminado <= $eliminado")) {
		$row = $result->fetch_all(MYSQLI_ASSOC);
		/** útil para liberar memoria asociada a un resultado con demasiada información */
		foreach ($row as $num => $registro) {            // Se recorren tuplas
			foreach ($registro as $key => $value) {      // Se recorren campos
				$data[$num][$key] = $value;
			}
		}
		$result->free();
	}

	$link->close();
}
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Producto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
<script>
		function show() {
			// se obtiene el id de la fila donde está el botón presinado
			var rowId = event.target.parentNode.parentNode.id;

			// se obtienen los datos de la fila en forma de arreglo
			var data = document.getElementById(rowId).querySelectorAll(".row-data");
			var texto = data[7].innerHTML;

			var texto2 = texto.replace('<img src="', '')
			var texto3 = texto2.replace('" width="200px"', '')
			var texto4 = texto3.replace('height="200px"', '')
			var texto5 = texto4.replace('>', '')
			var img = texto5.replace('>', '')

			/**
			querySelectorAll() devuelve una lista de elementos (NodeList) que 
			coinciden con el grupo de selectores CSS indicados.
			(ver: https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors)

			En este caso se obtienen todos los datos de la fila con el id encontrado
			y que pertenecen a la clase "row-data".
			*/
			var id = data[0].innerHTML;
			var nombre = data[1].innerHTML;
			var marca = data[2].innerHTML;
			var modelo = data[3].innerHTML;
			var precio = data[4].innerHTML;
			var unidades = data[5].innerHTML;
			var detalles = data[6].innerHTML;
			var imagen = img.replace('http://localhost/tecnologiasweb/practicas/p05/', '');

			send2form(id, nombre, marca, modelo, precio, unidades, detalles, imagen);
		}

		function send2form(id, nombre, marca, modelo, precio, unidades, detalles, imagen) { //form) { 
			var form = "http://localhost:8008/tecnologiasweb/p07/formulario_productos_v2.php";
			var idv2 = "id=" + id;
			var nombrev2 = "nombre=" + nombre;
			var marcav2 = "marca=" + marca;
			var modelov2 = "modelo=" + modelo;
			var preciov2 = "precio=" + precio;
			var unidadesv2 = "unidades=" + unidades;
			var detallesv2 = "detalles=" + detalles;
			var imagenv2 = "imagen=" + imagen;
			window.open(form + "?"+ idv2 + "&" + nombrev2 + "&" + marcav2 + "&" + modelov2 + "&" + preciov2 + "&" + unidadesv2 + "&" + detallesv2 + "&" + imagenv2);
		}
	</script>
	<h3>PRODUCTO</h3>

	<?php if (isset($data)) : ?>

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Precio</th>
					<th scope="col">Unidades</th>
					<th scope="col">Detalles</th>
					<th scope="col">Imagen</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$id = 0;
				foreach ($data as $key => $value) {
					echo '<tr id=' . $id . '>';
					echo '<th scope="row" class="row-data"> ' . $value["id"] . ' </th>';
					echo '<td class="row-data"> ' . $value["nombre"] . '</td>';
					echo '<td class="row-data"> ' . $value["marca"] . '</td>';
					echo '<td class="row-data"> ' . $value["modelo"] . '</td>';
					echo '<td class="row-data"> ' . $value["precio"] . '</td>';
					echo '<td class="row-data"> ' . $value["unidades"] . '</td>';
					echo '<td class="row-data"> ' . $value['detalles'] . '</td>';
					echo '<td class="row-data"><img src=C:\xampp\htdocs\tecnologiasweb\p05-base' . $value['imagen'] . ' width="100px" height="100px" /></td>';
					echo '<td><input type="submit" value="Modificar" onclick="show()" /></td>';
					echo '</tr ' . $id++ . '>';
				}
				?>

			</tbody>
		</table>
	<?php endif; ?>
</body>

</html>