# Mobile Web Application Development

**Course portfolio · LIS 4381 · Florida State University**

A collection of mobile and web development coursework, including a mobile business-card preview, a PHP/MySQL pet-store management app, Android interface screenshots, and programming exercises.

[Portfolio](https://brenohal.github.io/brennan-resume/) · [GitHub profile](https://github.com/brenohal) · [LinkedIn](https://www.linkedin.com/in/brennan-o-halloran)

## Mobile project · My Business Card

An animated preview of a mobile business-card experience, designed to make contact details easy to explore on a phone.

![Animated preview of the mobile business-card interface](https://raw.githubusercontent.com/brenohal/mobile-web-application-development/master/p1/img/appgif.gif)

**Note:** This repository contains the preview page and animation, but not the underlying Android Studio project source or a runnable Android build.

## Web project · Pet Store Admin

A PHP and MySQL application for managing pet-store records. It supports browsing, adding, editing, and deleting records, with server-side input validation and PDO prepared statements. The listing page also provides search, sorting, and responsive table controls.

| Browse records | Edit a record |
|:--:|:--:|
| [![Pet-store records page](https://raw.githubusercontent.com/brenohal/mobile-web-application-development/master/p2/img/index.png)](https://github.com/brenohal/mobile-web-application-development/blob/master/p2/img/index.png) | [![Pet-store record edit page](https://raw.githubusercontent.com/brenohal/mobile-web-application-development/master/p2/img/edit.png)](https://github.com/brenohal/mobile-web-application-development/blob/master/p2/img/edit.png) |

**Explore:** [Pet Store Admin source](https://github.com/brenohal/mobile-web-application-development/tree/master/p2) · [Database schema and sample data](https://github.com/brenohal/mobile-web-application-development/blob/master/a3/docs/a3.sql)

## Database design

The coursework includes a MySQL schema for pet stores, customers, and pets, with foreign-key relationships between the records.

[![Pet-store database entity-relationship diagram](https://raw.githubusercontent.com/brenohal/mobile-web-application-development/master/a3/img/erd.png)](https://github.com/brenohal/mobile-web-application-development/blob/master/a3/img/erd.png)

## More coursework

- **A1–A3:** Development setup, programming exercises, database design, and mobile interface screenshots
- **A4–A5:** Form validation and PHP/MySQL data-entry exercises
- **`skillsets/`:** Java and PHP programming practice

Some nested assignment READMEs use a different course code than this repository’s root README. Verify and correct those labels before treating every folder as part of the same course portfolio.

## Technologies

`PHP` · `MySQL` · `PDO` · `Prepared statements` · `Java` · `JSP` · `Android UI coursework` · `HTML` · `CSS` · `JavaScript` · `Bootstrap`

## Run Pet Store Admin locally

The PHP application requires PHP with PDO MySQL support and a local MySQL database. The app’s connection settings are in `global/connection.php`; configure them for your environment and do not commit real credentials.

The schema script at `a3/docs/a3.sql` expects a database named `bmo22a` and drops/recreates its tables. Review it before running, and use a disposable development database. This repository does not include a one-command setup.