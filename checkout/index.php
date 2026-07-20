<?php
$referer = em_get_referrer();

// Stripe settings (Settings → Ecomzy or wp-config.php define()).
$em_trial_days   = (int) EM_STRIPE_TRIAL_DAYS;
$em_amount_cents = (int) EM_STRIPE_AMOUNT_CENTS;
$em_amount_label = '$' . rtrim(rtrim(number_format($em_amount_cents / 100, 2, '.', ''), '0'), '.');

/**
 * Force jQuery to load in <head> on the checkout page.
 *
 * The checkout inline script depends on jQuery synchronously (Stripe Elements
 * mounting, AJAX, form handlers). By default WordPress loads jQuery in footer
 * (or not at all if nothing requests it), so we enqueue it here AND move it
 * into the head group (group 0 = head, 1 = footer).
 */
wp_enqueue_script( 'jquery' );
global $wp_scripts;
foreach ( [ 'jquery', 'jquery-core', 'jquery-migrate' ] as $handle ) {
    if ( isset( $wp_scripts->registered[ $handle ] ) ) {
        $wp_scripts->registered[ $handle ]->extra['group'] = 0;
    }
}
?>
<?php get_header(); ?>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    window.EM_CHECKOUT_NONCE = '<?php echo wp_create_nonce('em_checkout'); ?>';

    jQuery(function($){

        $('#stripe-name').val('');
        $('.purchase-form').removeClass('loading');

        var stripe = Stripe('<?php echo esc_js( EM_STRIPE_PUBLISHABLE_KEY ); ?>');

                // Shared subscription submission used by both card form and Apple/Google Pay.
                // opts: { paymentMethod, email, phone, onAuthorized?, onFail }
                //   onAuthorized fires once the server accepts the request (before any 3DS step) —
                //   Apple/Google Pay uses it to close the native sheet via ev.complete('success').
                //   onFail fires for any failure that prevents redirect.
                function submitSubscription(opts) {
                    $.ajax({
                        type: 'POST',
                        url:  '/wp-admin/admin-ajax.php',
                        data: {
                            action:         'em_create_subscription',
                            nonce:          window.EM_CHECKOUT_NONCE || '',
                            payment_method: opts.paymentMethod,
                            email:          opts.email,
                            phone:          opts.phone
                        },
                        success: function(response) {
                            if (!response.success) {
                                opts.onFail((response.data && response.data.message) || 'Subscription failed');
                                return;
                            }

                            if (opts.onAuthorized) opts.onAuthorized();

                            if (response.data.requires_action) {
                                stripe.confirmCardPayment(response.data.client_secret).then(function(r) {
                                    if (r.error) {
                                        opts.onFail(r.error.message);
                                    } else {
                                        window.location.replace(
                                            '/?checkout=success&sub=' + encodeURIComponent(response.data.subscription_id)
                                        );
                                    }
                                });
                            } else {
                                window.onbeforeunload = null;
                                window.location.replace(response.data.redirect);
                            }
                        },
                        error: function() {
                            opts.onFail('Server error. Please try again.');
                        }
                    });
                }

                function registerElements(elements, exampleName) {

                    var formClass    = '.' + exampleName;
                    var example      = $(formClass);
                    var form         = example;
                    var formPurchase = $('.purchase-form');
                    var error        = form.find('.error');
                    var errorMessage = error.find('.message');

                    function enableInputs() {
                        Array.prototype.forEach.call(
                            form.find( "input[type='text'], input[type='email'], input[type='tel']" ),
                            function(input) { input.removeAttribute('disabled'); }
                        );
                    }

                    function disableInputs() {
                        Array.prototype.forEach.call(
                            form.find( "input[type='text'], input[type='email'], input[type='tel']" ),
                            function(input) { input.setAttribute('disabled', 'true'); }
                        );
                    }

                    function triggerBrowserValidation() {}

                    var savedErrors = {};

                    elements.forEach(function(element, idx) {

                        element.on('change', function(event) {
                            if (event.error) {
                                error.addClass('visible');
                                savedErrors[idx] = event.error.message;
                                errorMessage.innerText = event.error.message;
                            } else {

                                savedErrors[idx] = null;

                                var nextError = Object.keys(savedErrors).sort()
                                    .reduce(function(maybeFoundError, key) {
                                        return maybeFoundError || savedErrors[key];
                                    }, null);

                                if (nextError) {
                                    errorMessage.innerText = nextError;
                                } else {
                                    error.removeClass('visible');
                                }

                                var c = elements.length - 1,
                                    n = idx === c ? false : idx + 1;

                                if( event.complete && n) {
                                    elements[n].focus();
                                }
                            }
                        });
                    });

                    formPurchase.on('submit', function(e) {

                        e.preventDefault();

                        if ( ! $('#agree_chk').is(':checked') ) {
                            alert('Please agree to the Terms to complete your order.');
                            return;
                        }

                        formPurchase.addClass('loading');

                        var plainInputsValid = true;
                        Array.prototype.forEach.call(formPurchase.find('input'), function( input ) {
                            if (input.checkValidity && !input.checkValidity()) {
                                plainInputsValid = false;
                                formPurchase.removeClass('loading');
                                return;
                            }
                        });

                        var validInput = $('.stripe .input');
                        validInput.parent('.field').removeClass('border-red');
                        var invalidInput = $('.stripe .input.invalid, .stripe .input.empty');
                        if( invalidInput.length > 0 ) {
                            plainInputsValid = false;
                            invalidInput.parent('.field').addClass('border-red');
                            formPurchase.removeClass('loading');
                        }

                        if (!plainInputsValid) {
                            triggerBrowserValidation();
                            formPurchase.removeClass('loading');
                            return;
                        }

                        $('#purchase-shadow').fadeIn();
                        example.addClass('submitting');
                        disableInputs();

                        var name = formPurchase.find('#' + exampleName + '-name');
                        var address1 = formPurchase.find('#' + exampleName + '-address1');
                        var address2 = formPurchase.find('#' + exampleName + '-address2');
                        var city = formPurchase.find('#' + exampleName + '-city');
                        var state = formPurchase.find('#' + exampleName + '-state');
                        var zip = formPurchase.find('#' + exampleName + '-zip');
                        var country = formPurchase.find('#' + exampleName + '-country');
                        var additionalData = {
                            name: name ? name.val() : undefined,
                            address_line1: address1 ? address1.val() : undefined,
                            address_line2: address2 ? address2.val() : undefined,
                            address_city: city ? city.val() : undefined,
                            address_state: state ? state.val() : undefined,
                            country: country ? country.val() : undefined,
                            address_zip: zip ? zip.val() : undefined
                        };

                        // Create PaymentMethod (modern Stripe API for subscriptions)
                        stripe.createPaymentMethod({
                            type: 'card',
                            card: elements[0],
                            billing_details: {
                                name:  additionalData.name,
                                email: $('#form-email').val(),
                                phone: $('input[name="phone"]').val(),
                                address: {
                                    line1:       additionalData.address_line1,
                                    line2:       additionalData.address_line2,
                                    city:        additionalData.address_city,
                                    state:       additionalData.address_state,
                                    country:     additionalData.country,
                                    postal_code: additionalData.address_zip
                                }
                            }
                        }).then(function(result) {

                            example.removeClass('submitting');

                            if (!result.paymentMethod) {
                                if (result.error) alert(result.error.message);
                                formPurchase.removeClass('loading');
                                enableInputs();
                                return;
                            }

                            submitSubscription({
                                paymentMethod: result.paymentMethod.id,
                                email:         $('#form-email').val(),
                                phone:         $('input[name="phone"]').val(),
                                onFail: function(msg) {
                                    alert(msg);
                                    formPurchase.removeClass('loading');
                                }
                            });
                        });
                    });
                }

                var elements = stripe.elements({
                    fonts: [ {
                        cssSrc: 'https://fonts.googleapis.com/css?family=Open+Sans:400,500'
                    } ],
                    locale: window.__exampleLocale
                });

                var elementStyles = {
                    base: {
                        color: '#000',
                        fontWeight: '400',
                        fontFamily: 'Arial, Helvetica, sans-serif',
                        fontSize: '19px',
                        lineHeight: '28px',
                        fontSmoothing: 'antialiased',
                        '::placeholder': { color: '#C4C4C4' },
                        ':-webkit-autofill': { color: '#000' }
                    },
                    invalid: {
                        color: '#E25950',
                        '::placeholder': { color: '#FFCCA5' }
                    }
                };

                var elementClasses = {
                    focus   : 'focused',
                    empty   : 'empty',
                    invalid : 'invalid'
                };

                var cardNumber = elements.create('cardNumber', {
                    style       : elementStyles,
                    classes     : elementClasses,
                    placeholder : 'Card number',
                    showIcon    : false
                });
                cardNumber.mount('#stripe-card-number');

                var cardExpiry = elements.create('cardExpiry', {
                    style       : elementStyles,
                    classes     : elementClasses,
                    placeholder : 'MM / YY'
                });
                cardExpiry.mount('#stripe-card-expiry');

                var cardCvc = elements.create('cardCvc', {
                    style       : elementStyles,
                    classes     : elementClasses,
                    placeholder : 'CVC'
                });
                cardCvc.mount('#stripe-card-cvc');

                registerElements([cardNumber, cardExpiry, cardCvc], 'stripe');

                // ─── Apple Pay / Google Pay / Microsoft Pay ───
                var SUBSCRIPTION_AMOUNT = <?php echo (int) $em_amount_cents; ?>; // full price after trial, in cents

                paymentRequest = stripe.paymentRequest({
                    country:  'US',
                    currency: 'usd',
                    total: {
                        label:   'Ecomzy Pro',
                        amount:  SUBSCRIPTION_AMOUNT,
                        pending: true   // marks "will be charged later" — needed because trial = $0
                    },
                    displayItems: [
                        { label: '<?php echo esc_js( $em_trial_days ); ?>-day free trial', amount: 0 },
                        { label: 'Then <?php echo esc_js( $em_amount_label ); ?>/month',   amount: SUBSCRIPTION_AMOUNT, pending: true }
                    ],
                    requestPayerName:  true,
                    requestPayerEmail: true,
                    requestPayerPhone: true
                });

                // Stripe's branded button (auto-detects Apple/Google/Microsoft Pay)
                var prButton = elements.create('paymentRequestButton', {
                    paymentRequest: paymentRequest,
                    style: {
                        paymentRequestButton: {
                            type:   'default',  // 'default' | 'buy' | 'donate' | 'subscribe'
                            theme:  'dark',
                            height: '56px'
                        }
                    }
                });

                paymentRequest.canMakePayment().then(function(result) {
                    if (result) {
                        prButton.mount('#payment-request-button');
                        $('#payment-request-button-wrapper').show();
                        $('.payment-divider').show();
                    } else {
                        $('#payment-request-button-wrapper').hide();
                        $('.payment-divider').hide();
                    }
                });

                // Modern flow: receive a PaymentMethod (works with subscriptions)
                paymentRequest.on('paymentmethod', function(ev) {

                    if (!$('#agree_chk').is(':checked')) {
                        ev.complete('fail');
                        alert('Please agree to the Terms to complete your order.');
                        return;
                    }

                    $('#purchase-shadow').fadeIn();

                    // Track the native sheet so we don't call ev.complete() twice if 3DS fails
                    // after we've already reported success and closed the sheet.
                    var sheetOpen = true;
                    submitSubscription({
                        paymentMethod: ev.paymentMethod.id,
                        email:         ev.payerEmail || $('#form-email').val(),
                        phone:         ev.payerPhone || $('input[name="phone"]').val(),
                        onAuthorized: function() {
                            ev.complete('success');
                            sheetOpen = false;
                        },
                        onFail: function(msg) {
                            if (sheetOpen) ev.complete('fail');
                            alert(msg);
                            $('#purchase-shadow').fadeOut();
                        }
                    });
                });

    });
</script>

<section id="checkout">
    <div class="container content">
        <div class="logo" style="text-align:center"><a href="<?php echo home_url('/'); ?>" style="font-family:'Fraunces',Georgia,serif;font-weight:700;font-size:32px;color:#000;text-decoration:none;letter-spacing:-.02em;display:inline-block;line-height:1">ecomzy<span style="color:#14B8A6">.</span></a></div>
        <h1 style="text-align:center">Get your own ecommerce store with a FREE <?php echo (int) $em_trial_days; ?>-day trial </h1>

        <ul class="included-items">
            <li class="item"><i></i><span>Fully functional online store</span></li>
            <li class="item"><i></i><span>AI best-sellers pre-loaded</span></li>
            <li class="item"><i></i><span>Unlimited catalog upgrades</span></li>
        </ul>

        <div class="payment-summary">
            <div class="item">
                <div class="name">
                    Turnkey ecommerce store
                    <div class="description">Free if you act now</div>
                </div>
                <div class="price">
                    <span class="price-new">US $0.00</span>
                </div>
            </div>
            <div class="item">
                <div class="name">
                    Hosting
                    <div class="description">Free with Pro subscription</div>
                </div>
                <div class="price">
                    <span class="price-new">US $0.00</span>
                </div>
            </div>
            <div class="item">
                <div class="name">
                    Pro subscription
                    <div class="description">Try for free for <?php echo (int) $em_trial_days; ?> days. <?php echo esc_html( $em_amount_label ); ?>/month after trial. Cancel anytime</div>
                </div>
                <div class="price">
                    <span class="price-new">US $0.00</span>
                </div>
            </div>
            <div class="item amazon-package">
                <div class="name with-present">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/pages/checkout/images/present.svg" alt="Present" /> Amazon business package
                </div>
                <div class="price">
                    <span class="price-new">US $0.00</span>
                </div>
            </div>
            <div class="item todays-charge">
                <div class="name">
                    Today's charge
                </div>
                <div class="price">
                    <span class="price-new">US $0.00</span>
                </div>
            </div>
        </div>
        <form class="purchase-form" action="<?php echo em_current_url(); ?>" method="POST" onsubmit="return false;">
            <input type="hidden" name="http_referer" value="<?php echo $referer?>">
            <div class="client-info">
                <div class="title">Your information</div>
                <div class="email">
                    <input type="email" id="form-email" name="email" placeholder="Your email*" value="" required />
                </div>
                <div class="phone-group">
                    <select name="code" class="code">
                        <?php echo em_phone_codes_options(); ?>
                    </select>
                    <input type="tel" class="phone" name="phone" value="" placeholder="Your phone">
                </div>
            </div>
            <div class="payment-info">
                <div class="title">Your payment info</div>

                <!-- Express checkout (Apple Pay / Google Pay / Microsoft Pay) -->
                <div id="payment-request-button-wrapper" class="express-pay" style="display:none">
                    <div id="payment-request-button"></div>
                </div>

                <!-- Divider, only visible when express pay is available -->
                <div class="payment-divider" style="display:none"><span>or pay with card</span></div>

                <div class="pay-card">
                    <img class="resp" src="<?php echo get_stylesheet_directory_uri(); ?>/pages/checkout/images/secure.webp" alt="secure">
                </div>

                <div class="stripe card-info">
                    <div class="field card-number">
                        <div id="stripe-card-number" class="StripeElement"></div>
                        <span class="lock"></span>
                    </div>
                    <div class="field holder">
                        <input id="stripe-name" type="text" placeholder="Name on card" autocomplete="cc-name" required />
                    </div>
                    <div class="card-group">
                        <div class="field expired">
                            <div id="stripe-card-expiry" class="StripeElement"></div>
                        </div>
                        <div class="field cvc">
                            <div id="stripe-card-cvc" class="StripeElement"></div>
                        </div>
                    </div>
                </div>
                <div class="safe">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/pages/checkout/images/lock2.svg" alt=""><span>Guaranteed <strong>safe & secure</strong> checkout</span>
                </div>
            </div>
            <?php wp_nonce_field( 'ecomzy_action', 'purchase' ); ?>
            <button type="submit" class="btn btn-primary btn-wide btn-square" name="purchase_btn" id="purchase_btn" disabled>COMPLETE ORDER</button>
        </form>
        <p class="agree-note">*Please check the box below to complete your order.</p>
        <div class="agree">
            <input type="checkbox" id="agree_chk" required />
            <label for="agree_chk">
                I agree to the Ecomzy <a target="_blank" href="<?php echo home_url('/terms-of-service/')?>">Terms of Service</a> and <a target="_blank" href="<?php echo home_url('/privacy-policy/')?>">Privacy Policy</a>. I understand that this is a recurring subscription. I will be charged automatically on a recurring basis until I cancel. Refund and cancellation terms are outlined in the <a target="_blank" href="<?php echo home_url('/cancellation-refund-policy/')?>">Cancellation & Refund Policy</a>.
            </label>
        </div>
        <div class="badges">
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/pages/checkout/images/ssl.svg" alt="">
            </div>
        </div>
        <div class="address">
            &copy; 2026 Ecomzy Technologies Corporation, 2 PARK PLAZA STE 680, Irvine, CA 92614
        </div>
    </div>
</section>

<script>
document.getElementById('agree_chk').addEventListener('change',function(){
  var btn=document.getElementById('purchase_btn');
  var note=document.querySelector('.agree-note');
  if(this.checked){
    btn.disabled=false;
    btn.style.background='#14B8A6';
    btn.style.borderColor='#14B8A6';
    btn.style.cursor='pointer';
    btn.style.opacity='1';
    note.style.visibility='hidden';
  }else{
    btn.disabled=true;
    btn.style.background='#ccc';
    btn.style.borderColor='#ccc';
    btn.style.cursor='not-allowed';
    btn.style.opacity='.6';
    note.style.visibility='';
  }
});
</script>
<?php wp_footer(); ?>
</body>
</html>
