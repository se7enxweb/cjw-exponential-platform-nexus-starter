<?php
// URI:       extension/eztags/design/standard/templates/ezjsctemplate/modal_dialog.tpl
// Filename:  extension/eztags/design/standard/templates/ezjsctemplate/modal_dialog.tpl
// Timestamp: 1776845755 (Wed Apr 22 8:15:55 UTC 2026)
$oldSetArray_6d589e5b9abf1c83bc8c28f9e07f5625 = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// def $attribute_id
if ( $tpl->hasVariable( 'attribute_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attribute_id' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 28,
    2 => 31,
  ),
  1 => 
  array (
    0 => 1,
    1 => 51,
    2 => 54,
  ),
  2 => 'extension/eztags/design/standard/templates/ezjsctemplate/modal_dialog.tpl',
) );
    $tpl->setVariable( 'attribute_id', '0', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attribute_id', '0', $rootNamespace );
}

}
unset( $if_cond );
// if ends

$oldRestoreIncludeArray_68d4ab1a3b2af1640356ccb93d852815 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['menu_persistence'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'menu_persistence', $vars[$currentNamespace]['menu_persistence'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['menu_persistence'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'menu_persistence', 'unset' );

$vars[$currentNamespace]['menu_persistence'] = false;
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/tree_menu_script-b2b35b69c62baf50781f66ff98d38ab8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/eztags/design/standard/templates/ezjsctemplate/tree_menu_script.tpl' );
include( '' . 'var/site/cache/template/compiled/tree_menu_script-b2b35b69c62baf50781f66ff98d38ab8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/eztags/design/standard/templates/ezjsctemplate/tree_menu_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_68d4ab1a3b2af1640356ccb93d852815;

$text .= '
<div class="jqmDialog parent-selector-tree" id="parent-selector-tree-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    <div class="jqmdIn">
        <div class="jqmdTC"><span class="jqmdTCLeft"></span><span class="jqDrag">Select tag</span><span class="jqmdTCRight"></span></div>
        <div class="jqmdBL"><div class="jqmdBR"><div class="jqmdBC"><div class="jqmdBCIn">
            <div id="content-tree-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
                <div class="contentstructure">
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_tag'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_tag'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = is_array( $if_cond3 );unset( $if_cond3 );
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
$text .= '                    ';
// foreach begins
$skipDelimiter = true;
$fe_array_d89101bb78099cf0d6f14b18e5873953_13 = [];
$fe_array_keys_d89101bb78099cf0d6f14b18e5873953_13 = [];
$fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_n_items_processed_d89101bb78099cf0d6f14b18e5873953_13  = 0;
$fe_i_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_key_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_val_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_offset_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_max_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_reverse_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_first_val_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_last_val_d89101bb78099cf0d6f14b18e5873953_13 = 0;
if ( !isset( $fe_variable_stack_d89101bb78099cf0d6f14b18e5873953_13 ) ) $fe_variable_stack_d89101bb78099cf0d6f14b18e5873953_13 = [];
$fe_variable_stack_d89101bb78099cf0d6f14b18e5873953_13[] = @compact( 'fe_array_d89101bb78099cf0d6f14b18e5873953_13', 'fe_array_keys_d89101bb78099cf0d6f14b18e5873953_13', 'fe_n_items_d89101bb78099cf0d6f14b18e5873953_13', 'fe_n_items_processed_d89101bb78099cf0d6f14b18e5873953_13', 'fe_i_d89101bb78099cf0d6f14b18e5873953_13', 'fe_key_d89101bb78099cf0d6f14b18e5873953_13', 'fe_val_d89101bb78099cf0d6f14b18e5873953_13', 'fe_offset_d89101bb78099cf0d6f14b18e5873953_13', 'fe_max_d89101bb78099cf0d6f14b18e5873953_13', 'fe_reverse_d89101bb78099cf0d6f14b18e5873953_13', 'fe_first_val_d89101bb78099cf0d6f14b18e5873953_13', 'fe_last_val_d89101bb78099cf0d6f14b18e5873953_13' );
unset( $fe_array_d89101bb78099cf0d6f14b18e5873953_13 );
unset( $fe_array_d89101bb78099cf0d6f14b18e5873953_13 );
$fe_array_d89101bb78099cf0d6f14b18e5873953_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_tag'] : null;
if (! isset( $fe_array_d89101bb78099cf0d6f14b18e5873953_13 ) ) $fe_array_d89101bb78099cf0d6f14b18e5873953_13 = NULL;
while ( is_object( $fe_array_d89101bb78099cf0d6f14b18e5873953_13 ) and method_exists( $fe_array_d89101bb78099cf0d6f14b18e5873953_13, 'templateValue' ) )
    $fe_array_d89101bb78099cf0d6f14b18e5873953_13 = $fe_array_d89101bb78099cf0d6f14b18e5873953_13->templateValue();

$fe_array_keys_d89101bb78099cf0d6f14b18e5873953_13 = is_array( $fe_array_d89101bb78099cf0d6f14b18e5873953_13 ) ? array_keys( $fe_array_d89101bb78099cf0d6f14b18e5873953_13 ) : [];
$fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 = count( $fe_array_keys_d89101bb78099cf0d6f14b18e5873953_13 );
$fe_n_items_processed_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_offset_d89101bb78099cf0d6f14b18e5873953_13 = 0;
$fe_max_d89101bb78099cf0d6f14b18e5873953_13 = $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 - $fe_offset_d89101bb78099cf0d6f14b18e5873953_13;
$fe_reverse_d89101bb78099cf0d6f14b18e5873953_13 = false;
if ( $fe_offset_d89101bb78099cf0d6f14b18e5873953_13 < 0 || $fe_offset_d89101bb78099cf0d6f14b18e5873953_13 >= $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 )
{
    $fe_offset_d89101bb78099cf0d6f14b18e5873953_13 = ( $fe_offset_d89101bb78099cf0d6f14b18e5873953_13 < 0 ) ? 0 : $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13;
    if ( $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 || $fe_offset_d89101bb78099cf0d6f14b18e5873953_13 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d89101bb78099cf0d6f14b18e5873953_13'. Array count: $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13");   
}
}
if ( $fe_max_d89101bb78099cf0d6f14b18e5873953_13 < 0 || $fe_offset_d89101bb78099cf0d6f14b18e5873953_13 + $fe_max_d89101bb78099cf0d6f14b18e5873953_13 > $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 )
{
    if ( $fe_max_d89101bb78099cf0d6f14b18e5873953_13 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d89101bb78099cf0d6f14b18e5873953_13");
    $fe_max_d89101bb78099cf0d6f14b18e5873953_13 = $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 - $fe_offset_d89101bb78099cf0d6f14b18e5873953_13;
}
if ( $fe_reverse_d89101bb78099cf0d6f14b18e5873953_13 )
{
    $fe_first_val_d89101bb78099cf0d6f14b18e5873953_13 = $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 - 1 - $fe_offset_d89101bb78099cf0d6f14b18e5873953_13;
    $fe_last_val_d89101bb78099cf0d6f14b18e5873953_13  = 0;
}
else
{
    $fe_first_val_d89101bb78099cf0d6f14b18e5873953_13 = $fe_offset_d89101bb78099cf0d6f14b18e5873953_13;
    $fe_last_val_d89101bb78099cf0d6f14b18e5873953_13  = $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 - 1;
}
// foreach
for ( $fe_i_d89101bb78099cf0d6f14b18e5873953_13 = $fe_first_val_d89101bb78099cf0d6f14b18e5873953_13; $fe_n_items_processed_d89101bb78099cf0d6f14b18e5873953_13 < $fe_max_d89101bb78099cf0d6f14b18e5873953_13 && ( $fe_reverse_d89101bb78099cf0d6f14b18e5873953_13 ? $fe_i_d89101bb78099cf0d6f14b18e5873953_13 >= $fe_last_val_d89101bb78099cf0d6f14b18e5873953_13 : $fe_i_d89101bb78099cf0d6f14b18e5873953_13 <= $fe_last_val_d89101bb78099cf0d6f14b18e5873953_13 ); $fe_reverse_d89101bb78099cf0d6f14b18e5873953_13 ? $fe_i_d89101bb78099cf0d6f14b18e5873953_13-- : $fe_i_d89101bb78099cf0d6f14b18e5873953_13++ )
{
$fe_key_d89101bb78099cf0d6f14b18e5873953_13 = $fe_array_keys_d89101bb78099cf0d6f14b18e5873953_13[$fe_i_d89101bb78099cf0d6f14b18e5873953_13];
$fe_val_d89101bb78099cf0d6f14b18e5873953_13 = $fe_array_d89101bb78099cf0d6f14b18e5873953_13[$fe_key_d89101bb78099cf0d6f14b18e5873953_13];
$vars[$rootNamespace]['value'] = $fe_val_d89101bb78099cf0d6f14b18e5873953_13;
$vars[$rootNamespace]['key'] = $fe_key_d89101bb78099cf0d6f14b18e5873953_13;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '<hr />';
} // delimiter ends

$text .= '                        ';
$oldRestoreIncludeArray_e7cfdc14672f3d465e14666ba21027d3 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['attribute_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'attribute_id', $vars[$currentNamespace]['attribute_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['attribute_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'attribute_id', 'unset' );

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . '_' . $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['attribute_id'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['root_tag'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'root_tag', $vars[$currentNamespace]['root_tag'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['root_tag'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'root_tag', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['value'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['root_tag'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/tree_menu-7432982c6f8ab038e3ed008278aee587.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/eztags/design/standard/templates/ezjsctemplate/tree_menu.tpl' );
include( '' . 'var/site/cache/template/compiled/tree_menu-7432982c6f8ab038e3ed008278aee587.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/eztags/design/standard/templates/ezjsctemplate/tree_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_e7cfdc14672f3d465e14666ba21027d3;

$text .= '                                            ';
$fe_n_items_processed_d89101bb78099cf0d6f14b18e5873953_13++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d89101bb78099cf0d6f14b18e5873953_13 ) ) extract( array_pop( $fe_variable_stack_d89101bb78099cf0d6f14b18e5873953_13 ) );

else
{

unset( $fe_array_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_array_keys_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_n_items_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_n_items_processed_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_i_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_key_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_val_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_offset_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_max_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_reverse_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_first_val_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_last_val_d89101bb78099cf0d6f14b18e5873953_13 );

unset( $fe_variable_stack_d89101bb78099cf0d6f14b18e5873953_13 );

}

// foreach ends
$text .= '                ';
}
else
{
$text .= '                    ';
$oldRestoreIncludeArray_d6b17a4195fed408e91fc128cd3c198b = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['attribute_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'attribute_id', $vars[$currentNamespace]['attribute_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['attribute_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'attribute_id', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['attribute_id'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['root_tag'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'root_tag', $vars[$currentNamespace]['root_tag'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['root_tag'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'root_tag', 'unset' );

unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_tag'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = isset( $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "root_tag", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["root_tag"] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = false;
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['root_tag'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/tree_menu-7432982c6f8ab038e3ed008278aee587.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/eztags/design/standard/templates/ezjsctemplate/tree_menu.tpl' );
include( '' . 'var/site/cache/template/compiled/tree_menu-7432982c6f8ab038e3ed008278aee587.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/eztags/design/standard/templates/ezjsctemplate/tree_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_d6b17a4195fed408e91fc128cd3c198b;

$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '                </div>
            </div>
        </div></div></div></div>
        <a href="#" class="jqmdX jqmClose"></a>
    </div>
</div>
';

$setArray = $oldSetArray_6d589e5b9abf1c83bc8c28f9e07f5625;
$tpl->Level--;
?>
