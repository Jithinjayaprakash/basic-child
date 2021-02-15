<?php
/***********************************************************
 ***********************************************************
    MAIN FUNCTIONS FILE
***********************************************************
***********************************************************/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/***********************************************************
    ADDITIONAL FILES TO BE INCLUDED
***********************************************************/

if(!current_user_can('administrator')){
    show_admin_bar(false);
}

/***********************************************************
    ADDITIONAL FILES TO BE INCLUDED
***********************************************************/

// Includes file for online pooja booking
// require_once WP_CONTENT_DIR . '/themes/THEME-NAME/inc/enqueue.php';


/***********************************************************
    USER ROLES
***********************************************************/
// remove_role( 'subscriber' );

/***********************************************************
    Changing Default Role Names
***********************************************************/

// Changing Role Names
function change_role_name() {
    global $wp_roles;

    if ( !isset( $wp_roles ) ) {
        $wp_roles = new WP_Roles();
    }

    $wp_roles->roles['administrator']['name'] = 'Onetikk Admin';
    $wp_roles->role_names['administrator'] = 'Onetikk Admin';

    $wp_roles->roles['editor']['name'] = 'Admin';
    $wp_roles->role_names['editor'] = 'Admin';

    $wp_roles->roles['author']['name'] = 'Comittee Members';
    $wp_roles->role_names['author'] = 'Comittee Members';

    $wp_roles->roles['contributor']['name'] = 'Installation Engineer';
    $wp_roles->role_names['contributor'] = 'Installation Engineer';

    $wp_roles->roles['subscriber']['name'] = 'Customer';
    $wp_roles->role_names['subscriber'] = 'Customer';
        
}
add_action('init', 'change_role_name');

/***********************************************************
    USER ROLES ENDS
***********************************************************/



?>