<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-calculator" aria-hidden="true"></i> Thống kê chi tiết số</h4>
 </div>
 <div class="panel-body">
    <h4>Nhập số hoặc dãy số từ 01 - 45 VD: 01,23,31...</h4>
    <div class="row">
       <div class="form-search col-lg-12">
          <form method="post" action="<?php echo base_url();?>mega-6-45/thong-ke-chi-tiet">
          <div class="form-group col-sm-4 col-xs-6">
             <input type="text" class="start_date form-control" name="start_date" value="<?php  echo $start_date;  ?>" readonly>
          </div>
          <div class="form-group col-sm-4 col-xs-6">
             <input type="text" class="end_date form-control" name="end_date" value="<?php echo $end_date; ?>" readonly>
          </div>
             <div class="form-group col-xs-6">
                <input type="text" class="form-control" name="number"  placeholder="VD: 01,02,03,04,05,06" value="<?php echo $number;?>">
                <b style="color: red"><?=form_error('number');?></b>
             </div>
             <div class="form-group col-xs-6">
                <button type="submit" style="width: 100%;" class="btn btn-success">Thống kê</button>
             </div>
          </form>
       </div>
    </div>
    <div class="col-lg-12">
       <div class="">
       <?php
          
          foreach($thongkechitiet as $key => $values)
          {
            ?>
          <table class="table table-bordered">
          
             <tr>
                <td colspan="2"><span class="red">Số <?php echo $values['number_thongke']; ?></span></td>
             </tr>
             <tr>
                <td>Số lần về Jackpot</td>
                <td><span class="red"><?php echo $values['solanve']; ?></span></td>
             </tr>
             <tr>
                <td>Số ngày chưa về</td>
                <td><span class="red"><?php echo   $values['songaychuave'] ; ?></span></td>
             </tr>
             <tr>
                <td>Ngày về cuối cùng</td>
                <td><span class="red"><a href='<?php echo base_url().'ket-qua-so-xo-vietlott-mega-6-45/'. date("Y-m-d", $values['ngaymax']) ; ?>'  target="_blank"><?php echo date("d/m/Y", $values['ngaymax']); ?></a></span></td>
             </tr>
             <tr>
                <td>Ngày về đầu tiên</td>
                <td><span class="red"><a href='<?php echo base_url().'ket-qua-so-xo-vietlott-mega-6-45/'. date("Y-m-d", $values['ngaymin']) ; ?>'  target="_blank"><?php echo date("d/m/Y", $values['ngaymin']); ?></a></span></td>
             </tr>
             <!--<tr>
                <td>Số lần về jackpot</td>
                <td><span class="red">0</span></td>
             </tr> -->
          </table>
          <?php
          
          }
          ?>
       </div>
    </div>
 </div>
</div>