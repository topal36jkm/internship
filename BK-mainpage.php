<?php
    include 'template.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery</title>

    <!-- Lato Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheet -->
    <link href="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery-materialize.min.opt.css?12295265317662713736" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript">
//<![CDATA[
      var Shopify = Shopify || {};
      Shopify.shop = "materialize-themes.myshopify.com";
      Shopify.theme = {"name":"debut","id":133945025,"theme_store_id":796,"role":"main"};
      Shopify.theme.handle = 'null';
      Shopify.theme.style = {"id":null,"handle":null};

//]]>
</script><script id="__st">
//<![CDATA[
var __st={"a":17758583,"offset":-25200,"reqid":"ff86a438-ac0b-441b-a037-e13008afa59f","pageurl":"themes.materializecss.com\/pages\/demo","s":"pages-199716225","u":"20840d7c99c7","p":"page","rtyp":"page","rid":199716225};
//]]>
</script><script src="https://cdn.shopify.com/s/javascripts/shopify_stats.js?v=6" type="text/javascript" async="async"></script>
<meta id="shopify-digital-wallet" itemprop="shopify-digital-wallet" content="/17758583/digital_wallets/dialog" />
<script src="//cdn.shopify.com/s/assets/themes_support/ga_urchin_forms-668547562549a84f5dfa01ef82607987f85ecbe1c8301faf25059becfa208199.js" defer="defer"></script>
      <script type="text/javascript">
        
      window.ShopifyAnalytics = window.ShopifyAnalytics || {};
      window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
      window.ShopifyAnalytics.meta.currency = 'USD';
      var meta = {"page":{"pageType":"page","resourceType":"page","resourceId":199716225}};
      for (var attr in meta) {
        window.ShopifyAnalytics.meta[attr] = meta[attr];
      }
    
      </script>

      <script type="text/javascript">
        window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
          
        };
      </script>

      <script type="text/javascript" class="analytics">
        (window.gaDevIds=window.gaDevIds||[]).push('BwiEti');
        

        (function () {
          var customDocumentWrite = function(content) {
            var jquery = null;

            if (window.jQuery) {
              jquery = window.jQuery;
            } else if (window.Checkout && window.Checkout.$) {
              jquery = window.Checkout.$;
            }

            if (jquery) {
              jquery('body').append(content);
            }
          };

          var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
          if (trekkie.integrations) {
            return;
          }
          trekkie.methods = [
            'identify',
            'page',
            'ready',
            'track',
            'trackForm',
            'trackLink'
          ];
          trekkie.factory = function(method) {
            return function() {
              var args = Array.prototype.slice.call(arguments);
              args.unshift(method);
              trekkie.push(args);
              return trekkie;
            };
          };
          for (var i = 0; i < trekkie.methods.length; i++) {
            var key = trekkie.methods[i];
            trekkie[key] = trekkie.factory(key);
          }
          trekkie.load = function(config) {
            trekkie.config = config;
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onerror = function(e) {
              (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
            };
            script.async = true;
            script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.03.29.1';
            var first = document.getElementsByTagName('script')[0];
            first.parentNode.insertBefore(script, first);
          };
          trekkie.load(
            {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":17758583,"isMerchantRequest":null,"checkoutToken":null,"themeId":133945025,"themeCityHash":4298093638867524763}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":0.1},"Google Analytics":{"trackingId":"UA-56218128-1","domain":"auto","siteSpeedSampleRate":"10","enhancedEcommerce":true,"doubleClick":true,"includeSearch":true},"Session Attribution":{}}
          );

          var loaded = false;
          trekkie.ready(function() {
            if (loaded) return;
            loaded = true;

            window.ShopifyAnalytics.lib = window.trekkie;
            
      ga('require', 'linker');
      function addListener(element, type, callback) {
        if (element.addEventListener) {
          element.addEventListener(type, callback);
        }
        else if (element.attachEvent) {
          element.attachEvent('on' + type, callback);
        }
      }
      function decorate(event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
          ga(function (tracker) {
            var linkerParam = tracker.get('linkerParam');
            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
          });
        }
      }
      addListener(window, 'load', function(){
        for (var i=0; i < document.forms.length; i++) {
          var action = document.forms[i].getAttribute('action');
          if(action && action.indexOf('/cart') >= 0) {
            addListener(document.forms[i], 'submit', decorate);
          }
        }
        for (var i=0; i < document.links.length; i++) {
          var href = document.links[i].getAttribute('href');
          if(href && href.indexOf('/checkout') >= 0) {
            addListener(document.links[i], 'click', decorate);
          }
        }
      });
    

            var originalDocumentWrite = document.write;
            document.write = customDocumentWrite;
            try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
            document.write = originalDocumentWrite;

            
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"page","resourceType":"page","resourceId":199716225}
        );
      
            
          });

          
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-9410288c486c406bc38edb97003bb123d375112c2b7e037d65afabae7c905e02.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
        })();
      </script>
    
<script id="apple-pay-shop-capabilities" type="application/json">{"shopId":17758583,"countryCode":"US","currencyCode":"USD","merchantCapabilities":["supports3DS"],"merchantId":"gid:\/\/shopify\/Shop\/17758583","merchantName":"Materialize Themes","requiredBillingContactFields":["postalAddress","email"],"requiredShippingContactFields":["postalAddress","email"],"shippingType":"shipping","supportedNetworks":["visa","masterCard","amex","discover"]}</script>
<script src="//cdn.shopify.com/s/assets/storefront/express_buttons-321b7512ebee5f8a19fcb9cd6f5f23e654a43fa58adb151647a9cd6adcd939e2.js" defer="defer" crossorigin="anonymous" integrity="sha256-Mht1EuvuX4oZ/LnNb18j5lSkP6WK2xUWR6nNatzZOeI="></script><script>
//<![CDATA[
      window.Shopify = window.Shopify || {};
      window.Shopify.Checkout = window.Shopify.Checkout || {};
      window.Shopify.Checkout.rememberMeHost = "remember-me.shopifycloud.com";
      window.Shopify.Checkout.rememberMeAccessToken = "Sy9VV0wwbnFtMWRIa1h3WWtud1RDcU1wNFlIVzllck9jWUxzYlRiSnpnbEdpM2x6K211R3hra1IySTlGbE5IcC0tVVRic0Ztak02QW5INGFEQkNkKzhIdz09--2a535020baaf73c9d821cf60d40d525c324e052a";

//]]>
</script>

<meta name="shopify-checkout-api-token" content="6aacc581eb2b41d74f03c38d3c985dba" />

<link rel="stylesheet" media="all" href="//cdn.shopify.com/s/assets/storefront/additional-checkout-buttons-808913e66bb8ca34c54570ae143ad72de7405d257db279c632b910e1babef726.css" />
  <link rel="canonical" href="https://themes.materializecss.com/pages/demo" />
</head>
<body>
       <nav class="navbar navbar-inverse">
        <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="mainpage.php">Garge Service Website</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
                <?php
                if ($_SESSION['active'] == 2) {
                    ?>
                    <li><a href="manager_user.php">จัดการผู้ใช้งาน</a></li>  &nbsp;  &nbsp;
                    <li><a href="manager_user-add.php">เพิ่มรายชื่อผู้ใช้</a></li> &nbsp;  &nbsp;
                <?php } ?>                 
                
                  <li><a href="update_profile.php">แก้ไขข้อมูลส่วนตัว</a></li> &nbsp;  &nbsp;

                <?php
                if ($_SESSION['active'] == 2) { ?>
                    <li><a href="report.php">Report</a></li>  &nbsp;  &nbsp;
                  &nbsp; &nbsp;

                  <?php } ?>
        
      </ul>
      <form class="navbar-form navbar-left">
        <button type="submit" class="btn btn-default"><a href="signout.php"></a>ออกจากระบบ</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <body>


    <!-- Navbar and Header -->
    <nav class="nav-extended">
      <div class="nav-background">
        <div class="ea k" style="background-image: url('//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/icon-seamless.png?12295265317662713736');"></div>
      </div>
<marquee behavior="alternate" direction="up" width="80%"><marquee direction="right" behavior="alternate"><h1>Garge Service Website </h1></marquee></marquee>
            <br><br><br>
