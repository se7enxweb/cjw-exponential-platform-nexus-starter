<?php
// URI:       extension/ngsite/design/admin/templates/page_head.tpl
// Filename:  extension/ngsite/design/admin/templates/page_head.tpl
// Timestamp: 1782248323 (Tue Jun 23 20:58:43 UTC 2026)
$oldSetArray_041028b4dec9bd147e0704204bf62971 = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $vars[$currentNamespace]['enable_help'] ) )
{
    $vars[$currentNamespace]['enable_help'] = true;
    $setArray[$currentNamespace]['enable_help'] = true;
}

if ( !isset( $vars[$currentNamespace]['enable_link'] ) )
{
    $vars[$currentNamespace]['enable_link'] = true;
    $setArray[$currentNamespace]['enable_link'] = true;
}

if ( !isset( $vars[$currentNamespace]['disable_meta_language'] ) )
{
    $vars[$currentNamespace]['disable_meta_language'] = false;
    $setArray[$currentNamespace]['disable_meta_language'] = true;
}

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'path' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
$vars[$namespace]['path'] = $var;
unset( $var );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
$vars[$namespace]['reverse_path'] = array (
);
$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Path';

$text .= '  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'title_path' );
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
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'title_path' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'path', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['path'] = $var;
    unset( $var );
}
$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '  ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'path', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['path'] : null;
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
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'reverse_path', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['reverse_path'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( array( $var1 ), $var2 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'reverse_path', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['reverse_path'] = $var;
    unset( $var );
}
$text .= '  ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
unset( $loopItem );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $loopItem );
$loopItem = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'reverse_path', $vars[$namespace] ) ) ? $vars[$namespace]['reverse_path'] : null;
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

if ( $currentIndex > 1 )
{
$text .= ' / ';
}

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
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

list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= ' - ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$blockText = $text;
$vars[$rootNamespace]['site_title'] = $blockText;
unset( $blockText );

$text = array_pop( $textStack );
$currentNamespace = array_pop( $namespaceStack );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $vars[$namespace]['path'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $vars[$namespace]['reverse_path'] );
$text .= '
    <title>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site_title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site_title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</title>

    ';
unset( $show );
unset( $show1 );
unset( $show2 );
$namespace = 'Header';
unset( $show2 );
$show2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
$show1 = isset( $show2 );unset( $show2 );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
unset( $show2 );
unset( $show3 );
$namespace = 'Header';
unset( $show3 );
$show3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $show3 ) ) $show3 = NULL;
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
while ( is_object( $show3 ) and method_exists( $show3, 'templateValue' ) )
    $show3 = $show3->templateValue();
$show2 = is_array( $show3 );unset( $show3 );
if (! isset( $show2 ) ) $show2 = NULL;
while ( is_object( $show2 ) and method_exists( $show2, 'templateValue' ) )
    $show2 = $show2->templateValue();
if ( !$show1 )
    $show = false;
else if ( !$show2 )
    $show = false;
else
    $show = $show2;
unset( $show1, $show2 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '      ';
unset( $loopItem );
$namespace = 'Header';
unset( $loopItem );
$loopItem = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'ExtraData';

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

$text .= '      ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
      ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '    ';
}

$text .= '
    
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'redirect' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <meta http-equiv="Refresh" content="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var1 = compiledFetchAttribute( $var, 'redirect' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'timer' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '; URL=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var1 = compiledFetchAttribute( $var, 'redirect' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'location' );
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
// foreach begins
$skipDelimiter = true;
$fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 = [];
$fe_array_keys_25d77afd8edeb7a26c19a9ded9d83801_1 = [];
$fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_n_items_processed_25d77afd8edeb7a26c19a9ded9d83801_1  = 0;
$fe_i_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_key_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_val_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_max_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_reverse_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_first_val_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_last_val_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
if ( !isset( $fe_variable_stack_25d77afd8edeb7a26c19a9ded9d83801_1 ) ) $fe_variable_stack_25d77afd8edeb7a26c19a9ded9d83801_1 = [];
$fe_variable_stack_25d77afd8edeb7a26c19a9ded9d83801_1[] = @compact( 'fe_array_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_array_keys_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_n_items_processed_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_i_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_key_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_val_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_max_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_reverse_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_first_val_25d77afd8edeb7a26c19a9ded9d83801_1', 'fe_last_val_25d77afd8edeb7a26c19a9ded9d83801_1' );
unset( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 );
unset( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 );
$fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$fe_array_25d77afd8edeb7a26c19a9ded9d83801_11 = compiledFetchAttribute( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1, 'http_equiv' );
unset( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 );
$fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_array_25d77afd8edeb7a26c19a9ded9d83801_11;
if (! isset( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 ) ) $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 = NULL;
while ( is_object( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 ) and method_exists( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1, 'templateValue' ) )
    $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1->templateValue();

$fe_array_keys_25d77afd8edeb7a26c19a9ded9d83801_1 = is_array( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 ) ? array_keys( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 ) : [];
$fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 = count( $fe_array_keys_25d77afd8edeb7a26c19a9ded9d83801_1 );
$fe_n_items_processed_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 = 0;
$fe_max_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 - $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1;
$fe_reverse_25d77afd8edeb7a26c19a9ded9d83801_1 = false;
if ( $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 < 0 || $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 >= $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 )
{
    $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 = ( $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 < 0 ) ? 0 : $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1;
    if ( $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 || $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1'. Array count: $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1");   
}
}
if ( $fe_max_25d77afd8edeb7a26c19a9ded9d83801_1 < 0 || $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 + $fe_max_25d77afd8edeb7a26c19a9ded9d83801_1 > $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 )
{
    if ( $fe_max_25d77afd8edeb7a26c19a9ded9d83801_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_25d77afd8edeb7a26c19a9ded9d83801_1");
    $fe_max_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 - $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1;
}
if ( $fe_reverse_25d77afd8edeb7a26c19a9ded9d83801_1 )
{
    $fe_first_val_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 - 1 - $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1;
    $fe_last_val_25d77afd8edeb7a26c19a9ded9d83801_1  = 0;
}
else
{
    $fe_first_val_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1;
    $fe_last_val_25d77afd8edeb7a26c19a9ded9d83801_1  = $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 - 1;
}
// foreach
for ( $fe_i_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_first_val_25d77afd8edeb7a26c19a9ded9d83801_1; $fe_n_items_processed_25d77afd8edeb7a26c19a9ded9d83801_1 < $fe_max_25d77afd8edeb7a26c19a9ded9d83801_1 && ( $fe_reverse_25d77afd8edeb7a26c19a9ded9d83801_1 ? $fe_i_25d77afd8edeb7a26c19a9ded9d83801_1 >= $fe_last_val_25d77afd8edeb7a26c19a9ded9d83801_1 : $fe_i_25d77afd8edeb7a26c19a9ded9d83801_1 <= $fe_last_val_25d77afd8edeb7a26c19a9ded9d83801_1 ); $fe_reverse_25d77afd8edeb7a26c19a9ded9d83801_1 ? $fe_i_25d77afd8edeb7a26c19a9ded9d83801_1-- : $fe_i_25d77afd8edeb7a26c19a9ded9d83801_1++ )
{
$fe_key_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_array_keys_25d77afd8edeb7a26c19a9ded9d83801_1[$fe_i_25d77afd8edeb7a26c19a9ded9d83801_1];
$fe_val_25d77afd8edeb7a26c19a9ded9d83801_1 = $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1[$fe_key_25d77afd8edeb7a26c19a9ded9d83801_1];
$vars[$rootNamespace]['value'] = $fe_val_25d77afd8edeb7a26c19a9ded9d83801_1;
$vars[$rootNamespace]['key'] = $fe_key_25d77afd8edeb7a26c19a9ded9d83801_1;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disable_meta_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disable_meta_language'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 'Content-language' ) );
unset( $if_cond3 );
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
continue;

}
unset( $if_cond );
// if ends

$text .= '    <meta http-equiv="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
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

$text .= '" content="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['value'] : null;
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

    ';
$fe_n_items_processed_25d77afd8edeb7a26c19a9ded9d83801_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_25d77afd8edeb7a26c19a9ded9d83801_1 ) ) extract( array_pop( $fe_variable_stack_25d77afd8edeb7a26c19a9ded9d83801_1 ) );

else
{

unset( $fe_array_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_array_keys_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_n_items_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_n_items_processed_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_i_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_key_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_val_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_offset_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_max_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_reverse_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_first_val_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_last_val_25d77afd8edeb7a26c19a9ded9d83801_1 );

unset( $fe_variable_stack_25d77afd8edeb7a26c19a9ded9d83801_1 );

}

// foreach ends
$text .= '
    <meta name="generator" content="eZ Publish" />';
if ( isset( $setArray[$currentNamespace]['enable_help'] ) )
{
unset( $vars[$currentNamespace]['enable_help'] );
}

if ( isset( $setArray[$currentNamespace]['enable_link'] ) )
{
unset( $vars[$currentNamespace]['enable_link'] );
}

if ( isset( $setArray[$currentNamespace]['disable_meta_language'] ) )
{
unset( $vars[$currentNamespace]['disable_meta_language'] );
}


$setArray = $oldSetArray_041028b4dec9bd147e0704204bf62971;
$tpl->Level--;
?>
