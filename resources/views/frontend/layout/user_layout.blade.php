<!DOCTYPE html>
<html lang="en" dir="ltr"
    prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <link rel='dns-prefetch' href='http://static.addtoany.com/'>
    <meta charset="utf-8" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158902291-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };
        gtag("js", new Date());
        gtag("set", "developer_id.dMDhkMT", true);
        gtag("config", "UA-158902291-1", {
            "groups": "default",
            "anonymize_ip": true,
            "page_placeholder": "PLACEHOLDER_page_path"
        });
    </script>
    <script src="{{ asset('assets/hotjar.js') }}"></script>
    <title>Bari CHEAC Procurement | Sourcing the World</title>
    <link rel="stylesheet" media="all" href="{{ asset('assets/style1.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/style2.css') }}" />
    <script src="{{ asset('assets/js1.js') }}" defer></script>
    <link rel="apple-touch-icon" href="{{ asset('assets/image/logo.svg') }}">
</head>

<body class="layout-no-sidebars page-node-9342 path-frontpage node--type-landing-page">
    <a href="#main-content" class="visually-hidden focusable skip-link">
        Skip to main content
    </a>
    <noscript aria-hidden="true"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNN6QRR" height="0"
            width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <div id="page-wrapper">
            <div id="page">
                @if (Request::segment(1) == 'home')
                    @include('frontend.layout.paritls.user_dashboard_header')
                @endif
                @if (Request::segment(1) == 'login' || Request::segment(1) == 'register' || Request::segment(1) == 'rfq' )
                    @include('frontend.layout.paritls.flat_header')
                @endif
                @include('frontend.layout.paritls.header')
                @yield('contents')
                @include('frontend.layout.paritls.footer')
            </div>
        </div>
        
    </div>
        
        
        <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"en\/","currentPath":"node\/9342","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"en"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"google_analytics":{"account":"UA-158902291-1","trackOutbound":true,"trackMailto":true,"trackTel":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip","trackColorbox":true},"data":{"extlink":{"extTarget":false,"extTargetNoOverride":false,"extNofollow":false,"extNoreferrer":true,"extFollowNoOverride":false,"extClass":"0","extLabel":"(link is external)","extImgClass":false,"extSubdomains":true,"extExclude":"","extInclude":"","extCssExclude":"","extCssExplicit":"","extAlert":false,"extAlertText":"This link will take you to an external web site. We are not responsible for their content.","mailtoClass":"0","mailtoLabel":"(link sends email)","extUseFontAwesome":false,"extIconPlacement":"append","extFaLinkClasses":"fa fa-external-link","extFaMailtoClasses":"fa fa-envelope-o","whitelistedDomains":[]}},"ajaxTrustedUrl":{"form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM":true,"\/en\/search\/content":true},"blazy":{"loadInvisible":false,"offset":100,"saveViewportOffsetDelay":50,"validateDelay":25,"container":"","loader":true,"unblazy":false},"blazyIo":{"disconnect":false,"rootMargin":"0px","threshold":[0,0.25,0.5,0.75,1]},"slick":{"accessibility":true,"adaptiveHeight":false,"autoplay":false,"pauseOnHover":true,"pauseOnDotsHover":false,"pauseOnFocus":true,"autoplaySpeed":3000,"arrows":true,"downArrow":false,"downArrowTarget":"","downArrowOffset":0,"centerMode":false,"centerPadding":"50px","dots":false,"dotsClass":"slick-dots","draggable":true,"fade":false,"focusOnSelect":false,"infinite":true,"initialSlide":0,"lazyLoad":"ondemand","mouseWheel":false,"randomize":false,"rtl":false,"rows":1,"slidesPerRow":1,"slide":"","slidesToShow":1,"slidesToScroll":1,"speed":500,"swipe":true,"swipeToSlide":false,"edgeFriction":0.35,"touchMove":true,"touchThreshold":5,"useCSS":true,"cssEase":"ease","cssEaseBezier":"","cssEaseOverride":"","useTransform":true,"easing":"linear","variableWidth":false,"vertical":false,"verticalSwiping":false,"waitForAnimate":true},"field_group":{"html_element":{"mode":"latest_card","context":"view","settings":{"classes":"latest-card-type","id":"","element":"div","show_label":false,"label_element":"h3","label_element_classes":"","attributes":"","effect":"none","speed":"fast"}},"link":{"mode":"latest_card","context":"view","settings":{"classes":"flex-grow-1","id":"","target":"entity","custom_uri":"","target_attribute":"default"}}},"inotify_mercure":{"mercure_hub_url":"https:\/\/notify.projectsuppliers.net\/.well-known\/mercure","user_topic_id":"inotify_mercure_user_notifications_0"},"user":{"uid":0,"permissionsHash":"8e510314565a6b14f3a0d688e498b3c7248f2e31f98f277e405486a9224a024f"}}</script>
        <script src="{{ asset('assets/jsF1.js') }}"></script>
        <script src="{{ asset('assets/menu.js') }}" async></script>
        <script src="{{ asset('assets/jsf2.js') }}"></script>
        
</body>
        
</html>
           