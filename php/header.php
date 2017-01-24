<!DOCTYPE html>
<html>
<head>

	<!-- Meta -->
    <meta charset="UTF-8">

    <!-- Meta tag title -->
    <title><?php echo $Site->title() ?></title>


    <?php /*
           * These just load static assets, the bludit has a Theme object with methods that default
           * to looking for the assets in different folders than what we have set up here,
           * so the paths are declared explicitly using the HTML_PATH_THEME constant. 
           */ ?>

    <!-- CSS -->
    <?php Theme::css('main.css', HTML_PATH_THEME . 'public/css/'); ?>

    <!-- JavaScript -->
    <?php Theme::javascript('main.js', HTML_PATH_THEME . 'public/js/'); ?>

    <!-- Plugins site head -->
    <?php Theme::plugins('siteHead'); ?>

</head>
<body>