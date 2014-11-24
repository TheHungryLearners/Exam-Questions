<!doctype html>
<html class="no-js" lang="en">
<?php include_once('header.php'); ?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <style>
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
    <div class="row">
      <h3><b>Error: Forbidden Access</b></h3> 
    </div>

<?php 
  include_once('footer.php');
  header('Refresh: 3; url = index.php'); 
?>

