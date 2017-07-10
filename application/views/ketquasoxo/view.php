 <?php
          if($giaimoinhat->num_rows()>0)
    		{
    		  foreach($giaimoinhat->result() as $kqgiaimoinhat)
              {
                $ngayquay=$this->util->ConvertDateTimeToView($kqgiaimoinhat->ngayquay);
           ?>
 <div class="panel panel-default">
   <div class="panel-heading">
      <h4><i class="fa fa-calculator" aria-hidden="true"></i> Ngày quay thưởng <?php echo $this->util->ConvertDateTimeToView($kqgiaimoinhat->ngayquay);?> </h4>
   </div>
   <div class="panel-body" style="padding-top: 20px;">
      <div class="form-group box-search">
         <input type="hidden" name="round" value="72">
         <label>Chọn ngày quay thưởng</label>
         <input type="text" name="date" id="mega645" value="<?php echo $ngayquay;?>" class="input-date" readonly>
      </div>
      
      <div id="output">
         <div class="box-result-detail">
            <h3 class="red text-center">Kết quả xổ số tự chọn Mega 6/45</h3>
            <p class="time-result title-mega645"><?php //echo $kqgiaimoinhat->ngayquay;
                    echo $this->util->namedayendtovi($kqgiaimoinhat->thuquay)." ".$this->util->ConvertDateTimeToView($kqgiaimoinhat->ngayquay). "- Kỳ quay thưởng #000".$kqgiaimoinhat->kiquay;
                ?></p>
            <ul class="result-number">
               <?php
      $array_sotrungthuong = explode("-", $kqgiaimoinhat->chuoitrunggiai);
            if(is_array ($array_sotrungthuong))
            {
				foreach($array_sotrungthuong as $kqarray_sotrungthuong)
				{
					if($kqarray_sotrungthuong!="")
					{
                        $stt++;
						$kqarray_sotrungthuong=(trim($kqarray_sotrungthuong));
                        
                  ?> 
               <li><?php echo $kqarray_sotrungthuong; ?></li>
               <?php
                                  
                    }
				}
			}
         ?>
                
            </ul>
            <p class="time-result" style="margin-top: 10px;">(Các con số dự thưởng không cần theo đúng thứ tự)</p>
         </div>
         <div class="result clearfix table-responsive">
            <table class="table table-striped">
              
               <tbody>
                  <tr>
                     <td class="red" style="font-weight: bold; text-align: center"><?php echo number_format($kqgiaimoinhat->giatrijackport,0,',','.'); ?> đồng</td>
                  </tr>
               </tbody>
            </table>
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>Giải thưởng</th>
                     <th style="text-align: right">Số lượng giải</th>
                     <th style="text-align: right">Giá trị giải (đồng)</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Jackpot</td>
                     <td style="text-align: right"><?php echo ($kqgiaimoinhat->sojackport); ?></td>
                     <td style="text-align: right"><b><?php echo number_format($kqgiaimoinhat->giatrijackport,0,',','.'); ?></b></td>
                  </tr>
                  <tr>
                     <td>Giải nhất</td>
                     <td style="text-align: right"><?php echo ($kqgiaimoinhat->sogiainhat); ?></td>
                     <td style="text-align: right"><b><?php echo number_format($kqgiaimoinhat->giatrigiainhat,0,',','.'); ?></b></td>
                  </tr>
                  <tr>
                     <td>Giải nhì</td>
                     <td style="text-align: right"><?php echo ($kqgiaimoinhat->sogiainhi); ?></td>
                     <td style="text-align: right"><b><?php echo number_format($kqgiaimoinhat->giatrigiainhi,0,',','.'); ?></b></td>
                  </tr>
                  <tr>
                     <td>Giải ba</td>
                     <td style="text-align: right"><?php echo ($kqgiaimoinhat->sogiaiba); ?></td>
                     <td style="text-align: right"><b><?php echo number_format($kqgiaimoinhat->giatrigiaiba,0,',','.'); ?></b></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      
      
       
   </div>
</div>
<?php }
  }          
?>