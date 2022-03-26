var http = require('http');
var dt = require('./myfirstmodule');
var myLogModule = require('./log.js');


http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.write("The date and time are currently: " + dt.myDateTime()+'<br/>');
  res.write("Log Module is "+myLogModule.info('Node.js started'));
  res.end();
}).listen(8080);