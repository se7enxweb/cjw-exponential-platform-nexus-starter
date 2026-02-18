<?php
// URI:       design:menu/plugins/legacy/aside.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/menu/plugins/legacy/aside.tpl
// Timestamp: 1771144664 (Sun Feb 15 8:37:44 UTC 2026)
$oldSetArray_6214357b1458a80bd24be69b4b2d2f92 = isset( $setArray ) ? $setArray : array();
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

// def $liclass
if ( $tpl->hasVariable( 'liclass', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'liclass' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 26,
    2 => 27,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/menu/plugins/legacy/aside.tpl',
) );
    $tpl->setVariable( 'liclass', 'unselected ', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'liclass', 'unselected ', $rootNamespace );
}

// def $icon
if ( $tpl->hasVariable( 'icon', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'icon' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 30,
  ),
  1 => 
  array (
    0 => 2,
    1 => 23,
    2 => 53,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/menu/plugins/legacy/aside.tpl',
) );
    $tpl->setVariable( 'icon', 'unselected ', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'icon', 'unselected ', $rootNamespace );
}

// foreach begins
$skipDelimiter = true;
$fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 = [];
$fe_array_keys_2e86cd0785db7b0c5eb851bdd6a1532b_1 = [];
$fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_n_items_processed_2e86cd0785db7b0c5eb851bdd6a1532b_1  = 0;
$fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_key_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_reverse_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_first_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_last_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
if ( !isset( $fe_variable_stack_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) ) $fe_variable_stack_2e86cd0785db7b0c5eb851bdd6a1532b_1 = [];
$fe_variable_stack_2e86cd0785db7b0c5eb851bdd6a1532b_1[] = @compact( 'fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_array_keys_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_n_items_processed_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_key_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_val_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_reverse_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_first_val_2e86cd0785db7b0c5eb851bdd6a1532b_1', 'fe_last_val_2e86cd0785db7b0c5eb851bdd6a1532b_1' );
unset( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 );
if (! isset( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) ) $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 = NULL;
while ( is_object( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) and method_exists( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1, 'templateValue' ) )
    $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1->templateValue();
$fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1Data = array( 'value' => $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 );
$tpl->processOperator( 'topmenu',
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
        2 => 'ui_context',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 7,
      1 => true,
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1Data, false, false );
$fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1Data['value'];
unset( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1Data );
if (! isset( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) ) $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 = NULL;
while ( is_object( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) and method_exists( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1, 'templateValue' ) )
    $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1->templateValue();

$fe_array_keys_2e86cd0785db7b0c5eb851bdd6a1532b_1 = is_array( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) ? array_keys( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) : [];
$fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 = count( $fe_array_keys_2e86cd0785db7b0c5eb851bdd6a1532b_1 );
$fe_n_items_processed_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 = 0;
$fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 - $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1;
$fe_reverse_2e86cd0785db7b0c5eb851bdd6a1532b_1 = false;
if ( $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 < 0 || $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 >= $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 )
{
    $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 = ( $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 < 0 ) ? 0 : $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1;
    if ( $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 || $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1'. Array count: $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1");   
}
}
if ( $fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1 < 0 || $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 + $fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1 > $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 )
{
    if ( $fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1");
    $fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 - $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1;
}
if ( $fe_reverse_2e86cd0785db7b0c5eb851bdd6a1532b_1 )
{
    $fe_first_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 - 1 - $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1;
    $fe_last_val_2e86cd0785db7b0c5eb851bdd6a1532b_1  = 0;
}
else
{
    $fe_first_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1;
    $fe_last_val_2e86cd0785db7b0c5eb851bdd6a1532b_1  = $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 - 1;
}
// foreach
for ( $fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_first_val_2e86cd0785db7b0c5eb851bdd6a1532b_1; $fe_n_items_processed_2e86cd0785db7b0c5eb851bdd6a1532b_1 < $fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1 && ( $fe_reverse_2e86cd0785db7b0c5eb851bdd6a1532b_1 ? $fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1 >= $fe_last_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 : $fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1 <= $fe_last_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 ); $fe_reverse_2e86cd0785db7b0c5eb851bdd6a1532b_1 ? $fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1-- : $fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1++ )
{
$fe_key_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_array_keys_2e86cd0785db7b0c5eb851bdd6a1532b_1[$fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1];
$fe_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 = $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1[$fe_key_2e86cd0785db7b0c5eb851bdd6a1532b_1];
$vars[$rootNamespace]['menu_item'] = $fe_val_2e86cd0785db7b0c5eb851bdd6a1532b_1;
$vars[$rootNamespace]['index'] = $fe_key_2e86cd0785db7b0c5eb851bdd6a1532b_1;
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'navigationpart_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'eztagsnavigationpart' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_navigation_parts', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_navigation_parts'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'navigationpart_identifier' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '            ';
continue;

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$var1 = compiledFetchAttribute( $var, 'url' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$match1 = compiledFetchAttribute( $match, 'url' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "content/dashboard":
    {
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'icon', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['icon'] = 'fa fa-tachometer';
}
$text .= '        ';
    } break;
    case "":
    {
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'icon', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['icon'] = 'fa fa-sitemap';
}
$text .= '        ';
    } break;
    case "media":
    {
$text .= '          ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'icon', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['icon'] = 'fa fa-picture-o';
}
$text .= '        ';
    } break;
    case "users":
    {
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'icon', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['icon'] = 'fa fa-user';
}
$text .= '        ';
    } break;
    case "setup/cache":
    {
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'icon', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['icon'] = 'fa fa-cog';
}
$text .= '        ';
    } break;
    case "ezfind/elevate":
    {
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'icon', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['icon'] = 'fa fa-database';
}
$text .= '        ';
    } break;
    case "tags/dashboard":
    {
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'icon', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['icon'] = 'fa fa-tags';
}
$text .= '        ';
    } break;
    default:
    {
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'icon', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['icon'] = 'fa fa-cubes';
}
$text .= '        ';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '
    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'liclass', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['liclass'] = '';
}
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'navigation_part' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'navigationpart_identifier' );
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'liclass', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['liclass'] = 'active ';
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    <li class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'liclass', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['liclass'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$var1 = compiledFetchAttribute( $var, 'position' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$var1 = compiledFetchAttribute( $var, 'navigationpart_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'enabled' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'access' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = !isset( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'access' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( $if_cond3 )
    $if_cond2 = $if_cond3;
else if ( $if_cond4 )
    $if_cond2 = $if_cond4;
else
    $if_cond2 = false;
unset( $if_cond3, $if_cond4 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
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

$text .= ' title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
$var1 = compiledFetchAttribute( $var, 'tooltip' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        ';
}
else
{
$text .= '            <a href="#">
        ';
}
unset( $if_cond );
// if ends

$text .= '            <i class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'icon', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['icon'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"></i>
            <span class="tt';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) < ( 3 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' font-bold';
}
unset( $if_cond );
// if ends

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_item'] : null;
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

$text .= '</span>
        </a>
    </li>
';
$fe_n_items_processed_2e86cd0785db7b0c5eb851bdd6a1532b_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) ) extract( array_pop( $fe_variable_stack_2e86cd0785db7b0c5eb851bdd6a1532b_1 ) );

else
{

unset( $fe_array_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_array_keys_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_n_items_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_n_items_processed_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_i_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_key_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_offset_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_max_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_reverse_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_first_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_last_val_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

unset( $fe_variable_stack_2e86cd0785db7b0c5eb851bdd6a1532b_1 );

}

// foreach ends
// undef $liclass
$tpl->unsetLocalVariable( 'liclass', $rootNamespace );

// undef $icon
$tpl->unsetLocalVariable( 'icon', $rootNamespace );


$setArray = $oldSetArray_6214357b1458a80bd24be69b4b2d2f92;
$tpl->Level--;
?>
