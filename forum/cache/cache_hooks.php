<?php

define('FORUM_HOOKS_LOADED', 1);

$forum_hooks = array (
  'ps_handle_img_tag_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_image\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_image\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$is_signature && $forum_user[\'show_img\'] == \'0\') {
				$img_tag = \'<a href="\'.$url.\'" class="fancy_zoom">&lt;\'.$lang_common[\'Image link\'].\'&gt;</a>\';
			}

			if (!$is_signature && $forum_user[\'show_img\'] != \'0\') {

				// PIC.LG.UA
				if (FALSE !== strpos($url, \'pic.lg.ua\')) {
					$preview_url = preg_replace(\'!^(http://pic.lg.ua/x)/(\\d+)/(.*)/(sm|md)(_.+)!is\', \'${1}/${2}/${3}/pv${5}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'imageshack.us\')) {
					// IMAGESHACK
					$preview_url = preg_replace(\'!^(http://img\\d+\\.imageshack\\.us)/(img\\d+)/(\\d+)/(.+)\\.th\\.(.+)!is\', \'${1}/${2}/${3}/${4}.${5}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'radikal.ru\')) {
					// RADIKAL
					$preview_url = preg_replace(\'!^(http://.+\\.radikal.ru)/(.*)/(.*)(t|x)\\.(jpg|jpeg|png|gif|bmp|tif|tiff)!is\', \'${1}/${2}/${3}.${5}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'photobucket.com\')) {
					// PHOTOBUCKET
					$preview_url = preg_replace(\'!^(http://i\\d+\\.photobucket\\.com/albums)/(x\\d+)/(.+)/th_(.+)!is\', \'${1}/${2}/${3}/${4}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'piccy.info\')) {
					// PICCY.INFO
					$preview_url = preg_replace(\'!^(http://.*piccy.info/.*/\\d+/\\d+/\\d+/)(.*)_(240|500|800)(\\..*)!is\', \'${1}${2}${4}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'imagepost.ru\')) {
					// IMAGEPOST.RU
					$preview_url = preg_replace(\'!^(http://)(imagepost\\.ru)/(thumbs)/(\\d+)/(.*)!is\', \'${1}${2}/images/${4}/${5}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'savepic.\')) {
					// SAVEPIC
					$preview_url = preg_replace(\'!^(http://savepic\\.)(org|net)/(\\d+)m(\\..+)!is\', \'${1}${2}/${3}${4}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'imageshost.ru\')) {
					// IMAGESHOST
					$preview_url = preg_replace(\'!^(http://img\\d+\\.imageshost\\.ru/img/\\d+/\\d+/\\d+/image_)(.*)_small\\.(jpg|jpeg|png|gif|bmp|tif|tiff)!is\', \'${1}${2}.${3}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				} else if (FALSE !== strpos($url, \'ipicture.ru\')) {
					// IPICTURE.RU
					$preview_url = preg_replace(\'!^(http://s\\d+\\.ipicture\\.ru/uploads/\\d+/)(thumbs)/(.*)\\.(jpg|jpeg|png|gif|bmp|tif|tiff)!is\', \'${1}${3}.${4}\', $url);
					$img_tag = \'<span class="postimg fancyimagethumbs"><img data-fancy="false" src="\'.$url.\'" alt="\'.forum_htmlencode($alt).\'" rel="\'.forum_htmlencode($preview_url).\'"/></span>\';
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'hd_visit_elements' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;
				if (!isset($lang_fancy_alerts)) {
					if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
						require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					} else {
						require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
					}
				}

				// TOPICS ALERTS
				if (!$forum_user[\'is_guest\']) {
					$fancy_topics_alerts_num = $fancy_alerts->get_num_topics_alerts_for_user($forum_user[\'id\'], $forum_user[\'group_id\']);

					if ($fancy_topics_alerts_num > 0) {
						$visit_links[\'fancy_alerts_topics\'] = \'<span id="fancy_alerts_visit_topics"><a title="\'.$lang_fancy_alerts[\'Alerts Topics Title\'].\'" id="fancy_alerts_topics_link" href="\'.forum_link($forum_url[\'fancy_alerts_topics_goto_alerts\'], $forum_user[\'id\']).\'">\'.$lang_fancy_alerts[\'Alerts Topics\'].\'<span id="fancy_alerts_topic_n">\'.$fancy_topics_alerts_num.\'</span></a></span>\';
					} else {
						$visit_links[\'fancy_alerts_topics\'] = \'<span id="fancy_alerts_visit_topics" style="display: none;"><a title="\'.$lang_fancy_alerts[\'Alerts Topics Title\'].\'" id="fancy_alerts_topics_link" href="\'.forum_link($forum_url[\'fancy_alerts_topics_goto_alerts\'], $forum_user[\'id\']).\'">\'.$lang_fancy_alerts[\'Alerts Topics\'].\'<span id="fancy_alerts_topic_n">0</span></a></span>\';
					}

					// QUOTES ALERTS
					$fancy_quotes_alerts_num = $fancy_alerts->get_num_quotes_alerts_for_user($forum_user[\'id\'], $forum_user[\'group_id\']);

					if ($fancy_quotes_alerts_num > 0) {
						$visit_links[\'fancy_alerts_posts\'] = \'<span id="fancy_alerts_visit_posts"><a title="\'.$lang_fancy_alerts[\'Alerts Quotes Title\'].\'" id="fancy_alerts_posts_link" href="\'.forum_link($forum_url[\'fancy_alerts_quotes_goto_alerts\'], $forum_user[\'id\']).\'">\'.$lang_fancy_alerts[\'Alerts Quotes\'].\'<span id="fancy_alerts_quotes_n">\'.$fancy_quotes_alerts_num.\'</span></a></span>\';
					} else {
						$visit_links[\'fancy_alerts_posts\'] = \'<span id="fancy_alerts_visit_posts" style="display: none;"><a title="\'.$lang_fancy_alerts[\'Alerts Quotes Title\'].\'" id="fancy_alerts_posts_link" href="\'.forum_link($forum_url[\'fancy_alerts_quotes_goto_alerts\'], $forum_user[\'id\']).\'">\'.$lang_fancy_alerts[\'Alerts Quotes\'].\'<span id="fancy_alerts_quotes_n">0</span></a></span>\';
					}
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_login_loginza = new Fancy_login_loginza;
			if ($fancy_login_loginza->setuped() && $forum_user[\'is_guest\'] && $forum_config[\'o_fancy_login_loginza_button_on_index\'] == \'1\') {
				$visit_elements[\'<!-- forum_welcome -->\'] = \'<p id="welcome"><span>\'.$lang_common[\'Not logged in\'].\'</span> <span>\'.$lang_common[\'Login nag\'].\'</span>
					<a href="\'.$fancy_login_loginza->get_loginza_url().\'" class="loginza">
    					<img style="margin-bottom: -.4em; margin-left: .5em;" src="\'.$ext_info[\'url\'].\'/css/Oxygen/img/sign_in_button_gray.gif" alt=""/>
					</a></p>\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// \'New messages (N)\' link
			if (!$forum_user[\'is_guest\'] && $forum_config[\'o_pun_pm_show_new_count\'])
			{
				global $lang_pun_pm;

				if (!isset($lang_pun_pm))
				{
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}

				// TODO: Do not include all functions, divide them into 2 files
				if(!defined(\'PUN_PM_FUNCTIONS_LOADED\'))
					require $ext_info[\'path\'].\'/functions.php\';

				($hook = get_hook(\'pun_pm_hd_visit_elements_pre_change\')) ? eval($hook) : null;

				//$visit_elements[\'<!-- forum_visit -->\'] = preg_replace(\'#(<p id="visit-links" class="options">.*?)(</p>)#\', \'$1 <span><a href="\'.forum_link($forum_url[\'pun_pm_inbox\']).\'">\'.pun_pm_unread_messages().\'</a></span>$2\', $visit_elements[\'<!-- forum_visit -->\']);
				if ($forum_user[\'g_read_board\'] == \'1\' && $forum_user[\'g_search\'] == \'1\')
				{
					$visit_links[\'pun_pm\'] = \'<span id="visit-pun_pm"><a href="\'.forum_link($forum_url[\'pun_pm_inbox\']).\'">\'.pun_pm_unread_messages().\'</a></span>\';
				}

				($hook = get_hook(\'pun_pm_hd_visit_elements_after_change\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ft_js_include' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

switch ($forum_config[\'o_pun_jquery_include_method\'])
			{
				case PUN_JQUERY_INCLUDE_METHOD_GOOGLE_CDN:
					$ext_pun_jquery_url = \'//ajax.googleapis.com/ajax/libs/jquery/\'.PUN_JQUERY_VERSION.\'/jquery.min.js\';
					break;

				case PUN_JQUERY_INCLUDE_METHOD_MICROSOFT_CDN:
					$ext_pun_jquery_url = \'//ajax.aspnetcdn.com/ajax/jQuery/jquery-\'.PUN_JQUERY_VERSION.\'.min.js\';
					break;

				case PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN:
					$ext_pun_jquery_url = \'//code.jquery.com/jquery-\'.PUN_JQUERY_VERSION.\'.min.js\';
					break;

				case PUN_JQUERY_INCLUDE_METHOD_LOCAL:
				default:
					$ext_pun_jquery_url = $ext_info[\'url\'].\'/js/jquery-\'.PUN_JQUERY_VERSION.\'.min.js\';
					break;
			}

			$forum_loader->add_js($ext_pun_jquery_url, array(\'type\' => \'url\', \'async\' => false, \'weight\' => 75));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_loader->add_js($ext_info[\'url\'].\'/js/fancy_jquery_addons.min.js\', array(\'type\' => \'url\', \'async\' => false, \'weight\' => 77));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'hd_head' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (FORUM_PAGE == \'register\' || FORUM_PAGE == \'login\') {
				$fancy_login_loginza = new Fancy_login_loginza;
				if ($fancy_login_loginza->setuped()) {
					$fancy_login_loginza_js = \'
						PUNBB.common.addDOMReadyEvent(function () {
							var newdiv = document.createElement("div"),
								src_div = document.getElementById("fancy_login_loginza_wrap"),
								insert_div = document.getElementById("req-msg");

							newdiv.innerHTML = src_div.innerHTML;
							insert_div.parentNode.insertBefore(newdiv, insert_div.nextSibling);

							src_div.parentNode.removeChild(src_div);
						});\';

					$forum_loader->add_js(\'http://loginza.ru/js/widget.js\', array(\'type\' => \'url\', \'group\' => FORUM_JS_GROUP_COUNTER));
					$forum_loader->add_js($fancy_login_loginza_js, array(\'type\' => \'inline\', \'group\' => FORUM_JS_GROUP_COUNTER));
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_jquery_addons.min.css\')) {
				$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_jquery_addons.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			} else {
				$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/fancy_jquery_addons.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_image\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_image\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (defined(\'FORUM_PAGE\')) {
				if (in_array(FORUM_PAGE, array(\'news\', \'postdelete\', \'modtopic\', \'post\', \'viewtopic\', \'searchposts\', \'pun_pm-inbox\', \'pun_pm-outbox\'))) {
					// LOAD LANG
					if (!isset($lang_fancy_image)) {
						if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
							require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
						} else {
							require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
						}
					}

					$forum_loader->add_css(\'a.fancy_zoom:hover { text-decoration: none !important; }\', array(\'type\' => \'inline\'));

					$fancy_image_js_env = \'
						PUNBB.env.fancy_image = {
							lang_title: "\'.forum_htmlencode($lang_fancy_image[\'Original\']).\'",
						};\';


					$forum_loader->add_js($fancy_image_js_env, array(\'type\' => \'inline\'));

					//$forum_loader->add_js($ext_info[\'url\'].\'/js/fancy_image.min.js\', array(\'type\' => \'url\', \'async\' => true));

					// For speed use inline JS
					$forum_loader->add_js(\'PUNBB.fancy_image=(function(){function c(){$(".fancyimagethumbs > img").each(function(){if($(this).data("fancy")===true){return;}$(this).data("fancy",true);var f=$(this),d=f.attr("rel"),e=f.parents("a").eq(0),g=f.parents(".post").find("h4").attr("id");if(!e){return;}if(d){e.attr("href",d);if(g){e.attr("rel",g);}e.addClass("fancy_zoom");f.removeAttr("rel");}e.fancybox({"zoomSpeedIn":100,"zoomSpeedOut":100,"padding":0,"cyclic":true,"overlayShow":false,"showCloseButton":true,"changeSpeed":100,"changeFade":100,"hideOnContentClick":true,"transitionIn":"none","transitionOut":"none","centerOnScroll":false,"titleFormat":a,"showNavArrows":true,"titleShow":true,"enableEscapeButton":true,"titlePosition":"over","onStart":function(j,h,i){if(b(j[h].href)===null){i.titleShow=false;}},"onComplete":function(l,h,i){var k=b(l[h].href),j=0;if(k!==null){$("#fancy_title_link").attr("href",k);}if($("#fancybox-img").length>0){j=$("#fancybox-img").height()*$("#fancybox-img").width();if(j<300000){$("#fancybox-title").hide();}}}});});}function a(g,f,d,e){return"<div id=\\"fancybox-title-over\\"><a id=\\"fancy_title_link\\" href=\\"\\">"+PUNBB.env.fancy_image.lang_title+"</a></div>";}function b(d){var e=null;if(d.indexOf("pic.lg.ua")>0){e=d.replace("pv_","");}else{if(d.indexOf("iteam.net.ua/uploads/")>0){e=d.replace("N_","O_");}else{if(d.indexOf("imageshack.us")>0){e=d.replace(".th.",".");}else{if(d.indexOf("radikal.ru")>0){e=null;}else{if(d.indexOf("piccy.info")>0){e=null;}else{if(d.indexOf("imagepost.ru")>0){e=null;}else{if(d.indexOf("ipicture.ru")>0){e=null;}else{if(d.indexOf("imageshost.ru")>0){e=null;}}}}}}}}return e;}return{init:function(){$(document).bind("run.fancy_image",c).trigger("run.fancy_image");}};}());$(document).ready(PUNBB.fancy_image.init);\', array(\'type\' => \'inline\'));
				}
		    }

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_avatars_on_index\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_avatars_on_index\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_avatars_on_index\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (FORUM_ROOT != \'../\') {
    $forum_config[\'o_show_dot\'] = 0;
    if (file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'.css\')) {
        $forum_loader->add_css( $ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'.css\', array(\'type\' => \'url\'));
    }
    else {
        $forum_loader->add_css( $ext_info[\'url\'].\'/css/Oxygen.css\', array(\'type\' => \'url\'));
    }
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    4 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (FORUM_PAGE == \'viewtopic\')
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\'))
		require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\';
	else
		require $ext_info[\'path\'].\'/lang/English.php\';

	$ape_js_env = \'
    	PUNBB.env.ape_vars = {
			"csrf_token" : "\'.generate_form_token($ext_info[\'url\'].\'/edit.php\').\'", 
			"Loading" : "\'.$lang_ape[\'Loading\'].\'",
			"Quick edit" : "\'.$lang_ape[\'Quick Edit\'].\'", 
			"Normal edit" : "\'.$lang_ape[\'Normal Edit\'].\'", 
			"url_edit" : "\'.$forum_url[\'edit\'].\'", 
    };\';


	$forum_loader->add_js($ape_js_env, array(\'type\' => \'inline\'));
	$forum_loader->add_js($ext_info[\'url\'].\'/ajax_post_edit.js\', array(\'type\' => \'url\', \'group\' => FORUM_JS_GROUP_COUNTER));

	$forum_loader->add_css($ext_info[\'url\'].\'/style.css\', array(\'type\' => \'url\'));
	
	if (file_exists($ext_info[\'path\'].\'/style/\'.$forum_user[\'style\'].\'/style.css\'))
		$forum_loader->add_css($ext_info[\'url\'].\'/style/\'.$forum_user[\'style\'].\'/style.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
	else
		$forum_loader->add_css($ext_info[\'url\'].\'/style/Oxygen/style.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    5 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_spellcheck\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_spellcheck\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_spellcheck\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (defined(\'FORUM_PAGE\') && (in_array(FORUM_PAGE, array(\'viewtopic\',\'post\',\'postedit\',\'profile-signature\')))) {
				if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_spellcheck.min.css\')) {
					$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_spellcheck.min.css\');
				} else {
					$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/fancy_spellcheck.min.css\');
				}


				$forum_loader->add_css(\'#fancy_spellcheck_block { display: none; }\', array(\'type\' => \'inline\', \'noscript\' => true));

				// LOAD JS
				$fancy_spellcheck_js_code = \'
					PUNBB.env.fancy_spellcheck = {
						speller_url: "\'.$ext_info[\'url\'].\'/speller/\'.$forum_user[\'style\'].\'/",
						user_lang: "\'.$forum_user[\'language\'].\'",
					};\';

				$forum_loader->add_js($fancy_spellcheck_js_code, array(\'type\' => \'inline\'));
				$forum_loader->add_js($ext_info[\'url\'].\'/js/fancy_spellcheck.min.js\', array(\'type\' => \'url\', \'async\' => true));
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    6 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'style\'] !== \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_stop_spam.css\')) {
				$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_stop_spam.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			} else {
				$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/fancy_stop_spam.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    7 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Incuding styles for pun_pm
			if (defined(\'FORUM_PAGE\') && \'pun_pm\' == substr(FORUM_PAGE, 0, 6))
			{
				if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/pun_pm.min.css\'))
					$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/pun_pm.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
				else
					$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/pun_pm.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    8 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_scroll_to_top\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_scroll_to_top\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_scroll_to_top\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_loader->add_js($ext_info[\'url\'].\'/js/fancy_scroll_to_top.min.js\',
				array(
					\'type\' 		=> \'url\',
					\'async\' 	=> TRUE,
					\'weight\' 	=> 140
				)
			);

			if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_scroll_to_top.min.css\')) {
				$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_scroll_to_top.min.css\',
					array(\'type\' => \'url\', \'media\' => \'screen\'))
				;
			} else {
				// Optimze: inline for Oxygen
				$forum_loader->add_css(\'#topcontrol{font-size:.8em;padding:.4em .5em .5em;border-radius:.3em;color:#cb4b16;font-weight:bold;cursor:pointer;z-index:10;background:#e6eaf6;background:-moz-linear-gradient(center top,#f5f7fd,#e6eaf6) repeat scroll 0 0 transparent;background:-o-linear-gradient(top,#f5f7fd,#e6eaf6);background:-webkit-gradient(linear,0 0,0 100%,from(#f5f7fd),to(#e6eaf6));background:-webkit-linear-gradient(top,#f5f7fd,#e6eaf6);background:-ms-linear-gradient(top,#f5f7fd,#e6eaf6);background:linear-gradient(top,#f5f7fd,#e6eaf6);text-shadow:0 1px 1px #bbb;-moz-box-shadow:0 1px 2px rgba(0,0,0,.2);-webkit-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}#topcontrol:hover{color:#db4c18;-moz-transform:scaley(1.15);-webkit-transform:scaley(1.15)}\',
					array(\'type\' => \'inline\'))
				;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    9 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_alerts.min.css\')) {
					$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/fancy_alerts.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
				} else {
					$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/fancy_alerts.min.css\', array(\'type\' => \'url\', \'media\' => \'screen\'));
				}

				if (intval($forum_config[\'o_fancy_alerts_autoupdate_interval\'], 10) > 0) {
					$fancy_alerts_js_env = \'
						PUNBB.env.fancy_alerts = {
							autoupdate_url: "\'.forum_link($forum_url[\'fancy_alerts_autoupdate_status\']).\'",
							autoupdate_time: "\'.intval($forum_config[\'o_fancy_alerts_autoupdate_interval\'], 10).\'"
						};\';

					$forum_loader->add_js($fancy_alerts_js_env, array(\'type\' => \'inline\'));
					$forum_loader->add_js($ext_info[\'url\'].\'/js/fancy_alerts.min.js\', array(\'type\' => \'url\', \'async\' => true));
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    10 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_bbcode\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_bbcode\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_bbcode\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'pun_bbcode_enabled\'] && ((FORUM_PAGE == \'viewtopic\' && $forum_config[\'o_quickpost\']) || in_array(FORUM_PAGE, array(\'post\', \'postedit\', \'pun_pm-write\', \'pun_pm-inbox\', \'pun_pm-compose\'))))
			{
				if (!defined(\'FORUM_PARSER_LOADED\'))
					require FORUM_ROOT.\'include/parser.php\';

				// Load CSS
				if ($forum_user[\'style\'] != \'Oxygen\' && file_exists($ext_info[\'path\'].\'/css/\'.$forum_user[\'style\'].\'/pun_bbcode.min.css\'))
					$forum_loader->add_css($ext_info[\'url\'].\'/css/\'.$forum_user[\'style\'].\'/pun_bbcode.min.css\', array(\'type\' => \'url\', \'weight\' => \'90\', \'media\' => \'screen\'));
				else
					$forum_loader->add_css($ext_info[\'url\'].\'/css/Oxygen/pun_bbcode.min.css\', array(\'type\' => \'url\', \'weight\' => \'90\', \'media\' => \'screen\'));

				// CSS for disabled JS hide bar
				$forum_loader->add_css(\'#pun_bbcode_bar { display: none; }\', array(\'type\' => \'inline\', \'noscript\' => true));

				// Load JS
				$forum_loader->add_js(\'PUNBB.pun_bbcode=(function(){return{init:function(){return true;},insert_text:function(d,h){var g,f,e=(document.all)?document.all.req_message:((document.getElementById("afocus")!==null)?(document.getElementById("afocus").req_message):(document.getElementsByName("req_message")[0]));if(!e){return false;}if(document.selection&&document.selection.createRange){e.focus();g=document.selection.createRange();g.text=d+g.text+h;e.focus();}else{if(e.selectionStart||e.selectionStart===0){var c=e.selectionStart,b=e.selectionEnd,a=e.scrollTop;e.value=e.value.substring(0,c)+d+e.value.substring(c,b)+h+e.value.substring(b,e.value.length);if(d.charAt(d.length-2)==="="){e.selectionStart=(c+d.length-1);}else{if(c===b){e.selectionStart=b+d.length;}else{e.selectionStart=b+d.length+h.length;}}e.selectionEnd=e.selectionStart;e.scrollTop=a;e.focus();}else{e.value+=d+h;e.focus();}}}};}());PUNBB.common.addDOMReadyEvent(PUNBB.pun_bbcode.init);\', array(\'type\' => \'inline\'));

				($hook = get_hook(\'pun_bbcode_styles_loaded\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'es_essentials' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include_once $ext_info[\'path\'].\'/lib/fancy_loginza_loginza.inc.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

define(\'PUN_JQUERY_INCLUDE_METHOD_LOCAL\', 0);
			define(\'PUN_JQUERY_INCLUDE_METHOD_GOOGLE_CDN\', 1);
			define(\'PUN_JQUERY_INCLUDE_METHOD_MICROSOFT_CDN\', 2);
			define(\'PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN\', 3);

			define(\'PUN_JQUERY_VERSION\', \'1.7.1\');

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_avatars_on_index\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_avatars_on_index\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_avatars_on_index\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

function get_avatar($user) {
        global $base_url, $forum_config, $ext_info;
        switch ($user[\'avatar\'])
        {
            case FORUM_AVATAR_GIF:
                $avatar_filename = $user[\'id\'].\'.gif\';
                break;
    
            case FORUM_AVATAR_JPG:
                $avatar_filename = $user[\'id\'].\'.jpg\';
                break;
    
            case FORUM_AVATAR_PNG:
                $avatar_filename = $user[\'id\'].\'.png\';
                break;
        }
    
        if (!isset($avatar_filename)) {
            return  $ext_info[\'url\'].\'/css/default.png\';
        }
    
       return $base_url .\'/\'. $forum_config[\'o_avatars_dir\'] .\'/\'.$avatar_filename;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_user_activity\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_user_activity\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_user_activity\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include_once $ext_info[\'path\'].\'/functions.inc.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    4 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/functions.inc.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'co_common' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_login_loginza)) {
				if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
					include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				} else {
					include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/fancy_stop_spam.inc.php\';

			// Load LANG
			if (!isset($lang_fancy_stop_spam)) {
				if ($forum_user[\'language\'] != \'English\' &&
				file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
					include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				} else {
					include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'co_modify_url_scheme' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/url/Default.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

include $ext_info[\'path\'].\'/url/Default.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_sef\'] != \'Default\' && file_exists($ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\'))
				require $ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\';
			else
				require $ext_info[\'path\'].\'/url/Default.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_user_activity\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_user_activity\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_user_activity\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\')) {
					require_once $ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\';
				} else {
					require_once $ext_info[\'path\'].\'/url/Default.php\';
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    4 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\')) {
					require_once $ext_info[\'path\'].\'/url/\'.$forum_config[\'o_sef\'].\'.php\';
				} else {
					require_once $ext_info[\'path\'].\'/url/Default.php\';
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mi_new_action' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($action == \'fancy_login_loginza_off\' && !$forum_user[\'is_guest\']) {
				$fancy_login_loginza = new Fancy_login_loginza;
				$fancy_login_loginza->user_remove_identity($forum_user[\'id\']);
			}

			if ($action == \'fancy_login_loginza_end_reg\' && $forum_user[\'is_guest\']) {
				$fancy_login_loginza = new Fancy_login_loginza;
				$fancy_login_loginza->form_end_reg(FALSE);
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($action == \'pun_pm_send\' && !$forum_user[\'is_guest\'])
{
	if(!defined(\'PUN_PM_FUNCTIONS_LOADED\'))
		require $ext_info[\'path\'].\'/functions.php\';

	if (!isset($lang_pun_pm))
	{
		if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
			include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
		else
			include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
	}

	$pun_pm_body = isset($_POST[\'req_message\']) ? $_POST[\'req_message\'] : \'\';
	$pun_pm_subject = isset($_POST[\'pm_subject\']) ? $_POST[\'pm_subject\'] : \'\';
	$pun_pm_receiver_username = isset($_POST[\'pm_receiver\']) ? $_POST[\'pm_receiver\'] : \'\';
	$pun_pm_message_id = isset($_POST[\'message_id\']) ? (int) $_POST[\'message_id\'] : false;

	if (isset($_POST[\'send_action\']) && in_array($_POST[\'send_action\'], array(\'send\', \'draft\', \'delete\', \'preview\')))
		$pun_pm_send_action = $_POST[\'send_action\'];
	elseif (isset($_POST[\'pm_draft\']))
		$pun_pm_send_action = \'draft\';
	elseif (isset($_POST[\'pm_send\']))
		$pun_pm_send_action = \'send\';
	elseif (isset($_POST[\'pm_delete\']))
		$pun_pm_send_action = \'delete\';
	else
		$pun_pm_send_action = \'preview\';

	($hook = get_hook(\'pun_pm_after_send_action_set\')) ? eval($hook) : null;

	if ($pun_pm_send_action == \'draft\')
	{
		// Try to save the message as draft
		// Inside this function will be a redirect, if everything is ok
		$pun_pm_errors = pun_pm_save_message($pun_pm_body, $pun_pm_subject, $pun_pm_receiver_username, $pun_pm_message_id);
		// Remember $pun_pm_message_id = false; inside this function if $pun_pm_message_id is incorrect

		// Well... Go processing errors

		// We need no preview
		$pun_pm_msg_preview = false;
	}
	elseif ($pun_pm_send_action == \'send\')
	{
		// Try to send the message
		// Inside this function will be a redirect, if everything is ok
		$pun_pm_errors = pun_pm_send_message($pun_pm_body, $pun_pm_subject, $pun_pm_receiver_username, $pun_pm_message_id);
		// Remember $pun_pm_message_id = false; inside this function if $pun_pm_message_id is incorrect

		// Well... Go processing errors

		// We need no preview
		$pun_pm_msg_preview = false;
	}
	elseif ($pun_pm_send_action == \'delete\' && $pun_pm_message_id !== false)
	{
		pun_pm_delete_from_outbox(array($pun_pm_message_id));
		redirect(forum_link($forum_url[\'pun_pm_outbox\']), $lang_pun_pm[\'Message deleted\']);
	}
	elseif ($pun_pm_send_action == \'preview\')
	{
		// Preview message
		$pun_pm_errors = array();
		$pun_pm_msg_preview = pun_pm_preview($pun_pm_receiver_username, $pun_pm_subject, $pun_pm_body, $pun_pm_errors);
	}

	($hook = get_hook(\'pun_pm_new_send_action\')) ? eval($hook) : null;

	$pun_pm_page_text = pun_pm_send_form($pun_pm_receiver_username, $pun_pm_subject, $pun_pm_body, $pun_pm_message_id, false, false, $pun_pm_msg_preview);

	// Setup navigation menu
	$forum_page[\'main_menu\'] = array(
		\'inbox\'		=> \'<li class="first-item"><a href="\'.forum_link($forum_url[\'pun_pm_inbox\']).\'"><span>\'.$lang_pun_pm[\'Inbox\'].\'</span></a></li>\',
		\'outbox\'	=> \'<li><a href="\'.forum_link($forum_url[\'pun_pm_outbox\']).\'"><span>\'.$lang_pun_pm[\'Outbox\'].\'</span></a></li>\',
		\'write\'		=> \'<li class="active"><a href="\'.forum_link($forum_url[\'pun_pm_write\']).\'"><span>\'.$lang_pun_pm[\'Compose message\'].\'</span></a></li>\',
	);

	// Setup breadcrumbs
	$forum_page[\'crumbs\'] = array(
		array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
		array($lang_pun_pm[\'Private messages\'], forum_link($forum_url[\'pun_pm\'])),
		array($lang_pun_pm[\'Compose message\'], forum_link($forum_url[\'pun_pm_write\']))
	);

	($hook = get_hook(\'pun_pm_pre_send_output\')) ? eval($hook) : null;

	define(\'FORUM_PAGE\', \'pun_pm-write\');
	require FORUM_ROOT.\'header.php\';

	// START SUBST - <!-- forum_main -->
	ob_start();

	echo $pun_pm_page_text;

	$tpl_temp = trim(ob_get_contents());
	$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp, $tpl_main);
	ob_end_clean();
	// END SUBST - <!-- forum_main -->

	require FORUM_ROOT.\'footer.php\';
}

$section = isset($_GET[\'section\']) ? $_GET[\'section\'] : null;

if ($section == \'pun_pm\' && !$forum_user[\'is_guest\'])
{
	if (!isset($lang_pun_pm))
	{
		if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
			include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
		else
			include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
	}

	if (!defined(\'PUN_PM_FUNCTIONS_LOADED\'))
		require $ext_info[\'path\'].\'/functions.php\';

	$pun_pm_page = isset($_GET[\'pmpage\']) ? $_GET[\'pmpage\'] : \'\';

	($hook = get_hook(\'pun_pm_pre_page_building\')) ? eval($hook) : null;

	// pun_pm_get_page() performs everything :)
	// Remember $pun_pm_page correction inside pun_pm_get_page() if this variable is incorrect
	$pun_pm_page_text = pun_pm_get_page($pun_pm_page);

	// Setup navigation menu
	$forum_page[\'main_menu\'] = array(
		\'inbox\'		=> \'<li class="first-item\'.($pun_pm_page == \'inbox\' ? \' active\' : \'\').\'"><a href="\'.forum_link($forum_url[\'pun_pm_inbox\']).\'"><span>\'.$lang_pun_pm[\'Inbox\'].\'</span></a></li>\',
		\'outbox\'	=> \'<li\'.(($pun_pm_page == \'outbox\') ? \' class="active"\' : \'\').\'><a href="\'.forum_link($forum_url[\'pun_pm_outbox\']).\'"><span>\'.$lang_pun_pm[\'Outbox\'].\'</span></a></li>\',
		\'write\'		=> \'<li\'.(($pun_pm_page == \'write\' || $pun_pm_page == \'compose\') ? \' class="active"\' : \'\').\'><a href="\'.forum_link($forum_url[\'pun_pm_write\']).\'"><span>\'.$lang_pun_pm[\'Compose message\'].\'</span></a></li>\',
	);

	// Setup breadcrumbs
	$forum_page[\'crumbs\'] = array(
		array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
		array($lang_pun_pm[\'Private messages\'], forum_link($forum_url[\'pun_pm\']))
	);

	if ($pun_pm_page == \'inbox\')
		$forum_page[\'crumbs\'][] = array($lang_pun_pm[\'Inbox\'], forum_link($forum_url[\'pun_pm_inbox\']));
	else if ($pun_pm_page == \'outbox\')
		$forum_page[\'crumbs\'][] = array($lang_pun_pm[\'Outbox\'], forum_link($forum_url[\'pun_pm_outbox\']));
	else if ($pun_pm_page == \'write\' || $pun_pm_page == \'compose\')
		$forum_page[\'crumbs\'][] = array($lang_pun_pm[\'Compose message\'], forum_link($forum_url[\'pun_pm_write\']));

	($hook = get_hook(\'pun_pm_pre_page_output\')) ? eval($hook) : null;

	define(\'FORUM_PAGE\', \'pun_pm-\'.$pun_pm_page);
	require FORUM_ROOT.\'header.php\';

	// START SUBST - <!-- forum_main -->
	ob_start();

	echo $pun_pm_page_text;

	$tpl_temp = trim(ob_get_contents());
	$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp, $tpl_main);
	ob_end_clean();
	// END SUBST - <!-- forum_main -->

	require FORUM_ROOT.\'footer.php\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

//
				if ($action == \'fancy_alerts_topics_mark_read\') {
					$fancy_alerts = new Fancy_alerts;
					$fancy_alerts->action_topics_mark_read();
				}

				//
				if ($action == \'fancy_alerts_quotes_mark_read\') {
					$fancy_alerts = new Fancy_alerts;
					$fancy_alerts->action_quotes_mark_read();
				}

				//
				if ($action == \'fancy_alerts_topics_on\') {
					$fancy_alerts = new Fancy_alerts;
					$fancy_alerts->action_alerts_topics_on();
				}

				//
				if ($action == \'fancy_alerts_topics_off\') {
					$fancy_alerts = new Fancy_alerts;
					$fancy_alerts->action_alerts_topics_off();
				}

				// FOR ASYNC STATUS UPDATE
				if ($action == \'fancy_alerts_update_status\') {
					$fancy_alerts = new Fancy_alerts;
					$fancy_alerts->action_get_status();
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_features_gzip_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;

?>
			<div class="content-head" id="<?php echo $ext_info[\'id\'].\'_settings\'; ?>">
				<h2 class="hn"><span><?php echo $lang_fancy_login_loginza[\'Settings Name\'] ?></span></h2>
			</div>
			<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
				<legend class="group-legend"><span><?php echo $lang_fancy_login_loginza[\'Settings Name\'] ?></span></legend>
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box sf-short text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>">
							<span><?php echo $lang_fancy_login_loginza[\'Settings Widget Name\'] ?></span>
							<small><?php echo $lang_fancy_login_loginza[\'Settings Widget Help\'] ?></small>
						</label><br/>
						<span class="fld-input">
							<input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[fancy_login_loginza_widget_id]" size="5" maxlength="5" value="<?php echo intval($forum_config[\'o_fancy_login_loginza_widget_id\'], 10) ?>"/>
						</span>
					</div>
				</div>
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>">
							<span><?php echo $lang_fancy_login_loginza[\'Settings SKey Name\'] ?></span>
							<small><?php echo $lang_fancy_login_loginza[\'Settings SKey Help\'] ?></small>
						</label><br/>
						<span class="fld-input">
							<input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[fancy_login_loginza_secret_key]" size="50" maxlength="60" value="<?php echo forum_htmlencode($forum_config[\'o_fancy_login_loginza_secret_key\']) ?>"/>
						</span>
					</div>
				</div>

				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>">
							<span><?php echo $lang_fancy_login_loginza[\'Settings Providers\'] ?></span>
							<small><?php echo $lang_fancy_login_loginza[\'Settings Providers Help\'] ?></small>
						</label><br/>
						<span class="fld-input">
							<input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[fancy_login_loginza_providers]" size="50" maxlength="128" value="<?php echo forum_htmlencode($forum_config[\'o_fancy_login_loginza_providers\']) ?>"/>
						</span>
					</div>
				</div>

				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box checkbox">
						<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_login_loginza_trust_openid_emails]" value="1"<?php if ($forum_config[\'o_fancy_login_loginza_trust_openid_emails\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
						<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_login_loginza[\'Trust OpenID emails Help\'] ?></label>
					</div>
				</div>

				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box checkbox">
						<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_login_loginza_lang_from_forum]" value="1"<?php if ($forum_config[\'o_fancy_login_loginza_lang_from_forum\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
						<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"></span><?php echo $lang_fancy_login_loginza[\'Widget Lang Help\'] ?></label>
					</div>
				</div>

				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box checkbox">
						<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_login_loginza_button_on_index]" value="1"<?php if ($forum_config[\'o_fancy_login_loginza_button_on_index\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
						<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"></span><?php echo $lang_fancy_login_loginza[\'Show Button on Index Help\'] ?></label>
					</div>
				</div>
			</fieldset>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_pun_jquery)) {
				if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			// Reset counter
			$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;
?>
			<div class="content-head">
				<h2 class="hn"><span><?php echo sprintf($lang_pun_jquery[\'Setup jquery\'], PUN_JQUERY_VERSION) ?></span></h2>
			</div>

			<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
				<legend class="group-legend"><strong><?php echo sprintf($lang_pun_jquery[\'Setup jquery legend\'], PUN_JQUERY_VERSION) ?></strong></legend>
				<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<legend><span><?php echo $lang_pun_jquery[\'Include method\'] ?></span></legend>
					<div class="mf-box">
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_jquery_include_method]" value="<?php echo PUN_JQUERY_INCLUDE_METHOD_LOCAL; ?>"<?php if ($forum_config[\'o_pun_jquery_include_method\'] == PUN_JQUERY_INCLUDE_METHOD_LOCAL) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_jquery[\'Include method local label\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_jquery_include_method]" value="<?php echo PUN_JQUERY_INCLUDE_METHOD_GOOGLE_CDN; ?>"<?php if ($forum_config[\'o_pun_jquery_include_method\'] == PUN_JQUERY_INCLUDE_METHOD_GOOGLE_CDN) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_jquery[\'Include method google label\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_jquery_include_method]" value="<?php echo PUN_JQUERY_INCLUDE_METHOD_MICROSOFT_CDN; ?>"<?php if ($forum_config[\'o_pun_jquery_include_method\'] == PUN_JQUERY_INCLUDE_METHOD_MICROSOFT_CDN) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_jquery[\'Include method microsoft label\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="radio" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_jquery_include_method]" value="<?php echo PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN; ?>"<?php if ($forum_config[\'o_pun_jquery_include_method\'] == PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN) echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_jquery[\'Include method jquery label\'] ?></label>
						</div>
					</div>
				</fieldset>
			</fieldset>

<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($fancy_merge_posts)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}
			}

			$forum_page[\'group_count\'] = 0;
?>
				<div class="content-head" id="<?php echo $ext_info[\'id\'].\'_settings\'; ?>">
					<h2 class="hn"><span><?php echo $fancy_merge_posts[\'Name\'] ?></span></h2>
				</div>
				<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box checkbox">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_merge_posts_silent]" value="1"<?php if ($forum_config[\'o_fancy_merge_posts_silent\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $fancy_merge_posts[\'Silent mode desc\'] ?></label>
						</div>
					</div>

					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box checkbox">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_merge_posts_no_update_date]" value="1"<?php if ($forum_config[\'o_fancy_merge_posts_no_update_date\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $fancy_merge_posts[\'No update date desc\'] ?></label>
						</div>
					</div>

					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box text">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $fancy_merge_posts[\'Dont merge timeout\'] ?></span><small><?php echo $fancy_merge_posts[\'Dont merge timeout hint\'] ?></small></label><br />
							<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[fancy_merge_posts_dm_interval]" size="6" maxlength="6" value="<?php echo forum_htmlencode($forum_config[\'o_fancy_merge_posts_dm_interval\']) ?>" /></span>
						</div>
					</div>
				</fieldset>


<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;
		?>
				<div class="content-head" id="<?php echo $ext_info[\'id\'].\'_settings\'; ?>">
					<h2 class="hn"><span><?php echo $lang_fancy_stop_spam[\'Settings Name\'] ?></span></h2>
				</div>
				<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
					<legend class="group-legend"><span><?php echo $lang_fancy_stop_spam[\'Name\'] ?></span></legend>

					<!-- REGISTER FORM -->
					<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<legend><span><?php echo $lang_fancy_stop_spam[\'Register form\'] ?></span></legend>
						<div class="mf-box">
							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_register_form_honeypot]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Enable Honeypot\'] ?></label>
							</div>
							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_register_form_timeout]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_register_form_timeout\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Enable Timeout\'] ?></label>
							</div>
							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_register_form_timezone]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_register_form_timezone\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Enable Timezone\'] ?></label>
							</div>
							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_register_form_sfs_email]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_register_form_sfs_email\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Enable SFS Email\'] ?></label>
							</div>
							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_register_form_sfs_ip]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_register_form_sfs_ip\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Enable SFS IP\'] ?></label>
							</div>
						</div>
					</fieldset>

					<!-- POST FORM -->
					<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<legend><span><?php echo $lang_fancy_stop_spam[\'Post form\'] ?></span></legend>
						<div class="mf-box">
							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_post_form_honeypot]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_post_form_honeypot\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Enable Honeypot\'] ?></label>
							</div>
						</div>
					</fieldset>

					<!-- OTHER METHOD -->
					<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<legend><span><?php echo $lang_fancy_stop_spam[\'Other Methods\'] ?></span></legend>
						<div class="mf-box">
							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_check_identical_posts]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_check_identical_posts\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Enable Check Identical\'] ?></label>
							</div>

							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_check_signature]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_check_signature\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Signature Check Method\'] ?></label>
							</div>

							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_check_submit]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_check_submit\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Submit Check Method\'] ?></label>
							</div>

							<div class="mf-item">
								<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_use_logs]" value="1"<?php if ($forum_config[\'o_fancy_stop_spam_use_logs\'] == \'1\') echo \' checked="checked"\'; ?> /></span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Enable Logs\'] ?></label>
							</div>
						</div>
					</fieldset>

					<!-- FIRST POST METHOD -->
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box sf-short text">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_fancy_stop_spam[\'First Post Max Links\'] ?></span><small><?php echo $lang_fancy_stop_spam[\'First Post Max Links Help\'] ?></small></label><br />
							<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_max_links]" size="3" maxlength="3" value="<?php echo forum_htmlencode($forum_config[\'o_fancy_stop_spam_max_links\']) ?>" /></span>
						</div>
					</div>
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box sf-short text">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_fancy_stop_spam[\'First Post Guest Max Links\'] ?></span><small><?php echo $lang_fancy_stop_spam[\'First Post Guest Max Links Help\'] ?></small></label><br />
							<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_max_guest_links]" size="3" maxlength="3" value="<?php echo forum_htmlencode($forum_config[\'o_fancy_stop_spam_max_guest_links\']) ?>" /></span>
						</div>
					</div>

					<!-- SFS API KEY -->
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box text">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_fancy_stop_spam[\'SFS API Key\'] ?></span><small><?php echo $lang_fancy_stop_spam[\'SFS API Key Help\'] ?></small></label><br />
							<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[fancy_stop_spam_sfs_api_key]" size="35" maxlength="64" value="<?php echo forum_htmlencode($forum_config[\'o_fancy_stop_spam_sfs_api_key\']) ?>" /></span>
						</div>
					</div>
				</fieldset>
		<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    4 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_addthis)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;
?>
				<div class="content-head" id="<?php echo $ext_info[\'id\'].\'_settings\'; ?>">
					<h2 class="hn"><span><?php echo $lang_fancy_addthis[\'Name\'] ?></span></h2>
				</div>
				<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
					<legend class="group-legend"><span><?php echo $lang_fancy_addthis[\'Name\'] ?></span></legend>

					<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<legend><span><?php echo $lang_fancy_addthis[\'Enable buttons\'] ?></span></legend>
						<div class="mf-box">
							<div class="mf-item">
								<span class="fld-input">
									<input type="checkbox"
										id="fld<?php echo ++$forum_page[\'fld_count\'] ?>"
										name="form[fancy_addthis_button_gplus]" value="1"
										<?php if ($forum_config[\'o_fancy_addthis_button_gplus\'] == \'1\') echo \' checked="checked"\'; ?> />
								</span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
									<?php echo $lang_fancy_addthis[\'Enable G+ button label\'] ?>
								</label>
							</div>

							<div class="mf-item">
								<span class="fld-input">
									<input
										type="checkbox"
										id="fld<?php echo ++$forum_page[\'fld_count\'] ?>"
										name="form[fancy_addthis_button_twitter]" value="1"
										<?php if ($forum_config[\'o_fancy_addthis_button_twitter\'] == \'1\') echo \' checked="checked"\'; ?> />
								</span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
									<?php echo $lang_fancy_addthis[\'Enable Twitter button label\'] ?>
								</label>
							</div>

							<div class="mf-item">
								<span class="fld-input">
									<input
										type="checkbox"
										id="fld<?php echo ++$forum_page[\'fld_count\'] ?>"
										name="form[fancy_addthis_button_facebook]" value="1"
										<?php if ($forum_config[\'o_fancy_addthis_button_facebook\'] == \'1\') echo \' checked="checked"\'; ?> />
								</span>
								<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
									<?php echo $lang_fancy_addthis[\'Enable Facebook button label\'] ?>
								</label>
							</div>
						</div>
					</fieldset>

				</fieldset>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    5 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_alerts)) {
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
						require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					} else {
						require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
					}
				}

				$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;

?>
				<div class="content-head" id="<?php echo $ext_info[\'id\'].\'_settings\'; ?>">
					<h2 class="hn"><span><?php echo $lang_fancy_alerts[\'Settings Name\'] ?></span></h2>
				</div>
				<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
					<legend class="group-legend"><span><?php echo $lang_fancy_alerts[\'Settings Name\'] ?></span></legend>
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box sf-short text">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>">
								<span><?php echo $lang_fancy_alerts[\'Settings Autoupdate Name\'] ?></span>
								<small><?php echo $lang_fancy_alerts[\'Settings Autoupdate Help\'] ?></small>
							</label><br/>
							<span class="fld-input">
								<input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[fancy_alerts_autoupdate_interval]" size="3" maxlength="3" value="<?php echo intval($forum_config[\'o_fancy_alerts_autoupdate_interval\'], 10) ?>"/>
							</span>
						</div>
					</div>
				</fieldset>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_features_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'fancy_login_loginza_widget_id\'] = (!isset($form[\'fancy_login_loginza_widget_id\']) ||  intval($form[\'fancy_login_loginza_widget_id\'], 10) < 1) ? 0 : intval($form[\'fancy_login_loginza_widget_id\'], 10);
			$form[\'fancy_login_loginza_secret_key\'] = (isset($form[\'fancy_login_loginza_secret_key\'])) ? utf8_substr(forum_trim($form[\'fancy_login_loginza_secret_key\']), 0, 40) : \'\';

			$form[\'fancy_login_loginza_trust_openid_emails\'] = (!isset($form[\'fancy_login_loginza_trust_openid_emails\']) || intval($form[\'fancy_login_loginza_trust_openid_emails\'], 10) !== 1) ? \'0\' : \'1\';
			$form[\'fancy_login_loginza_lang_from_forum\'] = (!isset($form[\'fancy_login_loginza_lang_from_forum\']) || intval($form[\'fancy_login_loginza_lang_from_forum\'], 10) !== 1) ? \'0\' : \'1\';
			$form[\'fancy_login_loginza_button_on_index\'] = (!isset($form[\'fancy_login_loginza_button_on_index\']) || intval($form[\'fancy_login_loginza_button_on_index\'], 10) !== 1) ? \'0\' : \'1\';

			// Providers
			$fancy_login_loginza = new Fancy_login_loginza;
			$fancy_login_loginza_providers = $fancy_login_loginza->parse_providers($form[\'fancy_login_loginza_providers\']);
			if (is_array($fancy_login_loginza_providers) && count($fancy_login_loginza_providers) > 0) {
				$form[\'fancy_login_loginza_providers\'] = utf8_substr(implode(\',\', $fancy_login_loginza_providers), 0, 128);
			} else {
				$form[\'fancy_login_loginza_providers\'] = \'\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($form[\'pun_jquery_include_method\']))
			{
				$form[\'pun_jquery_include_method\'] = intval($form[\'pun_jquery_include_method\'], 10);
				if (($form[\'pun_jquery_include_method\'] < PUN_JQUERY_INCLUDE_METHOD_LOCAL) || ($form[\'pun_jquery_include_method\'] > PUN_JQUERY_INCLUDE_METHOD_JQUERY_CDN))
				{
					$form[\'pun_jquery_include_method\'] = PUN_JQUERY_INCLUDE_METHOD_LOCAL;
				}
			}
			else
			{
				$form[\'pun_jquery_include_method\'] = PUN_JQUERY_INCLUDE_METHOD_LOCAL;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'fancy_merge_posts_silent\'] = (!isset($form[\'fancy_merge_posts_silent\']) || intval($form[\'fancy_merge_posts_silent\'], 10) <= 0) ? \'0\' : \'1\';
			$form[\'fancy_merge_posts_no_update_date\'] = (!isset($form[\'fancy_merge_posts_no_update_date\']) || intval($form[\'fancy_merge_posts_no_update_date\'], 10) <= 0) ? \'0\' : \'1\';
			$form[\'fancy_merge_posts_dm_interval\'] = intval($form[\'fancy_merge_posts_dm_interval\'], 10);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'fancy_stop_spam_max_links\'] = (!isset($form[\'fancy_stop_spam_max_links\']) ||  !is_numeric($form[\'fancy_stop_spam_max_links\'])) ? \'-1\' : intval($form[\'fancy_stop_spam_max_links\'], 10);
			$form[\'fancy_stop_spam_max_guest_links\'] = (!isset($form[\'fancy_stop_spam_max_guest_links\']) ||  !is_numeric($form[\'fancy_stop_spam_max_guest_links\'])) ? \'-1\' : intval($form[\'fancy_stop_spam_max_guest_links\'], 10);

			// Save settings
			if (!isset($form[\'fancy_stop_spam_register_form_honeypot\']) || $form[\'fancy_stop_spam_register_form_honeypot\'] != \'1\') $form[\'fancy_stop_spam_register_form_honeypot\'] = \'0\';
			if (!isset($form[\'fancy_stop_spam_register_form_timeout\']) || $form[\'fancy_stop_spam_register_form_timeout\'] != \'1\') $form[\'fancy_stop_spam_register_form_timeout\'] = \'0\';
			if (!isset($form[\'fancy_stop_spam_register_form_timezone\']) || $form[\'fancy_stop_spam_register_form_timezone\'] != \'1\') $form[\'fancy_stop_spam_register_form_timezone\'] = \'0\';
			if (!isset($form[\'fancy_stop_spam_register_form_sfs_email\']) || $form[\'fancy_stop_spam_register_form_sfs_email\'] != \'1\') $form[\'fancy_stop_spam_register_form_sfs_email\'] = \'0\';
			if (!isset($form[\'fancy_stop_spam_register_form_sfs_ip\']) || $form[\'fancy_stop_spam_register_form_sfs_ip\'] != \'1\') $form[\'fancy_stop_spam_register_form_sfs_ip\'] = \'0\';

			if (!isset($form[\'fancy_stop_spam_post_form_honeypot\']) || $form[\'fancy_stop_spam_post_form_honeypot\'] != \'1\') $form[\'fancy_stop_spam_post_form_honeypot\'] = \'0\';
			if (!isset($form[\'fancy_stop_spam_check_identical_posts\']) || $form[\'fancy_stop_spam_check_identical_posts\'] != \'1\') $form[\'fancy_stop_spam_check_identical_posts\'] = \'0\';
			if (!isset($form[\'fancy_stop_spam_check_signature\']) || $form[\'fancy_stop_spam_check_signature\'] != \'1\') $form[\'fancy_stop_spam_check_signature\'] = \'0\';
			if (!isset($form[\'fancy_stop_spam_check_submit\']) || $form[\'fancy_stop_spam_check_submit\'] != \'1\') $form[\'fancy_stop_spam_check_submit\'] = \'0\';
			if (!isset($form[\'fancy_stop_spam_use_logs\']) || $form[\'fancy_stop_spam_use_logs\'] != \'1\') $form[\'fancy_stop_spam_use_logs\'] = \'0\';

			$form[\'fancy_stop_spam_sfs_api_key\'] = substr(forum_trim($form[\'fancy_stop_spam_sfs_api_key\']), 0, 64);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    4 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'pun_pm_inbox_size\'] = (!isset($form[\'pun_pm_inbox_size\']) || (int) $form[\'pun_pm_inbox_size\'] <= 0) ? \'0\' : (string)(int) $form[\'pun_pm_inbox_size\'];
			$form[\'pun_pm_outbox_size\'] = (!isset($form[\'pun_pm_outbox_size\']) || (int) $form[\'pun_pm_outbox_size\'] <= 0) ? \'0\' : (string)(int) $form[\'pun_pm_outbox_size\'];

			if (!isset($form[\'pun_pm_show_new_count\']) || $form[\'pun_pm_show_new_count\'] != \'1\')
				$form[\'pun_pm_show_new_count\'] = \'0\';

			if (!isset($form[\'pun_pm_show_global_link\']) || $form[\'pun_pm_show_global_link\'] != \'1\')
				$form[\'pun_pm_show_global_link\'] = \'0\';

			($hook = get_hook(\'pun_pm_aop_features_validation_end\')) ? eval($hook) : null;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    5 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'fancy_addthis_button_gplus\'] = (!isset($form[\'fancy_addthis_button_gplus\']) || (int) $form[\'fancy_addthis_button_gplus\'] <= 0) ? \'0\' : \'1\';
			$form[\'fancy_addthis_button_twitter\'] = (!isset($form[\'fancy_addthis_button_twitter\']) || (int) $form[\'fancy_addthis_button_twitter\'] <= 0) ? \'0\' : \'1\';
			$form[\'fancy_addthis_button_facebook\'] = (!isset($form[\'fancy_addthis_button_facebook\']) || (int) $form[\'fancy_addthis_button_facebook\'] <= 0) ? \'0\' : \'1\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    6 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'fancy_alerts_autoupdate_interval\'] = (!isset($form[\'fancy_alerts_autoupdate_interval\']) ||  intval($form[\'fancy_alerts_autoupdate_interval\'], 10) < 0) ? 0 : intval($form[\'fancy_alerts_autoupdate_interval\'], 10);

				if ($form[\'fancy_alerts_autoupdate_interval\'] > 0 && $form[\'fancy_alerts_autoupdate_interval\'] < 20) {
					$form[\'fancy_alerts_autoupdate_interval\'] = 20;
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    7 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'post_edit_control_duration\'] = !empty($form[\'edit_control_duration\']) ? intval($form[\'edit_control_duration\']) : \'60\';
			$form[\'post_edit_control_lastedit\'] = isset($form[\'edit_control_lastedit\']) ? 1 : 0;
			$form[\'post_edit_control_lastreply\'] = isset($form[\'edit_control_lastreply\']) ? 1 : 0;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_pass_key_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($key == $user[\'activate_key\']) {

				$fancy_login_loginza = new Fancy_login_loginza;
				if ($fancy_login_loginza->user_have_loginza($id)) {
					$query = array(
						\'UPDATE\'	=> \'users\',
						\'SET\'		=> \'group_id=\'.$forum_config[\'o_default_user_group\'].\', activate_key=NULL\',
						\'WHERE\'		=> \'id=\'.$id
					);
					$forum_db->query_build($query) or error(__FILE__, __LINE__);

					message($lang_fancy_login_loginza[\'Account activated\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\') {
				$fancy_stop_spam_post_key_id = uniqid();
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_about_pre_user_private_info' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_login_loginza = new Fancy_login_loginza;

			if ($fancy_login_loginza->setuped() && $forum_page[\'own_profile\'] === TRUE):
				$forum_page[\'user_fancy_login_loginza\'] = array();

				$fancy_login_loginza = new Fancy_login_loginza;
				if ($fancy_login_loginza->user_have_loginza($forum_user[\'id\'])) {
					$fl_link = \'<a href="\'.forum_link($forum_url[\'fancy_login_loginza_turn_off\'], generate_form_token(\'fancy_login_loginza_turn_off\'.$forum_user[\'id\'])).\'">\'.$lang_fancy_login_loginza[\'Turn off\'].\'</a>\';
					$forum_page[\'user_fancy_login_loginza\'][\'status\'] = \'<li><span>\'.$lang_fancy_login_loginza[\'Status\'].\': \'.sprintf($lang_fancy_login_loginza[\'Enabled\'], $fl_link).\'</span></li>\';
					$forum_page[\'user_fancy_login_loginza\'][\'identity\'] = \'<li><span>\'.$lang_fancy_login_loginza[\'Identity\'].\': \'.forum_htmlencode($fancy_login_loginza->get_user_identity($forum_user[\'id\'])).\'</span></li>\';
				} else {
					$fl_link = \'<a href="\'.$fancy_login_loginza->get_loginza_url().\'" class="loginza">\'.$lang_fancy_login_loginza[\'Turn on\'].\'</a>\';
					$forum_page[\'user_fancy_login_loginza\'][\'status\'] = \'<li><span>\'.$lang_fancy_login_loginza[\'Status\'].\': \'.sprintf($lang_fancy_login_loginza[\'Disabled\'], $fl_link).\'</span></li>\';
				}

			?>
				<div id="loginza-profile" class="ct-set data-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="ct-box data-box">
						<h3 class="ct-legend hn"><span><?php echo $lang_fancy_login_loginza[\'Loginza\'] ?></span></h3>
						<ul class="data-list">
							<?php echo implode("\\n\\t\\t\\t\\t\\t\\t", $forum_page[\'user_fancy_login_loginza\'])."\\n" ?>
						</ul>
					</div>
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_add_user_send_verification' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Load the "welcome" template
			if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/mail_templates/welcome.tpl\')) {
				$mail_tpl = forum_trim(file_get_contents($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/mail_templates/welcome.tpl\'));
			} else {
				$mail_tpl = forum_trim(file_get_contents($ext_info[\'path\'].\'/lang/English/mail_templates/welcome.tpl\'));
			}

			// The first row contains the subject
			$first_crlf = strpos($mail_tpl, "\\n");
			$mail_subject = forum_trim(substr($mail_tpl, 8, $first_crlf-8));
			$mail_message = forum_trim(substr($mail_tpl, $first_crlf));

			$mail_subject = str_replace(\'<board_title>\', $forum_config[\'o_board_title\'], $mail_subject);
			$mail_message = str_replace(\'<base_url>\', $base_url.\'/\', $mail_message);
			$mail_message = str_replace(\'<username>\', $user_info[\'username\'], $mail_message);
			$mail_message = str_replace(\'<activation_url>\', str_replace(\'&amp;\', \'&\', forum_link($forum_url[\'change_password_key\'], array($new_uid, substr($user_info[\'activate_key\'], 1, -1)))), $mail_message);
			$mail_message = str_replace(\'<board_mailer>\', sprintf($lang_common[\'Forum mailer\'], $forum_config[\'o_board_title\']), $mail_message);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rg_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_login_loginza = new Fancy_login_loginza;
			if ($fancy_login_loginza->setuped()):
			?>
				<div id="fancy_login_loginza_wrap" style="display: none;">
					<div id="fancy_login_loginza_block">
						<div class="content-head">
							<p class="hn"><span style="display: block; max-width: 55em; margin-bottom: .6em;"><?php echo $lang_fancy_login_loginza[\'Login help\']; ?></span>
								<a href="<?php echo $fancy_login_loginza->get_loginza_url(); ?>" class="loginza">
    								<img src="<?php echo $ext_info[\'url\']; ?>/css/Oxygen/img/sign_in_button_gray.gif" alt="<?php echo $lang_fancy_login_loginza[\'Login button help\']; ?>"/>
								</a>
							</p>
						</div>
					</div>
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'li_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_login_loginza\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_login_loginza\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_login_loginza\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_login_loginza = new Fancy_login_loginza;
			if ($fancy_login_loginza->setuped()):
			?>
				<div id="fancy_login_loginza_wrap" style="display: none;">
					<div id="fancy_login_loginza_block">
						<div class="content-head">
							<p class="hn"><span style="display: block; max-width: 55em; margin-bottom: .6em;"><?php echo $lang_fancy_login_loginza[\'Login help\']; ?></span>
								<a href="<?php echo $fancy_login_loginza->get_loginza_url(); ?>" class="loginza">
    								<img src="<?php echo $ext_info[\'url\']; ?>/css/Oxygen/img/sign_in_button_gray.gif" alt="<?php echo $lang_fancy_login_loginza[\'Login button help\']; ?>"/>
								</a>
							</p>
						</div>
					</div>
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mr_post_actions_pre_mod_options' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_move_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_move_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_move_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_page[\'mod_options\'] = array_merge(array(\'<span class="submit first-item"><input type="submit" name="move_posts" value="\'.$lang_pun_move_posts[\'Move selected\'].\'" /></span>\'), $forum_page[\'mod_options\']);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mr_post_actions_selected' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_move_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_move_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_move_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require $ext_info[\'path\'].\'/move_posts.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mr_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_move_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_move_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_move_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
				require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
			else
				require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'in_forum_loop_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_toggle_cats\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_toggle_cats\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_toggle_cats\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$classToggled = false;
$has_toggler = false;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'in_qr_get_cats_and_forums' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_toggle_cats\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_toggle_cats\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_toggle_cats\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_toggle_cats_toggled = null;
			if (isset($_COOKIE[\'fancy_toggle_cats\'])) {
				$fancy_toggle_cats_toggled = explode(\':\', $_COOKIE[\'fancy_toggle_cats\'], 24);
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_avatars_on_index\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_avatars_on_index\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_avatars_on_index\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', u2.id AS poster_id, u2.avatar, u2.avatar_width, u2.avatar_height\';
$query[\'JOINS\'][] = array(
    \'LEFT JOIN\' => \'posts AS p2\',
    \'ON\'            => \'(p2.id = f.last_post_id)\'
);

$query[\'JOINS\'][] = array(
    \'LEFT JOIN\' => \'users AS u2\',
    \'ON\'            => \'(u2.id = p2.poster_id)\'
);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_forum_image\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_forum_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_forum_image\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', f.f_image, f.f_image_place, f.f_image_link, f.f_image_info\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'in_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_toggle_cats\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_toggle_cats\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_toggle_cats\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/style/\'.$forum_user[\'style\'].\'/style.css\'))
	$style = $ext_info[\'url\'].\'/style/\'.$forum_user[\'style\'].\'/style.css\';
else
	$style = $ext_info[\'url\'].\'/style/Oxygen/style.css\';

$forum_loader->add_css($style,array(\'type\' => \'url\'));
$forum_loader->add_js($ext_info[\'url\'].\'/toggle.js\', array(\'weight\' => 85, \'async\' => true));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'in_forum_pre_cat_head' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_toggle_cats\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_toggle_cats\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_toggle_cats\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (is_array($fancy_toggle_cats_toggled) && in_array($forum_page[\'cat_count\'], $fancy_toggle_cats_toggled))
{
	$classToggled = true;
}
	$has_toggler = true;
	$tpl_temp = forum_trim(ob_get_contents());
	$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp.\'<!-- forum_main -->\', $tpl_main);
	ob_end_clean();
	ob_start();

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'in_row_pre_display' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_toggle_cats\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_toggle_cats\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_toggle_cats\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($has_toggler)
{
	$tpl_temp = forum_trim(ob_get_contents());
	if ($classToggled)
	{
		$tpl_temp = str_replace(\'<div class="main-head">\', \'<div class="main-head catToggled">\', $tpl_temp);
		$tpl_temp = str_replace(\'class="main-content main-category"\', \'style="display: none;" class="main-content main-category"\', $tpl_temp);
	}
	$tpl_temp = str_replace(\'<div class="main-head\', \'<div class="main-head has-toggler\', $tpl_temp);
	$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp.\'<!-- forum_main -->\', $tpl_main);
	ob_end_clean();
	ob_start();
	$classToggled = false;
	$has_toggler = false;
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_forum_image\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_forum_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_forum_image\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($cur_forum[\'f_image\']!=\'\') {
	$f_image = \'<img src="\'. $ext_info[\'url\'].\'/uploads/\'.$cur_forum[\'f_image\'].\'" alt="" />\'; 
	if ($cur_forum[\'f_image_link\']!=\'\') {
		$f_image = \'<a href="http://\'.$cur_forum[\'f_image_link\'].\'">\'.$f_image.\'</a>\';
		if ($cur_forum[\'f_image_info\']!=\'\')
		{
			$D = unserialize($cur_forum[\'f_image_info\']);
		}
		else
		{
			$D = getimagesize($ext_info[\'path\'].\'/uploads/\'.$cur_forum[\'f_image\']);
			$query = array(
				\'UPDATE\'	=> \'forums\',
				\'SET\'		=> \'f_image_info =\\\'\'.$forum_db->escape(serialize($D)).\'\\\'\',
				\'WHERE\'		=> \'id=\'.$cur_forum[\'fid\']
			);
			$forum_db->query_build($query) or error(__FILE__, __LINE__);
		}
		$forum_page[\'item_body\'][\'subject\'][\'title\'] = str_replace(\'<h3 class="hn">\', \'<h3 class="hn" style="margin-right:\'.$D[0].\'px">\', $forum_page[\'item_body\'][\'subject\'][\'title\']);
	}
	
	array_unshift($forum_page[\'item_body\'][\'subject\'], \'<div style="float:\'.(($cur_forum[\'f_image_place\'] == 0) ? \'left\' : \'right\').\';">\'.$f_image.\'</div>\' );
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rg_register_pre_login_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_gravatar\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_gravatar\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_gravatar\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_regs_verify\'] == \'0\') {
				include $ext_info[\'path\'].\'/fancy_gravatar.inc.php\';

				try {
					$fancy_gravatar = new Fancy_gravatar($new_uid, $email1);
					$fancy_gravatar->fetch_gravatar();
				} catch (Exception $exception) {}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'li_login_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_gravatar\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_gravatar\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_gravatar\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($group_id == FORUM_UNVERIFIED) {
				// Get user email
				$fancy_gravatar_query = array(
					\'SELECT\'	=> \'u.email\',
					\'FROM\'		=> \'users AS u\',
					\'WHERE\'		=> \'u.id=\'.$user_id
				);
				$fancy_gravatar_query_result = $forum_db->query_build($fancy_gravatar_query) or error(__FILE__, __LINE__);
				$fancy_gravatar_user_email = $forum_db->result($fancy_gravatar_query_result);

				if (!empty($fancy_gravatar_user_email)) {
					include $ext_info[\'path\'].\'/fancy_gravatar.inc.php\';

					try {
						$fancy_gravatar = new Fancy_gravatar($user_id, $fancy_gravatar_user_email);
						$fancy_gravatar->fetch_gravatar();
					} catch (Exception $exception) {}
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_user_activity\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_user_activity\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_user_activity\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_user_activity = new Fancy_user_activity;
				$fancy_user_activity->activity_login($user_id, get_remote_address());

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'agr_add_edit_group_pre_allow_send_email_checkbox' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($group[\'g_id\'] != FORUM_GUEST):
				if (!isset($fancy_merge_posts)) {
					if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
						require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					} else {
						require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
					}
				}
			?>
				<div class="mf-item">
					<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="merge_posts" value="1"<?php if ($group[\'g_merge_posts\'] == \'1\') echo \' checked="checked"\' ?> /></span>
					<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $fancy_merge_posts[\'Allow dont merge\'] ?></label>
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'agr_add_edit_end_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$merge_posts = (isset($_POST[\'merge_posts\']) && $_POST[\'merge_posts\'] == \'1\') || $is_admin_group ? \'1\' : \'0\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'agr_add_end_qr_add_group' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'INSERT\'] .= \', g_merge_posts\';
			$query[\'VALUES\'] .= \', \'.$merge_posts;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'agr_edit_end_qr_update_group' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SET\'] .= \', g_merge_posts=\'.$merge_posts;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_qr_get_topic_forum_info' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', p.id AS post_id, p.poster_id, p.message, p.posted, p.edited\';
			$query[\'JOINS\'][] = array(
                \'LEFT JOIN\' => \'posts AS p\',
                \'ON\'        => \'t.last_post_id=p.id AND p.poster_id=\'.$forum_user[\'id\']
            );

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', t.last_post_id, t.last_poster, t.last_post\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_pre_add_post' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$post_info[\'fancy_merge_posts_dont_merge\'] = isset($_POST[\'dont_merge\']);
			$post_info[\'fancy_merge_posts_prev_post\'] = $cur_posting;

			if (!isset($fancy_merge_posts)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_pre_optional_fieldset' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($tid != 0) {
				if ($forum_page[\'is_admmod\'] || (isset($forum_user[\'g_merge_posts\']) && intval($forum_user[\'g_merge_posts\'], 10) === 1)) {
					if (!isset($fancy_merge_posts)) {
						if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
							require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
						} else {
							require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
						}
					}

					// Set default status
					if ((isset($_POST[\'dont_merge\'])) || ($forum_user[\'is_admmod\'])) {
						$merge_check_status = \' checked="checked"\';
					} else {
						$merge_check_status = \' \';
					}

					$forum_page[\'checkboxes\'][\'dont_merge\'] = \'<div class="mf-item"><span class="fld-input"><input type="checkbox" id="fld\'.(++$forum_page[\'fld_count\']).\'" name="dont_merge" value="1"\'.$merge_check_status.\' /></span> <label for="fld\'.$forum_page[\'fld_count\'].\'">\'.$fancy_merge_posts[\'Dont Merge\'].\'</label></div>\';
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_spellcheck\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_spellcheck\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_spellcheck\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

?>
				<div id="fancy_spellcheck_block"><span id="fancy_spellcheck_span"><span id="fancy_spellcheck_link">Проверить орфографию</span></span><span id="fancy_check_spelling_ok">ok</span></div>
			<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ps_do_bbcode_replace' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$pattern[] = \'#\\[merge_posts_bbcode\\](.*?)\\[/merge_posts_bbcode\\]#s\';
			$replace[] = \'</p><p class="lastedit merged"><em>$1</em></p><p>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ps_preparse_tags_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$tags_block[] = \'merge_posts_bbcode\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ps_preparse_bbcode_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$tags[] = \'merge_posts_bbcode\';
			$tags_opened[] = \'merge_posts_bbcode\';
			$tags_closed[] = \'merge_posts_bbcode\';
			$tags_fix[] = \'merge_posts_bbcode\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vf_row_pre_item_subject_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_avatars_on_index\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_avatars_on_index\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_avatars_on_index\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($cur_topic[\'moved_to\'] == null) {
    $avatar = \'<img src="\'. get_avatar(array(\'id\' => $cur_topic[\'poster_id\'], \'avatar\' => $cur_topic[\'avatar\'] )) .\'" width="30px" class="list-avatar" />\';
    $forum_page[\'item_body\'][\'info\'][\'lastpost\'] =  str_replace(\'<span class="label">\'.$lang_forum[\'Last post\'].\'</span>\', \'<div class="ul-lastpost"><span class="ulabel">\'.$avatar.\'</span></div>\', $forum_page[\'item_body\'][\'info\'][\'lastpost\']);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vf_qr_get_topics' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_avatars_on_index\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_avatars_on_index\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_avatars_on_index\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', u2.id AS poster_id, u2.avatar, u2.avatar_width, u2.avatar_height, t.last_post_id\';

$query[\'JOINS\'][] = array(
    \'LEFT JOIN\' => \'posts AS p2\',
    \'ON\'            => \'(p2.id = t.last_post_id)\'
);

$query[\'JOINS\'][] = array(
    \'LEFT JOIN\' => \'users AS u2\',
    \'ON\'            => \'(u2.id = p2.poster_id)\'
);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ft_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (FORUM_PAGE == \'viewtopic\') {
	preg_match_all("#\\<div\\sid\\=\\"p(\\d*)\\"#s", $tpl_main, $output);
	foreach($output[1] as $s) {
		$str = substr($tpl_main, strpos($tpl_main, \'<div id="p\'.$s.\'"\'));
		$str = substr($str, 0, strpos($str, \'</p>\'));
		$old = $str;
		$str = str_replace(\'<div class="entry-content">\', \'<div id="post\'.$s.\'" class="entry-content">\', $str);
		$tpl_main = str_replace($old, $str, $tpl_main);
	}
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_row_pre_post_actions_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_user[\'is_guest\'] && ($forum_user[\'is_admmod\'] || ($cur_post[\'poster_id\'] == $forum_user[\'id\'] && $forum_user[\'g_edit_posts\'] == \'1\' && $cur_topic[\'closed\'] == \'0\')))
{
	$content = \'<span class="edit-post\'.(!empty($forum_page[\'post_actions\']) ? \' item1\' : \'\').\'" id="menu\'.$cur_post[\'id\'].\'"><a href="javascript:PUNBB.env.ape.show_menu(\'. $cur_post[\'id\'].\')">\'.$lang_topic[\'Edit\'].\'<span> \'.$lang_topic[\'Post\'].\' \'.forum_number_format($forum_page[\'start_from\'] + $forum_page[\'item_count\']).\'</span></a></span>\';

	if (!isset($forum_page[\'post_actions\'][\'edit\']))
		$forum_page[\'post_actions\'][\'edit\'] = \'<span class="edit-post\'.(empty($forum_page[\'post_actions\']) ? \' first-item\' : \'\').\'"><a href="\'.forum_link($forum_url[\'edit\'], $cur_post[\'id\']).\'">\'.$lang_topic[\'Edit\'].\'<span> \'.$lang_topic[\'Post\'].\' \'.forum_number_format($forum_page[\'start_from\'] + $forum_page[\'item_count\']).\'</span></a></span>\';

	$noscript = \'<noscript>\' . $forum_page[\'post_actions\'][\'edit\'] . \'</noscript>\';

	$forum_page[\'post_actions\'][\'edit\'] = \'<script type="text/javascript">document.write(\\\'\' . $content . \'\\\')</script>\'. $noscript;

}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_user[\'is_admmod\']) {
			 	// number of minutes then converted seconds
				$pepconf=$forum_config[\'o_post_edit_control_duration\'] * 60;
				$difference = time() - $cur_post[\'posted\'];

				if (($difference > $pepconf) || ($forum_config[\'o_post_edit_control_lastedit\'] == 1 && $cur_topic[\'last_post_id\'] != $cur_post[\'id\'])) {
					unset($forum_page[\'post_actions\'][\'edit\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_page[\'post_actions\'][\'fancy_addthis_code\'] = \'
				<span class="fancy-addthis-post\'.(empty($forum_page[\'post_actions\']) ? \' first-item\' : \'\').\'">
					<span class="fancy-addthis-link" data-share-url="\'.forum_link($forum_url[\'post\'], $cur_post[\'id\']).\'">\'.
						$lang_fancy_addthis[\'Share\'].\'
					</span>
				</span>\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_message_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (strpos($_SERVER[\'SCRIPT_FILENAME\'], \'extensions/ajax_post_edit/edit.php\') !== false)
	exit($message);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_csrf_confirm_form_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'ajax_post_edit\',
\'path\'			=> FORUM_ROOT.\'extensions/ajax_post_edit\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/ajax_post_edit\',
\'dependencies\'	=> array (
\'pun_jquery\'	=> array(
\'id\'				=> \'pun_jquery\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_jquery\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_jquery\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (strpos($_SERVER[\'SCRIPT_FILENAME\'], \'extensions/ajax_post_edit/edit.php\') !== false)
	exit(\'csrf_confirm:\'.$lang_common[\'CSRF token mismatch\'].\':\'.generate_form_token($ext_info[\'url\'].\'/edit.php\'));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_pass_key_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$lang_common[\'Submit\'] .= Fancy_stop_spam::SUBMIT_MARK;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_pass_key_form_submitted' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// CHECK SUBMIT VALUE
			if ($forum_config[\'o_fancy_stop_spam_check_submit\'] == \'1\') {
				if ($_POST[\'update\'] != $lang_common[\'Submit\'].Fancy_stop_spam::SUBMIT_MARK) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_ACTIVATE_SUBMIT, $forum_user[\'id\'], get_remote_address());
					message($lang_fancy_stop_spam[\'Activate bot message\']);
				}
			}

			// CHECK HONEY FIELDS
			if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\') {
				if (!isset($_POST[\'form_honey_key_id\'])) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_ACTIVATE_HONEYPOT_EMPTY, $forum_user[\'id\'], get_remote_address());
					message($lang_fancy_stop_spam[\'Activate bot message\']);
				} else {
					$fancy_stop_spam_fullkey = \'email_confirm_xxx_\'.forum_htmlencode(forum_trim($_POST[\'form_honey_key_id\']));
					if (!empty($_POST[$fancy_stop_spam_fullkey])) {
						$fancy_stop_spam = Fancy_stop_spam::singleton();
						$fancy_stop_spam->log(Fancy_stop_spam::LOG_ACTIVATE_HONEYPOT, $forum_user[\'id\'], get_remote_address());
						message($lang_fancy_stop_spam[\'Activate bot message\']);
					}
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_pass_key_pre_fieldset' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\'):
			?>
				<div class="hidden">
					<input type="hidden" name="form_honey_key_id" value="<?php echo $fancy_stop_spam_post_key_id; ?>" />
					<input type="hidden" name="form_fancy_stop_spam_time" value="<?php echo time(); ?>" />
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_pass_key_pre_new_password' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\'):
			?>
				<div class="sf-set set hidden">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_fancy_stop_spam[\'Honey field\'] ?></span>
						<small><?php echo $lang_fancy_stop_spam[\'Honey field help\'] ?></small></label><br/>
						<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="email_confirm_xxx_<?php echo $fancy_stop_spam_post_key_id; ?>" size="35" autocomplete="off" /></span>
					</div>
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rg_register_group_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$lang_profile[\'Register\'] .= Fancy_stop_spam::SUBMIT_MARK;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rg_register_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\') {
				$fancy_stop_spam_post_key_id = uniqid();
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rg_register_pre_group' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\'):
			?>
				<div class="hidden">
					<input type="hidden" name="form_honey_key_id" value="<?php echo $fancy_stop_spam_post_key_id; ?>" />
					<input type="hidden" name="form_fancy_stop_spam_time" value="<?php echo time(); ?>" />
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rg_register_pre_password' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\'):
			?>
				<div class="sf-set set hidden">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_fancy_stop_spam[\'Honey field\'] ?></span>
						<small><?php echo $lang_fancy_stop_spam[\'Honey field help\'] ?></small></label><br/>
						<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="email_confirm_xxx_<?php echo $fancy_stop_spam_post_key_id; ?>" size="35" autocomplete="off" /></span>
					</div>
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rg_register_form_submitted' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Check logs for repeated failed register attempts
			$fancy_stop_spam = Fancy_stop_spam::singleton();
			if (TRUE === $fancy_stop_spam->check_register_honeypot_repeated(get_remote_address())) {
				$fancy_stop_spam->log(Fancy_stop_spam::LOG_REGISTER_HONEYPOT_REPEATED, $forum_user[\'id\'], get_remote_address());
				message($lang_fancy_stop_spam[\'Register bot message\']);
			}

			// CHECK HONEY FIELDS
			if ($forum_config[\'o_fancy_stop_spam_register_form_honeypot\'] == \'1\') {
				if (!isset($_POST[\'form_honey_key_id\'])) {
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_REGISTER_HONEYPOT_EMPTY, $forum_user[\'id\'], get_remote_address());
					message($lang_fancy_stop_spam[\'Register bot message\']);
				} else {
					$fancy_stop_spam_fullkey = \'email_confirm_xxx_\'.forum_htmlencode(forum_trim($_POST[\'form_honey_key_id\']));
					if (!empty($_POST[$fancy_stop_spam_fullkey])) {
						$fancy_stop_spam->log(Fancy_stop_spam::LOG_REGISTER_HONEYPOT, $forum_user[\'id\'], get_remote_address());
						message($lang_fancy_stop_spam[\'Register bot message\']);
					}
				}
			}

			// CHECK FORM FILL TIME
			if ($forum_config[\'o_fancy_stop_spam_register_form_timeout\'] == \'1\') {
				if (!isset($_POST[\'form_fancy_stop_spam_time\'])) {
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_REGISTER_TIMEOUT, $forum_user[\'id\'], get_remote_address());
					message($lang_fancy_stop_spam[\'Register bot message\']);
				} else {
					$fancy_stop_spam_form_fill_time = time() - intval($_POST[\'form_fancy_stop_spam_time\'], 10);
					if ($fancy_stop_spam_form_fill_time < Fancy_stop_spam::FORM_FILL_MIN_TIME) {
						$fancy_stop_spam->log(Fancy_stop_spam::LOG_REGISTER_TIMEOUT, $forum_user[\'id\'], get_remote_address(), $fancy_stop_spam_form_fill_time);
						$errors[] = $lang_fancy_stop_spam[\'Register bot timeout message\'];
					}
				}
			}

			// CHECK TIMEZONE
			if ($forum_config[\'o_fancy_stop_spam_register_form_timezone\'] == \'1\') {
				if (isset($_POST[\'timezone\']) && $_POST[\'timezone\'] == \'-12\') {
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_REGISTER_TIMEZONE, $forum_user[\'id\'], get_remote_address(), intval($_POST[\'timezone\'], 10));
					message($lang_fancy_stop_spam[\'Register bot timezone message\']);
				}
			}

			// CHECK SUBMIT VALUE
			if ($forum_config[\'o_fancy_stop_spam_check_submit\'] == \'1\') {
				if ($_POST[\'register\'] != $lang_profile[\'Register\'].Fancy_stop_spam::SUBMIT_MARK) {
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_REGISTER_SUBMIT, $forum_user[\'id\'], get_remote_address());
					message($lang_fancy_stop_spam[\'Post bot message\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'rg_register_end_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (empty($errors)) {
				if ($forum_config[\'o_fancy_stop_spam_register_form_sfs_email\'] == \'1\' || $forum_config[\'o_fancy_stop_spam_register_form_sfs_ip\'] == \'1\') {
			 		$fancy_stop_spam = Fancy_stop_spam::singleton();
    				$fancy_stop_spam->check_by_sfs($errors, array(\'email\' => $email1, \'ip\'	=> get_remote_address()));
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_req_info_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$lang_post[\'Submit reply\'] .= Fancy_stop_spam::SUBMIT_MARK;
			$lang_post[\'Submit topic\'] .= Fancy_stop_spam::SUBMIT_MARK;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_quickpost_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$lang_common[\'Submit\'] .= Fancy_stop_spam::SUBMIT_MARK;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_post_form_honeypot\'] == \'1\') {
				$fancy_stop_spam_post_key_id = uniqid();
				$forum_page[\'hidden_fields\'][\'form_honey_key_id\'] = \'<input type="hidden" name="form_honey_key_id" value="\'.$fancy_stop_spam_post_key_id.\'" />\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_quickpost_pre_display' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_post_form_honeypot\'] == \'1\') {
				$fancy_stop_spam_post_key_id = uniqid();
				$forum_page[\'hidden_fields\'][\'form_honey_key_id\'] = \'<input type="hidden" name="form_honey_key_id" value="\'.$fancy_stop_spam_post_key_id.\'" />\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_pre_post_contents' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_post_form_honeypot\'] == \'1\'):
			?>
				<div class="sf-set set hidden">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_fancy_stop_spam[\'Honey field\'] ?></span>
						<small><?php echo $lang_fancy_stop_spam[\'Honey field help\'] ?></small></label><br/>
						<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="email_confirm_xxx_<?php echo $fancy_stop_spam_post_key_id; ?>" size="35" autocomplete="off" /></span>
					</div>
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_bbcode\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_bbcode\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_bbcode\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'pun_bbcode_enabled\'])
			{
				define(\'PUN_BBCODE_BAR_INCLUDE\', 1);
				include $ext_info[\'path\'].\'/bar.php\';
				$pun_bbcode_bar = new Pun_bbcode;
				$pun_bbcode_bar->render();
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_quickpost_pre_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_post_form_honeypot\'] == \'1\'):
			?>
				<div class="sf-set set hidden">
					<div class="sf-box text">
						<label><span><?php echo $lang_fancy_stop_spam[\'Honey field\'] ?></span>
						<small><?php echo $lang_fancy_stop_spam[\'Honey field help\'] ?></small></label><br/>
						<span class="fld-input"><input type="text" name="email_confirm_xxx_<?php echo $fancy_stop_spam_post_key_id; ?>" size="35" autocomplete="off" /></span>
					</div>
				</div>
			<?php
			endif;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_spellcheck\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_spellcheck\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_spellcheck\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

?>
				<div id="fancy_spellcheck_block"><span id="fancy_spellcheck_span"><span id="fancy_spellcheck_link">Проверить орфографию</span></span><span id="fancy_check_spelling_ok">ok</span></div>
			<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_form_submitted' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// CHECK HONEY FIELDS
			if ($forum_config[\'o_fancy_stop_spam_post_form_honeypot\'] == \'1\' && !isset($_POST[\'preview\'])) {
				if (!isset($_POST[\'form_honey_key_id\'])) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_POST_HONEYPOT_EMPTY, $forum_user[\'id\'], get_remote_address());
					message($lang_fancy_stop_spam[\'Post bot message\']);
				} else {
					$fancy_stop_spam_fullkey = \'email_confirm_xxx_\'.forum_htmlencode(forum_trim($_POST[\'form_honey_key_id\']));
					if (!empty($_POST[$fancy_stop_spam_fullkey])) {
						$fancy_stop_spam = Fancy_stop_spam::singleton();
						$fancy_stop_spam->log(Fancy_stop_spam::LOG_POST_HONEYPOT, $forum_user[\'id\'], get_remote_address());
						$errors[] = $lang_fancy_stop_spam[\'Post bot message\'];
					}
				}
			}

			// CHECK SUBMIT VALUE
			if ($forum_config[\'o_fancy_stop_spam_check_submit\'] == \'1\' && !isset($_POST[\'preview\']) && $forum_user[\'is_guest\']) {
				if (($_POST[\'submit\'] != $lang_post[\'Submit reply\'].Fancy_stop_spam::SUBMIT_MARK) ||
					($_POST[\'submit\'] != $lang_post[\'Submit topic\'].Fancy_stop_spam::SUBMIT_MARK)) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_POST_SUBMIT, $forum_user[\'id\'], get_remote_address());
					message($lang_fancy_stop_spam[\'Post bot message\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_modify_main_menu' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_check_signature\'] == \'1\' && $forum_config[\'o_signatures\'] == \'1\') {
				if ($forum_user[\'num_posts\'] < Fancy_stop_spam::NUMBER_POSTS_FOR_SIGNATURE) {
					// HIDE SIGNATURE LINK
					if (isset($forum_page[\'main_menu\'][\'signature\'])) {
						$forum_page[\'main_menu\'][\'signature\'] = \'<li\'.(($section == \'signature\') ? \' class="active hidden"\' : \'\').\' style="display: none;"><a href="\'.forum_link($forum_url[\'profile_signature\'], $id).\'"><span>\'.$lang_profile[\'Section signature\'].\'</span></a></li>\';
					}
				}
			}

			// ADD Antispam section to user profile
			if ($forum_user[\'g_id\'] == FORUM_ADMIN) {
				if (isset($forum_page[\'main_menu\'][\'admin\'])) {
					array_insert($forum_page[\'main_menu\'],
						\'admin\',
						\'<li\'.(($section == \'fancy_stop_spam_profile_section\') ?
						\' class="active"\'
						: \'\').\'><a href="\'.forum_link($forum_url[\'fancy_stop_spam_profile_section\'], $id).\'">
						<span>\'.$lang_fancy_stop_spam[\'Section antispam\'].\'</span>
					</a></li>\', \'fancy_stop_spam_profile_section\');
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_user_activity\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_user_activity\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_user_activity\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_user_activity)) {
					if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
						require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					} else {
						require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
					}
				}

				if (isset($forum_page[\'main_menu\'][\'admin\'])) {
					array_insert($forum_page[\'main_menu\'], \'admin\', \'<li\'.(($section == \'activity\') ? \' class="active"\' : \'\').\'><a href="\'.forum_link($forum_url[\'fancy_user_activity\'], $id).\'"><span>\'.$lang_fancy_user_activity[\'Section activity\'].\'</span></a></li>\', \'fancy_user_activity\');
				} else {
					$forum_page[\'main_menu\'][\'fancy_user_activity\'] = \'<li\'.(($section == \'activity\') ? \' class="active"\' : \'\').\'><a href="\'.forum_link($forum_url[\'fancy_user_activity\'], $id).\'"><span>\'.$lang_fancy_user_activity[\'Section activity\'].\'</span></a></li>\';
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_signature_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_check_signature\'] == \'1\') {
				if ($forum_user[\'num_posts\'] < Fancy_stop_spam::NUMBER_POSTS_FOR_SIGNATURE) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					$fancy_stop_spam->log(Fancy_stop_spam::LOG_SIGNATURE_HIDDEN, $forum_user[\'id\'], get_remote_address());
					$fancy_stop_spam->mark_user_as_spammer($forum_user[\'id\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_add_post_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $forum_user;

			if ($forum_config[\'o_fancy_stop_spam_check_identical_posts\'] == \'1\') {
				if (!$forum_user[\'is_admmod\'] && utf8_strlen($post_info[\'message\']) > Fancy_stop_spam::IDENTICAL_POST_MIN_LENGTH &&
					$forum_user[\'num_posts\'] < Fancy_stop_spam::IDENTICAL_USER_MAX_POSTS_FOR_CHECK) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					$fancy_stop_spam->identical_message_add($post_info[\'poster_id\'], $new_pid, sha1($post_info[\'message\']), $post_info[\'posted\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;

				$fancy_alerts->update_topic_alerts($post_info[\'topic_id\'], $new_pid, $post_info[\'posted\'], $post_info[\'poster_id\']);
				$fancy_alerts->add_quote_alerts($post_info[\'topic_id\'], $new_pid, $post_info[\'message\']);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_add_topic_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $forum_user;

			if ($forum_config[\'o_fancy_stop_spam_check_identical_posts\'] == \'1\') {
				if (!$forum_user[\'is_admmod\'] && utf8_strlen($post_info[\'message\']) > Fancy_stop_spam::IDENTICAL_POST_MIN_LENGTH &&
					$forum_user[\'num_posts\'] < Fancy_stop_spam::IDENTICAL_USER_MAX_POSTS_FOR_CHECK) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					$fancy_stop_spam->identical_message_add($post_info[\'poster_id\'], $new_pid, sha1($post_info[\'message\']), $post_info[\'posted\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;

				// CREATE TOPIC ALERTS
				$fancy_alerts->add_new_topic_alerts($post_info[\'poster_id\'], $new_tid, $post_info[\'posted\']);

				// CREATE POST ALERTS
				$fancy_alerts->add_quote_alerts($new_tid, $new_pid, $post_info[\'message\']);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_end_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_config[\'o_fancy_stop_spam_check_identical_posts\'] == \'1\') {
				if (!$forum_user[\'is_admmod\'] &&
					(utf8_strlen($message) > Fancy_stop_spam::IDENTICAL_POST_MIN_LENGTH) &&
					($forum_user[\'num_posts\'] < Fancy_stop_spam::IDENTICAL_USER_MAX_POSTS_FOR_CHECK)) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					if ($fancy_stop_spam->identical_message_check($forum_user[\'id\'], sha1($message))) {
						$fancy_stop_spam->log(Fancy_stop_spam::LOG_IDENTICAL_POST, $forum_user[\'id\'], get_remote_address());
						$errors[] = $lang_fancy_stop_spam[\'Post Identical message\'];
					}
				}
			}

			$fancy_stop_spam = Fancy_stop_spam::singleton();
			$check_max_links_result = $fancy_stop_spam->max_links_check($message);

			if ($check_max_links_result !== TRUE) {
				$errors[] = $check_max_links_result;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_end_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_stop_spam = Fancy_stop_spam::singleton();
			$check_max_links_result = $fancy_stop_spam->max_links_check($message);

			if ($check_max_links_result !== TRUE) {
				$errors[] = $check_max_links_result;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_new_section' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($section == \'fancy_stop_spam_profile_section\') {
				if ($forum_user[\'g_id\'] != FORUM_ADMIN) {
					message($lang_common[\'Bad request\']);
				}

				$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;

				// Setup breadcrumbs
				$forum_page[\'crumbs\'] = array(
					array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
					array(sprintf($lang_profile[\'Users profile\'], $user[\'username\']), forum_link($forum_url[\'user\'], $id)),
					$lang_fancy_stop_spam[\'Section antispam\'],
				);

				define(\'FORUM_PAGE\', \'profile-fancy_stop_spam_profile_section\');
				require FORUM_ROOT.\'header.php\';
				ob_start();
?>
				<div class="main-subhead">
					<h2 class="hn">
						<span><?php printf(($forum_user[\'id\'] == $id) ?
							$lang_fancy_stop_spam[\'Section antispam welcome\'] :
							$lang_fancy_stop_spam[\'Section antispam welcome user\'], forum_htmlencode($user[\'username\'])) ?>
						</span>
					</h2>
				</div>
				<div class="main-content main-frm">
					<div class="ct-group">
						<?php
							$fancy_stop_spam = Fancy_stop_spam::singleton();
							$fancy_stop_spam->print_user_status($user);
						?>
					</div>
					<?php
				        echo $fancy_stop_spam->print_logs($user[\'id\']);
					?>
				</div>
<?php
				$tpl_temp = forum_trim(ob_get_contents());
				$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp, $tpl_main);
				ob_end_clean();
				require FORUM_ROOT.\'footer.php\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_user_activity\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_user_activity\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_user_activity\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($section == \'activity\') {
					// Setup breadcrumbs
					$forum_page[\'crumbs\'] = array(
						array($forum_config[\'o_board_title\'], forum_link($forum_url[\'index\'])),
						array(sprintf($lang_profile[\'Users profile\'], $user[\'username\']), forum_link($forum_url[\'user\'], $id)),
						array(sprintf($lang_fancy_user_activity[\'Section activity\']), forum_link($forum_url[\'fancy_user_activity\'], $id)),
					);

					define(\'FORUM_PAGE\', \'profile-activity\');
					require FORUM_ROOT.\'header.php\';

					// START SUBST - <!-- forum_main -->
					ob_start();
?>
					<div class="main-subhead">
						<h2 class="hn"><span><?php printf(($forum_user[\'id\'] == $id) ? $lang_fancy_user_activity[\'Activity welcome\'] : $lang_fancy_user_activity[\'Activity welcome user\'], forum_htmlencode($user[\'username\'])) ?></span></h2>
					</div>
					<div class="main-content main-frm">
<?php
					$fancy_user_activity = new Fancy_user_activity;
					$fancy_user_activity->show_activity();
?>
					</div>
<?php

					$tpl_temp = forum_trim(ob_get_contents());
					$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp, $tpl_main);
					ob_end_clean();
					// END SUBST - <!-- forum_main -->

					require FORUM_ROOT.\'footer.php\';
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ca_fn_generate_admin_menu_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $lang_fancy_stop_spam;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ca_fn_generate_admin_menu_new_link' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'g_id\'] == FORUM_ADMIN) {
				$fancy_stop_spam_menu_element = \'<li class="\'.((FORUM_PAGE_SECTION == \'fancy_stop_spam\') ? \'active\' : \'normal\').
						((empty($forum_page[\'admin_menu\'])) ? \' first-item\' : \'\').\'">
						<a href="\'.forum_link($forum_url[\'fancy_stop_spam_admin_section\']).\'">
							<span>\'.$lang_fancy_stop_spam["Admin section antispam"].\'</span>
						</a>
					</li>\';

				array_insert($forum_page[\'admin_menu\'], \'extensions_manage\', $fancy_stop_spam_menu_element, \'fancy_stop_spam\');
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ca_fn_generate_admin_menu_new_sublink' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'is_admmod\'] && FORUM_PAGE_SECTION == \'fancy_stop_spam\') {
				$forum_page[\'admin_submenu\'][\'fancy_stop_spam_logs\'] = \'
					<li class="\'.((FORUM_PAGE == \'admin-fancy_stop_spam_logs\') ? \'active\' : \'normal\').
						((empty($forum_page[\'admin_submenu\'])) ? \' first-item\' : \'\').\'">
						<a href="\'.forum_link($forum_url[\'fancy_stop_spam_admin_logs\']).\'">\'.$lang_fancy_stop_spam["Admin submenu logs"].\'</a>
					</li>\';

				$forum_page[\'admin_submenu\'][\'fancy_stop_spam_new_users\'] = \'
					<li class="\'.((FORUM_PAGE == \'admin-fancy_stop_spam_new_users\') ? \'active\' : \'normal\').
						((empty($forum_page[\'admin_submenu\'])) ? \' first-item\' : \'\').\'">
						<a href="\'.forum_link($forum_url[\'fancy_stop_spam_admin_new_users\']).\'">\'.$lang_fancy_stop_spam["Admin submenu new users"].\'</a>
					</li>\';

				$forum_page[\'admin_submenu\'][\'fancy_stop_spam_suspicious_users\'] = \'
					<li class="\'.((FORUM_PAGE == \'admin-fancy_stop_spam_suspicious_users\') ? \'active\' : \'normal\').
						((empty($forum_page[\'admin_submenu\'])) ? \' first-item\' : \'\').\'">
						<a href="\'.forum_link($forum_url[\'fancy_stop_spam_admin_suspicious_users\']).\'">\'.$lang_fancy_stop_spam["Admin submenu suspicious users"].\'</a>
					</li>\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_delete_user_pre_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!empty($forum_config[\'o_fancy_stop_spam_sfs_api_key\']) && $forum_config[\'o_regs_verify\'] == \'1\') {
			?>
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box checkbox">
						<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="fancy_stop_spam_report_to_sfs" value="1" /></span>
						<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_fancy_stop_spam[\'Report to sfs\'] ?></label>
					</div>
				</div>
			<?php
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_delete_user_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($_POST[\'fancy_stop_spam_report_to_sfs\']) && $forum_config[\'o_regs_verify\'] == \'1\') {
				if (!empty($forum_config[\'o_fancy_stop_spam_sfs_api_key\'])) {
					$fancy_stop_spam = Fancy_stop_spam::singleton();
					$fancy_stop_spam->send_spam_data_to_sfs($user[\'username\'], $user[\'email\'], $user[\'registration_ip\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_settings_validation' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Validate option \'quote beginning of message\'
			if (!isset($_POST[\'form\'][\'pun_pm_long_subject\']) || $_POST[\'form\'][\'pun_pm_long_subject\'] != \'1\')
				$form[\'pun_pm_long_subject\'] = \'0\';
			else
				$form[\'pun_pm_long_subject\'] = \'1\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_bbcode\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_bbcode\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_bbcode\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form[\'pun_bbcode_enabled\'] = (!isset($_POST[\'form\'][\'pun_bbcode_enabled\']) || $_POST[\'form\'][\'pun_bbcode_enabled\'] != \'1\') ? \'0\' : \'1\';
			$form[\'pun_bbcode_use_buttons\'] = (!isset($_POST[\'form\'][\'pun_bbcode_use_buttons\']) || $_POST[\'form\'][\'pun_bbcode_use_buttons\'] != \'1\') ? \'0\' : \'1\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_settings_email_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Per-user option \'quote beginning of message\'
if ($forum_config[\'p_message_bbcode\'] == \'1\')
{
	if (!isset($lang_pun_pm))
	{
		if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
			include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
		else
			include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
	}

	$forum_page[\'item_count\'] = 0;

?>
			<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
				<legend class="group-legend"><strong><?php echo $lang_pun_pm[\'PM settings\'] ?></strong></legend>
				<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<legend><span><?php echo $lang_pun_pm[\'Private messages\'] ?></span></legend>
					<div class="mf-box">
						<div class="mf-item">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_pm_long_subject]" value="1"<?php if ($user[\'pun_pm_long_subject\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_pm[\'Begin message quote\'] ?></label>
						</div>
					</div>
				</fieldset>
<?php ($hook = get_hook(\'pun_pm_pf_change_details_settings_pre_pm_settings_fieldset_end\')) ? eval($hook) : null; ?>
			</fieldset>
<?php
}
else
	echo "\\t\\t\\t".\'<input type="hidden" name="form[pun_pm_long_subject]" value="\'.$user[\'pun_pm_long_subject\'].\'" />\'."\\n";

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_bbcode\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_bbcode\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_bbcode\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
				include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
			else
				include $ext_info[\'path\'].\'/lang/English/pun_bbcode.php\';

			$forum_page[\'item_count\'] = 0;
?>
				<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box checkbox">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_bbcode_enabled]" value="1"<?php if ($user[\'pun_bbcode_enabled\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><span><?php echo $lang_pun_bbcode[\'Pun BBCode Bar\'] ?></span> <?php echo $lang_pun_bbcode[\'Notice BBCode Bar\'] ?></label>
						</div>
					</div>
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box checkbox">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_bbcode_use_buttons]" value="1"<?php if ($user[\'pun_bbcode_use_buttons\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_bbcode[\'BBCode Graphical buttons\'] ?></label>
						</div>
					</div>
				</fieldset>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aop_features_avatars_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Admin options
if (!isset($lang_pun_pm))
{
	if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
		include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
	else
		include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
}

$forum_page[\'group_count\'] = $forum_page[\'item_count\'] = 0;

?>
			<div class="content-head">
				<h2 class="hn"><span><?php echo $lang_pun_pm[\'Features title\'] ?></span></h2>
			</div>
			<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
				<legend class="group-legend"><span><?php echo $lang_pun_pm[\'PM settings\'] ?></span></legend>
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_pun_pm[\'Inbox limit\'] ?></span><small><?php echo $lang_pun_pm[\'Inbox limit info\'] ?></small></label><br />
						<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[pun_pm_inbox_size]" size="6" maxlength="6" value="<?php echo $forum_config[\'o_pun_pm_inbox_size\'] ?>" /></span>
					</div>
				</div>
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box text">
						<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_pun_pm[\'Outbox limit\'] ?></span><small><?php echo $lang_pun_pm[\'Outbox limit info\'] ?></small></label><br />
						<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="form[pun_pm_outbox_size]" size="6" maxlength="6" value="<?php echo $forum_config[\'o_pun_pm_outbox_size\'] ?>" /></span>
					</div>
				</div>
				<fieldset class="mf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<legend><span><?php echo $lang_pun_pm[\'Navigation links\'] ?></span></legend>
					<div class="mf-box">
						<div class="mf-item">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_pm_show_new_count]" value="1"<?php if ($forum_config[\'o_pun_pm_show_new_count\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_pm[\'Snow new count\'] ?></label>
						</div>
						<div class="mf-item">
							<span class="fld-input"><input type="checkbox" id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" name="form[pun_pm_show_global_link]" value="1"<?php if ($forum_config[\'o_pun_pm_show_global_link\'] == \'1\') echo \' checked="checked"\' ?> /></span>
							<label for="fld<?php echo $forum_page[\'fld_count\'] ?>"><?php echo $lang_pun_pm[\'Show global link\'] ?></label>
						</div>
					</div>
				</fieldset>
<?php ($hook = get_hook(\'pun_pm_aop_features_pre_pm_settings_fieldset_end\')) ? eval($hook) : null; ?>
			</fieldset>
<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\'))
					include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\';
				else
					include $ext_info[\'path\'].\'/lang/English.php\';
			?>

			<div class="content-head">
				<h2 class="hn">
					<span><?php echo $lang_post_edit_control[\'Edit period\']; ?></span>
				</h2>
			</div>
			<fieldset class="frm-group group1">
				<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
					<div class="sf-box text">
						<span class="fld-input">
							<input id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" type="text" value="<?php echo $forum_config[\'o_post_edit_control_duration\']; ?>" maxlength="6" size="6" name="form[edit_control_duration]"/><br />
						</span>
						<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
							<span><?php echo $lang_post_edit_control[\'Duration\']; ?></span>
							<small><?php echo $lang_post_edit_control[\'Duration note\']; ?></small>
						</label>
					</div>
					<div class="sf-box checkbox">
						<span class="fld-input">
							<?php $checked = (1==$forum_config[\'o_post_edit_control_lastedit\']) ? \'checked="checked"\' : \'\' ?>
							<input id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" type="checkbox" name="form[edit_control_lastedit]" value="1" <?php echo $checked ?> /><br />
						</span>
						<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
							<span><?php echo $lang_post_edit_control[\'Block edit\']; ?></span>
							<small><?php echo $lang_post_edit_control[\'Block edit desc\']; ?></small>
						</label>
					</div>
					<div class="sf-box checkbox">
						<span class="fld-input">
							<?php $checked = (1==$forum_config[\'o_post_edit_control_lastreply\']) ? \'checked="checked"\' : \'\' ?>
							<input id="fld<?php echo ++$forum_page[\'fld_count\'] ?>" type="checkbox" name="form[edit_control_lastreply]" value="1" <?php echo $checked ?> /> <br />
						</span>
						<label for="fld<?php echo $forum_page[\'fld_count\'] ?>">
							<span><?php echo $lang_post_edit_control[\'Last reply edit\']; ?></span>
							<small><?php echo $lang_post_edit_control[\'Last reply edit desc\']; ?></small>
						</label>
					</div>
				</div>
			</fieldset>
			<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_delete_user_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query = array(
				\'DELETE\'	=> \'pun_pm_messages\',
				\'WHERE\'		=> \'receiver_id = \'.$user_id.\' AND deleted_by_sender = 1\'
			);
			$result = $forum_db->query_build($query) or error(__FILE__, __LINE__);

			$query = array(
				\'UPDATE\'	=> \'pun_pm_messages\',
				\'SET\'		=> \'deleted_by_receiver = 1\',
				\'WHERE\'		=> \'receiver_id = \'.$user_id
			);
			$result = $forum_db->query_build($query) or error(__FILE__, __LINE__);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;
				$fancy_alerts->on_del_user($user_id);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_row_pre_post_contacts_merge' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $lang_pun_pm;

			if (!isset($lang_pun_pm))
			{
				if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
					include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				else
					include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
			}

			($hook = get_hook(\'pun_pm_pre_post_contacts_add\')) ? eval($hook) : null;

			// Links \'Send PM\' near posts
			if (!$forum_user[\'is_guest\'] && $cur_post[\'poster_id\'] > 1 && $forum_user[\'id\'] != $cur_post[\'poster_id\'])
				$forum_page[\'post_contacts\'][\'PM\'] = \'<span class="contact"><a title="\'.$lang_pun_pm[\'Send PM\'].\'" href="\'.forum_link($forum_url[\'pun_pm_post_link\'], $cur_post[\'poster_id\']).\'">\'.$lang_pun_pm[\'PM\'].\'</a></span>\';

			($hook = get_hook(\'pun_pm_after_post_contacts_add\')) ? eval($hook) : null;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_generate_navlinks_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Link \'PM\' in the main nav menu
			if (isset($links[\'profile\']) && $forum_config[\'o_pun_pm_show_global_link\'])
			{
				global $lang_pun_pm;

				if (!isset($lang_pun_pm))
				{
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}

				if (\'pun_pm\' == substr(FORUM_PAGE, 0, 6))
					$links[\'profile\'] = str_replace(\' class="isactive"\', \'\', $links[\'profile\']);

				($hook = get_hook(\'pun_pm_pre_main_navlinks_add\')) ? eval($hook) : null;

				$links[\'profile\'] .= "\\n\\t\\t".\'<li id="nav_pun_pm"\'.(\'pun_pm\' == substr(FORUM_PAGE, 0, 6) ? \' class="isactive"\' : \'\').\'><a href="\'.forum_link($forum_url[\'pun_pm\']).\'"><span>\'.$lang_pun_pm[\'Private messages\'].\'</span></a></li>\';

				($hook = get_hook(\'pun_pm_after_main_navlinks_add\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_view_details_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Link in the profile
			if (!$forum_user[\'is_guest\'] && $forum_user[\'id\'] != $user[\'id\'])
			{
				if (!isset($lang_pun_pm))
				{
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}

				($hook = get_hook(\'pun_pm_pre_profile_user_contact_add\')) ? eval($hook) : null;

				$forum_page[\'user_contact\'][\'PM\'] = \'<li><span>\'.$lang_pun_pm[\'PM\'].\': <a href="\'.forum_link($forum_url[\'pun_pm_post_link\'], $id).\'">\'.$lang_pun_pm[\'Send PM\'].\'</a></span></li>\';

				($hook = get_hook(\'pun_pm_after_profile_user_contact_add\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_about_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// Link in the profile
			if (!$forum_user[\'is_guest\'] && $forum_user[\'id\'] != $user[\'id\'])
			{
				if (!isset($lang_pun_pm))
				{
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\'))
						include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					else
						include $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}

				($hook = get_hook(\'pun_pm_pre_profile_user_contact_add\')) ? eval($hook) : null;

				$forum_page[\'user_contact\'][\'PM\'] = \'<li><span>\'.$lang_pun_pm[\'PM\'].\': <a href="\'.forum_link($forum_url[\'pun_pm_post_link\'], $id).\'">\'.$lang_pun_pm[\'Send PM\'].\'</a></span></li>\';

				($hook = get_hook(\'pun_pm_after_profile_user_contact_add\')) ? eval($hook) : null;
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_page[\'own_profile\'] || $forum_user[\'g_id\'] == FORUM_ADMIN) {
					if (!isset($lang_fancy_alerts)) {
						if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
							require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
						} else {
							require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
						}
					}
					$forum_page[\'user_activity\'][\'search_fancy_alerts_topics\'] = \'<li\'.(empty($forum_page[\'user_activity\']) ? \' class="first-item"\' : \'\').\'><a href="\'.forum_link($forum_url[\'fancy_alerts_search_my_alerts_topics\'], $id).\'">\'.(($forum_page[\'own_profile\']) ? $lang_fancy_alerts[\'View your topics alerts\'] : sprintf($lang_fancy_alerts[\'View user topics alerts\'], forum_htmlencode($user[\'username\']))).\'</a></li>\';
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  're_rewrite_rules' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_pm\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_pm\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_pm\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$forum_rewrite_rules[\'/^pun_pm[\\/_-]?send(\\.html?|\\/)?$/i\'] = \'misc.php?action=pun_pm_send\';
			$forum_rewrite_rules[\'/^pun_pm[\\/_-]?compose[\\/_-]?([0-9]+)(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm&pmpage=compose&receiver_id=$1\';
			$forum_rewrite_rules[\'/^pun_pm(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm\';
			$forum_rewrite_rules[\'/^pun_pm[\\/_-]?([0-9a-z]+)(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm&pmpage=$1\';
			$forum_rewrite_rules[\'/^pun_pm[\\/_-]?([0-9a-z]+)[\\/_-]?(p|page\\/)([0-9]+)(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm&pmpage=$1&p=$3\';
			$forum_rewrite_rules[\'/^pun_pm[\\/_-]?([0-9a-z]+)[\\/_-]?([0-9]+)(\\.html?|\\/)?$/i\'] = \'misc.php?section=pun_pm&pmpage=$1&message_id=$2\';

			($hook = get_hook(\'pun_pm_after_rewrite_rules_set\')) ? eval($hook) : null;

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_edit_forum_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_forum_image\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_forum_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_forum_image\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\'))
	require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\';
else
	require $ext_info[\'path\'].\'/lang/English.php\';

if (isset($_GET[\'f\']) && file_exists($ext_info[\'path\'].\'/uploads/\'.$_GET[\'f\'])){
	if (!isset($_POST[\'csrf_token\']) && (!isset($_GET[\'csrf_token\']) || $_GET[\'csrf_token\'] !== generate_form_token(\'del_banner\'.$forum_user[\'id\'])))
		csrf_confirm_form();
	unlink($ext_info[\'path\'].\'/uploads/\'.$_GET[\'f\']);
	$query = array(
		\'UPDATE\'	=> \'forums\',
		\'SET\'		=> \'f_image=\\\'\\\', f_image_info=\\\'\\\'\',
		\'WHERE\'		=> \'id=\'.$forum_id
	);
	$forum_db->query_build($query) or error(__FILE__, __LINE__);
	$cur_forum[\'f_image\'] = \'\';
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_edit_forum_pre_permissions_part' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_forum_image\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_forum_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_forum_image\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$form_head_action = forum_link($forum_url[\'admin_forums\']).\'?edit_forum=\'.$forum_id; 
$find_form_head = \'<form method="post" class="frm-form" accept-charset="utf-8" action="\'.$form_head_action.\'">\';
$replace_form_head = \'<form method="post" class="frm-form" accept-charset="utf-8" action="\'.$form_head_action.\'" enctype="multipart/form-data">\'; 
$tpl_temp = forum_trim(ob_get_contents());
$tpl_temp = str_replace($find_form_head, $replace_form_head , $tpl_temp);
$tpl_main = str_replace(\'<!-- forum_main -->\', $tpl_temp.\'<!-- forum_main -->\', $tpl_main);
ob_end_clean();
ob_start();
			?>
				<div class="content-head">
					<h3 class="hn"><span><?php echo $lang_forum_f_image[\'forum head\'] ?></span></h3>
				</div>
				<div class="ct-box">
					<ul>
						<?php echo "\\n\\t\\t\\t\\t\\t".$lang_forum_f_image[\'forum info\']."\\n" ?>
					</ul>
				</div>
				<fieldset class="frm-group group<?php echo ++$forum_page[\'group_count\'] ?>">
					<legend class="group-legend"><strong><?php echo $lang_forum_f_image[\'Forum image\'] ?></strong></legend>
					<div class="ct-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="ct-box">
							<h3 class="ct-legend hn"><span><?php echo $lang_forum_f_image[\'current image\'] ?></span></h3>
<?php if ($cur_forum[\'f_image\']!=\'\'): ?>
							<p class="options"><span><img src="<?php echo $ext_info[\'url\'].\'/uploads/\'.$cur_forum[\'f_image\'] ?>" alt="" /></span></p>
<?php endif; ?>
							<p><?php echo ($cur_forum[\'f_image\']!=\'\') ? \'<a href="\'.$form_head_action.\'&f=\'.$cur_forum[\'f_image\'].\'&csrf_token=\'.generate_form_token(\'del_banner\'.$forum_user[\'id\']).\'"><strong>\'.$lang_forum_f_image[\'Delete image info\'].\'</strong></a>\' : $lang_forum_f_image[\'No image info\'] ?></p>
						</div>
					</div>
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box select">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_forum_f_image[\'Image place\'] ?></span></label><br />
							<span class="fld-input"><select id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="f_image_place">
								<option value="0"<?php if ($cur_forum[\'f_image_place\'] == \'0\') echo \' selected="selected"\' ?>><?php echo $lang_forum_f_image[\'Place left\'] ?></option>
								<option value="1"<?php if ($cur_forum[\'f_image_place\'] == \'1\') echo \' selected="selected"\' ?>><?php echo $lang_forum_f_image[\'Place right\'] ?></option>
							</select></span>
						</div>
					</div>
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box text">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_forum_f_image[\'Image link\'] ?></span><small><?php echo $lang_forum_f_image[\'Image link help\'] ?></small></label><br />
							<span class="fld-input"><input type="text" id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="f_image_link" size="35" maxlength="255" value="<?php echo forum_htmlencode($cur_forum[\'f_image_link\']) ?>" /></span>
						</div>
					</div>
					<div class="sf-set set<?php echo ++$forum_page[\'item_count\'] ?>">
						<div class="sf-box text required">
							<label for="fld<?php echo ++$forum_page[\'fld_count\'] ?>"><span><?php echo $lang_forum_f_image[\'Upload image file\'] ?></span><small><?php echo $lang_forum_f_image[\'Image upload help\'] ?></small></label><br />
							<span class="fld-input"><input id="fld<?php echo $forum_page[\'fld_count\'] ?>" name="req_file_f_image" type="file" size="40" /></span>
						</div>
					</div>
				</fieldset>
			<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_edit_forum_qr_get_forum_details' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_forum_image\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_forum_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_forum_image\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', f.f_image, f.f_image_link, f.f_image_place\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_save_forum_form_submitted' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_forum_image\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_forum_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_forum_image\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

require_once FORUM_ROOT.\'lang/\'.$forum_user[\'language\'].\'/profile.php\';
if ( isset($_FILES[\'req_file_f_image\']) && $_FILES[\'req_file_f_image\'][\'size\'] != 0 )
{
	$uploaded_file = $_FILES[\'req_file_f_image\'];

			// Make sure the upload went smooth
			if (isset($uploaded_file[\'error\']) && empty($errors))
			{
				switch ($uploaded_file[\'error\'])
				{
					case 1:	// UPLOAD_ERR_INI_SIZE
					case 2:	// UPLOAD_ERR_FORM_SIZE
						$errors[] = $lang_profile[\'Too large ini\'];
						break;

					case 3:	// UPLOAD_ERR_PARTIAL
						$errors[] = $lang_profile[\'Partial upload\'];
						break;

					case 4:	// UPLOAD_ERR_NO_FILE
						$errors[] = $lang_profile[\'No file\'];
						break;

					case 6:	// UPLOAD_ERR_NO_TMP_DIR
						$errors[] = $lang_profile[\'No tmp directory\'];
						break;

					default:
						// No error occured, but was something actually uploaded?
						if ($uploaded_file[\'size\'] == 0)
							$errors[] = $lang_profile[\'No file\'];
						break;
				}
			}

			if (is_uploaded_file($uploaded_file[\'tmp_name\']) && empty($errors))
			{
				$allowed_types = array(\'image/gif\', \'image/jpeg\', \'image/pjpeg\', \'image/png\', \'image/x-png\');

				if (!in_array($uploaded_file[\'type\'], $allowed_types))
					$errors[] = $lang_profile[\'Bad type\'];

				if (empty($errors))
				{
					// Determine type
					$extension = null;
					if ($uploaded_file[\'type\'] == \'image/gif\')
						$extension = \'.gif\';
					else if ($uploaded_file[\'type\'] == \'image/jpeg\' || $uploaded_file[\'type\'] == \'image/pjpeg\')
						$extension = \'.jpg\';
					else
						$extension = \'.png\';


					// Move the file to the avatar directory. We do this before checking the width/height to circumvent open_basedir restrictions.
					if (!@move_uploaded_file($uploaded_file[\'tmp_name\'], $ext_info[\'path\'].\'/uploads/banner.tmp\'))
						$errors[] = sprintf($lang_profile[\'Move failed\'], \'<a href="mailto:\'.forum_htmlencode($forum_config[\'o_admin_email\']).\'">\'.forum_htmlencode($forum_config[\'o_admin_email\']).\'</a>\');

					if (empty($errors))
					{
						while(true){
							$new_f_image = md5(time().\'Salt\').$extension;
							if(!is_file($ext_info[\'path\'].\'/uploads/\'.$new_f_image))
								break;
						}

						// Put the new avatar in its place
						@rename($ext_info[\'path\'].\'/uploads/banner.tmp\', $ext_info[\'path\'].\'/uploads/\'.$new_f_image);
						@chmod($ext_info[\'path\'].\'/uploads/\'.$new_f_image, 0644);
					}
				}
			}
			else if (empty($errors))
				$errors[] = $lang_profile[\'Unknown failure\'];

			if (!empty($errors)) {
				message(\'<ul><li>\'.implode(\'</li><li>\', $errors).\'</li</ul>\');
			}	
		@unlink($ext_info[\'path\'].\'/uploads/\'.$cur_forum[\'f_image\']);		
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'afo_save_forum_qr_update_forum' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_forum_image\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_forum_image\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_forum_image\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (isset($new_f_image)) {
	$D = getimagesize($ext_info[\'path\'].\'/uploads/\'.$new_f_image);
	$query[\'SET\'] .= \', f_image=\\\'\'.$forum_db->escape($new_f_image).\'\\\'\';
	$query[\'SET\'] .= \', f_image_info =\\\'\'.$forum_db->escape(serialize($D)).\'\\\'\';
	unset($D);
}
$query[\'SET\'] .= \', f_image_link=\\\'\'.$forum_db->escape($_POST[\'f_image_link\']).\'\\\', f_image_place=\\\'\'.intval($_POST[\'f_image_place\']).\'\\\'\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_pass_normal_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_user_activity\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_user_activity\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_user_activity\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_user_activity = new Fancy_user_activity;
				$fancy_user_activity->activity_change_pass($id, get_remote_address());

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_pass_key_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_user_activity\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_user_activity\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_user_activity\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_user_activity = new Fancy_user_activity;
				$fancy_user_activity->activity_change_keypass($id, get_remote_address());

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_email_key_qr_update_email' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_user_activity\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_user_activity\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_user_activity\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_user_activity = new Fancy_user_activity;
				$fancy_user_activity->activity_change_email($id, get_remote_address());

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_generate_avatar_markup_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'default_avatar\',
\'path\'			=> FORUM_ROOT.\'extensions/default_avatar\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/default_avatar\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if(!$avatar_type){return \'<img src="\'.$ext_info[\'path\'].\'/no_avatar.jpg" alt="No_Avatar" />\';}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_pre_header_load' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_addthis)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			// CSS for disabled JS hide bar
			$forum_loader->add_css(\'#fancy_addthis_topic_toolbox, .fancy-addthis-post { display: none; }\',
				array(\'type\' => \'inline\', \'noscript\' => true));

			$forum_loader->add_css(\'
				#fancy_addthis_topic_toolbox { min-height: 30px; margin: .75em 0 0; height: 30px; overflow: hidden; }
				#fancy_addthis_topic_toolbox table { float: right; width: auto; }
				#fancy_addthis_topic_toolbox td { border: none; padding: .2em; height: 30px; vertical-align: bottom; }
				#fancy_addthis_topic_toolbox .addthis_button_tweet { cursor:pointer; min-width:50px; display:inline-block; }
				#fancy_addthis_topic_toolbox .addthis_button_facebook_like { width:46px; overflow:hidden; display:inline-block; }
				#fancy_addthis_topic_toolbox .addthis_button_google_plusone { min-width:25px; position:relative; display:inline-block; }
				#fancy_addthis_topic_toolbox td > a { height: 28px; }\',
				array(\'type\' => \'inline\'));

			$forum_loader->add_js(\'//s7.addthis.com/js/250/addthis_widget.js#domready=1\', array(\'weight\' => 250));

			$fancy_addthis_js_env = \'
				PUNBB.env.fancy_addthis = {
					show_onclick: "",
					pubid: ""
				};\';


			$forum_loader->add_js($fancy_addthis_js_env, array(\'type\' => \'inline\', \'weight\' => 251));
			$forum_loader->add_js(\'PUNBB.fancy_addthis=(function(){var a={ui_click:true,ui_delay:75,ui_508_compliant:false};return{init:function(){var c,d,b,e,f;if(document.getElementsByClassName){f=document.getElementsByClassName("fancy-addthis-link");}else{f=PUNBB.common.arrayOfMatched(function(g){return PUNBB.common.hasClass(g,"fancy-addthis-link");},document.getElementsByTagName("span"));}for(c=0,b=f.length;c<b;c+=1){d=f[c];e={url:d.getAttribute("data-share-url")};addthis.button(d,a,e);PUNBB.common.addClass(d,"js_link");}}};}());PUNBB.common.addDOMReadyEvent(PUNBB.fancy_addthis.init);\', array(\'type\' => \'inline\', \'weight\' => 252));

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_user[\'is_guest\']) {
					$fancy_alerts = new Fancy_alerts;

					if (!isset($lang_fancy_alerts)) {
						if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
							require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
						} else {
							require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
						}
					}

					$query = array(
						\'SELECT\'	=> \'p.id, p.posted\',
						\'FROM\'		=> \'posts AS p\',
						\'WHERE\'		=> \'p.topic_id=\'.$id,
						\'ORDER BY\'	=> \'p.id\',
						\'LIMIT\'		=> $forum_page[\'start_from\'].\',\'.$forum_user[\'disp_posts\']
					);

					$result = $forum_db->query_build($query) or error(__FILE__, __LINE__);
					$fancy_alerts_last_post = \'\';
					$fancy_alerts_showed_posts = array();

					while ($last_post = $forum_db->fetch_assoc($result)) {
						$fancy_alerts_last_post = $last_post;
						array_push($fancy_alerts_showed_posts, $last_post[\'id\']);
					}

					$fancy_alerts->on_viewtopic_update_topic_alerts($id, $forum_user[\'id\'], $fancy_alerts_last_post[\'id\'], $fancy_alerts_last_post[\'posted\']);

					$fancy_alerts->mark_quotes_as_readed($fancy_alerts_showed_posts, $forum_user[\'id\']);

					// SHOW ALERTS STATUS
					if ($cur_topic[\'is_fancy_alerts_topic\']) {
						$forum_page[\'main_head_options\'][\'fancy_alerts_topic_disable\'] = \'<span><a class="sub-option" href="\'.forum_link($forum_url[\'fancy_alerts_topics_turn_off\'], array($id, generate_form_token(\'fancy_alerts_topics_off\'.$id.$forum_user[\'id\']))).\'" title="\'.$lang_fancy_alerts[\'Alerts Topics On Title\'].\'"><em>\'.$lang_fancy_alerts[\'Alerts Topics On\'].\'</em></a></span>\';
					} else {
						$forum_page[\'main_head_options\'][\'fancy_alerts_topic_enable\'] = \'<span><a class="sub-option" href="\'.forum_link($forum_url[\'fancy_alerts_topics_turn_on\'], array($id, generate_form_token(\'fancy_alerts_topics_on\'.$id.$forum_user[\'id\']))).\'" title="\'.$lang_fancy_alerts[\'Alerts Topics Off Title\'].\'">\'.$lang_fancy_alerts[\'Alerts Topics Off\'].\'</a></span>\';
					}
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_delete_topic_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;
				$fancy_alerts->del_topic_alerts($topic_id);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_delete_post_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;
				$fancy_alerts->del_post_alerts($post_id);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'mr_confirm_delete_posts_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;
				$fancy_alerts->del_post_alerts($posts);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_pre_redirect' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;
				$fancy_alerts->update_quote_alerts($cur_post[\'tid\'], $id, $message);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fancy_merge_posts_pre_return' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$fancy_alerts = new Fancy_alerts;
				$fancy_alerts->update_topic_alerts($post_info[\'topic_id\'], 0, $post_info[\'posted\'], $post_info[\'poster_id\']);

				// UPDATE POST ALERTS
				$fancy_alerts->update_quote_alerts($post_info[\'topic_id\'], $fancy_merge_posts_prev_post[\'post_id\'], $fancy_merge_posts_prev_post[\'message\']."\\n".$post_info[\'message\']);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_qr_update_topic2' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($last_id == $post_id) {
					$fancy_alerts = new Fancy_alerts;
					$fancy_alerts->update_topic_alerts_on_delete_last_post($topic_id, $second_last_id, $second_posted);
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_qr_get_topic_info' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_user[\'is_guest\']) {
					// GET OWNER
					$query[\'SELECT\'] .= \', coalesce(p.poster_id, 1) AS topic_owner\';
					$query[\'JOINS\'][] = array(
						\'LEFT JOIN\'	=> \'posts AS p\',
						\'ON\'		=> \'(t.first_post_id=p.id)\'
					);

					// GET ALERTS STATUS
					$query[\'SELECT\'] .= \', fat.user_id AS is_fancy_alerts_topic\';
					$query[\'JOINS\'][] = array(
						\'LEFT JOIN\'	=> \'fancy_alerts_topics AS fat\',
						\'ON\'		=> \'(t.id=fat.topic_id AND fat.user_id=\'.$forum_user[\'id\'].\')\'
					);
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', t.last_post_id, t.last_poster, t.last_post\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'sf_fn_validate_actions_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$valid_actions[] = \'fancy_alerts_topics_show\';
				$valid_actions[] = \'fancy_alerts_quotes_show\';
				$valid_actions[] = \'show_fancy_alerts_my_topics\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'se_additional_quicksearch_variables' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($action == \'fancy_alerts_topics_show\') {
				define(\'FORUM_PAGE_FANCY_ALERTS_TOPICS\', TRUE);

				$value = isset($_GET[\'user_id\']) ? intval($_GET[\'user_id\'], 10) : 0;
				if ($value < 2) {
					message($lang_common[\'Bad request\']);
				}
			}

			if ($action == \'fancy_alerts_quotes_show\') {
				define(\'FORUM_PAGE_FANCY_ALERTS_POSTS\', TRUE);

				$value = isset($_GET[\'user_id\']) ? intval($_GET[\'user_id\'], 10) : 0;
				if ($value < 2) {
					message($lang_common[\'Bad request\']);
				}
			}

			if ($action == \'show_fancy_alerts_my_topics\') {
				define(\'FORUM_PAGE_FANCY_ALERTS_MY_TOPICS\', TRUE);

				$value = isset($_GET[\'user_id\']) ? intval($_GET[\'user_id\'], 10) : 0;
				if ($value < 2) {
					message($lang_common[\'Bad request\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'sf_fn_generate_search_crumbs_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

//
				if ($action == \'fancy_alerts_topics_show\') {
					if (!isset($lang_fancy_alerts)) {
						if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
							require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
						} else {
							require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
						}
					}

					$forum_page[\'crumbs\'][] = $lang_fancy_alerts[\'Your Alerts Topics\'];
					$forum_page[\'items_info\'] = generate_items_info($lang_fancy_alerts[\'Your Alerts Topics\'], ($forum_page[\'start_from\'] + 1), $num_hits);
					$forum_page[\'main_foot_options\'][\'fancy_alerts_mark_topics_readed\'] = \'<span\'.(empty($forum_page[\'main_foot_options\']) ? \' class="first-item"\' : \'\').\'><a href="\'.forum_link($forum_url[\'fancy_alerts_topics_mark_read\'], generate_form_token(\'fancy_alerts_topics_mark_read\'.$forum_user[\'id\'])).\'">\'.$lang_fancy_alerts[\'Mark all topics as read\'].\'</a></span>\';

					return TRUE;
				}

				//
				if ($action == \'fancy_alerts_quotes_show\') {
					if (!isset($lang_fancy_alerts)) {
						if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
							require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
						} else {
							require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
						}
					}

					$forum_page[\'crumbs\'][] = $lang_fancy_alerts[\'Your Alerts Quotes\'];
					$forum_page[\'items_info\'] = generate_items_info($lang_fancy_alerts[\'Your Alerts Quotes\'], ($forum_page[\'start_from\'] + 1), $num_hits);
					$forum_page[\'main_foot_options\'][\'fancy_alerts_mark_quotes_readed\'] = \'<span\'.(empty($forum_page[\'main_foot_options\']) ? \' class="first-item"\' : \'\').\'><a href="\'.forum_link($forum_url[\'fancy_alerts_quotes_mark_read\'], generate_form_token(\'fancy_alerts_quotes_mark_read\'.$forum_user[\'id\'])).\'">\'.$lang_fancy_alerts[\'Mark all quotes as read\'].\'</a></span>\';

					return TRUE;
				}

				//
				if ($action == \'show_fancy_alerts_my_topics\') {
					if (!isset($lang_fancy_alerts)) {
						if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
							require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
						} else {
							require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
						}
					}

					$forum_page[\'crumbs\'][] = $lang_fancy_alerts[\'Search Alerts Topics\'];
					$forum_page[\'items_info\'] = generate_items_info($lang_fancy_alerts[\'Your Alerts Quotes\'], ($forum_page[\'start_from\'] + 1), $num_hits);

					return TRUE;
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'sf_fn_generate_action_search_query_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// ALERTED TOPICS
				if ($action == \'fancy_alerts_topics_show\')	{
					if ($forum_user[\'is_guest\']) {
						message($lang_common[\'Bad request\']);
					}

					// Check we\'re allowed to see the subscriptions we\'re trying to look at
					if ($forum_user[\'g_id\'] != FORUM_ADMIN && $forum_user[\'id\'] != $value) {
						message($lang_common[\'Bad request\']);
					}

					$fancy_alerts_now = time();

					$query = array(
						\'SELECT\'	=> \'t.id AS tid, t.poster, t.subject, t.first_post_id, t.posted, t.last_post, t.last_post_id, t.last_poster, t.num_replies, t.closed, t.sticky, t.forum_id, f.forum_name\',
						\'FROM\'		=> \'topics AS t\',
						\'JOINS\'		=> array(
							array(
								\'INNER JOIN\'	=> \'fancy_alerts_topics AS fat\',
								\'ON\'			=> \'(t.id=fat.topic_id AND fat.user_id=\'.$value.\')\'
							),
							array(
								\'INNER JOIN\'	=> \'forums AS f\',
								\'ON\'			=> \'f.id=t.forum_id\'
							),
							array(
								\'LEFT JOIN\'		=> \'forum_perms AS fp\',
								\'ON\'			=> \'(fp.forum_id=f.id AND fp.group_id=\'.$forum_user[\'g_id\'].\')\'
							)
						),
						\'WHERE\'		=> \'(fp.read_forum IS NULL OR fp.read_forum=1) AND fat.last_post_time > fat.last_user_view AND fat.last_post_id!=0\',
						\'ORDER BY\'	=> \'t.last_post DESC\'
					);

					// With "has posted" indication
					if (!$forum_user[\'is_guest\'] && $forum_config[\'o_show_dot\'] == \'1\') {
						$query[\'SELECT\'] .= \', p.poster_id AS has_posted\';
						$query[\'JOINS\'][]	= array(
							\'LEFT JOIN\'		=> \'posts AS p\',
							\'ON\'			=> \'(p.poster_id=\'.$forum_user[\'id\'].\' AND p.topic_id=t.id)\'
						);

						// Must have same columns as in prev SELECT
						$query[\'GROUP BY\'] = \'t.id, t.poster, t.subject, t.first_post_id, t.posted, t.last_post, t.last_post_id, t.last_poster, t.num_replies, t.closed, t.sticky, t.forum_id, f.forum_name, p.poster_id\';
					}

					$url_type = $forum_url[\'fancy_alerts_topics_goto_alerts\'];
					$search_id = $value;
				}

				// ALERTED POSTS
				if ($action == \'fancy_alerts_quotes_show\')	{
					if ($forum_user[\'is_guest\']) {
						message($lang_common[\'Bad request\']);
					}

					// Check we\'re allowed to see the subscriptions we\'re trying to look at
					if ($forum_user[\'g_id\'] != FORUM_ADMIN && $forum_user[\'id\'] != $value) {
						message($lang_common[\'Bad request\']);
					}


					$query = array(
						\'SELECT\'	=> \'p.id AS pid, p.poster AS pposter, p.posted AS pposted, p.poster_id, p.message, p.hide_smilies, t.id AS tid, t.poster, t.subject, t.first_post_id, t.posted, t.last_post, t.last_post_id, t.last_poster, t.num_replies, t.forum_id, f.forum_name\',
						\'FROM\'		=> \'posts AS p\',
						\'JOINS\'		=> array(
							array(
								\'INNER JOIN\'	=> \'topics AS t\',
								\'ON\'			=> \'t.id=p.topic_id\'
							),
							array(
								\'INNER JOIN\'	=> \'fancy_alerts_posts AS fap\',
								\'ON\'			=> \'(t.id=fap.topic_id AND fap.user_id=\'.$value.\')\'
							),
							array(
								\'INNER JOIN\'	=> \'forums AS f\',
								\'ON\'			=> \'f.id=t.forum_id\'
							),
							array(
								\'LEFT JOIN\'		=> \'forum_perms AS fp\',
								\'ON\'			=> \'(fp.forum_id=f.id AND fp.group_id=\'.$forum_user[\'g_id\'].\')\'
							)
						),
						\'WHERE\'		=> \'(fp.read_forum IS NULL OR fp.read_forum=1) AND (p.id=fap.post_id)\',
						\'ORDER BY\'	=> \'pposted DESC\'
					);

					$show_as = \'posts\';
					$url_type = $forum_url[\'fancy_alerts_quotes_goto_alerts\'];
					$search_id = $value;
				}

				// MY ALERTS TOPICS
				if ($action == \'show_fancy_alerts_my_topics\') {
					if ($forum_user[\'is_guest\']) {
						message($lang_common[\'Bad request\']);
					}

					// Check we\'re allowed to see the subscriptions we\'re trying to look at
					if ($forum_user[\'g_id\'] != FORUM_ADMIN && $forum_user[\'id\'] != $value) {
						message($lang_common[\'Bad request\']);
					}

					$query = array(
						\'SELECT\'	=> \'t.id AS tid, t.poster, t.subject, t.first_post_id, t.posted, t.last_post, t.last_post_id, t.last_poster, t.num_replies, t.closed, t.sticky, t.forum_id, f.forum_name\',
						\'FROM\'		=> \'topics AS t\',
						\'JOINS\'		=> array(
							array(
								\'INNER JOIN\'	=> \'fancy_alerts_topics AS fat\',
								\'ON\'			=> \'(t.id=fat.topic_id AND fat.user_id=\'.$value.\')\'
							),
							array(
								\'INNER JOIN\'	=> \'forums AS f\',
								\'ON\'			=> \'f.id=t.forum_id\'
							),
							array(
								\'LEFT JOIN\'		=> \'forum_perms AS fp\',
								\'ON\'			=> \'(fp.forum_id=f.id AND fp.group_id=\'.$forum_user[\'g_id\'].\')\'
							)
						),
						\'WHERE\'		=> \'(fp.read_forum IS NULL OR fp.read_forum=1)\',
						\'ORDER BY\'	=> \'t.last_post DESC\'
					);

					if (!$forum_user[\'is_guest\'] && $forum_config[\'o_show_dot\'] == \'1\') {
						$query[\'SELECT\'] .= \', p.poster_id AS has_posted\';
						$query[\'JOINS\'][]	= array(
							\'LEFT JOIN\'		=> \'posts AS p\',
							\'ON\'			=> \'(p.poster_id=\'.$forum_user[\'id\'].\' AND p.topic_id=t.id)\'
						);

						// Must have same columns as in prev SELECT
						$query[\'GROUP BY\'] = \'t.id, t.poster, t.subject, t.first_post_id, t.posted, t.last_post, t.last_post_id, t.last_poster, t.num_replies, t.closed, t.sticky, t.forum_id, f.forum_name, p.poster_id\';
					}

					$url_type = $forum_url[\'fancy_alerts_search_my_alerts_topics\'];
					$search_id = $value;
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_qr_get_post_page' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_user[\'is_guest\']) {
					$fancy_alerts = new Fancy_alerts;
					$fancy_alerts->mark_quotes_as_readed(array($pid), $forum_user[\'id\']);
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_qr_get_post_info' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

$query[\'SELECT\'] .= \', p.posted AS pposted, t.last_post_id\';

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_post_selected' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_page[\'is_admmod\']) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\'))
					include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\';
				else
					include $ext_info[\'path\'].\'/lang/English.php\';

 				// number of minutes then converted seconds
				$pepconf = $forum_config[\'o_post_edit_control_duration\'] * 60;
				$difference = time() - $cur_post[\'pposted\'];

				if (($difference > $pepconf) || ($forum_config[\'o_post_edit_control_lastedit\'] == 1 && $cur_post[\'last_post_id\'] != $id)) {
					message($lang_post_edit_control[\'No edit\']);
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_modify_page_details' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

// number of minutes then converted seconds
			$pepconf = $forum_config[\'o_post_edit_control_duration\'] * 60;
			$difference = time() - $cur_topic[\'last_post\'];
			if (($forum_config[\'o_post_edit_control_lastreply\'] == \'1\') && !$forum_user[\'is_admmod\']) {
				if ($cur_topic[\'last_poster\'] == $forum_user[\'username\'] && $difference < $pepconf) {
					$forum_config[\'o_quickpost\'] = 0;
					$forum_user[\'may_post\']  = false;
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'po_posting_location_selected' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'post_edit_control\',
\'path\'			=> FORUM_ROOT.\'extensions/post_edit_control\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/post_edit_control\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!$forum_page[\'is_admmod\'] && $tid) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\'))
					include $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'.php\';
				else
					include $ext_info[\'path\'].\'/lang/English.php\';

	 			// number of minutes then converted seconds
				$pepconf = $forum_config[\'o_post_edit_control_duration\'] * 60;
				$difference = time() - $cur_posting[\'last_post\'];

				if ($forum_config[\'o_post_edit_control_lastreply\']) {
					if (($cur_posting[\'last_poster\'] == $forum_user[\'username\']) && ($difference < $pepconf)) {
						message($lang_post_edit_control[\'Last reply alert\']);
					}
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_quickpost_pre_message_box' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_bbcode\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_bbcode\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_bbcode\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'pun_bbcode_enabled\'])
			{
				define(\'PUN_BBCODE_BAR_INCLUDE\', 1);
				include $ext_info[\'path\'].\'/bar.php\';
				$pun_bbcode_bar = new Pun_bbcode;
				$pun_bbcode_bar->render();
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_pre_message_box' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_bbcode\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_bbcode\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_bbcode\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'pun_bbcode_enabled\'])
			{
				define(\'PUN_BBCODE_BAR_INCLUDE\', 1);
				include $ext_info[\'path\'].\'/bar.php\';
				$pun_bbcode_bar = new Pun_bbcode;
				$pun_bbcode_bar->render();
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pun_pm_fn_send_form_pre_textarea_output' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'pun_bbcode\',
\'path\'			=> FORUM_ROOT.\'extensions/pun_bbcode\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/pun_bbcode\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($forum_user[\'pun_bbcode_enabled\'])
			{
				define(\'PUN_BBCODE_BAR_INCLUDE\', 1);
				include $ext_info[\'path\'].\'/bar.php\';
				$pun_bbcode_bar = new Pun_bbcode;
				$pun_bbcode_bar->render();
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'aex_section_manage_pre_ext_actions' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($fancy_merge_posts)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
				}
			}

			if ($ext[\'id\'] == \'fancy_merge_posts\' && !isset($forum_page[\'ext_actions\'][\'fancy_merge_posts_settings\'])) {
				$forum_page[\'ext_actions\'][\'fancy_merge_posts_settings\'] = \'<span><a href="\'.forum_link($forum_url[\'admin_settings_features\']).\'#\'.$ext_info[\'id\'].\'_settings\'.\'">\'.$fancy_merge_posts[\'Go to settings\'].\'</a></span>\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    1 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_addthis)) {
				if ($forum_user[\'language\'] != \'English\' && file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\')) {
					require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/lang.php\';
				} else {
					require $ext_info[\'path\'].\'/lang/English/lang.php\';
				}
			}

			if ($ext[\'id\'] == \'fancy_addthis\' && !isset($forum_page[\'ext_actions\'][\'fancy_addthis_settings\'])) {
				$forum_page[\'ext_actions\'][\'fancy_addthis_settings\'] = \'<span><a href="\'.forum_link($forum_url[\'admin_settings_features\']).\'#\'.$ext_info[\'id\'].\'_settings\'.\'">\'.$lang_fancy_addthis[\'Go to settings\'].\'</a></span>\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    2 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_stop_spam\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_stop_spam\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_stop_spam\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($ext[\'id\'] == \'fancy_stop_spam\' && !isset($forum_page[\'ext_actions\'][\'fancy_stop_spam_settings\'])) {
				$forum_page[\'ext_actions\'][\'fancy_stop_spam_settings\'] = \'
					<span>
						<a href="\'.forum_link($forum_url[\'admin_settings_features\']).\'#\'.$ext_info[\'id\'].\'_settings\'.\'">\'.
							$lang_fancy_stop_spam[\'Go to settings\'].\'
						</a>
					</span>\';
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
    3 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_alerts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_alerts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_alerts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if (!isset($lang_fancy_alerts)) {
					if (file_exists($ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\')) {
						require $ext_info[\'path\'].\'/lang/\'.$forum_user[\'language\'].\'/\'.$ext_info[\'id\'].\'.php\';
					} else {
						require $ext_info[\'path\'].\'/lang/English/\'.$ext_info[\'id\'].\'.php\';
					}
				}

				if ($ext[\'id\'] == \'fancy_alerts\' && !isset($forum_page[\'ext_actions\'][\'fancy_alerts_settings\'])) {
					$forum_page[\'ext_actions\'][\'fancy_alerts_settings\'] = \'<span><a href="\'.forum_link($forum_url[\'admin_settings_features\']).\'#\'.$ext_info[\'id\'].\'_settings\'.\'">\'.$lang_fancy_alerts[\'Go to settings\'].\'</a></span>\';
				}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'ed_pre_checkbox_display' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_spellcheck\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_spellcheck\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_spellcheck\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

?>
				<div id="fancy_spellcheck_block"><span id="fancy_spellcheck_span"><span id="fancy_spellcheck_link">Проверить орфографию</span></span><span id="fancy_check_spelling_ok">ok</span></div>
			<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'pf_change_details_signature_pre_fieldset_end' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_spellcheck\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_spellcheck\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_spellcheck\',
\'dependencies\'	=> array (
\'fancy_jquery_addons\'	=> array(
\'id\'				=> \'fancy_jquery_addons\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_jquery_addons\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_jquery_addons\'),
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

?>
				<div id="fancy_spellcheck_block"><span id="fancy_spellcheck_span"><span id="fancy_spellcheck_link">Проверить орфографию</span></span><span id="fancy_check_spelling_ok">ok</span></div>
			<?php

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'vt_row_pre_display' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_addthis\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_addthis\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_addthis\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($cur_post[\'id\'] == $cur_topic[\'first_post_id\']) {
				if ($forum_config[\'o_fancy_addthis_button_gplus\'] == \'1\' ||
					$forum_config[\'o_fancy_addthis_button_twitter\'] == \'1\' ||
					$forum_config[\'o_fancy_addthis_button_facebook\'] == \'1\') {

					$forum_page[\'message\'][\'fancy_addthis_topic_block\'] = \'
						<div id="fancy_addthis_topic_toolbox">
							<table cellspacing="0" cellpadding="0" class="addthis_toolbox addthis_default_style" addthis:url="\'.forum_link($forum_url[\'topic\'], array($id, sef_friendly($cur_topic[\'subject\']))).\'" addthis:title="\'.forum_htmlencode($cur_topic[\'subject\']).\'">
							<tbody>
								<tr valign="bottom">\';

					if ($forum_config[\'o_fancy_addthis_button_facebook\'] == \'1\'):
						$forum_page[\'message\'][\'fancy_addthis_topic_block\'] .= \'<td><a class="addthis_button_facebook_like" fb:like:locale="en_US"></a></td>\';
					endif;

					if ($forum_config[\'o_fancy_addthis_button_twitter\'] == \'1\'):
						$forum_page[\'message\'][\'fancy_addthis_topic_block\'] .= \'<td><a class="addthis_button_tweet" tw:count="none"></a></td>\';
					endif;

					if ($forum_config[\'o_fancy_addthis_button_gplus\'] == \'1\'):
						$forum_page[\'message\'][\'fancy_addthis_topic_block\'] .= \'<td><a class="addthis_button_google_plusone" g:plusone:count="false" g:plusone:size="medium"></a></td>\';
					endif;

					$forum_page[\'message\'][\'fancy_addthis_topic_block\'] .= \'
								</tr>
							</tbody>
							</table>
						</div>\';
				}
			}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'fn_add_post_start' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'fancy_merge_posts\',
\'path\'			=> FORUM_ROOT.\'extensions/fancy_merge_posts\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/fancy_merge_posts\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

global $fancy_merge_posts, $forum_page, $forum_user;

			// CUR_POSTING
			$fancy_merge_posts_prev_post = $post_info[\'fancy_merge_posts_prev_post\'];

			// DEFAULT - MERGE
			// SET IT IN YOUR EXT to TRUE if NOT NEED MERGE
			$fancy_merge_posts_no_merge = FALSE;


			// BREAK DISABLE MERGING
			do {
				($hook = get_hook(\'fancy_merge_posts_check_merge\')) ? eval($hook) : null;

				// DONT MERGE IF HOOK SET IT TRUE
				if ($fancy_merge_posts_no_merge) {
					break;
				}

				// DONT MERGE IF GUEST
				if ($forum_user[\'is_guest\'] || is_null($fancy_merge_posts_prev_post[\'poster_id\']) || is_null($fancy_merge_posts_prev_post[\'message\'])) {
					break;
				}

				//
				if (($forum_page[\'is_admmod\'] || (isset($forum_user[\'g_merge_posts\']) && intval($forum_user[\'g_merge_posts\'], 10) === 1)) && $post_info[\'fancy_merge_posts_dont_merge\']) {
					break;
				}

				// DONT MERGE IF ENABLED IMAGES
				if (isset($post_info[\'have_image\']) && ($post_info[\'have_image\'])) {
					break;
				}

				// DONT MERGE BIG MESSAGE
				if ((utf8_strlen($post_info[\'message\']) + utf8_strlen($fancy_merge_posts_prev_post[\'message\'])) > FORUM_MAX_POSTSIZE_BYTES) {
					break;
				}

				// DONT MERGE IF HAVE ATTACHMENTS pun_attachment
				if (isset($uploaded_list) && is_array($uploaded_list) && (count($uploaded_list) > 0)) {
					break;
				}

				// DONT MERGE IF TIMEOUT
				$fancyDontMergeTimeout = intval($forum_config[\'o_fancy_merge_posts_dm_interval\'], 10);
				if (($fancyDontMergeTimeout > 0) && ($fancyDontMergeTimeout * 60) < (time() - $fancy_merge_posts_prev_post[\'posted\'])) {
					break;
				}

				// SILENT?
				if (intval($forum_config[\'o_fancy_merge_posts_silent\'], 10) === 1) {
					$mrgMsg = $forum_db->escape($fancy_merge_posts_prev_post[\'message\']."\\n\\n".$post_info[\'message\']."\\n");
					$mrgEdited = \', edited=\'.$post_info[\'posted\'];
				} else {
					$mrgMsg = $forum_db->escape($fancy_merge_posts_prev_post[\'message\']."\\n[merge_posts_bbcode]".sprintf($fancy_merge_posts[\'Added\'], format_time(time(), 0, null, null, TRUE))."[/merge_posts_bbcode]\\n\\n".$post_info[\'message\']."\\n");
					$mrgEdited = \'\';
				}

				// UPDATE POST DATE?
				if ($forum_config[\'o_fancy_merge_posts_no_update_date\'] == \'1\') {
					$mrgPostDate = \'\';
				} else {
					$mrgPostDate = \', posted=\'.$post_info[\'posted\'];
				}

				// UPDATE MESSAGE IN DB
				$query = array(
					\'UPDATE\'    => \'posts\',
					\'SET\'     	=> \'message=\\\'\'.$mrgMsg.\'\\\'\'.$mrgEdited.$mrgPostDate,
					\'WHERE\'    	=> \'id=\'.$fancy_merge_posts_prev_post[\'post_id\']
				);
				$forum_db->query_build($query) or error(__FILE__, __LINE__);

				// UPDATE TOPIC
				$query = array(
					\'UPDATE\'	=> \'topics\',
					\'SET\'		=> \'last_post=\'.$post_info[\'posted\'].\', last_post_id=\'.$fancy_merge_posts_prev_post[\'post_id\'].\', last_poster=\\\'\'.$forum_db->escape($post_info[\'poster\']).\'\\\'\',
					\'WHERE\'		=> \'id=\'.$post_info[\'topic_id\']
				);
				$forum_db->query_build($query) or error(__FILE__, __LINE__);

				// SYNC FORUM
				sync_forum($post_info[\'forum_id\']);

				if (!defined(\'FORUM_SEARCH_IDX_FUNCTIONS_LOADED\')) {
					require FORUM_ROOT.\'include/search_idx.php\';
				}

				update_search_index(\'edit\', $fancy_merge_posts_prev_post[\'post_id\'], $mrgMsg);

				$query = array(
					\'UPDATE\'    => \'users\',
					\'SET\'       => \'last_post=\'.$post_info[\'posted\'],
					\'WHERE\'   	=> \'id=\'.$forum_user[\'id\']
				);
				$forum_db->query_build($query) or error(__FILE__, __LINE__);

				if (!$forum_user[\'is_guest\']) {
					$tracked_topics = get_tracked_topics();
					$tracked_topics[\'topics\'][$post_info[\'topic_id\']] = time();
					set_tracked_topics($tracked_topics);
				}

				// NEW IS PREV PID
				$new_pid = $fancy_merge_posts_prev_post[\'post_id\'];

				($hook = get_hook(\'fancy_merge_posts_pre_return\')) ? eval($hook) : null;

				return TRUE;
			} while(0);

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
  'in_normal_row_pre_display' => 
  array (
    0 => '$GLOBALS[\'ext_info_stack\'][] = array(
\'id\'				=> \'hcs_avatars_on_index\',
\'path\'			=> FORUM_ROOT.\'extensions/hcs_avatars_on_index\',
\'url\'			=> $GLOBALS[\'base_url\'].\'/extensions/hcs_avatars_on_index\',
\'dependencies\'	=> array (
)
);
$ext_info = $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];

if ($cur_forum[\'last_post\'] != \'\') { 
    $avatar = \'<img src="\'. get_avatar(array(\'id\' => $cur_forum[\'poster_id\'], \'avatar\' => $cur_forum[\'avatar\'] )) .\'" width="30px" class="list-avatar" />\';
    $forum_page[\'item_body\'][\'info\'][\'lastpost\'] = str_replace(\'<span class="label">\'.$lang_index[\'Last post\'].\'</span>\', \'<div class="ul-lastpost"><span class="ulabel">\'.$avatar.\'</span></div>\', $forum_page[\'item_body\'][\'info\'][\'lastpost\']);
}

array_pop($GLOBALS[\'ext_info_stack\']);
$ext_info = empty($GLOBALS[\'ext_info_stack\']) ? array() : $GLOBALS[\'ext_info_stack\'][count($GLOBALS[\'ext_info_stack\']) - 1];
',
  ),
);

?>