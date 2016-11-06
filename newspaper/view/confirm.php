<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Advertisement Confirmation | The News - Everything local in news</title>
        <meta name="viewport" content="withh=device-withh">
        <link href="css/newspaper.css" type="text/css" rel="stylesheet" media="screen">
    </head>

    <body id="confirm">
        <div id="wrapper">
            <header id="main-header">
                <h1>The News</h1>
                <p id="tagline">Everything local in news</p>
            </header>
            <nav id="main-nav">
                <ul>
                    <li><a href="/" title="Visit The News homepage">Home</a></li>
                </ul>
            </nav>

            <div class="flex-row">
                <main>
                    <h1>Classified Ad Confirmation</h1>
                    <p>Please confirm your advertisement information and notify The News of any errors.</p>

                    <h2>Advertiser's Information</h2>

                    <!--Add all data for this view into the table data cells (td's)-->
                    <table>
                        <tbody>
                            <tr>
                                <th>Name:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="Name" value="<?php echo $name["name"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="phone" value="<?php echo $phone["phone"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="Email" value="<?php echo $Email["Email"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>Classified Ad Information</h2>
                    <table>
                        <tbody>
                            <tr>
                                <th>Ad Type:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="Ad_Type" value="<?php echo $Ad_Type["AdType"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                            <tr>
                                <th>Ad Run Date:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="Ad_Run_Date" value="<?php echo $Ad_Run_Date["Ad_Run_Date"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                            <tr>
                                <th>Days to Run:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="course_id" value="<?php echo $course["CourseId"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                            <tr>
                                <th>Text of Ad:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="Text_of_Ad" value="<?php echo $Text_of_Ad["Text_of_Ad"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>Amount Due</h2>
                    <table>
                        <tbody>
                            <tr>
                                <th>Words in Ad:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="Words_in_Ad" value="<?php echo $Words_in_Ad["Words_in_Ad"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                            <tr>
                                <th>Daily Cost:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="Daily_Cost" value="<?php echo $Daily_Cost["Daily_Cost"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                            <tr>
                                <th>Total Cost:</th>
                                <td><form action="index.php" method="post">
                                        <input type="hidden" name="Total_Cost" value="<?php echo $Total_Cost["Total_Cost"] ?>"/>
                                        <input type="submit" value="edit" name="action"/>
                                    </form></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="notify">The ad must be paid in full two business days prior to the ad being run. Make all payments to The News at their offices.</p>
                </main>
                <aside id="main-aside">
                    <h2>Ad Costs</h2>
                    <ul>
                        <li>A home ad is a flat $5 per day.</li>
                        <li>All other ads are $3 per day per 50 words or fraction thereof, so if the ad has 70 words the cost is $6 per day.</li>
                    </ul>
                    <h2>Payment</h2>
                    <p>All ads must be paid for in person two days prior to the ad being run.</p>
                </aside>
            </div>
            <footer id="main-footer">
                <small>&copy; 2016 - The News<br>
                    101 Main Street, Springfield, ID 83277<br>
                    Phone: (208) 555-5555</small>
            </footer>
        </div>


    </body>

</html>
