﻿TOASTI
----------

TOASTI (TOol for All STrategic Information) wird vom Knowledge Management Committee des [VWI ESTIEM Darmstadt](http://www.vwi.tu-darmstadt.de/) zur Verwaltung von vereinsinternen Informationen entwickelt.


Komponenten
----------

TOASTI basiert auf folgenden Frameworks/Bibliotheken:

* [CakePHP](http://cakephp.org/) 2.1
* [jQuery](http://jquery.com/) 1.7
* [Bootstrap](http://twitter.github.com/bootstrap/) 2.0
* [Bootstrap Collapse Plugin](http://twitter.github.com/bootstrap/javascript.html#collapse)
* [Bootstrap Dropdown Plugin](http://twitter.github.com/bootstrap/javascript.html#dropdowns)
* [Cakephp-Bootstrappifier](https://github.com/mtkocak/Cakephp-Bootstrappifier) 2012-03-27


Installation
----------

- Einen Apache und einen MySQL-Server vorbereiten.
- TOASTI herunterladen und entpacken.
- Ausführen: /doc/toasti_create_tables.sql
- CakePHP v2.1.5 herunterladen und im Apache in das htdocs-Verzeichnis entpacken.
- Testen, ob die Startseite von CakePHP angezeigt wird. Diese sollte mehrere Probleme bzgl. der Config melden.
- Bei CakePHP ins Verzeichnis /app/Config/ wechseln.
- core.php: Salt beliebig austauschen (Länge beibehalten)
- core.php: Seed beliebig austauschen (Länge beibehalten)
- database.php.default: Datenbankdaten angeben
- database.php.default: Umbenennen in "database.php"
- Die Startseite von CakePHP sollte keine Fehler mehr anzeigen.
- Das Verzeichnis /app/Config/ sichern.
- Das Verzeichnis von CakePHP löschen.
- TOASTI ins htdocs-Verzeichnis kopieren.
- Das gesicherte Config-Verzeichnis in TOASTI im Verzeichnis /app/ einfügen.
- Jetzt sollte die Startseite von TOASTI erscheinen.
- In der Datei /app/Controller/UsersController.php in Zeile 7 bei `$this->Auth->allow('*');` den Kommentar entfernen.
- Im Browser über toasti/users/add einen Administrator hinzufügen.
- Für die Berechtigungen müssen zunächst die Zugriffspunkte in der Datenbank definiert werden (siehe Datei doc/toasti_create_acos.sql).
- Die Zugriffsrechte werden gesetzt, indem man toasti/users/initdb im Browser aufruft.
- Danach die Zeile `$this->Auth->allow('*');` wieder auskommentieren, damit nur noch Administratoren andere Nutzer registrieren können.


Lizenz
----------

Copyright (C) 2012 VWI ESTIEM Hochschulgruppe TU Darmstadt e.V.

Dieses Programm ist freie Software. Sie können es unter den Bedingungen der GNU General Public License, wie von der Free Software Foundation veröffentlicht, weitergeben und/oder modifizieren, entweder gemäß Version 3 der Lizenz oder (nach Ihrer Option) jeder späteren Version.

Die Veröffentlichung dieses Programms erfolgt in der Hoffnung, daß es Ihnen von Nutzen sein wird, aber OHNE IRGENDEINE GARANTIE, sogar ohne die implizite Garantie der MARKTREIFE oder der VERWENDBARKEIT FÜR EINEN BESTIMMTEN ZWECK. Details finden Sie in der GNU General Public License.

Sie sollten ein Exemplar der GNU General Public License zusammen mit diesem Programm erhalten haben. Falls nicht, siehe <http://www.gnu.org/licenses/>.
