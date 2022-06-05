<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>|Pride and Pineon|</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles1.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="store.html">STORE</a></li>
                    <li><a href="about.html">Contact Us</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">Pride and Pineon</h1>
        </header>

        <section class="content-section container">
            <h2 class="section-header"><b>WELCOME</b></h2>
            <img class="about-band-image" src="/var/www/html/index.png">
            <p>Welcome to Pride and Pineon, your number one source for all things related to Watches and custom time pices. We're dedicated to giving you the very best of Watches, with a focus on three characteristics, ie: dependability, customer service and uniqueness.</p>
<p>Founded in 1999 by Xavier, Pride and Pineon has come a long way from its beginnings in a remote starting location, ie: his very own home office or some may say toolshed in Houston Texas. When Xavier first started out, his/her passion for helping other parents be more eco-friendly, providing the best equipment for his fellow mates drove him to do intense research, quit his day job, and gave him the impetus to turn hard work and inspiration into to a booming online store. We now serve customers all over the world and are thrilled to be a part of the quirky and eco-friendly wing of the watches industry.
We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.What Is An About Us Page?<p>

<p>An About Us Page is a page on your website that tells your readers all about you. It includes a detailed description covering all aspects of your business and you as an entrepreneur. This can include the products or services you are offering, how you came into being as a business, your mission and vision, your aim, and maybe something about your future goals too. Your About Us page is your perfect opportunity to tell a compelling story about your business.
Even though an About Us page is one of the most important elements of a website, it is often one of the most overlooked elements. Compared to a landing page, an About Us page help you communicate a range of things:

Facebook Ad Design
If you need to make sure that the information you add on the About Us page accurately represents who you are as a brand. Use the following steps to craft a narrative for business:

Set the stage: Describe the industry problem that caused you to act.
Tackle the obstacle: Convey how you set out to address the issue and the challenges you faced along the way.
Introduce the solution: Mention how your company is pursuing its objectives and the pain points you intend to address
Share the bigger picture: Share details of your future objectives or state your aims and mission.
You’d also want to include the following elements in your About Us page to communicate your brand’s reason for existing to customers:<p>

<p>Your History
Take the visitors on your website to a trip down memory lane, and give them an insight to the history behind your store. Here, you can show them where, how, and when you started, and everything your business has accomplished on the way. This is your chance to share your relevant milestones and achievements relating to your business in an engaging way.

You can even choose to present your history to your viewers in the form of a timeline, which allows you to display a large amount of information in a visually engaging manner. Your customers or potential customers might be interested in seeing how you grew over the years.
Team Member Profiles<p>

<p>Add an emotional element to your About Us page by adding details of the people that are driving the passion at your business. People find it easier to connect with human beings, so allow the personality of your crew to shine through the About Us page.<p>

<p>Multimedia & Infographics
A well-built infographic might help visitors remember about you or your business better than any amount of words. So if you think it works better for your brand or business, skip the lengthy description, or add a well-designed graphic that can help your visitors understand your concept. Or maybe you would like to add a cool video about how your business was created, or about your story and let it speak for itself.

    <ul><li>The story of your brand and why you started it. </li></ul>
    <ul><li>The cause or customers that your business serves.</li></ul>
    <ul><li>Your business model or how your products are sourced/manufactured.</li></ul>

As an important part of your website your About Us page can set you apart from your competitors in a way that can build your brand in a positive way.<p>
<P>Sincerely,<p>
<p>Xavier, Founder</p>
        </section>
        
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Pride and Pineon</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.instagram.com/prideandpinion/" target="_blank">
                            <img src="/home/rahulkrishnan/Desktop/js webapp/images/logo-ig-instagram-icon-download-icons-12.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.reddit.com/r/PrideAndPinion/" target="_blank">
                            <img src="/home/rahulkrishnan/Desktop/js webapp/images/52053.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/NicoLeonard01" target="_blank">
                            <img src="/home/rahulkrishnan/Desktop/js webapp/images/facebook-logo-black-2019.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>		
</body>
</html>
