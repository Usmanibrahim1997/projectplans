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
                                <article data-history-node-id="9345" role="article" about="/en/media/blogs"
                                    class="node node--type-landing-page node--view-mode-full clearfix">
                                    <header>
                                    </header>
                                    <div class="node__content clearfix">
                                        <div class="layout layout--onecol">
                                            <div class="layout__region layout__region--content">
                                                <div
                                                    class="block block-block-content block-block-content1bfeaa8a-9f6d-42ac-acd3-e010808579f9">

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

                                                                <h1><strong>Media</strong></h1>
                                                                <p>The latest news about Project Suppliers and the
                                                                    construction world. The new inventions, techniques and
                                                                    all you need to know about the construction world.</p>


                                                            </div>



                                                        </div>


                                                    </div>
                                                </div>
                                                <nav role="navigation" aria-labelledby="-menu"
                                                    class="mb-3 mb-md-5 block block-menu navigation menu--media-navigation">

                                                    <h2 class="sr-only" id="-menu">Media Navigation</h2>



                                                    <ul class="clearfix nav">
                                                        <li class="nav-item">
                                                            <a href="news.html" class="nav-link nav-link--en-media-news"
                                                                data-drupal-link-system-path="node/9344">News</a>
                                                        </li>
                                                        <li class="nav-item menu-item--active-trail">
                                                            <a href="blogs.html"
                                                                class="is-active nav-link active nav-link--en-media-blogs"
                                                                data-drupal-link-system-path="node/9345">Blogs</a>
                                                        </li>
                                                    </ul>



                                                </nav>

                                                <div
                                                    class="views-element-container block block-views block-views-blockour-latest-block-2">


                                                    <div class="content">
                                                        <div>
                                                            <div
                                                                class="our-latest-wrapper container view view-our-latest view-id-our_latest view-display-id-block_2 js-view-dom-id-32c12e5dcd4a2cb66e4758f2cdf611c8a3dbb9297bb2d1042a6a433fee3e43c4">


                                                                <div class="view-filters">

                                                                    <form class="views-exposed-form"
                                                                        data-drupal-selector="views-exposed-form-our-latest-block-2"
                                                                        action="https://projectsuppliers.net/en/admin/blogger/content"
                                                                        method="get"
                                                                        id="views-exposed-form-our-latest-block-2"
                                                                        accept-charset="UTF-8">
                                                                        <div class="form-row">




                                                                            <fieldset
                                                                                class="js-form-item js-form-type-select form-type-select js-form-item-field-tags-target-id form-item-field-tags-target-id form-group">
                                                                                <label
                                                                                    for="edit-field-tags-target-id">Tags</label>

                                                                                {{-- <select
                                                                                    data-drupal-selector="edit-field-tags-target-id"
                                                                                    multiple="multiple"
                                                                                    name="field_tags_target_id[]"
                                                                                    id="edit-field-tags-target-id"
                                                                                    size="9"
                                                                                    class="form-select custom-select">
                                                                                    <option value="24"> أخطاء شائعة في
                                                                                        كتابة السيرة الذاتية </option>
                                                                                    <option value="31">#جمهور #تحديد
                                                                                        #تسويق #تسويق_رقمي #استهداف_جمهور
                                                                                    </option>
                                                                                    <option value="18">administrative
                                                                                        organization</option>
                                                                                    <option value="19">Administrative
                                                                                        Organization</option>
                                                                                    <option value="9">construction
                                                                                    </option>
                                                                                    <option value="26">CV writing
                                                                                        mistakes </option>
                                                                                    <option value="25">CV writing
                                                                                        mistakes </option>
                                                                                    <option value="27">CV writing
                                                                                        mistakes </option>
                                                                                    <option value="11">procurement
                                                                                    </option>
                                                                                    <option value="8">projectsuppliers
                                                                                    </option>
                                                                                    <option value="10">suppliers
                                                                                    </option>
                                                                                    <option value="4">supplychain
                                                                                    </option>
                                                                                    <option value="7">إدارة_المشاريع
                                                                                    </option>
                                                                                    <option value="13">الإنشاءات
                                                                                    </option>
                                                                                    <option value="16">التنظيم</option>
                                                                                    <option value="17">التنظيم الإداري
                                                                                    </option>
                                                                                    <option value="12">التوريدات
                                                                                    </option>
                                                                                    <option value="28">الجمهور المستهدف
                                                                                    </option>
                                                                                    <option value="29">السوق المستهدف
                                                                                    </option>
                                                                                    <option value="22">السيرة الذاتية
                                                                                    </option>
                                                                                    <option value="15">المشتريات
                                                                                    </option>
                                                                                    <option value="14">الموردون</option>
                                                                                    <option value="20">بروفايل شركة
                                                                                    </option>
                                                                                    <option value="21">بروفايل شركة
                                                                                        احترافي</option>
                                                                                    <option value="30">خطوات لتحديد
                                                                                        الجمهور المستهدف</option>
                                                                                    <option value="5">سلاسل_الإمداد
                                                                                    </option>
                                                                                    <option value="6">مشتريات</option>
                                                                                    <option value="23">مكونات السيرة
                                                                                        الذاتية</option>
                                                                                </select> --}}
                                                                            </fieldset>
                                                                            <div data-drupal-selector="edit-actions"
                                                                                class="form-actions js-form-wrapper form-group"
                                                                                id="edit-actions"><button
                                                                                    data-drupal-selector="edit-submit-our-latest"
                                                                                    type="submit"
                                                                                    id="edit-submit-our-latest"
                                                                                    value="Apply"
                                                                                    class="button js-form-submit form-submit btn btn-primary">Apply</button>
                                                                            </div>

                                                                        </div>

                                                                    </form>

                                                                </div>
                                                                <div class="view-content row no-gutters">
                                                                    <div id="views-bootstrap-our-latest-block-2"
                                                                        class="grid views-view-grid">
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="../../ar/media/blogs/%d9%83%d9%8a%d9%81-%d8%aa%d8%ad%d8%af%d8%af-%d8%ac%d9%85%d9%87%d9%88%d8%b1%d9%83-%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d9%87%d8%af%d9%81-%d8%a8%d9%86%d8%ac%d8%a7%d8%ad-%d9%81%d9%8a-6-%d8%ae%d8%b7%d9%88%d8%a7%d8%aa.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="ar">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    كيف تحدد جمهورك المستهدف
                                                                                                    بنجاح في 6 خطوات
                                                                                                </strong>
                                                                                            </h4>




                                                                                            سواء كنت قد بدأت نشاط التجاري
                                                                                            مؤخراً أو أنك تبحث عن تجديد
                                                                                            جهودك التسويقية ينبغي عليك وضع
                                                                                            نشاطك...




                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 1 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/ar/media/blogs/%D9%83%D9%8A%D9%81-%D8%AA%D8%AD%D8%AF%D8%AF-%D8%AC%D9%85%D9%87%D9%88%D8%B1%D9%83-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A8%D9%86%D8%AC%D8%A7%D8%AD-%D9%81%D9%8A-6-%D8%AE%D8%B7%D9%88%D8%A7%D8%AA"
                                                                                            data-a2a-title="كيف تحدد جمهورك المستهدف بنجاح في 6 خطوات"><span
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
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="blogs/7-common-cv-writing-mistakes-keep-you-out-any-job.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="en">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    7 common CV writing
                                                                                                    mistakes that keep you
                                                                                                    out of any job
                                                                                                </strong>
                                                                                            </h4>

                                                                                            Writing a CV or CV/Resume is the
                                                                                            best way for a person to
                                                                                            introduce himself and market his
                                                                                            skills and experiences among his
                                                                                            business managers, as it is a
                                                                                            detailed document that clarifies
                                                                                            the individual’s job experience
                                                                                            and academic career in a
                                                                                            professional way to obtain a job
                                                                                            opportunity.

                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 6 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en"
                                                                                            data-a2a-title="7 common CV writing mistakes that keep you out of any job"><span
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
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="../../ar/media/blogs/7-%d8%a3%d8%ae%d8%b7%d8%a7%d8%a1-%d8%b4%d8%a7%d8%a6%d8%b9%d8%a9-%d9%81%d9%8a-%d9%83%d8%aa%d8%a7%d8%a8%d8%a9-%d8%a7%d9%84%d8%b3%d9%8a%d8%b1%d8%a9-%d8%a7%d9%84%d8%b0%d8%a7%d8%aa%d9%8a%d8%a9-%d8%aa%d9%82%d8%b5%d9%8a%d9%83-%d9%85%d9%86-%d8%a3%d9%8a-%d8%a7%d9%84%d9%88%d8%b8%d9%8a%d9%81%d8%a9.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="ar">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    7 أخطاء شائعة في كتابة
                                                                                                    السيرة الذاتية تقصيك من
                                                                                                    أي الوظيفة
                                                                                                </strong>
                                                                                            </h4>




                                                                                            كتابة السيرة الذاتية أو
                                                                                            CV/Resume هي أفضل وسيلة للإنسان
                                                                                            للتعريف عن نفسه و تسويق مهاراته
                                                                                            و خبراته بين...




                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 6 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/ar/media/blogs/7-%D8%A3%D8%AE%D8%B7%D8%A7%D8%A1-%D8%B4%D8%A7%D8%A6%D8%B9%D8%A9-%D9%81%D9%8A-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A%D8%B1%D8%A9-%D8%A7%D9%84%D8%B0%D8%A7%D8%AA%D9%8A%D8%A9-%D8%AA%D9%82%D8%B5%D9%8A%D9%83-%D9%85%D9%86-%D8%A3%D9%8A-%D8%A7%D9%84%D9%88%D8%B8%D9%8A%D9%81%D8%A9"
                                                                                            data-a2a-title="7 أخطاء شائعة في كتابة السيرة الذاتية تقصيك من أي الوظيفة"><span
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
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="../../ar/media/blogs/%c2%a0%d9%83%d9%8a%d9%81-%d8%aa%d9%83%d8%aa%d8%a8-%d8%a8%d8%b1%d9%88%d9%81%d8%a7%d9%8a%d9%84-%d9%85%d9%85%d9%8a%d8%b2-%d9%84%d8%b4%d8%b1%d9%83%d8%aa%d9%83-%d9%81%d9%8a-10-%d8%ae%d8%b7%d9%88%d8%a7%d8%aa%c2%a0.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="ar">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    كيف تكتب بروفايل مميز
                                                                                                    لشركتك في 10 خطوات
                                                                                                </strong>
                                                                                            </h4>




                                                                                            بروفايل الشركة أو “Company
                                                                                            Profile” هو المادة التعريفية
                                                                                            التي يقدمها صاحب الشركة للعملاء
                                                                                            المحتملين أو...




                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 1 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/ar/media/blogs/%C2%A0%D9%83%D9%8A%D9%81-%D8%AA%D9%83%D8%AA%D8%A8-%D8%A8%D8%B1%D9%88%D9%81%D8%A7%D9%8A%D9%84-%D9%85%D9%85%D9%8A%D8%B2-%D9%84%D8%B4%D8%B1%D9%83%D8%AA%D9%83-%D9%81%D9%8A-10-%D8%AE%D8%B7%D9%88%D8%A7%D8%AA%C2%A0"
                                                                                            data-a2a-title=" كيف تكتب بروفايل مميز لشركتك في 10 خطوات "><span
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
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="blogs/what-administrative-organization-and-what-are-its-advantages.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="en">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    What is administrative
                                                                                                    organization and what
                                                                                                    are its advantages?
                                                                                                </strong>
                                                                                            </h4>




                                                                                            As a result of the crowding of
                                                                                            work in various work
                                                                                            organizations, resorting to
                                                                                            administrative...




                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 5 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en"
                                                                                            data-a2a-title="What is administrative organization and what are its advantages?"><span
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
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="blogs/advantages-and-disadvantages-solar-energy-our-lives.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="en">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    Advantages and
                                                                                                    disadvantages of solar
                                                                                                    energy in our lives
                                                                                                </strong>
                                                                                            </h4>




                                                                                            Perhaps you have ever wondered
                                                                                            about the panels that crowd many
                                                                                            buildings, factories and lights,
                                                                                            how...




                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 4 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en"
                                                                                            data-a2a-title="Advantages and disadvantages of solar energy in our lives"><span
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
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="../../ar/media/blogs/%d8%a7%d9%8a%d8%ac%d8%a7%d8%a8%d9%8a%d8%a7%d8%aa-%d9%88%d8%b3%d9%84%d8%a8%d9%8a%d8%a7%d8%aa-%d8%a7%d9%84%d8%b7%d8%a7%d9%82%d8%a9-%d8%a7%d9%84%d8%b4%d9%85%d8%b3%d9%8a%d8%a9-%d9%81%d9%8a-%d8%ad%d9%8a%d8%a7%d8%aa%d9%86%d8%a7.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="ar">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    ايجابيات وسلبيات الطاقة
                                                                                                    الشمسية في حياتنا
                                                                                                </strong>
                                                                                            </h4>




                                                                                            لعلّك تساءلت يوماً عن الألواح
                                                                                            التي تكتظ بها العديد من المباني
                                                                                            والمصانع والأضواء، كيف لهذه
                                                                                            الألواح...




                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 4 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/ar/media/blogs/%D8%A7%D9%8A%D8%AC%D8%A7%D8%A8%D9%8A%D8%A7%D8%AA-%D9%88%D8%B3%D9%84%D8%A8%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D8%B7%D8%A7%D9%82%D8%A9-%D8%A7%D9%84%D8%B4%D9%85%D8%B3%D9%8A%D8%A9-%D9%81%D9%8A-%D8%AD%D9%8A%D8%A7%D8%AA%D9%86%D8%A7"
                                                                                            data-a2a-title="ايجابيات وسلبيات الطاقة الشمسية في حياتنا"><span
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
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="blogs/steps-shift-traditional-marketing-e-marketing.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="en">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    Steps To Shift From
                                                                                                    Traditional Marketing to
                                                                                                    E-Marketing
                                                                                                </strong>
                                                                                            </h4>




                                                                                            Steps to shift from traditional
                                                                                            marketing to e-marketing It is
                                                                                            known and seen that it has
                                                                                            become...




                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 7 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/en/media/blogs/steps-shift-traditional-marketing-e-marketing"
                                                                                            data-a2a-title="Steps To Shift From Traditional Marketing to E-Marketing"><span
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
                                                                            <div class="col-12 col-md-6 col-lg-4 mb-3">

                                                                                <div class="latest-card">
                                                                                    <a href="../../ar/media/blogs/%d8%ae%d8%b7%d9%88%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d8%ad%d9%88%d9%84-%d9%85%d9%86-%d8%a7%d9%84%d8%aa%d8%b3%d9%88%d9%8a%d9%82-%d8%a7%d9%84%d8%aa%d9%82%d9%84%d9%8a%d8%af%d9%8a-%d8%a5%d9%84%d9%89-%d8%a7%d9%84%d8%aa%d8%b3%d9%88%d9%8a%d9%82-%d8%a7%d9%84%d8%a7%d9%84%d9%83%d8%aa%d8%b1%d9%88%d9%86%d9%8a.html"
                                                                                        class="field-group-link flex-grow-1"
                                                                                        hreflang="ar">
                                                                                        <div class="latest-card-type">
                                                                                            <h6>

                                                                                                <strong>
                                                                                                    Blog</strong>


                                                                                            </h6>


                                                                                        </div>

                                                                                        <div class="latest-card-body">

                                                                                            <h4>
                                                                                                <strong>
                                                                                                    خطوات التحول من التسويق
                                                                                                    التقليدي إلى التسويق
                                                                                                    الالكتروني
                                                                                                </strong>
                                                                                            </h4>




                                                                                            خطوات التحول من التسويق التقليدي
                                                                                            إلى التسويق الالكتروني من
                                                                                            المعلوم والمشاهد فقد أصبح جليًا
                                                                                            أن مفهوم...




                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="latest-card-footer">
                                                                                        <div class="read-time">
                                                                                            <svg width="1.25rem"
                                                                                                height="1.25rem"
                                                                                                viewbox="0 0 16 16"
                                                                                                class="bi bi-clock"
                                                                                                fill="currentColor"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                                            </svg>
                                                                                            <span> 7 min read</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="a2a_kit a2a_kit_size_26 addtoany_list"
                                                                                            data-a2a-url="http://projectsuppliers.net/ar/media/blogs/%D8%AE%D8%B7%D9%88%D8%A7%D8%AA-%D8%A7%D9%84%D8%AA%D8%AD%D9%88%D9%84-%D9%85%D9%86-%D8%A7%D9%84%D8%AA%D8%B3%D9%88%D9%8A%D9%82-%D8%A7%D9%84%D8%AA%D9%82%D9%84%D9%8A%D8%AF%D9%8A-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D8%AA%D8%B3%D9%88%D9%8A%D9%82-%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A"
                                                                                            data-a2a-title="خطوات التحول من التسويق التقليدي إلى التسويق الالكتروني"><span
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

                                                                </div>

                                                                <nav aria-label="pagination-heading">
                                                                    <h4 id="pagination-heading" class="sr-only">Pagination
                                                                    </h4>
                                                                    <ul class="pagination js-pager__items">
                                                                        <li class="page-item active">
                                                                            <span class="page-link">1</span>
                                                                        </li>
                                                                        <li class="page-item ">
                                                                            <a href="blogs2679.html?page=1" title=""
                                                                                class="page-link">2</a>
                                                                        </li>
                                                                        <li class="page-item ">
                                                                            <a href="blogs4658.html?page=2" title=""
                                                                                class="page-link">3</a>
                                                                        </li>
                                                                        <li class="pager__item--next">
                                                                            <a href="blogs2679.html?page=1"
                                                                                title="Go to next page" rel="next"
                                                                                class="page-link">
                                                                                <span aria-hidden="true">›</span>
                                                                                <span class="sr-only">Next page</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="page-item">
                                                                            <a href="blogs4658.html?page=2"
                                                                                title="Go to last page" class="page-link">
                                                                                <span aria-hidden="true">»</span>
                                                                                <span class="sr-only">Last page</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </nav>

                                                            </div>
                                                        </div>

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
