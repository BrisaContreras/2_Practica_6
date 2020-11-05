<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Brisa Contreras 12</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/contr.php";
		include "includes/slider.php";
	?>
	
	<section class="contenido">
			<h3>Preguntas</h3>
			<article class="serv1">
				<h4>¿Cuales son los tipos de datos?</h4>
				<h4>Conclusion </h4>
				<p>
                INT-numero entero, FLOAT-numeros reales,COMPLEX-numeros complejos,
                STRINGS/STR-texto, BOOL-valores logicos, None- nulos.
				</p>
				<figure>
					<img src="imagenes/404.jpg" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>¿Qué es ARRAY?</h4>
				<h4>Conclusiones </h4>
				<p>
                Un array, es un tipo de dato estructurado que permite almacenar un conjunto de
                datos homogeneo, es decir, todos ellos del mismo tipo y relacionados. Cada uno 
                de los elementos que componen un vector pueden ser de tipo simple como caracteres,
                entero o real, o de tipo compuesto o estructurado como son vectores, estructuras.
				</p>
				<figure>
					<img src="imagenes/array.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>¿Qué es str_pad?</h4>
				<h4>Conclusiones </h4>
				<p>
                Esta función devuelve el string input rellenado por la izquierda, la derecha,
                o en ambos lados hasta la longitud especificada. Si el argumento opcional pad_string 
                no se suministra, el input se rellena con espacios,de lo contrario, se rellena con
                los caracteres de pad_string hasta el límite.
				</p>
				<figure>
					<img src="imagenes/101.png" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>