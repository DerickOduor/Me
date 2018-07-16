<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$tags=array("","Shirts","Trousers","Sweaters");
$gender=array("","Unisex","Male","Female");
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
                        <li class="active"><a href="http://localhost/me/index.php/home/contacts"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contacts</a></li>

                    </ul>
                    </nav>
                </div>
            </div>
        </header>

    <div class="container main">
      <?php $i=0;?>
        <?php 
        $i=$this->session->flashdata('i');
        if($i!=0&&$this->session->flashdata('msg')=='sent'){echo '<div class="alert alert-success"role="alert">';?> 
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          <?php echo "Your message has been sent"; 
          $this->session->sess_destroy();
          $i=0;
          echo '</div>';
          }elseif(($this->session->flashdata('msg')!='sent')){
            $i=$this->session->flashdata('i');
            if($i!=0){
              echo '<div class="alert alert-danger"role="alert">';?> 
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          <?php echo $this->session->flashdata('msg'); 
          $this->session->sess_destroy();
          $i=0;
          echo '</div>';
            }
          }?>
        
      <div class="container">
        <form action="http://localhost/me/index.php/home/message"method="POST"class="form">
          <div class="row">
          <div class="form-group col-md-4 col-sm-6 col-xs-12">
            <label class="control-label"for="name">Name</label>
            <input type="text"name="name"class="form-control"required/>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-4 col-sm-6 col-xs-12">
            <label class="control-label"for="email">E-mail Address</label>
            <input type="text"name="email"class="form-control"required/>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-4 col-sm-6 col-xs-12">
            <label class="control-label"for="subject">Subject</label>
            <input type="text"name="subject"class="form-control"required/>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-4 col-sm-6 col-xs-12">
            <label class="control-label"for="message">Message</label>
            <textarea type="text"rows="5"name="message"class="form-control"required></textarea>
          </div>
          </div>
          <div class="form-group">
            <button type="submit"class="btn btn-primary">Send</button>
          </div>
        </form>
      </div>
      <div class="container page-footer row contacts">
        <div class="col-md-4 col-sm-6 col-xs-12">
          Or you can contact me through the following platforms:&nbsp;
        </div><br/>
        <div class="col-md-4 col-sm-6 col-xs-12 e">
          <span class="glyphicon glyphicon-envelope"></span>&nbsp;E-mail Address:&nbsp;oduorderick@gmail.com
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 p">
          <span class="glyphicon glyphicon-earphone"></span>&nbsp;Phone No.:&nbsp;+254715812661
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
    function clearAlerts(){
      $('.alert').fadeOut('slow');
    }
    setTimeout(clearAlerts,5000);
});
</script>
<style type="text/css">
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
      }
      .form{
        margin-top: 15px;
        padding: 5px;
      }
      .contacts{
        font-size: 12px;
        padding-left: 82px;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-right: 5px;
        margin-left: 5px;
        margin-bottom: 5px;
        margin-right: 5px;
        margin-top: 15px;
        border-top: solid 1px #000;
      }
      .e,.p{
        margin: 5px;
      }
      .navbar-brand{
        font-size: 23px;
        font-family: tahoma;
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
          .contacts{
            font-size: 12px;
            padding: 0px;
            margin: 2px;
          }
      } 
</style>
