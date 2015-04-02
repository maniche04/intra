var app = angular.module("todoList", []);


app.controller('todoController', ['$scope','$http', function($scope,$http) {
    this.new = {};
    this.todos = [];
    
    this.loadtodos = function() {
        // Simple GET request example :
        $http.get('todos/get').
        success(function(data, status, headers, config) {
        	//$.notify('Loaded Tasks!',"success");
        	$scope.todoC.todos = data;
            
        	
        }).
        error(function(data, status, headers, config) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

        $scope.todoC.refprogress();
    }

    this.refprogress = function() {
        $('.progress').progress();
        $('.ui.accordion')
    }

    this.loadtodos();

    this.add = function() {

        $http.post('todos/add', this.new).
        success(function(data, status, headers, config) {
            console.log(data);
            $.notify(data,"success");
            $scope.todoC.loadtodos();
        }).
        error(function(data, status, headers, config) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

        this.todos.push(this.new);
        this.new = {};
        

    }

    this.refresh = function() {
        $('.progress').progress();
    }

    

    this.delete = function() {
        this.todos.delete(this.new);
    }

}]);
