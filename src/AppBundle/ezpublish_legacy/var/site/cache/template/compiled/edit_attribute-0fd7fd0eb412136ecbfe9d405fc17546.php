<?php
// URI:       extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl
// Timestamp: 1782241051 (Tue Jun 23 18:57:31 UTC 2026)
$oldSetArray_01400130f3b95fc66eda413d44e679b0 = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $vars[$currentNamespace]['view_parameters'] ) )
{
    $vars[$currentNamespace]['view_parameters'] = array (
);
    $setArray[$currentNamespace]['view_parameters'] = true;
}

if ( !isset( $vars[$currentNamespace]['attribute_categorys'] ) )
{
    $vars[$currentNamespace]['attribute_categorys'] = array (
  'content' => 'Content',
  'meta' => 'Meta',
  'extras' => 'Extras',
  'timing' => 'Timing',
  'event' => 'Event',
  'design' => 'Design',
  'link' => 'Links',
  'input' => 'Inputs',
);
    $setArray[$currentNamespace]['attribute_categorys'] = true;
}

if ( !isset( $vars[$currentNamespace]['attribute_default_category'] ) )
{
    $vars[$currentNamespace]['attribute_default_category'] = 'content';
    $setArray[$currentNamespace]['attribute_default_category'] = true;
}

// foreach begins
$skipDelimiter = true;
$fe_array_c78b5923f31150abbaedbb8c33189895_10 = [];
$fe_array_keys_c78b5923f31150abbaedbb8c33189895_10 = [];
$fe_n_items_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_10  = 0;
$fe_i_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_key_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_val_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_offset_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_max_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_reverse_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_first_val_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_last_val_c78b5923f31150abbaedbb8c33189895_10 = 0;
if ( !isset( $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_10 ) ) $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_10 = [];
$fe_variable_stack_c78b5923f31150abbaedbb8c33189895_10[] = @compact( 'fe_array_c78b5923f31150abbaedbb8c33189895_10', 'fe_array_keys_c78b5923f31150abbaedbb8c33189895_10', 'fe_n_items_c78b5923f31150abbaedbb8c33189895_10', 'fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_10', 'fe_i_c78b5923f31150abbaedbb8c33189895_10', 'fe_key_c78b5923f31150abbaedbb8c33189895_10', 'fe_val_c78b5923f31150abbaedbb8c33189895_10', 'fe_offset_c78b5923f31150abbaedbb8c33189895_10', 'fe_max_c78b5923f31150abbaedbb8c33189895_10', 'fe_reverse_c78b5923f31150abbaedbb8c33189895_10', 'fe_first_val_c78b5923f31150abbaedbb8c33189895_10', 'fe_last_val_c78b5923f31150abbaedbb8c33189895_10' );
unset( $fe_array_c78b5923f31150abbaedbb8c33189895_10 );
unset( $fe_array_c78b5923f31150abbaedbb8c33189895_10 );
$fe_array_c78b5923f31150abbaedbb8c33189895_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes_grouped_data_map', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes_grouped_data_map'] : null;
if (! isset( $fe_array_c78b5923f31150abbaedbb8c33189895_10 ) ) $fe_array_c78b5923f31150abbaedbb8c33189895_10 = NULL;
while ( is_object( $fe_array_c78b5923f31150abbaedbb8c33189895_10 ) and method_exists( $fe_array_c78b5923f31150abbaedbb8c33189895_10, 'templateValue' ) )
    $fe_array_c78b5923f31150abbaedbb8c33189895_10 = $fe_array_c78b5923f31150abbaedbb8c33189895_10->templateValue();

$fe_array_keys_c78b5923f31150abbaedbb8c33189895_10 = is_array( $fe_array_c78b5923f31150abbaedbb8c33189895_10 ) ? array_keys( $fe_array_c78b5923f31150abbaedbb8c33189895_10 ) : [];
$fe_n_items_c78b5923f31150abbaedbb8c33189895_10 = count( $fe_array_keys_c78b5923f31150abbaedbb8c33189895_10 );
$fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_offset_c78b5923f31150abbaedbb8c33189895_10 = 0;
$fe_max_c78b5923f31150abbaedbb8c33189895_10 = $fe_n_items_c78b5923f31150abbaedbb8c33189895_10 - $fe_offset_c78b5923f31150abbaedbb8c33189895_10;
$fe_reverse_c78b5923f31150abbaedbb8c33189895_10 = false;
if ( $fe_offset_c78b5923f31150abbaedbb8c33189895_10 < 0 || $fe_offset_c78b5923f31150abbaedbb8c33189895_10 >= $fe_n_items_c78b5923f31150abbaedbb8c33189895_10 )
{
    $fe_offset_c78b5923f31150abbaedbb8c33189895_10 = ( $fe_offset_c78b5923f31150abbaedbb8c33189895_10 < 0 ) ? 0 : $fe_n_items_c78b5923f31150abbaedbb8c33189895_10;
    if ( $fe_n_items_c78b5923f31150abbaedbb8c33189895_10 || $fe_offset_c78b5923f31150abbaedbb8c33189895_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_c78b5923f31150abbaedbb8c33189895_10'. Array count: $fe_n_items_c78b5923f31150abbaedbb8c33189895_10");   
}
}
if ( $fe_max_c78b5923f31150abbaedbb8c33189895_10 < 0 || $fe_offset_c78b5923f31150abbaedbb8c33189895_10 + $fe_max_c78b5923f31150abbaedbb8c33189895_10 > $fe_n_items_c78b5923f31150abbaedbb8c33189895_10 )
{
    if ( $fe_max_c78b5923f31150abbaedbb8c33189895_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_c78b5923f31150abbaedbb8c33189895_10");
    $fe_max_c78b5923f31150abbaedbb8c33189895_10 = $fe_n_items_c78b5923f31150abbaedbb8c33189895_10 - $fe_offset_c78b5923f31150abbaedbb8c33189895_10;
}
if ( $fe_reverse_c78b5923f31150abbaedbb8c33189895_10 )
{
    $fe_first_val_c78b5923f31150abbaedbb8c33189895_10 = $fe_n_items_c78b5923f31150abbaedbb8c33189895_10 - 1 - $fe_offset_c78b5923f31150abbaedbb8c33189895_10;
    $fe_last_val_c78b5923f31150abbaedbb8c33189895_10  = 0;
}
else
{
    $fe_first_val_c78b5923f31150abbaedbb8c33189895_10 = $fe_offset_c78b5923f31150abbaedbb8c33189895_10;
    $fe_last_val_c78b5923f31150abbaedbb8c33189895_10  = $fe_n_items_c78b5923f31150abbaedbb8c33189895_10 - 1;
}
// foreach
for ( $fe_i_c78b5923f31150abbaedbb8c33189895_10 = $fe_first_val_c78b5923f31150abbaedbb8c33189895_10; $fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_10 < $fe_max_c78b5923f31150abbaedbb8c33189895_10 && ( $fe_reverse_c78b5923f31150abbaedbb8c33189895_10 ? $fe_i_c78b5923f31150abbaedbb8c33189895_10 >= $fe_last_val_c78b5923f31150abbaedbb8c33189895_10 : $fe_i_c78b5923f31150abbaedbb8c33189895_10 <= $fe_last_val_c78b5923f31150abbaedbb8c33189895_10 ); $fe_reverse_c78b5923f31150abbaedbb8c33189895_10 ? $fe_i_c78b5923f31150abbaedbb8c33189895_10-- : $fe_i_c78b5923f31150abbaedbb8c33189895_10++ )
{
$fe_key_c78b5923f31150abbaedbb8c33189895_10 = $fe_array_keys_c78b5923f31150abbaedbb8c33189895_10[$fe_i_c78b5923f31150abbaedbb8c33189895_10];
$fe_val_c78b5923f31150abbaedbb8c33189895_10 = $fe_array_c78b5923f31150abbaedbb8c33189895_10[$fe_key_c78b5923f31150abbaedbb8c33189895_10];
$vars[$rootNamespace]['content_attributes_grouped'] = $fe_val_c78b5923f31150abbaedbb8c33189895_10;
$vars[$rootNamespace]['attribute_group'] = $fe_key_c78b5923f31150abbaedbb8c33189895_10;
$text .= '    <div class="tab">
        ';
// foreach begins
$skipDelimiter = true;
$fe_array_c78b5923f31150abbaedbb8c33189895_9 = [];
$fe_array_keys_c78b5923f31150abbaedbb8c33189895_9 = [];
$fe_n_items_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_9  = 0;
$fe_i_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_key_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_val_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_offset_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_max_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_reverse_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_first_val_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_last_val_c78b5923f31150abbaedbb8c33189895_9 = 0;
if ( !isset( $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_9 ) ) $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_9 = [];
$fe_variable_stack_c78b5923f31150abbaedbb8c33189895_9[] = @compact( 'fe_array_c78b5923f31150abbaedbb8c33189895_9', 'fe_array_keys_c78b5923f31150abbaedbb8c33189895_9', 'fe_n_items_c78b5923f31150abbaedbb8c33189895_9', 'fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_9', 'fe_i_c78b5923f31150abbaedbb8c33189895_9', 'fe_key_c78b5923f31150abbaedbb8c33189895_9', 'fe_val_c78b5923f31150abbaedbb8c33189895_9', 'fe_offset_c78b5923f31150abbaedbb8c33189895_9', 'fe_max_c78b5923f31150abbaedbb8c33189895_9', 'fe_reverse_c78b5923f31150abbaedbb8c33189895_9', 'fe_first_val_c78b5923f31150abbaedbb8c33189895_9', 'fe_last_val_c78b5923f31150abbaedbb8c33189895_9' );
unset( $fe_array_c78b5923f31150abbaedbb8c33189895_9 );
unset( $fe_array_c78b5923f31150abbaedbb8c33189895_9 );
$fe_array_c78b5923f31150abbaedbb8c33189895_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes_grouped', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes_grouped'] : null;
if (! isset( $fe_array_c78b5923f31150abbaedbb8c33189895_9 ) ) $fe_array_c78b5923f31150abbaedbb8c33189895_9 = NULL;
while ( is_object( $fe_array_c78b5923f31150abbaedbb8c33189895_9 ) and method_exists( $fe_array_c78b5923f31150abbaedbb8c33189895_9, 'templateValue' ) )
    $fe_array_c78b5923f31150abbaedbb8c33189895_9 = $fe_array_c78b5923f31150abbaedbb8c33189895_9->templateValue();

$fe_array_keys_c78b5923f31150abbaedbb8c33189895_9 = is_array( $fe_array_c78b5923f31150abbaedbb8c33189895_9 ) ? array_keys( $fe_array_c78b5923f31150abbaedbb8c33189895_9 ) : [];
$fe_n_items_c78b5923f31150abbaedbb8c33189895_9 = count( $fe_array_keys_c78b5923f31150abbaedbb8c33189895_9 );
$fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_offset_c78b5923f31150abbaedbb8c33189895_9 = 0;
$fe_max_c78b5923f31150abbaedbb8c33189895_9 = $fe_n_items_c78b5923f31150abbaedbb8c33189895_9 - $fe_offset_c78b5923f31150abbaedbb8c33189895_9;
$fe_reverse_c78b5923f31150abbaedbb8c33189895_9 = false;
if ( $fe_offset_c78b5923f31150abbaedbb8c33189895_9 < 0 || $fe_offset_c78b5923f31150abbaedbb8c33189895_9 >= $fe_n_items_c78b5923f31150abbaedbb8c33189895_9 )
{
    $fe_offset_c78b5923f31150abbaedbb8c33189895_9 = ( $fe_offset_c78b5923f31150abbaedbb8c33189895_9 < 0 ) ? 0 : $fe_n_items_c78b5923f31150abbaedbb8c33189895_9;
    if ( $fe_n_items_c78b5923f31150abbaedbb8c33189895_9 || $fe_offset_c78b5923f31150abbaedbb8c33189895_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_c78b5923f31150abbaedbb8c33189895_9'. Array count: $fe_n_items_c78b5923f31150abbaedbb8c33189895_9");   
}
}
if ( $fe_max_c78b5923f31150abbaedbb8c33189895_9 < 0 || $fe_offset_c78b5923f31150abbaedbb8c33189895_9 + $fe_max_c78b5923f31150abbaedbb8c33189895_9 > $fe_n_items_c78b5923f31150abbaedbb8c33189895_9 )
{
    if ( $fe_max_c78b5923f31150abbaedbb8c33189895_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_c78b5923f31150abbaedbb8c33189895_9");
    $fe_max_c78b5923f31150abbaedbb8c33189895_9 = $fe_n_items_c78b5923f31150abbaedbb8c33189895_9 - $fe_offset_c78b5923f31150abbaedbb8c33189895_9;
}
if ( $fe_reverse_c78b5923f31150abbaedbb8c33189895_9 )
{
    $fe_first_val_c78b5923f31150abbaedbb8c33189895_9 = $fe_n_items_c78b5923f31150abbaedbb8c33189895_9 - 1 - $fe_offset_c78b5923f31150abbaedbb8c33189895_9;
    $fe_last_val_c78b5923f31150abbaedbb8c33189895_9  = 0;
}
else
{
    $fe_first_val_c78b5923f31150abbaedbb8c33189895_9 = $fe_offset_c78b5923f31150abbaedbb8c33189895_9;
    $fe_last_val_c78b5923f31150abbaedbb8c33189895_9  = $fe_n_items_c78b5923f31150abbaedbb8c33189895_9 - 1;
}
// foreach
for ( $fe_i_c78b5923f31150abbaedbb8c33189895_9 = $fe_first_val_c78b5923f31150abbaedbb8c33189895_9; $fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_9 < $fe_max_c78b5923f31150abbaedbb8c33189895_9 && ( $fe_reverse_c78b5923f31150abbaedbb8c33189895_9 ? $fe_i_c78b5923f31150abbaedbb8c33189895_9 >= $fe_last_val_c78b5923f31150abbaedbb8c33189895_9 : $fe_i_c78b5923f31150abbaedbb8c33189895_9 <= $fe_last_val_c78b5923f31150abbaedbb8c33189895_9 ); $fe_reverse_c78b5923f31150abbaedbb8c33189895_9 ? $fe_i_c78b5923f31150abbaedbb8c33189895_9-- : $fe_i_c78b5923f31150abbaedbb8c33189895_9++ )
{
$fe_key_c78b5923f31150abbaedbb8c33189895_9 = $fe_array_keys_c78b5923f31150abbaedbb8c33189895_9[$fe_i_c78b5923f31150abbaedbb8c33189895_9];
$fe_val_c78b5923f31150abbaedbb8c33189895_9 = $fe_array_c78b5923f31150abbaedbb8c33189895_9[$fe_key_c78b5923f31150abbaedbb8c33189895_9];
$vars[$rootNamespace]['attribute'] = $fe_val_c78b5923f31150abbaedbb8c33189895_9;
$vars[$rootNamespace]['attribute_identifier'] = $fe_key_c78b5923f31150abbaedbb8c33189895_9;
$text .= '            ';
// def $contentclass_attribute
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentclass_attribute' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'contentclass_attribute', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'contentclass_attribute' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 12,
    2 => 478,
  ),
  1 => 
  array (
    0 => 8,
    1 => 75,
    2 => 541,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl',
) );
    $tpl->setVariable( 'contentclass_attribute', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'contentclass_attribute', $var, $rootNamespace );
}

$text .= '            <div class="block ezcca-edit-datatype-';
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

$text .= ' ezcca-edit-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_identifier', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_identifier'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
                <div class="edit-row">
                    
                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_translate' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'initial_language_code' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'language_code' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( $if_cond4 ) );
unset( $if_cond3, $if_cond4 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <div class="label-edit">
                            <label class="attribute-label">
                                <span class="classattribute-name">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "nameList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "name" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_translate' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= ' <span class="nontranslatable">(not translatable)</span>';
}
unset( $if_cond );
// if ends

$text .= ':
                                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="classattribute-description">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '                            </label>
                        </div>
                        <div class="attribute-edit">
                            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                <div class="attribute-block float-break">
                                    <div class="original">
                                    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
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
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 24,
    1 => 36,
    2 => 1963,
  ),
  1 => 
  array (
    0 => 24,
    1 => 139,
    2 => 2066,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                    <input type="hidden" name="ContentObjectAttribute_id[]" value="';
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

$text .= '" />
                                    </div>
                                </div>
                            ';
}
else
{
$text .= '                                ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
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
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 29,
    1 => 32,
    2 => 2337,
  ),
  1 => 
  array (
    0 => 29,
    1 => 135,
    2 => 2440,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                <input type="hidden" name="ContentObjectAttribute_id[]" value="';
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

$text .= '" />
                            ';
}
unset( $if_cond );
// if ends

$text .= '                        </div>
                    ';
}
else
{
$text .= '                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            <div class="label-edit">
                                <label class="attribute-label';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_validation_error' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' message-error';
}
unset( $if_cond );
// if ends

$text .= '">
                                    <span class="classattribute-name">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "nameList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "name" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
                                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_required' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="required">*</span>';
}
unset( $if_cond );
// if ends

$text .= '                                    ';
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

$text .= ':
                                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="classattribute-description">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '                                </label>
                            </div>
                            <div class="attribute-edit">                                
                                <div class="attribute-block float-break">
                                    <div class="original">
                                    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'from_content_attributes_grouped_data_map',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 4,
          1 => 
          array (
            0 => '',
            1 => 2,
            2 => 'attribute_group',
          ),
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 4,
          1 => 
          array (
            0 => '',
            1 => 2,
            2 => 'attribute_identifier',
          ),
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 46,
    1 => 36,
    2 => 3922,
  ),
  1 => 
  array (
    0 => 46,
    1 => 211,
    2 => 4097,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                    </div>
                                    <div class="translation">
                                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'display_info' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'edit' );
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
$text .= '                                        <fieldset class="attribute-fieldset">
                                        ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
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
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 51,
    1 => 40,
    2 => 4407,
  ),
  1 => 
  array (
    0 => 51,
    1 => 143,
    2 => 4510,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                        <input type="hidden" name="ContentObjectAttribute_id[]" value="';
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

$text .= '" />
                                        </fieldset>
                                    ';
}
else
{
$text .= '                                        ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
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
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 55,
    1 => 40,
    2 => 4771,
  ),
  1 => 
  array (
    0 => 55,
    1 => 143,
    2 => 4874,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                        <input type="hidden" name="ContentObjectAttribute_id[]" value="';
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

$text .= '" />
                                    ';
}
unset( $if_cond );
// if ends

$text .= '                                    </div>
                                </div>
                            </div>
                        ';
}
else
{
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'display_info' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'edit' );
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
$text .= '                                <div class="label-edit">
                                    <label class="attribute-label ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_validation_error' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' message-error';
}
unset( $if_cond );
// if ends

$text .= '">
                                        <span class="classattribute-name">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "nameList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "name" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
                                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_required' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="required">*</span>';
}
unset( $if_cond );
// if ends

$text .= '                                        ';
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

$text .= '                                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="classattribute-description">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '                                    </label>
                                </div>
                                <div class="attribute-edit">
                                    <div class="attribute-block float-break">
                                        ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
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
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 73,
    1 => 40,
    2 => 6438,
  ),
  1 => 
  array (
    0 => 73,
    1 => 143,
    2 => 6541,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                        <input type="hidden" name="ContentObjectAttribute_id[]" value="';
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

$text .= '" />
                                    </div>
                                </div>
                            ';
}
else
{
$text .= '                                <div class="label-edit">
                                    <label class="attribute-label';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_validation_error' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' message-error';
}
unset( $if_cond );
// if ends

$text .= '">
                                        <span class="classattribute-name">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "nameList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "name" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
                                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_required' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="required">*</span>';
}
unset( $if_cond );
// if ends

$text .= '                                        ';
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

$text .= '                                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="classattribute-description">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( (string) $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '                                    </label>
                                </div>
                                <div class="attribute-edit">
                                    <div class="attribute-block float-break">
                                        ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
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
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 88,
    1 => 40,
    2 => 7955,
  ),
  1 => 
  array (
    0 => 88,
    1 => 143,
    2 => 8058,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                        <input type="hidden" name="ContentObjectAttribute_id[]" value="';
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

$text .= '" />
                                    </div>
                                </div>
                            ';
}
unset( $if_cond );
// if ends

$text .= '                        ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
}
unset( $if_cond );
// if ends

$text .= '                </div>
            </div>
            ';
// undef $contentclass_attribute
$tpl->unsetLocalVariable( 'contentclass_attribute', $rootNamespace );

$text .= '        ';
$fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_9 ) ) extract( array_pop( $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_9 ) );

else
{

unset( $fe_array_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_array_keys_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_n_items_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_i_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_key_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_val_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_offset_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_max_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_reverse_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_first_val_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_last_val_c78b5923f31150abbaedbb8c33189895_9 );

unset( $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_9 );

}

// foreach ends
$text .= '    </div>';
$fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_10++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_10 ) ) extract( array_pop( $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_10 ) );

else
{

unset( $fe_array_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_array_keys_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_n_items_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_n_items_processed_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_i_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_key_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_val_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_offset_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_max_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_reverse_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_first_val_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_last_val_c78b5923f31150abbaedbb8c33189895_10 );

unset( $fe_variable_stack_c78b5923f31150abbaedbb8c33189895_10 );

}

// foreach ends
if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["71aa845ae55f300b48372c031b0f4be3"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["71aa845ae55f300b48372c031b0f4be3"] = array( array( 101,
              0,
              8483 ),
       array( 101,
              8,
              8491 ),
       "extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl" );
$text .= '
<script type="text/javascript">


jQuery(function( $ )
{
    $(\'fieldset.ezcca-collapsible legend a\').click( function()
    {
        var container = $( this.parentNode.parentNode ), inner = container.find(\'div.ezcca-collapsible-fieldset-content\');
        if ( container.hasClass(\'ezcca-collapsed\') )
        {
            container.removeClass(\'ezcca-collapsed\');
            inner.slideDown( 150 );
        }
        else
        {
            inner.slideUp( 150, function(){
                $( this.parentNode ).addClass(\'ezcca-collapsed\');
            });
        }
    });
    // Collapse by default, unless the group has at least one attribute with label.message-error
    $(\'fieldset.ezcca-collapsible\').each( function(){
        if ( $(this).find(\'label.message-error\').length == 0 )
        {
            $(this).addClass(\'ezcca-collapsed\').find(\'div.ezcca-collapsible-fieldset-content\').hide();
        }
    } );
});


</script>
';
}
if ( isset( $setArray[$currentNamespace]['view_parameters'] ) )
{
unset( $vars[$currentNamespace]['view_parameters'] );
}

if ( isset( $setArray[$currentNamespace]['attribute_categorys'] ) )
{
unset( $vars[$currentNamespace]['attribute_categorys'] );
}

if ( isset( $setArray[$currentNamespace]['attribute_default_category'] ) )
{
unset( $vars[$currentNamespace]['attribute_default_category'] );
}


$setArray = $oldSetArray_01400130f3b95fc66eda413d44e679b0;
$tpl->Level--;
?>
