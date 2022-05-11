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
      width: 830px;
      height: 820px;
      /* border: 1px solid cadetblue; */
      justify-content:space-between;
      align-content:center;
      margin: auto;
      /* box-shadow: inset 10px 10px 10px black; */
      box-shadow:  10px 10px 10px black;
      backdrop-filter: blur(5px);
      padding: 50PX;
      border-radius: 10% 10%;
      background-color: rgba(245, 245, 245, 0.1);
    }
    .table:hover{/*動態背景顏色*/ 
    background: linear-gradient(236deg, #ff0000, #ff8000, #ffff00, #00ff00, #0000ff, #7f007f);
    background-size: 1200% 1200%;
    opacity: 0.7;
    -webkit-animation: AnimationName 30s ease infinite;
    -moz-animation: AnimationName 30s ease infinite;
    -o-animation: AnimationName 30s ease infinite;
    animation: AnimationName 30s ease infinite;
}

    @-webkit-keyframes AnimationName {
        0%{background-position:84% 0%}
        50%{background-position:17% 100%}
        100%{background-position:84% 0%}
    }
    @-moz-keyframes AnimationName {
        0%{background-position:84% 0%}
        50%{background-position:17% 100%}
        100%{background-position:84% 0%}
    }
    @-o-keyframes AnimationName {
        0%{background-position:84% 0%}
        50%{background-position:17% 100%}
        100%{background-position:84% 0%}
    }
    @keyframes AnimationName {
        0%{background-position:84% 0%}
        50%{background-position:17% 100%}
        100%{background-position:84% 0%}
    }
    .table:hover{
      /* background-color: lightblue; */
      box-shadow: 20px 20px 10px black;
      backdrop-filter: blur(5px);
    }
    .table>.weekend,.workday{
      font-family:'Times New Roman', Times, serif;
      min-width: 100px;
      min-height: 100px;
      max-width: 100%;
      max-height: 100%;
      /* border: 1px solid black; */
      margin: 2px auto;
      opacity: 0.7;
      box-shadow: 5px 5px 10px black;
      border-radius: 25% 0 25% 0;
    }
    .weekend:hover,.workday:hover {/*將區塊做水平翻轉*/
    animation: 0.4s linear 0s alternate none 1 featuresicon;
    -webkit-animation: 0.4s linear 0s alternate none 1 featuresicon;
    color: gold;
    text-shadow: 3px 3px 5px black;
    border-radius: 0 25% 0 25%;
    }
    @keyframes featuresicon { 
      50% {
        transform: scaleX(0);
    }
      100% {
        transform: scaleX(1);
    }
    }
    @-webkit-keyframes featuresicon { 
      50% {
        -webkit-transform: scaleX(0);
    }
      100% {
        -webkit-transform: scaleX(1);
    }
    }
    .header0{
      font-family:monospace;
      font-size: 40px;
      text-align: center;
      font-weight: bolder;
      line-height: 140%;
      background-color: black;
      color: white;
      width: 100%;
      height: calc(100% / 14);
      border-bottom: 1px solid white;
      margin: 0 auto;
      box-shadow: 5px 5px 10px black;
      
    }
    .header{
      font-family:'Microsoft JhengHei';
      font-size: 50px;
      font-weight: bolder;
      text-align: center;
      line-height: 100%;
      background-color: black;
      color: white;
      width: calc(100% / 7);
      height: calc(100% / 14);
      border-bottom: 1px solid white;
      border-left: 1px solid white;
      border-right: 1px solid white;
      margin: 0 auto;
      box-shadow: 5px 5px 10px black;
      margin-bottom: 5px;
    }
    .header2{
      font-family: 'Microsoft JhengHei';
      font-size: 50px;
      text-align: center;
      font-weight: bolder;
      line-height: 100%;
      color: red;
      background-color: black;
      width: calc(100% / 7);
      height: calc(100% / 14);
      border-bottom: 1px solid white;
      margin: 0 auto;
      box-shadow: 5px 5px 10px black;
      margin-bottom: 5px;
    }

    .workday{
      color: black;
      font-size: 80px;
      text-align: center;
      background-color: lightgray;
      border: 1px solid lightgray;
    }
    .weekend{
      color: red;
      font-size: 80px;
      text-align: center;
      background-color: lightpink;
      border: 1px solid lightpink;
    }
    .today{
      background: linear-gradient(to top, #FFBFBF, #C2C2FF, #00FF00);
      background: -webkit-linear-gradient(to top, #FFBFBF, #C2C2FF, #00FF00);
      background-clip: text;
      -webkit-background-clip: text;
      /* background-color:; */
      color: transparent;
      font-size: 80px;
      font-weight: bolder;
      text-align: center;
      border: none;
    }
    #myVideo{
      width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
    }
  </style>
<body>
<h1 style="text-align:center">萬年曆</h1>
<?php
/*請在這裹撰寫你的萬年曆程式碼*/  
  date_default_timezone_set("Asia/Taipei");//調整時區
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
  echo "<p style='text-align:center;font-size:45px;font-family:Microsoft JhengHei;color:red;text-shadow:3px 3px 5px black;font-weight:bold'>今天是 $today ".$week[date('w')]."</p>";//輸出今天日期星期
  
?>
<video autoplay muted loop id="myVideo">
  <source src="./resource/video.mp4" type="video/mp4">
</video>

<section class="table">
  <?php
  echo "<div class='header0'>$year 年 ".$month." 月份日曆</div>";
  ?>
  <div class="header2">日</div>
  <div class="header">一</div>
  <div class="header">二</div>
  <div class="header">三</div>
  <div class="header">四</div>
  <div class="header">五</div>
  <div class="header2">六</div>
  
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
