<?php
// URI:       design:toolbar/full/admin_bookmarks.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/toolbar/full/admin_bookmarks.tpl
// Timestamp: 1771144664 (Sun Feb 15 8:37:44 UTC 2026)
$oldSetArray_84e731a183d473aaa445e53169609d43 = isset( $setArray ) ? $setArray : array();
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

// def $bookmark_list
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchBookmarks' ),
  array_values( array(     'offset' => false,
    'limit' => 20 ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'bookmark_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'bookmark_list' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 2,
    1 => 23,
    2 => 98,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/toolbar/full/admin_bookmarks.tpl',
) );
    $tpl->setVariable( 'bookmark_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'bookmark_list', $var, $rootNamespace );
}

// def $bookmark_node
if ( $tpl->hasVariable( 'bookmark_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'bookmark_node' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 2,
    1 => 23,
    2 => 98,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/toolbar/full/admin_bookmarks.tpl',
) );
    $tpl->setVariable( 'bookmark_node', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'bookmark_node', 0, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_list'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<ul>
    ';
// foreach begins
$skipDelimiter = true;
$fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 = [];
$fe_array_keys_bd84c98c1a1c250b632c1f99b93d3b2e_2 = [];
$fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_n_items_processed_bd84c98c1a1c250b632c1f99b93d3b2e_2  = 0;
$fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_key_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_reverse_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_first_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_last_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
if ( !isset( $fe_variable_stack_bd84c98c1a1c250b632c1f99b93d3b2e_2 ) ) $fe_variable_stack_bd84c98c1a1c250b632c1f99b93d3b2e_2 = [];
$fe_variable_stack_bd84c98c1a1c250b632c1f99b93d3b2e_2[] = @compact( 'fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_array_keys_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_n_items_processed_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_key_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_val_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_reverse_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_first_val_bd84c98c1a1c250b632c1f99b93d3b2e_2', 'fe_last_val_bd84c98c1a1c250b632c1f99b93d3b2e_2' );
unset( $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 );
unset( $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 );
$fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_list'] : null;
if (! isset( $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 ) ) $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 = NULL;
while ( is_object( $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 ) and method_exists( $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2, 'templateValue' ) )
    $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 = $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2->templateValue();

$fe_array_keys_bd84c98c1a1c250b632c1f99b93d3b2e_2 = is_array( $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 ) ? array_keys( $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 ) : [];
$fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 = count( $fe_array_keys_bd84c98c1a1c250b632c1f99b93d3b2e_2 );
$fe_n_items_processed_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 = 0;
$fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2 = $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 - $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2;
$fe_reverse_bd84c98c1a1c250b632c1f99b93d3b2e_2 = false;
if ( $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 < 0 || $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 >= $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 )
{
    $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 = ( $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 < 0 ) ? 0 : $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2;
    if ( $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 || $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2'. Array count: $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2");   
}
}
if ( $fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2 < 0 || $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 + $fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2 > $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 )
{
    if ( $fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2");
    $fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2 = $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 - $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2;
}
if ( $fe_reverse_bd84c98c1a1c250b632c1f99b93d3b2e_2 )
{
    $fe_first_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 = $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 - 1 - $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2;
    $fe_last_val_bd84c98c1a1c250b632c1f99b93d3b2e_2  = 0;
}
else
{
    $fe_first_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 = $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2;
    $fe_last_val_bd84c98c1a1c250b632c1f99b93d3b2e_2  = $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 - 1;
}
// foreach
for ( $fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2 = $fe_first_val_bd84c98c1a1c250b632c1f99b93d3b2e_2; $fe_n_items_processed_bd84c98c1a1c250b632c1f99b93d3b2e_2 < $fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2 && ( $fe_reverse_bd84c98c1a1c250b632c1f99b93d3b2e_2 ? $fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2 >= $fe_last_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 : $fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2 <= $fe_last_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 ); $fe_reverse_bd84c98c1a1c250b632c1f99b93d3b2e_2 ? $fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2-- : $fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2++ )
{
$fe_key_bd84c98c1a1c250b632c1f99b93d3b2e_2 = $fe_array_keys_bd84c98c1a1c250b632c1f99b93d3b2e_2[$fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2];
$fe_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 = $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2[$fe_key_bd84c98c1a1c250b632c1f99b93d3b2e_2];
$vars[$rootNamespace]['bookmark'] = $fe_val_bd84c98c1a1c250b632c1f99b93d3b2e_2;
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark'] : null;
$var1 = compiledFetchAttribute( $var, 'node' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'bookmark_node', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['bookmark_node'] = $var;
    unset( $var );
}
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'edit' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '             <li>
             ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                 <a href="#" class="bookmark-edit" onclick="ezpopmenu_showTopLevel( event, \'BookmarkMenu\', ez_createAArray( new Array( \'%nodeID%\', \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\', \'%objectID%\', \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\', \'%bookmarkID%\', \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\', \'%languages%\', ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'language_js_array' );
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

$text .= ' ) ) , \'';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark'] : null;
$var3 = compiledFetchAttribute( $var2, 'name' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = 18;
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var2 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var2 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var1 = trim( $substrFunc( $var2, 0, $leftPartLength ) . $seq . $substrFunc( $var2, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var1 = $var2;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var2 ) > $length ) && $strlenFunc( $var2 ) > $maxLength )
                                                                      {
                                                                          $var1 = trim( $substrFunc( $var2, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var1 = $var2;
                                                                      }
                                                                  }
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\'); return false;">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
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
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => '[%classname] Click on the icon to display a context-sensitive menu.',
      2 => false,
    ),
    1 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'i18n',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design/admin/pagelayout',
            2 => false,
          ),
        ),
        2 => NULL,
        3 => 
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
                  1 => '%classname',
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
                    2 => 'bookmark_node',
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

$text .= '</a><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
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

$text .= '</a></li>
             ';
}
else
{
$text .= '                 ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_container' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                     <span class="bookmark-edit">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
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
      1 => 'small',
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
        2 => 'bookmark_node',
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

$text .= '</span><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/browse/' . $var3 );
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

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
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

$text .= '</a></li>
                 ';
}
else
{
$text .= '                     <span class="bookmark-edit">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
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
      1 => 'small',
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
        2 => 'bookmark_node',
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

$text .= '</span>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
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

$text .= '</li>
                 ';
}
unset( $if_cond );
// if ends

$text .= '             ';
}
unset( $if_cond );
// if ends

$text .= '         ';
}
else
{
$text .= '             <li><span class="bookmark-edit">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
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
      1 => 'small',
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
        2 => 'bookmark_node',
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

$text .= '</span><span class="disabled">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'bookmark_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['bookmark_node'] : null;
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

$text .= '</span></li>
         ';
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_bd84c98c1a1c250b632c1f99b93d3b2e_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_bd84c98c1a1c250b632c1f99b93d3b2e_2 ) ) extract( array_pop( $fe_variable_stack_bd84c98c1a1c250b632c1f99b93d3b2e_2 ) );

else
{

unset( $fe_array_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_array_keys_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_n_items_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_n_items_processed_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_i_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_key_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_offset_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_max_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_reverse_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_first_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_last_val_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

unset( $fe_variable_stack_bd84c98c1a1c250b632c1f99b93d3b2e_2 );

}

// foreach ends
$text .= '</ul>';
}
unset( $if_cond );
// if ends

// undef $bookmark_list
$tpl->unsetLocalVariable( 'bookmark_list', $rootNamespace );

// undef $bookmark_node
$tpl->unsetLocalVariable( 'bookmark_node', $rootNamespace );

$text .= '
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'content_info' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'node_id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( 'edit' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) != ( 'browse' ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <form method="post" action="/content/action">
        <input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'content_info' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        <input class="btn btn-primary" type="submit" name="ActionAddToBookmarks" value="Lesezeichen setzen" title="Ein Lesezeichen für dieses Eintrag setzen." />
    </form>';
}
else
{
$text .= '    <form method="post" action="/content/action">
        <input class="btn btn-default" type="submit" value="Lesezeichen setzen" disabled="disabled" />
    </form>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_84e731a183d473aaa445e53169609d43;
$tpl->Level--;
?>
