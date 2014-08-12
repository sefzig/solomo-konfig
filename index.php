<html>
        <?php include 'clients.php'; ?><title><?php echo $client_title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="apple-touch-icon" href="<?php echo $client_favicon; ?>"/>
        <link rel="apple-touch-startup-image" href="<?php echo $client_startup; ?>">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script> // document.getElementById("logoImg").src = "<?php echo $client_logo; ?>"; </script>
        <style type="text/css"> 
        
            body
            { 
                background: <?php echo $client_hintergrund; ?> !important; 
                background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo $client_hintergrund_verlauf; ?>), to(<?php echo $client_hintergrund; ?>)) !important; 
                background-image: -webkit-linear-gradient(top, <?php echo $client_hintergrund_verlauf; ?>, <?php echo $client_hintergrund; ?>) !important; 
                background-image:    -moz-linear-gradient(top, <?php echo $client_hintergrund_verlauf; ?>, <?php echo $client_hintergrund; ?>) !important; 
                background-image:     -ms-linear-gradient(top, <?php echo $client_hintergrund_verlauf; ?>, <?php echo $client_hintergrund; ?>) !important; 
                background-image:      -o-linear-gradient(top, <?php echo $client_hintergrund_verlauf; ?>, <?php echo $client_hintergrund; ?>) !important; 
            } 
            #header 
            { 
                background: <?php echo $client_header; ?> !important; 
                background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo $client_header_verlauf; ?>), to(<?php echo $client_header; ?>)) !important; 
                background-image: -webkit-linear-gradient(top, <?php echo $client_header_verlauf; ?>, <?php echo $client_header; ?>) !important; 
                background-image:    -moz-linear-gradient(top, <?php echo $client_header_verlauf; ?>, <?php echo $client_header; ?>) !important; 
                background-image:     -ms-linear-gradient(top, <?php echo $client_header_verlauf; ?>, <?php echo $client_header; ?>) !important; 
                background-image:      -o-linear-gradient(top, <?php echo $client_header_verlauf; ?>, <?php echo $client_header; ?>) !important; 
            } 
    
        </style>
        <style type="text/css"> body *:not(textarea, button, input, #konfiguration, #konfiguration *, #qrcode, #nutzung, #footer, #footer *), a:not(#konfiguration, #konfiguration div) { color: <?php echo $client_schrift_farbe; ?> !important; } </style>
        <style type="text/css"> body *:not(#konfiguration, #konfiguration div, #konfiguration *, #footer, #footer *) { font-family: <?php echo $client_schrift_art; ?>,Arial,sans-serif !important; font-size: <?php echo $client_schrift_grosse; ?> !important; font-weight: <?php echo $client_schrift_starke; ?> !important; } </style>
    </head>
    <body qrid="" author="" wand="" vorschau="" data-client="<?=$client?>" style="background-size: auto auto; height: 100%;">
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <a target="_self" href="" title="Neu laden"><img id="logoImg" src="<?php echo $client_logo; ?>" alt="Neu laden" /></a>
                </div>
            </div>
            <div id="content">
                <div id="darstellung" style="display: none;">
                    <div>
                        <div id="botschafter">Lade...</div>
                    </div>
                </div>
                <div id="konfiguration" style="display: none;">
                    <h2><?php echo $client_title; ?></h2>
                    <div id="eingabemasken">
                        <i><?=$client_cta?></i>
                        <br />
                        <a rel="editorUrl"     href="javascript:void();"><h3>Zu einer URL weiterleiten</h3></a>
                        <a rel="editorText"    href="javascript:void();"><h3>Einen Text mit &Uuml;berschrift zeigen</h3></a>
                        <a rel="editorTweet"   href="javascript:void();"><h3>Einen Tweet vorschlagen</h3></a>
                        <a rel="editorTweets"  href="javascript:void();"><h3>Tweets von Twitter zeigen</h3></a>
                        <a rel="editorYoutube" href="javascript:void();"><h3>Ein Youtube-Video spielen</h3></a>
                        <a rel="editorGmroute" href="javascript:void();"><h3>Routenziel in Google-Maps</h3></a>
                        <a rel="editorIframe"  href="javascript:void();"><h3>Einen Iframe einbinden</h3></a>
                        <a rel="editorHtml"    href="javascript:void();"><h3>Eine mobile Seite enthalten</h3></a>
                        <a rel="editorWand"    href="javascript:void();"><h3>Eine Pinnwand sein</h3></a>
                        <br />
                        <i><?=$client_uber?></i>
                    </div>
                    <div id="editoren">
                        <div id="editorUrl">
                            <button class="schliessen"> X </button>
                            <h3>Zu einer URL weiterleiten</h3>
                            <h4>URL</h4>
                            <input type="text"   class="eingabe" value="http://">
                        </div>
                        <div id="editorText">
                            <button class="schliessen"> X </button>
                            <h3>Text mit &Uuml;berschrift zeigen</h3>
                            <h4>&Uuml;berschrift</h4>
                            <input type="hidden" class="eingabe" value="<h1>" />
                            <input type="text"   class="eingabe" value="" />
                            <input type="hidden" class="eingabe" value="</h1>" /><br />
                            <h4>Text</h4>
                            <textarea border="0" style="height: 180px;"></textarea>
                            <h4>Schrift</h4>
                            <input type="hidden" class="eingabe" value="[schrift:" />
                            <input type="text"   class="eingabe" value="<?php echo $client_schrift_farbe; ?>" /><br />
                            <input type="hidden" class="eingabe" value="," />
                            <input type="text"   class="eingabe" value="<?php echo $client_schrift_art; ?>" /><br />
                            <input type="hidden" class="eingabe" value="," />
                            <input type="text"   class="eingabe" value="<?php echo $client_schrift_grosse; ?>" /><br />
                            <input type="hidden" class="eingabe" value="," />
                            <input type="text"   class="eingabe" value="<?php echo $client_schrift_starke; ?>" />
                            <input type="hidden" class="eingabe" value="]" />
                        </div>
                        <div id="editorTweet">
                            <button class="schliessen"> X </button>
                            <h3>Einen Tweet vorschlagen</h3>
                            <h4>Tweet</h4>
                            <input type="hidden" class="eingabe" value="http://twitter.com/home?status=" />
                            <input type="text"   class="eingabe" value="<?php echo $client_tweet; ?>" optimieren="tweet">
                        </div>
                        <div id="editorIframe">
                            <button class="schliessen"> X </button>
                            <h3>Einen Iframe einbinden</h3>
                            <h4>URL</h4>
                            <input type="hidden" class="eingabe" value='<iframe style="margin-top: 10px" src="' />
                            <input type="text"   class="eingabe" value="http://"><br />
                            <h4>H&ouml;he</h4>
                            <input type="hidden" class="eingabe" value='" width="100%" height="' />
                            <input type="text"   class="eingabe" value="200"><br />
                            <h4>Scrollen</h4>
                            <input type="hidden" class="eingabe" value='" frameborder="0" allowtransparency scrolling="' />
                            <input type="text"   class="eingabe" value="auto">
                            <input type="hidden" class="eingabe" value='"></iframe>' />
                        </div>
                        <div id="editorYoutube">
                            <button class="schliessen"> X </button>
                            <h3>Ein Youtube-Video spielen</h3>
                            <h4>Titel</h4>
                            <input type="hidden" class="eingabe" value='<h1>' />
                            <input type="text"   class="eingabe" value="Youtube Video Titel" /><br />
                            <h4>Youtube-ID</h4>
                            <input type="hidden" class="eingabe" value='</h1><iframe width="290" height="163" src="http://www.youtube.com/embed/' />
                            <input type="text"   class="eingabe" value="b_EEzsRDiC0" /><br />
                            <h4>Text</h4>
                            <input type="hidden" class="eingabe" value='" frameborder="0" allowfullscreen style="margin-bottom: 10px"></iframe><br /><a href="http://www.youtube.com/watch?v=zLuhuPMp20w">' />
                            <input type="text"   class="eingabe" value="Youtube #b_EEzsRDiC0" />
                            <input type="hidden" class="eingabe" value='</a>' />
                        </div>
                        <div id="editorHtml">
                            <button class="schliessen"> X </button>
                            <h3>Eine mobile Seite anlegen</h3>
                            <h4>HTML</h4>
                            <textarea border="0" style="height: 80px;">&lt;h1>Titel&lt;/h1></textarea>
                            <h4>Client-Gestaltung</h4>
                            <textarea border="0" style="height: 59px;">[header:<?php echo $client_header; ?>]
[logo:<?php echo $client_logo; ?>]
[hintergrund:<?php echo $client_hintergrund; ?>]
[schrift:<?php echo $client_schrift_farbe; ?>,<?php echo $client_schrift_art; ?>,<?php echo $client_schrift_grosse; ?>,<?php echo $client_schrift_starke; ?>]</textarea>
                        </div>
                        <div id="editorTweets">
                            <button class="schliessen"> X </button>
                            <h3>Tweets von Twitter zeigen</h3>
                            <input type="hidden" class="eingabe" value='<iframe style="margin-top: 10px" src="http://widgets.sefzig.net/twitter/profile/?name=' />
                            <h4>Profilname 1</h4>
                            <input type="text"   class="eingabe" value="GiessDenBert">
                            <input type="hidden" class="eingabe" value='&modus=profile&tweets=25&breite=&hohe=200&border=&header=&footer=' />
                            <h4>Schriftart</h4>
                            <input type="hidden" class="eingabe" value='&font=' />
                            <input type="text"   class="eingabe" value="Arial">
                            <h4>Schriftgr&ouml;sse</h4>
                            <input type="hidden" class="eingabe" value='&size=' />
                            <input type="text"   class="eingabe" value="16px">
                            <h4>Schriftfarbe</h4>
                            <input type="hidden" class="eingabe" value='&shelltxt=' />
                            <input type="text"   class="eingabe" value="<?php echo $client_schrift_farbe_encoded ?>">
                            <input type="hidden" class="eingabe" value='&tweettxt=' />
                            <input type="text"   class="eingabe" value="<?php echo $client_schrift_farbe_encoded ?>">
                            <h4>Linkfarbe</h4>
                            <input type="hidden" class="eingabe" value='&linktxt=' />
                            <input type="text"   class="eingabe" value="%23cccccc">
                            <h4>Hintergrundfarbe</h4>
                            <input type="hidden" class="eingabe" value='&tweetbg=' />
                            <input type="text"   class="eingabe" value="<?php echo $client_hintergrund_encoded; ?>">
                            <input type="hidden" class="eingabe" value='&shellbg=' />
                            <input type="text"   class="eingabe" value="<?php echo $client_hintergrund_encoded; ?>">
                            <input type="hidden" class="eingabe" value='&scroll=&loop=&live=&interval=&hashtags=&avatar=&avatarpx=&behavior=" width="100%" height="210" frameborder="0"></iframe>' />
                            <input type="hidden" class="eingabe" value='<br /><br /><a href="https://twitter.com/' />
                            <h4>Profilname 2</h4>
                            <input type="text"   class="eingabe" value="GiessDenBert">
                            <input type="hidden" class="eingabe" value='" class="twitter-follow-button" data-show-count="false" data-lang="de" data-size="large" data-show-screen-name="false">' />
                            <h4>Buttontext</h4>
                            <input type="text"   class="eingabe" value="@GiessDenBert folgen">
                            <input type="hidden" class="eingabe" value='</a>' />
                            <input type="hidden" class="eingabe" value='<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>' />
                            <input type="hidden" class="eingabe" value='<div style="float: right"><a href="http://twitter.com/' />
                            <h4>Profilname 3</h4>
                            <input type="text"   class="eingabe" value="GiessDenBert">
                            <input type="hidden" class="eingabe" value='">' />
                            <h4>Linktext</h4>
                            <input type="text"   class="eingabe" value="@GiessDenBert auf Twitter">
                            <input type="hidden" class="eingabe" value='</a></div>' />
                        </div>
                        <div id="editorGmroute">
                            <button class="schliessen"> X </button>
                            <h3>Routenziel in Google-Maps</h3>
                            <h4>Zielort</h4>
                            <input type="hidden" class="eingabe" value="https://maps.google.com/maps?daddr=" />
                            <input type="text"   class="eingabe" value="53.544220,9.949027" />
                            <h4>Zentrierung</h4>
                            <input type="hidden" class="eingabe" value="&sll=" />
                            <input type="text"   class="eingabe" value="53.544179,9.949104" />
                            <h4>&Uuml;bersichtskarte</h4>
                            <input type="hidden" class="eingabe" value="&om=" />
                            <input type="text"   class="eingabe" value="1" />
                            <h4>Kartenart</h4>
                            <input type="hidden" class="eingabe" value="&t=" />
                            <input type="text"   class="eingabe" value="h" />
                            <h4>Zoomstufe</h4>
                            <input type="hidden" class="eingabe" value="&z=" />
                            <input type="text"   class="eingabe" value="18" />
                            <h4>Sprache</h4>
                            <input type="hidden" class="eingabe" value="&hl=" />
                            <input type="text"   class="eingabe" value="de" />
                        </div>
                        <div id="editorWand">
                            <button class="schliessen"> X </button>
                            <h3>Pinnwand</h3>
                            <textarea border="0" style="height: 200px;">Inhalt</textarea>
                            <input type="hidden" class="eingabe" value="[wand:" />
                            <input type="hidden" class="eingabe" value="1" />
                            <input type="hidden" class="eingabe" value="]" />
                        </div>
                    </div>
                    <div id="botschaften" style="display: none">
                        <textarea id="botschaft" leeren="<?php echo $client_textarea_focus; ?>" border="0" style="width: 100%; height: 180px; margin-bottom: 10px;"><?php echo $client_textarea; ?></textarea>
                    </div>
                    <div id="bedienung" style="display: none">
                        <br />
                        <input type="checkbox" id="akzeptiert" intern="<?php echo $client_admin; ?>" onclick="var checked = this.checked; if (checked == true) { jQuery('#speichern').removeAttr('disabled'); } else { jQuery('#speichern').attr('disabled',true); }" />
                        <a href="javascript:void()" onclick="jQuery('#nutzung').toggle();"> <u>Nutzungsbedingungen</u></a>
                        <input id="qrid" type="hidden" value="" />
                        <button id="speichern" style="float: right; display: none;">Speichern</button>
                        <br />&nbsp;<br />
                    </div>
                </div>
                <div id="nutzung" style="display: none;">
                    <h2>Nutzungsbedingungen</h2>
                    Indem Du den Button "Speichern" dr&uuml;ckst, erkl&auml;rst
                    Du Dich mit diesen Nutzungsbedingungen einverstanden. Du
                    wirst keine anst&ouml;&szlig;igen oder pers&ouml;nlichen  
                    Inhalte eingeben und mit Deinen Eingaben nicht die Rechte 
                    Dritter verletzen.
                    <br /><br />
                    QR Code is registered trademark of DENSO WAVE INCORPORATED.
                </div>
                <div id="qrcode" style=<textarea border="0" style="ay: none;">
                    <h2>Verwende diesen QR-Code</h2>
                    <span id="qrcodeHinweis"></span>
                    Verwende <a id="qrcodeA" href="" target="_blank"><u>diesen QR-Code</u></a> 
                    von <a id="qrcodeLink" href="" target="_self"><u>diesem Link</u></a>:
                    <br /><br />
                    <img id="qrcodeImg" src="" width="175" height="175" border="0" />
                    <br />
                    <span id="qrcodeSpan"><a href="" target="_self"></a></span>
                    <a id="qrcodeWeiter" href="" target="_self"><button>weiter</button></a>
                </div>
            </div>
            <div id="footer" style="color: <?=$client_schrift_farbe_fuss?>;">
                <a style="color: <?=$client_schrift_farbe_fuss?>;" href="http://sefzig.net/solomo" target="_blank">&copy; 2012</a>:
                <a style="color: <?=$client_schrift_farbe_fuss?>;" href="javascript:void()" onclick="jQuery('#qrcode').toggle();">Code</a>,
                <a style="color: <?=$client_schrift_farbe_fuss?>;" href="?c=<?php echo $client; ?>">Neu</a>,
                <a style="color: <?=$client_schrift_farbe_fuss?>;" href="druck.php?fehler=[L|M|H|Q]&client=[light|giessbert|url|html|sefzig]&prefix=[DeinVorname|ProjektName]&zahler=[0|12|24|36|...]">Aufkleber</a>,
                <a style="color: <?=$client_schrift_farbe_fuss?>;" href="javascript:void()" onclick="jQuery('#nutzung').toggle();">Nutzung</a>
            </div>
            <div id="footerMoovel" style="display: none;">
                <div id="ctas">
                    <a target="_self" href="#tba1" title="Die Übersicht auf einer Karte öffnen">In der Nähe</a> |
                    <a target="_self" href="http://sefzig.net/solomo/druck/" title="Die Druckvorlage öffnen">Aufkleber drucken</a> |
                    <a target="_self" href="#tba2" title="Diesen Inhalt melden">Inhalt melden</a>
                </div>
                <div id="logo" style="color: black; width: 100%; text-align: right; padding-bottom: 5px;">
                    Präsentiert von
                    <a target="_self" href="http://xxx.com" title="Die Seite von Xxx öffnen"><img id="logoImg" src="img/logo_xxx.png" alt="Neu laden" /></a>
                </div>
            </div>
        </div>
    </body>
</html>