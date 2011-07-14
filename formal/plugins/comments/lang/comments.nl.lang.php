<?php
/**
 * Dutch formal Language File for Comments Plugin (comments.nl.lang.php)
 *
 * @package comments
 * @version 0.7.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_enable_comments'] = array('Activeer reacties');
$L['cfg_mail'] = array('Notificaties via e-mail bij nieuwe reacties');
$L['cfg_markitup'] = array('Gebruik markitup');
$L['cfg_markup'] = array('Activeer markup in reacties');
$L['cfg_minsize'] = array('Min. reactie lengte');
$L['cfg_time'] = array('Tijd voor aanpasbare reacties', 'in minuten');
$L['cfg_rss_commentmaxsymbols'] = array('Reacties. Knip beschrijving wanneer langer dan x aantal karakters', 'Standaard uitgeschakeld');
$L['cfg_expand_comments'] = array('Reacties uitvouwen', 'Laat reacties standaard uitgevouwen zien');
$L['cfg_maxcommentsperpage'] = array('Max. aantal reacties op pagina', ' ');
$L['cfg_commentsize'] = array('Max. grootte voor reacties, bytes', '0 voor ongelimiteerd');
$L['cfg_countcomments'] = array('Tel reacties', 'Laat aantal reacties zien naast icoon');
$L['cfg_order'] = array('Sorteer volgorde', 'chronologisch of laatste eerst');
$L['cfg_order_params'] = array('Chronologisch', 'Recent');
$L['cfg_parsebbcodecom'] = array('Parse BBcodes in reacties', '');
$L['cfg_parsesmiliescom'] = array('Parse smilies in reacties', '');

$L['info_desc'] = 'Reactie systeem voor Cotonti met API en integratie in pagina\'s, lijsten, polls, RSS feeds, en andere extensies.';

/**
 * Plugin Body
 */

$L['comments_comment'] = 'Reactie';
$L['comments_comments'] = 'Reacties';
$L['Newcomment'] = 'Nieuwe reactie';

$L['comm_on_page'] = 'op pagina';

$L['com_closed'] = 'Nieuwe reacties toevoegen is uitgeschakeld voor dit item.';
$L['com_commentadded'] = 'Nieuwe reactie is toegevoegd.';
$L['com_commenttoolong'] = 'Uw reactie is te lang.';
$L['com_commenttooshort'] = 'Uw reactie is te kort.';
$L['com_nocommentsyet'] = 'Nog geen reacties op dit item.';
$L['com_authortooshort'] = 'Uw naam is te kort.';
$L['com_regonly'] = 'Alleen geregistreerde gebruikers kunnen reacties plaatsen.';

$L['plu_comgup'] = ' links';
$L['com_edithint'] = 'Uw reactie is aan te passen voor {$time}';

$L['plu_comlive'] = 'Nieuwe reacties op onze website';
$L['plu_comlive1'] = 'Reactie aangepast op de website';
$L['plu_comlive2'] = 'heeft een reactie geplaatst:';
$L['plu_comlive3'] = 'heeft de reactie aangepast:';
$L['rss_comments'] = 'Reacties voor';
$L['rss_comment_of_user'] = 'Reacties van';
$L['rss_comments_item_desc'] = 'Laatste reactie op pagina';
$L['rss_original'] = 'Origineel bericht';

/**
 * Admin Section
 */

$L['home_newcomments'] = 'Nieuwe reacties';
$L['core_comments'] = &$L['Reacties'];
$L['adm_comm_already_del'] = 'Reactie verwijderd';

/**
 * cot_declension Arrays
 */

$Ls['Comments'] = array('reacties','reactie');

/**
 * Comedit
 */

$L['plu_title'] = 'Reactie aanpassen';

?>