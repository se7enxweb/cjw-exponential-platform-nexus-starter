<?php
// URI:       extension/ngadminui/design/ngadminui/templates/node/view/admin_preview.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/node/view/admin_preview.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_d732c3cc9473aeaf9d675d41d8648d4c = isset( $setArray ) ? $setArray : array();
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
if ( !isset( $vars[$currentNamespace]['attribute_categories'] ) )
{
    $vars[$currentNamespace]['attribute_categories'] = array (
  'content' => 'Content',
  'meta' => 'Meta',
  'extras' => 'Extras',
  'timing' => 'Timing',
  'event' => 'Event',
  'design' => 'Design',
  'link' => 'Links',
  'input' => 'Inputs',
);
    $setArray[$currentNamespace]['attribute_categories'] = true;
}

if ( !isset( $vars[$currentNamespace]['attribute_default_category'] ) )
{
    $vars[$currentNamespace]['attribute_default_category'] = 'content';
    $setArray[$currentNamespace]['attribute_default_category'] = true;
}

$text .= '
<div class="node-preview-content">
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_b0c155f035262f99dfc2faa939bf62e9_10 = [];
$fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_10 = [];
$fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_10  = 0;
$fe_i_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_key_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_val_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_max_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_reverse_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_first_val_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_last_val_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
if ( !isset( $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_10 ) ) $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_10 = [];
$fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_10[] = @compact( 'fe_array_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_i_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_key_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_val_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_offset_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_max_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_reverse_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_first_val_b0c155f035262f99dfc2faa939bf62e9_10', 'fe_last_val_b0c155f035262f99dfc2faa939bf62e9_10' );
unset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 );
unset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 );
$fe_array_b0c155f035262f99dfc2faa939bf62e9_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_b0c155f035262f99dfc2faa939bf62e9_101 = compiledFetchAttribute( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10, 'object' );
unset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 );
$fe_array_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_array_b0c155f035262f99dfc2faa939bf62e9_101;
$fe_array_b0c155f035262f99dfc2faa939bf62e9_101 = compiledFetchAttribute( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10, 'grouped_data_map' );
unset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 );
$fe_array_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_array_b0c155f035262f99dfc2faa939bf62e9_101;
if (! isset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 ) ) $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 = NULL;
while ( is_object( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 ) and method_exists( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10, 'templateValue' ) )
    $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_array_b0c155f035262f99dfc2faa939bf62e9_10->templateValue();

$fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_10 = is_array( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 ) ? array_keys( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 ) : [];
$fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 = count( $fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_10 );
$fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 = 0;
$fe_max_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 - $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10;
$fe_reverse_b0c155f035262f99dfc2faa939bf62e9_10 = false;
if ( $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 < 0 || $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 >= $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 )
{
    $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 = ( $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 < 0 ) ? 0 : $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10;
    if ( $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 || $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b0c155f035262f99dfc2faa939bf62e9_10'. Array count: $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10");   
}
}
if ( $fe_max_b0c155f035262f99dfc2faa939bf62e9_10 < 0 || $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 + $fe_max_b0c155f035262f99dfc2faa939bf62e9_10 > $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 )
{
    if ( $fe_max_b0c155f035262f99dfc2faa939bf62e9_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b0c155f035262f99dfc2faa939bf62e9_10");
    $fe_max_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 - $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10;
}
if ( $fe_reverse_b0c155f035262f99dfc2faa939bf62e9_10 )
{
    $fe_first_val_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 - 1 - $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10;
    $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_10  = 0;
}
else
{
    $fe_first_val_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10;
    $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_10  = $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 - 1;
}
// foreach
for ( $fe_i_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_first_val_b0c155f035262f99dfc2faa939bf62e9_10; $fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_10 < $fe_max_b0c155f035262f99dfc2faa939bf62e9_10 && ( $fe_reverse_b0c155f035262f99dfc2faa939bf62e9_10 ? $fe_i_b0c155f035262f99dfc2faa939bf62e9_10 >= $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_10 : $fe_i_b0c155f035262f99dfc2faa939bf62e9_10 <= $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_10 ); $fe_reverse_b0c155f035262f99dfc2faa939bf62e9_10 ? $fe_i_b0c155f035262f99dfc2faa939bf62e9_10-- : $fe_i_b0c155f035262f99dfc2faa939bf62e9_10++ )
{
$fe_key_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_10[$fe_i_b0c155f035262f99dfc2faa939bf62e9_10];
$fe_val_b0c155f035262f99dfc2faa939bf62e9_10 = $fe_array_b0c155f035262f99dfc2faa939bf62e9_10[$fe_key_b0c155f035262f99dfc2faa939bf62e9_10];
$vars[$rootNamespace]['content_attributes_grouped'] = $fe_val_b0c155f035262f99dfc2faa939bf62e9_10;
$vars[$rootNamespace]['attribute_group'] = $fe_key_b0c155f035262f99dfc2faa939bf62e9_10;
$text .= '        ';
// foreach begins
$skipDelimiter = true;
$fe_array_b0c155f035262f99dfc2faa939bf62e9_9 = [];
$fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_9 = [];
$fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_9  = 0;
$fe_i_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_key_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_val_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_max_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_reverse_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_first_val_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_last_val_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
if ( !isset( $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_9 ) ) $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_9 = [];
$fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_9[] = @compact( 'fe_array_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_i_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_key_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_val_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_offset_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_max_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_reverse_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_first_val_b0c155f035262f99dfc2faa939bf62e9_9', 'fe_last_val_b0c155f035262f99dfc2faa939bf62e9_9' );
unset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 );
unset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 );
$fe_array_b0c155f035262f99dfc2faa939bf62e9_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes_grouped', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes_grouped'] : null;
if (! isset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 ) ) $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 = NULL;
while ( is_object( $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 ) and method_exists( $fe_array_b0c155f035262f99dfc2faa939bf62e9_9, 'templateValue' ) )
    $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 = $fe_array_b0c155f035262f99dfc2faa939bf62e9_9->templateValue();

$fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_9 = is_array( $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 ) ? array_keys( $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 ) : [];
$fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 = count( $fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_9 );
$fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 = 0;
$fe_max_b0c155f035262f99dfc2faa939bf62e9_9 = $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 - $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9;
$fe_reverse_b0c155f035262f99dfc2faa939bf62e9_9 = false;
if ( $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 < 0 || $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 >= $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 )
{
    $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 = ( $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 < 0 ) ? 0 : $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9;
    if ( $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 || $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b0c155f035262f99dfc2faa939bf62e9_9'. Array count: $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9");   
}
}
if ( $fe_max_b0c155f035262f99dfc2faa939bf62e9_9 < 0 || $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 + $fe_max_b0c155f035262f99dfc2faa939bf62e9_9 > $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 )
{
    if ( $fe_max_b0c155f035262f99dfc2faa939bf62e9_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b0c155f035262f99dfc2faa939bf62e9_9");
    $fe_max_b0c155f035262f99dfc2faa939bf62e9_9 = $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 - $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9;
}
if ( $fe_reverse_b0c155f035262f99dfc2faa939bf62e9_9 )
{
    $fe_first_val_b0c155f035262f99dfc2faa939bf62e9_9 = $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 - 1 - $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9;
    $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_9  = 0;
}
else
{
    $fe_first_val_b0c155f035262f99dfc2faa939bf62e9_9 = $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9;
    $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_9  = $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 - 1;
}
// foreach
for ( $fe_i_b0c155f035262f99dfc2faa939bf62e9_9 = $fe_first_val_b0c155f035262f99dfc2faa939bf62e9_9; $fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_9 < $fe_max_b0c155f035262f99dfc2faa939bf62e9_9 && ( $fe_reverse_b0c155f035262f99dfc2faa939bf62e9_9 ? $fe_i_b0c155f035262f99dfc2faa939bf62e9_9 >= $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_9 : $fe_i_b0c155f035262f99dfc2faa939bf62e9_9 <= $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_9 ); $fe_reverse_b0c155f035262f99dfc2faa939bf62e9_9 ? $fe_i_b0c155f035262f99dfc2faa939bf62e9_9-- : $fe_i_b0c155f035262f99dfc2faa939bf62e9_9++ )
{
$fe_key_b0c155f035262f99dfc2faa939bf62e9_9 = $fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_9[$fe_i_b0c155f035262f99dfc2faa939bf62e9_9];
$fe_val_b0c155f035262f99dfc2faa939bf62e9_9 = $fe_array_b0c155f035262f99dfc2faa939bf62e9_9[$fe_key_b0c155f035262f99dfc2faa939bf62e9_9];
$vars[$rootNamespace]['attribute'] = $fe_val_b0c155f035262f99dfc2faa939bf62e9_9;
$vars[$rootNamespace]['attribute_identifier'] = $fe_key_b0c155f035262f99dfc2faa939bf62e9_9;
$text .= '            <div class="preview-row">
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'display_info' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'view' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'grouped_input' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <fieldset>
                    <div class="label-preview">
                        <legend title="identifier: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentclass_attribute_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', attribute ID: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', type: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_type_string' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', class attribute ID: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentclassattribute_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentclass_attribute' );
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

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="collector">(information collector)</span>';
}
unset( $if_cond );
// if ends

$text .= '</legend>
                    </div>
                    <div class="attribute-preview">
                        ';
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
),
                       array (
  0 => 
  array (
    0 => 20,
    1 => 24,
    2 => 1334,
  ),
  1 => 
  array (
    0 => 20,
    1 => 63,
    2 => 1373,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/admin_preview.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                    </div>
                </fieldset>
                ';
}
else
{
$text .= '                    <div class="label-preview">
                        <label title="identifier: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentclass_attribute_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', attribute ID: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', type: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_type_string' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', class attribute ID: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentclassattribute_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentclass_attribute' );
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

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="collector">(information collector)</span>';
}
unset( $if_cond );
// if ends

$text .= ':</label>
                    </div>
                    <div class="attribute-preview">
                        ';
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
),
                       array (
  0 => 
  array (
    0 => 28,
    1 => 24,
    2 => 2035,
  ),
  1 => 
  array (
    0 => 28,
    1 => 63,
    2 => 2074,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/admin_preview.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                    </div>
                ';
}
unset( $if_cond );
// if ends

$text .= '            </div>
        ';
$fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_9 ) ) extract( array_pop( $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_9 ) );

else
{

unset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_i_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_key_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_val_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_offset_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_max_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_reverse_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_first_val_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_9 );

unset( $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_9 );

}

// foreach ends
$text .= '    ';
$fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_10++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_10 ) ) extract( array_pop( $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_10 ) );

else
{

unset( $fe_array_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_array_keys_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_n_items_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_n_items_processed_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_i_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_key_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_val_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_offset_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_max_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_reverse_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_first_val_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_last_val_b0c155f035262f99dfc2faa939bf62e9_10 );

unset( $fe_variable_stack_b0c155f035262f99dfc2faa939bf62e9_10 );

}

// foreach ends
$text .= '</div>
';
if ( isset( $setArray[$currentNamespace]['attribute_categories'] ) )
{
unset( $vars[$currentNamespace]['attribute_categories'] );
}

if ( isset( $setArray[$currentNamespace]['attribute_default_category'] ) )
{
unset( $vars[$currentNamespace]['attribute_default_category'] );
}


$setArray = $oldSetArray_d732c3cc9473aeaf9d675d41d8648d4c;
$tpl->Level--;
?>
