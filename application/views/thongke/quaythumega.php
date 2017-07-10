 
<div class="panel panel-default panel-live">
   <div class="panel-heading">
      <h4><i class="fa fa-television" aria-hidden="true"></i> Quay thử xổ số Vietlott Mega 6/45</h4>
   </div>
   <div class="panel-body">
      <h3 class="red text-center">Kết quả quay thử xổ số Vietlott Mega 6/45</h3>
      
      <div class="time-result title-mega645 red text-center">
         <button type="button" class="btn btn-success" style="width: 100%;" onclick="quaythumega()">Bắt đầu quay thử</button>
      </div>
      <div id="live645">
         <ul class="result-number">
            <li class="live645_no1_quaythu"> </li>
            <li class="live645_no2_quaythu"> </li>
            <li class="live645_no3_quaythu"> </li>
            <li class="live645_no4_quaythu"> </li>
            <li class="live645_no5_quaythu"> </li>
            <li class="live645_no6_quaythu"> </li>
         </ul>
      </div>
       <?php
      if($giaimoinhat->num_rows()>0)
		{
		  foreach($giaimoinhat->result() as $kqgiaimoinhat)
          {
       ?>
      <p class=" text-center" style="margin-top: 10px;">(Các con số dự thưởng không cần theo đúng thứ tự)</p>
      <p class="red ali-center" style="font-weight: bold;font-size: 22px"><?php echo number_format($kqgiaimoinhat->giatrijackport,0,',','.'); ?> đồng</p>
      
      <table class="table table-bordered">
         <thead>
            <tr>
               <th class="ali-center">Giải thưởng</th>
               <th class="ali-center">Số lượng giải</th>
               <th class="ali-center">Giá trị giải (đồng)</th>
            </tr>
         </thead>
         <tbody class="ali-center">
            <tr>
               <td>Jackpot</td>
               <td><?php echo ($kqgiaimoinhat->sojackport); ?></td>
               <td><b><?php echo number_format($kqgiaimoinhat->giatrijackport,0,',','.'); ?></b></td>
            </tr>
            <tr>
               <td>Giải nhất</td>
               <td><?php echo ($kqgiaimoinhat->sogiainhat); ?></td>
               <td><b><?php echo number_format($kqgiaimoinhat->giatrigiainhat,0,',','.'); ?></b></td>
            </tr>
            <tr>
               <td>Giải nhì</td>
               <td><?php echo ($kqgiaimoinhat->sogiainhi); ?></td>
               <td><b><?php echo number_format($kqgiaimoinhat->giatrigiainhi,0,',','.'); ?></b></td>
            </tr>
            <tr>
               <td>Giải ba</td>
               <td><?php echo ($kqgiaimoinhat->sogiaiba); ?></td>
               <td><b><?php echo number_format($kqgiaimoinhat->giatrigiaiba,0,',','.'); ?></b></td>
            </tr>
         </tbody>
      </table>
      <?php }
           }          
       ?>
   </div>
</div>
<script type="text/javascript">
    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    }
    function quaythumega() 
    {
       
            $('.live645_no1_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
            $('.live645_no2_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
            $('.live645_no3_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
            $('.live645_no4_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
            $('.live645_no5_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
            $('.live645_no6_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');  
         
       setTimeout(function() {
            $number1=getRandomInt(1, 6 );
            $number1=parseInt($number1);
            
            if($number1<10) $number1='0'+$number1;
            $('.live645_no1_quaythu' ).html($number1 );         
            $('.live645_no1_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 2000);
        setTimeout(function() {
            $number2=getRandomInt(1, 45);
            while ($number2==$number1) $number2=getRandomInt(1, 45);
            $number2=parseInt($number2);
            
            if($number2<10) $number2='0'+$number2;
            $('.live645_no2_quaythu' ).html($number2 );         
            $('.live645_no2_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 10000);
        setTimeout(function() {
            $number3=getRandomInt(1, 45);
            while ($number3==$number1 || $number3==$number2 ) $number3=getRandomInt(1, 45);
            $number3=parseInt($number3);
          
            if($number3<10) $number3='0'+$number3;
            $('.live645_no3_quaythu' ).html($number3 );         
            $('.live645_no3_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 15000);
        setTimeout(function() {
            $number4=getRandomInt(1, 45);
            while ($number4==$number1 || $number4==$number2 || $number4==$number3 ) $number4=getRandomInt(1, 45);
            $number4=parseInt($number4);
            if($number4<10) $number4='0'+$number4;
            $('.live645_no4_quaythu' ).html($number4 );         
            $('.live645_no4_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 20000);
        setTimeout(function() {
            $number5=getRandomInt(1, 45);
            while ($number5==$number1 || $number5==$number2 || $number5==$number3 || $number5==$number4  ) $number5=getRandomInt(1, 45);
           $number5=parseInt($number5);
            if($number5<10) $number5='0'+$number5;
            $('.live645_no5_quaythu' ).html($number5 );         
            $('.live645_no5_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 25000);
        setTimeout(function() {
            $number6=getRandomInt(1, 45);
             while ($number6==$number1 || $number6==$number2 || $number6==$number3 || $number6==$number4 || $number6==$number5   ) $number6=getRandomInt(1, 45);
            $number6=parseInt($number6);
            
            if($number6<10) $number6='0'+$number6;
            $('.live645_no6_quaythu' ).html($number6 );         
            $('.live645_no6_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );   
            $('.live645_no6_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Sprout.ogg' ></audio>" );  
            
        }, 30000);
    }
</script>