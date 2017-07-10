<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-calculator" aria-hidden="true"></i> Kết quả xổ số tự chọn Max 4D </h4>
 </div>
 <div class="panel-body" style="margin-top: 20px;">
    <div class="form-search">
           <form method="post" action="<?php echo base_url();?>max-4d/so-ket-qua">
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
    <p class="time-result title-mega645 text-center"> 
     <?php //echo $kqlast40curent->ngayquay;
                    echo $this->util->namedayendtovi($kqlast40curent->thuquay)." ".$this->util->ConvertDateTimeToView($kqlast40curent->ngayquay). "- Kỳ quay thưởng #000".$kqlast40curent->kiquay;
          ?>
    </p>
    <div class="table-responsive resultmax4d clearfix">
       <table class="table table-bordered">
          <thead>
             <tr>
                <th>Giải thưởng</th>
                <th style="text-align: center;">Kết quả</th>
                <th style="text-align: right;">Giá trị giải (đồng)</th>
             </tr>
          </thead>
          <tbody>
             <tr>
                <td class="red">Giải Nhất</td>
                <td class="result-max4d red" style="text-align: center;">
                   <b><?php echo $kqlast40curent->giainhat;?></b>
                </td>
                <td style="text-align: right;" class="red"><b><?php echo number_format($kqlast40curent->giatrigiainhat,0,',','.') ;?></b></td>
             </tr>
             <tr>
                <td>Giải Nhì</td>
                <td class="result-max4d" style="text-align: center;">
                   <b><?php echo $kqlast40curent->giainhi1;?></b>
                   <b><?php echo $kqlast40curent->giainhi2;?></b>
                </td>
                <td style="text-align: right;"><b><?php echo number_format($kqlast40curent->giatrigiainhi,0,',','.') ;?></b></td>
             </tr>
             <tr>
                <td>Giải Ba</td>
                <td class="result-max4d" style="text-align: center;">
                   <b><?php echo $kqlast40curent->giaiba1;?></b>
                   <b><?php echo $kqlast40curent->giaiba2;?></b>
                   <b><?php echo $kqlast40curent->giaiba3;?></b>
                </td>
                <td style="text-align: right;"><b><?php echo number_format($kqlast40curent->giatrigiaiba,0,',','.') ;?></b></td>
             </tr>
             <tr>
                <td>Giải KK 1</td>
                <td class="result-max4d" style="text-align: center;">
                   <b><?php echo "x".substr($kqlast40curent->giainhat,1,3);?></b>
                </td>
                <td style="text-align: right;"><b><?php echo number_format($kqlast40curent->giatrigiaikk1,0,',','.') ;?></b></td>
             </tr>
             <tr>
                <td>Giải KK 2</td>
                <td class="result-max4d" style="text-align: center;">
                   <b><?php echo "xx".substr($kqlast40curent->giainhat,2,2);?></b>
                </td>
                <td style="text-align: right;"><b><?php echo number_format($kqlast40curent->giatrigiaikk2,0,',','.') ;?></b></td>
             </tr>
          </tbody>
       </table>
    </div>
     <?php }
       }          
   ?>
     
    
 </div>
</div>