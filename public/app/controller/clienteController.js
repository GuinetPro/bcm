app.controller("ClienteCtrl",function($scope,$http,$timeout,Region,Comuna){

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
