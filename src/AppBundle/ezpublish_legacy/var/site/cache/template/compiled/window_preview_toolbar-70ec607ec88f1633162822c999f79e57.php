<?php
// URI:       extension/ngadminui/design/ngadminui/templates/window_preview_toolbar.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/window_preview_toolbar.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_6a80611699884d85d633a0cab43e0aeb = isset( $setArray ) ? $setArray : array();
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

// def $assigned_nodes_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'assigned_nodes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'assigned_nodes_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'assigned_nodes_count' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 61,
    2 => 62,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_preview_toolbar.tpl',
) );
    $tpl->setVariable( 'assigned_nodes_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'assigned_nodes_count', $var, $rootNamespace );
}

$text .= '
<div class="node-control-toolbar">

    <form method="post" action="/ngadminui/content/action" class="btn-toolbar">
        <input type="hidden" name="TopLevelNode" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'main_node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        <input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        <input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        <div class="form-inline">
            ';
// def $languages
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchPrioritizedLanguages' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'languages' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 12,
    2 => 509,
  ),
  1 => 
  array (
    0 => 10,
    1 => 72,
    2 => 569,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_preview_toolbar.tpl',
) );
    $tpl->setVariable( 'languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'languages', $var, $rootNamespace );
}

$text .= '
            

            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
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
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 0 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = isset( $if_cond3 );unset( $if_cond3 );
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
$text .= '                <input name="ContentObjectLanguageCode" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'locale' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" type="hidden" />
            ';
}
else
{
$text .= '                ';
// foreach begins
$skipDelimiter = true;
$fe_array_9fa55aa89a55059e8f97be869718afd8_2 = [];
$fe_array_keys_9fa55aa89a55059e8f97be869718afd8_2 = [];
$fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_n_items_processed_9fa55aa89a55059e8f97be869718afd8_2  = 0;
$fe_i_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_key_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_val_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_offset_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_max_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_reverse_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_first_val_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_last_val_9fa55aa89a55059e8f97be869718afd8_2 = 0;
if ( !isset( $fe_variable_stack_9fa55aa89a55059e8f97be869718afd8_2 ) ) $fe_variable_stack_9fa55aa89a55059e8f97be869718afd8_2 = [];
$fe_variable_stack_9fa55aa89a55059e8f97be869718afd8_2[] = @compact( 'fe_array_9fa55aa89a55059e8f97be869718afd8_2', 'fe_array_keys_9fa55aa89a55059e8f97be869718afd8_2', 'fe_n_items_9fa55aa89a55059e8f97be869718afd8_2', 'fe_n_items_processed_9fa55aa89a55059e8f97be869718afd8_2', 'fe_i_9fa55aa89a55059e8f97be869718afd8_2', 'fe_key_9fa55aa89a55059e8f97be869718afd8_2', 'fe_val_9fa55aa89a55059e8f97be869718afd8_2', 'fe_offset_9fa55aa89a55059e8f97be869718afd8_2', 'fe_max_9fa55aa89a55059e8f97be869718afd8_2', 'fe_reverse_9fa55aa89a55059e8f97be869718afd8_2', 'fe_first_val_9fa55aa89a55059e8f97be869718afd8_2', 'fe_last_val_9fa55aa89a55059e8f97be869718afd8_2' );
unset( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 );
unset( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 );
$fe_array_9fa55aa89a55059e8f97be869718afd8_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_9fa55aa89a55059e8f97be869718afd8_21 = compiledFetchAttribute( $fe_array_9fa55aa89a55059e8f97be869718afd8_2, 'object' );
unset( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 );
$fe_array_9fa55aa89a55059e8f97be869718afd8_2 = $fe_array_9fa55aa89a55059e8f97be869718afd8_21;
$fe_array_9fa55aa89a55059e8f97be869718afd8_21 = compiledFetchAttribute( $fe_array_9fa55aa89a55059e8f97be869718afd8_2, 'can_edit_languages' );
unset( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 );
$fe_array_9fa55aa89a55059e8f97be869718afd8_2 = $fe_array_9fa55aa89a55059e8f97be869718afd8_21;
if (! isset( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 ) ) $fe_array_9fa55aa89a55059e8f97be869718afd8_2 = NULL;
while ( is_object( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 ) and method_exists( $fe_array_9fa55aa89a55059e8f97be869718afd8_2, 'templateValue' ) )
    $fe_array_9fa55aa89a55059e8f97be869718afd8_2 = $fe_array_9fa55aa89a55059e8f97be869718afd8_2->templateValue();

$fe_array_keys_9fa55aa89a55059e8f97be869718afd8_2 = is_array( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 ) ? array_keys( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 ) : [];
$fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 = count( $fe_array_keys_9fa55aa89a55059e8f97be869718afd8_2 );
$fe_n_items_processed_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_offset_9fa55aa89a55059e8f97be869718afd8_2 = 0;
$fe_max_9fa55aa89a55059e8f97be869718afd8_2 = $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 - $fe_offset_9fa55aa89a55059e8f97be869718afd8_2;
$fe_reverse_9fa55aa89a55059e8f97be869718afd8_2 = false;
if ( $fe_offset_9fa55aa89a55059e8f97be869718afd8_2 < 0 || $fe_offset_9fa55aa89a55059e8f97be869718afd8_2 >= $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 )
{
    $fe_offset_9fa55aa89a55059e8f97be869718afd8_2 = ( $fe_offset_9fa55aa89a55059e8f97be869718afd8_2 < 0 ) ? 0 : $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2;
    if ( $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 || $fe_offset_9fa55aa89a55059e8f97be869718afd8_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_9fa55aa89a55059e8f97be869718afd8_2'. Array count: $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2");   
}
}
if ( $fe_max_9fa55aa89a55059e8f97be869718afd8_2 < 0 || $fe_offset_9fa55aa89a55059e8f97be869718afd8_2 + $fe_max_9fa55aa89a55059e8f97be869718afd8_2 > $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 )
{
    if ( $fe_max_9fa55aa89a55059e8f97be869718afd8_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_9fa55aa89a55059e8f97be869718afd8_2");
    $fe_max_9fa55aa89a55059e8f97be869718afd8_2 = $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 - $fe_offset_9fa55aa89a55059e8f97be869718afd8_2;
}
if ( $fe_reverse_9fa55aa89a55059e8f97be869718afd8_2 )
{
    $fe_first_val_9fa55aa89a55059e8f97be869718afd8_2 = $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 - 1 - $fe_offset_9fa55aa89a55059e8f97be869718afd8_2;
    $fe_last_val_9fa55aa89a55059e8f97be869718afd8_2  = 0;
}
else
{
    $fe_first_val_9fa55aa89a55059e8f97be869718afd8_2 = $fe_offset_9fa55aa89a55059e8f97be869718afd8_2;
    $fe_last_val_9fa55aa89a55059e8f97be869718afd8_2  = $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 - 1;
}
// foreach
for ( $fe_i_9fa55aa89a55059e8f97be869718afd8_2 = $fe_first_val_9fa55aa89a55059e8f97be869718afd8_2; $fe_n_items_processed_9fa55aa89a55059e8f97be869718afd8_2 < $fe_max_9fa55aa89a55059e8f97be869718afd8_2 && ( $fe_reverse_9fa55aa89a55059e8f97be869718afd8_2 ? $fe_i_9fa55aa89a55059e8f97be869718afd8_2 >= $fe_last_val_9fa55aa89a55059e8f97be869718afd8_2 : $fe_i_9fa55aa89a55059e8f97be869718afd8_2 <= $fe_last_val_9fa55aa89a55059e8f97be869718afd8_2 ); $fe_reverse_9fa55aa89a55059e8f97be869718afd8_2 ? $fe_i_9fa55aa89a55059e8f97be869718afd8_2-- : $fe_i_9fa55aa89a55059e8f97be869718afd8_2++ )
{
$fe_key_9fa55aa89a55059e8f97be869718afd8_2 = $fe_array_keys_9fa55aa89a55059e8f97be869718afd8_2[$fe_i_9fa55aa89a55059e8f97be869718afd8_2];
$fe_val_9fa55aa89a55059e8f97be869718afd8_2 = $fe_array_9fa55aa89a55059e8f97be869718afd8_2[$fe_key_9fa55aa89a55059e8f97be869718afd8_2];
$vars[$rootNamespace]['language'] = $fe_val_9fa55aa89a55059e8f97be869718afd8_2;
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'locale' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'object' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'current_language' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <input name="ContentObjectLanguageCode" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'locale' );
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

$text .= '" type="hidden">
                    ';
}
unset( $if_cond );
// if ends

$text .= '                ';
$fe_n_items_processed_9fa55aa89a55059e8f97be869718afd8_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_9fa55aa89a55059e8f97be869718afd8_2 ) ) extract( array_pop( $fe_variable_stack_9fa55aa89a55059e8f97be869718afd8_2 ) );

else
{

unset( $fe_array_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_array_keys_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_n_items_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_n_items_processed_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_i_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_key_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_val_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_offset_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_max_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_reverse_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_first_val_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_last_val_9fa55aa89a55059e8f97be869718afd8_2 );

unset( $fe_variable_stack_9fa55aa89a55059e8f97be869718afd8_2 );

}

// foreach ends
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '
            <div class="btn-group">
                <button class="btn btn-primary" type="submit" name="EditButton" ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'title="Edit the contents of this item."';
}
else
{
$text .= 'title="You do not have permission to edit this item." disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= '><i class="fa fa-pencil-square-o"></i>&nbsp; Edit</button>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>...</strong></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        
                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_move' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            <li><input type="submit" name="MoveNodeButton" value="Move" title="Move this item to another location." /></li>
                        ';
}
else
{
$text .= '                            <li><input class="disabled" type="submit" name="MoveNodeButton" value="Move" title="You do not have permission to move this item to another location." disabled="disabled" /></li>
                        ';
}
unset( $if_cond );
// if ends

$text .= '                        
                        
                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_create' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            <li><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'contentobject_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/copy/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>Copy</a></li>
                        ';
}
else
{
$text .= '                            <li><a class="disabled" disabled="disabled" href="#">Copy</a></li>
                        ';
}
unset( $if_cond );
// if ends

$text .= '
                        
                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_remove' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_nodes_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_nodes_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                <li><button type="button" class="removeNodeConfirm">Remove</button></li>
                            ';
}
else
{
$text .= '                                <li><input type="submit" name="ActionRemove" value="Remove" title="Remove this item." /></li>
                            ';
}
unset( $if_cond );
// if ends

$text .= '                        ';
}
else
{
$text .= '                            <li><input class="disabled" type="submit" name="ActionRemove" value="Remove" title="You do not have permission to remove this item." disabled="disabled" /></li>
                        ';
}
unset( $if_cond );
// if ends

$text .= '                        <li role="separator" class="divider"></li>
                        
                        <li><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'contentobject_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/history/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' title="View and manage (copy, delete, etc.) the versions of this object.">Manage versions</a></li>
                    </ul>
                </div>
            </div>
        </div>

        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_nodes_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_nodes_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="modal fade" id="removePrompt" tabindex="-1" role="dialog" aria-labelledby="removePromptLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="removePromptLabel">Confirm location removal</h4>
                        </div>
                        <div class="modal-body">
                            <p>The object you want to remove exists on one or more locations and will be removed only from this location.</p>
                            <p>Are you sure you want to remove object from this location?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" name="ActionRemove" value="Remove" title="Remove this item." />
                        </div>
                    </div>
                </div>
            </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </form>
</div>

';

$setArray = $oldSetArray_6a80611699884d85d633a0cab43e0aeb;
$tpl->Level--;
?>
