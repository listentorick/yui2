<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>YUI: YAHOO.widget.Editor</title>
    <link rel="stylesheet" type="text/css" href="../../build/reset-fonts-grids/reset-fonts-grids.css"> 
    <link rel="stylesheet" href="http://blog.davglass.com/wp-content/themes/davglass/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../build/logger/assets/logger.css"> 
    <link rel="stylesheet" type="text/css" href="../../build/menu/assets/skins/sam/menu.css"> 
    <link rel="stylesheet" type="text/css" href="../../build/button/assets/skins/sam/button.css"> 
    <link rel="stylesheet" type="text/css" href="../../build/resize/assets/skins/sam/resize.css"> 
    <link rel="stylesheet" type="text/css" href="../../build/editor/assets/skins/sam/editor.css"> 
    
    <style>
        #form1 {
            margin: 2em;
        }
    </style>
</head>
<body>
<div id="davdoc" class="yui-t7">
    <div id="hd"><h1 id="header"><a>YAHOO.widget.Editor</a></h1></div>
    <div id="bd">
        <form method="post" action="index-full.php" id="form1" class="yui-skin-sam">
        <textarea id="editor" name="editor" rows="20" cols="75">
        Blah
        </textarea>
        <h2>Foo!!</h2>
        <textarea id="editor2" name="editor2" rows="20" cols="75">
        Blah
        </textarea>
        </form>
    </div>
    <div id="ft">&nbsp;</div>
</div>
<script type="text/javascript" src="../../build/yahoo/yahoo.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/dom/dom.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/event/event.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/dragdrop/dragdrop.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/animation/animation.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/element/element.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/resize/resize-beta.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/logger/logger.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/container/container_core.js?bust=<?php echo(mktime()); ?>"></script> 

<script type="text/javascript" src="../../build/menu/menu.js?bust=<?php echo(mktime()); ?>"></script> 
<script type="text/javascript" src="../../build/button/button.js?bust=<?php echo(mktime()); ?>"></script>
<script src="js/toolbar-button.js?bust=<?php echo(mktime()); ?>"></script>
<script src="js/toolbar.js?bust=<?php echo(mktime()); ?>"></script>
<script src="js/simple-editor.js?bust=<?php echo(mktime()); ?>"></script>
<script src="js/editor.js?bust=<?php echo(mktime()); ?>"></script>
<script>
YAHOO.util.Event.on(window, 'load', function() {
    var logger = new YAHOO.widget.LogReader(null, { logReaderEnabled: true, height: '500px' });
});
</script>
<script>

var myConfig = {
    height: '300px',
    width: '785px',
    animate: true,
    dompath: true,
    handleSubmit: true,
    ptags: true,
    drag: true,
    resize: true,
    //extracss: 'body { font-size: 11px; }',
    //autoHeight: true,
    focusAtStart: true//,
    //extracss: 'body { background-color: blue; }'
};

myEditor = new YAHOO.widget.Editor('editor', myConfig);
myEditor.render();

myEditor2 = new YAHOO.widget.Editor('editor2', myConfig);
myEditor2.render();


</script>
</body>
</html>
