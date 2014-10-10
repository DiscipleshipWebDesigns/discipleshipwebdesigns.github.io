<?php 
  include("includes/sessions.php");
  include("includes/functions.php");
  //include("includes/dbconnection.php");
  include("includes/header.php");
  require_once 'includes/validation_functions.php';
  require_once("includes/facebook.php");
  	
?>


	
		<!-- home -->
		<div data-role="header">

    </div>
    <div data-role="content">
      <div>
        <h1>GOD</h1>

        <div class="search"><script id="bw-widget-src" src="//bibles.org/widget/client"></script></div>
        
        <p>Google Doesn't Have all The Answers! Ask God</p>

      </div>
    </div>
    <div data-role="footer">
      
    </div>
<script>
        BIBLESEARCH.widget({
          "background": "73B0F6",
          "color": "FFF",
          "placeholder": " ",
          "selected": "eng-NLT",
          "versions": "eng-NLT"
        });
        </script>
<?php include("includes/footer.php"); ?>