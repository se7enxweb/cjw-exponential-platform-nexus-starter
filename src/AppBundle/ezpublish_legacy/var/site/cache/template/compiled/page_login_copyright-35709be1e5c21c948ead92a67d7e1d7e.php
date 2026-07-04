<?php
// URI:       extension/ngsite/design/admin/templates/page_login_copyright.tpl
// Filename:  extension/ngsite/design/admin/templates/page_login_copyright.tpl
// Timestamp: 1782248323 (Tue Jun 23 20:58:43 UTC 2026)
$oldSetArray_661eb6bb97aed7c5a9b0c566630f0b36 = isset( $setArray ) ? $setArray : array();
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
<p>
';
unset( $var );
$var3 = array();
foreach ( array (
  '%ezpublish_link' => 'http://ez.no/ezpublish',
  '%ez_link' => 'http://ez.no',
) as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( ' <a href="%ezpublish_link">eZ Publish</a> Copyright &copy; 1999-2014 <a href="%ez_link">eZ Systems AS</a> and others.', $var3 );
unset( $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>
';

$setArray = $oldSetArray_661eb6bb97aed7c5a9b0c566630f0b36;
$tpl->Level--;
?>
