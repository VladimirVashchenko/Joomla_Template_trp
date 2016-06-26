<?php defined("_JEXEC") or die(); ?>
<?php $doc = JFactory::getDocument();
$doc->addStylesheet(JUri::base(TRUE) . '/templates/' . $doc->template . '/css/styles.css');
//print_r($doc);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <jdoc:include type="head"/>
</head>

<body>
<div class="main-div">
    <div class="header">
        <a class="logo-link" href="<?php echo $this->baseurl; ?>/"><img class="logo" src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/logo_trp.svg"
                                                      onerror="this.src='<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/logo_trp.png'" alt=""/></a>
        <div class="right-menu">
            <jdoc:include type="modules" name="search"/>
            <div class="menu-div">
                <jdoc:include type="modules" name="header"/>
                <a class="fb-logo-link" href="#">
                    <div class="fb-logo-div">
                        <img class="fb-logo" src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/facebook-logo.svg"
                             onerror="this.src='<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/facebook-logo.png'" alt=""/>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <jdoc:include type="component" />

        <footer class="footer">
            <div class="footer-link">
                <div class="footer-link-wrap">
                    <a href="">
                        <h1 class="copyr">TAX©</h1>
                    </a>
                </div>
            </div>
            <div class="footer-link">
                <div class="footer-link-wrap">
                    <a href="">
                        <img class="footer-icon" src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/pointer.svg" onerror="this.src='<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/pointer.png'"
                             alt=""/>
                        <p class="phone">Asdasdasd</p>
                    </a>
                </div>
            </div>
            <div class="footer-link">
                <div class="footer-link-wrap">
                    <a href="">
                        <img class="footer-icon" src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/phone.svg" onerror="this.src='<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/phone.png'" alt=""/>
                        <p class="phone">Asdasdasd</p>
                    </a>
                </div>
            </div>
            <div class="footer-link">
                <div class="footer-link-wrap">
                    <a href="">
                        <img class="footer-icon" src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/letter.svg" onerror="this.src='<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/letter.png'" alt=""/>
                        <p class="phone">Asdasdasd</p>
                    </a>
                </div>
            </div>
            <div class="footer-link">
                <div class="footer-link-wrap">
                    <a href="">
                        <img class="footer-icon" src="<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/facebook-logo-round.svg"
                             onerror="this.src='<?php echo JUri::base(TRUE)."/templates/".$doc->template;?>/images/facebook-logo-round.png'" alt=""/>
                        <p class="phone">Asdasdasd</p>
                    </a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>