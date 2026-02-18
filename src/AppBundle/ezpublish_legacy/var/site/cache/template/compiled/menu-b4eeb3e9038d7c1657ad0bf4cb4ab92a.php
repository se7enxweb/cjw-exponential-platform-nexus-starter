<?php
// URI:       design:parts/my/menu.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/parts/my/menu.tpl
// Timestamp: 1771144664 (Sun Feb 15 8:37:44 UTC 2026)
$oldSetArray_bd812de1195a943ab67a8eb2f630f321 = isset( $setArray ) ? $setArray : array();
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

$oldRestoreIncludeArray_20524bdeb939f6662a546bfef1a557b6 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_my';
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['i18n_hash'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'i18n_hash', $vars[$currentNamespace]['i18n_hash'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['i18n_hash'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'i18n_hash', 'unset' );

$vars[$currentNamespace]['i18n_hash'] = array (
  'my_account' => 'Mein Konto',
  'my_drafts' => 'Meine Entwürfe',
  'my_pending' => 'Meine Warteliste',
  'my_notifications' => 'Meine Benachrichtigungs- Einstellungen',
  'my_bookmarks' => 'Meine Lesezeichen',
  'collaboration' => 'Zusammenarbeit',
  'change_password' => 'Passwort ändern',
  'my_shopping_basket' => 'Mein Warenkorb',
  'my_wish_list' => 'Mein Wunschzettel',
  'edit_profile' => 'Profil bearbeiten',
  'dashboard' => 'Dashboard',
);
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/ini_menu-81c1a7f7ba5d9b0db99dec96ceabb05d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/parts/ini_menu.tpl' );
include( '' . 'var/site/cache/template/compiled/ini_menu-81c1a7f7ba5d9b0db99dec96ceabb05d.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/parts/ini_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_20524bdeb939f6662a546bfef1a557b6;

$text .= '
';
// def $custom_root_node
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array_values( array(     'node_id' => 1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'custom_root_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_root_node' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 0,
    2 => 1074,
  ),
  1 => 
  array (
    0 => 17,
    1 => 72,
    2 => 1146,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/parts/my/menu.tpl',
) );
    $tpl->setVariable( 'custom_root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_root_node', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_read' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="content-tree">
    
    <h4 class="leftmenu-hl">Struktur der Site</h4>
    

    
    
    <div id="contentstructure">
        ';
$oldRestoreIncludeArray_bf04e4345bc571201838f25eaa9c70b7 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['custom_root_node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'custom_root_node', $vars[$currentNamespace]['custom_root_node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['custom_root_node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'custom_root_node', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['custom_root_node'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['menu_persistence'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'menu_persistence', $vars[$currentNamespace]['menu_persistence'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['menu_persistence'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'menu_persistence', 'unset' );

$vars[$currentNamespace]['menu_persistence'] = false;
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['hide_node_list'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'hide_node_list', $vars[$currentNamespace]['hide_node_list'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['hide_node_list'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'hide_node_list', 'unset' );

$vars[$currentNamespace]['hide_node_list'] = array (
  0 => '58',
  1 => '48',
);
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/content_structure_menu_dynamic-d881a85efdc0e03f124e980a3b9c2fa1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/contentstructuremenu/content_structure_menu_dynamic.tpl' );
include( '' . 'var/site/cache/template/compiled/content_structure_menu_dynamic-d881a85efdc0e03f124e980a3b9c2fa1.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/contentstructuremenu/content_structure_menu_dynamic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_bf04e4345bc571201838f25eaa9c70b7;

$text .= '    </div>

    
</div>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_bd812de1195a943ab67a8eb2f630f321;
$tpl->Level--;
?>
