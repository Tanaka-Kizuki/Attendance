var setClock = function() {
  var time = document.querySelector('.realtime');
var nowtime = new Date();

//現在時刻の取得
var nowHour = nowtime.getHours();
var nowMinute = nowtime.getMinutes();
var nowSecond = nowtime.getSeconds();

var msg = nowHour + ':' + nowMinute + ':' + nowSecond;

time.innerHTML = msg;
};

setInterval('setClock()',1000);