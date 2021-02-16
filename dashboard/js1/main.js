

         //slide transition for div_xx
         let slideIndex = 0;
           showSlidess();
              
            function showSlidess() {
                let i;
                let slides = document.getElementsByClassName("mySlide_n");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlidess, 7000); // Change image every 5 seconds
            }


            //slide transition for div_xx
         let slideIndext = 0;
         showSlidesst();
            
          function showSlidesst() {
              let i;
              let slides = document.getElementsByClassName("mySlide_xm");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              slideIndext++;
              if (slideIndext > slides.length) {slideIndext = 1}    
              for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace("active", "");
              }
              slides[slideIndext-1].style.display = "block";  
              dots[slideIndext-1].className += " active";
              setTimeout(showSlidesst, 7000); // Change image every 5 seconds
          }

          //to hide navbar on scrolling up 
           let prevScrollpos = window.pageYOffset;
           window.onscroll = function() {
           let currentScrollPos = window.pageYOffset;
             if (prevScrollpos > currentScrollPos) {
               document.getElementById("nav2").style.top = "0";
             } else {
               document.getElementById("nav2").style.top = "-100px";
             }
             prevScrollpos = currentScrollPos;
           }
                 
          
           /*
               //slide transition for layer text1
                let slideIndexx = 0;
                showSlides7();
                
                function showSlides7() {
                    let i;
                    let slides = document.getElementsByClassName("in_x");
                    let dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    slideIndexx++;
                    if (slideIndexx > slides.length) {slideIndexx = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace("active", "");
                    }
                    slides[slideIndexx-1].style.display = "block";  
                    dots[slideIndexx-1].className += " active";
                    setTimeout(showSlides7, 3000); // Change image every 5 seconds
                }


                //slide transition for layer text2
                let slideIndexxx = 0;
                showSlidesx();
                
                function showSlidesx() {
                    let i;
                    let slides = document.getElementsByClassName("in_2x");
                    let dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    slideIndexxx++;
                    if (slideIndexxx > slides.length) {slideIndexxx = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace("active", "");
                    }
                    slides[slideIndexxx-1].style.display = "block";  
                    dots[slideIndexxx-1].className += " active";
                    setTimeout(showSlidesx, 3000); // Change image every 5 seconds
                }
          

                //slide transition for layer text3
                let slideIndexzy = 0;
                showSlideszy();
                
                function showSlideszy() {
                    let i;
                    let slides = document.getElementsByClassName("in_3x");
                    let dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    slideIndexzy++;
                    if (slideIndexzy > slides.length) {slideIndexzy = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace("active", "");
                    }
                    slides[slideIndexzy-1].style.display = "block";  
                    dots[slideIndexzy-1].className += " active";
                    setTimeout(showSlideszy, 3000); // Change image every 5 seconds
                }
  */          
