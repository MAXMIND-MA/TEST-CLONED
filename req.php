<?php

$ext = new ReflectionExtension('mysqli'); 

if (version_compare(PHP_VERSION, '7.4.0') >= 0) {
    $requirement1 = "V." . PHP_VERSION ;
} else {
    $error        = true;
    $requirement1 =  PHP_VERSION ;
}

if (!extension_loaded('mysqli')) {
    $error        = true;
    $requirement2 = 'Disabled';
} else {
    $requirement2 = 'Enabled';
}

if (!extension_loaded('pdo')) {
    $error        = true;
    $requirement3 = 'Disabled';
} else {
    $requirement3 = 'Enabled';
}

if (!extension_loaded('curl')) {
    $error        = true;
    $requirement4 = 'Disabled';
} else {
    $requirement4 = 'Enabled';
}

if (!extension_loaded('openssl')) {
    $error        = true;
    $requirement5 = 'Disabled';
} else {
    $requirement5 = 'Enabled';
}

if (!extension_loaded('mbstring')) {
    $error        = true;
    $requirement6 = 'Disabled';
} else {
    $requirement6 = 'Enabled';
}

if (!extension_loaded('iconv') && !function_exists('iconv')) {
    $error        = true;
    $requirement7 = 'Disabled';
} else {
    $requirement7 = 'Enabled';
}

if (!extension_loaded('imap')) {
    $error        = true;
    $requirement8 = 'Disabled';
} else {
    $requirement8 = 'Enabled';
}

if (!extension_loaded('gd')) {
    $error        = true;
    $requirement9 = 'Disabled';
} else {
    $requirement9 = 'Enabled';
}

if (!extension_loaded('zip')) {
    $error         = true;
    $requirement10 = 'Disabled';
} else {
    $requirement10 = 'Enabled';
}

$url_f_open = ini_get('allow_url_fopen');
if ($url_f_open != '1'
    && strcasecmp($url_f_open, 'On') != 0
    && strcasecmp($url_f_open, 'true') != 0
    && strcasecmp($url_f_open, 'yes') != 0) {
    $error         = true;
    $requirement11 = 'Disabled';
} else {
    $requirement11 = 'Enabled';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Requirement</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background-color: #DDDDDD;
        }
    </style>
</head>
<body>
    <h4>Requrements</h4>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th><b>EXT</b></th>
                <th><b>RESULT</b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PHP >= 7.4.0</td>
                <td><?php echo $requirement1; ?></td>
            </tr>
            <tr>
                <td>MYSQLi</td>
                <td><?php echo $ext->getVersion() ?></td>
            </tr>
            <tr>
                <td>MySQLi PHP Extension</td>
                <td><?php echo $requirement2; ?></td>
            </tr>
            <tr>
                <td>PDO PHP Extension</td>
                <td><?php echo $requirement3; ?></td>
            </tr>
            <tr>
                <td>cURL PHP Extension</td>
                <td><?php echo $requirement4; ?></td>
            </tr>
            <tr>
                <td>OpenSSL PHP Extension</td>
                <td><?php echo $requirement5; ?></td>
            </tr>
            <tr>
                <td>MBString PHP Extension</td>
                <td><?php echo $requirement6; ?></td>
            </tr>
            <tr>
                <td>iconv PHP Extension</td>
                <td><?php echo $requirement7; ?></td>
            </tr>
            <tr>
                <td>IMAP PHP Extension</td>
                <td><?php echo $requirement8; ?></td>
            </tr>
            <tr>
                <td>GD PHP Extension</td>
                <td><?php echo $requirement9; ?></td>
            </tr>
            <tr>
                <td>Zip PHP Extension</td>
                <td><?php echo $requirement10; ?></td>
            </tr>
            <tr>
                <td>Allow_url_fopen</td>
                <td><?php echo $requirement11; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>