app.controller('products_category', function ($scope, $http,$timeout, $window,$parse) {

    $timeout(function () {
        var request = $http({ method: "get", url: "http://aghabaniamal.com/wp-json/wp/v2/products_categories/?per_page=100" });
        request.then(function (data) {
            $scope.cats=data.data;
         
        });
            
    });
    
});