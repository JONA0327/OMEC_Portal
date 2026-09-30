<!DOCTYPE html>



<html lang="es">

<head>

    <title>Portal de Existencias O-MEC EQUIPOS</title>

    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    <!--Start Style -->

    <link rel="stylesheet" type="text/css" href="/dash-assets/css/fonts.css">

    <link rel="stylesheet" type="text/css" href="/dash-assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/dash-assets/css/auth.css">

    <!-- Favicon Link -->

    
    <link rel="shortcut icon" type="image/png" href="/dash-assets/images/favicon.png">
<!--
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Leau_srAAAAAKiE5sF7LjcapkCN_j-TJXspXAE6"></script>
    <script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.enterprise.ready(async () => {
        const token = await grecaptcha.enterprise.execute('6Leau_srAAAAAKiE5sF7LjcapkCN_j-TJXspXAE6', {action: 'LOGIN'});
        });
    }
    </script>
-->
</head>



<body>

    <div class="ad-auth-wrapper">

        <div class="ad-auth-box">

            <div class="row align-items-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="ad-auth-img">

                        <img src="/dash-assets/images/auth-img1.png" alt="" />

                    </div>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="ad-auth-content">



                        @yield('content')

                        

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>