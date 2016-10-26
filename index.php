<?php include 'myportfolio/modular/designheader.php'; ?>
<style>
    .col-sm-3 img {
        border-radius: 25px;
    }
</style>
<body>


    <br>
    <br>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="/projects.php">
                <img class="img-responsive center-block" src="myportfolio/images/busybee.JPG" alt="Image" style="height: auto;" >
                <div class="carousel-caption">
                  <a/>
                    <br>
                </div>      
            </div>

             <div class="item active">
                <a href="/projects.php">
                <img class="img-responsive center-block" src="myportfolio/images/busybee.JPG" alt="Image" style="height: auto;" >
                <div class="carousel-caption">
                  <a/>
                    <br>
                </div>      
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container text-center">    
        <div class="row">
            <br>
            <div class="col-sm-3">
                <a href="about.php"><img src="myportfolio/images/abouticon.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
                <p>About</p>
            </div>
            <div class="col-sm-3"> 
                <a href="projects.php"> <img src="myportfolio/images/projectsicon.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
                <p>Projects</p>    
            </div>
            <div class="col-sm-3"> 
                <a href="design.php"> <img src="myportfolio/images/designicon.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
                <p>Design</p>    
            </div>
            <div class="col-sm-3"> 
                <a href="contact.php"><img src="myportfolio/images/contacticon.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
                <p>Contact</p>    
            </div>
             
        </div>
    </div>
</div>

<?php include 'myportfolio/modular/designfooter.php'; ?>