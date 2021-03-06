<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><section class="wrapper main">
<div class="container">
	<div class="row">
		<div class="col-12">
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "simpleBlocks",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?>
			<div class="schedule-holder">
				<div class="title">
 <span class="wrap">Расписание богослужений</span>
				</div>
				<div class="schedule-wrap">
					<div class="lt">
					</div>
					<div class="rb">
					</div>
					<div class="rt">
					</div>
					<div class="lb">
					</div>
					<table class="schedule">
					<tbody>
					<tr class="active">
						<td rowspan="2">
							<p>
								 3 марта
							</p>
							<p>
								 Понедельник
							</p>
						</td>
						<td rowspan="2">
							<p>
								 Свт. Льва, папы Римского.
							</p>
							<p class="uppercase">
								 НАЧАЛО ВЕЛИКОГО ПОСТА
							</p>
						</td>
						<td>
							<p>
								 Полуношница. Утреня.
							</p>
							<p>
								 Часы. Вечерня
							</p>
						</td>
						<td>
							<p>
								 06:00
							</p>
						</td>
					</tr>
					<tr class="active">
						<td>
							<p>
								 Великое повечерие.
							</p>
							<p>
								 КАНОН ПРП. АНДРЕЯ КРИТСКОГО
							</p>
						</td>
						<td>
							<p>
								 17:00
							</p>
						</td>
					</tr>
					<tr class="active">
						<td rowspan="2">
							<p>
								 4 марта
							</p>
							<p>
								 Вторник
							</p>
						</td>
						<td rowspan="2">
							<p>
								 Ап. от 70-ти Архиппа
							</p>
						</td>
						<td>
							<p>
								 Полуношница. Утреня.
							</p>
							<p>
								 Часы. Вечерня
							</p>
						</td>
						<td>
							<p>
								 06:00
							</p>
						</td>
					</tr>
					<tr class="active">
						<td>
							<p>
								 Великое повечерие.
							</p>
							<p>
								 КАНОН ПРП. АНДРЕЯ КРИТСКОГО
							</p>
						</td>
						<td>
							<p>
								 17:00
							</p>
						</td>
					</tr>
					<tr>
						<td>
							 1
						</td>
						<td>
							 2
						</td>
						<td>
							 3
						</td>
						<td>
							 4
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
			<div class="photo-box">
				<h2>Подворье глазами прихожан</h2>
				<ul>
					<li>
					<div class="box">
 <a href="#"> <span class="img-box"> <img width="160" src="/bitrix/templates/empty/images/photo-01.jpg" height="160" alt=""> </span> <span class="wrap"> <em class="date">24 марта</em> </span> </a>
					</div>
 </li>
					<li>
					<div class="box">
 <a href="#"> <span class="img-box"> <img width="160" src="/bitrix/templates/empty/images/photo-02.jpg" height="160" alt=""> </span> <span class="wrap"><em class="date">26 марта</em></span> </a>
					</div>
 </li>
					<li>
					<div class="box">
 <a href="#"> <span class="img-box"> <img width="160" src="/bitrix/templates/empty/images/photo-03.jpg" height="160" alt=""> </span> <span class="wrap"><em class="date">27 марта</em></span> </a>
					</div>
 </li>
					<li>
					<div class="box">
 <a href="#"> <span class="img-box"> <img width="160" src="/bitrix/templates/empty/images/photo-04.jpg" height="160" alt=""> </span> <span class="wrap"><em class="date">29 марта</em></span> </a>
					</div>
 </li>
				</ul>
			</div>
			<div class="tabs-box">
				<div class="tabs-wrap">
					<ul class="ttl">
						<li>Общение</li>
						<li>Коментарии (336)</li>
					</ul>
					<ul class="tabs">
						<li class="active"><a href="#tab-01">Темы</a></li>
						<li><a href="#tab-02">Авторы</a></li>
					</ul>
				</div>
				<div class="tab active" id="tab-01">
					<ul class="comment-list">
						<li> <a href="#">Проповедь иеромонаха Иова в субботу первой седмици Великого поста <span class="comment">8</span></a> </li>
						<li> <a href="#">Проповедь иеромонаха Иова в субботу первой седмици <span class="comment">5</span></a> </li>
						<li> <a href="#">Проповедь иеромонаха Иова в субботу первой седмици Великого поста Великого поста <span class="comment">4</span></a> </li>
						<li> <a href="#">Проповедь иеромонаха Иова <span class="comment">5</span></a> </li>
						<li> <a href="#">Проповедь иеромонаха Иова в субботу первой седмици <span class="comment">7</span></a> </li>
					</ul>
				</div>
				<div class="tab" id="tab-02">
					 text
				</div>
			</div>
			<div class="school-box">
				<h2>Школа русской культуры Сергия и Германа Валаамских</h2>
				<ul>
					<li>
					<div class="img-box">
 <img width="100" src="/bitrix/templates/empty/images/school-01.jpg" height="100" alt="">
					</div>
					<div class="wrap">
						<p>
							 Проповедь иеромонаха Иова в субботу первой седмици Великого поста Проповедь иеромонаха Иова в субботу первой седмици Великого Проповедь иеромонаха Иова
						</p>
 <em class="date">24 марта 2014г</em>
					</div>
 </li>
					<li>
					<div class="img-box">
 <img width="100" src="/bitrix/templates/empty/images/school-02.jpg" height="100" alt="">
					</div>
					<div class="wrap">
						<p>
							 Проповедь иеромонаха Иова в субботу первой седмици Великого поста Проповедь иеромонаха Иова в субботу первой седмици Великого Проповедь иеромонаха Иова
						</p>
 <em class="date">24 марта 2014г</em>
					</div>
 </li>
				</ul>
			</div>
		</div>
		<div class="col-4 sidebar">
			<div class="box section">
				<ul>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Богослужения и требы</a></li>
					<li><a href="#">Расписание богослужений</a></li>
					<li><a href="#">Проповеди</a></li>
					<li><a href="#">Видеогалерея</a></li>
					<li><a href="#">Подворье глазами прихожан</a></li>
				</ul>
			</div>
			<div class="box calendar">
				<h3>Православный календарь</h3>
 <img width="95" src="/bitrix/templates/empty/images/calendar-01.jpg" height="118" alt=""> <em class="date">3 апреля 2014г.<span class="wrap">(21 марта ст. ст.)</span></em>
				<p class="uppercase">
					 СЕДМИЦА 5-Я ВЕЛИКОГО ПОСТА. ВЕЛИКИЙ ПОСТ.
				</p>
				<p class="uppercase blue">
					 ПИЩА С РАСТИТЕЛЬНЫМ МАСЛОМ.
				</p>
				<p>
					 Прп. Иакова сп., исп. Прп. Серафима Вырицкого.
				</p>
				<p>
					 Свт. Кирилла, еп Катанского Свт. Фомы, патриарха Константинопольского.
				</p>
				<p>
					 Сщмч. Владимира пресвитера. <span class="blue">На 6-м часе:</span> Ис. XLII, 5-16. <span class="blue">На веч.</span>: Быт. XVIII, 20-33, Притч. XVI. 17 - XVII, 17.
				</p>
			</div>
			<div class="box video">
				<h3>Видео</h3>
				 <object width="100%" height="219">
              <param name="movie" value="https://www.youtube.com/v/M7lc1UVf-VE?rel=0&showinfo=0&version=3"></param>
              <param name="allowFullScreen" value="true"></param>
              <param name="allowScriptAccess" value="always"></param>
              <embed src="https://www.youtube.com/v/M7lc1UVf-VE?rel=0&showinfo=0&version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="100%" height="219"></embed>
            </object>
			</div>
			<div class="box">
 <a class="more" href="#">Все видео</a>
			</div>
			<div class="box news-list">
				<h3>Новое на сайте</h3>
				<ul>
					<li><em class="date">10 марта</em><a href="#">Проповедь в понедельник первой седмицы Великого поста Валаама</a></li>
					<li><em class="date">5 марта</em><a href="#">Статья иеродиакона Платона (Рожкова)</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row cite-box">
		<div class="col-12 col-offset-2">
			<blockquote>
				<div class="img-box">
 <img width="93" src="/bitrix/templates/empty/images/cite-01.jpg" height="93" alt="">
				</div>
 <q>Бог для того только и требует от нас снисхождения к ближним, чтобы Самому иметь случай прощать нам великие согрешения.</q> <cite>Святитель Иоан Златоуст</cite>
			</blockquote>
		</div>
	</div>
</div>
 </section><?
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
	?>