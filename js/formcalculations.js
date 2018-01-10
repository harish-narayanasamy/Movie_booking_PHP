
function validateForm() {
    var x = document.forms["TESTING"]["OUTPUT1"].value;
var y = document.forms["TESTING"]["time"].value;
var z = document.forms["TESTING"]["day"].value;


    if (x == "" || y=="None" || z=="None"){
        alert("Please select a day,time,seat");
        return false;
    }


}


var t1prices= new Array();
 t1prices["None"]=0;
 t1prices["1"]=18;
 t1prices["2"]=36;
 t1prices["3"]=54;
 t1prices["4"]=72;
var t2prices= new Array();
 t2prices["None"]=0;
 t2prices["1"]=15;
 t2prices["2"]=30;
 t2prices["3"]=45;
 t2prices["4"]=60;
var t3prices= new Array();
 t3prices["None"]=0;
 t3prices["1"]=12;
 t3prices["2"]=24;
 t3prices["3"]=36;
 t3prices["4"]=48;
var t4prices= new Array();
 t4prices["None"]=0;
 t4prices["1"]=30;
 t4prices["2"]=60;
 t4prices["3"]=90;
 t4prices["4"]=120;
var t5prices= new Array();
 t5prices["None"]=0;
 t5prices["1"]=25;
 t5prices["2"]=50;
 t5prices["3"]=75;
 t5prices["4"]=100;
var t6prices= new Array();
 t6prices["None"]=0;
 t6prices["1"]=20;
 t6prices["2"]=40;
 t6prices["3"]=60;
 t6prices["4"]=80;
var t7prices= new Array();
 t7prices["None"]=0;
 t7prices["1"]=20;
 t7prices["2"]=40;
 t7prices["3"]=60;
 t7prices["4"]=80;
var t8prices= new Array();
 t8prices["None"]=0;
 t8prices["1"]=20;
 t8prices["2"]=40;
 t8prices["3"]=60;
 t8prices["4"]=80;


function get1p()
{
    var bt1p=0;
   
    var theForm = document.forms["bookform"];
   
     var st1 = theForm.elements["ti1"];
     

    bt1p = t1prices[st1.value];


    return bt1p;
}
function get2p()
{
    var bt2p=0;
   
    var theForm = document.forms["bookform"];
   
     var st2 = theForm.elements["ti2"];
     

    bt2p = t2prices[st2.value];


    return bt2p;
}
function get3p()
{
    var bt3p=0;
   
    var theForm = document.forms["bookform"];
   
     var st3 = theForm.elements["ti3"];
     

    bt3p = t3prices[st3.value];


    return bt3p;
}
function get4p()
{
    var bt4p=0;
   
    var theForm = document.forms["bookform"];
   
     var st4 = theForm.elements["ti4"];
     

    bt4p = t3prices[st4.value];


    return bt4p;
}

function get5p()
{
    var bt5p=0;
   
    var theForm = document.forms["bookform"];
   
     var st5 = theForm.elements["ti5"];
     

    bt5p = t5prices[st5.value];


    return bt5p;
}
function get6p()
{
    var bt6p=0;
   
    var theForm = document.forms["bookform"];
   
     var st6 = theForm.elements["ti6"];
     

    bt6p = t6prices[st6.value];


    return bt6p;
}
function get7p()
{
    var bt7p=0;
   
    var theForm = document.forms["bookform"];
   
     var st7 = theForm.elements["ti7"];
     

    bt7p = t7prices[st7.value];


    return bt7p;
}



function get8p()
{
    var bt8p=0;
   
    var theForm = document.forms["bookform"];
   
     var st8 = theForm.elements["ti8"];
     

    bt8p = t8prices[st8.value];


    return bt8p;
}
    


function myFunction() {
	
console.log(document.getElementById("tPrice1"));

  var textnode =  document.createTextNode("$0.00");  
  var textnode2 = document.createTextNode("$0.00");
  var textnode3 = document.createTextNode("$0.00");  
  var textnode4 = document.createTextNode("$0.00");
  var textnode5 = document.createTextNode("$0.00");  
  var textnode6 = document.createTextNode("$0.00");  
  var textnode7 = document.createTextNode("$0.00");  
  var textnode8 = document.createTextNode("$0.00");
        document.getElementById("tPrice1").appendChild(textnode8);
	document.getElementById("tPrice2").appendChild(textnode7); 
        document.getElementById("tPrice3").appendChild(textnode6);
	document.getElementById("tPrice4").appendChild(textnode5);
        document.getElementById("tPrice5").appendChild(textnode4);
	document.getElementById("tPrice6").appendChild(textnode3);
 

        document.getElementById("tPrice7").appendChild(textnode2);
	document.getElementById("tPrice8").appendChild(textnode);

}   
function calculateTotal()
{
    
    var ttp = get1p() + get2p() + get3p() + get4p() + get5p () + get6p() + get7p() + get8p() ;
var totPrice1 = get1p() ;
    var divobj = document.getElementById('tPrice1');
    divobj.style.display='block';
 divobj.innerHTML = "$"+totPrice1;

var totPrice2 = get2p() ;
    var divobj = document.getElementById('tPrice2');
    divobj.style.display='block';
    divobj.innerHTML = "$"+totPrice2;

var totPrice3 = get3p() ;
    var divobj = document.getElementById('tPrice3');
    divobj.style.display='block';
    divobj.innerHTML = "$"+totPrice3;

var totPrice4 = get4p() ;
    var divobj = document.getElementById('tPrice4');
    divobj.style.display='block';
    divobj.innerHTML = "$"+totPrice4;

var totPrice5 = get5p() ;
    var divobj = document.getElementById('tPrice5');
    divobj.style.display='block';
    divobj.innerHTML = "$"+totPrice5;

var totPrice6 = get6p() ;
    var divobj = document.getElementById('tPrice6');
    divobj.style.display='block';
    divobj.innerHTML = "$"+totPrice6;

var totPrice7 = get7p() ;
    var divobj = document.getElementById('tPrice7');
    divobj.style.display='block';
    divobj.innerHTML = "$"+totPrice7;

var totPrice8 = get8p() ;
    var divobj = document.getElementById('tPrice8');
    divobj.style.display='block';
    divobj.innerHTML = "$"+totPrice8;

    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "$"+ttp;
var l = ttp;
document.TESTING.OUTPUT1.value = l;
   

}


