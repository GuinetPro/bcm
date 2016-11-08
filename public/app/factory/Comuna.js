app.factory('Comuna', function($http, $q ,  $filter) {
     
    var factory = {}; 
 
    factory.all = function() {
          
    	 var deferred = $q.defer();

         $http.get(Base+'/comunas')
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;

    }


   factory.get = function(region_id) {
          
       var deferred = $q.defer();

         $http.get(Base+'/comunas/'+region_id)
          .success(function (data) {
            deferred.resolve(data);
          });

        return deferred.promise;

    }

 
    return factory;
});