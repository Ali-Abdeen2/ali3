<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #div1
        {
            display: grid;
            
           grid-template-areas: "ar1 ar1 ar1" "ar2 ar2 ar2" "ar3 ar3 ar4";
           grid-gap: 10px;

           
            
        }
        #d1
        {
            grid-area: ar1;
            background-color: red;
        }
        #d2
        {
            grid-area: ar2;
            background-color: green;
        }
        #d3
        {
            grid-area: ar3;
            background-color: aliceblue;
        }
        #d4
        {
            grid-area: ar4;
            background-color: palegreen;
        }
        #divf
        {
            display: grid;
            grid-template-columns: auto auto;
        }
        #divf div:nth-child(1)
        {
            font-size: medium;
            text-align: center;
        }
        #divf div:nth-child(2)
        {
            font-size: medium;
            text-align: center;
        }
        #divf div
        {
            font-size: large;
            text-align: center;
           display: grid;
           justify-content: center;
           align-items: center;
           line-height: 40px;
           margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div id="div1">
        <div id="d1">1</div>
        <div id="d2">2</div>
        <div id="d3">3</div>
        <div id="d4">4</div>
    </div>
    <div style="background-color: khaki;">
        <img style="position: absolute; width: 40%; height:40%;" src="R (1).jpg" alt="">
        <img style="position: absolute; width: 40%; height:40%; left: 10%; margin-top: 5%;" src="R.jpg" alt="">

    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <table border="1" width="100%" style="background-color: blue;">
        <tr>
            <td colspan="2" align="center"><h1>pay by credit card</h1></td>
        </tr>
        <tr>
            <td width="25%">
               <div id="divf">
                    <div>
                        items
                    </div>
                    <div>
                        price
                    </div>
                    <div style="background-color: green; border-top-left-radius: 5px ;border-bottom-left-radius: 5px">
                        Burger <br>
                        <img src="R (1).jpg" alt="" style="width: 40px; height: 40px;">
                    </div>
                    <div style="background-color: green; border-top-right-radius: 5px;border-bottom-right-radius: 5px">
                        15$
                    </div>
                    <div style="background-color: green; border-top-left-radius: 5px ;border-bottom-left-radius: 5px">
                        Burger <br>
                        <img src="R (1).jpg" alt="" style="width: 40px; height: 40px;">
                    </div>
                    <div style="background-color: green; border-top-right-radius: 5px;border-bottom-right-radius: 5px">
                        15$
                    </div>
                    <div style="background-color: green; border-top-left-radius: 5px ;border-bottom-left-radius: 5px">
                        Burger <br>
                        <img src="R (1).jpg" alt="" style="width: 40px; height: 40px;">
                    </div>
                    <div style="background-color: green; border-top-right-radius: 5px;border-bottom-right-radius: 5px">
                        15$
                    </div>
               </div>
            </td>
            <td width="75%" style="vertical-align: top;"> 
a
            </td>
        </tr>
    </table>
</body>
</html>