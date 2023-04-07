<style>
    .header #navbar-main .secondary-menu .region-secondary-menu .navigation.menu--main .nav-item .nav-link {
        color: #0000007d !important;
    }
    .navbar-light .navbar-nav .nav-link{
        color: #0000007d !important;
    }
    .language-link{
        color: #0000007d !important;
    }
    #header{
        height: 100px;
    }
    .header #navbar-main .navbar-brand .logo {
        margin: 17px 0 !important;
    }
</style>

<header id="header" class="header" role="banner" aria-label="Site header">
    <nav class="navbar d-lg-none navbar-light" id="navbar-top">
        <div class="form-inline navbar-form container">
            <section class="row region region-top-header-form">
                <nav role="navigation" aria-labelledby="block-mobileheadermenu-menu" id="block-mobileheadermenu"
                    class="d-lg-none mobile-header container col block block-menu navigation menu--mobile-header-menu">

                    <h2 class="sr-only" id="block-mobileheadermenu-menu">Mobile Header Menu</h2>

                    <ul block="block-mobileheadermenu" class="clearfix nav">
                        <li class="nav-item">
                            <a href="{{ route('suppliers') }}" class="nav-link nav-link--en-supplier"
                                data-drupal-link-system-path="node/9349">Suppliers</a>
                        </li>
                        <li class="nav-item">
                            <a href="../product.html" class="nav-link nav-link--en-product"
                                data-drupal-link-system-path="node/9350">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="../rfq.html" class="nav-link nav-link--en-rfq"
                                data-drupal-link-system-path="rfq">Send an RFQ</a>
                        </li>
                    </ul>



                </nav>
                <div class="views-exposed-form d-lg-none block block-views block-views-exposed-filter-blocksearch-content-search-page"
                    data-drupal-selector="views-exposed-form-search-content-search-page"
                    id="block-exposedformsearch-contentsearch-page">
                    <div class="content">

                        <form action="https://projectsuppliers.net/en/search/content" method="get"
                            id="views-exposed-form-search-content-search-page" accept-charset="UTF-8">
                            <div class="form-row">
                                <fieldset
                                    class="js-form-item js-form-type-textfield form-type-textfield js-form-item-keys form-item-keys form-no-label form-group">
                                    <label for="edit-keys" class="sr-only">Search</label>
                                    <input placeholder="Search for a Supplier or…" data-drupal-selector="edit-keys"
                                        type="text" id="edit-keys" name="keys" value="" size="30"
                                        maxlength="128" class="form-text form-control" />

                                </fieldset>
                                <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-group"
                                    id="edit-actions--2"><button data-drupal-selector="edit-submit-search-content"
                                        type="submit" id="edit-submit-search-content" value="SEARCH"
                                        class="button js-form-submit form-submit btn btn-primary">SEARCH</button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>

            </section>

        </div>
    </nav>
    <nav class="navbar container navbar-light navbar-expand-lg" id="navbar-main">
        <a href="{{ route('index') }}" title="Home" rel="home" class="navbar-brand">
            <img alt="logo" width="195px" height="62px" id="logo-primary"
                src="{{ asset('assets/image/wobg_newLogo.png') }}" alt="Home"
                class="img-fluid align-top logo" />
            <img alt="logo" width="195px" height="62px" id="logo-white"
                src="{{ asset('assets/image/newLogo.png') }}" alt="Home" class="white-logo logo" />
            <span class="ml-2 d-none d-md-inline"></span>
        </a>


        <div class="form-inline navbar-form justify-content-end">
            <section class="row region region-header-form">
                <div class="views-exposed-form primary-search flexbox block block-views block-views-exposed-filter-blocksearch-content-search-page"
                    data-drupal-selector="views-exposed-form-search-content-search-page"
                    id="block-exposedformsearch-contentsearch-page-2">


                    <div class="content">

                        <form action="https://projectsuppliers.net/en/search/content" method="get"
                            id="views-exposed-form-search-content-search-page" accept-charset="UTF-8">
                            <div class="form-row">




                                <fieldset
                                    class="js-form-item js-form-type-textfield form-type-textfield js-form-item-keys form-item-keys form-no-label form-group">
                                    <label for="edit-keys--2" class="sr-only">Search</label>
                                    <input placeholder="Search for a Supplier or…" data-drupal-selector="edit-keys"
                                        type="text" id="edit-keys--2" name="keys" value="" size="30"
                                        maxlength="128" class="form-text form-control" />

                                </fieldset>
                                <div data-drupal-selector="edit-actions"
                                    class="form-actions js-form-wrapper form-group" id="edit-actions--3"><button
                                        data-drupal-selector="edit-submit-search-content-2" type="submit"
                                        id="edit-submit-search-content--2" value="SEARCH"
                                        class="button js-form-submit form-submit btn btn-primary">SEARCH</button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
                <div id="block-searchlink-2"
                    class="searchlink-mobile d-lg-none block block-ps-misc block-search-link">


                    <div class="content">
                        <a href="../search/content.html" class="search-link">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>

            </section>

        </div>
        <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
            data-target="#CollapsingNavbar" aria-controls="CollapsingNavbar" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="close-button"><img src="../../themes/custom/ps_new/images/x-dark.svg"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-end justify-content-center"
            id="CollapsingNavbar">
           
            <div class="secondary-menu">
                <section class="row region region-secondary-menu">
                    <nav role="navigation" aria-labelledby="block-mainnavigation-menu" id="block-mainnavigation"
                        class="block block-menu navigation menu--main">

                        <h2 class="sr-only" id="block-mainnavigation-menu">Main navigation</h2>



                        <ul block="block-mainnavigation" class="clearfix nav navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link nav-link--en"
                                    data-drupal-link-system-path="&lt;front&gt;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link nav-link--en-supplier"
                                    data-drupal-link-system-path="node/9349">Dashboard</a>
                            </li>
                            <li class="nav-item menu-item--expanded dropdown">
                                <a href="../product.html" class="nav-link dropdown-toggle nav-link--en-product"
                                    data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"
                                    data-drupal-link-system-path="node/9350">Companies</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="{{ route('add_company') }}" class="nav-link--en-product"
                                            data-drupal-link-system-path="node/9350">Add Company</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('my_company') }}" class="nav-link--approver">My Company</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="nav-item">
                                <a href="../media/blogs.html" class="nav-link nav-link--en-media-blogs"
                                    data-drupal-link-system-path="node/9345">RFQ's</a>
                            </li>
                            <li class="nav-item">
                                <a href="../pricing.html" class="nav-link nav-link--en-pricing"
                                    data-drupal-link-system-path="node/12825">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a href="../contact-us.html" class="nav-link nav-link--en-contact-us"
                                    data-drupal-link-system-path="node/9343">Contact us</a>
                            </li>
                            <li class="nav-item menu-item--expanded dropdown">
                                <a href="#" class="nav-link dropdown-toggle nav-link--en-product"
                                    data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"
                                    data-drupal-link-system-path="node/9350">
                                    <img class="menu-avatar" 
                                    style="width: 30px;
                                    border-radius: 50px;
                                    margin: 0 3px;
                                    min-height: 30px;
                                    border: 1px solid #007a66;" src="{{ asset('assets/image/defalut_profile_pic.png') }}">
                                </a>
                                @auth
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endauth

                            </li>
                        </ul>

                    </nav>
                    <div class="language-switcher-language-url secondary-language-switcher d-lg-none block block-language block-language-blocklanguage-interface"
                        id="block-languageswitcher" role="navigation">


                        <div class="content">


                            <nav class="links nav links-inline"><span hreflang="ar"
                                    data-drupal-link-query="{&quot;destination&quot;:&quot;\/en&quot;}"
                                    data-drupal-link-system-path="user/login" class="ar nav-link"><a
                                        href="../../ar/user/login92c7.html?destination=/en" class="language-link"
                                        hreflang="ar"
                                        data-drupal-link-query="{&quot;destination&quot;:&quot;\/en&quot;}"
                                        data-drupal-link-system-path="user/login"><svg width="1em" height="1em"
                                            viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539a8.372 8.372 0 0 1-1.198-.49 7.01 7.01 0 0 1 2.276-1.52 6.7 6.7 0 0 0-.597.932 8.854 8.854 0 0 0-.48 1.079zM3.509 7.5H1.017A6.964 6.964 0 0 1 2.38 3.825c.47.258.995.482 1.565.667A13.4 13.4 0 0 0 3.508 7.5zm1.4-2.741c.808.187 1.681.301 2.591.332V7.5H4.51c.035-.987.176-1.914.399-2.741zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5H7.5v2.409c-.91.03-1.783.145-2.591.332a12.343 12.343 0 0 1-.4-2.741zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696A12.63 12.63 0 0 1 7.5 11.91v3.014c-.67-.204-1.335-.82-1.887-1.855a7.776 7.776 0 0 1-.395-.872zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964a9.083 9.083 0 0 0-1.565.667A6.963 6.963 0 0 1 1.018 8.5h2.49a13.36 13.36 0 0 0 .437 3.008zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909c.81.03 1.577.13 2.282.287-.12.312-.252.604-.395.872-.552 1.035-1.218 1.65-1.887 1.855V11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5h-2.49a13.361 13.361 0 0 0-.437-3.008 9.123 9.123 0 0 0 1.565-.667A6.963 6.963 0 0 1 14.982 7.5zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z" />
                                        </svg> عربي</a></span></nav>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </nav>
</header>