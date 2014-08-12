
 /* Nach dem Laden Browser anpassen
  * 
  * Beschreibung
  */
    window.addEventListener("load",function() 
    {
     /* Timeout-Hack zur Sicherheit
      * 
      * Beschreibung
      */
        setTimeout(function()
        {
         /* Browser-Header wegscrollen
          * 
          * Beschreibung
          */
         // window.scrollTo(0, 1);
        }, 0);
    });
    
 /* Programm initialisieren
  * 
  * Beschreibung
  */
    function confiqr()
    {
        var derClient = getParameters("c"); if (!derClient) { var derClient = ""; }
        var dieId =     getParameters("i"); if (!dieId)     { var dieId = Math.floor(Math.random()*999999); confiQrcode(dieId, derClient, 1); jQuery("body").attr("qrid","idlos") } else { confiQrcode(dieId, derClient, 0); }
        var cachebreaker = Math.floor(Math.random()*999999);
        jQuery("#qrid").attr("value",dieId);
 
        jQuery.ajaxSetup({ url: "webservice.php?v="+cachebreaker, type: "POST", global: false, cache: false });
        
        jQuery.ajax(
        { 
            data: "&i="+dieId+"&c="+derClient,
            dataType: "html",
            error: function()
            {
                alert("Fehler beim Laden");
            },
            success: function(inhalt)
            {
                if ((!inhalt) || (inhalt == "") || (inhalt == " "))
                {
                    var qrid = jQuery("body").attr("qrid");
                    if (qrid != "idlos") 
                    {
                        jQuery("#konfiguration").css("display","block");
                        jQuery("#footer").css("display","block");
                    }
                }
                else
                {
                    confiqrDarstellen(inhalt);
                }
            }
        });
    }
           
 /* Eingaben speichern
  * 
  * Beschreibung
  */
    function confiqrSpeichern()
    {
     /* ID ermitteln
      * 
      * Beschreibung
      */
        var dieId = jQuery("#qrid").attr("value")
        
     /* Eingaben optimieren
      * 
      * Beschreibung
      */
        jQuery("[optimieren = 'tweet']").each(function() 
        {
            var inhalt = jQuery(this).val();
         // alert(inhalt);
         // inhalt = inhalt.replace(/ /g,"+");
         // inhalt = inhalt.replace(/Ä/g,"");
         // inhalt = inhalt.replace(/Ö/g,"");
         // inhalt = inhalt.replace(/Ü/g,"");
         // inhalt = inhalt.replace(/ä/g,"");
         // inhalt = inhalt.replace(/ö/g,"");
         // inhalt = inhalt.replace(/ü/g,"");
         // inhalt = inhalt.replace(/ß/g,"");
         // alert(inhalt);
            jQuery(this).val(inhalt)
        });
        
        jQuery("#botschaft").html("");
           
        jQuery("#editoren div:visible input, #editoren div:visible textarea").each(function() 
        {
            var dieBotschaft = "";
            var wert = jQuery(this).attr("value");
            if (!wert) { jQuery(this).html(); }
         // alert(wert);
            var botschaft = jQuery("#botschaft").html();
            var botschaft = botschaft+""+wert;
            jQuery("#botschaft").html(botschaft);
        });
        
        var dieBotschaft = jQuery("#botschaft").html();
        var dieBotschaft = escape(dieBotschaft);
        var cachebreaker = Math.floor(Math.random()*999999);
        var derClient    = getParameters("c"); console.log("Speichern: derClient ist "+derClient);
            
        jQuery.ajaxSetup({ url: "webservice.php?v="+cachebreaker, type: "POST", global: false, cache: false });
        
     /* Inhalte speichern
      * 
      * Beschreibung
      */
        jQuery.ajax(
        { 
            data: "&i="+dieId+"&b="+dieBotschaft+"&c="+derClient,
            dataType: "html",
            error: function()
            {
                alert("Fehler beim Speichern");
            },
            success: function(inhalt)
            {   
             /* Author
              * 
              * Beschreibung
              */
                var derAuthor = jQuery("body").attr("author"); 
                if (derAuthor) 
                { 
                    jQuery("#konfiguration").css("display","block")
                 // alert("Speichern: "+derAuthor); 
                }
                
             /* Wand
              * 
              * Beschreibung
              */
                var dieWand = jQuery("body").attr("wand"); 
                if (dieWand == "1") 
                { 
                    jQuery("#konfiguration").css("display","block");
                }
                
             /* Vorschau merken
              * 
              * Beschreibung
              */
                jQuery("body").attr("vorschau", "1"); 
                
             /* Gespeicherte Inhalte anzeigen
              * 
              * Beschreibung
              */
                confiqrDarstellen(inhalt);
                
             /* QR-ID: Cookie setzen und in Body speichern
              * 
              * Beschreibung
              */
                var cookieId = jQuery("#qrid").attr("value");
                var isAuthor = cookies('isauthor', cookieId);
             // jQuery.cookie('isauthor', cookieId, { expires: 365, path: '/' }); 
             // alert("Cookie confiqrSpeichern(): "+isAuthor);
                jQuery("body").attr("author",cookieId);
                 
             /* Farben zurucksetzen :/
              * 
              * Beschreibung
              */
                jQuery("#konfiguration, #konfiguration div, #konfiguration *, #qrcode, #qrcode *, #nutzung, #nutzung *").css("color", "#000000 !important"); 
            }
        });
    }
    
 /* Inhalte darstellen
  * 
  * Beschreibung
  */
    function confiqrDarstellen(inhalt)
    {
     /* Wenn Inhalt URL ist, weiterleiten
      * 
      * Beschreibung
      */
        if (isUrl(inhalt))
        {
           var loading = 'Leite weiter...';
           jQuery("#botschafter").html(loading);
           
           var client = jQuery("body").attr("data-client");
           if (client == "moovel") { var moovel = true; }
           
           var inhaltTwitter = inhalt;
           var inhaltTwitter = inhaltTwitter.split("twitter.com/home");
           if (inhaltTwitter[1]) { var moovel = false; }
           
           if (moovel == true)
           {
              inhaltIframe = "http://sefzig.net/solomo/konfig/file/kombinator.php?url=";
           }
           else
           {
              inhaltIframe = "";
           }
           
           location.href = inhaltIframe+""+inhalt;
        }
     /* Wenn Inhalt keine URL ist
      * 
      * Beschreibung
      */
        else
        {
            var client = jQuery("body").attr("data-client");
            if (client == "moovel") {
                document.getElementById("footerMoovel").style.display = "block";
                document.getElementById("header").style.display = "none";
                document.getElementById("content").style.paddingTop = "15px";
            }
            var loading = 'Lade QR Code...';
            jQuery("#botschafter").html(loading);
            
         /* Inhalt in Darstellungs-Div laden
          * 
          * Beschreibung
          */
            jQuery("#botschafter, #editorWand textarea").html(inhalt);
            jQuery("#konfiguration, #konfiguration *, #konfiguration a, #qrcode, #qrcode *, #nutzung, #nutzung *").css("color", "#000000 !important");
            
         /* Feststellen, ob der Nutzer der Autor ist
          * 
          * Beschreibung
          */
            var isAuthor = cookies('isauthor'); 
         // var isAuthor = jQuery.cookie('isauthor');
         // alert("confiqrDarstellen('"+inhalt+"'): "+isAuthor);
            var cookieId = jQuery("#qrid").attr("value");
            var vorschau = jQuery("body").attr("vorschau");
            
         /* Wand
          * 
          * Beschreibung
          */
            var dieWand = jQuery("body").attr("wand"); 
            if (dieWand == "1") 
            { 
                jQuery("#konfiguration").css("display","block");
                window.setTimeout('var selector = jQuery("[rel=\'editorWand\']").trigger(\'click\');', 200);
             // alert("Darstellen: "+dieWand); 
            }
                
         /* Wenn der Nutzer der Autor ist...
          * 
          * Beschreibung
          */
            if (isAuthor == cookieId)
            {
                jQuery("#konfiguration").css("display","block");
                jQuery("body").attr("author",cookieId);
            }
         /* Wenn der Nutzer nicht der Author ist...
          * 
          * Beschreibung
          */
            else
            {
                if (vorschau != "1")
                {
                    jQuery("#konfiguration").css("display","none");
                }
                
                jQuery("body").attr("author","");
            }
            
            jQuery("#darstellung").css("display","inline");
            
         /* Author
          * 
          * Beschreibung
          */
            var derAuthor = jQuery("body").attr("author"); 
            if (derAuthor) 
            { 
                jQuery("#konfiguration").css("display","block")
             // alert("Darstellen: "+derAuthor); 
            }
            
         /* Wand
          * 
          * Beschreibung
          */
            var dieWand = jQuery("body").attr("wand"); 
            if (dieWand == "1") 
            { 
                jQuery("#konfiguration").css("display","block");
             // alert("Darstellen: "+dieWand); 
            }
        }
        
        jQuery("#footer").css("display","block");
    }
    
 /* QR-Code vorschlagen
  * 
  * Beschreibung
  */
    function confiQrcode(id, client, offnen)
    {
     /* Client-Parameter zusammenstellen
      * 
      * Beschreibung
      */
        if (client)
        {
            var clientparam = 'c='+client+'&';
        }
        else
        {
            var clientparam = '';
        }
        
     /* Ziel-URL zusammenstellen
      * 
      * Beschreibung
      */
        var url = "http://sefzig.net/solomo/konfig/?"+clientparam+"i="+id;
        jQuery("#qrcodeLink, #qrcodeSpan a").attr("href",url);
        var weiter = "?"+clientparam+"i="+id;
        jQuery("#qrcodeWeiter").attr("href",weiter);
        
     /* QR-BU zusammenstellen
      * 
      * Beschreibung
      */
        var url = "http://.../?"+clientparam+"i="+id;
        jQuery("#qrcodeSpan a").html(url);
        
     /* QR-Code-URL zusammenstellen
      * 
      * Beschreibung
      */
        var url = "http://chart.apis.google.com/chart?cht=qr&chs=500x500&chld=M&choe=UTF-8&chl=http%3A%2F%2Fsefzig.net%2Fsolomo%2Fkonfig%2F%3Fc%3D"+client+"%26i%3D"+id;
        jQuery("#qrcodeA").attr("href",url);
        
     /* QR-Code-URL anzeigen
      * 
      * Beschreibung
      */
        var url = "http://chart.apis.google.com/chart?cht=qr&chs=175x175&chld=M&choe=UTF-8&chl=http%3A%2F%2Fsefzig.net%2Fsolomo%2Fkonfig%2F%3Fi%3D"+id;
        jQuery("#qrcodeImg").attr("src",url);
        
     /* QR-Code-Modul anzeigen
      * 
      * Beschreibung
      */
        if (offnen == 0) 
        { 
            jQuery("#qrcode").css("display","none"); 
        }
        else
        { 
            jQuery("#qrcodeHinweis").html("Du hast keinen QR-Code eingescannt.<br />"); 
            
            jQuery("#qrcode, #qrcodeWeiter").css("display","block"); 
            
         /* Konfigurations-Modul ausblenden
          * 
          * Beschreibung
          */
            window.setTimeout('jQuery("#konfiguration").css("display","none");', 100);
        }
        
        jQuery("#footer").css("display","block");
    }
    
 /* jQuery onready
  * 
  * Beschreibung
  */
    jQuery(document).ready(function()
    {
     /* Programm initialisieren
      * 
      * Beschreibung
      */
        confiqr();
        
     /* Speichern-Button gedruckt
      * 
      * Beschreibung
      */
        jQuery("#speichern").click(function() 
        {
            confiqrSpeichern();
        });
        
     /* Botschaft onfocus leeren (wenn eingestellt)
      * 
      * Beschreibung
      */
        jQuery("#botschaft").each(function() 
        {
         // jQuery(this).html("");
            var leeren = jQuery(this).attr("leeren");
            if (leeren == "1")
            {
                jQuery(this).focus(function() 
                {
                    jQuery(this).html("");
                });
            }
        });
        
     /* QR-Code-Typ wahlen
      * 
      * Beschreibung
      */
        jQuery("#eingabemasken a").click(function() 
        {
            var rel = jQuery(this).attr("rel");
            jQuery("#editoren div").css("display","none");
            jQuery("#"+rel).css("display","block");
            jQuery("#eingabemasken").css("display","none");
            
            jQuery("#bedienung, #speichern").css("display","block");
        });
        
     /* Schliessen-Button gedruckt
      * 
      * Beschreibung
      */
        jQuery(".schliessen").click(function() 
        {
            jQuery(this).parent().css("display","none");
            jQuery("#eingabemasken").css("display","block");
            jQuery("#bedienung, #speichern").css("display","none");
        });
        
            var client = jQuery("body").attr("data-client");
            if (client == "moovel") {
                document.getElementById("footerMoovel").style.display = "block";
                document.getElementById("header").style.display = "none";
                document.getElementById("content").style.paddingTop = "15px";
            }
            
     /* Stylesheet laden
      * 
      * Beschreibung
      */
        var link = jQuery("<link>");
        link.attr(
        {
            type: 'text/css',
            rel:  'stylesheet',
            href: './css/style.css'
        });
        jQuery("head").append(link);
    });
    
 /* Helper: URL-Parameter lesen
  * 
  * Beschreibung
  */
    function getParameters(name)
    {
    /* Titel
     * 
     * Beschreibung
     */
       if (name == "hash")
       {
       /* Titel
        * 
        * Beschreibung
        */
          var hashUrl = window.location.hash;
          
       /* Titel
        * 
        * Beschreibung
        */
          var hashUrl = hashUrl.replace("#","");
          return hashUrl;
       }
       else
       {
       /* Titel
        * 
        * Beschreibung
        */
          name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
          
       /* Titel
        * 
        * Beschreibung
        */
          var regexS = "[\\?&]"+name+"=([^&#]*)";
          
       /* Titel
        * 
        * Beschreibung
        */
          var regex = new RegExp( regexS );
          
       /* Titel
        * 
        * Beschreibung
        */
          var results = regex.exec( window.location.href );
          
       /* Titel
        * 
        * Beschreibung
        */
          if (results == null)
          {
            return "";
          }
          else
          {
            return results[1];
          }
       }
    }

 /* Helper: Valide URL uberprufen
  * 
  * Beschreibung
  */
    function isUrl(inhalt) 
    {
        var regexp = /(Ftp|ftp|http|Http|Https|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
        var test = regexp.test(inhalt);
        
        if (test == true)
        {
            var test1 = inhalt;
            var test2 = test1.split("<");
            var test3 = test2[1];
            if (test3)
            {
                var test = false;
            }
        }
        if (test == true)
        {
            var test1 = inhalt;
            var test2 = test1.split("http");
            var test3 = test2[0];
            if ((test3) && (test3 != ""))
            {
                var test = false;
            }
        }
        
     // alert("isURL: "+test);
        return test;
    }

 /* Helper: Cookies verwenden
  * 
  * Beschreibung
  */
    function cookies(name, wert)
    {
        if ((name) && (wert))
        {
            jQuery.cookie(name, wert, { expires: 365, path: '/' });
            var antwort = true;
        }
        else if (name)
        {
            var antwort = jQuery.cookie(name);
        }
        if (!antwort)
        {
            var antwort = false;
        }
        
        return antwort;
    }
