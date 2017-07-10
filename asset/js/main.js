function str_pad(number) {
    if (number < 10) {
        return '0' + number;
    } 
    return number;
}

function showDay(date){ 
    var day = date.getDay(); 
    return [jQuery.inArray(day+1, [4,6,1]) !== -1,'']
}; 
        
function getSuccessOutput(day) {
     
}

$( function() {
    // $.datepicker.setDefaults( $.datepicker.regional[ "vi" ] );
    $("#mega645").datepicker({
    	beforeShowDay: showDay,
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
            //var day ='3224234234';
            var day = d + '-' + split[1] + '-' + split[2];
           // var day = split[2] + '-' + split[1] + '-' + d;
            document.location =siteUrl+'ket-qua-so-xo-vietlott-mega-6-45/' + day;
    	},
    	dateFormat: 'dd/mm/yy', 
        maxDate: +0,
        changeMonth: true,
        // selectOtherMonths: true,
    });



    if (isTimeLiveMega645) 
    {
        setInterval(function() {
            $.get(siteUrl+'home/get_mega_realtime', function (data) {
               
                var duce = jQuery.parseJSON(data);
                
                 
                 if (!$.isEmptyObject( duce )) 
                 {
             
                    if (duce.so1 != null) {
                     
                        $data_truoc=$('.live645_no1' ).html().trim();
                        $('.live645_no1' ).html(duce.so1 );
                        if(parseInt($('.live645_no1' ).html().trim())!=parseInt($data_truoc))
                        {
                            $('.live645_no1' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                        }
                       
                    }
                    else
                    {
                         
                         $('.live645_no1').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                    }
                    
                    
                    if (duce.so2 != null) {
                       $data_truoc=$('.live645_no2' ).html().trim();
                        $('.live645_no2' ).html(duce.so2 );
                        if(parseInt($('.live645_no2' ).html().trim())!=parseInt($data_truoc))
                        {
                            $('.live645_no2' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                        }
                    }
                     else
                    {
                        $('.live645_no2').html("<img src='"+siteUrl+"asset/images/loading.gif' width='30'>");
                    }
                    
                    
                    if (duce.so3 != null) {
                        $data_truoc=$('.live645_no3' ).html().trim();
                        $('.live645_no3' ).html(duce.so3 );
                        if(parseInt($('.live645_no3' ).html().trim())!=parseInt($data_truoc))
                        {
                            $('.live645_no3' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                        }
                    }
                     else
                    {
                        $('.live645_no3').html("<img src='"+siteUrl+"asset/images/loading.gif' width='30'>");
                    }
                    
                    
                    if (duce.so4 != null) {
                        $data_truoc=$('.live645_no4' ).html().trim();
                        $('.live645_no4' ).html(duce.so4 );
                        if(parseInt($('.live645_no4' ).html().trim())!=parseInt($data_truoc))
                        {
                            $('.live645_no4' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                        }
                    }
                     else
                    {
                        $('.live645_no4').html("<img src='"+siteUrl+"asset/images/loading.gif' width='30'>");
                    }
                    
                    
                    if (duce.so5 != null) {
                        $data_truoc=$('.live645_no5' ).html().trim();
                        $('.live645_no5' ).html(duce.so5 );
                        if(parseInt($('.live645_no5' ).html().trim())!=parseInt($data_truoc))
                        {
                            $('.live645_no5' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                        }
                    }
                     else
                    {
                        $('.live645_no5').html("<img src='"+siteUrl+"asset/images/loading.gif' width='30'>");
                    }
                    
                    
                    if (duce.so6 != null) {
                        $data_truoc=$('.live645_no6' ).html().trim();
                        $('.live645_no6' ).html(duce.so6 );
                        if(parseInt($('.live645_no6' ).html().trim())!=parseInt($data_truoc))
                        {
                            $('.live645_no6' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                            $('.live645_no6' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Sprout.ogg' ></audio>" );
                        }
                        
                    }
                     else
                    {
                        $('.live645_no6').html("<img src='"+siteUrl+"asset/images/loading.gif' width='30'>");
                    }
                }
                
            });
        }, 3000);
    }
    
    
    if (isTimeLiveMax) 
    {
        setInterval(function() {
            $.get(siteUrl+'home/get_max_realtime', function (data) {
               
                var soxomax = jQuery.parseJSON(data);
                console.log(soxomax);
                 //livemax_nhat
                 if (!$.isEmptyObject( soxomax )) 
                 {
                    
                    
                    
             
                    if (soxomax.giainhat != null) {
                     
                        $data_truoc=$('.livemax_nhat' ).html().trim();
                        $('.livemax_nhat' ).html(soxomax.giainhat );
                        $('.livemax_kk1' ).html('x'+soxomax.giainhat.substr(1, 3));
                        $('.livemax_kk2' ).html('xx'+soxomax.giainhat.substr(2, 2) );
                        if(parseInt($('.livemax_nhat' ).html().trim())!=parseInt($data_truoc))
                        {
                            $('.livemax_nhat' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                        }
                        
                        
                       
                    }
                    else
                    {
                         
                         $('.livemax_nhat').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                          $('.livemax_kk1').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                           $('.livemax_kk2').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                    }
                    
                     if (soxomax.giainhi1 != null) {
                     
                    	$data_truoc=$('.livemax_nhi1' ).html().trim();
                    	$('.livemax_nhi1' ).html(soxomax.giainhi1 );
                    	if(parseInt($('.livemax_nhi1' ).html().trim())!=parseInt($data_truoc))
                    	{
                    		$('.livemax_nhi1' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                    	}
                       
                    }
                    else
                    {
                    	 
                    	 $('.livemax_nhi1').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                    }
                        
                     if (soxomax.giainhi2 != null) {
                     
                    	$data_truoc=$('.livemax_nhi2' ).html().trim();
                    	$('.livemax_nhi2' ).html(soxomax.giainhi2 );
                    	if(parseInt($('.livemax_nhi2' ).html().trim())!=parseInt($data_truoc))
                    	{
                    		$('.livemax_nhi2' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                    	}
                       
                    }
                    else
                    {
                    	 
                    	 $('.livemax_nhi2').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                    }
                    if (soxomax.giaiba1 != null) {
                     
                    	$data_truoc=$('.livemax_ba1' ).html().trim();
                    	$('.livemax_ba1' ).html(soxomax.giaiba1 );
                    	if(parseInt($('.livemax_ba1' ).html().trim())!=parseInt($data_truoc))
                    	{
                    		$('.livemax_ba1' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                    	}
                       
                    }
                    else
                    {
                    	 
                    	 $('.livemax_ba1').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                    }
                                                               
                     if (soxomax.giaiba2 != null) {
                     
                    	$data_truoc=$('.livemax_ba2' ).html().trim();
                    	$('.livemax_ba2' ).html(soxomax.giaiba2 );
                    	if(parseInt($('.livemax_ba2' ).html().trim())!=parseInt($data_truoc))
                    	{
                    		$('.livemax_ba2' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                    	}
                       
                    }
                    else
                    {
                    	 
                    	 $('.livemax_ba2').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                    }
                    
                    
                    if (soxomax.giaiba3 != null) {
                     
                    	$data_truoc=$('.livemax_ba3' ).html().trim();
                    	$('.livemax_ba3' ).html(soxomax.giaiba3 );
                    	if(parseInt($('.livemax_ba3' ).html().trim())!=parseInt($data_truoc))
                    	{
                    		$('.livemax_ba3' ).append( "<audio autoplay='true'  src='"+siteUrl+"asset/Twinkle.ogg' ></audio>" );
                    	}
                       
                    }
                    else
                    {
                    	 
                    	 $('.livemax_ba3').html('<img src="'+siteUrl+'asset/images/loading.gif" width="30">');
                    }
                                        
                    
                    
                    
                                           
                        
                        
                        
                        
                           
               
               
               
               
               
               
               
               
               
                }
                
                
                
            });
        }, 3000);
    }
    
    
    
    
});
<!-- For Facebook Comment on Site-->

 
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1881962585383904',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/vi_VN/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
 

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90475126-1', 'auto');
  ga('send', 'pageview');


