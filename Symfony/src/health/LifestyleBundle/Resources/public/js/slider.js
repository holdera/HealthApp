

    var slides = new Array();

    index = 0;

    function slider(){

        slides[0] = document.getElementsById('slide1');
        slides[1] = document.getElementsById('slide2');
        slides[2] = document.getElementsById('slide3');
        slides[3] = document.getElementsById('slide4');

        document.getElementById('contentSlider').innerHTML = slides[index];
    }

        //forward function
        function goForward(){
            index++;
            if(index == 4){
                index = 0;
            } document.getElementById('contentSlider').innerHTML = slides[index];
        }

        function goBackward(){
            index--;
            if(index == -1){index = 2;}
            document.getElementById('contentSlider').innerHTML = slides[index];
        }

/**
 * Created by alannahholder on 2014-06-07.
 */
