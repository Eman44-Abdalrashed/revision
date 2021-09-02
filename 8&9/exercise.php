<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise of loops</title>
    <style>
        *{
            margin :0;
            padding :0;
        }

        body{
            padding:10px;
        }

        table{
            width :700px;
            border-collapse :collapse;
        }
        table tr td,table tr th{
            border :solid 1px #999;
            padding :5px;
            text-align :left;
        }
        table tr th{
            background :#666;
            color :#fff;
        }
        table tr:hover{
            background :yellow;
        }
        /* table tr :nth-child(2n){
            background:#e4e4e4;
        } */
    </style>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>math</th>
            <th>english</th>
            <th>arabic</th>
            <th>total</th>
            <th>presentage</th>
            <th>status</th>
        </tr>
        <!-- <tr>
            <th colspan="7">class1</th>
        </tr> -->
    
        <!-- <tr>
            <th>name</th>
            <th>age</th>
        </tr> -->
        <?php
            // $stu =array('eman','ali','ahmed','sara');
            // $age =array(20,30,40,50,);
            // for($i =0; $i < count($stu); $i++){
            //     echo '<tr><td>'.$stu[$i].'</td><td>'.$age[$i].'</td></tr>';
            // }
            $class1 = array(
                array('eman',40,30,35),
                array('mona',30,44,50),
                array('ali',25,40,35)
            );
            foreach($class1 as $value){
                foreach($value as $key=>$name){
                    echo $name.'<br>';
                }
            }
            $class2 = array(
                array('ahmed',40,30,45),
                array('mahmoud',30,45,50),
                array('fathy',10,20,15)
            );
            $school = array($class1,$class2);
            echo '<pre>';
            print_r($school);
            echo '</pre>';
    
            for($i =0; $i < count($school); $i++){
                echo '<tr>
                           <th colspan="7">class'.($i+1).'</th>
                      </tr>';
                      for($j=0; $j<count($school[$i]);$j++){
                        $total=0;
                        $h=1;
                        echo '<tr>';
                         for($k=0; $k< count($school[$i][$j]);$k++){
                            echo '<td>'.$school[$i][$j][$k].'</td>';
                            if($h < count($school[$i][$j])){
                                $total += $school[$i][$j][$h];
                                $h++;
                            }
                         }
                         echo'<td>'.$total.'</td>';
                         $precentage =($total*100)/150;
                         echo '<td>'.round($precentage,2).'%</td>';
                         if($precentage >= 50){
                            echo '<td>succeed</td>';
                         }else{
                             echo '<td>faild</td>';
                         }
                         echo '<tr>';
                      }
            }

        ?>
</body>
</html>