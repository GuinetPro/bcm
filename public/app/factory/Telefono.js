app.factory('Telefono', function($http, $q ,  $filter) {
     
    var factory = {}; 
 


   factory.get = function(cliente_id) {
          
       var deferred = $q.defer();

         $http.get(Base+'/telefonos/'+cliente_id)
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;

    }

 
    return factory;
});