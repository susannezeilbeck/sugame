# Sugame

Realisierung einer kleinen Webanwendung
(Server -PHP und Client-vue.js)

Anforderungen an die Abgabe:
- [x]	lauffähige Abgabe als virtuelle Maschine (virtualbox) oder Vagrant-Box oder Docker-Container
- [x]	Quellcode (zwingend git-Repository als Zip)
- [x]	Technische Doku
- [x]	Benutzerdoku

Wichtige Eigenschaften, die in Ihrer Lösung sichtbar sein müssen:
- [x]	Trennung zwischen Client- und Serveranteil, die Funktionalität der Anwendung wird durch Zusammenarbeit dieser Anteile erbracht
- [x]	Benutzer können über verschiedene Clients mit demselben Serveranteil arbeiten, ohne zwischen Clients unterscheiden zu müssen (a.k.a. z.B. Session Management)
- [x]	Anwendung wird erbracht durch Dynamik (im Clientanteil und im Serveranteil)
- [x]	die Kommunikation zwischen Client- und Serveranteil geht über reinen Seitenwechsel / Formularinteraktion hinaus, d.h. eine sinnvolle asynchrone Kommunikation zwischen Client und Server muß gedacht und realisiert werden
- [ ]	Datenhaltung erfolgt zentral über die Serverkomponente

Anforderungen an die Webanwendung:
- [x]	sinnvolle Anwendung, sinnvolle Aufteilung auf Client und Server 
- [ ]	mindestens ein CRUD-Zyklus implementiert (Create-Read-Update-Delete)
- [x]	minimale Sicherheit erfüllt (Benutzerbeschränkung, serverseitige Datenvalidierung, Maßnahmen gegen gängige Webangriffe unter Nutzung der Fähigkeiten des/der eingesetzten Frameworks)
- [x]	sinnvoll asynchrone Kommunikation (Ajax) eingesetzt
- [x]	Webserver- und Datenhaltung müssen im eigenen Einflussbereich (auf der eigenen Maschine / in eigenen VMs / eigenen Containern) realisiert werden und nicht in Cloud-Lösungen Dritter

Anforderungen an die kurze Dokumentation:
1.	kurze Doku der „Installation/Inbetriebsetzung“
2.	kurze Doku der Benutzungsszenarien
3.	kurze technische Dokumentation, mindestens:
- [x]	sinnvolle und stichhaltige Begründung der Technologieauswahl / Framework-Auswahl / Auswahl Fremdcode
- [x]	Übersicht Dateiabgabe, darin: Liste der selbst erstellten Dateien (und deren jeweiliger Zweck), Liste der Fremdcodedateien bzw. Ordner und deren Herkunft, Liste der selbst angepassten Fremdcodedateien (und deren Zweck -nur wenn vorhanden!)
- [x]	Beschreibung Interaktionsideen Client-Server bzw. generelle Funktionsabläufe

# Mögliche Vorlage für die Dokumentation:
Dokumentation „Sugame“

## 1. Thema des Projekts

Halten Sie hier das Thema Ihres Projekts fest. Was soll die von Ihnen geplante Anwendung können? Warum haben Sie sich für dieses Thema entschieden?

## 2. Ausgangssituation

Wie war Ihre persönliche Ausgangssituation vor dem Projekt? (Skill-Übersicht einfügen) Schildern Sie, welche  Erfahrungen Sie bisher bei der Entwicklung von Webanwendungen gemacht haben.  

## 3. Vorgehen

Wie sind Sie vorgegangen? Wie haben Sie geplant?  Welche Aktivitäten haben Sie vorgesehen? 
Wie fand Ihr Wissenserwerb und eventuell auch eine Wissensweitergabe statt?

## 4. Anforderungsliste

Erstellen Sie hier eine (nummerierte) Liste mit den Anforderungen an Ihre Anwendung. Fügen Sie eine Spalte über den Fertigstellungsgrad / die Umsetzung hinzu, so dass aus der Liste hervorgeht, was davon im Folgenden umgesetzt wurde.

## 5. Konzeption

### 5.1. Technologie-/Werkzeugauswahl

Welche Technologien / Werkzeuge  haben Sie verwendet?
Warum haben Sie diese verwendet?

### 5.2. Entwurf

Mindestens:
Beschreiben Sie die gewählte(n) Architektur(entscheidungen), die Komponenten und deren Zusammenwirken.
Beschreiben Sie den Entwurf der UI und die getroffenen Entscheidungen / abgewogenen bzw. ausprobierten Alternativen.  
Beschreiben Sie das Datenmodell / die Persistenzüberlegungen

## 6.  Ergebnis des Projekts

Was ist das Ergebnis Ihres Projekts? Machen Sie dieses „plastisch“ erfahrbar auch für Leser/innen, die Ihre Anwendung nicht ausführen (kommentierte(r) Screens / Screenflow). Wie beurteilen Sie Ihr Ergebnis?

## 7. Reflexion

### 7.1  Herausforderungen 

Was waren Ihre Herausforderungen bei diesem Projekt? Wie haben Sie diese aus Ihrer eigenen Perspektive gemeistert?

### 7.2.  Unterstützung 

Was haben Sie unternommen, wenn Sie einmal nicht mehr weiter wussten? Wer/Was hat Ihnen geholfen?

## A. Installationsanleitung

Wie lässt sich Ihre Anwendung in Betrieb nehmen? Erstellen Sie eine Schritt-für-Schritt Anleitung welche so einfach wie möglich zu verstehen und auszuführen ist.
Wichtig: Lassen Sie Ihre Anleitung einen Kommilitonen ohne Ihre Hilfe auf seinem Laptop durchführen/testen!

## B. Benutzerdokumentation

Welche Aufgaben kann der spätere Benutzer mit Ihrer Anwendung lösen?
Stellen Sie Benutzerszenarien auf.  Nutzen Sie dabei echte Screenshots.
