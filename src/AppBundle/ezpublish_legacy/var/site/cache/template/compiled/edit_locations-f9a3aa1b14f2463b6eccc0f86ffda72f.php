<?php
// URI:       extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl
// Timestamp: 1782241051 (Tue Jun 23 18:57:31 UTC 2026)
$oldSetArray_1832a5d6f4955f36fdf05707d3c01e0b = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $vars[$currentNamespace]['exclude_remote_assignments'] ) )
{
    $vars[$currentNamespace]['exclude_remote_assignments'] = false;
    $setArray[$currentNamespace]['exclude_remote_assignments'] = true;
}

unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'exclude_remote_assignments', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['exclude_remote_assignments'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
$vars[$namespace]['exclude_remote_assignments'] = $var;
unset( $var );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
$vars[$namespace]['sort_fields'] = array (
  6 => 'Class identifier',
  7 => 'Class name',
  5 => 'Depth',
  3 => 'Modified',
  9 => 'Name',
  1 => 'Path String',
  8 => 'Priority',
  2 => 'Published',
  4 => 'Section',
);
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
$vars[$namespace]['has_top_levels'] = false;
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'parent_nodes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
$vars[$namespace]['existingParentNodes'] = $var;
unset( $var );
$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Node';

$text .= '
';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_node_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_node_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'parent_node' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) <= ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'has_top_levels', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['has_top_levels'] = true;
}
$text .= '    ';
}
unset( $if_cond );
// if ends

list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '

<div class="box-header">
    <div class="block"></div>
</div>

<div class="box-content">
    <h2 class="context-title">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_node_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_node_array'] : null;
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
$var2 = array( '%locations' => $var3 );unset( $var3 );
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
$var = strtr( 'Locations (%locations)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h2>

    <table class="list" cellspacing="0" >
    <tr>
    
        <th class="tight"><img src="/design/admin/images/toggle-button-16x16.gif" width="16" height="16" alt="Invert selection." title="Invert selection." onclick="ezjs_toggleCheckboxes( document.editform, \'AssignmentIDSelection[]\' ); return false;" /></th>
        <th>Location</th>
        <th>Sub items</th>
        <th>Sorting of sub items</th>
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'has_top_levels', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['has_top_levels'] : null;
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
$text .= '        <th>Current visibility</th>
        <th>Visibility after publishing</th>
        <th>Main</th>
        <th>&nbsp;</th>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </tr>

        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_node_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_node_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
);
if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$matchValue = true;
unset( $tmpMatchValue );
unset( $tmpMatchValue1 );
unset( $tmpMatchValue1 );
$tmpMatchValue1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$tmpMatchValue2 = compiledFetchAttribute( $tmpMatchValue1, 'parent_node' );
unset( $tmpMatchValue1 );
$tmpMatchValue1 = $tmpMatchValue2;
if (! isset( $tmpMatchValue1 ) ) $tmpMatchValue1 = NULL;
while ( is_object( $tmpMatchValue1 ) and method_exists( $tmpMatchValue1, 'templateValue' ) )
    $tmpMatchValue1 = $tmpMatchValue1->templateValue();
while ( is_object( $tmpMatchValue1 ) and method_exists( $tmpMatchValue1, 'templateValue' ) )
    $tmpMatchValue1 = $tmpMatchValue1->templateValue();
$tmpMatchValue = ( ( $tmpMatchValue1 ) <= ( 0 ) );
unset( $tmpMatchValue1 );
if (! isset( $tmpMatchValue ) ) $tmpMatchValue = NULL;
while ( is_object( $tmpMatchValue ) and method_exists( $tmpMatchValue, 'templateValue' ) )
    $tmpMatchValue = $tmpMatchValue->templateValue();

if ( $tmpMatchValue )
    $matchValue = false;
unset( $tmpMatchValue );
unset( $tmpMatchValue1 );
unset( $tmpMatchValue1 );
$tmpMatchValue1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'exclude_remote_assignments', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['exclude_remote_assignments'] : null;
if (! isset( $tmpMatchValue1 ) ) $tmpMatchValue1 = NULL;
while ( is_object( $tmpMatchValue1 ) and method_exists( $tmpMatchValue1, 'templateValue' ) )
    $tmpMatchValue1 = $tmpMatchValue1->templateValue();
while ( is_object( $tmpMatchValue1 ) and method_exists( $tmpMatchValue1, 'templateValue' ) )
    $tmpMatchValue1 = $tmpMatchValue1->templateValue();
unset( $tmpMatchValue2 );
unset( $tmpMatchValue3 );
unset( $tmpMatchValue3 );
$tmpMatchValue3 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$tmpMatchValue4 = compiledFetchAttribute( $tmpMatchValue3, 'remote_id' );
unset( $tmpMatchValue3 );
$tmpMatchValue3 = $tmpMatchValue4;
if (! isset( $tmpMatchValue3 ) ) $tmpMatchValue3 = NULL;
while ( is_object( $tmpMatchValue3 ) and method_exists( $tmpMatchValue3, 'templateValue' ) )
    $tmpMatchValue3 = $tmpMatchValue3->templateValue();
while ( is_object( $tmpMatchValue3 ) and method_exists( $tmpMatchValue3, 'templateValue' ) )
    $tmpMatchValue3 = $tmpMatchValue3->templateValue();
$tmpMatchValue2 = ( ( $tmpMatchValue3 ) > ( 0 ) );
unset( $tmpMatchValue3 );
if (! isset( $tmpMatchValue2 ) ) $tmpMatchValue2 = NULL;
while ( is_object( $tmpMatchValue2 ) and method_exists( $tmpMatchValue2, 'templateValue' ) )
    $tmpMatchValue2 = $tmpMatchValue2->templateValue();
if ( !$tmpMatchValue1 )
    $tmpMatchValue = false;
else if ( !$tmpMatchValue2 )
    $tmpMatchValue = false;
else
    $tmpMatchValue = $tmpMatchValue2;
unset( $tmpMatchValue1, $tmpMatchValue2 );
if (! isset( $tmpMatchValue ) ) $tmpMatchValue = NULL;
while ( is_object( $tmpMatchValue ) and method_exists( $tmpMatchValue, 'templateValue' ) )
    $tmpMatchValue = $tmpMatchValue->templateValue();

if ( $tmpMatchValue )
    $matchValue = false;
if ( $matchValue )
{

if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );

$vars[$currentNamespace]['sequence'] = $sequenceValue;
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '                        ';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'parent_node_obj' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['parent_node'] = $var;
unset( $var );
unset( $var );
$var = ( '<span title="' . 'This location will remain unchanged when the object is published.' . '">' );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['nameStart'] = $var;
unset( $var );
$vars[$currentNamespace]['nameEnd'] = '</span>';
$text .= '        ';
// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_create_operation' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
$var = ( '<ins title="' . 'This location will be created when the object is published.' . '">' );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'nameStart', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['nameStart'] = $var;
    unset( $var );
}
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'nameEnd', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['nameEnd'] = '</ins>';
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_move_operation' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
$var = ( '<span title="' . 'This location will be moved when the object is published.' . '">' );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'nameStart', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['nameStart'] = $var;
    unset( $var );
}
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'nameEnd', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['nameEnd'] = '</span>';
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_remove_operation' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
$var = ( '<del title="' . 'This location will be removed when the object is published.' . '">' );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'nameStart', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['nameStart'] = $var;
    unset( $var );
}
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'nameEnd', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['nameEnd'] = '</del>';
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        <tr class="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'sequence', $vars[$namespace] ) ) ? $vars[$namespace]['sequence'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">

        
        <td>
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'location_ui_enabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['location_ui_enabled'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = !( $if_cond2 );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'node' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond5 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'node' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'can_remove' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = !( $if_cond5 );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( !$if_cond3 )
    $if_cond2 = false;
else if ( !$if_cond4 )
    $if_cond2 = false;
else
    $if_cond2 = $if_cond4;
unset( $if_cond3, $if_cond4 );
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
$text .= '        <input type="checkbox" name="AssignmentIDSelection[]" value="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'parent_node' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="You do not have permission to remove this location." disabled="disabled" />
        ';
}
else
{
$text .= '        <input type="checkbox" name="AssignmentIDSelection[]" value="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'parent_node' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="Select location for removal." />
        ';
}
unset( $if_cond );
// if ends

$text .= '        </td>

        
        <td>
        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'nameStart', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['nameStart'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
        ';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'parent_node', $vars[$namespace] ) ) ? $vars[$namespace]['parent_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $match );
$match = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'parent_node', $vars[$namespace] ) ) ? $vars[$namespace]['parent_node'] : null;
$match1 = compiledFetchAttribute( $match, 'node_id' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case 1:
    {
$text .= '        Top node
        ';
    } break;
    default:
    {
$text .= '        ';
unset( $loopItem );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $loopItem );
$loopItem = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'parent_node', $vars[$namespace] ) ) ? $vars[$namespace]['parent_node'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'path' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Path';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        ';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node:Path";
else
    $namespace .= ':Node:Path';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
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

$text .= ' /
        ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '        ';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'parent_node', $vars[$namespace] ) ) ? $vars[$namespace]['parent_node'] : null;
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

$text .= '
        ';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= ' / ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
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

$text .= '
        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'nameEnd', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['nameEnd'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
        </td>

        
        <td>
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node' );
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
$text .= '        0
        ';
}
else
{
$text .= '        ';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'node' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'children_count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
        ';
}
unset( $if_cond );
// if ends

$text .= '        </td>

        
        <td>
        <select ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'location_ui_enabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['location_ui_enabled'] : null;
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
$text .= 'disabled="disabled" ';
}
unset( $if_cond );
// if ends

$text .= 'name="SortFieldMap[';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" title="Use this menu to set the sorting method for the sub items in this location.">
        ';
unset( $loopItem );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $loopItem );
$loopItem = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'sort_fields', $vars[$namespace] ) ) ? $vars[$namespace]['sort_fields'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Sort';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        <option value="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node:Sort";
else
    $namespace .= ':Node:Sort';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'key', $vars[$namespace] ) ) ? $vars[$namespace]['key'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node:Sort";
else
    $namespace .= ':Node:Sort';
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'key', $vars[$namespace] ) ) ? $vars[$namespace]['key'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'sort_field' );
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
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node:Sort";
else
    $namespace .= ':Node:Sort';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
        ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '        </select>
        <select ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'location_ui_enabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['location_ui_enabled'] : null;
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
$text .= 'disabled="disabled" ';
}
unset( $if_cond );
// if ends

$text .= 'name="SortOrderMap[';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ']" title="Use this menu to set the sorting direction for the sub items in this location.">
        <option value="1" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>Asc.</option>
        <option value="0" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>Desc.</option>
        </select>
        </td>

        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'has_top_levels', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['has_top_levels'] : null;
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
$text .= '
        
        <td>
        ';
// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'node' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'node' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'hidden_status_string' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
        ';
}
else
{
$text .= '            ';
// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'parent_node_obj' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_invisible' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                Hidden by parent
            ';
}
else
{
$text .= '                Visible
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        </td>

        
        <td>
        <select ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'location_ui_enabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['location_ui_enabled'] : null;
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
$text .= 'disabled="disabled" ';
}
unset( $if_cond );
// if ends

$text .= 'name="FutureNodeHiddenState_';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'parent_node', $vars[$namespace] ) ) ? $vars[$namespace]['parent_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <option value="unchanged" selected="selected">Unchanged</option>
        <option value="visible">Visible</option>
        <option value="hidden">Hidden</option>
        </select>
        </td>

        
        <td>
        <input ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'location_ui_enabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['location_ui_enabled'] : null;
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
$text .= 'disabled="disabled" ';
}
unset( $if_cond );
// if ends

$text .= 'type="radio" name="MainNodeID" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'main_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['main_node_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'parent_node' );
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
$text .= 'checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' value="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'parent_node' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" title="Use these radio buttons to specify the main location (main node) for the object being edited." />
        </td>

        
        <td>
        ';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '        ',
    3 => 
    array (
      0 => 
      array (
      ),
      1 => 
      array (
      ),
      2 => NULL,
    ),
  ),
  1 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '        <input ',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      1 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 2,
            1 => false,
            2 => 'disabled="disabled" ',
            3 => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => NULL,
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 4,
              1 => 
              array (
                0 => '',
                1 => 2,
                2 => 'location_ui_enabled',
              ),
              2 => false,
            ),
            1 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'not',
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 146,
            1 => 15,
            2 => 7375,
          ),
          1 => 
          array (
            0 => 146,
            1 => 42,
            2 => 7402,
          ),
          2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => 'type="image" name="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
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
                  1 => 'MoveNodeID_',
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
                    0 => 'Node',
                    1 => 2,
                    2 => 'item',
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
                      1 => 'parent_node',
                      2 => false,
                    ),
                  ),
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 146,
            1 => 83,
            2 => 7448,
          ),
          1 => 
          array (
            0 => 146,
            1 => 130,
            2 => 7495,
          ),
          2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '" src=',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'move.gif',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezimage',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 146,
            1 => 136,
            2 => 7503,
          ),
          1 => 
          array (
            0 => 146,
            1 => 154,
            2 => 7521,
          ),
          2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => ' value="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => 'Node',
              1 => 2,
              2 => 'item',
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
                1 => 'parent_node',
                2 => false,
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 146,
            1 => 162,
            2 => 7531,
          ),
          1 => 
          array (
            0 => 146,
            1 => 184,
            2 => 7553,
          ),
          2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '" title="',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Move to another location.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/content/edit',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 146,
            1 => 193,
            2 => 7564,
          ),
          1 => 
          array (
            0 => 146,
            1 => 256,
            2 => 7627,
          ),
          2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '" />
        ',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'in' => 
      array (
        0 => 
        array (
          0 => 4,
          1 => 
          array (
            0 => 'Node',
            1 => 2,
            2 => 'existingParentNodes',
          ),
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 145,
        1 => 8,
        2 => 7324,
      ),
      1 => 
      array (
        0 => 145,
        1 => 41,
        2 => 7357,
      ),
      2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
    ),
  ),
  2 => 
  array (
    0 => 2,
    1 => false,
    2 => '        ',
    3 => 
    array (
      0 => 
      array (
      ),
      1 => 
      array (
      ),
      2 => NULL,
    ),
  ),
  3 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '        ',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
      1 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 2,
            1 => false,
            2 => '        <input ',
            3 => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => NULL,
            ),
          ),
          1 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => 
              array (
                0 => 2,
                1 => false,
                2 => 'disabled="disabled" ',
                3 => 
                array (
                  0 => 
                  array (
                  ),
                  1 => 
                  array (
                  ),
                  2 => NULL,
                ),
              ),
            ),
            2 => 'if',
            3 => 
            array (
              'condition' => 
              array (
                0 => 
                array (
                  0 => 4,
                  1 => 
                  array (
                    0 => '',
                    1 => 2,
                    2 => 'location_ui_enabled',
                  ),
                  2 => false,
                ),
                1 => 
                array (
                  0 => 6,
                  1 => 
                  array (
                    0 => 'not',
                  ),
                  2 => false,
                ),
              ),
            ),
            4 => 
            array (
              0 => 
              array (
                0 => 150,
                1 => 15,
                2 => 7725,
              ),
              1 => 
              array (
                0 => 150,
                1 => 42,
                2 => 7752,
              ),
              2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
            ),
          ),
          2 => 
          array (
            0 => 2,
            1 => false,
            2 => 'type="image" name="',
            3 => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => NULL,
            ),
          ),
          3 => 
          array (
            0 => 3,
            1 => false,
            2 => 
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
                      1 => 'MoveNodeID_',
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
                        0 => 'Node',
                        1 => 2,
                        2 => 'item',
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
                          1 => 'parent_node',
                          2 => false,
                        ),
                      ),
                      2 => false,
                    ),
                  ),
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 150,
                1 => 83,
                2 => 7798,
              ),
              1 => 
              array (
                0 => 150,
                1 => 130,
                2 => 7845,
              ),
              2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
            ),
          ),
          4 => 
          array (
            0 => 2,
            1 => false,
            2 => '" src=',
            3 => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => NULL,
            ),
          ),
          5 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => 'move.gif',
                2 => false,
              ),
              1 => 
              array (
                0 => 6,
                1 => 
                array (
                  0 => 'ezimage',
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 150,
                1 => 136,
                2 => 7853,
              ),
              1 => 
              array (
                0 => 150,
                1 => 154,
                2 => 7871,
              ),
              2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
            ),
          ),
          6 => 
          array (
            0 => 2,
            1 => false,
            2 => ' value="',
            3 => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => NULL,
            ),
          ),
          7 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => 'Node',
                  1 => 2,
                  2 => 'item',
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
                    1 => 'parent_node',
                    2 => false,
                  ),
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 150,
                1 => 162,
                2 => 7881,
              ),
              1 => 
              array (
                0 => 150,
                1 => 184,
                2 => 7903,
              ),
              2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
            ),
          ),
          8 => 
          array (
            0 => 2,
            1 => false,
            2 => '" title="',
            3 => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => NULL,
            ),
          ),
          9 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => 'Move to another location.',
                2 => false,
              ),
              1 => 
              array (
                0 => 6,
                1 => 
                array (
                  0 => 'i18n',
                  1 => 
                  array (
                    0 => 
                    array (
                      0 => 1,
                      1 => 'design/admin/content/edit',
                      2 => false,
                    ),
                  ),
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 150,
                1 => 193,
                2 => 7914,
              ),
              1 => 
              array (
                0 => 150,
                1 => 256,
                2 => 7977,
              ),
              2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
            ),
          ),
          10 => 
          array (
            0 => 2,
            1 => false,
            2 => '" />
        ',
            3 => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => NULL,
            ),
          ),
          11 => 
          array (
            0 => 4,
            1 => false,
            2 => 'else',
            3 => 
            array (
            ),
            4 => 
            array (
              0 => 
              array (
                0 => 151,
                1 => 8,
                2 => 7992,
              ),
              1 => 
              array (
                0 => 151,
                1 => 12,
                2 => 7996,
              ),
              2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
            ),
          ),
          12 => 
          array (
            0 => 2,
            1 => false,
            2 => '        &nbsp;
        ',
            3 => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
              2 => NULL,
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 4,
              1 => 
              array (
                0 => 'Node',
                1 => 2,
                2 => 'item',
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
                  1 => 'from_node_id',
                  2 => false,
                ),
              ),
              2 => false,
            ),
            2 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'gt',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 2,
                    1 => 0,
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 149,
            1 => 8,
            2 => 7673,
          ),
          1 => 
          array (
            0 => 149,
            1 => 42,
            2 => 7707,
          ),
          2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '        ',
        3 => 
        array (
          0 => 
          array (
          ),
          1 => 
          array (
          ),
          2 => NULL,
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 148,
        1 => 8,
        2 => 7658,
      ),
      1 => 
      array (
        0 => 148,
        1 => 12,
        2 => 7662,
      ),
      2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '        ',
    3 => 
    array (
      0 => 
      array (
      ),
      1 => 
      array (
      ),
      2 => NULL,
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => 'Node',
        1 => 2,
        2 => 'item',
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
          1 => 'parent_node',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 144,
    1 => 8,
    2 => 7278,
  ),
  1 => 
  array (
    0 => 144,
    1 => 43,
    2 => 7313,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        </td>

        ';
}
unset( $if_cond );
// if ends

$text .= '
        </tr>
        ';
unset( $vars[$currentNamespace]['parent_node'] );
unset( $vars[$currentNamespace]['nameStart'] );
unset( $vars[$currentNamespace]['nameEnd'] );
$text .= '        ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

    }
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '     </table>


    <div class="controlbar">
    
        <div class="block">

            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'has_top_levels', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['has_top_levels'] : null;
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
$text .= '
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assigned_node_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assigned_node_array'] : null;
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
$if_cond1 = ( ( $if_cond2 ) >= ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'location_ui_enabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['location_ui_enabled'] : null;
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
$text .= '                <input class="button" type="submit" name="RemoveAssignmentButton" value="Remove selected" title="Remove selected locations." />
                ';
}
else
{
$text .= '                <input class="button-disabled" type="submit" name="RemoveAssignmentButton" value="Remove selected" disabled="disabled" />
                ';
}
unset( $if_cond );
// if ends

$text .= '
                <input ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'location_ui_enabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['location_ui_enabled'] : null;
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
$text .= 'disabled="disabled" class="button-disabled"';
}
else
{
$text .= 'class="button"';
}
unset( $if_cond );
// if ends

$text .= ' type="submit" name="BrowseNodeButton" value="Add locations" title="Add one or more locations for the object being edited." />

            ';
}
else
{
$text .= '                <input class="button-disabled" type="submit" name="RemoveAssignmentButton" value="Remove selected" disabled="disabled"  title="You cannot add or remove locations because the object being edited belongs to a top node." />
                <input class="button-disabled" type="submit" name="BrowseNodeButton" value="Add locations" disabled="disabled" title="You cannot add or remove locations because the object being edited belongs to a top node." />
                <input type="hidden" name="MainNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'main_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['main_node_id'] : null;
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

$text .= '        </div>


    </div>
</div>
';
$currentNamespace = array_pop( $namespaceStack );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $vars[$namespace]['exclude_remote_assignments'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $vars[$namespace]['sort_fields'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $vars[$namespace]['has_top_levels'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Node";
else
    $namespace .= ':Node';
unset( $vars[$namespace]['existingParentNodes'] );
if ( isset( $setArray[$currentNamespace]['exclude_remote_assignments'] ) )
{
unset( $vars[$currentNamespace]['exclude_remote_assignments'] );
}


$setArray = $oldSetArray_1832a5d6f4955f36fdf05707d3c01e0b;
$tpl->Level--;
?>
