# PHP-EXPERT Moduleopdracht

## Voetbalclub ASD `20

## Toelichting

De voetbalclub moet een administratiesysteem hebben van wie in welk team speelt maar ook of het lid betaald heeft of niet. Kortom een administratiesysteem voor leden. Daarnaast wil de club ook verschillende totaaloverzichten kunnen maken van de verschillende teams.

## Leerdoelen

> 1. [ ] Ik maak een applicatie om de leden administratie van de voetbalclub te kunnen beheren

## Opdracht

-   Je mag gebruik maken van een CSS framework

### Database

-   [ ] Maak een database: `voetbalclubASD`

-   [ ] Maak een database tabel: `gebruikers`
-   [ ] Maak de volgende _kolommen_ aan: - id (int:11) = Primary Key - voornaam (varchar:100) - achternaam (varchar:100) - email (varchar:200) - wachtwoord (varchar:60) - team (int:11) - contributieIsBetaald (boolean)
-   [ ] Zet gegevens in deze tabel.

-   [ ] Maak nog een tabel: `teams`
-   [ ] Maak de volgende _kolommen_ aan:
    -   id (int:11)
    -   naam (varchar:100)
-   [ ] Zet zelf bedachte gegevens in deze tabel.

1. [*] Maak een database bestand: db.conn.php
2. [*] Maak een pagina om alle leden te kunnen tonen (overzichtspagina met een tabel)
3. [*] Maak een pagina om teams te kunnen bekijken (overzichtspagina met een tabel)
4. [*] Maak een pagina om de gegevens van een enkele gebruiker te kunnen tonen (overzicht van een enkele rij)
5. [*] Maak een pagina om de gegevens van een enkel team te kunnen tonen (overzicht van een enkele rij)
6. [*] Maak op elke regel van de eerder gemaakte tabellen een link waarmee je de rij kunt verwijderen
7. [*] Maak een link op de pagina van opdracht 2 die verwijst naar een enkele gebruiker (zie opdracht 4)
8. [*] Maak een link op de pagina van opdracht 2 die ervoor zorgt dat de gebruiker (lid) verwijderd wordt (gebruik $\_GET)
9. [ ] Maak een link op de pagina van opdracht 2 die ervoor zorgt dat je de gebruiker kunt updaten.

## Eindresultaat

Het eindresultaat is een volledig werkende webapplicatie die de overzichten van `teams` en van `gebruikers` kan tonen. Daarnaast ook de _profiel_ pagina's van individuele entiteiten. Je kunt de verschilledne entitieiten verwijderen, aanpassen en toevoegen.

## Bronnen

Een lijstje van links naar externe bronnen

> Bijvoorbeeld:  
> [W3 Schools - PHP Functions](https://www.w3schools.com/php/php_functions.asp)  
> [Jaap van der Veen - PHP Basiscursus Les3: Functies](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-3-inleiding-functies/)
