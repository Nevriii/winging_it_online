<?php
session_start();
    if (isset($_SESSION['userlogin'])){
        header("Location: Home.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION);
        header("Location: Home.php");
    }
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Login.css" media="screen">
    <meta name="generator" content="Nicepage 6.5.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
      
    <script type="application/ld+json">{
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/logo.jpg"
    }
    </script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
  </head>
    <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
        <header class="u-clearfix u-gradient u-header u-sticky u-sticky-ae50 u-header" id="sec-383c" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-clearfix u-sheet u-sheet-1">
                <a href="https://www.facebook.com/profile.php?id=100084484321109" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
                <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
                </a>
                <nav class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="XL">
                    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                        <a class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg>
                        </a>
                    </div>
                </nav>
            </div>
        </header>
        <section class="u-border-1 u-border-grey-75 u-clearfix u-gradient u-section-1" id="sec-2530">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-black u-container-style u-group u-opacity u-opacity-30 u-radius u-shape-round u-group-1">
                    <div class="u-container-layout u-container-layout-1">
                        <div class="u-form u-form-1">
                            <form action="handler.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;" method="post">
                            <?php if (isset($_GET['error'])){ ?>
                                <p style="background: #F2DEDE; text-align: center; color:#ff5752; padding: 10px; width: 95%; border-radius: 5px; margin: 20px auto;"><?php echo $_GET['error']; ?> </p>
                            <?php } ?>
                                <div class="u-form-email u-form-group u-label-top">
                                    <label class="u-label">Email</label>
                                    <input type="text" placeholder="Enter username" id="username" name="email" class="u-input u-input-rectangle u-radius u-input-1">
                                </div>
                                <div class="u-form-group u-label-top u-form-group-2"><br>
                                    <label class="u-label">Password</label>
                                    <input type="Password" placeholder="Enter password" id="password" name="password" class="u-input u-input-rectangle u-radius u-input-2">
                                </div>
                                <div class="u-align-center u-form-group u-form-submit u-label-top">
                                    <br><button class="u-active-palette-3-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-base u-palette-2-base u-radius u-btn-1" id="login">Login</button>
                                    <input type="submit" class="u-form-control-hidden">
                                </div>
                                <div class="u-form-send-message u-form-send-success"> Logging in </div>
                                <div class="u-form-send-error u-form-send-message"> Account does not exist. </div>
                            </form>
                        </div>
                        <a href="registration.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-white u-btn-2">Create account</a>
                        <a href="index.html" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-white u-btn-2">Cancel</a>
                    </div>
                </div>
            </div>
        </section>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
					integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
					crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<script>
			$(function(){
				$('#login').click(function(e){

					var valid = this.form.checkValidity();

					if(valid){
						var username = $('#username').val();
						var password = $('#password').val();
					}

					e.preventDefault();

					$.ajax({
						type: 'POST',
						url: 'jslogin.php',
						data:  {username: username, password: password},
						success: function(data){
							alert(data);
							if($.trim(data) === "Logged in successfully"){
								setTimeout(' window.location.href =  "Home.php"', 1000);
							}
						},
						error: function(data){
							alert('there were erros while doing the operation.');
						}
					});

				});
			});
		</script>
    
        <footer class="u-align-center u-clearfix u-footer u-gradient" id="sec-d0a0">
            <section class="u-backlink u-clearfix u-grey-80">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <!-- Footer Text --><br><br><br>
                    <p class="u-align-right u-small-text u-text u-text-palette-2-base u-text-variant u-text-1" style="text-align: right; margin-left: 60%;">
                        © 2024 Kuya Pok's Unlimited Wings<br>All rights reserved.
                    </p>
                </div>
            </section>
        </footer>
    </body>
</html>