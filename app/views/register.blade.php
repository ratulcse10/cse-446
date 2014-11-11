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

      
      	{{ Form::open(array('route' => 'register', 'method' => 'post', 'class' => 'form-signin')) }}
        <h2 class="form-signin-heading">registration</h2>
        <div class="login-wrap">
        	@include('includes.alert')
            <p>Enter your personal details below</p>
            
            {{ Form::text('Name', '', array('class' => 'form-control', 'placeholder' => 'Name', 'autofocus')) }}
            
            
            {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus')) }}
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}

            {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password Confirmation')) }}

			{{ Form::submit('register',array('class' => 'btn btn-lg btn-login btn-block', 'data-loading-text' => 'Registering User...')) }}
                
            </div>

           
            
            
           

            <div class="registration">
                Already Registered.
                
                	<a href="{{ URL::route('login') }}">
                    Login
                </a>
            </div>

        </div>
       
    <!-- js placed at the end of the document so the pages load faster -->
    {{ HTML::script('js/jquery.js') }}
  	{{ HTML::script('js/bootstrap.min.js') }}

  	</body>
</html>
