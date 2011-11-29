var http = require('http');
http.createServer(function (req, res) {
      res.writeHead(200, {'Content-Type': 'text/plain'});
        res.end('Hello World, fnsoxt');
}).listen(10080);
console.log('Server is running.by fnsoxt');
