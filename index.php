<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, initial-scale=1"/>
    <title>Mehmet ÖZEN</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Black.woff");
        font-weight: 900;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Bold.woff");
        font-weight: 700;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-SemiBold.woff");
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Regular.woff");
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Medium.woff");
        font-weight: 200;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Light.woff");
        font-weight: 100;
        font-style: normal;
        font-display: swap;
      }

      body {
        font-family: "Jont" !important;
      }
    </style>
  </head>
  <body>
    <section class="homework-array">
        <div class="homework-header"><p class="header-property">Random Animals Name</p></div>
        <div class="homework-header"><p class="header-property">Refresh the Page to Generate Random New Names</p></div>
        <div class="animals-area" style="padding-bottom: 120px;">
              <?php
                    $animals = ["Elephant", "Rabbit", "Tiger ", "Monkey", "Gorilla", "Hyena","Fox", "Wolf", "","Dog","Cat", "", NULL];
                    $newArray=array_filter($animals);
                    $keys = array_rand($newArray,5);
                    $lastArray = array_map(function($e){
                        return $e;
                    },$keys);
                    $myOwnArray = [];
                    for($i=0;$i<5;$i++){
                        $myOwnArray[]= $newArray[$lastArray[$i]];
                    };
                    foreach($myOwnArray as $arrayItem){
                      ?>
                      <p style="color:white;font-size:18px;padding:15px;text-align:center;"><?php echo $arrayItem."</br>"; ?></p>
                      <?php
                    };
                ?>
                <a href="" style="padding: 12px 25px;background-color:white;color:#666;font-size:20px;border-radius:12px;position:absolute;right:120px;bottom:120px;" >Try Me</a>
        </div>
    </section>
  </body>
</html>
