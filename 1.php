<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<style>

div
{
    animation-name: color;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-direction: alternate;

}
#abc
{
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background-color: darkblue;
    
}
    @keyframes color
    {
        0%
        {
            background-color:yellow;
        }
        50%
        {
            background-color: green;
        }
        100%
        {
            background-color: lavender;
            transform: translateX(100px) rotateY(100deg);
            
        }
    }

    </style>
<body>
    <?php
    echo "ali abdeen";

    
    ?>

    <div class="row">
    <div class="col-lg-2 col-6">
        aa
    </div>
    <div class="col-lg-2 col-6">
    bb
    </div>
    <div class="col-lg-2 col-6">
        aa
    </div>
    <div class="col-lg-2 col-6">
    bb
    </div>
    <div class="col-lg-2 col-6">
    bb
    </div>
    <div class="col-lg-2 col-6">
    bb
    </div>
    </div>


    <div id="abc">
    &nbsp;
    </div>


    

</body>
</html>