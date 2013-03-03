<!DOCTYPE html>
<html lang="en">
<head> <title>Contact Us - yourssocially.in</title>
  <LINK REL="SHORTCUT ICON" HREF="https://yourssocially-bharatv.rhcloud.com/static/images/logo_YS.ico"> 
  <meta charset="utf-8">
  <link rel="stylesheet" href="/static/css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="/static/css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="/static/css/style.css" type="text/css" media="all">
  <!--[if lt IE 7]>
  	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
  <script>
  $(document).ready(function() {
    $('#contacts-form').submit(function() {
      $('#nafrat').show();
    });
  });
  </script>
</head>

<body id="page9">
  <div id="main">
  	<!-- header -->
    <header>
      <div class="logo">
        <a href="/index.php"><img src="/static/images/logo_YS.jpg" alt="" border="0"></a>
        <!-- <h1><a href="/index.php">Just</a></h1>
        <p class="description">{"head"|valueof}</p> -->
      </div>
      <nav>
        <ul>
        	<li><a href="index.php">Home</a></li>
          <li><a href="about_us.php">about us</a></li>
          <li><a href="portfolio.php">portfolio</a></li>
          <li><a href="services.php">services</a></li>
          <li><a href="contact_us.php" class="current">contacts</a></li>
        </ul>
      </nav>
      <ul class="social-services">
        <li><a href="http://www.linkedin.com/company/yours-socially/" target="_blank"><img src="/static/images/icon-linkedin.gif" alt=""></a></li>
        <li><a href="https://twitter.com/YoursSociallyIn" target="_blank"><img src="/static/images/icon-twitter.gif" alt=""></a></li>
        <!--<li><a href="#" target="_blank"><img src="/static/images/icon-technorati.gif" alt=""></a></li> -->
        <li><a href="https://www.facebook.com/YoursSocially" target="_blank"><img src="/static/images/icon-facebook.gif" alt=""></a></li>
      </ul>
    </header>
    <!-- content -->
    <section id="content">
    	<div class="indent">
        <div class="wrapper">
        	<div class="col-1">
          	<article>
          	  <h2>primary contacts</h2>
              <div class="wrapper">
              	<img src="/static/images/map.gif" alt="" class="img-indent">
                <dl class="address">
                	<dt>Sector - 12, Dwarka<br />
                  New Delhi - 110075</dt>
                  <dd><span>Telephone:</span>+91-9899763020</dd>
                  <!--<dd><span>FAX:</span>+1 458 889 9898</dd>-->
                  <dd>E-mail: <a href="mailto:info@yourssocially.in?Subject=Hello%20Yourssocially.in">info@yourssocially.in</a></dd>
                </dl>
              <!--  <dl class="address last">
                	<dt>9870 St Vincent Place,<br />
                  Glasgow, DC 45 Fr 45.</dt>
                  <dd><span>Telephone:</span>+1 959 603 6035</dd>
                  <dd><span>FAX:</span>+1 458 889 9898</dd>
                  <dd>E-mail: <a href="#">mail@demolink.org</a></dd>
                </dl> -->
              </div>
          	</article>
            <article class="last">
            	<h2>contact form</h2>
              <form method="POST" name="form" action="/contact_us.php" id="contacts-form">
                <fieldset>
                  <div class="col-1">
                    <label>Enter Your Name:<br /><input type="text" name="c_name"value=""/></label>
                    <label>Enter Your E-mail:<br /><input type="text" name="c_email" value=""/></label>
                    <label>Enter Your Phone:<br /><input type="text" name="c_state" value=""/></label>
                    </div>
                    <div class="col-2">
                      Message:<br /><textarea name="c_msg" cols="" rows=""></textarea>
                      <div class="alignright"><input type="submit" name="Clear" value="Clear" onClick="document.getElementById('contacts-form').reset()" class="read_more"> &nbsp; &nbsp; &nbsp; <input type="submit" name="Submit" value="Submit" class="read_more"></div>
                    </div>
                 </fieldset>
               </form>
            </article>
            <dl>
              <dt><span id="nafrat" style="display: none;"> Thanks ... we will shortly get in touch with you ! </span></dt>
            </dl>
          </div>
          <!--<div class="col-2"> 
          	<h2>our locations</h2>
            <dl class="locations">
            	<dt>Argentina</dt>
              <dd>Fusce feugiat malesuada odio Morbi nunc odio ste gravida at cursus nec luctus a Maecenas tristique orci ac ate sem Duis ultricies pharetra magna ser Donec accumsan malesuada orci Donec sit amet eros Lorem ipsum ser dolor sit smet. Consectetuer Mauris fermentum dictum magna eet.</dd>
              <dt>Denmark</dt>
              <dd>Giat malesuada odio Morbi nunc odio ste gravida at cursus nec luctus a Maecenas tristique orci ac ate sem Duis ultricies pharetra magna ser Donec ster accumsan malesuada orci Donec sit amet erosser Lorem ipsum ser dolor sit smet conse. Tetuer ster Mauris fermentum dictum magna ore.</dd>
              <dt>Ireland</dt> 
              <dd class="last">Fusce feugiat malesuada odio Morbi nunc odio ste gravida at cursus nec luctus a Maecenas tristique orci ac ate sem Duis ultricies pharetra magna ser Donec accumsan malesuada orci Donec sit amet eros Lorem ipsum ser dolor sit smet. consectetuer Mauris fermentum dictum magna.</dd>
            </dl>
          </div> -->
        </div>
      </div>
    </section>
    <!-- footer -->
    <footer>
      <div class="wrapper">
        <div class="copy fleft"><strong>yourssocially.in</strong> &copy; 2013 &nbsp; | &nbsp; <a href="privacy_policy.php">Privacy Policy</a></div>
        <div class="right-section">
        	<!-- FOOTER ENDS -->
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
