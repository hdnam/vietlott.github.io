<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-calculator" aria-hidden="true"></i> Thống kê jackpot xổ số mega 6/45</h4>
 </div>
 
  <div class="panel-body" style="margin-top: 20px;">
    <div class="form-search">
           <form method="post" action="<?php echo base_url();?>mega-6-45/thong-ke-jackpot">
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
 
 <div class="panel-body pad-top-10">
    <div class="table-responsive">
       <table class="table table-bordered">
          <thead>
             <th>Ngày</th>
             <th width="50%">Dãy số</th>
             <th>SL</th>
             <th>Giá trị (vnđ)</th>
          </thead>
          <tbody>
           <?php
      if($last40curent->num_rows()>0)
		{
		  foreach($last40curent->result() as $kqlast40curent)
          {
       ?>
    
             <tr>
                <td><a href='<?php echo base_url().'ket-qua-so-xo-vietlott-mega-6-45/'. $kqlast40curent->ngayquay ; ?>'  target="_blank"><?php //echo $kqgiaimoinhat->ngayquay;
                    echo  $this->util->ConvertDateTimeToView($kqlast40curent->ngayquay);
          ?></a></td>
                <td>
                   <ul class="list-record2">
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
                           <li><?php    echo $kqarray_sotrungthuong; ?></li>
                           <?php
                                          
                                }
            				}
            			}
                     ?>   
                   </ul>
                </td>
                <td><?php echo ($kqlast40curent->sojackport); ?></td>
                <td><?php echo number_format($kqlast40curent->giatrijackport,0,',','.'); ?></td>
             </tr>
     <?php }
         }          
        ?>
           </tbody>
       </table>
    </div>
 </div>
</div>