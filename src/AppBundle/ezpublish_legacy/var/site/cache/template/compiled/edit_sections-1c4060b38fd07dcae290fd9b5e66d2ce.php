<?php
// URI:       extension/ngadminui/design/ngadminui/templates/content/parts/edit_sections.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/parts/edit_sections.tpl
// Timestamp: 1782241051 (Tue Jun 23 18:57:31 UTC 2026)
$oldSetArray_3a2b2e2dfa1f35cbf38ce2e0302008b5 = isset( $setArray ) ? $setArray : array();
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



';
// def $sections
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'allowed_assign_section_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sections', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sections' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 0,
    2 => 272,
  ),
  1 => 
  array (
    0 => 8,
    1 => 34,
    2 => 356,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/parts/edit_sections.tpl',
) );
    $tpl->setVariable( 'sections', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sections', $var, $rootNamespace );
}

// def $currentSectionName
if ( $tpl->hasVariable( 'currentSectionName', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'currentSectionName' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 0,
    2 => 272,
  ),
  1 => 
  array (
    0 => 8,
    1 => 34,
    2 => 356,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/parts/edit_sections.tpl',
) );
    $tpl->setVariable( 'currentSectionName', 'unknown', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'currentSectionName', 'unknown', $rootNamespace );
}

$text .= '
';
// foreach begins
$skipDelimiter = true;
$fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 = [];
$fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_5 = [];
$fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_5  = 0;
$fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_key_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_val_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
if ( !isset( $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_5 ) ) $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_5 = [];
$fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_5[] = @compact( 'fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_key_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_val_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_5', 'fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_5' );
unset( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 );
unset( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 );
$fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sections', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sections'] : null;
if (! isset( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 ) ) $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 = NULL;
while ( is_object( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 ) and method_exists( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5, 'templateValue' ) )
    $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 = $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5->templateValue();

$fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_5 = is_array( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 ) ? array_keys( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 ) : [];
$fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 = count( $fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_5 );
$fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 = 0;
$fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5 = $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 - $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5;
$fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_5 = false;
if ( $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 < 0 || $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 >= $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 )
{
    $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 = ( $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 < 0 ) ? 0 : $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5;
    if ( $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 || $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5'. Array count: $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5");   
}
}
if ( $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5 < 0 || $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 + $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5 > $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 )
{
    if ( $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5");
    $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5 = $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 - $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5;
}
if ( $fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_5 )
{
    $fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_5 = $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 - 1 - $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5;
    $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_5  = 0;
}
else
{
    $fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_5 = $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5;
    $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_5  = $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 - 1;
}
// foreach
for ( $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5 = $fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_5; $fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_5 < $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5 && ( $fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_5 ? $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5 >= $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_5 : $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5 <= $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_5 ); $fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_5 ? $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5-- : $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5++ )
{
$fe_key_fb1d73cec763795f1d52fa2d25ccfd55_5 = $fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_5[$fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5];
$fe_val_fb1d73cec763795f1d52fa2d25ccfd55_5 = $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5[$fe_key_fb1d73cec763795f1d52fa2d25ccfd55_5];
$vars[$rootNamespace]['sectionItem'] = $fe_val_fb1d73cec763795f1d52fa2d25ccfd55_5;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sectionItem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sectionItem'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'section_id' );
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
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sectionItem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sectionItem'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'currentSectionName', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['currentSectionName'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_5 ) ) extract( array_pop( $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_5 ) );

else
{

unset( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_key_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_val_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_5 );

unset( $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_5 );

}

// foreach ends
$text .= '
<h3>Section: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currentSectionName', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currentSectionName'] : null;
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

$text .= ' [';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
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
        2 => 'sections',
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
$text .= $var;
unset( $var );

$text .= ']</h3>';
// undef $currentSectionName
$tpl->unsetLocalVariable( 'currentSectionName', $rootNamespace );

$text .= '



<div class="box-content">

    
    <label for="SelectedSectionId">Choose section:</label>
    <select class="form-control input-sm" id="SelectedSectionId" name="SelectedSectionId"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_is_draft', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_is_draft'] : null;
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
$text .= ' disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= '>
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 = [];
$fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_6 = [];
$fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_6  = 0;
$fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_key_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_val_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
if ( !isset( $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_6 ) ) $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_6 = [];
$fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_6[] = @compact( 'fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_key_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_val_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_6', 'fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_6' );
unset( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 );
unset( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 );
$fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sections', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sections'] : null;
if (! isset( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 ) ) $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 = NULL;
while ( is_object( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 ) and method_exists( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6, 'templateValue' ) )
    $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 = $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6->templateValue();

$fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_6 = is_array( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 ) ? array_keys( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 ) : [];
$fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 = count( $fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_6 );
$fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 = 0;
$fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6 = $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 - $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6;
$fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_6 = false;
if ( $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 < 0 || $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 >= $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 )
{
    $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 = ( $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 < 0 ) ? 0 : $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6;
    if ( $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 || $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6'. Array count: $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6");   
}
}
if ( $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6 < 0 || $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 + $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6 > $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 )
{
    if ( $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6");
    $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6 = $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 - $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6;
}
if ( $fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_6 )
{
    $fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_6 = $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 - 1 - $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6;
    $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_6  = 0;
}
else
{
    $fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_6 = $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6;
    $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_6  = $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 - 1;
}
// foreach
for ( $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6 = $fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_6; $fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_6 < $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6 && ( $fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_6 ? $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6 >= $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_6 : $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6 <= $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_6 ); $fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_6 ? $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6-- : $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6++ )
{
$fe_key_fb1d73cec763795f1d52fa2d25ccfd55_6 = $fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_6[$fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6];
$fe_val_fb1d73cec763795f1d52fa2d25ccfd55_6 = $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6[$fe_key_fb1d73cec763795f1d52fa2d25ccfd55_6];
$vars[$rootNamespace]['section'] = $fe_val_fb1d73cec763795f1d52fa2d25ccfd55_6;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'section_id' );
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
$text .= '        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" selected="selected">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
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

$text .= '</option>
        ';
}
else
{
$text .= '        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
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

$text .= '</option>
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_6++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_6 ) ) extract( array_pop( $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_6 ) );

else
{

unset( $fe_array_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_array_keys_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_n_items_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_n_items_processed_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_i_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_key_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_val_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_offset_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_max_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_reverse_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_first_val_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_last_val_fb1d73cec763795f1d52fa2d25ccfd55_6 );

unset( $fe_variable_stack_fb1d73cec763795f1d52fa2d25ccfd55_6 );

}

// foreach ends
$text .= '    </select>

    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_is_draft', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_is_draft'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <input type="submit" value="Set" name="SectionEditButton" class="btn btn-default btn-sm" />
    ';
}
else
{
$text .= '        <input type="submit" value="Set" name="SectionEditButton" class="btn btn-default btn-sm" disabled="disabled" title="This action is not available in edit view when content object is published!" />
    ';
}
unset( $if_cond );
// if ends

$text .= '    
</div>


';

$setArray = $oldSetArray_3a2b2e2dfa1f35cbf38ce2e0302008b5;
$tpl->Level--;
?>
