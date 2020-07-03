![Binnentuin - Backend deploy](https://github.com/student-techlife/IPMEDT4-binnentuin-backend/workflows/Binnentuin%20-%20Backend%20deploy/badge.svg)
[![Dependabot Status](https://api.dependabot.com/badges/status?host=github&repo=student-techlife/IPMEDT4-binnentuin-backend)](https://dependabot.com)

# De Binnentuin app (backend)

Deze repository is de backend-side van de binnentuin applicatie.

Het projectgroep bestaat uit:

- Klaas
- Lars
- Vera
- Anne-Sophie
- Joeri
- Ard

## ℹ️ Gebruik van deze repository

Om zoveel mogelijk git probleempjes te voorkomen, zijn er een aantal richtlijnen:

- De `dev` branch is de bakermat van de development.
- 🤷 Wanneer je aan de slag gaat (nieuwe features/bugfix etc.) werk je in een branch die afstamt van de `dev` branch. Middels een **Pull Request** met als target branch `dev`, voeg je uiteindelijk je wijzigingen samen.
- 📅 Wanneer we tot een stable release komen, volgt er een merge van `dev` naar `master` met een release tag.
- ⛔ Er mogen geen directe commits worden uitgevoerd op de `dev` en `master` branch (uitzonderingen daargelaten, branches zijn protected).
- 🔎 Een PR dient door iemand anders dan je zelf te worden **gereviewed** en **gemerged**, iedereen krijgt automatisch een PR ter review toebedeeld.

# 🧰 Hoe aan de slag?

Hieronder staat beschreven hoe je een werk omgeving kan opzetten. Kom je er niet uit? Geef dit dan aan binnen het team 😄 Heb je problemen met GIT? Bekijk dan de [eerste hulp bij GIT problemen](/extra/help.md) pagina.

## Voorbereiding

Voordat je een werk omgeving opzet, is het eerst belangrijk om de MySQL database in orde te krijgen. Database draaien in docker? Ask @klaasnicolaas.

1. Login in je MySQL omgeving.
2. Maak een nieuwe database aan: `CREATE DATABASE [NAAAM DATABASE];`
3. (optioneel) Maak een nieuwe gebruiker aan: `CREATE USER '[GEBRUIKERSNAAM]'@'localhost' IDENTIFIED BY '[WACHTWOORD]';`
4. Geef de (nieuwe) gebruiker rechten over de gemaakte database: `GRANT ALL PRIVILEGES ON [DATABASE NAAM].* TO '[GEBRUIKERSNAAM]'@'localhost';`

## Opzetten werk omgeving

1. Clone deze repository naar een gewenste directory: `git clone git@github.com:student-techlife/IPMEDT4-binnentuin-backend.git`
2. Zorg er voor dat je in MySQL [een database hebt met username en (native) password](#voorbereiding) 
3. Navigeer in je code editor naar de `laravel` directory
4. Maak een kopie van de file: `.env.example` en hernoem het naar `.env`
5. Pas de database gegevens aan in de `.env` file met jouw eigen MySQL gegevens
6. Open een terminal in de `laravel` directory
7. Voer uit: `composer install`
8. Voer uit: `php artisan key:generate`
9. Check in de `.env` file of de variable `API_KEY=` is ingevuld
10. Voer uit: `php artisan migrate`
11. Voer uit: `php artisan serve`

Als het goed is moet je nu via de URL een scherm krijgen waar je kan inloggen.

# ➕ Handige VSCODE extensions

- [Laravel Blade Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade)
- [Laravel Artisan](https://marketplace.visualstudio.com/items?itemName=ryannaddy.laravel-artisan)
- [Live Share](https://marketplace.visualstudio.com/items?itemName=MS-vsliveshare.vsliveshare-pack)

---
Dit project is naar aanleiding van een studie project aan de Hogeschool van Leiden.