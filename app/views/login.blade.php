<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keyword" content="">
        <link rel="shortcut icon" href="img/favicon.png">
 
        <title>{{ $title }} - {{ Config::get('customConfig.siteName') }}</title>

        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/bootstrap-reset.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/style-responsive.css') }}
        @yield('style')
        {{ HTML::style('css/custom.css') }}

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        	{{ HTML::script('js/html5shiv.js') }}
        	{{ HTML::script('js/respond.min.js') }}
        <![endif]-->
    </head>

  	<body class="login-body">
		<div class="container">
            {{ Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'form-signin')) }}
        		<h2 class="form-signin-heading">log in now</h2>
        		<div class="login-wrap">
                    @include('includes.alert')

                    {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus')) }}
                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}

		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
		                </span>
            		</label>
                    {{ Form::submit('Log in', array('class' => 'btn btn-lg btn-login btn-block')) }}

                    <div class="registration">
                        Don't have an account yet?
                        <a href="{{ URL::route('register') }}">
                            Create an account
                        </a>
                    </div>
        		</div>

				

      		{{ Form::close() }}

            

            <!--  Modal -->

            {{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'post', 'class' => 'form-signin')) }}
               
               <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                             <h4 class="modal-title">Forgot Password ?</h4>
                         </div>
                         <div class="modal-body">
                             <p>Enter your e-mail address below to reset your password.</p>
                             <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
               
                         </div>
                         <div class="modal-footer">
                             <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                             {{ Form::submit('Reset', array('class' => 'btn btn-success')) }}
                            <!--  <button class="btn btn-success" type="button">Submit</button> -->
                         </div>
                     </div>
                 </div>
               </div>
               {{ Form::close() }}
               <!-- modal -->
                
    	</div>

       
    <!-- js placed at the end of the document so the pages load faster -->
    {{ HTML::script('js/jquery.js') }}
  	{{ HTML::script('js/bootstrap.min.js') }}

  	</body>
</html>
