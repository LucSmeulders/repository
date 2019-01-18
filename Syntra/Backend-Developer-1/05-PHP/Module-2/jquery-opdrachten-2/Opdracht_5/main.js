// Write your solution here
$( "#name,#first_name" ).focus(function( event ) {
  $(this).css("border","5px green dashed");
});
$( "#name,#first_name" ).blur(function( event ) {
  $(this).css("border","5px red dashed");
});
