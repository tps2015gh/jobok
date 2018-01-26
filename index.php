<!DOCTYPE html>
<html ng-app="myapp">
<head>
<meta charset="UTF-8">
<title>My Angular App</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-route.js"></script>
</head>

<!-- <script type="text/ng-template" id="embedded.home.html">
    <h1> Home </h1>
    {{greeting}}
</script>
<script type="text/ng-template" id="embedded.about.html">
    <h1> About </h1>
    {{content}}12
</script> -->
<body ng-init="a=0" >
<div> 
      <div id="navigation">  
      Menu: 
      <a href="#/home" ng-click="a=1;currentTpl='/tpl.html'" >Home</a>
      <a href="#/about" ng-click="a=2;">About</a>
      </div>
    	view:[<div ng-view></div>]
</div>

/{{2.3}}/
<br>/{{a}}/
</body>
<script>
var app = angular.module("myapp",["ngRoute"]);
 app.config(function($routeProvider){
 	$routeProvider
 	.when("/",{
 		templateUrl : "tpl_home.php"
 		,controller: "HomeCtrl" 		
 	})
 	.when("/home",{
 		templateUrl : "tpl_home.php"
 		,controller: "HomeCtrl" 		
 	})
 	.when("/about",{
 		templateUrl : "tpl_about.php"
 		,controller: "AboutCtrl"
 	}) 	;
 });
app.controller("HomeCtrl",function($scope){
	$scope.greeting = "Hello How are You == greeting";
}); 
app.controller("AboutCtrl",function($scope){
	$scope.msg = "This set by controller AboutCtrl ";
});
</script>
</html>

<!-- https://www.w3schools.com/angular/tryit.asp?filename=try_ng_routing_view1 -->
<!-- https://www.w3schools.com/angular/angular_routing.asp -->