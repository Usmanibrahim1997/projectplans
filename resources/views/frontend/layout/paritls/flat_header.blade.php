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
                src="{{ asset('assets/image/newLogo.PNG') }}" alt="Home" class="white-logo logo" />
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
            <div class="primary-menu d-none d-lg-flex flex-row justify-content-end align-items-center">
                <nav role="navigation" aria-labelledby="block-ps-new-account-menu-menu"
                    id="block-ps-new-account-menu"
                    class="text-black primary-user block block-menu navigation menu--account">

                    <h2 class="sr-only" id="block-ps-new-account-menu-menu">User account menu</h2>



                    <ul block="block-ps-new-account-menu" class="clearfix nav navbar-nav">
                        <li class="nav-item menu-item--expanded active dropdown">
                            <a href="login.html" class="nav-link active dropdown-toggle  nav-link--en-user-login"
                                data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><svg
                                    viewBox="0 0 22 22" height="22" width="22"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="evenodd" fill="none">
                                        <g fill="currentColor">
                                            <path transform="translate(-855 -37) translate(855 37)"
                                                d="M11.001.165C7.747.165 5.096 2.783 5.096 6c0 1.559.461 3.509 1.414 5.128.283.48.615.934.995 1.335-.03.232-.078.418-.131.536-.064.142-.108.17-.15.186-.597.223-2.205.351-3.723.82-1.52.47-3.078 1.397-3.49 3.29-.037.173.021.353.154.472 5.971 5.332 15.699 5.332 21.67 0 .133-.119.191-.299.154-.471-.412-1.894-1.97-2.821-3.49-3.29-1.518-.47-3.126-.599-3.72-.821h-.001c-.08-.03-.129-.07-.195-.198-.054-.103-.103-.264-.139-.47.402-.414.75-.887 1.046-1.389.953-1.62 1.414-3.57 1.414-5.128 0-3.218-2.648-5.836-5.903-5.836zm0 .989c2.715 0 4.903 2.163 4.903 4.847 0 1.36-.433 3.195-1.278 4.631-.845 1.437-2.034 2.446-3.625 2.446-1.591 0-2.781-1.01-3.626-2.446C6.53 9.196 6.096 7.36 6.096 6.001c0-2.684 2.191-4.847 4.905-4.847zM8.362 13.21c.749.529 1.63.856 2.64.856.991 0 1.86-.317 2.6-.83.027.07.057.137.091.203.15.289.402.546.73.67.94.352 2.414.418 3.778.84 1.277.395 2.344 1 2.738 2.28-5.512 4.71-14.366 4.71-19.878 0 .394-1.28 1.461-1.885 2.738-2.28 1.365-.422 2.84-.488 3.78-.84h.002c.337-.128.572-.409.706-.707.028-.062.053-.126.075-.191z" />
                                        </g>
                                    </g>
                                </svg> Log in</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="{{ route('register') }}" class="nav-link--en-user-register"
                                        data-drupal-link-system-path="user/register">Register</a>
                                </li>
                                <li class="dropdown-item active">
                                    <a href="{{ route('login') }}"
                                        class="active nav-link--en-user-login"
                                        data-drupal-link-system-path="user/login">Log in</a>
                                </li>
                            </ul>

                        </li>
                    </ul>



                </nav>
                <div class="language-switcher-language-url d-none d-sm-block block block-language block-language-blocklanguage-interface"
                    id="block-ps-new-languageswitcher" role="navigation">


                    <div class="content">


                        <nav class="links nav links-inline"><span hreflang="ar"
                                data-drupal-link-query="{&quot;destination&quot;:&quot;\/en&quot;}"
                                data-drupal-link-system-path="user/login" class="ar nav-link"><a
                                    href="../../ar/user/login92c7.html?destination=/en" class="language-link"
                                    hreflang="ar" data-drupal-link-query="{&quot;destination&quot;:&quot;\/en&quot;}"
                                    data-drupal-link-system-path="user/login"><svg width="1em" height="1em"
                                        viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539a8.372 8.372 0 0 1-1.198-.49 7.01 7.01 0 0 1 2.276-1.52 6.7 6.7 0 0 0-.597.932 8.854 8.854 0 0 0-.48 1.079zM3.509 7.5H1.017A6.964 6.964 0 0 1 2.38 3.825c.47.258.995.482 1.565.667A13.4 13.4 0 0 0 3.508 7.5zm1.4-2.741c.808.187 1.681.301 2.591.332V7.5H4.51c.035-.987.176-1.914.399-2.741zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5H7.5v2.409c-.91.03-1.783.145-2.591.332a12.343 12.343 0 0 1-.4-2.741zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696A12.63 12.63 0 0 1 7.5 11.91v3.014c-.67-.204-1.335-.82-1.887-1.855a7.776 7.776 0 0 1-.395-.872zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964a9.083 9.083 0 0 0-1.565.667A6.963 6.963 0 0 1 1.018 8.5h2.49a13.36 13.36 0 0 0 .437 3.008zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909c.81.03 1.577.13 2.282.287-.12.312-.252.604-.395.872-.552 1.035-1.218 1.65-1.887 1.855V11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5h-2.49a13.361 13.361 0 0 0-.437-3.008 9.123 9.123 0 0 0 1.565-.667A6.963 6.963 0 0 1 14.982 7.5zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z" />
                                    </svg> عربي</a></span></nav>

                    </div>
                </div>
                <div id="block-searchlink" class="block block-ps-misc block-search-link">


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
                <div id="block-requestdemoblock" class="primary-button block block-ps-misc block-request-demo-block">


                    <div class="content">
                        <div class="request-demo-block text-align-center"><a href="../rfq.html"
                                class="btn btn-mini btn-primary">Send an RFQ</a></div>
                    </div>
                </div>


            </div>
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
                                <a href="{{ route('suppliers') }}" class="nav-link nav-link--en-supplier"
                                    data-drupal-link-system-path="node/9349">Suppliers</a>
                            </li>
                            <li class="nav-item menu-item--expanded dropdown">
                                <a href="../product.html" class="nav-link dropdown-toggle nav-link--en-product"
                                    data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"
                                    data-drupal-link-system-path="node/9350">Products</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="../product.html" class="nav-link--en-product"
                                            data-drupal-link-system-path="node/9350">Products</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="../service.html" class="nav-link--en-service"
                                            data-drupal-link-system-path="node/9352">Services</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="../brand.html" class="nav-link--en-brand"
                                            data-drupal-link-system-path="node/9351">Brands</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="../approvals.html" class="nav-link--approver">Approvals</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="nav-item">
                                <a href="../media/blogs.html" class="nav-link nav-link--en-media-blogs"
                                    data-drupal-link-system-path="node/9345">Media</a>
                            </li>
                            <li class="nav-item">
                                <a href="../pricing.html" class="nav-link nav-link--en-pricing"
                                    data-drupal-link-system-path="node/12825">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="../about-us.html" class="nav-link nav-link--en-about-us"
                                    data-drupal-link-system-path="node/9348">About us</a>
                            </li>
                            <li class="nav-item">
                                <a href="../contact-us.html" class="nav-link nav-link--en-contact-us"
                                    data-drupal-link-system-path="node/9343">Contact us</a>
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
                    <nav role="navigation" aria-labelledby="block-useraccountmenu-menu" id="block-useraccountmenu"
                        class="d-lg-none secondary-user block block-menu navigation menu--account">

                        <h2 class="sr-only" id="block-useraccountmenu-menu">User account menu</h2>



                        <ul block="block-useraccountmenu" class="clearfix nav navbar-nav">
                            <li class="nav-item menu-item--expanded active dropdown">
                                <a href="login.html" class="nav-link active dropdown-toggle  nav-link--en-user-login"
                                    data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><svg
                                        viewBox="0 0 22 22" height="22" width="22"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill-rule="evenodd" fill="none">
                                            <g fill="currentColor">
                                                <path transform="translate(-855 -37) translate(855 37)"
                                                    d="M11.001.165C7.747.165 5.096 2.783 5.096 6c0 1.559.461 3.509 1.414 5.128.283.48.615.934.995 1.335-.03.232-.078.418-.131.536-.064.142-.108.17-.15.186-.597.223-2.205.351-3.723.82-1.52.47-3.078 1.397-3.49 3.29-.037.173.021.353.154.472 5.971 5.332 15.699 5.332 21.67 0 .133-.119.191-.299.154-.471-.412-1.894-1.97-2.821-3.49-3.29-1.518-.47-3.126-.599-3.72-.821h-.001c-.08-.03-.129-.07-.195-.198-.054-.103-.103-.264-.139-.47.402-.414.75-.887 1.046-1.389.953-1.62 1.414-3.57 1.414-5.128 0-3.218-2.648-5.836-5.903-5.836zm0 .989c2.715 0 4.903 2.163 4.903 4.847 0 1.36-.433 3.195-1.278 4.631-.845 1.437-2.034 2.446-3.625 2.446-1.591 0-2.781-1.01-3.626-2.446C6.53 9.196 6.096 7.36 6.096 6.001c0-2.684 2.191-4.847 4.905-4.847zM8.362 13.21c.749.529 1.63.856 2.64.856.991 0 1.86-.317 2.6-.83.027.07.057.137.091.203.15.289.402.546.73.67.94.352 2.414.418 3.778.84 1.277.395 2.344 1 2.738 2.28-5.512 4.71-14.366 4.71-19.878 0 .394-1.28 1.461-1.885 2.738-2.28 1.365-.422 2.84-.488 3.78-.84h.002c.337-.128.572-.409.706-.707.028-.062.053-.126.075-.191z" />
                                            </g>
                                        </g>
                                    </svg> Log in</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="{{ route('register') }}" class="nav-link--en-user-register"
                                            data-drupal-link-system-path="user/register">Register</a>
                                    </li>
                                    <li class="dropdown-item active">
                                        <a href="{{ route('login') }}"
                                            class="active nav-link--en-user-login"
                                            data-drupal-link-system-path="user/login">Log in</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
    </nav>
</header>