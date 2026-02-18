<?php
// URI:       design:popupmenu/popup_menu.tpl
// Filename:  extension/ezclasslists/design/admin/templates/popupmenu/popup_menu.tpl
// Timestamp: 1564571593 (Wed Jul 31 11:13:13 UTC 2019)
$oldSetArray_1f594b200880632e1562dbd489952760 = isset( $setArray ) ? $setArray : array();
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

// def $multilingual_site
unset( $var );
unset( $var1 );
$var1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array_values( array(  ) ) );
$var1 = isset( $var1['result'] ) ? $var1['result'] : null;
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
$var = ( ( $var1 ) > ( 1 ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'multilingual_site', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'multilingual_site' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 201,
  ),
  1 => 
  array (
    0 => 5,
    1 => 71,
    2 => 272,
  ),
  2 => 'extension/ezclasslists/design/admin/templates/popupmenu/popup_menu.tpl',
) );
    $tpl->setVariable( 'multilingual_site', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'multilingual_site', $var, $rootNamespace );
}

$text .= '
<script language="JavaScript1.2" type="text/javascript">
<!--
var menuArray = new Array();
menuArray[\'ContextMenu\'] = new Array();
menuArray[\'ContextMenu\'][\'depth\'] = 0;
menuArray[\'ContextMenu\'][\'headerID\'] = \'menu-header\';
menuArray[\'ContextMenu\'][\'elements\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-view\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-view\'][\'url\'] = "/content/view/full/%nodeID%";
menuArray[\'ContextMenu\'][\'elements\'][\'menu-edit\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-edit\'][\'url\'] = "/content/edit/%objectID%";
menuArray[\'ContextMenu\'][\'elements\'][\'menu-copy\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-copy\'][\'url\'] = "/content/copy/%objectID%";
menuArray[\'ContextMenu\'][\'elements\'][\'menu-copy-subtree\']= new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-copy-subtree\'][\'url\'] = "/content/copysubtree/%nodeID%";
menuArray[\'ContextMenu\'][\'elements\'][\'menu-create-here\']= new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-create-here\'][\'disabled_class\'] = \'menu-item-disabled\';




menuArray[\'EditSubmenu\'] = new Array();
menuArray[\'EditSubmenu\'][\'depth\'] = 1;
menuArray[\'EditSubmenu\'][\'elements\'] = new Array();
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'] = new Array();
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'][\'variable\'] = \'%languages%\';
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'][\'content\'] = \'<a href="/content/edit/%objectID%/f/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages-another\'] = new Array();
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages-another\'][\'url\'] = "/content/edit/%objectID%/a";


menuArray[\'CreateHereMenu\'] = new Array();
menuArray[\'CreateHereMenu\'][\'depth\'] = 1; // this is a first level submenu of ContextMenu
menuArray[\'CreateHereMenu\'][\'elements\'] = new Array();
menuArray[\'CreateHereMenu\'][\'elements\'][\'menu-classes\'] = new Array();
menuArray[\'CreateHereMenu\'][\'elements\'][\'menu-classes\'][\'variable\'] = \'%classList%\';
menuArray[\'CreateHereMenu\'][\'elements\'][\'menu-classes\'][\'content\'] = \'<a id="menu-item-create-here" href="#" onclick="ezpopmenu_submitForm( \\\'menu-form-create-here\\\', new Array( \\\'classID\\\', \\\'%classID%\\\' ) ); return false;">%name%<\\/a>\';


menuArray[\'Advanced\'] = new Array();
menuArray[\'Advanced\'][\'depth\'] = 1; // this is a first level submenu of ContextMenu
menuArray[\'Advanced\'][\'elements\'] = new Array();
menuArray[\'Advanced\'][\'elements\'][\'menu-hide\'] = new Array();
menuArray[\'Advanced\'][\'elements\'][\'menu-hide\'][\'url\'] = "/content/hide/%nodeID%";
menuArray[\'Advanced\'][\'elements\'][\'menu-list\'] = new Array();
menuArray[\'Advanced\'][\'elements\'][\'menu-list\'][\'url\'] = "/content/view/sitemap/%nodeID%";
menuArray[\'Advanced\'][\'elements\'][\'reverse-related\'] = new Array();
menuArray[\'Advanced\'][\'elements\'][\'reverse-related\'][\'url\'] = "/content/reverserelatedlist/%nodeID%";
menuArray[\'Advanced\'][\'elements\'][\'menu-history\'] = new Array();
menuArray[\'Advanced\'][\'elements\'][\'menu-history\'][\'url\'] = "/content/history/%objectID%";
menuArray[\'Advanced\'][\'elements\'][\'menu-url-alias\'] = new Array();
menuArray[\'Advanced\'][\'elements\'][\'menu-url-alias\'][\'url\'] = "/content/urlalias/%nodeID%";

menuArray[\'SubitemsContextMenu\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'depth\'] = 0;
menuArray[\'SubitemsContextMenu\'][\'headerID\'] = \'child-menu-header\';
menuArray[\'SubitemsContextMenu\'][\'elements\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-view\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-view\'][\'url\'] = "/content/view/full/%nodeID%";
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-edit\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-edit\'][\'url\'] = "/content/edit/%objectID%";
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-copy\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-copy\'][\'url\'] = "/content/copy/%objectID%";
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-copy-subtree\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-copy-subtree\'][\'url\'] = "/content/copysubtree/%nodeID%";
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-create-here\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-create-here\'][\'disabled_class\'] = \'menu-item-disabled\';

menuArray[\'ClassMenu\'] = new Array();
menuArray[\'ClassMenu\'][\'depth\'] = 0;
menuArray[\'ClassMenu\'][\'headerID\'] = \'class-header\';
menuArray[\'ClassMenu\'][\'elements\'] = new Array();
menuArray[\'ClassMenu\'][\'elements\'][\'class-view\'] = new Array();
menuArray[\'ClassMenu\'][\'elements\'][\'class-view\'][\'url\'] = "/class/view/%classID%";
menuArray[\'ClassMenu\'][\'elements\'][\'class-edit\'] = new Array();
menuArray[\'ClassMenu\'][\'elements\'][\'class-edit\'][\'url\'] = "/class/edit/%classID%";
menuArray[\'ClassMenu\'][\'elements\'][\'class-list\'] = new Array();
menuArray[\'ClassMenu\'][\'elements\'][\'class-list\'][\'url\'] = "/classlists/list/%classID%";
menuArray[\'ClassMenu\'][\'elements\'][\'view-cache-delete\'] = new Array();
menuArray[\'ClassMenu\'][\'elements\'][\'view-cache-delete\'][\'url\'] = "/%currentURL%";
menuArray[\'ClassMenu\'][\'elements\'][\'recursive-view-cache-delete\'] = new Array();
menuArray[\'ClassMenu\'][\'elements\'][\'recursive-view-cache-delete\'][\'url\'] = "/%currentURL%";
menuArray[\'ClassMenu\'][\'elements\'][\'class-history\'] = new Array();
menuArray[\'ClassMenu\'][\'elements\'][\'class-history\'][\'url\'] = "/content/history/%objectID%";
menuArray[\'ClassMenu\'][\'elements\'][\'url-alias\'] = new Array();
menuArray[\'ClassMenu\'][\'elements\'][\'url-alias\'][\'url\'] = "/content/urlalias/%nodeID%";


menuArray[\'EditClassSubmenu\'] = new Array();
menuArray[\'EditClassSubmenu\'][\'depth\'] = 1;
menuArray[\'EditClassSubmenu\'][\'elements\'] = new Array();
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'] = new Array();
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'][\'variable\'] = \'%languages%\';
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'][\'content\'] = \'<a href="/class/edit/%classID%/(language)/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditClassSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'] = new Array();
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'][\'url\'] = "/class/edit/%classID%";
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'][\'disabled_class\'] = \'menu-item-disabled\';

menuArray[\'BookmarkMenu\'] = new Array();
menuArray[\'BookmarkMenu\'][\'depth\'] = 0;
menuArray[\'BookmarkMenu\'][\'headerID\'] = \'bookmark-header\';
menuArray[\'BookmarkMenu\'][\'elements\'] = new Array();
menuArray[\'BookmarkMenu\'][\'elements\'][\'bookmark-view\'] = new Array();
menuArray[\'BookmarkMenu\'][\'elements\'][\'bookmark-view\'][\'url\'] = "/content/view/full/%nodeID%";
menuArray[\'BookmarkMenu\'][\'elements\'][\'bookmark-edit\'] = new Array();
menuArray[\'BookmarkMenu\'][\'elements\'][\'bookmark-edit\'][\'url\'] = "/content/edit/%objectID%";


menuArray[\'OverrideSiteAccess\'] = new Array();
menuArray[\'OverrideSiteAccess\'][\'depth\'] = 1;


menuArray[\'OverrideByClassSiteAccess\'] = new Array();
menuArray[\'OverrideByClassSiteAccess\'][\'depth\'] = 1;


menuArray[\'OverrideByNodeSiteAccess\'] = new Array();
menuArray[\'OverrideByNodeSiteAccess\'][\'depth\'] = 1;

// -->
</script>
<script language="JavaScript" type="text/javascript" src="/design/standard/javascript/lib/ezjslibdomsupport.js"></script>
<script language="JavaScript" type="text/javascript" src="/design/standard/javascript/lib/ezjslibmousetracker.js"></script>
<script language="JavaScript" type="text/javascript" src="/extension/ngadminui/design/ngadminui/javascript/popupmenu/ezpopupmenu.js"></script>

<!-- Treemenu icon click popup menu -->
<div class="popupmenu" id="ContextMenu">
    <div class="popupmenuheader"><h3 id="menu-header">XXX</h3>
        <div class="break"></div>
    </div>
    <a id="menu-view" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )">Ansehen</a>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multilingual_site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multilingual_site'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="menu-edit-in" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'EditSubmenu\', \'menu-edit-in\' ); return false;">Bearbeiten in</a>';
}
else
{
$text .= '    <a id="menu-edit" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )">Bearbeiten</a>';
}
unset( $if_cond );
// if ends

$text .= '    <hr />
    <a id="menu-copy" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )">Kopieren</a>
    <a id="menu-copy-subtree" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )">Teil des Baums kopieren</a>
    <a id="menu-move" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" onclick="ezpopmenu_submitForm( \'menu-form-move\' ); return false;">Verschieben</a>
    <a id="menu-remove" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" onclick="ezpopmenu_submitForm( \'menu-form-remove\' ); return false;">Entfernen</a>
    <a id="menu-advanced" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'Advanced\', \'menu-advanced\' ); return false;">Fortgeschritten</a>
    <hr />';
// if begins
$if_cond = false;
if ( $if_cond )
{
$text .= '    <a id="menu-expand" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezcst_expandSubtree( CurrentSubstituteValues[\'%nodeID%\'] ); ezpopmenu_hideAll(); return false;">Aufklappen</a>
    <a id="menu-collapse" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezcst_collapseSubtree( CurrentSubstituteValues[\'%nodeID%\'] ); ezpopmenu_hideAll(); return false;">Zuklappen</a>';
}
else
{
$text .= '    <a id="menu-collapse" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="treeMenu.collapse( CurrentSubstituteValues[\'%nodeID%\'] ); ezpopmenu_hideAll(); return false;">Zuklappen</a>';
}
unset( $if_cond );
// if ends

$text .= '    <hr />
    <a id="menu-bookmark" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-addbookmark\' ); return false;">Lesezeichen setzen</a>
    <a id="menu-notify" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-notify\' ); return false;">Zu Benachrichtigungen hinzufügen</a>

    <a id="menu-create-here" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'CreateHereMenu\', \'menu-create-here\' ); return false;">Hier erstellen</a>

    
    ';
$loopItem = array (
  0 => 'node/ezmucontextmenu.tpl',
  1 => 'popupmenu/classcontextmenu.tpl',
  2 => 'classlists/classcontextmenu.tpl',
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
$vars[$currentNamespace]['template'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        ';
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
              2 => 'template',
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
    0 => 170,
    1 => 8,
    2 => 11822,
  ),
  1 => 
  array (
    0 => 170,
    1 => 49,
    2 => 11863,
  ),
  2 => 'extension/ezclasslists/design/admin/templates/popupmenu/popup_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</div>

<!-- Subitems icon click popup menu -->
<div class="popupmenu" id="SubitemsContextMenu">
    <div class="popupmenuheader"><h3 id="child-menu-header">XXX</h3>

        <div class="break"></div>
    </div>
    <a id="child-menu-view" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' )">Ansehen</a>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multilingual_site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multilingual_site'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="child-menu-edit-in" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'EditSubmenu\', \'child-menu-edit-in\' ); return false;">Bearbeiten in</a>';
}
else
{
$text .= '    <a id="child-menu-edit" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' )">Bearbeiten</a>';
}
unset( $if_cond );
// if ends

$text .= '    <hr />
    <a id="child-menu-copy" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' )">Kopieren</a>
    <a id="child-menu-copy-subtree" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' )">Teil des Baums kopieren</a>
    <a id="child-menu-move" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-move\' ); return false;">Verschieben</a>
    <a id="child-menu-remove" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-remove\' ); return false;">Entfernen</a>
    <a id="child-menu-advanced" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'Advanced\', \'child-menu-advanced\' ); return false;">Fortgeschritten</a>
    <hr />
    <a id="child-menu-bookmark" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-addbookmark\' ); return false;">Lesezeichen setzen</a>
    <a id="child-menu-notify" href="#" onmouseover="ezpopmenu_mouseOver( \'SubitemsContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-notify\' ); return false;">Zu Benachrichtigungen hinzufügen</a>

    <a id="child-menu-create-here" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'CreateHereMenu\', \'child-menu-create-here\' ); return false;">Hier erstellen</a>

    
    ';
$loopItem = array (
  0 => 'node/ezmusubitemscontextmenu.tpl',
  1 => 'popupmenu/classsubitemscontextmenu.tpl',
  2 => 'classlists/classsubitemscontextmenu.tpl',
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
$vars[$currentNamespace]['template'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        ';
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
              2 => 'template',
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
    0 => 204,
    1 => 8,
    2 => 14560,
  ),
  1 => 
  array (
    0 => 204,
    1 => 49,
    2 => 14601,
  ),
  2 => 'extension/ezclasslists/design/admin/templates/popupmenu/popup_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</div>

';
$loopItem = array (
  0 => 'popupmenu/popup_tag_menu.tpl',
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
$vars[$currentNamespace]['template'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '   ';
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
              2 => 'template',
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
    0 => 210,
    1 => 3,
    2 => 14792,
  ),
  1 => 
  array (
    0 => 210,
    1 => 44,
    2 => 14833,
  ),
  2 => 'extension/ezclasslists/design/admin/templates/popupmenu/popup_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '
<!-- Create here menu -->
<div class="popupmenu" id="CreateHereMenu">
    <div id="menu-classes"></div>
</div>

<!-- Edit menu -->
<div class="popupmenu" id="EditSubmenu">
    <div id="edit-languages"></div>
    <hr />
    <a id="edit-languages-another" href="#" onmouseover="ezpopmenu_mouseOver( \'EditSubmenu\' )">Ein andere Sprache</a>
</div>

<!-- Advanced menu -->
<div class="popupmenu" id="Advanced">
    <a id="menu-swap" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )" onclick="ezpopmenu_submitForm( \'menu-form-swap\' ); return false;">Gegen anderen Knoten austauschen</a>
    <a id="menu-hide" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Verstecken / Zeigen</a>
    <hr />
    <a id="menu-list" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Index anzeigen</a>
    <a id="reverse-related" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Verknüpftes für Baum umdrehen</a>
    <hr />
    <a id="menu-history" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Versionen verwalten</a>
    <a id="menu-url-alias" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">URL-Aliase festlegen</a>
</div>


<!-- Class popup menu -->
<div class="popupmenu" id="ClassMenu">
    <div class="popupmenuheader"><h3 id="class-header">XXX</h3>

        <div class="break"></div>
    </div>
    <a id="class-view" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">Klasse anzeigen</a>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multilingual_site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multilingual_site'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="class-edit-in" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'EditClassSubmenu\', \'class-edit-in\' ); return false;">Klasse bearbeiten in</a>';
}
else
{
$text .= '    <a id="class-edit" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">Klasse bearbeiten</a>';
}
unset( $if_cond );
// if ends

$text .= '    <a id="class-list" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">View objects of this class</a>

    <hr />
    <a id="view-cache-delete" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )" onclick="ezpopmenu_submitForm( \'menu-form-view-cache-delete\' ); return false;">Ansichtscache leeren</a>
<!--
    <a id="template-cache-delete" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">Template Cache leeren</a>
-->
    <a id="recursive-view-cache-delete" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )" onclick="ezpopmenu_submitForm( \'menu-form-recursive-view-cache-delete\' ); return false;">Ansichtscache von hier leeren</a>
    <hr />
    <a id="override-view" class="more" href="#" onmouseover="ezpopmenu_hide(\'OverrideByClassSiteAccess\'); ezpopmenu_hide(\'OverrideByNodeSiteAccess\'); ezpopmenu_showSubLevel( event, \'OverrideSiteAccess\', \'override-view\' ); return false;">Überschreib-Template</a>
    <a id="override-by-class-view" class="more" href="#" onmouseover="ezpopmenu_hide(\'OverrideSiteAccess\'); ezpopmenu_hide(\'OverrideByNodeSiteAccess\'); ezpopmenu_showSubLevel( event, \'OverrideByClassSiteAccess\', \'override-by-class-view\' ); return false;">Neue Klassen-Überschreibung</a>
    <a id="override-by-node-view" class="more" href="#" onmouseover="ezpopmenu_hide(\'OverrideSiteAccess\'); ezpopmenu_hide(\'OverrideByClassSiteAccess\'); ezpopmenu_showSubLevel( event, \'OverrideByNodeSiteAccess\', \'override-by-node-view\' ); return false;">Neue Knoten-Überschreibung</a>
    <hr />
    <a id="class-history" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">Versionen verwalten</a>
    <a id="url-alias" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">URL-Aliase festlegen</a>
</div>

<!-- Edit class submenu -->
<div class="popupmenu" id="EditClassSubmenu">
    <div id="edit-class-languages"></div>
    <hr />
    <!-- <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">Ein andere Sprache</a> -->
    <!-- <div id="edit-class-another-language"></div> -->
    <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">Ein andere Sprache</a>
</div>

<!-- Bookmark popup menu -->
<div class="popupmenu" id="BookmarkMenu">
    <div class="popupmenuheader"><h3 id="bookmark-header">XXX</h3>

        <div class="break"></div>
    </div>
    <a id="bookmark-view" href="#" onmouseover="ezpopmenu_mouseOver( \'BookmarkMenu\' )">Ansehen</a>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multilingual_site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multilingual_site'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="bookmark-edit-in" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'EditSubmenu\', \'bookmark-edit-in\' ); return false;">Bearbeiten in</a>';
}
else
{
$text .= '    <a id="bookmark-edit" href="#" onmouseover="ezpopmenu_mouseOver( \'BookmarkMenu\' )">Bearbeiten</a>';
}
unset( $if_cond );
// if ends

$text .= '    <hr />
    <a id="bookmark-remove" href="#" onmouseover="ezpopmenu_mouseOver( \'BookmarkMenu\' )"
        onclick="ezpopmenu_submitForm( \'menu-form-removebookmark\' ); return false;">Lesezeichen löschen</a>
</div>

<!-- Site access for override popup menu -->';
$vars[$currentNamespace]['siteAccessList'] = array (
  0 => 'en',
  1 => 'de',
  2 => 'legacy_admin',
  3 => 'ngadminui',
);
$text .= '
<div class="popupmenu" id="OverrideSiteAccess">
    <div class="popupmenuheader"><h3 class="override-site-access-menu-header">Seitenzugang auswählen</h3>
        <div class="break"></div>
    </div>

    ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'siteAccessList', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['siteAccessList'] : null;
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
$vars[$currentNamespace]['siteAccess'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'visual/templatecreate/node/view/full.tpl/(siteAccess)/' . $var3 );
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
$vars[$currentNamespace]['link'] = $var;
unset( $var );
$text .= '            <a id="menu-override-siteAccess-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" onclick=\'ezpopmenu_hideAll(); ezpopup_SubstituteAndRedirect(';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '); return true;\' onmouseover="ezpopmenu_mouseOver( \'OverrideSiteAccess\' )">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
        ';
unset( $vars[$currentNamespace]['link'] );
$text .= '    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</div>

<!-- Site access for override by class popup menu -->
<div class="popupmenu" id="OverrideByClassSiteAccess">
    <div class="popupmenuheader"><h3 class="override-site-access-menu-header">Seitenzugang auswählen</h3>
        <div class="break"></div>
    </div>

    ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'siteAccessList', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['siteAccessList'] : null;
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
$vars[$currentNamespace]['siteAccess'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'visual/templatecreate/node/view/full.tpl/(siteAccess)/' . $var3 . '/(classID)/%classID%' );
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
$vars[$currentNamespace]['link'] = $var;
unset( $var );
$text .= '            <a id="menu-override-by-class-siteAccess-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" onclick=\'ezpopmenu_hideAll(); ezpopup_SubstituteAndRedirect(';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '); return true;\' onmouseover="ezpopmenu_mouseOver( \'OverrideByClassSiteAccess\' )">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
        ';
unset( $vars[$currentNamespace]['link'] );
$text .= '    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '
</div>

<!-- Site access for override by node popup menu -->
<div class="popupmenu" id="OverrideByNodeSiteAccess">
    <div class="popupmenuheader"><h3 class="override-site-access-menu-header">Seitenzugang auswählen</h3>
        <div class="break"></div>
    </div>

    ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'siteAccessList', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['siteAccessList'] : null;
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
$vars[$currentNamespace]['siteAccess'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'visual/templatecreate/node/view/full.tpl/(siteAccess)/' . $var3 . '/(nodeID)/%nodeID%' );
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
$vars[$currentNamespace]['link'] = $var;
unset( $var );
$text .= '            <a id="menu-override-by-node-siteAccess-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" onclick=\'ezpopmenu_hideAll(); ezpopup_SubstituteAndRedirect(';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '); return true;\' onmouseover="ezpopmenu_mouseOver( \'OverrideByNodeSiteAccess\' )">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'siteAccess', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['siteAccess'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
        ';
unset( $vars[$currentNamespace]['link'] );
$text .= '    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</div>
';
unset( $vars[$currentNamespace]['siteAccessList'] );
$text .= '



<form id="menu-form-create-here" method="post" action="/content/action">
  <input type="hidden" name="NewButton" value="x" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="ClassID" value="%classID%" />
  <input type="hidden" name="ViewMode" value="full" />
  
</form>


<form id="menu-form-addbookmark" method="post" action="/content/action">
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ActionAddToBookmarks" value="x" />
</form>


<form id="menu-form-removebookmark" method="post" action="/content/bookmark">
  <input type="hidden" name="DeleteIDArray[]" value="%bookmarkID%" />
  <input type="hidden" name="RemoveButton" value="x" />
  <input type="hidden" name="NeedRedirectBack" value="x" />
</form>


<form id="menu-form-remove" method="post" action="/content/action">
  <input type="hidden" name="TopLevelNode" value="%nodeID%" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="ActionRemove" value="x" />
</form>


<form id="menu-form-move" method="post" action="/content/action">
  <input type="hidden" name="TopLevelNode" value="%nodeID%" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="MoveNodeButton" value="x" />
</form>


<form id="menu-form-swap" method="post" action="/content/action">
  <input type="hidden" name="TopLevelNode" value="%nodeID%" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="SwapNodeButton" value="x" />
</form>



<form id="menu-form-notify" method="post" action="/content/action">
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ActionAddToNotification" value="x" />
</form>


<form id="menu-form-view-cache-delete" method="post" action="/content/action">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
  <input type="hidden" name="ClearViewCacheButton" value="x" />
</form>


<form id="menu-form-recursive-view-cache-delete" method="post" action="/content/action">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
  <input type="hidden" name="ClearViewCacheSubtreeButton" value="x" />
</form>
';

$setArray = $oldSetArray_1f594b200880632e1562dbd489952760;
$tpl->Level--;
?>
