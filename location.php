<?php

if (isset($_GET['query'])) {
    $search = strtolower(trim($_GET['query']));

    switch ($search) {
        case 'cnc kesim makinası':
        case 'cnc':
            header('Location: cnc_machine.php');
            exit;
        case 'serim makinası':
        case 'serim':
            header('Location: serim.php');
            exit;
        case 'kalıp':
        case 'kalıp ve pastal':
            header('Location: kalip_ve_pastal.php');
            exit;
        case 'kumaş kontrol':
        case 'kumas':
            header('Location: kumas_kontrol.php');
            exit;
        case 'ekipman':
            header('Location: ekipman_masa_sehba.php');
            exit;
        case 'dikiş':
        case 'dikis':
            header('Location: dikis_makinalari.php');
            exit;
        case 'plotter':
            header('Location: plotter_cizici.php');
            exit;
        default:
            // Arama bulunamazsa ana sayfaya veya bir hata sayfasına
            header('Location: index.php');
            exit;
    }
}
