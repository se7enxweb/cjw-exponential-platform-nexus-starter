<?php
// URI:       extension/ngadminui/design/ngadminui/templates/relations.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/relations.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_232546e8eba578a00cbc22a42f09ab36 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="panel">
    
    ';
// def $page_limit
unset( $var );
unset( $var1 );
unset( $var2 );
$var2 = eZPreferences::value( "admin_list_limit" );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = min( $var2,  3);
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 < 0 and
     $var1 >= 4 )
{
    $tpl->error( "choose", "Index " . $var1 . " out of range" );
     $var = false;
}
else switch ( $var1 )
{
    case 0: $var = 10; break;
    case 1: $var = 10; break;
    case 2: $var = 25; break;
    case 3: $var = 50; break;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'page_limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'page_limit' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 4,
    2 => 54,
  ),
  1 => 
  array (
    0 => 4,
    1 => 58,
    2 => 200,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'page_limit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'page_limit', $var, $rootNamespace );
}

// def $offset
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var2 = compiledFetchAttribute( $var1, "offset" );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = 0;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'offset', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'offset' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 4,
    2 => 54,
  ),
  1 => 
  array (
    0 => 4,
    1 => 58,
    2 => 200,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'offset', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'offset', $var, $rootNamespace );
}

$text .= '    
    ';
// def $relation_type_names
if ( $tpl->hasVariable( 'relation_type_names', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_type_names' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 4,
    2 => 239,
  ),
  1 => 
  array (
    0 => 9,
    1 => 100,
    2 => 626,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'relation_type_names', array (
  'common' => 'Common',
  'xml_embed' => 'Embedded',
  'xml_link' => 'Linked',
  'attribute' => 'Attribute',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_type_names', array (
  'common' => 'Common',
  'xml_embed' => 'Embedded',
  'xml_link' => 'Linked',
  'attribute' => 'Attribute',
), $rootNamespace );
}

$text .= '    ';
// def $relation_name_delimiter
if ( $tpl->hasVariable( 'relation_name_delimiter', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_delimiter' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 633,
  ),
  1 => 
  array (
    0 => 10,
    1 => 39,
    2 => 668,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'relation_name_delimiter', ', ', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_delimiter', ', ', $rootNamespace );
}

$text .= '
    <table class="list" cellspacing="0" summary="Object relation list from current object.">
    <tr>
        <th>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%related_objects_count' => $var3 );unset( $var3 );
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
$var = strtr( 'Related objects (%related_objects_count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</th>
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <th>Class</th>
        <th>Relation type</th>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </tr>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $related_objects_grouped
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'offset', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['offset'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchRelatedObjects' ),
  array_values( array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => true,
    'group_by_attribute' => true,
    'sort_by' => array( array( "class_identifier",
              true ),
       array( "name",
              true ) ),
    'limit' => $var2,
    'offset' => $var3,
    'as_object' => true,
    'load_data_map' => false,
    'ignore_visibility' => null,
    'related_class_identifiers' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'related_objects_grouped', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'related_objects_grouped' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 8,
    2 => 1212,
  ),
  1 => 
  array (
    0 => 21,
    1 => 292,
    2 => 1496,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'related_objects_grouped', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'related_objects_grouped', $var, $rootNamespace );
}

$text .= '        ';
// def $related_objects_id_typed
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
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchRelatedObjectsID' ),
  array_values( array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'related_objects_id_typed', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'related_objects_id_typed' is already defined.", array (
  0 => 
  array (
    0 => 22,
    1 => 8,
    2 => 1507,
  ),
  1 => 
  array (
    0 => 22,
    1 => 119,
    2 => 1618,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'related_objects_id_typed', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'related_objects_id_typed', $var, $rootNamespace );
}

$text .= '
        ';
// def $tr_class
if ( $tpl->hasVariable( 'tr_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tr_class' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 8,
    2 => 1630,
  ),
  1 => 
  array (
    0 => 24,
    1 => 31,
    2 => 1653,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'tr_class', 'bglight', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tr_class', 'bglight', $rootNamespace );
}

$text .= '        ';
// def $attr
if ( $tpl->hasVariable( 'attr', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attr' is already defined.", array (
  0 => 
  array (
    0 => 25,
    1 => 8,
    2 => 1664,
  ),
  1 => 
  array (
    0 => 25,
    1 => 21,
    2 => 1677,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'attr', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attr', 0, $rootNamespace );
}

$text .= '        ';
// foreach begins
$skipDelimiter = true;
$fe_array_35397c8d5ce15242c48546bdd6620174_23 = [];
$fe_array_keys_35397c8d5ce15242c48546bdd6620174_23 = [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_23  = 0;
$fe_i_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_key_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_val_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_first_val_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_last_val_35397c8d5ce15242c48546bdd6620174_23 = 0;
if ( !isset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_23 ) ) $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_23 = [];
$fe_variable_stack_35397c8d5ce15242c48546bdd6620174_23[] = @compact( 'fe_array_35397c8d5ce15242c48546bdd6620174_23', 'fe_array_keys_35397c8d5ce15242c48546bdd6620174_23', 'fe_n_items_35397c8d5ce15242c48546bdd6620174_23', 'fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_23', 'fe_i_35397c8d5ce15242c48546bdd6620174_23', 'fe_key_35397c8d5ce15242c48546bdd6620174_23', 'fe_val_35397c8d5ce15242c48546bdd6620174_23', 'fe_offset_35397c8d5ce15242c48546bdd6620174_23', 'fe_max_35397c8d5ce15242c48546bdd6620174_23', 'fe_reverse_35397c8d5ce15242c48546bdd6620174_23', 'fe_first_val_35397c8d5ce15242c48546bdd6620174_23', 'fe_last_val_35397c8d5ce15242c48546bdd6620174_23' );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_23 );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_23 );
$fe_array_35397c8d5ce15242c48546bdd6620174_23 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_grouped', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_grouped'] : null;
if (! isset( $fe_array_35397c8d5ce15242c48546bdd6620174_23 ) ) $fe_array_35397c8d5ce15242c48546bdd6620174_23 = NULL;
while ( is_object( $fe_array_35397c8d5ce15242c48546bdd6620174_23 ) and method_exists( $fe_array_35397c8d5ce15242c48546bdd6620174_23, 'templateValue' ) )
    $fe_array_35397c8d5ce15242c48546bdd6620174_23 = $fe_array_35397c8d5ce15242c48546bdd6620174_23->templateValue();

$fe_array_keys_35397c8d5ce15242c48546bdd6620174_23 = is_array( $fe_array_35397c8d5ce15242c48546bdd6620174_23 ) ? array_keys( $fe_array_35397c8d5ce15242c48546bdd6620174_23 ) : [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_23 = count( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_23 );
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_23 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_23 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_23 - $fe_offset_35397c8d5ce15242c48546bdd6620174_23;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_23 = false;
if ( $fe_offset_35397c8d5ce15242c48546bdd6620174_23 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_23 >= $fe_n_items_35397c8d5ce15242c48546bdd6620174_23 )
{
    $fe_offset_35397c8d5ce15242c48546bdd6620174_23 = ( $fe_offset_35397c8d5ce15242c48546bdd6620174_23 < 0 ) ? 0 : $fe_n_items_35397c8d5ce15242c48546bdd6620174_23;
    if ( $fe_n_items_35397c8d5ce15242c48546bdd6620174_23 || $fe_offset_35397c8d5ce15242c48546bdd6620174_23 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_35397c8d5ce15242c48546bdd6620174_23'. Array count: $fe_n_items_35397c8d5ce15242c48546bdd6620174_23");   
}
}
if ( $fe_max_35397c8d5ce15242c48546bdd6620174_23 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_23 + $fe_max_35397c8d5ce15242c48546bdd6620174_23 > $fe_n_items_35397c8d5ce15242c48546bdd6620174_23 )
{
    if ( $fe_max_35397c8d5ce15242c48546bdd6620174_23 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_35397c8d5ce15242c48546bdd6620174_23");
    $fe_max_35397c8d5ce15242c48546bdd6620174_23 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_23 - $fe_offset_35397c8d5ce15242c48546bdd6620174_23;
}
if ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_23 )
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_23 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_23 - 1 - $fe_offset_35397c8d5ce15242c48546bdd6620174_23;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_23  = 0;
}
else
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_23 = $fe_offset_35397c8d5ce15242c48546bdd6620174_23;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_23  = $fe_n_items_35397c8d5ce15242c48546bdd6620174_23 - 1;
}
// foreach
for ( $fe_i_35397c8d5ce15242c48546bdd6620174_23 = $fe_first_val_35397c8d5ce15242c48546bdd6620174_23; $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_23 < $fe_max_35397c8d5ce15242c48546bdd6620174_23 && ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_23 ? $fe_i_35397c8d5ce15242c48546bdd6620174_23 >= $fe_last_val_35397c8d5ce15242c48546bdd6620174_23 : $fe_i_35397c8d5ce15242c48546bdd6620174_23 <= $fe_last_val_35397c8d5ce15242c48546bdd6620174_23 ); $fe_reverse_35397c8d5ce15242c48546bdd6620174_23 ? $fe_i_35397c8d5ce15242c48546bdd6620174_23-- : $fe_i_35397c8d5ce15242c48546bdd6620174_23++ )
{
$fe_key_35397c8d5ce15242c48546bdd6620174_23 = $fe_array_keys_35397c8d5ce15242c48546bdd6620174_23[$fe_i_35397c8d5ce15242c48546bdd6620174_23];
$fe_val_35397c8d5ce15242c48546bdd6620174_23 = $fe_array_35397c8d5ce15242c48546bdd6620174_23[$fe_key_35397c8d5ce15242c48546bdd6620174_23];
$vars[$rootNamespace]['related_objects_array'] = $fe_val_35397c8d5ce15242c48546bdd6620174_23;
$vars[$rootNamespace]['attribute_id'] = $fe_key_35397c8d5ce15242c48546bdd6620174_23;
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchClassAttribute' ),
  array_values( array(     'attribute_id' => $var1,
    'version_id' => 0 ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'attr', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['attr'] = $var;
    unset( $var );
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// foreach begins
$skipDelimiter = true;
$fe_array_35397c8d5ce15242c48546bdd6620174_22 = [];
$fe_array_keys_35397c8d5ce15242c48546bdd6620174_22 = [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_22  = 0;
$fe_i_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_key_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_val_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_first_val_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_last_val_35397c8d5ce15242c48546bdd6620174_22 = 0;
if ( !isset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_22 ) ) $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_22 = [];
$fe_variable_stack_35397c8d5ce15242c48546bdd6620174_22[] = @compact( 'fe_array_35397c8d5ce15242c48546bdd6620174_22', 'fe_array_keys_35397c8d5ce15242c48546bdd6620174_22', 'fe_n_items_35397c8d5ce15242c48546bdd6620174_22', 'fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_22', 'fe_i_35397c8d5ce15242c48546bdd6620174_22', 'fe_key_35397c8d5ce15242c48546bdd6620174_22', 'fe_val_35397c8d5ce15242c48546bdd6620174_22', 'fe_offset_35397c8d5ce15242c48546bdd6620174_22', 'fe_max_35397c8d5ce15242c48546bdd6620174_22', 'fe_reverse_35397c8d5ce15242c48546bdd6620174_22', 'fe_first_val_35397c8d5ce15242c48546bdd6620174_22', 'fe_last_val_35397c8d5ce15242c48546bdd6620174_22' );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_22 );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_22 );
$fe_array_35397c8d5ce15242c48546bdd6620174_22 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_array'] : null;
if (! isset( $fe_array_35397c8d5ce15242c48546bdd6620174_22 ) ) $fe_array_35397c8d5ce15242c48546bdd6620174_22 = NULL;
while ( is_object( $fe_array_35397c8d5ce15242c48546bdd6620174_22 ) and method_exists( $fe_array_35397c8d5ce15242c48546bdd6620174_22, 'templateValue' ) )
    $fe_array_35397c8d5ce15242c48546bdd6620174_22 = $fe_array_35397c8d5ce15242c48546bdd6620174_22->templateValue();

$fe_array_keys_35397c8d5ce15242c48546bdd6620174_22 = is_array( $fe_array_35397c8d5ce15242c48546bdd6620174_22 ) ? array_keys( $fe_array_35397c8d5ce15242c48546bdd6620174_22 ) : [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_22 = count( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_22 );
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_22 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_22 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_22 - $fe_offset_35397c8d5ce15242c48546bdd6620174_22;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_22 = false;
if ( $fe_offset_35397c8d5ce15242c48546bdd6620174_22 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_22 >= $fe_n_items_35397c8d5ce15242c48546bdd6620174_22 )
{
    $fe_offset_35397c8d5ce15242c48546bdd6620174_22 = ( $fe_offset_35397c8d5ce15242c48546bdd6620174_22 < 0 ) ? 0 : $fe_n_items_35397c8d5ce15242c48546bdd6620174_22;
    if ( $fe_n_items_35397c8d5ce15242c48546bdd6620174_22 || $fe_offset_35397c8d5ce15242c48546bdd6620174_22 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_35397c8d5ce15242c48546bdd6620174_22'. Array count: $fe_n_items_35397c8d5ce15242c48546bdd6620174_22");   
}
}
if ( $fe_max_35397c8d5ce15242c48546bdd6620174_22 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_22 + $fe_max_35397c8d5ce15242c48546bdd6620174_22 > $fe_n_items_35397c8d5ce15242c48546bdd6620174_22 )
{
    if ( $fe_max_35397c8d5ce15242c48546bdd6620174_22 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_35397c8d5ce15242c48546bdd6620174_22");
    $fe_max_35397c8d5ce15242c48546bdd6620174_22 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_22 - $fe_offset_35397c8d5ce15242c48546bdd6620174_22;
}
if ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_22 )
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_22 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_22 - 1 - $fe_offset_35397c8d5ce15242c48546bdd6620174_22;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_22  = 0;
}
else
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_22 = $fe_offset_35397c8d5ce15242c48546bdd6620174_22;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_22  = $fe_n_items_35397c8d5ce15242c48546bdd6620174_22 - 1;
}
// foreach
for ( $fe_i_35397c8d5ce15242c48546bdd6620174_22 = $fe_first_val_35397c8d5ce15242c48546bdd6620174_22; $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_22 < $fe_max_35397c8d5ce15242c48546bdd6620174_22 && ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_22 ? $fe_i_35397c8d5ce15242c48546bdd6620174_22 >= $fe_last_val_35397c8d5ce15242c48546bdd6620174_22 : $fe_i_35397c8d5ce15242c48546bdd6620174_22 <= $fe_last_val_35397c8d5ce15242c48546bdd6620174_22 ); $fe_reverse_35397c8d5ce15242c48546bdd6620174_22 ? $fe_i_35397c8d5ce15242c48546bdd6620174_22-- : $fe_i_35397c8d5ce15242c48546bdd6620174_22++ )
{
$fe_key_35397c8d5ce15242c48546bdd6620174_22 = $fe_array_keys_35397c8d5ce15242c48546bdd6620174_22[$fe_i_35397c8d5ce15242c48546bdd6620174_22];
$fe_val_35397c8d5ce15242c48546bdd6620174_22 = $fe_array_35397c8d5ce15242c48546bdd6620174_22[$fe_key_35397c8d5ce15242c48546bdd6620174_22];
$vars[$rootNamespace]['object'] = $fe_val_35397c8d5ce15242c48546bdd6620174_22;
$text .= '                <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tr_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tr_class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_read' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_view_embed' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '                    <td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'content_class' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'object',
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
          0 => 3,
          1 => 'content_class',
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
          0 => 3,
          1 => 'name',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'wash',
      ),
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

$text .= '&nbsp;';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
$vars[$namespace]['object'] = $var;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'id' );
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/text_linked-3ed82c9ce6b2af24c31e7a912bcca601.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/content/view/text_linked.tpl' );
include( '' . 'var/site/cache/template/compiled/text_linked-3ed82c9ce6b2af24c31e7a912bcca601.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/content/view/text_linked.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $vars[$namespace]['object'] );
$text .= '</td>
                    <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'content_class' );
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

$text .= '</td>
                ';
}
else
{
$text .= '                    <td colspan="2"><em>You are not allowed to view the related object</em></td>
                ';
}
unset( $if_cond );
// if ends

$text .= '                <td>
                    ';
unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_139 );
unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 );
unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 );
$elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 ) ) $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 = NULL;
while ( is_object( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 ) and method_exists( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391, 'templateValue' ) )
    $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 = $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391->templateValue();
while ( is_object( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 ) and method_exists( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391, 'templateValue' ) )
    $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 = $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391->templateValue();
$elseif_cond_35397c8d5ce15242c48546bdd6620174_139 = ( ( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 ) == ( 0 ) );
unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1391 );
if (! isset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_139 ) ) $elseif_cond_35397c8d5ce15242c48546bdd6620174_139 = NULL;
while ( is_object( $elseif_cond_35397c8d5ce15242c48546bdd6620174_139 ) and method_exists( $elseif_cond_35397c8d5ce15242c48546bdd6620174_139, 'templateValue' ) )
    $elseif_cond_35397c8d5ce15242c48546bdd6620174_139 = $elseif_cond_35397c8d5ce15242c48546bdd6620174_139->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) != ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_id_typed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_id_typed'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'attribute' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if( is_string( $if_cond3 ) )
{
  $if_cond2 = ( mb_strpos( $if_cond3, $if_cond4 ) !== false );
}
else if ( is_array( $if_cond3 ) )
{
  $if_cond2 = in_array( $if_cond4, $if_cond3 );
}
else
{
$if_cond2 = false;
}unset( $if_cond3, $if_cond4 );
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
$text .= '                        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
$var1 = compiledFetchAttribute( $var, 'attribute' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ( ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attr', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attr'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' )
                    ';
}
elseif ( $elseif_cond_35397c8d5ce15242c48546bdd6620174_139 )
{
$text .= '                        ';
// def $relation_name_array
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 42,
    1 => 24,
    2 => 2818,
  ),
  1 => 
  array (
    0 => 42,
    1 => 58,
    2 => 2852,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', array (
), $rootNamespace );
}

$text .= '                        ';
// foreach begins
$skipDelimiter = true;
$fe_array_35397c8d5ce15242c48546bdd6620174_21 = [];
$fe_array_keys_35397c8d5ce15242c48546bdd6620174_21 = [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_21  = 0;
$fe_i_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_key_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_val_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_first_val_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_last_val_35397c8d5ce15242c48546bdd6620174_21 = 0;
if ( !isset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_21 ) ) $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_21 = [];
$fe_variable_stack_35397c8d5ce15242c48546bdd6620174_21[] = @compact( 'fe_array_35397c8d5ce15242c48546bdd6620174_21', 'fe_array_keys_35397c8d5ce15242c48546bdd6620174_21', 'fe_n_items_35397c8d5ce15242c48546bdd6620174_21', 'fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_21', 'fe_i_35397c8d5ce15242c48546bdd6620174_21', 'fe_key_35397c8d5ce15242c48546bdd6620174_21', 'fe_val_35397c8d5ce15242c48546bdd6620174_21', 'fe_offset_35397c8d5ce15242c48546bdd6620174_21', 'fe_max_35397c8d5ce15242c48546bdd6620174_21', 'fe_reverse_35397c8d5ce15242c48546bdd6620174_21', 'fe_first_val_35397c8d5ce15242c48546bdd6620174_21', 'fe_last_val_35397c8d5ce15242c48546bdd6620174_21' );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_21 );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_21 );
$fe_array_35397c8d5ce15242c48546bdd6620174_21 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_id_typed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_id_typed'] : null;
if (! isset( $fe_array_35397c8d5ce15242c48546bdd6620174_21 ) ) $fe_array_35397c8d5ce15242c48546bdd6620174_21 = NULL;
while ( is_object( $fe_array_35397c8d5ce15242c48546bdd6620174_21 ) and method_exists( $fe_array_35397c8d5ce15242c48546bdd6620174_21, 'templateValue' ) )
    $fe_array_35397c8d5ce15242c48546bdd6620174_21 = $fe_array_35397c8d5ce15242c48546bdd6620174_21->templateValue();

$fe_array_keys_35397c8d5ce15242c48546bdd6620174_21 = is_array( $fe_array_35397c8d5ce15242c48546bdd6620174_21 ) ? array_keys( $fe_array_35397c8d5ce15242c48546bdd6620174_21 ) : [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_21 = count( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_21 );
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_21 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_21 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_21 - $fe_offset_35397c8d5ce15242c48546bdd6620174_21;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_21 = false;
if ( $fe_offset_35397c8d5ce15242c48546bdd6620174_21 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_21 >= $fe_n_items_35397c8d5ce15242c48546bdd6620174_21 )
{
    $fe_offset_35397c8d5ce15242c48546bdd6620174_21 = ( $fe_offset_35397c8d5ce15242c48546bdd6620174_21 < 0 ) ? 0 : $fe_n_items_35397c8d5ce15242c48546bdd6620174_21;
    if ( $fe_n_items_35397c8d5ce15242c48546bdd6620174_21 || $fe_offset_35397c8d5ce15242c48546bdd6620174_21 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_35397c8d5ce15242c48546bdd6620174_21'. Array count: $fe_n_items_35397c8d5ce15242c48546bdd6620174_21");   
}
}
if ( $fe_max_35397c8d5ce15242c48546bdd6620174_21 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_21 + $fe_max_35397c8d5ce15242c48546bdd6620174_21 > $fe_n_items_35397c8d5ce15242c48546bdd6620174_21 )
{
    if ( $fe_max_35397c8d5ce15242c48546bdd6620174_21 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_35397c8d5ce15242c48546bdd6620174_21");
    $fe_max_35397c8d5ce15242c48546bdd6620174_21 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_21 - $fe_offset_35397c8d5ce15242c48546bdd6620174_21;
}
if ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_21 )
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_21 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_21 - 1 - $fe_offset_35397c8d5ce15242c48546bdd6620174_21;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_21  = 0;
}
else
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_21 = $fe_offset_35397c8d5ce15242c48546bdd6620174_21;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_21  = $fe_n_items_35397c8d5ce15242c48546bdd6620174_21 - 1;
}
// foreach
for ( $fe_i_35397c8d5ce15242c48546bdd6620174_21 = $fe_first_val_35397c8d5ce15242c48546bdd6620174_21; $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_21 < $fe_max_35397c8d5ce15242c48546bdd6620174_21 && ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_21 ? $fe_i_35397c8d5ce15242c48546bdd6620174_21 >= $fe_last_val_35397c8d5ce15242c48546bdd6620174_21 : $fe_i_35397c8d5ce15242c48546bdd6620174_21 <= $fe_last_val_35397c8d5ce15242c48546bdd6620174_21 ); $fe_reverse_35397c8d5ce15242c48546bdd6620174_21 ? $fe_i_35397c8d5ce15242c48546bdd6620174_21-- : $fe_i_35397c8d5ce15242c48546bdd6620174_21++ )
{
$fe_key_35397c8d5ce15242c48546bdd6620174_21 = $fe_array_keys_35397c8d5ce15242c48546bdd6620174_21[$fe_i_35397c8d5ce15242c48546bdd6620174_21];
$fe_val_35397c8d5ce15242c48546bdd6620174_21 = $fe_array_35397c8d5ce15242c48546bdd6620174_21[$fe_key_35397c8d5ce15242c48546bdd6620174_21];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_35397c8d5ce15242c48546bdd6620174_21;
$vars[$rootNamespace]['relation_type'] = $fe_key_35397c8d5ce15242c48546bdd6620174_21;
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'attribute' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
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
$text .= '                                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                                ';
}
unset( $if_cond );
// if ends

$text .= '                            ';
}
unset( $if_cond );
// if ends

$text .= '                        ';
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_21++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_21 ) ) extract( array_pop( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_21 ) );

else
{

unset( $fe_array_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_n_items_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_i_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_key_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_val_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_offset_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_max_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_reverse_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_first_val_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_last_val_35397c8d5ce15242c48546bdd6620174_21 );

unset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_21 );

}

// foreach ends
$text .= '                        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                        ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '                    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_139 );

$text .= '                </td>
                </tr>
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tr_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tr_class'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'bgdark' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tr_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tr_class'] = 'bglight';
}
$text .= '                ';
}
else
{
$text .= '                    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tr_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tr_class'] = 'bgdark';
}
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_22++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_22 ) ) extract( array_pop( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_22 ) );

else
{

unset( $fe_array_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_n_items_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_i_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_key_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_val_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_offset_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_max_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_reverse_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_first_val_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_last_val_35397c8d5ce15242c48546bdd6620174_22 );

unset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_22 );

}

// foreach ends
$text .= '        ';
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_23++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_23 ) ) extract( array_pop( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_23 ) );

else
{

unset( $fe_array_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_n_items_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_i_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_key_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_val_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_offset_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_max_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_reverse_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_first_val_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_last_val_35397c8d5ce15242c48546bdd6620174_23 );

unset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_23 );

}

// foreach ends
$text .= '        ';
// undef $tr_class
$tpl->unsetLocalVariable( 'tr_class', $rootNamespace );

// undef $attr
$tpl->unsetLocalVariable( 'attr', $rootNamespace );

$text .= '    ';
}
else
{
$text .= '        <tr><td>The item being viewed does not make use of any other objects.</td></tr>
    ';
}
unset( $if_cond );
// if ends

$text .= '    </table>

    <br />
    

    <table class="list" cellspacing="0" summary="Reverse object relation list to current object.">
    <tr>
        <th>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%related_objects_count' => $var3 );unset( $var3 );
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
$var = strtr( 'Reverse related objects (%related_objects_count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</th>
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <th>Class</th>
        <th>Relation type</th>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </tr>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $reverse_related_objects_grouped
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'offset', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['offset'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchReverseRelatedObjects' ),
  array_values( array(     'object_id' => $var1,
    'attribute_identifier' => null,
    'all_relations' => true,
    'group_by_attribute' => true,
    'sort_by' => array( array( "class_identifier",
              true ),
       array( "name",
              true ) ),
    'ignore_visibility' => null,
    'limit' => $var2,
    'offset' => $var3,
    'as_object' => true,
    'load_data_map' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'reverse_related_objects_grouped', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reverse_related_objects_grouped' is already defined.", array (
  0 => 
  array (
    0 => 80,
    1 => 8,
    2 => 4599,
  ),
  1 => 
  array (
    0 => 80,
    1 => 308,
    2 => 4899,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'reverse_related_objects_grouped', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reverse_related_objects_grouped', $var, $rootNamespace );
}

$text .= '        ';
// def $reverse_related_objects_id_typed
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
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchReverseRelatedObjectsID' ),
  array_values( array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'reverse_related_objects_id_typed', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reverse_related_objects_id_typed' is already defined.", array (
  0 => 
  array (
    0 => 81,
    1 => 8,
    2 => 4910,
  ),
  1 => 
  array (
    0 => 81,
    1 => 135,
    2 => 5037,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'reverse_related_objects_id_typed', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reverse_related_objects_id_typed', $var, $rootNamespace );
}

$text .= '
        ';
// def $tr_class
if ( $tpl->hasVariable( 'tr_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tr_class' is already defined.", array (
  0 => 
  array (
    0 => 83,
    1 => 8,
    2 => 5049,
  ),
  1 => 
  array (
    0 => 83,
    1 => 31,
    2 => 5072,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'tr_class', 'bglight', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tr_class', 'bglight', $rootNamespace );
}

$text .= '        ';
// def $attr
if ( $tpl->hasVariable( 'attr', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attr' is already defined.", array (
  0 => 
  array (
    0 => 84,
    1 => 8,
    2 => 5083,
  ),
  1 => 
  array (
    0 => 84,
    1 => 21,
    2 => 5096,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'attr', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attr', 0, $rootNamespace );
}

$text .= '        ';
// foreach begins
$skipDelimiter = true;
$fe_array_35397c8d5ce15242c48546bdd6620174_26 = [];
$fe_array_keys_35397c8d5ce15242c48546bdd6620174_26 = [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_26  = 0;
$fe_i_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_key_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_val_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_first_val_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_last_val_35397c8d5ce15242c48546bdd6620174_26 = 0;
if ( !isset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_26 ) ) $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_26 = [];
$fe_variable_stack_35397c8d5ce15242c48546bdd6620174_26[] = @compact( 'fe_array_35397c8d5ce15242c48546bdd6620174_26', 'fe_array_keys_35397c8d5ce15242c48546bdd6620174_26', 'fe_n_items_35397c8d5ce15242c48546bdd6620174_26', 'fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_26', 'fe_i_35397c8d5ce15242c48546bdd6620174_26', 'fe_key_35397c8d5ce15242c48546bdd6620174_26', 'fe_val_35397c8d5ce15242c48546bdd6620174_26', 'fe_offset_35397c8d5ce15242c48546bdd6620174_26', 'fe_max_35397c8d5ce15242c48546bdd6620174_26', 'fe_reverse_35397c8d5ce15242c48546bdd6620174_26', 'fe_first_val_35397c8d5ce15242c48546bdd6620174_26', 'fe_last_val_35397c8d5ce15242c48546bdd6620174_26' );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_26 );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_26 );
$fe_array_35397c8d5ce15242c48546bdd6620174_26 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_grouped', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_grouped'] : null;
if (! isset( $fe_array_35397c8d5ce15242c48546bdd6620174_26 ) ) $fe_array_35397c8d5ce15242c48546bdd6620174_26 = NULL;
while ( is_object( $fe_array_35397c8d5ce15242c48546bdd6620174_26 ) and method_exists( $fe_array_35397c8d5ce15242c48546bdd6620174_26, 'templateValue' ) )
    $fe_array_35397c8d5ce15242c48546bdd6620174_26 = $fe_array_35397c8d5ce15242c48546bdd6620174_26->templateValue();

$fe_array_keys_35397c8d5ce15242c48546bdd6620174_26 = is_array( $fe_array_35397c8d5ce15242c48546bdd6620174_26 ) ? array_keys( $fe_array_35397c8d5ce15242c48546bdd6620174_26 ) : [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_26 = count( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_26 );
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_26 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_26 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_26 - $fe_offset_35397c8d5ce15242c48546bdd6620174_26;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_26 = false;
if ( $fe_offset_35397c8d5ce15242c48546bdd6620174_26 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_26 >= $fe_n_items_35397c8d5ce15242c48546bdd6620174_26 )
{
    $fe_offset_35397c8d5ce15242c48546bdd6620174_26 = ( $fe_offset_35397c8d5ce15242c48546bdd6620174_26 < 0 ) ? 0 : $fe_n_items_35397c8d5ce15242c48546bdd6620174_26;
    if ( $fe_n_items_35397c8d5ce15242c48546bdd6620174_26 || $fe_offset_35397c8d5ce15242c48546bdd6620174_26 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_35397c8d5ce15242c48546bdd6620174_26'. Array count: $fe_n_items_35397c8d5ce15242c48546bdd6620174_26");   
}
}
if ( $fe_max_35397c8d5ce15242c48546bdd6620174_26 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_26 + $fe_max_35397c8d5ce15242c48546bdd6620174_26 > $fe_n_items_35397c8d5ce15242c48546bdd6620174_26 )
{
    if ( $fe_max_35397c8d5ce15242c48546bdd6620174_26 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_35397c8d5ce15242c48546bdd6620174_26");
    $fe_max_35397c8d5ce15242c48546bdd6620174_26 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_26 - $fe_offset_35397c8d5ce15242c48546bdd6620174_26;
}
if ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_26 )
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_26 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_26 - 1 - $fe_offset_35397c8d5ce15242c48546bdd6620174_26;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_26  = 0;
}
else
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_26 = $fe_offset_35397c8d5ce15242c48546bdd6620174_26;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_26  = $fe_n_items_35397c8d5ce15242c48546bdd6620174_26 - 1;
}
// foreach
for ( $fe_i_35397c8d5ce15242c48546bdd6620174_26 = $fe_first_val_35397c8d5ce15242c48546bdd6620174_26; $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_26 < $fe_max_35397c8d5ce15242c48546bdd6620174_26 && ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_26 ? $fe_i_35397c8d5ce15242c48546bdd6620174_26 >= $fe_last_val_35397c8d5ce15242c48546bdd6620174_26 : $fe_i_35397c8d5ce15242c48546bdd6620174_26 <= $fe_last_val_35397c8d5ce15242c48546bdd6620174_26 ); $fe_reverse_35397c8d5ce15242c48546bdd6620174_26 ? $fe_i_35397c8d5ce15242c48546bdd6620174_26-- : $fe_i_35397c8d5ce15242c48546bdd6620174_26++ )
{
$fe_key_35397c8d5ce15242c48546bdd6620174_26 = $fe_array_keys_35397c8d5ce15242c48546bdd6620174_26[$fe_i_35397c8d5ce15242c48546bdd6620174_26];
$fe_val_35397c8d5ce15242c48546bdd6620174_26 = $fe_array_35397c8d5ce15242c48546bdd6620174_26[$fe_key_35397c8d5ce15242c48546bdd6620174_26];
$vars[$rootNamespace]['related_objects_array'] = $fe_val_35397c8d5ce15242c48546bdd6620174_26;
$vars[$rootNamespace]['attribute_id'] = $fe_key_35397c8d5ce15242c48546bdd6620174_26;
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchClassAttribute' ),
  array_values( array(     'attribute_id' => $var1,
    'version_id' => 0 ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'attr', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['attr'] = $var;
    unset( $var );
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// foreach begins
$skipDelimiter = true;
$fe_array_35397c8d5ce15242c48546bdd6620174_25 = [];
$fe_array_keys_35397c8d5ce15242c48546bdd6620174_25 = [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_25  = 0;
$fe_i_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_key_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_val_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_first_val_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_last_val_35397c8d5ce15242c48546bdd6620174_25 = 0;
if ( !isset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_25 ) ) $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_25 = [];
$fe_variable_stack_35397c8d5ce15242c48546bdd6620174_25[] = @compact( 'fe_array_35397c8d5ce15242c48546bdd6620174_25', 'fe_array_keys_35397c8d5ce15242c48546bdd6620174_25', 'fe_n_items_35397c8d5ce15242c48546bdd6620174_25', 'fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_25', 'fe_i_35397c8d5ce15242c48546bdd6620174_25', 'fe_key_35397c8d5ce15242c48546bdd6620174_25', 'fe_val_35397c8d5ce15242c48546bdd6620174_25', 'fe_offset_35397c8d5ce15242c48546bdd6620174_25', 'fe_max_35397c8d5ce15242c48546bdd6620174_25', 'fe_reverse_35397c8d5ce15242c48546bdd6620174_25', 'fe_first_val_35397c8d5ce15242c48546bdd6620174_25', 'fe_last_val_35397c8d5ce15242c48546bdd6620174_25' );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_25 );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_25 );
$fe_array_35397c8d5ce15242c48546bdd6620174_25 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_array'] : null;
if (! isset( $fe_array_35397c8d5ce15242c48546bdd6620174_25 ) ) $fe_array_35397c8d5ce15242c48546bdd6620174_25 = NULL;
while ( is_object( $fe_array_35397c8d5ce15242c48546bdd6620174_25 ) and method_exists( $fe_array_35397c8d5ce15242c48546bdd6620174_25, 'templateValue' ) )
    $fe_array_35397c8d5ce15242c48546bdd6620174_25 = $fe_array_35397c8d5ce15242c48546bdd6620174_25->templateValue();

$fe_array_keys_35397c8d5ce15242c48546bdd6620174_25 = is_array( $fe_array_35397c8d5ce15242c48546bdd6620174_25 ) ? array_keys( $fe_array_35397c8d5ce15242c48546bdd6620174_25 ) : [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_25 = count( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_25 );
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_25 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_25 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_25 - $fe_offset_35397c8d5ce15242c48546bdd6620174_25;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_25 = false;
if ( $fe_offset_35397c8d5ce15242c48546bdd6620174_25 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_25 >= $fe_n_items_35397c8d5ce15242c48546bdd6620174_25 )
{
    $fe_offset_35397c8d5ce15242c48546bdd6620174_25 = ( $fe_offset_35397c8d5ce15242c48546bdd6620174_25 < 0 ) ? 0 : $fe_n_items_35397c8d5ce15242c48546bdd6620174_25;
    if ( $fe_n_items_35397c8d5ce15242c48546bdd6620174_25 || $fe_offset_35397c8d5ce15242c48546bdd6620174_25 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_35397c8d5ce15242c48546bdd6620174_25'. Array count: $fe_n_items_35397c8d5ce15242c48546bdd6620174_25");   
}
}
if ( $fe_max_35397c8d5ce15242c48546bdd6620174_25 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_25 + $fe_max_35397c8d5ce15242c48546bdd6620174_25 > $fe_n_items_35397c8d5ce15242c48546bdd6620174_25 )
{
    if ( $fe_max_35397c8d5ce15242c48546bdd6620174_25 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_35397c8d5ce15242c48546bdd6620174_25");
    $fe_max_35397c8d5ce15242c48546bdd6620174_25 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_25 - $fe_offset_35397c8d5ce15242c48546bdd6620174_25;
}
if ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_25 )
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_25 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_25 - 1 - $fe_offset_35397c8d5ce15242c48546bdd6620174_25;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_25  = 0;
}
else
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_25 = $fe_offset_35397c8d5ce15242c48546bdd6620174_25;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_25  = $fe_n_items_35397c8d5ce15242c48546bdd6620174_25 - 1;
}
// foreach
for ( $fe_i_35397c8d5ce15242c48546bdd6620174_25 = $fe_first_val_35397c8d5ce15242c48546bdd6620174_25; $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_25 < $fe_max_35397c8d5ce15242c48546bdd6620174_25 && ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_25 ? $fe_i_35397c8d5ce15242c48546bdd6620174_25 >= $fe_last_val_35397c8d5ce15242c48546bdd6620174_25 : $fe_i_35397c8d5ce15242c48546bdd6620174_25 <= $fe_last_val_35397c8d5ce15242c48546bdd6620174_25 ); $fe_reverse_35397c8d5ce15242c48546bdd6620174_25 ? $fe_i_35397c8d5ce15242c48546bdd6620174_25-- : $fe_i_35397c8d5ce15242c48546bdd6620174_25++ )
{
$fe_key_35397c8d5ce15242c48546bdd6620174_25 = $fe_array_keys_35397c8d5ce15242c48546bdd6620174_25[$fe_i_35397c8d5ce15242c48546bdd6620174_25];
$fe_val_35397c8d5ce15242c48546bdd6620174_25 = $fe_array_35397c8d5ce15242c48546bdd6620174_25[$fe_key_35397c8d5ce15242c48546bdd6620174_25];
$vars[$rootNamespace]['object'] = $fe_val_35397c8d5ce15242c48546bdd6620174_25;
$text .= '                <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tr_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tr_class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_read' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_view_embed' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '                    <td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'content_class' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'object',
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
          0 => 3,
          1 => 'content_class',
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
          0 => 3,
          1 => 'name',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'wash',
      ),
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

$text .= '&nbsp;';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
$vars[$namespace]['object'] = $var;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'id' );
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/text_linked-3ed82c9ce6b2af24c31e7a912bcca601.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/content/view/text_linked.tpl' );
include( '' . 'var/site/cache/template/compiled/text_linked-3ed82c9ce6b2af24c31e7a912bcca601.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/content/view/text_linked.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $vars[$namespace]['object'] );
$text .= '</td>
                    <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'content_class' );
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

$text .= '</td>
                ';
}
else
{
$text .= '                    <td colspan="2"><em>You are not allowed to view the related object</em></td>
                ';
}
unset( $if_cond );
// if ends

$text .= '                <td>
                    ';
unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_148 );
unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 );
unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 );
$elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 ) ) $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 = NULL;
while ( is_object( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 ) and method_exists( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481, 'templateValue' ) )
    $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 = $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481->templateValue();
while ( is_object( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 ) and method_exists( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481, 'templateValue' ) )
    $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 = $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481->templateValue();
$elseif_cond_35397c8d5ce15242c48546bdd6620174_148 = ( ( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 ) == ( 0 ) );
unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_1481 );
if (! isset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_148 ) ) $elseif_cond_35397c8d5ce15242c48546bdd6620174_148 = NULL;
while ( is_object( $elseif_cond_35397c8d5ce15242c48546bdd6620174_148 ) and method_exists( $elseif_cond_35397c8d5ce15242c48546bdd6620174_148, 'templateValue' ) )
    $elseif_cond_35397c8d5ce15242c48546bdd6620174_148 = $elseif_cond_35397c8d5ce15242c48546bdd6620174_148->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) != ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_id_typed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_id_typed'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'attribute' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if( is_string( $if_cond3 ) )
{
  $if_cond2 = ( mb_strpos( $if_cond3, $if_cond4 ) !== false );
}
else if ( is_array( $if_cond3 ) )
{
  $if_cond2 = in_array( $if_cond4, $if_cond3 );
}
else
{
$if_cond2 = false;
}unset( $if_cond3, $if_cond4 );
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
$text .= '                        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
$var1 = compiledFetchAttribute( $var, 'attribute' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ( ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attr', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attr'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' )
                    ';
}
elseif ( $elseif_cond_35397c8d5ce15242c48546bdd6620174_148 )
{
$text .= '                        ';
// def $relation_name_array
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 101,
    1 => 24,
    2 => 6253,
  ),
  1 => 
  array (
    0 => 101,
    1 => 58,
    2 => 6287,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', array (
), $rootNamespace );
}

$text .= '                        ';
// foreach begins
$skipDelimiter = true;
$fe_array_35397c8d5ce15242c48546bdd6620174_24 = [];
$fe_array_keys_35397c8d5ce15242c48546bdd6620174_24 = [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_24  = 0;
$fe_i_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_key_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_val_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_first_val_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_last_val_35397c8d5ce15242c48546bdd6620174_24 = 0;
if ( !isset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_24 ) ) $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_24 = [];
$fe_variable_stack_35397c8d5ce15242c48546bdd6620174_24[] = @compact( 'fe_array_35397c8d5ce15242c48546bdd6620174_24', 'fe_array_keys_35397c8d5ce15242c48546bdd6620174_24', 'fe_n_items_35397c8d5ce15242c48546bdd6620174_24', 'fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_24', 'fe_i_35397c8d5ce15242c48546bdd6620174_24', 'fe_key_35397c8d5ce15242c48546bdd6620174_24', 'fe_val_35397c8d5ce15242c48546bdd6620174_24', 'fe_offset_35397c8d5ce15242c48546bdd6620174_24', 'fe_max_35397c8d5ce15242c48546bdd6620174_24', 'fe_reverse_35397c8d5ce15242c48546bdd6620174_24', 'fe_first_val_35397c8d5ce15242c48546bdd6620174_24', 'fe_last_val_35397c8d5ce15242c48546bdd6620174_24' );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_24 );
unset( $fe_array_35397c8d5ce15242c48546bdd6620174_24 );
$fe_array_35397c8d5ce15242c48546bdd6620174_24 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_id_typed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_id_typed'] : null;
if (! isset( $fe_array_35397c8d5ce15242c48546bdd6620174_24 ) ) $fe_array_35397c8d5ce15242c48546bdd6620174_24 = NULL;
while ( is_object( $fe_array_35397c8d5ce15242c48546bdd6620174_24 ) and method_exists( $fe_array_35397c8d5ce15242c48546bdd6620174_24, 'templateValue' ) )
    $fe_array_35397c8d5ce15242c48546bdd6620174_24 = $fe_array_35397c8d5ce15242c48546bdd6620174_24->templateValue();

$fe_array_keys_35397c8d5ce15242c48546bdd6620174_24 = is_array( $fe_array_35397c8d5ce15242c48546bdd6620174_24 ) ? array_keys( $fe_array_35397c8d5ce15242c48546bdd6620174_24 ) : [];
$fe_n_items_35397c8d5ce15242c48546bdd6620174_24 = count( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_24 );
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_offset_35397c8d5ce15242c48546bdd6620174_24 = 0;
$fe_max_35397c8d5ce15242c48546bdd6620174_24 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_24 - $fe_offset_35397c8d5ce15242c48546bdd6620174_24;
$fe_reverse_35397c8d5ce15242c48546bdd6620174_24 = false;
if ( $fe_offset_35397c8d5ce15242c48546bdd6620174_24 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_24 >= $fe_n_items_35397c8d5ce15242c48546bdd6620174_24 )
{
    $fe_offset_35397c8d5ce15242c48546bdd6620174_24 = ( $fe_offset_35397c8d5ce15242c48546bdd6620174_24 < 0 ) ? 0 : $fe_n_items_35397c8d5ce15242c48546bdd6620174_24;
    if ( $fe_n_items_35397c8d5ce15242c48546bdd6620174_24 || $fe_offset_35397c8d5ce15242c48546bdd6620174_24 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_35397c8d5ce15242c48546bdd6620174_24'. Array count: $fe_n_items_35397c8d5ce15242c48546bdd6620174_24");   
}
}
if ( $fe_max_35397c8d5ce15242c48546bdd6620174_24 < 0 || $fe_offset_35397c8d5ce15242c48546bdd6620174_24 + $fe_max_35397c8d5ce15242c48546bdd6620174_24 > $fe_n_items_35397c8d5ce15242c48546bdd6620174_24 )
{
    if ( $fe_max_35397c8d5ce15242c48546bdd6620174_24 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_35397c8d5ce15242c48546bdd6620174_24");
    $fe_max_35397c8d5ce15242c48546bdd6620174_24 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_24 - $fe_offset_35397c8d5ce15242c48546bdd6620174_24;
}
if ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_24 )
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_24 = $fe_n_items_35397c8d5ce15242c48546bdd6620174_24 - 1 - $fe_offset_35397c8d5ce15242c48546bdd6620174_24;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_24  = 0;
}
else
{
    $fe_first_val_35397c8d5ce15242c48546bdd6620174_24 = $fe_offset_35397c8d5ce15242c48546bdd6620174_24;
    $fe_last_val_35397c8d5ce15242c48546bdd6620174_24  = $fe_n_items_35397c8d5ce15242c48546bdd6620174_24 - 1;
}
// foreach
for ( $fe_i_35397c8d5ce15242c48546bdd6620174_24 = $fe_first_val_35397c8d5ce15242c48546bdd6620174_24; $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_24 < $fe_max_35397c8d5ce15242c48546bdd6620174_24 && ( $fe_reverse_35397c8d5ce15242c48546bdd6620174_24 ? $fe_i_35397c8d5ce15242c48546bdd6620174_24 >= $fe_last_val_35397c8d5ce15242c48546bdd6620174_24 : $fe_i_35397c8d5ce15242c48546bdd6620174_24 <= $fe_last_val_35397c8d5ce15242c48546bdd6620174_24 ); $fe_reverse_35397c8d5ce15242c48546bdd6620174_24 ? $fe_i_35397c8d5ce15242c48546bdd6620174_24-- : $fe_i_35397c8d5ce15242c48546bdd6620174_24++ )
{
$fe_key_35397c8d5ce15242c48546bdd6620174_24 = $fe_array_keys_35397c8d5ce15242c48546bdd6620174_24[$fe_i_35397c8d5ce15242c48546bdd6620174_24];
$fe_val_35397c8d5ce15242c48546bdd6620174_24 = $fe_array_35397c8d5ce15242c48546bdd6620174_24[$fe_key_35397c8d5ce15242c48546bdd6620174_24];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_35397c8d5ce15242c48546bdd6620174_24;
$vars[$rootNamespace]['relation_type'] = $fe_key_35397c8d5ce15242c48546bdd6620174_24;
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'attribute' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
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
$text .= '                                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                                ';
}
unset( $if_cond );
// if ends

$text .= '                            ';
}
unset( $if_cond );
// if ends

$text .= '                        ';
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_24++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_24 ) ) extract( array_pop( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_24 ) );

else
{

unset( $fe_array_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_n_items_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_i_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_key_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_val_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_offset_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_max_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_reverse_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_first_val_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_last_val_35397c8d5ce15242c48546bdd6620174_24 );

unset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_24 );

}

// foreach ends
$text .= '                        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                        ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '                    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_35397c8d5ce15242c48546bdd6620174_148 );

$text .= '                </td>
                </tr>
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tr_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tr_class'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'bdark' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tr_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tr_class'] = 'bglight';
}
$text .= '                ';
}
else
{
$text .= '                    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tr_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tr_class'] = 'bgdark';
}
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_25++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_25 ) ) extract( array_pop( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_25 ) );

else
{

unset( $fe_array_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_n_items_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_i_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_key_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_val_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_offset_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_max_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_reverse_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_first_val_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_last_val_35397c8d5ce15242c48546bdd6620174_25 );

unset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_25 );

}

// foreach ends
$text .= '        ';
$fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_26++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_26 ) ) extract( array_pop( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_26 ) );

else
{

unset( $fe_array_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_array_keys_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_n_items_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_n_items_processed_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_i_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_key_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_val_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_offset_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_max_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_reverse_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_first_val_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_last_val_35397c8d5ce15242c48546bdd6620174_26 );

unset( $fe_variable_stack_35397c8d5ce15242c48546bdd6620174_26 );

}

// foreach ends
$text .= '        ';
// undef $tr_class
$tpl->unsetLocalVariable( 'tr_class', $rootNamespace );

// undef $attr
$tpl->unsetLocalVariable( 'attr', $rootNamespace );

$text .= '    ';
}
else
{
$text .= '        <tr><td>The item being viewed is not used by any other objects.</td></tr>
    ';
}
unset( $if_cond );
// if ends

$text .= '    </table>
</div>
    ';
$oldRestoreIncludeArray_0770224dd9d07f0f6e2f5563ee7d7166 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_count'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_count', $vars[$namespace]['item_count'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_count'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_count', 'unset' );

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
$var = max( $var1,  $var2);
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_count'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $namespace, 'view_parameters', $vars[$namespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['view_parameters'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['node_id'] ) )
    $restoreIncludeArray[] = array( $namespace, 'node_id', $vars[$namespace]['node_id'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['node_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'node_id', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['node_id'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_limit'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_limit', $vars[$namespace]['item_limit'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_limit'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_limit', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_limit'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/google-f1805bfa40743b05ad12d572e3f7b128.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/navigator/google.tpl' );
include( '' . 'var/site/cache/template/compiled/google-f1805bfa40743b05ad12d572e3f7b128.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/navigator/google.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_0770224dd9d07f0f6e2f5563ee7d7166;


$setArray = $oldSetArray_232546e8eba578a00cbc22a42f09ab36;
$tpl->Level--;
?>
