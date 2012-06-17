TOASTI
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

Zur Installation sollte zuerst eine kompatible CakePHP-Version installiert und die Konfigurationsdateien in /app/Config/ angepasst werden (die Konfigurationsdateien sind aus Sicherheitsgründen nicht im Repository vorhanden). Das Aufrufen des Root-Verzeichnises von CakePHP im Browser zeigt, ob die Konfiguration korrekt ist. Anschließend müssen die von TOASTI benötigten MySQL-Datenbanken erstellt (siehe Datei doc/toasti_create_tables.sql) und TOASTI in das CakePHP-Installationsverzeichnis kopiert werden.
In der Datei /app/Controller/UsersController.php muss anschließend in Zeile 7 bei "$this->Auth->allow('*');" der Kommentar entfernt werden. Dann kann man im Browser über toasti/users/add einen Administrator hinzuzufügen.
Für die Berechtigungen müssen zunächst die Zugriffspunkte in der Datenbank definiert werden (siehe Datei doc/toasti_create_acos.sql). Die Zugriffsrechte werden gesetzt, indem man toasti/users/initdb im Browser aufruft.
Danach sollte die Zeile "$this->Auth->allow('*');" wieder auskommentiert werden, damit nur noch Administratoren andere Nutzer registrieren können.


Lizenz
----------

Copyright (C) 2012 VWI ESTIEM Hochschulgruppe TU Darmstadt e.V.

Dieses Programm ist freie Software. Sie können es unter den Bedingungen der GNU General Public License, wie von der Free Software Foundation veröffentlicht, weitergeben und/oder modifizieren, entweder gemäß Version 3 der Lizenz oder (nach Ihrer Option) jeder späteren Version.

Die Veröffentlichung dieses Programms erfolgt in der Hoffnung, daß es Ihnen von Nutzen sein wird, aber OHNE IRGENDEINE GARANTIE, sogar ohne die implizite Garantie der MARKTREIFE oder der VERWENDBARKEIT FÜR EINEN BESTIMMTEN ZWECK. Details finden Sie in der GNU General Public License.

Sie sollten ein Exemplar der GNU General Public License zusammen mit diesem Programm erhalten haben. Falls nicht, siehe <http://www.gnu.org/licenses/>.
