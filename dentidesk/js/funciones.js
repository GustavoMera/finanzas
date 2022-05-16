
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