<?php
// URI:       design:content/datatype/edit/ezxmltext_ezoe.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl
// Timestamp: 1782241051 (Tue Jun 23 18:57:31 UTC 2026)
$oldSetArray_5a44fbfa77b608cb6afd90af97933427 = isset( $setArray ) ? $setArray : array();
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
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'input' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( !isset( $vars[$currentNamespace]['input_handler'] ) )
{
    $vars[$currentNamespace]['input_handler'] = $var;
    unset( $var );
    $setArray[$currentNamespace]['input_handler'] = true;
}

if ( !isset( $vars[$currentNamespace]['attribute_base'] ) )
{
    $vars[$currentNamespace]['attribute_base'] = 'ContentObjectAttribute';
    $setArray[$currentNamespace]['attribute_base'] = true;
}

if ( !isset( $vars[$currentNamespace]['editorRow'] ) )
{
    $vars[$currentNamespace]['editorRow'] = 10;
    $setArray[$currentNamespace]['editorRow'] = true;
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'contentclass_attribute' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_int1' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentclass_attribute' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_int1' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'editorRow', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['editorRow'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'input_handler', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['input_handler'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_editor_enabled' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<!-- Start editor -->

    ';
// def $layout_settings
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'input_handler', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['input_handler'] : null;
$var1 = compiledFetchAttribute( $var, 'editor_layout_settings' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'layout_settings', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'layout_settings' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 4,
    2 => 313,
  ),
  1 => 
  array (
    0 => 12,
    1 => 64,
    2 => 373,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'layout_settings', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'layout_settings', $var, $rootNamespace );
}

$text .= '
    ';
if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["6432f008b01704a6e5fc682b4d3730ae"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["6432f008b01704a6e5fc682b4d3730ae"] = array( array( 14,
              4,
              381 ),
       array( 14,
              12,
              389 ),
       "extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl" );
$text .= '    

    ';
// def $plugin_list
unset( $var );
$var4 = eZINI::instance( 'ezoe.ini' );
if ( $var4->hasVariable( 'EditorSettings', 'Plugins' ) )
    $var = !false ? $var4->variable( 'EditorSettings', 'Plugins' ) : true;
else
    $var = false ? false : '';
unset( $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'plugin_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'plugin_list' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'plugin_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'plugin_list', $var, $rootNamespace );
}

// def $skin
unset( $var );
$var4 = eZINI::instance( 'ezoe.ini' );
if ( $var4->hasVariable( 'EditorSettings', 'Skin' ) )
    $var = !false ? $var4->variable( 'EditorSettings', 'Skin' ) : true;
else
    $var = false ? false : '';
unset( $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'skin', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'skin' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'skin', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'skin', $var, $rootNamespace );
}

// def $skin_variant
if ( $tpl->hasVariable( 'skin_variant', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'skin_variant' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'skin_variant', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'skin_variant', '', $rootNamespace );
}

// def $content_css_list_temp
unset( $var );
$var4 = eZINI::instance( 'design.ini' );
if ( $var4->hasVariable( 'StylesheetSettings', 'EditorCSSFileList' ) )
    $var = !false ? $var4->variable( 'StylesheetSettings', 'EditorCSSFileList' ) : true;
else
    $var = false ? false : '';
unset( $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'content_css_list_temp', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_css_list_temp' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'content_css_list_temp', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_css_list_temp', $var, $rootNamespace );
}

// def $content_css_list
if ( $tpl->hasVariable( 'content_css_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_css_list' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'content_css_list', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_css_list', array (
), $rootNamespace );
}

// def $editor_css_list
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'skin', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['skin'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'skins/' . $var3 . '/ui.css' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'editor_css_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'editor_css_list' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'editor_css_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'editor_css_list', $var, $rootNamespace );
}

// def $ez_locale
if ( $tpl->hasVariable( 'ez_locale', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'ez_locale' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'ez_locale', 'eng-GB', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'ez_locale', 'eng-GB', $rootNamespace );
}

// def $language
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ez_locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ez_locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( '-' . $var2 );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'language' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'language', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'language', $var, $rootNamespace );
}

// def $dependency_js_list
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'ezoe::i18n::' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'dependency_js_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'dependency_js_list' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'dependency_js_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'dependency_js_list', $var, $rootNamespace );
}

// def $spell_languages
if ( $tpl->hasVariable( 'spell_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'spell_languages' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'spell_languages', '+English=en', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'spell_languages', '+English=en', $rootNamespace );
}

// def $directionality
if ( $tpl->hasVariable( 'directionality', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'directionality' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'directionality', 'ltr', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'directionality', 'ltr', $rootNamespace );
}

// def $toolbar_alignment
if ( $tpl->hasVariable( 'toolbar_alignment', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'toolbar_alignment' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 4,
    2 => 459,
  ),
  1 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1182,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'toolbar_alignment', 'left', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'toolbar_alignment', 'left', $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
$if_cond4 = eZINI::instance( 'ezoe.ini' );
if ( $if_cond4->hasVariable( 'EditorSettings', 'SkinVariant' ) )
    $if_cond = !true ? $if_cond4->variable( 'EditorSettings', 'SkinVariant' ) : true;
else
    $if_cond = true ? false : '';
unset( $if_cond4 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
$var4 = eZINI::instance( 'ezoe.ini' );
if ( $var4->hasVariable( 'EditorSettings', 'SkinVariant' ) )
    $var = !false ? $var4->variable( 'EditorSettings', 'SkinVariant' ) : true;
else
    $var = false ? false : '';
unset( $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'skin_variant', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['skin_variant'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
$if_cond4 = eZINI::instance( 'ezoe.ini' );
if ( $if_cond4->hasVariable( 'EditorSettings', 'Directionality' ) )
    $if_cond = !true ? $if_cond4->variable( 'EditorSettings', 'Directionality' ) : true;
else
    $if_cond = true ? false : '';
unset( $if_cond4 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
$var4 = eZINI::instance( 'ezoe.ini' );
if ( $var4->hasVariable( 'EditorSettings', 'Directionality' ) )
    $var = !false ? $var4->variable( 'EditorSettings', 'Directionality' ) : true;
else
    $var = false ? false : '';
unset( $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'directionality', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['directionality'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
$if_cond4 = eZINI::instance( 'ezoe.ini' );
if ( $if_cond4->hasVariable( 'EditorSettings', 'ToolbarAlign' ) )
    $if_cond = !true ? $if_cond4->variable( 'EditorSettings', 'ToolbarAlign' ) : true;
else
    $if_cond = true ? false : '';
unset( $if_cond4 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
$var4 = eZINI::instance( 'ezoe.ini' );
if ( $var4->hasVariable( 'EditorSettings', 'ToolbarAlign' ) )
    $var = !false ? $var4->variable( 'EditorSettings', 'ToolbarAlign' ) : true;
else
    $var = false ? false : '';
unset( $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'toolbar_alignment', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['toolbar_alignment'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'language_code' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ez_locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ez_locale'] : null;
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
// def $cur_locale
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchLocale' ),
  array_values( array(     'locale_code' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'cur_locale', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'cur_locale' is already defined.", array (
  0 => 
  array (
    0 => 40,
    1 => 8,
    2 => 1805,
  ),
  1 => 
  array (
    0 => 40,
    1 => 54,
    2 => 1851,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'cur_locale', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'cur_locale', $var, $rootNamespace );
}

$text .= '        ';
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'cur_locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['cur_locale'] : null;
$var3 = compiledFetchAttribute( $var2, 'intl_language_name' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'cur_locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['cur_locale'] : null;
$var6 = compiledFetchAttribute( $var5, 'http_locale_code' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
if ( is_string( $var5 ) )
{
	$var4 = explode( "-", $var5 );
}
else if ( is_array( $var5 ) )
{
	$var4 = array( array_slice( $var5, 0, "-" ), array_slice( $var5, "-" ) );
}
else
{
	$var4 = null;
}
unset( $var5 );
$var5 = compiledFetchAttribute( $var4, 0 );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var = ( '+' . $var2 . '=' . $var4 );
unset( $var2, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'spell_languages', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['spell_languages'] = $var;
    unset( $var );
}
$text .= '        ';
// undef $cur_locale
$tpl->unsetLocalVariable( 'cur_locale', $rootNamespace );

$text .= '    ';
}
else
{
$text .= '        ';
// def $cur_locale
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchLocale' ),
  array_values( array(     'locale_code' => false ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'cur_locale', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'cur_locale' is already defined.", array (
  0 => 
  array (
    0 => 44,
    1 => 8,
    2 => 2030,
  ),
  1 => 
  array (
    0 => 45,
    1 => 104,
    2 => 2181,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'cur_locale', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'cur_locale', $var, $rootNamespace );
}

// def $atr_locale
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var2 = compiledFetchAttribute( $var1, 'language_code' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchLocale' ),
  array_values( array(     'locale_code' => $var1 ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'atr_locale', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'atr_locale' is already defined.", array (
  0 => 
  array (
    0 => 44,
    1 => 8,
    2 => 2030,
  ),
  1 => 
  array (
    0 => 45,
    1 => 104,
    2 => 2181,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
) );
    $tpl->setVariable( 'atr_locale', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'atr_locale', $var, $rootNamespace );
}

$text .= '        ';
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'atr_locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['atr_locale'] : null;
$var3 = compiledFetchAttribute( $var2, 'intl_language_name' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'atr_locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['atr_locale'] : null;
$var6 = compiledFetchAttribute( $var5, 'http_locale_code' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
if ( is_string( $var5 ) )
{
	$var4 = explode( "-", $var5 );
}
else if ( is_array( $var5 ) )
{
	$var4 = array( array_slice( $var5, 0, "-" ), array_slice( $var5, "-" ) );
}
else
{
	$var4 = null;
}
unset( $var5 );
$var5 = compiledFetchAttribute( $var4, 0 );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var = ( '+' . $var2 . '=' . $var4 );
unset( $var2, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'spell_languages', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['spell_languages'] = $var;
    unset( $var );
}
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'spell_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['spell_languages'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'cur_locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['cur_locale'] : null;
$var4 = compiledFetchAttribute( $var3, 'intl_language_name' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'cur_locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['cur_locale'] : null;
$var7 = compiledFetchAttribute( $var6, 'http_locale_code' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
if ( is_string( $var6 ) )
{
	$var5 = explode( "-", $var6 );
}
else if ( is_array( $var6 ) )
{
	$var5 = array( array_slice( $var6, 0, "-" ), array_slice( $var6, "-" ) );
}
else
{
	$var5 = null;
}
unset( $var6 );
$var6 = compiledFetchAttribute( $var5, 0 );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = ( $var1 . ',' . $var3 . '=' . $var5 );
unset( $var1, $var3, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'spell_languages', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['spell_languages'] = $var;
    unset( $var );
}
$text .= '        ';
// undef $cur_locale
$tpl->unsetLocalVariable( 'cur_locale', $rootNamespace );

// undef $atr_locale
$tpl->unsetLocalVariable( 'atr_locale', $rootNamespace );

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'skin_variant', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['skin_variant'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'skin', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['skin'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'skin_variant', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['skin_variant'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var1 = ( 'skins/' . $var3 . '/ui_' . $var5 . '.css' );
unset( $var3, $var5 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'editor_css_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['editor_css_list'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'editor_css_list', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['editor_css_list'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_80041f16a0067c5e1c864ea734f83718_11 = [];
$fe_array_keys_80041f16a0067c5e1c864ea734f83718_11 = [];
$fe_n_items_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_11  = 0;
$fe_i_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_key_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_val_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_offset_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_max_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_reverse_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_first_val_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_last_val_80041f16a0067c5e1c864ea734f83718_11 = 0;
if ( !isset( $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_11 ) ) $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_11 = [];
$fe_variable_stack_80041f16a0067c5e1c864ea734f83718_11[] = @compact( 'fe_array_80041f16a0067c5e1c864ea734f83718_11', 'fe_array_keys_80041f16a0067c5e1c864ea734f83718_11', 'fe_n_items_80041f16a0067c5e1c864ea734f83718_11', 'fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_11', 'fe_i_80041f16a0067c5e1c864ea734f83718_11', 'fe_key_80041f16a0067c5e1c864ea734f83718_11', 'fe_val_80041f16a0067c5e1c864ea734f83718_11', 'fe_offset_80041f16a0067c5e1c864ea734f83718_11', 'fe_max_80041f16a0067c5e1c864ea734f83718_11', 'fe_reverse_80041f16a0067c5e1c864ea734f83718_11', 'fe_first_val_80041f16a0067c5e1c864ea734f83718_11', 'fe_last_val_80041f16a0067c5e1c864ea734f83718_11' );
unset( $fe_array_80041f16a0067c5e1c864ea734f83718_11 );
unset( $fe_array_80041f16a0067c5e1c864ea734f83718_11 );
$fe_array_80041f16a0067c5e1c864ea734f83718_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_css_list_temp', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_css_list_temp'] : null;
if (! isset( $fe_array_80041f16a0067c5e1c864ea734f83718_11 ) ) $fe_array_80041f16a0067c5e1c864ea734f83718_11 = NULL;
while ( is_object( $fe_array_80041f16a0067c5e1c864ea734f83718_11 ) and method_exists( $fe_array_80041f16a0067c5e1c864ea734f83718_11, 'templateValue' ) )
    $fe_array_80041f16a0067c5e1c864ea734f83718_11 = $fe_array_80041f16a0067c5e1c864ea734f83718_11->templateValue();

$fe_array_keys_80041f16a0067c5e1c864ea734f83718_11 = is_array( $fe_array_80041f16a0067c5e1c864ea734f83718_11 ) ? array_keys( $fe_array_80041f16a0067c5e1c864ea734f83718_11 ) : [];
$fe_n_items_80041f16a0067c5e1c864ea734f83718_11 = count( $fe_array_keys_80041f16a0067c5e1c864ea734f83718_11 );
$fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_offset_80041f16a0067c5e1c864ea734f83718_11 = 0;
$fe_max_80041f16a0067c5e1c864ea734f83718_11 = $fe_n_items_80041f16a0067c5e1c864ea734f83718_11 - $fe_offset_80041f16a0067c5e1c864ea734f83718_11;
$fe_reverse_80041f16a0067c5e1c864ea734f83718_11 = false;
if ( $fe_offset_80041f16a0067c5e1c864ea734f83718_11 < 0 || $fe_offset_80041f16a0067c5e1c864ea734f83718_11 >= $fe_n_items_80041f16a0067c5e1c864ea734f83718_11 )
{
    $fe_offset_80041f16a0067c5e1c864ea734f83718_11 = ( $fe_offset_80041f16a0067c5e1c864ea734f83718_11 < 0 ) ? 0 : $fe_n_items_80041f16a0067c5e1c864ea734f83718_11;
    if ( $fe_n_items_80041f16a0067c5e1c864ea734f83718_11 || $fe_offset_80041f16a0067c5e1c864ea734f83718_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_80041f16a0067c5e1c864ea734f83718_11'. Array count: $fe_n_items_80041f16a0067c5e1c864ea734f83718_11");   
}
}
if ( $fe_max_80041f16a0067c5e1c864ea734f83718_11 < 0 || $fe_offset_80041f16a0067c5e1c864ea734f83718_11 + $fe_max_80041f16a0067c5e1c864ea734f83718_11 > $fe_n_items_80041f16a0067c5e1c864ea734f83718_11 )
{
    if ( $fe_max_80041f16a0067c5e1c864ea734f83718_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_80041f16a0067c5e1c864ea734f83718_11");
    $fe_max_80041f16a0067c5e1c864ea734f83718_11 = $fe_n_items_80041f16a0067c5e1c864ea734f83718_11 - $fe_offset_80041f16a0067c5e1c864ea734f83718_11;
}
if ( $fe_reverse_80041f16a0067c5e1c864ea734f83718_11 )
{
    $fe_first_val_80041f16a0067c5e1c864ea734f83718_11 = $fe_n_items_80041f16a0067c5e1c864ea734f83718_11 - 1 - $fe_offset_80041f16a0067c5e1c864ea734f83718_11;
    $fe_last_val_80041f16a0067c5e1c864ea734f83718_11  = 0;
}
else
{
    $fe_first_val_80041f16a0067c5e1c864ea734f83718_11 = $fe_offset_80041f16a0067c5e1c864ea734f83718_11;
    $fe_last_val_80041f16a0067c5e1c864ea734f83718_11  = $fe_n_items_80041f16a0067c5e1c864ea734f83718_11 - 1;
}
// foreach
for ( $fe_i_80041f16a0067c5e1c864ea734f83718_11 = $fe_first_val_80041f16a0067c5e1c864ea734f83718_11; $fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_11 < $fe_max_80041f16a0067c5e1c864ea734f83718_11 && ( $fe_reverse_80041f16a0067c5e1c864ea734f83718_11 ? $fe_i_80041f16a0067c5e1c864ea734f83718_11 >= $fe_last_val_80041f16a0067c5e1c864ea734f83718_11 : $fe_i_80041f16a0067c5e1c864ea734f83718_11 <= $fe_last_val_80041f16a0067c5e1c864ea734f83718_11 ); $fe_reverse_80041f16a0067c5e1c864ea734f83718_11 ? $fe_i_80041f16a0067c5e1c864ea734f83718_11-- : $fe_i_80041f16a0067c5e1c864ea734f83718_11++ )
{
$fe_key_80041f16a0067c5e1c864ea734f83718_11 = $fe_array_keys_80041f16a0067c5e1c864ea734f83718_11[$fe_i_80041f16a0067c5e1c864ea734f83718_11];
$fe_val_80041f16a0067c5e1c864ea734f83718_11 = $fe_array_80041f16a0067c5e1c864ea734f83718_11[$fe_key_80041f16a0067c5e1c864ea734f83718_11];
$vars[$rootNamespace]['css'] = $fe_val_80041f16a0067c5e1c864ea734f83718_11;
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'skin', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['skin'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'css', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['css'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if ( is_string( $var4 ) )
{
	$var3 = explode( "<skin>", $var4 );
}
else if ( is_array( $var4 ) )
{
	$var3 = array( array_slice( $var4, 0, "<skin>" ), array_slice( $var4, "<skin>" ) );
}
else
{
	$var3 = null;
}
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = implode( $var2, $var3 );unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_css_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_css_list'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'content_css_list', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['content_css_list'] = $var;
    unset( $var );
}
$text .= '    ';
$fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_11 ) ) extract( array_pop( $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_11 ) );

else
{

unset( $fe_array_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_array_keys_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_n_items_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_i_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_key_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_val_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_offset_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_max_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_reverse_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_first_val_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_last_val_80041f16a0067c5e1c864ea734f83718_11 );

unset( $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_11 );

}

// foreach ends
$text .= '
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_80041f16a0067c5e1c864ea734f83718_12 = [];
$fe_array_keys_80041f16a0067c5e1c864ea734f83718_12 = [];
$fe_n_items_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_12  = 0;
$fe_i_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_key_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_val_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_offset_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_max_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_reverse_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_first_val_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_last_val_80041f16a0067c5e1c864ea734f83718_12 = 0;
if ( !isset( $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_12 ) ) $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_12 = [];
$fe_variable_stack_80041f16a0067c5e1c864ea734f83718_12[] = @compact( 'fe_array_80041f16a0067c5e1c864ea734f83718_12', 'fe_array_keys_80041f16a0067c5e1c864ea734f83718_12', 'fe_n_items_80041f16a0067c5e1c864ea734f83718_12', 'fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_12', 'fe_i_80041f16a0067c5e1c864ea734f83718_12', 'fe_key_80041f16a0067c5e1c864ea734f83718_12', 'fe_val_80041f16a0067c5e1c864ea734f83718_12', 'fe_offset_80041f16a0067c5e1c864ea734f83718_12', 'fe_max_80041f16a0067c5e1c864ea734f83718_12', 'fe_reverse_80041f16a0067c5e1c864ea734f83718_12', 'fe_first_val_80041f16a0067c5e1c864ea734f83718_12', 'fe_last_val_80041f16a0067c5e1c864ea734f83718_12' );
unset( $fe_array_80041f16a0067c5e1c864ea734f83718_12 );
unset( $fe_array_80041f16a0067c5e1c864ea734f83718_12 );
$fe_array_80041f16a0067c5e1c864ea734f83718_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'plugin_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['plugin_list'] : null;
if (! isset( $fe_array_80041f16a0067c5e1c864ea734f83718_12 ) ) $fe_array_80041f16a0067c5e1c864ea734f83718_12 = NULL;
while ( is_object( $fe_array_80041f16a0067c5e1c864ea734f83718_12 ) and method_exists( $fe_array_80041f16a0067c5e1c864ea734f83718_12, 'templateValue' ) )
    $fe_array_80041f16a0067c5e1c864ea734f83718_12 = $fe_array_80041f16a0067c5e1c864ea734f83718_12->templateValue();

$fe_array_keys_80041f16a0067c5e1c864ea734f83718_12 = is_array( $fe_array_80041f16a0067c5e1c864ea734f83718_12 ) ? array_keys( $fe_array_80041f16a0067c5e1c864ea734f83718_12 ) : [];
$fe_n_items_80041f16a0067c5e1c864ea734f83718_12 = count( $fe_array_keys_80041f16a0067c5e1c864ea734f83718_12 );
$fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_offset_80041f16a0067c5e1c864ea734f83718_12 = 0;
$fe_max_80041f16a0067c5e1c864ea734f83718_12 = $fe_n_items_80041f16a0067c5e1c864ea734f83718_12 - $fe_offset_80041f16a0067c5e1c864ea734f83718_12;
$fe_reverse_80041f16a0067c5e1c864ea734f83718_12 = false;
if ( $fe_offset_80041f16a0067c5e1c864ea734f83718_12 < 0 || $fe_offset_80041f16a0067c5e1c864ea734f83718_12 >= $fe_n_items_80041f16a0067c5e1c864ea734f83718_12 )
{
    $fe_offset_80041f16a0067c5e1c864ea734f83718_12 = ( $fe_offset_80041f16a0067c5e1c864ea734f83718_12 < 0 ) ? 0 : $fe_n_items_80041f16a0067c5e1c864ea734f83718_12;
    if ( $fe_n_items_80041f16a0067c5e1c864ea734f83718_12 || $fe_offset_80041f16a0067c5e1c864ea734f83718_12 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_80041f16a0067c5e1c864ea734f83718_12'. Array count: $fe_n_items_80041f16a0067c5e1c864ea734f83718_12");   
}
}
if ( $fe_max_80041f16a0067c5e1c864ea734f83718_12 < 0 || $fe_offset_80041f16a0067c5e1c864ea734f83718_12 + $fe_max_80041f16a0067c5e1c864ea734f83718_12 > $fe_n_items_80041f16a0067c5e1c864ea734f83718_12 )
{
    if ( $fe_max_80041f16a0067c5e1c864ea734f83718_12 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_80041f16a0067c5e1c864ea734f83718_12");
    $fe_max_80041f16a0067c5e1c864ea734f83718_12 = $fe_n_items_80041f16a0067c5e1c864ea734f83718_12 - $fe_offset_80041f16a0067c5e1c864ea734f83718_12;
}
if ( $fe_reverse_80041f16a0067c5e1c864ea734f83718_12 )
{
    $fe_first_val_80041f16a0067c5e1c864ea734f83718_12 = $fe_n_items_80041f16a0067c5e1c864ea734f83718_12 - 1 - $fe_offset_80041f16a0067c5e1c864ea734f83718_12;
    $fe_last_val_80041f16a0067c5e1c864ea734f83718_12  = 0;
}
else
{
    $fe_first_val_80041f16a0067c5e1c864ea734f83718_12 = $fe_offset_80041f16a0067c5e1c864ea734f83718_12;
    $fe_last_val_80041f16a0067c5e1c864ea734f83718_12  = $fe_n_items_80041f16a0067c5e1c864ea734f83718_12 - 1;
}
// foreach
for ( $fe_i_80041f16a0067c5e1c864ea734f83718_12 = $fe_first_val_80041f16a0067c5e1c864ea734f83718_12; $fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_12 < $fe_max_80041f16a0067c5e1c864ea734f83718_12 && ( $fe_reverse_80041f16a0067c5e1c864ea734f83718_12 ? $fe_i_80041f16a0067c5e1c864ea734f83718_12 >= $fe_last_val_80041f16a0067c5e1c864ea734f83718_12 : $fe_i_80041f16a0067c5e1c864ea734f83718_12 <= $fe_last_val_80041f16a0067c5e1c864ea734f83718_12 ); $fe_reverse_80041f16a0067c5e1c864ea734f83718_12 ? $fe_i_80041f16a0067c5e1c864ea734f83718_12-- : $fe_i_80041f16a0067c5e1c864ea734f83718_12++ )
{
$fe_key_80041f16a0067c5e1c864ea734f83718_12 = $fe_array_keys_80041f16a0067c5e1c864ea734f83718_12[$fe_i_80041f16a0067c5e1c864ea734f83718_12];
$fe_val_80041f16a0067c5e1c864ea734f83718_12 = $fe_array_80041f16a0067c5e1c864ea734f83718_12[$fe_key_80041f16a0067c5e1c864ea734f83718_12];
$vars[$rootNamespace]['plugin'] = $fe_val_80041f16a0067c5e1c864ea734f83718_12;
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'plugin', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['plugin'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$var3 = trim( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'plugins/' . $var3 . '/editor_plugin.js' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'dependency_js_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['dependency_js_list'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'dependency_js_list', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['dependency_js_list'] = $var;
    unset( $var );
}
$text .= '    ';
$fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_12++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_12 ) ) extract( array_pop( $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_12 ) );

else
{

unset( $fe_array_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_array_keys_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_n_items_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_n_items_processed_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_i_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_key_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_val_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_offset_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_max_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_reverse_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_first_val_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_last_val_80041f16a0067c5e1c864ea734f83718_12 );

unset( $fe_variable_stack_80041f16a0067c5e1c864ea734f83718_12 );

}

// foreach ends
$text .= '
    <!-- Load TinyMCE code -->
    ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ezjsc::jquery',
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
    <script id="tinymce_script_loader" type="text/javascript" src="/extension/ezoe/design/standard/javascript/tiny_mce_jquery.js" charset="utf-8"></script>
    ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript',
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
        2 => 'dependency_js_list',
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
    <!-- Init TinyMCE script -->
    <script type="text/javascript">
    var eZOeAttributeSettings, eZOeGlobalSettings = {        mode : "none",
        theme : "ez",
        width : \'100%\',
        language : \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
        skin : \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'skin', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['skin'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
        skin_variant : \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'skin_variant', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['skin_variant'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
        plugins : "-';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'plugin_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['plugin_list'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( ",-", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
        directionality : \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'directionality', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['directionality'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
        inlinepopups_skin: "tinyngadminui",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_blockformats : "p,pre,h1,h2,h3,h4,h5,h6",// removes address tag, not suppored by ezxml
        theme_advanced_path_location : false,// ignore, use theme_advanced_statusbar_location
        theme_advanced_statusbar_location : "bottom",// correct value set by layout code bellow pr attribute
        theme_advanced_toolbar_location : "top",// correct value set by layout code bellow pr attribute
        theme_advanced_toolbar_align : "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'toolbar_alignment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['toolbar_alignment'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '",
        theme_advanced_toolbar_floating : true,
        theme_advanced_resize_horizontal : false,
        theme_advanced_resizing : true,
        valid_elements : "-strong/b[class|customattributes],-em/i[class|customattributes],span[id|type|class|title|customattributes|align|style|view|inline|alt],sub[class|type|customattributes|align],sup[class|type|customattributes|align],u[class|type|customattributes|align],pre[class|title|customattributes],ol[class|customattributes],ul[class|customattributes],li[class|customattributes],a[href|name|target|view|title|class|id|customattributes],p[class|customattributes|align|style],img[id|type|class|title|customattributes|align|style|view|inline|alt|src],table[class|border|width|id|title|customattributes|ezborder|bordercolor|align|style],tr[class|customattributes],th[class|width|rowspan|colspan|customattributes|align|style],td[class|width|rowspan|colspan|customattributes|align|style],div[id|type|class|title|customattributes|align|style|view|inline|alt],h1[class|customattributes|align|style],h2[class|customattributes|align|style],h3[class|customattributes|align|style],h4[class|customattributes|align|style],h5[class|customattributes|align|style],h6[class|customattributes|align|style],br",
        valid_child_elements : "a[%itrans_na],table[tr],tr[td|th],ol/ul[li],h1/h2/h3/h4/h5/h6/pre/strong/b/p/em/i/u/span/sub/sup/li[%itrans|#text]div/pre/td/th[%btrans|%itrans|#text]",
        // cleanup : false,
        // cleanup_serializer : \'xml\',
        // entity_encoding : \'raw\',
        entities : \'160,nbsp\', // We need to transform nonbreaking white space to encoded form, all other charthers as stored in raw unicode form.
        // remove_linebreaks : false,
        // apply_source_formatting : false,
        fix_list_elements : true,
        fix_table_elements : true,
        convert_urls : false,
        inline_styles : false,
        tab_focus : \':prev,:next\',
        theme_ez_xml_alias_list : ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'input_handler', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['input_handler'] : null;
$var1 = compiledFetchAttribute( $var, 'json_xml_tag_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
        theme_ez_editor_css : \'';
unset( $var );
unset( $var1 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1Data = array( 'value' => $var1 );
$tpl->processOperator( 'ezcssfiles',
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
        2 => 'editor_css_list',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 3,
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'true',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var1Data, false, false );
$var1 = $var1Data['value'];
unset( $var1Data );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( ",", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\',
        theme_ez_content_css : \'';
unset( $var );
unset( $var1 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1Data = array( 'value' => $var1 );
$tpl->processOperator( 'ezcssfiles',
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
        2 => 'content_css_list',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 3,
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'true',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var1Data, false, false );
$var1 = $var1Data['value'];
unset( $var1Data );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( ",", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\',
        theme_ez_statusbar_open_dialog : ';
unset( $var );
unset( $var1 );
unset( $var2 );
$var6 = eZINI::instance( 'ezoe.ini' );
if ( $var6->hasVariable( 'EditorSettings', 'TagPathOpenDialog' ) )
    $var2 = !false ? $var6->variable( 'EditorSettings', 'TagPathOpenDialog' ) : true;
else
    $var2 = false ? false : '';
unset( $var6 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 'enabled' ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = "true";
}
else
{
    
    $var = 'false';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ',
        popup_css : ';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'skin', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['skin'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'stylesheets/skins/' . $var3 . '/dialog.css' );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1 = eZURLOperator::eZDesign( $tpl, $var1, "ezdesign" );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ',
        //popup_css_add : "/extension/ngadminui/design/ngadminui/stylesheets/core.css",
        gecko_spellcheck : true,
        object_resizing : false,//disable firefox inline image/table resizing
        table_inline_editing : true, // table edit controlls in gecko
        save_enablewhendirty : true,
        ez_root_url : "/",
        ez_extension_url : "/ezoe",
        ez_js_url : "/extension/ezoe/design/standard/javascript/",
        ngadminui_js_url: "/extension/ngadminui/design/ngadminui/javascript/",
        ngadminui_tinymce_plugins: [\'inlinepopups\'],
        /* Used by language pack / plugin url fixer bellow, do not change */
        ez_tinymce_url : "/extension/ezoe/design/standard/javascript/tiny_mce.js",
        ez_contentobject_id : ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
        ez_contentobject_version : ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'version' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
        ez_form_token: "@$ezxFormToken@",
        spellchecker_rpc_url : "/ezoe/spellcheck_rpc",
        spellchecker_languages : \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'spell_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['spell_languages'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
        atd_rpc_url : "/ezoe/atd_rpc?url=",
        atd_rpc_id  : "your API key here",
        /* this list contains the categories of errors we want to show */
        atd_show_types              : "Bias Language,Cliches,Complex Expression,Diacritical Marks,Double Negatives,Hidden Verbs,Jargon Language,Passive voice,Phrases to Avoid,Redundant Expression",
        /* strings this plugin should ignore */
        atd_ignore_strings          : "AtD,rsmudge",
        /* enable "Ignore Always" menu item, uses cookies by default. Set atd_ignore_rpc_url to a URL AtD should send ignore requests to. */
        atd_ignore_enable           : "true",
        /* the URL to the button image to display */
        //atd_button_url              : "atdbuttontr.gif",
        atd_css_url : "/extension/ezoe/design/standard/javascript/plugins/AtD/css/content.css",
        paste_text_linebreaktype : "br",
        paste_preprocess : function(pl, o) {            var ed = pl.editor, uid, elt, prev, bm;

            // Strip <a> HTML tags from clipboard content (Happens on Internet Explorer)
            o.content = o.content.replace( /(\\s[a-z]+=")<a\\s[^>]+>([^<]+)<\\/a>/gi, \'$1$2\' );
            // Strip namespaced tags, avoids issues with Word\'s "Smart Tags"
            o.content = o.content.replace(/<\\/?[^<>\\s]+:[^<>]+>/g, \'\');

            
            // Workaround for https://jira.ez.no/browse/EZP-21903
            // http://www.tinymce.com/develop/bugtracker_view.php?id=6483
            if ( tinymce.isWebKit ) {
                uid = tinymce.DOM.uniqueId();
                ed.focus();
                bm = ed.selection.getBookmark();
                ed.execCommand(\'mceInsertContent\', false, \'<span id="\' + uid + \'"></span>\');
                elt = ed.getDoc().getElementById(uid);

                if ( !elt.nextSibling || elt.nextSibling.nodeValue === "" ) {
                    // we are at the end of the line
                    // if it ends with only a non break space, we transform it into a normal space
                    prev = elt.previousSibling;

                    if ( prev && prev.nodeType === 3 && !prev.nodeValue.match(/ \\u00a0$/) ) {
                        prev.nodeValue = prev.nodeValue.replace(/\\u00a0$/, \' \');
                    }
                }
                ed.dom.remove(elt);
                ed.selection.moveToBookmark(bm);
            }
            
        },
        paste_postprocess: function(pl, o) {            // removes \\n after <br />, this is for paste of text
            // with soft carriage return from Word in Firefox
            // see issue http://issues.ez.no/18702
            o.node.innerHTML = o.node.innerHTML.replace(/<br\\s?.*\\/?>\\n/gi,\'<br>\');
            
            if (
                pl.editor.pasteAsPlainText
                && o.node.childNodes.length === 1
                && o.node.firstChild.tagName
                && o.node.firstChild.tagName.toLowerCase() === \'pre\'
            ) {
                o.node.innerHTML = o.node.firstChild.innerHTML.replace(/\\n/g, "<br />");
            }
            
        }
    };

    

    // make sure TinyMCE doesn\'t try to load language pack
    // and set urls for plugins so their dialogs work correctly
    (function(){
        var uri = document.location.protocol + \'//\' + document.location.host + eZOeGlobalSettings.ez_tinymce_url, tps = eZOeGlobalSettings.plugins.split(\',\'), pm = tinymce.PluginManager, tp;
        var ngadminui_uri = document.location.protocol + \'//\' + document.location.host + eZOeGlobalSettings.ngadminui_js_url;
        tinymce.ScriptLoader.markDone( uri.replace( \'tiny_mce\', \'langs/\' + eZOeGlobalSettings.language ) );
        for (var i = 0, l = tps.length; i < l; i++)
        {
            tp = tps[i].slice(1);
            pm.urls[ tp ] = uri.replace( \'tiny_mce.js\', \'plugins/\' + tp );

            if (eZOeGlobalSettings.ngadminui_tinymce_plugins.indexOf(tp) >= 0) {
                pm.urls[ tp ] = ngadminui_uri + \'plugins/\' + tp;
            }
        }
    }())

    tinyMCE.init( eZOeGlobalSettings );

    function eZOeToggleEditor( id, settings )
    {
        var el = document.getElementById( id );
        if ( el )
        {
            if ( tinyMCE.getInstanceById( id ) == null )
                //tinyMCE.execCommand(\'mceAddControl\', false, id);
                new tinymce.Editor(id, settings).render();
            else
                tinyMCE.execCommand( \'mceRemoveControl\', false, id );
        }
    }

    
    </script>
    ';
}
$text .= '


    <div class="oe-window">
        <textarea class="box" id="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_base', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_base'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_base', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_base'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" cols="88" rows="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'editorRow', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['editorRow'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'input_handler', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['input_handler'] : null;
$var1 = compiledFetchAttribute( $var, 'input_xml' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</textarea>
    </div>

    <div class="block">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'input_handler', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['input_handler'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_disable' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <input class="button';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'layout_settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['layout_settings'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'buttons' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( mb_strpos( $if_cond1, "disable" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "disable", $if_cond1 );
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
$text .= ' hide';
}
unset( $if_cond );
// if ends

$text .= '" type="submit" name="CustomActionButton[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_disable_editor]" value="Disable editor" />
        ';
}
unset( $if_cond );
// if ends

$text .= '        <script type="text/javascript">
        eZOeAttributeSettings = eZOeGlobalSettings;
        eZOeAttributeSettings[\'ez_attribute_id\'] = ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ';
        eZOeAttributeSettings[\'theme_advanced_buttons1\'] = "';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'layout_settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['layout_settings'] : null;
$var2 = compiledFetchAttribute( $var1, 'buttons' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( ",", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '";
        eZOeAttributeSettings[\'theme_advanced_statusbar_location\'] = "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'layout_settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['layout_settings'] : null;
$var1 = compiledFetchAttribute( $var, 'path_location' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";
        eZOeAttributeSettings[\'theme_advanced_toolbar_location\'] = "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'layout_settings', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['layout_settings'] : null;
$var1 = compiledFetchAttribute( $var, 'toolbar_location' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";

        eZOeToggleEditor( \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_base', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_base'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\', eZOeAttributeSettings );
        </script>
    </div>
<!-- End editor -->';
}
else
{
$text .= '    
    ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ezjsc::jquery',
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
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'input_handler', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['input_handler'] : null;
$var1 = compiledFetchAttribute( $var, 'aliased_handler' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['aliased_handler'] = $var;
unset( $var );
$text .= '    ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:content/datatype/edit/',
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
              2 => 'aliased_handler',
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
                1 => 'edit_template_name',
                2 => false,
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '.tpl',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'input_handler' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'aliased_handler',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 250,
    1 => 4,
    2 => 13647,
  ),
  1 => 
  array (
    0 => 250,
    1 => 129,
    2 => 13772,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezxmltext_ezoe.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    <input class="button" type="submit" name="CustomActionButton[';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_enable_editor]" value="Enable editor" /><br />
    ';
unset( $vars[$currentNamespace]['aliased_handler'] );
}
unset( $if_cond );
// if ends

if ( isset( $setArray[$currentNamespace]['input_handler'] ) )
{
unset( $vars[$currentNamespace]['input_handler'] );
}

if ( isset( $setArray[$currentNamespace]['attribute_base'] ) )
{
unset( $vars[$currentNamespace]['attribute_base'] );
}

if ( isset( $setArray[$currentNamespace]['editorRow'] ) )
{
unset( $vars[$currentNamespace]['editorRow'] );
}


$setArray = $oldSetArray_5a44fbfa77b608cb6afd90af97933427;
$tpl->Level--;
?>
