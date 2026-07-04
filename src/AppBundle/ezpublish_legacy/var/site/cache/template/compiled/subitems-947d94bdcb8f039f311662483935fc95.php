<?php
// URI:       extension/ngadminui/design/ngadminui/templates/subitems.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/subitems.tpl
// Timestamp: 1782241052 (Tue Jun 23 18:57:32 UTC 2026)
$oldSetArray_034cdf66a18ae65018267d046514f18a = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="panel">

    
    <div id="content-view-children">
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_container' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
$oldRestoreIncludeArray_42cf7a6ad7a6ff683f7aa81fbbc57b01 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/children-8dae737f5016fc389846ed05ce524d21.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/children.tpl' );
include( '' . 'var/site/cache/template/compiled/children-8dae737f5016fc389846ed05ce524d21.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/children.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_42cf7a6ad7a6ff683f7aa81fbbc57b01;

$text .= '    ';
}
else
{
$text .= '        ';
$oldRestoreIncludeArray_ef6880a9f95483b85675a1824eda7770 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/site/cache/template/compiled/no_children-e4ee143992d8591dee30c8c0c54f1761.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ngadminui/design/ngadminui/templates/no_children.tpl' );
include( '' . 'var/site/cache/template/compiled/no_children-e4ee143992d8591dee30c8c0c54f1761.php' );
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
$tpl->processURI( 'extension/ngadminui/design/ngadminui/templates/no_children.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_ef6880a9f95483b85675a1824eda7770;

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    </div>

    
    
    <script type="text/javascript">
        $(document).ready(function(){
            $(\'#ezasi-sort-field, #ezasi-sort-order\').each( function(){
                $( this ).attr( \'initial\', this.value );
            } ).change(function(){
                var t = $(this), o = $(this.id === \'ezasi-sort-field\' ? \'#ezasi-sort-order\' : \'#ezasi-sort-field\'), s = $(\'#ezasi-sort-set\');
                // signal in gui if user needs to save this or not
                if ( t.val() === t.attr(\'initial\') && o.val() === o.attr(\'initial\') )
                    s.removeClass(\'btn-primary\').addClass(\'btn-default\');
                else
                    s.removeClass(\'btn-default\').addClass(\'btn-primary\');
            });
        });
    </script>
    
</div>
<div class="panel">

    
    <form name="ordering" method="post" action="/ngadminui/content/action">
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
        <fieldset>

            ';
// def $sort_fields
if ( $tpl->hasVariable( 'sort_fields', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sort_fields' is already defined.", array (
  0 => 
  array (
    0 => 37,
    1 => 12,
    2 => 1298,
  ),
  1 => 
  array (
    0 => 46,
    1 => 49,
    2 => 2173,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/subitems.tpl',
) );
    $tpl->setVariable( 'sort_fields', array (
  5 => 'Depth',
  3 => 'Modified',
  9 => 'Name',
  1 => 'Path String',
  8 => 'Priority',
  2 => 'Published',
  4 => 'Section',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sort_fields', array (
  5 => 'Depth',
  3 => 'Modified',
  9 => 'Name',
  1 => 'Path String',
  8 => 'Priority',
  2 => 'Published',
  4 => 'Section',
), $rootNamespace );
}

// def $title
if ( $tpl->hasVariable( 'title', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'title' is already defined.", array (
  0 => 
  array (
    0 => 37,
    1 => 12,
    2 => 1298,
  ),
  1 => 
  array (
    0 => 46,
    1 => 49,
    2 => 2173,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/subitems.tpl',
) );
    $tpl->setVariable( 'title', 'You cannot set the sorting method for the current location because you do not have permission to edit the current item.', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'title', 'You cannot set the sorting method for the current location because you do not have permission to edit the current item.', $rootNamespace );
}

// def $disabled
if ( $tpl->hasVariable( 'disabled', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'disabled' is already defined.", array (
  0 => 
  array (
    0 => 37,
    1 => 12,
    2 => 1298,
  ),
  1 => 
  array (
    0 => 46,
    1 => 49,
    2 => 2173,
  ),
  2 => 'extension/ngadminui/design/ngadminui/templates/subitems.tpl',
) );
    $tpl->setVariable( 'disabled', ' disabled="disabled"', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'disabled', ' disabled="disabled"', $rootNamespace );
}

$text .= '
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'title', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['title'] = 'Use these controls to sort the sub items of the current location on frontend:';
}
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'disabled', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['disabled'] = '';
}
$text .= '                <input type="hidden" name="ContentObjectID" value="';
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
            ';
}
unset( $if_cond );
// if ends

$text .= '            <p>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
            <div class="form-inline">
                <div class="form-group">
                    <select id="ezasi-sort-field" name="SortingField" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' class="form-control input-sm">
                    ';
// foreach begins
$skipDelimiter = true;
$fe_array_002cd50c413c426d29c5811649081140_11 = [];
$fe_array_keys_002cd50c413c426d29c5811649081140_11 = [];
$fe_n_items_002cd50c413c426d29c5811649081140_11 = 0;
$fe_n_items_processed_002cd50c413c426d29c5811649081140_11  = 0;
$fe_i_002cd50c413c426d29c5811649081140_11 = 0;
$fe_key_002cd50c413c426d29c5811649081140_11 = 0;
$fe_val_002cd50c413c426d29c5811649081140_11 = 0;
$fe_offset_002cd50c413c426d29c5811649081140_11 = 0;
$fe_max_002cd50c413c426d29c5811649081140_11 = 0;
$fe_reverse_002cd50c413c426d29c5811649081140_11 = 0;
$fe_first_val_002cd50c413c426d29c5811649081140_11 = 0;
$fe_last_val_002cd50c413c426d29c5811649081140_11 = 0;
if ( !isset( $fe_variable_stack_002cd50c413c426d29c5811649081140_11 ) ) $fe_variable_stack_002cd50c413c426d29c5811649081140_11 = [];
$fe_variable_stack_002cd50c413c426d29c5811649081140_11[] = @compact( 'fe_array_002cd50c413c426d29c5811649081140_11', 'fe_array_keys_002cd50c413c426d29c5811649081140_11', 'fe_n_items_002cd50c413c426d29c5811649081140_11', 'fe_n_items_processed_002cd50c413c426d29c5811649081140_11', 'fe_i_002cd50c413c426d29c5811649081140_11', 'fe_key_002cd50c413c426d29c5811649081140_11', 'fe_val_002cd50c413c426d29c5811649081140_11', 'fe_offset_002cd50c413c426d29c5811649081140_11', 'fe_max_002cd50c413c426d29c5811649081140_11', 'fe_reverse_002cd50c413c426d29c5811649081140_11', 'fe_first_val_002cd50c413c426d29c5811649081140_11', 'fe_last_val_002cd50c413c426d29c5811649081140_11' );
unset( $fe_array_002cd50c413c426d29c5811649081140_11 );
unset( $fe_array_002cd50c413c426d29c5811649081140_11 );
$fe_array_002cd50c413c426d29c5811649081140_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_fields', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_fields'] : null;
if (! isset( $fe_array_002cd50c413c426d29c5811649081140_11 ) ) $fe_array_002cd50c413c426d29c5811649081140_11 = NULL;
while ( is_object( $fe_array_002cd50c413c426d29c5811649081140_11 ) and method_exists( $fe_array_002cd50c413c426d29c5811649081140_11, 'templateValue' ) )
    $fe_array_002cd50c413c426d29c5811649081140_11 = $fe_array_002cd50c413c426d29c5811649081140_11->templateValue();

$fe_array_keys_002cd50c413c426d29c5811649081140_11 = is_array( $fe_array_002cd50c413c426d29c5811649081140_11 ) ? array_keys( $fe_array_002cd50c413c426d29c5811649081140_11 ) : [];
$fe_n_items_002cd50c413c426d29c5811649081140_11 = count( $fe_array_keys_002cd50c413c426d29c5811649081140_11 );
$fe_n_items_processed_002cd50c413c426d29c5811649081140_11 = 0;
$fe_offset_002cd50c413c426d29c5811649081140_11 = 0;
$fe_max_002cd50c413c426d29c5811649081140_11 = $fe_n_items_002cd50c413c426d29c5811649081140_11 - $fe_offset_002cd50c413c426d29c5811649081140_11;
$fe_reverse_002cd50c413c426d29c5811649081140_11 = false;
if ( $fe_offset_002cd50c413c426d29c5811649081140_11 < 0 || $fe_offset_002cd50c413c426d29c5811649081140_11 >= $fe_n_items_002cd50c413c426d29c5811649081140_11 )
{
    $fe_offset_002cd50c413c426d29c5811649081140_11 = ( $fe_offset_002cd50c413c426d29c5811649081140_11 < 0 ) ? 0 : $fe_n_items_002cd50c413c426d29c5811649081140_11;
    if ( $fe_n_items_002cd50c413c426d29c5811649081140_11 || $fe_offset_002cd50c413c426d29c5811649081140_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_002cd50c413c426d29c5811649081140_11'. Array count: $fe_n_items_002cd50c413c426d29c5811649081140_11");   
}
}
if ( $fe_max_002cd50c413c426d29c5811649081140_11 < 0 || $fe_offset_002cd50c413c426d29c5811649081140_11 + $fe_max_002cd50c413c426d29c5811649081140_11 > $fe_n_items_002cd50c413c426d29c5811649081140_11 )
{
    if ( $fe_max_002cd50c413c426d29c5811649081140_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_002cd50c413c426d29c5811649081140_11");
    $fe_max_002cd50c413c426d29c5811649081140_11 = $fe_n_items_002cd50c413c426d29c5811649081140_11 - $fe_offset_002cd50c413c426d29c5811649081140_11;
}
if ( $fe_reverse_002cd50c413c426d29c5811649081140_11 )
{
    $fe_first_val_002cd50c413c426d29c5811649081140_11 = $fe_n_items_002cd50c413c426d29c5811649081140_11 - 1 - $fe_offset_002cd50c413c426d29c5811649081140_11;
    $fe_last_val_002cd50c413c426d29c5811649081140_11  = 0;
}
else
{
    $fe_first_val_002cd50c413c426d29c5811649081140_11 = $fe_offset_002cd50c413c426d29c5811649081140_11;
    $fe_last_val_002cd50c413c426d29c5811649081140_11  = $fe_n_items_002cd50c413c426d29c5811649081140_11 - 1;
}
// foreach
for ( $fe_i_002cd50c413c426d29c5811649081140_11 = $fe_first_val_002cd50c413c426d29c5811649081140_11; $fe_n_items_processed_002cd50c413c426d29c5811649081140_11 < $fe_max_002cd50c413c426d29c5811649081140_11 && ( $fe_reverse_002cd50c413c426d29c5811649081140_11 ? $fe_i_002cd50c413c426d29c5811649081140_11 >= $fe_last_val_002cd50c413c426d29c5811649081140_11 : $fe_i_002cd50c413c426d29c5811649081140_11 <= $fe_last_val_002cd50c413c426d29c5811649081140_11 ); $fe_reverse_002cd50c413c426d29c5811649081140_11 ? $fe_i_002cd50c413c426d29c5811649081140_11-- : $fe_i_002cd50c413c426d29c5811649081140_11++ )
{
$fe_key_002cd50c413c426d29c5811649081140_11 = $fe_array_keys_002cd50c413c426d29c5811649081140_11[$fe_i_002cd50c413c426d29c5811649081140_11];
$fe_val_002cd50c413c426d29c5811649081140_11 = $fe_array_002cd50c413c426d29c5811649081140_11[$fe_key_002cd50c413c426d29c5811649081140_11];
$vars[$rootNamespace]['field'] = $fe_val_002cd50c413c426d29c5811649081140_11;
$vars[$rootNamespace]['key'] = $fe_key_002cd50c413c426d29c5811649081140_11;
$text .= '                        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'sort_field' );
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
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['field'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
                    ';
$fe_n_items_processed_002cd50c413c426d29c5811649081140_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_002cd50c413c426d29c5811649081140_11 ) ) extract( array_pop( $fe_variable_stack_002cd50c413c426d29c5811649081140_11 ) );

else
{

unset( $fe_array_002cd50c413c426d29c5811649081140_11 );

unset( $fe_array_keys_002cd50c413c426d29c5811649081140_11 );

unset( $fe_n_items_002cd50c413c426d29c5811649081140_11 );

unset( $fe_n_items_processed_002cd50c413c426d29c5811649081140_11 );

unset( $fe_i_002cd50c413c426d29c5811649081140_11 );

unset( $fe_key_002cd50c413c426d29c5811649081140_11 );

unset( $fe_val_002cd50c413c426d29c5811649081140_11 );

unset( $fe_offset_002cd50c413c426d29c5811649081140_11 );

unset( $fe_max_002cd50c413c426d29c5811649081140_11 );

unset( $fe_reverse_002cd50c413c426d29c5811649081140_11 );

unset( $fe_first_val_002cd50c413c426d29c5811649081140_11 );

unset( $fe_last_val_002cd50c413c426d29c5811649081140_11 );

unset( $fe_variable_stack_002cd50c413c426d29c5811649081140_11 );

}

// foreach ends
$text .= '                    </select>
                </div>
                <div class="form-group">
                    <select id="ezasi-sort-order" name="SortingOrder" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' class="form-control input-sm">
                        <option value="0"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
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
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>Descending</option>
                        <option value="1"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>Ascending</option>
                    </select>
                </div>
                <div class="form-group">
                    <input  id="ezasi-sort-set" class="btn btn-default btn-sm ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'disabled';
}
unset( $if_cond );
// if ends

$text .= '" type="submit" name="SetSorting" value="Set" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' />
                </div>
            ';
// undef all
$tpl->unsetLocalVariables();
$text .= '        </fieldset>
    </form>
</div>
';

$setArray = $oldSetArray_034cdf66a18ae65018267d046514f18a;
$tpl->Level--;
?>
