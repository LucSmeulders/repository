<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);

  $data = array(
    [
        'title' => 'Website is going down, End of the world is near!',
        'pubDate' => 'Fri 9 Oct 2019 13:00',
        'link' => 'http://www.ministrare.be/blog/4',
        'description' => '<![CDATA[End of the world!]]>'
    ],
    [
        'title' => 'Our first post is a fact!',
        'pubDate' => 'Wen 7 Oct 2019 13:00',
        'link' => 'http://www.ministrare.be/blog/3',
        'description' => '<![CDATA[Visit this <a href="http://www.ministrare.be">link</a> to my website!]]>'
    ],
    [
        'title' => 'Our second post is alive!',
        'pubDate' => 'Mon 5 Oct 2019 13:00',
        'link' => 'http://www.ministrare.be/blog/2',
        'description' => '<![CDATA[Visit this <a href="http://www.ministrare.be">link</a> to my website!]]>'
    ],
    [
        'title' => 'Our first post is a fact!',
        'pubDate' => 'Sat 3 Oct 2019 13:00',
        'link' => 'http://www.ministrare.be/blog/1',
        'description' => '<![CDATA[Visit this <a href="http://www.ministrare.be">link</a> to my website!]]>'
    ]

);
//var_dump($data);

updateRss($data);
// Instantiate a XMLWriter object:



function updateRss($data){
  $xml = new XMLWriter();
  // Next open the file to which you want to write. For example, to write to /var/www/example.com/xml/output.xml, use:
  //$xml->openURI('file:///var/www/example.com/xml/output.xml');
  $xml->openURI('file:///output.xml');
  // To start the document (create the XML open tag):
  $xml->startDocument('1.0', 'utf-8');
  // Set Indent to 4 spaces
  $xml->setIndent(4);

  // Create the RSS element
  $xml->startElement('rss');
      $xml->writeAttribute('version', '2.0');
          // Create the channel element
          $xml->startElement('channel');
              // Sets channel attributes
              $xml->writeElement('title', 'Ministrare - News Cast');
              $xml->writeElement('link', 'www.ministrare.be');
              $xml->writeElement('description', 'NewsCast');
              $xml->writeElement('language', 'nl');
                // Create the image element
                $xml->startElement('image');
                    // Sets image attributes
                    $xml->writeElement('title', '');
                    $xml->writeElement('link','');
                    $xml->writeElement('url','');
                    $xml->writeElement('width','');
                    $xml->writeElement('height','');
                // Closes the image element
                $xml->endElement();
                // Create the image element

                addRssItems($xml,$data);

          // Closes the channel element
          $xml->endElement();
  // Closes the RSS element
  $xml->endElement();
}


function addRssItems($xml,$data){

for($index=0;$index<count($data);$index++){
  $xml->startElement('item');
      // Sets item attributes
      $xml->writeElement('title', $data[$index]['title']);
      $xml->writeElement('pubDate', $data[$index]['pubDate']);
      $xml->writeElement('link', $data[$index]['link']);
      $xml->writeElement('description', $data[$index]['description']);
      $xml->writeElement('author', '');
      $xml->writeElement('comments', '');
      $xml->writeElement('category', '');
      $xml->writeElement('author', '');
          // Create the enclosure element
          $xml->startElement('enclosure');
              // Sets enclosure attributes
              $xml->writeAttribute('url', 'http://www.ministrare.be/podcast.mp4');
              $xml->writeAttribute('length', '19741854');
              $xml->writeAttribute('type', 'video/mpeg');
          // Closes the enclosure element
          $xml->endElement();
  // Closes the item element
  $xml->endElement();
}
}

?>
