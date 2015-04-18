<!doctype html>
<html ng-app="todoapp">
    <head>
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css">
        <style type="text/css">
        	body{
        		padding-top: 60px;
        	}
        </style>
    </head>
    <body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="#">Lumen ToDo</a>
			  </div>
			</div>
		</nav>
        
        <div class="container" ng-view="">
        	<!-- 
        	<div class="row">
        		<div class="col-md-12">
        			<h3>
        				All Task
        				<button type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> New</button>
        			</h3>
        		</div>
        		<hr>
        		<div class="col-md-12">
        			<table class="table table-boarder">
        				<thead>
        					<th>Task Name</th>
        					<th>Created at</th>
        					<th>Done</th>
        				</thead>
        				<tbody>
        				</tbody>
        			</table>
        		</div>
        	</div>
        	 -->
        </div>

        <script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="angular/angular.js"></script>
		<script type="text/javascript" src="angular/angular-route.js"></script>
		<script type="text/javascript" src="angular/angular-cookies.js"></script>
		<script type="text/javascript" src="angular/angular-sanitize.js"></script>
		<script type="text/javascript" src="angular/angular-resource.js"></script>
		
		<script src="app.js"></script>
    </body>
</html>