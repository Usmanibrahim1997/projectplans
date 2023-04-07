@extends('frontend.layout.user_layout')
@section('contents')
    <div id="main-wrapper" class="layout-main-wrapper clearfix">
        <div id="main">
            <div class="row-offcanvas row-offcanvas-left clearfix">
                <main class="main-content">
                    <section class="section">
                        <a id="main-content" tabindex="-1"></a>
                        <div id="block-ps-new-content" class="block block-system block-system-main-block">

                            <div class="content">
                                <article data-history-node-id="9349" role="article" about="/en/supplier"
                                    class="node node--type-landing-page node--view-mode-full clearfix">
                                    <header>
                                    </header>
                                    <div class="node__content clearfix">
                                        <div class="layout layout--onecol">
                                            <div class="layout__region layout__region--content">
                                                <div
                                                    class="block block-block-content block-block-content6b05bb87-45ab-4319-86e0-994b9e8199ca">

                                                    <div class="content">
                                                        <div
                                                            class="block-content block-content--type-basic block-content--view-mode-background-image ds-1col clearfix">

                                                            <div
                                                                class="field field--name-field-bac field--type-entity-reference field--label-hidden field__item">
                                                                <div>

                                                                    <div
                                                                        class="field field--name-field-media-image field--type-image field--label-visually_hidden">
                                                                        <div class="field__label visually-hidden">Image
                                                                        </div>
                                                                        <div class="field__item">
                                                                            <picture>
                                                                                <source
                                                                                    srcset="{{ asset('assets/image/service_bg.jpg') }}"
                                                                                    media="all and (min-width: 75em)"
                                                                                    type="image/jpeg" />
                                                                                <source
                                                                                    srcset="{{ asset('assets/image/service_bg.jpg') }}"
                                                                                    media="all and (min-width: 62em) and (max-width: 74.99em)"
                                                                                    type="image/jpeg" />
                                                                                <source
                                                                                    srcset="{{ asset('assets/image/service_bg.jpg') }}"
                                                                                    media="all and (min-width: 48em) and (max-width: 61.99em)"
                                                                                    type="image/jpeg" />
                                                                                <source
                                                                                    srcset="{{ asset('assets/image/service_bg.jpg') }}"
                                                                                    media="all and (min-width: 34em) and (max-width: 47.99em)"
                                                                                    type="image/jpeg" />
                                                                                <img src="../../cdn.projectsuppliers.net/s3fs-public/styles/basic_background_block_small/public/2020-12/workersea5f.jpg?h=d6c35962&amp;itok=mGQ5EJg2"
                                                                                    alt="workers" typeof="foaf:Image" />

                                                                            </picture>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="basic-body">

                                                                <h1><strong>Suppliers</strong></h1>

                                                                <p>Suppliers for the Civil, Electrical and Mechanical
                                                                    Sectors. All you need in the construction world. With
                                                                    the great advanced search tool that guarantees that you
                                                                    will reach the needed items easily! Search by product,
                                                                    company, service, brand or approval all in one place,
                                                                    Project Suppliers Platform.</p>



                                                            </div>



                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="block block-ps-company block-ps-company-form-block">


                                                    <div class="container content">

                                                        <form class="ps-company-search-form"
                                                            data-drupal-selector="ps-company-search-form"
                                                            action="https://projectsuppliers.net/en/supplier" method="post"
                                                            id="ps-company-search-form" accept-charset="UTF-8">
                                                            <fieldset
                                                                class="advanced_search_form_filters js-form-item form-item js-form-wrapper form-group"
                                                                data-drupal-selector="edit-filters-container"
                                                                id="edit-filters-container">
                                                                <legend>
                                                                    <span class="fieldset-legend"></span>
                                                                </legend>
                                                                <div class="fieldset-wrapper">




                                                                    <fieldset
                                                                        class="js-form-item js-form-type-textfield form-type-textfield js-form-item-company form-item-company form-group">
                                                                        <label for="edit-company">Supplier</label>
                                                                        <input
                                                                            class="autosubmit-field form-autocomplete form-text form-control"
                                                                            data-drupal-selector="edit-company"
                                                                            data-autocomplete-path="/en/admin/ps_company/autocomplete/ps_company_search"
                                                                            type="text" id="edit-company" name="company"
                                                                            value="" size="60" maxlength="128" />

                                                                    </fieldset>
                                                                    <input data-drupal-selector="edit-company-value"
                                                                        type="hidden" name="company_value" value=""
                                                                        class="form-control" />




                                                                    <fieldset
                                                                        class="js-form-item js-form-type-textfield form-type-textfield js-form-item-product form-item-product form-group">
                                                                        <label for="edit-product">Product</label>
                                                                        <input
                                                                            class="autosubmit-field form-autocomplete form-text form-control"
                                                                            data-drupal-selector="edit-product"
                                                                            data-autocomplete-path="/en/admin/ps_company/autocomplete/product_search"
                                                                            type="text" id="edit-product" name="product"
                                                                            value="" size="60" maxlength="128"
                                                                            data-drupal-states="{&quot;enabled&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;&quot;}}}" />

                                                                    </fieldset>
                                                                    <input data-drupal-selector="edit-product-value"
                                                                        type="hidden" name="product_value" value=""
                                                                        class="form-control" />




                                                                    <fieldset
                                                                        class="js-form-item js-form-type-textfield form-type-textfield js-form-item-brand form-item-brand form-group">
                                                                        <label for="edit-brand">Brand</label>
                                                                        <input
                                                                            class="autosubmit-field form-autocomplete form-text form-control"
                                                                            data-drupal-selector="edit-brand"
                                                                            data-autocomplete-path="/en/admin/ps_company/autocomplete/brand_search"
                                                                            type="text" id="edit-brand" name="brand"
                                                                            value="" size="60" maxlength="128"
                                                                            data-drupal-states="{&quot;enabled&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;&quot;}}}" />

                                                                    </fieldset>
                                                                    <input data-drupal-selector="edit-brand-value"
                                                                        type="hidden" name="brand_value" value=""
                                                                        class="form-control" />




                                                                    <fieldset
                                                                        class="js-form-item js-form-type-textfield form-type-textfield js-form-item-approver form-item-approver form-group">
                                                                        <label for="edit-approver">Approval</label>
                                                                        <input
                                                                            class="autosubmit-field form-autocomplete form-text form-control"
                                                                            data-drupal-selector="edit-approver"
                                                                            data-autocomplete-path="/en/admin/ps_company/autocomplete/approver_search"
                                                                            type="text" id="edit-approver"
                                                                            name="approver" value="" size="60"
                                                                            maxlength="128"
                                                                            data-drupal-states="{&quot;enabled&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;&quot;}},&quot;0&quot;:0}" />

                                                                    </fieldset>
                                                                    <input data-drupal-selector="edit-approver-value"
                                                                        type="hidden" name="approver_value"
                                                                        value="" class="form-control" />




                                                                    <fieldset
                                                                        class="js-form-item js-form-type-textfield form-type-textfield js-form-item-service form-item-service form-group">
                                                                        <label for="edit-service">Service</label>
                                                                        <input
                                                                            class="autosubmit-field form-autocomplete form-text form-control"
                                                                            data-drupal-selector="edit-service"
                                                                            data-autocomplete-path="/en/admin/ps_company/autocomplete/service_search"
                                                                            type="text" id="edit-service"
                                                                            name="service" value="" size="60"
                                                                            maxlength="128"
                                                                            data-drupal-states="{&quot;enabled&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;&quot;}}}" />

                                                                    </fieldset>
                                                                    <input data-drupal-selector="edit-service-value"
                                                                        type="hidden" name="service_value"
                                                                        value="" class="form-control" />

                                                                </div>
                                                            </fieldset>
                                                            <div id="results-container">
                                                                <div data-drupal-selector="edit-results-container"
                                                                    id="edit-results-container"
                                                                    class="js-form-wrapper form-group">
                                                                    <div class="search-result-container">
                                                                        <div><b>860 results found.</b></div></br>
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-6">

                                                                                <div class="ajax-result">
                                                                                    <div class="logo-wrapper">

                                                                                        <a
                                                                                            href="#"><img
                                                                                                loading="lazy"
                                                                                                src="{{ asset('assets/image/pro_logo.jpg') }}"
                                                                                                width="100"
                                                                                                height="27"
                                                                                                alt=""
                                                                                                typeof="foaf:Image"
                                                                                                class="image-style-_00xa" />

                                                                                        </a>



                                                                                    </div>


                                                                                    <div class="body-wrapper">

                                                                                        <div class="name-badge-wrapper">

                                                                                            <div
                                                                                                class="field field--name-company-subscription-badge field--type-svg-image-field field--label-hidden field__item">
                                                                                                
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="30"
                                                                                                    height="30"
                                                                                                    viewBox="0 0 23.361 15.784">
                                                                                                    <defs>
                                                                                                        <style>
                                                                                                            .a {
                                                                                                                fill: currentColor;
                                                                                                            }
                                                                                                        </style>
                                                                                                    </defs>
                                                                                                    <g
                                                                                                        transform="translate(0)">
                                                                                                        <path
                                                                                                            class="a"
                                                                                                            d="M.932,12.1.007,4.277a.917.917,0,0,1,.469-.916.928.928,0,0,1,1.029.088l4.284,3.4A1.391,1.391,0,0,0,7.9,6.393l2.96-5.86A.912.912,0,0,1,12.5.506l2.96,5.878a1.392,1.392,0,0,0,2.109.46L21.856,3.45a.925.925,0,0,1,1.5.818l-.925,7.791A4.154,4.154,0,0,1,18.3,15.738H5.086l-.019.046H5.061A4.145,4.145,0,0,1,.932,12.1Z"
                                                                                                            transform="translate(0)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>

                                                                                            </div>

                                                                                            <div
                                                                                                class="field field--name-company-name field--type-ds field--label-hidden field__item">
                                                                                                <h4>
                                                                                                    <a href="supplier/abdulla-al-mishal-contracting-establishment-amce.html"
                                                                                                        hreflang="en">Abdulla
                                                                                                        Al Mis&#039;hal
                                                                                                        Contracting
                                                                                                        Establishment
                                                                                                        AMCE</a>
                                                                                                </h4>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div
                                                                                            class="field field--name-request-button field--type-ds field--label-hidden field__item">
                                                                                            <div><a href="rfq373f.html?s=957&amp;t=Abdulla%20Al%20Mis'hal%20Contracting%20Establishment%20AMCE"
                                                                                                    class="btn btn-mini btn-outline-secondary">Request
                                                                                                    Quotation Now</a></div>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en/supplier/abdulla-al-mishal-contracting-establishment-amce"
                                                                                            data-a2a-title="Abdulla Al Mis&#039;hal Contracting Establishment AMCE"><span
                                                                                                class="a2a_text">Share<span
                                                                                                    class="colon">:</span></span>
                                                                                            <div class="a2a_row"><a
                                                                                                    class="a2a_dd"
                                                                                                    href="https://www.addtoany.com/share"><svg
                                                                                                        width="1em"
                                                                                                        height="1em"
                                                                                                        viewBox="0 0 16 16"
                                                                                                        class="bi bi-share"
                                                                                                        fill="currentColor"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                                                                                    </svg></a><a
                                                                                                    class="a2a_button a2a_button_facebook"><i
                                                                                                        class="fab fa-facebook-f"></i></a><a
                                                                                                    class="a2a_button a2a_button_twitter"><i
                                                                                                        class="fab fa-twitter"></i></a><a
                                                                                                    class="a2a_button a2a_button_email"><i
                                                                                                        class="fas fa-envelope"></i></a><a
                                                                                                    class="a2a_button a2a_button_linkedin"><i
                                                                                                        class="fab fa-linkedin-in"></i></a><a
                                                                                                    class="a2a_button a2a_button_whatsapp"><i
                                                                                                        class="fab fa-whatsapp"></i></a><a
                                                                                                    class="a2a_button a2a_button_copy_link"><i
                                                                                                        class="fas fa-link"></i></a>
                                                                                            </div>
                                                                                        </span>
                                                                                    </div>

                                                                                </div>

                                                                            </div>



                                                                            <div class="col-12 col-md-6">

                                                                                <div class="ajax-result">
                                                                                    <div class="logo-wrapper">

                                                                                        <a
                                                                                            href="supplier/advanced-elements-contracting-company-aeco.html"><img
                                                                                                loading="lazy"
                                                                                                src="{{ asset('assets/image/pro_logo1.jpg') }}"
                                                                                                width="100"
                                                                                                height="25"
                                                                                                alt=""
                                                                                                typeof="foaf:Image"
                                                                                                class="image-style-_00xa" />

                                                                                        </a>



                                                                                    </div>


                                                                                    <div class="body-wrapper">

                                                                                        <div class="name-badge-wrapper">

                                                                                            <div
                                                                                                class="field field--name-company-subscription-badge field--type-svg-image-field field--label-hidden field__item">
                                                                                            
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="30"
                                                                                                    height="30"
                                                                                                    viewBox="0 0 23.361 15.784">
                                                                                                    <defs>
                                                                                                        <style>
                                                                                                            .a {
                                                                                                                fill: currentColor;
                                                                                                            }
                                                                                                        </style>
                                                                                                    </defs>
                                                                                                    <g
                                                                                                        transform="translate(0)">
                                                                                                        <path
                                                                                                            class="a"
                                                                                                            d="M.932,12.1.007,4.277a.917.917,0,0,1,.469-.916.928.928,0,0,1,1.029.088l4.284,3.4A1.391,1.391,0,0,0,7.9,6.393l2.96-5.86A.912.912,0,0,1,12.5.506l2.96,5.878a1.392,1.392,0,0,0,2.109.46L21.856,3.45a.925.925,0,0,1,1.5.818l-.925,7.791A4.154,4.154,0,0,1,18.3,15.738H5.086l-.019.046H5.061A4.145,4.145,0,0,1,.932,12.1Z"
                                                                                                            transform="translate(0)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>

                                                                                            </div>

                                                                                            <div
                                                                                                class="field field--name-company-name field--type-ds field--label-hidden field__item">
                                                                                                <h4>
                                                                                                    <a href="supplier/advanced-elements-contracting-company-aeco.html"
                                                                                                        hreflang="en">Advanced
                                                                                                        Elements Contracting
                                                                                                        Company AECO</a>
                                                                                                </h4>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div
                                                                                            class="field field--name-request-button field--type-ds field--label-hidden field__item">
                                                                                            <div><a href="rfqd9ac.html?s=1119&amp;t=Advanced%20Elements%20Contracting%20Company%20AECO"
                                                                                                    class="btn btn-mini btn-outline-secondary">Request
                                                                                                    Quotation Now</a></div>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en/supplier/advanced-elements-contracting-company-aeco"
                                                                                            data-a2a-title="Advanced Elements Contracting Company AECO"><span
                                                                                                class="a2a_text">Share<span
                                                                                                    class="colon">:</span></span>
                                                                                            <div class="a2a_row"><a
                                                                                                    class="a2a_dd"
                                                                                                    href="https://www.addtoany.com/share"><svg
                                                                                                        width="1em"
                                                                                                        height="1em"
                                                                                                        viewBox="0 0 16 16"
                                                                                                        class="bi bi-share"
                                                                                                        fill="currentColor"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                                                                                    </svg></a><a
                                                                                                    class="a2a_button a2a_button_facebook"><i
                                                                                                        class="fab fa-facebook-f"></i></a><a
                                                                                                    class="a2a_button a2a_button_twitter"><i
                                                                                                        class="fab fa-twitter"></i></a><a
                                                                                                    class="a2a_button a2a_button_email"><i
                                                                                                        class="fas fa-envelope"></i></a><a
                                                                                                    class="a2a_button a2a_button_linkedin"><i
                                                                                                        class="fab fa-linkedin-in"></i></a><a
                                                                                                    class="a2a_button a2a_button_whatsapp"><i
                                                                                                        class="fab fa-whatsapp"></i></a><a
                                                                                                    class="a2a_button a2a_button_copy_link"><i
                                                                                                        class="fas fa-link"></i></a>
                                                                                            </div>
                                                                                        </span>
                                                                                    </div>

                                                                                </div>

                                                                            </div>



                                                                            <div class="col-12 col-md-6">

                                                                                <div class="ajax-result">
                                                                                    <div class="logo-wrapper">

                                                                                        <a
                                                                                            href="supplier/adwa-al-fann-art-light.html"><img
                                                                                                loading="lazy"
                                                                                                src="{{ asset('assets/image/pro_logo2.png') }}"
                                                                                                width="100"
                                                                                                height="62"
                                                                                                alt=""
                                                                                                typeof="foaf:Image"
                                                                                                class="image-style-_00xa" />

                                                                                        </a>



                                                                                    </div>


                                                                                    <div class="body-wrapper">

                                                                                        <div class="name-badge-wrapper">

                                                                                            <div
                                                                                                class="field field--name-company-subscription-badge field--type-svg-image-field field--label-hidden field__item">
                                                                                                
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="30"
                                                                                                    height="30"
                                                                                                    viewBox="0 0 23.361 15.784">
                                                                                                    <defs>
                                                                                                        <style>
                                                                                                            .a {
                                                                                                                fill: currentColor;
                                                                                                            }
                                                                                                        </style>
                                                                                                    </defs>
                                                                                                    <g
                                                                                                        transform="translate(0)">
                                                                                                        <path
                                                                                                            class="a"
                                                                                                            d="M.932,12.1.007,4.277a.917.917,0,0,1,.469-.916.928.928,0,0,1,1.029.088l4.284,3.4A1.391,1.391,0,0,0,7.9,6.393l2.96-5.86A.912.912,0,0,1,12.5.506l2.96,5.878a1.392,1.392,0,0,0,2.109.46L21.856,3.45a.925.925,0,0,1,1.5.818l-.925,7.791A4.154,4.154,0,0,1,18.3,15.738H5.086l-.019.046H5.061A4.145,4.145,0,0,1,.932,12.1Z"
                                                                                                            transform="translate(0)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>

                                                                                            </div>

                                                                                            <div
                                                                                                class="field field--name-company-name field--type-ds field--label-hidden field__item">
                                                                                                <h4>
                                                                                                    <a href="supplier/adwa-al-fann-art-light.html"
                                                                                                        hreflang="en">Adwa&#039;
                                                                                                        Al Fann (Art
                                                                                                        Light)</a>
                                                                                                </h4>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div
                                                                                            class="field field--name-request-button field--type-ds field--label-hidden field__item">
                                                                                            <div><a href="rfqa557.html?s=1068&amp;t=Adwa'%20Al%20Fann%20(Art%20Light)"
                                                                                                    class="btn btn-mini btn-outline-secondary">Request
                                                                                                    Quotation Now</a></div>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en/supplier/adwa-al-fann-art-light"
                                                                                            data-a2a-title="Adwa&#039; Al Fann (Art Light)"><span
                                                                                                class="a2a_text">Share<span
                                                                                                    class="colon">:</span></span>
                                                                                            <div class="a2a_row"><a
                                                                                                    class="a2a_dd"
                                                                                                    href="https://www.addtoany.com/share"><svg
                                                                                                        width="1em"
                                                                                                        height="1em"
                                                                                                        viewBox="0 0 16 16"
                                                                                                        class="bi bi-share"
                                                                                                        fill="currentColor"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                                                                                    </svg></a><a
                                                                                                    class="a2a_button a2a_button_facebook"><i
                                                                                                        class="fab fa-facebook-f"></i></a><a
                                                                                                    class="a2a_button a2a_button_twitter"><i
                                                                                                        class="fab fa-twitter"></i></a><a
                                                                                                    class="a2a_button a2a_button_email"><i
                                                                                                        class="fas fa-envelope"></i></a><a
                                                                                                    class="a2a_button a2a_button_linkedin"><i
                                                                                                        class="fab fa-linkedin-in"></i></a><a
                                                                                                    class="a2a_button a2a_button_whatsapp"><i
                                                                                                        class="fab fa-whatsapp"></i></a><a
                                                                                                    class="a2a_button a2a_button_copy_link"><i
                                                                                                        class="fas fa-link"></i></a>
                                                                                            </div>
                                                                                        </span>
                                                                                    </div>

                                                                                </div>

                                                                            </div>



                                                                            <div class="col-12 col-md-6">

                                                                                <div class="ajax-result">
                                                                                    <div class="logo-wrapper">

                                                                                        <a
                                                                                            href="supplier/al-amana-technology-factory-electrical-industries.html"><img
                                                                                                loading="lazy"
                                                                                                src="{{ asset('assets/image/pro_logo3.jpg') }}"
                                                                                                width="100"
                                                                                                height="53"
                                                                                                alt=""
                                                                                                typeof="foaf:Image"
                                                                                                class="image-style-_00xa" />

                                                                                        </a>



                                                                                    </div>


                                                                                    <div class="body-wrapper">

                                                                                        <div class="name-badge-wrapper">

                                                                                            <div
                                                                                                class="field field--name-company-subscription-badge field--type-svg-image-field field--label-hidden field__item">
                                                                                                
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="30"
                                                                                                    height="30"
                                                                                                    viewBox="0 0 23.361 15.784">
                                                                                                    <defs>
                                                                                                        <style>
                                                                                                            .a {
                                                                                                                fill: currentColor;
                                                                                                            }
                                                                                                        </style>
                                                                                                    </defs>
                                                                                                    <g
                                                                                                        transform="translate(0)">
                                                                                                        <path
                                                                                                            class="a"
                                                                                                            d="M.932,12.1.007,4.277a.917.917,0,0,1,.469-.916.928.928,0,0,1,1.029.088l4.284,3.4A1.391,1.391,0,0,0,7.9,6.393l2.96-5.86A.912.912,0,0,1,12.5.506l2.96,5.878a1.392,1.392,0,0,0,2.109.46L21.856,3.45a.925.925,0,0,1,1.5.818l-.925,7.791A4.154,4.154,0,0,1,18.3,15.738H5.086l-.019.046H5.061A4.145,4.145,0,0,1,.932,12.1Z"
                                                                                                            transform="translate(0)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>

                                                                                            </div>

                                                                                            <div
                                                                                                class="field field--name-company-name field--type-ds field--label-hidden field__item">
                                                                                                <h4>
                                                                                                    <a href="supplier/al-amana-technology-factory-electrical-industries.html"
                                                                                                        hreflang="en">Al
                                                                                                        Amana Technology
                                                                                                        Factory for
                                                                                                        Electrical
                                                                                                        Industries</a>
                                                                                                </h4>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div
                                                                                            class="field field--name-request-button field--type-ds field--label-hidden field__item">
                                                                                            <div><a href="rfq9207.html?s=665&amp;t=Al%20Amana%20Technology%20Factory%20for%20Electrical%20Industries"
                                                                                                    class="btn btn-mini btn-outline-secondary">Request
                                                                                                    Quotation Now</a></div>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en/supplier/al-amana-technology-factory-electrical-industries"
                                                                                            data-a2a-title="Al Amana Technology Factory for Electrical Industries"><span
                                                                                                class="a2a_text">Share<span
                                                                                                    class="colon">:</span></span>
                                                                                            <div class="a2a_row"><a
                                                                                                    class="a2a_dd"
                                                                                                    href="https://www.addtoany.com/share"><svg
                                                                                                        width="1em"
                                                                                                        height="1em"
                                                                                                        viewBox="0 0 16 16"
                                                                                                        class="bi bi-share"
                                                                                                        fill="currentColor"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                                                                                    </svg></a><a
                                                                                                    class="a2a_button a2a_button_facebook"><i
                                                                                                        class="fab fa-facebook-f"></i></a><a
                                                                                                    class="a2a_button a2a_button_twitter"><i
                                                                                                        class="fab fa-twitter"></i></a><a
                                                                                                    class="a2a_button a2a_button_email"><i
                                                                                                        class="fas fa-envelope"></i></a><a
                                                                                                    class="a2a_button a2a_button_linkedin"><i
                                                                                                        class="fab fa-linkedin-in"></i></a><a
                                                                                                    class="a2a_button a2a_button_whatsapp"><i
                                                                                                        class="fab fa-whatsapp"></i></a><a
                                                                                                    class="a2a_button a2a_button_copy_link"><i
                                                                                                        class="fas fa-link"></i></a>
                                                                                            </div>
                                                                                        </span>
                                                                                    </div>

                                                                                </div>

                                                                            </div>



                                                                            <div class="col-12 col-md-6">

                                                                                <div class="ajax-result">
                                                                                    <div class="logo-wrapper">

                                                                                        <a
                                                                                            href="supplier/al-assas-specialized-company-limited.html"><img
                                                                                                loading="lazy"
                                                                                                src="{{ asset('assets/image/pro_logo4.png') }}"
                                                                                                width="100"
                                                                                                height="60"
                                                                                                alt=""
                                                                                                typeof="foaf:Image"
                                                                                                class="image-style-_00xa" />

                                                                                        </a>



                                                                                    </div>


                                                                                    <div class="body-wrapper">

                                                                                        <div class="name-badge-wrapper">

                                                                                            <div
                                                                                                class="field field--name-company-subscription-badge field--type-svg-image-field field--label-hidden field__item">
                                                                                                
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="30"
                                                                                                    height="30"
                                                                                                    viewBox="0 0 23.361 15.784">
                                                                                                    <defs>
                                                                                                        <style>
                                                                                                            .a {
                                                                                                                fill: currentColor;
                                                                                                            }
                                                                                                        </style>
                                                                                                    </defs>
                                                                                                    <g
                                                                                                        transform="translate(0)">
                                                                                                        <path
                                                                                                            class="a"
                                                                                                            d="M.932,12.1.007,4.277a.917.917,0,0,1,.469-.916.928.928,0,0,1,1.029.088l4.284,3.4A1.391,1.391,0,0,0,7.9,6.393l2.96-5.86A.912.912,0,0,1,12.5.506l2.96,5.878a1.392,1.392,0,0,0,2.109.46L21.856,3.45a.925.925,0,0,1,1.5.818l-.925,7.791A4.154,4.154,0,0,1,18.3,15.738H5.086l-.019.046H5.061A4.145,4.145,0,0,1,.932,12.1Z"
                                                                                                            transform="translate(0)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>

                                                                                            </div>

                                                                                            <div
                                                                                                class="field field--name-company-name field--type-ds field--label-hidden field__item">
                                                                                                <h4>
                                                                                                    <a href="supplier/al-assas-specialized-company-limited.html"
                                                                                                        hreflang="en">Al
                                                                                                        Assas Specialized
                                                                                                        Company Limited</a>
                                                                                                </h4>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div
                                                                                            class="field field--name-request-button field--type-ds field--label-hidden field__item">
                                                                                            <div><a href="rfq8f39.html?s=431&amp;t=Al%20Assas%20Specialized%20Company%20Limited"
                                                                                                    class="btn btn-mini btn-outline-secondary">Request
                                                                                                    Quotation Now</a></div>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en/supplier/al-assas-specialized-company-limited"
                                                                                            data-a2a-title="Al Assas Specialized Company Limited"><span
                                                                                                class="a2a_text">Share<span
                                                                                                    class="colon">:</span></span>
                                                                                            <div class="a2a_row"><a
                                                                                                    class="a2a_dd"
                                                                                                    href="https://www.addtoany.com/share"><svg
                                                                                                        width="1em"
                                                                                                        height="1em"
                                                                                                        viewBox="0 0 16 16"
                                                                                                        class="bi bi-share"
                                                                                                        fill="currentColor"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                                                                                    </svg></a><a
                                                                                                    class="a2a_button a2a_button_facebook"><i
                                                                                                        class="fab fa-facebook-f"></i></a><a
                                                                                                    class="a2a_button a2a_button_twitter"><i
                                                                                                        class="fab fa-twitter"></i></a><a
                                                                                                    class="a2a_button a2a_button_email"><i
                                                                                                        class="fas fa-envelope"></i></a><a
                                                                                                    class="a2a_button a2a_button_linkedin"><i
                                                                                                        class="fab fa-linkedin-in"></i></a><a
                                                                                                    class="a2a_button a2a_button_whatsapp"><i
                                                                                                        class="fab fa-whatsapp"></i></a><a
                                                                                                    class="a2a_button a2a_button_copy_link"><i
                                                                                                        class="fas fa-link"></i></a>
                                                                                            </div>
                                                                                        </span>
                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                            <div class="col-12 col-md-6">

                                                                                <div class="ajax-result">
                                                                                    <div class="logo-wrapper">

                                                                                        <a
                                                                                            href="supplier/al-assas-specialized-company-limited.html"><img
                                                                                                loading="lazy"
                                                                                                src="{{ asset('assets/image/pro_logo5.jpg') }}"
                                                                                                width="100"
                                                                                                height="60"
                                                                                                alt=""
                                                                                                typeof="foaf:Image"
                                                                                                class="image-style-_00xa" />

                                                                                        </a>



                                                                                    </div>


                                                                                    <div class="body-wrapper">

                                                                                        <div class="name-badge-wrapper">

                                                                                            <div
                                                                                                class="field field--name-company-subscription-badge field--type-svg-image-field field--label-hidden field__item">
                                                                                                
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="30"
                                                                                                    height="30"
                                                                                                    viewBox="0 0 23.361 15.784">
                                                                                                    <defs>
                                                                                                        <style>
                                                                                                            .a {
                                                                                                                fill: currentColor;
                                                                                                            }
                                                                                                        </style>
                                                                                                    </defs>
                                                                                                    <g
                                                                                                        transform="translate(0)">
                                                                                                        <path
                                                                                                            class="a"
                                                                                                            d="M.932,12.1.007,4.277a.917.917,0,0,1,.469-.916.928.928,0,0,1,1.029.088l4.284,3.4A1.391,1.391,0,0,0,7.9,6.393l2.96-5.86A.912.912,0,0,1,12.5.506l2.96,5.878a1.392,1.392,0,0,0,2.109.46L21.856,3.45a.925.925,0,0,1,1.5.818l-.925,7.791A4.154,4.154,0,0,1,18.3,15.738H5.086l-.019.046H5.061A4.145,4.145,0,0,1,.932,12.1Z"
                                                                                                            transform="translate(0)">
                                                                                                        </path>
                                                                                                    </g>
                                                                                                </svg>

                                                                                            </div>

                                                                                            <div
                                                                                                class="field field--name-company-name field--type-ds field--label-hidden field__item">
                                                                                                <h4>
                                                                                                    <a href="supplier/al-assas-specialized-company-limited.html"
                                                                                                        hreflang="en">Al
                                                                                                        Assas Specialized
                                                                                                        Company Limited</a>
                                                                                                </h4>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div
                                                                                            class="field field--name-request-button field--type-ds field--label-hidden field__item">
                                                                                            <div><a href="rfq8f39.html?s=431&amp;t=Al%20Assas%20Specialized%20Company%20Limited"
                                                                                                    class="btn btn-mini btn-outline-secondary">Request
                                                                                                    Quotation Now</a></div>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en/supplier/al-assas-specialized-company-limited"
                                                                                            data-a2a-title="Al Assas Specialized Company Limited"><span
                                                                                                class="a2a_text">Share<span
                                                                                                    class="colon">:</span></span>
                                                                                            <div class="a2a_row"><a
                                                                                                    class="a2a_dd"
                                                                                                    href="https://www.addtoany.com/share"><svg
                                                                                                        width="1em"
                                                                                                        height="1em"
                                                                                                        viewBox="0 0 16 16"
                                                                                                        class="bi bi-share"
                                                                                                        fill="currentColor"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                                                                                    </svg></a><a
                                                                                                    class="a2a_button a2a_button_facebook"><i
                                                                                                        class="fab fa-facebook-f"></i></a><a
                                                                                                    class="a2a_button a2a_button_twitter"><i
                                                                                                        class="fab fa-twitter"></i></a><a
                                                                                                    class="a2a_button a2a_button_email"><i
                                                                                                        class="fas fa-envelope"></i></a><a
                                                                                                    class="a2a_button a2a_button_linkedin"><i
                                                                                                        class="fab fa-linkedin-in"></i></a><a
                                                                                                    class="a2a_button a2a_button_whatsapp"><i
                                                                                                        class="fab fa-whatsapp"></i></a><a
                                                                                                    class="a2a_button a2a_button_copy_link"><i
                                                                                                        class="fas fa-link"></i></a>
                                                                                            </div>
                                                                                        </span>
                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div id="results-pager">
                                                                        {{-- <nav aria-label="pagination-heading">
                                                                            <h4 id="pagination-heading" class="sr-only">
                                                                                Pagination</h4>
                                                                            <ul class="pagination js-pager__items">
                                                                                <li class="page-item active">
                                                                                    <span class="page-link">1</span>
                                                                                </li>
                                                                                <li class="page-item ">
                                                                                    <a href="supplier2679.html?page=1"
                                                                                        title=""
                                                                                        class="page-link">2</a>
                                                                                </li>
                                                                                <li class="page-item ">
                                                                                    <a href="supplier4658.html?page=2"
                                                                                        title=""
                                                                                        class="page-link">3</a>
                                                                                </li>
                                                                                <li class="page-item ">
                                                                                    <a href="supplier9ba9.html?page=3"
                                                                                        title=""
                                                                                        class="page-link">4</a>
                                                                                </li>
                                                                                <li class="page-item ">
                                                                                    <a href="supplierfdb0.html?page=4"
                                                                                        title=""
                                                                                        class="page-link">5</a>
                                                                                </li>
                                                                                <li class="page-item ">
                                                                                    <a href="supplieraf4d.html?page=5"
                                                                                        title=""
                                                                                        class="page-link">6</a>
                                                                                </li>
                                                                                <li class="page-item ">
                                                                                    <a href="supplierc575.html?page=6"
                                                                                        title=""
                                                                                        class="page-link">7</a>
                                                                                </li>
                                                                                <li class="page-item ">
                                                                                    <a href="supplier235c.html?page=7"
                                                                                        title=""
                                                                                        class="page-link">8</a>
                                                                                </li>
                                                                                <li class="page-item ">
                                                                                    <a href="supplierfdfa.html?page=8"
                                                                                        title=""
                                                                                        class="page-link">9</a>
                                                                                </li>
                                                                                <li class="page-item" role="presentation">
                                                                                    <span class="page-link">&hellip;</span>
                                                                                </li>
                                                                                <li class="pager__item--next">
                                                                                    <a href="supplier2679.html?page=1"
                                                                                        title="Go to next page"
                                                                                        rel="next" class="page-link">
                                                                                        <span aria-hidden="true">›</span>
                                                                                        <span class="sr-only">Next
                                                                                            page</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="page-item">
                                                                                    <a href="suppliercccc.html?page=85"
                                                                                        title="Go to last page"
                                                                                        class="page-link">
                                                                                        <span aria-hidden="true">»</span>
                                                                                        <span class="sr-only">Last
                                                                                            page</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </nav> --}}
                                                                    </div>
                                                                </div>
                                                            </div><input autocomplete="off"
                                                                data-drupal-selector="form-77iv86cfrnvkxrgvrqeqqwpaa4dk2upijekx5-ib3ri"
                                                                type="hidden" name="form_build_id"
                                                                value="form-77IV86CFrNvkXRGVRQEQqwpaA4dk2UPIJeKX5_IB3RI"
                                                                class="form-control" />
                                                            <input data-drupal-selector="edit-ps-company-search-form"
                                                                type="hidden" name="form_id"
                                                                value="ps_company_search_form" class="form-control" />

                                                        </form>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </article>

                            </div>
                        </div>


                    </section>
                </main>
            </div>
        </div>
    </div>
@endsection
