<?php
// URI:       extension/ngadminui/design/ngadminui/templates/children_detailed.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/children_detailed.tpl
// Timestamp: 1782241050 (Tue Jun 23 18:57:30 UTC 2026)
$oldSetArray_6854df9c82c0c5c9d33591d2e8a1285a = isset( $setArray ) ? $setArray : array();
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

// def $section
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'section_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZSectionFunctionCollection(), 'fetchSectionObject' ),
  array_values( array(     'section_id' => $var1,
    'identifier' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'section', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'section' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'section', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'section', $var, $rootNamespace );
}

// def $visible_columns
if ( $tpl->hasVariable( 'visible_columns', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'visible_columns' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'visible_columns', array (
  'ezcontentnavigationpart' => 'checkbox;crank;name;published_date;translations;priority',
  'ezmedianavigationpart' => 'checkbox;crank;thumbnail;name;hidden_status_string;class_name',
  'ezusernavigationpart' => 'checkbox;crank;name;creator;published_date',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'visible_columns', array (
  'ezcontentnavigationpart' => 'checkbox;crank;name;published_date;translations;priority',
  'ezmedianavigationpart' => 'checkbox;crank;thumbnail;name;hidden_status_string;class_name',
  'ezusernavigationpart' => 'checkbox;crank;name;creator;published_date',
), $rootNamespace );
}

// def $locales
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array_values( array(  ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locales', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locales' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'locales', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locales', $var, $rootNamespace );
}

// def $iconInfo
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'icon_info',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'class',
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
if ( $tpl->hasVariable( 'iconInfo', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'iconInfo' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 249,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 545,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'iconInfo', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'iconInfo', $var, $rootNamespace );
}

// def $classIconsSize
if ( $tpl->hasVariable( 'classIconsSize', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'classIconsSize' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 249,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 545,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'classIconsSize', 'small', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'classIconsSize', 'small', $rootNamespace );
}

// def $wwwDirPrefix
unset( $var );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$var4 = compiledFetchAttribute( $var3, 'theme_path' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$var6 = compiledFetchAttribute( $var5, 'size_path_list' );
unset( $var5 );
$var5 = $var6;
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classIconsSize', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classIconsSize'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = compiledFetchAttribute( $var5, $var7 );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = ( '' . '/' . $var3 . '/' . $var5 . '/' );
unset( $var3, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'wwwDirPrefix', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'wwwDirPrefix' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 249,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 545,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'wwwDirPrefix', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'wwwDirPrefix', $var, $rootNamespace );
}

// def $crankIcon
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'wwwDirPrefix', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['wwwDirPrefix'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = ( $var1 . 'crank' );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'crankIcon', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'crankIcon' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 249,
  ),
  1 => 
  array (
    0 => 9,
    1 => 0,
    2 => 545,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'crankIcon', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'crankIcon', $var, $rootNamespace );
}

$text .= '


<script type="text/javascript">

// Change tracking - increment this on each edit
window.editVersion = 1;

// Selection control functions for DataTable - available as fallback if buttons don\'t work
window.selectAllCheckboxes = function() {
    var cb = document.querySelectorAll(\'input[name="DeleteIDArray[]"]\');
    for (var i = 0; i < cb.length; i++) cb[i].checked = true;
};

window.selectNoneCheckboxes = function() {
    var cb = document.querySelectorAll(\'input[name="DeleteIDArray[]"]\');
    for (var i = 0; i < cb.length; i++) cb[i].checked = false;
};

window.invertCheckboxes = function() {
    var cb = document.querySelectorAll(\'input[name="DeleteIDArray[]"]\');
    for (var i = 0; i < cb.length; i++) cb[i].checked = !cb[i].checked;
};

(function() {


var availableLanguages = {';
// foreach begins
$skipDelimiter = true;
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 = [];
$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_12 = [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_12  = 0;
$fe_i_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
if ( !isset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_12 ) ) $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_12 = [];
$fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_12[] = @compact( 'fe_array_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_i_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_key_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_val_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_max_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_12', 'fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_12' );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 );
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locales', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locales'] : null;
if (! isset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 ) ) $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 = NULL;
while ( is_object( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 ) and method_exists( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12, 'templateValue' ) )
    $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12->templateValue();

$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_12 = is_array( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 ) ? array_keys( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 ) : [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 = count( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_12 );
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_12 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_12 = false;
if ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 >= $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 )
{
    $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 = ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 < 0 ) ? 0 : $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12;
    if ( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12'. Array count: $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12");   
}
}
if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_12 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 + $fe_max_761ed86479e2e6d7491b1ddf4e09171e_12 > $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 )
{
    if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_12 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_761ed86479e2e6d7491b1ddf4e09171e_12");
    $fe_max_761ed86479e2e6d7491b1ddf4e09171e_12 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12;
}
if ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_12 )
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_12 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 - 1 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_12  = 0;
}
else
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_12 = $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_12  = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 - 1;
}
// foreach
for ( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_12 = $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_12; $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_12 < $fe_max_761ed86479e2e6d7491b1ddf4e09171e_12 && ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_12 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_12 >= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_12 : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_12 <= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_12 ); $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_12 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_12-- : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_12++ )
{
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_12 = $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_12[$fe_i_761ed86479e2e6d7491b1ddf4e09171e_12];
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_12 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12[$fe_key_761ed86479e2e6d7491b1ddf4e09171e_12];
$vars[$rootNamespace]['language'] = $fe_val_761ed86479e2e6d7491b1ddf4e09171e_12;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '\'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'locale_code' );
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

$text .= '\': \'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'intl_language_name' );
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

$text .= '\'';
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_12++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_12 ) ) extract( array_pop( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_12 ) );

else
{

unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_key_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_val_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_12 );

unset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_12 );

}

// foreach ends
$text .= '};

var icons = {';
// foreach begins
$skipDelimiter = true;
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 = [];
$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_13 = [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_13  = 0;
$fe_i_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
if ( !isset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_13 ) ) $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_13 = [];
$fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_13[] = @compact( 'fe_array_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_i_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_key_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_val_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_max_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_13', 'fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_13' );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 );
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locales', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locales'] : null;
if (! isset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 ) ) $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 = NULL;
while ( is_object( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 ) and method_exists( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13, 'templateValue' ) )
    $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13->templateValue();

$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_13 = is_array( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 ) ? array_keys( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 ) : [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 = count( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_13 );
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_13 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_13 = false;
if ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 >= $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 )
{
    $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 = ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 < 0 ) ? 0 : $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13;
    if ( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13'. Array count: $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13");   
}
}
if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_13 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 + $fe_max_761ed86479e2e6d7491b1ddf4e09171e_13 > $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 )
{
    if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_13 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_761ed86479e2e6d7491b1ddf4e09171e_13");
    $fe_max_761ed86479e2e6d7491b1ddf4e09171e_13 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13;
}
if ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_13 )
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_13 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 - 1 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_13  = 0;
}
else
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_13 = $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_13  = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 - 1;
}
// foreach
for ( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_13 = $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_13; $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_13 < $fe_max_761ed86479e2e6d7491b1ddf4e09171e_13 && ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_13 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_13 >= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_13 : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_13 <= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_13 ); $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_13 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_13-- : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_13++ )
{
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_13 = $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_13[$fe_i_761ed86479e2e6d7491b1ddf4e09171e_13];
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_13 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13[$fe_key_761ed86479e2e6d7491b1ddf4e09171e_13];
$vars[$rootNamespace]['locale'] = $fe_val_761ed86479e2e6d7491b1ddf4e09171e_13;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '\'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\': \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
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

$text .= '\'';
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_13++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_13 ) ) extract( array_pop( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_13 ) );

else
{

unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_key_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_val_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_13 );

unset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_13 );

}

// foreach ends
$text .= '};

var vcols = {';
// foreach begins
$skipDelimiter = true;
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 = [];
$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_14 = [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_14  = 0;
$fe_i_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
if ( !isset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_14 ) ) $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_14 = [];
$fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_14[] = @compact( 'fe_array_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_i_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_key_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_val_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_max_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_14', 'fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_14' );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 );
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'visible_columns', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['visible_columns'] : null;
if (! isset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 ) ) $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 = NULL;
while ( is_object( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 ) and method_exists( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14, 'templateValue' ) )
    $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14->templateValue();

$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_14 = is_array( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 ) ? array_keys( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 ) : [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 = count( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_14 );
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_14 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_14 = false;
if ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 >= $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 )
{
    $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 = ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 < 0 ) ? 0 : $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14;
    if ( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14'. Array count: $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14");   
}
}
if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_14 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 + $fe_max_761ed86479e2e6d7491b1ddf4e09171e_14 > $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 )
{
    if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_14 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_761ed86479e2e6d7491b1ddf4e09171e_14");
    $fe_max_761ed86479e2e6d7491b1ddf4e09171e_14 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14;
}
if ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_14 )
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_14 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 - 1 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_14  = 0;
}
else
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_14 = $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_14  = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 - 1;
}
// foreach
for ( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_14 = $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_14; $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_14 < $fe_max_761ed86479e2e6d7491b1ddf4e09171e_14 && ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_14 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_14 >= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_14 : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_14 <= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_14 ); $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_14 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_14-- : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_14++ )
{
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_14 = $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_14[$fe_i_761ed86479e2e6d7491b1ddf4e09171e_14];
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_14 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14[$fe_key_761ed86479e2e6d7491b1ddf4e09171e_14];
$vars[$rootNamespace]['object'] = $fe_val_761ed86479e2e6d7491b1ddf4e09171e_14;
$vars[$rootNamespace]['index'] = $fe_key_761ed86479e2e6d7491b1ddf4e09171e_14;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',
';
} // delimiter ends

$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' : \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'.split(\';\')';
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_14++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_14 ) ) extract( array_pop( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_14 ) );

else
{

unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_key_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_val_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_14 );

unset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_14 );

}

// foreach ends
$text .= '};

var confObj = {
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'sort_field' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$match1 = compiledFetchAttribute( $match, 'sort_field' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "2":
    {
$text .= '    sortKey: "published_date",';
    } break;
    case "3":
    {
$text .= '    sortKey: "modified_date",';
    } break;
    case "4":
    {
$text .= '    sortKey: "section",';
    } break;
    case "7":
    {
$text .= '    sortKey: "class_name",';
    } break;
    case "8":
    {
$text .= '    sortKey: "priority",';
    } break;
    case "9":
    {
$text .= '    sortKey: "name",';
    } break;
    default:
    {
$text .= '    sortKey: "published_date",';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '
    dataSourceURL: "';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'ezjscore/call/ezjscnode::subtree::' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
    editPrefixURL: "/content/edit",
    rowsPrPage: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
    sortOrder: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'sort_order' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
    nameFilter: \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var1 = compiledFetchAttribute( $var, 'namefilter' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
    defaultShownColumns: vcols,
    navigationPart: "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$var1 = compiledFetchAttribute( $var, 'navigation_part_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '",
    cookieName: "eZSubitemColumns",
    cookieSecure: false,
    cookieDomain: "';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezsys',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'hostname',
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

$text .= '",
    languages: availableLanguages,
    classesString: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'classes_js_array' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
    flagIcons: icons
}

var labelsObj = {

    DATA_TABLE: {
                        msg_loading: "';
unset( $var );
$var = 'Loading ...' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                    },

    DATA_TABLE_COLS: {
                        thumbnail: "';
unset( $var );
$var = 'Thumbnail' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        crank: \'<i class="fa fa-cog"></i>\',
                        name: "';
unset( $var );
$var = 'Name' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        visibility: "';
unset( $var );
$var = 'Visibility' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        type: "';
unset( $var );
$var = 'Type' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        modifier: "';
unset( $var );
$var = 'Modifier' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        modified: "';
unset( $var );
$var = 'Modified' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        published: "';
unset( $var );
$var = 'Published' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        section: "';
unset( $var );
$var = 'Section' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        translations: "';
unset( $var );
$var = 'Translations' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        priority: "';
unset( $var );
$var = 'Priority' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        nodeid: "';
unset( $var );
$var = 'Node ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        objectid: "';
unset( $var );
$var = 'Object ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        noderemoteid: "';
unset( $var );
$var = 'Node remote ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        objectremoteid: "';
unset( $var );
$var = 'Object remote ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        objectstate: "';
unset( $var );
$var = 'Object state' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                    },

    TABLE_OPTIONS: {
                        header: "';
unset( $var );
$var = 'Table options' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        header_noipp: "';
unset( $var );
$var = 'Number of items per page:' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        header_vtc: "';
unset( $var );
$var = 'Visible table columns:' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        button_close: "';
unset( $var );
$var = 'Close' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                   },

    ACTION_BUTTONS: {
                        select: "';
unset( $var );
$var = 'Select' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        select_sav: "';
unset( $var );
$var = 'Select all visible' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        select_sn: "';
unset( $var );
$var = 'Select none' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        select_inv: "';
unset( $var );
$var = 'Invert selection' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        create_new: "';
unset( $var );
$var = 'Create new subitem' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions: "';
unset( $var );
$var = 'More actions' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_rs: "';
unset( $var );
$var = 'Remove selected' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_ms: "';
unset( $var );
$var = 'Move selected' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_no: "';
unset( $var );
$var = 'Use the checkboxes to select one or more items.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        table_options: "';
unset( $var );
$var = 'Table options' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        first_page: "&laquo;&nbsp;';
unset( $var );
$var = 'first' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        previous_page: "&lsaquo;&nbsp;';
unset( $var );
$var = 'prev' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        next_page: "';
unset( $var );
$var = 'next' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;&rsaquo;",
                        last_page: "';
unset( $var );
$var = 'last' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;&raquo;"
                    }
};
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'is_container' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_create' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '    ';
unset( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 );
unset( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 );
unset( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 );
$elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_892 = compiledFetchAttribute( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891, 'path_array' );
unset( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 );
$elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 = $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_892;
if (! isset( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 ) ) $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 = NULL;
while ( is_object( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 ) and method_exists( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891, 'templateValue' ) )
    $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 = $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891->templateValue();
while ( is_object( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 ) and method_exists( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891, 'templateValue' ) )
    $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 = $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891->templateValue();
if( is_string( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 ) )
{
  $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 = ( mb_strpos( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891, "5" ) !== false );
}
else if ( is_array( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 ) )
{
  $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 = in_array( "5", $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 );
}
else
{
$elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 = false;
}unset( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_891 );
if (! isset( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 ) ) $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 = NULL;
while ( is_object( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 ) and method_exists( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89, 'templateValue' ) )
    $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 = $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( mb_strpos( $if_cond1, "43" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "43", $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 150,
    1 => 8,
    2 => 7290,
  ),
  1 => 
  array (
    0 => 151,
    1 => 82,
    2 => 7445,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', array (
  0 => 3,
  1 => -1,
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', array (
  0 => 3,
  1 => -1,
), $rootNamespace );
}

$text .= '    ';
}
elseif ( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 )
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 153,
    1 => 8,
    2 => 7553,
  ),
  1 => 
  array (
    0 => 155,
    1 => 82,
    2 => 7792,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', array (
  0 => -1,
  1 => '1',
  2 => 2,
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', array (
  0 => -1,
  1 => '1',
  2 => 2,
), $rootNamespace );
}

$text .= '    ';
}
else
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 157,
    1 => 8,
    2 => 7814,
  ),
  1 => 
  array (
    0 => 157,
    1 => 31,
    2 => 7837,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', false, $rootNamespace );
}

$text .= '    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_761ed86479e2e6d7491b1ddf4e09171e_89 );

$text .= '
    ';
// def $can_create_classes
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'canInstantiateClassList' ),
  array_values( array(     'group_id' => $var1,
    'parent_node' => $var2,
    'filter_type' => "exclude",
    'fetch_id' => false,
    'as_object' => true,
    'group_by_class_group' => true ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_create_classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create_classes' is already defined.", array (
  0 => 
  array (
    0 => 160,
    1 => 4,
    2 => 7855,
  ),
  1 => 
  array (
    0 => 163,
    1 => 119,
    2 => 8295,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'can_create_classes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_classes', $var, $rootNamespace );
}

$text .= '
    var createGroups = [

    ';
// foreach begins
$skipDelimiter = true;
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 = [];
$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_15 = [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_15  = 0;
$fe_i_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
if ( !isset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_15 ) ) $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_15 = [];
$fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_15[] = @compact( 'fe_array_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_i_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_key_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_val_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_max_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_15', 'fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_15' );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 );
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_classes'] : null;
if (! isset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 ) ) $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 = NULL;
while ( is_object( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 ) and method_exists( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15, 'templateValue' ) )
    $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15->templateValue();

$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_15 = is_array( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 ) ? array_keys( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 ) : [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 = count( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_15 );
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_15 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_15 = false;
if ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 >= $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 )
{
    $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 = ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 < 0 ) ? 0 : $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15;
    if ( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15'. Array count: $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15");   
}
}
if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_15 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 + $fe_max_761ed86479e2e6d7491b1ddf4e09171e_15 > $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 )
{
    if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_15 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_761ed86479e2e6d7491b1ddf4e09171e_15");
    $fe_max_761ed86479e2e6d7491b1ddf4e09171e_15 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15;
}
if ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_15 )
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_15 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 - 1 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_15  = 0;
}
else
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_15 = $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_15  = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 - 1;
}
// foreach
for ( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_15 = $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_15; $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_15 < $fe_max_761ed86479e2e6d7491b1ddf4e09171e_15 && ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_15 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_15 >= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_15 : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_15 <= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_15 ); $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_15 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_15-- : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_15++ )
{
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_15 = $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_15[$fe_i_761ed86479e2e6d7491b1ddf4e09171e_15];
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_15 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15[$fe_key_761ed86479e2e6d7491b1ddf4e09171e_15];
$vars[$rootNamespace]['group'] = $fe_val_761ed86479e2e6d7491b1ddf4e09171e_15;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '        ,
        ';
} // delimiter ends

$text .= '        "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group'] : null;
$var1 = compiledFetchAttribute( $var, 'group_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"
            ';
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_15++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_15 ) ) extract( array_pop( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_15 ) );

else
{

unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_key_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_val_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_15 );

unset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_15 );

}

// foreach ends
$text .= '
    ];

    var createOptions = [

    ';
// foreach begins
$skipDelimiter = true;
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 = [];
$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_17 = [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_17  = 0;
$fe_i_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
if ( !isset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_17 ) ) $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_17 = [];
$fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_17[] = @compact( 'fe_array_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_i_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_key_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_val_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_max_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_17', 'fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_17' );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 );
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_classes'] : null;
if (! isset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 ) ) $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 = NULL;
while ( is_object( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 ) and method_exists( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17, 'templateValue' ) )
    $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17->templateValue();

$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_17 = is_array( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 ) ? array_keys( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 ) : [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 = count( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_17 );
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_17 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_17 = false;
if ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 >= $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 )
{
    $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 = ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 < 0 ) ? 0 : $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17;
    if ( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17'. Array count: $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17");   
}
}
if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_17 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 + $fe_max_761ed86479e2e6d7491b1ddf4e09171e_17 > $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 )
{
    if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_17 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_761ed86479e2e6d7491b1ddf4e09171e_17");
    $fe_max_761ed86479e2e6d7491b1ddf4e09171e_17 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17;
}
if ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_17 )
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_17 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 - 1 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_17  = 0;
}
else
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_17 = $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_17  = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 - 1;
}
// foreach
for ( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_17 = $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_17; $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_17 < $fe_max_761ed86479e2e6d7491b1ddf4e09171e_17 && ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_17 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_17 >= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_17 : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_17 <= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_17 ); $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_17 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_17-- : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_17++ )
{
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_17 = $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_17[$fe_i_761ed86479e2e6d7491b1ddf4e09171e_17];
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_17 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17[$fe_key_761ed86479e2e6d7491b1ddf4e09171e_17];
$vars[$rootNamespace]['group'] = $fe_val_761ed86479e2e6d7491b1ddf4e09171e_17;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '        ,
        ';
} // delimiter ends

$text .= '        [
        ';
// foreach begins
$skipDelimiter = true;
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 = [];
$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_16 = [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_16  = 0;
$fe_i_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
if ( !isset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_16 ) ) $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_16 = [];
$fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_16[] = @compact( 'fe_array_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_i_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_key_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_val_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_max_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_16', 'fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_16' );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 );
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group'] : null;
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_161 = compiledFetchAttribute( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16, 'items' );
unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 );
$fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_161;
if (! isset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 ) ) $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 = NULL;
while ( is_object( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 ) and method_exists( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16, 'templateValue' ) )
    $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16->templateValue();

$fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_16 = is_array( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 ) ? array_keys( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 ) : [];
$fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 = count( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_16 );
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 = 0;
$fe_max_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16;
$fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_16 = false;
if ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 >= $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 )
{
    $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 = ( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 < 0 ) ? 0 : $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16;
    if ( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16'. Array count: $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16");   
}
}
if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_16 < 0 || $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 + $fe_max_761ed86479e2e6d7491b1ddf4e09171e_16 > $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 )
{
    if ( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_16 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_761ed86479e2e6d7491b1ddf4e09171e_16");
    $fe_max_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16;
}
if ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_16 )
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 - 1 - $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_16  = 0;
}
else
{
    $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16;
    $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_16  = $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 - 1;
}
// foreach
for ( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_16; $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_16 < $fe_max_761ed86479e2e6d7491b1ddf4e09171e_16 && ( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_16 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_16 >= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_16 : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_16 <= $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_16 ); $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_16 ? $fe_i_761ed86479e2e6d7491b1ddf4e09171e_16-- : $fe_i_761ed86479e2e6d7491b1ddf4e09171e_16++ )
{
$fe_key_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_16[$fe_i_761ed86479e2e6d7491b1ddf4e09171e_16];
$fe_val_761ed86479e2e6d7491b1ddf4e09171e_16 = $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16[$fe_key_761ed86479e2e6d7491b1ddf4e09171e_16];
$vars[$rootNamespace]['can_create_class'] = $fe_val_761ed86479e2e6d7491b1ddf4e09171e_16;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_instantiate_languages' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ',';
}
unset( $if_cond );
// if ends

} // delimiter ends

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_instantiate_languages' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            { text: "';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
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

$text .= '", value: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' }
            ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_16++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_16 ) ) extract( array_pop( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_16 ) );

else
{

unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_key_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_val_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_16 );

unset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_16 );

}

// foreach ends
$text .= '        ]
            ';
$fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_17++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_17 ) ) extract( array_pop( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_17 ) );

else
{

unset( $fe_array_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_array_keys_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_n_items_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_n_items_processed_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_i_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_key_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_val_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_offset_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_max_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_reverse_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_first_val_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_last_val_761ed86479e2e6d7491b1ddf4e09171e_17 );

unset( $fe_variable_stack_761ed86479e2e6d7491b1ddf4e09171e_17 );

}

// foreach ends
$text .= '    ];
';
}
else
{
$text .= '    var createGroups = [];
    var createOptions = [];';
}
unset( $if_cond );
// if ends

$text .= '

YUILoader.require([\'datatable\', \'button\', \'container\', \'cookie\', \'element\']);
YUILoader.onSuccess = function() {
    sortableSubitems.init(confObj, labelsObj, createGroups, createOptions);

    // Wire up selection button handlers after YUI initialization
    // The actual menu item IDs created by YUI Button widget are:
    // ezopt-menu-check (Select All Visible)
    // ezopt-menu-uncheck (Select None)
    // ezopt-menu-toggle (Invert Selection)

    var selectAllBtn = YAHOO.util.Dom.get(\'ezopt-menu-check\');
    var selectNoneBtn = YAHOO.util.Dom.get(\'ezopt-menu-uncheck\');
    var invertBtn = YAHOO.util.Dom.get(\'ezopt-menu-toggle\');

    if (selectAllBtn) {
        selectAllBtn.addEventListener(\'click\', function() {
            window.selectAllCheckboxes();
        });
    }
    if (selectNoneBtn) {
        selectNoneBtn.addEventListener(\'click\', function() {
            window.selectNoneCheckboxes();
        });
    }
    if (invertBtn) {
        invertBtn.addEventListener(\'click\', function() {
            window.invertCheckboxes();
        });
    }
};
var options = [];
YUILoader.insert(options, \'js\');

})();
';
// undef $section
$tpl->unsetLocalVariable( 'section', $rootNamespace );

// undef $visible_columns
$tpl->unsetLocalVariable( 'visible_columns', $rootNamespace );

// undef $locales
$tpl->unsetLocalVariable( 'locales', $rootNamespace );

$text .= '</script>

<div id="action-controls-container">
    <div id="action-controls"></div>
    <div id="action-controls-new"></div>
    <div id="tpg"></div>
    <div id="action-controls-options"></div>
</div>
<div id="content-sub-items-list" class="content-navigation-childlist"></div>
<div id="bpg"></div>

<div id="to-dialog-container"></div>
';

$setArray = $oldSetArray_6854df9c82c0c5c9d33591d2e8a1285a;
$tpl->Level--;
?>
