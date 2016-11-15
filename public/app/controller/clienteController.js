app.controller("ClienteCtrl",function($scope,$http,$timeout,Region,Comuna,Direccion,Telefono){

	   $scope.error = false;
	   $scope.errorMessage ="";
	   $scope.regiones     = [];
	   $scope.comunas      = [];
	   $scope.comunasSelector      = [];
	   $scope.direcciones  = [];
	   $scope.telefonos    = [];

	   $scope.data = {
	   	region:[],
	   	comuna:[],
	   	interior:"",
		calle:"",
		numero:"",
		telefono:"",
		dpt:"",
	   }

	   $scope.data2 = {
	   	numero:"",
	   	desc:"",
	   	principal:false,
	   }


	   $scope.reset = function(){

	   	$scope.data = {
		   	region:[],
		   	comuna:[],
		   	interior:"",
			calle:"",
			numero:"",
			telefono:"",
			dpt:"",
		   }

		$scope.data2 = {
		   	numero:"",
		   	desc:"",
		   	principal:false,
		   }

		 	$scope.error = false;
	  	 $scope.errorMessage ="";
	   }



		if ($('#cliente_id').length > 0) {
		  
		  	var client_id =  $('#cliente_id').val();

		  	Direccion.get(client_id).then(function (data) {
				 $scope.direcciones = data;
				 console.log(data);
			});


			Telefono.get(client_id).then(function (data) {
				$scope.telefonos = data;
			});

		}




	   Region.all().then(function (data) {
		   $scope.regiones = data;
		});



 	   Comuna.all().then(function (data) {
		   $scope.comunas = data;
		});


 	   $scope.loadComuna = function(){
   
		 var regionCurrent =  jQuery.parseJSON($scope.data.region);

 	   	 $scope.comunasSelector      =   $scope.comunas.filter(function(cm) {

    		return cm.region_id == regionCurrent.id; 
		 })
 	   	 	
 	   }

 	   $scope.saveDireccion = function(){

 	 
 	   		$scope.direcciones.push({

 	   			region: jQuery.parseJSON($scope.data.region),
			   	comuna: jQuery.parseJSON($scope.data.comuna),
			   	interior:$scope.data.interior,
				calle:$scope.data.calle,
				numero:$scope.data.numero,
				telefono:$scope.data.telefono,
				dpt:$scope.data.dpt,
 	   		});

 	   		
 	   		$('#modalDireccion').modal('hide'); 
 	   		$scope.reset(); 
 	   }


 	   $scope.saveTelefono = function(){

 	   		$scope.telefonos.push({
			   	numero:$scope.data2.numero,
				desc:$scope.data2.desc,
				principal:$scope.data2.principal,
 	   		});

 	   		$('#modalTelefono').modal('hide');     
 	   		$scope.reset(); 
 	   		
 	   }


		$scope.deleteDir = function(dir){
			$scope.direcciones.splice($scope.direcciones.indexOf(dir),1);
		}
		
		$scope.deleteTel = function(tel){
			$scope.telefonos.splice($scope.telefonos.indexOf(tel),1);
		}



});



app.controller("ClienteShowCtrl",function($scope,$http,$timeout,Modelo,Producto){

	   $scope.error = false;
	   $scope.errorMessage ="";
	   $scope.modelos     = [];
	   $scope.productos   = [];
	   $scope.categoria   ="";
	   $scope.marca       ="";
	   $scope.modelo      ="";



	   $scope.reset = function(){


	   }


 	   $scope.loadModelos = function(categoria_id){
   			
		
 	   	 $http.get(Base+'/modelos/'+categoria_id)
          .success(function (data) {
            $scope.modelos = data;
          });	
 	   }


 	   $scope.loadProductos = function(){
   			
	 	   Producto.get($scope.categoria,$scope.marca,$scope.modelo).then(function (data) {
			   $scope.productos = data;
			});
 	   }

 	   $scope.saveProducto = function (){




			//alert(  $( "input[name='_token']" ).val() );
			//return


			$.ajax({
				   
				   url: Base+'/productoCliente',
				   
				   method: 'POST',
				     dataType: 'json',
				   data:  $("form[name=crearProductocliente]").serialize(),				   
				   processData: false,
				   
				   contentType: false,
				   
				   success: function(response) {

							console.log(response);
				        },
		           error: function(xhr, status, error) {
		            		console.log(error);
		            }
			});



 	   		
 	   }

});
