<?php
// URI:       design:popupmenu/popup_tag_menu.tpl
// Filename:  extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl
// Timestamp: 1706518931 (Mon Jan 29 9:02:11 UTC 2024)
$oldSetArray_9caf17cdc4dadb9b9a86a2ce5ad84c6b = isset( $setArray ) ? $setArray : array();
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

// def $tags_add_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "tags",
    'function' => "add",
    'user_id' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_add_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_add_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 158,
    2 => 742,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_add_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_add_access', $var, $rootNamespace );
}

// def $tags_edit_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "tags",
    'function' => "edit",
    'user_id' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_edit_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_edit_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 158,
    2 => 742,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_edit_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_edit_access', $var, $rootNamespace );
}

// def $tags_delete_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "tags",
    'function' => "delete",
    'user_id' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_delete_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_delete_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 158,
    2 => 742,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_delete_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_delete_access', $var, $rootNamespace );
}

// def $tags_merge_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "tags",
    'function' => "merge",
    'user_id' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_merge_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_merge_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 158,
    2 => 742,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_merge_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_merge_access', $var, $rootNamespace );
}

// def $tags_add_synonym_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "tags",
    'function' => "addsynonym",
    'user_id' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_add_synonym_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_add_synonym_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 158,
    2 => 742,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_add_synonym_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_add_synonym_access', $var, $rootNamespace );
}

// def $tags_make_synonym_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array_values( array(     'module' => "tags",
    'function' => "makesynonym",
    'user_id' => null ) ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tags_make_synonym_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tags_make_synonym_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 158,
    2 => 742,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'tags_make_synonym_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tags_make_synonym_access', $var, $rootNamespace );
}

// def $show_full_menu
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_edit_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_edit_access'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_delete_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_delete_access'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_merge_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_merge_access'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_synonym_access'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_make_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_make_synonym_access'] : null;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
if ( $var1 )
    $var = $var1;
else if ( $var2 )
    $var = $var2;
else if ( $var3 )
    $var = $var3;
else if ( $var4 )
    $var = $var4;
else if ( $var5 )
    $var = $var5;
else if ( $var6 )
    $var = $var6;
else
    $var = false;
unset( $var1, $var2, $var3, $var4, $var5, $var6 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'show_full_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'show_full_menu' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 158,
    2 => 742,
  ),
  2 => 'extension/eztags/design/admin2/templates/popupmenu/popup_tag_menu.tpl',
) );
    $tpl->setVariable( 'show_full_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'show_full_menu', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'show_full_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['show_full_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <script type="text/javascript">
        menuArray[\'TagMenu\'] = { \'depth\': 0, \'headerID\': \'tag-header\' };
        menuArray[\'TagMenu\'][\'elements\'] = {};

        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            menuArray[\'TagMenu\'][\'elements\'][\'add-child-tag\'] = { \'url\': "/tags/add/%tagID%" };
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_edit_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_edit_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            menuArray[\'TagEditSubmenu\'] = { \'depth\': 1 };
            menuArray[\'TagEditSubmenu\'][\'elements\'] = {};
            menuArray[\'TagEditSubmenu\'][\'elements\'][\'edit-tag-languages\'] = { \'variable\': \'%languages%\' };
            menuArray[\'TagEditSubmenu\'][\'elements\'][\'edit-tag-languages\'][\'content\'] = \'<a href="/tags/edit/%tagID%/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'TagEditSubmenu\\\' )">%name%<\\/a>\';
            menuArray[\'TagEditSubmenu\'][\'elements\'][\'edit-tag-languages-new\'] = { \'url\': "/tags/edit/%tagID%" };
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_delete_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_delete_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            menuArray[\'TagMenu\'][\'elements\'][\'delete-tag\'] = { \'url\': "/tags/delete/%tagID%" };
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_merge_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_merge_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            menuArray[\'TagMenu\'][\'elements\'][\'merge-tag\'] = { \'url\': "/tags/merge/%tagID%" };
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_synonym_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            menuArray[\'TagMenu\'][\'elements\'][\'add-synonym-tag\'] = { \'url\': "/tags/addsynonym/%tagID%" };
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_make_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_make_synonym_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            menuArray[\'TagMenu\'][\'elements\'][\'make-synonym-tag\'] = { \'url\': "/tags/makesynonym/%tagID%" };
        ';
}
unset( $if_cond );
// if ends

$text .= '    </script>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <script type="text/javascript">
        menuArray[\'TagMenuSimple\'] = { \'depth\': 0, \'headerID\': \'tag-simple-header\' };
        menuArray[\'TagMenuSimple\'][\'elements\'] = {};
        menuArray[\'TagMenuSimple\'][\'elements\'][\'add-child-tag-simple\'] = { \'url\': "/tags/add/%tagID%" };
    </script>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'show_full_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['show_full_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="popupmenu" id="TagMenu">
        <div class="popupmenuheader"><h3 id="tag-header">XXX</h3>
            <div class="break"></div>
        </div>
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a id="add-child-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Untergeordnetes Schlagwort hinzufügen</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_edit_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_edit_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a id="edit-tag" href="#" class="more" onmouseover="ezpopmenu_showSubLevel( event, \'TagEditSubmenu\', \'edit-tag\' ); return false;">Schlagwort bearbeiten</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_delete_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_delete_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a id="delete-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Schlagwort löschen</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_merge_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_merge_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a id="merge-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Schlagwort zusammenfügen</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '        <hr />
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_synonym_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a id="add-synonym-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">Synonym hinzufügen</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_make_synonym_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_make_synonym_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <a id="make-synonym-tag" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenu\' )">In Synonym konvertieren</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </div>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_edit_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_edit_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="popupmenu" id="TagEditSubmenu">
        <div id="edit-tag-languages"></div>
        <hr />
        <a id="edit-tag-languages-new" href="#" onmouseover="ezpopmenu_mouseOver( \'TagEditSubmenu\' )">Neue Übersetzung</a>
    </div>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tags_add_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tags_add_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="popupmenu" id="TagMenuSimple">
        <div class="popupmenuheader"><h3 id="tag-simple-header">XXX</h3>
            <div class="break"></div>
        </div>
        <a id="add-child-tag-simple" href="#" onmouseover="ezpopmenu_mouseOver( \'TagMenuSimple\' )">Untergeordnetes Schlagwort hinzufügen</a>
    </div>';
}
unset( $if_cond );
// if ends

// undef all
$tpl->unsetLocalVariables();

$setArray = $oldSetArray_9caf17cdc4dadb9b9a86a2ce5ad84c6b;
$tpl->Level--;
?>
