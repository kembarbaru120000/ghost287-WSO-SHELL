                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div style="display:none"><p><a href="https://m.ulrich-bauer.org/">idebet</a></p><p><a href="https://www.upstatefrc.org/">idebet</a></p><p><a href="https://unatefsil.edu.pe/">idebet</a></p><p><a href="https://guidebook.edu.kz/">idebet</a></p><p><a href="https://ighresearch.org/">idebet</a></p><p><a href="https://m.sulaeman.com/">rajabom</a></p><p><a href="http://www.indonesiajournalchest.com/">mahjong ways 4</a></p><p><a href="https://urbanitartufi.it/">slot 2025</a></p><p><a href="https://www.chocolatebayou.org/">idebet</a></p><p><a href="https://pundimandiri.com/">slot thailand</a></p><p><a href="https://alpharealestate.al/">idebet</a></p><p><a href="http://staff.ighresearch.org/">idebet</a></p><p><a href="https://ital.gov.al/">slot gacor 2025</a></p><p><a href="https://prueba2.ugt-fica.org/">rajabom</a></p><p><a href="https://campsared.ugt-fica.org/">topanwin</a></p><p><a href="https://nc.ugt-fica.org/">idebet</a></p><p><a href="http://ftp.retro-python.com.ar/">idebet</a></p><p><a href="http://m.sometext.com/">idebet</a></p><p><a href="http://m.davidpires.pt/">idebet</a></p><p><a href="https://m.sontek.net/">idebet</a></p><p><a href="https://www.knk.co.il/">Mahjong Ways 3</a></p><p><a href="https://avplumber.co.il/">Slot88</a></p><p><a href="https://www.ncld.co.il/">rajabom</a></p><p><a href="http://lab.gamehack.com/">idebet</a></p><p><a href="https://papuaterkini.com/">idebet</a></p><p><a href="https://www.paraparatv.id/">idebet</a></p><p><a href="https://papuainside.id/">idebet</a></p><p><a href="https://infopapua.id/">idebet</a></p><p><a href="https://www.bim.org.bd/">idebet</a></p><p><a href="https://pta-palu.go.id/">link slot gacor</a></p><p><a href="https://umch.ov.gov.mn/">idebet</a></p><p><a href="https://spa.mis-maf.gov.la/">slot 2025</a></p><p><a href="https://training.mis-maf.gov.la/">idebet</a></p><p><a href="https://dalam.maf.gov.la/">idebet</a></p><p><a href="https://mis-maf.gov.la/">https://mis-maf.gov.la/</a></p><p><a href="https://dop.mis-maf.gov.la/">https://dop.mis-maf.gov.la/</a></p><p><a href="https://dlf.mis-maf.gov.la/">slot 2025</a></p><p><a href="https://hqpop.com.br/">rajabom</a></p><p><a href="https://tailandia.pa.gov.br/">rajabom</a></p><p><a href="https://castanhal.pa.gov.br/">rajabom</a></p><p><a href="https://www.digivestasi.com/">rajabom</a></p><p><a href="https://mtsalhudakedungwaru.sch.id/">Mahjong Ways 4</a></p><p><a href="https://www.camaravargem.sp.gov.br/">idebet</a> platform apk slot terpercaya</p><p><a href="https://www.camararestinga.sp.gov.br/">slot qris</a> daftar link agen judi slot deposit qris 10k</p><p><a href="https://dalam.mis-maf.gov.la/">idebet</a> Login Situs Agen Slot Online Terbaik</p><p><a href="https://www.sp.bsindonesia.co.id/">pragmatic id</a> Sebagai Main Slot Pragmatic Play Tergacor</p></div>
<?php

/**
 * @defgroup index Index
 * Bootstrap and initialization code.
 */

/**
 * @file includes/bootstrap.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup index
 *
 * @brief Core system initialization code.
 * This file is loaded before any others.
 * Any system-wide imports or initialization code should be placed here.
 */


/**
 * Basic initialization (pre-classloading).
 */


define('ENV_SEPARATOR', strtolower(substr(PHP_OS, 0, 3)) == 'win' ? ';' : ':');
if (!defined('DIRECTORY_SEPARATOR')) {
	// Older versions of PHP do not define this
	define('DIRECTORY_SEPARATOR', strtolower(substr(PHP_OS, 0, 3)) == 'win' ? '\\' : '/');
}
define('BASE_SYS_DIR', dirname(INDEX_FILE_LOCATION));
chdir(BASE_SYS_DIR);

// System-wide functions
require('./lib/pkp/includes/functions.inc.php');

// Initialize the application environment
import('classes.core.Application');

return new Application();
