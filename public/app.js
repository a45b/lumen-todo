/**
 * Created by shekhargulati on 10/06/14.
 */
 
var app = angular.module('todoapp', [
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngRoute'
]);
 
app.config(function ($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'views/list.html',
        controller: 'ListCtrl'
    }).when('/create', {
        templateUrl: 'views/create.html',
        controller: 'CreateCtrl'
    }).otherwise({
        redirectTo: '/'
    })
});
 
app.controller('ListCtrl', function ($scope, $http) {
    $http.get('/tasks').success(function (data) {
        $scope.todos = data;
    }).error(function (data, status) {
        console.log('Error ' + data)
    })
 
    $scope.todoStatusChanged = function (todo) {
        console.log(todo);
        $http.patch('/done/' + todo.id, todo).success(function (data) {
            console.log('status changed');
        }).error(function (data, status) {
            console.log('Error ' + data)
        })
    }
});
 
app.controller('CreateCtrl', function ($scope, $http, $location) {
    $scope.todo = {
        done: false
    };
 
    $scope.createTodo = function () {
        console.log($scope.todo);        
        $http.post('/create', $scope.todo).success(function (data) {
            $location.path('/');
        }).error(function (data, status) {
            console.log('Error ' + data)
        })
    }
});