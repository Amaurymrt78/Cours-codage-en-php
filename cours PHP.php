<main>
    <h1>Game Character</h1>
</main>

<?php

class Character {

}
interface GenerateCode
class GameCharacter extends Character {
    public $Name;
    public $Picture;
    public $Description;
    
    // Methods (/functions)
    public function__construct($Name;$Picture;$Description)
    {
        $this->Name = $Name;
        $this->Picture = $Picture;
        $this->Description = $Description;

        echo "<h2>"  . $this->Name . "</h2>"; 
    }

    public function__destruct()
    {

    }

    public function generate HTML()
    {
        echo "<h2>" . $this->Name . "</h2>";
        echo "<div>";
        echo "<img src="telechargé.jpg" . $this->Picture . "' alt='" . $this->Name. "' />";
        echo "<p>" . $this->Description . "</p>";
        echo "</div>";
    }
}
// src/Controller / GameController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
// ...

class GameController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('game/number.html.twig', [
            'number' => $number,
            ]);
        }
    }
}
