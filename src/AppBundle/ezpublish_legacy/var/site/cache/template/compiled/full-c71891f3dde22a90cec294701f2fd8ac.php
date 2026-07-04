<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/node/view/full.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_c94439a36f3ec09d2675bca0a0a16010 = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '    <div class="node-top-switch">
        <ul class="node-view-switch">
            <li class="active">
                <a href=""><i class="fa fa-file-text-o"></i> Content</a>
                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array_values( array(  ) ) );
$if_cond1 = isset( $if_cond1['result'] ) ? $if_cond1['result'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <form class="dropdown language-switch" method="post" action="/content/action">
                        ';
// def $can_create_languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'can_create_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_create_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create_languages' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 24,
    2 => 449,
  ),
  1 => 
  array (
    0 => 11,
    1 => 24,
    2 => 648,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'can_create_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_languages', $var, $rootNamespace );
}

// def $languages
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchPrioritizedLanguages' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'languages' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 24,
    2 => 449,
  ),
  1 => 
  array (
    0 => 11,
    1 => 24,
    2 => 648,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'languages', $var, $rootNamespace );
}

$text .= '
                        <input type="hidden" name="TopLevelNode" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'main_node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                        <input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                        <input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                        <input name="ContentObjectLanguageCode" value="" type="hidden" />

                        <button class="btn btn-default dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'current_language' );
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

$text .= '" width="18" height="12" alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'current_language' );
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

$text .= '" style="vertical-align: middle;" /> <span class="tt">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'current_language_object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'locale_object' );
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
                            <span class="caret"></span>
                        </button>

                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'object' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'languages' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) > ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_languages'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond3Data = array( 'value' => $if_cond3 );
$tpl->processOperator( 'count',
                       array (
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
$text .= '                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                ';
// foreach begins
$skipDelimiter = true;
$fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 = [];
$fe_array_keys_0e59ae57f8952d3f1d155600443bd4f9_1 = [];
$fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_n_items_processed_0e59ae57f8952d3f1d155600443bd4f9_1  = 0;
$fe_i_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_key_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_val_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_max_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_reverse_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_first_val_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_last_val_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
if ( !isset( $fe_variable_stack_0e59ae57f8952d3f1d155600443bd4f9_1 ) ) $fe_variable_stack_0e59ae57f8952d3f1d155600443bd4f9_1 = [];
$fe_variable_stack_0e59ae57f8952d3f1d155600443bd4f9_1[] = @compact( 'fe_array_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_array_keys_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_n_items_processed_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_i_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_key_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_val_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_max_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_reverse_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_first_val_0e59ae57f8952d3f1d155600443bd4f9_1', 'fe_last_val_0e59ae57f8952d3f1d155600443bd4f9_1' );
unset( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 );
unset( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 );
$fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_0e59ae57f8952d3f1d155600443bd4f9_11 = compiledFetchAttribute( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1, 'object' );
unset( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 );
$fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_array_0e59ae57f8952d3f1d155600443bd4f9_11;
$fe_array_0e59ae57f8952d3f1d155600443bd4f9_11 = compiledFetchAttribute( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1, 'languages' );
unset( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 );
$fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_array_0e59ae57f8952d3f1d155600443bd4f9_11;
if (! isset( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 ) ) $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 = NULL;
while ( is_object( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 ) and method_exists( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1, 'templateValue' ) )
    $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1->templateValue();

$fe_array_keys_0e59ae57f8952d3f1d155600443bd4f9_1 = is_array( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 ) ? array_keys( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 ) : [];
$fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 = count( $fe_array_keys_0e59ae57f8952d3f1d155600443bd4f9_1 );
$fe_n_items_processed_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 = 0;
$fe_max_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 - $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1;
$fe_reverse_0e59ae57f8952d3f1d155600443bd4f9_1 = false;
if ( $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 < 0 || $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 >= $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 )
{
    $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 = ( $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 < 0 ) ? 0 : $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1;
    if ( $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 || $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1'. Array count: $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1");   
}
}
if ( $fe_max_0e59ae57f8952d3f1d155600443bd4f9_1 < 0 || $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 + $fe_max_0e59ae57f8952d3f1d155600443bd4f9_1 > $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 )
{
    if ( $fe_max_0e59ae57f8952d3f1d155600443bd4f9_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_0e59ae57f8952d3f1d155600443bd4f9_1");
    $fe_max_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 - $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1;
}
if ( $fe_reverse_0e59ae57f8952d3f1d155600443bd4f9_1 )
{
    $fe_first_val_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 - 1 - $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1;
    $fe_last_val_0e59ae57f8952d3f1d155600443bd4f9_1  = 0;
}
else
{
    $fe_first_val_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1;
    $fe_last_val_0e59ae57f8952d3f1d155600443bd4f9_1  = $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 - 1;
}
// foreach
for ( $fe_i_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_first_val_0e59ae57f8952d3f1d155600443bd4f9_1; $fe_n_items_processed_0e59ae57f8952d3f1d155600443bd4f9_1 < $fe_max_0e59ae57f8952d3f1d155600443bd4f9_1 && ( $fe_reverse_0e59ae57f8952d3f1d155600443bd4f9_1 ? $fe_i_0e59ae57f8952d3f1d155600443bd4f9_1 >= $fe_last_val_0e59ae57f8952d3f1d155600443bd4f9_1 : $fe_i_0e59ae57f8952d3f1d155600443bd4f9_1 <= $fe_last_val_0e59ae57f8952d3f1d155600443bd4f9_1 ); $fe_reverse_0e59ae57f8952d3f1d155600443bd4f9_1 ? $fe_i_0e59ae57f8952d3f1d155600443bd4f9_1-- : $fe_i_0e59ae57f8952d3f1d155600443bd4f9_1++ )
{
$fe_key_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_array_keys_0e59ae57f8952d3f1d155600443bd4f9_1[$fe_i_0e59ae57f8952d3f1d155600443bd4f9_1];
$fe_val_0e59ae57f8952d3f1d155600443bd4f9_1 = $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1[$fe_key_0e59ae57f8952d3f1d155600443bd4f9_1];
$vars[$rootNamespace]['language'] = $fe_val_0e59ae57f8952d3f1d155600443bd4f9_1;
$text .= '                                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'locale' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'object' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'current_language' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( $if_cond3 ) );
unset( $if_cond2, $if_cond3 );
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
$text .= '                                        <li ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'object' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_edit_languages' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( mb_strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="with-edit" ';
}
unset( $if_cond );
// if ends

$text .= '>
                                            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'url' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var5 = compiledFetchAttribute( $var4, 'locale' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '/(language)/' . $var4 );
unset( $var2, $var4 );
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

$text .= ' title="View translation.">
                                                <img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var1 = compiledFetchAttribute( $var, 'locale' );
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

$text .= '" width="18" height="12" alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'locale' );
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

$text .= '" style="vertical-align: middle;" /> ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
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

$text .= '
                                            </a>

                                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'object' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_edit_languages' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( mb_strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                                <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
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
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var6 = compiledFetchAttribute( $var5, 'locale' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var1 = ( 'content/edit/' . $var3 . '/f/' . $var5 );
unset( $var3, $var5 );
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

$text .= ' class="edit-icon" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var5 = compiledFetchAttribute( $var4, 'locale_object' );
unset( $var4 );
$var4 = $var5;
$var5 = compiledFetchAttribute( $var4, 'intl_language_name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%language.name' => $var4 );unset( $var4 );
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
$var1 = strtr( 'Edit in %language.name.', $var4 );
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

$text .= '"><i class="fa fa-edit"></i></a>
                                            ';
}
unset( $if_cond );
// if ends

$text .= '                                        </li>
                                    ';
}
unset( $if_cond );
// if ends

$text .= '                                ';
$fe_n_items_processed_0e59ae57f8952d3f1d155600443bd4f9_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_0e59ae57f8952d3f1d155600443bd4f9_1 ) ) extract( array_pop( $fe_variable_stack_0e59ae57f8952d3f1d155600443bd4f9_1 ) );

else
{

unset( $fe_array_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_array_keys_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_n_items_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_n_items_processed_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_i_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_key_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_val_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_offset_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_max_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_reverse_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_first_val_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_last_val_0e59ae57f8952d3f1d155600443bd4f9_1 );

unset( $fe_variable_stack_0e59ae57f8952d3f1d155600443bd4f9_1 );

}

// foreach ends
$text .= '                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_languages'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'object' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_edit_languages' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                        <li role="separator" class="divider"></li>
                                    ';
}
unset( $if_cond );
// if ends

$text .= '                                    <li><button type="submit" name="EditButton">+ Add new translation</button></li>
                                ';
}
unset( $if_cond );
// if ends

$text .= '                            </ul>
                        ';
}
unset( $if_cond );
// if ends

$text .= '
                        ';
// undef $can_create_languages
$tpl->unsetLocalVariable( 'can_create_languages', $rootNamespace );

$text .= '                    </form>
                ';
}
unset( $if_cond );
// if ends

$text .= '            </li>
            <li>
                <form method="post" id="previewForm" action=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
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
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var6 = compiledFetchAttribute( $var5, 'object' );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'current_version' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var8 = compiledFetchAttribute( $var7, 'locale' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var1 = ( 'content/versionview/' . $var3 . '/' . $var5 . '/' . $var7 . '/' . $var9 );
unset( $var3, $var5, $var7, $var9 );
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
                    <input type="hidden" id="SelectedLanguage" name="SelectedLanguage" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'current_language_object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'locale_object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
                    <input type="hidden" name="ChangeSettingsButton" value="Update view" title="View the version that is currently being displayed using the selected language, location and design." />
                    <input type="hidden" name="ezxform_token" value="@$ezxFormToken@" />
                </form>
                <a type="submit" name="ChangeSettingsButton" title="View the version that is currently being displayed using the selected language, location and design." onclick="document.getElementById(\'previewForm\').submit();"><i class="fa fa-globe"></i> Preview</a>
            </li>
        </ul>
    </div>';
$blockText = $text;
$vars[$currentNamespace]['top_menu'] = $blockText;
unset( $blockText );

$text = array_pop( $textStack );
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'top_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['top_menu'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( 'top_menu' => $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = $var;
    unset( $var );
}
$text .= '
<div class="content-view-full class-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
$oldRestoreIncludeArray_29f03d48328a11138293f7147f37ddf4 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/infocollection_validation-e1c200602473d9b8556553a17b062cf0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/infocollection_validation.tpl' );
include( '' . 'var/site/cache/template/compiled/infocollection_validation-e1c200602473d9b8556553a17b062cf0.php' );
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
$tpl->processURI( 'design/admin/templates/infocollection_validation.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_29f03d48328a11138293f7147f37ddf4;

$text .= '
    <div class="content-navigation">

        


        
        <div class="title-wrapper clearfix">
            ';
$oldRestoreIncludeArray_ac53292897b05c5d0664cab3f031433e = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/window_preview_toolbar-aa8033415163e4b8abe74856ac50b182.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/window_preview_toolbar.tpl' );
include( '' . 'var/site/cache/template/compiled/window_preview_toolbar-aa8033415163e4b8abe74856ac50b182.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/window_preview_toolbar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_ac53292897b05c5d0664cab3f031433e;

$text .= '
            ';
// def $js_class_languages
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'condi',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'is_set',
        1 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'node',
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
                1 => 'object',
                2 => false,
              ),
            ),
            2 => false,
          ),
          2 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'content_class',
                2 => false,
              ),
            ),
            2 => false,
          ),
          3 => 
          array (
            0 => 5,
            1 => 
            array (
              0 => 
              array (
                0 => 3,
                1 => 'prioritized_languages_js_array',
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
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
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
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'content_class',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'prioritized_languages_js_array',
          2 => false,
        ),
      ),
      2 => false,
    ),
    4 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'explode',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '"',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
    5 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'implode',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '\'',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 7,
      1 => false,
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
if ( $tpl->hasVariable( 'js_class_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'js_class_languages' is already defined.", array (
  0 => 
  array (
    0 => 77,
    1 => 12,
    2 => 5433,
  ),
  1 => 
  array (
    0 => 80,
    1 => 34,
    2 => 5914,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'js_class_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'js_class_languages', $var, $rootNamespace );
}

// def $disable_another_language
unset( $var );
unset( $var1 );
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
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
        2 => 'node',
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
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'content_class',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'can_create_languages',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( ( 0 ) == ( $var3 ) );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = "'edit-class-another-language'";
}
else
{
    
    $var = '-1';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'disable_another_language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'disable_another_language' is already defined.", array (
  0 => 
  array (
    0 => 77,
    1 => 12,
    2 => 5433,
  ),
  1 => 
  array (
    0 => 80,
    1 => 34,
    2 => 5914,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'disable_another_language', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'disable_another_language', $var, $rootNamespace );
}

// def $disabled_sub_menu
if ( $tpl->hasVariable( 'disabled_sub_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'disabled_sub_menu' is already defined.", array (
  0 => 
  array (
    0 => 77,
    1 => 12,
    2 => 5433,
  ),
  1 => 
  array (
    0 => 80,
    1 => 34,
    2 => 5914,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'disabled_sub_menu', '[\'class-createnodefeed\', \'class-removenodefeed\']', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'disabled_sub_menu', '[\'class-createnodefeed\', \'class-removenodefeed\']', $rootNamespace );
}

// def $hide_status
if ( $tpl->hasVariable( 'hide_status', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_status' is already defined.", array (
  0 => 
  array (
    0 => 77,
    1 => 12,
    2 => 5433,
  ),
  1 => 
  array (
    0 => 80,
    1 => 34,
    2 => 5914,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'hide_status', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_status', '', $rootNamespace );
}

$text .= '
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_invisible' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'hidden_status_string' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( '(' . $var2 . ')' );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'hide_status', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['hide_status'] = $var;
    unset( $var );
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '
            
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = array (
  'folder' => 'article',
);
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'class_identifier' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
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
$text .= '                ';
// def $create_rss_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "rss",
    'function' => "edit",
    'user_id' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'create_rss_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'create_rss_access' is already defined.", array (
  0 => 
  array (
    0 => 88,
    1 => 16,
    2 => 6290,
  ),
  1 => 
  array (
    0 => 88,
    1 => 118,
    2 => 6392,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'create_rss_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'create_rss_access', $var, $rootNamespace );
}

$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'create_rss_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['create_rss_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = call_user_func_array( array( new eZRSSFunctionCollection(), 'hasExportByNode' ),
  array_values( array(     'node_id' => $if_cond1 ) ) );
$if_cond = isset( $if_cond['result'] ) ? $if_cond['result'] : null;
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'disabled_sub_menu', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['disabled_sub_menu'] = '\'class-createnodefeed\'';
}
$text .= '                    ';
}
else
{
$text .= '                        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'disabled_sub_menu', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['disabled_sub_menu'] = '\'class-removenodefeed\'';
}
$text .= '                    ';
}
unset( $if_cond );
// if ends

$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            

            <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'contentclass_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/class/view/' . $var3 );
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

$text .= ' onclick="ezpopmenu_showTopLevel( event, \'ClassMenu\', ez_createAArray( new Array( \'%classID%\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'contentclass_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', \'%objectID%\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', \'%nodeID%\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', \'%currentURL%\', \'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\', \'%languages%\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'js_class_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['js_class_languages'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ) ), \'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'class_name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled_sub_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled_sub_menu'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disable_another_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disable_another_language'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ); return false;" class="title-edit">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'normal',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
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
          1 => 'class_name',
          2 => false,
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

$text .= '</a>

            <h1 class="context-title">
                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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

$text .= '&nbsp;<span class="type">[';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'class_name' );
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

$text .= ']</span> ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_status', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_status'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '

                ';
// undef $js_class_languages
$tpl->unsetLocalVariable( 'js_class_languages', $rootNamespace );

// undef $disable_another_language
$tpl->unsetLocalVariable( 'disable_another_language', $rootNamespace );

// undef $disabled_sub_menu
$tpl->unsetLocalVariable( 'disabled_sub_menu', $rootNamespace );

// undef $hide_status
$tpl->unsetLocalVariable( 'hide_status', $rootNamespace );

$text .= '            </h1>
        </div>
        

        <div id="window-controls" class="tab-block">
            ';
$oldRestoreIncludeArray_38b5d8b5ee24d8fdc8b98202815be46a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/window_controls-8b7eb305b87340fd083c03c6ef0a1b98.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl' );
include( '' . 'var/site/cache/template/compiled/window_controls-8b7eb305b87340fd083c03c6ef0a1b98.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/window_controls.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_38b5d8b5ee24d8fdc8b98202815be46a;

$text .= '        </div>

    </div>
</div>
';

$setArray = $oldSetArray_c94439a36f3ec09d2675bca0a0a16010;
$tpl->Level--;
?>
