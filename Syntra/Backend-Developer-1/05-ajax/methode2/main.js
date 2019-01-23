
$.ajax({
  url: "http://api.wunderground.com/api/11b695bb1b69fac7/geolookup/conditions/q/BX/Diepenbeek.json",
  dataType: "json",
  success: function(parsed_json){
    console.log(parsed_json);
    console.log(parsed_json.current_observation.temp_c);
    console.log(parsed_json.current_observation.display_location);
    $('#temp_c').append(parsed_json.current_observation.temp_c);
    $('#temp_c').css("color", "red")
  },
  statusCode: {
    404: function(){
      alert("Page not found");
    },
    200: function(){
      alert("Temperatuur gevonden");
    }
  }
});
