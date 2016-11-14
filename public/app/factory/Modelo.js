app.factory('Modelo', function($http, $q ,  $filter) {
     
    var factory = {}; 
 
    factory.all = function() {
          
    	 var deferred = $q.defer();

         $http.get(Base+'/modelos')
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;

    }


   factory.get = function(categoria_id) {
          
       var deferred = $q.defer();

         $http.get(Base+'/modelos/'+categoria_id)
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;

    }

 
    return factory;
});