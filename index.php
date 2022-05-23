<html>
  <title>萬年曆作業</title>
  
  <style>
   /*請在這裹撰寫你的CSS*/ 
    *{
      box-sizing: border-box;
      margin: 0;
    }
    
    .festival{
      color: black;/*透明色 */
      font-size: 50px;
      font-weight: bolder;
      text-align: center;
      -webkit-text-stroke: 1px fuchsia;
      text-decoration: underline wavy blue 3px;
      /* opacity: 0.5; */
    }
    .f1{
      width: 26%;
      margin: 10px auto;
      font-family: 'Microsoft JhengHei';
      font-size: 40px;
      font-weight: bolder;
      text-align: center;
      color:chartreuse;
      -webkit-text-stroke: 1.5px black;
      /* text-decoration:underline overline dotted red; */
      border: 10px dotted darkviolet;
    }
    .f2{
      width: 26%;
      margin: 10px auto;
      font-family: 'Microsoft JhengHei';
      font-size: 40px;
      font-weight: bolder;
      text-align: center;
      color:azure;
      -webkit-text-stroke: 1.5px black;
      /* text-decoration:underline overline dotted red; */
      border: 10px dotted darkred;
    }
    .festival:hover{
      font-size: 80px;
      color: transparent;
      -webkit-text-stroke: 4px darkmagenta;
    }
    .f1:hover{
      width:51%;
      font-size: 80px;
    }
    .f2:hover{
      width:51%;
      font-size: 80px;
    }
    nav{ /*兩大區塊排版 */
      display: flex;
      justify-content: space-around;
      align-content: center;
      margin: 10px auto;
    }
    .bar{ /*上下月之區塊*/
      width: 100%;
      display: flex;
    }
    .bar>.a1{/*上下月區塊調色*/ 
      width: 15%;
      box-shadow: 5px 5px 10px black;
      background-color: black;
      border-bottom: 1px solid white;
      height: 100%;
      font-size: 40px;
    }
    .a1>a{/*上下月文字CSS修改 */
      text-decoration:none ;
      color: white;
      line-height: 140%;
    }
    .a1>a:hover{
      color:lime;
      font-weight: bold;
    }
    .table0{ /*左邊大區塊 */
      width: 830px;
      height: 820px;
      backdrop-filter: blur(5px);
      padding: 50PX;
      background-color: rgba(245, 245, 245, 0.1);
      box-shadow:  10px 10px 10px black;
      border-radius: 10% 10%;
      /* margin-left: 75px; */
      margin: auto;
    }
    .table0:hover{
      /* background-color: lightblue; */
      box-shadow: 20px 20px 10px black;
      backdrop-filter: blur(5px);
    }
    .table{/*右邊月曆大區塊 */
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
    .table:hover{
      /* background-color: lightblue; */
      box-shadow: 20px 20px 10px black;
      backdrop-filter: blur(5px);
    }
    .table>.weekend,.workday{/*平日/假日區塊調整 */
      font-family:'Times New Roman', Times, serif;
      flex-basis: calc(100% / 7.5);
      /* height: 100px; */
      /* max-width: 100%; */
      /* max-height: 100%; */
      /* border: 1px solid black; */
      margin: 2px auto;
      opacity: 0.7;
      box-shadow: 5px 5px 10px black;
      border-radius: 50% 50%;
      margin-bottom: 10px;
    }
    .weekend:hover,.workday:hover {/*將區塊做水平翻轉*/
    animation: 0.4s linear 0s alternate none 1 featuresicon;
    -webkit-animation: 0.4s linear 0s alternate none 1 featuresicon;
    color: gold;
    text-shadow: 3px 3px 5px black;
    border-radius: 50% 50%;
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
    .header0{/*月曆標題欄 */
      font-family:monospace;
      font-size: 40px;
      text-align: center;
      font-weight: bolder;
      line-height: 140%;
      background-color: black;
      color: white;
      width: 70%;
      height: 100%;
      border-bottom: 1px solid white;
      margin: 0 auto;
      box-shadow: 5px 5px 10px black;
      
    }
    
    .header{/*平日欄位欄*/
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
    .header2{/*假日欄位欄 */
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

    .workday{/*平日區塊 */
      color: black;
      font-size: 80px;
      text-align: center;
      /* font-weight: normal; */
      background-color: lightgray;
      border: 1px solid lightgray;
    }
    .weekend{/*假日區塊 */
      color: red;
      font-size: 80px;
      /* font-weight: normal; */
      text-align: center;
      background-color: lightpink;
      border: 1px solid lightpink;
    }
    .today{/*今日日期標出來 */
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
    #myVideo{ /*將影片設成背景影片 */
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
    section{/*月曆區塊修改 */
      display: flex;
      justify-content: center;
      color: red;
      font-size: 40px;
      font-weight: bold;
      margin: auto;
      font-family:'標楷體';
    }
    .showtime{/*實時時間修改 */
      display: flex;
      justify-content: center;
    }
    form{/*查詢區修改 */
      height: 250px;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      /* border: 1px solid black; */
      /* align-items: center; */
    }
    .text{
      text-align: center;
      font-size: 30px;
      color:aqua;
    }
    .text>#year,#month{
      width: 200px;
      text-align: center;
      font-size: 30px;
    }
    .btn{
      display: flex;
      margin: 20px auto;
      justify-content: space-between;
      font-size: 30px;
      
    }
    #now{
      color:black;
      text-decoration: none;
      font-size: 31px;
      border: 1px solid black;
      padding: 5px;
      background-color: lightgray;
    }
    #submit #reset{
      color: black;
      font-size: 30px;
      background-color: lightgray;
    }
    #submit,#reset,#now:hover{
      color: blue;
      font-size: 40px;
      background-color: lightsteelblue;
    }
    @media (min-width:577px) and (max-width:1705px){/*RWD平板尺寸 */
      nav{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        margin: 20px auto;
      }
      .festival{
        font-size: 30px;
      }
      .f1{
        width:50%;
        font-size: 30px;
      }
      .f2{
        width:50%;
        font-size: 30px;
      }
      .festival:hover{
        font-size: 40px;
      }
      .f1:hover{
        width:57%;
        font-size: 40px;
      }
      .f2:hover{
        width:57%;
        font-size: 40px;
      }
      .table{
        margin-top: 20px;
      }
      section{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-content: center;
      color: red;
      font-size: 40px;
      font-weight: bold;
      margin: 1px auto;
      font-family:'標楷體';
      text-align: center;
    }
    .showtime{
      display: flex;
      justify-content: center;
    }
    #showtime>#titletop2,#showbox{
      color:darkviolet;
    }
    .table{
      flex-direction: row;
    }
    }
    @media (max-width:576px){/*RWD手機尺寸*/
      nav{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        margin: 10px auto;
      }
      .festival{
        font-size: 30px;
      }
      .f1{
        width:50%;
        font-size: 30px;
      }
      .f2{
        width:50%;
        font-size: 30px;
      }
      .festival:hover{
        font-size: 40px;
      }
      .f1:hover{
        width:57%;
        font-size: 40px;
      }
      .f2:hover{
        width:57%;
        font-size: 40px;
      }
      .table{
        margin-top: 20px;
      }
      section{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-content: center;
      color: red;
      font-size: 40px;
      font-weight: bold;
      margin: 1px auto;
      font-family:'標楷體';
      text-align: center;
    }
    .showtime{
      display: flex;
      justify-content: center;
    }
    #showtime>#titletop2,#showbox{
      color: darkslateblue;
    }
    .table{
      flex-direction: row;
    }
    }
  </style>
  <script language="JavaScript">
    function ShowTime(){
    　var NowDate=new Date();
    　var h=NowDate.getHours();
    　var m=NowDate.getMinutes();
    　var s=NowDate.getSeconds();　
    　document.getElementById('showbox').innerHTML = h+'時'+m+'分'+s+'秒';
    　setTimeout('ShowTime()',1000);
    }
</script>
<body>
<audio autoplay=1 loop=1>
  <source src="./resource/Silver Scrapes.mp3" type="audio/mp3">
Your browser does not support the audio element.
</audio>
<!-- <h1 style="text-align:center">萬年曆</h1> -->
<?php
/*請在這裹撰寫你的萬年曆程式碼*/  
  date_default_timezone_set("Asia/Taipei");//調整時區
  if(isset($_GET['month'])){
    $month=$_GET['month'];
    $year=$_GET['year'];
}else{
    $month=date("n");
    $year=date("Y");
} 
$error="";
if(!is_numeric($year) || !is_numeric($month)){
  
  // header("location:index.php?year=$year&month=$month");
}
switch($month){
    case 1:
        $prevMonth=12;
        $prevYear=$year-1;
        $nextMonth=$month+1;
        $nextYear=$year;
    break;
    case 12:
        $prevMonth=$month-1;
        $prevYear=$year;
        $nextMonth=1;
        $nextYear=$year+1;
    break;
    default:
        $prevMonth=$month-1;
        $prevYear=$year;
        $nextMonth=$month+1;
        $nextYear=$year;
}
  $firstday=$year."-".$month.("-1");
  $firstweekday=date("w",strtotime($firstday));
  $monthdays=date("t",strtotime($firstday));
  $lastday=$year."-".$month.("-").$monthdays;
  $lastweekday=date("w",strtotime($lastday));
  $today=date("Y-m-d");
  $day2=date("j");
  $datedays=[];
  $festivalday=array('0101','0214','0312','0401','0501','0903','1007','1010','1031','1224','1225');
  $festival=array('0101'=>' 元 旦 ','0214'=>' 情 人 節 ','0312'=>' 植 樹 節 ','0401'=>' 愚 人 節 ','0501'=>' 勞 動 節 ','0903'=>' 軍 人 節 ','1007'=>' 劉 老 師 和 我 的 生 日 ! ! 加 分 ~','1010'=>' 國 慶 節 ','1031'=>' 萬 聖 節 ','1224'=>' 平 安 夜 ','1225'=>' 聖 誕 節 '); 
  $week=['星期日','星期一','星期二','星期三','星期四','星期五','星期六']; 
  // print_r($festivalday) ;
  // echo $festivalday[0];
  // echo $festival[$festivalday['0101']];
  
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
  ?>
  <section>
  <?php
  // echo "<pre>";
  // print_r($datedays);
  // echo "</pre>";
  echo "<p>&nbsp;今天是 $today ".$week[date('w')]."</p>";//輸出今天日期星期
?>
<div class="showtime">
  <body onload="ShowTime()" ><!-- 現在時間 -->
    <p class="titletop2">&nbsp;現在時間&nbsp;:&nbsp;</p>
    <div id="showbox" ></div>
  </body>
</div>
  </section>  

<?php
//設定節日
if(date("md") == $festivalday[0] || date("md") == $festivalday[1] || date("md") == $festivalday[2] || date("md") == $festivalday[3] || date("md") == $festivalday[4] || date("md") == $festivalday[5] || date("md") == $festivalday[6] || date("md") == $festivalday[7] || date("md") == $festivalday[8] || date("md") == $festivalday[9] || date("md") == $festivalday[10]){
  echo "<p class='festival'>今 天 是 ".$festival[date("md")]."</p>";
}else{
if(date('w')==0 || date('w')==6){
  echo "<p class='f1'>今 天 是 平 平 凡 凡 的 假 日 !</p>";
}else{
  echo "<p class='f2'>今 天 是 平 平 凡 凡 的 一 天 !</p>";
}
}
$words=["你不一定要很厲害，才能開始；但你要開始，才能很厲害。","記住你的價值，它不因外觀的不雅而貶值，是金子總有發光的一天。",
        "沒有退路時，潛能就發揮出來了。","永不言敗，是成功者的最佳品格。","如果你向神求助，說明你相信神的能力；如果神沒有幫助你，說明神相信你的能力。",
        "要成功，先發瘋，頭腦簡單向前衝。","一個人只要有夢想，生命就有了依託；一個人只有不懈地追逐著夢想，活著才覺得意義深遠，趣味無窮，也才能將生命的潛能發揮到極致。",
        "有了夢想，就應該迅速有力地實施。坐在原地等待機遇，無異於盼天上掉餡餅。毫不猶豫儘快拿出行動，為夢想的實現創造條件，才是夢想成真的必經之路。",
        "人生觀決定了一個人的人生追求；世界觀決定了一個人的思想境界；價值觀決定了一個人的行為準則。","人生就是生活的過程。哪能沒有風沒有雨？正是因為有了風雨的洗禮才能看見斑斕的彩虹；有了失敗的痛苦才會嘗到成功的喜悅。",
        "擁有夢想只是一種智力，實現夢想才是一種能力。","人生只有走出來的美麗，沒有等出來的輝煌。","人生就像騎腳踏車，想保持平衡就得往前走。",
        "不求與人相比，但求超越自己，要哭就哭出激動的淚水，要笑就笑出成長的性格！","我們必須在失敗中尋找勝利，在絕望中尋求希望。","一個人的夢想也許不值錢，但一個人的努力很值錢。",
        "在真實的生命里，每樁偉業都由信心開始，並由信心跨出第一步。","這個世界不是因為你能做什麼，而是你該做什麼。","積極向上的心態，是成功者的最基本要素。",
        "真正能讓你倒下的，不是對手，而是你絕望的內心。","所有的憂傷都是過往，當時間慢慢沉澱，你會發現，自己的快樂比想像的多得多。","生活總會給你另一個機會，這個機會叫明天。",
        "強大的信心，能克服來自內心的惡魔，產生無往不勝的勇氣。","寧願辛苦一陣子，不要辛苦一輩子。","遠大的目標非常重要，一定要有成功的企圖心，而且越大越好。",
        "人生最大的敵人是自己怯懦。","每天只看目標，別老想障礙。","過去不等於未來；沒有失敗，只有暫時停止成功；採取更大量的行動。","一個人只有在全力以赴的時候才能發揮最大的潛能。",
        "現在不玩命，將來命玩你， 現在不努力，未來不給力。","當你的能力還駕馭不了你的目標時，那你就應該沉下心來歷練。","健康的身體是實現目標的基石。",
        "與積極的人在一起，可以讓我們心情高昂。","熱情和欲望可以突破一切難關。","永不放棄是你夢想實現的唯一秘訣。","意志堅強的人，他的世界充滿著無限的可能性。",
        "永不言敗是追究者的最佳品格。","成功的秘訣是努力，所有的第一名都是練出來的。","付出才會傑出。","目標的實現建立在我要成功的強烈願望上。","不管失敗多少次，都要面對生活，充滿希望。",
        "人的潛能是一座無法估量的豐富的礦藏，只等著我們去挖掘。","要成功，不要與馬賽跑，要騎在馬上，馬上成功。","實現夢想往往是一個艱苦的堅持的過程，而不是一步到位，立竿見影。那些成就卓越的人，幾乎都在追求夢想的過程中表現出一種頑強的毅力。",
        "用心觀察成功者，別老是關注失敗者。","磨練，使人難以忍受，使人步履維艱，但它能使強者站得更挺，走得更穩，產生更強的鬥志。","要跟成功者有同樣的結果，就必須採取同樣的行動。",
        "人生，最寶貴的莫過於光陰；人生，最璀璨的莫過於事業；人生，最快樂的莫過於奮鬥。","成功就是簡單的事情不斷地重複做。","偉大的成就，來自為遠大的目標所花費的巨大心思和付諸的最大努力。",
        "向著目標奔跑，何必在意折翼的翅膀，只要信心不死，就看的見方向，順風適合行走，逆風更適合飛翔，人生路上什麼都不怕，就怕自己投降。","善待自己，不被別人左右，也不去左右別人，自信優雅。",
        "心存希望，幸福就會降臨你；心存夢想，機遇就會籠罩你。","年輕人，更重要的是看到明天，抓住今天，在寧靜中奮進，也許在明天旭日出山之前，你又創造了奇蹟！","人生只有創造才能前進；只有適應才能生存。",
        "勝利女神不一定眷顧所有的人，但曾經嘗試過，努力過的人，他們的人生總會留下痕跡！","夢想不拋棄苦心追求的人，只要不停止追求，你們會沐浴在夢想的光輝之中。","再美好的夢想與目標，再完美的計畫和方案，如果不能儘快在行動中落實，最終只能是紙上談兵，空想一番。",
        "只要瞄準了大方向，堅持不懈地做下去，才能夠掃除擋在夢想前面的障礙，實現美好的人生藍圖。","在人生中只有曲線前進的快樂，沒有直線上升的成功。只有珍惜今天，才會有美好的明天；只有把握住今天，才會有更輝煌的明天！",
        "無人理睬時，堅定執著。萬人羨慕時，心如止水。","生活總會給你答案的，但不會馬上把一切都告訴你。只要你肯等一等，生活的美好，總在你不經意的時候，盛裝蒞臨。","為了不讓生活留下遺憾和後悔，我們應該儘可能抓住一切改變生活的機會。",
        "每一個人都擁有生命，卻不是每個人都能讀懂生命；每一個人都擁有頭腦，卻不是每個人都善用頭腦。","為明天做準備的最好方法，就是要集中你所有的智慧，所有的熱誠，把今天的事情做得盡善盡美。",
        "不要放棄自己，勇敢地接受生命的挑戰。有一天我們可以老死、病死、窮死，但絕不要允許自己失望而死，消極而死！","無志者常立志，有志者立常志，咬定一個目標的人最容易成功。",
        "哪怕是最沒有希望的事情，只要有一個勇敢者去堅持做，到最後就會擁有希望。","如果你盼望明天，那必須先腳踏現實；如果你希望輝煌，那么你須腳不停步。","學會改變生活，學會品味滄桑，方可無悔青春，無憾歲月的消逝。",
        "有望得到的要努力，無望得到的不介意，無論輸贏姿態都會好看。","運氣永遠不可能持續一輩子，能幫助你持續一輩子的東西，只有你個人的能力。","人生最重要的價值是心靈的幸福，而不是任何身外之物。",
        "做正確的事，再把事情做正確。","人生要成沉澱，要有定力，一個人定力不夠會浮躁。","人生在世，最重要的不是自己處境如何，而是你如何看待自己的處境。","機會是自己創造的，而不能一味的等待別人的賜予。",
        "一個人幸運的前提，其實是他有能力改變自己。","當你再也沒有什麼可以失去的時候，就是你開始得到的時候。","世界不會在意你的自尊，人們看的只是你的成就。在你沒有成就以前，切勿過分強調自尊。","不要為已消逝之年華嘆息，須正視欲匆匆溜走的時光。",
        "遇到困難時不要抱怨，既然改變不了過去，那麼就努力改變未來。","生命就是一個一直在支出時間的過程，等時間支完了，生命也就走到了盡頭。","不要抱怨，不要總是覺得自己懷才不遇，這種狀況大部分是自己造成的。",
        "當你感到痛苦時，就去學習點什麼吧，學習可以使我們減緩痛苦。","你經歷的所有的困苦都是有意義的，因為這是你要承擔重任的先兆。","人有了信念和追求就能忍受一切艱苦，適應一切環境。",
        "成大事不在於力量多少，而在能堅持多久。","做事有始有終值得開始的事就值得完成。聰明人做事總是有始有終。","因為有悔，所以披星戴月；因為有夢，所以奮不顧身。","一生中你唯一需要回頭的時候，是為了看自己到底走了多遠。",
        "永遠不讓「恐懼」阻止自己去做真心喜歡的事。","Never say die.","Never put off what you can do today until tomorrow.","Believe in yourself.","Jack of all trades and master of none.","Knowledge is power.",
        "Learn to walk before you run.","Constant dropping wears the stone.","Experience is the mother of wisdom.","Every man is his own worst enemy.","From small beginnings comes great things.",
        "All things in their being are good for something.","Failure is the mother of success.","Never underestimate your power to change yourself！"];
$num=rand(0,104);
echo "<marquee style='font-family:Microsoft JhengHei;color:darkgreen;font-size:25px;font-weight:bold;margin-top:10px;'>每日一句: ".$words[$num]."</marquee>";
?>
<video autoplay muted loop id="myVideo"><!--置入影片上方CSS調整為背景影片-->
  <source src="./resource/video.mp4" type="video/mp4">
</video>
<nav>
<div class="table0">
<P style="font-size: 30px;color:chocolate;text-align:center;font-weight:bold">氣象資訊</P>
<iframe width="730" height="450" src="https://embed.windy.com/embed2.html?lat=23.140&lon=121.641&detailLat=24.939&detailLon=121.542&width=730&height=450&zoom=6&level=surface&overlay=clouds&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=true&metricWind=m%2Fs&metricTemp=%C2%B0C&radarRange=-1" frameborder="0"></iframe>
<form action="index.php" method="get">
  <h1 style="color:red;text-align:center; font-size:50px;margin-top:50px;">請輸入年份和月分</h1>
  <?php
   $error="";
  if(!is_numeric($year) || !is_numeric($month)){
    $error="輸入格式錯誤，請重新輸入!";
    echo "<h3 style='color:yellow;text-align:center'>".$error."</h3>";
  }
  ?>
  <div class="text">
    年份: <input type="text" name="year" style="font-size: 30px;width:200px;" value="">
    月分: <select name="month" id="" style="font-size: 30px;">
      <option value="0"></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
  </div>
  <div class="btn">
    <p style="margin: 30px; color:black;"><input type="submit" value="送出查詢" id="submit"></p>
    <p style="margin: 30px;font-size: 30px;"><a href='index.php?year=<?=$year=date('Y');?>&month=<?=$month=date('n');?>' id="now">當前月分</a></p>
    <p style="margin: 30px; color:black;"><input type="reset" value="清空資料" id="reset"></p>
  </div>
</form>
</div>
<section class="table">
  <div class="bar">
    <p class="a1" style="text-align: left;"><a href="index.php?year=<?=$prevYear;?>&month=<?=$prevMonth;?>">《《</a></p>
<?php
    if(empty($_GET['year']) || empty($_GET['month'])){
      echo "<p class='header0'>".$year=date("Y")." 年 ".$month=date("n")." 月份月曆</p>";
    }else{
      echo "<p class='header0'>".$_GET['year']." 年 ".$_GET['month']." 月份日曆</p>";
    }
?>      
    <p class="a1" style="text-align: right;"><a href="index.php?year=<?=$nextYear;?>&month=<?=$nextMonth;?>">》》</a></p> 
</div>
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
           if($day == $today){//判斷今天日期並做變化
              echo "<div class='today {$hol}'>{$dayFormat}</div>";
           }else{
              echo "<div class='{$hol}'>{$dayFormat}</div>";
           }
       }else{
           echo "<div class='{$hol}' style='opacity: 0.3;'></div>";//印空白+透明效果
  
       }
   }
?>
</section>
</nav>
</body>
<html>
