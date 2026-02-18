<?php
// URI:       extension/jactools/design/standard/templates/jactools/debug_toolbar/index.tpl
// Filename:  extension/jactools/design/standard/templates/jactools/debug_toolbar/index.tpl
// Timestamp: 1769599748 (Wed Jan 28 11:29:08 UTC 2026)
$oldSetArray_0e8e3b526b5cbee2a2d71d80badf581d = isset( $setArray ) ? $setArray : array();
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

$text .= '<table id="jactools_debug_toolbar" cellspacing="0" style="border: 1px none lightgray;">

<tr><th>Jactools Extended Debug</th></tr>





<tr><td>

    
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_jactools_pagedata" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <b>[-] <a href="/user/preferences/set/admin_navigation_jactools_pagedata/0" title="Hide">$pagedata</a></b>
    ';
}
else
{
$text .= '        <b>[+] <a href="/user/preferences/set/admin_navigation_jactools_pagedata/1" title="Show">$pagedata</a></b>
    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_jactools_pagedata" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
        <br />
        <br />
        ';
// def $pagedata
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'jactools_pagedata',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedata', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedata' is already defined.", array (
  0 => 
  array (
    0 => 22,
    1 => 8,
    2 => 659,
  ),
  1 => 
  array (
    0 => 22,
    1 => 43,
    2 => 694,
  ),
  2 => 'extension/jactools/design/standard/templates/jactools/debug_toolbar/index.tpl',
) );
    $tpl->setVariable( 'pagedata', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedata', $var, $rootNamespace );
}

$text .= '
        
        <table class="jactools_debug" width="600" style="border: 1px solid black; background-color: rgb(254, 254, 200);">
        <tr style="background-color: rgb(254 , 200, 230);">
        ';
// def $current_url
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var3 = compiledFetchAttribute( $var2, 'http_host' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var4 = compiledFetchAttribute( $var3, 'server_request_uri' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( 'http://' . $var2 . $var3 );
unset( $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_url', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_url' is already defined.", array (
  0 => 
  array (
    0 => 27,
    1 => 8,
    2 => 921,
  ),
  1 => 
  array (
    0 => 27,
    1 => 97,
    2 => 1010,
  ),
  2 => 'extension/jactools/design/standard/templates/jactools/debug_toolbar/index.tpl',
) );
    $tpl->setVariable( 'current_url', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_url', $var, $rootNamespace );
}

$text .= '        <td><b>Adobe browser labs - create screenshots for url:</b> <br />';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_url'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
        <br />
        <br />
        note: the url must be available for adobe browser labs servers, but they have static ip\'s!
        </td>
        <td>
        <ul>
            <li><a target="_blank" href="https://browserlab.adobe.com/de-de/index.html#browsers=WXPIE6000;url=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_url'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ';zoom=100;view=0;state=use">IE6</a></li>
            <li><a target="_blank" href="https://browserlab.adobe.com/de-de/index.html#browsers=WXPIE7000;url=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_url'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ';zoom=100;view=0;state=use">IE7</a></li>
            <li><a target="_blank" href="https://browserlab.adobe.com/de-de/index.html#browsers=WXPIE8000;url=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_url'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ';zoom=100;view=0;state=use">IE8</a></li>
            <li><a target="_blank" href="https://browserlab.adobe.com/de-de/index.html#browsers=CWXPIE9000;url=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_url'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ';zoom=100;view=0;state=use">IE9</a></li>
            <li><a target="_blank" href="https://browserlab.adobe.com/de-de/index.html#browsers=WXPIE7000%2CWXPIE9000%2CWXPFF5000;url=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_url'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ';zoom=100;view=0;state=use">IE7 + IE9 + FF5</a></li>
        </ul>

        ';
// undef $current_url
$tpl->unsetLocalVariable( 'current_url', $rootNamespace );

$text .= '        </td></tr>
        </table>

        <br />

        <table class="jactools_debug" width="600" style="border: 1px solid black; background-color: rgb(254, 254, 200);">
        ';
// foreach begins
$skipDelimiter = true;
$fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 = [];
$fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_2 = [];
$fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_2  = 0;
$fe_i_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_key_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_val_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_max_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
if ( !isset( $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_2 ) ) $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_2 = [];
$fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_2[] = @compact( 'fe_array_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_i_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_key_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_val_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_max_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_2', 'fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_2' );
unset( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 );
unset( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 );
$fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
if (! isset( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 ) ) $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 = NULL;
while ( is_object( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 ) and method_exists( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2, 'templateValue' ) )
    $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 = $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2->templateValue();

$fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_2 = is_array( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 ) ? array_keys( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 ) : [];
$fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 = count( $fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_2 );
$fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 = 0;
$fe_max_1ee70d258873e3a0ab93b8361cf6050d_2 = $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 - $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2;
$fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_2 = false;
if ( $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 < 0 || $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 >= $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 )
{
    $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 = ( $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 < 0 ) ? 0 : $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2;
    if ( $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 || $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2'. Array count: $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2");   
}
}
if ( $fe_max_1ee70d258873e3a0ab93b8361cf6050d_2 < 0 || $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 + $fe_max_1ee70d258873e3a0ab93b8361cf6050d_2 > $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 )
{
    if ( $fe_max_1ee70d258873e3a0ab93b8361cf6050d_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_1ee70d258873e3a0ab93b8361cf6050d_2");
    $fe_max_1ee70d258873e3a0ab93b8361cf6050d_2 = $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 - $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2;
}
if ( $fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_2 )
{
    $fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_2 = $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 - 1 - $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2;
    $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_2  = 0;
}
else
{
    $fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_2 = $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2;
    $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_2  = $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 - 1;
}
// foreach
for ( $fe_i_1ee70d258873e3a0ab93b8361cf6050d_2 = $fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_2; $fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_2 < $fe_max_1ee70d258873e3a0ab93b8361cf6050d_2 && ( $fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_2 ? $fe_i_1ee70d258873e3a0ab93b8361cf6050d_2 >= $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_2 : $fe_i_1ee70d258873e3a0ab93b8361cf6050d_2 <= $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_2 ); $fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_2 ? $fe_i_1ee70d258873e3a0ab93b8361cf6050d_2-- : $fe_i_1ee70d258873e3a0ab93b8361cf6050d_2++ )
{
$fe_key_1ee70d258873e3a0ab93b8361cf6050d_2 = $fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_2[$fe_i_1ee70d258873e3a0ab93b8361cf6050d_2];
$fe_val_1ee70d258873e3a0ab93b8361cf6050d_2 = $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2[$fe_key_1ee70d258873e3a0ab93b8361cf6050d_2];
$vars[$rootNamespace]['sub_value'] = $fe_val_1ee70d258873e3a0ab93b8361cf6050d_2;
$vars[$rootNamespace]['key_name'] = $fe_key_1ee70d258873e3a0ab93b8361cf6050d_2;
$text .= '            <tr style="background-color: rgb(254 , 200, 230);">
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_value'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = is_array( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <td colspan="2"><b>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</b></td>
                </tr>
                ';
// foreach begins
$skipDelimiter = true;
$fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 = [];
$fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_1 = [];
$fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_1  = 0;
$fe_i_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_key_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_val_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_max_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
if ( !isset( $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_1 ) ) $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_1 = [];
$fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_1[] = @compact( 'fe_array_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_i_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_key_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_val_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_max_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_1', 'fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_1' );
unset( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 );
unset( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 );
$fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_value'] : null;
if (! isset( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 ) ) $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 = NULL;
while ( is_object( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 ) and method_exists( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1, 'templateValue' ) )
    $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 = $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1->templateValue();

$fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_1 = is_array( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 ) ? array_keys( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 ) : [];
$fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 = count( $fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_1 );
$fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 = 0;
$fe_max_1ee70d258873e3a0ab93b8361cf6050d_1 = $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 - $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1;
$fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_1 = false;
if ( $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 < 0 || $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 >= $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 )
{
    $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 = ( $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 < 0 ) ? 0 : $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1;
    if ( $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 || $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1'. Array count: $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1");   
}
}
if ( $fe_max_1ee70d258873e3a0ab93b8361cf6050d_1 < 0 || $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 + $fe_max_1ee70d258873e3a0ab93b8361cf6050d_1 > $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 )
{
    if ( $fe_max_1ee70d258873e3a0ab93b8361cf6050d_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_1ee70d258873e3a0ab93b8361cf6050d_1");
    $fe_max_1ee70d258873e3a0ab93b8361cf6050d_1 = $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 - $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1;
}
if ( $fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_1 )
{
    $fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_1 = $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 - 1 - $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1;
    $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_1  = 0;
}
else
{
    $fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_1 = $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1;
    $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_1  = $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 - 1;
}
// foreach
for ( $fe_i_1ee70d258873e3a0ab93b8361cf6050d_1 = $fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_1; $fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_1 < $fe_max_1ee70d258873e3a0ab93b8361cf6050d_1 && ( $fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_1 ? $fe_i_1ee70d258873e3a0ab93b8361cf6050d_1 >= $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_1 : $fe_i_1ee70d258873e3a0ab93b8361cf6050d_1 <= $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_1 ); $fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_1 ? $fe_i_1ee70d258873e3a0ab93b8361cf6050d_1-- : $fe_i_1ee70d258873e3a0ab93b8361cf6050d_1++ )
{
$fe_key_1ee70d258873e3a0ab93b8361cf6050d_1 = $fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_1[$fe_i_1ee70d258873e3a0ab93b8361cf6050d_1];
$fe_val_1ee70d258873e3a0ab93b8361cf6050d_1 = $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1[$fe_key_1ee70d258873e3a0ab93b8361cf6050d_1];
$vars[$rootNamespace]['value'] = $fe_val_1ee70d258873e3a0ab93b8361cf6050d_1;
$vars[$rootNamespace]['key'] = $fe_key_1ee70d258873e3a0ab93b8361cf6050d_1;
$text .= '                <tr>
                <th align="left">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</th>
                <td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['value'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
                </tr>
                ';
$fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_1 ) ) extract( array_pop( $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_1 ) );

else
{

unset( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_i_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_key_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_val_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_max_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_1 );

unset( $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_1 );

}

// foreach ends
$text .= '            ';
}
else
{
$text .= '                <td><b>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</b></td><td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_value'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
            ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
$fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_2 ) ) extract( array_pop( $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_2 ) );

else
{

unset( $fe_array_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_array_keys_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_n_items_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_n_items_processed_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_i_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_key_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_val_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_offset_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_max_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_reverse_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_first_val_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_last_val_1ee70d258873e3a0ab93b8361cf6050d_2 );

unset( $fe_variable_stack_1ee70d258873e3a0ab93b8361cf6050d_2 );

}

// foreach ends
$text .= '
        </table>
    ';
}
unset( $if_cond );
// if ends

$text .= '
<div id="admin_navigation_jactools_pagedata_attribute_show">
    
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_jactools_pagedata_attribute_show" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <b>[-] <a href="/user/preferences/set/admin_navigation_jactools_pagedata_attribute_show/0" title="Hide">$pagedata|attribute(show)</a></b>
    ';
}
else
{
$text .= '        <b>[+] <a href="/user/preferences/set/admin_navigation_jactools_pagedata_attribute_show/1" title="Show">$pagedata|attribute(show)</a></b>
    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_jactools_pagedata_attribute_show" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $pagedata
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'jactools_pagedata',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedata', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedata' is already defined.", array (
  0 => 
  array (
    0 => 78,
    1 => 8,
    2 => 3530,
  ),
  1 => 
  array (
    0 => 78,
    1 => 43,
    2 => 3565,
  ),
  2 => 'extension/jactools/design/standard/templates/jactools/debug_toolbar/index.tpl',
) );
    $tpl->setVariable( 'pagedata', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedata', $var, $rootNamespace );
}

$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'attribute',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'show',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 2,
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
$text .= $var;
unset( $var );

$text .= '
    ';
}
unset( $if_cond );
// if ends

$text .= '</div>

<div id="admin_navigation_jactools_module_result">

    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_jactools_module_result" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <b>[-] <a href="/user/preferences/set/admin_navigation_jactools_module_result/0" title="Hide">$module_result|attribute(show)</a></b>
    ';
}
else
{
$text .= '        <b>[+] <a href="/user/preferences/set/admin_navigation_jactools_module_result/1" title="Show">$module_result|attribute(show)</a></b>
    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_navigation_jactools_module_result" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'attribute',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'show',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 2,
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
$text .= $var;
unset( $var );

$text .= '
    ';
}
unset( $if_cond );
// if ends

$text .= '</div>

</td></tr></table>
';

$setArray = $oldSetArray_0e8e3b526b5cbee2a2d71d80badf581d;
$tpl->Level--;
?>
