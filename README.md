# Sugame

## Anforderungen mit Status

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

### Projektziel:
"Sugame" ist eine interaktive Anwendung, die das klassische Konzept eines Text-Adventures mit moderner Webtechnologie vereint. Nutzer können aus drei einzigartigen Szenarien wählen: Fantasy, Steampunk und Romantik. Jedes Szenario bietet eine eigene Geschichte und interaktive Elemente, die den Spieler in eine immersives Erlebnis eintauchen lassen.

### Funktionsweise:

Nutzer wählen eines der drei Szenarien aus.
Jedes Szenario bietet eine eigene Handlung und interaktive Entscheidungsmöglichkeiten.
Die Entscheidungen der Nutzer beeinflussen den Verlauf und Ausgang der Geschichte.
Die Anwendung ist in Vue.js für das Frontend und PHP für das Backend entwickelt.
Motivation für die Themenwahl:
Die Idee für "Sugame" entstand aus einer Faszination für narrative Spiele und dem Wunsch, traditionelle Text-Adventures für eine neue Generation von Spielern zugänglich zu machen. Durch die Integration moderner Webtechnologien und die Schaffung von tiefgründigen, interaktiven Szenarien soll "Sugame" die Grenzen zwischen Spiel und Erzählung verwischen und den Nutzern ein einzigartiges Erlebnis bieten. Die Auswahl von Fantasy, Steampunk und Romantik als Szenarien basiert auf dem breiten Interesse an diesen Genres und dem Ziel, eine vielfältige Zielgruppe anzusprechen.

## 2. Ausgangssituation

Ich hatte bisher keine bis wenige Erfahrungen im Bereich Webentwicklung sammeln dürfen. Durch mein Studium konnte ich erste Skills lernen. Für das Projekt benötigte ich allerdings ein intensives Studium der vorgegebenen Technologien und der Methoden zur Softwareentwicklung.

## 3. Vorgehen

### Planungsphase:

- Konzeptentwicklung: Die erste Phase bestand darin, ein klares Konzept für "Sugame" zu definieren. Dies beinhaltete die Auswahl der Szenarien (Fantasy, Steampunk, Romantik) und die Grundlegung der Handlungsstränge.
- Technologieauswahl: Entscheidung für Vue.js für das Frontend und PHP für das Backend, basierend auf Projektvorgaben und der Eignung dieser Technologien für das Projekt.
- Design-Entwurf: Skizzierung des User Interfaces und User Experience-Designs unter Berücksichtigung der Interaktivität und Benutzerführung.
- Aufgabenplanung: Erstellung eines detaillierten Projektplanes, einschließlich Milestones und Zeitplanung.

### Entwicklungsphase:

- Aufbau des Grundgerüsts: Entwicklung des Grundgerüsts der Anwendung in Vue.js und PHP.
- Implementierung der Szenarien: Schrittweise Entwicklung der drei Szenarien, einschließlich der Erstellung von Texten und Entscheidungspfaden.
- UI/UX-Integration: Umsetzung des zuvor entworfenen UI/UX-Designs und Anpassung für eine optimale Nutzererfahrung.
- Funktionalitätstests: Durchführung von Tests zur Überprüfung der Funktionalität und Benutzerfreundlichkeit.

### Wissenserwerb und -weitergabe:

- Wissenserwerb: Um meine Kenntnisse in Vue.js zu vertiefen, nutzte ich Online-Ressourcen, Tutorials und Foren. Zusätzlich halfen mir die Diskussionen mit Kommilitonen und Dozenten, mein Verständnis für spezifische Herausforderungen zu erweitern.
- Wissensweitergabe: Durch regelmäßige Treffen und Diskussionsrunden mit anderen Studierenden konnte ich mein erworbenes Wissen teilen. Dies war insbesondere bei der gemeinsamen Lösungsfindung für technische Probleme hilfreich.

### Dokumentation:

- Parallel zur Entwicklung von "Sugame" führte ich eine fortlaufende Dokumentation durch. Diese Dokumentation umfasste sowohl technische Aspekte als auch den Entwicklungsprozess (Entscheidungen, Herausforderungen, Lösungsansätze).

## 4. Anforderungsliste

| Nr. | Anforderung                                         | Fertigstellungsgrad / Umsetzung                 |
|-----|-----------------------------------------------------|-----------------------------------------------|
| 1   | Interaktives Text-Adventure mit drei Szenarien: Fantasy, Steampunk, Romantik | Vollständig umgesetzt |
| 2   | Benutzerfreundliche, intuitive Oberfläche            | Vollständig umgesetzt                           |
| 3   | Responsive Design für verschiedene Endgeräte        | Vollständig umgesetzt                           |
| 4   | Implementierung einer Geschichte mit verzweigten Pfaden in jedem Szenario | Vollständig umgesetzt                           |
| 5   | Einbindung von Entscheidungspunkten, die den Spielverlauf beeinflussen | Vollständig umgesetzt                           |
| 6   | Dynamische Inhaltsanzeige abhängig von Benutzerentscheidungen | Vollständig umgesetzt                           |
| 7   | Entwicklung in Vue.js (Frontend) und PHP (Backend)   | Vollständig umgesetzt                           |
| 8  | Sicherstellung der Datensicherheit und Datenschutzbestimmungen | Vollständig umgesetzt                           |
| 9  | Kompatibilität mit gängigen Webbrowsern             | Vollständig umgesetzt                           |
| 10  | Möglichkeit zur Skalierung und Hinzufügen neuer Szenarien | Grundstruktur implementiert, erweiterbar     |
| 11  | Performance-Optimierung und Ladezeitenminimierung   | Laufende Optimierung, grundlegende Implementierung vorhanden |

## 5. Konzeption

### 5.1. Technologie-/Werkzeugauswahl

**Verwendete Technologien und Werkzeuge:**

1. **Vue.js (Frontend-Framework):**
   - **Grund für die Wahl:** Vue.js bietet eine reaktive und komponentenbasierte Architektur, die ideal für die Entwicklung interaktiver und dynamischer Webanwendungen ist. Es ist leichtgewichtig, intuitiv und gut dokumentiert, was die Entwicklung beschleunigt und vereinfacht.

2. **PHP (Backend-Sprache):**
   - **Grund für die Wahl:** PHP ist eine weit verbreitete und bewährte Server-Sprache, die eine einfache Integration mit verschiedenen Datenbanken ermöglicht. Meine Vorkenntnisse in PHP erleichterten die Entwicklung und gewährleisteten eine stabile Backend-Struktur.

3. **HTML/CSS/JavaScript (Web-Technologien):**
   - **Grund für die Wahl:** Diese grundlegenden Web-Technologien sind unerlässlich für die Gestaltung und Funktionalität jeder Webanwendung. HTML und CSS ermöglichen die Strukturierung und das Design der Benutzeroberfläche, während JavaScript interaktive Elemente einbindet.

4. **Git (Versionskontrollsystem):**
   - **Grund für die Wahl:** Git ermöglicht eine effiziente Versionskontrolle und Kollaboration. Es ist entscheidend für die Verwaltung des Entwicklungsprozesses und für die Zusammenarbeit im Team.

5. **Visual Studio Code (Entwicklungsumgebung):**
   - **Grund für die Wahl:** Visual Studio Code ist ein vielseitiger und leistungsstarker Code-Editor, der eine breite Palette von Erweiterungen und Integrationen unterstützt, was die Entwicklung effizienter macht.

**Zusammenfassung der Wahl:**
Die Auswahl dieser Technologien und Werkzeuge wurde von mehreren Faktoren geleitet: Projektvorgaben, Eignung für das Projekt, Gemeinschaftsunterstützung, Effizienz und die Fähigkeit, eine qualitativ hochwertige und benutzerfreundliche Anwendung zu erstellen. Vue.js und PHP bildeten eine starke Kombination für Frontend und Backend, während die restlichen Tools spezifische Bedürfnisse in den Bereichen wie Code-Entwicklung abdeckten.

### 5.2. Entwurf

**Architekturentscheidungen und Komponenten:**

1. **Architektur:**
   - **MVC-Architektur (Model-View-Controller):** Die Anwendung verwendet eine MVC-Architektur, wobei Vue.js das View-Handling übernimmt, während PHP die Controller- und Model-Funktionen ausführt. Diese Trennung ermöglicht eine klare Strukturierung und erleichtert die Wartung und Erweiterbarkeit der Anwendung.

2. **Komponenten und deren Zusammenwirken:**
   - **Frontend-Komponenten:** Jedes Szenario (Fantasy, Steampunk, Romantik) ist als eine separate Vue-Komponente implementiert. Diese Komponenten verwalten den Zustand der Geschichte und die Benutzerinteraktionen.
   - **Backend-Komponenten:** PHP-Scripts dienen als Controller, die Anfragen vom Frontend entgegennehmen, verarbeiten und mit dem Datenmodell interagieren.

**UI-Entwurf:**

1. **Designprinzipien:**
   - **Benutzerfreundlichkeit:** Ein intuitives Layout, das den Benutzer durch die Geschichte führt, mit klaren Anweisungen und Feedback zu Benutzeraktionen.
   - **Ästhetik:** Ein themenspezifisches Design für jedes Szenario, um eine immersive Erfahrung zu schaffen.

2. **Entscheidungen und Alternativen:**
   - **Responsive Design:** Umgesetzt mit flex, getestet auf verschiedenen Bildschirmgrößen. Alternativ hätte Bootstrap verwendet werden können, aber die Entscheidung fiel auf eine maßgeschneiderte Lösung für mehr Flexibilität.
   - **Interaktivität:** JavaScript und Vue.js für dynamische Inhalte und reaktive Benutzeroberflächen. Vue.js wurde gegenüber anderen Frameworks wie React aufgrund seiner Einfachheit und Leichtigkeit bevorzugt.

**Datenmodell und Persistenz:**

1. **Datenstruktur:**
   - **Szenarien:** auf Grund der Nutzung von OpenAI zur dynamischen Spieleentwicklung wurde auf eine Persistierung der Daten verzichtet. So entsteht mehr Flexibilität.

2. **Persistenzüberlegungen:**
   - **Datenintegrität:** Durch die Nutzung von Sessions kann ein Spieler in einem Szenario längere Zeit spielen
   - **Datensicherheit:** Durch die Haltung der Daten in Arrays mit Sessions ist ein Zugriff anderer Spieler nicht möglich

Zusammenfassend wurde bei der Entwicklung von "Sugame" besonderer Wert auf eine klare und simple Architektur, ein benutzerfreundliches und responsives UI-Design sowie ein robustes und sicheres Client-Server modell gelegt. Die ausgewählten Technologien und Werkzeuge unterstützen diese Ziele effektiv und bieten gleichzeitig Raum für zukünftige Erweiterungen und Verbesserungen.

## 6.  Ergebnis des Projekts

**Ergebnisbeschreibung:**

"Sugame" ist ein interaktives Text-Adventure, das die Benutzer in drei verschiedene Welten – Fantasy, Steampunk und Romantik – eintauchen lässt. Die Anwendung bietet eine immersive Erfahrung mit verzweigten Erzählungen, die sich aufgrund der Entscheidungen der Spieler unterschiedlich entfalten.

**Visualisierung und Screenflow:**

1. **Startbildschirm:**
   - Der Startbildschirm präsentiert das Logo von "Sugame" und die Optionen, eines der drei Szenarien zu spielen.
   - **Kommentar:** Der Startbildschirm ist klar und einladend, mit einem Fokus auf Benutzerfreundlichkeit und Einfachheit.

2. **Spielinterface:**
   - Das Spielinterface zeigt den Text des Abenteuers, mit Input, an denen Benutzer die Geschichte weiterverfolgen kann. Der Fortschritt wird automatisch gespeichert. Im Hintergrund wird ein thematisch passendes Bild angezeigt, um Immersion zu erzeugen.
   - **Kommentar:** Das Interface ist einfach und intuitiv, mit fokussiertem Design, das die Lesbarkeit und Interaktion unterstützt.

**Beurteilung des Ergebnisses:**

Ich bewerte das Ergebnis von "Sugame" sehr positiv. Die Anwendung verbindet erfolgreich moderne Webtechnologien mit dem klassischen Konzept eines Text-Adventures und schafft ein einnehmendes Spielerlebnis. Die Benutzeroberfläche ist sauber und benutzerfreundlich gestaltet, und die Integration der verschiedenen Szenarien funktioniert reibungslos. Die Verwendung von Vue.js und PHP hat sich als effektiv erwiesen, und die Leistung der Anwendung ist stabil.

Trotz des Erfolgs gibt es Bereiche für zukünftige Verbesserungen, insbesondere in Bezug auf die Erweiterung der Szenarien, die Integration mehrsprachiger Unterstützung und die Entwicklung eines Persistenzmodells, welches allerdings mit OpenAI harmonieren muss.. Insgesamt betrachtet ist "Sugame" ein gelungenes Projekt, das seine Zielsetzungen erfüllt und eine solide Grundlage für weitere Entwicklungen bietet.

## 7. Reflexion

### 7.1  Herausforderungen

**Herausforderungen:**

1. **Erlernen neuer Technologien:**
   - **Herausforderung:** Die Verwendung von Vue.js war neu für mich, daher bestand eine Herausforderung darin, mich schnell in dieses Framework einzuarbeiten.
   - **Bewältigung:** Ich nutzte Online-Tutorials, Dokumentationen und Foren, um mein Verständnis zu vertiefen. Praktische Übungen und die schrittweise Implementierung spezifischer Funktionen halfen mir, meine Kenntnisse zu festigen.

2. **Design und User Experience:**
   - **Herausforderung:** Die Gestaltung einer intuitiven und ansprechenden Benutzeroberfläche war entscheidend, aber auch herausfordernd, da es darum ging, ein Gleichgewicht zwischen Ästhetik und Funktionalität zu finden.
   - **Bewältigung:** Durch iteratives Design, Benutzertests und Feedback-Sammlung konnte ich ein benutzerfreundliches Interface entwickeln, das sowohl optisch ansprechend als auch funktional ist.

3. **Verzweigte Erzählstruktur:**
   - **Herausforderung:** Die Entwicklung einer komplexen, verzweigten Erzählstruktur, die auf Benutzerentscheidungen reagiert, war technisch anspruchsvoll.
   - **Bewältigung:** Ich entwickelte eine Integration mit OpenAI, das unterschiedliche Entscheidungspfade und deren Konsequenzen effektiv handhaben konnte. Zudem wurde viel Zeit in das Testen und Feinabstimmen der Szenarien investiert.

4. **Performance-Optimierung:**
   - **Herausforderung:** Die Sicherstellung einer schnellen Ladezeit und reibungslosen Performance war wichtig, insbesondere bei der Dynamik der interaktiven Elemente.
   - **Bewältigung:** Ich optimierte den Code und die Ressourcennutzung, verwendete Lazy Loading für schwere Ressourcen und führte regelmäßige Performance-Tests durch.

5. **Datensicherheit und Datenschutz:**
   - **Herausforderung:** Als Webanwendung war es entscheidend, die Datensicherheit und Einhaltung der Datenschutzbestimmungen zu gewährleisten.
   - **Bewältigung:** Implementierung eines Session Handlings

**Persönliche Einschätzung:**

Aus meiner Sicht habe ich diese Herausforderungen erfolgreich gemeistert, indem ich strukturiert vorging, mich kontinuierlich weiterbildete und offen für Feedback und Verbesserungen war. Besonders wertvoll waren dabei die praktischen Erfahrungen, die ich während des Projekts sammeln konnte. Sie haben nicht nur meine technischen Fähigkeiten, sondern auch mein Verständnis für die Bedeutung von Benutzerzentrierung und gründlicher Planung im Entwicklungsprozess verbessert.

### 7.2.  Unterstützung 

**Maßnahmen bei Schwierigkeiten:**

1. **Online-Ressourcen:**
   - **Einsatz:** Bei technischen Herausforderungen griff ich häufig auf Online-Tutorials, Foren und Dokumentationen zurück. Websites wie Stack Overflow, GitHub und spezifische Dokumentationsseiten für Vue.js und PHP waren besonders hilfreich.
   - **Nutzen:** Diese Ressourcen boten Lösungen für spezifische Probleme, Erklärungen zu Konzepten und Codebeispiele, die mir halfen, Blockaden zu überwinden.

2. **Community und Foren:**
   - **Einsatz:** Ich beteiligte mich aktiv in Entwicklerforen und Community-Gruppen. Das Einbringen eigener Fragen und die Teilnahme an Diskussionen zu ähnlichen Problemen waren wichtige Bestandteile meiner Strategie.
   - **Nutzen:** Der Austausch mit anderen Entwicklern bot neue Perspektiven und praktische Lösungsansätze, die oft nicht in Standardtutorials zu finden waren.

3. **Kollegen und Mentoren:**
   - **Einsatz:** Bei komplexeren Herausforderungen suchte ich Rat bei erfahrenen Kollegen und Mentoren.
   - **Nutzen:** Ihre Erfahrung und ihr Fachwissen halfen mir, tiefgreifendere Probleme zu verstehen und zu lösen. Zudem boten sie wertvolle Einblicke in Best Practices der Softwareentwicklung.

4. **Feedback und User-Testing:**
   - **Einsatz:** Um die Benutzerfreundlichkeit und das Design zu verbessern, führte ich regelmäßige Benutzertests durch und sammelte Feedback von Testnutzern.
   - **Nutzen:** Dieses Vorgehen half mir, Schwachstellen im UI/UX-Design zu erkennen und meine Entwürfe aus der Perspektive der Endnutzer zu verbessern.

5. **Pausen und Distanzierung:**
   - **Einsatz:** Bei anhaltenden Blockaden nahm ich mir bewusst Zeit abseits des Projekts, um meinen Geist zu entspannen und Distanz zu gewinnen.
   - **Nutzen:** Oft führte diese mentale Pause zu neuen Ideen und Ansätzen, die ich nach der Rückkehr ins Projekt umsetzen konnte.

**Zusammenfassung:**

Die Kombination aus Selbststudium, Nutzung von Online-Communities, Austausch mit Fachleuten, direktem Feedback von Benutzern und bewussten Pausen bildete die Grundlage meiner Strategie, um Herausforderungen zu bewältigen. Diese vielfältigen Ansätze ermöglichten es mir, sowohl technische als auch konzeptionelle Probleme effektiv zu lösen und gleichzeitig mein Wissen und meine Fähigkeiten kontinuierlich zu erweitern.

## A. Installationsanleitung

Die Installation habe ich ausgelagert in (INSTALL.md)[INSTALL.md]

## B. Benutzerdokumentation

Die Benutzerdokumentation habe ich ausgelagert in (HOTWO.md)[HOWTO.md]
