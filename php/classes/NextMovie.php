<?php 
class NextMovie {

    private int  $days_until;
    private string $title;
    private string $poster;
    private string $poster_url;
    private string $release_date;
    private array $following_production; 

    public function __construct(array $data){
        $this->days_until = $data["days_until"]?? 0;
        $this->title = $data["title"]?? "Titulo desconocido";
        $this->poster = $data["overview"]?? "Sin descripcion";
        $this->poster_url = $data["poster_url"]?? "Sin url";
        $this->release_date = $data["release_date"]?? "Sin fecha";
        $this->following_production = $data["following_production"]?? null;

    }
    //creamos metodo publico
    public function getData():array{
        $array = [
            "days_until" => $this->days_until,
            "title" => $this->title,
            "poster" => $this->poster,
            "poster_url" => $this->poster_url,
            "release_date" => $this->release_date,
            "following_production" => $this->following_production
        ];
        return $array;
   
    }


    public function getTitle():string{
        return $this->title;
    }
    public function getPoster():string{
        return $this->poster;
    }
    public function getPosterUrl():string{
        return $this->poster_url;
    }
    public function getReleaseDate():string{
        return $this->release_date;
    }

}
?>