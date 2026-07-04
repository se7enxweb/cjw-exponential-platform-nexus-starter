<?php
// URI:       design:parts/setup/menu.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/parts/setup/menu.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_d82eb77808b1fd1deb06003b5b57aff6 = isset( $setArray ) ? $setArray : array();
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
$oldRestoreIncludeArray_dca13704b21d01d320e44750f5a19dcd = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_setup';
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['i18n_hash'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'i18n_hash', $vars[$currentNamespace]['i18n_hash'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['i18n_hash'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'i18n_hash', 'unset' );

$vars[$currentNamespace]['i18n_hash'] = array (
  'setup' => 'Setup',
  'cache' => 'Cache management',
  'classes' => 'Classes',
  'collected' => 'Collected information',
  'extensions' => 'Extensions',
  'global_setting' => 'Global settings',
  'ini' => 'Ini settings',
  'languages' => 'Languages',
  'notification' => 'Notification',
  'pdf_export' => 'PDF export',
  'packages' => 'Packages',
  'rad' => 'RAD',
  'roles_and_policies' => 'Roles and policies',
  'rss' => 'RSS',
  'search_statistics' => 'Search statistics',
  'sections' => 'Sections',
  'states' => 'States',
  'sessions' => 'Sessions',
  'system_information' => 'System information',
  'upgrade_check' => 'Upgrade check',
  'triggers' => 'Triggers',
  'url_management' => 'Link management',
  'url_translator' => 'URL translator',
  'url_wildcards' => 'URL wildcards',
  'workflows' => 'Workflows',
  'workflow_processes' => 'Workflow processes',
  'look_and_feel' => 'Look and feel',
  'menu_management' => 'Menu management',
  'toolbar_management' => 'Toolbar management',
  'templates' => 'Templates',
);
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/ini_menu-7e5fbd38c317c5ad9d91337a01c33d2c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/parts/ini_menu.tpl' );
include( '' . 'var/site/cache/template/compiled/ini_menu-7e5fbd38c317c5ad9d91337a01c33d2c.php' );
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
$restoreIncludeArray = $oldRestoreIncludeArray_dca13704b21d01d320e44750f5a19dcd;


$setArray = $oldSetArray_d82eb77808b1fd1deb06003b5b57aff6;
$tpl->Level--;
?>
