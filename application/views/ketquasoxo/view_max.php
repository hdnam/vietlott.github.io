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
   <div class="panel-body"  style="padding-top: 20px;">
      <div class="form-group box-search">
         <input type="hidden" name="round" value="23">
         <label>Chọn ngày quay thưởng</label>
         <input type="text" name="date" id="max4d" value="<?php echo $ngayquay;?>" class="input-date" readonly>
      </div>
      <h3 class="red text-center">Kết quả xổ số Max 4D</h3>
      <p class="time-result title-mega645 text-center">
      
      <?php //echo $kqgiaimoinhat->ngayquay;
                    echo $this->util->namedayendtovi($kqgiaimoinhat->thuquay)." ".$this->util->ConvertDateTimeToView($kqgiaimoinhat->ngayquay). "- Kỳ quay thưởng #000".$kqgiaimoinhat->kiquay;
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
                     <b><?php echo $kqgiaimoinhat->giainhat;?></b>
                  </td>
                  <td style="text-align: right;" class="red"><b><?php echo number_format($kqgiaimoinhat->giatrigiainhat,0,',','.') ;?></b></td>
               </tr>
               <tr>
                  <td>Giải Nhì</td>
                  <td class="result-max4d" style="text-align: center;">
                     <b><?php echo $kqgiaimoinhat->giainhi1;?></b>
                     <b><?php echo $kqgiaimoinhat->giainhi2;?></b>
                  </td>
                  <td style="text-align: right;"><b><?php echo number_format($kqgiaimoinhat->giatrigiainhi,0,',','.') ;?></b></td>
               </tr>
               <tr>
                  <td>Giải Ba</td>
                  <td class="result-max4d" style="text-align: center;">
                     <b><?php echo $kqgiaimoinhat->giaiba1;?></b>
                     <b><?php echo $kqgiaimoinhat->giaiba2;?></b>
                     <b><?php echo $kqgiaimoinhat->giaiba3;?></b>
                  </td>
                  <td style="text-align: right;"><b><?php echo number_format($kqgiaimoinhat->giatrigiaiba,0,',','.') ;?></b></td>
               </tr>
               <tr>
                  <td>Giải KK 1</td>
                  <td class="result-max4d" style="text-align: center;">
                     <b><?php echo "x".substr($kqgiaimoinhat->giainhat,1,3);?></b>
                  </td>
                  <td style="text-align: right;"><b><?php echo number_format($kqgiaimoinhat->giatrigiaikk1,0,',','.') ;?></b></td>
               </tr>
               <tr>
                  <td>Giải KK 2</td>
                  <td class="result-max4d" style="text-align: center;">
                     <b><?php echo "xx".substr($kqgiaimoinhat->giainhat,2,2);?></b>
                  </td>
                  <td style="text-align: right;"><b><?php echo number_format($kqgiaimoinhat->giatrigiaikk2,0,',','.') ;?></b></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
<?php }
  }          
?>