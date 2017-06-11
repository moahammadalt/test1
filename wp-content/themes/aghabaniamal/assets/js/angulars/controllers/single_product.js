app.controller('single_product', function ($scope, $http,$timeout, $window,$parse) {
    $scope.main_image=null;
    $timeout(function () {
        var request = $http({ method: "get", url: "http://aghabaniamal.com/wp-content/themes/aghabaniamal/api_calls/image_call.php" });
        request.then(function (data) {
            $scope.images=data.data;
            $scope.main_image=$scope.images[0].first_image;
            console.log($scope.images);
            $scope.get_main_img=function(a){
                
                $scope.main_image=$scope.images[0][a];
                console.log($scope.main_image);
                console.log('okkk');
                console.log(a);
            }
        });
            
    });
    
});