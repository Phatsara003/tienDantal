
<?php
$arrTime = array('9.00-10.00','10.00-11.00',
'11.00-12.00','13.00-14.00','14.00-15.00',
'15.00-16.00','16.00-17.00');
$arrType = array('ทันตกรรมพื้นฐาน','ทันตกรรมเพื่อความงาม','ทันตกรรมโรคเหงือก','ทันตกรรมฟันเทียม','ทันตกรรมรากฟัน','ทันตกรรมอื่นๆ');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $strTable = '<table border="1" width=""800 align="center"><tr><td>ประเภทการักษา</td>';
    foreach($arrTime as $time){ //การสร้างหัวตาราง
        $strTable.= '<td>'.$time.'</td>';
    }
        $strTable.='</tr>';
    foreach($arrType as $typeNum){
        $strTable.='<tr><td>'.$typeNum.'</td>';
    foreach($arrTime as $time){
        // if(mysql_num_rows($result)>$run && $time == mysql_result($result,$run,'time_booking')){ //ถ้ามีการจอง
        $strTable.='<td>'.$time.'</td>';
        $run++;
        // }else{
        //     $strTable.='<td>ว่าง</td>';
        //  }
    }
        $strTable.='</tr>';
    }
        echo $strTable,'</table>';
    ?>
</body>

<script>
//Create a Web Api url for getting a member info
var url = "http://localhost/test/index.php";
    console.log(url);
    $.get(url,function (data,status) {
        console.log(data);
    }); 
</script>

</html>