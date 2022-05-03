var http=require("http");
var fs = require("fs");
http.createServer(function(req,res){
fs.rename("demo.html","raghu.html",function(err)
{
    if(err)
    {
        res.write("<h1>"+err+"</h1>");
    }
    else
    {
        res.write("<h1>Rename is sucessful</h1>");
    }
    res.end();

});
}).listen(8080);