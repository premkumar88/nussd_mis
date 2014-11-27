@extends('layouts.main')

@section('content')


<div id="wrapper">
	<div id="nav" class="container_12 clearfix">
		<div id="header">
	    	<div class="inner container_12 clearfix">
	        	<div id="logo" class="grid_5">
	            	<h1><a href="#" title="Website Name">NUSSD <span class="black"></span></a></h1>
	                <p id="slogan">Teach One, Each One</p>
	            </div><!-- end logo -->
	        </div><!-- end header inner -->
	    </div><!-- end header -->
    </div>

    <div id="nav" class="container_12 clearfix">
    	<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="Aboutus_id">About Us</a></li>
			<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
        </ul>
    </div><!-- end nav -->

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
			
    	<div class="inner container_12 clearfix">
        	<div id="main" class="grid_8">
            	<h2 class="h2_head">Welcome!</h2>
					<P>						
					This space is evolving into an online academy to support learning to learn collaboratively.
					The site is currently under testing. Not for public use. Once the site is ready, this message will be replaced by a note on how the site can be used by you.
					Developers' Team.
					</P>
            </div><!-- end main -->
            <div id="sidebar" class="grid_4">
            	<div class="inner">
				
					<img src="images/image1.jpg" alt="image" class="imgborder" />
				
	                <div id="address">
						<h3>Contact Information</h3>
							<p>Deonar Mumbai, <br />
							Pin Code-400 088</p>
							
							<p><strong>Phone:</strong> (022) 567 8910 <br />
							<strong>Fax:</strong> (022) 567 8910</p>
							
							<p><strong>E-mail:</strong> tiss@edu.com</p>
					</div><!-- end address -->
                </div><!-- end sidebar inner -->
            
            </div><!-- end sidebar -->
        </div><!-- end content inner -->

    <div class="inner container_12 clearfix">
	    <div id="footer">
	    	<div class="inner container_12 clearfix">
	    		<p>
	    			Copyright  2014.<br />
	    			<a href="#">Privacy Policy</a> <a href="#"></a>
	    		</p>
	    	</div>
	    </div><!-- end footer -->
    </div>


</div>




	

@stop