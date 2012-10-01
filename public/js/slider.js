$(document).ready(function(){
    var sliderUl = $('div.slider').css({'overflow': 'hidden'}).children('ul'),
        img = sliderUl.find('img'),
        imgWidth = 1000, // return 1000, not 1000px
        imgLen = img.length, // 3
        current = 1,
        totalImgWidth = imgLen * imgWidth;
        

    
    $('#slider-nav').show().find('button').on('click', function(){
       var direction = $(this).data('dir'),
           loc = imgWidth;
       
       
       (direction === 'next') ? ++current: --current;
       
       if(current === 0){
           current = imgLen;
           loc = totalImgWidth - imgWidth;
           direction = 'next';
       }else if(current - 1 === imgLen){
           current = 1;
           loc = 0;
       }

       
       transition(sliderUl, loc, direction);

    });
    

    

    
    
    
    
    
})

    function transition(container, loc, direction){
        var unit; // -= +=       
        
      
        if(direction && loc !== 0){
            unit = (direction === 'next') ? '-=' : '+=';
        }
        
        
        
        container.animate({
            'margin-left': unit ? (unit + loc) : loc
        })
    }