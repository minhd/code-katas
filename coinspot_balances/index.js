var coinspot = require('coinspot-api');
require('dotenv').config()
require('better-log/install');

var secret = process.env.COINSPOT_SECRET;
var key = process.env.COINSPOT_KEY;

var client = new coinspot(key, secret);

client.balances(function(e, data) {
    let balances = JSON.parse(data);
    console.log(balances);
});