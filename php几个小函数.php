<?php

//************100以内奇偶数和*****************
$sum1=0;
$sum2=0;
$i=1;
for($i=1;$i<=100;$i=$i+1)
{
    /*if($i%2==0)
        $sum1=$sum1+$i;
    else
        $sum2=$sum2+$i;*/
    $i%2?$sum1+=$i:$sum2+=$i;
}


//*******************成绩***********************
echo $sum1;
echo"<br/>";
echo $sum2;
echo"<br/>";
echo"<br/>";
echo"<br/>";
$j=0;
$a=[56.5,96.3,99.7,78.8];
for ($j=0;$j<=3;$j++)
{
if(0<= $a[$j]&&$a[$j]<60)
{echo "成绩为".$a[$j]."不及格";echo"<br/>";
    echo "floor=".floor($a[$j])."<br/>"."ceil=".ceil($a[$j])."<br/>";}
if(60<= $a[$j]&&$a[$j]<90)
{echo "成绩为".$a[$j]."及格";echo"<br/>";
    echo "floor=".floor($a[$j])."<br/>"."ceil=".ceil($a[$j])."<br/>";}
if(90<= $a[$j]&&$a[$j]<=100)
{echo "成绩为".$a[$j]."优秀";echo"<br/>";
    echo "floor=".floor($a[$j])."<br/>"."ceil=".ceil($a[$j])."<br/>";}
}
echo"<br/>";
echo"<br/>";


//****************水仙花数************************
$k=100;
while($k<1000){
    $f=$k%10;
    $l=$k/10%10;
    $y=floor($k/100);
    if($f**3+$l**3+$y**3==$k)
        echo $k."***".$y."***".$l."***".$f."<br/>";
++$k;
}
echo"<br/>";
echo"<br/>";


//*********************阵******************
$A=11;
$B=21;
for($o=1;$o<=$A;$o++)
{
        for($r=1;$r<=$A-$o;$r++)
        echo"&nbsp";

        for($R=1;$R<=2*$o-1;$R++)
        echo"*";

    echo"<br/>";
}
for($O=$A+1;$O<=$B;$O++)
{
    for($r=1;$r<=$O-$A;$r++)
    echo"&nbsp";

    for($R=1;$R<=($B-$O)*2+1;$R++)
    echo"*";

    echo"<br/>";
}