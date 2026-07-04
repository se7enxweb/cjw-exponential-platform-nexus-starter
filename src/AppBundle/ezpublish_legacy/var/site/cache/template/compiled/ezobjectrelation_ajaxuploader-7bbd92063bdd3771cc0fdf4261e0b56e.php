<?php
// URI:       extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezobjectrelation_ajaxuploader.tpl
// Filename:  extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezobjectrelation_ajaxuploader.tpl
// Timestamp: 1782241050 (Tue Jun 23 18:57:30 UTC 2026)
$oldSetArray_c9bff944c0c6f6d2fcb0fe05742c0ed0 = isset( $setArray ) ? $setArray : array();
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
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezmodule',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ezjscore',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="submit" value="Upload a file"
            name="RelationUploadNew';
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

$text .= '-';
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

$text .= '"
            class="btn btn-default simple-relation-upload-new hide"
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'enabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['enabled'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = "";
}
else
{
    
    $var = 'disabled="disabled"';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
            title="Upload a file to create a new object and add it to the relation" />

    ';
if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["55c6acfa367a435cca613a5ed84c8f3a"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["55c6acfa367a435cca613a5ed84c8f3a"] = array( array( 9,
              4,
              518 ),
       array( 9,
              12,
              526 ),
       "extension/ngadminui/design/ngadminui/templates/content/datatype/edit/ezobjectrelation_ajaxuploader.tpl" );
$text .= '    ';
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
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::yui3',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::yui3io',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezmodalwindow.js',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezajaxuploader.js',
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

$text .= '
    <div id="relation-modal-window" class="modal-window" style="display:none;">
        <h2><a href="#" class="window-close">Close</a><span></span></h2>
        <div class="window-content"></div>
    </div>
    <script type="text/javascript">
    
    (function () {
        YUI(YUI3_config).use(\'ezmodalwindow\', \'ezajaxuploader\', function (Y) {

            // move modal-window outside the form (add it to the body node)
            var modalwindow = Y.one(\'#relation-modal-window\');
            Y.one(document.body).append( modalwindow.cloneNode(true) );
            modalwindow.remove();

            var uploaderConf = {
                target: {},
                open: {
                    action: \'ezajaxuploader::uploadform::ezobjectrelation\'
                },
                upload: {
                    action: \'ezajaxuploader::upload::ezobjectrelation?ContentType=html\',
                    form: \'form.ajaxuploader-upload\'
                },
                location: {
                    action: \'ezajaxuploader::preview::ezobjectrelation\',
                    form: \'form.ajaxuploader-location\',
                    browse: \'div.ajaxuploader-browse\',
        
                    required: "';
unset( $var );
$var = 'Please choose a location' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
        
                },

                preview: {
                    form: \'form.ajaxuploader-preview\',

                    // this is the eZAjaxUploader instance
                    callback: function () {
                        var box = Y.one(\'#ezobjectrelation_browse_\' + this.conf.target.ObjectRelationsAttributeId),
                            table = box.one(\'table.list\');
                            tbody = box.one(\'table.list tbody\'),
                            tds = tbody.get(\'children\').slice(-1).item(0).get(\'children\');
                            result = this.lastMetaData;

                        table.removeClass(\'hide\');
                        tds.item(0).setContent(result.object_info.name);
                        tds.item(1).setContent(result.object_info.class_name);
                        tds.item(2).setContent(result.object_info.section_name);
                        tds.item(3).setContent(result.object_info.published);

                        box.one(\'input[name*=_data_object_relation_id_]\').set(\'value\', result.object_info.id);
                        box.one(\'.ezobject-relation-remove-button\').removeClass(\'button-disabled\').addClass(\'button\').set(\'disabled\', false);
                        box.all(\'.ezobject-relation-no-relation\').addClass(\'hide\');
                        box.one(\'.ezobject-relation-add-button\').addClass(\'button-disabled\').set(\'disabled\', true);
                        box.one(\'.simple-relation-upload-new\').addClass(\'button-disabled\').set(\'disabled\', true);

                        this.modalWindow.close();
                    }
                },
        
                validationErrorText: "';
unset( $var );
$var = 'Some required fields are empty.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                parseJSONErrorText: "';
unset( $var );
$var = 'Unable to parse the JSON response.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                title: "';
unset( $var );
$var = 'Upload a file and add the resulting object in the relation' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
        
            };

            var windowConf = {
                window: \'#relation-modal-window\',
                centered: false,
                xy: [\'centered\', 50],
                width: 650
            };

            Y.on(\'domready\', function() {
                var win = new Y.eZ.ModalWindow(windowConf, Y),
                    tokenNode = Y.one(\'#ezxform_token_js\');

                Y.all(\'.simple-relation-upload-new\').each(function () {
                    var data = this.get(\'name\').replace("RelationUploadNew", \'\').split("-"),
                        conf = Y.clone(uploaderConf, true),
                        uploader;

                    conf.target = {
                       ObjectRelationsAttributeId: data[0],
                       Version: data[1]
                    };
                    if ( tokenNode ) {
                        conf.token = tokenNode.get(\'title\');
                    }
                    uploader = new Y.eZ.AjaxUploader(win, conf, Y);
                    this.on(\'click\', function (e) {
                        uploader.open();
                        e.halt();
                    });
                    this.removeClass(\'hide\');
                });
            });
        });

    })();
    
    </script>
    ';
}
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_c9bff944c0c6f6d2fcb0fe05742c0ed0;
$tpl->Level--;
?>
