<html>
   <head>
      <title>Angular JS Views</title>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
   </head>
   
   <body>
      <h2>AngularJS Sample Application</h2>
      <div ng-app = "mainApp">
         <div class="list-group" id="navs">
            <a href="#addStudent" class="list-group-item">Dashboard</a>
            <a href="#viewStudents" class="list-group-item">Users</a>
            <a href="#courses" class="list-group-item images">Courses</a>
            <a href="#leads" class="list-group-item images">Leads</a>
            <a href="#setting" class="list-group-item images">Setting</a>
         </div>
         <p><a href = "#addStudent">Add Student</a></p>
         <p><a href = "#viewStudents">View Students</a></p>
         <div ng-view></div>
         
         <script type = "text/ng-template" id = "addStudent.htm">
            <h2> Add Student </h2>
            {{message}}
         </script>
         
         <script type = "text/ng-template" id = "viewStudents.htm">
            <h2> View Students </h2>
            {{message}}
         </script>
      </div>
      
      <script>
         var mainApp = angular.module("mainApp", ['ngRoute']);
         mainApp.config(['$routeProvider', function($routeProvider) {
            $routeProvider.
            
            when('/addStudent', {
               templateUrl: 'addStudent.htm',
               controller: 'AddStudentController'
            }).
            
            when('/viewStudents', {
               templateUrl: 'viewStudents.htm',
               controller: 'ViewStudentsController'
            }).
            
            otherwise({
               redirectTo: '/addStudent'
            });
         }]);
         
         mainApp.controller('AddStudentController', function($scope) {
            $scope.message = "This page will be used to display add student form";
         });
         
         mainApp.controller('ViewStudentsController', function($scope) {
            $scope.message = "This page will be used to display all the students";
         });
			
      </script>
      
   </body>
</html>