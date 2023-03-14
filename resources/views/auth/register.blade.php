@extends('frontend.layout.user_layout')
<style>
    div#main-wrapper {
        padding-top: 10% !important;
    }
</style>
@section('contents')
    <div id="main-wrapper" class="layout-main-wrapper clearfix">
        <div role="main" class="main-container container">
            <div class="row register-form">
                <div id="auth-box" class="col-12 col-md-9">
                    <div id="middle-part">
                        <h1 class="block-title">
                            <strong>
                                Create new account
                            </strong>
                        </h1>
                        <div id="block-ps-new-content" class="block block-system block-system-main-block">


                            <div class="content">

                                <form class="user-register-form user-form" data-user-info-from-browser
                                    data-drupal-selector="user-register-form" enctype="multipart/form-data"
                                    method="POST" action="{{ route('register') }}"
                                    id="user-register-form" accept-charset="UTF-8">
                                    
                                    @csrf

                                    <div data-drupal-selector="edit-account" id="edit-account"
                                        class="js-form-wrapper form-group">



                                        <fieldset
                                            class="js-form-item js-form-type-email form-type-email js-form-item-mail form-item-mail form-group">
                                            <label for="edit-mail" class="js-form-required form-required">Email</label>
                                            <input data-drupal-selector="edit-mail" type="email" id="edit-mail"
                                                name="email" value="" size="60" maxlength="254"
                                                placeholder="Enter an email" class="form-email required form-control"
                                                required="required" aria-required="true" />

                                        </fieldset>




                                        <fieldset id="edit-pass"
                                            class="js-form-item js-form-type-password-confirm form-type-password-confirm js-form-item-pass form-item-pass form-no-label form-group">




                                            <fieldset
                                                class="js-form-item js-form-type-password form-type-password js-form-item-pass-pass1 form-item-pass-pass1 form-group">
                                                <label for="edit-pass-pass1"
                                                    class="js-form-required form-required">Password</label>
                                                <input
                                                    class="password-field js-password-field form-text required form-control"
                                                    autocomplete="new-password" data-drupal-selector="edit-pass-pass1"
                                                    type="password" id="edit-pass-pass1" name="password" size="25"
                                                    maxlength="128" required="required" aria-required="true" />

                                            </fieldset>




                                            <fieldset
                                                class="js-form-item js-form-type-password form-type-password js-form-item-pass-pass2 form-item-pass-pass2 form-group">
                                                <label for="edit-pass-pass2" class="js-form-required form-required">Confirm
                                                    password</label>
                                                <input
                                                    class="password-confirm js-password-confirm form-text required form-control"
                                                    autocomplete="new-password" data-drupal-selector="edit-pass-pass2"
                                                    type="password" id="edit-pass-pass2" name="password_confirmation" size="25"
                                                    maxlength="128" required="required" aria-required="true" />

                                            </fieldset>

                                            <small id="edit-pass--description" class="description text-muted">
                                                Provide a password for the new account in both fields.
                                            </small>
                                        </fieldset>
                                    </div>
                                    <input autocomplete="off"
                                        data-drupal-selector="form-lchnreb-6tm-1jb5tinwidxoit7aqagjbrbp-vo-byi"
                                        type="hidden" name="form_build_id"
                                        value="form-lCHnREB-6tm_1jB5tINWiDXoIt7AqAGJbRbp_vo-byI" class="form-control" />
                                    <input data-drupal-selector="edit-user-register-form" type="hidden" name="form_id"
                                        value="user_register_form" class="form-control" />
                                    <div class="field--type-address field--name-field-user-address field--widget-address-default js-form-wrapper form-group"
                                        data-drupal-selector="edit-field-user-address-wrapper"
                                        id="edit-field-user-address-wrapper">
                                        <details data-drupal-selector="edit-field-user-address-0"
                                            id="edit-field-user-address-0" class="js-form-wrapper form-wrapper required"
                                            required="required" aria-required="true" open="open">
                                            <summary role="button" aria-controls="edit-field-user-address-0"
                                                aria-expanded="true" aria-pressed="true">Address</summary>
                                            <div class="details-wrapper">
                                                <div id="field-user-address-0-address-ajax-wrapper">
                                                    <div data-drupal-selector="edit-field-user-address-0-address"
                                                        id="edit-field-user-address-0-address"
                                                        class="js-form-wrapper form-group">
                                                        <div data-drupal-selector="edit-field-user-address-0-address-country-code"
                                                            id="edit-field-user-address-0-address-country-code"
                                                            class="js-form-wrapper form-group">



                                                            <fieldset
                                                                class="js-form-item js-form-type-select form-type-select js-form-item-field-user-address-0-address-country-code form-item-field-user-address-0-address-country-code form-group">
                                                                <label
                                                                    for="edit-field-user-address-0-address-country-code--2"
                                                                    class="js-form-required form-required">Country</label>

                                                                <select class="country form-select required custom-select"
                                                                    autocomplete="country"
                                                                    data-drupal-selector="edit-field-user-address-0-address-country-code"
                                                                    id="edit-field-user-address-0-address-country-code--2"
                                                                    name="field_user_address[0][address][country_code]"
                                                                    required="required" aria-required="true">
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
                                                                    <option value="BA">Bosnia &amp; Herzegovina
                                                                    </option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory
                                                                    </option>
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
                                                                    <option value="CF">Central African Republic
                                                                    </option>
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
                                                                    <option value="TF">French Southern Territories
                                                                    </option>
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
                                                                    <option value="HM">Heard &amp; McDonald Islands
                                                                    </option>
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
                                                                    <option value="JO" selected="selected">Jordan
                                                                    </option>
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
                                                                    <option value="MP">Northern Mariana Islands
                                                                    </option>
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
                                                                    <option value="GS">South Georgia &amp; South
                                                                        Sandwich Islands</option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="BL">St. Barthélemy</option>
                                                                    <option value="SH">St. Helena</option>
                                                                    <option value="KN">St. Kitts &amp; Nevis</option>
                                                                    <option value="LC">St. Lucia</option>
                                                                    <option value="MF">St. Martin</option>
                                                                    <option value="PM">St. Pierre &amp; Miquelon
                                                                    </option>
                                                                    <option value="VC">St. Vincent &amp; Grenadines
                                                                    </option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard &amp; Jan Mayen
                                                                    </option>
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
                                                                    <option value="TC">Turks &amp; Caicos Islands
                                                                    </option>
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
                                                        <input
                                                            data-drupal-selector="edit-field-user-address-0-address-langcode"
                                                            type="hidden" name="field_user_address[0][address][langcode]"
                                                            class="form-control" />
                                                        <div class="address-container-inline js-form-wrapper form-group"
                                                            data-drupal-selector="edit-field-user-address-0-address-container0"
                                                            id="edit-field-user-address-0-address-container0">



                                                            <fieldset
                                                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-user-address-0-address-given-name form-item-field-user-address-0-address-given-name form-group">
                                                                <label for="edit-field-user-address-0-address-given-name"
                                                                    class="js-form-required form-required">First
                                                                    name</label>
                                                                <input class="given-name form-text required form-control"
                                                                    autocomplete="given-name" autocapitalize="words"
                                                                    data-drupal-selector="edit-field-user-address-0-address-given-name"
                                                                    type="text"
                                                                    id="edit-field-user-address-0-address-given-name"
                                                                    name="name"
                                                                    value="" size="25" maxlength="128"
                                                                    placeholder="Enter your first name"
                                                                    required="required" aria-required="true" />

                                                            </fieldset>




                                                            <fieldset
                                                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-user-address-0-address-family-name form-item-field-user-address-0-address-family-name form-group">
                                                                <label for="edit-field-user-address-0-address-family-name"
                                                                    class="js-form-required form-required">Last
                                                                    name</label>
                                                                <input class="family-name form-text required form-control"
                                                                    autocomplete="family-name" autocapitalize="words"
                                                                    data-drupal-selector="edit-field-user-address-0-address-family-name"
                                                                    type="text"
                                                                    id="edit-field-user-address-0-address-family-name"
                                                                    name="field_user_address[0][address][family_name]"
                                                                    value="" size="25" maxlength="128"
                                                                    placeholder="Enter your family&#039;s name"
                                                                    required="required" aria-required="true" />

                                                            </fieldset>
                                                        </div>




                                                        <fieldset
                                                            class="js-form-item js-form-type-textfield form-type-textfield js-form-item-field-user-address-0-address-locality form-item-field-user-address-0-address-locality form-group">
                                                            <label for="edit-field-user-address-0-address-locality"
                                                                class="js-form-required form-required">City</label>
                                                            <input class="locality form-text required form-control"
                                                                autocomplete="address-level2" autocapitalize="words"
                                                                data-drupal-selector="edit-field-user-address-0-address-locality"
                                                                type="text"
                                                                id="edit-field-user-address-0-address-locality"
                                                                name="field_user_address[0][address][locality]"
                                                                value="" size="30" maxlength="128"
                                                                placeholder="Enter your city name" required="required"
                                                                aria-required="true" />

                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </details>

                                    </div>
                                    <div class="field--type-phone-international field--name-field-mobile field--widget-sms-phone-international js-form-wrapper form-group"
                                        data-drupal-selector="edit-field-mobile-wrapper" id="edit-field-mobile-wrapper">



                                        <fieldset
                                            class="js-form-item js-form-type-phone-international form-type-phone-international js-form-item-field-mobile-0-value form-item-field-mobile-0-value form-group">
                                            <label for="edit-field-mobile-0-value"
                                                class="js-form-required form-required">Mobile</label>
                                            <input class="phone_international-number form-tel form-control"
                                                data-country="auto" data-geo="1" data-preferred="PT"
                                                data-drupal-selector="edit-field-mobile-0-value-int-phone" type="tel"
                                                id="edit-field-mobile-0-value-int-phone"
                                                name="field_mobile[0][value][int_phone]" value="" size="30"
                                                maxlength="128" />
                                            <input data-drupal-selector="edit-field-mobile-0-value-full-number"
                                                type="hidden" name="field_mobile[0][value][full_number]" value=""
                                                class="form-control" />

                                            <small id="edit-field-mobile-0-value--description"
                                                class="description text-muted">
                                                Enter a phone number. A verification code will be sent as an SMS message,
                                                you must enter the code into the <a href="login15c2.html">verification
                                                    form</a> within 5 min.
                                            </small>
                                        </fieldset>

                                    </div>
                                    <fieldset data-drupal-selector="edit-company-info" id="edit-company-info"
                                        class="js-form-item form-item js-form-wrapper form-group">
                                        <legend>
                                            <span class="fieldset-legend">Company Information</span>
                                        </legend>
                                        <div class="fieldset-wrapper">




                                            <fieldset
                                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-company form-item-company form-group">
                                                <label for="edit-company" class="js-form-required form-required">Company
                                                    Name</label>
                                                <input data-drupal-selector="edit-company"
                                                    aria-describedby="edit-company--description"
                                                    class="form-autocomplete form-text required form-control"
                                                    data-autocomplete-path="/en/admin/ps_company/autocomplete/ps_companies_search"
                                                    type="text" id="edit-company" name="company" value=""
                                                    size="60" maxlength="128" required="required"
                                                    aria-required="true" />

                                                <small id="edit-company--description" class="description text-muted">
                                                    An invitation to join this company will be sent to the company owner,
                                                    and you will become a team member once they approve it.
                                                </small>
                                            </fieldset>




                                            <fieldset
                                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-job-title form-item-job-title form-group">
                                                <label for="edit-job-title"
                                                    class="js-form-required form-required">Position</label>
                                                <input data-drupal-selector="edit-job-title"
                                                    aria-describedby="edit-job-title--description" type="text"
                                                    id="edit-job-title" name="job_title" value="" size="60"
                                                    maxlength="128" class="form-text required form-control"
                                                    required="required" aria-required="true" />

                                                <small id="edit-job-title--description" class="description text-muted">
                                                    Your position in this company
                                                </small>
                                            </fieldset>




                                            <fieldset
                                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-company-name-en form-item-company-name-en form-group">
                                                <label for="edit-company-name-en">Company name (English)</label>
                                                <input data-drupal-selector="edit-company-name-en" type="text"
                                                    id="edit-company-name-en" name="company_name_en" value=""
                                                    size="60" maxlength="128"
                                                    placeholder="Enter the company&#039;s name"
                                                    class="form-text form-control"
                                                    data-drupal-states="{&quot;visible&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}},&quot;required&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}}}" />

                                            </fieldset>




                                            <fieldset
                                                class="js-form-item js-form-type-textfield form-type-textfield js-form-item-company-name-ar form-item-company-name-ar form-group">
                                                <label for="edit-company-name-ar">Company name (Arabic)</label>
                                                <input data-drupal-selector="edit-company-name-ar" type="text"
                                                    id="edit-company-name-ar" name="company_name_ar" value=""
                                                    size="60" maxlength="128"
                                                    placeholder="Enter the company&#039;s name in Arabic"
                                                    class="form-text form-control"
                                                    data-drupal-states="{&quot;visible&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}}}" />

                                            </fieldset>




                                            <fieldset
                                                class="js-form-item js-form-type-url form-type-url js-form-item-website form-item-website form-group">
                                                <label for="edit-website">Company website</label>
                                                <input data-drupal-selector="edit-website" type="url"
                                                    id="edit-website" name="website" value="" size="60"
                                                    maxlength="255" placeholder="Enter the company&#039;s website"
                                                    class="form-url form-control"
                                                    data-drupal-states="{&quot;visible&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}}}" />

                                            </fieldset>
                                            <div data-drupal-selector="edit-logo"
                                                data-drupal-states="{&quot;visible&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}}}"
                                                id="edit-logo" class="js-form-wrapper form-group">
                                                <div id="ajax-wrapper"
                                                    data-drupal-states="{&quot;visible&quot;:{&quot;:input[name=\&quot;company\&quot;]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}},&quot;required&quot;:{&quot;:input[name=\&quot;company\&quot;]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}}}">



                                                    <fieldset
                                                        class="js-form-item js-form-type-managed-file form-type-managed-file js-form-item-logo-doc form-item-logo-doc form-group">
                                                        <label for="edit-logo-doc-upload"
                                                            id="edit-logo-doc--label">Logo</label>

                                                        <div id="edit-logo-doc"
                                                            class="js-form-managed-file form-managed-file">
                                                            <input data-drupal-selector="edit-logo-doc-upload"
                                                                type="file" id="edit-logo-doc-upload"
                                                                name="files[logo_doc]" size="22"
                                                                class="js-form-file form-file form-control"
                                                                data-drupal-states="{&quot;visible&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}},&quot;required&quot;:{&quot;:input[name=\u0022company\u0022]&quot;:{&quot;value&quot;:&quot;Create a new Company ...&quot;}}}" />
                                                            <button
                                                                class="js-hide button js-form-submit form-submit btn btn-primary"
                                                                data-drupal-selector="edit-logo-doc-upload-button"
                                                                formnovalidate="formnovalidate" type="submit"
                                                                id="edit-logo-doc-upload-button"
                                                                name="logo_doc_upload_button"
                                                                value="Upload">Upload</button>
                                                            <input data-drupal-selector="edit-logo-doc-fids"
                                                                type="hidden" name="logo_doc[fids]"
                                                                class="form-control" />

                                                        </div>

                                                    </fieldset>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                    <div class="login"><span>Already have an Account? </span><a
                                            href="logindaa1.html?destination=/en/user/register"
                                            data-drupal-selector="edit-register-account" id="edit-register-account">Login
                                            Now</a></div>
                                    <div data-drupal-selector="edit-captcha" class="captcha"><input
                                            data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid"
                                            value="811207" class="form-control" />
                                        <input data-drupal-selector="edit-captcha-token" type="hidden"
                                            name="captcha_token" value="G5VabZxbBFORFXo6h2aSkqY3phg9b9SX4Nc1U3rWDN0"
                                            class="form-control" />
                                        <input id="recaptcha-v3-token" class="recaptcha-v3-token form-control"
                                            data-recaptcha-v3-action="general_action"
                                            data-recaptcha-v3-site-key="6LeDTakZAAAAAPCSF-tqEAg_yc3yPFr9HOMTkU_Q"
                                            data-drupal-selector="edit-captcha-response" type="hidden"
                                            name="captcha_response" value="" />
                                        <input data-drupal-selector="edit-is-recaptcha-v3" type="hidden"
                                            name="is_recaptcha_v3" value="1" class="form-control" />
                                    </div>
                                    <div data-drupal-selector="edit-actions"
                                        class="form-actions js-form-wrapper form-group" id="edit-actions"><button
                                            data-drupal-selector="edit-submit" type="submit" id="edit-submit"
                                            name="op" value="Create new account"
                                            class="button button--primary js-form-submit form-submit btn btn-primary">Create
                                            new account</button>
                                    </div>

                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
