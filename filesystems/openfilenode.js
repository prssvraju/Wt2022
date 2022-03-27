var fs = require("fs");
var http = require("http");
http.createServer(function (req, res) {
  fs.open('test.txt', 'r', function (err, file) {
    if (err)
    {
      res.write("<h1>"+err+"<h1>");
    } 
    else 
    {
      res.write("<h1> Open operation complete. </h1>");
      res.write("File Content : :"+file);
      console.log(file)
    }
    return res.end;
  });
}).listen(8080);
