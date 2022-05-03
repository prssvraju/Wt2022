var http=require("http");
http.createServer(function (req, res){
    res.write("Hello first code");
    res.end;

}).listen(8080);