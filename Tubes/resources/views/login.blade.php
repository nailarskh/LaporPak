<!DOCTYPE html>
<html>
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35959721-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-35959721-1');
</script>

        <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


<!-- Place this data between the <head> tags of your website -->
<title>Laporpak - Layanan Aspirasi dan Pengaduan Online Rakyat</title>
<meta name="description" content="Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan peng...">

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="LAPOR! - Layanan Aspirasi dan Pengaduan Online Rakyat">
<meta itemprop="description" content="Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan pengendalian pembangunan.">
<meta itemprop="image" content="http://storage.lapor.go.id/app/media/meta-image.png">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@lapor1708">
<meta name="twitter:title" content="LAPOR! - Layanan Aspirasi dan Pengaduan Online Rakyat">
<meta name="twitter:description" content="Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan pengendalian pembangunan.">

<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="http://storage.lapor.go.id/app/media/meta-image.png">

<!-- Open Graph data -->
<meta property="og:title" content="LAPOR! - Layanan Aspirasi dan Pengaduan Online Rakyat">
<meta property="og:url" content="https://www.lapor.go.id">
<meta property="og:image" content="http://storage.lapor.go.id/app/media/meta-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:description" content="Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan pengendalian pembangunan.">
<meta property="og:site_name" content="LAPOR!">

<!-- Facebook Data -->
<meta property="fb:app_id" content="">
<meta property="fb:page_id" content="">

<link rel="canonical" href="https://www.lapor.go.id">

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#d7381b">
<meta name="apple-mobile-web-app-title" content="LAPOR!">
<meta name="application-name" content="LAPOR!">
<meta name="theme-color" content="#ffffff">


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<!-- App Styles -->
<link href="https://www.lapor.go.id/combine/5e24a11fe81b9d5f0fc0aa9398e1ac61-1672992492" rel="stylesheet">

<script src="https://www.lapor.go.id/themes/lapor/assets/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://www.lapor.go.id/plugins/responsiv/uploader/assets/css/uploader.css">
<link rel="stylesheet" href="https://www.lapor.go.id/combine/dd210100717441921d495d4a1c5993ad-1672992490">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://www.lapor.go.id/combine/e9a4917f59135d5229709d7de58e1433-1672992490"></script>
        <script src="https://www.lapor.go.id/themes/lapor/assets/js/zingchart.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script> <!-- Baru chart plugin untuk pie -->


    </head>

    <body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
        <form action="/login" method="post">
            @csrf
            <input type="hidden" name="_method" value="POST">
            <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                      <h5 class="separator"><span>Login</span></h5>
                            <div class="form-group">
                                <label for="userSigninLogin">Email</label>
                                <input
                                    name="email"
                                    type="text"
                                    class="form-control"
                                    id="userSigninLogin"
                                    tabindex="1"
                                    required>
                            </div>
                            <div class="form-group">
                                <a href="" class="pull-right"></a>
                                <label for="userSigninPassword">Password</label>
                                <input
                                    name="password"
                                    type="password"
                                    autocomplete="off"
                                    class="form-control"
                                    id="userSigninPassword"
                                    tabindex="2"
                                    required>
                            </div>
                            <div id="google-captcha"></div>
                            <div class="form-group" style="color: blue;">
                                <button type="submit" class="btn btn-primary btn-block" data-attach-loading
                                
                                >Masuk</button>
                            </div>
                        </div>
                    </div>
        </form>
        <center><p>Belum Punya Akun? <a href="/registrasi">Daftar</a></p></center>
    </body>
</html>