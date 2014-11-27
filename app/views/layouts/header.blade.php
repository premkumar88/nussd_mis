<!-- Header -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">NUSSD</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>

                @if(Auth::check())
                    <li>
                        <a href="logout">Logout</a>
                    </li>
                @else
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal">Login</a>
                    </li>
                @endif
               </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>	


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
						  
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Login</h4>
		  </div>
		  <div class="modal-body">
			
		  		@foreach ($errors->all() as $error)
					<p class="error" >{{ $error }} </p>
				@endforeach

				<!-- {{Form::open(array('autocomplete'=> 'off', 'url' => 'logindone','method' => 'post'))}} -->
				<form method="post" autocomplete="off" action="logindone">
					<input type="text" name="username" placeholder="Username" />
					<input type="password" name="password" placeholder="Password" />
					<input type="submit" value="Sign In">
				</form>
				<!-- {{Form::close()}} -->

		 </div>

		</div>
	</div>
</div>