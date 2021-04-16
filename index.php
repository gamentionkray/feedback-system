<?php
session_start();
include_once "includes/functions.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="assets/js/app.js"></script>
  <title>VIT Feedback Form</title>
</head>

<body>
  <div class="kt-logo"></div>
  <div class="kt-title">VIT Feedback Form</div>
  <form class="kt-div" action="index.php" method="POST">
    <!-- Error Box -->
    <div class="error-box" style="display: <?php echo (!empty($errors)) ? "block" : "none"; ?>">
      <?php
      if (!empty($errors)) {
        foreach ($errors as $key => $value) {
          echo $value . "<br>";
        }
      } else {
        echo "";
      }
      ?>
    </div>

    <div class="kt-sub-title">
      Please help us to teach you better by taking a couple of minutes.
    </div>
    <!-- Questions First Block -->
    <div class="kt-questions">
      <!-- First -->
      <div class="kt-question">
        <div class="kt-text">
          Are you satisfied with the teaching staff and their teaching methods?
        </div>
        <div class="radiogroup">
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="a1" value="Highly Satisfied" />
            <label class="label" for="a1">
              <div class="indicator"></div>
              <span class="text">Highly Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="b1" value="Satisfied" />
            <label class="label" for="b1">
              <div class="indicator"></div>
              <span class="text">Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="c1" value="neutral" />
            <label class="label" for="c1">
              <div class="indicator"></div>
              <span class="text">Neutral</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="d1" value="Dissatisfied" />
            <label class="label" for="d1">
              <div class="indicator"></div>
              <span class="text">Dissatisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="d1" value="Dissatisfied" />
            <label class="label" for="d1">
              <div class="indicator"></div>
              <span class="text">Highly Dissatisfied</span>
            </label>
          </div>
        </div>
      </div>
      <!-- Second -->
      <div class="kt-question">
        <div class="kt-text">
          How satisfied are you with the facilities provided by the college?
        </div>
        <div class="radiogroup">
          <div class="wrapper">
            <input class="state" type="radio" name="feedback2" id="a2" value="Highly Satisfied" />
            <label class="label" for="a2">
              <div class="indicator"></div>
              <span class="text">Highly Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback2" id="b2" value="Satisfied" />
            <label class="label" for="b2">
              <div class="indicator"></div>
              <span class="text">Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback2" id="c2" value="neutral" />
            <label class="label" for="c2">
              <div class="indicator"></div>
              <span class="text">Neutral</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback2" id="d2" value="Dissatisfied" />
            <label class="label" for="d2">
              <div class="indicator"></div>
              <span class="text">Dissatisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="d1" value="Dissatisfied" />
            <label class="label" for="d1">
              <div class="indicator"></div>
              <span class="text">Highly Dissatisfied</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Questions First Block -->

    <!-- Questions Second Block -->
    <div class="kt-questions">
      <!-- First -->
      <div class="kt-question">
        <div class="kt-text">
          Do you feel it is easier to register for different clubs within the college?
        </div>
        <div class="radiogroup">
          <div class="wrapper">
            <input class="state" type="radio" name="feedback3" id="a3" value="Highly Satisfied" />
            <label class="label" for="a3">
              <div class="indicator"></div>
              <span class="text">Highly Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback3" id="b3" value="Satisfied" />
            <label class="label" for="b3">
              <div class="indicator"></div>
              <span class="text">Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback3" id="c3" value="neutral" />
            <label class="label" for="c3">
              <div class="indicator"></div>
              <span class="text">Neutral</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback3" id="d3" value="Dissatisfied" />
            <label class="label" for="d3">
              <div class="indicator"></div>
              <span class="text">Dissatisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="d1" value="Dissatisfied" />
            <label class="label" for="d1">
              <div class="indicator"></div>
              <span class="text">Highly Dissatisfied</span>
            </label>
          </div>
        </div>
      </div>
      <!-- Second -->
      <div class="kt-question">
        <div class="kt-text">
          Are you satisfied with the teaching staff and their teaching practices?
        </div>
        <div class="radiogroup">
          <div class="wrapper">
            <input class="state" type="radio" name="feedback4" id="a4" value="Highly Satisfied" />
            <label class="label" for="a4">
              <div class="indicator"></div>
              <span class="text">Highly Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback4" id="b4" value="Satisfied" />
            <label class="label" for="b4">
              <div class="indicator"></div>
              <span class="text">Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback4" id="c4" value="neutral" />
            <label class="label" for="c4">
              <div class="indicator"></div>
              <span class="text">Neutral</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback4" id="d4" value="Dissatisfied" />
            <label class="label" for="d4">
              <div class="indicator"></div>
              <span class="text">Dissatisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="d1" value="Dissatisfied" />
            <label class="label" for="d1">
              <div class="indicator"></div>
              <span class="text">Highly Dissatisfied</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Questions Second Block -->

    <!-- Questions Third Block -->
    <div class="kt-questions">
      <!-- First -->
      <div class="kt-question">
        <div class="kt-text">
          How satisfied are you with the cleanliness and variety of food items available in the cafeteria?
        </div>
        <div class="radiogroup">
          <div class="wrapper">
            <input class="state" type="radio" name="feedback5" id="a5" value="Highly Satisfied" />
            <label class="label" for="a5">
              <div class="indicator"></div>
              <span class="text">Highly Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback5" id="b5" value="Satisfied" />
            <label class="label" for="b5">
              <div class="indicator"></div>
              <span class="text">Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback5" id="c5" value="neutral" />
            <label class="label" for="c5">
              <div class="indicator"></div>
              <span class="text">Neutral</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback5" id="d5" value="Dissatisfied" />
            <label class="label" for="d5">
              <div class="indicator"></div>
              <span class="text">Dissatisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="d1" value="Dissatisfied" />
            <label class="label" for="d1">
              <div class="indicator"></div>
              <span class="text">Highly Dissatisfied</span>
            </label>
          </div>
        </div>
      </div>
      <!-- Second -->
      <div class="kt-question">
        <div class="kt-text">
          How satisfied are you with the projects provided by the faculty?
        </div>
        <div class="radiogroup">
          <div class="wrapper">
            <input class="state" type="radio" name="feedback6" id="a6" value="Highly Satisfied" />
            <label class="label" for="a6">
              <div class="indicator"></div>
              <span class="text">Highly Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback6" id="b6" value="Satisfied" />
            <label class="label" for="b6">
              <div class="indicator"></div>
              <span class="text">Satisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback6" id="c6" value="neutral" />
            <label class="label" for="c6">
              <div class="indicator"></div>
              <span class="text">Neutral</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback6" id="d6" value="Dissatisfied" />
            <label class="label" for="d6">
              <div class="indicator"></div>
              <span class="text">Dissatisfied</span>
            </label>
          </div>
          <div class="wrapper">
            <input class="state" type="radio" name="feedback1" id="d1" value="Dissatisfied" />
            <label class="label" for="d1">
              <div class="indicator"></div>
              <span class="text">Highly Dissatisfied</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Questions Third Block -->

    <div class="kt-text">
      If you have specific feedback, please write to us...
    </div>
    <textarea name="comment" id="comment" placeholder="Additional Comments"></textarea>
    <div class="kt-input-fields">
      <div class="kt-name">
        <object type="image/svg+xml" data="assets/img/svg/user.svg"></object>
        <input type="text" name="name" placeholder="Your Name" />
      </div>
    </div>
    <div class="kt-input-fields">
      <div class="kt-email">
        <object type="image/svg+xml" data="assets/img/svg/email.svg"></object>
        <input type="email" name="email" placeholder="Your vit.edu Email" />
      </div>
      <div class="kt-mobile">
        <object type="image/svg+xml" data="assets/img/svg/phone.svg"></object>
        <input type="text" name="phone" placeholder="Your Mobile Number" />
      </div>
    </div>
    <div class="kt-buttonWrapper">
      <button type="submit" name="submit" class="kt-button">Submit Feedback</button>
    </div>
  </form>
</body>

</html>