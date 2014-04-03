<?php

	/**
	 * Hungarian language file for phpPgAdmin.
	 * maintainer: Sulyok Peti <sulyokpeti@gmail.com>
	 *
	 *
	 */

	// Language and character set
	$lang['applang'] = 'Magyar';
	$lang['appcharset'] = 'UTF-8';
	$lang['applocale'] = 'hu_HU';
	$lang['appdbencoding'] = 'LATIN2';  // It would be good to change this to UNICODE. IMHO
	$lang['applangdir'] = 'ltr';

	// Welcome  
	$lang['strintro'] = 'Üdvözli a phpPgAdmin!';
	$lang['strppahome'] = 'A phpPgAdmin honlapja';
	$lang['strpgsqlhome'] = 'A PostgreSQL honlapja';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'A PostgreSQL (helyi) dokumentációja';
	$lang['strreportbug'] = 'Hibajelentés feladása';
	$lang['strviewfaq'] = 'GYIK megtekintése';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
	
	// Basic strings
	$lang['strlogin'] = 'Bejelentkezés';
	$lang['strloginfailed'] = 'Nem sikerült bejelentkezni';
	$lang['strlogindisallowed'] = 'Biztonsági okból engedélyezettlen a bejelentkezés.';
	$lang['strserver'] = 'Szolgáló';
	$lang['strservers']  =  'Szolgálók';
	$lang['strgroupservers'] = 'Szolgálók „%s” csoportban';
	$lang['strallservers'] = 'Minden szolgáló';
	$lang['strintroduction']  =  'Bevezető';
	$lang['strhost']  =  'Gazda';
	$lang['strport']  =  'Kapu';
	$lang['strlogout'] = 'Kilépés';
	$lang['strowner'] = 'Tulajdonos';
	$lang['straction'] = 'Művelet';
	$lang['stractions'] = 'Műveletek';
	$lang['strname'] = 'Név';
	$lang['strdefinition'] = 'Definíció';
	$lang['strproperties'] = 'Tulajdonságok';
	$lang['strbrowse'] = 'Tallóz';
	$lang['strenable']  =  'Enged';
	$lang['strdisable']  =  'Tilt';
	$lang['strdrop'] = 'Töröl';
	$lang['strdropped'] = 'Törlölve';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Not Null';
	$lang['strprev'] = '< Előző';
	$lang['strnext'] = 'Következő >';
	$lang['strfirst'] = '<< Első';
	$lang['strlast'] = 'Utolsó >>';
	$lang['strfailed'] = 'Sikertelen';
	$lang['strcreate'] = 'Teremt';
	$lang['strcreated'] = 'Megteremtve';
	$lang['strcomment'] = 'Megjegyzés';
	$lang['strlength'] = 'Hossz';
	$lang['strdefault'] = 'Alapértelmezés';
	$lang['stralter'] = 'Módosít';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Mégsem';
	$lang['strkill'] = 'Öl';
	$lang['strac']  =  'Önműködő kiegészítés engedélyezése';
	$lang['strsave'] = 'Ment';
	$lang['strreset'] = 'Újra';
	$lang['strrestart'] = 'Újraindít';
	$lang['strinsert'] = 'Beszúr';
	$lang['strselect'] = 'Kiválaszt';
	$lang['strdelete'] = 'Töröl';
	$lang['strupdate'] = 'Időszerűsít';
	$lang['strreferences'] = 'Hivatkozások';
	$lang['stryes'] = 'Igen';
	$lang['strno'] = 'Nem';
	$lang['strtrue'] = 'IGAZ';
	$lang['strfalse'] = 'HAMIS';
	$lang['stredit'] = 'Szerkeszt';
	$lang['strcolumn']  = 'Oszlop';
	$lang['strcolumns'] = 'Oszlopok';
	$lang['strrows'] = 'sor';
	$lang['strrowsaff'] = 'sor érintett.';
	$lang['strobjects'] = 'objektum';
	$lang['strback'] = 'Vissza';
	$lang['strqueryresults'] = 'Lekérdezés eredményei';
	$lang['strshow'] = 'Megjelenít';
	$lang['strempty'] = 'Ürít';
	$lang['strlanguage'] = 'Nyelv';
	$lang['strencoding'] = 'Kódolás';
	$lang['strvalue'] = 'Érték';
	$lang['strunique'] = 'egyedi';
	$lang['strprimary'] = 'Elsődleges';
	$lang['strexport'] = 'Kivisz';
	$lang['strimport'] = 'Behoz';
	$lang['strallowednulls']  =  'Engedélyezett NULL betűk';
	$lang['strbackslashn']  =  '\N';
	$lang['stremptystring']  =  'Üres szöveg/mező';
	$lang['strsql'] = 'SQL';
	$lang['stradmin'] = 'Gazda';
	$lang['strvacuum'] = 'Takarít';
	$lang['stranalyze'] = 'Elemez';
	$lang['strclusterindex'] = 'Fürtöz';
	$lang['strclustered'] = 'Fürtözve?';
	$lang['strreindex'] = 'Újraindexel';
	$lang['strexecute']  =  'Végrehajt';
	$lang['stradd'] = 'Bővít';
	$lang['strevent'] = 'Esemény';
	$lang['strwhere'] = 'Hol';
	$lang['strinstead'] = 'Inkább';
	$lang['strwhen'] = 'Mikor';
	$lang['strformat'] = 'Alak';
	$lang['strdata'] = 'Adatok';
	$lang['strconfirm'] = 'Megerősít';
	$lang['strexpression'] = 'Kifejezés';
	$lang['strellipsis'] = '…';
	$lang['strseparator']  =  ': ';
	$lang['strexpand'] = 'Kinyit';
	$lang['strcollapse'] = 'Összecsuk';
	$lang['strfind'] = 'Keres';
	$lang['stroptions'] = 'Részletek';
	$lang['strrefresh'] = 'Frissít';
	$lang['strdownload'] = 'Letöltés';
	$lang['strdownloadgzipped'] = 'Gzippel tömörített letöltés';
	$lang['strinfo'] = 'Infó';
	$lang['stroids'] = 'OID-k';
	$lang['stradvanced'] = 'Haladó';
	$lang['strvariables'] = 'Változók';
	$lang['strprocess'] = 'Folyamat';
	$lang['strprocesses'] = 'Folyamatok';
	$lang['strsetting'] = 'Beállítás';
	$lang['streditsql'] = 'SQL-szerkesztés';
	$lang['strruntime'] = 'Teljes futási idő: %s ms';
	$lang['strpaginate'] = 'Oldalakra tördelés';
	$lang['struploadscript'] = 'vagy egy SQL-írás feltöltése:';
	$lang['strstarttime'] = 'Kezdés ideje';
	$lang['strfile'] = 'Fájl';
	$lang['strfileimported'] = 'Fájl behozva.';
	$lang['strtrycred']  =  'Használja minden kiszolgálóhoz e beállításokat';
	$lang['strconfdropcred'] = 'Biztonság okán a szétválás megszünteti a megosztott bejelentkező adatait. Biztosan szét akar válni?';
	$lang['stractionsonmultiplelines']  =  'Több soros műveletek';
	$lang['strselectall']  =  'Mindent kiválaszt';
	$lang['strunselectall']  =  'Semmit sem választ ki';
	$lang['strlocale']  =  'Helyszín';
	$lang['strcollation'] = 'Összerakás';
	$lang['strctype'] = 'Betűtípus';
	$lang['strdefaultvalues'] = 'Alapértékek';
	$lang['strnewvalues'] = 'Új értékek';
	$lang['strstart'] = 'Indít';
	$lang['strstop'] = 'Leállít';
	$lang['strgotoppage'] = 'vissza a tetejére';
	$lang['strtheme'] = 'Téma';
	
	// Admin
	$lang['stradminondatabase'] = 'A következő adminisztratív feladatok %s adatbázis egészére vonatkoznak.';
	$lang['stradminontable'] = 'A következő adminisztratív feladatok %s táblára vonatkoznak.';

	// User-supplied SQL history
	$lang['strhistory']  =  'Előzmények';
	$lang['strnohistory']  =  'Nincs előzmény.';
	$lang['strclearhistory']  =  'Előzményeket töröl';
	$lang['strdelhistory']  =  'Előzményekből töröl';
	$lang['strconfdelhistory']  =  'Tényleg töröli e kérelmet az előzményekből?';
	$lang['strconfclearhistory']  =  'Tényleg töröli az előzményeket?';
	$lang['strnodatabaseselected']  =  'Ki kell választani az adatbázist.';

	// Database sizes
	$lang['strnoaccess'] = 'Nincs hozzáférés'; 
	$lang['strsize']  =  'Méret';
	$lang['strbytes']  =  'bájt';
	$lang['strkb']  =  'kB';
	$lang['strmb']  =  'MB';
	$lang['strgb']  =  'GB';
	$lang['strtb']  =  'TB';

	// Error handling
	$lang['strnoframes']  =  'Ez alkalmazás legjobban kereteket támogató böngészővel működik, de használható keretek nélkül is az alábbi hivatkozásra kattintva.';
	$lang['strnoframeslink']  =  'Keretek nélküli használat';
	$lang['strbadconfig'] = 'A config.inc.php elavult. Újra kell teremteni az új config.inc.php-dist fájlból.';
	$lang['strnotloaded'] = 'Az ön PHP rendszere nem támogatja a PostgreSQL-t.';
	$lang['strpostgresqlversionnotsupported']  =  'A PostgreSQL e változata nem megfelelő. Kérem telepítse a %s változatot, vagy újabbat!';
	$lang['strbadschema'] = 'A megadott séma érvénytelen.';
	$lang['strbadencoding'] = 'Az ügyfél oldali kódolás beállítása az adatbázisban nem sikerült.';
	$lang['strsqlerror'] = 'SQL hiba:';
	$lang['strinstatement'] = 'A következő kifejezésben:';
	$lang['strinvalidparam'] = 'Érvénytelen paraméterek.';
	$lang['strnodata'] = 'Nincsenek sorok.';
	$lang['strnoobjects'] = 'Nincsenek objektumok.';
	$lang['strrownotunique'] = 'Nincs egyedi azonosító ehhez a sorhoz.';
	$lang['strnoreportsdb'] = 'Ön még nem teremtette meg a jelentések adatbázisát. Olvassa el az INSTALL fájlt további útmutatásért!';
	$lang['strnouploads'] = 'Fájl feltöltése letiltva.';
	$lang['strimporterror'] = 'Behozatali hiba.';
	$lang['strimporterror-fileformat']  =  'Behozatali hiba: nem sikerült automatikusan megállapítani a fájl formátumát.';
	$lang['strimporterrorline'] = 'Behozatali hiba a %s. sorban.';
	$lang['strimporterrorline-badcolumnnum']  =  'Behozatali hiba a(z) %s. számú sorban:  A sor nem tartalmazza a megfelelő számú sort.';
	$lang['strimporterror-uploadedfile']  =  'Behozatali hiba: A fájlt nem sikerült feltülteni a kiszolgálóra.';
	$lang['strcannotdumponwindows']  =  'Összetett tábla ömlesztése és séma nevek Windows-on nem támogatottak.';
	$lang['strinvalidserverparam']  =  'Érvénytelen kiszolgáló paraméterrel próbáltak csatlakozni. Lehet, hogy valaki betörni próbál a rendszerbe.'; 
	$lang['strnoserversupplied']  =  'Nincs megadva kiszolgáló!';
	$lang['strbadpgdumppath'] = 'Kiviteli hiba: Elbukott a pg_dump végrehajtása (conf/config.inc.php fájlban megadott ösvény: %s). Kérem, javítsa ki ezt a beállításban, és ismételjen.';
	$lang['strbadpgdumpallpath'] = 'Kiviteli hiba: Elbukott a pg_dumpall végrehajtása (conf/config.inc.php fájlban megadott ösvény: %s). Kérem, javítsa ki ezt a beállításban, és ismételjen.';
	$lang['strconnectionfail'] = 'Nem csatlakozhatok a szolgálóhoz.';

	// Tables
	$lang['strtable'] = 'Tábla';
	$lang['strtables'] = 'Táblák';
	$lang['strshowalltables'] = 'Minden tábla megjelenítése';
	$lang['strnotables'] = 'Nincsenek táblák.';
	$lang['strnotable'] = 'Nincs tábla.';
	$lang['strcreatetable'] = 'Táblát teremt';
	$lang['strcreatetablelike']  =  'Táblát teremt mint';
	$lang['strcreatetablelikeparent']  =  'Forrás tábla';
	$lang['strcreatelikewithdefaults']  =  'ALAPÉRTELMEZÉSEKKEL';
	$lang['strcreatelikewithconstraints']  =  'MEGSZORÍTÁSOKKAL';
	$lang['strcreatelikewithindexes']  =  'INDEXEKKEL';
	$lang['strtablename'] = 'Tábla neve';
	$lang['strtableneedsname'] = 'Meg kell adni a tábla nevét.';
	$lang['strtablelikeneedslike']  =  'Meg kell adni a tábla nevét, ahonnan tulajdonságokat lehet másolni.';
	$lang['strtableneedsfield'] = 'Legalább egy oszlopot meg kell adni.';
	$lang['strtableneedscols'] = 'A táblának érvényes számú oszlop kell.';
	$lang['strtablecreated'] = 'A tábla megteremtve.';
	$lang['strtablecreatedbad'] = 'Nem sikerült táblát teremteni.';
	$lang['strconfdroptable'] = 'Biztosan törölni kívánja „%s” táblát?';
	$lang['strtabledropped'] = 'A tábla törölve.';
	$lang['strtabledroppedbad'] = 'Nem sikerült a táblát törölni.';
	$lang['strconfemptytable'] = 'Biztosan ki akarja üríteni „%s” táblát?';
	$lang['strtableemptied'] = 'A tábla kiürítve.';
	$lang['strtableemptiedbad'] = 'Nem sikerült a táblát kiüríteni.';
	$lang['strinsertrow'] = 'Sor beszúrása';
	$lang['strrowinserted'] = 'A sor beszúrva.';
	$lang['strrowinsertedbad'] = 'Nem sikerült a sort beszúrni.';
	$lang['strnofkref'] = 'Nincs %s idegen kulcshoz illő érték.';
	$lang['strrowduplicate']  =  'Nem sikerült sort beszúrni. Dupla beszúrási kísérlet.';
	$lang['streditrow'] = 'Sor szerkesztése';
	$lang['strrowupdated'] = 'A sor időszerűsítve.';
	$lang['strrowupdatedbad'] = 'Nem sikerült a sort időszerűsíteni.';
	$lang['strdeleterow'] = 'Sor törlése';
	$lang['strconfdeleterow'] = 'Biztosan törölni kívánja ezt a sort?';
	$lang['strrowdeleted'] = 'A sor törölve.';
	$lang['strrowdeletedbad'] = 'Nem sikerült a sort törölni.';
	$lang['strinsertandrepeat']  =  'Beszúrás & Ismétlés';
	$lang['strnumcols']  =  'Oszlopok száma';
	$lang['strcolneedsname']  =  'Meg kell adnia az oszlop nevét';
	$lang['strselectallfields'] = 'Minden oszlop kijelölése';
	$lang['strselectneedscol'] = 'Ki kell választani egy oszlopot';
	$lang['strselectunary'] = 'Egyváltozós műveleteknek nem lehetnek értékei';
	$lang['strcolumnaltered'] = 'Az oszlop megváltoztatva.';
	$lang['strcolumnalteredbad'] = 'Nem sikerült az oszlopot megváltoztatni.';
	$lang['strconfdropcolumn'] = 'Biztosan törölni kívánja „%s” oszlopot „%s” táblából?';
	$lang['strcolumndropped'] = 'Az oszlop törölve.';
	$lang['strcolumndroppedbad'] = 'Nem sikerült az oszlopot törölni.';
	$lang['straddcolumn'] = 'Oszloppal bővítés';
	$lang['strcolumnadded'] = 'Oszloppal bővítve.';
	$lang['strcolumnaddedbad'] = 'Nem sikerült az oszloppal bővíteni.';
	$lang['strcascade'] = 'ZUHATAG';
	$lang['strtablealtered'] = 'A tábla megváltoztatva.';
	$lang['strtablealteredbad'] = 'Nem sikerült a táblát megváltoztatni.';
	$lang['strdataonly'] = 'Csak adatok';
	$lang['strstructureonly'] = 'Csak struktúra';
	$lang['strstructureanddata'] = 'Struktúra és adatok';
	$lang['strtabbed'] = 'Füles';
	$lang['strauto'] = 'Autó';
	$lang['strconfvacuumtable']  =  'Biztosan ki akarja takarítani „%s” táblát?';
	$lang['strconfanalyzetable']  =  'Biztosan elemezzük „%s” táblát?';
	$lang['strconfreindextable'] = 'Biztosan újra akarja indexelni „%s” táblát?';
	$lang['strconfclustertable'] = 'Biztosan fürtözni akarja „%s” táblát?';
	$lang['strestimatedrowcount']  =  'Becsült sorok száma';
	$lang['strspecifytabletoanalyze']  =  'Legalább egy elemzendő táblát meg kell adni.';
	$lang['strspecifytabletoempty']  =  'Legalább egy ürítendő táblát meg kell adni.';
	$lang['strspecifytabletodrop']  =  'Legalább egy törlendő táblát meg kell adni.';
	$lang['strspecifytabletovacuum']  =  'Legalább egy takarítandó táblát meg kell adni.';
	$lang['strspecifytabletoreindex'] = 'Legalább egy indexelendő táblát meg kell adni.';
	$lang['strspecifytabletocluster'] = 'Legalább egy fürtözendő táblát meg kell adni.';
	$lang['strnofieldsforinsert'] = 'Oszloptalan táblába nem szúrhat be sort.';

	// Columns
	$lang['strcolprop']  =  'Tábla tulajdonságai';
    $lang['strnotableprovided']  =  'Nincs tábla megadva!';

	// Users
	$lang['struser'] = 'Használó';
	$lang['strusers'] = 'Használók';
	$lang['strusername'] = 'Használó neve';
	$lang['strpassword'] = 'Jelszó';
	$lang['strsuper'] = 'Rendszergazda?';
	$lang['strcreatedb'] = 'Létrehozhat AB-t?';
	$lang['strexpires'] = 'Lejár';
	$lang['strsessiondefaults'] = 'Munkamenet alapértékei';
	$lang['strnousers']  =  'Nincsenek használók.';
	$lang['struserupdated'] = 'Használó időszerűsítve.';
	$lang['struserupdatedbad'] = 'Nem sikerült a használót időszerűsíteni.';
	$lang['strshowallusers'] = 'Minden használó megjelenítése';
	$lang['strcreateuser'] = 'Használó teremtése';
	$lang['struserneedsname'] = 'A használónak nevet kell adni.';
	$lang['strusercreated'] = 'A használó megteremtve.';
	$lang['strusercreatedbad'] = 'Nem sikerült a használót megteremteni.';
	$lang['strconfdropuser'] = 'Biztosan törölni akarja „%s” használót?';
	$lang['struserdropped'] = 'A használó törölve.';
	$lang['struserdroppedbad'] = 'Nem sikerült a használót törölni.';
	$lang['straccount'] = 'Számla';
	$lang['strchangepassword'] = 'Jelszó megváltoztatása';
	$lang['strpasswordchanged'] = 'A jelszó megváltoztatva.';
	$lang['strpasswordchangedbad'] = 'Nem sikerült a jelszót megváltoztatni.';
	$lang['strpasswordshort'] = 'A jelszó túl rövid.';
	$lang['strpasswordconfirm'] = 'A jelszó nem egyezik a megerősítéssel.';
	
	// Groups
	$lang['strgroup'] = 'Csoport';
	$lang['strgroups'] = 'Csoportok';
	$lang['strshowallgroups']  =  'Minden csoportot megjelenít';
	$lang['strnogroup'] = 'Nincs csoport.';
	$lang['strnogroups'] = 'Nincsenek csoportok.';
	$lang['strcreategroup'] = 'Csoportot teremt';
	$lang['strgroupneedsname'] = 'A csoportnak nevet kell adni.';
	$lang['strgroupcreated'] = 'A csoport megteremtve.';
	$lang['strgroupcreatedbad'] = 'Nem sikerült a csoportot megteremteni.';	
	$lang['strconfdropgroup'] = 'Biztosan törölni kívánja „%s” csoportot?';
	$lang['strgroupdropped'] = 'A csoport törölve.';
	$lang['strgroupdroppedbad'] = 'Nem sikerült a csoportot törölni.';
	$lang['strmembers'] = 'Tagok';
	$lang['strmemberof']  =  'Tagja ';
	$lang['stradminmembers']  =  'Admin tagok';
	$lang['straddmember'] = 'Tagot vesz fel';
	$lang['strmemberadded'] = 'Tag felvéve.';
	$lang['strmemberaddedbad'] = 'Nem sikerült tagot felvenni.';
	$lang['strdropmember'] = 'Tag kicsapása';
	$lang['strconfdropmember'] = 'Biztosan ki akarja csapni „%s” tagot „%s” csoportból?';
	$lang['strmemberdropped'] = 'A tag kicsapva.';
	$lang['strmemberdroppedbad'] = 'Nem sikerült a tagot kicsapni.';

	// Roles
	$lang['strrole']  =  'Szerep';
	$lang['strroles']  =  'Szerepek';
	$lang['strshowallroles']  =  'Minden szerepet megjelenít';
	$lang['strnoroles']  =  'Nincs szerep.';
	$lang['strinheritsprivs']  =  'Jogosultságokat örököl?';
	$lang['strcreaterole']  =  'Szerepet teremt';
	$lang['strcancreaterole']  =  'Teremthet szerepet?';
	$lang['strrolecreated']  =  'Szerep megteremtve.';
	$lang['strrolecreatedbad']  =  'Nem sikerült szerepet teremteni.';
	$lang['strrolealtered']  =  'Szerep megváltoztatva.';
	$lang['strrolealteredbad']  =  'Nem sikerült szerepet változtatni.';
	$lang['strcanlogin']  =  'Beléphet?';
	$lang['strconnlimit']  =  'Kapcsolat korlátja';
	$lang['strdroprole']  =  'Szerepet töröl';
	$lang['strconfdroprole']  =  'Biztosan töröljük „%s” szerepet?';
	$lang['strroledropped']  =  'Szerep törölve.';
	$lang['strroledroppedbad']  =  'Nem sikerült szerepet törölni.';
	$lang['strnolimit']  =  'Nincs korlát';
	$lang['strnever']  =  'Soha';
	$lang['strroleneedsname']  =  'Nevet kell adni a szerepnek.';

	// Privileges
	$lang['strprivilege'] = 'Jogosultság';
	$lang['strprivileges'] = 'Jogosultságok';
	$lang['strnoprivileges'] = 'Ez objektum alap-jogosultságokkal rendelkezik.';
	$lang['strgrant'] = 'Feljogosít';
	$lang['strrevoke'] = 'Jogosultságot megvon';
	$lang['strgranted'] = 'A jogosultságok megváltoztatva.';
	$lang['strgrantfailed'] = 'Nem sikerült a jogosultságokat megváltoztatni.';
	$lang['strgrantbad'] = 'Legalább egy felhasználót és jogosultságot ki kell választani.';
	$lang['strgrantor'] = 'Jogosító';
	$lang['strasterisk'] = '*';

	// Databases
	$lang['strdatabase'] = 'Adatbázis';
	$lang['strdatabases'] = 'Adatbázisok';
	$lang['strshowalldatabases'] = 'Minden adatbázist megjelenít';
	$lang['strnodatabases'] = 'Nincs adatbázis.';
	$lang['strcreatedatabase'] = 'Adatbázist teremt';
	$lang['strdatabasename'] = 'Adatbázisnév';
	$lang['strdatabaseneedsname'] = 'Meg kell adni az adatbázis nevét.';
	$lang['strdatabasecreated'] = 'Az adatbázis megteremtve.';
	$lang['strdatabasecreatedbad'] = 'Nem sikerült megteremteni az adatbázist.';
	$lang['strconfdropdatabase'] = 'Biztosan törölni akarja „%s” adatbázist?';
	$lang['strdatabasedropped'] = 'Az adatbázis törölve.';
	$lang['strdatabasedroppedbad'] = 'Nem sikerült törölni az adatbázist.';
	$lang['strentersql'] = 'Írja be a végrehajtandó SQL-kifejezéseket ide:';
	$lang['strsqlexecuted'] = 'Az SQL-kifejezések végrehajtva.';
	$lang['strvacuumgood'] = 'A takarítás kész.';
	$lang['strvacuumbad'] = 'Nem sikerült kitakarítani.';
	$lang['stranalyzegood'] = 'Az elemzés kész.';
	$lang['stranalyzebad'] = 'Nem sikerült kielemezni.';
	$lang['strreindexgood'] = 'Újraindexelés kész.';
	$lang['strreindexbad'] = 'Nem sikerült az újraindexelés.';
	$lang['strfull'] = 'Teljes';
	$lang['strfreeze'] = 'Befagyaszt';
	$lang['strforce'] = 'Kényszerít';
	$lang['strsignalsent']  =  'Jelzés elküldve.';
	$lang['strsignalsentbad']  =  'Nem sikerült jelzést küldeni.';
	$lang['strallobjects']  =  'Minden objektum';
	$lang['strdatabasealtered']  =  'Adatbázis megváltoztatva.';
	$lang['strdatabasealteredbad']  =  'Nem sikerült az adatbázist megváltoztatni.';
	$lang['strspecifydatabasetodrop']  =  'Meg kell adni a törlendő adatbázist';
	$lang['strtemplatedb'] = 'Sablon';
	$lang['strconfanalyzedatabase'] = 'Biztosan elemezni akarja „%s” adatbázis minden tábláját?';
	$lang['strconfvacuumdatabase'] = 'Biztosan takarítani akarja „%s” adatbázis minden tábláját?';
	$lang['strconfreindexdatabase'] = 'Biztosan indexelni akarja „%s” adatbázis minden tábláját?';
	$lang['strconfclusterdatabase'] = 'Biztosan fürtözni akarja „%s” adatbázis minden tábláját?';

	// Views
	$lang['strview'] = 'Nézet';
	$lang['strviews'] = 'Nézetek';
	$lang['strshowallviews'] = 'Minden nézetet megjelenít';
	$lang['strnoview'] = 'Nincs nézet.';
	$lang['strnoviews'] = 'Nincsenek nézetek.';
	$lang['strcreateview'] = 'Nézetet teremt';
	$lang['strviewname'] = 'Nézetnév';
	$lang['strviewneedsname'] = 'Meg kell adni a nézetnevet.';
	$lang['strviewneedsdef'] = 'Meg kell adni a nézet definícióját.';
	$lang['strviewneedsfields'] = 'Meg kell adnia a oszlopokat, amiket ki akar jelölni a nézetben.';
	$lang['strviewcreated'] = 'A nézet megteremtve.';
	$lang['strviewcreatedbad'] = 'Nem sikerült megteremteni a nézetet.';
	$lang['strconfdropview'] = 'Biztosan törölni kívánja „%s” nézetet?';
	$lang['strviewdropped'] = 'A nézet törölve.';
	$lang['strviewdroppedbad'] = 'Nem sikerült törölni a nézetet.';
	$lang['strviewupdated'] = 'A nézet időszerűsítve.';
	$lang['strviewupdatedbad'] = 'Nem sikerült időszerűsíteni a nézetet.';
	$lang['strviewlink'] = 'Hivatkozások';
	$lang['strviewconditions'] = 'További feltételek';
	$lang['strcreateviewwiz'] = 'Nézetet teremt varázslóval';
	$lang['strrenamedupfields']  =  'Másolt mezőket nevez át';
	$lang['strdropdupfields']  =  'Másolt mezőket töröl';
	$lang['strerrordupfields']  =  'Hiba a másolt mezőkben';
	$lang['strviewaltered']  =  'Nézet megváltoztatva.';
	$lang['strviewalteredbad']  =  'Nem sikerült megváltoztatni a nézetet.';
	$lang['strspecifyviewtodrop']  =  'Meg kell adni a törlendő nézetet';

	// Sequences
	$lang['strsequence'] = 'Sorozat';
	$lang['strsequences'] = 'Sorozatok';
	$lang['strshowallsequences'] = 'Minden sorozatot megjelenít';
	$lang['strnosequence'] = 'Nincs sorozat.';
	$lang['strnosequences'] = 'Nincsenek sorozatok.';
	$lang['strcreatesequence'] = 'Sorozatot teremt';
	$lang['strlastvalue'] = 'Utolsó érték';
	$lang['strincrementby'] = 'Növekmény';	
	$lang['strstartvalue'] = 'Kezdő érték';
	$lang['strrestartvalue'] = 'Újrakezdő érték';
	$lang['strmaxvalue'] = 'Felső korlát';
	$lang['strminvalue'] = 'Alsó korlát';
	$lang['strcachevalue'] = 'Gyorstár értéke';
	$lang['strlogcount'] = 'Számláló';
	$lang['strcancycle']  =  'Körbejárhat?';
	$lang['striscalled']  =  'Növekedjék mielőtt visszatér a következő értékkel (is_called)?';
	$lang['strsequenceneedsname'] = 'Meg kell adni a sorozatnevet.';
	$lang['strsequencecreated'] = 'A sorozat megteremtve.';
	$lang['strsequencecreatedbad'] = 'Nem sikerült megteremteni a sorozatot.'; 
	$lang['strconfdropsequence'] = 'Biztosan törölni kívánja „%s” sorozatot?';
	$lang['strsequencedropped'] = 'A sorozat törölve.';
	$lang['strsequencedroppedbad'] = 'Nem sikerült törölni a sorozatot.';
	$lang['strsequencerestart'] = 'Sorozat újrakezdve.';
	$lang['strsequencerestartbad'] = 'Nem sikerült újrakezdeni a sorozatot.';
	$lang['strsequencereset'] = 'Sorozat nullázása.';
	$lang['strsequenceresetbad'] = 'Nem sikerült nullázni a sorozatot.'; 
 	$lang['strsequencealtered']  =  'Sorozat megváltoztatva.';
 	$lang['strsequencealteredbad']  =  'Nem sikerült megváltoztatni a sorozatot.';
 	$lang['strsetval']  =  'Értéket ad';
 	$lang['strsequencesetval']  =  'Érték megadva.';
 	$lang['strsequencesetvalbad']  =  'Nem sikerült az értékadás.';
 	$lang['strnextval']  =  'Növekmény';
 	$lang['strsequencenextval']  =  'Sorozat megnövelve.';
 	$lang['strsequencenextvalbad']  =  'Nem sikerült megnövelni a sorozatot.';
	$lang['strspecifysequencetodrop']  =  'Meg kell adnia a törlendő sorozatot';

	// Indexes
	$lang['strindex'] = 'Index';
	$lang['strindexes']  =  'Indexek';
	$lang['strindexname'] = 'Indexnév';
	$lang['strshowallindexes'] = 'Minden indexet megjelenít';
	$lang['strnoindex'] = 'Nincs index.';
	$lang['strnoindexes'] = 'Nincsenek indexek.';
	$lang['strcreateindex'] = 'Indexet teremt';
	$lang['strtabname'] = 'Táblanév';
	$lang['strcolumnname'] = 'Oszlopnév';
	$lang['strindexneedsname'] = 'Meg kell adni az index nevét.';
	$lang['strindexneedscols'] = 'Meg kell adni az oszlopok (érvényes) számát.';
	$lang['strindexcreated'] = 'Az index megteremtve';
	$lang['strindexcreatedbad'] = 'Nem sikerült megteremteni az indexet.';
	$lang['strconfdropindex'] = 'Biztosan törölni kívánja „%s” indexet?';
	$lang['strindexdropped'] = 'Az index törölve.';
	$lang['strindexdroppedbad'] = 'Nem sikerült törölni az indexet.';
	$lang['strkeyname'] = 'Kulcsnév';
	$lang['struniquekey'] = 'Egyedi kulcs';
	$lang['strprimarykey'] = 'Elsődleges kulcs';
 	$lang['strindextype'] = 'Indextípus';
	$lang['strtablecolumnlist'] = 'A tábla oszlopai';
	$lang['strindexcolumnlist'] = 'Az index oszlopai';
	$lang['strclusteredgood'] = 'Fürtözés kész.';
	$lang['strclusteredbad'] = 'Nem sikerült fürtözni.';
	$lang['strconcurrently'] = 'Egyszerre';
	$lang['strnoclusteravailable'] = 'A tábla nincs indexre fürtözve.';

	// Rules
	$lang['strrules'] = 'Szabályok';
	$lang['strrule'] = 'Szabály';
	$lang['strshowallrules'] = 'Minden szabályt megjelenít';
	$lang['strnorule'] = 'Nincs szabály.';
	$lang['strnorules'] = 'Nincsenek szabályok.';
	$lang['strcreaterule'] = 'Szabályt teremt';
	$lang['strrulename'] = 'Szabálynév';
	$lang['strruleneedsname'] = 'Meg kell adni a szabálynevet.';
	$lang['strrulecreated'] = 'A szabály megteremtve.';
	$lang['strrulecreatedbad'] = 'Nem sikerült megteremteni a szabályt.';
	$lang['strconfdroprule'] = 'Biztosan törölni kívánja „%s” szabályt „%s” táblában?';
	$lang['strruledropped'] = 'A szabály törölve.';
	$lang['strruledroppedbad'] = 'Nem sikerült törölni a szabályt.';

	// Constraints
	$lang['strconstraint']  =  'Megszorítás';
	$lang['strconstraints'] = 'Megszorítások';
	$lang['strshowallconstraints'] = 'Minden megszorítást megjelenít';
	$lang['strnoconstraints'] = 'Nincsenek megszorítások.';
	$lang['strcreateconstraint'] = 'Megszorítást teremt';
	$lang['strconstraintcreated'] = 'A megszorítás megteremtve.';
	$lang['strconstraintcreatedbad'] = 'Nem sikerült megteremteni a megszorítást.';
	$lang['strconfdropconstraint'] = 'Biztosan törölni kívánja „%s” megszorítást „%s” táblában?';
	$lang['strconstraintdropped'] = 'A megszorítás törölve.';
	$lang['strconstraintdroppedbad'] = 'Nem sikerült törölni a megszorítást.';
	$lang['straddcheck'] = 'Ellenőrzést ad hozzá';
	$lang['strcheckneedsdefinition'] = 'Meg kell adni az ellenőrzés definícióját.';
	$lang['strcheckadded'] = 'Az ellenőrzés hozzáadva.';
	$lang['strcheckaddedbad'] = 'Nem sikerült hozzáadni az ellenőrzést.';
	$lang['straddpk'] = 'Elsődleges kulcsot ad hozzá';
	$lang['strpkneedscols'] = 'Legalább egy oszlopot meg kell adni elsődleges kulcsnak.';
	$lang['strpkadded'] = 'Elsődleges kulcs hozzáadva.';
	$lang['strpkaddedbad'] = 'Nem sikerült hozzáadni az elsődleges kulcsot.';
	$lang['stradduniq'] = 'Egyedi kulcsot ad hozzá';
	$lang['struniqneedscols'] = 'Legalább egy oszlopot meg kell adni egyedi kulcsnak.';
	$lang['struniqadded'] = 'Az egyedi kulcs hozzáadva.';
	$lang['struniqaddedbad'] = 'Nem sikerült hozzáadni az egyedi kulcsot.';
	$lang['straddfk'] = 'Külső kulcsot ad hozzá';
	$lang['strfkneedscols'] = 'Legalább egy oszlopot meg kell adni külső kulcsnak.';
	$lang['strfkneedstarget'] = 'Meg kell adni a céltáblát a külső kulcsnak.';
	$lang['strfkadded'] = 'A külső kulcs hozzáadva.';
	$lang['strfkaddedbad'] = 'Nem sikerült hozzáadni a külső kulcsot.';
	$lang['strfktarget'] = 'Céltábla';
	$lang['strfkcolumnlist'] = 'Kulcsoszlopok';
	$lang['strondelete'] = 'TÖRLÉSKOR';
	$lang['stronupdate'] = 'VÁLTOZTATÁSKOR';

	// Functions
	$lang['strfunction'] = 'Függvény';
	$lang['strfunctions'] = 'Függvények';
	$lang['strshowallfunctions'] = 'Minden függvényt megjelenít';
	$lang['strnofunction'] = 'Nincs függvény.';
	$lang['strnofunctions'] = 'Nincsenek függvények.';
	$lang['strcreateplfunction']  =  'SQL/PL függvényt teremt';
	$lang['strcreateinternalfunction']  =  'Belső függvényt teremt';
	$lang['strcreatecfunction']  =  'C függvényt teremt';
	$lang['strfunctionname'] = 'Függvénynév';
	$lang['strreturns'] = 'Visszatérő érték';
	$lang['strproglanguage'] = 'Programnyelv';
	$lang['strfunctionneedsname'] = 'Meg kell adni a függvény nevét.';
	$lang['strfunctionneedsdef'] = 'Meg kell adni a függvény definícióját.';
	$lang['strfunctioncreated'] = 'A függvény megteremtve.';
	$lang['strfunctioncreatedbad'] = 'Nem sikerült megteremteni a függvényt.';
	$lang['strconfdropfunction'] = 'Biztosan törölni kívánja „%s” függvényt?';
	$lang['strfunctiondropped'] = 'A függvény törölve.';
	$lang['strfunctiondroppedbad'] = 'Nem sikerült törölni a függvényt.';
	$lang['strfunctionupdated'] = 'A függvény időszerűsítve.';
	$lang['strfunctionupdatedbad'] = 'Nem sikerült a függvényt időszerűsíteni.';
	$lang['strobjectfile']  =  'Célkód fájl';
	$lang['strlinksymbol']  =  'Szerkesztő szimbólum';
	$lang['strarguments']  =  'Argumentumok';
	$lang['strargmode']  =  'Mód';
	$lang['strargtype']  =  'Típus';
	$lang['strargadd']  =  'Más argumentumot ad hozzá';
	$lang['strargremove']  =  'Argumentumot töröl';
	$lang['strargnoargs']  =  'E függvénynek nincsenek argumentumai.';
	$lang['strargenableargs']  =  'E függvénynek átadott argumentumok engedélyezése.';
	$lang['strargnorowabove']  =  'Egy sornak kell lennie e fölött.';
	$lang['strargnorowbelow']  =  'Egy sornak kell lennie ez alatt.';
	$lang['strargraise']  =  'Mozgás fel.';
	$lang['strarglower']  =  'Mozgás le.';
	$lang['strargremoveconfirm']  =  'Biztosan töröljük ez argumentumot? Ez VISSZAVONHATATLAN.';
	$lang['strfunctioncosting']  =  'Függvény költségei';
	$lang['strresultrows']  =  'Eredmény sorok';
	$lang['strexecutioncost']  =  'Végrehajtás költsége';
	$lang['strspecifyfunctiontodrop']  =  'Legalább egy törlendő függvényt meg kell adni';

	// Triggers
	$lang['strtrigger'] = 'Ravasz';
	$lang['strtriggers'] = 'Ravaszok';
	$lang['strshowalltriggers'] = 'Minden ravaszt megjelenít';
	$lang['strnotrigger'] = 'Nincs ravasz.';
	$lang['strnotriggers'] = 'Nincsenek ravaszok.';
	$lang['strcreatetrigger'] = 'Ravaszt teremt';
	$lang['strtriggerneedsname'] = 'Meg kell adni a ravasz nevét.';
	$lang['strtriggerneedsfunc'] = 'Meg kell adni egy függvény nevét a ravaszhoz.';
	$lang['strtriggercreated'] = 'Ravasz megteremtve.';
	$lang['strtriggercreatedbad'] = 'Nem sikerült megteremteni a ravaszt.';
	$lang['strconfdroptrigger'] = 'Biztosan törölni kívánja „%s” ravaszt „%s” táblában?';
	$lang['strconfenabletrigger']  =  'Biztosan engedélyezzük „%s” ravaszt „%s” elemre?';
	$lang['strconfdisabletrigger']  =  'Biztosan letiltsuk „%s” ravaszt „%s” elemre?';
	$lang['strtriggerdropped'] = 'Ravasz törölve.';
	$lang['strtriggerdroppedbad'] = 'Nem sikerült törölni a ravaszt.';
	$lang['strtriggerenabled']  =  'Ravasz engedélyezve.';
	$lang['strtriggerenabledbad']  =  'Nem sikerült a ravaszt engedélyezni.';
	$lang['strtriggerdisabled']  =  'Ravasz letiltva.';
	$lang['strtriggerdisabledbad']  =  'Nem sikerült a ravaszt letiltani.';
	$lang['strtriggeraltered'] = 'Ravasz megváltoztatva.';
	$lang['strtriggeralteredbad'] = 'Nem sikerült megváltoztatni a triggert.';
	$lang['strforeach']  =  'Mindegyik';

	// Types
	$lang['strtype'] = 'Típus';
	$lang['strtypes'] = 'Típusok';
	$lang['strshowalltypes'] = 'Minden típust megjelenít';
	$lang['strnotype'] = 'Nincs típus.';
	$lang['strnotypes'] = 'Nincsenek típusok.';
	$lang['strcreatetype'] = 'Típust teremt';
	$lang['strcreatecomptype']  =  'Összetett típust teremt';
	$lang['strcreateenumtype']  =  'Felsorolás típust teremt';
	$lang['strtypeneedsfield']  =  'Legalább egy oszlopot meg kell adnia.';
	$lang['strtypeneedsvalue']  =  'Legalább egy értéket meg kell adni.';
	$lang['strtypeneedscols']  =  'Érvényes oszlopszámot kell megadnia.';	
	$lang['strtypeneedsvals']  =  'Érvényes értékszámot kell megadni.';
	$lang['strinputfn'] = 'Beviteli függvény';
	$lang['stroutputfn'] = 'Kiviteli függvény';
	$lang['strpassbyval'] = 'Érték szerinti átadás?';
	$lang['stralignment'] = 'Igazít';
	$lang['strelement'] = 'Elem';
	$lang['strdelimiter'] = 'Határoló';
	$lang['strstorage'] = 'Tár';
	$lang['strfield']  =  'Oszlop';
	$lang['strnumfields']  =  'Oszlopok száma';
	$lang['strnumvalues']  =  'Értékek száma';
	$lang['strtypeneedsname'] = 'Típusnevet kell megadni.';
	$lang['strtypeneedslen'] = 'Meg kell adni a típus hosszát.';
	$lang['strtypecreated'] = 'Típus megteremtve';
	$lang['strtypecreatedbad'] = 'Nem sikerült megteremteni a típust.';
	$lang['strconfdroptype'] = 'Biztosan törölni kívánja „%s” típust?';
	$lang['strtypedropped'] = 'Típus törölve.';
	$lang['strtypedroppedbad'] = 'Nem sikerült törölni a típust.';
	$lang['strflavor']  =  'Fajta';
	$lang['strbasetype']  =  'Alap';
	$lang['strcompositetype']  =  'Összetett';
	$lang['strpseudotype']  =  'Ál';
	$lang['strenum']  =  'Felsorolás';
	$lang['strenumvalues']  =  'Felsorolás értékei';

	// Schemas
	$lang['strschema'] = 'Séma';
	$lang['strschemas'] = 'Sémák';
	$lang['strshowallschemas'] = 'Minden sémát megjelenít';
	$lang['strnoschema'] = 'Nincs séma.';
	$lang['strnoschemas'] = 'Nincsenek sémák.';
	$lang['strcreateschema'] = 'Sémát teremt';
	$lang['strschemaname'] = 'Sémanév';
	$lang['strschemaneedsname'] = 'Meg kell adni a sémanevet.';
	$lang['strschemacreated'] = 'A séma megteremtve';
	$lang['strschemacreatedbad'] = 'Nem sikerült a sémát megteremteni.';
	$lang['strconfdropschema'] = 'Biztosan törölni kívánja „%s” sémát?';
	$lang['strschemadropped'] = 'A séma törölve.';
	$lang['strschemadroppedbad'] = 'Nem sikerült a sémát törölni.';
	$lang['strschemaaltered'] = 'Séma megváltoztatva.';
	$lang['strschemaalteredbad'] = 'Nem sikerült a sémát megváltoztatni.';
	$lang['strsearchpath']  =  'Séma keresési útvonala';
	$lang['strspecifyschematodrop']  =  'Meg kell adni a törlendő sémát';

	// Reports
	$lang['strreport'] = 'Jelentés';
	$lang['strreports'] = 'Jelentések';
	$lang['strshowallreports'] = 'Minden jelentést megjelenít';
	$lang['strnoreports'] = 'Nincsenek jelentések.';
	$lang['strcreatereport'] = 'Jelentést teremt';
	$lang['strreportdropped'] = 'A jelentés törölve.';
	$lang['strreportdroppedbad'] = 'Nem sikerült törölni a jelentést.';
	$lang['strconfdropreport'] = 'Biztosan törölni kívánja „%s” jelentést?';
	$lang['strreportneedsname'] = 'Meg kell adni a jelentésnevet.';
	$lang['strreportneedsdef'] = 'SQL kifejezést kell hozzáadni a jelentéshez.';
	$lang['strreportcreated'] = 'A jelentés megteremtve.';
	$lang['strreportcreatedbad'] = 'Nem sikerült megteremteni a jelentést.';

	// Domains
	$lang['strdomain'] = 'Tartomány';
	$lang['strdomains'] = 'Tartományok';
	$lang['strshowalldomains'] = 'Minden tartományt megjelenít';
	$lang['strnodomains'] = 'Nincsnek tartományok.';
	$lang['strcreatedomain'] = 'Tartományt teremt';
	$lang['strdomaindropped'] = 'A tartomány törölve.';
	$lang['strdomaindroppedbad'] = 'Nem sikerült törölni a tartományt.';
	$lang['strconfdropdomain'] = 'Biztosan törölni kívánja „%s” tartományt?';
	$lang['strdomainneedsname'] = 'Meg kell adni a tartománynevet.';
	$lang['strdomaincreated'] = 'A tartomány megteremtve.';
	$lang['strdomaincreatedbad'] = 'Nem sikerült megteremteni a tartományt.';	
	$lang['strdomainaltered'] = 'A tartomány megváltoztatva.';
	$lang['strdomainalteredbad'] = 'Nem sikerült megváltoztatni a tartományt.';	

	// Operators
	$lang['stroperator'] = 'Operátor';
	$lang['stroperators'] = 'Operátorok';
	$lang['strshowalloperators'] = 'Minden operátort megjelenít';
	$lang['strnooperator'] = 'Nincs operátor.';
	$lang['strnooperators'] = 'Nincsenek operátorok.';
	$lang['strcreateoperator'] = 'Operátort teremt';
	$lang['strleftarg'] = 'Bal arg típus';
	$lang['strrightarg'] = 'Jobb arg típus';
	$lang['strcommutator'] = 'Kommutátor';
	$lang['strnegator'] = 'Tagadó';
	$lang['strrestrict'] = 'Megszorítás';
	$lang['strjoin'] = 'Összekapcsolás';
	$lang['strhashes'] = 'Hasít';
	$lang['strmerges'] = 'Összefésül';
	$lang['strleftsort'] = 'Balrendezés';
	$lang['strrightsort'] = 'Jobbrendezés';
	$lang['strlessthan'] = 'Kisebb mint';
	$lang['strgreaterthan'] = 'Nagyobb mint';
	$lang['stroperatorneedsname'] = 'Meg kell adni az operátornevet.';
	$lang['stroperatorcreated'] = 'Az operátor megteremtve';
	$lang['stroperatorcreatedbad'] = 'Nem sikerült megteremteni az operátort.';
	$lang['strconfdropoperator'] = 'Biztosan törölni kívánja „%s” operátort?';
	$lang['stroperatordropped'] = 'Az operátor törölve.';
	$lang['stroperatordroppedbad'] = 'Nem sikerült törölni az operátort.';

	// Casts
	$lang['strcasts'] = 'Kasztok';
	$lang['strnocasts'] = 'Nincsenek kasztok.';
	$lang['strsourcetype'] = 'Forrástípus';
	$lang['strtargettype'] = 'Céltípus';
	$lang['strimplicit'] = 'Implicit';
	$lang['strinassignment'] = 'Értékadásban';
	$lang['strbinarycompat'] = '(Binárisan kompatibilis)';
	
	// Conversions
	$lang['strconversions'] = 'Átalakítások';
	$lang['strnoconversions'] = 'Nincsenek átalakítások.';
	$lang['strsourceencoding'] = 'Forráskódolás';
	$lang['strtargetencoding'] = 'Célkódolás';
	
	// Languages
	$lang['strlanguages'] = 'Nyelvek';
	$lang['strnolanguages'] = 'Nincsenek nyelvek.';
	$lang['strtrusted'] = 'Hiteles';
	
	// Info
	$lang['strnoinfo'] = 'Nincs elérhető információ.';
	$lang['strreferringtables'] = 'Kapcsolódó táblák';
	$lang['strparenttables'] = 'Szülőtáblák';
	$lang['strchildtables'] = 'Gyerektáblák';

	// Aggregates
	$lang['straggregate']  =  'Aggregálás';
	$lang['straggregates'] = 'Aggregálások';
	$lang['strnoaggregates'] = 'Nincsenek aggregálások.';
	$lang['stralltypes'] = '(Minden típus)';
	$lang['strcreateaggregate']  =  'Aggregálást teremt';
	$lang['straggrbasetype']  =  'Bemenő adattípus';
	$lang['straggrsfunc']  =  'Állapotátmeneti függvény';
	$lang['straggrstype']  =  'Állapotérték adattípusa';
	$lang['straggrffunc']  =  'Végső függvény';
	$lang['straggrinitcond']  =  'Kezdő feltétel';
	$lang['straggrsortop']  =  'Rendező művelet';
	$lang['strconfdropaggregate']  =  'Biztosan töröljük „%s” aggregálást?';
	$lang['straggregatedropped']  =  'Aggregálás törölve.';
	$lang['straggregatedroppedbad']  =  'Nem sikerült törölni az aggregálást.';
	$lang['straggraltered']  =  'Aggregálás megváltoztatva.';
	$lang['straggralteredbad']  =  'Nem sikerült az aggregálást megváltoztatni.';
	$lang['straggrneedsname']  =  'Meg kell adni az aggregálás nevét.';
	$lang['straggrneedsbasetype']  =  'Meg kell adni az aggregálás bemenő adattípusát.';
	$lang['straggrneedssfunc']  =  'Meg kell adni az aggregálás állapotátmeneti függvényének nevét.';
	$lang['straggrneedsstype']  =  'Meg kell adni az aggregálás állapotértékének adattípusát.';
	$lang['straggrcreated']  =  'Aggregálás megteremtve.';
	$lang['straggrcreatedbad']  =  'Nem sikerült megteremteni az aggregálást.';
	$lang['straggrshowall']  =  'Minden aggregálás megjelenítése';

	// Operator Classes
	$lang['stropclasses'] = 'Operátor-osztályok';
	$lang['strnoopclasses'] = 'Nincsenek operátor-osztályok.';
	$lang['straccessmethod'] = 'Hozzáférés módja';

	// Stats and performance
	$lang['strrowperf'] = 'Sorteljesítmény';
	$lang['strioperf'] = 'I/O-teljesítmény';
	$lang['stridxrowperf'] = 'Indexsor-teljesítmény';
	$lang['stridxioperf'] = 'Index-I/O-teljesítmény';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = 'Szekvenciális';
	$lang['strscan'] = 'Keresés';
	$lang['strread'] = 'Olvasás';
	$lang['strfetch'] = 'Lehívás';
	$lang['strheap'] = 'Kupac';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'TOAST Index';
	$lang['strcache'] = 'Gyorstár';
	$lang['strdisk'] = 'Lemez';
	$lang['strrows2'] = 'Sorok';

	// Tablespaces
	$lang['strtablespace']  =  'Táblahely';
	$lang['strtablespaces']  =  'Táblahelyek';
	$lang['strshowalltablespaces']  =  'Minden táblahelyet megjelenít';
	$lang['strnotablespaces']  =  'Nincsenek táblahelyek.';
	$lang['strcreatetablespace']  =  'Táblahelyet teremt';
	$lang['strlocation']  =  'Hely';
	$lang['strtablespaceneedsname']  =  'Nevet kell adnia a táblahelynek.';
	$lang['strtablespaceneedsloc']  =  'Meg kell adnia egy mappát, ahol a táblahelyet teremti.';
	$lang['strtablespacecreated']  =  'Táblahely teremtve.';
	$lang['strtablespacecreatedbad']  =  'Nem sikerült táblahelyet teremteni.';
	$lang['strconfdroptablespace']  =  'Biztosan ki akarja dobni „%s” táblahelyet?';
	$lang['strtablespacedropped']  =  'Táblahely kidobva.';
	$lang['strtablespacedroppedbad']  =  'Nem sikerült kidobni a táblahelyet.';
	$lang['strtablespacealtered']  =  'Táblahely megváltoztatva.';
	$lang['strtablespacealteredbad']  =  'Nem sikerült megváltoztatni a táblahelyet.';

	// Slony clusters
	$lang['strcluster']  =  'Fürt';
	$lang['strnoclusters']  =  'Nincs fürt.';
	$lang['strconfdropcluster']  =  'Biztosan töröljük „%s” fürtöt?';
	$lang['strclusterdropped']  =  'Fürt törölve.';
	$lang['strclusterdroppedbad']  =  'Nem sikerült törölni a fürtöt.';
	$lang['strinitcluster']  =  'Fürtöt készít';
	$lang['strclustercreated']  =  'Fürt kész.';
	$lang['strclustercreatedbad']  =  'Nem sikerült fürtöt készíteni.';
	$lang['strclusterneedsname']  =  'Nevet kell adnia a fürtnek.';
	$lang['strclusterneedsnodeid']  =  'Azonosítót kell adnia a helyi csomópontnak.';
	
	// Slony nodes
	$lang['strnodes']  =  'Csomópontok';
	$lang['strnonodes']  =  'Nincs csomópont.';
	$lang['strcreatenode']  =  'Csomópontot teremt';
	$lang['strid']  =  'Az';
	$lang['stractive']  =  'Aktív';
	$lang['strnodecreated']  =  'Csomópont megteremtve.';
	$lang['strnodecreatedbad']  =  'Nem sikerült csomópontot teremteni.';
	$lang['strconfdropnode']  =  'Biztosan el akarja dobni „%s” csomópontot?';
	$lang['strnodedropped']  =  'Csomópont eldobva.';
	$lang['strnodedroppedbad']  =  'Nem sikerült eldobni a csomópontot.';
	$lang['strfailover']  =  'Áthidal';
	$lang['strnodefailedover']  =  'Végponti hiba áthidalva.';
	$lang['strnodefailedoverbad']  =  'Nem sikerült áthidalni a végpont hibáját.';
	$lang['strstatus']  =  'Állapot';	
	$lang['strhealthy']  =  'Ép';
	$lang['stroutofsync']  =  'Lemaradás';
	$lang['strunknown']  =  'Ismeretlen';	
	
	// Slony paths	
	$lang['strpaths']  =  'Ösvények';
	$lang['strnopaths']  =  'Nincs ösvény.';
	$lang['strcreatepath']  =  'Ösvényt teremt';
	$lang['strnodename']  =  'Csomópont neve';
	$lang['strnodeid']  =  'Csomópont-azonosító';
	$lang['strconninfo']  =  'Csatlakozás tájékoztató';
	$lang['strconnretry']  =  'Másodpercek a csatlakozás ismétléséig';
	$lang['strpathneedsconninfo']  =  'Meg kell adnia a kapcsolati szöveget az ösvényhez.';
	$lang['strpathneedsconnretry']  =  'Meg kell adnia a csatlakozás ismétléséig történő várakozás idejét másodpercekben.';
	$lang['strpathcreated']  =  'Ösvény megteremtve.';
	$lang['strpathcreatedbad']  =  'Nem sikerült ösvényt teremteni.';
	$lang['strconfdroppath']  =  'Biztosan el akarja dobni „%s” ösvényt?';
	$lang['strpathdropped']  =  'Ösvény eldobva.';
	$lang['strpathdroppedbad']  =  'Nem sikerült az ösvényt eldobni.';

	// Slony listens
	$lang['strlistens']  =  'Figyelők';
	$lang['strnolistens']  =  'Nincs figyelő.';
	$lang['strcreatelisten']  =  'Figyelőt teremt';
	$lang['strlistencreated']  =  'Figyelő megteremtve.';
	$lang['strlistencreatedbad']  =  'Nem sikerült figyelőt teremteni.';
	$lang['strconfdroplisten']  =  'Biztosan törölni akarja „%s” figyelőt?';
	$lang['strlistendropped']  =  'Figyelő törölve.';
	$lang['strlistendroppedbad']  =  'Nem sikerült törölni a figyelőt.';

	// Slony replication sets
	$lang['strrepsets']  =  'Másodlatok';
	$lang['strnorepsets']  =  'Nincs másodlat.';
	$lang['strcreaterepset']  =  'Másodlatot teremt';
	$lang['strrepsetcreated']  =  'Másodlat megteremtve.';
	$lang['strrepsetcreatedbad']  =  'Nem sikerült másodlatot teremteni.';
	$lang['strconfdroprepset']  =  'Biztosan törölni akarja „%s” másodlatot?';
	$lang['strrepsetdropped']  =  'Másodlat törölve.';
	$lang['strrepsetdroppedbad']  =  'Nem sikerült törölni a másodlatot.';
	$lang['strmerge']  =  'Összefésül';
	$lang['strmergeinto']  =  'Összefésül ide';
	$lang['strrepsetmerged']  =  'Másodlatok összefésülve.';
	$lang['strrepsetmergedbad']  =  'Nem sikerült összefésülni a másodlatokat.';
	$lang['strmove']  =  'Mozgat';
	$lang['strneworigin']  =  'Új eredet';
	$lang['strrepsetmoved']  =  'Másodlat mozgatva.';
	$lang['strrepsetmovedbad']  =  'Nem sikerült elmozgatni a másodlatot.';
	$lang['strnewrepset']  =  'Új másodlat';
	$lang['strlock']  =  'Zárol';
	$lang['strlocked']  =  'Zárolva';
	$lang['strunlock']  =  'Kioldás';
	$lang['strconflockrepset']  =  'Biztosan zárolni akarja „%s” másodlatot?';
	$lang['strrepsetlocked']  =  'Másodlat zárolva.';
	$lang['strrepsetlockedbad']  =  'Nem sikerült zárolni a másodlatot.';
	$lang['strconfunlockrepset']  =  'Biztosan ki akarja oldani „%s” másodlatot?';
	$lang['strrepsetunlocked']  =  'Másodlat kioldva.';
	$lang['strrepsetunlockedbad']  =  'Nem sikerült kioldani a másodlatot.';
	$lang['stronlyonnode']  =  'Csak helyben';
	$lang['strddlscript']  =  'DDL-írás';
	$lang['strscriptneedsbody']  =  'Meg kell adnia egy írást, amit minden helyen végrehajtanak.';
	$lang['strscriptexecuted']  =  'Másodlati DDL-írás végrehajtva.';
	$lang['strscriptexecutedbad']  =  'Nem sikerült végrehajtani a másodlati DDL-írást.';
	$lang['strtabletriggerstoretain']  =  'A következő triggereket Slony NEM tiltja le:';

	// Slony tables in replication sets
	$lang['straddtable']  =  'Táblát felvesz';
	$lang['strtableneedsuniquekey']  =  'Tábla felvételéhez elsődleges vagy egyedi kulcs kell.';
	$lang['strtableaddedtorepset']  =  'Tábla felvéve a másodlatba.';
	$lang['strtableaddedtorepsetbad']  =  'Nem sikerült felvenni a táblát a másodlatba.';
	$lang['strconfremovetablefromrepset']  =  'Biztosan törölni akarja „%s” táblát „%s” másodlatból?';
	$lang['strtableremovedfromrepset']  =  'Tábla törölve a másodlatból.';
	$lang['strtableremovedfromrepsetbad']  =  'Nem sikerült törölni a táblát a másodlatból.';

	// Slony sequences in replication sets
	$lang['straddsequence']  =  'Sorozatot felvesz';
	$lang['strsequenceaddedtorepset']  =  'Sorozat felvéve a másodlatba.';
	$lang['strsequenceaddedtorepsetbad']  =  'Nem sikerült felvenni a sorozatot a másodlatba.';
	$lang['strconfremovesequencefromrepset']  =  'Biztosan törölni akarja „%s” sorozatot „%s” másodlatból?';
	$lang['strsequenceremovedfromrepset']  =  'Sorozat törölve a másodlatból.';
	$lang['strsequenceremovedfromrepsetbad']  =  'Nem sikerült törölni a sorozatot a másodlatból.';

	// Slony subscriptions
	$lang['strsubscriptions']  =  'Feliratkozások';
	$lang['strnosubscriptions']  =  'Nincs feliratkozás.';

	// Miscellaneous
	$lang['strtopbar'] = '%s fut %s:%s címen — Ön „%s” néven jelentkezett be.';
	$lang['strtimefmt'] = 'Y.m.d. H:i';
	$lang['strhelp'] = 'Súgó';
	$lang['strhelpicon']  =  '?';
	$lang['strhelppagebrowser']  =  'Súgólap böngésző';
	$lang['strselecthelppage']  =  'Súgólapot választ';
	$lang['strinvalidhelppage']  =  'Érvénytelen súgólap.';
	$lang['strlogintitle']  =  'Belépett %s helyre';
	$lang['strlogoutmsg']  =  'Kilépett %s helyről';
	$lang['strloading']  =  'Betöltök...';
	$lang['strerrorloading']  =  'Betöltési hiba';
	$lang['strclicktoreload']  =  'Kattintson az újratöltéshez';

	// Autovacuum
	$lang['strautovacuum']  =  'Önműködő takarítás';
	$lang['strturnedon']  =  'Bekapcsolva';
	$lang['strturnedoff']  =  'Kikapcsolva';
	$lang['strenabled']  =  'Engedélyezve';
	$lang['strnovacuumconf'] = 'Nem találtam önműködő takarítást beállítva.';
	$lang['strvacuumbasethreshold']  =  'Takarítás alap küszbértéke';
	$lang['strvacuumscalefactor']  =  'Takarítás méretező tényezője';
	$lang['stranalybasethreshold']  =  'Alap küszöbértéket elemez';
	$lang['stranalyzescalefactor']  =  'Méretező tényezőt elemez';
	$lang['strvacuumcostdelay']  =  'Takarítás költségének késése';
	$lang['strvacuumcostlimit']  =  'Takarítás költségének korlátja';
	$lang['strvacuumpertable'] = 'Önműködő takarítás beállítása táblánként';
	$lang['straddvacuumtable'] = 'Önműködő takarítást állít be egy táblára';
	$lang['streditvacuumtable'] = 'Önműködő takarítást szerkeszt %s táblára';
	$lang['strdelvacuumtable'] = 'Törli az önműködő takarítást %s tábláról?';
	$lang['strvacuumtablereset'] = 'Az önműködő takarítást %s táblára visszaállítja az alap értékekre';
	$lang['strdelvacuumtablefail'] = 'Nem sikerült törölni az önműködő takarítást %s tábláról';
	$lang['strsetvacuumtablesaved'] = 'Önműködő takarítás %s táblára mentve.';
	$lang['strsetvacuumtablefail'] = 'Önműködő takarítást %s táblára nem sikerült beállítani.';
	$lang['strspecifydelvacuumtable'] = 'Meg kell adni a táblát, amiről törölni akarja az önműködő takarítás paramétereit.';
	$lang['strspecifyeditvacuumtable'] = 'Meg kell adni a táblát, amin szerkeszteni akarja az önműködő takarítás paramétereit.';
	$lang['strnotdefaultinred'] = 'A nem alap értékek pirosak.';

	// Table-level Locks
	$lang['strlocks']  =  'Zárak';
	$lang['strtransaction']  =  'Tranzakció AZ';
	$lang['strvirtualtransaction']  =  'Látszólagos tranzakció AZ';
	$lang['strprocessid']  =  'Folyamat AZ';
	$lang['strmode']  =  'Zármód';
	$lang['strislockheld']  =  'Zár tartva?';

	// Prepared transactions
	$lang['strpreparedxacts']  =  'Előkészített tranzakciók';
	$lang['strxactid']  =  'Tranzakció AZ';
	$lang['strgid']  =  'Globális AZ';
	
	// Fulltext search
	$lang['strfulltext']  =  'Teljes szövegben keres';
	$lang['strftsconfig']  =  'TSzK összeállítás';
	$lang['strftsconfigs']  =  'Összeállítások';
	$lang['strftscreateconfig']  =  'TSzK összeállítást teremt';
	$lang['strftscreatedict']  =  'Szótárt teremt';
	$lang['strftscreatedicttemplate']  =  'Szótársablont teremt';
	$lang['strftscreateparser']  =  'Elemzőt teremt';
	$lang['strftsnoconfigs']  =  'Nincs TSzK összeállítás.';
	$lang['strftsconfigdropped']  =  'TSzK összeállítás törölve.';
	$lang['strftsconfigdroppedbad']  =  'Nem sikerült törölni a TSzK összeállítást.';
	$lang['strconfdropftsconfig']  =  'Biztosan töröljük „%s” TSzK összeállítást?';
	$lang['strconfdropftsdict']  =  'Biztosan töröljük „%s” TSzK szótárt?';
	$lang['strconfdropftsmapping']  =  'Biztosan töröljük „%s” hozzárendelést „%s” TSzK összeállításból?';
	$lang['strftstemplate']  =  'Sablon';
	$lang['strftsparser']  =  'Elemző';
	$lang['strftsconfigneedsname']  =  'Meg kell adni a TSzK összeállítás nevét.';
	$lang['strftsconfigcreated']  =  'TSzK összeállítás megteremtve.';
	$lang['strftsconfigcreatedbad']  =  'Nem sikerült megteremteni a TSzK összeállítást.';
	$lang['strftsmapping']  =  'Hozzárendel';
	$lang['strftsdicts']  =  'Szótárak';
	$lang['strftsdict']  =  'Szótár';
	$lang['strftsemptymap']  =  'Üres hozzárendelés a TSzK összeállításban.';
	$lang['strftsconfigaltered']  =  'TSzK összeállítás megváltoztatva.';
	$lang['strftsconfigalteredbad']  =  'Nem sikerült a TSzK összeállítást megváltoztatni.';
	$lang['strftsconfigmap']  =  'TSzK összeállítás hozzárendelése';
	$lang['strftsparsers']  =  'TSzK elemzők';
	$lang['strftsnoparsers']  =  'Nincs TSzK elemző.';
	$lang['strftsnodicts']  =  'Nincs TSzK szótár.';
	$lang['strftsdictcreated']  =  'TSzK szótár megteremtve.';
	$lang['strftsdictcreatedbad']  =  'Nem sikerült a TSzK szótárt megteremteni.';
  $lang['strftslexize']  =  'Szókincs';
	$lang['strftsinit']  =  'Kezdés';
	$lang['strftsoptionsvalues']  =  'Opciók és értékek';
	$lang['strftsdictneedsname']  =  'Meg kell adni a TSzK szótár nevét.';
	$lang['strftsdictdropped']  =  'TSzK szótár törölve.';
	$lang['strftsdictdroppedbad']  =  'Nem sikerült a TSzK szótárt törölni.';
	$lang['strftsdictaltered']  =  'TSzK szótár megváltoztatva.';
	$lang['strftsdictalteredbad']  =  'Nem sikerült a TSzK szótárt megváltoztatni.';
	$lang['strftsaddmapping']  =  'Új hozzárendelés hozzáadása';
	$lang['strftsspecifymappingtodrop']  =  'Meg kell adni legalább egy törlendő TSzK hozzárendelést.';
	$lang['strftsspecifyconfigtoalter']  =  'Meg kell adni a megváltoztatandó TSzK összeállítást';
	$lang['strftsmappingdropped']  =  'TSzK hozzárendelés törölve.';
	$lang['strftsmappingdroppedbad']  =  'Nem sikerült a TSzK hozzárendelést törölni.';
	$lang['strftsnodictionaries']  =  'Nincs szótár.';
	$lang['strftsmappingaltered']  =  'TSzK hozzárendelés megváltoztatva.';
	$lang['strftsmappingalteredbad']  =  'Nem sikerült a TSzK hozzárendelést megváltoztatni.';
	$lang['strftsmappingadded']  =  'TSzK hozzárendelés hozzáadva.';
	$lang['strftsmappingaddedbad']  =  'Nem sikerült hozzáadni a TSzK hozzárendeléshez.';
	$lang['strftsmappingdropped']  =  'TSzK hozzárendelés törölve.';
	$lang['strftsmappingdroppedbad']  =  'Nem sikerült a TSzK hozzárendelést törölni.';
	$lang['strftstabconfigs']  =  'Összeállítások';
	$lang['strftstabdicts']  =  'Szótárak';
	$lang['strftstabparsers']  =  'Elemzők';
	$lang['strftscantparsercopy'] = 'Nem állíthat be együtt elemzőt és sablont szövegkereső beállítás közben.';
    
    
?>
