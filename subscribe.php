<?php
$plan="";
if(isset($_GET['plan'])){
    $plan=$_GET['plan'];
}else{
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-128x47-1.png" type="image/x-icon">
  <meta name="description" content="Subscribe to LokDon sDesktop and get the world class encryption with 2048 bit quantum resistant security.">
  
  
  <title>Subscription</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="menu menu1 cid-sbxF8oYvud" once="menu" id="menu1-9">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="https://mobiri.se">LokDon</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-warning text-primary display-4" href="index.html#footer4-7">
                            About us</a></li>
                    <li class="nav-item"><a class="nav-link link text-warning text-primary display-4" href="index.html#features3-2">
                            Services</a></li>
                    <li class="nav-item"><a class="nav-link link text-warning text-primary display-4" href="index.html#form7-5">Contacts</a>
                    </li></ul>
                
                
            </div>
        </div>
    </nav>
</section>

<section class="form3 cid-sbBqzrxyPL" id="form3-b">

    

    

    <div class="mbr-container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/logo-248x92.png" alt="LokDon">
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 mbr-form">
                <?php
                        if(!isset($_POST['email'])){
                ?>
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="wamPSRiLIhwIYWj9uaLPk0FhViWrCEGVKnQQPY2Hg9atwnB5HnhHrt7tCBOVx/QGBswNQO+/WdXAf8TO77nYvRu7BtLnyBI/A+3ievi431yYelniZ/AujR+Bj3Y9Fjkm">
                    <div class="">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2"><strong>Complete Registration</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">Your download is ready, finish your subscription below.</p>
                        </div>
                        <div data-for="name" class="col-lg-12 col-md col-sm-12 form-group">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form3-b">
                        </div>
                        <div class="col-lg-12 col-md col-sm-12 form-group" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form3-b">
                            <input type="hidden" name="plan" value="<?php echo $plan; ?>">
                        </div>

                        <div class="col-md-auto col-12 mbr-section-btn">
                            <button type="submit" class="btn btn-black display-4">Submit</button>
                        </div>
                    </div>
                </form>
                <?php
                }
                if(isset($_POST['email'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $plan=$_POST['plan'];
                    $amount=2.00;
                    if($plan=="basic"){
                        $amount=2.00;
                    }else if($plan=="premium"){
                        $amount=10.00;
                    }else if($plan=="lifetime"){
                        $amount=399.00;
                    }
                    if($amount>0){

                        ?>
                        <script>window.total=<?php echo $amount; ?> console.log('amount: '+window.total);</script>
                        <h2>Continue to pay: <strong>$<?php echo $amount; ?></strong></h2>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Identify your business so that you can collect the payments. -->
                            <input type="hidden" name="business" value="paypal_id">

                            <!-- Specify a Buy Now button. -->
                            <input type="hidden" name="cmd" value="_xclick">

                            <!-- Specify details about the item that buyers will purchase. -->
                            <input type="hidden" name="item_name" value="lokdon_units">
                            <input type="hidden" name="item_number" value="1">
                            <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                            <input type="hidden" name="currency_code" value="USD">

                            <!-- Specify URLs -->
                            <input type="hidden" name="return" value="https://lokdon.com">
                            <input type="hidden" name="cancel_return" value="https://lokdon.com">

                            <!-- Display the payment button. -->
                            <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                        </form>

                        <?php
                    }
                }
                ?>
            </div>
            <div class="offset-lg-1"></div>
        </div>
    </div>
</section>

<section class="footer4 cid-sbxPayljaz" once="footers" id="footer4-a">

    
    
    <div class="container">
        <div class="row mbr-white">
            <div class="col-6 col-lg-3">
                <div class="media-wrap col-md-8 col-12">
                    <a href="https://mobiri.se/">
                        <img src="assets/images/logo-248x92.jpg" alt="Mobirise">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>About</strong>
                </h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">LokDon sDesktop is a subsidiary of LokDon LLC, US. The primary goal of LokDon is to provide a future proof, quantum resistant encryption technology.&nbsp;</p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                    <strong>Follow Us</strong>
                </h5>
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="https://facebook.com/lokdon_llc" target="_blank">
                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://twitter.com/lokdon_llc" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://instagram.com/lokdon_llc" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>LokDon Help</strong>
                </h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">Help Center</li>
                    <li class="mbr-text item-wrap">LokDon Forums</li>
                    <li class="mbr-text item-wrap">Knowledge Base</li>
                    <li class="mbr-text item-wrap">LokDon Home</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>LokDon Extensions</strong>
                </h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">LokDon$ App</li>
                    <li class="mbr-text item-wrap">LokDon Plugin</li>
                    <li class="mbr-text item-wrap">LokDon eVault</li>
                    <li class="mbr-text item-wrap">LokDon Chrome Extension</li>
                </ul>
            </div>
            
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/q" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Develop a free <a href="https://mobirise.site/y" style="color:#aaa;">website</a> with Mobirise</p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/formstyler/jquery.formstyler.js"></script>  <script src="assets/formstyler/jquery.formstyler.min.js"></script>  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
</body>
</html>