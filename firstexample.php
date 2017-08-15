<!DOCTYPE html>
<html>
	<head>
		<title>Angular JS</title>
		<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.5.2/angular.min.js"></script>
	</head>
	<body ng-app="myApp">
		<div ng-controller="myController">
			<h2>Welcome  {{helloTo.title}} to the My first Program.</h2>
		</div>
		<p>Enter your name: <input type="text" ng-model="name"></p>
		<p>Hello <span ng-bind="name"></span></p>
		<div ng-init="countries=[{locale:'en-US',name:'United States'},{locale:'en-IN',name:'India'},{locale:'en-GB',name:'United Kingdom'},{locale:'en-FR',name:'France'}]">
			<p>List of Countries with Locale.</p>
			<ol>
				<li ng-repeat="country in countries">
					{{'Country: '+country.name+ 'Locale: '+country.locale}}
				</li>
			</ol>
		</div>
		<div ng-init="quantity=1;cost=30;student={firstname:'Sumit',lastname:'Singh',rollno:101};marks=[80,70,90,50,65]">
			<p>Hello {{student.firstname+""+student.lastname}}</p>
			<p>Expense on books : {{cost * quantity}}</p>
			<p>Roll No: {{student.rollno}}</p>
			<p>Marks(Math): {{marks[3]}}</p>
		</div>
		

		<script>
			var app=angular.module("myApp",[])

			app.controller("myController", function($scope){
				$scope.helloTo ={};
				$scope.helloTo.title = "angularjs";
			});
		</script>
	</body>
</html>