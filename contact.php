<!DOCTYPE html>
<html>
<head>
    <title>Kasai Entertainment | An Experience Like No Other</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/third-party/slick/slick/slick-theme.css" />
    <link rel="stylesheet" href="/third-party/slick/slick/slick.css" />
    <link rel="stylesheet" href="/assets/css/styles.min.css">
</head>

<body id="contact">
  <?php include __DIR__."/partials/navbar.php"?>
  <section>
    <div class="container phone-number">
      <h1>Contact Us Yourself</h1>
      <p>
        (808) 226 - 9916 <br />
        kasai.entertainment@gmail.com
      </p>
    </div>
    <div class="container contact-form">
      <h1>Or Message Us Here</h1>
      <form action="/assets/php/mail0.php">
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
        <div class="message">
          <label for="message">Message</label>
          <textarea name="message" rows="8" cols="40"
                    placeholder="Describe you event, Ask a question, Anything Goes..."
                    class="inputStyle"></textarea>
        </div>

        <button type="submit" class="button">Send</a>
      </form>
    </div>
  </section>
  <div class="image">

  <?php include __DIR__."/partials/footer.php"?>

  </body>
</html>
