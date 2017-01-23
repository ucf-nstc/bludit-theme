<!DOCTYPE html>
<html>
<head>

	<!-- Meta -->
    <meta charset="UTF-8">

    <!-- Meta tag title -->
    <title><?php echo $Site->title() ?></title>

    <!-- CSS -->
    <?php Theme::css('styles.css', HTML_PATH_THEME . 'public/css/'); ?>

    <!-- JavaScript -->
    <?php Theme::javascript('main.js', HTML_PATH_THEME . 'public/js/'); ?>

    <!-- Plugins site head -->
    <?php Theme::plugins('siteHead'); ?>

</head>
<body>