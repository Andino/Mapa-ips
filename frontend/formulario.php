<!DOCTYPE html>
<!-- saved from url=(0047)http://fundacionpoma.org/mapaips/formulario.php -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<link rel="apple-touch-icon" sizes="76x76" href="http://fundacionpoma.org/mapaips/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="http://fundacionpoma.org/mapaips/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Fundación Poma</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

	<!-- CSS Files -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/material-kit.css" rel="stylesheet">
	<link href="css/site.css" rel="stylesheet">
</head>
<?php include ('header.php');?>
<body class="landing-page" style="">
	<style type="text/css">
		select.awe{
			background-color: transparent!important;
			color: black!important;
		}
	</style>

	<div class="wrapper">
		<div class="header" style="background-color: transparent; margin-top: -5%;">
		</div>
		<div class="main main-raised">

			<div class="" style="margin: 0px;width: 100%;padding-top: 40px;">
				<div>
									</div>

				<form method="post">
					<fieldset>
						<div class="row">
							<div class="col s6">
								<div class="card " style="padding: 15px;margin-bottom: 10px;">
									<a style="margin-bottom:10px;color: #000;cursor: context-menu;text-decoration: none;font-size: 18px!important;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clipboard"></i> DATOS GENERALES
									</a>
									<div class="form-group is-empty" style="margin: 0px; padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Nombre del programa:</label>
										<input type="text" id="nombre" class="form-control" name="nombreprograma" required="">
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px; padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Nombre de la organización:</label>
										<input type="text" id="email" class="form-control" name="nombreorganizacion" required="">
									<span class="material-input"></span></div>
									<div class="form-group" style="margin: 0px; padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Clasificación de la organización que ejecuta el programa:</label>
										<select class="form-control awe" name="tipoorganizacion" requeried="">
											<option value="Empresa privada">Empresa privada</option>
											<option value="ONG">ONG</option>
											<option value="Asocio público-privado">Asocio público-privado</option>
											<option value="Fundación privada sin fines de lucro">Fundación privada sin fines de lucro</option>
										</select>
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px; padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Actividad principal de la organización:</label>
										<textarea class="form-control" rows="7" name="actividadprincipal" required=""></textarea>
									<span class="material-input"></span></div>
								</div>
							</div>
							<div class="col s6">
								<div class="card" style="padding: 15px; margin-bottom: 10px;">
									<a style="margin-bottom:10px;color: #000;cursor: context-menu;text-decoration: none;font-size: 18px!important;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-clipboard-check"></i> OBJETIVOS DE DESARROLLO SOSTENIBLE A LOS QUE CONTRIBUYE
									</a>
									<br>
									<br>
									<div class="col s12" style="padding-left: 28px;">
										<div class="togglebutton">
											<label>
												<input type="checkbox" name="finpobresa" value="x"><span class="toggle"></span> Fin de la pobreza
											</label>
											<br>
											<label>
												<input type="checkbox" name="hambrecero" value="x"><span class="toggle"></span> Hambre cero
											</label>
											<br>
											<label>
												<input type="checkbox" name="saludbienestar" value="x"><span class="toggle"></span> Salud y bienestar
											</label>
											<br>
											<label>
												<input type="checkbox" name="educalidad" value="x"><span class="toggle"></span> Educación de calidad
											</label>
											<br>
											<label>
												<input type="checkbox" name="igualgene" value="x"><span class="toggle"></span> Igualdad de género
											</label>
											<br>
											<label>
												<input type="checkbox" name="aguasanea" value="x"><span class="toggle"></span> Agua limpia y saneamiento
											</label>
										</div>
									</div>
									<div class="col s12" style="padding-left: 28px;">
										<div class="togglebutton">
											<label>
												<input type="checkbox" name="energiase" value="x"><span class="toggle"></span> Energía asequible y no contaminante
											</label>
											<br>
											<label>
												<input type="checkbox" name="trabacre" value="x"><span class="toggle"></span> Trabajo decente y crecimiento económico
											</label>
											<br>
											<label>
												<input type="checkbox" name="induinno" value="x"><span class="toggle"></span> Industria, innovación e infraestructura
											</label>
											<br>

											<label>
												<input type="checkbox" name="redudes" value="x"><span class="toggle"></span> Reducción de las desigualdades
											</label>
											<br>

											<label>
												<input type="checkbox" name="ciuco" value="x"><span class="toggle"></span> Ciudades y comunidades sostenibles
											</label>
											<br>

											<label>
												<input type="checkbox" name="proco" value="x"><span class="toggle"></span> Producción y consumo responsables
											</label>
											<br>
										</div>
									</div>
									<div class="col s12" style="padding-left: 28px;">
										<div class="togglebutton">
											<label>
												<input type="checkbox" name="accli" value="x"><span class="toggle"></span> Acción por el clima
											</label>
											<br>

											<label>
												<input type="checkbox" name="visu" value="x"><span class="toggle"></span> Vida submarina
											</label>
											<br>

											<label>
												<input type="checkbox" name="vieco" value="x"><span class="toggle"></span> Vida de ecosistemas terrestres
											</label>
											<br>

											<label>
												<input type="checkbox" name="pazju" value="x"><span class="toggle"></span> Paz, justicia e instituciones sólidas
											</label>
											<br>
											<label>
												<input type="checkbox" name="alilo" value="x"><span class="toggle"></span> Alianzas para lograr los objetivos
											</label>
											<br>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col s4">
								<div class="card" style="padding: 15px;    margin-bottom: 10px;">
									<a style="margin-bottom:10px;color: #000;cursor: context-menu;text-decoration: none;font-size: 18px!important;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-book"></i> DESCRIPCIÓN DEL PROGRAMA
									</a>
									<div class="form-group is-empty" style="margin: 0px;    padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Explicar brevemente el propósito del proyecto</label>
										<textarea class="form-control" placeholder="" rows="3" name="explica" required=""></textarea>
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px;    padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Mencione las actividades específicas que lleva a cabo para cumplir con el propósito del proyecto</label>
										<textarea class="form-control" placeholder="" rows="3" name="actividadespecifica" required=""></textarea>
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px;    padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">¿Posee video explicativo del programa? De ser así, anexarlo o indicar link:</label>
										<textarea class="form-control" placeholder="" rows="3" name="videoexpl" required=""></textarea>
									<span class="material-input"></span></div>
								</div>
							</div>
							<div class="col s4">
								<div class="card" style="padding: 15px;    margin-bottom: 10px;">
									<a style="margin-bottom:10px;color: #000;cursor: context-menu;text-decoration: none;font-size: 18px!important;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user-circle"></i> BENEFICIARIOS
									</a>
									<div class="form-group is-empty" style="margin: 0px; padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Cantidad de beneficiarios directos del proyecto:</label>
										<textarea class="form-control" placeholder="" rows="6" name="canti" required=""></textarea>
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px; padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Área geográfica (departamento, municipio o comunidades) en que se desarrolla el proyecto:</label>
										<textarea class="form-control" placeholder="" rows="7" name="area" required=""></textarea>
									<span class="material-input"></span></div>
								</div>
							</div>


							<div class="col s4">
								<div class="card" style="padding: 15px;    margin-bottom: 10px;">
									<a style="margin-bottom:10px;color: #000;cursor: context-menu;text-decoration: none;font-size: 18px!important;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user-plus"></i> COLABORACIÓN
									</a>

									<div class="form-group" style="margin: 0px; padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">¿Existen otras instituciones que colaboran en la ejecución del programa? De ser así, identificarlas.</label>
										<div class="form-group is-empty" style="margin: 0px;">
											<label class="control-label" style="font-size: 14px;">Intituciones públicas:</label>
											<textarea class="form-control" rows="5" name="publi" required=""></textarea>
										<span class="material-input"></span></div>
										<div class="form-group is-empty" style="margin: 0px;">
											<label class="control-label" style="font-size: 14px;">Instituciones privadas:</label>
											<textarea class="form-control" rows="6" name="priva" required=""></textarea>
										<span class="material-input"></span></div>

									</div>
								</div>
							</div>
							<div class="col s12">
								<div class="card" style="padding: 15px;    margin-bottom: 10px;">
									<a style="margin-bottom:10px;color: #000;cursor: context-menu;text-decoration: none;font-size: 18px!important;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle-notch"></i> IMPACTO
									</a>
									<div class="form-group is-empty" style="margin: 0px;padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">¿El programa tiene definidos indicadores o métricas para la medición del impacto generado? De ser así, identificarlas.</label>
										<textarea class="form-control" placeholder="" rows="1" name="indica" required=""></textarea>
									<span class="material-input"></span></div>
									<div class="form-group  is-empty" style="DISPLAY: NONE;">
										<label class="control-label" style="font-size: 14px;">Componentes de impacto en el IPS.</label>
										<textarea class="form-control" placeholder="" rows="3" name="compo"></textarea>
									<span class="material-input"></span></div>
								</div>
							</div>
							<div class="col s12">
								<div class="card" style="padding: 15px;    margin-bottom: 10px;">
									<a style="margin-bottom:10px;color: #000;cursor: context-menu;text-decoration: none;font-size: 18px!important;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-address-card"></i> INFORMACION DE CONTACTO
									</a>

									<div class="form-group is-empty" style="margin: 0px;padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Nombre.</label>
										<textarea class="form-control" placeholder="Nombre de la persona encargada del proyecto" rows="3" name="name" required=""></textarea>
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px;padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Cargo.</label>
										<textarea class="form-control" placeholder="Cargo dentro de la organizacion" rows="3" name="cargo" required=""></textarea>
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px;padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Correo.</label>
										<input class="form-control" type="email" placeholder="correo dentro de la organizacion" name="email" required="">
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px;padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Pagina Web</label>
										<textarea class="form-control" placeholder="URL de la organizacion" rows="3" name="web" required=""></textarea>
									<span class="material-input"></span></div>
									<div class="form-group is-empty" style="margin: 0px;padding-left: 28px;">
										<label class="control-label" style="font-size: 14px;">Telefono</label>
										<textarea class="form-control" placeholder="Telefono u telefonos de contacto en la organizacion" rows="3" name="tel" required=""></textarea>
									<span class="material-input"></span></div>
								</div>
							</div>
							<div class="col s12" style="text-align: center;">
								<button type="submit" class="waves-effect waves-light btn" style="background-color: #00afbe;
							color: white;">Enviar<div class="ripple-container"></div></button>
							</div>
						</div>
					</fieldset>
				</form>

			</div>

		</div>
	</div>



	<footer class="footer">
		<div class="container" style="margin: 0px 30px 0px;">
			<div class="copyright pull-left">
				Fundación Poma, Impulsando el Progreso Social | Todos los derechos reservados, 2017
			</div>
		</div>
	</footer>

	


<!--   Core JS Files   -->

</body></html>