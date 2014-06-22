
//this calculates the user's BMI

function calcBMI() {

    //get users values
    var w = document.getElementById('weight').value;
    var h = document.getElementById('height').value;

    //calculate
    var wSum = Math.abs(w*0.45);
    var hSum = Math.abs(h*0.025);
    var squ  = Math.abs(hSum*hSum);
    var bmi  = Math.abs(wSum/squ);

    //clear text fields
    var w = document.getElementById('weight').value="";
    var h = document.getElementById('height').value="";

    document.getElementById('bmiResults').innerHTML =
        "Thank you. Your BMI is "+bmi;

    if(bmi > 29.9){
        document.getElementById('results').innerHTML = " You are considered overweight";
    } else if (bmi < 18.5){
        document.getElementById('results').innerHTML = " You are considered underweight";
    } else {
        document.getElementById('results').innerHTML = " You are at a normal weight";
    }

}

function calcBPM(){

    var age = document.getElementById('age').value;

    //calculations
    var maxHeart = Math.abs(220-age);
    var lowEnd   = Math.round(.60*maxHeart);
    var highEnd  = Math.abs(.85*maxHeart);

    //output the results



    document.getElementById('ageResults').innerHTML =
        "As you are "+age+ " years of age, your maximum heart rate is "+maxHeart+
    ". Try to stay between "+lowEnd+ " and "+highEnd+ ". Remember to workout safely!";

    var age = document.getElementById('age').value="";
}