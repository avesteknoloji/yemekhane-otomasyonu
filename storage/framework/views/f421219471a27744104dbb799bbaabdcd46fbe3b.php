<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
        <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app" />
        <meta name="author" content="pixelstrap" />
        <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon" />
        <title>viho - Premium Admin Template</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/fontawesome.css')); ?>" />
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <style type="text/css">
            body {
                text-align: center;
                margin: 0 auto;
                width: 650px;
                font-family: work-Sans, sans-serif;
                background-color: #f6f7fb;
                display: block;
            }
            ul {
                margin: 0;
                padding: 0;
            }
            li {
                display: inline-block;
                text-decoration: unset;
            }
            a {
                text-decoration: none;
            }
            h5 {
                margin: 10px;
                color: #777;
            }
            .text-center {
                text-align: center;
            }
            .main-bg-light {
                background-color: #fafafa;
            }
            .title {
                color: #444444;
                font-size: 22px;
                font-weight: bold;
                margin-top: 0px;
                margin-bottom: 10px;
                padding-bottom: 0;
                text-transform: uppercase;
                display: inline-block;
                line-height: 1;
            }
            .menu {
                width: 100%;
            }
            .menu li a {
                text-transform: capitalize;
                color: #444;
                font-size: 16px;
                margin-right: 15px;
                font-weight: 600;
            }
            .main-logo {
                padding: 10px 20px;
                margin-bottom: -5px;
            }
            .product-box .product {
                text-align: center;
                position: relative;
            }
            .product-info {
                margin-top: 15px;
            }
            .product-info h6 {
                line-height: 1;
                margin-bottom: 0;
                padding-bottom: 5px;
                font-size: 14px;
                font-family: "Open Sans", sans-serif;
                color: #777;
                margin-top: 0;
            }
            .product-info h4 {
                font-size: 16px;
                color: #444;
                font-weight: 700;
                margin-bottom: 0;
                margin-top: 5px;
                padding-bottom: 5px;
                line-height: 1;
            }
            .footer-social-icon tr td img {
                margin-left: 5px;
                margin-right: 5px;
            }
            .temp-social td {
                display: inline-block;
            }
            .temp-social td i {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #24695c;
                //- padding:10px;
                background-color: #24695c3d;
                transition: all 0.5s ease;
            }
            .temp-social td:nth-child(n + 2) {
                margin-left: 15px;
            }
        </style>
    </head>
    <body style="margin: 20px auto;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353); box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
            <tbody>
                <tr>
                    <td>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr class="header">
                                    <td align="left" valign="top"><img class="main-logo" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" /></td>
                                    <td class="menu" align="right">
                                        <ul>
                                            <li><a href="javascript:void(0)">Home</a></li>
                                            <li><a href="javascript:void(0)">Whishlist</a></li>
                                            <li><a href="javascript:void(0)">my cart</a></li>
                                            <li><a href="javascript:void(0)">Contact</a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="slider" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <th align="center" width="40%"><img src="<?php echo e(asset('assets/images/email-template/slider.jpg')); ?>" alt="" style="margin-bottom: -5px;" /></th>
                                    <th width="60%" style="background-color: #11bfff; padding: 30px;">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td style="color: #ffffff; font-size: 16px; line-height: 20px; text-transform: uppercase; text-align: left; padding-bottom: 5px;">New Color</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="h2-white left pb20"
                                                        style="color: #ffffff; font-family: 'Roboto', sans-serif; font-size: 52px; line-height: 58px; text-transform: uppercase; font-weight: bold; text-align: left; padding-bottom: 20px;"
                                                    >
                                                        new <br />
                                                        season
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="font-size: 13px; color: #4e54cb; text-align: left; color: #fff;">We are committed to your satisfaction with every order.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td
                                                        class="text-button white-button"
                                                        style="font-size: 14px; line-height: 18px; text-align: center; text-transform: uppercase; padding: 10px; background: #ffffff; color: #f54084; font-weight: bold;"
                                                    >
                                                        <a href="javascript:void(0)" target="_blan" style="color: #4e54cb; text-decoration: none;"><span style="color: #f1415e; text-decoration: none;">shop now</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <h4 class="title" style="width: 100%; text-align: center; margin-top: 50px;">trending product</h4>
                        <p style="margin: 0; color: #aba8a8; font-size: 14px;">GET EVEN 25% OFF DISCOUNT</p>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 30px;">
                            <thead>
                                <tr></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product-box hover">
                                            <div class="product border-theme br-0"><img src="<?php echo e(asset('assets/images/email-template/7.jpg')); ?>" alt="product" style="width: 100%;" /></div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" tabindex="0"> <h6>When an unknown.</h6></a>
                                                <h4>$45.00</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-box hover">
                                            <div class="product border-theme br-0"><img src="<?php echo e(asset('assets/images/email-template/8.jpg')); ?>" alt="product" style="width: 100%;" /></div>
                                            <div class="product-info">
                                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                <a href="javascript:void(0)" tabindex="0"> <h6>When an unknown.</h6></a>
                                                <h4>$45.00</h4>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" align="center" style="margin-top: 30px;">
                            <tbody>
                                <tr class="add-with-banner" align="center">
                                    <td>
                                        <a href="javascript:void(0)"><img src="<?php echo e(asset('assets/images/email-template/banner.jpg')); ?>" alt="product" style="width: 100%;" /></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" align="center" style="margin-top: 30px;">
                            <tbody>
                                <tr>
                                    <td><img src="<?php echo e(asset('assets/images/email-template/banner-2.jpg')); ?>" alt="" style="width: 100%;" /></td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 30px;">
                            <tbody>
                                <tr>
                                    <td align="center">
                                        <table class="display-width-inner" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 450px;">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="width: 40%;"><img src="<?php echo e(asset('assets/images/email-template/10.jpg')); ?>" alt="" style="width: 225px; margin-bottom: -4px;" /></td>
                                                    <td align="center" style="background-color: #fafafa; width: 60%;">
                                                        <h3 style="margin: 0;">Product One</h3>
                                                        <div style="color: #e01931; font-weight: 600; font-size: 16px; line-height: 27px; letter-spacing: 1px; margin: 4px;">
                                                            <span
                                                                class="txt-price1"
                                                                style="color: #666666; font-weight: 600; font-size: 15px; line-height: 25px; letter-spacing: 1px;"
                                                                data-color="Price1"
                                                                data-size="Price1"
                                                                data-min="10"
                                                                data-max="35"
                                                            >
                                                                <strike>$25.00</strike>
                                                            </span>
                                                            <span class="txt-price2"></span>$20.90
                                                        </div>
                                                        <div style="padding: 15px 0px; text-transform: uppercase; font-size: 11px; letter-spacing: 1px;">
                                                            <a href="javascript:void(0)" style="color: #ffffff; text-decoration: none; background: #000; padding: 8px 12px;">SHOP NOW</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="display-width-inner" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 450px;">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="background-color: #fafafa; width: 60%;">
                                                        <h3 style="margin: 0;">Product One</h3>
                                                        <div style="color: #e01931; font-weight: 600; font-size: 16px; line-height: 27px; letter-spacing: 1px; margin: 4px;">
                                                            <span
                                                                class="txt-price1"
                                                                style="color: #666666; font-weight: 600; font-size: 15px; line-height: 25px; letter-spacing: 1px;"
                                                                data-color="Price1"
                                                                data-size="Price1"
                                                                data-min="10"
                                                                data-max="35"
                                                            >
                                                                <strike>$25.00</strike>
                                                            </span>
                                                            <span class="txt-price2"></span>$20.90
                                                        </div>
                                                        <div style="padding: 15px 0px; text-transform: uppercase; font-size: 11px; letter-spacing: 1px;">
                                                            <a href="javascript:void(0)" style="color: #ffffff; text-decoration: none; background: #000; padding: 8px 12px;">SHOP NOW</a>
                                                        </div>
                                                    </td>
                                                    <td align="center" style="width: 40%;"><img src="<?php echo e(asset('assets/images/email-template/11.jpg')); ?>" alt="" style="width: 225px; margin-bottom: -4px;" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="display-width-inner" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 450px;">
                                            <tbody>
                                                <tr>
                                                    <td align="center" style="width: 40%;"><img src="<?php echo e(asset('assets/images/email-template/12.jpg')); ?>" alt="" style="width: 225px; margin-bottom: -4px;" /></td>
                                                    <td align="center" style="background-color: #fafafa; width: 60%;">
                                                        <h3 style="margin: 0;">Product One</h3>
                                                        <div style="color: #e01931; font-weight: 600; font-size: 16px; line-height: 27px; letter-spacing: 1px; margin: 4px;">
                                                            <span
                                                                class="txt-price1"
                                                                style="color: #666666; font-weight: 600; font-size: 15px; line-height: 25px; letter-spacing: 1px;"
                                                                data-color="Price1"
                                                                data-size="Price1"
                                                                data-min="10"
                                                                data-max="35"
                                                            >
                                                                <strike>$25.00</strike>
                                                            </span>
                                                            <span class="txt-price2"></span>$20.90
                                                        </div>
                                                        <div style="padding: 15px 0px; text-transform: uppercase; font-size: 11px; letter-spacing: 1px;">
                                                            <a href="javascript:void(0)" style="color: #ffffff; text-decoration: none; background: #000; padding: 8px 12px;">SHOP NOW</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="main-bg-light text-center top-0" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"></table>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td style="padding: 30px;">
                                        <div>
                                            <h4 class="title" style="margin: 0; text-align: center;">Follow us</h4>
                                        </div>
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" style="margin-top: 20px;">
                                            <tbody>
                                                <tr class="temp-social">
                                                    <td>
                                                        <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i class="fa fa-youtube-play"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i class="fa fa-linkedin"> </i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div style="border-top: 1px solid #ddd; margin: 20px auto 0;"></div>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0;">
                                            <tbody>
                                                <tr>
                                                    <td><a href="javascript:void(0)" style="color: #24695c; font-size: 14px; text-transform: capitalize; font-weight: 600;">Want to change how you receive these emails?</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="font-size: 14px; margin: 8px 0; color: #aba8a8;">2021 - 22 Copy Right by Themeforest powerd by Pixel Strap</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript:void(0)" style="color: #24695c; font-size: 14px; text-transform: capitalize; font-weight: 600; margin: 0; text-decoration: underline;">Unsubscribe</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
<?php /**PATH X:\Yemekhane projesi\Yemekhane\yemekhane-otomasyonu\resources\views/admin/email/template-email-2.blade.php ENDPATH**/ ?>