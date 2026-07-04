<?php
// URI:       extension/eztags/design/standard/templates/ezjsctemplate/tree_menu_script.tpl
// Filename:  extension/eztags/design/standard/templates/ezjsctemplate/tree_menu_script.tpl
// Timestamp: 1776845755 (Wed Apr 22 8:15:55 UTC 2026)
$oldSetArray_487f1f92dd48d595efb6fb72f2d53019 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/site/cache/template/compiled/common.php' );

if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["49063683491a45a03afeb53d41d1869d"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["49063683491a45a03afeb53d41d1869d"] = array( array( 1,
              0,
              1 ),
       array( 1,
              8,
              9 ),
       "extension/eztags/design/standard/templates/ezjsctemplate/tree_menu_script.tpl" );
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_persistence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_persistence'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// def $menu_persistence
if ( $tpl->hasVariable( 'menu_persistence', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'menu_persistence' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 32,
    2 => 46,
  ),
  1 => 
  array (
    0 => 2,
    1 => 124,
    2 => 138,
  ),
  2 => 'extension/eztags/design/standard/templates/ezjsctemplate/tree_menu_script.tpl',
) );
    $tpl->setVariable( 'menu_persistence', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'menu_persistence', true, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// def $current_user
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_user', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_user' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 28,
    2 => 176,
  ),
  1 => 
  array (
    0 => 3,
    1 => 75,
    2 => 223,
  ),
  2 => 'extension/eztags/design/standard/templates/ezjsctemplate/tree_menu_script.tpl',
) );
    $tpl->setVariable( 'current_user', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_user', $var, $rootNamespace );
}

}
unset( $if_cond );
// if ends

$text .= '
<script type="text/javascript">
    var TagsStructureMenuParams = {"path":[';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 0 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'tag_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
$fe_array_db510f97667304798fc2c9fb410f0c5d_14 = [];
$fe_array_keys_db510f97667304798fc2c9fb410f0c5d_14 = [];
$fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_n_items_processed_db510f97667304798fc2c9fb410f0c5d_14  = 0;
$fe_i_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_key_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_val_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_offset_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_max_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_reverse_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_first_val_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_last_val_db510f97667304798fc2c9fb410f0c5d_14 = 0;
if ( !isset( $fe_variable_stack_db510f97667304798fc2c9fb410f0c5d_14 ) ) $fe_variable_stack_db510f97667304798fc2c9fb410f0c5d_14 = [];
$fe_variable_stack_db510f97667304798fc2c9fb410f0c5d_14[] = @compact( 'fe_array_db510f97667304798fc2c9fb410f0c5d_14', 'fe_array_keys_db510f97667304798fc2c9fb410f0c5d_14', 'fe_n_items_db510f97667304798fc2c9fb410f0c5d_14', 'fe_n_items_processed_db510f97667304798fc2c9fb410f0c5d_14', 'fe_i_db510f97667304798fc2c9fb410f0c5d_14', 'fe_key_db510f97667304798fc2c9fb410f0c5d_14', 'fe_val_db510f97667304798fc2c9fb410f0c5d_14', 'fe_offset_db510f97667304798fc2c9fb410f0c5d_14', 'fe_max_db510f97667304798fc2c9fb410f0c5d_14', 'fe_reverse_db510f97667304798fc2c9fb410f0c5d_14', 'fe_first_val_db510f97667304798fc2c9fb410f0c5d_14', 'fe_last_val_db510f97667304798fc2c9fb410f0c5d_14' );
unset( $fe_array_db510f97667304798fc2c9fb410f0c5d_14 );
unset( $fe_array_db510f97667304798fc2c9fb410f0c5d_14 );
$fe_array_db510f97667304798fc2c9fb410f0c5d_14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$fe_array_db510f97667304798fc2c9fb410f0c5d_141 = compiledFetchAttribute( $fe_array_db510f97667304798fc2c9fb410f0c5d_14, 'path' );
unset( $fe_array_db510f97667304798fc2c9fb410f0c5d_14 );
$fe_array_db510f97667304798fc2c9fb410f0c5d_14 = $fe_array_db510f97667304798fc2c9fb410f0c5d_141;
if (! isset( $fe_array_db510f97667304798fc2c9fb410f0c5d_14 ) ) $fe_array_db510f97667304798fc2c9fb410f0c5d_14 = NULL;
while ( is_object( $fe_array_db510f97667304798fc2c9fb410f0c5d_14 ) and method_exists( $fe_array_db510f97667304798fc2c9fb410f0c5d_14, 'templateValue' ) )
    $fe_array_db510f97667304798fc2c9fb410f0c5d_14 = $fe_array_db510f97667304798fc2c9fb410f0c5d_14->templateValue();

$fe_array_keys_db510f97667304798fc2c9fb410f0c5d_14 = is_array( $fe_array_db510f97667304798fc2c9fb410f0c5d_14 ) ? array_keys( $fe_array_db510f97667304798fc2c9fb410f0c5d_14 ) : [];
$fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 = count( $fe_array_keys_db510f97667304798fc2c9fb410f0c5d_14 );
$fe_n_items_processed_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_offset_db510f97667304798fc2c9fb410f0c5d_14 = 0;
$fe_max_db510f97667304798fc2c9fb410f0c5d_14 = $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 - $fe_offset_db510f97667304798fc2c9fb410f0c5d_14;
$fe_reverse_db510f97667304798fc2c9fb410f0c5d_14 = false;
if ( $fe_offset_db510f97667304798fc2c9fb410f0c5d_14 < 0 || $fe_offset_db510f97667304798fc2c9fb410f0c5d_14 >= $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 )
{
    $fe_offset_db510f97667304798fc2c9fb410f0c5d_14 = ( $fe_offset_db510f97667304798fc2c9fb410f0c5d_14 < 0 ) ? 0 : $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14;
    if ( $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 || $fe_offset_db510f97667304798fc2c9fb410f0c5d_14 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_db510f97667304798fc2c9fb410f0c5d_14'. Array count: $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14");   
}
}
if ( $fe_max_db510f97667304798fc2c9fb410f0c5d_14 < 0 || $fe_offset_db510f97667304798fc2c9fb410f0c5d_14 + $fe_max_db510f97667304798fc2c9fb410f0c5d_14 > $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 )
{
    if ( $fe_max_db510f97667304798fc2c9fb410f0c5d_14 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_db510f97667304798fc2c9fb410f0c5d_14");
    $fe_max_db510f97667304798fc2c9fb410f0c5d_14 = $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 - $fe_offset_db510f97667304798fc2c9fb410f0c5d_14;
}
if ( $fe_reverse_db510f97667304798fc2c9fb410f0c5d_14 )
{
    $fe_first_val_db510f97667304798fc2c9fb410f0c5d_14 = $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 - 1 - $fe_offset_db510f97667304798fc2c9fb410f0c5d_14;
    $fe_last_val_db510f97667304798fc2c9fb410f0c5d_14  = 0;
}
else
{
    $fe_first_val_db510f97667304798fc2c9fb410f0c5d_14 = $fe_offset_db510f97667304798fc2c9fb410f0c5d_14;
    $fe_last_val_db510f97667304798fc2c9fb410f0c5d_14  = $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 - 1;
}
// foreach
for ( $fe_i_db510f97667304798fc2c9fb410f0c5d_14 = $fe_first_val_db510f97667304798fc2c9fb410f0c5d_14; $fe_n_items_processed_db510f97667304798fc2c9fb410f0c5d_14 < $fe_max_db510f97667304798fc2c9fb410f0c5d_14 && ( $fe_reverse_db510f97667304798fc2c9fb410f0c5d_14 ? $fe_i_db510f97667304798fc2c9fb410f0c5d_14 >= $fe_last_val_db510f97667304798fc2c9fb410f0c5d_14 : $fe_i_db510f97667304798fc2c9fb410f0c5d_14 <= $fe_last_val_db510f97667304798fc2c9fb410f0c5d_14 ); $fe_reverse_db510f97667304798fc2c9fb410f0c5d_14 ? $fe_i_db510f97667304798fc2c9fb410f0c5d_14-- : $fe_i_db510f97667304798fc2c9fb410f0c5d_14++ )
{
$fe_key_db510f97667304798fc2c9fb410f0c5d_14 = $fe_array_keys_db510f97667304798fc2c9fb410f0c5d_14[$fe_i_db510f97667304798fc2c9fb410f0c5d_14];
$fe_val_db510f97667304798fc2c9fb410f0c5d_14 = $fe_array_db510f97667304798fc2c9fb410f0c5d_14[$fe_key_db510f97667304798fc2c9fb410f0c5d_14];
$vars[$rootNamespace]['element'] = $fe_val_db510f97667304798fc2c9fb410f0c5d_14;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ', ';
} // delimiter ends

$text .= '\'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'element', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['element'] : null;
$var1 = compiledFetchAttribute( $var, 'tag_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'';
$fe_n_items_processed_db510f97667304798fc2c9fb410f0c5d_14++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_db510f97667304798fc2c9fb410f0c5d_14 ) ) extract( array_pop( $fe_variable_stack_db510f97667304798fc2c9fb410f0c5d_14 ) );

else
{

unset( $fe_array_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_array_keys_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_n_items_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_n_items_processed_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_i_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_key_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_val_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_offset_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_max_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_reverse_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_first_val_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_last_val_db510f97667304798fc2c9fb410f0c5d_14 );

unset( $fe_variable_stack_db510f97667304798fc2c9fb410f0c5d_14 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '],"useCookie":';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_persistence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_persistence'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ',"perm":"';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var4 = compiledFetchAttribute( $var3, 'role_id_list' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = implode( ",", $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var6 = compiledFetchAttribute( $var5, 'limited_assignment_value_list' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = implode( ",", $var5 );unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '|' . $var4 );
unset( $var2, $var4 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = md5( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","expiry":"';
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentTreeMenuExpiry' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","modal":true,"context":"browse","showTips":';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ',"autoOpen":false,"tag_id_string":"';
unset( $var );
$var = 'Tag ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","parent_tag_id_string":"';
unset( $var );
$var = 'Parent tag ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","treemenu_base_url":"/tags/treemenu","not_allowed_string":"';
unset( $var );
$var = 'Dynamic tree not allowed for this siteaccess' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","no_tag_string":"';
unset( $var );
$var = 'Tag does not exist' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","internal_error_string":"';
unset( $var );
$var = 'Internal error' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"};
</script>';
}

$setArray = $oldSetArray_487f1f92dd48d595efb6fb72f2d53019;
$tpl->Level--;
?>
