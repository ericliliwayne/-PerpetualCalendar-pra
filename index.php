<html>
  <title>萬年曆作業</title>
  <style>
   /*請在這裹撰寫你的CSS*/ 
    *{
      box-sizing: border-box;
      margin: 0;
    }
    .table{
      display: flex;
      flex-wrap: wrap;
      width: 750px;
      height: 750px;
      border: 1px solid cadetblue;
      justify-content:space-between;
      margin: auto;
      background-color: lightgreen;
    }
    .table>div{
      min-width: 100px;
      min-height: 100px;
      max-width: 100%;
      max-height: 100%;
      border: 1px solid black;
      margin: 1px auto;
      
    }
    .header{
      font-family: '標楷體';
      font-size: 50px;
      text-align: center;
      line-height: 200%;
      background-color: black;
      color: white;
    }
    .header2{
      font-family: '標楷體';
      font-size: 50px;
      text-align: center;
      line-height: 200%;
      color: red;
      background-color: black;
    }

    .workday{
      color: black;
      font-size: 80px;
      text-align: center;
      background-color: lightgray;
    }
    .weekend{
      color: red;
      font-size: 80px;
      text-align: center;
      background-color: lightpink;
    }
    .today{
      color: blue;
      font-size: 80px;
      font-weight: bolder;
      text-align: center;
      
    }
  </style>
<body>
<h1>萬年曆</h1>
<?php
/*請在這裹撰寫你的萬年曆程式碼*/  
  $month=date('n');
  $year=date('Y');
  $firstday=date('Y-').$month.('-1');
  $firstweekday=date('w',strtotime($firstday));
  $today=date("Y-n-j");
  $monthdays=date('t',strtotime($firstday));
  $lastday=date('Y-').$month.('-').$monthdays;
  $lastweekday=date('w',strtotime($lastday));
  $day2=date('j');
  $datedays=[];
date_default_timezone_set("Asia/Taipei");//調整時區
$week=['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];

  
  for($i=0;$i<$firstweekday;$i++){
    $datedays[]="";
  }
  for($i=0;$i<$monthdays;$i++){
    $date=date("Y-m-d",strtotime("+$i days",strtotime($firstday)));
    $datedays[]=$date;
  }
  for($i=0;$i<(6-$lastweekday);$i++){
    $datedays[]="";
  }
  
  // echo "<pre>";
  // print_r($datedays);
  // echo "</pre>";
  echo "<p style='font-size:45px;font-family:標楷體;color:red'>今天是 $today ".$week[date('w')]."</p>";//輸出今天日期星期
?>
<section class="table">

  <div class="header2">SUN</div>
  <div class="header">MON</div>
  <div class="header">TUE</div>
  <div class="header">WED</div>
  <div class="header">THU</div>
  <div class="header">FRI</div>
  <div class="header2">SAT</div>
  
<?php
  foreach($datedays as $k => $day){
    $hol=($k%7==0 || $k%7==6)?'weekend':'workday';//判定假日與非假日套用CSS
    if(!empty($day)){
        $dayFormat=date("j",strtotime($day));
        if($dayFormat == $day2){
          echo "<div class='today {$hol}'>{$dayFormat}</div>";
        }else{
          echo "<div class='{$hol}'>{$dayFormat}</div>";
        }
        
    }else{
        echo "<div class='{$hol}'></div>";

    }
    
}

?>

</section>
</body>
<html>
