<?php get_header(); ?>
<!-- ryochiba: aws-->
<!-- Color hover for brinkers<script type="text/javascript" src="/wp-content/themes/starkers/color.js"></script>-->
<script type="text/javascript" src="http://www.dailybrink.com/jquery.jgfeed.js"></script>
<script type="text/javascript" src="http://www.dailybrink.com/jquery.query.js"></script>
<script type="text/javascript">
			// GARY - increase this number every week
			var weekNumber=53;
		
            function getURLParameter(name) {
                return decodeURIComponent(
                    (location.search.match(RegExp("[?|&]"+name+'=(.+?)(&|$)'))||[,null])[1]
                );  
            }
        
			$(document).ready(function(){
			
				// check if week number is set in url
                var urlWeekNumber = getURLParameter('week');
                if(urlWeekNumber && urlWeekNumber <= weekNumber && urlWeekNumber > 0){ 
                    weekNumber = urlWeekNumber;
                }
                
                // select the overlay element - and "make it an overlay"
                $("#facebox").overlay({

                    // custom top position
                    top: 260,

                    // some mask tweaks suitable for facebox-looking dialogs
                    mask: {

                        // you might also consider a "transparent" color for the mask
                        color: '#fff',

                        // load mask a little faster
                        loadSpeed: 200,

                        // very transparent
                        opacity: 0.5
                    },

                    // disable this for modal dialog-type of overlays
                    closeOnClick: true,

                    // load it immediately after the construction
                    load: true

                });

                // initialize scrollable
                $(".scrollable").scrollable({ 
                    circular: true
                    
                });



                 // get handle to scrollable api 
                window.api = $("div.scrollable").scrollable(); 

                // remove last item by using jQuery's remove() method 
                window.api.seekTo(weekNumber-1,500);

                // disable keyboard navigation
                window.api.getConf().keyboard = false;
                
                
				// Initialize weekbar
				
				var div = $('#weekbarDisplay');
				displayWeek();
				
				
				
				
				
				// This is for the left sidebar (infopanel)
				
				$('#lsidebarholder').toggle(function() {
					$('#lsidebar').fadeOut(500);
				}, function() {
					$('#lsidebar').fadeIn(500);
				});
				
				
				// This is for the right sidebar (newsletter signup)
				
				$('#rsidebar1').click(function(event) {
				var $tgt = $(event.target);
					 if ($tgt.is('img.rsidebar1')) {
					 
					$('#rsidebar1').hide().html('<span class="rsidebar1" style="display:none"><img class="rsidebar2" src="/wp-content/themes/starkers/images/frontpage/newsletter.png"><br><form method="post" action="http://scripts.dreamhost.com/add_list.cgi"> <div style="background-image:url(/wp-content/themes/starkers/images/frontpage/newsletter2.png); background-repeat:no-repeat; height:179px"><div style="margin-left:30px; font-family: century gothic,Trebuchet MS; font-size:13px; line-height:110%;"><input type="hidden" name="list" value="friends@dailybrink.com" /> <input type="hidden" name="domain" value="www.dailybrink.com" /> <input type="hidden" name="url" value="http://SubscribedURL" /> <input type="hidden" name="unsuburl" value="http://UnsubscribedURL" /> <input type="hidden" name="alreadyonurl" value="http://AlreadyOnURL" /> <input type="hidden" name="notonurl" value="http://NotOnURL" /> <input type="hidden" name="invalidurl" value="http://InvalidURL" /> <input type="hidden" name="emailconfirmurl" value="http://EmailConfirmURL" /> <input type="hidden" name="emailit" value="1" /> Name: <br /><input class="newsletterform" name="name" /><br /><br /> E-mail: <br /><input  class="newsletterform" name="email" /><br /> <br /><input type="submit" name="submit" value="Join" style="background-color:#B3D670; width:60px;"/> <input type="submit" name="unsub" value="Unsubscribe" style="background-color:#EF7BE0; width:90px;" /> </form></div></div></span>').fadeIn('slow');
					$("span.rsidebar1").fadeIn('slow');
					}
				});
				
				$('#rsidebar1').click(function(event){
					 var $tgt = $(event.target);
					 if ($tgt.is('img.rsidebar2')) {
						$('img.rsidebar1').fadeOut(500);
						$('#rsidebar1').html('<span class="rsidebar1" style="display:none"><img class="rsidebar1"  style="margin-left:-20px;" src="/wp-content/themes/starkers/images/frontpage/rsidebar1.gif"></span>');
						$('#rsidebar1').slideDown('slow');
						$("span.rsidebar1").fadeIn('slow');
					}
				});
				
				
				
				$('#nextWeek').click(function() {
					weekNumber=window.api.getIndex()+2;
					if(window.api.getIndex()==window.api.getSize()-1){
						weekNumber=1;
						
					}
					displayWeek();
                    // change url to reflect weekNumber
                    var newURL = $.query.set("week", weekNumber);
                    window.history.pushState("StateObj", "Daily Br!nk - week "+weekNumber, newURL);
				});
				
				$('#prevWeek').click(function() {
					weekNumber=window.api.getIndex();
					if(window.api.getIndex()==0){
						weekNumber=window.api.getSize();
					}
					displayWeek();
                    // change url to reflect weekNumber
                    var newURL = $.query.set("week", weekNumber);
                    window.history.pushState("StateObj", "Daily Br!nk - week "+weekNumber, newURL);
				});
                
                // $(document).keydown(function(e) {
                    // console.log('keydown with code '+e.keyCode);
                    // if(e.keyCode == 37){
                        // // left arrow
                        // weekNumber=window.api.getIndex();
                        // if(window.api.getIndex()==0){
                            // weekNumber=window.api.getSize();
                        // }
                        // displayWeek();
                    // }else if(e.keyCode == 39){
                        // // right arrow
                        // weekNumber=window.api.getIndex()+2;
                        // if(window.api.getIndex()==window.api.getSize()-1){
                            // weekNumber=1;
                        // }
                        // displayWeek();
                    // }
				
				// });
				
				
				function displayWeek(){
					if (weekNumber==1){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">o</font><font class="black">n</font><font class="black">e</font></b></span><!--<hr width="50%" />9.13.10-9.17.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==2){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">t</font><font class="black">w</font><font class="black">o</font></b></span><!--<hr width="50%" />9.20.10-9.24.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==3){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">t</font><font class="black">h</font><font class="black">r</font><font class="black">e</font><font class="black">e</font></b></span><!--<hr width="50%" />9.27.10-10.1.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==4){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">f</font><font class="black">o</font><font class="black">u</font><font class="black">r</font></b></span><!--<hr width="50%" />10.4.10-10.8.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==5){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">f</font><font class="black">i</font><font class="black">v</font><font class="black">e</font></b></span><!--<hr width="50%" />10.11.10-10.15.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==6){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">s</font><font class="black">i</font><font class="black">x</font></b></span><!--<hr width="50%" />10.18.10-10.22.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==7){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">s</font><font class="black">e</font><font class="black">v</font><font class="black">e</font><font class="black">n</font></b></span><!--<hr width="50%" />10.25.10-10.29.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==8){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">e</font><font class="black">i</font><font class="black">g</font><font class="black">h</font><font class="black">t</font></b></span><!--<hr width="50%" />11.01.10-11.05.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==9){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">n</font><font class="black">i</font><font class="black">n</font><font class="black">e</font><font class="black"></font></b></span><!--<hr width="50%" />11.08.10-11.12.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==10){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">t</font><font class="black">e</font><font class="black">n</font><font class="black"></font><font class="black"></font></b></span><!--<hr width="50%" />11.15.10-11.19.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==11){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">eleven</font></b></span><!--<hr width="50%" />11.29.10-12.3.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==12){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twelve</font></b></span><!--<hr width="50%" />12.6.10-12.10.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==13){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirteen</font></b></span><!--<hr width="50%" />12.13.10-12.17.10--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==14){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">fourteen</font></b></span><!--<hr width="50%" />1.3.11-1.7.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==15){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">fifteen</font></b></span><!--<hr width="50%" />1.10.11-1.14.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==16){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">sixteen</font></b></span><!--<hr width="50%" />1.17.11-1.21.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==17){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">seventeen</font></b></span><!--<hr width="50%" />2.7.11-2.11.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==18){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">eighteen</font></b></span><!--<hr width="50%" />2.14.11-2.18.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==19){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">nineteen</font></b></span><!--<hr width="50%" />2.21.11-2.25.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==20){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty</font></b></span><!--<hr width="50%" />3.7.11-3.11.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==21){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-one</font></b></span><!--<hr width="50%" />3.28.11-4.1.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					else if (weekNumber==22){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-two</font></b></span><!--<hr width="50%" />4.4.11-4.8.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}

					else if (weekNumber==23){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-three</font></b></span><!--<hr width="50%" />4.11.11-4.15.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
					}
					
					else if (weekNumber==24){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-four</font></b></span><!--<hr width="50%" />5.9.11-5.13.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
						
					}
					
						else if (weekNumber==25){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-five</font></b></span><!--<hr width="50%" />05.16.11-05.21.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
						
					}
					
						else if (weekNumber==26){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-six</font></b></span><!--<hr width="50%" />06.13.11-06.17.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
						
					}
					
						else if (weekNumber==27){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-seven</font></b></span><!--<hr width="50%" />06.20.11-06.24.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
						
					}
					
					else if (weekNumber==28){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-eight</font></b></span><!--<hr width="50%" />06.27.11-07.01.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
						
					}
					
					else if (weekNumber==29){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">twenty-nine</font></b></span><!--<hr width="50%" />07.04.11-07.08.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
						
					}
					
					else if (weekNumber==30){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirty</font></b></span><!--<hr width="50%" />07.11.11-07.15.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
						
					}
					
					else if (weekNumber==31){
                                                div.html('<center><div class="foo"><img src="http://www.dailybrink.com/wp-content/uploads/2011/07/Picture-12.png" /><!--<hr width="50%" />07.18.11-07.22.11--></div></center>');
                                                div.slideDown('slow');
                                                $("span.foo").fadeIn('slow');
                                                
                     }                           				
					
					else if (weekNumber==32){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirty-two</font></b></span><!--<hr width="50%" />07.25.11-07.29.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                   else if (weekNumber==33){
						div.html('<center><div class="foo"><span style="font-size:29px;">Bright Minds Under 20: <b><font class="black">Thiel Fellows</font></b></span><!--<hr width="50%" />08.01.11-08.05.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                          else if (weekNumber==34){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirty-four</font></b></span><!--<hr width="50%" />08.08.11-08.12.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                     else if (weekNumber==35){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirty-five</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                            else if (weekNumber==36){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirty-six</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                             else if (weekNumber==37){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirty-seven</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                             else if (weekNumber==38){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirty-eight</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                           else if (weekNumber==39){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">thirty-nine</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                            else if (weekNumber==40){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                               else if (weekNumber==41){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty-one</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                               else if (weekNumber==42){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty-two</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                                else if (weekNumber==43){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty-three</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }

     else if (weekNumber==44){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty-four</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                          else if (weekNumber==45){
						div.html('<center><div class="foo"><span style="font-size:29px;">week forty-five<b></p><font class="black">COMEDY WEEK</font></b></span><!--<hr width="50%" />08.01.11-08.05.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                             else if (weekNumber==46){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty-six</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                              else if (weekNumber==47){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty-seven</font></b></span><!--<hr width="50%" />08.29.11-09.02.11--></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        
                                        else if (weekNumber==48){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty-eight</font></b></span><br />#FixYoungAmerica Week</div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        else if (weekNumber==49){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">forty-nine</font></b></span></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        else if (weekNumber==50){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">fifty</font></b></span></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        else if (weekNumber==51){
						div.html('<center><div class="foo"><span style="font-size:29px;">week <b><font class="black">fifty-one</font></b></span></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        else if (weekNumber==52){
						div.html('<center><div class="foo"><span style="font-size:29px;"><b><font class="black" style="color:red">INNOVATION GARAGE</font></b></span></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
                                        else if (weekNumber==53){
						div.html('<center><div class="foo"><span style="font-size:29px;"><font class="black">year <b>two</b>: week <b>one</b></font></span></div></center>');
						div.slideDown('slow');
						$("span.foo").fadeIn('slow');
                                                
                                        }
					// GARY - copy and paste one of the "else if" statements above and increment the number, and change the relevant date information


					// nissan code
					if(weekNumber==52){
						$('#logo').css('background-image', 'url(https://s3.amazonaws.com/dailybrink/nissan-small-logo.jpg)');
						$('#logo2').css('background-image', 'url(https://s3.amazonaws.com/dailybrink/garagelogo.PNG)').css('left','12px');
					} else {
						$('#logo').css('background-image', 'url(http://www.dailybrink.com/wp-content/themes/starkers/images/frontpage/nav/logo.gif)');
						$('#logo2').css('background-image', 'url(http://www.dailybrink.com/wp-content/themes/starkers/images/frontpage/logo3.gif)').css('left','0');
					}
					
				}
			
			
			<!-- for the parenths -->
			$(".person").hover(
			function() {
					$(this).children(".parenthL").animate({"opacity": "1"}, "fast");
					$(this).children(".parenthC").animate({"opacity": "1"}, "fast");
					$(this).children(".parenthR").animate({"opacity": "1"}, "fast");
			},
			function() {
					$(this).children(".parenthL").animate({"opacity": "0"}, "fast");
					$(this).children(".parenthC").animate({"opacity": "0"}, "fast");
					$(this).children(".parenthR").animate({"opacity": "0"}, "fast");
			});

	
$.jGFeed('http://www.blog.dailybrink.com/?feed=rss2',
  function(feeds){
    // Check for errors
    if(!feeds){
      // there was an error
      return false;
    }
    // do whatever you want with feeds here
    // Publication date
	var p1=feeds.entries[0].publishedDate;
	var pubDate = p1.split(' ');
	$("#blogboxText").append("<a href='http://www.blog.dailybrink.com' target='_blank'>");
	$("#blogboxText").append(pubDate[2]).append(" ").append(pubDate[1]).append(" ").append(": ");
	// Entry title
     $("#blogboxText").append(feeds.entries[0].title).append("</a>");
  }, 10);
	
  
  
			});// END DOCUMENT READY
			
		</script>

		<!-- BEGIN Content -->
		
<div id="megaContainer">
<div style="overflow:auto;
	padding-bottom: 50px;">
	
<!--For the First Week -->


<!-- -->

	
<div id="bodybar">
	<div id="lsidebarholder">
		<div id="lsidebar"></div>
	</div>
	<div id="mainbar">
		<div id="logo2" style="background-size:100%;background-repeat:no-repeat;"></div>
		<div id="weekbar">
			<a class="prev browse left">
			<div id="prevWeek">
			</div></a>
			
			<div id="weekbarDisplay">
			</div>
			
			<a class="next browse right">
			<div id="nextWeek">
			</div></a>
			
		</div>
	</div>
	
	<div id="rsidebarholder">
	
	<div id="rsidebar1">
	<img style="margin-left:-20px;" class="rsidebar1" src="/wp-content/themes/starkers/images/frontpage/rsidebar1.gif">
	</div>
	
	</div>
	</div>

<!-- Hack for Safari 3 -->
<div style="background-color:#fff; width:1px; height:300px; opacity:0;"></div>

<!-- root element for scrollable -->
<div class="scrollable">   
   
   <!-- root element for the items -->
   <div class="items">
	
	<!-- counter so that it groups them in groups of 5 -->
	<?php $counter=0;?>
	
	<?php $posts = query_posts( $query_string . '&orderby=date&order=asc' ); ?>
	<?php if( $posts ) : ?>

	<!-- this if populates the scrolling navigation -->

		<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			
			<?php global $counter; if($counter%5==0) : ?> <div> <?php endif; ?>
			
				<div class="person">
				
				<?php if(get_post_meta($post->ID, 'available', true)=='true'){echo "<a href='";echo the_permalink()."' rel='bookmark' >";} ?>
				
					
					<img class="indexImg" title="" src="<?php 
					if(get_post_meta($post->ID, 'available', true)=='true'){
					echo get_post_meta($post->ID, 'frontImage', true); 
					}
					else{
					echo get_post_meta($post->ID, 'frontShadow', true); 
					}
					?>">
					<center>
					<span style="font-family: century gothic,Trebuchet MS; font-size:19px; color:#de1f27;"><b>
					<?php
					if(get_post_meta($post->ID, 'available', true)=='true'){
					echo the_title(); 
					}
					else{
					}
					?>
					
					</b>
					</span>
					<br>
					<span style="font-family: Georgia,Times New Roman;color:#888;font-size:13px;">
					
					<?php
					echo get_post_meta($post->ID, 'singleTitle1', true); 
					?>
					</span></center>
					
					<?php if(get_post_meta($post->ID, 'available', true)=='true'){echo "</a><div class='parenthL'></div>
					<div class='parenthC'>";}; ?>
					<?php if(get_post_meta($post->ID, 'available', true)=='true'){echo get_post_meta($post->ID, 'articletitle', true);echo "</div>
					<div class='parenthR'></div>";}; ?>
				</div>

			
			<?php $counter+=1;?>
			<?php global $counter; if($counter%5==0) : ?> </div> <?php endif; ?>
			
		<?php endforeach; ?>

	<?php endif; ?>
   

   </div><!-- end Items-->
   

  </div><!-- end Scrollable-->
  
  
  <!-- used for displaying blog headlines -->
  <hr style="margin-top:18px;width:90%;margin-left:auto;margin-right:auto;">
  <a href="http://www.blog.dailybrink.com" target="_blank">
  <!--<div id="blogbox" style="background-image:url('/wp-content/themes/starkers/images/frontpage/brinkBlog.jpg');color:#000;height: 54px;width: 818px;margin-left:auto;margin-right:auto; margin-top:18px;"><div id="blogboxText" style="float:left;margin-left:210px;margin-top:18px;font-family: century gothic,Trebuchet MS; font-size:18px;"></div></div>--></a>
  <br />
  <div id="semiFooter" style="width:400px; height:54px; margin-left:auto; margin-right:auto; text-align:center;font-family: century gothic,Trebuchet MS; font-size:12px;">
  <a href="http://www.dailybrink.com/?page_id=33" target="_blank">Contact Us</a>
  | 
  <a href="http://www.facebook.com/dailybrink" target="_blank">Facebook</a>
  | 
  <a href="http://www.twitter.com/dailyBRINK" target="_blank">Twitter</a>
  | 
  <a href="http://dailybrink.com/terms.html" target="_blank" >Terms of Use</a></div>
 
  </div>
  
  

<div style="position: relative;
	margin-top: -50px;
	height: 50px;
	clear:both;">



<?php get_footer(); ?>
