app.factory('ProductoCliente', function($http, $q ,  $filter) {
     
    var factory = {}; 


   factory.get = function(cliente) {
          
       var deferred = $q.defer();

         $http.get(Base+'/productoCliente/'+cliente)
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;
    }

 
    return factory;
});