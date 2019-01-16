alert("Hello World!");
confirm("I love JavaScript!");
prompt("Do you want to learn Javascript?");

***************************************************
console.log("I love JavaScript!");
console.warn("Warning!");
console.error("Error!");


***************************************************
var myFavoMovie = "V For Vendetta";
var randomNumber = Math.random() * 5;
var naam1 = document.getElementById('naam1').value;

document.getElementById('leeftijd').value = leeftijd;
document.getElementById('txtNamen').innerText = textStr;

***************************************************
var answer = prompt("What is the capital of New York?");
if(answer === "Albany"){
    alert("You are correct");
}else{
    alert("Sorry, " + answer + " is not correct!");
}

var favoAnimal = prompt("What is your favorite animal?");
 
***************************************************
if(favoAnimal === "cat"){
    alert("Cats are awesome!");
}else if(favoAnimal === "dog"){
    alert("Dogs are okay.");
}else{
    alert("Good Choice!");
}

***************************************************
switch(n) {
  case example1:
      console.log("This code will run if n === example1 is true.");
      break;
  case example2:
      console.log("This code will run if n === example2 is true.");
      break;
  case example3:
      console.log("This code will run if n === example3 is true.");
      break;
  default:
      console.log("Default will run if no cases are met.");
      break;
}

***************************************************
for( var i = 0; i < 11; i++){
    console.log(i);
}

***************************************************
Do..While Loop
var x = 1;
do{ 
   console.log("Hello!");
   i++;
}
while(x === 1);

***************************************************
While Loop
var x = 1;
while(x === 2){
    console.log("Hello!");
}

***************************************************
function sayHello(name){
    console.log("Oh Hi " + name);
}

sayHello("Mark");
sayHello("Lisa");
sayHello("Denny");

***************************************************
var friends = ["Mark","Lisa","Denny"];
var pos = vriendenLijst.indexOf(nVriend);
friends.push("Mary"); // *add this

function greetFriends(){
    for(var i = 0; i < friends.length; i++){
        console.log("Oh, Hi " + friends[i]);
    }
}
 
greetFriends();

***************************************************
* Objects

var objTest = {
  //add necessary properties
  teller: 10,
  som: 5
 
  testNu: function(){
    //Function goes here
  }
};


var vriend = {
  naam: "",
  mijnNaam: function(vNaam){
    this.naam = vNaam
  }
}