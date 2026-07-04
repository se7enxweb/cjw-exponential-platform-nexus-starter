<?php
// URI:       extension/ngsite/design/admin/templates/page_head_script.tpl
// Filename:  extension/ngsite/design/admin/templates/page_head_script.tpl
// Timestamp: 1782248323 (Tue Jun 23 20:58:43 UTC 2026)
$oldSetArray_1410abb0b5e23e859173d8bf78e1ae4f = isset( $setArray ) ? $setArray : array();
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

unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_load',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezini',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'JavaScriptSettings',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'BackendJavaScriptList',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design.ini',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'prepend',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::jquery',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::jqueryio',
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

$text .= '
';

$setArray = $oldSetArray_1410abb0b5e23e859173d8bf78e1ae4f;
$tpl->Level--;
?>
