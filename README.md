TOASTI
----------

TOASTI (TOol for All STrategic Information) wird vom Knowledge Management Committee des [VWI ESTIEM Darmstadt](http://www.vwi.tu-darmstadt.de/) zur Verwaltung von vereinsinternen Informationen entwickelt.


Komponenten
----------

TOASTI basiert auf folgenden Frameworks/Bibliotheken:

* [CakePHP](http://cakephp.org/) 2.1
* [jQuery](http://jquery.com/) 1.8.3
* [Bootstrap](http://twitter.github.com/bootstrap/) 2.2.2
* [Cakephp-Bootstrappifier](https://github.com/mtkocak/Cakephp-Bootstrappifier) 2012-03-27


Installation auf einem Server
----------

- Einen Apache und einen MySQL-Server vorbereiten (z.B. XAMPP).
- TOASTI bei http://www.github.com herunterladen und entpacken ins htdocs-Verzeichnis (z.B. /htdocs/TOASTI/).
- Ausführen: /htdocs/TOASTI/doc/toasti_create_tables.sql
- CakePHP v2.1.5 herunterladen und im Apache in das htdocs-Verzeichnis entpacken (z.B. /htdocs/cakephp/).
- Testen, ob die Startseite von CakePHP angezeigt wird. Diese sollte mehrere Probleme bzgl. der Config melden.
- Bei CakePHP ins Verzeichnis /htdocs/cakephp/app/Config/ wechseln.
- core.php: Salt beliebig austauschen (Länge beibehalten)
- core.php: Seed beliebig austauschen (Länge beibehalten)
- database.php.default: Umbenennen in "database.php"
- database.php: Datenbankdaten für das default-Array angeben
- Die Startseite von CakePHP sollte keine Fehler mehr anzeigen.
- Das Verzeichnis /htdocs/cakephp/app/Config/ kopieren nach: /htdocs/TOASTI/app/
- Das Verzeichnis von CakePHP löschen.
- Jetzt sollte unter http://localhost/TOASTI/ die Startseite von TOASTI erscheinen.
- Ausführen: /doc/toasti_create_acos.sql
- In der Datei /app/Controller/UsersController.php die Zeile 6 auskommentieren: `$this->Auth->allow('login', 'logout');`
- In der Datei /app/Controller/UsersController.php die Zeile 7 einkommentieren: `$this->Auth->allow('*');`
- In der Datei /app/Controller/GroupsController.php die Zeile 12 einkommentieren: `$this->Auth->allow('*');`
- Im Browser über toasti/groups/add folgende vier Gruppen hinzufügen: `Admin, Vorstand, Orgateam, CRC`
- Im Browser /toasti/users/initdb aufrufen. Damit wird festgesetzt, welche Gruppen, welche Rechte haben.
- Im Browser über toasti/users/add einen Administrator hinzufügen.
- Danach die Änderungen in UsersController.php und in GroupsController.php wieder rückgängig machen, damit nur noch Administratoren andere Nutzer registrieren können.


Installation für Entwickler
----------

- Einen Apache und einen MySQL-Server vorbereiten (z.B. XAMPP).
- GitHub for Windows installieren: http://windows.github.com/
- In GitHub for Windows einloggen
- Rechtsklick auf das TOASTI-Repository und "clone to..." wählen.
- TOASTI ins htdocs-Verzeichnis speichern.
- Ausführen: /doc/toasti_create_tables.sql
- CakePHP v2.1.5 herunterladen und im Apache in das htdocs-Verzeichnis entpacken (z.B. /htdocs/cakephp/).
- Testen, ob die Startseite von CakePHP angezeigt wird. Diese sollte mehrere Probleme bzgl. der Config melden.
- Bei CakePHP ins Verzeichnis /app/Config/ wechseln.
- core.php: Salt beliebig austauschen (Länge beibehalten)
- core.php: Seed beliebig austauschen (Länge beibehalten)
- database.php.default: Umbenennen in "database.php"
- database.php: Datenbankdaten für das default-Array angeben
- Die Startseite von CakePHP sollte keine Fehler mehr anzeigen.
- Das Verzeichnis /htdocs/cakephp/app/Config/ kopieren nach: /htdocs/TOASTI/app/
- Das Verzeichnis von CakePHP löschen.
- Jetzt sollte unter http://localhost/TOASTI/ die Startseite von TOASTI erscheinen.
- Ausführen: /doc/toasti_create_acos.sql
- In der Datei /app/Controller/UsersController.php die Zeile 6 auskommentieren: `$this->Auth->allow('login', 'logout');`
- In der Datei /app/Controller/UsersController.php die Zeile 7 einkommentieren: `$this->Auth->allow('*');`
- In der Datei /app/Controller/GroupsController.php die Zeile 12 einkommentieren: `$this->Auth->allow('*');`
- Im Browser über toasti/groups/add folgende vier Gruppen hinzufügen: `Admin, Vorstand, Orgateam, CRC`
- Im Browser /toasti/users/initdb aufrufen. Damit wird festgesetzt, welche Gruppen, welche Rechte haben.
- Im Browser über toasti/users/add einen Administrator hinzufügen.
- Danach die Änderungen in UsersController.php und in GroupsController.php wieder rückgängig machen, damit nur noch Administratoren andere Nutzer registrieren können.


Lizenz
----------

Copyright (C) 2012 VWI ESTIEM Hochschulgruppe TU Darmstadt e.V.

Dieses Programm ist freie Software. Sie können es unter den Bedingungen der GNU General Public License, wie von der Free Software Foundation veröffentlicht, weitergeben und/oder modifizieren, entweder gemäß Version 3 der Lizenz oder (nach Ihrer Option) jeder späteren Version.

Die Veröffentlichung dieses Programms erfolgt in der Hoffnung, daß es Ihnen von Nutzen sein wird, aber OHNE IRGENDEINE GARANTIE, sogar ohne die implizite Garantie der MARKTREIFE oder der VERWENDBARKEIT FÜR EINEN BESTIMMTEN ZWECK. Details finden Sie in der GNU General Public License.

Sie sollten ein Exemplar der GNU General Public License zusammen mit diesem Programm erhalten haben. Falls nicht, siehe <http://www.gnu.org/licenses/>.
