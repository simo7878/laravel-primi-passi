<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MoviesController extends Controller
{

  public function list()
  {

    $albums = [
      new Album('New Jersey', 'Bon Jovi', 1988, 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'),
    ];

    return view('cds', [ 'albums'=>$albums ]);
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
