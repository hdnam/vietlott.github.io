<?php

$day=date("Y-m-d");
$thuquay =  strtolower(date("l", strtotime($day)));

	switch ($thuquay) {

        case "sunday":
            $homnay="Mega 6/45";
            $ngaymai="Không có";
            break;
        case "monday":
            $homnay="Không có";
            $ngaymai="Max 4D";
            break;
        case "tuesday":
           $homnay="Max 4D";
           $ngaymai="Mega 6/45";
            break;

        case "wednesday":
           $homnay="Mega 6/45";
           $ngaymai="Max 4D";
            break;
        case "thursday":
            $homnay="Max 4D";
           $ngaymai="Mega 6/45";
            break;
        case "friday":
            $homnay="Mega 6/45";
           $ngaymai="Max 4D";
            break;
        case "saturday":
            $homnay="Max 4D";
            $ngaymai="Mega 6/45";
            break;
        default:
            echo "Unknown";
            break;
        }

?>
<div class="panel panel-default border0">
	<div class="panel-heading">
		<h4><i class="fa fa-random" aria-hidden="true"></i> Lịch mở thưởng Vietlott</h4>
	</div>

	<div class="panel-body pad0">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover mar0">
				<tbody>
					<tr class="red bold">
						<td>Hôm nay</td>
						<td><?php echo $homnay;?></td>
						<td>18h10'</td>
					</tr>
					<tr>
						<td>Ngày mai</td>
						<td><?php echo $ngaymai;?></td>
						<td>18h10'</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>

</div>
<div class="panel panel-default">
 <div class="panel-heading">
    <h4><i class="fa fa-newspaper-o"></i> Tin tức Vietlott mới nhất</h4>
 </div>
 <div class="panel-body">
 <ul class="news-box">
  <?php if(!empty($news)) : ?>
      <?php foreach($news as $new) : ?>
 		<li><a href="<?=site_url($url_view . $new->id .'-'. $this->util->alias($new->title));?>"><?=$new->title;?></a></li>
      <?php endforeach;?>
  <?php endif;?>
 </ul>
 </div>
</div>
<?php
if(!empty($slide)) : ?>
<?php foreach($slide as $resultslide) :
    if($resultslide->ord==1) {
?>
<a href="<?=$resultslide->url;?>" style="display:block;margin-bottom:10px" target="_blank" title="<?=$resultslide->name;?>">
    <img src="<?=$resultslide->img;?>" alt="<?=$resultslide->contents;?>"  class="red-border img-responsive">
</a>
<?php
    }
endforeach;?>
<?php endif;?>
<div>

</div>
<?php if(!empty($slide)) : ?>
<?php foreach($slide as $resultslide) :
    if($resultslide->ord==2) {

?>
<a href="<?=$resultslide->url;?>" style="display:block;margin-bottom:10px" target="_blank" title="<?=$resultslide->name;?>">
    <img src="<?=$resultslide->img;?>" alt="<?=$resultslide->contents;?>"  class="red-border img-responsive">
</a>
<?php  }
endforeach;?>
<?php endif;?>
<div>

</div>
<?php if(!empty($slide)) :

?>
<?php foreach($slide as $resultslide) :
        if($resultslide->ord==3) { ?>
<a href="<?=$resultslide->url;?>" style="display:block;margin-bottom:10px" target="_blank" title="<?=$resultslide->name;?>">
    <img src="<?=$resultslide->img;?>" alt="<?=$resultslide->contents;?>"  class="red-border img-responsive">
</a>
<?php }
endforeach;?>
<?php endif;?>
<div>

</div>