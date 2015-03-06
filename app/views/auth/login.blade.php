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



    <div class="ui one column middle aligned relaxed fitted stackable grid" style="margin:33%; margin-top:10%">
        <div class="column">

            <div class="ui middle error inverted blue form segment">
                <h2 class="ui white inverted header">
                  <i class="key icon"></i>
                <div class="content">
                    Account Login
                    <div class="sub header">Please provide your login credentials!</div>
                </div>


                </h2>

                <div class="ui white inverted divider"></div>

                {{ Form::open(array('url' => 'login', 'method' => 'post')) }} @if (Session::has('flash_error'))
                <div class="ui error message">
                    <div class="header">Access Denied </div>
                    <p>{{ Session::get('flash_error') }}</p>
                </div>
                @endif

                <div class="field">
                    <label>Username</label>
                    <div class="ui labeled icon input">
                        <i class="user icon"></i>
                        <input name="username" type="text" placeholder="Username">
                    </div>
                </div>


                <div class="field">
                    <label>Password</label>
                    <div class="ui labeled icon input">
                        <i class="lock icon"></i>
                        <input name="password" type="password">
                    </div>
                </div>
                <input type="submit" value="Login" class='ui submit inverted white button'> {{ Form::close() }}

            </div>


        </div>



    </div>
