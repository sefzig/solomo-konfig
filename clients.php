<?php

 /* ConfiQr Clients
  * 
  * Dieses PHP-Programm stellt der einbindenden Anwendung PHP-Variablen entspreched 
  * des URL-Parameters 'c' Einstellungen für verschiedene Clients zur Verfügung.
  */
    $client = $_REQUEST["c"];
    $admin =  $_REQUEST["a"];
 
 /* Client-Einstellungen
  * 
  * $client_admin: Ausschalten der Nutzungsbedingungen, 1 oder 0
  * $client_favicon: Das Desktop-Icon, absoluter Pfad, 114x114 Pixel
  * $client_header: Die Hintergrundfarbe des Headers, CSS hexadezimal
  * $client_hintergrund: Die Hintergrund-Farbe des Inhalts, CSS hexadezimal
  * $client_logo: Das Header-Bild, absoluter Pfad, 422,95 Pixel
  * $client_schrift_art: Die Schriftart des Inhalts, CSS
  * $client_schrift_farbe: Die Schriftfarbe des Inhalts, CSS hexadezimal
  * $client_schrift_grosse: Die Schriftgröße des Inhalts, CSS (em basierend auf 12px)
  * $client_schrift_starke: Die Schriftstärke des Inhalts, CSS 500 oder 900
  * $client_startup: Das iOS-Start-Bild, absoluter Pfad, 320x460 Pixel
  * $client_textarea: Der Microsite-Code, Text/HTML/CSS/JS, Zeilenumbruch BACKSLASHrBACKSLASHn
  * $client_textarea_focus: Die Eingabefelder bei Fokus leeren, 0 oder 1
  * $client_title: Der Titel des Inhalts
  */
    if ($client == "sefzig")
    {
        $client_title = "Den QR-Code konfigurieren";
        $client_logo = "http://sefzig.net/solomo/konfig/img/logo_sefzig.png";
        $client_header = "#dddddd";
        $client_hintergrund = "#ffffff";
        $client_schrift_farbe =  "#000000";
        $client_schrift_art =    "Arial";
        $client_schrift_grosse = "12px";
        $client_schrift_starke = "900";
        $client_schrift_farbe_fuss = "black";
        $client_textarea = "<h1>Titel</h1>".
        "\r\nGib eine URL (ohne jeglichen Code)".
        "\r\noder (fast) beliebiges HTML ein.".
        "\r\n<h2>Design</h2>".
        "\r\n[header:#dddddd]".
        "\r\n[hintergrund:#ffffff]".
        "\r\n[schrift:#000000,Tahoma,12px,900]".
        "\r\n[logo:http://sefzig.net/solomo/konfig/img/logo_sefzig.png]";
    }
    elseif ($client == "light")
    {
        $client_title = "Diesen Code konfigurieren";
        $client_header = "#dddddd";
        $client_hintergrund = "#ffffff";
        $client_schrift_farbe =  "#000000";
        $client_schrift_art =    "Arial";
        $client_schrift_grosse = "12px";
        $client_schrift_starke = "900";
        $client_schrift_farbe_fuss = "black";
    }
    elseif ($client == "publicis")
    {
         $client_title = "Diesen Code konfigurieren";
         $client_textarea = "<h1>Titel</h1>".
        "\r\nGib eine URL (ohne jeglichen Code)".
        "\r\noder beliebiges HTML ein.".
        "\r\n<h2>Design</h2>".
        "\r\n[header:#dddddd]".
        "\r\n[hintergrund:#991111]".
        "\r\n[schrift:#ffffff,Arial,12px,500]".
        "\r\n[logo:http://sefzig.net/solomo/konfig/img/logo_publicis.png]";
    }
    elseif ($client == "redlion")
    {
        $client_title = "Diesen Code konfigurieren";
        $client_logo = "http://sefzig.net/solomo/konfig/img/logo_redlion.png";
        $client_header = "#000000";
        $client_hintergrund = "#000000";
        $client_schrift_farbe =  "#ffffff";
        $client_schrift_art =    "Arial";
        $client_schrift_grosse = "12px";
        $client_schrift_starke = "900";
        $client_schrift_farbe_fuss = "white";
        $client_favicon = "http://sefzig.net/solomo/konfig/img/ios_favicon_redlion.png";
        $client_startup = "http://sefzig.net/solomo/konfig/img/ios_startup_redlion.png";
    }
    elseif ($client == "pixelpark")
    {
        $client_title = "QR Code von Pixelpark";
        $client_logo = "http://sefzig.net/solomo/konfig/img/logo_pixelpark.png";
        $client_header = "#000000";
        $client_hintergrund = "#ffffff";
        $client_schrift_farbe =  "#000000";
        $client_schrift_art =    "Arial";
        $client_schrift_grosse = "12px";
        $client_schrift_starke = "900";
        $client_schrift_farbe_fuss = "black";
        $client_favicon = "http://sefzig.net/solomo/konfig/img/ios_favicon_pixelpark.png";
        $client_startup = "http://sefzig.net/solomo/konfig/img/ios_startup_pixelpark.png";
    }
    elseif ($client == "moovel")
    {
        $client_title = "Kombiniere!";
        $client_cta = "Was soll dieser Aufkleber kombinieren?";
        $client_frame = "http://sefzig.net/solomo/konfig/frame.php?url=";
        $client_uber = "<font color=999999>Diese Seite geh&ouml;rt zu einem Kombinator-Aufkleber von Moovel. Kleben Sie den Aufkleber an einen Gegenstand im &ouml;ffentlichen Raum, den Sie mit einem digitalen Inhalt kombinieren m&ouml;chten. &Ouml;ffnen Sie die Seite (diese Seite) und w&auml;hlen Sie aus, welcher Inhalt von diesem Aufkleber aus ge&ouml;ffnet werden soll. Sobald Sie gespeichert haben, kann der Inhalt nicht mehr ge&auml;ndert werden.</font>";
        $client_logo = "http://sefzig.net/solomo/konfig/img/logo_moovel.png";
        $client_header = "white"; // #75BF07
        $client_hintergrund = "url('img/hintergrund_moovel.jpg')";
        $client_schrift_farbe =  "#000000";
        $client_schrift_art =    "'Din Text Pro Regular'";
        $client_schrift_grosse = "12px";
        $client_schrift_starke = "500";
        $client_schrift_farbe_fuss = "white";
        $client_favicon = "http://sefzig.net/solomo/konfig/img/ios_favicon_moovel.png";
        $client_startup = "http://sefzig.net/solomo/konfig/img/ios_startup_moovel.png";
        $client_tweet = "Ein Tweet mit @moovel und #kombiniere";
    }
    elseif ($client == "reebok")
    {
        $client_title = "QR Code von Reebok";
        $client_logo = "http://sefzig.net/solomo/konfig/img/logo_reebok.png";
        $client_header = "#626262";
        $client_hintergrund = "#ffffff";
        $client_schrift_farbe =  "#000000";
        $client_schrift_art =    "Arial";
        $client_schrift_grosse = "12px";
        $client_schrift_starke = "900";
        $client_schrift_farbe_fuss = "black";
        $client_favicon = "http://sefzig.net/solomo/konfig/img/ios_favicon_reebok.png";
        $client_startup = "http://sefzig.net/solomo/konfig/img/ios_startup_reebok.png";
    }
    elseif ($client == "giessbert")
    {
        $client_title = "Giessberts QR konfigurieren";
        $client_header = "green";
        $client_hintergrund = "yellow";
        $client_schrift_farbe =  "brown";
        $client_schrift_art =    "Arial";
        $client_schrift_grosse = "16px";
        $client_schrift_starke = "500";
        $client_schrift_farbe_fuss = "brown";
    }
    elseif ($client == "url")
    {
        $client_title = "Den QR-Code weiterleiten";
        $client_textarea_focus = 1;
        $client_textarea = 'URL einfügen';
    }
    elseif ($client == "html")
    {
        $client_title = "Eine QR-Microsite erstellen";
        $client_textarea = "<h1>Titel</h1>".
        "\r\nGib beliebiges HTML ein.".
        "\r\n<h2>Design</h2>".
        "\r\n[header:#dddddd]".
        "\r\n[hintergrund:#991111]".
        "\r\n[schrift:#ffffff,Arial,12px,500]".
        "\r\n[logo:http://sefzig.net/solomo/konfig/img/logo_default.png]";
    }
    else 
    {
     // Default-Einstellungen
    }
 
 /* Default-Einstellungen
  * 
  * Nicht gemachte, nicht-optionale Einstellungen werden von den Default-Einstellungen übernommen
  */
    if (!$client_favicon)        { $client_favicon =        "http://sefzig.net/solomo/konfig/img/ios_favicon_default.png"; }
    if (!$client_header)         { $client_header =         "#dddddd"; } $client_header_encoded =        str_replace("#","%23", $client_header);
    if (!$client_hintergrund)    { $client_hintergrund =    "#cccccc"; } $client_hintergrund_encoded =   str_replace("#","%23", $client_hintergrund);
    if (!$client_logo)           { $client_logo =           "http://sefzig.net/solomo/konfig/img/logo_default.png"; }
    if (!$client_cta)            { $client_cta =            "Was soll dieser QR-Code tun?"; }
    if (!$client_uber)           { $client_uber =           ""; }
    if (!$client_frame)          { $client_frame =          ""; }
    if (!$client_schrift_farbe)  { $client_schrift_farbe =  "#ffffff"; } $client_schrift_farbe_encoded = str_replace("#","%23", $client_schrift_farbe);
    if (!$client_schrift_art)    { $client_schrift_art =    "Arial"; }
    if (!$client_schrift_grosse) { $client_schrift_grosse = "14px"; }
    if (!$client_schrift_starke) { $client_schrift_starke = "500"; }
    if (!$client_schrift_farbe_fuss) { $client_schrift_farbe_fuss = $client_schrift_farbe." !important"; } else { $client_schrift_farbe_fuss = $client_schrift_farbe_fuss." !important"; }
    if (!$client_startup)        { $client_startup =        "http://sefzig.net/solomo/konfig/img/ios_startup_default.png"; }
    if (!$client_textarea)
    {
     // $client_textarea = "Gib eine URL oder beliebiges HTML ein.".
     // "\r\n[header:#dddddd]".
     // "\r\n[hintergrund:#bb1111]".
     // "\r\n[schrift:#ffffff,Arial,12px,500]".
     // "\r\n[logo:http://sefzig.net/solomo/konfig/img/logo_default.png]";
        $client_textarea = "";
    }
    if (!$client_textarea_focus) { $client_textarea_focus = "0"; }
    if (!$client_title)          { $client_title =          "Diesen Code konfigurieren"; }
    if (!$client_tweet)          { $client_tweet =          "Hallo @GiessDenBert, Da hast Du Dir ja feine Freunde gesucht."; }
    if (!$admin)                 { $client_admin =          "0"; } else { $client_admin = "1"; }
 
 /* Optimierungen
  * 
  * Optimierung der oben vorgenommenen Einstellungen
  */
    $client_header_verlauf = abdunkeln($client_header);
    $client_header_verlauf_encoded = str_replace("#","%23",$client_header_verlauf);
    $client_hintergrund_verlauf = abdunkeln($client_hintergrund);
    $client_hintergrund_verlauf_encoded = str_replace("#","%23",$client_hintergrund_verlauf);
    function abdunkeln($farbe)
    {
     // Nur Hexadezimal-Werte ergeben einen Verlauf
        $pos = strpos($farbe,"#");
        if($pos === false) 
        {
            $farbe_dunkel = $farbe;
        } 
        else
        {
            $farbe_dunkel = $farbe;
            $farbe_dunkel = str_replace("1","0",$farbe_dunkel); 
            $farbe_dunkel = str_replace("2","1",$farbe_dunkel); 
            $farbe_dunkel = str_replace("3","2",$farbe_dunkel); 
            $farbe_dunkel = str_replace("4","3",$farbe_dunkel); 
            $farbe_dunkel = str_replace("5","4",$farbe_dunkel); 
            $farbe_dunkel = str_replace("6","5",$farbe_dunkel); 
            $farbe_dunkel = str_replace("7","6",$farbe_dunkel); 
            $farbe_dunkel = str_replace("8","7",$farbe_dunkel); 
            $farbe_dunkel = str_replace("9","8",$farbe_dunkel); 
            $farbe_dunkel = str_replace("a","9",$farbe_dunkel); 
            $farbe_dunkel = str_replace("b","a",$farbe_dunkel); 
            $farbe_dunkel = str_replace("c","b",$farbe_dunkel); 
            $farbe_dunkel = str_replace("d","c",$farbe_dunkel); 
            $farbe_dunkel = str_replace("e","d",$farbe_dunkel); 
            $farbe_dunkel = str_replace("f","e",$farbe_dunkel); 
     
         // echo "Verlauf: ".$client_header.", ".$pos.", ".$client_header_verlauf;
        }
     
        return $farbe_dunkel;
    } 
 
?>