<?php
// URI:       design:node/ezmucontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmucontextmenu.tpl
// Timestamp: 1706515857 (Mon Jan 29 8:10:57 UTC 2024)
$oldSetArray_25851589286682765ccf57b3a431d09a = isset( $setArray ) ? $setArray : array();
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
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'][\'url\'] = "/ezmultiupload/upload/%nodeID%";
</script>

<a id="menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Upload multiple files</a>';

$setArray = $oldSetArray_25851589286682765ccf57b3a431d09a;
$tpl->Level--;
?>
