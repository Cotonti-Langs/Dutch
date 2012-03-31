<?php

/**
 * Dutch Language File for Contact Plugin (contact.nl.lang.php)
 * @version 0.9.0
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

/**
 * Plugin Config
 */

$L['cfg_email'] = array('E-mail', '(leeg laten om administrator e-mail adres te gebruiken');
$L['cfg_minchars'] = array('Min. aantal karakters in bericht');
$L['cfg_map'] = array('Map');
$L['cfg_about'] = array('Over');
$L['cfg_save'] = array('Opslag methode');
$L['cfg_save_params'] = array('e-mail', 'database', 'e-mail + database');
$L['cfg_template'] = array('E-mail template', 'Gebruikt variabelen: {$sitetitle}, {$siteurl}, {$author}, {$email}, {$subject}, {$text}, {$extra}, {$extraXXXX}, {$extraXXXX_title}');
$L['info_desc'] = 'Contact e-mail formulier voor reacties van bezoekers';

/**
 * Plugin Admin
 */

$L['contact_view'] = 'Bekijk bericht';
$L['contact_markread'] = 'Markeer als gelezen';
$L['contact_read'] = 'Gelezen';
$L['contact_markunread'] = 'Markeer als ongelezen';
$L['contact_unread'] = 'Ongelezen';
$L['contact_new'] = 'Nieuwe bericht';
$L['contact_shortnew'] = 'nieuw';
$L['contact_sent'] = 'Laatste reactie';
$L['contact_nosubject'] = 'Geen onderwerp';

/**
 * Plugin Title & Subtitle
 */

$L['contact_title'] = 'Contact formulier';
$L['contact_subtitle'] = 'Neem contact met ons op';

/**
 * Plugin Body
 */

$L['contact_headercontact'] = 'Contact';
$Ls['contact_headercontact'] = array('berichten', 'bericht');
$L['contact_entrytooshort'] = '- Bericht is te kort';
$L['contact_noname'] = '- Vul een naam in';
$L['contact_emailnotvalid'] = '- E-mail adres is niet correct';
$L['contact_message_sent'] = 'Je bericht is succesvol verzonden!';

?>