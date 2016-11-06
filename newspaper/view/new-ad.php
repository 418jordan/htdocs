<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>New Advertisement | The News - Everything local in news</title>
    <meta name="viewport" content="width=device-width">
    <link href="css/newspaper.css" type="text/css" rel="stylesheet" media="screen">
  </head>

  <body>
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
          <h1>Place an Ad</h1>
          <p class="notify">All form fields are required.</p>

          <form method="post" action="." id="newAdForm">
            <fieldset>
              <legend class="title">Advertiser Information</legend>
              <label for="firstname" class="title">First name:</label>
              <input type="text" name="firstname" id="firstname" readonly value="?php echo $firstname["firstname"] ?>">
              <label for="lastname" class="title">Last name:</label>
              <input type="text" name="lastname" id="lastname" readonly value="?php echo $lastname["lastname"] ?>">
              <label for="email" class="title">Email:</label>
              <input type="email" name="email" id="email" readonly value="?php echo $email["email"] ?>">
              <label for="phone" class="title">Phone:</label>
              <input type="tel" name="phone" id="phone" readonly value="?php echo $phone["phone"] ?>">
              <input type="hidden" name="advertID" value="">
            </fieldset>
            <fieldset>
              <legend class="title">Advertisement Information</legend>

              <label for="adType" class="title">Ad Type</label>
              <select name="adType" id="adType">
                  <!--Build the dropdown list here-->
              </select>
              <label for="adText" class="title">Ad Text:</label>
              <textarea name="adText" class="adText" id="adText"></textarea>
              <label for="adDate" class="title">Date to Run Ad?</label>
              <input type="date" name="adDate" id="adDate" >
              <label for="adDays" class="title">How many days will Ad run?</label>
              <input type="number" name="adDays" id="adDays">
              <input type="submit" name="action" class="button" value="Place Ad">
            </fieldset>
          </form>
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
