var http = require('http');
var dt = require('./myfirstmodule');
var myLogModule = require('./log.js');
var person=require('./Person')

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  var personobj = new person('Raghu','Teja');
  res.write("Export Function as a Class: " + personobj.fullname()+'<br/>');
  res.write("Export Function: " + dt.myDateTime()+'<br/>');
  res.write("Log Module is "+myLogModule.info('Node.js started'));
  res.end();
}).listen(8080);

