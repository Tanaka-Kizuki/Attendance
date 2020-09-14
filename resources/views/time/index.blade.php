<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .timestamp {display: inline-block;}
    body {text-align:center;}
  </style>
</head>
<body>
  <h1 class="main-title">Attendance</h1>
  <p>{{session('message')}}</p>
  <form class="timestamp" action="/time/timein" method="post">
  @csrf
    <input type="submit" value="出勤">
  </form>
  <form class="timestamp" action="/time/timeout" method="post">
  @csrf
    <input type="submit" value="退勤">
  </form>


</body>
</html>