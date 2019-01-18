// Write your solution here
$("#green").hover(function( event ) {
  $('#text').css("color", "green");
});
$("#red").hover(function( event ) {
  $('#text').css("color", "red");
});
$("#blue").hover(function( event ) {
  $('#text').css("color", "blue");
});
$("body").mouseout(function( event ) {
  $('#text').css("color", "black");
});
