<?php
// URI:       design:content/edit.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/edit.tpl
// Timestamp: 1782241051 (Tue Jun 23 18:57:31 UTC 2026)
$oldSetArray_d6226760eed5deb53e3cc174247cdd29 = isset( $setArray ) ? $setArray : array();
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

$text .= '<form name="editform" id="editform" enctype="multipart/form-data" method="post" action=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_version'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var8 );
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var8 = !( $var9 );
unset( $var9 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
unset( $var9 );
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var9 = ( $var10 . '/' );
unset( $var10 );
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var7 = $var8 ? '/' : $var9;
unset( $var8, $var9 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var8 );
unset( $var9 );
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var9 = !( $var10 );
unset( $var10 );
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
unset( $var10 );
unset( $var11 );
unset( $var11 );
$var11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
$var10 = ( $var11 . '/' );
unset( $var11 );
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var8 = $var9 ? '' : $var10;
unset( $var9, $var10 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var1 = ( '/content/edit/' . $var3 . '/' . $var5 . '/' . $var7 . $var8 );
unset( $var3, $var5, $var7, $var8 );
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


    <input class="btn btn-primary hide" type="submit" id="ezedit-default-button" name="PublishButton" value="Send for publishing" />

    
    ';
// def $content_language
if ( $tpl->hasVariable( 'content_language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_language' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 4,
    2 => 703,
  ),
  1 => 
  array (
    0 => 8,
    1 => 89,
    2 => 854,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'content_language', 'eng-GB', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_language', 'eng-GB', $rootNamespace );
}

// def $edit_menu_collapsed
unset( $var );
unset( $var1 );
$var1 = eZPreferences::value( "admin_edit_menu_collapsed" );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = 1;
}
else
{
    
    $var = 0;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'edit_menu_collapsed', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'edit_menu_collapsed' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 4,
    2 => 703,
  ),
  1 => 
  array (
    0 => 8,
    1 => 89,
    2 => 854,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'edit_menu_collapsed', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'edit_menu_collapsed', $var, $rootNamespace );
}

$text .= '
    <script type="text/javascript">
        

        YUI(YUI3_config).use(\'ezcollapsiblemenu\', \'event\', \'io-ez\', function (Y) {

            Y.on(\'domready\', function () {
                var rightmenu = new Y.eZ.CollapsibleMenu({
                    link: \'#objectinfo-showhide\',
                    content: false,
        
                    collapsed: "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_menu_collapsed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_menu_collapsed'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '",
        
                    elements:[{
                        selector: \'.rightmenu\',
                        duration: 0.25,
                        fullStyle: {marginRight: \'0\'},
                        collapsedStyle: {marginRight: \'-222px\'},
                    },{
                        selector: \'#maincontent\',
                        duration: 0.25,
                        // workaround to http://yuilibrary.com/projects/yui3/ticket/2531641
                        // for IE, margin has to be set in px
                        fullStyle: {marginRight: (Y.one(\'.rightmenu\').get(\'offsetWidth\')) + \'px\'},
                        collapsedStyle: {marginRight: \'18px\'}
                    }],
                    callback: function () {
                        Y.io.ez.setPreference(\'admin_edit_menu_collapsed\', this.conf.collapsed);
                    }
                });
            });

        });

        
    </script>
    <div class="rightmenu';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_menu_collapsed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_menu_collapsed'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' closed" style="margin-right:-222px;';
}
unset( $if_cond );
// if ends

$text .= '">
        <a id="objectinfo-showhide" onClick="$(\'.rightmenu\').toggleClass(\'closed\');" class="show-hide-control" title="Show / Hide rightmenu" href="#"></a>
        <div id="rightmenu-design">

           ';
$oldRestoreIncludeArray_cfe9c9d68229101acfbb5bd031e7b936 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/edit_menu-db26d350bfc1dee226bbdd35122fe5c2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/content/edit_menu.tpl' );
include( '' . 'var/site/cache/template/compiled/edit_menu-db26d350bfc1dee226bbdd35122fe5c2.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/content/edit_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_cfe9c9d68229101acfbb5bd031e7b936;

$text .= '
        </div>
    </div>


    <div id="maincontent"';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_menu_collapsed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_menu_collapsed'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' style="margin-right:18px"';
}
unset( $if_cond );
// if ends

$text .= ' class="clearfix node-edit-container">
        <div class="path-edit-container"></div>
        <div id="controlbar-top" class="node-controlbar">
            <span class="pull-left translation small">
                ';
$vars[$currentNamespace]['language_index'] = 0;
$vars[$currentNamespace]['from_language_index'] = 0;
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var1 = compiledFetchAttribute( $var, 'translation_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['translation_list'] = $var;
unset( $var );
$text .= '
                ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
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

$text .= '                  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'language_code' );
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
$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'index', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'language_index', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['language_index'] = $var;
    unset( $var );
}
$text .= '                  ';
}
unset( $if_cond );
// if ends

$text .= '                ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'languages' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['from_language_object'] = $var;
unset( $var );
$text .= '
                    ';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var7 = compiledFetchAttribute( $var6, 'locale' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var6Data = array( 'value' => $var6 );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $var6Data, false, false );
$var6 = $var6Data['value'];
unset( $var6Data );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var9 = compiledFetchAttribute( $var8, 'locale' );
unset( $var8 );
$var8 = $var9;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var3 = ( $var4 . '&nbsp;<img src="' . $var6 . '" width="18" height="12" style="vertical-align: middle;" alt="' . $var8 . '" />' );
unset( $var4, $var6, $var8 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = compiledFetchAttribute( $var5, $var7 );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'locale' );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'intl_language_name' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var8 = compiledFetchAttribute( $var7, $var9 );
unset( $var7 );
$var7 = $var8;
$var8 = compiledFetchAttribute( $var7, 'language_code' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var7Data = array( 'value' => $var7 );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $var7Data, false, false );
$var7 = $var7Data['value'];
unset( $var7Data );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var11 );
unset( $var11 );
$var11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
$var10 = compiledFetchAttribute( $var9, $var11 );
unset( $var9 );
$var9 = $var10;
$var10 = compiledFetchAttribute( $var9, 'language_code' );
unset( $var9 );
$var9 = $var10;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var4 = ( $var5 . '&nbsp;<img src="' . $var7 . '" width="18" height="12" style="vertical-align: middle;" alt="' . $var9 . '" />' );
unset( $var5, $var7, $var9 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = array( '%from_lang' => $var3, '%to_lang' => $var4 );unset( $var3, $var4 );
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
$var = strtr( 'Translating content from %from_lang to %to_lang', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '

                    ';
unset( $vars[$currentNamespace]['from_language_object'] );
$text .= '
                ';
}
else
{
$text .= '
                    <img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'language_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" width="18" height="12" style="vertical-align: middle;" alt="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'language_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />&nbsp;<span class="tt">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'locale' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'intl_language_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</span>

                ';
}
unset( $if_cond );
// if ends

$text .= '
                ';
unset( $vars[$currentNamespace]['language_index'] );
unset( $vars[$currentNamespace]['from_language_index'] );
unset( $vars[$currentNamespace]['translation_list'] );
$text .= '            </span>
            <span class="box-bc pull-left"><span class="button-right"></span></span>
            
            <div class="btn-group">
                <input class="btn btn-default" type="submit" name="StoreButton" value="Store draft" title="Store the contents of the draft that is being edited and continue editing. Use this button to periodically save your work while editing." />
                <input class="btn btn-default" type="submit" name="StoreExitButton" value="Store draft and exit" title="Store the draft that is being edited and exit from edit mode. Use when you need to exit your work and return later to continue." />
                <input class="btn btn-default" type="submit" name="DiscardButton" value="Discard draft" onclick="return confirmDiscard( \'';
unset( $var );
$var = 'Are you sure you want to discard the draft?' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\' );" title="Discard the draft that is being edited. This will also remove the translations that belong to the draft (if any)." />
            </div>
            <input class="btn btn-primary" type="submit" name="PublishButton" value="Send for publishing" title="Publish the contents of the draft that is being edited. The draft will become the published version of the object." />
            
        </div>

        <!-- Maincontent START -->

        ';
$oldRestoreIncludeArray_4d7879b622c5f76f22c5867fc4c64760 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/edit_validation-160db0a204ecd21bbca7ad97e92c5591.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/content/edit_validation.tpl' );
include( '' . 'var/site/cache/template/compiled/edit_validation-160db0a204ecd21bbca7ad97e92c5591.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/content/edit_validation.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_4d7879b622c5f76f22c5867fc4c64760;

$text .= '

        

        
        <div class="edit-tab-control">
            <h4>Sub menu</h4>
            <div class="edit-tab-triggers">
                ';
if ( !isset( $vars[$currentNamespace]['view_parameters'] ) )
{
    $vars[$currentNamespace]['view_parameters'] = array (
);
    $setArray[$currentNamespace]['view_parameters'] = true;
}

if ( !isset( $vars[$currentNamespace]['attribute_categorys'] ) )
{
    $vars[$currentNamespace]['attribute_categorys'] = array (
  'content' => 'Content',
  'meta' => 'Meta',
  'extras' => 'Extras',
  'timing' => 'Timing',
  'event' => 'Event',
  'design' => 'Design',
  'link' => 'Links',
  'input' => 'Inputs',
);
    $setArray[$currentNamespace]['attribute_categorys'] = true;
}

if ( !isset( $vars[$currentNamespace]['attribute_default_category'] ) )
{
    $vars[$currentNamespace]['attribute_default_category'] = 'content';
    $setArray[$currentNamespace]['attribute_default_category'] = true;
}

$text .= '
                ';
// foreach begins
$skipDelimiter = true;
$fe_array_7422b403b73a355c37aa7d48cb1fe367_1 = [];
$fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_1 = [];
$fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_1  = 0;
$fe_i_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_key_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_val_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_max_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_reverse_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_first_val_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_last_val_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
if ( !isset( $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_1 ) ) $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_1 = [];
$fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_1[] = @compact( 'fe_array_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_i_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_key_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_val_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_offset_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_max_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_reverse_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_first_val_7422b403b73a355c37aa7d48cb1fe367_1', 'fe_last_val_7422b403b73a355c37aa7d48cb1fe367_1' );
unset( $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 );
unset( $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 );
$fe_array_7422b403b73a355c37aa7d48cb1fe367_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes_grouped_data_map', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes_grouped_data_map'] : null;
if (! isset( $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 ) ) $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 = NULL;
while ( is_object( $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 ) and method_exists( $fe_array_7422b403b73a355c37aa7d48cb1fe367_1, 'templateValue' ) )
    $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 = $fe_array_7422b403b73a355c37aa7d48cb1fe367_1->templateValue();

$fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_1 = is_array( $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 ) ? array_keys( $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 ) : [];
$fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 = count( $fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_1 );
$fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 = 0;
$fe_max_7422b403b73a355c37aa7d48cb1fe367_1 = $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 - $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1;
$fe_reverse_7422b403b73a355c37aa7d48cb1fe367_1 = false;
if ( $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 < 0 || $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 >= $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 )
{
    $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 = ( $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 < 0 ) ? 0 : $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1;
    if ( $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 || $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_7422b403b73a355c37aa7d48cb1fe367_1'. Array count: $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1");   
}
}
if ( $fe_max_7422b403b73a355c37aa7d48cb1fe367_1 < 0 || $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 + $fe_max_7422b403b73a355c37aa7d48cb1fe367_1 > $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 )
{
    if ( $fe_max_7422b403b73a355c37aa7d48cb1fe367_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_7422b403b73a355c37aa7d48cb1fe367_1");
    $fe_max_7422b403b73a355c37aa7d48cb1fe367_1 = $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 - $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1;
}
if ( $fe_reverse_7422b403b73a355c37aa7d48cb1fe367_1 )
{
    $fe_first_val_7422b403b73a355c37aa7d48cb1fe367_1 = $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 - 1 - $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1;
    $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_1  = 0;
}
else
{
    $fe_first_val_7422b403b73a355c37aa7d48cb1fe367_1 = $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1;
    $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_1  = $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 - 1;
}
// foreach
for ( $fe_i_7422b403b73a355c37aa7d48cb1fe367_1 = $fe_first_val_7422b403b73a355c37aa7d48cb1fe367_1; $fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_1 < $fe_max_7422b403b73a355c37aa7d48cb1fe367_1 && ( $fe_reverse_7422b403b73a355c37aa7d48cb1fe367_1 ? $fe_i_7422b403b73a355c37aa7d48cb1fe367_1 >= $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_1 : $fe_i_7422b403b73a355c37aa7d48cb1fe367_1 <= $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_1 ); $fe_reverse_7422b403b73a355c37aa7d48cb1fe367_1 ? $fe_i_7422b403b73a355c37aa7d48cb1fe367_1-- : $fe_i_7422b403b73a355c37aa7d48cb1fe367_1++ )
{
$fe_key_7422b403b73a355c37aa7d48cb1fe367_1 = $fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_1[$fe_i_7422b403b73a355c37aa7d48cb1fe367_1];
$fe_val_7422b403b73a355c37aa7d48cb1fe367_1 = $fe_array_7422b403b73a355c37aa7d48cb1fe367_1[$fe_key_7422b403b73a355c37aa7d48cb1fe367_1];
$vars[$rootNamespace]['content_attributes_grouped'] = $fe_val_7422b403b73a355c37aa7d48cb1fe367_1;
$vars[$rootNamespace]['attribute_group'] = $fe_key_7422b403b73a355c37aa7d48cb1fe367_1;
$text .= '                    <a href="#" data-field-group="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_group'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_categorys', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_categorys'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_group'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
                ';
$fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_1 ) ) extract( array_pop( $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_1 ) );

else
{

unset( $fe_array_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_i_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_key_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_val_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_offset_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_max_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_reverse_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_first_val_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_1 );

unset( $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_1 );

}

// foreach ends
$text .= '
                ';
if ( isset( $setArray[$currentNamespace]['view_parameters'] ) )
{
unset( $vars[$currentNamespace]['view_parameters'] );
}

if ( isset( $setArray[$currentNamespace]['attribute_categorys'] ) )
{
unset( $vars[$currentNamespace]['attribute_categorys'] );
}

if ( isset( $setArray[$currentNamespace]['attribute_default_category'] ) )
{
unset( $vars[$currentNamespace]['attribute_default_category'] );
}

$text .= '            </div>
        </div>
        <div class="box-content">

            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="content-translation">
            ';
}
unset( $if_cond );
// if ends

$text .= '
                ';
// foreach begins
$skipDelimiter = true;
$fe_array_7422b403b73a355c37aa7d48cb1fe367_2 = [];
$fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_2 = [];
$fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_2  = 0;
$fe_i_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_key_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_val_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_max_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_reverse_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_first_val_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_last_val_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
if ( !isset( $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_2 ) ) $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_2 = [];
$fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_2[] = @compact( 'fe_array_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_i_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_key_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_val_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_offset_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_max_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_reverse_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_first_val_7422b403b73a355c37aa7d48cb1fe367_2', 'fe_last_val_7422b403b73a355c37aa7d48cb1fe367_2' );
$fe_array_7422b403b73a355c37aa7d48cb1fe367_2 = array (
);
$fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_2 = is_array( $fe_array_7422b403b73a355c37aa7d48cb1fe367_2 ) ? array_keys( $fe_array_7422b403b73a355c37aa7d48cb1fe367_2 ) : [];
$fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 = count( $fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_2 );
$fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 = 0;
$fe_max_7422b403b73a355c37aa7d48cb1fe367_2 = $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 - $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2;
$fe_reverse_7422b403b73a355c37aa7d48cb1fe367_2 = false;
if ( $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 < 0 || $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 >= $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 )
{
    $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 = ( $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 < 0 ) ? 0 : $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2;
    if ( $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 || $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_7422b403b73a355c37aa7d48cb1fe367_2'. Array count: $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2");   
}
}
if ( $fe_max_7422b403b73a355c37aa7d48cb1fe367_2 < 0 || $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 + $fe_max_7422b403b73a355c37aa7d48cb1fe367_2 > $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 )
{
    if ( $fe_max_7422b403b73a355c37aa7d48cb1fe367_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_7422b403b73a355c37aa7d48cb1fe367_2");
    $fe_max_7422b403b73a355c37aa7d48cb1fe367_2 = $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 - $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2;
}
if ( $fe_reverse_7422b403b73a355c37aa7d48cb1fe367_2 )
{
    $fe_first_val_7422b403b73a355c37aa7d48cb1fe367_2 = $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 - 1 - $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2;
    $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_2  = 0;
}
else
{
    $fe_first_val_7422b403b73a355c37aa7d48cb1fe367_2 = $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2;
    $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_2  = $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 - 1;
}
// foreach
for ( $fe_i_7422b403b73a355c37aa7d48cb1fe367_2 = $fe_first_val_7422b403b73a355c37aa7d48cb1fe367_2; $fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_2 < $fe_max_7422b403b73a355c37aa7d48cb1fe367_2 && ( $fe_reverse_7422b403b73a355c37aa7d48cb1fe367_2 ? $fe_i_7422b403b73a355c37aa7d48cb1fe367_2 >= $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_2 : $fe_i_7422b403b73a355c37aa7d48cb1fe367_2 <= $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_2 ); $fe_reverse_7422b403b73a355c37aa7d48cb1fe367_2 ? $fe_i_7422b403b73a355c37aa7d48cb1fe367_2-- : $fe_i_7422b403b73a355c37aa7d48cb1fe367_2++ )
{
$fe_key_7422b403b73a355c37aa7d48cb1fe367_2 = $fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_2[$fe_i_7422b403b73a355c37aa7d48cb1fe367_2];
$fe_val_7422b403b73a355c37aa7d48cb1fe367_2 = $fe_array_7422b403b73a355c37aa7d48cb1fe367_2[$fe_key_7422b403b73a355c37aa7d48cb1fe367_2];
$vars[$rootNamespace]['additional_tpl'] = $fe_val_7422b403b73a355c37aa7d48cb1fe367_2;
$text .= '                    ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
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
            1 => 'design:',
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
              2 => 'additional_tpl',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 127,
    1 => 20,
    2 => 7343,
  ),
  1 => 
  array (
    0 => 127,
    1 => 68,
    2 => 7391,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                ';
$fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_2 ) ) extract( array_pop( $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_2 ) );

else
{

unset( $fe_array_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_array_keys_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_n_items_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_n_items_processed_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_i_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_key_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_val_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_offset_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_max_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_reverse_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_first_val_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_last_val_7422b403b73a355c37aa7d48cb1fe367_2 );

unset( $fe_variable_stack_7422b403b73a355c37aa7d48cb1fe367_2 );

}

// foreach ends
$text .= '
                <div class="context-attributes edit-tabs panel">
                    ';
$oldRestoreIncludeArray_70a9faf8da577873333f47e7bfb09e45 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'view_parameters', $vars[$currentNamespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['view_parameters'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/edit_attribute-0fd7fd0eb412136ecbfe9d405fc17546.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl' );
include( '' . 'var/site/cache/template/compiled/edit_attribute-0fd7fd0eb412136ecbfe9d405fc17546.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/content/edit_attribute.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_70a9faf8da577873333f47e7bfb09e45;

$text .= '                </div>

            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '
        
            <div class="panel">
                <div class="node-controlbar">
                
                    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_edit_show_re_edit" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <input type="checkbox" name="BackToEdit" />Back to edit
                    ';
}
unset( $if_cond );
// if ends

$text .= '                    <div class="btn-group">
                        <input class="btn btn-default" type="submit" name="StoreButton" value="Store draft" title="Store the contents of the draft that is being edited and continue editing. Use this button to periodically save your work while editing." />
                        <input class="btn btn-default" type="submit" name="StoreExitButton" value="Store draft and exit" title="Store the draft that is being edited and exit from edit mode. Use when you need to exit your work and return later to continue." />
                        <input class="btn btn-default" type="submit" name="DiscardButton" value="Discard draft" onclick="return confirmDiscard( \'';
unset( $var );
$var = 'Are you sure you want to discard the draft?' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\' );" title="Discard the draft that is being edited. This will also remove the translations that belong to the draft (if any)." />
                    </div>
                    <input class="btn btn-primary" type="submit" name="PublishButton" value="Send for publishing" title="Publish the contents of the draft that is being edited. The draft will become the published version of the object." />
                    <input type="hidden" name="DiscardConfirm" value="1" />
                
                </div>
            </div>
        </div>

        
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = eZPreferences::value( "admin_edit_show_locations" );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond3Data = array( 'value' => $if_cond3 );
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
        2 => 'invalid_node_assignment_list',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond3Data, false, false );
$if_cond3 = $if_cond3Data['value'];
unset( $if_cond3Data );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) > ( 0 ) );
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
$text .= '            
            ';
$oldRestoreIncludeArray_b0e1f5ee0d3e396b1a3eb3f20347659c = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/edit_locations-f9a3aa1b14f2463b6eccc0f86ffda72f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl' );
include( '' . 'var/site/cache/template/compiled/edit_locations-f9a3aa1b14f2463b6eccc0f86ffda72f.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/content/edit_locations.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_b0e1f5ee0d3e396b1a3eb3f20347659c;

$text .= '        ';
}
else
{
$text .= '            
            <input type="hidden" name="UseNodeAssigments" value="0" />
        ';
}
unset( $if_cond );
// if ends

$text .= '

            <!-- Maincontent END -->

        <div class="break"></div>

    </div>
</form>





<script type="text/javascript">
function confirmDiscard( question )
{
    // Disable/bypass the reload-based (plain HTML) confirmation interface.
    document.editform.DiscardConfirm.value = "0";

    // Ask user if she really wants do it, return this to the handler.
    return confirm( question );

}

$(document).ready(function(){
    $(\'#editform\').on(\'keypress keydown keyup\', \':input:not(textarea)\', function(e){
        if(e.keyCode == 13) {
            e.preventDefault();
        }
    });

});

</script>

';

$setArray = $oldSetArray_d6226760eed5deb53e3cc174247cdd29;
$tpl->Level--;
?>
