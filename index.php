<?php
include("includes/init.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Home - <?php echo htmlspecialchars($title); ?></title>

  <link rel="stylesheet" type="text/css" href="styles/site.css" media="all" />
</head>

<body>
  <header>
    <h1 id="title"><?php echo htmlspecialchars($title); ?></h1>

    <nav id="menu">
      <ul>
        <li><a href="index.php">Home</a></li>
      </ul>
    </nav>
  </header>

  <footer>
    <p>Contact us at <a href="mailto:info2300-prof@cornell.edu">info2300-prof@cornell.edu</a>.</p>
  </footer>
</body>

</html>