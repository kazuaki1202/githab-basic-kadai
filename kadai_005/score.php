<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     
     <p>
         <?php
         

         list($score1,$score2,$score3,$score4,$score5,$score6,$score7,$score8,$score9,$score10) = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
         
         $score_num = $score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
         $score_avg = $score_num / 10;
         echo $score_avg;
         
         
         
         ?>
     </p>
 </body>
 
 </html>