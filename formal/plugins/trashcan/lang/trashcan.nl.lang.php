<?php
/**
 * Dutch formal Language File for Trashcan (trashcan.nl.lang.php)
 *
 * @package Trashcan
 * @version 0.9.4
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['Trash'] = 'Afval';
$L['Trashcan'] = 'Prullenbak';
$L['core_trash'] = &$L['Prullenbak'];

/**
 * Config Section
 * Trash Subsection
 */

$L['cfg_trash_forum'] = array('Gebruik prullenbak voor de forums', '');
$L['cfg_trash_page'] = array('Gebruik prullenbak voor de pagina\'s', '');
$L['cfg_trash_pm'] = array('Gebruik prullenbak voor privéberichten', '');
$L['cfg_trash_prunedelay'] = array('Verwijder de items in de prullenbak na * dagen (0 om altijd te behouden)', '');
$L['cfg_trash_user'] = array('Gebruik prullenbak voor gebruikers', '');
$L['cfg_trash_comment'] = array('Gebruik prullenbak voor reacties', '');

$L['info_desc'] = 'Bewaard verwijderde items uit te prullenbak voor een tijd zodat deze herstelt kunnen worden indien nodig.';

/**
  * TrashCan Section
 */

$L['adm_help_trashcan'] = 'Dit is een lijst met items die recent naar de prullenbak zijn verplaatst door administratoren en moderators.<br />
Prullenbak legen: verwijder items definitief<br />
Herstellen: zet items terug in database<br />
<b>Note</b>:<br />
- Herstellen van een forum onderwerp herstelt ook alle reacties op dat onderwerp.<br />
- Herstellen van een bericht in aan verwijderd topic herstelt het gehele onderwerp indien mogelijk.<br />';
$L['adm_trashcan_deleted'] = 'Item verwijderd';
$L['adm_trashcan_prune'] = 'Prullenbak geleegd';
$L['adm_trashcan_restored'] = 'Item hersteld';
?>
