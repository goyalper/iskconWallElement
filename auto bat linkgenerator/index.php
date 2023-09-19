<!DOCTYPE html>
<html>
<head>
<title>Microsoft search Generator</title>
<!-- <link rel= href=> -->

</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;

        }
        /* .text{
            width: 85vw;
            height: calc(100vh - 80px);
            margin:auto;
            margin-top: 40px;
            margin-bottom: 40px;
            padding: 3vh;
            background-color: royalblue;
            color: white;
            font-size: 2vw;
            font-weight: bolder;
            content: inherit;

        } */
    </style>

<div class="text">
    <?php
    $str=["a","b","c","d","e","f","g","h","i","h","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9","@","#","v","$","%","!","^","@","*","#","(","#","(","(","E","W","J","J","K","S","K","N","S","K","N","B","HJ","D","B","J","B","S","K","F","B","H","K","B","D","S","H","F"];
    
    for ($i=0; $i < 5; $i++) { 
        echo "<h1>";
        echo "start microsoft-edge: --profile-directory=\"Profile 2\" https://www.bing.com/search?q=";
        // echo count($str);
        // echo $str[74];
        // echo $str[75];
        // echo $str[76];
        // echo $str[77];
            foreach($str as $let){

                 echo $str[random_int(0,count($str)-1)];

            }
            echo "</h1>";
    }
    ?>
</div>

</body>
</html>