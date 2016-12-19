app.factory('Producto', function($http, $q ,  $filter) {
     
    var factory = {}; 


   factory.get = function(categoria,marca,modelo) {
          
       var deferred = $q.defer();

         $http.get(Base+'/productos', {
              params: {
                  categoria: categoria,
                  marca: marca,
                  modelo:modelo
              }
           })
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;
    }

 
    return factory;
});