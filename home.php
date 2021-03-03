<?php
    require_once __DIR__.'/inc/Twig/lib/Twig/Autoloader.php';
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/template');
    $twig = new Twig_Environment($loader, array());

    $data = array(
        'judul' => 'Web Sederhana',
        'deskripsi' => 'Belajar membuat web sederhana',
        'nama_lengkap' => 'Ady Rahmat MA',
        'nama_kota' => 'Jakarta Selatan'
    );
    echo $twig->render('/pages/home/index.php', $data);
?>
