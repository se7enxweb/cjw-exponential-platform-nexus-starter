<?php
// URI:       design:content/advancedsearch.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/advancedsearch.tpl
// Timestamp: 1782241050 (Tue Jun 23 18:57:30 UTC 2026)
$oldSetArray_85f190f6668e91f02205ca22a8a191ae = isset( $setArray ) ? $setArray : array();
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

$vars[$currentNamespace]['search'] = false;
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'use_template_search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['use_template_search'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 10;
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case 1:
    {
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 5;
}
    } break;
    case 2:
    {
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 10;
}
    } break;
    case 3:
    {
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 20;
}
    } break;
    case 4:
    {
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 30;
}
    } break;
    case 5:
    {
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'page_limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['page_limit'] = 50;
}
    } break;
    default:
    {
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_sub_tree'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var4 = compiledFetchAttribute( $var3, 'offset' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_section_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_section_id'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_id'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_attribute_id'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentSearch' ),
  array_values( array(     'text' => $var1,
    'subtree_array' => $var2,
    'offset' => $var3,
    'limit' => $var4,
    'publish_timestamp' => false,
    'publish_date' => $var5,
    'section_id' => $var6,
    'class_id' => $var7,
    'class_attribute_id' => $var8,
    'ignore_visibility' => null,
    'limitation' => null,
    'sort_by' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'search', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['search'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search'] : null;
$var1 = compiledFetchAttribute( $var, 'SearchResult' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'search_result', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['search_result'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search'] : null;
$var1 = compiledFetchAttribute( $var, 'SearchCount' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'search_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['search_count'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search'] : null;
$var1 = compiledFetchAttribute( $var, 'StopWordArray' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'stop_word_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['stop_word_array'] = $var;
    unset( $var );
}
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'search_data', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['search_data'] = $var;
    unset( $var );
}
}

$text .= '
<form action="/ngadminui/content/advancedsearch" method="get">
    <div class="context-block content-advancesearch">
        
        <div class="box-header">
            <h1 class="context-title">Advanced search</h1>
            <div class="header-mainline"></div>
        
        </div>

        
        <div class="box-content panel">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <label for="ezcontent_advancesearch_search_text">Search for all of the following words:</label>
                        <input id="ezcontent_advancesearch_search_text" class="form-control" type="text" size="40" name="SearchText" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'full_search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['full_search_text'] : null;
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
                    </div>

                    <div class="block">
                        <label for="ezcontent_advancesearch_phrasesearch_text">Search for an exact phrase:</label>
                        <input id="ezcontent_advancesearch_phrasesearch_text" class="form-control" type="text" size="40" name="PhraseSearchText" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'phrase_search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['phrase_search_text'] : null;
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
                    </div>
                </div>
            </div>
            <div class="block clearfix">
                <div class="element">
                    <label for="ezcontent_advancesearch_class_id">Class:</label>
                    <select class="form-control" id="ezcontent_advancesearch_class_id" name="SearchContentClassID">
                        <option value="-1">Any class</option>
                        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_class_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_class_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'ContentClass';

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

$text .= '                            <option 
                            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "sw";
else
    $namespace .= ':sw';
$vars[$namespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_id'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'sw';

unset( $case1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ContentClass";
else
    $namespace .= ':ContentClass';
unset( $case1 );
$case1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$case11 = compiledFetchAttribute( $case1, 'id' );
unset( $case1 );
$case1 = $case11;
if (! isset( $case1 ) ) $case1 = NULL;
while ( is_object( $case1 ) and method_exists( $case1, 'templateValue' ) )
    $case1 = $case1->templateValue();

switch ( $match )
{
    case $case1:
    {
        unset( $case1 );
$text .= '                                    selected="selected"
                                ';
    } break;
    default:
    {
$text .= '                                ';
    } break;
}
unset( $match );

$currentNamespace = array_pop( $namespaceStack );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "sw";
else
    $namespace .= ':sw';
unset( $vars[$namespace]['match'] );
$text .= ' value="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ContentClass";
else
    $namespace .= ':ContentClass';
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

$text .= '">';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ContentClass";
else
    $namespace .= ':ContentClass';
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

$text .= '
                            </option>
                        ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '                    </select>
                </div>
            </div>
            <div class="block clearfix">
                <div class="element">
                    <label for="ezcontent_advancesearch_class_attribute_id">Class attribute:</label>
                    <div class="form-inline">
                        ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_id'] : null;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = ( ( $show1 ) > ( 0 ) );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Attribute';

$text .= '
                            <select class="form-control" id="ezcontent_advancesearch_class_attribute_id" name="SearchContentClassAttributeID">
                                <option value="-1">Any attribute</option>
                                ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_content_class_attribute_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_content_class_attribute_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'ClassAttribute';

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

$text .= '                                    <option value="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Attribute:ClassAttribute";
else
    $namespace .= ':Attribute:ClassAttribute';
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

$text .= '" 
                                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_attribute_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Attribute:ClassAttribute";
else
    $namespace .= ':Attribute:ClassAttribute';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'id' );
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

$text .= '>
                                    ';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Attribute:ClassAttribute";
else
    $namespace .= ':Attribute:ClassAttribute';
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

$text .= '
                                    </option>
                                ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '                            </select>

                        ';
$currentNamespace = array_pop( $namespaceStack );

}

$text .= '                        <input class="button" type="submit" name="SelectClass" value="Update attributes"/>
                    </div>
                </div>
            </div>
            <div class="block clearfix">
                <div class="element">
                    <label for="ezcontent_advancesearch_section_id">In:</label>
                    <select class="form-control" id="ezcontent_advancesearch_section_id" name="SearchSectionID">
                        <option value="-1">Any section</option>
                        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Section';

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

$text .= '                            <option 
                            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_section_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_section_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "sw";
else
    $namespace .= ':sw';
$vars[$namespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_section_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_section_id'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'sw';

unset( $case1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Section";
else
    $namespace .= ':Section';
unset( $case1 );
$case1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$case11 = compiledFetchAttribute( $case1, 'id' );
unset( $case1 );
$case1 = $case11;
if (! isset( $case1 ) ) $case1 = NULL;
while ( is_object( $case1 ) and method_exists( $case1, 'templateValue' ) )
    $case1 = $case1->templateValue();

switch ( $match )
{
    case $case1:
    {
        unset( $case1 );
$text .= '                                selected="selected"
                                ';
    } break;
    default:
    {
$text .= '                                ';
    } break;
}
unset( $match );

$currentNamespace = array_pop( $namespaceStack );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "sw";
else
    $namespace .= ':sw';
unset( $vars[$namespace]['match'] );
$text .= ' value="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Section";
else
    $namespace .= ':Section';
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

$text .= '">';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Section";
else
    $namespace .= ':Section';
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

$text .= '</option>
                        ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '                    </select>
                </div>
                <div class="element">
                    <label for="ezcontent_advancesearch_date">Published:</label>
                    <select class="form-control" id="ezcontent_advancesearch_date" name="SearchDate">
                        <option value="-1" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( -1 ) );
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

$text .= '>Any time</option>
                        <option value="1"  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
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

$text .= '>Last day</option>
                        <option value="2"  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 2 ) );
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

$text .= '>Last week</option>
                        <option value="3"  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 3 ) );
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

$text .= '>Last month</option>
                        <option value="4"  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 4 ) );
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

$text .= '>Last three months</option>
                        <option value="5"  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 5 ) );
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

$text .= '>Last year</option>
                    </select>
                </div>
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'use_template_search', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['use_template_search'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <div class="element">
                        <label for="ezcontent_advancesearch_pagelimit">Display per page:</label>
                        <select class="form-control" id="ezcontent_advancesearch_pagelimit" name="SearchPageLimit">
                            <option value="1" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
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

$text .= '>5 items</option>
                            <option value="2" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = in_array( $if_cond3, array( 1,
       2,
       3,
       4,
       5 ) );unset( $if_cond3 );
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
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 2 ) );
unset( $if_cond3 );
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
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>10 items</option>
                            <option value="3" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 3 ) );
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

$text .= '>20 items</option>
                            <option value="4" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 4 ) );
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

$text .= '>30 items</option>
                            <option value="5" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 5 ) );
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

$text .= '>50 items</option>
                        </select>
                    </div>
                ';
}
unset( $if_cond );
// if ends

$text .= '            </div>


            ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_sub_tree'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'SubTree';

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

$text .= '                <input type="hidden" name="SubTreeArray[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
            ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( false )
    $if_cond = false;
else
    $if_cond = false;
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Sw";
else
    $namespace .= ':Sw';
$vars[$namespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Sw';

switch ( $match )
{
    case 0:
    {
$text .= '                        <div class="warning">
                            <h2>';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( $var4 );unset( $var4 );
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
$var1 = strtr( 'No results were found when searching for <%1>', $var4 );
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
                        </div>
                    ';
    } break;
    default:
    {
$text .= '                    ';
    } break;
}
unset( $match );

$currentNamespace = array_pop( $namespaceStack );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Sw";
else
    $namespace .= ':Sw';
unset( $vars[$namespace]['match'] );
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            
            <div class="controlbar">
                
                <div class="block">
                    <input class="button" type="submit" name="SearchButton" value="Search" />
                </div>
            
            </div>

            ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = ( ( $show1 ) != ( 0 ) );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '                <div class="context-block">
                    
                    <div class="box-header">
                        <h2 class="context-title">';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( $var4, $var5 );unset( $var4, $var5 );
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
$var1 = strtr( 'Search for <%1> returned %2 matches', $var4 );
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
                    
                    </div>

                    
                    <div class="box-content">

                        ';
$oldRestoreIncludeArray_7e71fb9e4d55d661beeb9f6740d81dc9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['search_result'] ) )
    $restoreIncludeArray[] = array( $namespace, 'search_result', $vars[$namespace]['search_result'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['search_result'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'search_result', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Result";
else
    $namespace .= ':Result';
$vars[$namespace]['search_result'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/searchresult-fbcc3648a4e694fb43f0d3a2f9265562.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'Result' : ( $currentNamespace . ':' . 'Result' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/content/searchresult.tpl' );
include( '' . 'var/site/cache/template/compiled/searchresult-fbcc3648a4e694fb43f0d3a2f9265562.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'Result' : ( $currentNamespace . ':' . 'Result' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/content/searchresult.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7e71fb9e4d55d661beeb9f6740d81dc9;

$text .= '
                        <div class="context-toolbar">
                        ';
$oldRestoreIncludeArray_91285da194f139df7a760690c8baf5d9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
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
$vars[$namespace]['page_uri'] = '/content/advancedsearch';
if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri_suffix'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri_suffix', $vars[$namespace]['page_uri_suffix'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri_suffix'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri_suffix', 'unset' );

unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = urlencode( $var3 );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'phrase_search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['phrase_search_text'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = urlencode( $var5 );
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_id'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_contentclass_attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_contentclass_attribute_id'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_section_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_section_id'] : null;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
unset( $var11 );
unset( $var12 );
unset( $var13 );
unset( $var13 );
$var13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_timestamp', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_timestamp'] : null;
if (! isset( $var13 ) ) $var13 = NULL;
while ( is_object( $var13 ) and method_exists( $var13, 'templateValue' ) )
    $var13 = $var13->templateValue();
while ( is_object( $var13 ) and method_exists( $var13, 'templateValue' ) )
    $var13 = $var13->templateValue();
$var12 = ( ( $var13 ) > ( 0 ) );
unset( $var13 );
if (! isset( $var12 ) ) $var12 = NULL;
while ( is_object( $var12 ) and method_exists( $var12, 'templateValue' ) )
    $var12 = $var12->templateValue();
unset( $var14 );
unset( $var16 );
unset( $var16 );
$var16 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_timestamp', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_timestamp'] : null;
if (! isset( $var16 ) ) $var16 = NULL;
while ( is_object( $var16 ) and method_exists( $var16, 'templateValue' ) )
    $var16 = $var16->templateValue();
while ( is_object( $var16 ) and method_exists( $var16, 'templateValue' ) )
    $var16 = $var16->templateValue();
$var14 = ( '&SearchTimestamp=' . $var16 );
unset( $var16 );
if (! isset( $var14 ) ) $var14 = NULL;
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
$var11 = $var12 ? $var14 : '';
unset( $var12, $var14 );
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
unset( $var12 );
unset( $var13 );
unset( $var14 );
unset( $var14 );
$var14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_sub_tree'] : null;
if (! isset( $var14 ) ) $var14 = NULL;
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
$var13 = ( ( $var14 ) > ( 0 ) );
unset( $var14 );
if (! isset( $var13 ) ) $var13 = NULL;
while ( is_object( $var13 ) and method_exists( $var13, 'templateValue' ) )
    $var13 = $var13->templateValue();
unset( $var15 );
unset( $var17 );
$var17 = urlencode( 'SubTreeArray[]' );
if (! isset( $var17 ) ) $var17 = NULL;
while ( is_object( $var17 ) and method_exists( $var17, 'templateValue' ) )
    $var17 = $var17->templateValue();
unset( $var19 );
unset( $var20 );
unset( $var22 );
$var22 = urlencode( 'SubTreeArray[]' );
if (! isset( $var22 ) ) $var22 = NULL;
while ( is_object( $var22 ) and method_exists( $var22, 'templateValue' ) )
    $var22 = $var22->templateValue();
$var20 = ( '&' . $var22 . '=' );
unset( $var22 );
if (! isset( $var20 ) ) $var20 = NULL;
while ( is_object( $var20 ) and method_exists( $var20, 'templateValue' ) )
    $var20 = $var20->templateValue();
unset( $var21 );
unset( $var21 );
$var21 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_sub_tree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_sub_tree'] : null;
if (! isset( $var21 ) ) $var21 = NULL;
while ( is_object( $var21 ) and method_exists( $var21, 'templateValue' ) )
    $var21 = $var21->templateValue();
while ( is_object( $var21 ) and method_exists( $var21, 'templateValue' ) )
    $var21 = $var21->templateValue();
$var19 = implode( $var20, $var21 );unset( $var20, $var21 );
if (! isset( $var19 ) ) $var19 = NULL;
while ( is_object( $var19 ) and method_exists( $var19, 'templateValue' ) )
    $var19 = $var19->templateValue();
$var15 = ( '&' . $var17 . '=' . $var19 );
unset( $var17, $var19 );
if (! isset( $var15 ) ) $var15 = NULL;
while ( is_object( $var15 ) and method_exists( $var15, 'templateValue' ) )
    $var15 = $var15->templateValue();
$var12 = $var13 ? $var15 : '';
unset( $var13, $var15 );
if (! isset( $var12 ) ) $var12 = NULL;
while ( is_object( $var12 ) and method_exists( $var12, 'templateValue' ) )
    $var12 = $var12->templateValue();
unset( $var14 );
unset( $var14 );
$var14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_date'] : null;
if (! isset( $var14 ) ) $var14 = NULL;
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
while ( is_object( $var14 ) and method_exists( $var14, 'templateValue' ) )
    $var14 = $var14->templateValue();
unset( $var16 );
unset( $var16 );
$var16 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_page_limit'] : null;
if (! isset( $var16 ) ) $var16 = NULL;
while ( is_object( $var16 ) and method_exists( $var16, 'templateValue' ) )
    $var16 = $var16->templateValue();
while ( is_object( $var16 ) and method_exists( $var16, 'templateValue' ) )
    $var16 = $var16->templateValue();
$var = ( '?SearchText=' . $var2 . '&PhraseSearchText=' . $var4 . '&SearchContentClassID=' . $var6 . '&SearchContentClassAttributeID=' . $var8 . '&SearchSectionID=' . $var10 . $var11 . $var12 . '&SearchDate=' . $var14 . '&SearchPageLimit=' . $var16 );
unset( $var2, $var4, $var6, $var8, $var10, $var11, $var12, $var14, $var16 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri_suffix'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_count'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_count', $vars[$namespace]['item_count'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_count'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_count', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
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
$restoreIncludeArray = $oldRestoreIncludeArray_91285da194f139df7a760690c8baf5d9;

$text .= '                        </div>

                    
                    </div>

                </div>
            ';
}

$text .= '
        </div>

    </div>

</form>';
unset( $vars[$currentNamespace]['search'] );

$setArray = $oldSetArray_85f190f6668e91f02205ca22a8a191ae;
$tpl->Level--;
?>
