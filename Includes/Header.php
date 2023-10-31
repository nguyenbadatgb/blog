<?php 

    include("Includes/Connection.php");
    include("Includes/Functions_Index.php");

    //Update Website Stat
    $Query = "UPDATE total_visits SET Total_Visits=Total_Visits+1";
    $Result = $Connection->query($Query);

    if(isset($_GET['PostID'])){
        $PostID = $_GET['PostID'];  
        GetTitle($PostID);
    }
?>

<!DOCTYPE html>
<html>
<title><?php echo (defined('TITLE')) ? TITLE . " &mdash;" : "" ?> My Own Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="10800"/>
<meta name="description" content="">
<meta name="author" content="Muhaddis">
<link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="Admin/css/animate.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/style2.css" rel="stylesheet">
<link href="../css/style3.css" rel="stylesheet">
<script src="Admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="Admin/plugins/bower_components/jquery-ui/jquery-ui.min.js"></script>
<link rel="icon" type="image/png" sizes="16x16" href="Admin/plugins/images/favicon.png">

<style>
    body,h1,h2,h3,h4,h5 {
        font-family: "Raleway", sans-serif
    }
</style>

<body >

    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div >

        <!-- Header -->
<!--        <header class="w3-container w3-center w3-padding-32">-->
<!--            <a href="http://127.0.0.1/My-Blog/" style="text-decoration:none"><h1><b>Information System Security <i class="fas fa-lock"></i></b></h1></a>-->
<!--            <p>--><?php //Description(); ?><!--</p>-->
<!--        </header>-->
