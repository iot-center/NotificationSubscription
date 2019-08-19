var express = require('express');
var app = express();
var server = require('http').createServer(app);
var bodyParser = require('body-parser');
var util = require('util');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

const data = { 'm2m:sgn':
{ 'm2m:nev':
   { 'm2m:rep':
      { 'm2m:cin':
         { rn: 'cin_193826381',
           ty: 4,
           ri: '/antares-cse/cin-193826381',
           pi: '/antares-cse/cnt-579716492',
           ct: '20190819T141821',
           lt: '20190819T141821',
           st: 0,
           cnf: 'text/plain:0',
           cs: 32,
           con: '{"suhu":"80","kelembapan":"110"}' } },
     'm2m:rss': 1 },
  'm2m:sud': false,
  'm2m:sur': '/antares-cse/sub-385188245' } }

console.log(JSON.parse(data["m2m:sgn"]["m2m:nev"]["m2m:rep"]["m2m:cin"].con).suhu)

// Get Data Notification
// app.post('/subcribe', function(req, res) {
//     console.log(util.inspect(req.body, false, null))
//     res.send(req.body.('m2m:sgn'))
// });

server.listen(3000, function() {
    console.log("Server Now Running On Port 3000")
});