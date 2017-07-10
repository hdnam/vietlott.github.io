<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
      <meta name="keywords" content="kết quả sổ số vietlott,ket qua xo so vietlott, kết quả vietlott, ket qua vietlott, xổ sổ vietlott, xo so vietlott,huong dan cach choi vietlott,ket qua xo so vietlott hom nay,xổ số điện toán vietlott" />
       <meta name="description" content="Trực tiếp kết quả xổ số vietlott nhanh nhất. Thống kê kết quả xổ số vietlott. Cập nhât tin tức, hướng dẫn cách chơi xổ số Vietlott. Địa chỉ mua xổ số Vietlott.">
      <title>Kết quả xổ số vietlott - Thống kê xổ số vietlott - Hướng dẫn chơi vietlott</title>
      <link href="<?php echo base_url();?>asset/images/favicon.png" rel="shortcut icon" >
      <meta name="author" content="vietmega.net"/>
      <meta name="generator" content="vietmega.net"/>
      <meta name="abstract" content="Kết quả xổ số Vietlott mega 6/45 và Max 4D"/>
	  <meta property="fb:app_id" content="1881962585383904" />	
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:url" content="<?php  echo (current_url());?>" />
      <meta property="og:type"  content="website" />
      <meta property="og:title" content="<?php echo $this->site_title;?>" />
      <meta property="og:description" content="<?php echo $this->site_title;?>" />
      <meta property="og:image" content="<?php echo base_url();?>asset/images/fb.png" />
      <meta property="og:site_name" content="<?php echo $this->site_title;?>" /> 
      <meta name="revisit-after" content="1 days">
      <meta name="p:domain_verify" content="77bc863dd782401cae10366154a9bf4b"/>
      <link rel="canonical" href="#" />
      <link rel="shortcut icon" hsef="<?php echo base_url();?>asset/images/logo.png " type="image/x-icon" />
      <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.css">
      <link href="<?php echo base_url();?>asset/css/jquery-ui.min.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css" >
      <link rel="alternate" href="vietmega.net" hreflang="vi-vn" />
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script type="text/javascript">
         var isTimeLiveMega645 = false;
		 var isTimeLiveMax = false;
         var siteUrl = '<?php echo base_url();?>';
      </script>
      <script type="text/javascript" src="<?php echo base_url();?>asset/js/plusone.js"></script>
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	  <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-9091505799515144",
        enable_page_level_ads: true
      });
      </script>
   </head>
   <body>
<?php echo $header;?>
<div id="content">
 <div class="container">
 
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-md-3" id="panel-left">
            <?php echo $left;?>
        </div>
        <div class="col-md-6" id="main">
            <?php echo $content;?>
        </div>
        <div class="col-md-3" id="panel-right">
            <?php echo $right;?>
        </div>
        
        
    </div>
 </div>
</div>
<?php echo $footer;?>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>asset/js/datepicker-vi.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>asset/js/main.js"></script>
      <script type="text/javascript">
         $( function() {
             $( "#mega645detail" ).datepicker({
                 beforeShowDay: showDay,
                 // showOtherMonths: true,
                 selectOtherMonths: true,
                 changeMonth: true,
                 changeYear: true,
                 showButtonPanel: true,
                 maxDate: +0,
                 dateFormat: 'dd-mm-yy',
                 onSelect:  function(date) {
                     document.location=siteUrl+'ket-qua-so-xo-vietlott-mega-6-45/' + date;
                 },
             });
             
             $('.start_date').datepicker({
                 dateFormat: 'dd/mm/yy',
                 selectOtherMonths: true,
                 changeMonth: true,
                 changeYear: true,
                 showButtonPanel: true,
             });
             $('.end_date').datepicker({
                 dateFormat: 'dd/mm/yy',
                 selectOtherMonths: true,
                 changeMonth: true,
                 changeYear: true,
                 showButtonPanel: true,
             });
             $("#max4d").datepicker({
                 beforeShowDay: noSunday,
                 showOn: "button",
                 buttonImage: siteUrl+"asset/css/images/calendar.png",
                 buttonImageOnly: true,
                 changeYear: true, 
                 showButtonPanel: true, 
                 regional: 'vn', 
                 onSelect:  function(date) {
                     split = date.split("/");
                     d = parseInt(split[0]);
                     // var day = split[1] + '/' + d + '/' + split[2];
                     // getSuccessOutput(day);
                     var day = d + '-' + split[1] + '-' + split[2];
                     document.location = siteUrl+'ket-qua-so-xo-vietlott-max-4d/' + day;
                 },
                 dateFormat: 'dd/mm/yy', 
                 maxDate: +0,
                 changeMonth: true
             });
			 
             function noSunday(date){ 
               var day = date.getDay(); 
               return [jQuery.inArray(day+1, [3,5,7]) !== -1,'']
                           //return [(day == 3 || day == 5 || day == 0), '']; 
           }; 
         });
      </script>     
      <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Blog",
    "url": "http://www.ketquaxosovietlott.info"
  }
</script>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Vietmega",
    "url": "http://vietmega.net/",
    "sameAs": [
      "https://www.facebook.com/C%C3%B4ng-ty-x%E1%BB%95-s%E1%BB%91-%C4%91i%E1%BB%87n-to%C3%A1n-vi%E1%BB%87t-nam-vietmeganet-1804114183174605/",
      "https://plus.google.com/110749092253868595622",
      "https://twitter.com/vietmega"
    ]
  }
</script>

   </body>
</html>