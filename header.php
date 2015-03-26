<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title><?php wp_title(' |', true, 'right'); ?></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
      <?php wp_head(); ?>
</head>

<body class="home">

<nav class="navbar dropdow-mega-menu navbar-default navbar-fixed-top">

    <div class="navbar-top nav-responsive">
	    <div class="container-fluid">
	    	<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/">
	      	<img src="<?php echo IMG; ?>logo.png" alt="">
	      </a>
	    </div>

	    <div class="collapse navbar-collapse b0 navbar-small-responsive" id="nav-collapse">
	       <ul id="main-navigation" class="nav navbar-nav nav-responsive-one">
          <li class="dropdown">
            <a id="drop-rooms" href="#" class="dropdown-toggle" data-toggle="dropdown">rooms</a>
            <ul class="dropdown-menu dropdown-menu-mega" role="menu">
              <li class="dropdown dropdown-fw">
                <li id="properties" class="dropdown-content container-fluid">
                  <div class="row">
                    <div class="col-md-3 col-md-offset-3 dropdown-responsive-one">
                      <div class="col-md-5 dropdown-responsive-left">
                        <img src="<?php echo IMG;?>rooms-thumb.png" class="img-responsive" alt="">
                      </div>
                      <div class="col-md-7 dropdown-responsive-right">
                        <h4><a class="link dropdown-rooms" href="<?php bloginfo('url'); ?>/rooms">Rooms</a></h4>
                        <ul class="list-inline dropdown-rooms-link">
                          <li><a href="<?php echo get_permalink(30); ?>">Classic Room</a></li>
                          <li><a href="<?php echo get_permalink(32); ?>">Superior Room</a></li>
                          <li><a href="<?php echo get_permalink(36); ?>">Delux Room</a></li>
                          <li><a href="<?php echo get_permalink(38); ?>">Living Room</a></li>
                          <li><a href="<?php echo get_permalink(46); ?>">Suite Room</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-5 dropdown-responsive-two">
                      <div class="col-md-3 dropdown-responsive-left-one">
                        <img src="<?php echo IMG;?>property-thumb.png" class="img-responsive" alt="">
                      </div>
                      <div class="col-md-7 dropdown-responsive-right-two">
                        <h4><a class="link dropdown-responsive-link" href="<?php bloginfo('url'); ?>/properties">Properties Accomodation</a></h4>
                        <ul class="list-inline list-width">
                          <li><a href="<?php echo get_permalink(56); ?>">Soto Grande Hotel</a></li>
                          <li><a href="<?php echo get_permalink(62); ?>">La Breza Hotel</a></li>
                          <li><a href="<?php echo get_permalink(58); ?>">La Miranda Hotel</a></li>
                          <li><a href="<?php echo get_permalink(64); ?>">Stradella Hotel</a></li>
                          <li><a href="<?php echo get_permalink(60); ?>">Vistamar Hotel</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              <li>
          </ul>
          </li><!-- rooms -->
          <li><a href="<?php echo bloginfo('url'); ?>/meetings">meeting and banquet</a></li>
          <li><a href="<?php echo bloginfo('url'); ?>/properties">properties</a></li>
          <li><a href="<?php echo bloginfo('url'); ?>/promos">promos</a></li>
        </ul>
	      <ul class="nav navbar-nav navbar-right nav-responsive-two">
	        <li><a href="<?php echo bloginfo('url'); ?>/photos"><img src="<?php echo IMG; ?>camera.png" class="img-camera" alt=""> Photos</a></li>
	        <li><a href="<?php echo bloginfo('url'); ?>/locations">Location</a></li>
	        <li><a href="#" class="subscribe">Subscribe</a></li>
	        <li><a href="<?php echo bloginfo('url'); ?>/contact">Contact</a></li>
	       <li class="disabled nav-phone">+63 32.238.6592</li>
	      </ul>

	    </div><!-- /.navbar-collapse -->
	    </div>
    </div>

    <div class="navbar navbar-form-wrapper">
    <div class="nav-bar-width">
    	<!--form-desktop -->
    	<div class="form-desktop">
			<form action="" class="nav-bar-width-wrapper">
				<div class="form-group form-date">
				  <div class="input-group">
					  <input id="dp3"  class="input-date form-control rwd-font" size="16" type="text" value="Check In">
					  <div class="input-group-icon">
					  	<span class="glyphicon glyphicon-calendar glyphicon-input"></span>
					  </div>
				  </div>
				</div>

				<div class="form-group custom-select mr2">
					<select name="" id="" class="form-control">
						<option value="">1 Night</option>
						<option value="">1</option>
						<option value="">1</option>
					</select>
				</div>
				<div class="form-group custom-select mr2">
					<select name="" id="" class="form-control">
						<option value="">1 Adult</option>
						<option value="">1</option>
						<option value="">1</option>
					</select>
				</div>
				<div class="form-group custom-select mr0">
					<select name="" id="" class="form-control">
						<option value="">0 Children</option>
						<option value="">1</option>
						<option value="">1</option>
					</select>
				</div>
				<div class="form-group form-group-action form-check">
					<button class="btn btn-green ">Check Availability</button></a>
				</div>
			</form>
		</div>
		<!--/form-desktop -->
	</div>
	</div>
</div>
</nav>

<div class="gap"></div>