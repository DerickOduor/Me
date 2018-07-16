<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html>
<head>
    <!--<link rel="stylesheet" href="<?php base_url('index.php')?>css/bootstrap.min.css"/>
    <script src="<?php base_url('index.php')?>js/bootstrap.js"></script>
    <script src="<?php base_url('index.php')?>js/bootstrap-modal.js"></script>
    <script src="<?php base_url('index.php')?>js/jquery.js"></script>-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script> 

    <script src="http://localhost/sportssystem/index.php/../js/jquery.js"></script>
    <script src="http://localhost/sportssystem/index.php/../js/bootstrap.min.js"></script>
    <script src="http://localhost/sportssystem/index.php/../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/sportssystem/index.php/../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://localhost/sportssystem/index.php/../css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="http://localhost/sportssystem/index.php/../css/bootstrap-grid.min.css"/>
    <title>Derick Oduor</title>
</head>
<body>
   <header role="banner" class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <a class="navbar-brand pull-left" href="http://localhost/me/">Derick Oduor</a>
                <div class="navbar-header">
                    <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-right"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="navbar-inverse side-collapse in">
                    <nav role="navigation" class="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost/me/"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                        <li><a href="http://localhost/me/index.php/home/works"><span class="glyphicon glyphicon-wrench"></span>&nbsp;Works</a></li>
                        <li><a href="http://localhost/me/index.php/home/skills"><span class="glyphicon glyphicon-stats"></span>&nbsp;Skills</a></li>
                        <li><a href="http://localhost/me/index.php/home/contacts"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contacts</a></li>
                        
                    </ul>
                    </nav>
                </div>
            </div>
        </header>

    <div class="container main">
    <div class="container works">Legrand Android App</div>
    <div class="row">
      <div class="equal-height col-md-3 col-sm-6 col-xs-12">
        <img src="http://localhost/me/index.php/../images/legrand/home.png" alt="Avatar" class="image" style="width:100%">
      </div>
      <div class="equal-height col-md-3 col-sm-6 col-xs-12">
        <img src="http://localhost/me/index.php/../images/legrand/category.png" alt="Avatar" class="image" style="width:100%">
      </div>
      <div class="equal-height col-md-3 col-sm-6 col-xs-12">
        <img src="http://localhost/me/index.php/../images/legrand/shoes.png" alt="Avatar" class="image" style="width:100%">
      </div>
      <div class="equal-height col-md-3 col-sm-6 col-xs-12">
        <img src="http://localhost/me/index.php/../images/legrand/product.png" alt="Avatar" class="image" style="width:100%">
      </div>
    </div>
      <?php 
      
      ?>
    </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {   
    var sideslider = $('[data-toggle=collapse-side]');
    var sel = sideslider.attr('data-target');
    var sel2 = sideslider.attr('data-target-2');
    sideslider.click(function(event){
        $(sel).toggleClass('in');
        $(sel2).toggleClass('out');
    });
    
});
</script>
<style type="text/css">
.works{
  margin: 20px;
  font-size: 20px;
  padding: 5px;
}
.row{
  padding-right: 20px;
  padding-left: 20px;
}
.equal-height {
    position: relative;
    border: solid 1px #000;
    padding: 0px;
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: 400px;
  transition: .5s ease;
  backface-visibility: hidden;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.equal-height:hover .image {
  opacity: 0.3;
}
.equal-height:hover .middle {
  opacity: 1;
}

.text {
  background-color: #2196F3;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.text a{
  text-decoration: none;
  color: #fff;
}
.text a:hover{
  text-decoration: underline;
  color: #fff;
}
body {
          padding-top: 50px;
          position: relative;
      }
      
      pre {
          tab-size: 8;
      }
      .main{
        width:100%;
        min-height: 648px;
        font-family: tahoma;
        background: rgb(0,0,0,0.1);
        padding-top: 18px;
      }
      .navbar-brand{
        font-size: 23px;
        font-family: tahoma;
      }
      .equal-height{
        display: flex;
        flex-wrap: wrap;
      }
      .row.equal-height > [class*='col-'] > .thumbnail > img {
        height: 100px; /* force image's height */

        /* force image fit inside it's "box" */
        -webkit-object-fit: cover;
           -moz-object-fit: cover;
            -ms-object-fit: cover;
             -o-object-fit: cover;
                object-fit: cover;
      }
      @media screen and (max-width: 768px) {
          .side-collapse-container{
            width:100%;
            position:relative;
            left:0;
            transition:left .4s;
          }
          .side-collapse-container.out{
            left:200px;
          }
          .side-collapse {
            top:50px;
            bottom:0;
            left:0;
            width:200px;
            position:fixed;
            overflow:hidden;
            transition:width .4s;
          }
          .side-collapse.in {
             width:0;
          }
          .row.equal-height > [class*='col-'] > .thumbnail > img {
            height: 70px; /* force image's height */

        /* force image fit inside it's "box" */
        -webkit-object-fit: cover;
           -moz-object-fit: cover;
            -ms-object-fit: cover;
             -o-object-fit: cover;
                object-fit: cover;
          }
      } 
</style>
