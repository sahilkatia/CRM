mainApp.controller('DashboardController', function($scope) {
	//$scope.message = "This page will be used to display add student form";
});

/*--------User Controller--------------*/
mainApp.controller('UsersController',['$scope','$http', function($scope,$http) {
	
	/*---------User List-----------*/
	getUsers();
	
	function getUsers(){
		// Sending request to userList.php files userList.php
		$http.get('userList.php').success(function(data){
		//$http.get('http://192.168.1.68:8080/CRMDataBI/employee/getAllEmployees').success(function(data){
			// Stored the returned data into scope 
			$scope.userLists = data;
		});
	}

	/*----------Course Checkbox Dropdown------------------*/
	getCourseLists();
	function getCourseLists(){
		$http.get('courseList.php').success(function(data){
		//$http.get('http://192.168.1.68:8080/CRMDataBI/course/getAllCourses').success(function(data){
			$scope.MasterCountries = data;
		});
	}

	$scope.selectedCourses = [];
	/*angular.forEach($scope.MasterCountries, function(course){
      if (course.selected) $scope.selectedCourses.push(course.id);
    });*/
    //$selectedCourses = 
    /*$scope.MasterCountries.forEach(function(courseValue){
    	selectedCourses += courseValue.cName;

    });
    alert(selectedCourses);*/
	/*-------------------------------------------------*/
	$scope.userInfo = {'role' : 'Marketing'};
	$scope.show_form = true;
	$scope.formToggle =function(){
		$('#empForm').slideToggle();
		$('#editForm').css('display', 'none');
	}
	/*---------------------------------*/
	/*---------Create Useer-----------*/
	$scope.createUser = function(info){
		$http.post('createUser.php',{"name":info.name,"email":info.email,"role":info.role,"password":info.password,"target":info.target/*,"e_mobile": "+91 8547123234","e_courseAssigned": ["Java","php"],"e_dept": "Marketing"*/}).success(function(data){
		//$http.post('http://192.168.1.68:8080/CRMDataBI/employee/addEmployee',{"e_name":info.name,"e_email":info.email,"e_role":info.role,"e_pwd":info.password,"e_target":info.target,"e_mobile": "+91 8547123234","e_courseAssigned": ["Java","php"],"e_dept": "Marketing"}).success(function(data){
			//$scope.success=true;
			if (data == true) {
				getUsers();
				$('#empForm').css('display', 'none');
			}
		});
	}
	/*-----------------------------------*/
	
	/*------------Edit User-------------*/
	$scope.currentUser = {};
	$scope.editUser = function(info){
		$scope.currentUser = angular.copy(info);
		$('#empForm').slideUp();
		$('#editForm').slideToggle();
	}
	$scope.updateUser = function(info){
		$http.post('',{"e_id":info.id,"e_name":info.name,"e_email":info.email,"e_role":info.role,"e_target":info.target}).success(function(data){
		//$http.post('http://192.168.1.68:8080/CRMDataBI/employee/updateEmployee',{"e_id":info.id,"e_name":info.name,"e_email":info.email,"e_role":info.role,"e_target":info.target}).success(function(data){
		$scope.show_form = true;
		if (data == true) {
			getInfo();
		}
	});
	}
	$scope.updateMsg = function(id){
		$('#editForm').css('display', 'none');
	}
	/*----------------------------------------*/
	/*---------Delete User--------------*/
	$scope.deleteUser = function(info){
		var deleteUrl = "deleteUser.php/" + info.id;
		//var deleteUrl = "http://192.168.1.68:8080/CRMDataBI/employee/deleteEmployee/" + info.e_id;
		$http.delete(deleteUrl)
		.success(function(data){
			if (data == true) {
			getUsers();
			}
		});
	}
	/*------------------------------------*/
}]);

/*-------Courses Controller---------*/
mainApp.controller('CoursesController',['$scope','$http', function($scope,$http){
	/*-------------Course List----------------*/
	getCourses();
	function getCourses(){
		$http.get('courseList.php').success(function(data){
		//$http.get('http://192.168.1.68:8080/CRMDataBI/course/getAllCourses').success(function(data){
			$scope.courseList = data;
		});
	}
	//courseList.php
	/*----------------------------------------*/
	/*----------Form Toggle Add course/Edit course--------*/
	$scope.courseInfo = {'cmode':'Online'};
	$scope.show_form = true;
	$scope.formToggleCourse =function(){
		$('#empForm').slideToggle();
		$('#courseEdit').css('display', 'none');
	}
	/*----------------------------------------*/
	/*------------Create Course------------*/
	//createCourse.php
	$scope.createCourse = function(info){
		$http.post('createCourse.php',{"cName":info.cname,"cMode":info.cmode,"cPrice":info.cprices}).success(function(data){
		//$http.post('http://192.168.1.68:8080/CRMDataBI/course/addCourse',{"c_name":info.cname,"c_mode":info.cmode,"c_price":info.cprice,"c_duration":"Three months"}).success(function(data){
			if (data == true) {
				getCourses();
				$('#empForm').css('display', 'none');
			}
		});
	}
	/*------------------------------------*/
	/*----------------Edit/Update Course---------*/
	$scope.currentCourse = [];
	$scope.editCourse = function(info){
		$scope.currentCourse = info;
		$('#empForm').slideUp();
		$('#editForm').slideToggle();
	}

	$scope.UpdateCourse = function(info){
		$http.put('updateCourse.php',{"cId":info.id,"cName":info.cname,"cMode":info.cmode,"cPrice":info.cprice}).success(function(data){
		//$http.put('http://192.168.1.68:8080/CRMDataBI/course/updateCourse',{"c_id":info.id,"c_name":info.cname,"c_mode":info.cmode,"c_price":info.cprice,"c_duration":"Three months"}).success(function(data){
			$scope.show_form = true;
			if(data == true){
				getCourses();
			}
		});
	}
	$scope.updateMsg = function(id){
		$('#editForm').css('display','none');
	}
	/*-------------------------------------------*/
	/*---------Delete Course--------------*/
	$scope.deleteCourse = function(info){
		var url = "deleteCourse.php/" + info.id;
		//var url = "http://192.168.1.68:8080/CRMDataBI/course/deleteCourse/" + info.c_id;
		$http.delete(url)
		.success(function(data){
			if (data == true) {
			getCourses();
			}
		});
	}
	/*------------------------------------*/
	
}]);

/*--------Leads List Controller------------*/
mainApp.controller('LeadsController',['$scope','$http', function($scope){
	$scope.message = "This page will be used to display all the leads";
	//$scope.
}]);


mainApp.directive('ngConfirmClick', [
    function(){
        return {
            link: function (scope, element, attr) {
                var msg = attr.ngConfirmClick || "Are you sure?";
                var clickAction = attr.confirmedClick;
                element.bind('click',function (event) {
                    if ( window.confirm(msg) ) {
                        scope.$eval(clickAction)
                    }
                });
            }
        };
}]);

/*----------------Course CheckBox Dropdown Directive----------------*/
mainApp.directive('multiselectDropdown', function () {
    return {
        restrict: 'E',
        scope: {
            model: '=',
            options: '=',
        },
        template:
            "<div class='btn-group' data-ng-class='{open: open}' style='width: 200px;'>" +
            "<button type='button' class='btn btn-small' style='width: 160px;'>---Select Courses---</button>" +
            "<button type='button' class='btn btn-small dropdown-toggle' data-ng-click='openDropdown()' style='width: 40px; height: 34px;' ><span class='caret'></span></button>" +
            "<ul class='dropdown-menu' aria-labelledby='dropdownMenu' style='position: relative;'>" +
            "<li style='cursor:pointer;'><a data-ng-click='selectAll()'><span class='fa fa-check-circle'></span>  Select All</a></li>"+
            "<li style='cursor:pointer;'><a data-ng-click='deselectAll()'><span class='fa fa-times-circle'></span>  Deselect All</a></li>"+
            "<li class='divider'></li>"+
            "<li><input type='text' class='form-control' style='width: 95%; margin:7px;' ng-model='searchFilter' placeholder='Search' /></li>"+
            "<li class='divider'></li>"+
            "<li style='cursor:pointer;' data-ng-repeat='option in options | filter: searchFilter'><a data-ng-click='toggleSelectItem(option)'><span data-ng-class='getClassName(option)' aria-hidden='true'></span> {{option.c_name}}</a></li>" +
            "</ul>" +
            "</div>",

        controller: function ($scope) {

            $scope.openDropdown = function () {
                $scope.open = !$scope.open;
            };

            $scope.selectAll = function () {
                $scope.model = [];
                angular.forEach($scope.options, function (item, index) {
                    $scope.model.push(item);
                });
            };

            $scope.deselectAll = function () {
                $scope.model = [];
            };

            $scope.toggleSelectItem = function (option) {
                var intIndex = -1;
                angular.forEach($scope.model, function (item, index) {
                    if (item.id == option.id) {
                        intIndex = index;
                    }
                });

                if (intIndex >= 0) {
                    $scope.model.splice(intIndex, 1);
                } else {
                    $scope.model.push(option);
                }
            };

            $scope.getClassName = function (option) {
                var varClassName = '';
                angular.forEach($scope.model, function (item, index) {
                    if (item.id == option.id) {
                        varClassName = 'fa fa-check';
                    }
                });
                return (varClassName);
            };
        }
    }
});

/*-------------------------------------------------------------*/
