<!-- Start HTML Doc -->
<!doctype html>
<html>
<!-- Start Header -->
<head>
    <!-- WP_Head führt weitere metadaten in den Header die Wordpress benötigt. Ein Beispiel dafür ist die Adminleiste-->
	<?php wp_head(); ?>
    <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>"/>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen"/>
    <link rel="icon apple-touch-icon" sizes="180x180" href="https://namics.com/themes/custom/namics/assets/favicons/favicon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://namics.com/themes/custom/namics/assets/favicons/favicon-32x32.png">
</head>
<!-- End Header -->
<!-- Start Body -->
<body>
<!-- wrapper für Content der Webseite -->
<div id="wrapper">
    <!-- Content Header -->
    <div id="header">
        <h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<?php bloginfo( 'description' ); ?>
    </div>



