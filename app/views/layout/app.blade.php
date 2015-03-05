<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('pageTitle')
	</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<?php echo HTML::style('dist/semantic.min.css')?>
	<?php echo HTML::script('dist/semantic.min.js')?>
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

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
	<script>
    $(document).ready(function(){

    function confirmLogout() {
      $('.basic.test.modal')
      .modal({
        closable  : false,
        onDeny    : function(){
          //window.alert('Wait not yet!');
          //$.notify('Well choosen! ;)','success');
          
        },
        onApprove : function() {
          //window.alert('Approved!');
          window.location.href = '<?php echo URL::to('logout') ?>';
        }
      })
      .modal('show')
    ;
    }

    $("#logoutbtn").click(function(e){
      e.preventDefault();
      confirmLogout();
      
    });
     

    $(".close.icon").click(function(){
      $(this).parent().hide();
    });


    $('.ui.dropdown')
      .dropdown()
    ;
  }); 

  </script>
</head>
<body>
	@yield('body')
</body>
</html>
