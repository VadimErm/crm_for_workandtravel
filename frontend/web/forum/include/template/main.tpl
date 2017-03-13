<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="oldie ie6" <!-- forum_local -->> <![endif]-->
<!--[if IE 7 ]>    <html class="oldie ie7" <!-- forum_local -->> <![endif]-->
<!--[if IE 8 ]>    <html class="oldie ie8" <!-- forum_local -->> <![endif]-->
<!--[if gt IE 8]><!--> <html <!-- forum_local -->> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- forum_head -->
</head>
<body>
	<!-- forum_messages -->
	<div id="brd-wrap" class="brd">
	<div <!-- forum_page -->>
	<div id="brd-head" class="gen-content">
		<!-- forum_skip -->
		<!-- forum_title -->
		<!-- forum_desc -->
	</div>
	<div id="brd-navlinks" class="gen-content">
		<!-- forum_navlinks -->
		<!-- forum_admod -->
	</div>
	<div id="brd-visit" class="gen-content">
		<!-- forum_welcome -->
		<!-- forum_visit -->
	</div>
	<div id="brd-banner" class="gen-content">
		<!-- <div class="brd-banner__centering">
			<div class="brd-banner__headline">
			<h1>Kazakhstan Counсil <span>for Educational Travel</span></h1>
			</div>
		</div> -->
		<img src="/forum/img/banner01.png" alt="">
	</div>
	<div id="brd-nav__secondary">
		<ul>
			<li><a href="">Программы</a></li>
			<li><a href="">WORK AND TRAVEL USA</a></li>
			<li><a href="">Работа на круизных лайнерах</a></li>
			<li><a href="">ДРУЗЬЯ И ПОПУТЧИКИ</a></li>
			<li><a href="">ПУТЕВОДИТЕЛИ ПО СТРАНАМ </a></li>
			<li><a href="">Фото из поездок</a></li>
		</ul>
	</div>
	<!-- forum_announcement -->
	<div class="hr"><hr /></div>
	<div id="brd-main">
		<!-- forum_main_title -->
		<!-- forum_crumbs_top -->
		<!-- forum_main_menu -->
		<!-- forum_main_pagepost_top -->
		<!-- forum_main -->
		<!-- forum_main_pagepost_end -->
		<!-- forum_crumbs_end -->
	</div>
		<!-- forum_qpost -->
		<!-- forum_info -->
	<div class="hr"><hr /></div>
	<div id="brd-about">
		<!-- forum_about -->
	</div>
		<!-- forum_debug -->
	</div>
	</div>
	<!-- forum_javascript -->
	<script>
	    var main_menu = responsiveNav("#brd-navlinks", {
		label: "<!-- forum_board_title -->"
	    });
	    if(document.getElementsByClassName('admin-menu').length){
		var admin_menu = responsiveNav(".admin-menu", {
		    label: "<!-- forum_lang_menu_admin -->"
		});
	    }
	    if(document.getElementsByClassName('main-menu').length){
		var profile_menu = responsiveNav(".main-menu", {
		    label: "<!-- forum_lang_menu_profile -->"
		});
	    }
	</script>
</body>
</html>
