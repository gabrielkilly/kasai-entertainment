<!DOCTYPE html>
<html>
<head>
    <title>Kasai Entertainment | An Experience Like No Other</title>
    <?php include __DIR__."/partials/head.php"?>
</head>
<body id="contact">
  <?php if(isset($_GET['error'])) {
    $errorMessage = 'Sorry, there was a problem with sending your message. Please use one of our other contact methods.\nError Info: '.$_GET['error']; ?>
    <script>
      alert('<?php echo($errorMessage); ?>');
    </script>
  <?php } ?>
  <?php include __DIR__."/partials/navbar.php"?>
  <section>
    <div class="container phone-number">
      <h1 class="beg-pad">Contact Us Yourself</h1>
      <p>
        (808) 226 - 9916 <br />
        kasai.entertainment@gmail.com
      </p>
    </div>
    <div class="container contact-form">
      <h1>Or Message Us Here</h1>
      <form action="/assets/php/mail.php" method="post">
        <div class="clearfix">
          <div class="left">
            <label for="name">Name</label>
            <input name="name" type="text" class="inputStyle"/>
          </div>
          <div class="right">
            <label for="number">Number</label>
            <input name="number" type="text" class="inputStyle"/>
          </div>
        </div>
        <div class="full-text">
          <label for="email">E-Mail</label>
          <input name="email" type="text" class="inputStyle"/>
        </div>
        <div class="message">
          <label for="message">Message</label>
          <textarea name="message" rows="8" cols="40"
                    placeholder="Describe you event, Ask a question, Anything Goes..."
                    class="inputStyle"></textarea>
        </div>

        <button type="submit" name="submit" class="button" style="margin-top: 3rem;">Send</a>
      </form>
    </div>
  </section>

  <?php include __DIR__."/partials/footer.php"?>
  <script src="/third-party/jquery/jquery-3.3.1.min.js"></script>
  <script src="/third-party/jquery/jqeury-migrate-3.0.1.min.js"></script>
  <script src="/assets/js/main.js"></script>

  </body>
</html>
