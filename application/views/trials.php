<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>scrollTop demo</title>
  <style>
  @import url(http://fonts.googleapis.com/css?family=Russo+One|Play|Orbitron:500,400,700);
 #about{
    width:100%;
    height: 450px;
    background-image: url("http://localhost/me/index.php/../images/b3.jpg");
    background-size: 100%;
    margin: 0;
    padding-top: 50px;
  }
  #contacts{
    width:100%;
    height:800px;
    background: rgba(0,0,0,0.3);
    margin: 0;
    padding-top: 50px;
  } 
  #skills{
    width:100%;
    height:800px;
    background: e2e2e2;
    margin: 0;
    padding-top: 50px;
  }  
  body{
    width:100%;
    font-family: 'Orbitron', sans-serif;
  }
  #a{
    height: 200px;
    background: #ffffff;
    border: solid 1px #000000;
  }
  #b{
    height: 200px;
    background: #acedff;
    border: solid 1px #000000;
  }
  #c{
    height: 200px;
    background: #f1f1f1;
    border: solid 1px #000000;
  }
  #d{
    height: 200px;
    background: #fdfdfd;
    border: solid 1px #000000;
  }
  #lis{
    position: fixed;
    width: 100%;
    height: 50px;
    z-index: 5;
  }
  .scrollToTop{
  width:100px; 
  height:130px;
  padding:10px; 
  text-align:center; 
  background: whiteSmoke;
  font-weight: bold;
  color: #444;
  text-decoration: none;
  position:fixed;
  top:75px;
  right:40px;
  display:none;
  background: url('arrow_up.png') no-repeat 0px 20px;
}
  #lis li{
    display: inline-block;
  }
  nav{
    position: fixed;
  }
  #slidedown{
    position: absolute;
    font-size: 50px;
    color: rgba(255,255,255,0.2);
    margin-top: 320px;
    margin-right: 4%;
    margin-left: 48.3%;
    -webkit-animation: bounce 2s infinite ease-in-out;
  }
  @-webkit-keyframes bounce {
    0%, 20%, 60%, 100%  { -webkit-transform: translateY(0); }
    40%  { -webkit-transform: translateY(-20px); }
    80% { -webkit-transform: translateY(-10px); }
  }
  #slidedown img{
    color: rgba(255,255,255,0.5);
    opacity: 0.5;
  }
  #slidedown:hover{
    text-decoration: none;
  }
  #slidedown:active{
    text-decoration: none;
  }
  header{
    background: rgba(255,255,255,0);
  }
  .navbar-fixed-top{
  background:transparent;
  background-image:none;
  border-color:transparent;
  box-shadow:none;
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
          #about{
    width:100%;
    height: 250px;
    background-image: url("http://localhost/me/index.php/../images/b3.jpg");
    background-size: 100%;
    margin: 0;
    padding-top: 50px;
  }
  #slidedown{
    position: absolute;
    font-size: 30px;
    color: rgba(255,255,255,0.2);
    margin-top: 130px;
    margin-right: 4%;
    margin-left: 4.3%;
    -webkit-animation: bounce 2s infinite ease-in-out;
  }
  #slidedown img{
    color: rgba(255,255,255,0.5);
    opacity: 0.5;
    height: 30px;
  }
  @-webkit-keyframes bounce {
    0%, 20%, 60%, 100%  { -webkit-transform: translateY(0); }
    40%  { -webkit-transform: translateY(-20px); }
    80% { -webkit-transform: translateY(-10px); }
  }
  }
} 
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script> 
</head>
<body>
<a href="#" class="scrollToTop">Scroll To Top</a>
<ul class=""id="lis">
                        <li class="active"><a href="#"id="ab"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                        <li><a href="#"id="sk"><span class="glyphicon glyphicon-stats"></span>&nbsp;Skills</a></li>
                        <li><a href="#"id="co"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contacts</a></li>

                    </ul>
<header role="banner" class="navbar navbar-fixed-top navbar navbar-inverse">
            <div class="container">
                <a class="navbar-brand pull-left" href="http://localhost/me/">Derick Oduor</a>
                <div class="navbar-header">
                    <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-right"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="navbar-inverse side-collapse in">
                    <nav role="navigation" class="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://localhost/me/"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
                        <li><a href="http://localhost/me/index.php/home/skills"><span class="glyphicon glyphicon-stats"></span>&nbsp;Skills</a></li>
                        <li><a href="http://localhost/me/index.php/home/contacts"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contacts</a></li>

                    </ul>
                    </nav>
                </div>
            </div>
        </header>                    
                    <!--<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>-->
 <div id="about">
   <a href="#"id="slidedown"><img src="http://localhost/me/index.php/../images/arrow-195-xl.png"/><!--<span class="glyphicon glyphicon-chevron-down"></span>--></a>
 </div>
<div id="skills"class="row">
  <div class="col-md-3"id="a"></div>
  <div class="col-md-3"id="b"></div>
  <div class="col-md-3"id="c"></div>
  <div class="col-md-3"id="d"></div>
</div>
<div id="contacts"class="row">
  <div class="col-md-3"id="a"></div>
  <div class="col-md-3"id="b"></div>
  <div class="col-md-3"id="c"></div>
  <div class="col-md-3"id="d"></div>
</div> 
<script>
 $(function(){
  var sideslider = $('[data-toggle=collapse-side]');
    var sel = sideslider.attr('data-target');
    var sel2 = sideslider.attr('data-target-2');
    sideslider.click(function(event){
        $(sel).toggleClass('in');
        $(sel2).toggleClass('out');
    });
  $('#co').click(function(){
    $('html,body').animate({
              scrollTop: $('#contacts').offset().top
            }, 1000);
            return false;
 });
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
      $('#lis').css('background','rgba(255,255,255,0.7)');
    } else {
      $('.scrollToTop').fadeOut();
      $('#lis').css('background','rgba(255,255,255,0)');
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
  });
</script>

</body>
</html>