<div class="panel panel-default">
     <div class="panel-heading">
        <h4><i class="fa fa-calculator" aria-hidden="true"></i> Thống kê tần suất </h4>
     </div>
     <div class="panel-body pad-top-10">
        <div class="form-search">
           <form method="post" action="<?php echo base_url();?>mega-6-45/thong-ke-tan-suat">
              <div class="form-group col-sm-3 col-xs-6">
                 <input type="text" class="start_date form-control" name="start_date" value="<?php  echo $start_date;  ?>" readonly>
              </div>
              <div class="form-group col-sm-3 col-xs-6">
                 <input type="text" class="end_date form-control" name="end_date" value="<?php echo $end_date; ?>" readonly>
              </div>
              <div class="form-group col-sm-3 col-xs-6">
                 <select name="type" class="form-control">
                    <option value="1">Sắp xếp theo tần suất</option>
                    <option value="2">Sắp xếp theo thứ tự</option>
                 </select>
              </div>
              <div class="form-group col-sm-3 col-xs-6">
                 <button type="submit" class="btn btn-success" style="width: 100%;">Thống kê</button>
              </div>
           </form>
        </div>
        <div class="main-tk">
           <ul class="count-record">
           <?php
			$mangsove=array();
          if($thongketansuat->num_rows()>=0)
    		{
    		  foreach($thongketansuat->result() as $kqthongketansuat)
              {
				  $mangsove[]=$kqthongketansuat->so_trung;
           ?>
              <li><strong><?php   echo $kqthongketansuat->so_trung; ?></strong> <span><?php echo $kqthongketansuat->solan; ?> lần</span></li>
             <?php
                }
            }
			// echo "<pre>";
			// print_r($mangsove);
			// echo "</pre>";
			$mangmege=array("01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45");
			for($i=0;$i<count($mangmege);$i++)
			{
			 //echo $mangmege[$i];
			 if (!in_array($mangmege[$i], $mangsove)) 
				{
			?>
					<li><strong><?php   echo $mangmege[$i]; ?></strong> <span>0 lần</span></li>
			<?php	
				}
			}
            ?>   
			
			
           </ul>
        </div>
     </div>
  </div>