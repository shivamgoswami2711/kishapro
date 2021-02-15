<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registration.php">
    <input type="file" accept="image/*">
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="lastname" placeholder="lastname" required>
    <input type="text" name="username" placeholder="username" required>
    <input type="text" name="password" placeholder="password" required>
    <input type="text" name="password" placeholder="conform password" required>
    <select name="work" id="work">
        <option value="none" selected disabled hidden>select</option>
        <option value="farmer">farmer</option>
        <option value="merchant">merchant</option>
    </select>
    <input type="radio" name="gender" value="M" required>
    <input type="radio" name="gender" value="F" required>
    </form>
</body>
</html>