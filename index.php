<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
    <div class="center-box">
      <img src="./developer.png" width=60%>
      <br>
      <?php
        echo "Instance name: " .gethostname();
      ?>
      <br>
      <?php
        echo 'Current PHP version: ' .phpversion();
      ?>
    </div>
  </body>

<style>
    .center-box{
      text-align:center;
    }
    img {
      width: 300px;
    }
  </style>
</html>
