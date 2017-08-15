var mainApp = angular.module("mainApp", ['ngRoute']);
mainApp.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
    
    when('/dashboard', {
       templateUrl: 'partials/dashboard.php',
       controller: 'DashboardController'
    }).
    
    when('/users', {
       templateUrl: 'partials/users.htm',
       controller: 'UsersController'
    }).
    
    when('/users/new', {
       templateUrl: 'partials/create_user.htm',
       controller: 'CreateUserController'
    }).

    when('/user/:id/edit',{
        templateUrl: 'partials/edit_user.htm',
        controller: 'EditUserController'
    }).

    when('/courses', {
       templateUrl: 'partials/courses.htm',
       controller: 'CoursesController'
    }).

    when('/course/new',{
      templateUrl: 'partials/create_course.htm',
      controller: 'CreateCourseController'
    }).

    when('/course/:id/edit',{
      templateUrl: 'edit_course.htm',
      controller: 'EditCourseController'
    }).

    when('/leads', {
       templateUrl: 'partials/leads.php',
       controller: 'LeadsController'
    }).

    otherwise({
       redirectTo: '/dashboard'
    });
}]);