<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>p{display: inline}</style>
</head>
<body>
<form action="/time/performance" method="post">
  @csrf
  <select name="year">
    @for($i=2019; $i <= 2030; $i++)
    <option>{{$i}}</option>
    @endfor
  </select>

  <p>年</p>

  <select name="month">
    @for($i=1; $i <= 12; $i++)
    <option>{{$i}}</option>
    @endfor
  </select>

  <p>月</p>
  <input type="submit" value="選択">
</form>

<div class="container">
    @foreach ($itmes as $itme)
    <div class="attendance">
      <table>
        <tr><td>出勤</td><td>{{$itme->punchIn}}</td></tr>
        <tr><td>休憩開始</td><td>{{$itme->breakIn}}</td></tr>
        <tr><td>休憩終了</td><td>{{$itme->breakOut}}</td></tr>
        <tr><td>退勤</td><td>{{$itme->punchOut}}</td></tr>
        <tr><td>勤務時間</td><td>{{$itme->workTime}}</td></tr>
      </table>
    </div>
    @endforeach
  </div>
  <a href="/">戻る</a>
</body>
</html>