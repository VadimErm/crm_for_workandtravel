<?php

if (!defined('FORUM')) exit;
define('FORUM_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?><form id="qjump" method="get" accept-charset="utf-8" action="/forum/viewforum.php">
	<div class="frm-fld frm-select">
		<label for="qjump-select"><span><?php echo $lang_common['Jump to'] ?></span></label><br />
		<span class="frm-input"><select id="qjump-select" name="id">
			<optgroup label="Основная информация">
				<option value="5"<?php echo ($forum_id == 5) ? ' selected="selected"' : '' ?>>Вопросы новичков</option>
				<option value="6"<?php echo ($forum_id == 6) ? ' selected="selected"' : '' ?>>Свободная тема</option>
				<option value="7"<?php echo ($forum_id == 7) ? ' selected="selected"' : '' ?>>Архив</option>
			</optgroup>
			<optgroup label="Программы">
				<option value="14"<?php echo ($forum_id == 14) ? ' selected="selected"' : '' ?>>Work and Travel USA (общая информация)</option>
				<option value="15"<?php echo ($forum_id == 15) ? ' selected="selected"' : '' ?>>Work and Travel USA (ищем попутчиков)</option>
				<option value="43"<?php echo ($forum_id == 43) ? ' selected="selected"' : '' ?>>Working on cruise lines</option>
				<option value="44"<?php echo ($forum_id == 44) ? ' selected="selected"' : '' ?>>Summer Work and Travel USA</option>
				<option value="46"<?php echo ($forum_id == 46) ? ' selected="selected"' : '' ?>>AU PAIR USA</option>
				<option value="47"<?php echo ($forum_id == 47) ? ' selected="selected"' : '' ?>>AU PAIR Europe</option>
				<option value="50"<?php echo ($forum_id == 50) ? ' selected="selected"' : '' ?>>Work and Travel France</option>
				<option value="52"<?php echo ($forum_id == 52) ? ' selected="selected"' : '' ?>>Work and Study Canada</option>
				<option value="53"<?php echo ($forum_id == 53) ? ' selected="selected"' : '' ?>>Sandwich course Great Britain</option>
				<option value="54"<?php echo ($forum_id == 54) ? ' selected="selected"' : '' ?>>Internship Australia</option>
				<option value="55"<?php echo ($forum_id == 55) ? ' selected="selected"' : '' ?>>Internship Ireland</option>
				<option value="56"<?php echo ($forum_id == 56) ? ' selected="selected"' : '' ?>>Internship New Zeland</option>
				<option value="57"<?php echo ($forum_id == 57) ? ' selected="selected"' : '' ?>>Internship Malta</option>
				<option value="58"<?php echo ($forum_id == 58) ? ' selected="selected"' : '' ?>>Internship Spain</option>
				<option value="59"<?php echo ($forum_id == 59) ? ' selected="selected"' : '' ?>>Internship Finland</option>
				<option value="60"<?php echo ($forum_id == 60) ? ' selected="selected"' : '' ?>>Internship Emirates</option>
				<option value="61"<?php echo ($forum_id == 61) ? ' selected="selected"' : '' ?>>Internship India</option>
				<option value="62"<?php echo ($forum_id == 62) ? ' selected="selected"' : '' ?>>Internship China</option>
				<option value="63"<?php echo ($forum_id == 63) ? ' selected="selected"' : '' ?>>Internship Greece</option>
				<option value="64"<?php echo ($forum_id == 64) ? ' selected="selected"' : '' ?>>Internship Finland (работа на клубничных фермах Финляндии)</option>
				<option value="65"<?php echo ($forum_id == 65) ? ' selected="selected"' : '' ?>>Internship Lithuania</option>
				<option value="66"<?php echo ($forum_id == 66) ? ' selected="selected"' : '' ?>>Обучение за рубежом (с указанием страны и периода обучения)</option>
				<option value="67"<?php echo ($forum_id == 67) ? ' selected="selected"' : '' ?>>High School USA J1 (school year)</option>
				<option value="68"<?php echo ($forum_id == 68) ? ' selected="selected"' : '' ?>>Teaching English Thailand</option>
				<option value="69"<?php echo ($forum_id == 69) ? ' selected="selected"' : '' ?>>Групповые обучающие туры на период каникул для школьников и студентов</option>
				<option value="70"<?php echo ($forum_id == 70) ? ' selected="selected"' : '' ?>>Волонтерские программы</option>
				<option value="71"<?php echo ($forum_id == 71) ? ' selected="selected"' : '' ?>>Открытие турвизы (с указанием страны)</option>
			</optgroup>
			<optgroup label="Новости форума, сайта">
				<option value="10"<?php echo ($forum_id == 10) ? ' selected="selected"' : '' ?>>Свободная тема</option>
			</optgroup>
			<optgroup label="Визы, налоги, авиабилеты">
				<option value="11"<?php echo ($forum_id == 11) ? ' selected="selected"' : '' ?>>Свободная тема</option>
			</optgroup>
			<optgroup label="Отзывы">
				<option value="12"<?php echo ($forum_id == 12) ? ' selected="selected"' : '' ?>>Свободная тема</option>
			</optgroup>
			<optgroup label="Текущие вакансии">
				<option value="13"<?php echo ($forum_id == 13) ? ' selected="selected"' : '' ?>>Свободная тема</option>
			</optgroup>
		</select>
		<input type="submit" id="qjump-submit" value="<?php echo $lang_common['Go'] ?>" /></span>
	</div>
</form>
<?php

$forum_javascript_quickjump_code = <<<EOL
(function () {
	var forum_quickjump_url = "/forum/viewforum.php?id=$1";
	var sef_friendly_url_array = new Array(34);
	sef_friendly_url_array[5] = "voprosy-novichkov";
	sef_friendly_url_array[6] = "svobodnaya-tema";
	sef_friendly_url_array[7] = "arkhiv";
	sef_friendly_url_array[14] = "work-and-travel-usa-obshchaya-informatsiya";
	sef_friendly_url_array[15] = "work-and-travel-usa-ishchem-poputchikov";
	sef_friendly_url_array[43] = "working-on-cruise-lines";
	sef_friendly_url_array[44] = "summer-work-and-travel-usa";
	sef_friendly_url_array[46] = "au-pair-usa";
	sef_friendly_url_array[47] = "au-pair-europe";
	sef_friendly_url_array[50] = "work-and-travel-france";
	sef_friendly_url_array[52] = "work-and-study-canada";
	sef_friendly_url_array[53] = "sandwich-course-great-britain";
	sef_friendly_url_array[54] = "internship-australia";
	sef_friendly_url_array[55] = "internship-ireland";
	sef_friendly_url_array[56] = "internship-new-zeland";
	sef_friendly_url_array[57] = "internship-malta";
	sef_friendly_url_array[58] = "internship-spain";
	sef_friendly_url_array[59] = "internship-finland";
	sef_friendly_url_array[60] = "internship-emirates";
	sef_friendly_url_array[61] = "internship-india";
	sef_friendly_url_array[62] = "internship-china";
	sef_friendly_url_array[63] = "internship-greece";
	sef_friendly_url_array[64] = "internship-finland-rabota-na-klubnichnykh-fermakh-finlyandii";
	sef_friendly_url_array[65] = "internship-lithuania";
	sef_friendly_url_array[66] = "obuchenie-za-rubezhom-s-ukazaniem-strany-i-perioda-obucheniya";
	sef_friendly_url_array[67] = "high-school-usa-j1-school-year";
	sef_friendly_url_array[68] = "teaching-english-thailand";
	sef_friendly_url_array[69] = "gruppovye-obuchayushchie-tury-na-period-kanikul-dlya-shkolnikov-i-studentov";
	sef_friendly_url_array[70] = "volonterskie-programmy";
	sef_friendly_url_array[71] = "otkrytie-turvizy-s-ukazaniem-strany";
	sef_friendly_url_array[10] = "svobodnaya-tema";
	sef_friendly_url_array[11] = "svobodnaya-tema";
	sef_friendly_url_array[12] = "svobodnaya-tema";
	sef_friendly_url_array[13] = "svobodnaya-tema";

	PUNBB.common.addDOMReadyEvent(function () { PUNBB.common.attachQuickjumpRedirect(forum_quickjump_url, sef_friendly_url_array); });
}());
EOL;

$forum_loader->add_js($forum_javascript_quickjump_code, array('type' => 'inline', 'weight' => 60, 'group' => FORUM_JS_GROUP_SYSTEM));
?>
