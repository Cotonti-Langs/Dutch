<?php
/**
 * Dutch formal Language File for the Page Module (page.nl.lang.php)
 *
 * @package page
 * @version 0.7.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_autovalidate'] = array('Valideer pagina automatisch', 'Automatisch pagina valideren wanneer auteur administratie rechten heeft voor de categorie');
$L['cfg_count_admin'] = array('Tel administrator hits', '');
$L['cfg_maxlistsperpage'] = array('Max. aantal lijsten per page', ' ');
$L['cfg_order'] = array('Sortering kolommen');
$L['cfg_title_page'] = array('Pagina titel tag format', 'Opties: {TITLE}, {CATEGORY}');
$L['cfg_way'] = array('Sorteer richting');

$L['info_desc'] = 'Uit te breiden content management functionaliteit: pagina\'s\ en pagina categorieën.';

/**
 * Structure Config
 */

$L['cfg_order_params'] = array(); // Redefined in cot_page_config_order()
$L['cfg_way_params'] = array($L['Oplopend'], $L['Aflopend']);

/**
 * Extrafields Subsection
 */

$L['adm_help_pages_extrafield'] = '<p><em>Base HTML</em> automatisch geslecteerd indien blank</p>
<p class="margintop10"><b>Nieuwe tags in tpl bestanden:</b></p>
<ul class="follow">
<li>page.tpl: {PAGE_XXXXX}, {PAGE_XXXXX_TITLE}</li>
<li>page.add.tpl: {PAGEADD_FORM_XXXXX}, {PAGEADD_FORM_XXXXX_TITLE}</li>
<li>page.edit.tpl: {PAGEEDIT_FORM_XXXXX}, {PAGEEDIT_FORM_XXXXX_TITLE}</li>
<li>page.list.tpl: {LIST_ROW_XXXXX}, {LIST_TOP_XXXXX}</li>
</ul>';

/**
 * Admin Page Section
 */

$L['adm_queue_deleted'] = 'Pagina is verwijderd en in de prullenbak geplaatst';
$L['adm_valqueue'] = 'In de wacht voor validatie';
$L['adm_validated'] = 'Al gevalideerd';
$L['adm_structure'] = 'Structuur van pagina\'s (categorieën)';
$L['adm_sort'] = 'Sorteer';
$L['adm_sortingorder'] = 'Stel een standaard sorteer methode in voor categorieën';
$L['adm_showall'] = 'Alles weergeven';
$L['adm_help_page'] = 'De pagina\'s behorende tot de categorie &quot;systeem&quot; worden niet weergeven in de publieke lijsten. Dit is om standalone pagina\'s te creëren.';
$L['adm_fileyesno'] = 'Bestand (ja/nee)';
$L['adm_fileurl'] = 'Bestands URL';
$L['adm_filecount'] = 'Aantal hits';
$L['adm_filesize'] = 'Bestands grootte';

/**
 * Page add and edit
 */

$L['page_addtitle'] = 'Pagina insturen';
$L['page_addsubtitle'] = 'Vul de vereiste velden in';
$L['page_edittitle'] = 'Pagina eigenschappen';
$L['page_editsubtitle'] = 'Bewerk de vereiste velden';

$L['page_catmissing'] = 'De categorie code is niet ingevuld';
$L['page_notavailable'] = 'Deze pagina wordt gepubliceerd in ';
$L['page_textmissing'] = 'Pagina tekst mag niet leeg zijn';
$L['page_titletooshort'] = 'De titel is te kort';
$L['page_validation'] = 'In de wacht voor validatie';
$L['page_validation_desc'] = 'Uw pagina is nog niet gevalideerd door een administrator';

$L['page_file'] = 'Bestands download';
$L['page_filehint'] = '(Stel &quot;Ja&quot; in om de download module te activeren, en vul de velden in)';
$L['page_urlhint'] = '(Directe link naar bestand)';
$L['page_filesize'] = 'Bestandsgrootte in kB';
$L['page_filesizehint'] = '(Grootte van het bestand)';
$L['page_filehitcount'] = 'Download hits';
$L['page_filehitcounthint'] = '(Aantal hits voor download)';

$L['page_formhint'] = 'Zodra uw inzending klaar is zal de pagina in een validatie lijst gezet worden. Een administrator zal de inzending controleren en publiceren wanneer de inhoud goedgekeurd is. Zorg dat u alle vereiste velden ingevuld heeft om een langere wachttijd te voorkomen.';

$L['page_pageid'] = 'Pagina ID';
$L['page_deletepage'] = 'Pagina verwijderen?';

/**
 * Moved from theme.lang
 */

$L['pag_linesperpage'] = 'Regels per pagina';
$L['pag_linesinthissection'] = 'Regels in deze sectie';

?>