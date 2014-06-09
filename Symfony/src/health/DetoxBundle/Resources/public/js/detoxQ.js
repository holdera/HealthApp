/**
 * Created by alannahholder on 2014-06-08.
 */
function giveDetox(){

var yes     = document.getElementById('answer1').checked;
var no     = document.getElementById('answer2').checked;

var master   = document.getElementById('answer3').checked;
var water   = document.getElementById('answer4').checked;
var wholly   = document.getElementById('answer5').checked;
var juice   = document.getElementById('answer6').checked;

var weight   = document.getElementById('answer7').checked;
var health   = document.getElementById('answer8').checked;
var surgery  = document.getElementById('answer9').checked;
var other    = document.getElementById('answer10').checked;

var once    = document.getElementById('answer11').checked;
var year  = document.getElementById('answer12').checked;
var month    = document.getElementById('answer13').checked;
var years    = document.getElementById('answer14').checked;

var yesS    = document.getElementById('answer15').checked;
var noO    = document.getElementById('answer16').checked;
var dep    = document.getElementById('answer17').checked;

var three   = document.getElementById('answer18').checked;
var seven   = document.getElementById('answer19').checked;
var thirty   = document.getElementById('answer20').checked;
var plus   = document.getElementById('answer21').checked;

    var liquid1 = yes, juice, health, once, yesS, seven;

    var liquid2 = yes, yesS, master, weight, years, three;

    var vegan1 = no;

    var vegan2 = yes, wholly, weight, month, noO, three ;

    var flush1 = yes, water, surgery, once, yesS, three;

    var flush2 = yes, jucie, health, month, dep, three;

    if (liquid1 || liquid2){
        alert("You need a liquid cleasne");
    } if (vegan1 || vegan2) {
        alert("You need a vegan cleanse");
    } if (flush1 || flush2) {
        alert("You need a flush cleanse");
    }



}//end of function /HealthApp/Symfony/web/app_dev.php/liquid