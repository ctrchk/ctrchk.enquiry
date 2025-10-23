<?php
// Simple form that POSTs to process.php
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Test PHP Form</title></head>
<body>
  <form method="post" action="process.php">
    <label for="name">Name:</label>
    <input id="name" name="name" />
    <button type="submit">Submit</button>
  </form>
</body>
</html>

// filepath: ./process.php
<?php
// process POST and show result
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '(none)';
header('Content-Type: text/html; charset=utf-8');
echo "<!doctype html><html><body><h1>Received</h1><p>Name: {$name}</p></body></html>";
?>
<VirtualHost *:80>
    DocumentRoot /var/www/html
    <Directory /var/www/html>
        Require all granted
        AllowOverride All
    </Directory>
