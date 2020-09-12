<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/time/timein" method="post">
  @csrf
    <input type="submit" value="出勤">
  </form>
  <form action="/time/timeout" method="post">
  @csrf
    <input type="submit" value="出勤">
  </form>
</body>
</html>