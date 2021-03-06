const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

const port = process.env.PORT || 80;

const router = require('./route/v1/');
app.use('/api/v1/', router);

app.listen(port);
console.log('listen on port ' + port);