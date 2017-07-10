<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-calculator" aria-hidden="true"></i> Kết quả xổ số tự chọn Mega 6/45 </h4>
 </div>
 <div class="panel-body" style="margin-top: 20px;">
    <div class="form-search">
           <form method="post" action="<?php echo base_url();?>mega-6-45/so-ket-qua">
              <div class="form-group col-sm-4 col-xs-4">
                 <input type="text" class="start_date form-control" name="start_date" value="<?php  echo $start_date;  ?>" readonly>
              </div>
              <div class="form-group col-sm-4 col-xs-4">
                 <input type="text" class="end_date form-control" name="end_date" value="<?php echo $end_date; ?>" readonly>
              </div>
               
              <div class="form-group col-sm-4 col-xs-4">
                 <button type="submit" class="btn btn-success" style="width: 100%;">Thống kê</button>
              </div>
           </form>
        </div>
 
 </div>
 <hr>
 <div class="panel-body">
     
    
        
     <?php
      if($last40curent->num_rows()>0)
		{
		  foreach($last40curent->result() as $kqlast40curent)
          {
       ?>
    
    <div id="output" class="statistics-results">
       <div class="box-result-detail">
          <p class="time-result title-mega645"> 
          <?php //echo $kqgiaimoinhat->ngayquay;
                    echo $this->util->namedayendtovi($kqlast40curent->thuquay)." ".$this->util->ConvertDateTimeToView($kqlast40curent->ngayquay). "- Kỳ quay thưởng #000".$kqlast40curent->kiquay;
          ?>
          </p>
          <ul class="result-number">
          <?php
          $array_sotrungthuong = explode("-", $kqlast40curent->chuoitrunggiai);
                if(is_array ($array_sotrungthuong))
                {
    				foreach($array_sotrungthuong as $kqarray_sotrungthuong)
    				{
    					if($kqarray_sotrungthuong!="")
    					{
                            $stt++;
    						$kqarray_sotrungthuong=intval(trim($kqarray_sotrungthuong));
                            if($kqarray_sotrungthuong<10) $kqarray_sotrungthuong= "0".$kqarray_sotrungthuong;
                  ?>
             <li><?php echo $kqarray_sotrungthuong;?></li>
              <?php
                                  
                        }
    				}
    			}
             ?>
             
          </ul>
       </div>
       <div class="result clearfix table-responsive">
          <table class="table table-bordered">
             <tbody>
                <tr>
                   <td>Jackpot</td>
                   <td style="text-align: center;"><?php echo ($kqlast40curent->sojackport); ?></td>
                   <td style="text-align: right" class="red"><b><?php echo number_format($kqlast40curent->giatrijackport,0,',','.'); ?></b> vnđ</td>
                </tr>
             </tbody>
          </table>
       </div>
    </div>
     <?php }
       }          
   ?>
    
 </div>
</div>