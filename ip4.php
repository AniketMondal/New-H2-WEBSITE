<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
           <?php

        if(isset ($_POST['rno']) && !empty($_POST['rno']))
        {
            $rno = $_POST['rno'];
                if($rno>100)
                {
                    $rnolast=$rno%100;
                }
                else{
                    $rnolast=$rno;
                }
                $rnostart=($rno-$rnolast)/100;

            if(($rno>=1 && $rno<=91)||($rno>=101 && $rno<=191)||($rno>=201 && $rno<=291))   //ground floor
            {
                if($rnolast>=1 && $rnolast<=12)
                {
                    $gate=40;
                }
                else if($rnolast>=13 && $rnolast<=23){
                    $gate=100;
                }
                else if($rnolast>=24 && $rnolast<=37){
                    $gate=100;
                }
                else if($rnolast>=38 && $rnolast<=47){
                    $gate=70;
                }
                else if($rnolast>=48 && $rnolast<=61){
                    $gate=160;
                }
                else if($rnolast>=62 && $rnolast<=69){
                    $gate=130;
                }
                else if($rnolast>=70 && $rnolast<=83){
                    $gate=230;
                }
                else if($rnolast>=84 && $rnolast<=91){
                    $gate=200;
                 }
                $r=$gate+$rnostart;
                $s=$r+10;
                ?> <p style="font-size:25px; line-height: 10px;"><b>IP</b>
                <?php
                echo ': 10.2.'."$r".'.'."$rnolast".' or '.'10.2.'."$s".'.'."$rnolast".'<br>';?></p>
                 <p style="font-size:25px;"><b>Gateway</b>
                <?php
                echo ': 10.2.'."$gate".'.250'.'<br>';    ?></p>
                 <p style="font-size:25px;"><b> Subnet mask</b>
                     : 255.255.224.0
                 </p>
                 <img src="images/prefixlength.jpg" alt="Use prefix length = 19" style="max-width:400px">
                 <p style="font-size:25px;"><b> DNS Server</b>
                     : 10.200.1.11 / 10.200.11.1
                 </p>
                 <hr>
                 <?php
              }
            else
            {
                echo 'Please put the room no. b/w 1 to 91, 101 to 191 & 201 to 291';
            }

        }
        ?>

        <h2 style="font-size:30px;"> Hostel 2 IP Address Allocation.</h2>
            <h4 style="font-size:24px;"><i>Write Your Room No. b/w 1 to 91, 101 to 191 & 201 to 291 to get your IP Address.</i></h4>
            <form name="ip" method="post" action="ip4.php" >
                <table >
                    <tr>
                        <td >
                          <p style="font-size:20px;">  Room No. </p>
                        </td>
                        <td>
                            <input type="text" name="rno" style="font-size:20px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Get ip" style="font-size:20px;"">
                        </td>
                    </tr>
                </table>
        </form>
    </body>
</html>
