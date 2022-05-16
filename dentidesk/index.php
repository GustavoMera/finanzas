<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php include("views/ingreso.php");?>
			</div>
			<div class="col">
				<?php include("views/egreso.php");?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php include("views/consultar.php");?>
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/funciones.js"></script>
</body> 
</html>

<!-- <script>
  $( document ).ready(function() {

  	$('#envEngreso').click(function()
	{
		var egreso = $('#egreso').val();

	    var parametros = {
			'tipo': 'E',
	        'valor': egreso
	    }

	    if (egreso != '') {

			$.ajax({
			    data: parametros,
			    url: 'apirest/src/movimientos.php',
			    type: 'post',
			    beforeSend: function() {},
			    success: function(response) {
			        
			    	Swal.fire({
						icon: 'success',
						title: 'Monto enviado correctamente',
						showConfirmButton: false,
						timer: 1500
					});

					setTimeout(function()
					{
						location.reload();
					},1500);
			    }
			});
		}else{
			Swal.fire({
				icon: 'warning',
				title: 'Debes ingresar un monto',
				showConfirmButton: false,
				timer: 1500
			});
		}
	})

	$('#envIngreso').click(function()
	{
		var ingreso = $('#ingreso').val();

	    var parametros = {
			'tipo': 'I',
	        'monto': ingreso
	    }

	    if (ingreso != '') {

			$.ajax({
			    data: parametros,
			    url: '/apirest/src/movimientos.php',
			    type: 'post',
			    beforeSend: function() {},
			    success: function(response) {
			        
			    	Swal.fire({
						icon: 'success',
						title: 'Monto enviado correctamente',
						showConfirmButton: false,
						timer: 1500
					});

					setTimeout(function()
					{
						location.reload();
					},1500);
			    }
			});
		}else{
			Swal.fire({
				icon: 'warning',
				title: 'Debes ingresar un monto',
				showConfirmButton: false,
				timer: 1500
			});
		}
	})

	$('#consultar').click(function()
	{
		$('#total').text();

		var fecha = $('#date').val();

		if (fecha != '') {

			$.ajax({
			    url: '/apirest/src/saldos.php?fecha='+fecha,
			    type: 'get',
			    beforeSend: function() {},
			    success: function(response) {
			        
			    	$('#total').text("$ "+response);	
			    }
			});
		}else{
			Swal.fire({
				icon: 'warning',
				title: 'Debes ingresar una fecha',
				showConfirmButton: false,
				timer: 1500
			});
		}
	})


  });
</script> -->