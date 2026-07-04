<?php
// URI:       design:content/datatype/view/eztags.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/datatype/view/eztags.tpl
// Timestamp: 1782241051 (Tue Jun 23 18:57:31 UTC 2026)
$oldSetArray_b1897d6343fe3008597677d94c67e0a4 = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'nice_urls', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['nice_urls'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// def $nice_urls
if ( $tpl->hasVariable( 'nice_urls', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'nice_urls' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 25,
    2 => 28,
  ),
  1 => 
  array (
    0 => 1,
    1 => 48,
    2 => 51,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/view/eztags.tpl',
) );
    $tpl->setVariable( 'nice_urls', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'nice_urls', true, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'keywords' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
$var4 = compiledFetchAttribute( $var3, 'keywords' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var6 = compiledFetchAttribute( $var5, 'content' );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'meta_keyword_string' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var2 = ( $var3 . ', ' . $var5 );
unset( $var3, $var5 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = array( 'keywords' => $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( $var2, $var1 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = $var;
    unset( $var );
}
$text .= '    ';
}
else
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = is_array( $if_cond2 );unset( $if_cond2 );
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
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'meta_keyword_string' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( 'keywords' => $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = $var;
    unset( $var );
}
$text .= '        ';
}
else
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var3 = compiledFetchAttribute( $var2, 'content' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'meta_keyword_string' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = array( 'keywords' => $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( '', $vars ) and array_key_exists( 'persistent_variable', $vars[''] ) ) ? $vars['']['persistent_variable'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( $var2, $var1 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    <p>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentclass_attribute' );
unset( $var1 );
$var1 = $var2;
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

$text .= ':&nbsp;
        ';
// foreach begins
$skipDelimiter = true;
$fe_array_a393a8698287e181c306db564585aaf8_1 = [];
$fe_array_keys_a393a8698287e181c306db564585aaf8_1 = [];
$fe_n_items_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_n_items_processed_a393a8698287e181c306db564585aaf8_1  = 0;
$fe_i_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_key_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_val_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_offset_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_max_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_reverse_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_first_val_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_last_val_a393a8698287e181c306db564585aaf8_1 = 0;
if ( !isset( $fe_variable_stack_a393a8698287e181c306db564585aaf8_1 ) ) $fe_variable_stack_a393a8698287e181c306db564585aaf8_1 = [];
$fe_variable_stack_a393a8698287e181c306db564585aaf8_1[] = @compact( 'fe_array_a393a8698287e181c306db564585aaf8_1', 'fe_array_keys_a393a8698287e181c306db564585aaf8_1', 'fe_n_items_a393a8698287e181c306db564585aaf8_1', 'fe_n_items_processed_a393a8698287e181c306db564585aaf8_1', 'fe_i_a393a8698287e181c306db564585aaf8_1', 'fe_key_a393a8698287e181c306db564585aaf8_1', 'fe_val_a393a8698287e181c306db564585aaf8_1', 'fe_offset_a393a8698287e181c306db564585aaf8_1', 'fe_max_a393a8698287e181c306db564585aaf8_1', 'fe_reverse_a393a8698287e181c306db564585aaf8_1', 'fe_first_val_a393a8698287e181c306db564585aaf8_1', 'fe_last_val_a393a8698287e181c306db564585aaf8_1' );
unset( $fe_array_a393a8698287e181c306db564585aaf8_1 );
unset( $fe_array_a393a8698287e181c306db564585aaf8_1 );
$fe_array_a393a8698287e181c306db564585aaf8_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$fe_array_a393a8698287e181c306db564585aaf8_11 = compiledFetchAttribute( $fe_array_a393a8698287e181c306db564585aaf8_1, 'content' );
unset( $fe_array_a393a8698287e181c306db564585aaf8_1 );
$fe_array_a393a8698287e181c306db564585aaf8_1 = $fe_array_a393a8698287e181c306db564585aaf8_11;
$fe_array_a393a8698287e181c306db564585aaf8_11 = compiledFetchAttribute( $fe_array_a393a8698287e181c306db564585aaf8_1, 'tags' );
unset( $fe_array_a393a8698287e181c306db564585aaf8_1 );
$fe_array_a393a8698287e181c306db564585aaf8_1 = $fe_array_a393a8698287e181c306db564585aaf8_11;
if (! isset( $fe_array_a393a8698287e181c306db564585aaf8_1 ) ) $fe_array_a393a8698287e181c306db564585aaf8_1 = NULL;
while ( is_object( $fe_array_a393a8698287e181c306db564585aaf8_1 ) and method_exists( $fe_array_a393a8698287e181c306db564585aaf8_1, 'templateValue' ) )
    $fe_array_a393a8698287e181c306db564585aaf8_1 = $fe_array_a393a8698287e181c306db564585aaf8_1->templateValue();

$fe_array_keys_a393a8698287e181c306db564585aaf8_1 = is_array( $fe_array_a393a8698287e181c306db564585aaf8_1 ) ? array_keys( $fe_array_a393a8698287e181c306db564585aaf8_1 ) : [];
$fe_n_items_a393a8698287e181c306db564585aaf8_1 = count( $fe_array_keys_a393a8698287e181c306db564585aaf8_1 );
$fe_n_items_processed_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_offset_a393a8698287e181c306db564585aaf8_1 = 0;
$fe_max_a393a8698287e181c306db564585aaf8_1 = $fe_n_items_a393a8698287e181c306db564585aaf8_1 - $fe_offset_a393a8698287e181c306db564585aaf8_1;
$fe_reverse_a393a8698287e181c306db564585aaf8_1 = false;
if ( $fe_offset_a393a8698287e181c306db564585aaf8_1 < 0 || $fe_offset_a393a8698287e181c306db564585aaf8_1 >= $fe_n_items_a393a8698287e181c306db564585aaf8_1 )
{
    $fe_offset_a393a8698287e181c306db564585aaf8_1 = ( $fe_offset_a393a8698287e181c306db564585aaf8_1 < 0 ) ? 0 : $fe_n_items_a393a8698287e181c306db564585aaf8_1;
    if ( $fe_n_items_a393a8698287e181c306db564585aaf8_1 || $fe_offset_a393a8698287e181c306db564585aaf8_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_a393a8698287e181c306db564585aaf8_1'. Array count: $fe_n_items_a393a8698287e181c306db564585aaf8_1");   
}
}
if ( $fe_max_a393a8698287e181c306db564585aaf8_1 < 0 || $fe_offset_a393a8698287e181c306db564585aaf8_1 + $fe_max_a393a8698287e181c306db564585aaf8_1 > $fe_n_items_a393a8698287e181c306db564585aaf8_1 )
{
    if ( $fe_max_a393a8698287e181c306db564585aaf8_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_a393a8698287e181c306db564585aaf8_1");
    $fe_max_a393a8698287e181c306db564585aaf8_1 = $fe_n_items_a393a8698287e181c306db564585aaf8_1 - $fe_offset_a393a8698287e181c306db564585aaf8_1;
}
if ( $fe_reverse_a393a8698287e181c306db564585aaf8_1 )
{
    $fe_first_val_a393a8698287e181c306db564585aaf8_1 = $fe_n_items_a393a8698287e181c306db564585aaf8_1 - 1 - $fe_offset_a393a8698287e181c306db564585aaf8_1;
    $fe_last_val_a393a8698287e181c306db564585aaf8_1  = 0;
}
else
{
    $fe_first_val_a393a8698287e181c306db564585aaf8_1 = $fe_offset_a393a8698287e181c306db564585aaf8_1;
    $fe_last_val_a393a8698287e181c306db564585aaf8_1  = $fe_n_items_a393a8698287e181c306db564585aaf8_1 - 1;
}
// foreach
for ( $fe_i_a393a8698287e181c306db564585aaf8_1 = $fe_first_val_a393a8698287e181c306db564585aaf8_1; $fe_n_items_processed_a393a8698287e181c306db564585aaf8_1 < $fe_max_a393a8698287e181c306db564585aaf8_1 && ( $fe_reverse_a393a8698287e181c306db564585aaf8_1 ? $fe_i_a393a8698287e181c306db564585aaf8_1 >= $fe_last_val_a393a8698287e181c306db564585aaf8_1 : $fe_i_a393a8698287e181c306db564585aaf8_1 <= $fe_last_val_a393a8698287e181c306db564585aaf8_1 ); $fe_reverse_a393a8698287e181c306db564585aaf8_1 ? $fe_i_a393a8698287e181c306db564585aaf8_1-- : $fe_i_a393a8698287e181c306db564585aaf8_1++ )
{
$fe_key_a393a8698287e181c306db564585aaf8_1 = $fe_array_keys_a393a8698287e181c306db564585aaf8_1[$fe_i_a393a8698287e181c306db564585aaf8_1];
$fe_val_a393a8698287e181c306db564585aaf8_1 = $fe_array_a393a8698287e181c306db564585aaf8_1[$fe_key_a393a8698287e181c306db564585aaf8_1];
$vars[$rootNamespace]['tag'] = $fe_val_a393a8698287e181c306db564585aaf8_1;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ', ';
} // delimiter ends

$text .= '            <img class="transparent-png-icon" src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var1 = compiledFetchAttribute( $var, 'icon' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'tag_icon',
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

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'keyword' );
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

$text .= '" alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'keyword' );
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

$text .= '" />

            <a href=';
unset( $elseif_cond_a393a8698287e181c306db564585aaf8_6 );
unset( $elseif_cond_a393a8698287e181c306db564585aaf8_6 );
$elseif_cond_a393a8698287e181c306db564585aaf8_6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'nice_urls', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['nice_urls'] : null;
if (! isset( $elseif_cond_a393a8698287e181c306db564585aaf8_6 ) ) $elseif_cond_a393a8698287e181c306db564585aaf8_6 = NULL;
while ( is_object( $elseif_cond_a393a8698287e181c306db564585aaf8_6 ) and method_exists( $elseif_cond_a393a8698287e181c306db564585aaf8_6, 'templateValue' ) )
    $elseif_cond_a393a8698287e181c306db564585aaf8_6 = $elseif_cond_a393a8698287e181c306db564585aaf8_6->templateValue();

// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'has_tags_bundle',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '"';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'symfony_path',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'netgen_tags_admin_tag_show',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'hash',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'tagId',
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
              2 => 'tag',
            ),
            2 => false,
          ),
          1 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'id',
                2 => false,
              ),
            ),
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

$text .= '"';
}
elseif ( $elseif_cond_a393a8698287e181c306db564585aaf8_6 )
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
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

}
else
{
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'tags/id/' . $var3 );
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
$text .= $var;
unset( $var );

}
unset( $if_cond );
// if ends

unset( $elseif_cond_a393a8698287e181c306db564585aaf8_6 );

$text .= '>
                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'keyword' );
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
            </a>
                    ';
$fe_n_items_processed_a393a8698287e181c306db564585aaf8_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_a393a8698287e181c306db564585aaf8_1 ) ) extract( array_pop( $fe_variable_stack_a393a8698287e181c306db564585aaf8_1 ) );

else
{

unset( $fe_array_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_array_keys_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_n_items_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_n_items_processed_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_i_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_key_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_val_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_offset_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_max_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_reverse_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_first_val_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_last_val_a393a8698287e181c306db564585aaf8_1 );

unset( $fe_variable_stack_a393a8698287e181c306db564585aaf8_1 );

}

// foreach ends
$text .= '</p>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_b1897d6343fe3008597677d94c67e0a4;
$tpl->Level--;
?>
