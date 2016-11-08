app.factory('Region', function($http, $q ,  $filter) {
     
    var factory = {}; 
 
    factory.all = function() {
          
    	 var deferred = $q.defer();

         $http.get(Base+'/regiones')
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;

    }

 
    return factory;
});