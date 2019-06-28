<script>
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();


         
 
              // $('.color-choose input').on('click', function() {
              //     var headphonesColor = $(this).attr('data-image');
             
              //     $('.isactive').removeClass('isactive');
              //     $('.left-column img[data-image = ' + headphonesColor + ']').addClass('isactive');
              //     $(this).addClass('isactive');
              // });

              $('.cable-config button').on('click', function() {
                  var headphonesColor = $(this).attr('data-image');
             
                  $('.isactive').removeClass('isactive');
                  $('.left-column img[data-image = ' + headphonesColor + ']').addClass('isactive');
                  $(this).addClass('isactive');
              });

              /*-----withBalcontoi-------*/

               $('.cable-config2 button').on('click', function() {
                  var headphonesColor = $(this).attr('data-image');
             
                  $('.withactive').removeClass('withactive');
                  $('.left-column img[data-image = ' + headphonesColor + ']').addClass('withactive');
                  $(this).addClass('withactive');
              });



                 /*-------tab 2--------------*/

                 $('.cable-config1 select').on('change', function(e) {
                    
                  var headphonesColor1 = $('#sel1').val();
                  var headphonesColor2 = $('#sel2').val();
                  var imageCode='';
          
                  $('.twoactive').removeClass('twoactive');

                  /*-----2 hoyulaa bituu ued----------*/

                  if (headphonesColor1 == 'Битүү' && headphonesColor2 == 'Битүү') {

                       imageCode = 'g_g';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  } 
                  if(headphonesColor1 == 'Битүү' && headphonesColor2 == 'Энгийн'){

                        imageCode = 'g_p';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  }
                  if(headphonesColor1 == 'Битүү' && headphonesColor2 == '2-онгойлттой'){

                        imageCode = 'g_po';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  }

                  if(headphonesColor1 == 'Энгийн' && headphonesColor2 == 'Битүү'){

                        imageCode = 'p_g';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  }

                  if(headphonesColor1 == '2-онгойлттой' && headphonesColor2 == 'Битүү'){

                        imageCode = 'po_g';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  }

                  if(headphonesColor1 == '2-онгойлттой' && headphonesColor2 == 'Энгийн'){

                        imageCode = 'po_p';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  }

                  if(headphonesColor1 == '2-онгойлттой' && headphonesColor2 == '2-онгойлттой'){

                        imageCode = 'po_po';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  }

                  if(headphonesColor1 == 'Энгийн' && headphonesColor2 == '2-онгойлттой'){

                        imageCode = 'p_po';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  }

                    if(headphonesColor1 == 'Энгийн' && headphonesColor2 == 'Энгийн'){

                        imageCode = 'p_p';
                      $('.left-column img[data-image = ' + imageCode + ']').addClass('twoactive');

                  }


                  $('.left-column img[data-image = ' + headphonesColor1 + ']').addClass('twoactive');
                  $(this).addClass('twoactive');
              });
              
              /*------berlin width------*/

              $('#inputwidth3').change(function(){

                var changedvalue = $(this).val();
                alert('change ok ' + changedvalue)
                 $('#berlinwidth').text(changedvalue);
               })

               $('#inputheight3').change(function(){

                var changedvalue = $(this).val();
                alert('change ok ' + changedvalue)
                 $('#berlinheight').text(changedvalue);
               })
              /*------paris width------*/
              
               $('#inputwidth2').change(function(){

                var changedvalue = $(this).val();
                
                 $('#pariswidth').text(changedvalue);
               })

               $('#inputheight2').change(function(){

                var changedvalue = $(this).val();
                
                 $('#parisheight').text(changedvalue);
               })

               /*------paris width------*/
              
               $('#inputwidth1').change(function(){

                var changedvalue = $(this).val();
                
                 $('#londonwidth').text(changedvalue);
               })

               $('#inputheight1').change(function(){

                var changedvalue = $(this).val();
                
                 $('#londonheight').text(changedvalue);
               })

             
            

               $(document).ready(function(){
                     

                      $("#btn2").click(function(){
                        $(".my-section ul").append($(".my-section li.selected").clone(true));
                        
                      });

                      $("#btn4").click(function(){
                        $("ul li.selected ").remove();
                        
                      });
        
                     $(".my-section ul li").click(function(){
                        
                         $(this).addClass('selected').siblings().removeClass('selected');

                     });


                     $(".agree-btn").click(function(){                        
                         
                        var src = $(".isactive").attr("src");
                        var alt = $(".isactive").attr("alt");
                        var lwidth = $("#londonwidth").text();
                        var lheight = $("#londonheight").text();                          

                         if (src) {
                            $('.selected img').attr("src", src);
                            $('.selected .type').text(alt);
                            $('.selected .size').text(lwidth + " x " + lheight+"mm");
                         }                    
                         
                        });

                     $(".agree-btn1").click(function(){                        
                         
                        var src1 = $(".twoactive").attr("src");
                        var alt = $(".twoactive").attr("alt");
                        var lwidth = $("#pariswidth").text();
                        var lheight = $("#parisheight").text();                        

                         if (src1) {
                            $('.selected img').attr("src", src1);
                            $('.selected .type').text(alt);
                            $('.selected .size').text(lwidth + " x " + lheight+"mm");
                         }                    
                         
                        });

                     $(".agree-btn2").click(function(){                        
                         
                        var src2 = $(".withactive").attr("src");
                        var alt = $(".withactive").attr("alt");
                        var lwidth = $("#berlinwidth").text();
                        var lheight = $("#berlinheight").text();                        
                        
                         if (src2) {
                            $('.selected img').attr("src", src2);
                            $('.selected .type').text(alt);
                            $('.selected .size').text(lwidth + " x " + lheight+"mm");
                         }                    
                         
                        });

                     /*----------- ajax post ----------*/

                     $('#selectedOrder').click(function(){
                          var wtype = $('li.selected .type').text();
                          var wsize = $('li.selected .size').text();
                          var wprice = $('li.selected .price').text();
                          var wquan = $('li.selected #quan_window').val();
                           


                          $('#exampleInputType1').val(wtype);
                          $('#exampleInputSize1').val(wsize);
                          $('#exampleInputPrice1').val(wprice);
                          $('#exampleInputQuantity1').val(wquan);
                          

                           
                     });

                     

                    });


      
        </script>