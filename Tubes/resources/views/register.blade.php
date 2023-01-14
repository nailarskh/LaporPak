<!DOCTYPE html>
<html>
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-35959721-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-35959721-1');
</script>

        <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


<!-- Place this data between the <head> tags of your website -->
<title>Daftar - LAPOR!</title>
<meta name="description" content="Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan peng...">

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Daftar - LAPOR!">
<meta itemprop="description" content="Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan pengendalian pembangunan.">
<meta itemprop="image" content="http://storage.lapor.go.id/app/media/meta-image.png">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@lapor1708">
<meta name="twitter:title" content="Daftar - LAPOR!">
<meta name="twitter:description" content="Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan pengendalian pembangunan.">

<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="http://storage.lapor.go.id/app/media/meta-image.png">

<!-- Open Graph data -->
<meta property="og:title" content="Daftar - LAPOR!">
<meta property="og:url" content="https://www.lapor.go.id/account/register">
<meta property="og:image" content="http://storage.lapor.go.id/app/media/meta-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:description" content="Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan pengendalian pembangunan.">
<meta property="og:site_name" content="LAPOR!">

<!-- Facebook Data -->
<meta property="fb:app_id" content="">
<meta property="fb:page_id" content="">

<link rel="canonical" href="https://www.lapor.go.id/account/register">

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
<link href="https://www.lapor.go.id/combine/5e24a11fe81b9d5f0fc0aa9398e1ac61-1673278448" rel="stylesheet">

<script src="https://www.lapor.go.id/themes/lapor/assets/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://www.lapor.go.id/plugins/responsiv/uploader/assets/css/uploader.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://www.lapor.go.id/combine/e9a4917f59135d5229709d7de58e1433-1673278447"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
        <script src="https://www.lapor.go.id/themes/lapor/assets/js/zingchart.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script> <!-- Baru chart plugin untuk pie -->


    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/12a/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/12a/util.js"></script></head>

    <body class=" pd-t-0 " data-new-gr-c-s-check-loaded="14.1026.0" data-gr-ext-installed="">
        <div class="loader-custom hidden"></div>
        
        <script>
    function cekNIK(){
        $('#registerNIK').get(0).setCustomValidity('');
        strNik = $('#registerNIK').val();
        if (strNik !== '') {
            if (!isNaN(strNik)){
                if(strNik.length == 16) {
                    if (strNik.substr(0,1) == '0') {
                      // alert('Digit Pertama NIK tidak boleh 0');
                      // asd.setCustomValidity('Digit Pertama NIK tidak boleh 0');
                      $('#registerNIK').get(0).setCustomValidity('Digit Pertama NIK tidak boleh 0');
                    }else if (strNik.slice(- 4) == '0000'){
                      // alert('4 Digit Terakhir tidak boleh 0');
                      // asd.setCustomValidity('4 Digit Terakhir NIK tidak boleh 0');
                        $('#registerNIK').get(0).setCustomValidity('4 Digit Terakhir tidak boleh 0');  
                    }
                }else{
                    // asd.setCustomValidity('NIK harus terdiri 16 numerik');
                    // alert('NIK harus terdiri 16 numerik');
                    $('#registerNIK').get(0).setCustomValidity('NIK harus terdiri 16 numerik');
                }
            }else{
                // alert('Format NIK harus Numerik');
                $('#registerNIK').get(0).setCustomValidity('Format NIK harus Numerik');
            }
        }
    }
</script>
<div class="full-height block-confirmation mb-0">
    <div class="container">
        <a>
            <img src="/storage/Logo_Pemalang.png" alt="404" style="width: 80px; top:0%;">
        </a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="panel panel-confirmation pd-25">
                    <h1 class="text-center mg-b-20">Daftar</h1>

                    
                    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
<form action="/register" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            
            <div class="col-md-6">
                <div class="form-group is-required">
                    <label for="registerName">Nama Lengkap</label>
                    <input name="name" type="text" class="form-control" id="registerName" required="" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group is-required">
                        <label for="hp">No. Telp Aktif</label>
                        <input name="hp" type="tel" class="form-control" id="hp" placeholder="Minimal 8-14 Angka" required="">
                    </div>
            </div>
        </div>
        
        
        <div class="col-md-12">
            
            <div class="col-md-6">
                <div class="form-group is-required">
                    <label for="registerEmail">Email</label>
                    <input name="email" type="email" class="form-control" id="registerEmail" placeholder="lapor@contoh.com" required="">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group form-password is-required">
                    <label for="registerPassword">Password</label>
                    <input name="password" type="password" class="form-control" id="registerPassword" autocomplete="off" placeholder="Minimal 8 karakter &amp; berisi alfanumerik" required="">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-password is-required">
                    <label for="confirm">Password Confirmation</label>
                    <input name="confirm" type="password" class="form-control" autocomplete="off" id="confirm" placeholder="Minimal 8 karakter &amp; berisi alfanumerik" required="">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
        </div>
    </div>

        
        <div class="col-md-12">
            <div class="form-group light-checkbox">
                <input type="checkbox" id="tos" data-track-input="" name="tos" value="1"> <label for="tos">Saya telah membaca dan menyetujui <a href="https://www.lapor.go.id/terms-of-use" target="_blank">Syarat dan Ketentuan Layanan</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block mg-t-20" data-attach-loading="">Daftar</button>
            </div>
        </div>
</form>


                        </div>
                    </div>
                    <div class="text-center">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/" class="btn btn-warning text-white ">Kembali ke Halaman depan</a>
            </div>
        </div>
    </div>
</div>
    
<!-- 
    <div class="col-sm-6 block-register-showcase" style="background-image: url('https://www.lapor.go.id/themes/lapor/assets/images/register-bg.png')">
        <a href="https://www.lapor.go.id">
            <img src="https://www.lapor.go.id/themes/lapor/assets/images/logo-white.png" alt="" class="img-responsive">
        </a>
    </div> -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4>Translate Page</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    Disclaimer: Anda menggunakan Google Translate. Kami tidak bertanggung jawab atas keakuratan informasi dalam bahasa diterjemahkan
                    <div id="google_translate_element" style="width: 100%;"></div>
                </div>
              </div>
            </div>
          </div>

        
        <form method="POST" action="/login" accept-charset="UTF-8" data-request="laporAuth::onSignin" data-request-update="'captcha-login': '#google-captcha'"><input name="_session_key" type="hidden" value="UkRhMKg4EmdzTMaEv1lrsshoUS11ujed9HmaSHt1"><input name="_token" type="hidden" value="2QaBV6MulhtQIN3QbHnbEilNlrwIs94HGKJYK983">
    <div class="modal fade" id="modalLogin">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-center">MASUK</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h5 class="separator"><span>Gunakan Akun Media Sosial Anda</span></h5>
<div class="row">
    <div class="col-sm-6">
        <a href="https://www.lapor.go.id/flynsarmy/sociallogin/Facebook?s=https://www.lapor.go.id/account/register&amp;f=https://www.lapor.go.id/account/register" class="btn btn-block btn-facebook mg-b-20">
            <i class="fa fa-facebook fa-fw"></i> Facebook
        </a>
    </div>
    <div class="col-sm-6">
        <a href="https://www.lapor.go.id/flynsarmy/sociallogin/Twitter?s=https://www.lapor.go.id/account/register&amp;f=https://www.lapor.go.id/account/register" class="btn btn-block btn-twitter mg-b-20">
            <i class="fa fa-twitter fa-fw"></i> Twitter
        </a>
    </div>
    <div class="col-sm-12">
        <a href="https://www.lapor.go.id/flynsarmy/sociallogin/Google?s=https://www.lapor.go.id/account/register&amp;f=https://www.lapor.go.id/account/register" class="btn btn-block btn-google mg-b-20">
            <i class="fa fa-google fa-fw"></i> Google
        </a>
    </div>
</div>                            <h5 class="separator"><span>Atau dengan Email Anda</span></h5>
                            <div class="form-group">
                                <label for="userSigninLogin">Email, No. telp, atau username</label>
                                <input name="login" type="text" class="form-control" id="userSigninLogin" tabindex="1" required="">
                            </div>
                            <div class="form-group">
                                <a href="https://www.lapor.go.id/forgot-password" class="pull-right">Lupa password?</a>
                                <label for="userSigninPassword">Password</label>
                                <input name="password" type="password" autocomplete="off" class="form-control" id="userSigninPassword" tabindex="2" required="">
                            </div>
                            <div id="google-captcha"></div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" data-attach-loading="">Masuk</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer clearfix" style="text-align: center">
                    Anda belum memiliki akun?<br><a class="btn btn-link" href="https://www.lapor.go.id/account/register">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</form>
        <div class="modal fade" id="modalMap">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Pilih Lokasi</h4>
            </div>
            <div class="modal-body pd-0">
                <input type="hidden" data-toggle="locationMarkerLatitude">
                <input type="hidden" data-toggle="locationMarkerLongitude">
                <div class="location-marker"><img src="https://www.lapor.go.id/themes/lapor/assets/images/complaint-marker.png" alt="" height="70"></div>

                <div class="location-name bg-warning pd-10 text-ellipsis">
                    <span data-toggle="locationName">Geser map untuk mendapatkan lokasi yang anda inginkan</span>
                </div>
                <div id="mapLocation"><center class="pd-10">Silahkan aktifkan fitur pelacakan lokasi Anda pada browser</center></div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-danger" data-dismiss="modal" data-toggle="removeLocation">Hapus Lokasi</button>
                    <button class="btn btn-info" data-dismiss="modal">Pilih Lokasi</button>
                </div>
            </div>
        </div>
    </div>
</div>


        <div class="loadedcontentmodal"></div>

        <script src="https://www.lapor.go.id/combine/b2c678a4aa03a5642db68c0ab5d6b15b-1673278448"></script>

        <script src="https://www.lapor.go.id/plugins/responsiv/uploader/assets/vendor/dropzone/dropzone.js"></script>
<script src="https://www.lapor.go.id/plugins/responsiv/uploader/assets/js/uploader.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyBLHjAqc9z24spcOJmit4weWYBe32eLBho&amp;libraries=places, geometry&amp;region=ID"></script>
<script src="https://cdn.klokantech.com/maptilerlayer/v1/index.js"></script>
        <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-134274968-1', 'auto');
    ga('set', 'forceSSL', true);        ga('send', 'pageview');
</script>

<script>
	</script>
                                            <script>
            function displaytranslate() {
                var a = document.getElementById('translate');
                if (a.style.display == 'none') {
                    a.style.display = 'block';
                }
                if (a.style.display == 'block') {
                    a.style.display = 'none';
                }
            }
        </script>
        <script src="https://www.lapor.go.id/themes/lapor/assets/dashboard/leaflet/leaflet.js"></script>
        <script src="https://www.lapor.go.id/themes/lapor/assets/dashboard/leaflet/leaflet-providers-master/leaflet-providers.js"></script>
        <script src="https://www.lapor.go.id/themes/lapor/assets/dashboard/leaflet/leaflet.ajax.min.js"></script>
    
<div class="stripe-loading-indicator loaded"><div class="stripe"></div><div class="stripe-loaded"></div></div></body>

<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</html>