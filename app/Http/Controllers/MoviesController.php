<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MoviesController extends Controller
{

  public function Index()
  {
    $albums = [
      [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
      ],
      [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
      ],
      [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
      ],
      [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
      ],
      [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg'
      ]

];

     return view('cds', compact('albums'));
  }


}

class Album {
  public $image;
  public $title;
  public $year;
  public $author;

  public function __construct($title, $author, $year, $image) {
    $this->title = $title;
    $this->author = $author;
    $this->year = $year;
    $this->image = $image;

  }
}

?>
