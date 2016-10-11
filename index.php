<?php include 'myportfolio/modular/designheader.php'; ?>

<body>




    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive center-block" src="myportfolio/images/leaf.JPG" alt="Image" >
                <div class="carousel-caption">
                </div>      
            </div>

            <div class="item">
                <img class="img-responsive center-block" src="myportfolio/images/flower1.JPG" alt="Image" >
                <div class="carousel-caption">

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
                <img src="myportfolio/images/abouticon.jpg" class="img-responsive" style="width:100%" alt="Image">
                <p>About</p>
            </div>
            <div class="col-sm-3"> 
                <img src="myportfolio/images/projectsicon.jpg" class="img-responsive" style="width:100%" alt="Image">
                <p>Projects</p>    
            </div>
            <div class="col-sm-3"> 
                <img src="myportfolio/images/designicon.jpg" class="img-responsive" style="width:100%" alt="Image">
                <p>Design</p>    
            </div>
            <div class="col-sm-3"> 
                <img src="myportfolio/images/contacticon.jpg" class="img-responsive" style="width:100%" alt="Image">
                <p>Contact</p>    
            </div>
             
        </div>
    </div>
</div>

<?php include 'myportfolio/modular/designfooter.php'; ?>