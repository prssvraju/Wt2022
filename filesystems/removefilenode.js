var fs = require("fs");
var http = require("http");
http.createServer(function (req, res) {
    fs.unlink('test.txt', function (err) {
    if (err)
    {
      res.write("<h1>"+err+"<h1>");
    } 
    else 
    {
      res.write("<h1> Remove operation complete. </h1>");
    }
    return res.end;
  });
}).listen(8080);
