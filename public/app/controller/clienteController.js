app.controller("ClienteCtrl",function($scope,$http,$timeout,Region,Comuna,Direccion,Telefono){

	   $( "#div_form_direccion" ).hide();
	   $( "#div_form_telefono" ).hide();

	   $scope.error = false;
	   $scope.errorMessage ="";
	   $scope.regiones     = [];
	   $scope.comunas      = [];
	   $scope.comunasSelector      = [];
	   $scope.direcciones  = [];
	   $scope.telefonos    = [];

	   $scope.editTelefono    = [];
	   $scope.data2 = {
	   	numero:"",
	   	desc:"",
	   	principal:false,
	   	error:false
	   }

	   $scope.btnTelefono  = 'Agregar';
	   $scope.btnDireccion = 'Agregar';

	   $scope.editTelefono= false;

		
		$scope.agregarDireccion = function(){

			google.maps.event.trigger(map, "resize");
			 if ( $( "#div_form_direccion" ).is( ":hidden" ) ) {
			 	
			    $( "#div_form_direccion" ).slideDown( "slow" );
			    $scope.btnDireccion  = 'Cerrar';

			  } else {
			    $( "#div_form_direccion" ).slideUp( "slow" );
			    $scope.btnDireccion  = 'Agregar';
			  }
		}


		$scope.cerrarFormDireccion = function(){

			 $( "#div_form_direccion" ).slideUp( "slow" );
			 $scope.btnDireccion  = 'Agregar';
		}
	
	   $scope.reset = function(){

		   $scope.data2 = {
		   	numero:"",
		   	desc:"",
		   	principal:false,
		   	error:false
		   }

		   //$scope.region="";
		   //$scope.comuna="";
		   $scope.interior="";
		   $scope.calle="";
		   $scope.fijo="";
		   $scope.latitude="";
		   $scope.longitude="";

		   $scope.error = false;
	  	   $scope.errorMessage ="";
	  	   $('#numeroTelefono').val("");
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


 	   $scope.loadComuna = function(region){
   		
		 var regionCurrent =  jQuery.parseJSON(region);

 	   	 $scope.comunasSelector      =   $scope.comunas.filter(function(cm) {

    		return cm.region_id == regionCurrent.id; 
		 })
 	   	 	
 	   }

 	   $scope.guardarDireccion = function(){

    		$scope.direcciones.push({
 	   			region: jQuery.parseJSON($scope.region),
			   	comuna: jQuery.parseJSON($scope.comuna),
			   	interior:$scope.interior,
				calle:$scope.calle,
				numero:$scope.numero,
				telefono:$scope.fijo,
				comentario:$scope.numero,
				fijo:$scope.fijo,
				latitud: document.getElementById('latitude'),
				longitud: document.getElementById('longitude'),
				dpt:$scope.dpt,
 	   		});

 	   		$( "#div_form_direccion" ).slideUp( "slow" );
 	   		$scope.reset(); 
   		  
 	   }


		$scope.agregarTelefono = function(){

			if ( $( "#div_form_telefono" ).is( ":hidden" ) ) {
			 	
			    $( "#div_form_telefono" ).slideDown( "slow" );
			    $scope.btnTelefono  = 'Cerrar';
			  } else {
			    $( "#div_form_telefono" ).slideUp( "slow" );
			    $scope.btnTelefono  = 'Agregar';
			  }
		}

		$scope.cerrarFormTelefono = function(){

			 $( "#div_form_telefono" ).slideUp( "slow" );
			 $scope.btnTelefono  = 'Agregar';
		}


 	   $scope.guardarFormTelefono = function(){

 	   		var numero = $('#numeroTelefono').val();

 	   		if( numero == ""){
 	   			$scope.data2.error = true;
 	   			return;
 	   		}

	 	   	$scope.telefonos.push({
				numero:numero,
				desc:$scope.data2.desc,
				principal:false,
	 	   	});
			
			$scope.data2.error = false;
	 	   	$( "#div_form_telefono" ).slideUp( "slow" );
 	   		$scope.reset(); 
	 	       		
 	   }


 	   $scope.guardarFormTelefono = function(tel){

 	   		var numero = $('#numeroTelefono').val();

 	   		if( numero == ""){
 	   			$scope.data2.error = true;
 	   			return;
 	   		}

	 	   	$scope.telefonos.push({
				numero:numero,
				desc:$scope.data2.desc,
				principal:false,
	 	   	});
			
			$scope.data2.error = false;
	 	   	$( "#div_form_telefono" ).slideUp( "slow" );
 	   		$scope.reset(); 
	 	       		
 	   }
//guardarFormEdit


		$scope.deleteDir = function(dir){
			$scope.direcciones.splice($scope.direcciones.indexOf(dir),1);
		}
		
		$scope.deleteTel = function(tel){
			$scope.telefonos.splice($scope.telefonos.indexOf(tel),1);
		}





    $(".phone").intlTelInput({
       allowDropdown: false,
      // autoHideDialCode: false,
       autoPlaceholder: "true",
      dropdownContainer: "body",
      // excludeCountries: ["us"],
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      //  initialCountry: "auto",
     // nationalMode: false,
      numberType: "MOBILE",
      onlyCountries: ['cl'],
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
       //utilsScript: "build/js/utils.js"
    });



    var telInput = $(".phone"),
    errorMsg = $(".error-msg"),
      validMsg = $(".valid-msg");

    // initialise plugin
    telInput.intlTelInput({
      utilsScript: "../../build/js/utils.js"
    });

    var reset = function() {
      telInput.removeClass("error");
      errorMsg.addClass("hide");
      validMsg.addClass("hide");
    };

  // on blur: validate
  telInput.blur(function() {
    reset();
    console.log(telInput.val());
    if ($.trim(telInput.val())) {
      if (telInput.intlTelInput("isValidNumber")) {
        validMsg.removeClass("hide");
      } else {
        telInput.addClass("error");
        errorMsg.removeClass("hide");
      }
    }
  });

// on keyup / change flag: reset
telInput.on("keyup change", reset);

});



app.controller("ClienteShowCtrl",function($scope,$http,$timeout,Modelo,Producto,ProductoCliente){

	   $scope.error = false;
	   $scope.errorMessage ="";
	   $scope.modelos     = [];
	   $scope.productos   = [];
	   $scope.categoria   ="";
	   $scope.marca       ="";
	   $scope.modelo      ="";
	   $scope.ProductosCliente = [];


 	   ProductoCliente.get($('#cliente_id').val()).then(function (data) {
		   $scope.ProductosCliente = data;
		   console.log(data);
		});

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


			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });


            $.ajaxPrefilter(function(options, originalOptions, xhr) { // this will run before each request
		        var token = $('meta[name="csrf-token"]').attr('content'); // or _token, whichever you are using

		        if (token) {
		            return xhr.setRequestHeader('X-CSRF-TOKEN', token); // adds directly to the XmlHttpRequest Object
		        }
		    });


			$.ajax({
				   
				   url: Base+'/productoCliente/'+$('#cliente_id').val(),			   
				   type: "POST",			  
				   data:  $("form[name=crearProductocliente]").serialize(),				   
				   
				   success: function(response) {
				   		$('#productoModal').modal('hide')
							
				   },
		           error: function(xhr, status, error) {
		            	$('#productoModal').modal('hide')
		           }
			});



 	   		
 	   }

});


app.controller("TallerCtrl",function($scope,$http,$timeout,Region,Comuna){

	   $scope.regiones     = [];
	   $scope.comunas      = [];
	   $scope.coberturas   = [];
	   $scope.regiones2    = [];
	   $scope.taller 	   = [];
	   $scope.taller_id    = document.getElementById("taller_id").value;

	   $http.get(Base+'/taller/'+$scope.taller_id)
          .success(function (data) {
            $scope.taller = data;
            $scope.coberturas = data.com;
        });	

	   $scope.cobertura   =  {
	   	   region : [],
           comuna : [],      
           kilometro : "",          
           valor_visita : "",           
           tipo_sat  :   "",
           respuesta : "",
           id: 0
	   };
                 


	   Region.all().then(function (data) {
		   $scope.regiones = data;
		});



 	   Comuna.all().then(function (data) {
		   $scope.comunas = data;
		});


 	   $scope.loadComuna = function(region){
   	
		 //var regionCurrent =  jQuery.parseJSON(region);

 	   	 $scope.comunasSelector      =   $scope.comunas.filter(function(cm) {

    		return cm.region_id == region; 
		 })
 	   	 	
 	   }   



 	   $scope.loadComuna2 = function(region){
   		
		 var regionCurrent =  jQuery.parseJSON(region);

 	   	 $scope.comunasSelector2      =   $scope.comunas.filter(function(cm) {
    		return cm.region_id == regionCurrent.id; 
		 })
 	   	 	
 	   }  

 	   $scope.openModalCobertura= function(event){
 	   		event.preventDefault();
 	   		$('#myModal').modal('show');
 	   } 

 	   $scope.saveCobertura= function(){
 	   		
 	   		$scope.cobertura.region =  jQuery.parseJSON($scope.cobertura.region);
 	   		$scope.cobertura.comuna =  jQuery.parseJSON($scope.cobertura.comuna);
 	   		$scope.coberturas.push($scope.cobertura);

 	   	   $scope.cobertura   =  {
	   	   		region : [],
           		comuna : [],      
           		kilometro : "",          
           		valor_visita : "",           
           		tipo_sat  :   "",
           		respuesta : "",
           		id: 0
	   		};


 	   		$('#myModal').modal('hide');
 	   } 

 	   $scope.deleteCobertura = function(co){
 	   		$scope.coberturas.splice($scope.coberturas.indexOf(co),1);
 	   }
});


app.controller("UserCtrl",function($scope,$http,$timeout){

	$scope.talleres = [];
	$scope.rol_tecnico = false;
	$scope.user = [];
    $scope.user_id    = document.getElementById("user_id").value;


	$http.get(Base+'/user/'+$scope.user_id)
          .success(function (data) {
            $scope.user = data;
            $scope.talleres = data.talleresAsociados;
     });	

	$scope.relacionarTaller = function(event){
		
		var error = true;	

		if($("#taller_asociado option:selected").val() ==  "" ){
			alert("Deebs escoger un Taller");
		    return;
		} 

		$scope.talleres.map(function(val) {
				   
			if( val.id == $("#taller_asociado option:selected").val()  ){
				alert("Este Taller ya esta Asociado");
		     	error = false;
		     }


					
		});		

		if( error ){
			$scope.talleres.push({nombre:$("#taller_asociado option:selected").text(),id:$("#taller_asociado option:selected").val()});
		}
	}


 	$scope.eliminarTaller = function(taller){


 		bootbox.confirm({
		    message: "Estas seguro de querer eliminar esta Relacion?",
		    buttons: {
		        confirm: {
		            label: 'Si',
		            className: 'btn-primary'
		        },
		        cancel: {
		            label: 'No',
		            className: 'btn-info'
		        }
		    },
		    callback: function (result) {
		    	if(result){
			    	$.ajax({
					    url: Base+'/tecnico/'+taller.id,
					    type: 'DELETE',
					    success: function(result) {
					        $scope.talleres.splice($scope.talleres.indexOf(taller),1);
					    }
					});    		
		    	}
		    }
		});


 	   	
 	}

	$scope.relacionarRol = function(){
			console.log($scope.rol_id);
		if( $scope.rol_id != 3 ){
			$scope.rol_tecnico = true;
		}else{
			$scope.rol_tecnico = false;
		}
	}	



});

app.controller("ProductoCtrl",function($scope,$http,$timeout){

	$scope.tipoProductos = [];
	$scope.litrajeList   = [];
	$scope.tipoGasList   = [];
	$scope.tiroList      = [];

	
	$scope.loadTipoProductos = function(self){
		$http.get(Base+'/tipoproducto/'+document.getElementById("marca_id").value)
          .success(function (data) {
            $scope.tipoProductos = data;
     	});	
	}
 
 	$scope.loadLitrajes = function(){
		$http.get(Base+'/litraje/'+$scope.tipo_producto)
          .success(function (data) {
            $scope.litrajeList = data;
     	});	
	}

 	$scope.loadTipoGas = function(){
		$http.get(Base+'/tipogas/'+$scope.litraje)
          .success(function (data) {
            $scope.tipoGasList = data;
     	});	
	}


 	$scope.loadTiro = function(){
		$http.get(Base+'/tiros/'+$scope.tipo_gas)
          .success(function (data) {
            $scope.tiroList = data;
     	});	
	}

});