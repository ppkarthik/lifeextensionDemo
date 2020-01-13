<?php
require 'braintree-php-4.5.0/lib/Braintree.php';
$gateway = new Braintree_Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'hks7325w6hqpmygy',
    'publicKey' => '4r34k2f6w522kbmv',
    'privateKey' => '487037d54eef8df77798d8efc32bd3fd'
]);
$clientToken = $gateway->clientToken()->generate();
#print($clientToken);
?>

<!DOCTYPE html>
<!-- saved from url=(0052)https://mycart.lifeextension.com/Checkout/PCIPayment -->
<html lang="en" class="wf-sharetechmono-n4-active wf-myriadprocondensed-n9-active wf-myriadprocondensed-n7-active wf-myriadprocondensed-n4-active wf-myriadprocondensed-n3-active wf-myriadprocondensed-n6-active wf-myriadprocondensed-i9-active wf-myriadprocondensed-i7-active wf-myriadprocondensed-i4-active wf-myriadprocondensed-i3-active wf-myriadprocondensed-i6-active wf-myriadpro-n9-active wf-myriadpro-i9-active wf-myriadpro-n7-active wf-myriadpro-i7-active wf-myriadpro-i4-active wf-myriadpro-n3-active wf-myriadpro-i3-active wf-myriadpro-n4-active wf-myriadpro-n6-active wf-myriadpro-i6-active wf-adobecaslonpro-n4-active wf-adobecaslonpro-i4-active wf-adobecaslonpro-n7-active wf-adobecaslonpro-i7-active wf-adobecaslonpro-n6-active wf-adobecaslonpro-i6-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>DemoPayment</title>
<link rel="icon" href="https://mycart.lifeextension.com/Images/favicon.ico">
<script type="text/javascript" async="" src="./Payment_files/Dynamic.aspx"></script><script type="text/javascript" async="" src="./Payment_files/Static.aspx"></script><script async="" src="./Payment_files/tag.js"></script><script type="text/javascript" async="" src="./Payment_files/AltSealInfo.aspx"></script><script type="text/javascript" async="" src="./Payment_files/ii.aspx"></script><script type="text/javascript" async="" src="./Payment_files/rollover.core.js"></script><script src="./Payment_files/7308.js" async="" type="text/javascript"></script><script src="./Payment_files/ytc.js" async=""></script><script src="./Payment_files/bat.js" async=""></script><script type="text/javascript" src="./Payment_files/cg.js"></script><script src="./Payment_files/885974991418405" async=""></script><script src="./Payment_files/identity.js" async=""></script><script async="" src="./Payment_files/fbevents.js"></script><script type="text/javascript" async="" src="./Payment_files/recaptcha__en.js"></script><script async="" src="./Payment_files/gtm.js"></script><script async="" src="./Payment_files/analytics.js"></script><script type="text/javascript" src="./Payment_files/b1d8adfcebd23a1804894a530b6fba99.js"></script>
<script src="https://js.braintreegateway.com/web/3.56.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.56.0/js/hosted-fields.min.js"></script>
<script src="https://js.braintreegateway.com/web/dropin/1.21.0/js/dropin.min.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js" data-version-4 log-level="warn"></script>
<script src="https://js.braintreegateway.com/web/3.56.0/js/paypal-checkout.min.js"></script>
<script type="text/javascript">
    dataLayer = [
    {
        'A_CUSTOMERNUMBER': "16182080"
        }
    ];
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', ' UA-2208667-2', {
        cookieDomain: '.lifeextension.com',
        legacyCookieDomain: '.lifeextension.com'
    });
    ga('set', 'ContentGroup', 'Cart');
     ga('set', 'userId', '16182080');
    ga('send', 'pageview');
</script>


<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MZ3638');</script>

<link href="./Payment_files/Jquery" rel="stylesheet">
<link href="./Payment_files/mainCSS.css" rel="stylesheet">
<link rel="stylesheet" href="./Payment_files/font-awesome.min.css">
<script type="text/javascript" src="./Payment_files/iek7yuv.js"></script>
<style type="text/css">.tk-share-techmono{font-family:"share-techmono",sans-serif;}.tk-myriad-pro-condensed{font-family:"myriad-pro-condensed",sans-serif;}.tk-myriad-pro{font-family:"myriad-pro",sans-serif;}.tk-adobe-caslon-pro{font-family:"adobe-caslon-pro",serif;}</style><style type="text/css">@font-face{font-family:share-techmono;src:url(https://use.typekit.net/af/72c926/000000000000000000010af8/27/l?subset_id=2&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/72c926/000000000000000000010af8/27/d?subset_id=2&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/72c926/000000000000000000010af8/27/a?subset_id=2&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/976c18/0000000000000000000170aa/27/l?subset_id=2&fvd=n9&v=3) format("woff2"),url(https://use.typekit.net/af/976c18/0000000000000000000170aa/27/d?subset_id=2&fvd=n9&v=3) format("woff"),url(https://use.typekit.net/af/976c18/0000000000000000000170aa/27/a?subset_id=2&fvd=n9&v=3) format("opentype");font-weight:900;font-style:normal;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/c63dde/0000000000000000000170a8/27/l?subset_id=2&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/c63dde/0000000000000000000170a8/27/d?subset_id=2&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/c63dde/0000000000000000000170a8/27/a?subset_id=2&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/f72c04/0000000000000000000170a4/27/l?subset_id=2&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/f72c04/0000000000000000000170a4/27/d?subset_id=2&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/f72c04/0000000000000000000170a4/27/a?subset_id=2&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/47529e/0000000000000000000170a2/27/l?subset_id=2&fvd=n3&v=3) format("woff2"),url(https://use.typekit.net/af/47529e/0000000000000000000170a2/27/d?subset_id=2&fvd=n3&v=3) format("woff"),url(https://use.typekit.net/af/47529e/0000000000000000000170a2/27/a?subset_id=2&fvd=n3&v=3) format("opentype");font-weight:300;font-style:normal;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/9369f8/0000000000000000000170a6/27/l?subset_id=2&fvd=n6&v=3) format("woff2"),url(https://use.typekit.net/af/9369f8/0000000000000000000170a6/27/d?subset_id=2&fvd=n6&v=3) format("woff"),url(https://use.typekit.net/af/9369f8/0000000000000000000170a6/27/a?subset_id=2&fvd=n6&v=3) format("opentype");font-weight:600;font-style:normal;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/d5dd09/0000000000000000000170ab/27/l?subset_id=2&fvd=i9&v=3) format("woff2"),url(https://use.typekit.net/af/d5dd09/0000000000000000000170ab/27/d?subset_id=2&fvd=i9&v=3) format("woff"),url(https://use.typekit.net/af/d5dd09/0000000000000000000170ab/27/a?subset_id=2&fvd=i9&v=3) format("opentype");font-weight:900;font-style:italic;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/24a439/0000000000000000000170a9/27/l?subset_id=2&fvd=i7&v=3) format("woff2"),url(https://use.typekit.net/af/24a439/0000000000000000000170a9/27/d?subset_id=2&fvd=i7&v=3) format("woff"),url(https://use.typekit.net/af/24a439/0000000000000000000170a9/27/a?subset_id=2&fvd=i7&v=3) format("opentype");font-weight:700;font-style:italic;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/af66cf/0000000000000000000170a5/27/l?subset_id=2&fvd=i4&v=3) format("woff2"),url(https://use.typekit.net/af/af66cf/0000000000000000000170a5/27/d?subset_id=2&fvd=i4&v=3) format("woff"),url(https://use.typekit.net/af/af66cf/0000000000000000000170a5/27/a?subset_id=2&fvd=i4&v=3) format("opentype");font-weight:400;font-style:italic;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/eb9223/0000000000000000000170a3/27/l?subset_id=2&fvd=i3&v=3) format("woff2"),url(https://use.typekit.net/af/eb9223/0000000000000000000170a3/27/d?subset_id=2&fvd=i3&v=3) format("woff"),url(https://use.typekit.net/af/eb9223/0000000000000000000170a3/27/a?subset_id=2&fvd=i3&v=3) format("opentype");font-weight:300;font-style:italic;}@font-face{font-family:myriad-pro-condensed;src:url(https://use.typekit.net/af/a17916/0000000000000000000170a7/27/l?subset_id=2&fvd=i6&v=3) format("woff2"),url(https://use.typekit.net/af/a17916/0000000000000000000170a7/27/d?subset_id=2&fvd=i6&v=3) format("woff"),url(https://use.typekit.net/af/a17916/0000000000000000000170a7/27/a?subset_id=2&fvd=i6&v=3) format("opentype");font-weight:600;font-style:italic;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/95c20a/0000000000000000000170a0/27/l?subset_id=2&fvd=n9&v=3) format("woff2"),url(https://use.typekit.net/af/95c20a/0000000000000000000170a0/27/d?subset_id=2&fvd=n9&v=3) format("woff"),url(https://use.typekit.net/af/95c20a/0000000000000000000170a0/27/a?subset_id=2&fvd=n9&v=3) format("opentype");font-weight:900;font-style:normal;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/fd10fc/0000000000000000000170a1/27/l?subset_id=2&fvd=i9&v=3) format("woff2"),url(https://use.typekit.net/af/fd10fc/0000000000000000000170a1/27/d?subset_id=2&fvd=i9&v=3) format("woff"),url(https://use.typekit.net/af/fd10fc/0000000000000000000170a1/27/a?subset_id=2&fvd=i9&v=3) format("opentype");font-weight:900;font-style:italic;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/1b1b1e/00000000000000000001709e/27/l?subset_id=2&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/1b1b1e/00000000000000000001709e/27/d?subset_id=2&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/1b1b1e/00000000000000000001709e/27/a?subset_id=2&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/2e2357/00000000000000000001709f/27/l?subset_id=2&fvd=i7&v=3) format("woff2"),url(https://use.typekit.net/af/2e2357/00000000000000000001709f/27/d?subset_id=2&fvd=i7&v=3) format("woff"),url(https://use.typekit.net/af/2e2357/00000000000000000001709f/27/a?subset_id=2&fvd=i7&v=3) format("opentype");font-weight:700;font-style:italic;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/d32e26/00000000000000000001709b/27/l?subset_id=2&fvd=i4&v=3) format("woff2"),url(https://use.typekit.net/af/d32e26/00000000000000000001709b/27/d?subset_id=2&fvd=i4&v=3) format("woff"),url(https://use.typekit.net/af/d32e26/00000000000000000001709b/27/a?subset_id=2&fvd=i4&v=3) format("opentype");font-weight:400;font-style:italic;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/c630c3/000000000000000000017098/27/l?subset_id=2&fvd=n3&v=3) format("woff2"),url(https://use.typekit.net/af/c630c3/000000000000000000017098/27/d?subset_id=2&fvd=n3&v=3) format("woff"),url(https://use.typekit.net/af/c630c3/000000000000000000017098/27/a?subset_id=2&fvd=n3&v=3) format("opentype");font-weight:300;font-style:normal;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/ee605b/000000000000000000017099/27/l?subset_id=2&fvd=i3&v=3) format("woff2"),url(https://use.typekit.net/af/ee605b/000000000000000000017099/27/d?subset_id=2&fvd=i3&v=3) format("woff"),url(https://use.typekit.net/af/ee605b/000000000000000000017099/27/a?subset_id=2&fvd=i3&v=3) format("opentype");font-weight:300;font-style:italic;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/cafa63/00000000000000000001709a/27/l?subset_id=2&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/cafa63/00000000000000000001709a/27/d?subset_id=2&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/cafa63/00000000000000000001709a/27/a?subset_id=2&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/80c5d0/00000000000000000001709c/27/l?subset_id=2&fvd=n6&v=3) format("woff2"),url(https://use.typekit.net/af/80c5d0/00000000000000000001709c/27/d?subset_id=2&fvd=n6&v=3) format("woff"),url(https://use.typekit.net/af/80c5d0/00000000000000000001709c/27/a?subset_id=2&fvd=n6&v=3) format("opentype");font-weight:600;font-style:normal;}@font-face{font-family:myriad-pro;src:url(https://use.typekit.net/af/d50a1b/00000000000000000001709d/27/l?subset_id=2&fvd=i6&v=3) format("woff2"),url(https://use.typekit.net/af/d50a1b/00000000000000000001709d/27/d?subset_id=2&fvd=i6&v=3) format("woff"),url(https://use.typekit.net/af/d50a1b/00000000000000000001709d/27/a?subset_id=2&fvd=i6&v=3) format("opentype");font-weight:600;font-style:italic;}@font-face{font-family:adobe-caslon-pro;src:url(https://use.typekit.net/af/3cbd9b/000000000000000000012d68/27/l?subset_id=2&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/3cbd9b/000000000000000000012d68/27/d?subset_id=2&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/3cbd9b/000000000000000000012d68/27/a?subset_id=2&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:adobe-caslon-pro;src:url(https://use.typekit.net/af/200aad/000000000000000000012d67/27/l?subset_id=2&fvd=i4&v=3) format("woff2"),url(https://use.typekit.net/af/200aad/000000000000000000012d67/27/d?subset_id=2&fvd=i4&v=3) format("woff"),url(https://use.typekit.net/af/200aad/000000000000000000012d67/27/a?subset_id=2&fvd=i4&v=3) format("opentype");font-weight:400;font-style:italic;}@font-face{font-family:adobe-caslon-pro;src:url(https://use.typekit.net/af/ed9e57/000000000000000000012d65/27/l?subset_id=2&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/ed9e57/000000000000000000012d65/27/d?subset_id=2&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/ed9e57/000000000000000000012d65/27/a?subset_id=2&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;}@font-face{font-family:adobe-caslon-pro;src:url(https://use.typekit.net/af/d7062a/000000000000000000012d66/27/l?subset_id=2&fvd=i7&v=3) format("woff2"),url(https://use.typekit.net/af/d7062a/000000000000000000012d66/27/d?subset_id=2&fvd=i7&v=3) format("woff"),url(https://use.typekit.net/af/d7062a/000000000000000000012d66/27/a?subset_id=2&fvd=i7&v=3) format("opentype");font-weight:700;font-style:italic;}@font-face{font-family:adobe-caslon-pro;src:url(https://use.typekit.net/af/68efc1/000000000000000000012d69/27/l?subset_id=2&fvd=n6&v=3) format("woff2"),url(https://use.typekit.net/af/68efc1/000000000000000000012d69/27/d?subset_id=2&fvd=n6&v=3) format("woff"),url(https://use.typekit.net/af/68efc1/000000000000000000012d69/27/a?subset_id=2&fvd=n6&v=3) format("opentype");font-weight:600;font-style:normal;}@font-face{font-family:adobe-caslon-pro;src:url(https://use.typekit.net/af/8c23a7/000000000000000000012d6a/27/l?subset_id=2&fvd=i6&v=3) format("woff2"),url(https://use.typekit.net/af/8c23a7/000000000000000000012d6a/27/d?subset_id=2&fvd=i6&v=3) format("woff"),url(https://use.typekit.net/af/8c23a7/000000000000000000012d6a/27/a?subset_id=2&fvd=i6&v=3) format("opentype");font-weight:600;font-style:italic;}</style><script type="text/javascript">try { Typekit.load(); } catch (e) { }</script>
<!--[if IE]>
          <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<script src="./Payment_files/api.js"></script>

<script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            }; if (!f._fbq) f._fbq = n;
            n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
        // Insert Your Custom Audience Pixel ID below.
         
        fbq("init", "885974991418405", {
            em: 'write2karthik.j@gmail.com',            
            fn: 'Karthik'
        });

        fbq('track', 'PageView');
       
</script>
<noscript><img height="1" width="1" style="display: none" src=https://www.facebook.com/tr?id =885974991418405&ev =PageView&noscript =1/></noscript>

<script type="text/javascript" src="./Payment_files/asset_composer.5d2cd6d9613b85125812.js" charset="utf-8" async=""></script><script src="./Payment_files/f.txt"></script></head>
<body id="CheckoutLayout" style=""><div id="buysafeRollover" tabindex="-1" style="position: absolute; visibility: hidden; transition: none 0s ease 0s; left: -1000px; top: -1000px; right: auto; bottom: auto;"></div><span id="_GUARANTEE_SealSpan" style="display: inline; padding: 0px; margin: 0px; border: 0px; position: fixed; bottom: 0px; top: auto; right: auto; left: 0px; z-index: 10001; background-color: transparent; height: auto; width: auto;"><img name="buysafeseal_1_img" id="buysafeseal_1_a" alt="Norton Shopping Guarantee" src="./Payment_files/s.png" border="0" oncontextmenu="return false;" data-pin-no-hover="true" data-pin-nopin="true" style="vertical-align: bottom; cursor: pointer;"><iframe id="_GUARANTEE_SealSpan_frame" title="Unused iFrame 1" tabindex="-1" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" height="100%" width="100%" style="padding: 0px; margin: 0px; border: 0px; position: absolute; height: 100%; width: 100%; left: 0px; top: 0px; z-index: -2;" src="./Payment_files/saved_resource(1).html"></iframe><div class="buysafe buysafe_seal buysafe_date" oncontextmenu="return false;" data-pin-no-hover="true" data-pin-nopin="true" style="font-family: Verdana, Arial, Helvetica, sans-serif !important; text-decoration: none !important; text-indent: 0px !important; text-transform: none !important; word-spacing: normal !important; letter-spacing: normal !important; text-shadow: none !important; position: absolute !important; border: 0px !important; margin: 0px !important; padding: 0px !important; width: 100% !important; text-align: center !important; color: rgb(255, 255, 255) !important; font-weight: 400 !important; bottom: 0px !important; left: -1px !important; height: 12px !important; line-height: 10px !important; font-size: 8px !important;">1/10/2020</div></span>
<div class="cart-topbar">
<div class="container-fluid text-right">
<p>
Have a question? Call <a href="tel:18006788989">1.800.678.8989</a> &nbsp;&nbsp;
<a href="http://www.lifeextension.com/quest-com"><i class="fa fa-phone blue"></i> Contact Us</a>&nbsp;
<a href="https://mycart.lifeextension.com/"><i class="fa fa-shopping-cart cartMenu"><span id="cartItemCount">1</span></i> Cart</a>
</p>
</div>
</div>
<div id="MainContainer" class="cart-wrapper">
<header class="clearfix">
<div class="container-fluid checkout border-bottom py-3 mb-4">
<div class="row">
<div class="col-md-4">
 <div class="logo-blue">
<a href="https://mycart.lifeextension.com/" target="_self" title="Cart">
<img src="./Payment_files/leflogo_stayhealthy.webp" title="Life Extension">
</a>
</div>
</div>
<div class="col-md-8">
<nav class="checkout-steps clearfix">
<ul class="btn-group btn-breadcrumb-dt">
<li class="btn btn-light">
<button data-bind="enable: EnableDelivery,  css:DeliveryCss" onclick="OnClickGoTo(&#39;/Checkout/ShipDestination&#39;)" class="btn-link-media costep_success">
<i data-bind="visible: EnableDelivery" class="checkouticon-success"></i>
<i data-bind="visible: !EnableDelivery()" class="checkouticon-one-active" style="display: none;"></i>
Shipping Information
</button>
</li>
<li class="btn btn-light">
<button data-bind="enable: EnableShippingMethod, css: ShipMethodCss" onclick="OnClickGoTo(&#39;/Checkout/ShipMethod&#39;)" class="btn-link-media costep_success">
<i data-bind="visible: EnableShippingMethod" class="checkouticon-success"></i>
<i data-bind="visible: !EnableShippingMethod() &amp;&amp; !OnShippingMethod()" class="checkouticon-two-inactive" style="display: none;"></i>
<i data-bind="visible: OnShippingMethod()" class="checkouticon-two-active" style="display: none;"></i>
Shipping Method
</button>
</li>
<li class="btn btn-light">
<button data-bind="enable: EnablePaymentMethod, css:PaymentMethodCss" onclick="OnClickGoTo(&#39;/Checkout/PCIPayment&#39;)" class="btn-link-media costep_active" disabled="">
<i data-bind="visible: EnablePaymentMethod" class="checkouticon-success" style="display: none;"></i>
<i data-bind="visible: !EnablePaymentMethod() &amp;&amp; !OnPaymentMethod()" class="checkouticon-three-inactive" style="display: none;"></i>
<i data-bind="visible: OnPaymentMethod()" class="checkouticon-three-active"></i>
Payment
</button>
</li>
<li class="btn btn-light">
<button data-bind="enable: EnablePlaceOrder, css: PlaceOrderCss" onclick="OnClickGoTo(&#39;/Checkout/PlaceOrder&#39;)" class="btn-link-media" disabled="">
<i data-bind="visible: !OnPlaceOrder()" class="checkouticon-four-inactive"></i>
<i data-bind="visible: OnPlaceOrder()" class="checkouticon-four-active" style="display: none;"></i>
Review and Submit
</button>
</li>
<li class="btn btn-light">
<button disabled="disabled" class="btn-link-media costep_last">
<i class="checkouticon-five-inactive"></i>
Receipt
</button>
</li>
</ul>
</nav>
</div>
</div>
</div>
</header>
<div class="container-fluid">
<div id="LoadingDiv" name="LoadingDiv" class="loading-page" style="display: none;">
<img src="./Payment_files/loading.gif" alt="loading">
<br>
<br>
<p>Loading... Please Wait</p>
</div>

<script>
        (function () {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 't.carts.guru/javascript/cg.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(script, s);

            var _cgObject = {
                siteId: "ee188219-3b0f-4134-ac08-d77d838a9861",	// SiteId is part of configuration
                id: "672b6ced-4614-4829-b5b5-78df24f2845b", 			// Unique identifier of the cart
                totalATI: "8.78", 		// Cart total
                totalET: "8.78", 		// Cart total excluding taxes and shipping
                currency: "USD", 	// Currency ISO code
                accountId: 'write2karthik.j@gmail.com', 		// email
                countryCode: 'US', 	// Country of code the buyer (use 'US' for United States)   	//Details of each items
                lastname: "Janardhanan",
                firstname: "Karthik",
                email: "write2karthik.j@gmail.com",
                mobilePhoneNumber: "4803998496",
                recoverUrl: "https://mycart.lifeextension.com/Login?ct=00000000-0000-0000-0000-000000000000",
                items:[{id:'02169',label:'Rainforest Blend Ground Coffee, 12 oz',quantity:'1',totalET:'8.775' ,totalATI:'8.775', url:'https://www.lifeextension.com/vitamins-supplements/item02169', imageUrl:'https://www.lifeextension.com/-/media/lifeextension/products/small/02169.png'}]
            };
            if (window.CartsGuru && window.CartsGuru.trackCart) {
                window.CartsGuru.trackCart(_cgObject);
            }
            else {
                window._cg = window._cg || [];
                window._cg.push(['trackCart', _cgObject]);
            }
        })();
    </script>

<div id="MyContainer" class="desktop-ver">
<form class="checkout-form clearfix" id="myform" name="myform">
<h1>
Secure Checkout &nbsp;<i class="yellow fa fa-lock"></i>
</h1>
<div>
<div id="server-messages" data-bind="foreach: Messages"></div>
</div>
<div class="row form-group">
<div class="col-8">
<div class="row pb-3" data-bind="visible: !IsDistributor()">
<div class="col-12" data-bind="visible: IsGiftCardPaymentAllow()">
<h3>
Apply Gift Card or Your Healthy Rewards </h3>
</div>
<div class="col-12" data-bind="visible: !IsGiftCardPaymentAllow()" style="display: none;">
<h3>
Apply Your Healthy Rewards </h3>
</div>
<div class="col-12">
<div class="row">
<div class="col-6 fh-hide" data-bind="visible:IsGiftCardPaymentAllow()">
<label class="m-0">Apply Gift Card</label>
<div class="form-inline">
<input type="text" data-bind="value: GiftCardCode, valueUpdate: &#39;afterkeydown&#39;, executeOnEnter: ApplyGiftCardVM" class="input-small form-control" id="GiftCardText" name="GiftCardText">
<input type="button" value="Apply" class="btn btn-primary cancel" data-bind="enable: HasGiftCardCode()" onclick="ApplyGiftCard()" style="margin-top: 1px;" disabled="">
</div>
<div data-bind="visible: HasGiftCards" style="display: none;">
<table style="width: 100%;">
<thead>
<tr>
<th class="text-left">Apply Gift Card #</th>
<th class="text-right">Amount</th>
<th class="text-right">Balance</th>
<th>&nbsp;</th>
</tr>
</thead>
<tbody data-bind="foreach: GiftCards"></tbody>
</table>
</div>
</div>
 
<!-- ko ifnot: (IsWholeSaler) -->
<!-- ko ifnot: (HasRejectedRewardsTermsAndConditions) -->
<div class="col-6" data-bind="visible: !IsAnonymousCheckout()">
<div>
<label class="le-dollars">
Your available LE Rewards <strong data-bind="text:DisplayAvailableLeRewardDollars">$0.00</strong>
<a href="https://mycart.lifeextension.com/CartPopUp/AvailableLERewards.html" rel="facebox"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
</label>
<div>
<input type="button" data-bind="visible:HasAvailableRewardRemaining(),enable: (HasReward() &amp;&amp; !HasAppliedRewardPayment())" class="btn btn-link padding-0 marginbtm-10 cancel" value=" Apply All" onclick="ApplyAllReward()" disabled="" style="display: none;">
</div>
<div class="form-inline">
<input type="text" id="rewardDollars" name="rewardDollars" data-bind="value: RewardEntered, valueUpdate: &#39;afterkeydown&#39;, executeOnEnter: ApplyRewardEnteredVM,enable:(HasReward() &amp;&amp; !HasAppliedRewardPayment())" class="input-tiny form-control" disabled="">
<input type="button" value="Apply" class="btn btn-primary cancel" data-bind="enable: (HasReward() &amp;&amp; !HasAppliedRewardPayment())" onclick="ApplyRewardEntered()" disabled="">
</div>
<label data-bind="visible: IsRewardEnteredNotValid(), text: RewardEnteredMessage()" for="RewardEnteredText" generated="true" class="error" style="display: none;"></label>
<input type="button" value="Remove" data-bind="visible: HasAppliedRewardPayment" class="btn btn-link cancel" onclick="RemoveRewardEntered()" style="display: none;">
<!-- ko if: (HasAvailableRewardRemaining) --><!-- /ko -->
</div>
</div>
<!-- /ko -->
<!-- /ko -->
</div>
</div>
<div class="col-12">
<div class="row">
<div data-bind="visible: HasAvailableCredit" class="col-12" style="display: none;">
<h3>Apply Available Credit</h3>
<div data-bind="visible: DoesNotHaveAppliedCreditPayment">
<div class="form-group">
<div>Available Credit: <strong><span data-bind="text: AvailableCredit" class="float-right">$0.00</span></strong></div>
<div>Apply this amount: <strong><span data-bind="text: ApplyCreditAmount" class="float-right">$0.00</span></strong></div>
</div>
<input type="button" value="Apply Credit" class="btn btn-primary" data-bind="visible: DoesNotHaveAppliedCreditPayment" onclick=" ApplyCredit()">
</div>
<div data-bind="visible: HasAppliedCreditPayment" style="display: none;">
<div class="form-group">
<div>Available Credit: <strong><span data-bind="text: AvailableCredit" class="float-right">$0.00</span></strong></div>
<div>Credit Applied: <strong><span data-bind="text: AppliedCreditPaymentAmount" class="float-right"></span></strong></div>
</div>
<div>
<input type="button" value="Remove Credit" class="btn btn-primary" data-bind="visible: HasAppliedCreditPayment" onclick=" RemoveAppliedCredit()" style="display: none;">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="form-group border-top" data-bind="visible: ShowCustomerPo" style="display: none;">
<h3>Customer PO</h3>
<div class="form-group form-inline">
<label>Customer PO</label>
<input type="text" data-bind="value: CustomerPo" class="form-control">
 </div>
</div>
<div class="clearfix border-top">
<h3>Choose Payment Method</h3>
<div class="payment-methods">
<div>
<div class="radio">
<label class="pt-2">
<input type="radio" id="radioDCC" onclick="ShowHideDiv()" data-bind="value: &#39;NCC&#39;, checked: SelectedPaymentValue,click: paymentMethodChange.bind($data, &#39;NCC&#39;)" name="PaymentMethodSelection" value="NCC">
<img alt="Payment Options" src="./Payment_files/dccpayment.png" height="30" width="220" style="margin-top: -8px;">
</label>
</div>
</div>
<div>
<div class="radio">
<label class="pt-2" data-bind="visible: HasPaypalOption">
<input type="radio" id="ppCheck" onclick="ShowHideDiv()" data-bind="value: &#39;PP&#39;, checked: SelectedPaymentValue,click: paymentMethodChange.bind($data, &#39;PP&#39;)" name="PaymentMethodSelection" value="PP">
<img alt="Paypal" src="./Payment_files/paypal-logo.webp" style="margin-top: -8px;">
</label>
</div>
</div>
<div>
<div class="radio">
<label data-bind="visible: HasOnAccountOption" style="display: none;">
<input type="radio" data-bind="value: &#39;ACC&#39;, checked: SelectedPaymentValue,click: paymentMethodChange.bind($data, &#39;ACC&#39;)" name="PaymentMethodSelection" value="ACC">
<strong><em>On Account</em></strong>
</label>
</div>
</div>
<div data-bind="visible: HasDefaultCreditCard" class="use-saved-card-wrap" style="display: none;">
<div class="radio">
<label>
<input type="radio" data-bind="value: &#39;ECC&#39;, checked: SelectedPaymentValue,click: paymentMethodChange.bind($data, &#39;ECC&#39;)" id="dccCheck" name="PaymentMethodSelection" value="ECC">
<span data-bind="text: CreditCardOnFile"></span>
</label>
</div>
<div class="use-saved-card-controls">
<a href="https://mycart.lifeextension.com/Checkout/PCIPayment#" onclick="editCreditCard(true)"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
<button id="removeCC" data-bind="click: removeCreditCard, enable: IsNotBusy" class="btn-link padding-0"><i class="fa fa-times" aria-hidden="true"></i> Remove</button>
</div>
</div>
</div>
<div data-bind="visible: IsNewCreditCardPayment" style="">
<div class="row">
<div class="col-sm-9">
<div data-bind="visible:!HasCreditCardPayment()">
<div id="server-messages" data-bind="foreach: GatewayMessages"></div>
<div id="cardpaymentform">
     <form action="/" id="paynowform" method="post">
      <div id="dropin"></div>
      <button id="submit-button">Confirm Payment</button>
    </form>
</div>
<!--<div id="iframe_div"><iframe src="./Payment_files/saved_resource(2).html" frameborder="0" id="PCI" scrolling="no" class="iframePayment"></iframe></div>-->
</div>

<div data-bind="visible:HasCreditCardPayment()" class="credit-card-box-wrap" style="display: none;">
<div class="use-diff-card-ftr"><i class="fa fa-credit-card blue" aria-hidden="true"></i><input type="button" class="usediffcard-btn" id="ChangeCCButton" onclick="useADifferentCard()" value="Want to use a different card?"></div>
<div class="credit-card-box-ui">
<div>
<ul>
<li><label>Credit Card Number</label></li>
<li><span data-bind="text: CreditCardMasked" id="NewCreditCardNumber"></span></li>
</ul>
</div>
<div>
<ul>
<li><label>Expiration Date*</label></li>
<li><span data-bind="text: Month" id="Month">1</span>/<span data-bind="text: Year" id="Year">0</span></li>
</ul>
</div>
</div>
</div>

</div>
<div class="col-sm-3">
<div data-bind="visible:!IsAnonymousCheckout()">
<div class="checkbox margintp-0">
<label>
<input type="checkbox" data-bind="checked: KeepAsDefaultCreditCard" name="KeepAsDefaultCreditCard" id="KeepAsDefaultCreditCard">Save card for future use
</label>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<span id="siteseal">
<!--<script type="text/javascript" src="./Payment_files/getSeal"></script><img style="cursor:pointer;cursor:hand" src="./Payment_files/siteseal_gd_3_h_l_m.gif" onclick="verifySeal();" alt="SSL site seal - click to verify">-->
</span>
</div>
<div class="col-sm-6 text-right">
<!--<input type="button" value="Continue" class="btn btn-success btn-lg paddingrt-30 paddinglt-30 btn-payment" id="ContinueButton" name="ContinueButton" onclick="Continue()" disabled="disabled">-->
<div id="paypalButton" style="display: none"></div>
<div id="paypalCreditButton" style="display: none"></div>
</div>
</div>
</div>
</div>
<div class="col-4">
<div class="order-summary">
<h3>Order Summary</h3>
<div>
<table>
<tbody><tr>
<td class="os-first">Total Price:</td>
<td class="text-right os-first"><span data-bind="text: Summary.TotalBaseStandard">$9.75</span></td>
</tr>
<tr data-bind="visible:Summary.HasPromoDiscount" class="redText" style="display: none;">
<td><span>Promo Discount:</span></td>
<td class="text-right strong">-<span data-bind="text: Summary.TotalPromoDiscount">$0.00</span></td>
</tr>
<tr data-bind="visible:Summary.HasSavings" class="red">
<td><span>Savings</span>:</td>
<td class="text-right strong">-<span data-bind="text: TotalDiscount" class="double-underline">$0.97</span></td>
</tr>
<tr data-bind="visible:Summary.HasSavings">
<td><strong>Subtotal</strong>:</td>
<td class="text-right"><span data-bind="text: SubTotal">$8.78</span></td>
</tr>
<tr>
<td>Shipping:</td>
<td class="text-right"><span data-bind="text: ShippingAmount" class="double-underline">$0.00</span></td>
</tr>
<tr data-bind="visible: HasTaxes" style="display: none;">
<td>Taxes:</td>
<td class="text-right"><span data-bind="text: TotalTaxes"></span></td>
</tr>
<tr>
<td><strong>Order Total</strong>:</td>
<td class="text-right"><span data-bind="text: OrderTotal">$8.78</span></td>
</tr>
<tr data-bind="visible: HasAppliedRewardPayment" style="display: none;">
<td><span class="le-dollars">LE Rewards:</span></td>
<td class="text-right">-<span data-bind="text: RewardsApplied">$0.00</span></td>
</tr>
<tr data-bind="visible: HasGiftCards" style="display: none;">
<td>Apply Gift Card:</td>
<td class="text-right">-<span data-bind="text: GiftCardPaymentAmount">$0.00</span></td>
</tr>
<tr data-bind="visible: HasAppliedCreditPayment" style="display: none;">
<td><span>Apply Available Credit:</span></td>
<td class="text-right">-<span data-bind="text: AppliedCreditPaymentAmount"></span></td>
</tr>
<tr class="summary-total">
<td>Amount Due:</td>
<td class="text-right"><span data-bind="text: AmountDue">$8.78</span></td>
</tr>
</tbody></table>
</div>
</div>
<p class="text-center">You can review this order before it's final.</p>


<div class="modal fade captcha-modal" id="CaptchaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h2> For your security, please follow the reCAPTCHA instructions below</h2>
</div>
<div class="modal-body">
<div id="server-messages" data-bind="foreach: Messages"></div>
<div class="row form-group error">
<div class="col-6">
<div class="g-recaptcha" data-sitekey="6Ld66BkTAAAAAIqdVVmB60fIanBtWsZi7AYmnrIF"><div style="width: 304px; height: 78px;"><div><iframe src="./Payment_files/anchor.html" width="304" height="78" role="presentation" name="a-gun2ulrtyk4" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
</div>
</div>
</div>
<div class="modal-footer">
<a href="https://mycart.lifeextension.com/Checkout/PCIPayment#" class="btn btn-primary" id="viewModelButton" onclick="viewModel.VerifyCaptcha()">Continue</a>
<a href="https://mycart.lifeextension.com/Checkout/PCIPayment#" class="btn btn-primary" id="viewAccountModelButton" onclick="viewAccountModel.VerifyCaptcha()" style="display: none;">Continue</a>
<a href="https://mycart.lifeextension.com/Checkout/PCIPayment#" class="btn btn-primary" id="angularButton" ng-click="verifyCaptcha()" style="display: none;">Continue</a>
</div>
</div>
</div>
</div>

<script type="text/javascript">

    function showCaptchaModal() {
        $.fn.modal.Constructor.prototype.enforceFocus = function () { };
        grecaptcha.reset();
        $('#CaptchaModal').modal('show');
    }


    function hideCaptchaModal() {
        $.fn.modal.Constructor.prototype.enforceFocus = function () { };
        $('#CaptchaModal').modal('hide');
    }
</script>
<div id="SuperSaleBannerOS" data-bind="visible: IsSuperSale">
<div>
<img src="./Payment_files/supersale-logo.webp" alt="Life Extension SuperSale">
</div>
<p><strong>Congrats! You are saving during our BIGGEST SALE of the year.</strong></p>
</div>

<div class="modal fade" id="EditCreditCardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="marginbtm-0">Credit Card</h4>
</div>
<div>
<div class="modal-body">
<div id="creditCardOnfile_iframe">
</div>
</div>
<div class="modal-footer">
<div class="text-center">
<input type="button" class="btn btn-primary" data-dismiss="modal" value="Cancel" id="CancelButton">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
<footer class="text-center checkout-footer">
<p>
All Contents Copyright © 2020 Life Extension® All rights reserved.
</p>
<ul>
<li><a href="https://www.lifeextension.com/quest-com.htm" title="Contact Us">Contact Us</a></li>
<li><a href="https://www.lifeextension.com/Legal/Privacy-Policy.htm" title="Policy">Privacy Policy</a></li>
<li><a href="https://www.lifeextension.com/Legal/Legal-Notices_01.htm" title="Terms">Terms</a></li>
<li><a href="https://mycart.lifeextension.com/Utilities/SwitchView?mobile=True&amp;returnUrl=%2FCheckout%2FPCIPayment" rel="external">Full Site</a></li>
</ul>
</footer>
</div>
<script src="./Payment_files/FrameworkScripts"></script>
<script type="text/javascript">
    var baseCartUrl = 'https://mycart.lifeextension.com/';
</script>
<script type="text/javascript" src="./Payment_files/jquery.validate.js"></script>
<script type="text/javascript" src="./Payment_files/lef.js"></script><script src="./Payment_files/TLSTest.js" type="text/javascript"></script>
<script type="text/javascript" src="./Payment_files/LE_Helper.js"></script>
<script type="text/javascript">
    
    var ViewModelClient = function() {
        var self = this;

        self.OnDelivery = ko.observable(false);
        self.OnShippingMethod = ko.observable(false);
        self.OnPaymentMethod = ko.observable(true);
        self.OnPlaceOrder = ko.observable(false);
        self.EnableDelivery = ko.observable(true);
        self.EnableShippingMethod = ko.observable(true);
        self.EnablePaymentMethod = ko.observable(false);
        self.EnablePlaceOrder = ko.observable(false);
        self.IsLoading = ko.observable(true);
        self.IsBusy = ko.observable(false);
        self.PaymentMethodCss = ko.observable("costep_active");
        self.DeliveryCss = ko.observable("costep_success");
        self.ShipMethodCss = ko.observable("costep_success");
        self.PlaceOrderCss = ko.observable("");
        self.IsNotBusy = ko.computed(function() {
            return !self.IsBusy();
        }, this);
        self.HasGiftCards = ko.computed(function() {
            if (self.IsLoading()) return false;
            return self.GiftCards().length > 0;
        }, this);
        self.Years = ko.observableArray();
        self.GatewayMessages = ko.observableArray();
        self.Months = ko.observableArray();
        self.Reload = ko.observable(false);
        self.AmountDueNum  = ko.observable(0);
        self.SelectedPaymentValue = ko.observable('');
        self.HasGiftCardCode = ko.computed(function() {
            if (self.IsLoading()) return false;
            return self.GiftCardCode() != "";
        }, this);
        self.IsRewardEnteredNotValid = ko.observable(false);
        self.RewardEnteredMessage = ko.observable('');

        self.IsNewCreditCardPayment = ko.computed(function() {
            return self.SelectedPaymentValue() == "NCC";
        }, this);

        self.HasAmountDue = ko.computed(function() {
            return self.AmountDueNum() >  0 ;
        }, this);
        self.IsCreditCardOnFilePayment = ko.computed(function() {
            return self.SelectedPaymentValue() == "ECC";
        }, this);
        self.IsPayPalPayment = ko.computed(function() {
            return self.SelectedPaymentValue() == "PP";
        }, this);
        self.IsOnAccountPayment =  ko.computed(function() {
            return self.SelectedPaymentValue() == "ACC";
        }, this);

        self.removeGiftCard = function(giftCardToRemove) {
            viewModel.IsBusy(true);
            $.ajax({
                type: "POST",
                url: '/Checkout/PCIPayment/RemoveGiftCard',
                data: { serial: giftCardToRemove.CardNumber ,paymentFacade: ko.toJSON(viewModel) },
                dataType: "json",
                async: false
            }).fail(function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 403) {
                    window.location.reload();
                }
            }).done(function(result, textStatus, jqXHR) {
                ko.mapping.fromJS(result, null, viewModel);
                viewModel.IsBusy(false);
                SetValidations();
            });
        };
        self.removeCreditCard = function(creditCardToRemove) {
            if (confirm("Are you sure you want to remove the credit card?")) {
                viewModel.IsBusy(true);
                $.ajax({
                    type: "POST",
                    url: '/Checkout/PCIPayment/RemoveCreditCard',
                    data: { paymentFacade: ko.toJSON(viewModel) },
                    dataType: "json",
                    async: false
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    if (jqXHR.status == 403) {
                        window.location.reload();
                    }
                }).done(function(result, textStatus, jqXHR) {
                    ko.mapping.fromJS(result, null, viewModel);
                    viewModel.IsBusy(false);
                });
            }
        };
        self.ApplyGiftCardVM = function() {
            ApplyGiftCard();
        };
        self.paymentMethodChange =  function(data,obj) {
            try {
                if (data == "NCC") {
                    $("#PCI").contents().find("#loadingDivPCI").hide();
                }
            } catch (e) {

            } 
        
            if (data == "NCC" && obj.AmountDueNum() > 0) {
                if (!viewModel.HasCreditCardPayment()) {
                    $('#ContinueButton').attr("disabled", "disabled");
                }
               
            } else {
                $('#ContinueButton').removeAttr("disabled");
            }
            return true;
        };

        self.ApplyRewardEnteredVM = function() {
            ApplyRewardEntered();
        };

        self.VerifyCaptcha= function() {
            viewModel.Messages(null);
            if ( $('#g-recaptcha-response').val() == '')
            {
                var messages = [{"Message":"Please select the check box 'I am not a robot' ","Type":"Error","Code":"Error","IconClass":"smallmessageicon-error","LabelClass":"alert alert-danger clearfix"}];
                ko.mapping.fromJS(messages, null, viewModel.Messages);
                return;
            }
            $("#ContinueButton").attr('disabled', 'disabled').addClass("btn btn-processing");


            $.ajax({
                type: "POST",
                url: "/Checkout/PCIPayment/VerifyCaptCha",
                dataType: "json",
                data: { capture: ko.toJSON($('#g-recaptcha-response').val()) },
                async: false
            }).fail(function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 403 ||jqXHR.status == 200 ) {
                    window.location.reload();
                }
            }).done(function(result, textStatus, jqXHR) {
                $("#ContinueButton").prop("disabled", false).removeClass("btn-processing");
                if (result.Status == "SUCCESS")
                {
                    ko.utils.postJson("/Checkout/PCIPayment/SetPayments", { myData: ko.toJS(viewModel) });
                } else {
                    viewModel.Messages(result.Messages);
                }

            });
        }
        self.ShowCaptCha = ko.observable(false);

    };

    var viewModel = new ViewModelClient();
    var isMobile = false;

    $(document).ready(function() {       
        var months = [{"Number":"01","MonthNumber":1,"Description":"January (01)","MonthName":"January"},{"Number":"02","MonthNumber":2,"Description":"February (02)","MonthName":"February"},{"Number":"03","MonthNumber":3,"Description":"March (03)","MonthName":"March"},{"Number":"04","MonthNumber":4,"Description":"April (04)","MonthName":"April"},{"Number":"05","MonthNumber":5,"Description":"May (05)","MonthName":"May"},{"Number":"06","MonthNumber":6,"Description":"June (06)","MonthName":"June"},{"Number":"07","MonthNumber":7,"Description":"July (07)","MonthName":"July"},{"Number":"08","MonthNumber":8,"Description":"August (08)","MonthName":"August"},{"Number":"09","MonthNumber":9,"Description":"September (09)","MonthName":"September"},{"Number":"10","MonthNumber":10,"Description":"October (10)","MonthName":"October"},{"Number":"11","MonthNumber":11,"Description":"November (11)","MonthName":"November"},{"Number":"12","MonthNumber":12,"Description":"December (12)","MonthName":"December"}];
        ko.mapping.fromJS(months, null, viewModel.Months);
        var years = [{"Year":2020},{"Year":2021},{"Year":2022},{"Year":2023},{"Year":2024},{"Year":2025},{"Year":2026},{"Year":2027},{"Year":2028},{"Year":2029},{"Year":2030},{"Year":2031},{"Year":2032}];
        ko.mapping.fromJS(years, null, viewModel.Years);
        var model = {"ShowCaptCha":false,"CanContinue":false,"CanApplyAllReward":false,"ShowBonusMessage":false,"BonusAmt":0,"IsWholeSaler":false,"HasTaxes":false,"IsDistributor":false,"IsAnonymousCheckout":false,"EnableSaveCreditCardOnfile":true,"HasAvailableRewardRemaining":false,"HasRejectedRewardsTermsAndConditions":false,"TotalTaxes":"","IsGiftCardPaymentAllow":true,"PCIUrl":"https://payflowlink.paypal.com?SECURETOKEN=IdjMRgmC19kGF3vLIGIMljAN4\u0026SECURETOKENID=3e549f5fc7a64b468f26f198d24a408d","PCICreditCardOnFileUrl":null,"IsSuperSale":true,"HasPaypalOption":true,"HasAvailableCredit":false,"HasOnAccountOption":false,"AvailableCredit":"$0.00","ApplyCreditAmount":"$0.00","CustomerPo":"","GiftCards":[],"HasDefaultCreditCard":false,"SelectedPaymentValue":"NCC","SecurityCode":"","Year":0,"Month":1,"CreditCardOnFile":"","CreditCardNumber":"","CreditCardMasked":null,"PCICode":null,"CreditCardNumberOrig":"","CardHoldersName":"Karthik Janardhanan","KeepAsDefaultCreditCard":false,"GiftCardCode":"","AmountDue":"$8.78","AmountDueNum":8.78,"TotalRetail":"$13.00","TotalDiscount":"$0.97","SubTotal":"$8.78","ShippingAmount":"$0.00","OrderTotal":"$8.78","HasGiftCardPayment":false,"HasAppliedCreditPayment":false,"DoesNotHaveAppliedCreditPayment":true,"GiftCardPaymentAmount":"$0.00","AppliedCreditPaymentAmount":null,"ShowCustomerPo":false,"HasAppliedRewardPayment":false,"RewardEntered":"","HasCreditCardPayment":false,"HasReward":false,"AvailableLeRewardDollars":"$0.00","DisplayAvailableLeRewardDollars":"$0.00","RewardsApplied":"$0.00","MaximumAmountEligibleToPayWithRewards":"$8.78","MaximumApplicableRewards":"$0.00","Summary":{"TotalRetail":"$13.00","TotalBaseStandard":"$9.75","TotalWithoutShipping":"$8.78","TotalProductCredit":"-$0.00","TotalDiscount":"$0.97","ShippingRate":"$0.00","ShippingRateRaw":"0","TotalTaxes":"$0.00","ShipmentTotal":"$8.78","HasSavings":true,"HasProductCredit":false,"AvailableLeRewardDollarsRaw":0,"AmountDueWithNonCommitted":"$8.78","AmountDueWithNonCommittedRaw":8.78,"AvailableLeRewardDollars":"$0.00","MaximumAmountEligibleToPayWithRewards":"$8.78","MaximumAmountEligibleToPayWithRewardsRaw":8.78,"LeRewardsPendingOnOrder":"$0.00","LeRewardsAppliedOnOrder":"$0.00","LeRewardsAvailable":"$0.00","GcAmount":null,"AppliedGiftCard":"$0.00","RewardsAppliedRaw":0,"RewardsApplied":"$0.00","SubTotal":"$8.78","AvailableCredit":"$0.00","ApplyCreditAmount":"$0.00","CreditAppliedAmount":null,"AppliedCreditPaymentAmount":null,"PayPalAmount":null,"OnAccountAmount":null,"OrderTotal":"$8.78","OrderTotalRaw":8.78,"AmountDue":"$8.78","TotalPromoDiscount":"$0.00","TotalPromoDiscountRaw":0,"HasPromoDiscount":false,"HasAvailableRewardRemaining":false},"IsPaymentPlanB":false,"Messages":[],"DisplayRenewalUpsell":false,"IsExpiredMember":false,"IsRenewalCandidate":false,"RenewalUrl":"https://mycart.lifeextension.com/?item=","NumberOfDaysTilExpired":0};
        ko.mapping.fromJS(model, null, viewModel);

        ko.applyBindings(viewModel);
        if ($("#LoadingDiv").length > 0) {
            $("#LoadingDiv").hide();
        }
        viewModel.IsLoading(false);

        if (!viewModel.CanContinue()) {
            $('#ContinueButton').attr("disabled","disabled");
        }

        $("#SaveCCButton").attr("disabled","disabled");
        var helper = new FormHelper('#myform');
        helper.initLef();
        buildPCIFrame();
        $(".openDialog").live("click", function(e) {
            e.preventDefault();
            divHost = $("<div style='overflow: auto' id='editPopUp'></div>")
                .addClass("dialog")
                .appendTo("body")
                .dialog({
                    close: function() {
                        $(this).remove();
                        //Ok, after we are here, we must reload out view model!!!

                    },
                    modal: true,
                    width: 450,
                    height: GetHeight()
                })
                .load(this.href);
        });


        $("#rewardDollars").keydown(function (event) {
            if (event.shiftKey) {
                event.preventDefault();
            }

            if (event.keyCode == 46 || event.keyCode == 8) {
            }
            else {
                if (event.keyCode < 95) {
                    if (event.keyCode < 48 || event.keyCode > 57) {
                        event.preventDefault();
                    }
                }
                else {
                    if (event.keyCode < 96 || event.keyCode > 105 && event.keyCode!=110  && event.keyCode!=190 ) {
                        event.preventDefault();
                    }
                }
            }
        });
    });
    function ApplyGiftCard() {
        if (viewModel.HasGiftCardCode() != "") {
            viewModel.IsBusy(true);
            $.ajax({
                type: "POST",
                url: '/Checkout/PCIPayment/ApplyGiftCard',
                data: { paymentFacade: ko.toJSON(viewModel) },
                dataType: "json",
                async: false
            }).fail(function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 403) {
                    window.location.reload();
                }
            }).done(function(result, textStatus, jqXHR) {
                ko.mapping.fromJS(result, null, viewModel);
                viewModel.IsBusy(false);
                SetValidations();

            });
        }
    }

    function ApplyAllReward() {
        if (viewModel.HasReward()) {
            viewModel.IsBusy(true);
            $.ajax({
                type: "POST",
                url: '/Checkout/PCIPayment/ApplyAllReward',
                data: { paymentFacade: ko.toJSON(viewModel) },
                dataType: "json",
                async: false
            }).fail(function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 403) {
                    window.location.reload();
                }
            }).done(function(result, textStatus, jqXHR) {
                ko.mapping.fromJS(result, null, viewModel);
                viewModel.IsBusy(false);
                SetValidations();

            });
        }
    }

    function ApplyRewardEntered() {
        if (isNaN(parseFloat(viewModel.RewardEntered()))) {
            viewModel.IsRewardEnteredNotValid(true);

            viewModel.RewardEnteredMessage('Invalid Number.');
            return;
        } else if (parseFloat(viewModel.RewardEntered()) > parseFloat(viewModel.AvailableLeRewardDollars().replace("$", ""))) {
            viewModel.IsRewardEnteredNotValid(true);

            viewModel.RewardEnteredMessage('Rewards entered cannot be greater than available.');
            return;
        } else {
            viewModel.IsRewardEnteredNotValid(false);
        }

        if (viewModel.HasReward()) {
            viewModel.IsBusy(true);
            $.ajax({
                type: "POST",
                url: '/Checkout/PCIPayment/ApplyReward',
                data: { paymentFacade: ko.toJSON(viewModel) },
                dataType: "json",
                async: false
            }).fail(function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 403) {
                    window.location.reload();
                }
            }).done(function(result, textStatus, jqXHR) {
                ko.mapping.fromJS(result, null, viewModel);
                viewModel.IsBusy(false);
                SetValidations();

            });
        }
    }

    function RemoveRewardEntered( ) {
        if (viewModel.HasAppliedRewardPayment() ) {
            viewModel.IsBusy(true);
            $.ajax({
                type: "POST",
                url: '/Checkout/PCIPayment/RemoveReward',
                data: { paymentFacade: ko.toJSON(viewModel) },
                dataType: "json",
                async: false
            }).fail(function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 403) {
                    window.location.reload();
                }
            }).done(function(result, textStatus, jqXHR) {
                ko.mapping.fromJS(result, null, viewModel);
                viewModel.IsBusy(false);
                SetValidations();

            });
        }
    }
    function SetValidations() {
        if (viewModel.AmountDueNum() <= 0) {
            $("#ContinueButton").removeAttr('disabled');
        } else {

            if (viewModel.HasCreditCardPayment() || viewModel.HasDefaultCreditCard() ||( viewModel.SelectedPaymentValue() == "ACC" || viewModel.SelectedPaymentValue() == "PP")) {
                $("#ContinueButton").removeAttr('disabled');
            } else {
               
                $('#ContinueButton').attr("disabled","disabled");
            }
           
        }
        if (isMobile) {
            window.scrollTo(0, 100);
        }

    }

    function ApplyCredit() {

        $.ajax({
            type: "POST",
            url: '/Checkout/PCIPayment/ApplyCredit',
            data: { paymentFacade: ko.toJSON(viewModel) }, 
            dataType: "json",
            async: false
        }).fail(function(jqXHR, textStatus, errorThrown) {
            if (jqXHR.status == 403) {
                window.location.reload();
            }
        }).done(function(result, textStatus, jqXHR) {
            ko.mapping.fromJS(result, null, viewModel);
            SetValidations();
        });
    }

    function RemoveAppliedCredit() {

        $.ajax({
            type: "POST",
            url: '/Checkout/PCIPayment/RemoveCredit',
            data: { paymentFacade: ko.toJSON(viewModel) },
            dataType: "json",
            async: false
        }).fail(function(jqXHR, textStatus, errorThrown) {
            if (jqXHR.status == 403) {
                window.location.reload();
            }
        }).done(function(result, textStatus, jqXHR) {
            ko.mapping.fromJS(result, null, viewModel);

            SetValidations();
        });
    }

    function Continue() {

        //if (viewModel.SelectedPaymentValue() == 'NCC')
        //{

        //    viewModel.CreditCardMasked($("#PCI").contents().find("#CCMasked").text());
        //    viewModel.Month($("#PCI").contents().find("#CCExpirationMonth").text());
        //    viewModel.Year($("#PCI").contents().find("#CCExpirationYear").text());
        //    viewModel.PCICode($("#PCI").contents().find("#pciCode").val());

        //}

        if ($("#myform").valid()) {
            

            $("#ContinueButton").attr('disabled', 'disabled').addClass("btn btn-processing");
            ko.utils.postJson("/Checkout/PCIPayment/SetPayments", { myData: ko.toJS(viewModel) });

        } else {

            if (isMobile)
            {
                var validator = $("#myform").validate();
                $('html, body').animate({
                    scrollTop: $(validator.errorList[0].element).offset().top -30
                }, 50);
            }


        }
    }
    function enableContinue(data) {
        $("#ContinueButton").removeAttr('disabled');
        viewModel.HasCreditCardPayment(true);
        var jsonData = JSON.parse(data);
        viewModel.CreditCardMasked(jsonData["Transaction"].CreditCardNumberMasked);
        viewModel.Month(jsonData["Transaction"].ExpirationMonth);
        viewModel.Year(jsonData["Transaction"].ExpirationYear);
        if (isMobile) {
            window.scrollTo(0, 300);
        }
    }
    function PCIShowCaptcha() {
        viewModel.ShowCaptCha(true);
        showCaptchaModal();
    }


    function buildPCIFrame() {
        buildPaymentIframe('#iframe_div', viewModel.PCIUrl(), "iframePayment");
    }

    function buildPaymentIframe(name, url, cssClass) {
        url += '&nojump';
        $(name).html("");
        $('<iframe>')                      // Creates the element
            .attr('src', url) // Sets the attribute spry:region="myDs"
            .attr('frameBorder', 0)
            .attr('id', "PCI")
            .attr('scrolling', "no")
            .attr('class',cssClass)
            .appendTo(name);
    }

    function editCreditCard( showModal) {
        $.ajax({
            type: "POST",
            url: '/Checkout/PCIPayment/GetCreditCardOnFilePCIUrl',
            data: { data: ko.toJSON(viewModel) },
            dataType: "json",
            async: true
        }).fail(function(jqXHR, textStatus, errorThrown) {

            if (jqXHR.status == 403) {
                window.location.reload();
            }
        }).done(function(result, textStatus, jqXHR) {
            viewModel.PCICreditCardOnFileUrl(result.PCICreditCardOnFileUrl);
            buildPaymentIframe('#creditCardOnfile_iframe', viewModel.PCICreditCardOnFileUrl(), "iframePayment");                   
        });


        if ( showModal )  $('#EditCreditCardModal').modal('show');

    }
    function useADifferentCard() {

        $.ajax({
            type: "POST",
            url: '/Checkout/PCIPayment/GetPCIUrl',
            data: { data: ko.toJSON(viewModel) },
            dataType: "json",
            async: true
        }).fail(function(jqXHR, textStatus, errorThrown) {

            if (jqXHR.status == 403) {
                window.location.reload();
            }
        }).done(function(result, textStatus, jqXHR) {
            viewModel.PCIUrl(result.PCIUrl);
            buildPCIFrame();
            viewModel.HasCreditCardPayment(false);
            $("#ContinueButton").attr('disabled', 'disabled');
        });

    }
    function DisplayPaymentMessage(data) {
        var jsonData = JSON.parse(data); 
        viewModel.GatewayMessages(jsonData["Messages"] );
        buildPaymentIframe('#iframe_div', jsonData["PCIUrl"], "iframePayment");
    }
    function ChangeCC() {
        viewModel.GatewayMessages(null);
        useADifferentCard();
    }
    function refreshCCOnFile(data) {
        viewModel.GatewayMessages(null);
        var jsonData = JSON.parse(data);         
        viewModel.CreditCardOnFile(jsonData["Transaction"].CreditCardNumberMasked);
        $('#EditCreditCardModal').modal('hide');
        $("#creditCardOnfile_iframe").html("");
        $("#ContinueButton").removeAttr('disabled');
    }


</script>
</div>

<img style="display:none;" src="./Payment_files/MP951765481a_Seal_BLX.gif">
<script type="text/javascript" id="" src="./Payment_files/gjs.aspx"></script><script type="text/javascript" id="">setTimeout(function(){var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0051/7308.js?"+Math.floor((new Date).getTime()/36E5);a.async=!0;a.type="text/javascript";b.parentNode.insertBefore(a,b)},1);</script><script type="text/javascript" id="">(function(b,c,e,f,d){b[d]=b[d]||[];var g=function(){var a={ti:"5216425"};a.q=b[d];b[d]=new UET(a);b[d].push("pageLoad")};var a=c.createElement(e);a.src=f;a.async=1;a.onload=a.onreadystatechange=function(){var b=this.readyState;b&&"loaded"!==b&&"complete"!==b||(g(),a.onload=a.onreadystatechange=null)};c=c.getElementsByTagName(e)[0];c.parentNode.insertBefore(a,c)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5216425&amp;Ver=2" height="0" width="0" style="display:none; visibility: hidden;"></noscript><script type="text/javascript" id="">(function(d,a,b,f,e){d[e]=d[e]||[];d[e].push({projectId:"10000",properties:{pixelId:"10032080"}});var c=a.createElement(b);c.src=f;c.async=!0;c.onload=c.onreadystatechange=function(){var a=this.readyState,c=d[e];if(!a||"complete"==a||"loaded"==a)try{var b=YAHOO.ywa.I13N.fireBeacon;d[e]=[];d[e].push=function(a){b([a])};b(c)}catch(g){}};a=a.getElementsByTagName(b)[0];b=a.parentNode;b.insertBefore(c,a)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
&nbsp; &nbsp; <script type="text/javascript" id="ze-snippet" src="./Payment_files/snippet.js"></script>
<script type="text/javascript" id="">window._GUARANTEE&&_GUARANTEE.Loaded&&(_GUARANTEE.Hash="j1Zhws1frur5FsjP3CEK4crDYCszbfFnE0DdcfeqSL6K1Ro7LCuevAguLMN4s16YMgL84RpYP4JGMzKMp%2B51TQ%3D%3D",_GUARANTEE.WriteSeal("_GUARANTEE_SealSpan","GuaranteedSeal"));</script>

<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.3492264760214876"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.4889123064594836" width="0" height="0" alt="" src="./Payment_files/0"></div>
 <script type="application/javascript" id="ywa-1578694034522-458259" class="ywa-10000" defer="" src="./Payment_files/sp.pl.download"></script>
<img src="./Payment_files/seg" width="1" height="1" style="display: none">
<noscript>
    <img height="1" width="1" style="display: none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l4ks0&p_id=Twitter"/>
    <img height="1" width="1" style="display: none;" alt="" src="//t.co/i/adsct?txn_id=l4ks0&p_id=Twitter"/>
</noscript>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071920708;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="./Payment_files/f(1).txt">
</script>
<script type="text/javascript">
var button = document.querySelector('#submit-button');

    braintree.dropin.create({
      authorization: 'sandbox_s94byrsv_hks7325w6hqpmygy',
      container: '#dropin'
    }, function (createErr, instance) {
      button.addEventListener('click', function () {
        instance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
          // Submit payload.nonce to your server
          console.log("Getting payload in the callback");
          console.log(payload);
        });
      });
    });

    braintree.client.create({
        authorization: 'sandbox_s94byrsv_hks7325w6hqpmygy',
    }, function (clientErr, clientInstance) {

    if (clientErr) {
        console.error('Error creating client:', clientErr);
        return;
    }

    braintree.paypalCheckout.create({
        client: clientInstance
    }, function (paypalCheckoutErr, paypalCheckoutInstance) {

        if (paypalCheckoutErr) {
            console.error('Error creating PayPal Checkout:', paypalCheckoutErr);
            return;
        }
        
        paypal.Button.render({
            env: 'sandbox', // or 'sandbox'
            style:{
                tagline:false
            },
            payment: function () {
                return paypalCheckoutInstance.createPayment({
                    flow: 'vault',
                    billingAgreementDescription: 'Your agreement description',
                    enableShippingAddress: true,
                    shippingAddressEditable: false,
                    shippingAddressOverride: {
                        recipientName: 'Scruff McGruff',
                        line1: '1234 Main St.',
                        line2: 'Unit 1',
                        city: 'Chicago',
                        countryCode: 'US',
                        postalCode: '60652',
                        state: 'IL',
                        phone: '123.456.7890'
                    }
                });
            },

            onAuthorize: function (data, actions) {
                return paypalCheckoutInstance.tokenizePayment(data, function (err, payload) {
                });
            },

            onCancel: function (data) {
                console.log('checkout.js payment cancelled', JSON.stringify(data, 0, 2));
            },

            onError: function (err) {
                console.error('checkout.js error', err);
            }
        }, '#paypalButton').then(function () {
      
    });
        paypal.Button.render({
            env: 'sandbox', // or 'sandbox'
            style:{
                label:'credit',
                tagline:false
            },
            payment: function () {
                return paypalCheckoutInstance.createPayment({
                    flow: 'vault',
                    offerCredit: true,
                    billingAgreementDescription: 'Your agreement description',
                    enableShippingAddress: true,
                    shippingAddressEditable: false,
                    shippingAddressOverride: {
                        recipientName: 'Scruff McGruff',
                        line1: '1234 Main St.',
                        line2: 'Unit 1',
                        city: 'Chicago',
                        countryCode: 'US',
                        postalCode: '60652',
                        state: 'IL',
                        phone: '123.456.7890'
                    }
                });
            },

            onAuthorize: function (data, actions) {
                return paypalCheckoutInstance.tokenizePayment(data, function (err, payload) {
                });
            },

            onCancel: function (data) {
                console.log('checkout.js payment cancelled', JSON.stringify(data, 0, 2));
            },

            onError: function (err) {
                console.error('checkout.js error', err);
            }
        }, '#paypalCreditButton').then(function () {
      
    });

  });

});
        
</script>
<script type="text/javascript">
    function ShowHideDiv() {
        var chkYes = document.getElementById("ppCheck");
        var dvPassport = document.getElementById("paypalButton");
        var dvPassport1 = document.getElementById("paypalCreditButton");
        dvPassport.style.display = chkYes.checked ? "block" : "none";
        dvPassport1.style.display = chkYes.checked ? "block" : "none";
    }
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1071920708/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZ3638"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>


<noscript><iframe src="//t.a3cloud.net/AM-141167/if.htm" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script async="async">(function(d,c){var a=window,b=document,s="script",a=a[d]=a[d]||{};a.c={};a.c[c]={};a.c[c].d=[];a.c[c].d.push("init:"+(new Date).getTime());a.c[c].v={};a.c[c].v.udv="%UDV%";a=b.getElementsByTagName(s)[0];b=b.createElement(s);b.async=!0;b.src="//t.a3cloud.net/"+c+"/tag.js?ns="+d;a.parentNode.insertBefore(b,a)})("am","AM-141167")</script>

<link rel="stylesheet" href="./Payment_files/payment-paypal.css">

    <div id="facebox" style="display:none;">       <div class="popup">         <table>           <tbody>             <tr>               <td class="tl"></td><td class="b"></td><td class="tr"></td>             </tr>             <tr>               <td class="b"></td>               <td class="body">                 <div class="content">                 </div>                 <div class="footer">                   <a href="https://mycart.lifeextension.com/Checkout/PCIPayment#" class="close">                     <img src="./Payment_files/closelabel.webp" title="close" class="close_image">                   </a>                 </div>               </td>               <td class="b"></td>             </tr>             <tr>               <td class="bl"></td><td class="b"></td><td class="br"></td>             </tr>           </tbody>         </table>       </div>     </div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="./Payment_files/bframe.html" name="c-gun2ulrtyk4" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="./Payment_files/saved_resource(3).html" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe><div><iframe title="Opens a widget where you can find more information" id="launcher" tabindex="-1" class="zEWidget-launcher " style="border: none; background: transparent; z-index: 999998; transform: translateZ(0px); position: fixed; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1); transition-property: opacity, top, bottom; opacity: 0; width: 113px; height: 50px; max-height: 551px; min-height: 50px; margin: 10px 20px; top: -9999px; visibility: hidden;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;width: 113px;" src="./Payment_files/saved_resource(4).html"></iframe></div><div><iframe title="Find more information here" id="webWidget" tabindex="-1" class="zEWidget-webWidget " style="border: none; background: transparent; z-index: 999999; transform: translateZ(0px); position: fixed; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1); transition-property: opacity, top, bottom; opacity: 0; width: 357px; height: 100%; max-height: 565px; min-height: 150px; margin-left: 8px; margin-right: 8px; top: -9999px; visibility: hidden;" src="./Payment_files/saved_resource(5).html"></iframe></div></body></html>
