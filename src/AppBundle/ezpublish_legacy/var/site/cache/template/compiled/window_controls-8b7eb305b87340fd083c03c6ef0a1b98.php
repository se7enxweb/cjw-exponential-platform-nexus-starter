<?php
// URI:       extension/ngadminui/design/ngadminui/templates/window_controls.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/window_controls.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_158c683fc421134b225c1cf5c10d1699 = isset( $setArray ) ? $setArray : array();
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

// def $node_url_alias
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'node_url_alias', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'node_url_alias' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'node_url_alias', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'node_url_alias', $var, $rootNamespace );
}

// def $tabs_disabled
if ( $tpl->hasVariable( 'tabs_disabled', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tabs_disabled' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'tabs_disabled', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tabs_disabled', false, $rootNamespace );
}

// def $default_tabs
if ( $tpl->hasVariable( 'default_tabs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'default_tabs' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'default_tabs', array (
  'ng_frontpage' => 'subitems',
  'ng_category' => 'subitems',
  'ng_category_page' => 'subitems',
  'ng_landing_page' => 'subitems',
  'ng_container' => 'subitems',
  'ng_gallery' => 'subitems',
  'folder' => 'subitems',
  'user_group' => 'subitems',
  'cjw_folder_management' => 'subitems',
  'cjw_object_accommodation' => 'subitems',
  'cjw_notice' => 'view',
  'cjw_supply' => 'view',
  'cjw_object_accommodation_group' => 'subitems',
  'cjw_object_accommodation_featurefolder' => 'subitems',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'default_tabs', array (
  'ng_frontpage' => 'subitems',
  'ng_category' => 'subitems',
  'ng_category_page' => 'subitems',
  'ng_landing_page' => 'subitems',
  'ng_container' => 'subitems',
  'ng_gallery' => 'subitems',
  'folder' => 'subitems',
  'user_group' => 'subitems',
  'cjw_folder_management' => 'subitems',
  'cjw_object_accommodation' => 'subitems',
  'cjw_notice' => 'view',
  'cjw_supply' => 'view',
  'cjw_object_accommodation_group' => 'subitems',
  'cjw_object_accommodation_featurefolder' => 'subitems',
), $rootNamespace );
}

// def $default_tab
if ( $tpl->hasVariable( 'default_tab', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'default_tab' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'default_tab', 'view', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'default_tab', 'view', $rootNamespace );
}

// def $node_tab_index
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_tabs'] : null;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var5 = compiledFetchAttribute( $var4, 'object' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'class_identifier' );
unset( $var4 );
$var4 = $var5;
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
$var1 = isset( $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "default_tabs", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["default_tabs"] : null;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
$var5 = compiledFetchAttribute( $var4, "object" );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, "class_identifier" );
unset( $var4 );
$var4 = $var5;
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

    $var = $var2;
}
else
{
    
    if ( true )
    {
        unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "default_tab", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["default_tab"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();

        $var = $var4;
    }
}
unset( $var1, $var2, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'node_tab_index', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'node_tab_index' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'node_tab_index', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'node_tab_index', $var, $rootNamespace );
}

// def $available_languages
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchPrioritizedLanguages' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'available_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'available_languages' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'available_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'available_languages', $var, $rootNamespace );
}

// def $translations
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'translations', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'translations' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'translations', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'translations', $var, $rootNamespace );
}

// def $translations_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations'] : null;
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
if ( $tpl->hasVariable( 'translations_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'translations_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'translations_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'translations_count', $var, $rootNamespace );
}

// def $states
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'allowed_assign_state_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'states', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'states' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'states', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'states', $var, $rootNamespace );
}

// def $states_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'states', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['states'] : null;
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
if ( $tpl->hasVariable( 'states_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'states_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'states_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'states_count', $var, $rootNamespace );
}

// def $related_objects_count
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchRelatedObjectsCount' ),
  array_values( array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => true ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'related_objects_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'related_objects_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'related_objects_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'related_objects_count', $var, $rootNamespace );
}

// def $reverse_related_objects_count
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchReverseRelatedObjectsCount' ),
  array_values( array(     'object_id' => $var1,
    'attribute_identifier' => null,
    'all_relations' => true,
    'ignore_visibility' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'reverse_related_objects_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reverse_related_objects_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'reverse_related_objects_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reverse_related_objects_count', $var, $rootNamespace );
}

// def $additional_tabs
if ( $tpl->hasVariable( 'additional_tabs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'additional_tabs' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'additional_tabs', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'additional_tabs', array (
), $rootNamespace );
}

// def $additional_tabs_count
if ( $tpl->hasVariable( 'additional_tabs_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'additional_tabs_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'additional_tabs_count', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'additional_tabs_count', 0, $rootNamespace );
}

// def $valid_tabs
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_tab', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_tab'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( $var1, "details", "translations", "locations", "relations", "states" );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'valid_tabs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'valid_tabs' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'valid_tabs', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_tabs', $var, $rootNamespace );
}

// def $navigation_part_name
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'section_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZSectionFunctionCollection(), 'fetchSectionObject' ),
  array_values( array(     'section_id' => $var1,
    'identifier' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
$var1 = compiledFetchAttribute( $var, 'navigation_part_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'navigation_part_name', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'navigation_part_name' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1300,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'navigation_part_name', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'navigation_part_name', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part_name'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'ezusernavigationpart' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// def $assigned_policies
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchUserRole' ),
  array_values( array(     'user_id' => $var1 ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'assigned_policies', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'assigned_policies' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 0,
    2 => 1361,
  ),
  1 => 
  array (
    0 => 22,
    1 => 94,
    2 => 1554,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'assigned_policies', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'assigned_policies', $var, $rootNamespace );
}

// def $assigned_roles
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchMemberOf' ),
  array_values( array(     'id' => $var1 ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'assigned_roles', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'assigned_roles' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 0,
    2 => 1361,
  ),
  1 => 
  array (
    0 => 22,
    1 => 94,
    2 => 1554,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'assigned_roles', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'assigned_roles', $var, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// foreach begins
$skipDelimiter = true;
$fe_array_b54cbb3fe347d707c44b026e709b9bd8_3 = [];
$fe_array_keys_b54cbb3fe347d707c44b026e709b9bd8_3 = [];
$fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_n_items_processed_b54cbb3fe347d707c44b026e709b9bd8_3  = 0;
$fe_i_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_key_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_val_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_max_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_reverse_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_first_val_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_last_val_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
if ( !isset( $fe_variable_stack_b54cbb3fe347d707c44b026e709b9bd8_3 ) ) $fe_variable_stack_b54cbb3fe347d707c44b026e709b9bd8_3 = [];
$fe_variable_stack_b54cbb3fe347d707c44b026e709b9bd8_3[] = @compact( 'fe_array_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_array_keys_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_n_items_processed_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_i_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_key_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_val_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_max_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_reverse_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_first_val_b54cbb3fe347d707c44b026e709b9bd8_3', 'fe_last_val_b54cbb3fe347d707c44b026e709b9bd8_3' );
$fe_array_b54cbb3fe347d707c44b026e709b9bd8_3 = array (
  0 => 'roles',
  1 => 'policies',
  2 => 'eztags',
  3 => 'nglayouts',
);
$fe_array_keys_b54cbb3fe347d707c44b026e709b9bd8_3 = is_array( $fe_array_b54cbb3fe347d707c44b026e709b9bd8_3 ) ? array_keys( $fe_array_b54cbb3fe347d707c44b026e709b9bd8_3 ) : [];
$fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 = count( $fe_array_keys_b54cbb3fe347d707c44b026e709b9bd8_3 );
$fe_n_items_processed_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 = 0;
$fe_max_b54cbb3fe347d707c44b026e709b9bd8_3 = $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 - $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3;
$fe_reverse_b54cbb3fe347d707c44b026e709b9bd8_3 = false;
if ( $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 < 0 || $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 >= $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 )
{
    $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 = ( $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 < 0 ) ? 0 : $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3;
    if ( $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 || $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3'. Array count: $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3");   
}
}
if ( $fe_max_b54cbb3fe347d707c44b026e709b9bd8_3 < 0 || $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 + $fe_max_b54cbb3fe347d707c44b026e709b9bd8_3 > $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 )
{
    if ( $fe_max_b54cbb3fe347d707c44b026e709b9bd8_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b54cbb3fe347d707c44b026e709b9bd8_3");
    $fe_max_b54cbb3fe347d707c44b026e709b9bd8_3 = $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 - $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3;
}
if ( $fe_reverse_b54cbb3fe347d707c44b026e709b9bd8_3 )
{
    $fe_first_val_b54cbb3fe347d707c44b026e709b9bd8_3 = $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 - 1 - $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3;
    $fe_last_val_b54cbb3fe347d707c44b026e709b9bd8_3  = 0;
}
else
{
    $fe_first_val_b54cbb3fe347d707c44b026e709b9bd8_3 = $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3;
    $fe_last_val_b54cbb3fe347d707c44b026e709b9bd8_3  = $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 - 1;
}
// foreach
for ( $fe_i_b54cbb3fe347d707c44b026e709b9bd8_3 = $fe_first_val_b54cbb3fe347d707c44b026e709b9bd8_3; $fe_n_items_processed_b54cbb3fe347d707c44b026e709b9bd8_3 < $fe_max_b54cbb3fe347d707c44b026e709b9bd8_3 && ( $fe_reverse_b54cbb3fe347d707c44b026e709b9bd8_3 ? $fe_i_b54cbb3fe347d707c44b026e709b9bd8_3 >= $fe_last_val_b54cbb3fe347d707c44b026e709b9bd8_3 : $fe_i_b54cbb3fe347d707c44b026e709b9bd8_3 <= $fe_last_val_b54cbb3fe347d707c44b026e709b9bd8_3 ); $fe_reverse_b54cbb3fe347d707c44b026e709b9bd8_3 ? $fe_i_b54cbb3fe347d707c44b026e709b9bd8_3-- : $fe_i_b54cbb3fe347d707c44b026e709b9bd8_3++ )
{
$fe_key_b54cbb3fe347d707c44b026e709b9bd8_3 = $fe_array_keys_b54cbb3fe347d707c44b026e709b9bd8_3[$fe_i_b54cbb3fe347d707c44b026e709b9bd8_3];
$fe_val_b54cbb3fe347d707c44b026e709b9bd8_3 = $fe_array_b54cbb3fe347d707c44b026e709b9bd8_3[$fe_key_b54cbb3fe347d707c44b026e709b9bd8_3];
$vars[$rootNamespace]['tab'] = $fe_val_b54cbb3fe347d707c44b026e709b9bd8_3;
$text .= '    ';
// def $tab_navigation_parts
unset( $var );
unset( $var1 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1Data = array( 'value' => $var1 );
$tpl->processOperator( 'ezini',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'AdditionalTab_',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'tab',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'NavigationPartName',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'admininterface.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var1Data, false, false );
$var1 = $var1Data['value'];
unset( $var1Data );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
{
	$var = explode( ";", $var1 );
}
else if ( is_array( $var1 ) )
{
	$var = array( array_slice( $var1, 0, ";" ), array_slice( $var1, ";" ) );
}
else
{
	$var = null;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tab_navigation_parts', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tab_navigation_parts' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 4,
    2 => 1660,
  ),
  1 => 
  array (
    0 => 26,
    1 => 132,
    2 => 1788,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'tab_navigation_parts', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tab_navigation_parts', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tab_navigation_parts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tab_navigation_parts'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part_name'] : null;
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
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tab', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tab'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_tabs'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'additional_tabs', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['additional_tabs'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $tab_navigation_parts
$tpl->unsetLocalVariable( 'tab_navigation_parts', $rootNamespace );

$fe_n_items_processed_b54cbb3fe347d707c44b026e709b9bd8_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b54cbb3fe347d707c44b026e709b9bd8_3 ) ) extract( array_pop( $fe_variable_stack_b54cbb3fe347d707c44b026e709b9bd8_3 ) );

else
{

unset( $fe_array_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_array_keys_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_n_items_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_n_items_processed_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_i_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_key_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_val_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_offset_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_max_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_reverse_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_first_val_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_last_val_b54cbb3fe347d707c44b026e709b9bd8_3 );

unset( $fe_variable_stack_b54cbb3fe347d707c44b026e709b9bd8_3 );

}

// foreach ends
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_tabs'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_tabs'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'valid_tabs', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['valid_tabs'] = $var;
    unset( $var );
}
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_tabs'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'additional_tabs_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['additional_tabs_count'] = $var;
    unset( $var );
}
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'tab' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var1 = compiledFetchAttribute( $var, 'tab' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'node_tab_index', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['node_tab_index'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '
<div class="window-controls-tabs">
    <ul class="tabs clearfix">

        
        <li id="node-tab-view" class="first';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'view' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/view' );
unset( $var2 );
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

$text .= ' title="Show simplified view of content.">Overview</a>
        </li>

        
        <li id="node-tab-subitems" class="';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_tabs'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'middle';
}
else
{
$text .= 'last';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'subitems' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/ordering' );
unset( $var2 );
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

$text .= ' title="Show subitems.">Sub items ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'children_count' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<span class="badge">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'children_count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '</a>
        </li>

        
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array_values( array(  ) ) );
$if_cond1 = isset( $if_cond1['result'] ) ? $if_cond1['result'] : null;
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
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_languages'] : null;
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
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <li id="node-tab-translations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'translations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
                    <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/translations' );
unset( $var2 );
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

$text .= ' title="Show available translations.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Translations', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<span class="badge">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations_count'] : null;
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

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '</a>
                </li>
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '
        
        <li id="node-tab-locations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'locations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/locations' );
unset( $var2 );
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

$text .= ' title="Show location overview.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'assigned_nodes' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Locations', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'object' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'assigned_nodes' );
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
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<span class="badge">';
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
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '</a>
        </li>

        
        <li id="node-tab-relations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'relations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/relations' );
unset( $var2 );
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

$text .= ' title="Show object relation overview.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = $var4 + $var5;
unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Relations', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<span class="badge">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 + $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '</a>
        </li>

        ';
$oldRestoreIncludeArray_ec2f44bdc340bb405c450ffd26b455a7 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/window_controls_extratabs-928cf194f440ac2a4a36a9c75b26e562.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/window_controls_extratabs.tpl' );
include( '' . 'var/site/cache/template/compiled/window_controls_extratabs-928cf194f440ac2a4a36a9c75b26e562.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/window_controls_extratabs.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_ec2f44bdc340bb405c450ffd26b455a7;

$text .= '
    </ul>
</div>
<div class="clearfix">
    <div class="tabs-content">
        ';
$oldRestoreIncludeArray_2cd5741f8da83a4a50607e9d94deccf8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/windows-5b14024c594cb6d7ee0b367eb519d7d3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/windows.tpl' );
include( '' . 'var/site/cache/template/compiled/windows-5b14024c594cb6d7ee0b367eb519d7d3.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/windows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_2cd5741f8da83a4a50607e9d94deccf8;

$text .= '    </div>
</div>

';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'node_tabs.js',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

// undef all
$tpl->unsetLocalVariables();

$setArray = $oldSetArray_158c683fc421134b225c1cf5c10d1699;
$tpl->Level--;
?>
