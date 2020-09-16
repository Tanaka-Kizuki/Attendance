<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .timestamp {display: inline-block;}
    body {text-align:center;}
    button {width: 50px; height: 50px;}
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

  @foreach ($itmes as $itme)
  <p>{{$itme->punchIn}}</p>
  @endforeach


</body>
</html>