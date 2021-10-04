const { response } = require("express");
const express = require("express");
const bodyParser = require("body-parser");
const app = express();
const https = require("https");
const { read } = require("fs");
app.get("/",function (req,res) {
    res.sendFile(__dirname+"/index.html");
})
app.use(bodyParser.urlencoded({extended:true}));
app.post("/",function (req,res) {
    const appid = "e471a981bf6830e01d0a79681cb03db4";
    var query = req.body.Pincode;
    const units = "metric";
    const url="https://api.openweathermap.org/data/2.5/weather?zip="+ query +",in&appid="+ appid +"&units=" + units;
    https.get(url,function (response) {
        response.on("data",function (data) {
            const weatherData = JSON.parse(data);
            const cityName = weatherData.name;
            const temp = weatherData.main.temp;
            const description = weatherData.weather[0].description;
            const iconid = weatherData.weather[0].icon;
            const icon = "https://openweathermap.org/img/wn/"+ iconid +"@2x.png";
            res.setHeader("Content-Type", "text/html");
            
            // res.write("<h1 >Weather conditions at "+cityName + "</h1>");
            // res.write("<h3>Temperature : "+temp +"<sup>o</sup>C<br>Weather Descriptoin : "+description+"</h3>");
            // res.write("<br><img src=" + icon + ">");
            res.send("<div style=\"text-align: center; \">"+"<h1 style=\"color:red;\" >Weather conditions at "+cityName + "</h1>" + "<h2 style=\"color:blue;\">Temperature : "+temp +"<sup>o</sup>C<br>Weather Descriptoin : "+description+"</h2>"+"<br><img height=\"100px\" src=" + icon + ">"+"</div>");
            res.send();
        })
    })
})
app.listen(3000,function () {
    console.log("The server has been started at port 3000");
});