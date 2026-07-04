<?php
// URI:       extension/ngadminui/design/ngadminui/templates/preview.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/preview.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_f84568e27eb0c0a4466e07dfcf8c1e84 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="panel content-preview">
    
    ';
// def $custom_actions
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content_action_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'custom_actions', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_actions' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 4,
    2 => 88,
  ),
  1 => 
  array (
    0 => 3,
    1 => 58,
    2 => 142,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/preview.tpl',
) );
    $tpl->setVariable( 'custom_actions', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_actions', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_actions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_actions'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <form method="post" action="/ngadminui/content/action">
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
    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/admin_preview-6a78510ed78549c95b3f24f007891947.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/node/view/admin_preview.tpl' );
include( '' . 'var/site/cache/template/compiled/admin_preview-6a78510ed78549c95b3f24f007891947.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/node/view/admin_preview.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_actions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_actions'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="button-right">
                
                ';
// foreach begins
$skipDelimiter = true;
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = [];
$fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = [];
$fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_5  = 0;
$fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
if ( !isset( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ) ) $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = [];
$fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_5[] = @compact( 'fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5', 'fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5' );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_actions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_actions'] : null;
if (! isset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ) ) $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = NULL;
while ( is_object( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ) and method_exists( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5, 'templateValue' ) )
    $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5->templateValue();

$fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = is_array( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ) ? array_keys( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ) : [];
$fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = count( $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = 0;
$fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5;
$fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = false;
if ( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 < 0 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 >= $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 )
{
    $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = ( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 < 0 ) ? 0 : $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5;
    if ( $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5'. Array count: $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5");   
}
}
if ( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5 < 0 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 + $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5 > $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 )
{
    if ( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5");
    $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5;
}
if ( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_5 )
{
    $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 - 1 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5;
    $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5  = 0;
}
else
{
    $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5;
    $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5  = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 - 1;
}
// foreach
for ( $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5; $fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_5 < $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5 && ( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ? $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5 >= $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 : $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5 <= $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ); $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ? $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5-- : $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5++ )
{
$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_5[$fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5];
$fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5[$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_5];
$vars[$rootNamespace]['custom_action'] = $fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5;
$text .= '                    <input class="btn btn-default" type="submit" name="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_action'] : null;
$var1 = compiledFetchAttribute( $var, 'action' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_action'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                ';
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ) ) extract( array_pop( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_5 ) );

else
{

unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

unset( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_5 );

}

// foreach ends
$text .= '            </div>
            <div class="break"></div>
        </form>
    ';
}
unset( $if_cond );
// if ends

$text .= '    <ul class="node-info-list">
        <li>
            <label>Created:</label>
            <p>';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '<br />
            <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'owner' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'main_node' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'owner' );
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

$text .= '</a></p>
        </li>
        <li>
            <label>Last modified:</label>
            <p>';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'modified' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' <br /><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'current' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'creator' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'main_node' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'current' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'creator' );
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

$text .= '</a><br />Versions count: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'versions' );
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
$text .= $var;
unset( $var );

$text .= '</p>
        </li>
        <li>
            <label>Node ID:</label>
            <p>';
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

$text .= '</p>
        </li>
        <li>
            <label>Object ID:</label>
            <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
        </li>
        <li>
            <label>Section:</label>
            <form name="changesection" id="changesection" method="post" action=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/edit/' . $var3 );
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

$text .= '>
                <input type="hidden" name="RedirectRelativeURI" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
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

$text .= '" />
                <input type="hidden" name="ChangeSectionOnly" value="1" />
                <div class="input-group">
                    <select id="selected-section-id" class="form-control input-sm" name="SelectedSectionId">
                    ';
// foreach begins
$skipDelimiter = true;
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = [];
$fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = [];
$fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_6  = 0;
$fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
if ( !isset( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ) ) $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = [];
$fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_6[] = @compact( 'fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6', 'fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6' );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_61 = compiledFetchAttribute( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6, 'object' );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_61;
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_61 = compiledFetchAttribute( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6, 'allowed_assign_section_list' );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_61;
if (! isset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ) ) $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = NULL;
while ( is_object( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ) and method_exists( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6, 'templateValue' ) )
    $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6->templateValue();

$fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = is_array( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ) ? array_keys( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ) : [];
$fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = count( $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = 0;
$fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6;
$fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = false;
if ( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 < 0 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 >= $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 )
{
    $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = ( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 < 0 ) ? 0 : $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6;
    if ( $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6'. Array count: $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6");   
}
}
if ( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6 < 0 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 + $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6 > $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 )
{
    if ( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6");
    $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6;
}
if ( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_6 )
{
    $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 - 1 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6;
    $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6  = 0;
}
else
{
    $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6;
    $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6  = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 - 1;
}
// foreach
for ( $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6; $fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_6 < $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6 && ( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ? $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6 >= $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 : $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6 <= $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ); $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ? $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6-- : $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6++ )
{
$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_6[$fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6];
$fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6[$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_6];
$vars[$rootNamespace]['allowed_assign_section'] = $fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6;
$text .= '                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_section'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
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
$if_cond3 = compiledFetchAttribute( $if_cond2, 'section_id' );
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
$text .= '                        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_section'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" selected="selected">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_section'] : null;
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
}
else
{
$text .= '                        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_section'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_section'] : null;
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
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_6++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ) ) extract( array_pop( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_6 ) );

else
{

unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

unset( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_6 );

}

// foreach ends
$text .= '                    </select>
                    <span class="input-group-btn">
                        <input id="tab-details-set-section" type="submit" value="Set" name="SectionEditButton" class="btn btn-default btn-sm" />
                    </span>
                </div>
            </form>
        </li>
        <li>
            <label>Node Remote ID:</label>
            <p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'remote_id' );
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

$text .= '</p>
        </li>
        <li>
            <label>Object Remote ID:</label>
            <p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'remote_id' );
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

$text .= '</p>
        </li>
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'states_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['states_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <li>
                
                <form name="statesform" method="post" action="/ngadminui/state/assign">
                    <input type="hidden" name="ObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                    <input type="hidden" name="RedirectRelativeURI" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
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

$text .= '" />

                    <table id="tab-details-states-list" class="list" cellspacing="0" summary="States and their states groups for current object.">
                        <tr>
                            <th>
                                Content state
                            </th>
                        </tr>
                        ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = current( $foreach_sequence_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = [];
$fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = [];
$fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_8  = 0;
$fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
if ( !isset( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ) ) $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = [];
$fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_8[] = @compact( 'fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8', 'fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8' );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'states', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['states'] : null;
if (! isset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ) ) $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = NULL;
while ( is_object( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ) and method_exists( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8, 'templateValue' ) )
    $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8->templateValue();

$fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = is_array( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ) ? array_keys( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ) : [];
$fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = count( $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = 0;
$fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8;
$fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = false;
if ( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 < 0 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 >= $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 )
{
    $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = ( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 < 0 ) ? 0 : $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8;
    if ( $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8'. Array count: $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8");   
}
}
if ( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8 < 0 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 + $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8 > $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 )
{
    if ( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8");
    $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8;
}
if ( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_8 )
{
    $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 - 1 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8;
    $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8  = 0;
}
else
{
    $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8;
    $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8  = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 - 1;
}
// foreach
for ( $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8; $fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_8 < $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8 && ( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ? $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8 >= $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 : $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8 <= $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ); $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ? $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8-- : $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8++ )
{
$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_8[$fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8];
$fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8[$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_8];
$vars[$rootNamespace]['allowed_assign_state_info'] = $fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8;
// setting current sequence value
$vars[$rootNamespace]['sequence'] = $foreach_sequence_var_561c61ad6b0ce4c8bc6dff22d4b72cce_8;
$text .= '                            <tr>
                                <td>
                                    <p>';
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

$text .= '</p>
                                    <label>Available states</label>
                                    <select class="form-control input-sm" name="SelectedStateIDList[]" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'states' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= '>
                                        ';
// foreach begins
$skipDelimiter = true;
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = [];
$fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = [];
$fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_7  = 0;
$fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
if ( !isset( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ) ) $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = [];
$fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_7[] = @compact( 'fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7', 'fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7' );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_71 = compiledFetchAttribute( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7, 'states' );
unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );
$fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_71;
if (! isset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ) ) $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = NULL;
while ( is_object( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ) and method_exists( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7, 'templateValue' ) )
    $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7->templateValue();

$fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = is_array( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ) ? array_keys( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ) : [];
$fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = count( $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = 0;
$fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7;
$fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = false;
if ( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 < 0 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 >= $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 )
{
    $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = ( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 < 0 ) ? 0 : $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7;
    if ( $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7'. Array count: $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7");   
}
}
if ( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7 < 0 || $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 + $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7 > $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 )
{
    if ( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7");
    $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7;
}
if ( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_7 )
{
    $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 - 1 - $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7;
    $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7  = 0;
}
else
{
    $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7;
    $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7  = $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 - 1;
}
// foreach
for ( $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7; $fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_7 < $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7 && ( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ? $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7 >= $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 : $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7 <= $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ); $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ? $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7-- : $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7++ )
{
$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_7[$fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7];
$fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 = $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7[$fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_7];
$vars[$rootNamespace]['state'] = $fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7;
$text .= '                                            <option value="';
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'object' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_7++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ) ) extract( array_pop( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_7 ) );

else
{

unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

unset( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_7 );

}

// foreach ends
$text .= '                                    </select>
                                </td>
                            </tr>
                        ';
// sequence iteration
if ( ( $foreach_sequence_var_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = next( $foreach_sequence_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ) ) === false )
{
   reset( $foreach_sequence_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );
   $foreach_sequence_var_561c61ad6b0ce4c8bc6dff22d4b72cce_8 = current( $foreach_sequence_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );
}

$fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_8++;
} // foreach
unset( $foreach_sequence_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $foreach_sequence_var_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $vars[$rootNamespace]['sequence'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ) ) extract( array_pop( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_8 ) );

else
{

unset( $fe_array_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_array_keys_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_n_items_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_n_items_processed_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_i_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_key_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_offset_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_max_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_reverse_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_first_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_last_val_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

unset( $fe_variable_stack_561c61ad6b0ce4c8bc6dff22d4b72cce_8 );

}

// foreach ends
$text .= '                    </table>

                    <input class="btn btn-default btn-sm" type="submit" id="tab-details-set-states" value="Set states" name="AssignButton" class="button" title="Apply states from the list above." />

                </form>
            </li>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </ul>
</div>
<script type="text/javascript">

(function( $ )
{
    $(\'#tab-details-states-list select\').change(function()
    {
        var btn = $(\'#tab-details-set-states\');
        if ( !btn.attr(\'disabled\') )
        {
            btn.removeClass(\'button\').removeClass(\'btn-default\').addClass(\'btn-primary\');
        }
    });
    $(\'#selected-section-id\').change(function()
    {
        var btn = $(\'#tab-details-set-section\');
        if ( !btn.attr(\'disabled\') )
        {
            btn.removeClass(\'button\').removeClass(\'btn-default\').addClass(\'btn-primary\');
        }
    });
})( jQuery );

</script>
';

$setArray = $oldSetArray_f84568e27eb0c0a4466e07dfcf8c1e84;
$tpl->Level--;
?>
