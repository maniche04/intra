
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
    <?php echo HTML::script( 'js/notify-combined.min.js')?>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>


<?php echo HTML::script('/ajs/todo.js');?>
<body ng-app='todoList' ng-controller='todoController as todoC'>
    
    <div class="ui inverted blue primary small menu">
   
        <a class="active item">
            <i class="home icon"></i> Home
        </a>
        <a class="item">
            <i class="mail icon"></i> Messages
        </a>
        <a class="item">
            <i class="user icon"></i> Friends
        </a>
        <div class="right menu">
            <div class="item">
                <div class="ui icon input">
                    <input type="text" placeholder="Search...">
                    <i class="search link icon"></i>
                </div>
            </div>
            <a class="ui item">
      Logout
    </a>
        </div>
    </div>
    <div class="ui left aligned grid">
        <div class="three wide left aligned column">
        
                    
               
            <div class="ui vertical blue accordion menu">
                <div class="item">
                    <div class="ui input">
                        <input type="text" placeholder="Search..." ng-model="filtertext" ng-change="todoC.refresh;">
                    </div>
                </div>
                
            
        
        <div class="item">
            <a class="active title">
                <i class="dropdown icon"></i> Status
            </a>
            <div class="active content">
                <div class="ui form ">
                    <div class="grouped fields">
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="radio" name="size_ns" value="small">
                                <label>Not Started</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="radio" name="size_wip" value="medium">
                                <label>WIP</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="radio" name="size_fr" value="large">
                                <label>Final Review</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="radio" name="size_done" value="x-large">
                                <label>Completed</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <a class="active blue title">
                <i class="dropdown icon"></i> Colors
            </a>
            <div class="active content">
                <div class="ui form ">
                    <div class="grouped fields">
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="radio" name="size" value="small">
                                <label>Small</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="radio" name="size" value="medium">
                                <label>Medium</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="radio" name="size" value="large">
                                <label>Large</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="radio" name="size" value="x-large">
                                <label>X-Large</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="item">
            <a class="active blue title">
                <i class="dropdown icon"></i> Tags
            </a>
            <div class="active content">
                 <a class="ui tag tiny label">IT</a>
                    <a class="ui tag tiny orange label">Canias</a>
            </div>
            
        </div>
    </div>
    <div class="tiny icon ui blue buttons">
                        <div class="ui addnew button" ><i class="checkmark icon"></i></div>
                        
                    </div>
    <div class="ui add fluid blue popup">
      <div class="ui form segment">
                
                <div class="field">
                    <label>Title</label>
                    <input class="ui small input" name='title' placeholder="Title Here" type="text" ng-model="todoC.new.Title">
                    <br>
                </div>
                <div class="field">
                    <label>Description</label>
                    <textarea placeholder="Description Here" rows="2" type="text" ng-model="todoC.new.Description"></textarea>
                </div>
                <div class="field">
                    <label>Status</label>
                    <input class="ui small input" placeholder="Status" rows="1" type="text" ng-model="todoC.new.Status">
                    <br>
                </div>
                <a class="item">
                <button class="ui small green button" ng-click="todoC.add()">Add</button>
                <br>
            </a>
            </div>
    </div>                

    </div>
    <div class="twelve wide left aligned column">
        <div class="ui large breadcrumb">
            <a class="section">Home</a>
            <i class="right chevron icon divider"></i>
            <a class="section">Registration</a>
            <i class="right chevron icon divider"></i>
            <div class="active section">Personal Information</div>
        </div>
        <br>
        <div class="ui grid">
            <div id = "todolists" class="five wide left aligned column" ng-repeat="todo in todoC.todos | filter: filtertext">
                <h4 class="ui blue top attached header">
<div class="ui top attached indicating large progress" ng-attr-data-percent="{{todo.completion}}">
      <div class="bar"></div>
    </div>
    <br> 
  {{todo.title}}

  <div class="sub header">25th March 2015</div>

    
</h4>
                <div class="ui attached segment">
                    <p>{{todo.description}}</p>
                    <div class="tiny icon ui buttons">
                        <div class="ui button"><i class="checkmark icon"></i></div>
                        <div class="ui button"><i class="close icon"></i></div>
                        <div class="ui button"><i class="share icon"></i></div>
                    </div>
                </div>
                <div class="ui bottom attached segment">
                    <a class="ui tag tiny label">IT</a>
                    <a class="ui tag tiny orange label">Canias</a>
                </div>
            </div>
            <div class="three wide left aligned column" ng-show="todoC.new.title.$dirty" id ="newTask">
                <div class="ui segment">
                    <h4 class="ui blue header">{{todoC.new.title}}</h4>
                    <p>{{todoC.new.description}}</p>
                </div>
            </div>
            
        </div>
    </div>
    </div>


<script>
    $(document).ready(function(){
        $('.progress').progress();
        $('.ui.accordion')
  .accordion()
;
$('.ui.checkbox')
  .checkbox()
;
    });
    
$('.ui.modal')
  .modal()
;

$('.addnew.button')
  .popup({
    inline   : true,
    hoverable: true,
    position : 'bottom left',
    delay: {
      show: 300,
      hide: 800,
      
    },
    
    popup : $('.add.popup'),
    on    : 'click'
  })
;
</script>
</body>