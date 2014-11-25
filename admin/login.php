<?php 
    $page_title = "Exam-Questions | Admin Login";
    $nav_title  = "Admin Login";
    require_once("header.php");
?>
    <div class="row">
        <br><br><br><br><br><br><br><br><br>
        <div class="hide-for-small-only hide-for-medium-only">
            <br><br><br><br><br>
        </div>
        <div class="panel custom large-4 medium-6 small-11 small-centered columns">
            <form method="POST" action="<?$_SERVER['PHP_SELF']?>">
                <input type="text" placeholder="Username">                        
                <input type="password" placeholder="Password">
                <input type="submit" class="button small success" value="Login">
            </form>
        </div>
        <br><br><br><br><br><br><br>
    </div>
<?php require_once("footer.php"); ?>