<?php
// URI:       design:role/view.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/role/view.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_6e91272ee416551d36b9abe4df9f26a1 = isset( $setArray ) ? $setArray : array();
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

$text .= '<form name="role" method="post" action=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module'] : null;
$var3 = compiledFetchAttribute( $var2, 'functions' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'view' );
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
$var5 = compiledFetchAttribute( $var4, 'id' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '/' . $var4 . '/' );
unset( $var2, $var4 );
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

    <div class="context-block">

        
        <div class="box-header">
            <h1 class="context-title">';
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
      1 => 'normal',
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
            1 => 'design/admin/role/view',
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

$text .= '&nbsp;';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
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
$var1 = strtr( '%role_name [Role]', $var4 );
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

$text .= '</h1>
            <div class="header-mainline"></div>
            
        </div>

        
        <div class="box-content panel">

            <div class="context-attributes">

                <div class="block">
                    <label>Name:</label>
                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
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
                </div>

                <div class="block">
                    <fieldset>
                        <legend>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policies'] : null;
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
$var2 = array( '%policies_count' => $var3 );unset( $var3 );
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
$var = strtr( 'Policies (%policies_count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</legend>
                        ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policies'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                            <table class="list" cellspacing="0">
                                <tr>
                                    <th>Module</th>
                                    <th>Function</th>
                                    <th>Limitation</th>
                                </tr>
                                ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policies'] : null;
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
$vars[$currentNamespace]['Policies'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Policies'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '                                    <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Policies'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
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
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Policies'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'item' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'module_name' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '*' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                                <i>all modules </i>
                                            ';
}
else
{
$text .= '                                                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Policies'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'module_name' );
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
}
unset( $if_cond );
// if ends

$text .= '                                        </td>

                                        
                                        <td>
                                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Policies'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'item' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'function_name' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '*' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                                <i>all functions </i>
                                            ';
}
else
{
$text .= '                                                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Policies'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'function_name' );
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
}
unset( $if_cond );
// if ends

$text .= '                                        </td>

                                        
                                        <td>
                                            ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Policies'] : null;
$show1 = compiledFetchAttribute( $show, 'item' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'limitations' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                                                ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Policies'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'item' );
unset( $loopItem );
$loopItem = $loopItem1;
$loopItem1 = compiledFetchAttribute( $loopItem, 'limitations' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

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
$vars[$currentNamespace]['Limitations'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

if ( $currentIndex > 1 )
{
$text .= ', ';
}

$text .= '                                                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Limitations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Limitations'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'identifier' );
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

$text .= '(
                                                    ';
// foreach begins
$skipDelimiter = true;
$fe_array_94025ef38ae4bacf9029cab033971d19_1 = [];
$fe_array_keys_94025ef38ae4bacf9029cab033971d19_1 = [];
$fe_n_items_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_n_items_processed_94025ef38ae4bacf9029cab033971d19_1  = 0;
$fe_i_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_key_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_val_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_offset_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_max_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_reverse_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_first_val_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_last_val_94025ef38ae4bacf9029cab033971d19_1 = 0;
if ( !isset( $fe_variable_stack_94025ef38ae4bacf9029cab033971d19_1 ) ) $fe_variable_stack_94025ef38ae4bacf9029cab033971d19_1 = [];
$fe_variable_stack_94025ef38ae4bacf9029cab033971d19_1[] = @compact( 'fe_array_94025ef38ae4bacf9029cab033971d19_1', 'fe_array_keys_94025ef38ae4bacf9029cab033971d19_1', 'fe_n_items_94025ef38ae4bacf9029cab033971d19_1', 'fe_n_items_processed_94025ef38ae4bacf9029cab033971d19_1', 'fe_i_94025ef38ae4bacf9029cab033971d19_1', 'fe_key_94025ef38ae4bacf9029cab033971d19_1', 'fe_val_94025ef38ae4bacf9029cab033971d19_1', 'fe_offset_94025ef38ae4bacf9029cab033971d19_1', 'fe_max_94025ef38ae4bacf9029cab033971d19_1', 'fe_reverse_94025ef38ae4bacf9029cab033971d19_1', 'fe_first_val_94025ef38ae4bacf9029cab033971d19_1', 'fe_last_val_94025ef38ae4bacf9029cab033971d19_1' );
unset( $fe_array_94025ef38ae4bacf9029cab033971d19_1 );
unset( $fe_array_94025ef38ae4bacf9029cab033971d19_1 );
$fe_array_94025ef38ae4bacf9029cab033971d19_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Limitations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Limitations'] : null;
$fe_array_94025ef38ae4bacf9029cab033971d19_11 = compiledFetchAttribute( $fe_array_94025ef38ae4bacf9029cab033971d19_1, 'item' );
unset( $fe_array_94025ef38ae4bacf9029cab033971d19_1 );
$fe_array_94025ef38ae4bacf9029cab033971d19_1 = $fe_array_94025ef38ae4bacf9029cab033971d19_11;
$fe_array_94025ef38ae4bacf9029cab033971d19_11 = compiledFetchAttribute( $fe_array_94025ef38ae4bacf9029cab033971d19_1, 'values_as_array_with_names' );
unset( $fe_array_94025ef38ae4bacf9029cab033971d19_1 );
$fe_array_94025ef38ae4bacf9029cab033971d19_1 = $fe_array_94025ef38ae4bacf9029cab033971d19_11;
if (! isset( $fe_array_94025ef38ae4bacf9029cab033971d19_1 ) ) $fe_array_94025ef38ae4bacf9029cab033971d19_1 = NULL;
while ( is_object( $fe_array_94025ef38ae4bacf9029cab033971d19_1 ) and method_exists( $fe_array_94025ef38ae4bacf9029cab033971d19_1, 'templateValue' ) )
    $fe_array_94025ef38ae4bacf9029cab033971d19_1 = $fe_array_94025ef38ae4bacf9029cab033971d19_1->templateValue();

$fe_array_keys_94025ef38ae4bacf9029cab033971d19_1 = is_array( $fe_array_94025ef38ae4bacf9029cab033971d19_1 ) ? array_keys( $fe_array_94025ef38ae4bacf9029cab033971d19_1 ) : [];
$fe_n_items_94025ef38ae4bacf9029cab033971d19_1 = count( $fe_array_keys_94025ef38ae4bacf9029cab033971d19_1 );
$fe_n_items_processed_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_offset_94025ef38ae4bacf9029cab033971d19_1 = 0;
$fe_max_94025ef38ae4bacf9029cab033971d19_1 = $fe_n_items_94025ef38ae4bacf9029cab033971d19_1 - $fe_offset_94025ef38ae4bacf9029cab033971d19_1;
$fe_reverse_94025ef38ae4bacf9029cab033971d19_1 = false;
if ( $fe_offset_94025ef38ae4bacf9029cab033971d19_1 < 0 || $fe_offset_94025ef38ae4bacf9029cab033971d19_1 >= $fe_n_items_94025ef38ae4bacf9029cab033971d19_1 )
{
    $fe_offset_94025ef38ae4bacf9029cab033971d19_1 = ( $fe_offset_94025ef38ae4bacf9029cab033971d19_1 < 0 ) ? 0 : $fe_n_items_94025ef38ae4bacf9029cab033971d19_1;
    if ( $fe_n_items_94025ef38ae4bacf9029cab033971d19_1 || $fe_offset_94025ef38ae4bacf9029cab033971d19_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_94025ef38ae4bacf9029cab033971d19_1'. Array count: $fe_n_items_94025ef38ae4bacf9029cab033971d19_1");   
}
}
if ( $fe_max_94025ef38ae4bacf9029cab033971d19_1 < 0 || $fe_offset_94025ef38ae4bacf9029cab033971d19_1 + $fe_max_94025ef38ae4bacf9029cab033971d19_1 > $fe_n_items_94025ef38ae4bacf9029cab033971d19_1 )
{
    if ( $fe_max_94025ef38ae4bacf9029cab033971d19_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_94025ef38ae4bacf9029cab033971d19_1");
    $fe_max_94025ef38ae4bacf9029cab033971d19_1 = $fe_n_items_94025ef38ae4bacf9029cab033971d19_1 - $fe_offset_94025ef38ae4bacf9029cab033971d19_1;
}
if ( $fe_reverse_94025ef38ae4bacf9029cab033971d19_1 )
{
    $fe_first_val_94025ef38ae4bacf9029cab033971d19_1 = $fe_n_items_94025ef38ae4bacf9029cab033971d19_1 - 1 - $fe_offset_94025ef38ae4bacf9029cab033971d19_1;
    $fe_last_val_94025ef38ae4bacf9029cab033971d19_1  = 0;
}
else
{
    $fe_first_val_94025ef38ae4bacf9029cab033971d19_1 = $fe_offset_94025ef38ae4bacf9029cab033971d19_1;
    $fe_last_val_94025ef38ae4bacf9029cab033971d19_1  = $fe_n_items_94025ef38ae4bacf9029cab033971d19_1 - 1;
}
// foreach
for ( $fe_i_94025ef38ae4bacf9029cab033971d19_1 = $fe_first_val_94025ef38ae4bacf9029cab033971d19_1; $fe_n_items_processed_94025ef38ae4bacf9029cab033971d19_1 < $fe_max_94025ef38ae4bacf9029cab033971d19_1 && ( $fe_reverse_94025ef38ae4bacf9029cab033971d19_1 ? $fe_i_94025ef38ae4bacf9029cab033971d19_1 >= $fe_last_val_94025ef38ae4bacf9029cab033971d19_1 : $fe_i_94025ef38ae4bacf9029cab033971d19_1 <= $fe_last_val_94025ef38ae4bacf9029cab033971d19_1 ); $fe_reverse_94025ef38ae4bacf9029cab033971d19_1 ? $fe_i_94025ef38ae4bacf9029cab033971d19_1-- : $fe_i_94025ef38ae4bacf9029cab033971d19_1++ )
{
$fe_key_94025ef38ae4bacf9029cab033971d19_1 = $fe_array_keys_94025ef38ae4bacf9029cab033971d19_1[$fe_i_94025ef38ae4bacf9029cab033971d19_1];
$fe_val_94025ef38ae4bacf9029cab033971d19_1 = $fe_array_94025ef38ae4bacf9029cab033971d19_1[$fe_key_94025ef38ae4bacf9029cab033971d19_1];
$vars[$rootNamespace]['limitation_value'] = $fe_val_94025ef38ae4bacf9029cab033971d19_1;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ', ';
} // delimiter ends

$text .= '                                                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limitation_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limitation_value'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_data' );
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
$text .= '                                                            <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limitation_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limitation_value'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_data' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/view/full/' . $var3 );
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

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limitation_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limitation_value'] : null;
$var5 = compiledFetchAttribute( $var4, 'node_data' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'path_identification_string' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limitation_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limitation_value'] : null;
$var6 = compiledFetchAttribute( $var5, 'node_data' );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'class_identifier' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( '%path_string' => $var4, '%class_identifier' => $var5 );unset( $var4, $var5 );
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
$var1 = strtr( 'Path: \'/%path_string\', Class identifier: \'%class_identifier\'', $var4 );
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

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limitation_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limitation_value'] : null;
$var2 = compiledFetchAttribute( $var1, 'Name' );
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

$text .= '</a>
                                                        ';
}
else
{
$text .= '                                                            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limitation_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limitation_value'] : null;
$var2 = compiledFetchAttribute( $var1, 'Name' );
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
}
unset( $if_cond );
// if ends

$text .= '                                                                                                            ';
$fe_n_items_processed_94025ef38ae4bacf9029cab033971d19_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_94025ef38ae4bacf9029cab033971d19_1 ) ) extract( array_pop( $fe_variable_stack_94025ef38ae4bacf9029cab033971d19_1 ) );

else
{

unset( $fe_array_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_array_keys_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_n_items_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_n_items_processed_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_i_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_key_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_val_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_offset_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_max_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_reverse_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_first_val_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_last_val_94025ef38ae4bacf9029cab033971d19_1 );

unset( $fe_variable_stack_94025ef38ae4bacf9029cab033971d19_1 );

}

// foreach ends
$text .= ')
                                                                                                    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '                                            ';
}
else
{

unset( $show );

$text .= '                                                <i>No limitations</i>
                                            ';
}

$text .= '                                        </td>
                                    </tr>
                                ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '                            </table>
                        ';
}
else
{

unset( $show );

$text .= '                           <p>There are no policies set up for this role.</p>
                        ';
}

$text .= '                    </fieldset>
                </div>

            </div>

            

            <div class="controlbar">
                
                <div class="block">
                    <input class="btn btn-primary" type="submit" name="EditRoleButton" value="Edit" title="Edit this role." />
                </div>
                
            </div>

            <div class="context-block">
                <h2 class="context-title">';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_array'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var5Data = array( 'value' => $var5 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var5Data, false, false );
$var5 = $var5Data['value'];
unset( $var5Data );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( '%role_name' => $var4, '%users_count' => $var5 );unset( $var4, $var5 );
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
$var1 = strtr( 'Users and groups using the <%role_name> role (%users_count)', $var4 );
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

$text .= '</h2>

                ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_array'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                    <table class="list" cellspacing="0">
                        <tr>
                            <th class="tight"><i class="fa fa-check-square-o" onclick="ezjs_toggleCheckboxes( document.role, \'IDArray[]\' ); return false;"></i></th>
                            <th>User/group</th>
                            <th>Limitation</th>
                        </tr>
                        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_array'] : null;
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
$vars[$currentNamespace]['Users'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Users'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '                            <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">

                                
                                <td><input type="checkbox" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'user_role_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="IDArray[]" title="Select user or user group for removal." /></td>

                                
                                <td>
                                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'user_object' );
unset( $var );
$var = $var1;
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
      0 => 1,
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
        2 => 'Users',
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
          1 => 'item',
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
          1 => 'user_object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
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
    4 => 
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
    5 => 
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

$text .= '&nbsp;<a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'user_object' );
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'user_object' );
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

$text .= '</a>
                                </td>

                                
                                <td>
                                    ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$show1 = compiledFetchAttribute( $show, 'item' );
unset( $show );
$show = $show1;
$show1 = compiledFetchAttribute( $show, 'limit_ident' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                                     ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$show2 = compiledFetchAttribute( $show1, 'item' );
unset( $show1 );
$show1 = $show2;
$show2 = compiledFetchAttribute( $show1, 'limit_value' );
unset( $show1 );
$show1 = $show2;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show2 = $show1;
if ( is_string( $show2 ) )
{
  if ( "/" == '' )
    $show = false;
  else
    $show = ( mb_strpos( $show2, "/" ) === 0 );
}
else if( is_array( $show2 ) )
{
  $show = true;
if ( $show2[0] != "/")
    $show = false;
}unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                                          ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'limit_value' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
{
	$var = explode( "/", $var1 );
}
else if ( is_array( $var1 ) )
{
	$var = array( array_slice( $var1, 0, "/" ), array_slice( $var1, "/" ) );
}
else
{
	$var = null;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['limit_location_array'] = $var;
unset( $var );
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_location_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_location_array'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1Data = array( 'value' => $var1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var1Data, false, false );
$var1 = $var1Data['value'];
unset( $var1Data );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 - 2.000000;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['limit_location_pinpoint'] = $var;
unset( $var );
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_location_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_location_array'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_location_pinpoint', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_location_pinpoint'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['limit_node_id'] = $var;
unset( $var );
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array_values( array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['limit_node'] = $var;
unset( $var );
$text .= '                                          <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_node_id'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/view/full/' . $var3 );
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

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_node'] : null;
$var5 = compiledFetchAttribute( $var4, 'path_identification_string' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_node'] : null;
$var6 = compiledFetchAttribute( $var5, 'class_identifier' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( '%path_string' => $var4, '%class_identifier' => $var5 );unset( $var4, $var5 );
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
$var1 = strtr( 'Path: \'/%path_string\', Class identifier: \'%class_identifier\'', $var4 );
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

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'limit_ident' );
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

$text .= ':&nbsp;"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_node'] : null;
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

$text .= '"&nbsp;(';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'limit_value' );
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

$text .= ')</a>
                                          ';
unset( $vars[$currentNamespace]['limit_location_array'] );
unset( $vars[$currentNamespace]['limit_location_pinpoint'] );
unset( $vars[$currentNamespace]['limit_node_id'] );
unset( $vars[$currentNamespace]['limit_node'] );
$text .= '                                      ';
}
else
{

unset( $show );

$text .= '                                          ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'limit_value' );
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
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['limit_section'] = $var;
unset( $var );
$text .= '                                          <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var4 = compiledFetchAttribute( $var3, 'item' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'limit_value' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/section/view/' . $var3 );
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'limit_ident' );
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

$text .= ':&nbsp;"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit_section'] : null;
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

$text .= '"&nbsp;(';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Users', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Users'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'limit_value' );
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

$text .= ')</a>
                                          ';
unset( $vars[$currentNamespace]['limit_section'] );
$text .= '                                      ';
}

$text .= '                                    ';
}
else
{

unset( $show );

$text .= '                                    <i>No limitations</i>
                                    ';
}

$text .= '                                </td>

                            </tr>
                        ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '                    </table>
                ';
}
else
{

unset( $show );

$text .= '                    <div class="block">
                        <p>
                        This role is not assigned to any users or user groups.
                        </p>
                    </div>
                ';
}

$text .= '
                <div class="controlbar">
                    
                    <div class="block">

                        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_array'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            <input class="btn btn-default" type="submit" name="RemoveRoleAssignmentButton" value="Remove selected" title="Remove selected users and/or user groups." />
                        ';
}
else
{
$text .= '                            <input class="btn btn-default" type="submit" name="RemoveRoleAssignmentButton" value="Remove selected" disabled="disabled" />
                        ';
}
unset( $if_cond );
// if ends

$text .= '
                        <input class="btn btn-default" type="submit" name="AssignRoleButton" value="Assign" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
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

$text .= '" />
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <select class="form-control" name="AssignRoleType" title="Select limitation.">
                                <option value="subtree">Subtree</option>
                                <option value="section">Section</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-default" type="submit" name="AssignRoleLimitedButton" value="Assign with limitation" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'role', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['role'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
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
$var1 = strtr( 'Assign the <%role_name> role with limitation (specified to the left) to a user or a user group.', $var4 );
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

$text .= '" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</form>
';

$setArray = $oldSetArray_6e91272ee416551d36b9abe4df9f26a1;
$tpl->Level--;
?>
