app.controller('home', function ($scope, $http,$timeout, $window) {

    $timeout(function () {
        
        
        var products_request = $http({
            method: "get",
            url: "http://aghabaniamal.com/wp-json/wp/v2/products/?per_page=10",                        
        });
               
        products_request.then(function (data) {
            $scope.products =data.data;
        });
        
        
        var products_all_request = $http({
            method: "get",
            url: "http://aghabaniamal.com/wp-json/wp/v2/products/?per_page=100",                        
        });
               
        products_all_request.then(function (data) {
            $scope.products_all =data.data;
        });
        
        var cats_request = $http({ method: "get", url: "http://aghabaniamal.com/wp-json/wp/v2/products_categories/?per_page=100" });
        cats_request.then(function (data) {
            $scope.cats=data.data;
            
            var products_all_request = $http({
                method: "get",
                url: "http://aghabaniamal.com/wp-json/wp/v2/products/?per_page=100",                        
            });
                   
            products_all_request.then(function (data) {
                $scope.products_all =data.data;
                var keepGoing = true;
                angular.forEach($scope.cats, function(value1, key1) {
                    var keepGoing = true;
                    angular.forEach($scope.products_all, function(value2, key2) {
                        
                        if(keepGoing) {
                        if (value2.products_categories==value1.id) {
                                    value1.description=value2.first_image;
                                    keepGoing = false;
                                }
                        }
                    });
                });
                
               console.log($scope.cats);
            });
         
        });

      
                    
        $scope.active1='active';
        $scope.active2='';
        $scope.tri_active1 = function() {
                   $scope.active1='active';
                   $scope.active2='';
        }
        $scope.tri_active2 = function() {
                   $scope.active1='';
                   $scope.active2='active';
        }
        
    });

});