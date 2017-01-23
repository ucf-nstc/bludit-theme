<!DOCTYPE html>
<html>
<head>

	<!-- Meta -->
    <meta charset="UTF-8">

    <!-- Meta tag title -->
    <title><?php echo $Site->title() ?></title>

    <!-- CSS -->
    <?php Theme::css('public/css/styles.css'); ?>

    <!-- JavaScript -->
    <?php Theme::javascript('public/js/main.js'); ?>

    <!-- Plugins site head -->
    <?php Theme::plugins('siteHead'); ?>

</head>
<body>