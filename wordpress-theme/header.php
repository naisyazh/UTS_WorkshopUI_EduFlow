<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <nav class="container">
        <a href="../index.html" class="logo">🎓 EduLearn</a>
        
        <ul class="nav-menu">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../katalog-kursus.html">Kursus</a></li>
            <li><a href="<?php echo home_url('/'); ?>" class="active">Artikel</a></li>
            <li><a href="../dashboard.html">Dashboard</a></li>
            <li><a href="../login.html">Login</a></li>
        </ul>
    </nav>
</header>
