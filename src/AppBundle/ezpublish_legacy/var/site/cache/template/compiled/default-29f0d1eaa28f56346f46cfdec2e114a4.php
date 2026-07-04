<?php
// URI:       design:content/datatype/edit/view/default.tpl
// Filename:  extension/eztags/design/standard/templates/content/datatype/edit/view/default.tpl
// Timestamp: 1776845755 (Wed Apr 22 8:15:55 UTC 2026)
$oldSetArray_c6797655efcb3ed61f434aa4b67cc8b8 = isset( $setArray ) ? $setArray : array();
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
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'permission_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['permission_array'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_add' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_f494881cc2f024a62a23b94c49aa5d27 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['attribute_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'attribute_id', $vars[$currentNamespace]['attribute_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['attribute_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'attribute_id', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'permission_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['permission_array'] : null;
$var1 = compiledFetchAttribute( $var, 'allowed_locations_tags' );
unset( $var );
$var = $var1;
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
if ( file_exists( 'var/site/cache/template/compiled/modal_dialog-8ac112f3dc7a48dbe12ff78f7a0e766a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/eztags/design/standard/templates/ezjsctemplate/modal_dialog.tpl' );
include( '' . 'var/site/cache/template/compiled/modal_dialog-8ac112f3dc7a48dbe12ff78f7a0e766a.php' );
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
$tpl->processURI( 'extension/eztags/design/standard/templates/ezjsctemplate/modal_dialog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_f494881cc2f024a62a23b94c49aa5d27;

}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_c6797655efcb3ed61f434aa4b67cc8b8;
$tpl->Level--;
?>
