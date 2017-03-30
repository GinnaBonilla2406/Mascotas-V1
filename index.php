<!--
* Autores: Ginna Bonilla - Jhon Moreno
--> 
<html ng-app="acumuladorApp"><!--Hay que observar que aquí se inicia el ng-app-->
	<head>
		<center>
			<img width="1350" src="imagenes/imagen.jpg" class="img-responsive">
		</center>
		<title></title>

		<?php
		/* se incluye la clase BD la cual contiene las funciones para el funcionamiento del prototipo */
		include ('BD.php');
		/*Se nombra una variable para crear un nuevo objeto*/
		$obj_o= new BD;
		/* trae la función estilos de bootstrap de la clase */
		echo $obj_o->estilos("bootstrap"); 
		?>

		<script type="text/javascript" src="js/angular.min.js"></script><!--En esta linea realizamos la conexion con el angular sin esto no nos funciona. -->
		<script type="text/javascript" src="js/nuevo.js"></script>
	
	</head>
	<body>
		<br>
		<div ng-controller="acumuladorAppCtrl"><!--Super importante el controlador aquí-->
			<div class='container'>
				<div class="row" id="mostrar" style="display: none;">
					<a href="ayuda.php"><button class="btn btn-primary">BUSCAR</button></a>
					<div class='col-xs-12 col-md-3'> 
					<br>				
						<?php
						echo $obj_o->traer_lista_informacion( "sintomas[] ", "tb_signos_y_sintomas","id_signos", "signos_y_sintomas");?> <!-- en esta linea traemos la información de una tabla de determinados campos en un select. -->          
			        </div>
			        <div class='col-xs-12 col-md-1'></div>
						<div class='col-xs-12 col-md-6'>
							<label><h2>Diagn&oacute;stico:</h2></label>
				                <table class='table table-hover table-responsive' border='0px'>
				                    <tr  class='info'> 
				                        <th>Enfermedad:</th>
				                        <th>Sintomas Encontrados:</th>
				                        <th>Sintomas en total</th>
				                    </tr> 
				                 
				                    <tr ng-repeat="x in campos">
				                        <td>{{ x.Enfermedad }}</td>  
				                        <td>{{ x.conteo_sintomas }}</td>   
				                        <td>{{ x.conteo_total }}</td> 
				                    </tr>   
				                </table> 
						</div>	                           
		        </div>	                
					           
				<div class="row" id="ocultar" style="display: block;">
					<div class='col-xs-12 col-md-3 ' > </div>
						<div class='col-xs-12 col-md-6 ' > 
	 						<?php include( "lista.php" );?>
	 					</div>
						<div class='col-xs-12 col-md-3 ' >  
					  		<div class="row">
				  				<div class="col-xs-12 col-md-9"></div>
							  	<div class="col-xs-12 col-md-3">
							 		<a href="ayuda.php"><button class="btn btn-primary">BUSCAR</button></a> 		
							  	</div>
				  			</div>
				 		</div>               
				</div>	   
			</div>            		
	</body>
</html>
      
		       
						
		            		
		            	
		        
		   
		       	
		           



									            
					               


					
						
						
					
					
						
			

					
					
			

			
 	

	
