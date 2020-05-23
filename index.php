<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Trolleydienst PHP</title>
    <meta name="description" content="Plane den Trolleydienst deiner Versammlung kinderleicht mit unserem Trolleydienst PHP Programm">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/components/font-awesome/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
</head>

<body>
    <header>
        <div>
            <div class="wrapper-center">
                <a href="/" id="logo"><img src="images/logo-trolleydienst-php.png"></a>
            </div>
        </div>
        <div>
            <div id="site-header" class="wrapper-center">
                <h1 id="site-name">Trolleydienst PHP <small>Kinderleicht installieren und anpassen</small></h1>
            </div>
        </div>
    </header>
    <nav id="nav-main">
        <div class="wrapper-center">
            <ul>
                <li>
                    <a href="/" class="active">
                        <i class="fa fa-download"></i>Download & Demo
                    </a>
                </li>
                <li>
                    <a href="feedback.php">
                        <i class="fa fa-comments-o"></i> Feedback
                    </a>
                </li>
                <li>
                    <a href="licence.html">
                        <i class="fa fa-user"></i> Lizenz
                    </a>
                </li>
                <li>
                    <a href="privacy.html">
                        <i class="fa fa-user-secret"></i> Datenschutz
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/trolleydienst/trolleydienst-php">
                        <i class="fa fa-github"></i> GitHub
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/trolleydienst/trolleydienst-php/issues">
                        <i class="fa fa-bug"></i> Fehler melden
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/trolleydienst/trolleydienst-php/wiki/Routemap">
                        <i class="fa fa-road"></i> Routemap
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/trolleydienst/trolleydienst-php/wiki/Changelog">
                        <i class="fa fa-history"></i> Changelog
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="wrapper-center">
        <main>
            <section id="news">
                <div class="info-box">
                    <p>
                        Mit der Trolleydienst-PHP Version 1.6.1 können Benutzernamen für die Teilnehmer hinterlegt werden.
                    </p>
                </div>
            </section>
            <section id="banner">
                <h2>ÖZ - Trolleydienst Planer</h2>
                <div class="container-center">
                    <div id="product-description" class="column">
                        <p>Plane den Trolleydienst kinderleicht.</p>
                        <ul id="features">
                            <li>Einfache Installation</li>
                            <li>Ohne MySQL Datenbank</li>
                            <li>Übersichtliche Bedienung</li>
                            <li>Einfache Backup Möglichkeit</li>
                            <li>Login Schutz vor Hacker Angriffe</li>
                            <li>Berichte können abgegeben werden</li>
                            <li>E-Mail Versand an alle Teilnehmer</li>
                            <li>Kann mit PHP Kenntnissen leicht angepasst werden</li>
                            <li>Hochgeladene Dateien sind vor dem Zugriff von außen geschützt</li>
                            <li>Teilnehmer können andere Teilnehmer in eine Schicht eintragen</li>
                            <li>Mehrere Schichttypen wie z.B. Trolley, Infostand, usw können angelegt werden</li>
                            <li>Schichtverlauf, Login Fehlversuche und System Fehlermeldungen bequem einsehbar</li>
                        </ul>
                        <p>
                            <a target="_blank" href="//demo.trolleydienst.de" class="button active">Demo</a>
                            <a target="_blank" href="download-latest-version.php" class="button">Download V1.6.1</a>
                            <span id="download-counter">
                            <?php echo (int)file_get_contents('counter.txt');?> downloads
                        </span>
                    </div>
                    <div id="product-image" class="column">
                        <img src="images/software-box.png">
                    </div>
                </div>
            </section>
            <!--
            <section id="routemap">
                <h2>Routemap</h2>
                <h3>Planung für die Zukunft?</h3>
                <h4>Umstellung von Sqlite auf MySql</h4>
                <p>
                    Da Sqlite, im Gegensatz zu MySql, minimale Funktionalitäten besitzt ist ein Datenbank Update schwieriger umzusetzen.<br>
                    Daher wird in der nächsten Version auf MySql umgestellt. Für die Umstellung auf MySql wird es eine Export Möglichkeit geben.
                </p>
            </section>
            -->
            <section id="requirements">
                <h2>Systemanforderungen für Trolleydienst PHP</h2>
                <div class="info-box">
                    <p>
                        <b>PHP7</b> und <b>Sqlite</b> muss auf dem Server installiert sein.
                    </p>
                </div>
            </section>
            <section id="update">
                <h2>Wie aktualisiere ich meine Tolleydienst-PHP Software?</h2>
                <h3>Software Update</h3>
                <div class="info-box">
                    <ol>
                        <li>Erstelle ein Backup deiner Trolleydienst-PHP Software.</li>
                        <li>Lade dir von trolleydienst.de die neuste Version herunter.</li>
                        <li>
                            Auf deinen Server lädst du die neuste Version hoch und überschreibst die alten Dateien.<br>
                            Du kannst auch vorher alle Dateien, bis auf die config.php und database.sqlite,<br>
                            löschen bevor du die aktuelleste Version hoch lädst.
                        </li>
                        <li>
                            Nachdem alle Dateien auf deinem Server hochgeladen wurden musst du noch die update.php ausführen.<br>
                            Dadurch wird deine Datenbank auf den neusten Stand gebracht.
                        </li>
                        <li>Nach einem erfolgreichen Update lösche bitte aus Sicherheitsgründen die Datein update.php von deinem Server.</li>
                    </ol>
                </div>
            </section>
            <section id="hosting">
                <h2>Hosting Anbieter</h2>

                <article class="recommended">
                    <h3>Contabo (Empfohlen)</h3>
                    <p>
                        <a target="_blank" href="https://contabo.de/?show=konfigurator&webspace_id=53" class="button">
                            Zum Anbieter
                        </a>
                    </p>
                    <table>
                        <tr>
                            <td>Paket</td>
                            <td>Webspace-Paket M</td>
                        </tr>
                        <tr>
                            <td>Preis monatlich</td>
                            <td>2,99 €</td>
                        </tr>
                        <tr>
                            <td>Einrichtung</td>
                            <td>kostenlos</td>
                        </tr>
                        <tr>
                            <td>Domain</td>
                            <td>1 .de-Domain</td>
                        </tr>
                        <tr>
                            <td>SSL Verschlüsselung</td>
                            <td>kostenlos</td>
                        </tr>
                    </table>
                </article>

                <article>
                    <h3>webgo</h3>
                    <p>
                        <a target="_blank" href="https://www.webgo.de/gopakete/silver/" class="button">
                            Zum Anbieter
                        </a>
                    </p>
                    <table>
                        <tr>
                            <td>Paket</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>Preis monatlich</td>
                            <td>2,95 €</td>
                        </tr>
                        <tr>
                            <td>Einrichtung</td>
                            <td>14,28 €</td>
                        </tr>
                        <tr>
                            <td>Domain</td>
                            <td>1 .de-Domain</td>
                        </tr>
                        <tr>
                            <td>SSL Verschlüsselung</td>
                            <td>optional</td>
                        </tr>
                    </table>
                </article>

                <article>
                    <h3>ALL-INKL.COM (Comfort)</h3>
                    <p>
                        <a target="_blank" href="https://all-inkl.com/webhosting/privatplus/" class="button">
                            Zum Anbieter
                        </a>
                    </p>
                    <table>
                        <tr>
                            <td>Paket</td>
                            <td>PrivatPlus</td>
                        </tr>
                        <tr>
                            <td>Preis monatlich</td>
                            <td>7.95 €</td>
                        </tr>
                        <tr>
                            <td>Einrichtung</td>
                            <td>0.00 €</td>
                        </tr>
                        <tr>
                            <td>Domain</td>
                            <td>5 Domain</td>
                        </tr>
                        <tr>
                            <td>SSL Verschlüsselung</td>
                            <td>kostenlos</td>
                        </tr>
                    </table>
                </article>

            </section>
            <section id="cart-tool-list">
                <h2>Weitere Trolley Software</h2>
                <p>
                    Jedes der aufgeführten Programme hat eine bestimmte Zielrichtung.
                </p>
                <p>
                    Bevor du dich für eins der Programme entscheidest,<br>
                    musst du erst einmal wissen was für deine Versammlung wirklich benötigt wird und was nicht.
                </p>
                <article>
                    <h3>JW-Tools</h3>
                    <p>
                        <a target="_blank" href="http://www.jw-tools.net/" class="button">
                            Zum Tool
                        </a>
                    </p>
                    <p>Freie Trolley Planung im Kalender ohne feste Termine. Ohne Installation nutzbar.</p>
                </article>
                <article>
                    <h3>JWPublic</h3>
                    <p>
                        <a target="_blank" href="http://jwpublic.com/" class="button">
                            Zum Tool
                        </a>
                    </p>
                    <p>Trolley Planung mit festen Schichten. Es ist einfach zu bedienen und ohne Installation nutzbar.</p>
                </article>
                <article>
                    <h3>JW Management</h3>
                    <p>
                        <a target="_blank" href="http://www.jwmanagement.org/" class="button">
                            Zum Tool
                        </a>
                    </p>
                    <p>Diese Software lässt keine Wünsche offen. Es ist ein umfangreiches Programm zur Trolley Planung mit festen Schichten.</p>
                </article>
            </section>
        </main>
        <footer></footer>
    </div>
</body>
</html>