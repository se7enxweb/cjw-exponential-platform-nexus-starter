<?php
// URI:       extension/ngadminui/design/ngadminui/templates/content/edit_menu.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/edit_menu.tpl
// Timestamp: 1782241051 (Tue Jun 23 18:57:31 UTC 2026)
$oldSetArray_7052f125a7f18f98bcf0748b86f2b53f = isset( $setArray ) ? $setArray : array();
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

// foreach begins
$skipDelimiter = true;
$fe_array_367a800228a008be490e60d2a740ea9b_3 = [];
$fe_array_keys_367a800228a008be490e60d2a740ea9b_3 = [];
$fe_n_items_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_n_items_processed_367a800228a008be490e60d2a740ea9b_3  = 0;
$fe_i_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_key_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_val_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_offset_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_max_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_reverse_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_first_val_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_last_val_367a800228a008be490e60d2a740ea9b_3 = 0;
if ( !isset( $fe_variable_stack_367a800228a008be490e60d2a740ea9b_3 ) ) $fe_variable_stack_367a800228a008be490e60d2a740ea9b_3 = [];
$fe_variable_stack_367a800228a008be490e60d2a740ea9b_3[] = @compact( 'fe_array_367a800228a008be490e60d2a740ea9b_3', 'fe_array_keys_367a800228a008be490e60d2a740ea9b_3', 'fe_n_items_367a800228a008be490e60d2a740ea9b_3', 'fe_n_items_processed_367a800228a008be490e60d2a740ea9b_3', 'fe_i_367a800228a008be490e60d2a740ea9b_3', 'fe_key_367a800228a008be490e60d2a740ea9b_3', 'fe_val_367a800228a008be490e60d2a740ea9b_3', 'fe_offset_367a800228a008be490e60d2a740ea9b_3', 'fe_max_367a800228a008be490e60d2a740ea9b_3', 'fe_reverse_367a800228a008be490e60d2a740ea9b_3', 'fe_first_val_367a800228a008be490e60d2a740ea9b_3', 'fe_last_val_367a800228a008be490e60d2a740ea9b_3' );
$fe_array_367a800228a008be490e60d2a740ea9b_3 = array (
);
$fe_array_keys_367a800228a008be490e60d2a740ea9b_3 = is_array( $fe_array_367a800228a008be490e60d2a740ea9b_3 ) ? array_keys( $fe_array_367a800228a008be490e60d2a740ea9b_3 ) : [];
$fe_n_items_367a800228a008be490e60d2a740ea9b_3 = count( $fe_array_keys_367a800228a008be490e60d2a740ea9b_3 );
$fe_n_items_processed_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_offset_367a800228a008be490e60d2a740ea9b_3 = 0;
$fe_max_367a800228a008be490e60d2a740ea9b_3 = $fe_n_items_367a800228a008be490e60d2a740ea9b_3 - $fe_offset_367a800228a008be490e60d2a740ea9b_3;
$fe_reverse_367a800228a008be490e60d2a740ea9b_3 = false;
if ( $fe_offset_367a800228a008be490e60d2a740ea9b_3 < 0 || $fe_offset_367a800228a008be490e60d2a740ea9b_3 >= $fe_n_items_367a800228a008be490e60d2a740ea9b_3 )
{
    $fe_offset_367a800228a008be490e60d2a740ea9b_3 = ( $fe_offset_367a800228a008be490e60d2a740ea9b_3 < 0 ) ? 0 : $fe_n_items_367a800228a008be490e60d2a740ea9b_3;
    if ( $fe_n_items_367a800228a008be490e60d2a740ea9b_3 || $fe_offset_367a800228a008be490e60d2a740ea9b_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_367a800228a008be490e60d2a740ea9b_3'. Array count: $fe_n_items_367a800228a008be490e60d2a740ea9b_3");   
}
}
if ( $fe_max_367a800228a008be490e60d2a740ea9b_3 < 0 || $fe_offset_367a800228a008be490e60d2a740ea9b_3 + $fe_max_367a800228a008be490e60d2a740ea9b_3 > $fe_n_items_367a800228a008be490e60d2a740ea9b_3 )
{
    if ( $fe_max_367a800228a008be490e60d2a740ea9b_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_367a800228a008be490e60d2a740ea9b_3");
    $fe_max_367a800228a008be490e60d2a740ea9b_3 = $fe_n_items_367a800228a008be490e60d2a740ea9b_3 - $fe_offset_367a800228a008be490e60d2a740ea9b_3;
}
if ( $fe_reverse_367a800228a008be490e60d2a740ea9b_3 )
{
    $fe_first_val_367a800228a008be490e60d2a740ea9b_3 = $fe_n_items_367a800228a008be490e60d2a740ea9b_3 - 1 - $fe_offset_367a800228a008be490e60d2a740ea9b_3;
    $fe_last_val_367a800228a008be490e60d2a740ea9b_3  = 0;
}
else
{
    $fe_first_val_367a800228a008be490e60d2a740ea9b_3 = $fe_offset_367a800228a008be490e60d2a740ea9b_3;
    $fe_last_val_367a800228a008be490e60d2a740ea9b_3  = $fe_n_items_367a800228a008be490e60d2a740ea9b_3 - 1;
}
// foreach
for ( $fe_i_367a800228a008be490e60d2a740ea9b_3 = $fe_first_val_367a800228a008be490e60d2a740ea9b_3; $fe_n_items_processed_367a800228a008be490e60d2a740ea9b_3 < $fe_max_367a800228a008be490e60d2a740ea9b_3 && ( $fe_reverse_367a800228a008be490e60d2a740ea9b_3 ? $fe_i_367a800228a008be490e60d2a740ea9b_3 >= $fe_last_val_367a800228a008be490e60d2a740ea9b_3 : $fe_i_367a800228a008be490e60d2a740ea9b_3 <= $fe_last_val_367a800228a008be490e60d2a740ea9b_3 ); $fe_reverse_367a800228a008be490e60d2a740ea9b_3 ? $fe_i_367a800228a008be490e60d2a740ea9b_3-- : $fe_i_367a800228a008be490e60d2a740ea9b_3++ )
{
$fe_key_367a800228a008be490e60d2a740ea9b_3 = $fe_array_keys_367a800228a008be490e60d2a740ea9b_3[$fe_i_367a800228a008be490e60d2a740ea9b_3];
$fe_val_367a800228a008be490e60d2a740ea9b_3 = $fe_array_367a800228a008be490e60d2a740ea9b_3[$fe_key_367a800228a008be490e60d2a740ea9b_3];
$vars[$rootNamespace]['tpl'] = $fe_val_367a800228a008be490e60d2a740ea9b_3;
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
            1 => 'design:',
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
              2 => 'tpl',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'object' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'object',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 3,
    1 => 4,
    2 => 94,
  ),
  1 => 
  array (
    0 => 3,
    1 => 56,
    2 => 146,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/content/edit_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$fe_n_items_processed_367a800228a008be490e60d2a740ea9b_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_367a800228a008be490e60d2a740ea9b_3 ) ) extract( array_pop( $fe_variable_stack_367a800228a008be490e60d2a740ea9b_3 ) );

else
{

unset( $fe_array_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_array_keys_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_n_items_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_n_items_processed_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_i_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_key_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_val_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_offset_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_max_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_reverse_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_first_val_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_last_val_367a800228a008be490e60d2a740ea9b_3 );

unset( $fe_variable_stack_367a800228a008be490e60d2a740ea9b_3 );

}

// foreach ends
$oldRestoreIncludeArray_7090c02615143ed0a7e5874895376bf7 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['object'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'object', $vars[$currentNamespace]['object'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['object'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'object', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['object'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['manage_version_button'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'manage_version_button', $vars[$currentNamespace]['manage_version_button'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['manage_version_button'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'manage_version_button', 'unset' );

$vars[$currentNamespace]['manage_version_button'] = true;
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/object_information-b87c15ee1708f22a531257dfaefdddd7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/content/parts/object_information.tpl' );
include( '' . 'var/site/cache/template/compiled/object_information-b87c15ee1708f22a531257dfaefdddd7.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/content/parts/object_information.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7090c02615143ed0a7e5874895376bf7;

$text .= '
<div class="drafts block">

    

    <h3>Current draft</h3>

    

    
    <div class="box-content">

        
        <p>
            <label>Created:</label>
            ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var2 = compiledFetchAttribute( $var1, 'created' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '<br />
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var2 = compiledFetchAttribute( $var1, 'creator' );
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

$text .= '
        </p>

        
        <p>
            <label>Modified:</label>
            ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var2 = compiledFetchAttribute( $var1, 'modified' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '<br />
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var2 = compiledFetchAttribute( $var1, 'creator' );
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

$text .= '
        </p>

        
        <p>
            <label>Version:</label>
            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_version'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
        </p>

        
    </div>
</div>

<!-- Translation box start-->
<div class="translations block">

    

    <h3>Existing translations</h3>

    

    
    <div class="box-content">
        <p>Base translation on:</p>
        <label><input type="radio" name="FromLanguage" value=""';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
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
$text .= ' checked="checked"';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'status' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
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

$text .= ' /> None</label>

        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'status' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// foreach begins
$skipDelimiter = true;
$fe_array_367a800228a008be490e60d2a740ea9b_4 = [];
$fe_array_keys_367a800228a008be490e60d2a740ea9b_4 = [];
$fe_n_items_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_n_items_processed_367a800228a008be490e60d2a740ea9b_4  = 0;
$fe_i_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_key_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_val_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_offset_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_max_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_reverse_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_first_val_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_last_val_367a800228a008be490e60d2a740ea9b_4 = 0;
if ( !isset( $fe_variable_stack_367a800228a008be490e60d2a740ea9b_4 ) ) $fe_variable_stack_367a800228a008be490e60d2a740ea9b_4 = [];
$fe_variable_stack_367a800228a008be490e60d2a740ea9b_4[] = @compact( 'fe_array_367a800228a008be490e60d2a740ea9b_4', 'fe_array_keys_367a800228a008be490e60d2a740ea9b_4', 'fe_n_items_367a800228a008be490e60d2a740ea9b_4', 'fe_n_items_processed_367a800228a008be490e60d2a740ea9b_4', 'fe_i_367a800228a008be490e60d2a740ea9b_4', 'fe_key_367a800228a008be490e60d2a740ea9b_4', 'fe_val_367a800228a008be490e60d2a740ea9b_4', 'fe_offset_367a800228a008be490e60d2a740ea9b_4', 'fe_max_367a800228a008be490e60d2a740ea9b_4', 'fe_reverse_367a800228a008be490e60d2a740ea9b_4', 'fe_first_val_367a800228a008be490e60d2a740ea9b_4', 'fe_last_val_367a800228a008be490e60d2a740ea9b_4' );
unset( $fe_array_367a800228a008be490e60d2a740ea9b_4 );
unset( $fe_array_367a800228a008be490e60d2a740ea9b_4 );
$fe_array_367a800228a008be490e60d2a740ea9b_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$fe_array_367a800228a008be490e60d2a740ea9b_41 = compiledFetchAttribute( $fe_array_367a800228a008be490e60d2a740ea9b_4, 'languages' );
unset( $fe_array_367a800228a008be490e60d2a740ea9b_4 );
$fe_array_367a800228a008be490e60d2a740ea9b_4 = $fe_array_367a800228a008be490e60d2a740ea9b_41;
if (! isset( $fe_array_367a800228a008be490e60d2a740ea9b_4 ) ) $fe_array_367a800228a008be490e60d2a740ea9b_4 = NULL;
while ( is_object( $fe_array_367a800228a008be490e60d2a740ea9b_4 ) and method_exists( $fe_array_367a800228a008be490e60d2a740ea9b_4, 'templateValue' ) )
    $fe_array_367a800228a008be490e60d2a740ea9b_4 = $fe_array_367a800228a008be490e60d2a740ea9b_4->templateValue();

$fe_array_keys_367a800228a008be490e60d2a740ea9b_4 = is_array( $fe_array_367a800228a008be490e60d2a740ea9b_4 ) ? array_keys( $fe_array_367a800228a008be490e60d2a740ea9b_4 ) : [];
$fe_n_items_367a800228a008be490e60d2a740ea9b_4 = count( $fe_array_keys_367a800228a008be490e60d2a740ea9b_4 );
$fe_n_items_processed_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_offset_367a800228a008be490e60d2a740ea9b_4 = 0;
$fe_max_367a800228a008be490e60d2a740ea9b_4 = $fe_n_items_367a800228a008be490e60d2a740ea9b_4 - $fe_offset_367a800228a008be490e60d2a740ea9b_4;
$fe_reverse_367a800228a008be490e60d2a740ea9b_4 = false;
if ( $fe_offset_367a800228a008be490e60d2a740ea9b_4 < 0 || $fe_offset_367a800228a008be490e60d2a740ea9b_4 >= $fe_n_items_367a800228a008be490e60d2a740ea9b_4 )
{
    $fe_offset_367a800228a008be490e60d2a740ea9b_4 = ( $fe_offset_367a800228a008be490e60d2a740ea9b_4 < 0 ) ? 0 : $fe_n_items_367a800228a008be490e60d2a740ea9b_4;
    if ( $fe_n_items_367a800228a008be490e60d2a740ea9b_4 || $fe_offset_367a800228a008be490e60d2a740ea9b_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_367a800228a008be490e60d2a740ea9b_4'. Array count: $fe_n_items_367a800228a008be490e60d2a740ea9b_4");   
}
}
if ( $fe_max_367a800228a008be490e60d2a740ea9b_4 < 0 || $fe_offset_367a800228a008be490e60d2a740ea9b_4 + $fe_max_367a800228a008be490e60d2a740ea9b_4 > $fe_n_items_367a800228a008be490e60d2a740ea9b_4 )
{
    if ( $fe_max_367a800228a008be490e60d2a740ea9b_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_367a800228a008be490e60d2a740ea9b_4");
    $fe_max_367a800228a008be490e60d2a740ea9b_4 = $fe_n_items_367a800228a008be490e60d2a740ea9b_4 - $fe_offset_367a800228a008be490e60d2a740ea9b_4;
}
if ( $fe_reverse_367a800228a008be490e60d2a740ea9b_4 )
{
    $fe_first_val_367a800228a008be490e60d2a740ea9b_4 = $fe_n_items_367a800228a008be490e60d2a740ea9b_4 - 1 - $fe_offset_367a800228a008be490e60d2a740ea9b_4;
    $fe_last_val_367a800228a008be490e60d2a740ea9b_4  = 0;
}
else
{
    $fe_first_val_367a800228a008be490e60d2a740ea9b_4 = $fe_offset_367a800228a008be490e60d2a740ea9b_4;
    $fe_last_val_367a800228a008be490e60d2a740ea9b_4  = $fe_n_items_367a800228a008be490e60d2a740ea9b_4 - 1;
}
// foreach
for ( $fe_i_367a800228a008be490e60d2a740ea9b_4 = $fe_first_val_367a800228a008be490e60d2a740ea9b_4; $fe_n_items_processed_367a800228a008be490e60d2a740ea9b_4 < $fe_max_367a800228a008be490e60d2a740ea9b_4 && ( $fe_reverse_367a800228a008be490e60d2a740ea9b_4 ? $fe_i_367a800228a008be490e60d2a740ea9b_4 >= $fe_last_val_367a800228a008be490e60d2a740ea9b_4 : $fe_i_367a800228a008be490e60d2a740ea9b_4 <= $fe_last_val_367a800228a008be490e60d2a740ea9b_4 ); $fe_reverse_367a800228a008be490e60d2a740ea9b_4 ? $fe_i_367a800228a008be490e60d2a740ea9b_4-- : $fe_i_367a800228a008be490e60d2a740ea9b_4++ )
{
$fe_key_367a800228a008be490e60d2a740ea9b_4 = $fe_array_keys_367a800228a008be490e60d2a740ea9b_4[$fe_i_367a800228a008be490e60d2a740ea9b_4];
$fe_val_367a800228a008be490e60d2a740ea9b_4 = $fe_array_367a800228a008be490e60d2a740ea9b_4[$fe_key_367a800228a008be490e60d2a740ea9b_4];
$vars[$rootNamespace]['language'] = $fe_val_367a800228a008be490e60d2a740ea9b_4;
$text .= '            ';
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
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'current_language_object' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'locale' );
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
$text .= ' 
            <label>
                <input type="radio" name="FromLanguage" value="';
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

$text .= '"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'locale' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
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
$text .= ' checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' />
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

$text .= '" style="vertical-align: middle;" />
                ';
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

$text .= '
            </label>
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_367a800228a008be490e60d2a740ea9b_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_367a800228a008be490e60d2a740ea9b_4 ) ) extract( array_pop( $fe_variable_stack_367a800228a008be490e60d2a740ea9b_4 ) );

else
{

unset( $fe_array_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_array_keys_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_n_items_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_n_items_processed_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_i_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_key_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_val_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_offset_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_max_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_reverse_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_first_val_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_last_val_367a800228a008be490e60d2a740ea9b_4 );

unset( $fe_variable_stack_367a800228a008be490e60d2a740ea9b_4 );

}

// foreach ends
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '
        <input ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'status' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= ' class="btn btn-default btn-sm" type="submit" name="FromLanguageButton" value="View" title="Edit the current object showing the selected language as a reference." />

    
    </div>
</div>

<!-- Translation box end-->


<div class="sections block">
    ';
$oldRestoreIncludeArray_94f57fb7adb1dce57678ed71b6b85d0e = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/edit_sections-1c4060b38fd07dcae290fd9b5e66d2ce.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/content/parts/edit_sections.tpl' );
include( '' . 'var/site/cache/template/compiled/edit_sections-1c4060b38fd07dcae290fd9b5e66d2ce.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/content/parts/edit_sections.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_94f57fb7adb1dce57678ed71b6b85d0e;

$text .= '</div>



<div class="states block">
    ';
$oldRestoreIncludeArray_991de44fb3b05edf057eda68233c4fed = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/edit_states-32f76b4836b7169ca12e5505615313f7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/content/parts/edit_states.tpl' );
include( '' . 'var/site/cache/template/compiled/edit_states-32f76b4836b7169ca12e5505615313f7.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/content/parts/edit_states.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_991de44fb3b05edf057eda68233c4fed;

$text .= '</div>
';

$setArray = $oldSetArray_7052f125a7f18f98bcf0748b86f2b53f;
$tpl->Level--;
?>
