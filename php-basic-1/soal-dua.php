<?php

echo "<h3> Soal No 1</h3>";
    
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
    $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
    print_r($kids);
    echo "<br>";
    print_r($adults);

echo "<h3> Soal No 2</h3>";

    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: "; echo count($kids);
    echo "<br>" ;
    echo "<ol>" ;
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";

    echo "</ol>" ;

    echo "Total Adults: "; echo count($adults);
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
    
    echo "</ol>";

echo "<h3> Soal No 3</h3>";

    $trainer = array (
        array("Name" => "Will Byers",
              "Age" => 12,
              "Aliases" => "Will the Wise",
              "Status" => "Alive"),

        array("Name" => "Mike Wheeler",
              "Age" => 12,
              "Aliases" => "Dungeon Master",
              "Status" => "Alive"),
          
        array("Name" => "Jim Hooper",
              "Age" => 43,
              "Aliases" => "Chief Hopper",
              "Status" => "Deceased"),
        array("Name" => "Eleven",
              "Age" => 12,
              "Aliases" => "El",
              "Status" => "Alive"),
        );
  
            echo "<pre>";
            print_r($trainer);
            echo "</pre>";
?>