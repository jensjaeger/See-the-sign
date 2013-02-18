<?php include_once('lib/sign.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>See the sign advertising network</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fork.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }
	  h1,
	  h2,
	  h3,
	  h4,
	  h5,
   	  h6{
		  margin-bottom: 8px;
	  }
	  ul.sign {
	    margin-top: 20px;
	    margin-left: 60px;
	  }
	  li.sign {
	    list-style:none;
	    text-align:center;
      position:relative;
      float:left;
      display:inline;
      width:250px;
      height:180px;
	  }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>
    
    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="index.php">See the Sign</a>
          <ul class="nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <!--><form action="" class="pull-right">
            <input class="input-small" type="text" placeholder="Username">
            <input class="input-small" type="password" placeholder="Password">
            <button class="btn" type="submit">Sign in</button>
          </form>-->
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>See the Sign <small>advertising network</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Advertisers</h2>
			<ul class="sign">
			  <?php foreach($signs as $sign){ ?>
				<li class="sign">
				  <?php $sign->printAd() ?>
				</li>            
        <?php } ?>
			</ul>
          </div>
          <div class="span4">
            <h3>Members</h3>
            <p>Proud members of the See the Sign advertising network</p>
            
			<ul>
        <li><a href="http://sherriemccarthy.com">sherriemccarthy.com</a></li>
        <li><a href="http://unleashyouradventure.com">unleashyouradventure.com</a></li>
        <li><a href="http://www.jensjaeger.com">jensjaeger.com</a></li>
				<li><a href="http://www.journizer.com">journizer.com</a></li>
				<li><a href="http://patrickschweizer.com">patrickschweizer.com</a></li>
				<li><a href="http://weltreisebuch.de">weltreisebuch.de</a></li>
			</ul>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; J&auml;ger &amp; Schweizer Ingenieure 2012</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
