<?php 

    // below line sets the title of the page, use this variable before including header.php on any page
    $page_title = "Error!";
    include_once('header.php'); 
?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <style>
    /*Put all this code in the my_css file, check the one already there, add only the ones which differ*/
		body, .panel
		{
			background: #222222;
		}
		body, h3
		{
			color: #FFFFFF;
      text-align: center;
		}
    h3
    {
      margin-left: 15px;
      margin-right: 15px;
    }
    label
    {
      color: #AAAAAA;
      cursor: default;
    }
    </style>
  </head>
  <!-- use body tags for sure -->
    <div class="row">
      <h3><b>Error: Forbidden Access</b></h3> 
    </div>

<?php 
  // make sure the footer stays at the bottom of the page, else it looks weird
  include_once('footer.php');
//  header('Refresh: 3; url = index.php'); 
?>

