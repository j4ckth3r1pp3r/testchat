var conn = new WebSocket('ws://192.168.0.228:8080');

conn.onopen = function(e) {
  console.log('Connected!');
};

conn.onmessage = function (e) {
  console.log(`Данные: ${e.data}`);
}
