<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Almacen</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>public/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/css/semantic.min.css">
	<!-- <link href="<?php echo base_url() ?>public/css/iniciof.min.css" rel="stylesheet" type="text/css" media="only screen and (max-width: 400px)" > -->
	<style>

	
@font-face{
	font-family: 'titulos1';
    src: local('titulos1'), /* Para el resto de navegadores */
         url('public/fonts/plantc.ttf') format('truetype');

}
.form{

			margin-top: 50px ;
			/*padding-top:500px !important;*/
}

	img{
		position: relative;
	}
	.datos.Blancos, .Blancos{
		color: white !important;
		font-size: 17px !important;
	}
		h1{
			text-align: center;
			font-size: 31px;
			font-family: 'titulos1';
			color: #007F7F;
			display: inline-block;
			position: relative;
			left: -20px;
		}
	#encabezado{
		background:#007F7F;
		height: 350px;
	}
	#caja{
		width: 0px;
		height: 0px;
		position: relative;
		
	}
	#ingresar{
		width:210px ;
		height: 62px;
		background: #EF0128;
		padding: 5px;
		outline: none;
		border: none transparent;
		border-radius: 5px;
		color: white;
		font-size: 22px;
	}
	#contenido{
		background: #fff;
		height: 300px;
	}
	#montaC{
		opacity: 0.2;
	}
		@media only screen and (max-width:400px) {
		#conImg, img{
			display: none !important;
		}
		.form{
			display: block;
			position: relative;
			margin: 0 auto;
			/*border: 1px solid yellow;*/
			/*width: 300px !important;*/
			text-align: center;


		}
		.form label{
			display: block !important;
		}
		.eight{
			display: inline-block !important;
			position: relative !important;
			/*border: 1px solid orange;*/
			width: 100% !important;
			text-align: center;
			margin: 0 auto;
		}
		*{
			/*border: 1px solid red;*/
		}
		body{
			text-align: center !important;

		}
	}
	</style>
</head>
<body>
	
