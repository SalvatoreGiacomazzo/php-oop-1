<?php
class Movies
{

    //* Variabili di istanza
    public $title;
    public $director;
    public $year;
    public $genre;
    public $rating;

    //? Metodi dell'oggetto

    public  function __construct(
        string $title,
        string $director,
        int $year,
        string $genre,
        int $rating
    ) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
        $this->rating = $rating;
    }



    //! printing function
    public function printInfo()
    {
        return "Title: " . $this->title .
            "Directed By: " . $this->director .
            "Year of publishing: " . $this->year .
            "Genre: " . $this->genre .
            "Rating out of 5 :" . $this->rating;
    }
}

$americanHistoryX = new Movies('American History X', 'Tony Kaye', 1999, 'Drama', 4);
$laHaine = new Movies('La Haine', 'Mathieu Kassowitz', 1995, 'Noir', 5);
$eva = new Movies('Evangelion: 2.0 You Can (Not) Advance', 'Hideaki Anno', 2008, 'Sci-fi', 4);
$fantozzi = new Movies('Fantozzi subisce ancora', 'Neri Parenti', 1983, 'Comedy', 3);
