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

console.log($("form[name=crearProductocliente]").serialize());
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

});

