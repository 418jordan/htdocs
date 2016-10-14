<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }

            .carousel-inner img {
                width: 100%; /* Set width to 100% */
                min-height: 200px;
            }

            /* Hide the carousel text when the screen is less than 600 pixels wide */
            @media (max-width: 600px) {
                .carousel-caption {
                    display: none; 
                }
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container text-center">    

                <div >
                    <div id="myCarousel" class="carousel slide" style="max-height: 200px;" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="myportfolio/images/flower1.JPG" alt="Image">
                                <div class="carousel-caption">
                                    <h3>Sell $</h3>
                                    <p>Money Money.</p>
                                </div>      
                            </div>

                            <div class="item">
                                <img src="myportfolio/images/hawaii.jpg" alt="Image">
                                <div class="carousel-caption">
                                    <h3>More Sell $</h3>
                                    <p>Lorem ipsum...</p>
                                </div>      
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <hr>
            </div>
          <div class="container text-center">    

                <div >
                    <div id="myCarousel" class="carousel slide" style="max-height: 200px;" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="myportfolio/images/flower1.JPG" alt="Image">
                                <div class="carousel-caption">
                                    <h3>Sell $</h3>
                                    <p>Money Money.</p>
                                </div>      
                            </div>

                            <div class="item">
                                <img src="myportfolio/images/hawaii.jpg" alt="Image">
                                <div class="carousel-caption">
                                    <h3>More Sell $</h3>
                                    <p>Lorem ipsum...</p>
                                </div>      
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <hr>
            </div>
          <div class="container text-center">    

                <div >
                    <div id="myCarousel" class="carousel slide" style="max-height: 200px;" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../myportfolio/images/flower1.JPG" alt="Image">
                                <div class="carousel-caption">
                                    <h3>Sell $</h3>
                                    <p>Money Money.</p>
                                </div>      
                            </div>

                            <div class="item">
                                <img src="../myportfolio/images/flower1.JPG" alt="Image">
                                <div class="carousel-caption">
                                    <h3>More Sell $</h3>
                                    <p>Lorem ipsum...</p>
                                </div>      
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <hr>
            </div>
          <div class="container text-center">    

                <div >
                    <div id="myCarousel" class="carousel slide" style="max-height: 200px;" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                         <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="myportfolio/images/flower1.JPG" alt="Image">
                                <div class="carousel-caption">
                                    <h3>Sell $</h3>
                                    <p>Money Money.</p>
                                </div>      
                            </div>

                            <div class="item">
                                <img src="myportfolio/images/hawaii.jpg" alt="Image">
                                <div class="carousel-caption">
                                    <h3>More Sell $</h3>
                                    <p>Lorem ipsum...</p>
                                </div>      
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <hr>
            </div>
        </div>
        <div class="container">

            <div class="col-sm-4">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                            <div class="carousel-caption">
                                <h3>Sell $</h3>
                                <p>Money Money.</p>
                            </div>      
                        </div>

                        <div class="item">
                            <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                            <div class="carousel-caption">
                                <h3>More Sell $</h3>
                                <p>Lorem ipsum...</p>
                            </div>      
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    <div class="container">

        <div class="col-sm-4">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                        <div class="carousel-caption">
                            <h3>Sell $</h3>
                            <p>Money Money.</p>
                        </div>      
                    </div>

                    <div class="item">
                        <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                        <div class="carousel-caption">
                            <h3>More Sell $</h3>
                            <p>Lorem ipsum...</p>
                        </div>      
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
 
<div class="container">

    <div class="col-sm-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                    <div class="carousel-caption">
                        <h3>Sell $</h3>
                        <p>Money Money.</p>
                    </div>      
                </div>

                <div class="item">
                    <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                    <div class="carousel-caption">
                        <h3>More Sell $</h3>
                        <p>Lorem ipsum...</p>
                    </div>      
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>

<div class="container">

    <div class="col-sm-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                    <div class="carousel-caption">
                        <h3>Sell $</h3>
                        <p>Money Money.</p>
                    </div>      
                </div>

                <div class="item">
                    <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                    <div class="carousel-caption">
                        <h3>More Sell $</h3>
                        <p>Lorem ipsum...</p>
                    </div>      
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>

<div class="container">

    <div class="col-sm-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
                    <div class="carousel-caption">
                        <h3>Sell $</h3>
                        <p>Money Money.</p>
                    </div>      
                </div>

                <div class="item">
                    <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
                    <div class="carousel-caption">
                        <h3>More Sell $</h3>
                        <p>Lorem ipsum...</p>
                    </div>      
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
