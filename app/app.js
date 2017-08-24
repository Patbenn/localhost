//Define an angular module for our app
var app = angular.module('hostApp', []);

app.controller('hostController', ['$scope', '$window', function($scope, $window) {
  $scope.newListOrder = $window.newListOrder;
}]);

app.controller('hostController', function($scope, $http) {
	
  getItem(); // Load all available items 
  function getItem(){  
  $http.post("ajax/getItem.php").success(function(data){
        $scope.items = data;
       });
  };
  
  getCategories(); // Load all available items 
  function getCategories(){  
  $http.post("ajax/getCategories.php").success(function(data){
        $scope.categories = data;
       });
  };
  
  $scope.doAThing = function (label, url){  
  	if(confirm("Are you sure to do the thing?")){
    $http.post("ajax/addQuicklink.php?label="+label+"&url="+url).success(function(data){
        getItem();
        $scope.siteOrder = "";
        $scope.siteLabel = "";
        $scope.siteURL = "";
      });
    }
  };
  
  getProjects(); // Load all available items 
  function getProjects(){  
  $http.post("ajax/getProjects.php").success(function(data){
        $scope.projects = data;
       });
  };
  
  $scope.addQuicklink = function (label, url) {
    $http.post("ajax/addQuicklink.php?label="+label+"&url="+url).success(function(data){
        getItem();
        $scope.siteOrder = "";
        $scope.siteLabel = "";
        $scope.siteURL = "";
      });
  };
  
  $scope.deleteQuicklink = function (item) {
    if(confirm("Are you sure to delete this quick link?")){
    $http.post("ajax/deleteQuicklink.php?itemID="+item).success(function(data){
        getItem();
      });
    }
  };
  
  $scope.updateQuickLink = function(item, label, url, order) {
	  if(confirm("Are you sure to update this quick link?")){
    $http.post("ajax/updateQuickLink.php?itemID="+item+"&label="+label+"&url="+url+"&order="+order).success(function(data){
	    getItem();
    });
    }
  };

});
