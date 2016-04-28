var express = require('express');
var session = require('express-session');
var app = express();
var bodyParser = require('body-parser');

app.set('views', __dirname + '/views');
app.engine('html', require('ejs').renderFile);

// Create application/x-www-form-urlencoded parser
var urlencodedParser = bodyParser.urlencoded({ extended: false })

app.use(express.static('public'));
app.use(session({secret: 'ssshhhhh'}));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}));

var sess;

app.get('/login.html',function(req,res) {
	//sess = req.session;
	res.sendFile( __dirname + "/" + "login.html" );

});

app.post('/process_post',function(req,res){
	sess = req.session;
	sess.first_name = req.body.first_name;
	sess.last_name = req.body.last_name; 
	  
	if (sess.first_name == 'sara' && sess.last_name == 'milicic') {
		res.send("Hello " + sess.first_name + " " + sess.last_name);
	}
		
	else {
		console.log("nije dobar user");
		res.end("Nije dobar user.");
	}
		
	res.end('done');
});

var server = app.listen(8081, function () {

  var host = server.address().address
  var port = server.address().port

  console.log("Example app listening at http://%s:%s", host, port)

})