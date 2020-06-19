const express = require('express');
const router = express.Router();

router.use('/notices/list', require('./notices/list.js'));

module.exports = router;