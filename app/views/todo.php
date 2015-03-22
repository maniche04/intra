<br>
<style>
    @import url(//fonts.googleapis.com/css?family=Lato:700);
    .welcome {
        width: 300px;
        height: 200px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -150px;
        margin-top: -100px;
    }
    a,
    a:visited {
        text-decoration: none;
    }
    h1 {
        font-size: 32px;
        margin: 16px 0 0 0;
    }
    </style>
<?php echo HTML::style( 'dist/semantic.min.css')?>
    <?php echo HTML::script( 'dist/semantic.min.js')?>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

<?php echo HTML::script('/ajs/todo.js');?>



<div class="ui center aligned grid" ng-app = 'todoList' ng-controller = 'todoController as todoC'>
    <div class="sixteen column row">
    <div class="three wide left aligned column">
<form novalidate class = "ui small bu form">
            <div class="ui small blue inverted vertical  menu">
          <div class="item">
            <div class="ui input"><input type="text" placeholder="Search..." ng-model="filtertext"></div>
          </div>
          <h5 class="ui horizontal header inverted divider">
  <i class="add icon"></i>
  Add New Task
</h5>
          
          <a class="item">
           
    <input class = "ui small input" placeholder = "Title Here" type="text" ng-model="todoC.new.title"><br>
          </a>
          <a class="item">
           
    <input class = "ui small input" placeholder = "Description Here" rows = "5" type="text" ng-model="todoC.new.description"><br>
          </a>
          <a class="item">
           
    <button class="ui small green button" ng-click="todoC.add()">Add</button><br>
          </a>
          
        </div>


            
          </form>
    </div>


    <div class="twelve wide left aligned column">
        <div class="ui blue segment" ng-repeat = "todo in todoC.todos | filter: filtertext">
            <h4 class="ui blue header">{{todo.Title}}</h4>

            <p>{{todo.Description}}</p>

        </div>

        <div class="ui blue segment">
            <h4 class="ui blue header">{{todoC.new.title}}</h4>

            <p>{{todoC.new.description}}</p>

        </div>
    </div>





</div>
</div>

