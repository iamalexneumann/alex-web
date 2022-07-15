<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var CMain $APPLICATION
 */
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">
	<head>
		<title><?php $APPLICATION->ShowTitle(); ?></title>
        <?php
        use Bitrix\Main\Page\Asset;
        $Asset = Asset::getInstance();
        $Asset->addJs(SITE_TEMPLATE_PATH . '/libs/jquery-3.6.0.min.js');
        $Asset->addCss(SITE_TEMPLATE_PATH . '/libs/bootstrap/css/bootstrap.min.css');
        $Asset->addJs(SITE_TEMPLATE_PATH . '/libs/bootstrap/js/bootstrap.bundle.min.js');
        //$Asset->addCss(SITE_TEMPLATE_PATH . '/libs/fontawesome-free-6.1.1-web/css/all.min.css');
        $Asset->addJs(SITE_TEMPLATE_PATH . '/libs/lazysizes.min.js');
        $Asset->addJs(SITE_TEMPLATE_PATH . '/main.js');

        $APPLICATION->ShowHead();
        ?>
	</head>
	<body>
		<?php $APPLICATION->ShowPanel(); ?>
	    <main>
            <div class="container">
                <header>
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "breadcrumb",
                        Array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => SITE_ID,
                        ),
                        false
                    ); ?>
                    <h1><?php $APPLICATION->ShowTitle('h1', false); ?></h1>
                </header>
						