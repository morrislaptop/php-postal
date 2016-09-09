<?php
$br = (php_sapi_name() == "cli")? "":"<br>";

if(!extension_loaded('postal')) {
	dl('postal.' . PHP_SHLIB_SUFFIX);
}
$module = 'postal';
$functions = get_extension_funcs($module);
echo "Functions available in the postal extension:$br\n";
foreach($functions as $func) {
    echo $func."$br\n";
    var_dump($func())."$br\n";
}

// var_dump(hello_world());
?>
