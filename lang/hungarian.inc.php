<?php
// Purpose        Language strings definitions
// Author         Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000-2006 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details

//Initial authors
// Dutch          			Michael van Canneyt <Michael.VanCanneyt@Wisa.be
// Japanese       			Shue Miula <shue@xdip.com>
// Polish         			Matthias Hryniszak <matthias@hryniszak.de>
// Hungarian      			Zoltán Miklovicz <zmiklovicz@vivamail.hu>
// Spanish        			Jose Pichardo <joel_pichardo@yahoo.com>
// Russian        			Andrej Surkov <sura@mail.ru>
// Portuguese, Brazilian	Paulo Vaz <paulo@multi-informatica.com.br>

// strings used for the tabfolder menu
$menu_strings = array('Database' => 'Adatbázis',
                      'Tables' => 'Táblák',
                      'Accessories' => 'Kiegészítések',
                      'SQL' => 'SQL',
                      'Data' => 'Adat',
                      'Users' => 'Felhasználó',
                      'Admin' => 'Admin',
                      );

// strings used as panel titles
$ptitle_strings = array('info' => 'Info',
                        'db_login' => 'Belépés az adatbázisba',
                        'db_create' => 'Adatbázis létrehozása',
                        'db_delete' => 'Adatbázis törlése',
                        'db_systable' => 'Rendszer táblák',
                        'db_meta' => 'Meta adat',
                        'tb_show' => 'Táblák megtekintése',
                        'tb_create' => 'Új tábla létrehozása',
                        'tb_modify' => 'Tábla módosítása',
                        'tb_delete' => 'Tábla törlése',
                        'acc_index' => 'Indexek',
                        'acc_gen' => 'Generátorok',
                        'acc_trigger' => 'Triggerek',
                        'acc_proc' => 'Tárolt eljárások',
                        'acc_domain' => 'Domain-ek',
                        'acc_view' => 'Nézetek',
                        'acc_udf' => 'Felhasználói funkciók',
                        'acc_exc' => 'Kivételek',
                        'sql_enter' => 'Parancs bevitel',
                        'sql_output' => 'Eredmény',
                        'tb_watch' => 'Tábla megtekintése',
                        'dt_enter' => 'Adatbevitel',
                        'dt_export' => 'Export Data',
                        'dt_import' => 'CSV Import',
                        'usr_user' => 'Felhasználók',
                        'usr_role' => 'Szabályok',
                        'usr_grant' => 'Jogok',
                        'usr_cust' => 'Testreszabás',
                        'adm_server' => 'Szerver Statisztika',
                        'adm_dbstat' => 'Adatbázis Statisztika',
                        'adm_gfix' => 'Adatbázis karbantartás',
                        'adm_backup' => 'Backup',
                        'adm_restore' => 'Visszaállítás',
                        'Open' => 'nyitás',
                        'Close' => 'zárás',
                        'Up' => 'fel',
                        'Top' => 'elsõ',
                        'Bottom' => 'utolsó',
                        'Down' => 'le',
                        );

// strings to inscribe buttons
$button_strings = array('Login' => 'Belépés',
                        'Logout' => 'Kilépés',
                        'Create' => 'Létrehozás',
                        'Delete' => 'Törlés',
                        'Select' => 'Select',
                        'Save' => 'Mentés',
                        'Reset' => 'Reset',
                        'Cancel' => 'Mégsem',
                        'Add' => 'Hozzáad',
                        'Modify' => 'Módosítás',
                        'Ready' => 'Kész',
                        'Yes' => 'Igen',
                        'No' => 'Nem',
                        'DoQuery' => 'Perform Query',
                        'QueryPlan' => 'Query Plan',
                        'Go' => 'Go',
                        'DisplAll' => 'Minden',
                        'Insert' => 'Beszúrás',
                        'Export' => 'Export',
                        'Import' => 'Import',
                        'Remove' => 'Töröl',
                        'Drop' => 'Elvet',
                        'Set' => 'Beállítás',
                        'Clear' => 'Törlés',
                        'SweepNow' => 'Sweep Now',
                        'Execute' => 'Végrehajtás',
                        'Backup' => 'Backup',
                        'Restore' => 'Visszaállítás',
                        'Reload' => 'Frissítés',
                        'OpenAll' => 'Összes kinyitása',
                        'CloseAll' => 'Összes bezárása',
                        'Defaults' => 'Alapállapot',
                        'Load' => 'Betöltés',
                        'Unmark' => 'Unmark',
                        );

// strings on the database page
$db_strings = array('Database' => 'Adatbázis',
                    'Host' => 'Host',
                    'Username' => 'Felhasználó',
                    'Password' => 'Jelszó',
                    'Role' => 'Szabály',
                    'Cache' => 'Cache',
                    'Charset' => 'Karakterkészlet',
                    'Dialect' => 'Dialektus',
                    'Server' => 'Szerver',
                    'NewDB' => 'Új Adatbázis',
                    'PageSize' => 'Oldal méret',
                    'DelDB' => 'Adatbázis törlése',
                    'SysTables' => 'Rendszer táblák',
                    'SysData' => 'Rendszer adatok',
                    'FField' => 'Szûrõ mezõ',
                    'FValue' => 'Szûrési érték',
                    'Refresh' => 'Frissítés',
                    'Seconds' => 'mp',
                    );

// strings on the table page
$tb_strings = array('Name' => 'Név',
                    'Type' => 'Típus',
                    'Length' => 'Hossz',
                    'Prec' => 'Tizedes',
                    'PrecShort' => 'Tizedes',
                    'Scale' => 'Scale',
                    'Charset' => 'Karakter készlet',
                    'Collate' => 'Collate',
                    'Collation' => 'Collation',
                    'NotNull' => 'Not Null',
                    'Unique' => 'Egyedi',
                    'Computed' => 'Computed',
                    'Default' => 'Alapértelmezett érték',
                    'Primary' => 'Primary',
                    'Foreign' => 'Foreign',
                    'TbName' => 'Tábla név',
                    'Fields' => 'Mezõk',
                    'DefColumn' => 'Oszlop definíció',
                    'SelTbMod' => 'Válassza ki a módosítandó táblát',
                    'DefNewCol' => 'Új oszlop definíció',
                    'NewColPos' => 'Új oszlop pozíciója',
                    'SelColDel' => 'Válassza ki a törlendõ oszlopot',
                    'SelColMod' => 'Válassza ki a módosítandó oszlopot',
                    'AddCol' => 'Oszlop hozzáadása',
                    'SelTbDel' => 'Válassza ki a törlendõ táblát',
                    'Datatype' => 'Adattípus',
                    'Size' => 'Méret',
                    'Subtype' => 'Altípus',
                    'SegSiShort' => 'Szegmens méret',
                    'Domain' => 'Domain',
                    'CompBy' => 'Computed by',
                    'Table' => 'tábla',
                    'Column' => 'oszlop',
                    'Source' => 'Forrás',
                    'Check' => 'Ellenõriz',
                    'Yes' => 'Igen',
                    'DispCounts' => 'rekordszám megjelenítése',
                    'DispCNames' => 'constraint names',
                    'DispDef' => 'default values',
                    'DispComp' => 'computed values',
                    'DispComm' => 'comments',
                    'DropPK' => 'Elsõdleges kulcs törlése',
                    'DropFK' => 'Drop Foreign Key',
                    'DropUq' => 'Drop Unique Constraint',
                    'FKName' => 'Foreign Key Name',
                    'OnUpdate' => 'On Update',
                    'OnDelete' => 'On Delete',
                    'Table1' => 'Tábla',
                    'Column1' => 'Oszlop',
                    );

// strings on the accessories page
$acc_strings = array('CreateIdx' => 'Új index létrehozása',
                     'ModIdx' => '%s index módosítása',
                     'Name' => 'Név',
                     'Active' => 'Aktív',
                     'Unique' => 'Egyedi',
                     'Sort' => 'Sorrend',
                     'Table' => 'Tábla',
                     'Columns' => 'Oszlopok',
                     'SelIdxMod' => 'Módosítandó index',
                     'SelIdxDel' => 'Törlendõ index',
                     'ColExpl' => 'Oszlop(ok), vesszõvel elválasztva',
                     'Value' => 'Érték',
                     'SetValue' => 'Érték beállítása',
                     'DropGen' => 'Generátor törlése (drop)',
                     'CreateGen' => 'Új generátor létrehozása',
                     'StartVal' => 'Kezdeti érték',
                     'CreateTrig' => 'Új trigger létrehozása',
                     'SelTrigMod' => 'Módosítandó trigger',
                     'SelTrigDel' => 'Törlendõ trigger',
                     'Type' => 'Típus',
                     'Pos' => 'Pos',
                     'Phase' => 'Phase',
                     'Position' => 'Pozíció',
                     'Status' => 'Státusz',
                     'Source' => 'Forrás',
                     'ModTrig' => '%s trigger módosítása',
                     'CreateDom' => 'Új domain létrehozása',
                     'SelDomDel' => 'Törlendõ domain',
                     'SelDomMod' => 'Módosítandó domain',
                     'Size' => 'Méret',
                     'Charset' => 'Karakter készlet',
                     'Collate' => 'Collate',
                     'PrecShort' => 'Prec',
                     'Scale' => 'Scale',
                     'Subtype' => 'Altípus',
                     'SegSiShort' => 'Segmens méret',
                     'ModDomain' => '%s domain módosítása',
                     'Generator' => 'generátor',
                     'Index' => 'index',
                     'Trigger' => 'trigger',
                     'Domain' => 'domain',
                     'CreateProc' => 'Új eljárás létrehozása',
                     'ModProc' => '%s eljárás módosítása',
                     'SelProcMod' => 'Módosítandó eljárás',
                     'SelProcDel' => 'Törelendõ eljárás',
                     'SP' => 'tárolt eljárás',
                     'Param' => 'Paraméterek',
                     'Return' => 'Vissza',
                     'CreateView' => 'Új nézet létrehozása',
                     'SelViewDel' => 'Törlendõ nézet',
                     'SelViewMod' => 'Módosítandó nézet',
                     'CheckOpt' => 'ellenõrzési opcióval',
                     'ModView' => '%s nézet módosítása',
                     'Yes' => 'Igen',
                     'No' => 'Nem',
                     'Module' => 'Modul',
                     'EPoint' => 'Belépési pont',
                     'IParams' => 'Input Paraméterek',
                     'Returns' => 'Returns',
                     'UDF' => 'UDF',
                     'SelUdfDel' => 'Törelendõ funkció',
                     'Exception' => 'Kivétel',
                     'Message' => 'Üzenet',
                     'SelExcDel' => 'Törlendõ kivétel',
                     'CreateExc' => 'Új kivétel létrehozása',
                     'SelExcMod' => 'Módosítandó kivétel',
                     'ModExc' => '%s kivétel módosítása',
                     );

// strings on the sql page incl. the watch table panel
$sql_strings = array('DisplBuf' => 'eredmény megjelenítés buffer-bõl',
                     'SelTable' => 'Tábla kiválasztása',
                     'Config' => 'Konfig',
                     'Column' => 'Oszlop',
                     'Show' => 'Mutat',
                     'Sort' => 'Rendez',
                     'BlobLink' => 'Blob linkként',
                     'BlobType' => 'Blob típus',
                     'Rows' => 'Sorok',
                     'Start' => 'Start',
                     'Dir' => 'Irány',
                     'ELinks' => 'Link szerkesztése',
                     'DLinks' => 'Link törlése',
                     'Asc' => 'Növekvõ',
                     'Desc' => 'Csökkenõ',
                     'Restrict' => 'Condition to restrict the result, e.g. FIELDNAME>=1000',
                     'Prev' => 'Elõzõ',
                     'Next' => 'Következõ',
                     'End' => 'Vége',
                     'Total' => 'összes',
                     'Edit' => 'szerkesztés',
                     'Delete' => 'törlés',
                     'Yes' => 'Igen',
                     'No' => 'Nem',
                     'TBInline' => 'Text Blobs Inline',
                     'TBChars' => 'Text Blob Characters',
                     );

// strings on the data page
$dt_strings = array('SelTable' => 'Tábla kiválasztása',
                    'Table' => 'Tábla',
                    'EditFrom' => '%1$sEdit from table %2$s',
                    'FileName' => 'Fájlnév',
                    'EntName' => 'Név megadása',
                    'FileForm' => 'Fájl formátum',
                    'ConvEmpty' => 'üres mezõ konvertálása NULL-ként',
                    'CsvForm1' => 'minden mezõ értéke idézõjelek közé zárt (") és vesszõvel elválasztott',
                    'CsvForm2' => 'a mezõben lévõ idézõjel duplázásra kerül',
                    'CsvForm3' => 'a sorok elválasztása (0x0a) jellel',
                    'ColConf' => 'Configuration for Column %1$s',
                    'ColFKLook' => 'Column for foreign key lookup',
                    'FKLookup' => 'foreign key lookup',
                    'IARow' => 'insert another row',
                    'INRow' => 'insert as a new row',
                    'Drop' => 'drop',
                    'ExpOptCsv' => 'CSV-Data',
                    'ExpOptExt' => 'External Table',
                    'ExpOptSql' => 'SQL',
                    'ExpFmTbl' => 'Table',
                    'ExpFmDb' => 'Database',
                    'ExpFmQry' => 'Query',
                    'ExpTgFile' => 'File',
                    'ExpTgScr' => 'Screen',
                    'GenOpts' => 'General Options',
                    'ReplNull' => 'Replace <i>NULL</i> values by',
                    'DFormat' => 'Date format',
                    'TFormat' => 'Time format',
                    'CsvOpts' => 'CSV-Options',
                    'FTerm' => 'Fields terminated by',
                    'FEncl' => 'Fields enclosed by',
                    'FTEncl' => 'Field types to enclose',
                    'All' => 'all',
                    'NonNum' => 'non numeric',
                    'FEsc' => 'Escape character',
                    'LTerm' => 'Lines terminated by',
                    'FNamesF' => 'Field names at first row',
                    'SqlOpts' => 'SQL-Options',
                    'SqlCNames' => 'include column names',
                    'SqlQNames' => 'quote column names',
                    'SqlCField' => 'include computed fields',
                    'SqlInfo' => 'add export info',
                    'SqlLE' => 'line ending',
                    'SqlTTab' => 'target table name',
                    'ExtOpts' => 'External table options',
                    'PhpOpts' => 'PHP source options',
                    );

// strings on the user page
$usr_strings = array('CreateUsr' => 'Új felhasználó létrehozása',
                     'ModUser' => '%s felhasználó módosítása',
                     'UName' => 'Felhasználó név',
                     'FName' => 'Keresztnév',
                     'MName' => 'Középsõ név',
                     'LName' => 'Vezetéknév',
                     'UserID' => 'Felhasználó ID',
                     'GroupID' => 'Csoport ID',
                     'SysdbaPW' => 'SYSDBA jelszava',
                     'Required' => 'required for create, modify and delete',
                     'USelMod' => 'Módosítandó felhasználó',
                     'USelDel' => 'Törlendõ felhasználó',
                     'Password' => 'Jelszó',
                     'RepeatPW' => 'Jelszó ismétlése',
                     'Name' => 'Név',
                     'Owner' => 'Tulajdonos',
                     'Members' => 'Tagok',
                     'Role' => 'Szabály',
                     'User' => 'Felhasználó',
                     'CreateRole' => 'Új szabály létrehozása',
                     'RoleSelDel' => 'Törlendõ szabály',
                     'RoleAdd' => 'Szabály bõvítése',
                     'RoleRem' => 'Szabály szûkítése',
                     'ColSet' => 'Szín beállítások',
                     'CBg' => 'Háttér',
                     'CPanel' => 'Panel keret',
                     'CArea' => 'Panel háttér',
                     'CHeadline' => 'Fejléc háttér',
                     'CMenubrd' => 'Menü keret',
                     'CIfBorder' => 'Iframe Border',
                     'CIfBg' => 'Iframe Background',
                     'CLink' => 'Linkek',
                     'CHover' => 'Linkek az egér alatt',
                     'CSelRow' => 'Kiválasztott sorok',
                     'CSelInput' => 'Kiválasztott beviteli sorok',
                     'CFirstRow' => 'Páros sorok',
                     'CSecRow' => 'Páratlan sorok',
                     'Appearance' => 'Egyebek',
                     'Language' => 'Nyelv',
                     'Fontsize' => 'Betüméret pont-ban',
                     'TACols' => 'Szövegterület oszlopainak száma',
                     'TARows' => 'Szövegterület sorainak száma',
                     'IFHeight' => 'Iframe Height in Pixel',
                     'Attitude' => 'Tevékenység',
                     'AskDel' => 'Adatok törlésének jóváhagyása',
                     'Yes' => 'Igen',
                     'No' => 'Nem',
                    );

// strings on the admin page
$adm_strings = array('SysdbaPW' => 'SYSDBA jelszó',
                     'Required' => 'szükséges, ha nem vagy adatbázis tulajdonos',
                     'Sweeping' => 'Sweeping',
                     'SetInterv' => 'Set sweep threshold (number transactions)',
                     'DBDialect' => 'DB Dialect',
                     'Buffers' => 'Cache Buffers',
                     'AccessMode' => 'Hozzáférés módja',
                     'WriteMode' => 'Írás módja',
                     'ReadWrite' => 'olvasás/írás',
                     'ReadOnly' => 'csak olvasható',
                     'Sync' => 'szinkron',
                     'Async' => 'asszinkron',
                     'UseSpace' => 'Use Space',
                     'SmallFull' => 'full',
                     'Reserve' => 'reserve',
                     'DataRepair' => 'Adatjavítás',
                     'Validate' => 'Validálás',
                     'Full' => 'Teljes',
                     'Mend' => 'Mend',
                     'NoUpdate' => 'Nincs frissítés',
                     'IgnoreChk' => 'Checksum hibák kihagyása',
                     'Transact' => 'Tranzakciók',
                     'Shutdown' => 'Shutdown',
                     'Commit' => 'Commit',
                     'Rollback' => 'Rollback',
                     'TwoPhase' => 'Kétfázisú visszaállítás',
                     'AllLimbo' => 'összes függõ tranzakció',
                     'NoConns' => 'Új kapcsolat tiltása',
                     'NoTrans' => 'Új tranzakció tiltása',
                     'Force' => 'Force',
                     'ForSeconds' => '%s másodperc után',
                     'Reconnect' => 'Shutdown után FirebirdWebAdmin újra kapcsolódik',
                     'Rescind' => 'Visszavont Shutdown',
                     'BTarget' => 'Backup cél',
                     'FDName' => 'Fájl vagy meghajtó neve',
                     'Options' => 'Opciók',
                     'BConvert' => 'Külsõ állomány konvertálása belsõ táblává',
                     'BNoGC' => 'Do not garbage collect during backup',
                     'BIgnoreCS' => 'Checksums kihagyása backup során',
                     'BIgnoreLT' => 'Függõ tranzakciók kihagyása backup során',
                     'BTransport' => 'Nem transzparens backup',
                     'BMDOnly' => 'Csak metaadatok backup-ja',
                     'BMDOStyle' => 'Metaadatok régi formátumban',
                     'RSource' => 'Viszaállítás forrása',
                     'RTarget' => 'Visszaállítás célja',
                     'TargetDB' => 'Cél adatbázis',
                     'NewFile' => 'Visszaállítás új állományba',
                     'RestFile' => 'Létezõ állomány felülírása',
                     'PageSize' => 'Oldal mérete',
                     'UseAll' => 'Restore Database with 100% fill ratio on every data page',
                     'OneAtTime' => 'Egyidõben csak egy tábla visszaállítása',
                     'IdxInact' => 'Visszaállítás során az indexek passzívak',
                     'NoValidity' => 'Delete validity constraints from restored metadata',
                     'KillShad' => 'Nem hozza létre a korábban definiált shadow állományokat',
                     'ConnAfter' => 'FirebirdWebAdmin kapcsolódása a visszaállított adatbázishoz',
                     'Verbose' => 'Verbose',
                     'Analyze' => 'Analyze',
                     );

// strings for the info-panel
$info_strings = array('Connected' => 'Kapcsolódott adatbázis',
                      'ExtResult' => 'Külsõ parancs eredménye',
                      'FBError' => 'InterBase Hiba',
                      'ExtError' => 'Hiba külsõ parancsból',
                      'Error' => 'Hiba',
                      'Warning' => 'Figyelmeztetés',
                      'Message' => 'Üzenet',
                      'ComCall' => 'Parancs hívása',
                      'Debug' => 'Debug eredménye',
                      'PHPError' => 'PHP Hiba',
                      'SuccessLogin' => 'You have been successfully logged in!',
                      );

$MESSAGES = array('SP_CREATE_INFO' => 'FirebirdWebAdmin létrehozta a "'.SP_LIMIT_NAME.'" tárolt eljárást, amit a Watch Table funkció használ. '
                                            ."Az eljárás mentésre került.<br>\n"
                                            .'Ha egyszerre többen használják az FirebirdWebAdmin-t, kérem  állítsa be '
                                            ."a WATCHTABLE_METHOD változót az inc/configuration.inc.php állományban.<br>\n",
                  'EDIT_ADD_PRIMARY' => "If editing is enabled the primary key fields must be selected for showing in the watch table configuration.<br>\n"
                                            .'The program has auto-selected the necessary primary index fields.',
                  'CSV_IMPORT_COUNT' => '%1$d sorok importálásra kerültek a %2$s táblába.<br>',
                  'CONFIRM_TABLE_DELETE' => 'Valóban törölni akarja a %s táblát?',
                  'CONFIRM_COLUMN_DELETE' => 'Valóban törölni akarja a(z) %1$s oszlopot a(z) %2$s táblából?',
                  'CONFIRM_DB_DELETE' => 'Valóban törölni akarja a(z) %s adatbázist?',
                  'CONFIRM_TRIGGER_DELETE' => 'Valóban törölni akaraja a(z) %s triggert?',
                  'CONFIRM_DOMAIN_DELETE' => 'Valóban törölni akaraja a(z) %s domain-t?',
                  'CONFIRM_INDEX_DELETE' => 'Valóban törölni akaraja a(z) %s index-et?',
                  'CONFIRM_GEN_DELETE' => 'Valóban törölni akaraja a(z) %s generátor-t?',
                  'CONFIRM_USER_DELETE' => 'Valóban törölni akaraja a(z) %s felhasználót?',
                  'CONFIRM_ROW_DELETE' => 'Valóban törölni akaraja a(z) %s %s táblából?',
                  'CONFIRM_SP_DELETE' => 'Valóban törölni akaraja a(z) %s tárolt eljárást?',
                  'CONFIRM_VIEW_DELETE' => 'Valóban törölni akaraja a(z) %s nézetet?',
                  'CONFIRM_UDF_DELETE' => 'Valóban törölni akaraja a(z) %s funkciót?',
                  'CONFIRM_EXC_DELETE' => 'Valóban törölni akaraja a(z) %s kivételt?',
                  'NO_VIEW_SUPPORT' => "Nézet szerkesztése és törlése nem engedélyezett mostanáig.<br>\n",
                  'CREATE_DB_SUCCESS' => "A(z) %s adatbázis sikeresen létrejött.\n",
                  'HAVE_DEPENDENCIES' => 'A következõ objektumokat elõbb törölni kell %1$s %2$s: %3$s',
                  'COOKIES_NEEDED' => 'A sütiketet engedélyezni kell, ha használni kívánja a testreszabás funkciót!',
                  );

$WARNINGS = array('CAN_NOT_EXPORT_BLOBS' => "The blob fields in the table you have selected are omitted.<br>\n"
                                            ."Only the csv export of text blobs is supported.<br>\n",
                  'CAN_NOT_IMPORT_BLOBS' => "The blob fields in the table you have selected are omitted.<br>\n"
                                            ."Only the csv import of text blobs is supported.<br>\n",
                  'SELECT_TABLE_FIRST' => "Válasszon táblát<br>\n",
                  'SELECT_FILE_FIRST' => "Válasszon import állományt<br>\n",
                  'CAN_NOT_ALTER_DOMAINS' => "Altering domain based columns is not supported by InterBase.<br>\n"
                                            ."Instead change the domain definition on the Accessories page.<br>\n",
                  'CAN_NOT_EDIT_TABLE' => "A kiválasztott tábla szerkesztése nem lehetséges.<br>\n"
                                            ."Csak elsõdleges kulccsal rendelkezõ tábla szerkeszthetõ.<br>\n",
                  'CAN_NOT_DEL_TABLE' => "A kiválasztott táblából nem törölhetõk az adatok.<br>\n"
                                            ."Csak elsõdleges kulccsal rendelkezõ táblából lehet törölni.<br>\n",
                  'DEL_NO_PERMISSON' => "Nincs joga törölni a %s táblát<br>\n",
                  'EDIT_NO_PERMISSON' => "Nincs joga szerkeszteni a %s táblát<br>\n",
                  'CAN_NOT_ACCESS_DIR' => "A webszerver nem fér hozzáa a %s könyvtárhoz<br>\n",
                  'NAME_IS_KEYWORD' => "%s foglalt kulcsszó<br>\n",
                  'NAMES_ARE_KEYWORDS' => "%s foglalt kulcsszavak<br>\n",
                  'NEED_SYSDBA_PW' => "SYSDBA jelszó szükséges felhasználó létrehozásához, módosításához és törléséhez.<br>\n",
                  'PW_REQUIRED' => "Jelszó szükséges<br>\n",
                  'UN_REQUIRED' => "Felhasználónév szükséges<br>\n",
                  'PW_WRONG_REPEAT' => "A megismételt jelszó hibás.<br>\n",
                  'BAD_ISQLPATH' => "Az isql állomány nem található itt: %s!<br>\n"
                                            ."Ellenõrizze a BINPATH-t az inc/configuration.inc.php állományban.<br>\n",
                  'BAD_TMPPATH' => "Your configured TMPPATH directory '%s' didn't exist or is not writeable for the webserver process!<br>\n"
                                            ."Please check the value for TMPPATH in inc/configuration.inc.php.<br>\n",
                  );

$ERRORS = array('CREATE_DB_FAILED' => '<b>%s</b> adatbázis létrehozási hiba!',
                  'NO_DB_SELECTED' => 'Válasszon ki egy adatbázis nevet!<br>',
                  'WRONG_DB_SUFFIX' => 'Az adatbázis neve <b>%s</b> kell végzõdjön.',
                  'DB_NOT_ALLOWED' => '<b>%s</b> hozzáférés nem engedélyezett.<br>'
                                             .'(ellenõrizze a $ALLOWED_FILES és $ALLOWED_DIRS paramétereket az inc/configuration.php)',
                  'NO_IBASE_MODULE' => '<b>Az installált PHP nem támogatja az Interbase-t!</b><br>'
                                            .'Fordítsa újra a PHP-t a --with-interbase[=DIR] opcióval<br>'
                                            .'vagy szerkessze a php.ini állományt és töltse be az interbase.so-t vagy az interbase.dll-t.',
                  'DISABLED_CMD' => 'Sql-statements containing "%s" are forbidden by the configuration!',
                  'BAD_BINPATH' => "Nem található <b>%s</b> parancs!\n"
                                            ."Ellenõrizze a BINPATH-t az inc/configuration.inc.php állományban.\n",
                  );

// charset encoding  for html output
$charset = 'UTF-8';
