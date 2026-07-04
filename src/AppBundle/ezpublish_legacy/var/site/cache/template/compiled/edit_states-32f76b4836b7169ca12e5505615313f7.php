<?php
// URI:       extension/ngadminui/design/ngadminui/templates/content/parts/edit_states.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/parts/edit_states.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_1b069822cee0dcc43f47478d56be714c = isset( $setArray ) ? $setArray : array();
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

$text .= '
';
// def $enable_StateEditButton
if ( $tpl->hasVariable( 'enable_StateEditButton', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'enable_StateEditButton' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 65,
  ),
  1 => 
  array (
    0 => 3,
    1 => 37,
    2 => 102,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/parts/edit_states.tpl',
) );
    $tpl->setVariable( 'enable_StateEditButton', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'enable_StateEditButton', false, $rootNamespace );
}

$text .= '


<h3>States</h3>




<div class="box-content">

    ';
// foreach begins
$skipDelimiter = true;
$fe_array_cc844afe914ef85caffe58770d2dfdbb_8 = [];
$fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_8 = [];
$fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_8  = 0;
$fe_i_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_key_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_val_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_max_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_reverse_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_first_val_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_last_val_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
if ( !isset( $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_8 ) ) $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_8 = [];
$fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_8[] = @compact( 'fe_array_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_i_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_key_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_val_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_offset_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_max_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_reverse_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_first_val_cc844afe914ef85caffe58770d2dfdbb_8', 'fe_last_val_cc844afe914ef85caffe58770d2dfdbb_8' );
unset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 );
unset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 );
$fe_array_cc844afe914ef85caffe58770d2dfdbb_8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$fe_array_cc844afe914ef85caffe58770d2dfdbb_81 = compiledFetchAttribute( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8, 'allowed_assign_state_list' );
unset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 );
$fe_array_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_array_cc844afe914ef85caffe58770d2dfdbb_81;
if (! isset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 ) ) $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 = NULL;
while ( is_object( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 ) and method_exists( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8, 'templateValue' ) )
    $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_array_cc844afe914ef85caffe58770d2dfdbb_8->templateValue();

$fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_8 = is_array( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 ) ? array_keys( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 ) : [];
$fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 = count( $fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_8 );
$fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 = 0;
$fe_max_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 - $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8;
$fe_reverse_cc844afe914ef85caffe58770d2dfdbb_8 = false;
if ( $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 < 0 || $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 >= $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 )
{
    $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 = ( $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 < 0 ) ? 0 : $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8;
    if ( $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 || $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_cc844afe914ef85caffe58770d2dfdbb_8'. Array count: $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8");   
}
}
if ( $fe_max_cc844afe914ef85caffe58770d2dfdbb_8 < 0 || $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 + $fe_max_cc844afe914ef85caffe58770d2dfdbb_8 > $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 )
{
    if ( $fe_max_cc844afe914ef85caffe58770d2dfdbb_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_cc844afe914ef85caffe58770d2dfdbb_8");
    $fe_max_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 - $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8;
}
if ( $fe_reverse_cc844afe914ef85caffe58770d2dfdbb_8 )
{
    $fe_first_val_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 - 1 - $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8;
    $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_8  = 0;
}
else
{
    $fe_first_val_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8;
    $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_8  = $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 - 1;
}
// foreach
for ( $fe_i_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_first_val_cc844afe914ef85caffe58770d2dfdbb_8; $fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_8 < $fe_max_cc844afe914ef85caffe58770d2dfdbb_8 && ( $fe_reverse_cc844afe914ef85caffe58770d2dfdbb_8 ? $fe_i_cc844afe914ef85caffe58770d2dfdbb_8 >= $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_8 : $fe_i_cc844afe914ef85caffe58770d2dfdbb_8 <= $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_8 ); $fe_reverse_cc844afe914ef85caffe58770d2dfdbb_8 ? $fe_i_cc844afe914ef85caffe58770d2dfdbb_8-- : $fe_i_cc844afe914ef85caffe58770d2dfdbb_8++ )
{
$fe_key_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_8[$fe_i_cc844afe914ef85caffe58770d2dfdbb_8];
$fe_val_cc844afe914ef85caffe58770d2dfdbb_8 = $fe_array_cc844afe914ef85caffe58770d2dfdbb_8[$fe_key_cc844afe914ef85caffe58770d2dfdbb_8];
$vars[$rootNamespace]['allowed_assign_state_info'] = $fe_val_cc844afe914ef85caffe58770d2dfdbb_8;
$text .= '        <label for="SelectedStateIDList">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'group' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'current_translation' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</label>
        <select class="form-control input-sm" id="SelectedStateIDList" name="SelectedStateIDList[]"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'states' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_is_draft', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_is_draft'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= '>
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'states' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'enable_StateEditButton', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['enable_StateEditButton'] = true;
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// foreach begins
$skipDelimiter = true;
$fe_array_cc844afe914ef85caffe58770d2dfdbb_7 = [];
$fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_7 = [];
$fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_7  = 0;
$fe_i_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_key_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_val_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_max_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_reverse_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_first_val_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_last_val_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
if ( !isset( $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_7 ) ) $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_7 = [];
$fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_7[] = @compact( 'fe_array_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_i_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_key_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_val_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_offset_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_max_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_reverse_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_first_val_cc844afe914ef85caffe58770d2dfdbb_7', 'fe_last_val_cc844afe914ef85caffe58770d2dfdbb_7' );
unset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 );
unset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 );
$fe_array_cc844afe914ef85caffe58770d2dfdbb_7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$fe_array_cc844afe914ef85caffe58770d2dfdbb_71 = compiledFetchAttribute( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7, 'states' );
unset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 );
$fe_array_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_array_cc844afe914ef85caffe58770d2dfdbb_71;
if (! isset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 ) ) $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 = NULL;
while ( is_object( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 ) and method_exists( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7, 'templateValue' ) )
    $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_array_cc844afe914ef85caffe58770d2dfdbb_7->templateValue();

$fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_7 = is_array( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 ) ? array_keys( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 ) : [];
$fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 = count( $fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_7 );
$fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 = 0;
$fe_max_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 - $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7;
$fe_reverse_cc844afe914ef85caffe58770d2dfdbb_7 = false;
if ( $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 < 0 || $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 >= $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 )
{
    $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 = ( $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 < 0 ) ? 0 : $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7;
    if ( $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 || $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_cc844afe914ef85caffe58770d2dfdbb_7'. Array count: $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7");   
}
}
if ( $fe_max_cc844afe914ef85caffe58770d2dfdbb_7 < 0 || $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 + $fe_max_cc844afe914ef85caffe58770d2dfdbb_7 > $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 )
{
    if ( $fe_max_cc844afe914ef85caffe58770d2dfdbb_7 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_cc844afe914ef85caffe58770d2dfdbb_7");
    $fe_max_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 - $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7;
}
if ( $fe_reverse_cc844afe914ef85caffe58770d2dfdbb_7 )
{
    $fe_first_val_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 - 1 - $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7;
    $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_7  = 0;
}
else
{
    $fe_first_val_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7;
    $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_7  = $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 - 1;
}
// foreach
for ( $fe_i_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_first_val_cc844afe914ef85caffe58770d2dfdbb_7; $fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_7 < $fe_max_cc844afe914ef85caffe58770d2dfdbb_7 && ( $fe_reverse_cc844afe914ef85caffe58770d2dfdbb_7 ? $fe_i_cc844afe914ef85caffe58770d2dfdbb_7 >= $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_7 : $fe_i_cc844afe914ef85caffe58770d2dfdbb_7 <= $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_7 ); $fe_reverse_cc844afe914ef85caffe58770d2dfdbb_7 ? $fe_i_cc844afe914ef85caffe58770d2dfdbb_7-- : $fe_i_cc844afe914ef85caffe58770d2dfdbb_7++ )
{
$fe_key_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_7[$fe_i_cc844afe914ef85caffe58770d2dfdbb_7];
$fe_val_cc844afe914ef85caffe58770d2dfdbb_7 = $fe_array_cc844afe914ef85caffe58770d2dfdbb_7[$fe_key_cc844afe914ef85caffe58770d2dfdbb_7];
$vars[$rootNamespace]['state'] = $fe_val_cc844afe914ef85caffe58770d2dfdbb_7;
$text .= '            <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'state_id_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( mb_strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$var2 = compiledFetchAttribute( $var1, 'current_translation' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
        ';
$fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_7++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_7 ) ) extract( array_pop( $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_7 ) );

else
{

unset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_i_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_key_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_val_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_offset_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_max_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_reverse_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_first_val_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_7 );

unset( $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_7 );

}

// foreach ends
$text .= '        </select>
    ';
$fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_8++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_8 ) ) extract( array_pop( $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_8 ) );

else
{

unset( $fe_array_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_array_keys_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_n_items_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_n_items_processed_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_i_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_key_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_val_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_offset_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_max_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_reverse_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_first_val_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_last_val_cc844afe914ef85caffe58770d2dfdbb_8 );

unset( $fe_variable_stack_cc844afe914ef85caffe58770d2dfdbb_8 );

}

// foreach ends
$text .= '

    ';
unset( $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 );
unset( $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 );
$elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'enable_StateEditButton', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['enable_StateEditButton'] : null;
if (! isset( $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 ) ) $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 = NULL;
while ( is_object( $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 ) and method_exists( $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27, 'templateValue' ) )
    $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 = $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_is_draft', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_is_draft'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <input type="submit" value="Set" name="StateEditButton" class="btn btn-default btn-sm" disabled="disabled" title="This action is not available in edit view when content object is published!" />
    ';
}
elseif ( $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 )
{
$text .= '        <input type="submit" value="Set" name="StateEditButton" class="btn btn-default btn-sm" />
    ';
}
else
{
$text .= '        <input type="submit" value="Set" name="StateEditButton" class="btn btn-default btn-sm" disabled="disabled" title="No content object state is configured." />
    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_cc844afe914ef85caffe58770d2dfdbb_27 );

$text .= '</div>

';

$setArray = $oldSetArray_1b069822cee0dcc43f47478d56be714c;
$tpl->Level--;
?>
