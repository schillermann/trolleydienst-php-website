<?php
    if(
        isset($_POST['email_address']) &&
        isset($_POST['email_message'])
    ) {

        if(!empty($_POST['email_address']) &&
            !empty($_POST['email_message'])
        ) {
            $email_to = 'support@trolleydienst.de';
            $email_address = filter_input(INPUT_POST, 'email_address', FILTER_VALIDATE_EMAIL);
            $email_message = filter_input(INPUT_POST, 'email_message', FILTER_SANITIZE_STRING);
            $version = filter_input(INPUT_POST, 'version', FILTER_SANITIZE_STRING);

            if(!empty($_POST['name']))
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

            if($name)
                $header = 'From: ' . $name . ' <' . $email_address . '>';
            else
                $header = 'From: ' . $email_address;

            $email_body = 'Version: ' . $version . "\n\n" . $email_message;

            if(mail($email_to, 'Von trolleydienst.de', $email_body, $header))
                $message['success'] = 'Vielen dank für dein Feedback.';
            else
                $message['error'] = 'Die E-Mail konnte leider nicht verschickt werden! Du kannst uns auch direkt an ' . $email_to . ' schreiben.';
        } else {
            $message['error'] = 'Bitte fülle alle Felder aus!';
        }
    }
?>
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
                    <a href="/">
                        <i class="fa fa-download"></i>Download & Demo</a>
                </li>
                <li>
                    <a href="feedback.php" class="active">
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
			<?php if (isset($message)) : ?>
                <div id="note-box" class="fade-in">
                    <?php if (isset($message['success'])) : ?>
                        <p class="success">
                            <?php echo $message['success']; ?>
                        </p>
                    <?php elseif(isset($message['error'])): ?>
                        <p class="error">
                            <?php echo $message['error']; ?>
                        </p>
                    <?php endif; ?>
                </div>
			<?php endif; ?>
            <header>
                <h2>E-Mail Versand</h2>
            </header>
              <div class="container-center">
                  <div class="info-box">
                      <p>Wir feuen uns über dein Feedback.</p>
                      <ul>
                          <li>Was können wir noch verbessern?</li>
                          <li>Was können wir einfacher machen?</li>
                      </ul>
                  </div>
                <form method="post">
                    <fieldset>
                        <legend>E-Mail Formular</legend>
                        <div>
                            <label for="email_address">E-Mail <small>Pflichtfeld</small></label>
                            <input id="email_address" name="email_address" required value="<?php echo ($email_address)? $email_address : '';?>">
                        </div>
                        <div>
                            <label for="name">Name</label>
                            <input id="name" name="name" value="<?php echo ($name)? $name : '';?>">
                        </div>
                        <div>
                            <label for="version">Deine Trolleydienst Version</label>
                            <input id="version" name="version" value="<?php echo ($version)? $version : '';?>">
                        </div>
                        <div>
                            <label for=email_"message">Mitteilung <small>Pflichtfeld</small></label>
                            <textarea id="email_message" name="email_message" rows="20" required><?php echo ($email_message)? $email_message : '';?></textarea>
                        </div>

                    </fieldset>
                    <div class="from-button">
                        <button name="send" class="active" tabindex="3">
                            <i class="fa fa-paper-plane"></i> Senden
                        </button>
                    </div>
                </form>
            </div>
        </main>
        <footer></footer>
    </div>
    <script>
        function closeNoteBox() {
            document.getElementById("note-box").classList.add("fade-out");
        }
    </script>
</body>
</html>