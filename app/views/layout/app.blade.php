<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        @yield('pageTitle')
    </title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php echo HTML::style( 'dist/semantic.min.css')?>
    <?php echo HTML::script( 'dist/semantic.min.js')?>
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

</head>

<body>
    <div class="ui medium inverted pointing blue menu sticky" id="mainnav">
        <a phpurl = 'home' class="active item" onclick="ajaxLoad('#maincontent', 'home')">
            <i class="home icon"></i> Home
        </a>
        <a phpurl = 'todos' class="item" onclick="ajaxLoad('#maincontent', 'todos')">
            <i class="checkmark box icon"></i> To-Do List
        </a>
        <a class="item">
            <i class="spy icon"></i> Self Service
        </a>
        <a class="item">
            <i class="file text outline icon"></i> Forms
        </a>
        <div class="right menu">

            <a class="item red notbtn">
                <div class="ui red medium label">
                    <i class="alarm icon"></i> <b>23</b>
                </div>
            </a>


            <div class="ui dropdown item">
                <i class="user icon"></i>
                <?php echo $firstname ?> <i class="dropdown icon"></i>
                <div class="menu">

                    <a class="item"><i class="edit icon"></i>Edit Profile</a>
                    <a class="item"><i class="options icon"></i>Settings</a>
                    <a class="item" id="logoutbtn" href="<?php echo URL::to('logout') ?>"><i class="sign out icon"></i>Log Out</a>

                </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>




    <div id="maincontent">

    </div>


    <div class="ui blue inverted right inline vertical sidebar menu">

        <div style="padding-top: 12px" class="ui inverted red segment">
            <h4 class="ui white centered header"><i class="alarm icon"></i>NOTIFICATIONS</h4>
            <br>
        </div>
        <a class="item">

            <h4 class="ui inverted header">New Task</h4>
            <p>You were assigned a new task by Ma'am Mon</p>

        </a>
        <div>
            <span class="ui horizontal divider"></span>
        </div>
    </div>
    <div class="ui basic test modal">
        <div class="header">
            Please Confirm!
        </div>
        <div class="content">
            <div class="image">
                <i class="shutdown icon"></i>
            </div>
            <div class="description">
                <p>Are you sure you want to Logout?</p>
            </div>
        </div>
        <div class="actions">
            <div class="two fluid ui inverted buttons">
                <div class="ui green basic inverted deny button" data-value="No">
                    <i class="remove icon"></i> No
                </div>
                <div class="ui red basic inverted approve button" data-value="Yes">
                    <i class="checkmark icon"></i> Yes
                </div>
            </div>
        </div>
    </div>


    <script>
    $('.ui.dropdown')
        .dropdown();


    $("#logoutbtn").click(function(e) {
        e.preventDefault();
        confirmLogout();

    });


    $(".close.icon").click(function() {
        $(this).parent().hide();
    });


    $('.notbtn').click(function() {
        $('.right.sidebar').sidebar('setting', {
            transition: 'overlay'
        }).sidebar('show');
    });

    $('.ui.sticky')
        .sticky({
            context: '#maincontent'
        });

    $(document).ready(function() {
        $("#maincontent").load('home');
    });

    function confirmLogout() {
        $('.basic.test.modal')
            .modal({
                closable: false,
                onDeny: function() {
                    //window.alert('Wait not yet!');
                    //$.notify('Well choosen! ;)','success');

                },
                onApprove: function() {
                    //window.alert('Approved!');
                    window.location.href = "<?php echo URL::to('logout')?>";
                }
            })
            .modal('show');
    }

    //THIS LOADS THE MAIN CONTENT FOR SELECTED PAGE
    function ajaxLoad(theelement, thesource) {
        $(theelement).transition('vertical flip', 300, function() {
            $("#mainnav>a.active").removeClass("active");
            $("#mainnav>a[phpurl='" + thesource + "']").addClass('active');
            $(theelement).load(thesource).transition('vertical flip', 700);
        });

    }



    </script>
</body>

</html>
