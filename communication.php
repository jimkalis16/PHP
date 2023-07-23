<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Βαπ Επικοινωνία</title>
  <link href="communication.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="column">
    <h1>
      Βαπ Επικοινωνία
    </h1>
    <div class="mainarea">
      <div id="container">
        <button class="chose" onclick="window.location.href='index.php';">Αρχική σελίδα </button>
        <button class="chose" onclick="window.location.href='announcement.php';">Ανακοινώσεις </button>
        <button class="chose" onclick="window.location.href='communication.php';">Επικοινωνία </button>
        <button class="chose" onclick="window.location.href='documents.php ';">Έγραφα μαθήματος </button>
        <button class="chose" onclick="window.location.href='homework.php';">Εργασίες </button>
      </div>
      <div id="announcement">
        <div class="first">
          <h2 class="anak1">Αποστολή e-mail μέσω web φόρμας</h2>
          <div class="info">
            <p1 class="text">
              <p2 class="hmer">Αποστολέας:</p2> <input type="email" id="email" name="email">
            </p1>
            <p1 class="text">
              <p2 class="hmer">Θέμα:</p2> <input type="text" id="text" name="text">
            </p1>
            <p1 class="text">
              <p2 class="hmer">Κείμενο:</p2> <input type="text" id="text" name="text">
            </p1>
          </div>
        </div>
        <div class="first">
          <h2 class="anak1">Αποστολή e-mail με χρήση e-mail διεύθυνσης</h2>
          <div class="info">
            <p1 class="text">Εναλλακτικά μπορείτε να αποστείλετε e-mail στην παρακάτω διεύθυνση ηλεκτρονικού
              ταχυδρομείου </p1>
            <p class="text">
              <a href="mailto:tutor@csd.auth.test.gr">tutor@csd.auth.test.gr</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>