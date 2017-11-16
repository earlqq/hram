<!DOCTYPE html>
<html>
<head>
<?$APPLICATION->ShowHead()?>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/style.css"/>
	<script src="js/modernizr.js"></script>
  <!--[if lte IE 9]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <![endif]-->
  <!--[if lte IE 8]>
  <style>@import "css/ie8.css";</style>
  <![endif]-->
  <title><?$APPLICATION->ShowTitle()?></title>
<!-- SEO meta tags
___________________________________________________________________________-->
<!--
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
-->
</head>

<body>
<?$APPLICATION->ShowPanel();?>
<div id="pageWrapper" class="page__wrapper">

  <header class="wrapper header">
    <div class="container">
      <div class="row logo-holder">
		  <div class="col-9"><a href="/" class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/css/img/logo.png" width="530" height="213" alt="Приозерское подворье Спасо-Преображенского Валаамского Ставропигиального Монастиря"/></a></div>
        <div class="col-7"><div class="monastur"></div></div>
      </div>
    </div>

  </header>

  <section class="wrapper nav-holder">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <nav>
            <ul>
              <li class="active">
                  <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "topmenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "topmenu",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?></li>
            </ul>
          </nav>
        </div>
        <div class="col-4">
          <form class="search-form" action="#">
            <input type="submit"/>
            <input type="text" placeholder="Поиск..."/>
          </form>
        </div>
      </div>
    </div>
  </section>
			