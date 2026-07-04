<?php
// URI:       design:content/search.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/search.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_e45116ad27d465eda6e9ec9b22c20c97 = isset( $setArray ) ? $setArray : array();
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
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
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
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_section_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_section_id'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentSearch' ),
  array_values( array(     'text' => $var1,
    'subtree_array' => $var2,
    'offset' => $var3,
    'limit' => $var4,
    'publish_timestamp' => false,
    'publish_date' => false,
    'section_id' => $var5,
    'class_id' => false,
    'class_attribute_id' => false,
    'ignore_visibility' => null,
    'limitation' => null,
    'sort_by' => array( "modified",
       false ) ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3, $var4, $var5 );
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
<form action="/content/search" method="get">

    <div class="content-search">
        
        <div class="box-header">
            <h1 class="context-title">Search</h1>
            <div class="header-mainline"></div>
            
        </div>

        
        <div class="box-content panel">

            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <input class="form-control" type="text" name="SearchText" id="Search" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
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
                    <span class="input-group-btn">
                        <input class="btn btn-default"  name="SearchButton" type="submit" value="Search" />
                    </span>
                    </div>
                </div>
            </div>

            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'search_subtree_array',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 0 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( 1 ) );
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
$text .= '                <div class="block">
                    <div class="radio">
                        <label><input type="radio" name="SubTreeArray" value="1" />All content</label>
                    </div>
                    <div class="radio">
                        ';
// def $search_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$var2 = compiledFetchAttribute( $var1, 0 );
unset( $var1 );
$var1 = $var2;
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
if ( $tpl->hasVariable( 'search_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'search_node' is already defined.", array (
  0 => 
  array (
    0 => 48,
    1 => 24,
    2 => 2091,
  ),
  1 => 
  array (
    0 => 48,
    1 => 111,
    2 => 2178,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/search.tpl',
) );
    $tpl->setVariable( 'search_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'search_node', $var, $rootNamespace );
}

$text .= '                        <label><input type="radio" name="SubTreeArray" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$var2 = compiledFetchAttribute( $var1, 0 );
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

$text .= '" checked="checked" />The same location (';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_node'] : null;
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

$text .= ')</label>
                        ';
// undef $search_node
$tpl->unsetLocalVariable( 'search_node', $rootNamespace );

$text .= '                    </div>
                </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '
            <div class="block">
                ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
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
$var4 = ( ( $var5 ) > ( 0 ) );
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var8 );
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_text'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var8 = urlencode( $var9 );
unset( $var9 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var6 = ( '?SearchText=' . $var8 );
unset( $var8 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var3 = $var4 ? $var6 : '';
unset( $var4, $var6 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/advancedsearch/' . $var3 );
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
$vars[$currentNamespace]['adv_url'] = $var;
unset( $var );
$text .= '                ';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'adv_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['adv_url'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = ( '<a href=' . $var5 . '>' );
unset( $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( $var3, "</a>" );unset( $var3 );
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
$var = strtr( 'For more options try the %1Advanced search%2.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                ';
unset( $vars[$currentNamespace]['adv_url'] );
$text .= '            </div>

            
            ';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'stop_word_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['stop_word_array'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '            <p>
            The following words were excluded from the search:
            ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'stop_word_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['stop_word_array'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'StopWord';

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
$text .= ', ';
}

$text .= '                ';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "StopWord";
else
    $namespace .= ':StopWord';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'word' );
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
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '            </p>
            ';
}

$text .= '
            
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
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
$text .= '            <h2>';
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
$var1 = strtr( 'No results were found while searching for <%1>', $var4 );
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
                <p>Search tips</p>
                <ul>
                    <li>Check spelling of keywords.</li>
                    <li>Try changing some keywords e.g. &quot;car&quot; instead of &quot;cars&quot;.</li>
                    <li>Try more general keywords.</li>
                    <li>Fewer keywords result in more matches. Try reducing keywords until you get a result.</li>
                </ul>
            ';
}
unset( $if_cond );
// if ends

$text .= '
        
        </div>

    </div>

    
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="panel">
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

        ';
$oldRestoreIncludeArray_2d72a4606968d60baa23ed5e359fc390 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
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
if ( file_exists( 'var/site/cache/template/compiled/searchresult-6de85dd6cc694667b0a11d2929654c37.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'Result' : ( $currentNamespace . ':' . 'Result' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/content/searchresult.tpl' );
include( '' . 'var/site/cache/template/compiled/searchresult-6de85dd6cc694667b0a11d2929654c37.php' );
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
$restoreIncludeArray = $oldRestoreIncludeArray_2d72a4606968d60baa23ed5e359fc390;

$text .= '
        <div class="context-toolbar">
        ';
$oldRestoreIncludeArray_0eeafb744c6ed6a7dfe4aa8b0ff808ca = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Navigator";
else
    $namespace .= ':Navigator';
$vars[$namespace]['page_uri'] = '/content/search';
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
unset( $var3 );
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_timestamp', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_timestamp'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = ( ( $var5 ) > ( 0 ) );
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_timestamp', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_timestamp'] : null;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var6 = ( '&SearchTimestamp=' . $var8 );
unset( $var8 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var3 = $var4 ? $var6 : '';
unset( $var4, $var6 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var5 = implode( ",", $var6 );unset( $var6 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = ( '?SearchText=' . $var2 . $var3 . '&SubTreeArray=' . $var5 );
unset( $var2, $var3, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Navigator";
else
    $namespace .= ':Navigator';
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
    $namespace = "Navigator";
else
    $namespace .= ':Navigator';
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
    $namespace = "Navigator";
else
    $namespace .= ':Navigator';
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
    $namespace = "Navigator";
else
    $namespace .= ':Navigator';
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
$currentNamespace = $rootNamespace = !$currentNamespace ? 'Navigator' : ( $currentNamespace . ':' . 'Navigator' );
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
$currentNamespace = $rootNamespace = !$currentNamespace ? 'Navigator' : ( $currentNamespace . ':' . 'Navigator' );
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
$restoreIncludeArray = $oldRestoreIncludeArray_0eeafb744c6ed6a7dfe4aa8b0ff808ca;

$text .= '        </div>
    </div>
    ';
}
unset( $if_cond );
// if ends

$text .= '
</form>';
unset( $vars[$currentNamespace]['search'] );

$setArray = $oldSetArray_e45116ad27d465eda6e9ec9b22c20c97;
$tpl->Level--;
?>
