var http=require("http");
var url = require('url');
http.createServer(function(req,res){
    var realUrl = (req.connection.encrypted ? 'https': 'http') + '://' + req.headers.host + req.url;
    var q = url.parse(realUrl, true);
    res.write("<h1>Host : </h1>"+q.host+"<br>"); //returns 'localhost:8080'
    res.write("<h1>pathname : </h1>"+q.pathname); //returns '/default.htm'
    res.write("<h1>Search : </h1>"+q.search); //returns '?year=2017&month=february'
    var qdata = q.query; //returns an object: { year: 2017, month: 'february' }
    res.write("<h1>Month : </h1>"+qdata.month);
    res.end;
}).listen(8080);

