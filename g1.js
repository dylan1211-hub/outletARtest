var https = require("https");
var fs = require('fs');

var url = "https://5bb9-2001-b011-e004-18ef-1a2-b976-4ef-86f6.ngrok.io/readjson";


https.get(url, function (response) {
    var data = "";
    console.log("start");
    response.on("data", chunk => {
        console.log("on data");
        data += chunk;
    });

    response.on("end", () => {
        data = JSON.parse(data);
        console.log(data);
    });
});