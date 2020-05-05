<?php
add_action('init', 'zero_add_menu');
function zero_add_menu()
{
    register_nav_menu('localweb', 'Menu principal');
}
?>
