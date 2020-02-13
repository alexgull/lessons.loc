<?php 
define ( 'ROOT_DIR', __DIR__ );
require_once( 'inc/user_functions.php' );
require_once( 'handlers/handler_register.php' ); 

require_once ('lib/autoloader.php');

//require_once ('lib/Get.php');
//require_once ('lib/Post.php');
//require_once ('lib/Server.php');



var_dump ( Get::get_var('some') );
var_dump ( Get::has('some','serge') );

var_dump ( Server::get_var('some') );
var_dump ( Post::get_var('some') );

//var_dump ( $_SERVER );

die();

?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/common.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet">
    <script src="js/common.js"></script>
</head>
<body>
<div class="div-center">
	<?php require_once( 'forms/form_register.php' ); ?>
</div>
	<?php if (isset ($_COOKIE['user_logged'])) {
	    ?>
                    <div class="div-center">
                    <?php require_once( 'forms/form_userinfo.php' ); ?>
                    </div>

        <?php } ?>

</body>
</html>