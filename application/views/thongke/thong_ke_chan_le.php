<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-calculator" aria-hidden="true"></i> Thống kê chẵn lẻ </h4>
 </div>
 <div class="panel-body pad-top-10">
    <div class="form-search">
       <form method="post" action="<?php echo base_url();?>mega-6-45/thong-ke-chan-le">
          <div class="form-group col-sm-4 col-xs-6">
             <input type="text" class="start_date form-control" name="start_date" value="<?php  echo $start_date;  ?>" readonly>
          </div>
          <div class="form-group col-sm-4 col-xs-6">
             <input type="text" class="end_date form-control" name="end_date" value="<?php echo $end_date; ?>" readonly>
          </div>
          <div class="form-group col-sm-4 col-xs-12">
             <button type="submit" class="btn btn-success">Thống kê</button>
          </div>
       </form>
    </div>
    <div class="result clearfix">
       <table class="table table-head">
          <thead>
             <th>Ngày quay </th>
             <th>Chẵn</th>
             <th>Lẻ</th>
             
          </thead>
          <tbody>
            <?php
      
          if($thongkedauso->num_rows()>0)
    		{
    		  foreach($thongkedauso->result() as $kqthongkedauso)
              {
                $tong=$kqthongkedauso->chan+$kqthongkedauso->le;
           ?>
             <tr class="border-color">
             
                <td><a href='<?php echo base_url().'ket-qua-so-xo-vietlott-mega-6-45/'. $kqthongkedauso->ngayquay ; ?>'  target="_blank"><?php echo $this->util->ConvertDateTimeToView($kqthongkedauso->ngayquay); ?></a></td>
                <td class="bg-white">
                <?php   echo $kqthongkedauso->chan."/".$tong;   ?>
                </td>
                <td class="bg-white">
                    <?php   echo $kqthongkedauso->le."/".$tong;   ?>
                </td>
                 
             </tr>
            <?php
                }
            }
            ?> 
          </tbody>
       </table>
    </div>
 </div>
</div>