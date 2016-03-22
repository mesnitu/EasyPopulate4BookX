<?php
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

$ep4bookx_project = 'ep4bookx';
$ep4bookx_version = '0.9.9';
$const = get_defined_constants();

$ep4bookx = $const['EASYPOPULATE_4_CONFIG_BOOKX_DATA'];
$ep4bookx_fields_conf = $const['EASYPOPULATE_4_ENABLE_FIELDS_CONFIG_BOOKX_DATA'];

if ($ep4bookx == 1) {

    $ep4bookx_module_path = DIR_WS_MODULES . $ep4bookx_project . '/';
    $ep4bookx_tpl_path = $ep4bookx_module_path . 'tpl/';
    $ep4bookx_layout_path = $ep4bookx_module_path . 'layouts/';
 
    $sql = "SELECT * FROM {$const['TABLE_PRODUCT_TYPES']} WHERE type_handler = 'product_bookx' ";
    $result = $db->Execute($sql);

    if ($result->RecordCount() !== 0) {
        $bookx_product_type = $result->fields['type_id'];
       
    } else {
        // error. No bookx module found
    }
  
    include $ep4bookx_module_path.'ep4bookx_pre_process.php';
} 