# Test Blog

Das ist das Test Projekt für xentral

## Setup

Ich habe ein Docker Setup eingerichtet für schnelles starten. Repo clonen -> .env Datei erstellen -> Docker maschine starten

```
cp sample.env .env
// modify sample.env as needed
docker-compose up -d
// visit localhost
```

Da ich keine Frameworks nutzen konnte musste ich alles from scratch bauen und konnte vieles nicht beenden. 
Hier eine kleine Idee wie es funktioniert:

Request kommt rein und wird über den RequestHandler gehandhabt. Hier wird entschieden ob es eine DetailPage ist, eine Admin Page oder Index
Im Controller wird dann über das Repository der Artikel oder die Artikel geladen und über Twig ausgegeben.
Dazu hab ich einen DatabaseService und einen Twig Service geschrieben damit diese wiederverwendet werden können. Besonders bei 
der Datenbank sollte es nur eine DB Instanz geben. Alle Datenbank Aktionen werden über PDO gehandhabt. 
Ich habe auch ein CLI Skript geschrieben welches die DB Tables erzeugt und mit welchem man random Autoren generieren kann. 

Ich habe mich erst mit dem BE beschäftigt hätte euch viel mehr im FE gezeigt. Leider war die Zeitangabe sehr sehr sportlich.

Den ganzen Blog from scratch ohne Framework in nur 4 Stunden aufzubauen ist eine unmögliche Aufgabe und ich würde euch liebend gern noch viel mehr zeigen. 
Leider kann ich nur meine Gedanken hier niederschreiben und auf euer Urteil warten. 