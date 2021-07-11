<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="pdf.php" target="_blank" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="email">email</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="date">Date of Birth</label><br>
        <input type="date" name="date" id="date"><br>
        <input type="submit" name="submit" id="submit" value="Generate PDF"><br>
    </form>
</body>
</html>