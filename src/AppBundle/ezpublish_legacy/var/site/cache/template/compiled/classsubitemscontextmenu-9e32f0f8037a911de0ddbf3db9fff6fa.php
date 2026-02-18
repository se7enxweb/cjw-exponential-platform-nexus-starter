<?php
// URI:       design:classlists/classsubitemscontextmenu.tpl
// Filename:  extension/ezclasslists/design/standard/templates/classlists/classsubitemscontextmenu.tpl
// Timestamp: 1564571593 (Wed Jul 31 11:13:13 UTC 2019)
$oldSetArray_1c267a5c02c07bde9cc1cff04e348dde = isset( $setArray ) ? $setArray : array();
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

$text .= '<hr/>

<a id="menu-class-list" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
   onclick="ezpopmenu_submitForm( \'menu-form-class-list\' ); return false;">Class list under node</a>


<form id="menu-form-class-list" method="POST" action="/classlists/list">
    <input type="hidden" name="SelectedNodeIDArray[]" value="%nodeID%" />
</form>
';

$setArray = $oldSetArray_1c267a5c02c07bde9cc1cff04e348dde;
$tpl->Level--;
?>
