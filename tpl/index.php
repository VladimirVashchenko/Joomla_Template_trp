<?php defined("_JEXEC") or die();
$doc = JFactory::getDocument();
$doc->addStylesheet(JUri::base(TRUE) . "/templates/" . $doc->template . "css/styles.css");
/*print_r($doc);*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <jdoc::include type="head"/>
</head>

<body>
<div class="body">
    <div class="header">
        <a href="<?php echo JUri::base(TRUE) ?>"><img class="logo" width="342"  src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/logo_trp.svg"
                                                      onerror="this.src='<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/logo_trp.png'" alt=""/></a>

        <ul class="menu">
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
        </ul>
        <hr>
    </div>
</div>
</body>
</html>