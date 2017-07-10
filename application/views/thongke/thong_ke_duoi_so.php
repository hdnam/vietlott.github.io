<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-calculator" aria-hidden="true"></i> Thống kê đuôi số </h4>
 </div>
 <div class="panel-body pad-top-10">
    <div class="form-search">
       <form method="post" action="<?php echo base_url();?>mega-6-45/thong-ke-duoi-so">
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
             <th>Ngày quay\Đuôi</th>
             <th>0</th>
             <th>1</th>
             <th>2</th>
             <th>3</th>
             <th>4</th>
             <th>5</th>
             <th>6</th>
             <th>7</th>
             <th>8</th>
             <th>9</th>
          </thead>
          <tbody>
            <?php
      
          if($thongkedauso->num_rows()>0)
    		{
    		  foreach($thongkedauso->result() as $kqthongkedauso)
              {
           ?>
             <tr class="border-color">
             
                <td><a href='<?php echo base_url().'ket-qua-so-xo-vietlott-mega-6-45/'. $kqthongkedauso->ngayquay ; ?>'  target="_blank"><?php echo $this->util->ConvertDateTimeToView($kqthongkedauso->ngayquay); ?></a></td>
                <td class="<?php if($kqthongkedauso->duoi0==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                <?php if($kqthongkedauso->duoi0!=0) echo $kqthongkedauso->duoi0;   ?>
                </td>
                <td class="<?php if($kqthongkedauso->duoi1==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                <?php if($kqthongkedauso->duoi1!=0) echo $kqthongkedauso->duoi1;   ?>
                </td>
                <td class="<?php if($kqthongkedauso->duoi2==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                   <?php if($kqthongkedauso->duoi2!=0) echo $kqthongkedauso->duoi2;   ?>
                </td>
                <td class="<?php if($kqthongkedauso->duoi3==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                   <?php if($kqthongkedauso->duoi3!=0) echo $kqthongkedauso->duoi3;   ?>
                </td>
                <td class="<?php if($kqthongkedauso->duoi4==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                   <?php if($kqthongkedauso->duoi4!=0) echo $kqthongkedauso->duoi4;   ?>
                </td>
                 <td class="<?php if($kqthongkedauso->duoi5==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                   <?php if($kqthongkedauso->duoi5!=0) echo $kqthongkedauso->duoi5;   ?>
                </td>
                 <td class="<?php if($kqthongkedauso->duoi6==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                   <?php if($kqthongkedauso->duoi6!=0) echo $kqthongkedauso->duoi6;   ?>
                </td>
                 <td class="<?php if($kqthongkedauso->duoi7==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                   <?php if($kqthongkedauso->duoi7!=0) echo $kqthongkedauso->duoi7;   ?>
                </td>
                 <td class="<?php if($kqthongkedauso->duoi8==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                   <?php if($kqthongkedauso->duoi8!=0) echo $kqthongkedauso->duoi8;   ?>
                </td>
                 <td class="<?php if($kqthongkedauso->duoi9==0) echo 'bg-black'; else echo 'bg-white'; ?>">
                   <?php if($kqthongkedauso->duoi9!=0) echo $kqthongkedauso->duoi9;   ?>
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