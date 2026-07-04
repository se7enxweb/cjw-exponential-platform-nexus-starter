<?php
// URI:       design:tabs/eztags.tpl
// Filename:  extension/eztags/design/admin2/templates/tabs/eztags.tpl
// Timestamp: 1776845755 (Wed Apr 22 8:15:55 UTC 2026)
$oldSetArray_7216a0f4e733c759a290f046d7483f55 = isset( $setArray ) ? $setArray : array();
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

// def $eztags_attribute_count
if ( $tpl->hasVariable( 'eztags_attribute_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'eztags_attribute_count' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 31,
    2 => 32,
  ),
  2 => 'extension/eztags/design/admin2/templates/tabs/eztags.tpl',
) );
    $tpl->setVariable( 'eztags_attribute_count', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'eztags_attribute_count', 0, $rootNamespace );
}

// foreach begins
$skipDelimiter = true;
$fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 = [];
$fe_array_keys_cbfacd18dbd5e6a141678e1f6943e95c_28 = [];
$fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_n_items_processed_cbfacd18dbd5e6a141678e1f6943e95c_28  = 0;
$fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_key_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_val_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_reverse_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_first_val_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_last_val_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
if ( !isset( $fe_variable_stack_cbfacd18dbd5e6a141678e1f6943e95c_28 ) ) $fe_variable_stack_cbfacd18dbd5e6a141678e1f6943e95c_28 = [];
$fe_variable_stack_cbfacd18dbd5e6a141678e1f6943e95c_28[] = @compact( 'fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_array_keys_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_n_items_processed_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_key_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_val_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_reverse_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_first_val_cbfacd18dbd5e6a141678e1f6943e95c_28', 'fe_last_val_cbfacd18dbd5e6a141678e1f6943e95c_28' );
unset( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 );
unset( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 );
$fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_cbfacd18dbd5e6a141678e1f6943e95c_281 = compiledFetchAttribute( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28, 'data_map' );
unset( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 );
$fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_281;
if (! isset( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 ) ) $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 = NULL;
while ( is_object( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 ) and method_exists( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28, 'templateValue' ) )
    $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28->templateValue();

$fe_array_keys_cbfacd18dbd5e6a141678e1f6943e95c_28 = is_array( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 ) ? array_keys( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 ) : [];
$fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 = count( $fe_array_keys_cbfacd18dbd5e6a141678e1f6943e95c_28 );
$fe_n_items_processed_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 = 0;
$fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 - $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28;
$fe_reverse_cbfacd18dbd5e6a141678e1f6943e95c_28 = false;
if ( $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 < 0 || $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 >= $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 )
{
    $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 = ( $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 < 0 ) ? 0 : $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28;
    if ( $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 || $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28'. Array count: $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28");   
}
}
if ( $fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28 < 0 || $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 + $fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28 > $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 )
{
    if ( $fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28");
    $fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 - $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28;
}
if ( $fe_reverse_cbfacd18dbd5e6a141678e1f6943e95c_28 )
{
    $fe_first_val_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 - 1 - $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28;
    $fe_last_val_cbfacd18dbd5e6a141678e1f6943e95c_28  = 0;
}
else
{
    $fe_first_val_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28;
    $fe_last_val_cbfacd18dbd5e6a141678e1f6943e95c_28  = $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 - 1;
}
// foreach
for ( $fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_first_val_cbfacd18dbd5e6a141678e1f6943e95c_28; $fe_n_items_processed_cbfacd18dbd5e6a141678e1f6943e95c_28 < $fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28 && ( $fe_reverse_cbfacd18dbd5e6a141678e1f6943e95c_28 ? $fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28 >= $fe_last_val_cbfacd18dbd5e6a141678e1f6943e95c_28 : $fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28 <= $fe_last_val_cbfacd18dbd5e6a141678e1f6943e95c_28 ); $fe_reverse_cbfacd18dbd5e6a141678e1f6943e95c_28 ? $fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28-- : $fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28++ )
{
$fe_key_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_array_keys_cbfacd18dbd5e6a141678e1f6943e95c_28[$fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28];
$fe_val_cbfacd18dbd5e6a141678e1f6943e95c_28 = $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28[$fe_key_cbfacd18dbd5e6a141678e1f6943e95c_28];
$vars[$rootNamespace]['attribute'] = $fe_val_cbfacd18dbd5e6a141678e1f6943e95c_28;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_type_string' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'eztags' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
  'nice_urls' => 
  array (
    0 => 
    array (
      0 => 7,
      1 => false,
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 6,
    1 => 12,
    2 => 175,
  ),
  1 => 
  array (
    0 => 6,
    1 => 69,
    2 => 232,
  ),
  2 => 'extension/eztags/design/admin2/templates/tabs/eztags.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'eztags_attribute_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['eztags_attribute_count'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 + 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'eztags_attribute_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['eztags_attribute_count'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_cbfacd18dbd5e6a141678e1f6943e95c_28++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_cbfacd18dbd5e6a141678e1f6943e95c_28 ) ) extract( array_pop( $fe_variable_stack_cbfacd18dbd5e6a141678e1f6943e95c_28 ) );

else
{

unset( $fe_array_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_array_keys_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_n_items_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_n_items_processed_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_i_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_key_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_val_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_offset_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_max_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_reverse_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_first_val_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_last_val_cbfacd18dbd5e6a141678e1f6943e95c_28 );

unset( $fe_variable_stack_cbfacd18dbd5e6a141678e1f6943e95c_28 );

}

// foreach ends
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'eztags_attribute_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['eztags_attribute_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <p>No tags</p>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_7216a0f4e733c759a290f046d7483f55;
$tpl->Level--;
?>
