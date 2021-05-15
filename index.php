
<!DOCTYPE html>
<html>
    <head>
        <title>MBABazaar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
<link rel="stylesheet" href="style.css?id=11">
    </head>

    <body>
    
        <div class="grid-container">
            <div class="menu-icon">
                <i class="fas fa-ellipsis-h"></i>
              </div>
            <header class="header">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                           aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
              </button>
                </div>
  
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="#">College&Courses <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link"  href="#">Exams</a>
                  </li>
                  
                  <li class="nav-item">
                   <a class="nav-link"  href="#">Events</a>
                  </li>
            
                  <li class="nav-item">
                   <a class="nav-link"  href="#">Blog</a>
                  </li>
            
                </ul>
                 
          
             
              
              </div>
            </nav>
            </header>
            <aside class="sidenav">
                <ul class="sidenav__list">
                   <li class="sidenav__list-item"> <a class="navbar-brand" href="#" >MBABazaar<img style="height:50px; margin-top:-10px;" src="blog.png"></img></a></li> 
                    <li class="sidenav__list-item"><input type="search" placeholder="search by"></li>
                    <li class="sidenav__list-item"><input type="submit" class="btn btn-md btn-success"value="Search"></li><br/>
                    <li class="sidenav__list-item"><input type="search" placeholder="Compare this and"></li>
                    <li class="sidenav__list-item"><input type="search" placeholder="This"></li>
                    <li class="sidenav__list-item"><input type="submit" class="btn btn-md btn-success"value="Compare"></li><br/>
                    <!-- <li class="sidenav__list-item">Item Three</li>
                    <li class="sidenav__list-item">Item Four</li>
                    <li class="sidenav__list-item">Item Five</li> -->
                  </ul>
                  
                  <div class="sidenav__close-icon">
                  <i class="fa fa-times" aria-hidden="true"></i>
                  </div>
            </aside>
            <main class="main">
               
       
                  <div class="main-cards">
                    <!-- <div class="posts">
                      <ol id="results"></ol>
                      </div> -->
                      <span id="loading">Loading Please wait...</span>
                  </div>
</main>

            <footer class="footer">
                <div class="footer__copyright">&copy; 2021 MBABazaar</div>
               
            </footer>
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    const menuIconEl = $('.menu-icon');
    const sidenavEl = $('.sidenav');
    const sidenavCloseEl = $('.sidenav__close-icon');

    // Add and remove provided class names
    function toggleClassName(el, className) {
      if (el.hasClass(className)) {
        el.removeClass(className);
      } else {
        el.addClass(className);
      }
    }

    // Open the side nav on click
    menuIconEl.on('click', function() {
      toggleClassName(sidenavEl, 'active');
    });

    // Close the side nav on click
    sidenavCloseEl.on('click', function() {
      toggleClassName(sidenavEl, 'active');
    });


//     $(function() {
// loadResults(0);
// $('.posts').scroll(function() {
// if($("#loading").css('display') == 'none') {
// if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
// var limitStart = $("#results li").length;
// loadResults(limitStart);
// }
// }
// });function loadResults(limitStart) {
// $("#loading").show();
// $.ajax({
// url: "posts.php",
// type: "post",
// dataType: "json",
// data: {
// limitStart: limitStart
// },
// success: function(data) {
// $.each(data, function(key, value) {
// $("#results").append("<li id='"+key.id+"'>"+value.title+"<img src='"+value.image+"' width='200px' height='200px'></li>");
// });
// $("#loading").hide();
// }
// });
// };
// });
  </script>

    </body>

</html>