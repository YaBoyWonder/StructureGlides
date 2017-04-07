<!DOCTYPE html>
<html>
    <head>
        <title>Wonder Glides</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
            body {
                font: 12px Arial, sans-serif;
            }
            .download  {
                font-size: 0.6em;
            }
        </style>
    </head>
    <body>
       
        <ul>
            foreach ($decks as $deck) {
                echo '<li>';
                echo '<h2>
                    <a href="?file='.htmlspecialchars(urlencode(basename($deck['file']))).'">'.$deck['topic'].'</a>
                    <a rel="nofollow" class="download" href="?file='.htmlspecialchars(urlencode(basename($deck['file']))).'&download=1">Download</a>
                </h2>';
                if (isset($deck['date'])) {
                    echo $deck['date'];
                }
                if (isset($deck['venue'])) {
                    echo ' @ '.$deck['venue'];
                }
                echo '</li>';
            }
        ?>
        </ul>
    </body>
</html>

