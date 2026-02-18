<?php
// URI:       design:node/ezmusubitemscontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmusubitemscontextmenu.tpl
// Timestamp: 1706515857 (Mon Jan 29 8:10:57 UTC 2024)
$oldSetArray_08e01745bce3817d38199a070437f802 = isset( $setArray ) ? $setArray : array();
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

$text .= '
<hr/>
<script type="text/javascript">
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'][\'url\'] = "/ezmultiupload/upload/%nodeID%";
</script>

<a id="child-menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Multi Upload</a>
';

$setArray = $oldSetArray_08e01745bce3817d38199a070437f802;
$tpl->Level--;
?>
