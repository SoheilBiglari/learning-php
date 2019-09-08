<?php
//eerste opdracht
//randomizer images
$var =rand(1,5);
if ($var ==1)
    $randomurl = 'https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg';
if ($var ==2)
    $randomurl = 'https://wallpaperaccess.com/full/190815.jpg';
if ($var ==3)
    $randomurl = 'https://images7.alphacoders.com/528/528418.jpg';
if ($var ==4)
    $randomurl = 'https://wallpaperaccess.com/full/300068.jpg';
if ($var ==5)
    $randomurl = 'https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg';



//tweede opdracht
//randomizer array list
    $name = [
            "Kirito",
            "Erza",
            "Akatsuki",
            "Shiro",
            "Leo",
            "arsaRundel-Haus-Codelan",
            "Ken Kaneki",
            "Glenn Radars",
            "Momonga-Sama",
        ];
         for ($i =0; $i<= 9; $i++) {
             $output[] = $name[mt_rand(0, count($name) - 1)];
         };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript to PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body class="bg-light">
<header id="header" style="background: url('<?php echo $randomurl ?>')">
    <div class="overlay"></div>
    <div class="overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Welcome to the Javascript - PHP exercise</h1>
                    <p>Read the code of this page, understand it, then convert it to the same functionality in PHP!</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="exercises">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="loop-while" class="my-4 p-4 bg-white shadow-sm border">
                    <ul><li><?php  echo $output[0]?></li></ul>
                    <ul><li><?php  echo $output[1]?></li></ul>
                    <ul><li><?php  echo $output[2]?></li></ul>
                    <ul><li><?php  echo $output[3]?></li></ul>
                    <ul><li><?php  echo $output[4]?></li></ul>
                    <ul><li><?php  echo $output[5]?></li></ul>
                    <ul><li><?php  echo $output[6]?></li></ul>
                    <ul><li><?php  echo $output[7]?></li></ul>
                    <ul><li><?php  echo $output[8]?></li></ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="username-generator" class="my-4 p-4 bg-white shadow-sm border">
                    <p><?php
                        createUsername("Rafael Lambelin Selene Nijst");
                        ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

<?php
//derde opdracht
//randomizer letters color
function addRandomColorSpan($char){
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);
    return "<span style='color:rgb($r,$g,$b);'>$char</span>";
};
function createUsername($name){
    $splitNames = explode(" ", $name);

    foreach ($splitNames as $val){
        $splitLetters = str_split($val);

        for ($l = 0 ; $l < count($splitLetters)/2 ; $l++){
            $x = rand(1, count($splitLetters)-1);

            $splitLetters[$x] = strtoupper($splitLetters[$x]);
            $splitLetters[$x] = addRandomColorSpan($splitLetters[$x]);
        };
        $splitLetters = implode("",$splitLetters);
        $newCollection[] = $splitLetters;
    };
    echo implode(" - ", $newCollection);
};
?>

