<div class="panel panel-default panel-master">
    <?php
    if ($giaidangquay->num_rows() > 0) {

        foreach ($giaidangquay->result() as $kqgiaidangquay) {
            $array_sotrungthuong = explode("-", $kqgiaidangquay->chuoitrunggiai);
            $realtime = $kqgiaidangquay->realtime;
            if ($realtime == 1) {
                ?>
                <script type="text/javascript">
                    var isTimeLiveMega645 = true;
                </script>
        <?php } ?>
            <audio autoplay  src="<?php echo base_url(); ?>asset/circle_lock.ogg" ></audio>
            <div class="panel panel-default panel-live">
                <div class="panel-heading">
                    <h4><i class="fa fa-television" aria-hidden="true"></i> Trực tiếp xổ số Vietlott Mega 6/45</h4>
                </div>
                <div class="panel-body">
                    <h3 class="red text-center">Kết quả xổ số Vietlott Mega 6/45</h3>
                    <p class="time-result title-mega645 red text-center"> 
        <?php
        echo $this->util->namedayendtovi($kqgiaidangquay->thuquay) . " " . $this->util->ConvertDateTimeToView($kqgiaidangquay->ngayquay) . "- Kỳ quay thưởng #000" . $kqgiaidangquay->kiquay;
        ?>
                    </p>

                    <div id="live645">
                        <ul class="result-number">
                            <li class="live645_no1">

        <?php
        if ($array_sotrungthuong[0] != '') {
            echo $array_sotrungthuong[0];
        } else {
            ?>
                                    <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
                                <?php } ?>
                            </li>
                            <li class="live645_no2">
                                <?php
                                if ($array_sotrungthuong[1] != '') {
                                    echo $array_sotrungthuong[1];
                                } else {
                                    ?>
                                    <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
                                <?php } ?>
                            </li>
                            <li class="live645_no3">
                                <?php
                                if ($array_sotrungthuong[2] != '') {
                                    echo $array_sotrungthuong[2];
                                } else {
                                    ?>
                                    <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
                                <?php } ?>
                            </li>
                            <li class="live645_no4">
                                <?php
                                if ($array_sotrungthuong[3] != '') {
                                    echo $array_sotrungthuong[3];
                                } else {
                                    ?>
                                    <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
                                <?php } ?>
                            </li>
                            <li class="live645_no5">
                                <?php
                                if ($array_sotrungthuong[4] != '') {
                                    echo $array_sotrungthuong[4];
                                } else {
                                    ?>
                                    <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
        <?php } ?>
                            </li>
                            <li class="live645_no6">
        <?php
        if ($array_sotrungthuong[5] != '') {
            echo $array_sotrungthuong[5];
        } else {
            ?>
                                    <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
        <?php } ?>
                            </li>
                        </ul>
                    </div>



                    <p  class=" text-center" style="margin-top: 10px;">(Các con số dự thưởng không cần theo đúng thứ tự)</p>
                    <p class="red ali-center" style="font-weight: bold;font-size: 22px"><?php echo number_format($kqgiaidangquay->giatrijackport, 0, ',', '.'); ?> đồng</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="ali-center">Giải thưởng</th>
                                <th class="ali-center">Số lượng giải</th>
                                <th class="ali-center">Giá trị giải (đồng)</th>
                            </tr>
                        </thead>
                        <tbody class="ali-center">
                            <tr>
                                <td>Jackpot</td>
                                <td><?php if ($kqgiaidangquay->sojackport != 0) echo ($kqgiaidangquay->sojackport); ?></td>
                                <td><b><?php echo number_format($kqgiaidangquay->giatrijackport, 0, ',', '.'); ?></b></td>
                            </tr>
                            <tr>
                                <td>Giải nhất</td>
                                <td ><?php if ($kqgiaidangquay->sogiainhat != 0) echo ($kqgiaidangquay->sogiainhat); ?></td>
                                <td><b><?php echo number_format($kqgiaidangquay->giatrigiainhat, 0, ',', '.'); ?></b></td>
                            </tr>
                            <tr>
                                <td>Giải nhì</td>
                                <td ><?php if ($kqgiaidangquay->sogiainhi != 0) echo ($kqgiaidangquay->sogiainhi); ?></td>
                                <td ><b><?php echo number_format($kqgiaidangquay->giatrigiainhi, 0, ',', '.'); ?></b></td>
                            </tr>
                            <tr>
                                <td>Giải ba</td>
                                <td ><?php if ($kqgiaidangquay->sogiaiba != 0) echo ($kqgiaidangquay->sogiaiba); ?></td>
                                <td><b><?php echo number_format($kqgiaidangquay->giatrigiaiba, 0, ',', '.'); ?></b></td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        <?php
        }
    }
    ?>



<?php
if ($giaisoxomax_dangquay->num_rows() > 0) {
    foreach ($giaisoxomax_dangquay->result() as $kqgiaisoxomax_dangquay) {
        $realtime_max = $kqgiaisoxomax_dangquay->realtime;
        if ($realtime_max == 1) {
            ?>

                <script type="text/javascript">
                    var isTimeLiveMax = true;

                </script>
                        <?php } ?>
            <div class="panel panel-default panel-live">
                <div class="panel-heading">
                    <h4><i class="fa fa-television" aria-hidden="true"></i> Trực tiếp kết quả Vietlott Max 4D</h4>
                </div>
                <div class="panel-body">
                    <h3 class="red text-center">Kết quả xổ số Vietlott Max 4D</h3>
                    <p class="time-result title-mega645 red text-center"> 
        <?php
        //echo $kqgiaimoinhat->ngayquay;
        echo $this->util->namedayendtovi($kqgiaisoxomax_dangquay->thuquay) . " " . $this->util->ConvertDateTimeToView($kqgiaisoxomax_dangquay->ngayquay) . "- Kỳ quay thưởng #000" . $kqgiaisoxomax_dangquay->kiquay;
        ?>
                    </p>



                    <div class="table-responsive resultmax4d clearfix">
                        <table class="table table-bordered ali-center">
                            <thead> 
                                <tr>
                                    <th>Giải thưởng</th>
                                    <th class="ali-center">Kết quả</th>
                                    <th class="ali-right">Giá trị giải (đồng)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="red ali-left">Giải nhất</td>
                                    <td class="result-max4d red">
                                        <b class="livemax_nhat"><?php if ($kqgiaisoxomax_dangquay->giainhat != 0) {
            echo $kqgiaisoxomax_dangquay->giainhat;
        } else { ?>
                                                <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
                                            <?php } ?>   </b>
                                    </td>
                                    <td class="red ali-right"><b><?php echo number_format($kqgiaisoxomax_dangquay->giatrigiainhat, 0, ',', '.'); ?></b></td>
                                </tr>
                                <tr>
                                    <td class="ali-left">Giải Nhì</td>
                                    <td class="result-max4d">
                                        <b  class="livemax_nhi1"><?php if ($kqgiaisoxomax_dangquay->giainhi1 != 0) {
                                                echo $kqgiaisoxomax_dangquay->giainhi1;
                                            } else { ?>
                                                <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
        <?php } ?></b>
                                        <b  class="livemax_nhi2"><?php if ($kqgiaisoxomax_dangquay->giainhi2 != 0) {
            echo $kqgiaisoxomax_dangquay->giainhi2;
        } else { ?>
                                                <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
                                            <?php } ?></b>
                                    </td>
                                    <td class="ali-right"><b><?php echo number_format($kqgiaisoxomax_dangquay->giatrigiainhi, 0, ',', '.'); ?></b></td>
                                </tr>
                                <tr>
                                    <td class="ali-left">Giải Ba</td>
                                    <td class="result-max4d">
                                        <b  class="livemax_ba1"><?php if ($kqgiaisoxomax_dangquay->giaiba1 != 0) {
                                        echo $kqgiaisoxomax_dangquay->giaiba1;
                                    } else { ?>
                                                <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
        <?php } ?></b>
                                        <b  class="livemax_ba2"><?php if ($kqgiaisoxomax_dangquay->giaiba2 != 0) {
            echo $kqgiaisoxomax_dangquay->giaiba2;
        } else { ?>
                                                <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
        <?php } ?></b>
                                        <b  class="livemax_ba3"><?php if ($kqgiaisoxomax_dangquay->giaiba3 != 0) {
            echo $kqgiaisoxomax_dangquay->giaiba3;
        } else { ?>
                                                <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
        <?php } ?></b>
                                    </td>
                                    <td class="ali-right"><b><?php echo number_format($kqgiaisoxomax_dangquay->giatrigiaiba, 0, ',', '.'); ?></b></td>
                                </tr>
                                <tr>
                                    <td class="ali-left">Giải KK 1</td>
                                    <td class="result-max4d ali-center">
                                        <b  class="livemax_kk1"><?php if ($kqgiaisoxomax_dangquay->giainhat != 0) {
            echo "x" . substr($kqgiaisoxomax_dangquay->giainhat, 1, 3);
        } else { ?>
                                                <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
            <?php } ?></b>
                                    </td>
                                    <td class="ali-right"><b><?php echo number_format($kqgiaisoxomax_dangquay->giatrigiaikk1, 0, ',', '.'); ?></b></td>
                                </tr>
                                <tr>
                                    <td class="ali-left">Giải KK 2</td>
                                    <td class="result-max4d ali-center">
                                        <b  class="livemax_kk2"><?php if ($kqgiaisoxomax_dangquay->giainhat != 0) {
            echo "xx" . substr($kqgiaisoxomax_dangquay->giainhat, 2, 2);
        } else { ?>
                                                <img src='<?php echo base_url(); ?>asset/images/loading.gif' width='30'> 
        <?php } ?></b>
                                    </td>
                                    <td class="ali-right"><b><?php echo number_format($kqgiaisoxomax_dangquay->giatrigiaikk2, 0, ',', '.'); ?></b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

    <?php
    }
}
?>


    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#/#t_mega645"><b>Mega 6/45</b></a></li>
            <li><a data-toggle="tab" href="#/#t_max4d"><b>Max 4D</b></a></li>
        </ul>
        <div class="tab-content">
            <div id="t_mega645" class="tab-pane fade in active">
                <div class="form-group box-search">
                    <input type="hidden" name="round" value="74">
                    <label>Chọn ngày quay thưởng</label>
                    <input type="text" name="date" id="mega645" value="<?php echo date("d/m/Y"); ?>" class="input-date" readonly>

                </div>
                            <?php
                            if ($giaimoinhat->num_rows() > 0) {
                                foreach ($giaimoinhat->result() as $kqgiaimoinhat) {
                                    ?>
                        <div id="output">
                            <div class="box-result-detail">
                                <h3 class="red text-center">Kết quả xổ số Vietlott Mega 6/45</h3>
                                <p class="time-result title-mega645"> 
        <?php
        //echo $kqgiaimoinhat->ngayquay;
        echo $this->util->namedayendtovi($kqgiaimoinhat->thuquay) . " " . $this->util->ConvertDateTimeToView($kqgiaimoinhat->ngayquay) . "- Kỳ quay thưởng #000" . $kqgiaimoinhat->kiquay;
        ?>
                                </p>
                                <ul class="result-number">
        <?php
        $array_sotrungthuong = explode("-", $kqgiaimoinhat->chuoitrunggiai);
        if (is_array($array_sotrungthuong)) {
            foreach ($array_sotrungthuong as $kqarray_sotrungthuong) {
                if ($kqarray_sotrungthuong != "") {
                    $stt++;
                    $kqarray_sotrungthuong = intval(trim($kqarray_sotrungthuong));
                    if ($kqarray_sotrungthuong < 10)
                        $kqarray_sotrungthuong = "0" . $kqarray_sotrungthuong;
                    ?>
                                                <li><?php echo $kqarray_sotrungthuong; ?></li>
                    <?php
                }
            }
        }
        ?>


                                </ul>
                                <p style="margin-top: 10px;">(Các con số dự thưởng không cần theo đúng thứ tự)</p>
                                <p class="red ali-center" style="font-weight: bold;font-size: 22px"><?php echo number_format($kqgiaimoinhat->giatrijackport, 0, ',', '.'); ?> đồng</p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="ali-center">Giải thưởng</th>
                                            <th class="ali-center">Số lượng giải</th>
                                            <th class="ali-center">Giá trị giải (đồng)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="ali-center">
                                        <tr>
                                            <td>Jackpot</td>
                                            <td><?php echo ($kqgiaimoinhat->sojackport); ?></td>
                                            <td><b><?php echo number_format($kqgiaimoinhat->giatrijackport, 0, ',', '.'); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td>Giải nhất</td>
                                            <td ><?php echo ($kqgiaimoinhat->sogiainhat); ?></td>
                                            <td><b><?php echo number_format($kqgiaimoinhat->giatrigiainhat, 0, ',', '.'); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td>Giải nhì</td>
                                            <td ><?php echo ($kqgiaimoinhat->sogiainhi); ?></td>
                                            <td ><b><?php echo number_format($kqgiaimoinhat->giatrigiainhi, 0, ',', '.'); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td>Giải ba</td>
                                            <td ><?php echo ($kqgiaimoinhat->sogiaiba); ?></td>
                                            <td><b><?php echo number_format($kqgiaimoinhat->giatrigiaiba, 0, ',', '.'); ?></b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    <?php
    }
}
?>
            </div>

<?php
if ($giaimoinhatsoxomax->num_rows() > 0) {
    foreach ($giaimoinhatsoxomax->result() as $kqgiaimoinhatsoxomax) {
        $ngayquay = $this->util->ConvertDateTimeToView($kqgiaimoinhatsoxomax->ngayquay);
        ?>
                    <div id="t_max4d" class="tab-pane fade">
                        <div class="form-group box-search">
                            <input type="hidden" name="round" value="20">
                            <label>Chọn ngày quay thưởng</label>
                            <input type="text" name="date" id="max4d" value="<?php echo $ngayquay; ?>" class="input-date" readonly>
                        </div>
                        <h3 class="red text-center">Kết quả xổ số Vietlott Max 4D</h3>
                        <p class="time-result title-mega645 text-center"> <?php
        //echo $kqgiaimoinhat->ngayquay;
        echo $this->util->namedayendtovi($kqgiaimoinhatsoxomax->thuquay) . " " . $this->util->ConvertDateTimeToView($kqgiaimoinhatsoxomax->ngayquay) . "- Kỳ quay thưởng #000" . $kqgiaimoinhatsoxomax->kiquay;
        ?>
                        </p></p>
                        <div class="table-responsive resultmax4d clearfix">
                            <table class="table table-bordered ali-center">
                                <thead> 
                                    <tr>
                                        <th>Giải thưởng</th>
                                        <th class="ali-center">Kết quả</th>
                                        <th class="ali-right">Giá trị giải (đồng)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="red ali-left">Giải nhất</td>
                                        <td class="result-max4d red">
                                            <b><?php echo $kqgiaimoinhatsoxomax->giainhat; ?></b>
                                        </td>
                                        <td class="red ali-right"><b><?php echo number_format($kqgiaimoinhatsoxomax->giatrigiainhat, 0, ',', '.'); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="ali-left">Giải Nhì</td>
                                        <td class="result-max4d">
                                            <b><?php echo $kqgiaimoinhatsoxomax->giainhi1; ?></b>
                                            <b><?php echo $kqgiaimoinhatsoxomax->giainhi2; ?></b>
                                        </td>
                                        <td class="ali-right"><b><?php echo number_format($kqgiaimoinhatsoxomax->giatrigiainhi, 0, ',', '.'); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="ali-left">Giải Ba</td>
                                        <td class="result-max4d">
                                            <b><?php echo $kqgiaimoinhatsoxomax->giaiba1; ?></b>
                                            <b><?php echo $kqgiaimoinhatsoxomax->giaiba2; ?></b>
                                            <b><?php echo $kqgiaimoinhatsoxomax->giaiba3; ?></b>
                                        </td>
                                        <td class="ali-right"><b><?php echo number_format($kqgiaimoinhatsoxomax->giatrigiaiba, 0, ',', '.'); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="ali-left">Giải KK 1</td>
                                        <td class="result-max4d ali-center">
                                            <b><?php echo "x" . substr($kqgiaimoinhatsoxomax->giainhat, 1, 3); ?></b>
                                        </td>
                                        <td class="ali-right"><b><?php echo number_format($kqgiaimoinhatsoxomax->giatrigiaikk1, 0, ',', '.'); ?></b></td>
                                    </tr>
                                    <tr>
                                        <td class="ali-left">Giải KK 2</td>
                                        <td class="result-max4d ali-center">
                                            <b><?php echo "xx" . substr($kqgiaimoinhatsoxomax->giainhat, 2, 2); ?></b>
                                        </td>
                                        <td class="ali-right"><b><?php echo number_format($kqgiaimoinhatsoxomax->giatrigiaikk2, 0, ',', '.'); ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                    }
                }
                ?>

        </div>
    </div>
</div>

<?php if(!empty($slide)) : ?>
<?php foreach($slide as $resultslide) : ?>
<a href="<?=$resultslide->url;?>" style="display:block;margin-bottom:10px" target="_blank" title="<?=$resultslide->name;?>">
    <img src="<?=$resultslide->img;?>" alt="<?=$resultslide->contents;?>"  class="red-border img-responsive">
</a> 
<?php endforeach;?>
<?php endif;?>
<div class="fbshare">
    <div class="fb-like" data-href="https://www.facebook.com/C%C3%B4ng-ty-x%E1%BB%95-s%E1%BB%91-%C4%91i%E1%BB%87n-to%C3%A1n-vi%E1%BB%87t-nam-vietmeganet-1804114183174605/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
    <div class="fb-share-button" data-href="http://vietmega.net/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fvietmega.net%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
    <div class="g-plus" data-action="share" data-annotation="bubble"></div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4><i class="fa fa-bar-chart"></i> Thống kê nhanh Vietlott Mega 6/45</h4>
    </div>
    <div class="panel-body">
        <div class="tk">
            <h3><i class="fa fa-line-chart" aria-hidden="true"></i> 5 kỳ quay gần đây</h3>
            <div class="main-tk">
                    <?php
                    if ($last5curent->num_rows() > 0) {
                        foreach ($last5curent->result() as $kqlast5curent) {
                            ?>
                        <ul class="list-record">

                            <li><?php echo $this->util->ConvertDateTimeToView($kqlast5curent->ngayquay); ?>: </li>
                        <?php
                        $array_sotrungthuong = explode("-", $kqlast5curent->chuoitrunggiai);
                        if (is_array($array_sotrungthuong)) {
                            foreach ($array_sotrungthuong as $kqarray_sotrungthuong) {
                                if ($kqarray_sotrungthuong != "") {
                                    $stt++;
                                    $kqarray_sotrungthuong = intval(trim($kqarray_sotrungthuong));
                                    if ($kqarray_sotrungthuong < 10)
                                        $kqarray_sotrungthuong = "0" . $kqarray_sotrungthuong;
                                    ?>
                                        <li class="red"><?php echo $kqarray_sotrungthuong; ?></li>
                                        <?php
                                    }
                                }
                            }
                            ?>


                        </ul>
                            <?php
                        }
                    }
                    ?>

            </div>
        </div>
        <div class="tk">
            <h3><i class="fa fa-line-chart" aria-hidden="true"></i> 12 bộ số suất hiện nhiều nhất trong 20 kỳ qua</h3>
            <div class="main-tk">
                <ul class="count-record">
                    <?php
                    if ($top12in20->num_rows() > 0) {
                        foreach ($top12in20->result() as $kqtop12in20) {
                            ?>
                            <li><strong><?php echo $kqtop12in20->so_trung; ?></strong> <span><?php echo $kqtop12in20->solan; ?> lần</span></li>
                            <?php
                        }
                    }
                    ?>   
                </ul>
            </div>
        </div>
        <div class="tk">
            <h3><i class="fa fa-line-chart" aria-hidden="true"></i> 12 bộ số xuất hiện ít nhất trong 20 kỳ qua</h3>
            <div class="main-tk">
                <ul class="count-record">
<?php
if ($best12in20->num_rows() > 0) {
    foreach ($best12in20->result() as $kqbest12in20) {
        ?>
                            <li><strong><?php echo $kqbest12in20->so_trung; ?></strong> <span><?php echo $kqbest12in20->solan; ?> lần</span></li>
        <?php
    }
}
?>   
                </ul>
            </div>
        </div>


    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4><i class="fa fa-commenting-o" aria-hidden="true"></i> Bình luận</h4>
    </div>
    <div class="panel-body">
        <div class="fb-comments" data-href="http://vietmega.net" data-width="100%" data-order-by="reverse_time" data-numposts="5"></div>
    </div>


</div>
