<?php include("./views/header.php"); ?>

<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->

<html lang="en">
<!--begin::Head-->



<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Mansou | Cadastro de imóveis</title>
    <meta name="description" content="Wizard examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../dist/bootstrap-tagsinput.css">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/mansouFav.ico" />



</head>
<!--end::Head-->
<!--begin::Body-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
<script type="text/javascript" src="/examples/js/typeahead/0.11.1/typeahead.bundle.js"></script>
<!--begin::Script to typesearch-->
<script>
    $(document).ready(function() {
        // Defining the local dataset
        var condominios = ['Orla 500', 'Orla 600', 'Orla 700', 'Santa margarida', 'Santa cecília', 'sana 1', 'sana 2', 'sana 3', 'sana 3', 'sana 4'];

        // Constructing the suggestion engine
        var condominios = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: condominios
        });

        // Initializing the typeahead
        $('.typeahead').typeahead({
            hint: true,
            highlight: true,
            /* Enable substring highlighting */
            minLength: 1 /* Specify minimum characters required for showing result */
        }, {
            name: 'condominios',
            source: condominios
        });
    });
</script>
<!--End::Script to typesearch-->
<!--begin::Script to radiobutton,select-padrão and masks-->
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        });
    });

    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".select").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".select").hide();
                }
            });
        }).change();
    });

    function mascara(t, mask) {
        var i = t.value.length;
        var saida = mask.substring(1, 0);
        var texto = mask.substring(i)
        if (texto.substring(0, 1) != saida) {
            t.value += texto.substring(0, 1);
        }
    }

    $(document).ready(function() {
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.cep').mask('00000-000');
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.cpf').mask('000.000.000-00', {
            reverse: true
        });
        $('.cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });
        $('.money').mask('000.000.000.000.000,00', {
            reverse: false
        });

    });
</script>
<!--End::Script to radiobutton,select-padrão and masks-->

<!--begin::Style to typesearch-->
<style>
    .typeahead,
    .tt-query,
    .tt-hint {
        /* Set input font size */

        line-height: 30px;
        outline: medium none;
        padding: 8px 12px;
        width: 450px;
    }

    .tt-menu {
        background-color: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        margin-top: 12px;
        padding: 8px 0;
        width: 450px;
    }

    .tt-suggestion {
        font-size: 22px;
        /* Set suggestion dropdown font size */
        padding: 3px 20px;
    }

    .tt-suggestion:hover {
        cursor: pointer;
        background-color: #0097CF;
        color: #FFFFFF;
    }

    .tt-suggestion p {
        margin: 0;
    }
</style>
<!--End::Style to typesearch-->



<body id="kt_body" style="background-image: url(assets/media/bg/bg-10.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="assets/media/logos/logo-letter-1.png" class="logo-default max-h-30px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    <h2 class="text-white font-weight-bold my-2 mr-5">Cadastro de imóveis</h2>
                                    <!--end::Title-->
                                    <!--begin::Breadcrumb-->
                                    <div class="d-flex align-items-center font-weight-bold my-2">
                                        <!--begin::Item-->
                                        <a href="#" class="opacity-75 hover-opacity-100">
                                            <i class="flaticon2-shelter text-white icon-1x"></i>
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Cadastro de imóveis</a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>

                                        <!--end::Item-->
                                    </div>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Heading-->
                            </div>
                            <!--end::Info-->

                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <div class="card card-custom">
                                <div class="card-body p-0">
                                    <!--begin::Wizard-->
                                    <div class="wizard wizard-1" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                                        <!--begin::Wizard Nav-->
                                        <div class="wizard-nav border-bottom">
                                            <div class="wizard-steps p-8 p-lg-10">
                                                <!--begin::Wizard Step 1 Nav-->
                                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-bus-stop"></i>
                                                        <h3 class="wizard-title">1.CondomÍnio</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 1 Nav-->
                                                <!--begin::Wizard Step 2 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-clipboard"></i>
                                                        <h3 class="wizard-title">2. Estrutura & Proprietário</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 2 Nav-->
                                                <!--begin::Wizard Step 3 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-list-1"></i>
                                                        <h3 class="wizard-title">3. Dados Primários</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 3 Nav-->
                                                <!--begin::Wizard Step 4 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-truck"></i>
                                                        <h3 class="wizard-title">4. Detalhes</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 4 Nav-->
                                                <!--begin::Wizard Step 5 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-list-1"></i>
                                                        <h3 class="wizard-title">5. Chaves & fotos </h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 5 Nav-->
                                            </div>
                                            <div class="wizard-steps p-8 p-lg-10">
                                                <!--begin::Wizard Step 6 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-list-1"></i>
                                                        <h3 class="wizard-title">6. </h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 6 Nav-->
                                                <!--begin::Wizard Step 7 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-truck"></i>
                                                        <h3 class="wizard-title">7.</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 7 Nav-->
                                                <!--begin::Wizard Step 8 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-globe"></i>
                                                        <h3 class="wizard-title">8.</h3>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 8 Nav-->

                                            </div>

                                        </div>
                                        <!--end::Wizard Nav-->
                                        <!--begin::Wizard Body-->
                                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                            <div class="col-xl-12 col-xxl-7">
                                                <!--begin::Wizard Form-->
                                                <form class="form" id="kt_form">
                                                    <!--begin::Wizard Step 1-->
                                                    <div class="pb-5 divEscolha2" data-wizard-type="step-content" data-wizard-state="current" id="">
                                                        <h3 class="mb-10 font-weight-bold text-dark">Preencha as informações abaixo:</h3>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Tem condomínio</label>
                                                                    <div class="form-group row">

                                                                        <div class="col-9 col-form-label">
                                                                            <div class="radio-inline">
                                                                                <label class="radio">
                                                                                    <input type="radio" name="option" value="temCondo" />
                                                                                    <span></span>Sim</label>
                                                                                <label class="radio">
                                                                                    <input type="radio" name="option" value="nTemCondo" />
                                                                                    <span></span>Não</label>

                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="temCondo box" style="display: none;">
                                                                        <label>Selecionar condomínio cadastrado</label>
                                                                        <div class="row">
                                                                            <div class="col-xl-6">
                                                                                <input type="text" class="form-control form-control-lg typeahead tt-query" autocomplete="off" spellcheck="false">
                                                                            </div>
                                                                        </div>&nbsp;&nbsp;
                                                                        <div class="row">
                                                                            <div class="col-xl-4">
                                                                                <!--begin::Input-->
                                                                                <div class="form-group">
                                                                                    <button type="button" class="btn btn-success" >Solicitar cadastro</button>
                                                                                </div>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                        </div>
                                                                    </div>&nbsp;&nbsp;



                                                                </div>
                                                                <!--end::Input-->
                                                            </div>

                                                        </div>

                                                        <div class="nTemCondo box" style="display: none; margin-top: -50px; ">
                                                            <div class="row ">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Cep</label>
                                                                        <input type="text" class="form-control form-control-lg" id="cep" name="cep" placeholder="CEP" onkeypress="mascara(this, '#####-###')" maxlength="9" value="" />
                                                                        <span class="form-text text-muted">Por favor, informe o seu Cep.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Vencimento da autorização de venda</label>
                                                                        <input type="date" class="form-control form-control-lg" name="dataAtualização" placeholder="" value="" />
                                                                        <span class="form-text text-muted">Por favor, informe a data.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Select-->
                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select name="Status" class="form-control form-control-lg">
                                                                            <option value="">Selecione</option>
                                                                            <option value="">Em construção</option>
                                                                            <option value="">Lançamentos</option>
                                                                            <option value="">Pronto</option>

                                                                        </select>
                                                                    </div>
                                                                    <!--end::Select-->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Step 1-->
                                                    <!--begin::Wizard Step 2-->
                                                    <div class="pb-5" data-wizard-type="step-content">

                                                        <!-- <h4 class="mb-10 font-weight-bold text-dark">Enter the Details of your Delivery</h4>-->
                                                        <!--begin::Input-->
                                                        <div class="row">
                                                            <div class="col-md-2 d-flex align-items-stretch">
                                                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                                                        <i class="icon-2x text-dark-50 flaticon-clipboard"></i>
                                                                    </div>
                                                                    <div class="text-muted">Estrutura</div>
                                                                </div>
                                                            </div>
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>Padrão</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione um padrão</option>
                                                                        <option value="residencial">Residencial</option>
                                                                        <option value="comercial">Comercial</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                            <!--begin::Input-->
                                                            <div class="col-xl-4 ">
                                                                <div class="form-group residencial select">
                                                                    <label>Tipo</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione um tipo</option>
                                                                        <option value="">Apartamento</option>
                                                                        <option value="">Casa Linear</option>
                                                                        <option value="">Casa Duplex</option>
                                                                        <option value="">Apartamento Duplex</option>
                                                                        <option value="">Cobertura</option>
                                                                        <option value="">Terreno</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                            <!--begin::Input-->
                                                            <div class="col-xl-4 ">
                                                                <div class="form-group comercial select">
                                                                    <label>Tipo</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione um tipo</option>
                                                                        <option value="">Galpão</option>
                                                                        <option value="">Casa</option>
                                                                        <option value="">Sala</option>
                                                                        <option value="">Loja</option>
                                                                        <option value="">Terreno</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->

                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="row">
                                                            <div class="col-md-2 d-flex align-items-stretch">
                                                                <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                                                    <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                                                        <i class="icon-2x text-dark-50 flaticon-users-1"></i>
                                                                    </div>
                                                                    <div class="text-muted">Dados do Proprietário</div>
                                                                </div>
                                                            </div>
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Nome</label>
                                                                    <input type="text" class="form-control form-control-lg" placeholder="" value="" />
                                                                    <span class="form-text text-muted">Por favor informe um nome.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>E-mail</label>
                                                                    <input type="text" class="form-control form-control-lg" value="mansou@gmail.com" />
                                                                    <span class="form-text text-muted">Por favor informe um E-mail.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>Mídia de origem</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione um tipo</option>
                                                                        <option value="">Xaveco</option>
                                                                        <option value="">Indicação</option>
                                                                        <option value="">Facebook</option>
                                                                        <option value="">Google</option>
                                                                        <option value="">Instagram</option>
                                                                        <option value="">Olx</option>
                                                                        <option value="">Zap Imóveis</option>
                                                                        <option value="">Site da Imobiliária</option>
                                                                        <option value="">Whats App</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Telefone Pricipal</label>
                                                                    <input type="text" class="form-control form-control-lg" placeholder="" onkeypress="mascara(this, '## #####-####')" maxlength="13" value="" />
                                                                    <span class="form-text text-muted">Por favor informe um telefone.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-success" style="margin-top: 30px;">Mais</button>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Step 2-->
                                                    <!--begin::Wizard Step 3-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <div class="col-md-2 d-flex align-items-stretch">
                                                            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                                                                <div class="mr-4 flex-shrink-0 text-center" style="width: 40px;">
                                                                    <i class="icon-2x text-dark-50 flaticon-list-1"></i>
                                                                </div>
                                                                <div class="text-muted">Dados Primários</div>
                                                            </div>
                                                        </div>&nbsp;&nbsp;

                                                        <div class="row ">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>cadastrado por</label>
                                                                    <input type="text" class="form-control form-control-lg" id="" name="" value="mansou" disabled />

                                                                </div>
                                                                <!--end::Input-->
                                                            </div>

                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione</option>
                                                                        <option value="">Ativo</option>
                                                                        <option value="">Provisório</option>
                                                                        <option value="">Cancelado</option>
                                                                        <option value="">Vendido</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Referência alternatica</label>
                                                                    <input type="text" class="form-control form-control-lg" id="" name="" value="mansou" disabled />

                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>Condição de IPTU</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione</option>
                                                                        <option value="">Mensal</option>
                                                                        <option value="">Anual</option>
                                                                        <option value="">Insento</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Valor do IPTU</label>
                                                                    <input type="text" class="form-control form-control-lg " name="" data-mask="000.000.000.000.000,00" placeholder="Valor" />

                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>Situação do imóvel</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione </option>
                                                                        <option value="">Não Informado</option>
                                                                        <option value="">Desocupado</option>
                                                                        <option value="">Ocupado</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>Exclusividade</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione </option>
                                                                        <option value="">Sim</option>
                                                                        <option value="">Não</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Ano de construção</label>
                                                                    <input type="text" class="form-control form-control-lg" name="" value="" />

                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>Usou o FGTS nos 2 ultimos anos?</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione </option>
                                                                        <option value="">Sim</option>
                                                                        <option value="">Não</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>Aceita Financiamento?</label>
                                                                    <select name="" class="form-control form-control-lg">
                                                                        <option value="">Selecione </option>
                                                                        <option value="">Sim</option>
                                                                        <option value="">Não</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Valor de avaliação da imobiliária</label>
                                                                    <input type="text" class="form-control form-control-lg" name="" value="" data-mask="000.000.000.000.000,00" placeholder="Valor" />

                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Valor de Venda</label>
                                                                    <input type="text" class="form-control form-control-lg" name="" value="" data-mask="000.000.000.000.000,00" placeholder="Valor" />
                                                                </div>
                                                                <!--end::Input-->
                                                            </div></br>



                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12"><label style="font-size: 20px;">Informações internas</label></div>&nbsp;&nbsp;

                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Adicionar comentário</label>
                                                                    <textarea type="text" class="form-control form-control-lg" name="" value="" style="margin-left: -5px;" /></textarea>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-success" style="margin-top: 30px;">Salvar</button>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>&nbsp;

                                                            <!--Begin:: tap and add tags-->
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label style="font-size: 20px;">Marcadores</label>
                                                                        <input type="text" class="form-control form-control-solid form-control-lg taginput" id="tag1" size="80" name="" value="" />

                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>

                                                            </div>

                                                            <!-- end::tags-->
                                                        </div>

                                                    </div>
                                                    <!--end::Wizard Step 3-->
                                                    <!--begin::Wizard Step 4-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Setup Your Delivery Location</h4>
                                                        <!--begin::Input-->
                                                        <div class="form-group">
                                                            <label>Address Line 1</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="locaddress1" placeholder="Address Line 1" value="Address Line 1" />
                                                            <span class="form-text text-muted">Please enter your Address.</span>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group">
                                                            <label>Address Line 2</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="locaddress2" placeholder="Address Line 2" value="Address Line 2" />
                                                            <span class="form-text text-muted">Please enter your Address.</span>
                                                        </div>
                                                        <!--end::Input-->
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Postcode</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="locpostcode" placeholder="Postcode" value="3072" />
                                                                    <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="loccity" placeholder="City" value="Preston" />
                                                                    <span class="form-text text-muted">Please enter your City.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="locstate" placeholder="State" value="VIC" />
                                                                    <span class="form-text text-muted">Please enter your State.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <!--begin::Select-->
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select name="loccountry" class="form-control form-control-solid form-control-lg">
                                                                        <option value="">Select</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AL">Albania</option>

                                                                    </select>
                                                                </div>
                                                                <!--end::Select-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Step 4-->
                                                    <!--begin::Wizard Step 5-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="" placeholder="State" value="VIC" />
                                                                    <span class="form-text text-muted">Please enter your State.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <!--begin::Select-->
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select name="" class="form-control form-control-solid form-control-lg">
                                                                        <option value="">Select</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AL">Albania</option>

                                                                    </select>
                                                                </div>
                                                                <!--end::Select-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Step 5-->
                                                    <!--begin::Wizard Step 6-->
                                                    <div class="pb-5" data-wizard-type="step-content">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="" placeholder="State" value="VIC" />
                                                                    <span class="form-text text-muted">Please enter your State.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <!--begin::Select-->
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select name="" class="form-control form-control-solid form-control-lg">
                                                                        <option value="">Select</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AL">Albania</option>

                                                                    </select>
                                                                </div>
                                                                <!--end::Select-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Step 6-->

                                                    <!--begin::Wizard Actions-->
                                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                        <div class="mr-2">
                                                            <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Voltar</button>
                                                        </div>
                                                        <div>
                                                            <!--<button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Cadastrar</button>-->
                                                            <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Próxima etapa</button>
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Actions-->
                                                </form>
                                                <!--end::Wizard Form-->
                                            </div>
                                        </div>
                                        <!--end::Wizard Body-->
                                    </div>
                                    <!--end::Wizard-->
                                </div>
                                <!--end::Wizard-->
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <?php include("./views/footer.php"); ?>

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/custom/wizard/wizard-1.js"></script>
    <!--end::Page Scripts-->
    <!--begin::style to tag input-->
    <style>
        .tagholder {
            position: relative;
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            color: white;


        }

        .tagitemover {
            background-color: #B0C4DE !important;
        }

        .tagitem {
            display: inline-block;
            background-color: #1E90FF;
            padding: 3px;
            border-radius: 3px;
            margin-top: 3px;
            margin-right: 2px;
            margin-bottom: 1px;
            margin-left: 2px;
        }

        .tagtext {
            float: left;
            position: relative;
            padding: 0px 4px 0px 4px;
            margin: 0px;

        }

        .tagclose {
            font: Arial, Helvetica, sans-serif;
            float: left;
            position: relative;
            padding: 0px 2px 0px 2px;
            margin: 0px;
            cursor: pointer;
        }

        .taginput {
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
            vertical-align: bottom;
            border-top-style: none;
            border-right-style: none;
            border-bottom-style: none;
            border-left-style: none;

        }

        .taginput:focus {
            outline: none;
        }

        .taginputholder {
            display: inline-block;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            padding-left: 2px;
            padding-right: 0px;
            padding-top: 10px;
            padding-bottom: 0px;
            position: relative;
            top: -5px;
        }
    </style>
    <!--end::style to tag input-->
    <!--begin::JS to tag input-->
    <script>
        function bindClose() {
            $('.tagclose').unbind('click').click(function() {
                li = $(this).parent();
                li.remove();
            });
            $('.tagclose').unbind('mouseover').mouseover(function() {
                $(this).parent().addClass('tagitemover');
                $(this).unbind('mouseleave').mouseleave(function() {
                    $(this).parent().removeClass('tagitemover');
                });
            });
        }

        $('.taginput').keydown(function(e) {
            var text = $(this).val();
            if (e.which == 8 && text.length == 0) {
                $(this).parent().prev('.tagitem').remove();
            }
            if (e.which == 32 || e.which == 13 || e.which == 188 || e.which == 9) {
                if (e.which == 188 || e.which == 9) {
                    e.preventDefault();
                }
                $(this).parent().before('<div class="tagitem"><div class="tagtext">' + text + '</div><div class="tagclose">x</div>			</div>');
                $(this).val('');
                bindClose();
            }
        });

        function addTags(inp, tagstr) {
            tagstr = tagstr.replace(/,/g, " ");
            var tags = tagstr.split(' ');
            for (tag in tags) {
                $(inp).parent().before('<div class="tagitem"><div class="tagtext">' + tags[tag] + '</div><div class="tagclose">x</div></div>');
            }
            bindClose();
        }


        $('.taginput').each(function() {
            $(this).wrap('<div class="tagholder"></div>');
            $(this).wrap('<div class="taginputholder"></div');
            $(this).focus();
        });

        addTags('#tag1', 'Espaçosa,Churrasqueira,Quintal');
    </script>
    <!--end::JS to tag input-->
</body>
<!--end::Body-->

</html>