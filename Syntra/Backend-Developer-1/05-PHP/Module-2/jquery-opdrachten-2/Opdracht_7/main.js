$(document).ready(function(){
    var count = 0;
    console.log(count);

    /* On click: Enlarge the font (120%) */
    $("#instructions").find("li").eq(0).click(function( event ) {
      $('#content').css("font-size", "120%");
    });

    /* On click: Decrease the font size (80%) */
    $("#instructions").find("li").eq(1).click(function( event ) {
      $('#content').css("font-size", "80%");
    });

    /* On click: Bold or normalize the green words */
    $("#instructions").find("li").eq(2).click(function( event ) {
      $('.green').toggleClass("bold");
    });

    /* On click: Underline or normalize the words in red */
    $("#instructions").find("li").eq(3).click(function( event ) {
      $('.red').toggleClass("underline");
    });

    /* On click: Replace the logo with another image */
    $("#instructions").find("li").eq(4).hover(function( event ) {
      $("img").attr('src', 'images/koala.jpg');
    });
    $("#instructions").find("li").eq(4).mouseleave(function( event ) {
      $("img").attr('src', 'images/jquery-logo.png');
    });

    /* On hover: Display the URL of links in a tooltip when hovering over links */
    $("a").hover(function( event ) {
      $(this).toggleClass("bold");
      $(this).attr("title",$(this).attr("href"));
    });

    /* On click: add "Chapter 1:" before the 1st title h2 and "Chapter 2:" before the 2nd title h2 */
    $("#instructions").find("li").eq(6).hover(function( event ) {
      $("h2").toggleClass("bold");
    });

    $("#instructions").find("li").eq(6).click(function( event ) {
      if(count==0){
        count++;
        $("h2").eq(0).prepend("Chapter 1:" );
        $("h2").eq(1).prepend("Chapter 2:" );
      }
    });
});
