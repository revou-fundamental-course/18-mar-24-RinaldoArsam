<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Page Navigation Website</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header id="home">
 <div class="container">
  <h1>Logo</h1>
  <nav>
    <ul>
      <li><a href="#feature">Feature</a></li>
      <li><a href="#package">Our Packages</a></li>
      <li><a href="#call-to-action">Call to Action</a></li>
    </ul>
  </nav>
 </div>
</header>

<main>
  <section id="hero">
  <h2>Your Trusted Travel Agent's</h2>
    <p>Your Happines is Our Happines</p>
	<div class="flex">
  <div class="main-content">
  <div class="banner">
    <div class="slide-container">
      <div class="slide fade">
        <img src="img/revou.jpg" alt="Slide 1">
      </div>
      <div class="slide fade">
        <img src="img/revou-2.jpg" alt="Slide 2">
      </div>
      <div class="slide fade">
        <img src="img/revou.jpg" alt="Slide 3">
      </div>
    </div>
  </div>
  </div>
  <div class="sidebar">
    <h2>Contact Us</h2>
    <form id="contact-form">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name" required>
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Your Email" required>
      <label for="country">Select Option</label>
    <select id="country" name="country">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
      <button style="width: 100%;" type="submit">Submit</button>
    </form>
	</div>
	</div>
  </section>

  <section id="feature">
    <h2>Feature</h2>
    <p>This is feature content.</p>
	<div  class="features">
    <div class="feature">
    <div class="icon">
      <img src="icon1.png" alt="Feature Icon 1">
    </div>
    <div class="description">
      <h2>Feature 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="feature">
    <div class="icon">
      <img src="icon2.png" alt="Feature Icon 2">
    </div>
    <div class="description">
      <h2>Feature 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  </div>
  </section>
  <section id="package">
    <h2>Our Package</h2>
    <p>This is our package content.</p>
	<div  class="features">
    <div class="feature">
    <div class="icon">
      <img src="icon1.png" alt="Feature Icon 1">
    </div>
    <div class="description">
      <h2>Feature 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="feature">
    <div class="icon">
      <img src="icon2.png" alt="Feature Icon 2">
    </div>
    <div class="description">
      <h2>Feature 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="feature">
    <div class="icon">
      <img src="icon2.png" alt="Feature Icon 2">
    </div>
    <div class="description">
      <h2>Feature 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="feature">
    <div class="icon">
      <img src="icon2.png" alt="Feature Icon 2">
    </div>
    <div class="description">
      <h2>Feature 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="feature">
    <div class="icon">
      <img src="icon2.png" alt="Feature Icon 2">
    </div>
    <div class="description">
      <h2>Feature 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  </div>
  </section>
  <section id="call-to-action">
    <h2>Your Cllosing Argument Headline</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	<center><button style="text-align:center;" type="submit">Call To Action</button></center>
  </section>
</main>

<footer>
  <p>&copy; 2024 Revo U</p>
</footer>

<script src="js/script.js"></script>
</body>
</html>
