var app = angular.module("todoList",[]);


app.controller('todoController', function(){
	this.new = {};
	this.todos = [{"Title" : "Prepare summary report", "Description" : "The work is to prepare a summary report!","Status":100},
			{"Title" : "CISCO - Review the BOM", "Description" : "The task is to review the BOM for CISCO","Status":25},
			{"Title" : "IC Branch - Job Completion", "Description" : "Verify the work status and provide the cheque.","Status":80},
			{"Title" : "Mail the Department Heads - Public Folder", "Description" : "Email all of the department heads about the policy!","Status":66},
			{"Title" : "Canias Implementation in JIZAN", "Description" : "Full implementation of Canias in JIZAN!","Status":12}];
	
	this.add = function() {
		
		this.todos.push(this.new);
		this.new = {};
		$('.progress').progress();
	}

	this.refresh = function(){
		$('.progress').progress();
	}

	this.delete = function(){
		this.todos.delete(this.new);
	}

});

