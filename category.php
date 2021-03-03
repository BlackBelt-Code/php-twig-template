<?php
    include_once __DIR__.'/inc/Twig/lib/Twig/Autoloader.php';
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/template');
    $twig = new Twig_Environment($loader, array());

    $data = array(
        'judul' => 'Web Sederhana',
    );
    
    echo $twig->render('/pages/category/index.php', $data);
?>
