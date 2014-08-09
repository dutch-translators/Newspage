<?php
/**
*
* newspage [Dutch]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'NEWS'								=> 'Nieuws',
	'NEWS_ADD_NEW'						=> 'Nieuw',
	'NEWS_ADD_NEW_TITLE'				=> 'Maak nieuw nieuwsbericht',
	'NEWS_ARCHIVE_SHOW'					=> 'Sta toe om te sorteren op datum',
	'NEWS_ARCHIVE'						=> 'Archief',
	'NEWS_ARCHIVE_OF'					=> 'Archief %s',
	'NEWS_ATTACH_SHOW'					=> 'Laat bijlagen zien',
	'NEWS_ATTACH_SHOW_EXPLAIN'			=> 'Inline bijlagen worden altijd weergegeven.',
	'NEWS_CAT'							=> 'Categorieën',
	'NEWS_CAT_SHOW'						=> 'Sta toe om te sorteren op forums',
	'NEWS_CHAR_LIMIT'					=> 'Aantal karakters',
	'NEWS_COMMENTS'						=> 'Reacties',
	'NEWS_FILTER_ARCHIVE'				=> 'Filter datum',
	'NEWS_FILTER_BY_ARCHIVE'			=> 'Sorteer op datum',
	'NEWS_FILTER_BY_CATEGORY'			=> 'Sorteer op forumonderdeel',
	'NEWS_FILTER_CATEGORY'				=> 'Filter forum',
	'NEWS_FILTER_REMOVE'				=> 'Verwijder filter',
	'NEWS_FORUMS'						=> 'Selecteer Nieuws-Forums',
	'NEWS_GO_TO_TOPIC'					=> 'Link naar het onderwerp',
	'NEWS_NUMBER'						=> 'Berichten per pagina',
	'NEWS_PAGES'						=> 'Aantal pagina‘s',
	'NEWS_POLL'							=> 'Poll',
	'NEWS_POLL_GOTO'					=> 'Klik hier om te stemmen!',
	'NEWS_POST_BUTTONS'					=> 'Laat bericht knoppen zien',
	'NEWS_POST_BUTTONS_EXPLAIN'			=> 'Quote, Wijzig, enz.',
	'NEWS_READ_FULL'					=> 'Lees het volledige nieuwsbericht',
	'NEWS_READ_HERE'					=> 'Hier',
	'NEWS_SAVED'						=> 'De instellingen zijn succesvol bijgewerkt.',
	'NEWS_SHADOW_SHOW'					=> 'Laat verplaatste onderwerpen zien',
	'NEWS_USER_INFO'					=> 'Laat gebruikers informatie zien',
	'NEWS_USER_INFO_EXPLAIN'			=> 'Avatar, Profiel velden, enz.',
	'NO_NEWS'							=> 'Er zijn geen nieuwsberichten.',
	'NO_NEWS_ARCHIVE'					=> 'Er zijn geen nieuwsberichten in het archief.',
	'NO_NEWS_CATEGORY'					=> 'Er zijn geen nieuwsberichten in deze categorie.',
	'NEWSPAGE'							=> 'Nieuws',
	'VIEW_NEWS_POSTS'	=> array(
		0	=> 'Geen nieuws',
		1	=> '1 nieuws',
		2	=> '%d nieuws',
	),
	'VIEWONLINE_NEWS'					=> 'Bekijkt nieuwspagina',
	'VIEWONLINE_NEWS_ARCHIVE'			=> 'Bekijkt nieuws van %s',
	'VIEWONLINE_NEWS_CATEGORY'			=> 'Bekijkt nieuws in %s',
	'VIEWONLINE_NEWS_CATEGORY_ARCHIVE'	=> 'Bekijkt het nieuws in %s van %s',
));
