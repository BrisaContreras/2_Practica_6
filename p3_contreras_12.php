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
				<h3>RELLENAR UNA CADENA</h3>
				<p>Usaremos la función de PHP str_pad, para rellenar una cadena con espacios u otros caracteres.
                 En el segundo parámetro especificamos la longitud de la cadena tras rellenarla,
				 en el tercer parámetro los caracteres que deseamos usar y el cuarto parámetro puede 
				 tomar uno de los siguientes valores:</p>
				<article class="articulos">	
					<h4>STR_PAD_BOTH</h4>
					<p>
					Cojín a ambos lados de la cadena. Si no es un número par, el lado derecho se pone el relleno extra
					</p>
					<figure>
					    <img src="imagenes/both.jpg" alt="">
                    </figure>
					<?php
						include "p6_contreras_12.php/cadenaboth.php";
					?>
					<figure>
					    <img src="imagenes/bothpan.jpg" alt="">
                    </figure>
					<h4>STR_PAD_LEFT</h4>
					<p>
                    Pad para el lado izquierdo de la cuerda/linea
					</p>
					<figure>
					    <img src="imagenes/leftco.jpg" alt="">
                    </figure>
					<?php
						include "p6_contreras_12.php/cadena.php";
					?>	
					<figure>
					    <img src="imagenes/leftpan.jpg" alt="">
                    </figure>
					<h4>STR_PAD_RIGHT</h4>
					<p>
					Pad para el lado derecho de la cadena. Esto es por defecto
					</p>
					<figure>
					    <img src="imagenes/righco.jpg" alt="">
                    </figure>
					<?php
						include "p6_contreras_12.php/cadenaright.php";
					?>
					<figure>
					    <img src="imagenes/righ.jpg" alt="">
                    </figure>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>