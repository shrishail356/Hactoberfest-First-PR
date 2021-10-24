var name1 = "Player 1";
var name2 = "Player 2";

function editNames(){
  name1 = prompt("Enter First person Name");
  name2 = prompt("Enter Second person Name");
  document.querySelectorAll("p")[0].innerHTML = name1;
  document.querySelectorAll("p")[1].innerHTML = name2;

}

function rollDice(){
  setTimeout(function(){
    // // DICE 1

      var randomNumber1 = Math.floor(Math.random() * 6) + 1;
      var ranImg = "dice" + randomNumber1 + ".png";
      var randomImgGenerator1 = "images/" + ranImg;
      var image1 = document.querySelectorAll("img")[0];
      image1.setAttribute("src", randomImgGenerator1);


    // FOR DICE 2

      var randomNumber2 = Math.floor(Math.random() * 6) + 1;
      var ranImg = "dice" + randomNumber2 + ".png";
      var randomImgGenerator2 = "images/" + ranImg;
      var image1 = document.querySelectorAll("img")[1];
      image1.setAttribute("src", randomImgGenerator2);

    // FOR HEADING

    if (randomNumber1 > randomNumber2) {
      document.querySelector("h1").innerHTML =  name1 + " wins!!";
    } else if (randomNumber1 < randomNumber2) {
      document.querySelector("h1").innerHTML =  name2 + " wins!!";
    } else {
      document.querySelector("h1").innerHTML = "Its a Draw!!";
    }
  },20);
}
