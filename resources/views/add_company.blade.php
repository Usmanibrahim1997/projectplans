@extends('frontend.layout.user_master_layout')
<link rel="stylesheet" href="{{ asset('assets/company.css') }}">
<style>
    #page-wrapper {
        background-image: url('./assets/image/PS-BG.svg');
        min-height: 82vh;
        background-size: cover;
        padding-bottom: 100px;
    }
</style>
@section('contents')
    <div id="main-wrapper" class="layout-main-wrapper clearfix">
        <div id="main" class="container">
            <div id="block-ps-new-breadcrumbs" class="block block-system block-system-breadcrumb-block">
                <div class="content">
                    <nav role="navigation" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Add Company
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content mt-5">
                <nav role="navigation" aria-labelledby="block-tabs-4-menu" id="block-tabs-4"
                    class="block block-menu navigation menu--tabs">
                    <h2 class="sr-only" id="block-tabs-4-menu">Company tabs</h2>
                    <ul class="clearfix nav">
                        <li class="nav-item">
                            <a href="{{ route('add_company') }}"
                                class="is-active nav-link nav-link--en-company-2135-edit">Company Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add_team_members') }}"
                                class="nav-link nav-link--en-company-2135-team-members">Team Members</a>
                        </li>
                        <li class="nav-item">
                            <a href="/en/company/2135/automation-rules"
                                class="nav-link nav-link--en-company-2135-automation-rules">Automation</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="block-ps-authenticated-users-content" class="block block-system block-system-main-block">
                <div class="content">

                    <form class="ps-company-edit-form ps-company-form"
                        enctype="multipart/form-data" action="{{ route('save_company') }}" method="post"
                        accept-charset="UTF-8" data-once="form-updated"
                        data-drupal-form-fields="edit-field-logo-0-remove-button,edit-field-main-business-activity-1,edit-field-main-business-activity-2,edit-field-main-business-activity-3,edit-name-0-value,edit-field-brief-0-value,edit-field-address-0-address-country-code--2,edit-field-address-0-address-address-line1,edit-field-address-0-address-address-line2,edit-field-address-0-address-locality,edit-field-address-0-address-administrative-area,edit-field-address-0-address-postal-code,edit-field-telephone-0-value-int-phone,edit-field-fax-0-value-int-phone,edit-field-website-0-uri,edit-field-cr-0-value,edit-field-company-profile-0-upload,edit-field-company-profile-0-upload-button,search-edit-field-location-0-value,edit-field-location-0-value-map-actions-geolocation,lat-edit-field-location-0-value,lon-edit-field-location-0-value,edit-field-image-gallery-0-upload,edit-field-image-gallery-0-upload-button,edit-field-brands-gallery-0-upload,edit-field-brands-gallery-0-upload-button,edit-submit">
                        @csrf
                        <div class="required-fields field-group-html-element tow-col-wrapper">
                            <div class="mt-3 row">
                                <div class="col-md-6">
                                    <div class=" field--type-image field--name-field-logo field--widget-image-image js-form-wrapper form-group"
                                        data-drupal-selector="edit-field-logo-wrapper" id="edit-field-logo-wrapper">
                                        <div id="ajax-wrapper--4">

                                            <fieldset
                                                class="js-form-item js-form-type-managed-file form-type-managed-file js-form-item-field-logo-0 form-item-field-logo-0 form-group">
                                                <label for="edit-field-logo-0-upload" id="edit-field-logo-0--label"
                                                    class="js-form-required form-required">Add Logo <span
                                                        class="translation-entity-all-languages">(all languages)</span></label>

                                                <div class="image-widget mt-5">
                                                    <input accept="image/*" data-drupal-selector="edit-field-image-gallery-0-upload" multiple="multiple" type="file" id="edit-field-image-gallery-0-upload" name="logo" size="22" class="js-form-file form-file form-control" data-once="fileValidate auto-file-upload">
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="field--type-entity-reference field--name-field-main-business-activity field--widget-options-buttons js-form-wrapper form-group"
                                        data-drupal-selector="edit-field-main-business-activity-wrapper"
                                        id="edit-field-main-business-activity-wrapper">
                                        <fieldset data-drupal-selector="edit-field-main-business-activity"
                                            id="edit-field-main-business-activity--wrapper"
                                            class="fieldgroup form-composite required js-form-item form-item js-form-wrapper form-group"
                                            required="required" aria-required="true">
                                            <legend>
                                                <span class="fieldset-legend js-form-required form-required">Main business activity
                                                    <span class="translation-entity-all-languages">(all languages)</span></span>
                                            </legend>
                                            <div class="fieldset-wrapper">
                                                <div id="edit-field-main-business-activity" class="checkbox">
                                                    <div
                                                        class="js-form-item js-form-type-checkbox checkbox custom-control custom-switch js-form-item-field-main-business-activity-1 form-item-field-main-business-activity-1">
                                                        <input data-drupal-selector="edit-field-main-business-activity-1"
                                                            type="checkbox" id="edit-field-main-business-activity-1"
                                                            name="field_main_business" value="1"
                                                            class="form-checkbox custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="edit-field-main-business-activity-1">
                                                            Electrical
                                                        </label>
                                                    </div>

                                                    <div
                                                        class="js-form-item js-form-type-checkbox checkbox custom-control custom-switch js-form-item-field-main-business-activity-2 form-item-field-main-business-activity-2">
                                                        <input data-drupal-selector="edit-field-main-business-activity-2"
                                                            type="checkbox" id="edit-field-main-business-activity-2"
                                                            name="field_main_business" value="2"
                                                            class="form-checkbox custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="edit-field-main-business-activity-2">
                                                            Mechanical
                                                        </label>
                                                    </div>

                                                    <div
                                                        class="js-form-item js-form-type-checkbox checkbox custom-control custom-switch js-form-item-field-main-business-activity-3 form-item-field-main-business-activity-3">
                                                        <input data-drupal-selector="edit-field-main-business-activity-3"
                                                            type="checkbox" id="edit-field-main-business-activity-3"
                                                            name="field_main_business" value="3"
                                                            class="form-checkbox custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="edit-field-main-business-activity-3">
                                                            Civil
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field--type-string field--name-name field--widget-string-textfield js-form-wrapper form-group"
                            data-drupal-selector="edit-name-wrapper" id="edit-name-wrapper">

                            <fieldset
                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-name-0-value form-item-name-0-value form-group">
                                <label for="edit-name-0-value" class="js-form-required form-required text-white">Name</label>
                                <input class="js-text-full text-full form-text required form-control"
                                    data-drupal-selector="edit-name-0-value"
                                    aria-describedby="edit-name-0-value--description" type="text"
                                    id="edit-name-0-value" name="company_name"
                                    value="" size="60" maxlength="255"
                                    placeholder="" required="required" aria-required="true">
                                <small id="edit-name-0-value--description" class="description text-muted">
                                    The Name of the company.
                                </small>
                            </fieldset>

                        </div>
                        <div class="field--type-string-long field--name-field-brief field--widget-string-textarea js-form-wrapper form-group"
                            data-drupal-selector="edit-field-brief-wrapper" id="edit-field-brief-wrapper">

                            <fieldset
                                class="js-form-item js-form-type-textarea form-type-textarea js-form-item-field-brief-0-value form-item-field-brief-0-value form-group">
                                <label for="edit-field-brief-0-value " style="color: #fff">Brief</label>
                                <div class="form-textarea-wrapper">
                                    <textarea class="js-text-full text-full form-textarea form-control resize-vertical"
                                        data-drupal-selector="edit-field-brief-0-value" id="edit-field-brief-0-value" name="field_brief"
                                        rows="5" cols="60" placeholder=""></textarea>
                                </div>

                            </fieldset>

                        </div>
                        <div class="field--type-address field--name-field-address field--widget-address-plain js-form-wrapper form-group"
                            data-drupal-selector="edit-field-address-wrapper" id="edit-field-address-wrapper">
                            <div data-drupal-selector="edit-field-address-0" id="edit-field-address-0"
                                class="js-form-wrapper form-group">
                                <div id="field-address-0-address-ajax-wrapper">
                                    <div data-drupal-selector="edit-field-address-0-address"
                                        id="edit-field-address-0-address" class="js-form-wrapper form-group">
                                        <div data-drupal-selector="edit-field-address-0-address-country-code"
                                            id="edit-field-address-0-address-country-code"
                                            class="js-form-wrapper form-group">

                                            <fieldset
                                                class="js-form-item js-form-type-select form-type-select js-form-item-field-address-0-address-country-code form-item-field-address-0-address-country-code form-group">
                                                <label for="edit-field-address-0-address-country-code--2"
                                                    class="js-form-required form-required" style="color: #fff">Country</label>

                                                <select class="country form-select required custom-select"
                                                    autocomplete="country"
                                                    data-drupal-selector="edit-field-address-0-address-country-code"
                                                    id="edit-field-address-0-address-country-code--2"
                                                    name="country_code" required="required"
                                                    aria-required="true" data-once="drupal-ajax">
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua &amp; Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AC">Ascension Island</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BA">Bosnia &amp; Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="VG">British Virgin Islands</option>
                                                    <option value="BN">Brunei</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="IC">Canary Islands</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="BQ">Caribbean Netherlands</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="EA">Ceuta &amp; Melilla</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CP">Clipperton Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo - Brazzaville</option>
                                                    <option value="CD">Congo - Kinshasa</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d’Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czechia</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DG">Diego Garcia</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="SZ">Eswatini</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard &amp; McDonald Islands</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong SAR China</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="XK">Kosovo</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao SAR China</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar (Burma)</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="KP">North Korea</option>
                                                    <option value="MK">North Macedonia</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestine</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn Islands</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Réunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">São Tomé &amp; Príncipe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia &amp; South Sandwich Islands
                                                    </option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="BL">St. Barthélemy</option>
                                                    <option value="SH">St. Helena</option>
                                                    <option value="KN">St. Kitts &amp; Nevis</option>
                                                    <option value="LC">St. Lucia</option>
                                                    <option value="MF">St. Martin</option>
                                                    <option value="PM">St. Pierre &amp; Miquelon</option>
                                                    <option value="VC">St. Vincent &amp; Grenadines</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syria</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad &amp; Tobago</option>
                                                    <option value="TA">Tristan da Cunha</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks &amp; Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UM">U.S. Outlying Islands</option>
                                                    <option value="VI">U.S. Virgin Islands</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VA">Vatican City</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="WF">Wallis &amp; Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </fieldset>
                                        </div>

                                        <fieldset
                                            class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-address-0-address-address-line1 form-item-field-address-0-address-address-line1 form-group">
                                            <label for="edit-field-address-0-address-address-line1"
                                                class="js-form-required form-required" style="color: #fff">Street address</label>
                                            <input class="address-line1 form-text required form-control"
                                                autocomplete="address-line1" autocapitalize="words"
                                                data-drupal-selector="edit-field-address-0-address-address-line1"
                                                type="text" id="edit-field-address-0-address-address-line1"
                                                name="address"
                                                value=""
                                                size="60" maxlength="128" required="required" aria-required="true">
                                        </fieldset>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <fieldset
                                                    class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-address-0-address-locality form-item-field-address-0-address-locality form-group">
                                                    <label for="edit-field-address-0-address-locality"
                                                        class="js-form-required form-required" style="color: #fff">City</label>
                                                    <input class="locality form-text required form-control"
                                                        autocomplete="address-level2" autocapitalize="words"
                                                        data-drupal-selector="edit-field-address-0-address-locality"
                                                        type="text" id="edit-field-address-0-address-locality"
                                                        name="city" value=""
                                                        size="30" maxlength="128" required="required" aria-required="true">
                                                </fieldset>
                                            </div>

                                            <div class="col-md-6">
                                                <fieldset
                                                    class="js-form-item js-form-type-select form-type-select js-form-item-field-address-0-address-administrative-area form-item-field-address-0-address-administrative-area form-group">
                                                    <label for="edit-field-address-0-address-administrative-area"
                                                        class="js-form-required form-required" style="color: #fff">Province</label>

                                                    <input class="locality form-text required form-control"
                                                        autocomplete="address-level2" autocapitalize="words"
                                                        data-drupal-selector="edit-field-address-0-address-locality"
                                                        type="text" id="edit-field-address-0-address-locality"
                                                        name="province" value=""
                                                        size="30" maxlength="128" required="required" aria-required="true">
                                                </fieldset>
                                            </div>

                                            <div class="col-md-3">
                                                <fieldset
                                                    class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-address-0-address-postal-code form-item-field-address-0-address-postal-code form-group">
                                                    <label for="edit-field-address-0-address-postal-code" style="color: #fff">Postal code</label>
                                                    <input class="postal-code form-text form-control" autocomplete="postal-code"
                                                        autocapitalize="words"
                                                        data-drupal-selector="edit-field-address-0-address-postal-code"
                                                        type="text" id="edit-field-address-0-address-postal-code"
                                                        name="postal_code" value=""
                                                        size="10" maxlength="128">
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="required-fields field-group-html-element tow-col-wrapper mobile-wrapper"
                            data-drupal-selector="edit-group-tow-col-wrapper-" data-once="fieldgroup-effects">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field--type-phone-international field--name-field-telephone field--widget-phone-international-widget js-form-wrapper form-group"
                                        data-drupal-selector="edit-field-telephone-wrapper" id="edit-field-telephone-wrapper">
        
                                        <fieldset
                                            class="js-form-item js-form-type-phone-international form-type-phone-international js-form-item-field-telephone-0-value form-item-field-telephone-0-value form-group">
                                            <label for="edit-field-telephone-0-value"
                                                class="js-form-required form-required" style="color: #fff">Telephone <span
                                                    class="translation-entity-all-languages">(all languages)</span></label>
                                            <input class="phone_international-number form-tel form-control"
                                                data-country="auto" data-geo="1" data-preferred="PT"
                                                data-drupal-selector="edit-field-telephone-0-value-int-phone" type="tel"
                                                id="edit-field-telephone-0-value-int-phone"
                                                name="telephone_num"
                                                size="30" maxlength="128" data-once="phoneInternational"
                                                autocomplete="off" data-intl-tel-input-id="0"
                                                placeholder="51 234 5678">
                                        </fieldset>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field--type-phone-international field--name-field-fax field--widget-phone-international-widget js-form-wrapper form-group"
                                        data-drupal-selector="edit-field-fax-wrapper" id="edit-field-fax-wrapper">

                                        <fieldset
                                            class="js-form-item js-form-type-phone-international form-type-phone-international js-form-item-field-fax-0-value form-item-field-fax-0-value form-group">
                                            <label for="edit-field-fax-0-value" style="color: #fff">Fax <span
                                                    class="translation-entity-all-languages">(all languages)</span></label>
                                            
                                            <input class="phone_international-number form-tel form-control"
                                                data-country="auto" data-geo="1" data-preferred="PT"
                                                data-drupal-selector="edit-field-fax-0-value-int-phone" type="tel"
                                                id="edit-field-fax-0-value-int-phone" name="fax_num"
                                                value="" size="30" maxlength="128"
                                                data-once="phoneInternational" autocomplete="off"
                                                data-intl-tel-input-id="1" placeholder="">

                                        </fieldset>

                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <div class="required-fields field-group-html-element tow-col-wrapper"
                            data-drupal-selector="edit-group-tow-col-wrapperr" data-once="fieldgroup-effects">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field--type-link field--name-field-website field--widget-link-default js-form-wrapper form-group"
                                        data-drupal-selector="edit-field-website-wrapper" id="edit-field-website-wrapper">
                                        <fieldset
                                            class="js-form-item js-form-type-url form-type-url js-form-item-field-website-0-uri form-item-field-website-0-uri form-group">
                                            <label for="edit-field-website-0-uri" style="color: #eee">Website <span
                                                    class="translation-entity-all-languages">(all languages)</span></label>
                                            <input data-drupal-selector="edit-field-website-0-uri"
                                                aria-describedby="edit-field-website-0-uri--description" type="url"
                                                id="edit-field-website-0-uri" name="website_url"
                                                value="" size="60" maxlength="2048"
                                                placeholder="" class="form-url form-control">
        
                                            <small id="edit-field-website-0-uri--description" class="description text-muted">
                                                This must be an external URL such as <em
                                                    class="placeholder">http://example.com</em>.
                                            </small>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field--type-string field--name-field-cr field--widget-string-textfield js-form-wrapper form-group"
                                        data-drupal-selector="edit-field-cr-wrapper" id="edit-field-cr-wrapper">
                                        <fieldset
                                            class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-cr-0-value form-item-field-cr-0-value form-group">
                                            <label for="edit-field-cr-0-value" style="color: #eee">Company registration number <span
                                                    class="translation-entity-all-languages">(all languages)</span></label>
                                            <input class="js-text-full text-full form-text form-control"
                                                data-drupal-selector="edit-field-cr-0-value" type="text"
                                                id="edit-field-cr-0-value" name="company_registration_num" value=""
                                                size="60" maxlength="255" placeholder="">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="field--type-file field--name-field-company-profile field--widget-file-generic js-form-wrapper form-group"
                            data-drupal-selector="edit-field-company-profile-wrapper"
                            id="edit-field-company-profile-wrapper">
                            <div id="ajax-wrapper--2">

                                <fieldset
                                    class="js-form-item js-form-type-managed-file form-type-managed-file js-form-item-field-company-profile-0 form-item-field-company-profile-0 form-group">
                                    <label for="edit-field-company-profile-0-upload"
                                        id="edit-field-company-profile-0--label" style="color: #eee">Company Profile <span
                                            class="translation-entity-all-languages" style="color: #eee">(all languages)</span></label>

                                    <div id="edit-field-company-profile-0"
                                        class="js-form-managed-file form-managed-file">
                                        <input data-drupal-selector="edit-field-company-profile-0-upload" type="file"
                                            id="edit-field-company-profile-0-upload"
                                            name="company_profile_logo" size="22"
                                            class="js-form-file form-file form-control"
                                            data-once="fileValidate auto-file-upload">
                                        <button class="js-hide button js-form-submit form-submit btn btn-primary"
                                            data-drupal-selector="edit-field-company-profile-0-upload-button"
                                            formnovalidate="formnovalidate" type="submit"
                                            id="edit-field-company-profile-0-upload-button"
                                            name="field_company_profile_0_upload_button" value="Upload"
                                            data-once="drupal-ajax">Upload</button>
                            
                                    </div>

                                    <small id="edit-field-company-profile-0--description"
                                        class="description text-muted">
                                        One file only.<br>8 MB limit.<br>Allowed types: pdf.

                                    </small>
                                </fieldset>
                            </div>
                        </div>
                        <div class="field--type-geofield field--name-field-location field--widget-geofield-map js-form-wrapper form-group"
                            data-drupal-selector="edit-field-location-wrapper" id="edit-field-location-wrapper">
                            <fieldset data-drupal-selector="edit-field-location-0-value"
                                class="geofieldmap-widget-auto-geocode js-form-item form-item js-form-wrapper form-group"
                                id="edit-field-location-0-value">
                                <legend>
                                    <span class="fieldset-legend" style="color: #eee">Location <span
                                            class="translation-entity-all-languages">(all languages)</span></span>
                                </legend>
                                <div class="fieldset-wrapper">
                                    <fieldset data-drupal-selector="edit-field-location-0-value-map"
                                        id="edit-field-location-0-value-map"
                                        class="js-form-item form-item js-form-wrapper form-group">
                                        <legend>
                                            <span class="fieldset-legend"></span>
                                        </legend>
                                        <div class="fieldset-wrapper">

                                            <fieldset
                                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-location-0-value-map-geocode form-item-field-location-0-value-map-geocode form-group">
                                                <label for="edit-field-location-0-value-map-geocode" style="color: #eee">
                                                    Geocode address
                                                </label>
                                                <input id="search-edit-field-location-0-value"
                                                    class="form-text form-autocomplete geofield-map-search form-control ui-autocomplete-input pac-target-input"
                                                    data-drupal-selector="edit-field-location-0-value-map-geocode"
                                                    aria-describedby="edit-field-location-0-value-map-geocode--description"
                                                    type="text" name="map_geocode"
                                                    value="" size="60" maxlength="128"
                                                    data-once="autocomplete" autocomplete="off"
                                                    placeholder="Enter a location">

                                                <small id="edit-field-location-0-value-map-geocode--description"
                                                    class="description text-muted">
                                                    Use this to geocode your search location.
                                                </small>
                                            </fieldset>
                                            <div id="map-edit-field-location-0-value" class="geofield-map-widget"
                                                style="min-width: 200px; width: 100%; min-height: 200px; height: 450px; position: relative; overflow: hidden;">
                                                <div style="overflow:hidden;max-width:100%;width:100%;height:500px;">
                                                    <div id="google-maps-display" style="height:100%; width:100%;max-width:100%;">
                                                        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Pakistan&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                                                    </div>
                                                    <a class="from-embedmap-code" href="https://www.bootstrapskins.com/themes" id="auth-map-data">premium bootstrap themes</a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </fieldset>

                                    <fieldset
                                        class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-location-0-value-lat form-item-field-location-0-value-lat form-group">
                                        <label for="edit-field-location-0-value-lat" style="color: #eee">Latitude</label>
                                        <input class="geofield-lat form-text form-control"
                                            id="lat-edit-field-location-0-value"
                                            data-drupal-selector="edit-field-location-0-value-lat" type="text"
                                            name="map_latitude" value="30.016733" size="60"
                                            maxlength="128">

                                    </fieldset>

                                    <fieldset
                                        class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-location-0-value-lon form-item-field-location-0-value-lon form-group">
                                        <label for="edit-field-location-0-value-lon" style="color: #eee">Longitude</label>
                                        <input class="geofield-lon form-text form-control"
                                            id="lon-edit-field-location-0-value"
                                            data-drupal-selector="edit-field-location-0-value-lon" type="text"
                                            name="map_logitude" value="31.42152" size="60"
                                            maxlength="128">

                                    </fieldset>

                                </div>
                            </fieldset>

                        </div>
                        <div class="bg-light field--type-image field--name-field-image-gallery field--widget-image-image js-form-wrapper form-group"
                            data-drupal-selector="edit-field-image-gallery-wrapper"
                            id="edit-field-image-gallery-wrapper">
                            <div id="edit-field-image-gallery-ajax-wrapper">
                                <details data-drupal-selector="edit-field-image-gallery" id="edit-field-image-gallery"
                                    class="js-form-wrapper form-wrapper" open="open" data-once="details">
                                    <summary role="button" aria-controls="edit-field-image-gallery"
                                        aria-expanded="true" aria-pressed="true">Image Gallery <span
                                            class="translation-entity-all-languages">(all languages)</span><span
                                            class="summary"></span></summary>
                                    <div class="details-wrapper">

                                        <fieldset
                                            class="js-form-item js-form-type-managed-file form-type-managed-file js-form-item-field-image-gallery-0 form-item-field-image-gallery-0 form-group">
                                            <label for="edit-field-image-gallery-0-upload"
                                                id="edit-field-image-gallery-0--label">Add a new file</label>

                                            <div class="image-widget js-form-managed-file form-managed-file clearfix">
                                                <div class="image-widget-data">
                                                    <input accept="image/*"
                                                        data-drupal-selector="edit-field-image-gallery-0-upload"
                                                        multiple="multiple" type="file"
                                                        id="edit-field-image-gallery-0-upload"
                                                        name="image_gallery" size="22"
                                                        class="js-form-file form-file form-control"
                                                        data-once="fileValidate auto-file-upload">
                                                    <button
                                                        class="js-hide button js-form-submit form-submit btn btn-primary"
                                                        data-drupal-selector="edit-field-image-gallery-0-upload-button"
                                                        formnovalidate="formnovalidate" type="submit"
                                                        id="edit-field-image-gallery-0-upload-button"
                                                        name="field_image_gallery_0_upload_button" value="Upload"
                                                        data-once="drupal-ajax">Upload
                                                    </button>
                                    
                                                </div>
                                            </div>

                                            <small id="edit-field-image-gallery-0--description"
                                                class="description text-muted">
                                                Unlimited number of files can be uploaded to this field.<br>8 MB
                                                limit.<br>Allowed types: png gif jpg jpeg.<br>Images larger than
                                                <strong>1500x1500</strong> pixels will be resized.

                                            </small>
                                        </fieldset>

                                    </div>
                                </details>
                            </div>
                        </div>
                        <div class="bg-light field--type-image field--name-field-brands-gallery field--widget-image-image js-form-wrapper form-group"
                            data-drupal-selector="edit-field-brands-gallery-wrapper"
                            id="edit-field-brands-gallery-wrapper">
                            <div id="edit-field-brands-gallery-ajax-wrapper">
                                <details data-drupal-selector="edit-field-brands-gallery" id="edit-field-brands-gallery"
                                    class="js-form-wrapper form-wrapper" open="open" data-once="details">
                                    <summary role="button" aria-controls="edit-field-brands-gallery"
                                        aria-expanded="true" aria-pressed="true">Brands Gallery <span
                                            class="translation-entity-all-languages">(all languages)</span><span
                                            class="summary"></span></summary>
                                    <div class="details-wrapper">

                                        <fieldset
                                            class="js-form-item js-form-type-managed-file form-type-managed-file js-form-item-field-brands-gallery-0 form-item-field-brands-gallery-0 form-group">
                                            <label for="edit-field-brands-gallery-0-upload"
                                                id="edit-field-brands-gallery-0--label">Add a new file</label>

                                            <div class="image-widget js-form-managed-file form-managed-file clearfix">
                                                <div class="image-widget-data">
                                                    <input accept="image/*"
                                                        data-drupal-selector="edit-field-brands-gallery-0-upload"
                                                        multiple="multiple" type="file"
                                                        id="edit-field-brands-gallery-0-upload"
                                                        name="brands_logo" size="22"
                                                        class="js-form-file form-file form-control"
                                                        data-once="fileValidate auto-file-upload">
                                                    <button
                                                        class="js-hide button js-form-submit form-submit btn btn-primary"
                                                        data-drupal-selector="edit-field-brands-gallery-0-upload-button"
                                                        formnovalidate="formnovalidate" type="submit"
                                                        id="edit-field-brands-gallery-0-upload-button"
                                                        name="field_brands_gallery_0_upload_button" value="Upload"
                                                        data-once="drupal-ajax">Upload
                                                    </button>
                                                </div>
                                            </div>

                                            <small id="edit-field-brands-gallery-0--description"
                                                class="description text-muted">
                                                Unlimited number of files can be uploaded to this field.<br>8 MB
                                                limit.<br>Allowed types: png gif jpg jpeg.<br>Images larger than
                                                <strong>1500x1500</strong> pixels will be resized.

                                            </small>
                                        </fieldset>

                                    </div>
                                </details>
                            </div>
                        </div>
                        <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-group"
                            id="edit-actions">
                            <button type="submit" id="edit-submit" value="Save"
                                class="button button--primary js-form-submit form-submit btn btn-primary">Save
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
