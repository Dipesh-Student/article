<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Asia/Kolkata" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );//path to class files
define( "TEMPLATE_PATH", "templates" );//path to html templates
define( "HOMEPAGE_NUM_ARTICLES", 5 );//no of articles to be shown on homepage 
define( "ADMIN_USERNAME", "dipesh" );//
define( "ADMIN_PASSWORD", "dipesh" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>