<?php

 /* API
  * 
  * 
  */
    
 /* URL-Parameter lesen
  * 
  * 
  */
    $qrid =      $_REQUEST["i"]; $qrid1 = explode("%23", $qrid); $qrid = $qrid1[0]; $hash = $qrid1[1];
    $botschaft = $_REQUEST["b"];
    $client =    $_REQUEST["c"];
    
 /* Dateien
  * 
  * 
  */
    
 /* Date zusammensetzen
  * 
  * 
  */
 // $datei = "http://sefzig.net/solomo/konfig/file/".$qrid.".txt";
    $datei = "file/".$qrid.".txt";
    
 /* Botschaft-Markup in HTML umwandeln
  * 
  * 
  */
    function botschaftMarkup($botschaft)
    {
        $botschaft = str_replace("&lt;","<",$botschaft);
        $botschaft = str_replace("&gt;",">",$botschaft);
        
        $botschaft = str_replace("h4>","h5>",$botschaft);
        $botschaft = str_replace("h3>","h4>",$botschaft);
        $botschaft = str_replace("h2>","h3>",$botschaft);
        $botschaft = str_replace("h1>","h2>",$botschaft);
        
        $botschaftHeader = explode("[header:", $botschaft, 2);
        if ($botschaftHeader[1])
        {
            echo "<!-- header -->\n";
            
            $botschaftHeaderVor =  $botschaftHeader[0];
            $botschaftHeaderArray = explode("]", $botschaftHeader[1], 2);
            $botschaftHeaderWert = $botschaftHeaderArray[0];
            $botschaftHeaderNach = $botschaftHeaderArray[1];
            
            $botschaftHeaderString = '<!-- [header:' . $botschaftHeaderWert . '] -->';
            $botschaftHeaderString = $botschaftHeaderString.'<script> // alert("' . $botschaftHeaderWert . '"); </script>';
            $botschaftHeaderString = $botschaftHeaderString.'<style type="text/css"> #header { background: ' . $botschaftHeaderWert . ' !important; } </style>';
            $botschaft = $botschaftHeaderString . "\n" . $botschaftHeaderVor . " " . $botschaftHeaderNach;
        }
        
        $botschaftLogo = explode("[logo:", $botschaft, 2);
        if ($botschaftLogo[1])
        {
            echo "<!-- logo -->\n";
         
            $botschaftLogoVor =  $botschaftLogo[0];
            $botschaftLogoArray = explode("]", $botschaftLogo[1], 2);
            $botschaftLogoWert = $botschaftLogoArray[0];
            $botschaftLogoNach = $botschaftLogoArray[1];
            
            $botschaftLogoString = '<!-- [logo:' . $botschaftLogoWert . '] -->';
            $botschaftLogoString = $botschaftLogoString.'<script> jQuery("#logo img").attr("src","' . $botschaftLogoWert . '"); </script>';
            $botschaft = $botschaftLogoString . "\n" . $botschaftLogoVor . " " . $botschaftLogoNach;
        }
        
        $botschaftSchrift = explode("[schrift:", $botschaft, 2);
        if ($botschaftSchrift[1])
        {
            echo "<!-- schrift -->\n";
            
            $botschaftSchriftVor =  $botschaftSchrift[0];
            $botschaftSchriftArray = explode("]", $botschaftSchrift[1], 2);
            $botschaftSchriftWert = $botschaftSchriftArray[0];
            $botschaftSchriften =   explode(",", $botschaftSchriftWert);
            $botschaftSchriftNach = $botschaftSchriftArray[1];
            
            $botschaftSchriftFarbe =  $botschaftSchriften[0];
            $botschaftSchriftArt =    $botschaftSchriften[1];
            $botschaftSchriftGrosse = $botschaftSchriften[2];
            $botschaftSchriftStarke = $botschaftSchriften[3];
            
            $botschaftSchriftString = '<!-- [schrift:' . $botschaftSchriftWert . '] -->';
            $botschaftSchriftString = $botschaftSchriftString.'<style type="text/css"> body * { color: ' . $botschaftSchriftFarbe . ' !important; } body { font-family: ' . $botschaftSchriftArt . ',Arial,sans-serif !important; font-size: ' . $botschaftSchriftGrosse . ' !important; font-weight: ' . $botschaftSchriftStarke . ' !important; } </style>';
            $botschaft = $botschaftSchriftString . "\n" . $botschaftSchriftVor . " " . $botschaftSchriftNach;
        }
        
        $botschaftHintergrund = explode("[hintergrund:", $botschaft, 2);
        if ($botschaftHintergrund[1])
        {
            echo "<!-- hintergrund -->\n";
            
            $botschaftHintergrundVor =  $botschaftHintergrund[0];
            $botschaftHintergrundArray = explode("]", $botschaftHintergrund[1], 2);
            $botschaftHintergrundWert = $botschaftHintergrundArray[0];
            $botschaftHintergrundNach = $botschaftHintergrundArray[1];
            
            $botschaftHintergrundString = '<!-- [hintergrund:' . $botschaftHintergrundWert . '] -->';
            $botschaftHintergrundString = $botschaftHintergrundString.'<style type="text/css"> body { background: ' . $botschaftHintergrundWert . ' !important; } </style>';
            $botschaft = $botschaftHintergrundString . "\n" . $botschaftHintergrundVor . " " . $botschaftHintergrundNach;
        }
        
        $botschaftWand = explode("[wand:", $botschaft, 2);
        if ($botschaftWand[1])
        {
            echo "<!-- wand -->\n";
            
            $botschaftWandVor =  $botschaftWand[0];
            $botschaftWandArray = explode("]", $botschaftWand[1], 2);
            $botschaftWandWert = $botschaftWandArray[0];
            $botschaftWandNach = $botschaftWandArray[1];
            
            if ($botschaftWandWert == "1")
            {
                $botschaftWandString = '<!-- [wand:' . $botschaftWandWert . '] -->';
                $botschaftWandString = $botschaftWandString.'<script> jQuery("#konfiguration").css("display","block"); </script>';
                $botschaftWandString = $botschaftWandString.'<script> jQuery(".schliessen").css("display","none"); </script>';
                $botschaftWandString = $botschaftWandString.'<script> jQuery("#konfiguration h2").html("Pinnwand"); </script>';
                $botschaftWandString = $botschaftWandString.'<script> jQuery("#editorWand h3").css("display","none"); </script>';
                $botschaftWandString = $botschaftWandString.'<script> jQuery("body").attr("wand","' . $botschaftWandWert . '"); </script>';
            } 
            else  
            { 
             // $botschaftWandString = '<script> jQuery("#konfiguration").css("display","' . $botschaftWandWert . '"); </script>';
            }
            
            $botschaft = $botschaftWandString . "" . $botschaftWandVor . "" . $botschaftWandNach;
        }

        $botschaftMoovel = explode("<!-- header -->", $botschaft, 2);
        if ($botschaftMoovel[1])
        {
            echo "<!-- moovel -->\n";
            
            if ($client == "moovel")
            {
                $botschaftJs =              '<script> document.getElementById("footerMoovel").style.display = "block"; </script>';
                $botschaftJs = $botschaftJs.'<script> document.getElementById("header").style.display = "none"; </script>';
                $botschaftJs = $botschaftJs.'<script> document.getElementById("content").style.paddingTop = "15px"; </script>';
             // $botschaftJs = $botschaftJs.'<script> document.getElementById("body").style.height = "100%"; </script>';
                $botschaft = $botschaftJs."".$botschaft;
            }
        }
        
        $antwort = '';
        return $botschaft;
    }
    
    if ($botschaft)
    {
     /* Botschaft saubern
      * 
      * 
      */
        $botschaft = str_replace('\"','"',$botschaft);
        $botschaft = str_replace("\'","'",$botschaft);
        $botschaft = str_replace("Ü","&Uuml;",$botschaft);
        
     /* Botschaft-Markup in HTML umwandeln
      * 
      * 
      */
        $botschaft = botschaftMarkup($botschaft);
        
     /* Datei schreiben
      * 
      * 
      */
        $handle1 = fopen($datei,"w+");
        fwrite($handle1, utf8_encode($botschaft));
        fclose($handle1);
    }
    else 
    {
     /* Botschaft laden
      * 
      * 
      */
        if (file_exists($datei))
        {
         /* Datei lesen
          * 
          * 
          */
            $handle2 = fopen($datei,"r");
            $botschaft = fread($handle2, filesize($datei));
            fclose($handle2);
        }
    }
    
 /* Antwort
  * 
  * 
  */
    
 /* Botschaft ausgeben
  * 
  * 
  */
    echo $botschaft;
        
?>