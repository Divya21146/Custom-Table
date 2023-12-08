<?php 

function custom_table() {
    global $wpdb;
 
 $table_name = $wpdb->prefix."your_table_name"; //change the "user_data" to your table name

 $charset_collate = $wpdb->get_charset_collate();

 $sql = "CREATE TABLE IF NOT EXISTS $table_name (
    id mediumint(9) NOT NULL AUTO_INCREMENT,
    email varchar(100) NOT NULL,
    user_name varchar(100) NOT NULL,
    created_date datetime NOT NULL,
    PRIMARY KEY (id)
)";

 require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
 dbDelta($sql);

}    
 
add_action('init', 'custom_table');
