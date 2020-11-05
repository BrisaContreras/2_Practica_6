<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
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
				<h3>Averiguar tipo de dato de una variable</h3>
				<article class="articulos">	
					<ul>
					<li>IS_BOOL:Tipo logico</li>
					<figure>
					    <img src="imagenes/v1.jpg" alt="">
                    </figure>
					<?php
						include "p6_contreras_12.php/varianble.php";
					?>
					<figure>
					    <img src="imagenes/1.jpg" alt="">
                    </figure>
					<li>IS_STRING:Valor tipo cadena</li>
					<figure>
					    <img src="imagenes/v2.jpg" alt="">
                    </figure>
					<figure>
					    <img src="imagenes/v22.jpg" alt="">
                    </figure>
					<?php
						include "p6_contreras_12.php/v2.php";
					?>
					<figure>
					    <img src="imagenes/2.jpg" alt="">
                    </figure>
					<li>IS_INT:Numero entero</li>
					<figure>
					    <img src="imagenes/v3.jpg" alt="">
                    </figure>
					<?php
						include "p6_contreras_12.php/v3.php";
					?>
					<figure>
					    <img src="imagenes/3.jpg" alt="">
                    </figure>
					<li>IS_FLOAT:Valor es numero decimales</li>
					<figure>
					    <img src="imagenes/v4.jpg" alt="">
                    </figure>
					<?php
						include "p6_contreras_12.php/v4.php";
					?>
					<figure>
					    <img src="imagenes/4.jpg" alt="">
                    </figure>
					<li>IS_NUMERIC:El valor es numerico o cadena numerica</li>
					<p>Al contrario de lo que sucede con is_int e is_float, si el número se encuentra 
					como cadena de texto sí se considera como tal: por ello es recomendable
					 usar is_numeric para por ejemplo validar un formulario.</p>
					 <figure>
					    <img src="imagenes/v5.jpg" alt="">
                    </figure>
					 <?php
						include "p6_contreras_12.php/v5.php";
					?>
					<figure>
					    <img src="imagenes/5.jpg" alt="">
                    </figure>
					<li>IS_NULL:Es valor nulo</li>
					<figure>
					    <img src="imagenes/v6.jpg" alt="">
                    </figure>
					<?php
						include "p6_contreras_12.php/v6.php";
					?>
					<figure>
					    <img src="imagenes/6.jpg" alt="">
                    </figure>
					<li>EMPTY:Devolverá true si la variable está vacía, siendo expresiones consideradas como vacías:
					    <ul>
						<li>"":Una cadena vacía</li>
						<li>0:0 como un entero</li>
						<li>0.0:0 como real</li>
						<li>"0":0 como cadena</li>
						<li>NULL</li>
						<li>FALSE</li>
						<li>ARRAY</li>
						<li>VAR$VAR; :Una variable declarada, pero sin un valor en una clase</li></ul></li>
						<figure>
					    <img src="imagenes/v7.jpg" alt="">
                        </figure>
						<figure>
						<img src="imagenes/v77.jpg" alt="">
						</figure>
						<?php
						include "p6_contreras_12.php/v7.php";
					    ?>
						<figure>
					    <img src="imagenes/7.jpg" alt="">
                        </figure>
					<p>Otras funciones de PHP que devuelven información sobre los tipos de datos básicos son:</p>
					<li>IS_ARRAY:La variable es un array.</li>
					<li>IS_RESOURCE:La variable contiene una referencia a un recurso.</li>
					<li>IS_OBJECT:La variable es un Objeto.</li>
					<li>METHOD_EXISTS:Objeto contiene un método con el nombre especificado.</li>
					</ul>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>
