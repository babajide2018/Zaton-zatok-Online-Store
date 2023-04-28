@include('frontend.includes.header')

<!-- start page-title -->
<section class="page-title">
    <div class="page-title-container">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Checkout</h2>
                        <ol class="breadcrumb">
                            <li><a href="">Home</a></li>
                            <li>Checkout</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </div>
</section>
<!-- end page-title -->



<section class="checkout-section section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="woocommerce">
                    <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a></div>
                    <form method="post" class="login" style="display: none;">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>

                        <p class="form-row form-row-first">
                            <label for="username">Username or email <span class="required">*</span></label>
                            <input type="text" class="input-text" name="username" id="username">
                        </p>
                        <p class="form-row form-row-last">
                            <label for="password">Password <span class="required">*</span></label>
                            <input class="input-text" type="password" name="password" id="password">
                        </p>
                        <div class="clear"></div>

                        <p class="form-row">
                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="94dfaf2ac1">
                            <input type="hidden" name="_wp_http_referer" value="/wp/?page_id=6">
                            <input type="submit" class="button" name="login" value="Login">
                            <input type="hidden" name="redirect" value="http://localhost/wp/?page_id=6">
                            <label for="rememberme" class="inline">
                                <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
                        </p>
                        <p class="lost_password">
                            <a href="http://localhost/wp/?page_id=7&amp;lost-password">Lost your password?</a>
                        </p>

                        <div class="clear"></div>

                    </form>

                    <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>

                    <form class="checkout_coupon" method="post" style="display: none;">
                        <p class="form-row form-row-first">
                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code">
                        </p>
                        <p class="form-row form-row-last">
                            <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">
                        </p>
                        <div class="clear"></div>
                    </form>

                    <div name="checkout" method="post" class="checkout woocommerce-checkout" action="" enctype="multipart/form-data">

                        <div class="col2-set" id="customer_details">
                            <div class="col-1">
                                <div class="woocommerce-billing-fields">

                                    <h3>Billing Details</h3>

                                    <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                        <label for="billing_first_name" class="">Name <abbr class="required"  title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="name" id="name" value="{{auth()->user()->name}}" placeholder="" autocomplete="given-name">
                                    </p>

                                    <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                        <label for="billing_last_name" class="">Email <abbr class="required" title="required">*</abbr></label>
                                        <input type="email" class="input-text " name="email" id="email-address" value="{{auth()->user()->email}}" placeholder="" autocomplete="family-name">
                                    </p>
                                    <div class="clear"></div>



                                    <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                        <label for="billing_email" class="">Town / City <abbr class="required" title="required">*</abbr></label>
                                        <input type="email" class="input-text " name="city"  placeholder="" autocomplete="email">
                                    </p>

                                    <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                        <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                        <input type="tel" class="input-text " name="phone" value="{{auth()->user()->phone}}"  placeholder="" autocomplete="tel">
                                    </p>
                                    <div class="clear"></div>



                                    <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                        <label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="address" value="{{auth()->user()->address}}"  placeholder="Street address" autocomplete="address-line1">
                                    </p>

                                    <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
                                        <input type="text" class="input-text " name="address_details"  placeholder="Apartment, suite, unit etc. (optional)" autocomplete="address-line2">
                                    </p>

                                    <div class="clear"></div>





                                </div>
                            </div>

                            <div class="col-2">
                                <div class="woocommerce-shipping-fields">

                                    <h3 id="ship-to-different-address">
                                        <label for="ship-to-different-address-checkbox" class="checkbox">Ship to a different address?</label>
                                        <input id="ship-to-different-address-checkbox" class="input-checkbox" type="checkbox" name="ship_to_different_address" value="1">
                                    </h3>

                                    <div class="shipping_address" style="display: none;">

                                        <p class="form-row form-row form-row-first validate-required" id="shipping_first_name_field">
                                            <label for="shipping_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="" autocomplete="given-name" value="">
                                        </p>

                                        <p class="form-row form-row form-row-last validate-required" id="shipping_last_name_field">
                                            <label for="shipping_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder="" autocomplete="family-name" value="">
                                        </p>
                                        <div class="clear"></div>

                                        <p class="form-row form-row form-row-wide" id="shipping_company_field">
                                            <label for="shipping_company" class="">Company Name</label>
                                            <input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="" autocomplete="organization" value="">
                                        </p>

                                        <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="shipping_country_field">
                                            <label for="shipping_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                                            <select name="shipping_country" id="shipping_country" autocomplete="country" class="country_to_state country_select ">
                                                <option value="">Select a country…</option>
                                                <option value="AX" selected="selected">Åland Islands</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="PW">Belau</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
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
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo (Brazzaville)</option>
                                                <option value="CD">Congo (Kinshasa)</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
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
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="CI">Ivory Coast</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
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
                                                <option value="MO">Macao S.A.R., China</option>
                                                <option value="MK">Macedonia</option>
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
                                                <option value="MM">Myanmar</option>
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
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PS">Palestinian Territory</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="IE">Republic of Ireland</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="ST">São Tomé and Príncipe</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="SX">Saint Martin (Dutch part)</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia/Sandwich Islands</option>
                                                <option value="KR">South Korea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
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
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom (UK)</option>
                                                <option value="US">United States (US)</option>
                                                <option value="UM">United States (US) Minor Outlying Islands</option>
                                                <option value="VI">United States (US) Virgin Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        <noscript>
                                            <input type="submit" name="woocommerce_checkout_update_totals" value="Update country" />
                                        </noscript>
                                        </p>

                                        <p class="form-row form-row form-row-wide address-field validate-required" id="shipping_address_1_field">
                                            <label for="shipping_address_1" class="">Address <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Street address" autocomplete="address-line1" value="">
                                        </p>

                                        <p class="form-row form-row form-row-wide address-field" id="shipping_address_2_field">
                                            <input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" autocomplete="address-line2" value="">
                                        </p>

                                        <p class="form-row form-row address-field validate-postcode validate-required form-row-first  woocommerce-invalid-required-field" id="billing_city_field2">
                                            <label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="billing_city" id="billing_city3" placeholder="" autocomplete="address-level2" value="">
                                        </p>


                                        <p class="form-row form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field17">
                                            <label for="billing_postcode" class="">Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="billing_postcode" id="billing_postcode4" placeholder="" autocomplete="postal-code" value="">
                                        </p>
                                        <div class="clear"></div>

                                    </div>

                                    <p class="form-row form-row notes" id="order_comments_field">
                                        <label for="order_comments" class="">Order Notes</label>
                                        <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                    </p>

                                </div>
                            </div>
                        </div>

                        <h3 id="order_review_heading">Your order</h3>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($carts as $cart)
                                <tr class="cart_item">


                                    <td class="product-name">
                                        {{ $cart->product_name }} <strong class="product-quantity">× {{ $cart->total_quantity }}</strong> </td>
                                    <td class="product-total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₦</span>{{ number_format($cart->product_price) }}</span>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>



                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        Free Shipping
                                        <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping:1" class="shipping_method">

                                    </td>
                                </tr>

                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₦</span>{{ $total }}</span></strong> </td>
                                </tr>

                                </tfoot>
                            </table>
                            <div id="payment" class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="">
                                        <!--grop add span for radio button style-->
                                        <span class="grop-woo-radio-style"></span>
                                        <!--custom change-->
                                        <label for="payment_method_cheque">
                                            Check Payments </label>
                                        <div class="payment_box payment_method_cheque">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_paypal">

                                        <!--grop add span for radio button style-->
                                        <span class="grop-woo-radio-style"></span>
                                        <!--custom change-->
                                        <label for="payment_method_paypal">
                                             <img src="assets/images/paypal.png" alt="PayPal Acceptance Mark"><a href="#" class="about_paypal" title=""></a> </label>

                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                    <noscript>
                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.
                                        <br/>
                                        <input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" />
                                    </noscript>

                                    <form id="paymentForm">
                                        @csrf
                                        <input type="hidden" id="amount" value="{{$total}}">
                                        <input type="hidden" id="email-address" value="{{auth()->user()->email}}">
                                        <button type="submit" onclick="payWithPaystack()"> Place Order </button>
                                    </form>

                                    <input type="hidden" id="_wpnonce5" name="_wpnonce" value="783c1934b0">
                                    <input type="hidden" name="_wp_http_referer" value="/wp/?page_id=6"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- start instagram-section -->
<section class="instagram-section">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="instagram-inner">
                    <div class="instagram-text">
                        <h3>Follow our instagram</h3>
                        <p>@aviwp.studio</p>
                    </div>
                    <div class="instagram-grids clearfix">
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/1.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/3.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/4.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/2.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/5.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/6.jpg" alt></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end instagram-section -->


<!-- start site-footer -->
<footer class="site-footer">
    <div class="container-1410">
        <div class="row widget-area">
            <div class="col-lg-4 col-xs-6  widget-col about-widget-col">
                <div class="widget newsletter-widget">
                    <div class="inner">
                        <h3>Sign Up Now & Get 10% Off</h3>
                        <p>Get timely updates from your favorite products</p>
                        <form>
                            <div class="input-1">
                                <input type="email" class="form-control" placeholder="Email Address *" required>
                            </div>
                            <div class="submit clearfix">
                                <button type="submit">Subcribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6 widget-col">
                <div class="widget contact-widget">
                    <h3>Contact info</h3>
                    <ul>
                        <li>Phone: 888-999-000-1425</li>
                        <li>Email: azedw@mail.com</li>
                        <li>Address: 22/1 natinoal city austria, dreem land, Huwai</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-xs-6 widget-col">
                <div class="widget company-widget">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Best services</a></li>
                        <li><a href="#">Recent insight</a></li>
                        <li><a href="#">Shipping guid</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-xs-6 widget-col">
                <div class="widget payment-widget">
                    <h3>Payment & Shipping</h3>
                    <ul>
                        <li><a href="#">Payment method</a></li>
                        <li><a href="#">Tearms of use</a></li>
                        <li><a href="#">Shipping policy</a></li>
                        <li><a href="#">Shipping guide</a></li>
                        <li><a href="#">Return policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container -->

    <div class="lower-footer">
        <div class="container-1410">
            <div class="row">
                <div class="col-xs-12">
                    <div class="lower-footer-inner clearfix">
                        <div>
                            <p>&copy; 2021 WP Studio , All Rights Reserved</p>
                        </div>
                        <div class="social">
                            <ul class="clearfix">
                                <li><a href="#" title="Facebook">fb</a></li>
                                <li><a href="#" title="Twitter">tw</a></li>
                                <li><a href="#" title="Instagram">ig</a></li>
                                <li><a href="#" title="Pinterest">pr</a></li>
                            </ul>
                        </div>
                        <div class="extra-link">
                            <ul>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Promo T&amp;Cs Apply</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end site-footer -->


</div>
<!-- end of page-wrapper -->


<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();

        let handler = PaystackPop.setup({
            key: 'pk_live_c1f24eb51aba7221afb52aae90163140d54042c1', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: parseFloat(document.getElementById("amount").value.replace(',', '')) * 100,
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
                alert('Window closed.');
            },
            callback: function(response){
                let message = 'Payment complete! Reference: ' + response.reference;
                alert(message);
            }
        });

        handler.openIframe();
    }
</script>


<!-- All JavaScript files
================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins for this template -->
<script src="assets/js/jquery-plugin-collection.js"></script>

<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from products.wp-ts.com/azedw/html-live/ltr/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:38:52 GMT -->
</html>