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

$rssXml = new rssFeed('file:///output.xml' , 'mijn titel' , 'mijn link' , 'mijn omschrijving' , 'nl');
$rssXml->start();
$rssXml->addRssItems($data);
$rssXml->end();


class rssFeed{
  var $xml;
  var $channelTitel;
  var $channelLink;
  var $channelDescription;
  var $channelLanguage;
  var $channelUri;

  function __construct($uri,$titel,$link,$description,$language){
    $this->channelUri = $uri;
    $this->channelTitel = $titel;
    $this->channelLink = $link;
    $this->channelDescription = $description;
    $this->channelLanguage = $language;
  }

  function start(){
    $this->xml = new XMLWriter();
    // Next open the file to which you want to write. For example, to write to /var/www/example.com/xml/output.xml, use:
    //$xml->openURI('file:///var/www/example.com/xml/output.xml');
    $this->xml->openURI($this->channelUri);
    // To start the document (create the XML open tag):
    $this->xml->startDocument('1.0', 'utf-8');
    // Set Indent to 4 spaces
    $this->xml->setIndent(4);

    // Create the RSS element
    $this->xml->startElement('rss');
        $this->xml->writeAttribute('version', '2.0');
            // Create the channel element
            $this->xml->startElement('channel');
                // Sets channel attributes
                $this->xml->writeElement('title', $this->channelTitel);
                $this->xml->writeElement('link', $this->channelLink);
                $this->xml->writeElement('description', $this->channelDescription);
                $this->xml->writeElement('language', $this->channelLanguage);
                  // Create the image element
                  $this->xml->startElement('image');
                      // Sets image attributes
                      $this->xml->writeElement('title', '');
                      $this->xml->writeElement('link','');
                      $this->xml->writeElement('url','');
                      $this->xml->writeElement('width','');
                      $this->xml->writeElement('height','');
                  // Closes the image element
                  $this->xml->endElement();
                  // Create the image element
  }

  function end(){
        // Closes the channel element
        $this->xml->endElement();
    // Closes the RSS element
    $this->xml->endElement();
  }

  function addRssItems($data){
    for($index=0;$index<count($data);$index++){
      $this->addRssItem($data[$index]);
    }
  }


  function addRssItem($item){
    $this->xml->startElement('item');
        // Sets item attributes
        $this->xml->writeElement('title', $item['title']);
        $this->xml->writeElement('pubDate', $item['pubDate']);
        $this->xml->writeElement('link', $item['link']);
        $this->xml->writeElement('description', $item['description']);
        $this->xml->writeElement('author', '');
        $this->xml->writeElement('comments', '');
        $this->xml->writeElement('category', '');
        $this->xml->writeElement('author', '');
            // Create the enclosure element
            $this->xml->startElement('enclosure');
                // Sets enclosure attributes
                $this->xml->writeAttribute('url', 'http://www.ministrare.be/podcast.mp4');
                $this->xml->writeAttribute('length', '19741854');
                $this->xml->writeAttribute('type', 'video/mpeg');
            // Closes the enclosure element
            $this->xml->endElement();
    // Closes the item element
    $this->xml->endElement();
  }
}

?>
