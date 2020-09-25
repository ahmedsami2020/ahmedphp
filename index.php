<?php

echo "<pre>\n";
echo 'display_errors = ' . ini_get('display_errors') . "\n";

if ( ini_get('display_errors') == 1 ) {
    echo("It is all good...\n");
    echo "</pre>\n";
    return;
}

echo("YOU ARE IN VERY BAD SHAPE!!!!!!\n");
echo("You need to edit this file:\n\n");
echo(php_ini_loaded_file()."\n\n");
echo("And set\n\n");
echo("display_errors = On\n\n");
echo("Until you do this, you will be very very unhappy doing PHP development\n");
echo("in this PHP environment.\n");

echo "</pre>\n";
?>

<?php
echo("<p>What we want to see below is a 'Fatal Error'.</p>\n");

// Do not fix the mistake in the code below - the goal is to 
// trigger an error to verify that we see errors in the browser.

failure_is_expected();
?>