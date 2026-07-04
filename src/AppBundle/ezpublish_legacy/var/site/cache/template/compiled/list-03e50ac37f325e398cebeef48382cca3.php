<?php
// URI:       design:role/list.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/role/list.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_6312e9118fa4547854f845289848873d = isset( $setArray ) ? $setArray : array();
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

$text .= '<form name="roles" action=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module'] : null;
$var3 = compiledFetchAttribute( $var2, 'functions' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'list' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'uri' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/' );
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

$text .= ' method="post" >

    ';
unset( $var );
unset( $var1 );
unset( $var2 );
$var2 = eZPreferences::value( "admin_role_list_limit" );
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
$vars[$currentNamespace]['number_of_items'] = $var;
unset( $var );
$text .= '
    <div class="context-block">
        
        <div class="box-header">
            <h1 class="context-title">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%role_count' => $var3 );unset( $var3 );
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
$var = strtr( 'Roles (%role_count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h1>
            <div class="header-mainline"></div>
            
        </div>

        
        <div class="box-content panel">

            
            <div class="context-toolbar">
                <div class="button-left">
                    <p class="btn-group">
                        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_items'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case 25:
    {
$text .= '                                <a class="btn btn-default btn-sm" href="/user/preferences/set/admin_role_list_limit/1">10</a>
                                <span  class="btn btn-default btn-sm active">25</span>
                                <a class="btn btn-default btn-sm" href="/user/preferences/set/admin_role_list_limit/3">50</a>
                            ';
    } break;
    case 50:
    {
$text .= '                                <a class="btn btn-default btn-sm" href="/user/preferences/set/admin_role_list_limit/1">10</a>
                                <a class="btn btn-default btn-sm" href="/user/preferences/set/admin_role_list_limit/2">25</a>
                                <span class="btn btn-default btn-sm active">50</span>
                            ';
    } break;
    default:
    {
$text .= '                                <span class="btn btn-default btn-sm active">10</span>
                                <a class="btn btn-default btn-sm" href="/user/preferences/set/admin_role_list_limit/2">25</a>
                                <a class="btn btn-default btn-sm" href="/user/preferences/set/admin_role_list_limit/3">50</a>
                            ';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '                    </p>
                </div>
                <div class="float-break"></div>
            </div>

            <table class="list" cellspacing="0">
                <tr>
                    <th class="tight"><i class="fa fa-check-square-o" onclick="ezjs_toggleCheckboxes( document.roles, \'DeleteIDArray[]\' ); return false;"></i></th>
                    <th>Name</th>
                    <th class="tight">&nbsp;</th>
                    <th class="tight">&nbsp;</th>
                    <th class="tight">&nbsp;</th>
                </tr>

                ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'roles', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['roles'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
);
if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
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

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Roles'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Roles'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Roles', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Roles'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
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
$vars[$currentNamespace]['role_name'] = $var;
unset( $var );
$text .= '                    <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Roles', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Roles'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
                    <td class="tight"><input type="checkbox" name="DeleteIDArray[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Roles', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Roles'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
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

$text .= '" title="Select role for removal." /></td>
                    <td>';
unset( $var );
$var = 'role';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'Role',
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
            1 => 'design/admin/role/list',
            2 => false,
          ),
        ),
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

$text .= '&nbsp;<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Roles', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Roles'] : null;
$var4 = compiledFetchAttribute( $var3, 'item' );
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
$var1 = ( '/role/view/' . $var3 );
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role_name'] : null;
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

$text .= '</a></td>
                    <td><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Roles', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Roles'] : null;
$var4 = compiledFetchAttribute( $var3, 'item' );
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
$var1 = ( '/role/assign/' . $var3 );
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

$text .= '><i class="fa fa-plus-square-o" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role_name'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%role_name' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'Assign the <%role_name> role to a user or a user group.', $var4 );
unset( $var3, $var4, $var5, $var6 );
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

$text .= '"></i></a></td>
                    <td><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Roles', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Roles'] : null;
$var4 = compiledFetchAttribute( $var3, 'item' );
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
$var1 = ( '/role/copy/' . $var3 );
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

$text .= '><i class="fa fa-clone" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role_name'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%role_name' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'Copy the <%role_name> role.', $var4 );
unset( $var3, $var4, $var5, $var6 );
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

$text .= '"></i></a></td>
                    <td><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Roles', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Roles'] : null;
$var4 = compiledFetchAttribute( $var3, 'item' );
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
$var1 = ( '/role/edit/' . $var3 );
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

$text .= '><i class="fa fa-pencil-square-o" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role_name'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%role_name' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( 'Edit the <%role_name> role.', $var4 );
unset( $var3, $var4, $var5, $var6 );
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

$text .= '"></i></a></td>
                    </tr>
                ';
unset( $vars[$currentNamespace]['role_name'] );
$text .= '                ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '            </table>

            <div class="context-toolbar">
                ';
$oldRestoreIncludeArray_c98826d7f431f135f84148ef5fb63500 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri'] = '/role/list';
if ( isset( $namespace ) and isset( $vars[$namespace]['item_count'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_count', $vars[$namespace]['item_count'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_count'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_count', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role_count'] : null;
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
if ( isset( $namespace ) and isset( $vars[$namespace]['item_limit'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_limit', $vars[$namespace]['item_limit'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_limit'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_limit', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit'] : null;
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
if ( file_exists( 'var/site/cache/template/compiled/google-f95a2cb9d3f1c3300aa4deb15ce666b6.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/navigator/google.tpl' );
include( '' . 'var/site/cache/template/compiled/google-f95a2cb9d3f1c3300aa4deb15ce666b6.php' );
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
$restoreIncludeArray = $oldRestoreIncludeArray_c98826d7f431f135f84148ef5fb63500;

$text .= '                ';
unset( $vars[$currentNamespace]['number_of_items'] );
$text .= '            </div>

            

            <div class="controlbar">
            
                <div class="block">
                    <input class="btn btn-default" type="submit" name="RemoveButton" value="Remove selected" title="Remove selected roles." />
                    <input class="btn btn-default" type="submit" name="NewButton" value="New role" title="Create a new role." />
                </div>
            
            </div>
        </div>

    </div>

</form>
';

$setArray = $oldSetArray_6312e9118fa4547854f845289848873d;
$tpl->Level--;
?>
