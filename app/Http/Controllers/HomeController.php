<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $linksDcComics = [
        [
            "descrizione" => "Characters",
            "url" => "#"
        ] ,
    
        [
            "descrizione"=> "Comics",
            "url" => "#"
        ],
        [
            "descrizione"=> "Movies",
            "url" => "#"
        ],
        [
            "descrizione"=> "Tv",
            "url" => "#"
        ],
        [
            "descrizione"=> "Games",
            "url" => "#"
        ],
        [
            "descrizione"=> "Video",
            "url" => "#"
        ],
        [
            "descrizione"=> "News",
            "url" => "#"
        ],
    ];
    public $linksShop = [
        [
          "descrizione"=> "Shop DC",
            "url" => "#" 
        ],
        [
          "descrizione"=> "Shop DC Collectibles",
            "url" => "#" 
        ]
    ];
    public $linksDClinksDC = [
        [
            "descrizione" => "Terms Of Use",
            "url" => "#"
        ],
        [
            "descrizione" => "Privacy policy ( new)",
            "url" => "#"
        ],
        [
            "descrizione" => "Ad Choices",
            "url" => "#"
        ],
        [
            "descrizione" => "Advertising",
            "url" => "#"
        ],
        [
            "descrizione" => "Jobs",
            "url" => "#"
        ],
        [
            "descrizione" => "Subscriptions",
            "url" => "#"
        ],
        [
            "descrizione" => "Talent Workshops",
            "url" => "#"
        ],
        [
            "descrizione" => "CPSC Certificates",
            "url" => "#"
        ],
        [
            "descrizione" => "Ratings",
            "url" => "#"
        ],
        [
            "descrizione" => "Shop Help",
            "url" => "#"
        ],
        [
            "descrizione" => "Contact Us",
            "url" => "#"
        ]
      
    ];
    public $Sites = [
        [
            "descrizione" => "DC",
            "url" => "#"
        ],
        [
            "descrizione" => "MAD Magazine",
            "url" => "#"
        ],
        [
            "descrizione" => "DC Kids",
            "url" => "#"
        ],
        [
            "descrizione" => "DC Universe",
            "url" => "#"
        ],
        [
            "descrizione" => "DC Power Visa",
            "url" => "#"
        ],
    ];

    public function home(){
        
        $linksComics = $this -> linksDcComics;
        $linksShops = $this -> linksShop;
        $ArrDcLinks = $this -> linksDClinksDC;
        $ArrSites = $this -> Sites;

        return view('pages.homepage',compact('linksComics',"linksShops","ArrDcLinks","ArrSites"));
    }

    public function cardInfo(){

        $linksComics = $this -> linksDcComics;
        $linksShops = $this -> linksShop;
        $ArrDcLinks = $this -> linksDClinksDC;
        $ArrSites = $this -> Sites;
        return view('pages.primaCardInfo',compact('linksComics',"linksShops","ArrDcLinks","ArrSites"));
    }
}
