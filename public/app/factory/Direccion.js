app.factory('Direccion', function($http, $q ,  $filter) {
     
    var factory = {}; 
 

   factory.get = function(cliente_id) {
          
       var deferred = $q.defer();

         $http.get(Base+'/direcciones/'+cliente_id)
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;

    }

 
    return factory;
});