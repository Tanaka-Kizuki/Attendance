<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .timestamp {display: inline-block;}
    body {text-align:center;}
    button {width: 80px; height: 50px;}
    .container {display:flex; flex-wrap: wrap;}
    .attendance{border:1px solid black; width: 45%; margin: 10px auto;}
    table {margin: 0 auto;}
    tr {text-align: center}
  </style>
  <script src="{{asset('/js/time.js')}}"></script>
</head>
<body>
  <h1 class="main-title">Attendance</h1>
  <output class="realtime"></output>
  <p>{{session('message')}}</p>
  <form class="timestamp" action="/time/timein" method="post">
  @csrf
    <button>
      出勤
    </button>
  </form>
  <form class="timestamp" action="/time/timeout" method="post">
  @csrf
    <button>退勤</button>
  </form>
  <form class="timestamp" action="/time/breakin" method="post">
  @csrf
    <button>休憩開始</button>
  </form>
  <form class="timestamp" action="/time/breakout" method="post">
  @csrf
    <button>休憩終了</button>
  </form>

  <a href="/time/performance"><button>実績確認</button></a>

  <div class="container">
    @foreach ($itmes as $itme)
    <div class="attendance">
      <table>
        <th>{{$itme->user_name}}</th>
        <tr><td>出勤</td><td>{{$itme->punchIn}}</td></tr>
        <tr><td>休憩開始</td><td>{{$itme->breakIn}}</td></tr>
        <tr><td>休憩終了</td><td>{{$itme->breakOut}}</td></tr>
        <tr><td>退勤</td><td>{{$itme->punchOut}}</td></tr>
        <tr><td>勤務時間</td><td>{{$itme->workTime}}</td></tr>
      </table>
    </div>
    @endforeach
  </div>

</body>
</html>