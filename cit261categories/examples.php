<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jordan Bishop Web Developer</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <link rel="stylesheet" type="text/css" href="designcss.css"/>
        <link rel="stylesheet" type="text/css" href="examples.css"/>

    </head>
    <body>
        <ul>
            <li>Loops, Conditional Statements, Functions, Variables, Parameters, Arrays, Associative Arrays</li>
            <li>Object Creation Functions, Inheritance, Properties, Methods, Instantiation</li>
            <li>JSON Parse, Stringify</li>
            <li>Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects</li>
            <li>DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.</li>
            <li>Creating CSS3 Transitions and Animations in CSS and triggering them with JavaScript</li>
            <li>Manipulating CSS Class Properties Using JavaScript</li>
            <li>Using XMLHTTPRequest to Consume a JSON Web Service (AJAX)</li>
            <li>Standard JavaScript Events Including those for Mobile Devices ( Ex. onTouchBegin, onLoad, etc.) and Animation and Transition Events</li>
            <li>HTML5 Tags - Video, Audio, and Canvas</li>
            <ul>
                <li>Audio</li>

                <li>
                    <audio controls preload="none" style="width:480px;">
                        <source src="05 Topaz.mp3.mp3" type="audio/mp3" />
                        <p>Your browser does not support HTML5 audio.</p>
                    </audio>
                </li>
                <li>Video </li>
                <li> <video width="320" height="240" autoplay>
                        <source src="greyson.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>  </li>
                <li>
                    <video width="320" height="240" controls>
                        <source src="greyson.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> 
                </li>

                <li>Canvas </li>
                <li>
                    <canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
                        Your browser does not support the HTML5 canvas tag.</canvas>

                    <script>
                        var c = document.getElementById("myCanvas");
                        var ctx = c.getContext("2d");

                        // Create gradient
                        var grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);
                        grd.addColorStop(0, "red");
                        grd.addColorStop(1, "white");

                        // Fill with gradient
                        ctx.fillStyle = grd;
                        ctx.fillRect(10, 10, 150, 80);
                    </script> </li>
            </ul>
            <li>Designing, Defining, and Triggering CSS3 Transitions without Custom Libraries</li>
            <li>Designing, Defining, and Triggering CSS3 Transforms without Custom Libraries</li>
            <li>Designing, Defining, and Triggering CSS3 Animations without Custom Libraries</li>
            <li></li>

        </ul>

    </body>
</html>