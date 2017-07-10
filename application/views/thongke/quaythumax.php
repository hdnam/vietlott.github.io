<div class="panel panel-default panel-live">
   <div class="panel-heading">
      <h4><i class="fa fa-television" aria-hidden="true"></i> Quay thử kết quả Vietlott Max 4D</h4>
   </div>
   <div class="panel-body">
      <h3 class="red text-center">Kết quả quay thử xổ số Vietlott Max 4D</h3>
      <div class="time-result title-mega645 red text-center">
         <button type="button" class="btn btn-success" style="width: 100%;" onclick="quaythumega()">Bắt đầu quay thử</button>
      </div>
      <div class="table-responsive resultmax4d clearfix">
         <table class="table table-bordered ali-center">
            <thead>
               <tr>
                  <th>Giải thưởng</th>
                  <th class="ali-center">Kết quả</th>
                  <th class="ali-right">Giá trị giải (đồng)</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td class="red ali-left">Giải nhất</td>
                  <td class="result-max4d red">
                     <b class="livemax_nhat_quaythu"> </b>
                  </td>
                  <td class="red ali-right"><b>15.000.000</b></td>
               </tr>
               <tr>
                  <td class="ali-left">Giải Nhì</td>
                  <td class="result-max4d">
                     <b class="livemax_nhi1_quaythu"> </b>
                     <b class="livemax_nhi2_quaythu"> </b>
                  </td>
                  <td class="ali-right"><b>6.500.000</b></td>
               </tr>
               <tr>
                  <td class="ali-left">Giải Ba</td>
                  <td class="result-max4d">
                     <b class="livemax_ba1_quaythu"> </b>
                     <b class="livemax_ba2_quaythu"> </b>
                     <b class="livemax_ba3_quaythu"> </b>
                  </td>
                  <td class="ali-right"><b>3.000.000</b></td>
               </tr>
               <tr>
                  <td class="ali-left">Giải KK 1</td>
                  <td class="result-max4d ali-center">
                     <b class="livemax_kk1_quaythu"> </b>
                  </td>
                  <td class="ali-right"><b>1.000.000</b></td>
               </tr>
               <tr>
                  <td class="ali-left">Giải KK 2</td>
                  <td class="result-max4d ali-center">
                     <b class="livemax_kk2_quaythu"></b>
                  </td>
                  <td class="ali-right"><b>100.000</b></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
<script type="text/javascript">
    function getRandomInt(min, max) {
      giatri= Math.floor(Math.random() * (max - min + 1) + min);
      if(giatri>0 && giatri<10)
      {
        giatri='000'+giatri;
      } else if(giatri>=10 && giatri<100)
      {
        giatri='00'+giatri;
      } else if(giatri>=100 && giatri<1000)
      {
        giatri='0'+giatri;
      }
      else
      {
        giatri=giatri;
      }
      return giatri;
    }
    function quaythumega() 
    {
       
            
        $('.livemax_nhat_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
        $('.livemax_kk1_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
        $('.livemax_kk2_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
        $('.livemax_nhi1_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
        $('.livemax_nhi2_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
        $('.livemax_ba1_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
        $('.livemax_ba2_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
        $('.livemax_ba3_quaythu').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
        
        
         
       setTimeout(function() {
            $number=getRandomInt(1, 9999 );
            $('.livemax_ba1_quaythu' ).html($number );         
            $('.livemax_ba1_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 2000);
        setTimeout(function() {
            $number=getRandomInt(1, 9999 );
            $('.livemax_ba2_quaythu' ).html($number );         
            $('.livemax_ba2_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 10000);
        setTimeout(function() {
            $number=getRandomInt(1, 9999 );
            $('.livemax_ba3_quaythu' ).html($number );         
            $('.livemax_ba3_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 15000);
        setTimeout(function() {
            $number=getRandomInt(1, 9999 );
            $('.livemax_nhi1_quaythu' ).html($number );         
            $('.livemax_nhi1_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 20000);
        setTimeout(function() {
            $number=getRandomInt(1, 9999 );
            $('.livemax_nhi2_quaythu' ).html($number );         
            $('.livemax_nhi2_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );     
            
        }, 25000);
          setTimeout(function() {
            $number=getRandomInt(1, 9999 ).toString();
            $('.livemax_nhat_quaythu' ).html($number );    
            $('.livemax_kk1_quaythu' ).html('X'+$number.substr(1, 3));   
            $('.livemax_kk2_quaythu' ).html('XX'+$number.substr(2, 2));        
            $('.livemax_nhat_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );   
            $('.livemax_nhat_quaythu' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Sprout.ogg' ></audio>" );   
            
        }, 30000);
    }
</script>
 