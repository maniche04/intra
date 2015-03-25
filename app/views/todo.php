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
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php echo HTML::script( 'dist/semantic.min.js')?>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>


<?php echo HTML::script('/ajs/todo.js');?>



<div class="ui center aligned grid" ng-app = 'todoList' ng-controller = 'todoController as todoC'>

    <div class="three wide left aligned column" >
            <form name = 'newTask' novalidate class = "ui small bu form">
                        <div class="ui small blue inverted vertical  menu">
                      
                      <div class="item">
                     
                        <div class="ui input"><input type="text" placeholder="Search..." ng-model="filtertext" ng-change="todoC.refresh;"></div>
                      </div>
                      <h5 class="ui horizontal header inverted divider">
              <i class="add icon"></i>
              Add New Task
            </h5>
                      
                      <a class="item">
                       
                <input class = "ui small input" name = 'title' placeholder = "Title Here" type="text" ng-model="todoC.new.Title"><br>
                      </a>
                      <a class="item">
                <div class="field" >
  
    <textarea placeholder = "Description Here" rows = "5" type="text" ng-model="todoC.new.Description"></textarea>
  </div>       
                
                      </a>
                      <a class="item">
                       
                <input class = "ui small input" placeholder = "Status" rows = "5" type="text" ng-model="todoC.new.Status"><br>
                      </a>
                      <a class="item">
                       
                <button class="ui small green button" ng-click="todoC.add()">Add</button><br>
                      </a>
                      
                    </div>


                        
                      </form>
    </div>


    <div class="twelve wide left aligned column">
    <div class="ui grid" >
        
    <div class = "five wide left aligned column" ng-repeat = "todo in todoC.todos | filter: filtertext">
        
        <h4 class="ui blue top attached header">
<div class="ui top attached indicating large progress" ng-attr-data-percent="{{todo.Status}}">
      <div class="bar"></div>
    </div>
    <br> 
  {{todo.Title}}

  <div class="sub header">25th March 2015</div>
    
</h4>

        <div class="ui attached piled segment" >
            


            <p>{{todo.Description}}</p>
            <br>

             <div class="mini blue icon ui buttons">
  <div class="ui button"><i class="checkmark icon"></i></div>
  <div class="ui button"><i class="close icon"></i></div>
  <div class="ui button"><i class="share icon"></i></div>
  
</div>

        </div>
       
    </div>

    <div class = "three wide left aligned column" ng-show ="newTask.title.$dirty" >
        <div class="ui segment">
            <h4 class="ui blue header">{{todoC.new.Title}}</h4>
            
            <p>{{todoC.new.Description}}</p>

        </div>
    </div>

    </div>
    </div>

    

</div>

<script>
    $(document).ready(function(){
        $('.progress').progress();
    });
</script>
