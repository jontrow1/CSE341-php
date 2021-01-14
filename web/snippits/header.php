!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8"/>
    <title>Jon Trowbridge Homepage | CSE 341</title>
    <link href="/web/css/style.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=PT+Sans+Caption&display=swap" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="header">
                <img src="/phpmotors/images/site/logo.png" alt="PHP Motors Logo" id="logo">
                <?php if(isset($_SESSION['loggedin'])) {
                    echo "<a href='/phpmotors/accounts/index.php?action=Logout' title='Logout of your account' id='logout_link'>Logout</a>";
                    } else {
                        echo "<a href='/phpmotors/accounts/index.php?action=login' title='Login to your account' id='account_link'>My Account</a>"; } ?>
                <?php if (isset($_SESSION['loggedin'])) {
                    $welcomeFirst = $_SESSION['clientData']['clientFirstname'];
                    echo "<a href='/phpmotors/accounts/index.php' title='Go to your admin page'><span>Welcome $welcomeFirst</span></a>";
                } ?>
            </div>
        </header>

        <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippits/navigation.php'; ?>
        </nav>

        <main>