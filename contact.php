<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/jquery.form.js"></script>
    <script type="text/javascript">
    $(function(){
  		$(".submit").live('click', function(){
            $("#contactform").validate({
  	          errorPlacement: function(error, element) {
  	              element.addClass('error');
  	          },
  	          rules: {
  	              email: {
  	                  required: true,
  	                  email: true
  	              },
                    /* add new validations here */
  	              message: {
  	              	required: true
  	              }
  	          },
  	          submitHandler: function(contact) {
  	              jQuery(contact).ajaxSubmit({
  	                  target: "#result",
  	                  success: function() {
  	                      $("#contact").hide('slow', function() {
  	                         // Animation complete.
  	                      });
  	                  }
  	              });
  	          }
  	      });
  	    });
      });
    </script>
    <meta charset="utf-8">
    <title>Contact - See the sign advertising network</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
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
	  .error {
	  color: #b94a48;
    border-color: #ee5f5b;
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
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

          <div id="result"></div>
          <div id="contact", class="contact">  
          <h2>Contact</h2>            
			    <form method="post" action="submit.php" name="contactform" id="contactform" autocomplete="on">
			    	<fieldset>
			              <div class="clearfix">
			                <label for="xlInput">Email</label>
			                <div class="input">
			                  <input class="xlarge" id="email" name="email" size="30" type="text">
			                </div>
			              </div><!-- /clearfix -->
          
			              <div class="clearfix">
			                <label for="textarea">Message</label>
			                <div class="input">
			                  <textarea class="xlarge" id="message" name="message" rows="10"></textarea>
			                  <span class="help-block">
			                    Your message.
			                  </span>
			                </div>
			              </div><!-- /clearfix -->
			              <div class="actions">
			                <input type="submit" class="btn primary submit" id="submit" value="Submit">
			              </div>
			    </fieldset>
			    </form>
			    </div>
          </div>
          <div class="span4">
            <h3>Legal</h3>
			<address>
			J&auml;ger &amp; Schweizer Ingenieure UG (haftungsbeschr&auml;nkt)
			Stichstra&szlig;e 38<br/>
			D-71069 Sindelfingen<br/>
			<br/>
			Tel.: +49(0)7031 4101-986<br/>
			Mail: support [at] js-ing.com<br/>
			<br/>
			Vertretungsberechtigte Gesch&auml;ftsf&uuml;hrer:<br/>
			Jens J&auml;ger, Patrick Schweizer<br/>
			<br/>
			Registergericht: Amtsgericht Stuttgart <br/>
			Registernummer: HRB 731665 <br/>
			Ust.-Id-Nr. DE267553639 <br/>

			</address>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; J&auml;ger &amp; Schweizer Ingenieure 2012</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
