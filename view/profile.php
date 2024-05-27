<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../view/css/profile.css">

  <title>profile</title>
</head>

<body>
   <!-- alert -->
        <?php if(isset( $_SESSION['message'])): ?>
  <div class="row">
    <div class="col-12">
<div class="col-12">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php echo $_SESSION["message"]; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php unset($_SESSION["message"]) ?>

<!-- alert -->
    </div>
  </div>
  </div><?php endif; ?>
<a style="z-index: 100; position:absolute; margin-top: -35%; margin-left:90%;" class="btn btn-primary" href="index.php">Home</a>
<!-- <div style="z-index: 100; position:absolute; margin-top: -55%; margin-left:90%;" class="btn btn-primary">Home</div> -->
  <div class="container">
    
    <div class="cover">
      <div class="profile-pic">
        <img src="img/profile1.jpg" alt="Hero Alom">
      </div>
    </div>
    <div class="text-center">
      <h1><?php echo $_SESSION["username"];?></h1>
      <p class="subtitle">Developer</p>
    </div>
    <div class="main">
      <ul class="tabs">
        <li data-target="intro" class="active">Introduction</li>
        <li data-target="history">biography</li>
        <li data-target="contact">Contact</li>
      </ul>
      <div id="intro" class="tab-content active">
      <h1><?php echo $_SESSION["userbio"];?></h1>
      <!-- <img src="fake_face.jpg" alt="Fake Face" style="width:300px;height:300px;"> -->
       <p>Greetings! I'm [Made-up Name] and this is definitely not my real face. Just kidding! This quirky face belongs to my alter ego, Captain Noodle - flying through the digital realm to bring laughter and amusement to all who encounter it. Join me on this wild journey of imagination and creativity!</p> <p>Disclaimer: No faces were harmed in the making of this fake introduction.</p>      </div>
      <div id="history" class="tab-content">
        <h1>The Incredible Life of Samantha Brooks</h1>
        <p>Samantha Brooks was born in a small town in the Midwest, but her dreams were always bigger than her surroundings. From a young age, she showed a determination and passion for adventure that set her apart from her peers.</p>
        <p>After graduating top of her class from university, Samantha embarked on a journey that would take her around the world. She climbed mountains, explored jungles, and even uncovered hidden archaeological treasures in remote locations.</p>
        <p>But it was her work as a humanitarian that truly defined Samantha's legacy. She dedicated her life to helping those in need, providing aid and support to communities affected by natural disasters and conflict.</p>
        <p>Despite facing many challenges along the way, Samantha always remained true to herself and never lost sight of her values. Her compassion, bravery, and unwavering dedication to making the world a better place inspired countless others to do the same.</p>
        <p>This biography offers a glimpse into the extraordinary life of Samantha Brooks, a woman whose impact will be felt for generations to come.</p>
      </div>
      <div id="contact" class="tab-content">
        <form action="https://www.w3schools.com/action_page.php">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name...">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Your Email Address...">
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Write Subject...">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Write something..." style="height:150px"></textarea>
          <button type="submit">Send Message</button>
        </form>

      </div>
    </div>
  </div>
  <script>
    const tabs = document.querySelectorAll(".tabs li");
    const tabContents = document.querySelectorAll(".tab-content");
    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((t) => t.classList.remove("active"));
        tabContents.forEach((content) => content.classList.remove("active"));
        tab.classList.add("active");
        const targetId = tab.getAttribute("data-target");
        document.getElementById(targetId).classList.add("active");
      });
    });
  </script>
</body>

</html>