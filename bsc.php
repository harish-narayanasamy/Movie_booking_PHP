<?Php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Select Movie</title>
<script>

window.onload = function()
{
   myFunction();
}


var days = new Array();

days['Zootopia'] = new Array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
days['Mustang'] = new Array('Monday','Tuesday','Saturday','Sunday');
days['Kii&Kaa'] =   new Array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
days['Grimsby'] = new Array('Wednesday','Thursday','Friday','Saturday','Sunday');


var times = new Array();

times['Zootopia'] = new Array();
times['Zootopia']['Monday']          = new Array('1:PM');
times['Zootopia']['Tuesday'] = new Array('1:PM');
times['Zootopia']['Wednesday']          = new Array('6:PM');
times['Zootopia']['Thursday']          = new Array('6:PM');
times['Zootopia']['Friday'] = new Array('6:PM');
times['Zootopia']['Saturday']          = new Array('12:PM');
times['Zootopia']['Sunday']          = new Array('12:PM');

times['Mustang'] = new Array();
times['Mustang']['Monday']          = new Array('6:PM');
times['Mustang']['Tuesday'] = new Array('6:PM');
times['Mustang']['Saturday']          = new Array('3:PM');
times['Mustang']['Sunday']          = new Array('3:PM');

times['Kii&Kaa'] = new Array();
times['Kii&Kaa']['Monday']          = new Array('9:PM');
times['Kii&Kaa']['Tuesday'] = new Array('9:PM');
times['Kii&Kaa']['Wednesday']          = new Array('1:PM');
times['Kii&Kaa']['Thursday']          = new Array('1:PM');
times['Kii&Kaa']['Friday'] = new Array('1:PM');
times['Kii&Kaa']['Saturday']          = new Array('6:PM');
times['Kii&Kaa']['Sunday']          = new Array('6:PM');

times['Grimsby'] = new Array();
times['Grimsby']['Wednesday']          = new Array('9:PM');
times['Grimsby']['Thursday']          = new Array('9:PM');
times['Grimsby']['Friday'] = new Array('9:PM');
times['Grimsby']['Saturday']          = new Array('9:PM');
times['Grimsby']['Sunday']          = new Array('9:PM');

var seats = new Array();
seats['Zootopia'] = new Array();
seats['Zootopia']['Monday'] =  new Array();
seats['Zootopia']['Monday']['1:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Zootopia']['Tuesday'] =  new Array();
seats['Zootopia']['Tuesday']['1:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Zootopia']['Wednesday'] =  new Array();
seats['Zootopia']['Wednesday']['6:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Zootopia']['Thursday'] =  new Array();
seats['Zootopia']['Thursday']['6:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Zootopia']['Friday'] =  new Array();
seats['Zootopia']['Friday']['6:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Zootopia']['Saturday'] =  new Array();
seats['Zootopia']['Saturday']['12:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Zootopia']['Sunday'] =  new Array();
seats['Zootopia']['Sunday']['12:PM'] =  new Array('SA','SP','SC','FA','FC','BB');

seats['Mustang'] = new Array();
seats['Mustang']['Monday'] =  new Array();
seats['Mustang']['Monday']['6:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Mustang']['Tuesday'] =  new Array();
seats['Mustang']['Tuesday']['6:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Mustang']['Saturday'] =  new Array();
seats['Mustang']['Saturday']['3:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Mustang']['Sunday'] =  new Array();
seats['Mustang']['Sunday']['3:PM'] =  new Array('SA','SP','SC','FA','FC','BB');

seats['Kii&Kaa'] = new Array();
seats['Kii&Kaa']['Monday'] =  new Array();
seats['Kii&Kaa']['Monday']['9:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Kii&Kaa']['Tuesday'] =  new Array();
seats['Kii&Kaa']['Tuesday']['9:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Kii&Kaa']['Wednesday'] =  new Array();
seats['Kii&Kaa']['Wednesday']['1:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Kii&Kaa']['Thursday'] =  new Array();
seats['Kii&Kaa']['Thursday']['1:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Kii&Kaa']['Friday'] =  new Array();
seats['Kii&Kaa']['Friday']['1:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Kii&Kaa']['Saturday'] =  new Array();
seats['Kii&Kaa']['Saturday']['6:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Kii&Kaa']['Sunday'] =  new Array();
seats['Kii&Kaa']['Sunday']['6:PM'] =  new Array('SA','SP','SC','FA','FC','BB');

seats['Grimsby'] = new Array();
seats['Grimsby']['Wednesday'] =  new Array();
seats['Grimsby']['Wednesday']['9:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Grimsby']['Thursday'] =  new Array();
seats['Grimsby']['Thursday']['9:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Grimsby']['Friday'] =  new Array();
seats['Grimsby']['Friday']['9:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Grimsby']['Saturday'] =  new Array();
seats['Grimsby']['Saturday']['9:PM'] =  new Array('SA','SP','SC','FA','FC','BB');
seats['Grimsby']['Sunday'] =  new Array();
seats['Grimsby']['Sunday']['9:PM'] =  new Array('SA','SP','SC','FA','FC','BB');

var qntys = new Array();
qntys['Zootopia'] = new Array();
qntys['Zootopia']['Monday'] =  new Array();
qntys['Zootopia']['Monday']['1:PM'] =  new Array();
qntys['Zootopia']['Monday']['1:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Monday']['1:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Monday']['1:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Monday']['1:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Monday']['1:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Monday']['1:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Zootopia']['Tuesday'] =  new Array();
qntys['Zootopia']['Tuesday']['1:PM'] =  new Array();
qntys['Zootopia']['Tuesday']['1:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Tuesday']['1:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Tuesday']['1:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Tuesday']['1:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Tuesday']['1:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Tuesday']['1:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Zootopia']['Wednesday'] =  new Array();
qntys['Zootopia']['Wednesday']['6:PM'] =  new Array();
qntys['Zootopia']['Wednesday']['6:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Wednesday']['6:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Wednesday']['6:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Wednesday']['6:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Wednesday']['6:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Wednesday']['6:PM']['BB'] =  new Array('0','1','2','3','4','5','6');


qntys['Zootopia']['Thursday'] =  new Array();
qntys['Zootopia']['Thursday']['6:PM'] =  new Array();
qntys['Zootopia']['Thursday']['6:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Thursday']['6:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Thursday']['6:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Thursday']['6:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Thursday']['6:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Thursday']['6:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Zootopia']['Friday'] =  new Array();
qntys['Zootopia']['Friday']['6:PM'] =  new Array();
qntys['Zootopia']['Friday']['6:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Friday']['6:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Friday']['6:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Friday']['6:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Friday']['6:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Friday']['6:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Zootopia']['Saturday'] =  new Array();
qntys['Zootopia']['Saturday']['12:PM'] =  new Array();
qntys['Zootopia']['Saturday']['12:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Saturday']['12:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Saturday']['12:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Saturday']['12:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Saturday']['12:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Saturday']['12:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Zootopia']['Sunday'] =  new Array();
qntys['Zootopia']['Sunday']['12:PM'] =  new Array();
qntys['Zootopia']['Sunday']['12:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Sunday']['12:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Sunday']['12:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Sunday']['12:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Sunday']['12:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Zootopia']['Sunday']['12:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Mustang'] = new Array();
qntys['Mustang']['Monday'] =  new Array();
qntys['Mustang']['Monday']['6:PM'] =  new Array();
qntys['Mustang']['Monday']['6:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Monday']['6:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Monday']['6:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Monday']['6:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Monday']['6:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Monday']['6:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Mustang']['Tuesday'] =  new Array();
qntys['Mustang']['Tuesday']['6:PM'] =  new Array();
qntys['Mustang']['Tuesday']['6:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Tuesday']['6:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Tuesday']['6:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Tuesday']['6:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Tuesday']['6:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Tuesday']['6:PM']['BB'] =  new Array('0','1','2','3','4','5','6');


qntys['Mustang']['Saturday'] =  new Array();
qntys['Mustang']['Saturday']['3:PM'] =  new Array();
qntys['Mustang']['Saturday']['3:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Saturday']['3:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Saturday']['3:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Saturday']['3:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Saturday']['3:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Saturday']['3:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Mustang']['Sunday'] =  new Array();
qntys['Mustang']['Sunday']['3:PM'] =  new Array();
qntys['Mustang']['Sunday']['3:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Sunday']['3:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Sunday']['3:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Sunday']['3:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Sunday']['3:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Mustang']['Sunday']['3:PM']['BB'] =  new Array('0','1','2','3','4','5','6');


qntys['Kii&Kaa'] = new Array();
qntys['Kii&Kaa']['Monday'] =  new Array();
qntys['Kii&Kaa']['Monday']['9:PM'] =  new Array();
qntys['Kii&Kaa']['Monday']['9:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Monday']['9:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Monday']['9:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Monday']['9:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Monday']['9:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Monday']['9:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Kii&Kaa']['Tuesday'] =  new Array();
qntys['Kii&Kaa']['Tuesday']['9:PM'] =  new Array();
qntys['Kii&Kaa']['Tuesday']['9:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Tuesday']['9:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Tuesday']['9:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Tuesday']['9:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Tuesday']['9:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Tuesday']['9:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Kii&Kaa']['Wednesday'] =  new Array();
qntys['Kii&Kaa']['Wednesday']['1:PM'] =  new Array();
qntys['Kii&Kaa']['Wednesday']['1:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Wednesday']['1:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Wednesday']['1:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Wednesday']['1:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Wednesday']['1:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Wednesday']['1:PM']['BB'] =  new Array('0','1','2','3','4','5','6');


qntys['Kii&Kaa']['Thursday'] =  new Array();
qntys['Kii&Kaa']['Thursday']['1:PM'] =  new Array();
qntys['Kii&Kaa']['Thursday']['1:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Thursday']['1:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Thursday']['1:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Thursday']['1:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Thursday']['1:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Thursday']['1:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Kii&Kaa']['Friday'] =  new Array();
qntys['Kii&Kaa']['Friday']['1:PM'] =  new Array();
qntys['Kii&Kaa']['Friday']['1:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Friday']['1:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Friday']['1:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Friday']['1:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Friday']['1:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Friday']['1:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Kii&Kaa']['Saturday'] =  new Array();
qntys['Kii&Kaa']['Saturday']['6:PM'] =  new Array();
qntys['Kii&Kaa']['Saturday']['6:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Saturday']['6:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Saturday']['6:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Saturday']['6:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Saturday']['6:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Saturday']['6:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Kii&Kaa']['Sunday'] =  new Array();
qntys['Kii&Kaa']['Sunday']['6:PM'] =  new Array();
qntys['Kii&Kaa']['Sunday']['6:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Sunday']['6:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Sunday']['6:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Sunday']['6:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Sunday']['6:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Kii&Kaa']['Sunday']['6:PM']['BB'] =  new Array('0','1','2','3','4','5','6');


qntys['Grimsby'] = new Array();

qntys['Grimsby']['Wednesday'] =  new Array();
qntys['Grimsby']['Wednesday']['9:PM'] =  new Array();
qntys['Grimsby']['Wednesday']['9:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Wednesday']['9:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Wednesday']['9:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Wednesday']['9:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Wednesday']['9:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Wednesday']['9:PM']['BB'] =  new Array('0','1','2','3','4','5','6');


qntys['Grimsby']['Thursday'] =  new Array();
qntys['Grimsby']['Thursday']['9:PM'] =  new Array();
qntys['Grimsby']['Thursday']['9:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Thursday']['9:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Thursday']['9:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Thursday']['9:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Thursday']['9:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Thursday']['9:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Grimsby']['Friday'] =  new Array();
qntys['Grimsby']['Friday']['9:PM'] =  new Array();
qntys['Grimsby']['Friday']['9:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Friday']['9:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Friday']['9:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Friday']['9:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Friday']['9:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Friday']['9:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Grimsby']['Saturday'] =  new Array();
qntys['Grimsby']['Saturday']['9:PM'] =  new Array();
qntys['Grimsby']['Saturday']['9:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Saturday']['9:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Saturday']['9:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Saturday']['9:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Saturday']['9:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Saturday']['9:PM']['BB'] =  new Array('0','1','2','3','4','5','6');

qntys['Grimsby']['Sunday'] =  new Array();
qntys['Grimsby']['Sunday']['9:PM'] =  new Array();
qntys['Grimsby']['Sunday']['9:PM']['SA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Sunday']['9:PM']['SP'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Sunday']['9:PM']['SC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Sunday']['9:PM']['FA'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Sunday']['9:PM']['FC'] =  new Array('0','1','2','3','4','5','6');
qntys['Grimsby']['Sunday']['9:PM']['BB'] =  new Array('0','1','2','3','4','5','6');




var prices = new Array();
prices['Zootopia'] = new Array();
prices['Zootopia']['Monday'] =  new Array();
prices['Zootopia']['Monday']['1:PM'] =  new Array();
prices['Zootopia']['Monday']['1:PM']['SA'] =  [];
prices['Zootopia']['Monday']['1:PM']['SA'][0] =  0.00;
prices['Zootopia']['Monday']['1:PM']['SA'][1] =  12.00;
prices['Zootopia']['Monday']['1:PM']['SA'][2] =  24.00;
prices['Zootopia']['Monday']['1:PM']['SA'][3] =  36.00;
prices['Zootopia']['Monday']['1:PM']['SA'][4] =  48.00;
prices['Zootopia']['Monday']['1:PM']['SA'][5] =  60.00;
prices['Zootopia']['Monday']['1:PM']['SA'][6] =  72.00;
prices['Zootopia']['Monday']['1:PM']['SP'] =  new Array();
prices['Zootopia']['Monday']['1:PM']['SP'][0] =  0.00;
prices['Zootopia']['Monday']['1:PM']['SP'][1] =  10.00;
prices['Zootopia']['Monday']['1:PM']['SP'][2] =  20.00;
prices['Zootopia']['Monday']['1:PM']['SP'][3] =  30.00;
prices['Zootopia']['Monday']['1:PM']['SP'][4] =  40.00;
prices['Zootopia']['Monday']['1:PM']['SP'][5] =  50.00;
prices['Zootopia']['Monday']['1:PM']['SP'][6] =  60.00;
prices['Zootopia']['Monday']['1:PM']['SC'] =  new Array();
prices['Zootopia']['Monday']['1:PM']['SC'][0] =  0.00;
prices['Zootopia']['Monday']['1:PM']['SC'][1] =  8.00;
prices['Zootopia']['Monday']['1:PM']['SC'][2] =  16.00;
prices['Zootopia']['Monday']['1:PM']['SC'][3] =  24.00;
prices['Zootopia']['Monday']['1:PM']['SC'][4] =  32.00;
prices['Zootopia']['Monday']['1:PM']['SC'][5] =  40.00;
prices['Zootopia']['Monday']['1:PM']['SC'][6] =  48.00;
prices['Zootopia']['Monday']['1:PM']['FA'] =  new Array();
prices['Zootopia']['Monday']['1:PM']['FA'][0] =  0.00;
prices['Zootopia']['Monday']['1:PM']['FA'][1] =  25.00;
prices['Zootopia']['Monday']['1:PM']['FA'][2] =  50.00;
prices['Zootopia']['Monday']['1:PM']['FA'][3] =  75.00;
prices['Zootopia']['Monday']['1:PM']['FA'][4] =  100.00;
prices['Zootopia']['Monday']['1:PM']['FA'][5] =  125.00;
prices['Zootopia']['Monday']['1:PM']['FA'][6] =  150.00;
prices['Zootopia']['Monday']['1:PM']['FC'] =  new Array();
prices['Zootopia']['Monday']['1:PM']['FC'][0] =  0.00;
prices['Zootopia']['Monday']['1:PM']['FC'][1] =  20.00;
prices['Zootopia']['Monday']['1:PM']['FC'][2] =  40.00;
prices['Zootopia']['Monday']['1:PM']['FC'][3] =  60.00;
prices['Zootopia']['Monday']['1:PM']['FC'][4] =  80.00;
prices['Zootopia']['Monday']['1:PM']['FC'][5] =  100.00;
prices['Zootopia']['Monday']['1:PM']['FC'][6] =  120.00;
prices['Zootopia']['Monday']['1:PM']['BB'] =  new Array();
prices['Zootopia']['Monday']['1:PM']['BB'][0] =  0.00;
prices['Zootopia']['Monday']['1:PM']['BB'][1] =  20.00;
prices['Zootopia']['Monday']['1:PM']['BB'][2] =  40.00;
prices['Zootopia']['Monday']['1:PM']['BB'][3] =  60.00;
prices['Zootopia']['Monday']['1:PM']['BB'][4] =  80.00;
prices['Zootopia']['Monday']['1:PM']['BB'][5] =  100.00;
prices['Zootopia']['Monday']['1:PM']['BB'][6] =  120.00;

prices['Zootopia']['Tuesday'] =  new Array();
prices['Zootopia']['Tuesday']['1:PM'] =  new Array();
prices['Zootopia']['Tuesday']['1:PM']['SA'] =  new Array();
prices['Zootopia']['Tuesday']['1:PM']['SA'][0] =  0.00;
prices['Zootopia']['Tuesday']['1:PM']['SA'][1] =  12.00;
prices['Zootopia']['Tuesday']['1:PM']['SA'][2] =  24.00;
prices['Zootopia']['Tuesday']['1:PM']['SA'][3] =  36.00;
prices['Zootopia']['Tuesday']['1:PM']['SA'][4] =  48.00;
prices['Zootopia']['Tuesday']['1:PM']['SA'][5] =  60.00;
prices['Zootopia']['Tuesday']['1:PM']['SA'][6] =  72.00;
prices['Zootopia']['Tuesday']['1:PM']['SP'] =  new Array();
prices['Zootopia']['Tuesday']['1:PM']['SP'][0] =  0.00;
prices['Zootopia']['Tuesday']['1:PM']['SP'][1] =  10.00;
prices['Zootopia']['Tuesday']['1:PM']['SP'][2] =  20.00;
prices['Zootopia']['Tuesday']['1:PM']['SP'][3] =  30.00;
prices['Zootopia']['Tuesday']['1:PM']['SP'][4] =  40.00;
prices['Zootopia']['Tuesday']['1:PM']['SP'][5] =  50.00;
prices['Zootopia']['Tuesday']['1:PM']['SP'][6] =  60.00;
prices['Zootopia']['Tuesday']['1:PM']['SC'] =  new Array();
prices['Zootopia']['Tuesday']['1:PM']['SC'][0] =  0.00;
prices['Zootopia']['Tuesday']['1:PM']['SC'][1] =  8.00;
prices['Zootopia']['Tuesday']['1:PM']['SC'][2] =  16.00;
prices['Zootopia']['Tuesday']['1:PM']['SC'][3] =  24.00;
prices['Zootopia']['Tuesday']['1:PM']['SC'][4] =  32.00;
prices['Zootopia']['Tuesday']['1:PM']['SC'][5] =  40.00;
prices['Zootopia']['Tuesday']['1:PM']['SC'][6] =  48.00;
prices['Zootopia']['Tuesday']['1:PM']['FA'] =  new Array();
prices['Zootopia']['Tuesday']['1:PM']['FA'][0] =  0.00;
prices['Zootopia']['Tuesday']['1:PM']['FA'][1] =  25.00;
prices['Zootopia']['Tuesday']['1:PM']['FA'][2] =  50.00;
prices['Zootopia']['Tuesday']['1:PM']['FA'][3] =  75.00;
prices['Zootopia']['Tuesday']['1:PM']['FA'][4] =  100.00;
prices['Zootopia']['Tuesday']['1:PM']['FA'][5] =  125.00;
prices['Zootopia']['Tuesday']['1:PM']['FA'][6] =  150.00;
prices['Zootopia']['Tuesday']['1:PM']['FC'] =  new Array();
prices['Zootopia']['Tuesday']['1:PM']['FC'][0] =  0.00;
prices['Zootopia']['Tuesday']['1:PM']['FC'][1] =  20.00;
prices['Zootopia']['Tuesday']['1:PM']['FC'][2] =  40.00;
prices['Zootopia']['Tuesday']['1:PM']['FC'][3] =  60.00;
prices['Zootopia']['Tuesday']['1:PM']['FC'][4] =  80.00;
prices['Zootopia']['Tuesday']['1:PM']['FC'][5] =  100.00;
prices['Zootopia']['Tuesday']['1:PM']['FC'][6] =  120.00;
prices['Zootopia']['Tuesday']['1:PM']['BB'] =  new Array();
prices['Zootopia']['Tuesday']['1:PM']['BB'][0] =  0.00;
prices['Zootopia']['Tuesday']['1:PM']['BB'][1] =  20.00;
prices['Zootopia']['Tuesday']['1:PM']['BB'][2] =  40.00;
prices['Zootopia']['Tuesday']['1:PM']['BB'][3] =  60.00;
prices['Zootopia']['Tuesday']['1:PM']['BB'][4] =  80.00;
prices['Zootopia']['Tuesday']['1:PM']['BB'][5] =  100.00;
prices['Zootopia']['Tuesday']['1:PM']['BB'][6] =  120.00;

prices['Zootopia']['Wednesday'] =  new Array();
prices['Zootopia']['Wednesday']['6:PM'] =  new Array();
prices['Zootopia']['Wednesday']['6:PM']['SA'] =  new Array();
prices['Zootopia']['Wednesday']['6:PM']['SA'][0] =  0.00;
prices['Zootopia']['Wednesday']['6:PM']['SA'][1] =  18.00;
prices['Zootopia']['Wednesday']['6:PM']['SA'][2] =  36.00;
prices['Zootopia']['Wednesday']['6:PM']['SA'][3] =  54.00;
prices['Zootopia']['Wednesday']['6:PM']['SA'][4] =  72.00;
prices['Zootopia']['Wednesday']['6:PM']['SA'][5] =  90.00;
prices['Zootopia']['Wednesday']['6:PM']['SA'][6] =  108.00;
prices['Zootopia']['Wednesday']['6:PM']['SP'] =  new Array();
prices['Zootopia']['Wednesday']['6:PM']['SP'][0] =  0.00;
prices['Zootopia']['Wednesday']['6:PM']['SP'][1] =  15.00;
prices['Zootopia']['Wednesday']['6:PM']['SP'][2] =  30.00;
prices['Zootopia']['Wednesday']['6:PM']['SP'][3] =  45.00;
prices['Zootopia']['Wednesday']['6:PM']['SP'][4] =  60.00;
prices['Zootopia']['Wednesday']['6:PM']['SP'][5] =  75.00;
prices['Zootopia']['Wednesday']['6:PM']['SP'][6] =  90.00;
prices['Zootopia']['Wednesday']['6:PM']['SC'] =  new Array();
prices['Zootopia']['Wednesday']['6:PM']['SC'][0] =  0.00;
prices['Zootopia']['Wednesday']['6:PM']['SC'][1] =  12.00;
prices['Zootopia']['Wednesday']['6:PM']['SC'][2] =  24.00;
prices['Zootopia']['Wednesday']['6:PM']['SC'][3] =  36.00;
prices['Zootopia']['Wednesday']['6:PM']['SC'][4] =  48.00;
prices['Zootopia']['Wednesday']['6:PM']['SC'][5] =  60.00;
prices['Zootopia']['Wednesday']['6:PM']['SC'][6] =  72.00;
prices['Zootopia']['Wednesday']['6:PM']['FA'] =  new Array();
prices['Zootopia']['Wednesday']['6:PM']['FA'][0] =  0.00;
prices['Zootopia']['Wednesday']['6:PM']['FA'][1] =  30.00;
prices['Zootopia']['Wednesday']['6:PM']['FA'][2] =  60.00;
prices['Zootopia']['Wednesday']['6:PM']['FA'][3] =  90.00;
prices['Zootopia']['Wednesday']['6:PM']['FA'][4] =  120.00;
prices['Zootopia']['Wednesday']['6:PM']['FA'][5] =  150.00;
prices['Zootopia']['Wednesday']['6:PM']['FA'][6] =  180.00;
prices['Zootopia']['Wednesday']['6:PM']['FC'] =  new Array();
prices['Zootopia']['Wednesday']['6:PM']['FC'][0] =  0.00;
prices['Zootopia']['Wednesday']['6:PM']['FC'][1] =  25.00;
prices['Zootopia']['Wednesday']['6:PM']['FC'][2] =  50.00;
prices['Zootopia']['Wednesday']['6:PM']['FC'][3] =  75.00;
prices['Zootopia']['Wednesday']['6:PM']['FC'][4] =  100.00;
prices['Zootopia']['Wednesday']['6:PM']['FC'][5] =  125.00;
prices['Zootopia']['Wednesday']['6:PM']['FC'][6] =  150.00;
prices['Zootopia']['Wednesday']['6:PM']['BB'] =  new Array();
prices['Zootopia']['Wednesday']['6:PM']['BB'][0] =  0.00;
prices['Zootopia']['Wednesday']['6:PM']['BB'][1] =  30.00;
prices['Zootopia']['Wednesday']['6:PM']['BB'][2] =  60.00;
prices['Zootopia']['Wednesday']['6:PM']['BB'][3] =  90.00;
prices['Zootopia']['Wednesday']['6:PM']['BB'][4] =  120.00;
prices['Zootopia']['Wednesday']['6:PM']['BB'][5] =  150.00;
prices['Zootopia']['Wednesday']['6:PM']['BB'][6] =  180.00;
prices['Zootopia']['Thursday'] =  new Array();
prices['Zootopia']['Thursday']['6:PM'] =  new Array();
prices['Zootopia']['Thursday']['6:PM']['SA'] =  new Array();
prices['Zootopia']['Thursday']['6:PM']['SA'][0] =  0.00;
prices['Zootopia']['Thursday']['6:PM']['SA'][1] =  18.00;
prices['Zootopia']['Thursday']['6:PM']['SA'][2] =  36.00;
prices['Zootopia']['Thursday']['6:PM']['SA'][3] =  54.00;
prices['Zootopia']['Thursday']['6:PM']['SA'][4] =  72.00;
prices['Zootopia']['Thursday']['6:PM']['SA'][5] =  90.00;
prices['Zootopia']['Thursday']['6:PM']['SA'][6] =  108.00;
prices['Zootopia']['Thursday']['6:PM']['SP'] =  new Array();
prices['Zootopia']['Thursday']['6:PM']['SP'][0] =  0.00;
prices['Zootopia']['Thursday']['6:PM']['SP'][1] =  15.00;
prices['Zootopia']['Thursday']['6:PM']['SP'][2] =  30.00;
prices['Zootopia']['Thursday']['6:PM']['SP'][3] =  45.00;
prices['Zootopia']['Thursday']['6:PM']['SP'][4] =  60.00;
prices['Zootopia']['Thursday']['6:PM']['SP'][5] =  75.00;
prices['Zootopia']['Thursday']['6:PM']['SP'][6] =  90.00;
prices['Zootopia']['Thursday']['6:PM']['SC'] =  new Array();
prices['Zootopia']['Thursday']['6:PM']['SC'][0] =  0.00;
prices['Zootopia']['Thursday']['6:PM']['SC'][1] =  12.00;
prices['Zootopia']['Thursday']['6:PM']['SC'][2] =  24.00;
prices['Zootopia']['Thursday']['6:PM']['SC'][3] =  36.00;
prices['Zootopia']['Thursday']['6:PM']['SC'][4] =  48.00;
prices['Zootopia']['Thursday']['6:PM']['SC'][5] =  60.00;
prices['Zootopia']['Thursday']['6:PM']['SC'][6] =  72.00;
prices['Zootopia']['Thursday']['6:PM']['FA'] =  new Array();
prices['Zootopia']['Thursday']['6:PM']['FA'][0] =  0.00;
prices['Zootopia']['Thursday']['6:PM']['FA'][1] =  30.00;
prices['Zootopia']['Thursday']['6:PM']['FA'][2] =  60.00;
prices['Zootopia']['Thursday']['6:PM']['FA'][3] =  90.00;
prices['Zootopia']['Thursday']['6:PM']['FA'][4] =  120.00;
prices['Zootopia']['Thursday']['6:PM']['FA'][5] =  150.00;
prices['Zootopia']['Thursday']['6:PM']['FA'][6] =  180.00;
prices['Zootopia']['Thursday']['6:PM']['FC'] =  new Array();
prices['Zootopia']['Thursday']['6:PM']['FC'][0] =  0.00;
prices['Zootopia']['Thursday']['6:PM']['FC'][1] =  25.00;
prices['Zootopia']['Thursday']['6:PM']['FC'][2] =  50.00;
prices['Zootopia']['Thursday']['6:PM']['FC'][3] =  75.00;
prices['Zootopia']['Thursday']['6:PM']['FC'][4] =  100.00;
prices['Zootopia']['Thursday']['6:PM']['FC'][5] =  125.00;
prices['Zootopia']['Thursday']['6:PM']['FC'][6] =  150.00;
prices['Zootopia']['Thursday']['6:PM']['BB'] =  new Array();
prices['Zootopia']['Thursday']['6:PM']['BB'][0] =  0.00;
prices['Zootopia']['Thursday']['6:PM']['BB'][1] =  30.00;
prices['Zootopia']['Thursday']['6:PM']['BB'][2] =  60.00;
prices['Zootopia']['Thursday']['6:PM']['BB'][3] =  90.00;
prices['Zootopia']['Thursday']['6:PM']['BB'][4] =  120.00;
prices['Zootopia']['Thursday']['6:PM']['BB'][5] =  150.00;
prices['Zootopia']['Thursday']['6:PM']['BB'][6] =  180.00;
prices['Zootopia']['Friday'] =  new Array();
prices['Zootopia']['Friday']['6:PM'] =  new Array();
prices['Zootopia']['Friday']['6:PM']['SA'] =  new Array();
prices['Zootopia']['Friday']['6:PM']['SA'][0] =  0.00;
prices['Zootopia']['Friday']['6:PM']['SA'][1] =  18.00;
prices['Zootopia']['Friday']['6:PM']['SA'][2] =  36.00;
prices['Zootopia']['Friday']['6:PM']['SA'][3] =  54.00;
prices['Zootopia']['Friday']['6:PM']['SA'][4] =  72.00;
prices['Zootopia']['Friday']['6:PM']['SA'][5] =  90.00;
prices['Zootopia']['Friday']['6:PM']['SA'][6] =  108.00;
prices['Zootopia']['Friday']['6:PM']['SP'] =  new Array();
prices['Zootopia']['Friday']['6:PM']['SP'][0] =  0.00;
prices['Zootopia']['Friday']['6:PM']['SP'][1] =  15.00;
prices['Zootopia']['Friday']['6:PM']['SP'][2] =  30.00;
prices['Zootopia']['Friday']['6:PM']['SP'][3] =  45.00;
prices['Zootopia']['Friday']['6:PM']['SP'][4] =  60.00;
prices['Zootopia']['Friday']['6:PM']['SP'][5] =  75.00;
prices['Zootopia']['Friday']['6:PM']['SP'][6] =  90.00;
prices['Zootopia']['Friday']['6:PM']['SC'] =  new Array();
prices['Zootopia']['Friday']['6:PM']['SC'][0] =  0.00;
prices['Zootopia']['Friday']['6:PM']['SC'][1] =  12.00;
prices['Zootopia']['Friday']['6:PM']['SC'][2] =  24.00;
prices['Zootopia']['Friday']['6:PM']['SC'][3] =  36.00;
prices['Zootopia']['Friday']['6:PM']['SC'][4] =  48.00;
prices['Zootopia']['Friday']['6:PM']['SC'][5] =  60.00;
prices['Zootopia']['Friday']['6:PM']['SC'][6] =  72.00;
prices['Zootopia']['Friday']['6:PM']['FA'] =  new Array();
prices['Zootopia']['Friday']['6:PM']['FA'][0] =  0.00;
prices['Zootopia']['Friday']['6:PM']['FA'][1] =  30.00;
prices['Zootopia']['Friday']['6:PM']['FA'][2] =  60.00;
prices['Zootopia']['Friday']['6:PM']['FA'][3] =  90.00;
prices['Zootopia']['Friday']['6:PM']['FA'][4] =  120.00;
prices['Zootopia']['Friday']['6:PM']['FA'][5] =  150.00;
prices['Zootopia']['Friday']['6:PM']['FA'][6] =  180.00;
prices['Zootopia']['Friday']['6:PM']['FC'] =  new Array();
prices['Zootopia']['Friday']['6:PM']['FC'][0] =  0.00;
prices['Zootopia']['Friday']['6:PM']['FC'][1] =  25.00;
prices['Zootopia']['Friday']['6:PM']['FC'][2] =  50.00;
prices['Zootopia']['Friday']['6:PM']['FC'][3] =  75.00;
prices['Zootopia']['Friday']['6:PM']['FC'][4] =  100.00;
prices['Zootopia']['Friday']['6:PM']['FC'][5] =  125.00;
prices['Zootopia']['Friday']['6:PM']['FC'][6] =  150.00;
prices['Zootopia']['Friday']['6:PM']['BB'] =  new Array();
prices['Zootopia']['Friday']['6:PM']['BB'][0] =  0.00;
prices['Zootopia']['Friday']['6:PM']['BB'][1] =  30.00;
prices['Zootopia']['Friday']['6:PM']['BB'][2] =  60.00;
prices['Zootopia']['Friday']['6:PM']['BB'][3] =  90.00;
prices['Zootopia']['Friday']['6:PM']['BB'][4] =  120.00;
prices['Zootopia']['Friday']['6:PM']['BB'][5] =  150.00;
prices['Zootopia']['Friday']['6:PM']['BB'][6] =  180.00;
prices['Zootopia']['Saturday'] =  new Array();
prices['Zootopia']['Saturday']['12:PM'] =  new Array();
prices['Zootopia']['Saturday']['12:PM']['SA'] =  new Array();
prices['Zootopia']['Saturday']['12:PM']['SA'][0] =  0.00;
prices['Zootopia']['Saturday']['12:PM']['SA'][1] =  18.00;
prices['Zootopia']['Saturday']['12:PM']['SA'][2] =  36.00;
prices['Zootopia']['Saturday']['12:PM']['SA'][3] =  54.00;
prices['Zootopia']['Saturday']['12:PM']['SA'][4] =  72.00;
prices['Zootopia']['Saturday']['12:PM']['SA'][5] =  90.00;
prices['Zootopia']['Saturday']['12:PM']['SA'][6] =  108.00;
prices['Zootopia']['Saturday']['12:PM']['SP'] =  new Array();
prices['Zootopia']['Saturday']['12:PM']['SP'][0] =  0.00;
prices['Zootopia']['Saturday']['12:PM']['SP'][1] =  15.00;
prices['Zootopia']['Saturday']['12:PM']['SP'][2] =  30.00;
prices['Zootopia']['Saturday']['12:PM']['SP'][3] =  45.00;
prices['Zootopia']['Saturday']['12:PM']['SP'][4] =  60.00;
prices['Zootopia']['Saturday']['12:PM']['SP'][5] =  75.00;
prices['Zootopia']['Saturday']['12:PM']['SP'][6] =  90.00;
prices['Zootopia']['Saturday']['12:PM']['SC'] =  new Array();
prices['Zootopia']['Saturday']['12:PM']['SC'][0] =  0.00;
prices['Zootopia']['Saturday']['12:PM']['SC'][1] =  12.00;
prices['Zootopia']['Saturday']['12:PM']['SC'][2] =  24.00;
prices['Zootopia']['Saturday']['12:PM']['SC'][3] =  36.00;
prices['Zootopia']['Saturday']['12:PM']['SC'][4] =  48.00;
prices['Zootopia']['Saturday']['12:PM']['SC'][5] =  60.00;
prices['Zootopia']['Saturday']['12:PM']['SC'][6] =  72.00;
prices['Zootopia']['Saturday']['12:PM']['FA'] =  new Array();
prices['Zootopia']['Saturday']['12:PM']['FA'][0] =  0.00;
prices['Zootopia']['Saturday']['12:PM']['FA'][1] =  30.00;
prices['Zootopia']['Saturday']['12:PM']['FA'][2] =  60.00;
prices['Zootopia']['Saturday']['12:PM']['FA'][3] =  90.00;
prices['Zootopia']['Saturday']['12:PM']['FA'][4] =  120.00;
prices['Zootopia']['Saturday']['12:PM']['FA'][5] =  150.00;
prices['Zootopia']['Saturday']['12:PM']['FA'][6] =  180.00;
prices['Zootopia']['Saturday']['12:PM']['FC'] =  new Array();
prices['Zootopia']['Saturday']['12:PM']['FC'][0] =  0.00;
prices['Zootopia']['Saturday']['12:PM']['FC'][1] =  25.00;
prices['Zootopia']['Saturday']['12:PM']['FC'][2] =  50.00;
prices['Zootopia']['Saturday']['12:PM']['FC'][3] =  75.00;
prices['Zootopia']['Saturday']['12:PM']['FC'][4] =  100.00;
prices['Zootopia']['Saturday']['12:PM']['FC'][5] =  125.00;
prices['Zootopia']['Saturday']['12:PM']['FC'][6] =  150.00;
prices['Zootopia']['Saturday']['12:PM']['BB'] =  new Array();
prices['Zootopia']['Saturday']['12:PM']['BB'][0] =  0.00;
prices['Zootopia']['Saturday']['12:PM']['BB'][1] =  30.00;
prices['Zootopia']['Saturday']['12:PM']['BB'][2] =  60.00;
prices['Zootopia']['Saturday']['12:PM']['BB'][3] =  90.00;
prices['Zootopia']['Saturday']['12:PM']['BB'][4] =  120.00;
prices['Zootopia']['Saturday']['12:PM']['BB'][5] =  150.00;
prices['Zootopia']['Saturday']['12:PM']['BB'][6] =  180.00;
prices['Zootopia']['Sunday'] =  new Array();
prices['Zootopia']['Sunday']['12:PM'] =  new Array();
prices['Zootopia']['Sunday']['12:PM']['SA'] =  new Array();
prices['Zootopia']['Sunday']['12:PM']['SA'][0] =  0.00;
prices['Zootopia']['Sunday']['12:PM']['SA'][1] =  18.00;
prices['Zootopia']['Sunday']['12:PM']['SA'][2] =  36.00;
prices['Zootopia']['Sunday']['12:PM']['SA'][3] =  54.00;
prices['Zootopia']['Sunday']['12:PM']['SA'][4] =  72.00;
prices['Zootopia']['Sunday']['12:PM']['SA'][5] =  90.00;
prices['Zootopia']['Sunday']['12:PM']['SA'][6] =  108.00;
prices['Zootopia']['Sunday']['12:PM']['SP'] =  new Array();
prices['Zootopia']['Sunday']['12:PM']['SP'][0] =  0.00;
prices['Zootopia']['Sunday']['12:PM']['SP'][1] =  15.00;
prices['Zootopia']['Sunday']['12:PM']['SP'][2] =  30.00;
prices['Zootopia']['Sunday']['12:PM']['SP'][3] =  45.00;
prices['Zootopia']['Sunday']['12:PM']['SP'][4] =  60.00;
prices['Zootopia']['Sunday']['12:PM']['SP'][5] =  75.00;
prices['Zootopia']['Sunday']['12:PM']['SP'][6] =  90.00;
prices['Zootopia']['Sunday']['12:PM']['SC'] =  new Array();
prices['Zootopia']['Sunday']['12:PM']['SC'][0] =  0.00;
prices['Zootopia']['Sunday']['12:PM']['SC'][1] =  12.00;
prices['Zootopia']['Sunday']['12:PM']['SC'][2] =  24.00;
prices['Zootopia']['Sunday']['12:PM']['SC'][3] =  36.00;
prices['Zootopia']['Sunday']['12:PM']['SC'][4] =  48.00;
prices['Zootopia']['Sunday']['12:PM']['SC'][5] =  60.00;
prices['Zootopia']['Sunday']['12:PM']['SC'][6] =  72.00;
prices['Zootopia']['Sunday']['12:PM']['FA'] =  new Array();
prices['Zootopia']['Sunday']['12:PM']['FA'][0] =  0.00;
prices['Zootopia']['Sunday']['12:PM']['FA'][1] =  30.00;
prices['Zootopia']['Sunday']['12:PM']['FA'][2] =  60.00;
prices['Zootopia']['Sunday']['12:PM']['FA'][3] =  90.00;
prices['Zootopia']['Sunday']['12:PM']['FA'][4] =  120.00;
prices['Zootopia']['Sunday']['12:PM']['FA'][5] =  150.00;
prices['Zootopia']['Sunday']['12:PM']['FA'][6] =  180.00;
prices['Zootopia']['Sunday']['12:PM']['FC'] =  new Array();
prices['Zootopia']['Sunday']['12:PM']['FC'][0] =  0.00;
prices['Zootopia']['Sunday']['12:PM']['FC'][1] =  25.00;
prices['Zootopia']['Sunday']['12:PM']['FC'][2] =  50.00;
prices['Zootopia']['Sunday']['12:PM']['FC'][3] =  75.00;
prices['Zootopia']['Sunday']['12:PM']['FC'][4] =  100.00;
prices['Zootopia']['Sunday']['12:PM']['FC'][5] =  125.00;
prices['Zootopia']['Sunday']['12:PM']['FC'][6] =  150.00;
prices['Zootopia']['Sunday']['12:PM']['BB'] =  new Array();
prices['Zootopia']['Sunday']['12:PM']['BB'][0] =  0.00;
prices['Zootopia']['Sunday']['12:PM']['BB'][1] =  30.00;
prices['Zootopia']['Sunday']['12:PM']['BB'][2] =  60.00;
prices['Zootopia']['Sunday']['12:PM']['BB'][3] =  90.00;
prices['Zootopia']['Sunday']['12:PM']['BB'][4] =  120.00;
prices['Zootopia']['Sunday']['12:PM']['BB'][5] =  150.00;
prices['Zootopia']['Sunday']['12:PM']['BB'][6] =  180.00;

prices['Mustang'] = new Array();
prices['Mustang']['Monday'] =  new Array();
prices['Mustang']['Monday']['6:PM'] =  new Array();
prices['Mustang']['Monday']['6:PM']['SA'] =  new Array();
prices['Mustang']['Monday']['6:PM']['SA'][0] =  0.00;
prices['Mustang']['Monday']['6:PM']['SA'][1] =  12.00;
prices['Mustang']['Monday']['6:PM']['SA'][2] =  24.00;
prices['Mustang']['Monday']['6:PM']['SA'][3] =  36.00;
prices['Mustang']['Monday']['6:PM']['SA'][4] =  48.00;
prices['Mustang']['Monday']['6:PM']['SA'][5] =  60.00;
prices['Mustang']['Monday']['6:PM']['SA'][6] =  72.00;
prices['Mustang']['Monday']['6:PM']['SP'] =  new Array();
prices['Mustang']['Monday']['6:PM']['SP'][0] =  0.00;
prices['Mustang']['Monday']['6:PM']['SP'][1] =  10.00;
prices['Mustang']['Monday']['6:PM']['SP'][2] =  20.00;
prices['Mustang']['Monday']['6:PM']['SP'][3] =  30.00;
prices['Mustang']['Monday']['6:PM']['SP'][4] =  40.00;
prices['Mustang']['Monday']['6:PM']['SP'][5] =  50.00;
prices['Mustang']['Monday']['6:PM']['SP'][6] =  60.00;
prices['Mustang']['Monday']['6:PM']['SC'] =  new Array();
prices['Mustang']['Monday']['6:PM']['SC'][0] =  0.00;
prices['Mustang']['Monday']['6:PM']['SC'][1] =  8.00;
prices['Mustang']['Monday']['6:PM']['SC'][2] =  16.00;
prices['Mustang']['Monday']['6:PM']['SC'][3] =  24.00;
prices['Mustang']['Monday']['6:PM']['SC'][4] =  32.00;
prices['Mustang']['Monday']['6:PM']['SC'][5] =  40.00;
prices['Mustang']['Monday']['6:PM']['SC'][6] =  48.00;
prices['Mustang']['Monday']['6:PM']['FA'] =  new Array();
prices['Mustang']['Monday']['6:PM']['FA'][0] =  0.00;
prices['Mustang']['Monday']['6:PM']['FA'][1] =  25.00;
prices['Mustang']['Monday']['6:PM']['FA'][2] =  50.00;
prices['Mustang']['Monday']['6:PM']['FA'][3] =  75.00;
prices['Mustang']['Monday']['6:PM']['FA'][4] =  100.00;
prices['Mustang']['Monday']['6:PM']['FA'][5] =  125.00;
prices['Mustang']['Monday']['6:PM']['FA'][6] =  150.00;
prices['Mustang']['Monday']['6:PM']['FC'] =  new Array();
prices['Mustang']['Monday']['6:PM']['FC'][0] =  0.00;
prices['Mustang']['Monday']['6:PM']['FC'][1] =  20.00;
prices['Mustang']['Monday']['6:PM']['FC'][2] =  40.00;
prices['Mustang']['Monday']['6:PM']['FC'][3] =  60.00;
prices['Mustang']['Monday']['6:PM']['FC'][4] =  80.00;
prices['Mustang']['Monday']['6:PM']['FC'][5] =  100.00;
prices['Mustang']['Monday']['6:PM']['FC'][6] =  120.00;
prices['Mustang']['Monday']['6:PM']['BB'] =  new Array();
prices['Mustang']['Monday']['6:PM']['BB'][0] =  0.00;
prices['Mustang']['Monday']['6:PM']['BB'][1] =  20.00;
prices['Mustang']['Monday']['6:PM']['BB'][2] =  40.00;
prices['Mustang']['Monday']['6:PM']['BB'][3] =  60.00;
prices['Mustang']['Monday']['6:PM']['BB'][4] =  80.00;
prices['Mustang']['Monday']['6:PM']['BB'][5] =  100.00;
prices['Mustang']['Monday']['6:PM']['BB'][6] =  120.00;

prices['Mustang']['Tuesday'] =  new Array();
prices['Mustang']['Tuesday']['6:PM'] =  new Array();
prices['Mustang']['Tuesday']['6:PM']['SA'] =  new Array();
prices['Mustang']['Tuesday']['6:PM']['SA'][0] =  0.00;
prices['Mustang']['Tuesday']['6:PM']['SA'][1] =  12.00;
prices['Mustang']['Tuesday']['6:PM']['SA'][2] =  24.00;
prices['Mustang']['Tuesday']['6:PM']['SA'][3] =  36.00;
prices['Mustang']['Tuesday']['6:PM']['SA'][4] =  48.00;
prices['Mustang']['Tuesday']['6:PM']['SA'][5] =  60.00;
prices['Mustang']['Tuesday']['6:PM']['SA'][6] =  72.00;
prices['Mustang']['Tuesday']['6:PM']['SP'] =  new Array();
prices['Mustang']['Tuesday']['6:PM']['SP'][0] =  0.00;
prices['Mustang']['Tuesday']['6:PM']['SP'][1] =  10.00;
prices['Mustang']['Tuesday']['6:PM']['SP'][2] =  20.00;
prices['Mustang']['Tuesday']['6:PM']['SP'][3] =  30.00;
prices['Mustang']['Tuesday']['6:PM']['SP'][4] =  40.00;
prices['Mustang']['Tuesday']['6:PM']['SP'][5] =  50.00;
prices['Mustang']['Tuesday']['6:PM']['SP'][6] =  60.00;
prices['Mustang']['Tuesday']['6:PM']['SC'] =  new Array();
prices['Mustang']['Tuesday']['6:PM']['SC'][0] =  0.00;
prices['Mustang']['Tuesday']['6:PM']['SC'][1] =  8.00;
prices['Mustang']['Tuesday']['6:PM']['SC'][2] =  16.00;
prices['Mustang']['Tuesday']['6:PM']['SC'][3] =  24.00;
prices['Mustang']['Tuesday']['6:PM']['SC'][4] =  32.00;
prices['Mustang']['Tuesday']['6:PM']['SC'][5] =  40.00;
prices['Mustang']['Tuesday']['6:PM']['SC'][6] =  48.00;
prices['Mustang']['Tuesday']['6:PM']['FA'] =  new Array();
prices['Mustang']['Tuesday']['6:PM']['FA'][0] =  0.00;
prices['Mustang']['Tuesday']['6:PM']['FA'][1] =  25.00;
prices['Mustang']['Tuesday']['6:PM']['FA'][2] =  50.00;
prices['Mustang']['Tuesday']['6:PM']['FA'][3] =  75.00;
prices['Mustang']['Tuesday']['6:PM']['FA'][4] =  100.00;
prices['Mustang']['Tuesday']['6:PM']['FA'][5] =  125.00;
prices['Mustang']['Tuesday']['6:PM']['FA'][6] =  150.00;
prices['Mustang']['Tuesday']['6:PM']['FC'] =  new Array();
prices['Mustang']['Tuesday']['6:PM']['FC'][0] =  0.00;
prices['Mustang']['Tuesday']['6:PM']['FC'][1] =  20.00;
prices['Mustang']['Tuesday']['6:PM']['FC'][2] =  40.00;
prices['Mustang']['Tuesday']['6:PM']['FC'][3] =  60.00;
prices['Mustang']['Tuesday']['6:PM']['FC'][4] =  80.00;
prices['Mustang']['Tuesday']['6:PM']['FC'][5] =  100.00;
prices['Mustang']['Tuesday']['6:PM']['FC'][6] =  120.00;
prices['Mustang']['Tuesday']['6:PM']['BB'] =  new Array();
prices['Mustang']['Tuesday']['6:PM']['BB'][0] =  0.00;
prices['Mustang']['Tuesday']['6:PM']['BB'][1] =  20.00;
prices['Mustang']['Tuesday']['6:PM']['BB'][2] =  40.00;
prices['Mustang']['Tuesday']['6:PM']['BB'][3] =  60.00;
prices['Mustang']['Tuesday']['6:PM']['BB'][4] =  80.00;
prices['Mustang']['Tuesday']['6:PM']['BB'][5] =  100.00;
prices['Mustang']['Tuesday']['6:PM']['BB'][6] =  120.00;

prices['Mustang']['Saturday'] =  new Array();
prices['Mustang']['Saturday']['3:PM'] =  new Array();
prices['Mustang']['Saturday']['3:PM']['SA'] =  new Array();
prices['Mustang']['Saturday']['3:PM']['SA'][0] =  0.00;
prices['Mustang']['Saturday']['3:PM']['SA'][1] =  18.00;
prices['Mustang']['Saturday']['3:PM']['SA'][2] =  36.00;
prices['Mustang']['Saturday']['3:PM']['SA'][3] =  54.00;
prices['Mustang']['Saturday']['3:PM']['SA'][4] =  72.00;
prices['Mustang']['Saturday']['3:PM']['SA'][5] =  90.00;
prices['Mustang']['Saturday']['3:PM']['SA'][6] =  108.00;
prices['Mustang']['Saturday']['3:PM']['SP'] =  new Array();
prices['Mustang']['Saturday']['3:PM']['SP'][0] =  0.00;
prices['Mustang']['Saturday']['3:PM']['SP'][1] =  15.00;
prices['Mustang']['Saturday']['3:PM']['SP'][2] =  30.00;
prices['Mustang']['Saturday']['3:PM']['SP'][3] =  45.00;
prices['Mustang']['Saturday']['3:PM']['SP'][4] =  60.00;
prices['Mustang']['Saturday']['3:PM']['SP'][5] =  75.00;
prices['Mustang']['Saturday']['3:PM']['SP'][6] =  90.00;
prices['Mustang']['Saturday']['3:PM']['SC'] =  new Array();
prices['Mustang']['Saturday']['3:PM']['SC'][0] =  0.00;
prices['Mustang']['Saturday']['3:PM']['SC'][1] =  12.00;
prices['Mustang']['Saturday']['3:PM']['SC'][2] =  24.00;
prices['Mustang']['Saturday']['3:PM']['SC'][3] =  36.00;
prices['Mustang']['Saturday']['3:PM']['SC'][4] =  48.00;
prices['Mustang']['Saturday']['3:PM']['SC'][5] =  60.00;
prices['Mustang']['Saturday']['3:PM']['SC'][6] =  72.00;
prices['Mustang']['Saturday']['3:PM']['FA'] =  new Array();
prices['Mustang']['Saturday']['3:PM']['FA'][0] =  0.00;
prices['Mustang']['Saturday']['3:PM']['FA'][1] =  30.00;
prices['Mustang']['Saturday']['3:PM']['FA'][2] =  60.00;
prices['Mustang']['Saturday']['3:PM']['FA'][3] =  90.00;
prices['Mustang']['Saturday']['3:PM']['FA'][4] =  120.00;
prices['Mustang']['Saturday']['3:PM']['FA'][5] =  150.00;
prices['Mustang']['Saturday']['3:PM']['FA'][6] =  180.00;
prices['Mustang']['Saturday']['3:PM']['FC'] =  new Array();
prices['Mustang']['Saturday']['3:PM']['FC'][0] =  0.00;
prices['Mustang']['Saturday']['3:PM']['FC'][1] =  25.00;
prices['Mustang']['Saturday']['3:PM']['FC'][2] =  50.00;
prices['Mustang']['Saturday']['3:PM']['FC'][3] =  75.00;
prices['Mustang']['Saturday']['3:PM']['FC'][4] =  100.00;
prices['Mustang']['Saturday']['3:PM']['FC'][5] =  125.00;
prices['Mustang']['Saturday']['3:PM']['FC'][6] =  150.00;
prices['Mustang']['Saturday']['3:PM']['BB'] =  new Array();
prices['Mustang']['Saturday']['3:PM']['BB'][0] =  0.00;
prices['Mustang']['Saturday']['3:PM']['BB'][1] =  30.00;
prices['Mustang']['Saturday']['3:PM']['BB'][2] =  60.00;
prices['Mustang']['Saturday']['3:PM']['BB'][3] =  90.00;
prices['Mustang']['Saturday']['3:PM']['BB'][4] =  120.00;
prices['Mustang']['Saturday']['3:PM']['BB'][5] =  150.00;
prices['Mustang']['Saturday']['3:PM']['BB'][6] =  180.00;
prices['Mustang']['Sunday'] =  new Array();
prices['Mustang']['Sunday']['3:PM'] =  new Array();
prices['Mustang']['Sunday']['3:PM']['SA'] =  new Array();
prices['Mustang']['Sunday']['3:PM']['SA'][0] =  0.00;
prices['Mustang']['Sunday']['3:PM']['SA'][1] =  18.00;
prices['Mustang']['Sunday']['3:PM']['SA'][2] =  36.00;
prices['Mustang']['Sunday']['3:PM']['SA'][3] =  54.00;
prices['Mustang']['Sunday']['3:PM']['SA'][4] =  72.00;
prices['Mustang']['Sunday']['3:PM']['SA'][5] =  90.00;
prices['Mustang']['Sunday']['3:PM']['SA'][6] =  108.00;
prices['Mustang']['Sunday']['3:PM']['SP'] =  new Array();
prices['Mustang']['Sunday']['3:PM']['SP'][0] =  0.00;
prices['Mustang']['Sunday']['3:PM']['SP'][1] =  15.00;
prices['Mustang']['Sunday']['3:PM']['SP'][2] =  30.00;
prices['Mustang']['Sunday']['3:PM']['SP'][3] =  45.00;
prices['Mustang']['Sunday']['3:PM']['SP'][4] =  60.00;
prices['Mustang']['Sunday']['3:PM']['SP'][5] =  75.00;
prices['Mustang']['Sunday']['3:PM']['SP'][6] =  90.00;
prices['Mustang']['Sunday']['3:PM']['SC'] =  new Array();
prices['Mustang']['Sunday']['3:PM']['SC'][0] =  0.00;
prices['Mustang']['Sunday']['3:PM']['SC'][1] =  12.00;
prices['Mustang']['Sunday']['3:PM']['SC'][2] =  24.00;
prices['Mustang']['Sunday']['3:PM']['SC'][3] =  36.00;
prices['Mustang']['Sunday']['3:PM']['SC'][4] =  48.00;
prices['Mustang']['Sunday']['3:PM']['SC'][5] =  60.00;
prices['Mustang']['Sunday']['3:PM']['SC'][6] =  72.00;
prices['Mustang']['Sunday']['3:PM']['FA'] =  new Array();
prices['Mustang']['Sunday']['3:PM']['FA'][0] =  0.00;
prices['Mustang']['Sunday']['3:PM']['FA'][1] =  30.00;
prices['Mustang']['Sunday']['3:PM']['FA'][2] =  60.00;
prices['Mustang']['Sunday']['3:PM']['FA'][3] =  90.00;
prices['Mustang']['Sunday']['3:PM']['FA'][4] =  120.00;
prices['Mustang']['Sunday']['3:PM']['FA'][5] =  150.00;
prices['Mustang']['Sunday']['3:PM']['FA'][6] =  180.00;
prices['Mustang']['Sunday']['3:PM']['FC'] =  new Array();
prices['Mustang']['Sunday']['3:PM']['FC'][0] =  0.00;
prices['Mustang']['Sunday']['3:PM']['FC'][1] =  25.00;
prices['Mustang']['Sunday']['3:PM']['FC'][2] =  50.00;
prices['Mustang']['Sunday']['3:PM']['FC'][3] =  75.00;
prices['Mustang']['Sunday']['3:PM']['FC'][4] =  100.00;
prices['Mustang']['Sunday']['3:PM']['FC'][5] =  125.00;
prices['Mustang']['Sunday']['3:PM']['FC'][6] =  150.00;
prices['Mustang']['Sunday']['3:PM']['BB'] =  new Array();
prices['Mustang']['Sunday']['3:PM']['BB'][0] =  0.00;
prices['Mustang']['Sunday']['3:PM']['BB'][1] =  30.00;
prices['Mustang']['Sunday']['3:PM']['BB'][2] =  60.00;
prices['Mustang']['Sunday']['3:PM']['BB'][3] =  90.00;
prices['Mustang']['Sunday']['3:PM']['BB'][4] =  120.00;
prices['Mustang']['Sunday']['3:PM']['BB'][5] =  150.00;
prices['Mustang']['Sunday']['3:PM']['BB'][6] =  180.00;

prices['Kii&Kaa'] = new Array();
prices['Kii&Kaa']['Monday'] =  new Array();
prices['Kii&Kaa']['Monday']['9:PM'] =  new Array();
prices['Kii&Kaa']['Monday']['9:PM']['SA'] =  new Array();
prices['Kii&Kaa']['Monday']['9:PM']['SA'][0] =  0.00;
prices['Kii&Kaa']['Monday']['9:PM']['SA'][1] =  12.00;
prices['Kii&Kaa']['Monday']['9:PM']['SA'][2] =  24.00;
prices['Kii&Kaa']['Monday']['9:PM']['SA'][3] =  36.00;
prices['Kii&Kaa']['Monday']['9:PM']['SA'][4] =  48.00;
prices['Kii&Kaa']['Monday']['9:PM']['SA'][5] =  60.00;
prices['Kii&Kaa']['Monday']['9:PM']['SA'][6] =  72.00;
prices['Kii&Kaa']['Monday']['9:PM']['SP'] =  new Array();
prices['Kii&Kaa']['Monday']['9:PM']['SP'][0] =  0.00;
prices['Kii&Kaa']['Monday']['9:PM']['SP'][1] =  10.00;
prices['Kii&Kaa']['Monday']['9:PM']['SP'][2] =  20.00;
prices['Kii&Kaa']['Monday']['9:PM']['SP'][3] =  30.00;
prices['Kii&Kaa']['Monday']['9:PM']['SP'][4] =  40.00;
prices['Kii&Kaa']['Monday']['9:PM']['SP'][5] =  50.00;
prices['Kii&Kaa']['Monday']['9:PM']['SP'][6] =  60.00;
prices['Kii&Kaa']['Monday']['9:PM']['SC'] =  new Array();
prices['Kii&Kaa']['Monday']['9:PM']['SC'][0] =  0.00;
prices['Kii&Kaa']['Monday']['9:PM']['SC'][1] =  8.00;
prices['Kii&Kaa']['Monday']['9:PM']['SC'][2] =  16.00;
prices['Kii&Kaa']['Monday']['9:PM']['SC'][3] =  24.00;
prices['Kii&Kaa']['Monday']['9:PM']['SC'][4] =  32.00;
prices['Kii&Kaa']['Monday']['9:PM']['SC'][5] =  40.00;
prices['Kii&Kaa']['Monday']['9:PM']['SC'][6] =  48.00;
prices['Kii&Kaa']['Monday']['9:PM']['FA'] =  new Array();
prices['Kii&Kaa']['Monday']['9:PM']['FA'][0] =  0.00;
prices['Kii&Kaa']['Monday']['9:PM']['FA'][1] =  25.00;
prices['Kii&Kaa']['Monday']['9:PM']['FA'][2] =  50.00;
prices['Kii&Kaa']['Monday']['9:PM']['FA'][3] =  75.00;
prices['Kii&Kaa']['Monday']['9:PM']['FA'][4] =  100.00;
prices['Kii&Kaa']['Monday']['9:PM']['FA'][5] =  125.00;
prices['Kii&Kaa']['Monday']['9:PM']['FA'][6] =  150.00;
prices['Kii&Kaa']['Monday']['9:PM']['FC'] =  new Array();
prices['Kii&Kaa']['Monday']['9:PM']['FC'][0] =  0.00;
prices['Kii&Kaa']['Monday']['9:PM']['FC'][1] =  20.00;
prices['Kii&Kaa']['Monday']['9:PM']['FC'][2] =  40.00;
prices['Kii&Kaa']['Monday']['9:PM']['FC'][3] =  60.00;
prices['Kii&Kaa']['Monday']['9:PM']['FC'][4] =  80.00;
prices['Kii&Kaa']['Monday']['9:PM']['FC'][5] =  100.00;
prices['Kii&Kaa']['Monday']['9:PM']['FC'][6] =  120.00;
prices['Kii&Kaa']['Monday']['9:PM']['BB'] =  new Array();
prices['Kii&Kaa']['Monday']['9:PM']['BB'][0] =  0.00;
prices['Kii&Kaa']['Monday']['9:PM']['BB'][1] =  20.00;
prices['Kii&Kaa']['Monday']['9:PM']['BB'][2] =  40.00;
prices['Kii&Kaa']['Monday']['9:PM']['BB'][3] =  60.00;
prices['Kii&Kaa']['Monday']['9:PM']['BB'][4] =  80.00;
prices['Kii&Kaa']['Monday']['9:PM']['BB'][5] =  100.00;
prices['Kii&Kaa']['Monday']['9:PM']['BB'][6] =  120.00;

prices['Kii&Kaa']['Tuesday'] =  new Array();
prices['Kii&Kaa']['Tuesday']['9:PM'] =  new Array();
prices['Kii&Kaa']['Tuesday']['9:PM']['SA'] =  new Array();
prices['Kii&Kaa']['Tuesday']['9:PM']['SA'][0] =  0.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SA'][1] =  12.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SA'][2] =  24.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SA'][3] =  36.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SA'][4] =  48.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SA'][5] =  60.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SA'][6] =  72.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SP'] =  new Array();
prices['Kii&Kaa']['Tuesday']['9:PM']['SP'][0] =  0.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SP'][1] =  10.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SP'][2] =  20.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SP'][3] =  30.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SP'][4] =  40.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SP'][5] =  50.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SP'][6] =  60.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SC'] =  new Array();
prices['Kii&Kaa']['Tuesday']['9:PM']['SC'][0] =  0.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SC'][1] =  8.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SC'][2] =  16.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SC'][3] =  24.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SC'][4] =  32.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SC'][5] =  40.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['SC'][6] =  48.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FA'] =  new Array();
prices['Kii&Kaa']['Tuesday']['9:PM']['FA'][0] =  0.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FA'][1] =  25.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FA'][2] =  50.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FA'][3] =  75.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FA'][4] =  100.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FA'][5] =  125.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FA'][6] =  150.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FC'] =  new Array();
prices['Kii&Kaa']['Tuesday']['9:PM']['FC'][0] =  0.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FC'][1] =  20.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FC'][2] =  40.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FC'][3] =  60.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FC'][4] =  80.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FC'][5] =  100.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['FC'][6] =  120.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['BB'] =  new Array();
prices['Kii&Kaa']['Tuesday']['9:PM']['BB'][0] =  0.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['BB'][1] =  20.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['BB'][2] =  40.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['BB'][3] =  60.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['BB'][4] =  80.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['BB'][5] =  100.00;
prices['Kii&Kaa']['Tuesday']['9:PM']['BB'][6] =  120.00;

prices['Kii&Kaa']['Wednesday'] =  new Array();
prices['Kii&Kaa']['Wednesday']['1:PM'] =  new Array();
prices['Kii&Kaa']['Wednesday']['1:PM']['SA'] =  new Array();
prices['Kii&Kaa']['Wednesday']['1:PM']['SA'][0] =  0.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SA'][1] =  12.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SA'][2] =  24.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SA'][3] =  36.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SA'][4] =  48.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SA'][5] =  60.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SA'][6] =  72.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SP'] =  new Array();
prices['Kii&Kaa']['Wednesday']['1:PM']['SP'][0] =  0.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SP'][1] =  10.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SP'][2] =  20.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SP'][3] =  30.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SP'][4] =  40.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SP'][5] =  50.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SP'][6] =  60.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SC'] =  new Array();
prices['Kii&Kaa']['Wednesday']['1:PM']['SC'][0] =  0.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SC'][1] =  8.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SC'][2] =  16.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SC'][3] =  24.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SC'][4] =  32.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SC'][5] =  40.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['SC'][6] =  48.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FA'] =  new Array();
prices['Kii&Kaa']['Wednesday']['1:PM']['FA'][0] =  0.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FA'][1] =  25.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FA'][2] =  50.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FA'][3] =  75.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FA'][4] =  100.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FA'][5] =  125.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FA'][6] =  150.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FC'] =  new Array();
prices['Kii&Kaa']['Wednesday']['1:PM']['FC'][0] =  0.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FC'][1] =  20.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FC'][2] =  40.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FC'][3] =  60.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FC'][4] =  80.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FC'][5] =  100.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['FC'][6] =  120.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['BB'] =  new Array();
prices['Kii&Kaa']['Wednesday']['1:PM']['BB'][0] =  0.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['BB'][1] =  20.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['BB'][2] =  40.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['BB'][3] =  60.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['BB'][4] =  80.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['BB'][5] =  100.00;
prices['Kii&Kaa']['Wednesday']['1:PM']['BB'][6] =  120.00;
prices['Kii&Kaa']['Thursday'] =  new Array();
prices['Kii&Kaa']['Thursday']['1:PM'] =  new Array();
prices['Kii&Kaa']['Thursday']['1:PM']['SA'] =  new Array();
prices['Kii&Kaa']['Thursday']['1:PM']['SA'][0] =  0.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SA'][1] =  12.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SA'][2] =  24.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SA'][3] =  36.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SA'][4] =  48.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SA'][5] =  60.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SA'][6] =  72.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SP'] =  new Array();
prices['Kii&Kaa']['Thursday']['1:PM']['SP'][0] =  0.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SP'][1] =  10.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SP'][2] =  20.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SP'][3] =  30.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SP'][4] =  40.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SP'][5] =  50.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SP'][6] =  60.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SC'] =  new Array();
prices['Kii&Kaa']['Thursday']['1:PM']['SC'][0] =  0.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SC'][1] =  8.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SC'][2] =  16.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SC'][3] =  24.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SC'][4] =  32.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SC'][5] =  40.00;
prices['Kii&Kaa']['Thursday']['1:PM']['SC'][6] =  48.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FA'] =  new Array();
prices['Kii&Kaa']['Thursday']['1:PM']['FA'][0] =  0.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FA'][1] =  25.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FA'][2] =  50.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FA'][3] =  75.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FA'][4] =  100.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FA'][5] =  125.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FA'][6] =  150.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FC'] =  new Array();
prices['Kii&Kaa']['Thursday']['1:PM']['FC'][0] =  0.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FC'][1] =  20.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FC'][2] =  40.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FC'][3] =  60.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FC'][4] =  80.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FC'][5] =  100.00;
prices['Kii&Kaa']['Thursday']['1:PM']['FC'][6] =  120.00;
prices['Kii&Kaa']['Thursday']['1:PM']['BB'] =  new Array();
prices['Kii&Kaa']['Thursday']['1:PM']['BB'][0] =  0.00;
prices['Kii&Kaa']['Thursday']['1:PM']['BB'][1] =  20.00;
prices['Kii&Kaa']['Thursday']['1:PM']['BB'][2] =  40.00;
prices['Kii&Kaa']['Thursday']['1:PM']['BB'][3] =  60.00;
prices['Kii&Kaa']['Thursday']['1:PM']['BB'][4] =  80.00;
prices['Kii&Kaa']['Thursday']['1:PM']['BB'][5] =  100.00;
prices['Kii&Kaa']['Thursday']['1:PM']['BB'][6] =  120.00;
prices['Kii&Kaa']['Friday'] =  new Array();
prices['Kii&Kaa']['Friday']['1:PM'] =  new Array();
prices['Kii&Kaa']['Friday']['1:PM']['SA'] =  new Array();
prices['Kii&Kaa']['Friday']['1:PM']['SA'][0] =  0.00;
prices['Kii&Kaa']['Friday']['1:PM']['SA'][1] =  12.00;
prices['Kii&Kaa']['Friday']['1:PM']['SA'][2] =  24.00;
prices['Kii&Kaa']['Friday']['1:PM']['SA'][3] =  36.00;
prices['Kii&Kaa']['Friday']['1:PM']['SA'][4] =  48.00;
prices['Kii&Kaa']['Friday']['1:PM']['SA'][5] =  60.00;
prices['Kii&Kaa']['Friday']['1:PM']['SA'][6] =  72.00;
prices['Kii&Kaa']['Friday']['1:PM']['SP'] =  new Array();
prices['Kii&Kaa']['Friday']['1:PM']['SP'][0] =  0.00;
prices['Kii&Kaa']['Friday']['1:PM']['SP'][1] =  10.00;
prices['Kii&Kaa']['Friday']['1:PM']['SP'][2] =  20.00;
prices['Kii&Kaa']['Friday']['1:PM']['SP'][3] =  30.00;
prices['Kii&Kaa']['Friday']['1:PM']['SP'][4] =  40.00;
prices['Kii&Kaa']['Friday']['1:PM']['SP'][5] =  50.00;
prices['Kii&Kaa']['Friday']['1:PM']['SP'][6] =  60.00;
prices['Kii&Kaa']['Friday']['1:PM']['SC'] =  new Array();
prices['Kii&Kaa']['Friday']['1:PM']['SC'][0] =  0.00;
prices['Kii&Kaa']['Friday']['1:PM']['SC'][1] =  8.00;
prices['Kii&Kaa']['Friday']['1:PM']['SC'][2] =  16.00;
prices['Kii&Kaa']['Friday']['1:PM']['SC'][3] =  24.00;
prices['Kii&Kaa']['Friday']['1:PM']['SC'][4] =  32.00;
prices['Kii&Kaa']['Friday']['1:PM']['SC'][5] =  40.00;
prices['Kii&Kaa']['Friday']['1:PM']['SC'][6] =  48.00;
prices['Kii&Kaa']['Friday']['1:PM']['FA'] =  new Array();
prices['Kii&Kaa']['Friday']['1:PM']['FA'][0] =  0.00;
prices['Kii&Kaa']['Friday']['1:PM']['FA'][1] =  25.00;
prices['Kii&Kaa']['Friday']['1:PM']['FA'][2] =  50.00;
prices['Kii&Kaa']['Friday']['1:PM']['FA'][3] =  75.00;
prices['Kii&Kaa']['Friday']['1:PM']['FA'][4] =  100.00;
prices['Kii&Kaa']['Friday']['1:PM']['FA'][5] =  125.00;
prices['Kii&Kaa']['Friday']['1:PM']['FA'][6] =  150.00;
prices['Kii&Kaa']['Friday']['1:PM']['FC'] =  new Array();
prices['Kii&Kaa']['Friday']['1:PM']['FC'][0] =  0.00;
prices['Kii&Kaa']['Friday']['1:PM']['FC'][1] =  20.00;
prices['Kii&Kaa']['Friday']['1:PM']['FC'][2] =  40.00;
prices['Kii&Kaa']['Friday']['1:PM']['FC'][3] =  60.00;
prices['Kii&Kaa']['Friday']['1:PM']['FC'][4] =  80.00;
prices['Kii&Kaa']['Friday']['1:PM']['FC'][5] =  100.00;
prices['Kii&Kaa']['Friday']['1:PM']['FC'][6] =  120.00;
prices['Kii&Kaa']['Friday']['1:PM']['BB'] =  new Array();
prices['Kii&Kaa']['Friday']['1:PM']['BB'][0] =  0.00;
prices['Kii&Kaa']['Friday']['1:PM']['BB'][1] =  20.00;
prices['Kii&Kaa']['Friday']['1:PM']['BB'][2] =  40.00;
prices['Kii&Kaa']['Friday']['1:PM']['BB'][3] =  60.00;
prices['Kii&Kaa']['Friday']['1:PM']['BB'][4] =  80.00;
prices['Kii&Kaa']['Friday']['1:PM']['BB'][5] =  100.00;
prices['Kii&Kaa']['Friday']['1:PM']['BB'][6] =  120.00;
prices['Kii&Kaa']['Saturday'] =  new Array();
prices['Kii&Kaa']['Saturday']['6:PM'] =  new Array();
prices['Kii&Kaa']['Saturday']['6:PM']['SA'] =  new Array();
prices['Kii&Kaa']['Saturday']['6:PM']['SA'][0] =  0.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SA'][1] =  18.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SA'][2] =  36.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SA'][3] =  54.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SA'][4] =  72.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SA'][5] =  90.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SA'][6] =  108.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SP'] =  new Array();
prices['Kii&Kaa']['Saturday']['6:PM']['SP'][0] =  0.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SP'][1] =  15.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SP'][2] =  30.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SP'][3] =  45.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SP'][4] =  60.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SP'][5] =  75.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SP'][6] =  90.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SC'] =  new Array();
prices['Kii&Kaa']['Saturday']['6:PM']['SC'][0] =  0.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SC'][1] =  12.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SC'][2] =  24.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SC'][3] =  36.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SC'][4] =  48.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SC'][5] =  60.00;
prices['Kii&Kaa']['Saturday']['6:PM']['SC'][6] =  72.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FA'] =  new Array();
prices['Kii&Kaa']['Saturday']['6:PM']['FA'][0] =  0.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FA'][1] =  30.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FA'][2] =  60.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FA'][3] =  90.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FA'][4] =  120.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FA'][5] =  150.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FA'][6] =  180.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FC'] =  new Array();
prices['Kii&Kaa']['Saturday']['6:PM']['FC'][0] =  0.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FC'][1] =  25.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FC'][2] =  50.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FC'][3] =  75.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FC'][4] =  100.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FC'][5] =  125.00;
prices['Kii&Kaa']['Saturday']['6:PM']['FC'][6] =  150.00;
prices['Kii&Kaa']['Saturday']['6:PM']['BB'] =  new Array();
prices['Kii&Kaa']['Saturday']['6:PM']['BB'][0] =  0.00;
prices['Kii&Kaa']['Saturday']['6:PM']['BB'][1] =  30.00;
prices['Kii&Kaa']['Saturday']['6:PM']['BB'][2] =  60.00;
prices['Kii&Kaa']['Saturday']['6:PM']['BB'][3] =  90.00;
prices['Kii&Kaa']['Saturday']['6:PM']['BB'][4] =  120.00;
prices['Kii&Kaa']['Saturday']['6:PM']['BB'][5] =  150.00;
prices['Kii&Kaa']['Saturday']['6:PM']['BB'][6] =  180.00;
prices['Kii&Kaa']['Sunday'] =  new Array();
prices['Kii&Kaa']['Sunday']['6:PM'] =  new Array();
prices['Kii&Kaa']['Sunday']['6:PM']['SA'] =  new Array();
prices['Kii&Kaa']['Sunday']['6:PM']['SA'][0] =  0.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SA'][1] =  18.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SA'][2] =  36.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SA'][3] =  54.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SA'][4] =  72.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SA'][5] =  90.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SA'][6] =  108.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SP'] =  new Array();
prices['Kii&Kaa']['Sunday']['6:PM']['SP'][0] =  0.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SP'][1] =  15.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SP'][2] =  30.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SP'][3] =  45.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SP'][4] =  60.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SP'][5] =  75.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SP'][6] =  90.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SC'] =  new Array();
prices['Kii&Kaa']['Sunday']['6:PM']['SC'][0] =  0.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SC'][1] =  12.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SC'][2] =  24.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SC'][3] =  36.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SC'][4] =  48.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SC'][5] =  60.00;
prices['Kii&Kaa']['Sunday']['6:PM']['SC'][6] =  72.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FA'] =  new Array();
prices['Kii&Kaa']['Sunday']['6:PM']['FA'][0] =  0.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FA'][1] =  30.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FA'][2] =  60.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FA'][3] =  90.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FA'][4] =  120.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FA'][5] =  150.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FA'][6] =  180.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FC'] =  new Array();
prices['Kii&Kaa']['Sunday']['6:PM']['FC'][0] =  0.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FC'][1] =  25.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FC'][2] =  50.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FC'][3] =  75.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FC'][4] =  100.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FC'][5] =  125.00;
prices['Kii&Kaa']['Sunday']['6:PM']['FC'][6] =  150.00;
prices['Kii&Kaa']['Sunday']['6:PM']['BB'] =  new Array();
prices['Kii&Kaa']['Sunday']['6:PM']['BB'][0] =  0.00;
prices['Kii&Kaa']['Sunday']['6:PM']['BB'][1] =  30.00;
prices['Kii&Kaa']['Sunday']['6:PM']['BB'][2] =  60.00;
prices['Kii&Kaa']['Sunday']['6:PM']['BB'][3] =  90.00;
prices['Kii&Kaa']['Sunday']['6:PM']['BB'][4] =  120.00;
prices['Kii&Kaa']['Sunday']['6:PM']['BB'][5] =  150.00;
prices['Kii&Kaa']['Sunday']['6:PM']['BB'][6] =  180.00;


prices['Grimsby'] = new Array();

prices['Grimsby']['Wednesday'] =  new Array();
prices['Grimsby']['Wednesday']['9:PM'] =  new Array();
prices['Grimsby']['Wednesday']['9:PM']['SA'] =  new Array();
prices['Grimsby']['Wednesday']['9:PM']['SA'][0] =  0.00;
prices['Grimsby']['Wednesday']['9:PM']['SA'][1] =  18.00;
prices['Grimsby']['Wednesday']['9:PM']['SA'][2] =  36.00;
prices['Grimsby']['Wednesday']['9:PM']['SA'][3] =  54.00;
prices['Grimsby']['Wednesday']['9:PM']['SA'][4] =  72.00;
prices['Grimsby']['Wednesday']['9:PM']['SA'][5] =  90.00;
prices['Grimsby']['Wednesday']['9:PM']['SA'][6] =  108.00;
prices['Grimsby']['Wednesday']['9:PM']['SP'] =  new Array();
prices['Grimsby']['Wednesday']['9:PM']['SP'][0] =  0.00;
prices['Grimsby']['Wednesday']['9:PM']['SP'][1] =  15.00;
prices['Grimsby']['Wednesday']['9:PM']['SP'][2] =  30.00;
prices['Grimsby']['Wednesday']['9:PM']['SP'][3] =  45.00;
prices['Grimsby']['Wednesday']['9:PM']['SP'][4] =  60.00;
prices['Grimsby']['Wednesday']['9:PM']['SP'][5] =  75.00;
prices['Grimsby']['Wednesday']['9:PM']['SP'][6] =  90.00;
prices['Grimsby']['Wednesday']['9:PM']['SC'] =  new Array();
prices['Grimsby']['Wednesday']['9:PM']['SC'][0] =  0.00;
prices['Grimsby']['Wednesday']['9:PM']['SC'][1] =  12.00;
prices['Grimsby']['Wednesday']['9:PM']['SC'][2] =  24.00;
prices['Grimsby']['Wednesday']['9:PM']['SC'][3] =  36.00;
prices['Grimsby']['Wednesday']['9:PM']['SC'][4] =  48.00;
prices['Grimsby']['Wednesday']['9:PM']['SC'][5] =  60.00;
prices['Grimsby']['Wednesday']['9:PM']['SC'][6] =  72.00;
prices['Grimsby']['Wednesday']['9:PM']['FA'] =  new Array();
prices['Grimsby']['Wednesday']['9:PM']['FA'][0] =  0.00;
prices['Grimsby']['Wednesday']['9:PM']['FA'][1] =  30.00;
prices['Grimsby']['Wednesday']['9:PM']['FA'][2] =  60.00;
prices['Grimsby']['Wednesday']['9:PM']['FA'][3] =  90.00;
prices['Grimsby']['Wednesday']['9:PM']['FA'][4] =  120.00;
prices['Grimsby']['Wednesday']['9:PM']['FA'][5] =  150.00;
prices['Grimsby']['Wednesday']['9:PM']['FA'][6] =  180.00;
prices['Grimsby']['Wednesday']['9:PM']['FC'] =  new Array();
prices['Grimsby']['Wednesday']['9:PM']['FC'][0] =  0.00;
prices['Grimsby']['Wednesday']['9:PM']['FC'][1] =  25.00;
prices['Grimsby']['Wednesday']['9:PM']['FC'][2] =  50.00;
prices['Grimsby']['Wednesday']['9:PM']['FC'][3] =  75.00;
prices['Grimsby']['Wednesday']['9:PM']['FC'][4] =  100.00;
prices['Grimsby']['Wednesday']['9:PM']['FC'][5] =  125.00;
prices['Grimsby']['Wednesday']['9:PM']['FC'][6] =  150.00;
prices['Grimsby']['Wednesday']['9:PM']['BB'] =  new Array();
prices['Grimsby']['Wednesday']['9:PM']['BB'][0] =  0.00;
prices['Grimsby']['Wednesday']['9:PM']['BB'][1] =  30.00;
prices['Grimsby']['Wednesday']['9:PM']['BB'][2] =  60.00;
prices['Grimsby']['Wednesday']['9:PM']['BB'][3] =  90.00;
prices['Grimsby']['Wednesday']['9:PM']['BB'][4] =  120.00;
prices['Grimsby']['Wednesday']['9:PM']['BB'][5] =  150.00;
prices['Grimsby']['Wednesday']['9:PM']['BB'][6] =  180.00;
prices['Grimsby']['Thursday'] =  new Array();
prices['Grimsby']['Thursday']['9:PM'] =  new Array();
prices['Grimsby']['Thursday']['9:PM']['SA'] =  new Array();
prices['Grimsby']['Thursday']['9:PM']['SA'][0] =  0.00;
prices['Grimsby']['Thursday']['9:PM']['SA'][1] =  18.00;
prices['Grimsby']['Thursday']['9:PM']['SA'][2] =  36.00;
prices['Grimsby']['Thursday']['9:PM']['SA'][3] =  54.00;
prices['Grimsby']['Thursday']['9:PM']['SA'][4] =  72.00;
prices['Grimsby']['Thursday']['9:PM']['SA'][5] =  90.00;
prices['Grimsby']['Thursday']['9:PM']['SA'][6] =  108.00;
prices['Grimsby']['Thursday']['9:PM']['SP'] =  new Array();
prices['Grimsby']['Thursday']['9:PM']['SP'][0] =  0.00;
prices['Grimsby']['Thursday']['9:PM']['SP'][1] =  15.00;
prices['Grimsby']['Thursday']['9:PM']['SP'][2] =  30.00;
prices['Grimsby']['Thursday']['9:PM']['SP'][3] =  45.00;
prices['Grimsby']['Thursday']['9:PM']['SP'][4] =  60.00;
prices['Grimsby']['Thursday']['9:PM']['SP'][5] =  75.00;
prices['Grimsby']['Thursday']['9:PM']['SP'][6] =  90.00;
prices['Grimsby']['Thursday']['9:PM']['SC'] =  new Array();
prices['Grimsby']['Thursday']['9:PM']['SC'][0] =  0.00;
prices['Grimsby']['Thursday']['9:PM']['SC'][1] =  12.00;
prices['Grimsby']['Thursday']['9:PM']['SC'][2] =  24.00;
prices['Grimsby']['Thursday']['9:PM']['SC'][3] =  36.00;
prices['Grimsby']['Thursday']['9:PM']['SC'][4] =  48.00;
prices['Grimsby']['Thursday']['9:PM']['SC'][5] =  60.00;
prices['Grimsby']['Thursday']['9:PM']['SC'][6] =  72.00;
prices['Grimsby']['Thursday']['9:PM']['FA'] =  new Array();
prices['Grimsby']['Thursday']['9:PM']['FA'][0] =  0.00;
prices['Grimsby']['Thursday']['9:PM']['FA'][1] =  30.00;
prices['Grimsby']['Thursday']['9:PM']['FA'][2] =  60.00;
prices['Grimsby']['Thursday']['9:PM']['FA'][3] =  90.00;
prices['Grimsby']['Thursday']['9:PM']['FA'][4] =  120.00;
prices['Grimsby']['Thursday']['9:PM']['FA'][5] =  150.00;
prices['Grimsby']['Thursday']['9:PM']['FA'][6] =  180.00;
prices['Grimsby']['Thursday']['9:PM']['FC'] =  new Array();
prices['Grimsby']['Thursday']['9:PM']['FC'][0] =  0.00;
prices['Grimsby']['Thursday']['9:PM']['FC'][1] =  25.00;
prices['Grimsby']['Thursday']['9:PM']['FC'][2] =  50.00;
prices['Grimsby']['Thursday']['9:PM']['FC'][3] =  75.00;
prices['Grimsby']['Thursday']['9:PM']['FC'][4] =  100.00;
prices['Grimsby']['Thursday']['9:PM']['FC'][5] =  125.00;
prices['Grimsby']['Thursday']['9:PM']['FC'][6] =  150.00;
prices['Grimsby']['Thursday']['9:PM']['BB'] =  new Array();
prices['Grimsby']['Thursday']['9:PM']['BB'][0] =  0.00;
prices['Grimsby']['Thursday']['9:PM']['BB'][1] =  30.00;
prices['Grimsby']['Thursday']['9:PM']['BB'][2] =  60.00;
prices['Grimsby']['Thursday']['9:PM']['BB'][3] =  90.00;
prices['Grimsby']['Thursday']['9:PM']['BB'][4] =  120.00;
prices['Grimsby']['Thursday']['9:PM']['BB'][5] =  150.00;
prices['Grimsby']['Thursday']['9:PM']['BB'][6] =  180.00;
prices['Grimsby']['Friday'] =  new Array();
prices['Grimsby']['Friday']['9:PM'] =  new Array();
prices['Grimsby']['Friday']['9:PM']['SA'] =  new Array();
prices['Grimsby']['Friday']['9:PM']['SA'][0] =  0.00;
prices['Grimsby']['Friday']['9:PM']['SA'][1] =  18.00;
prices['Grimsby']['Friday']['9:PM']['SA'][2] =  36.00;
prices['Grimsby']['Friday']['9:PM']['SA'][3] =  54.00;
prices['Grimsby']['Friday']['9:PM']['SA'][4] =  72.00;
prices['Grimsby']['Friday']['9:PM']['SA'][5] =  90.00;
prices['Grimsby']['Friday']['9:PM']['SA'][6] =  108.00;
prices['Grimsby']['Friday']['9:PM']['SP'] =  new Array();
prices['Grimsby']['Friday']['9:PM']['SP'][0] =  0.00;
prices['Grimsby']['Friday']['9:PM']['SP'][1] =  15.00;
prices['Grimsby']['Friday']['9:PM']['SP'][2] =  30.00;
prices['Grimsby']['Friday']['9:PM']['SP'][3] =  45.00;
prices['Grimsby']['Friday']['9:PM']['SP'][4] =  60.00;
prices['Grimsby']['Friday']['9:PM']['SP'][5] =  75.00;
prices['Grimsby']['Friday']['9:PM']['SP'][6] =  90.00;
prices['Grimsby']['Friday']['9:PM']['SC'] =  new Array();
prices['Grimsby']['Friday']['9:PM']['SC'][0] =  0.00;
prices['Grimsby']['Friday']['9:PM']['SC'][1] =  12.00;
prices['Grimsby']['Friday']['9:PM']['SC'][2] =  24.00;
prices['Grimsby']['Friday']['9:PM']['SC'][3] =  36.00;
prices['Grimsby']['Friday']['9:PM']['SC'][4] =  48.00;
prices['Grimsby']['Friday']['9:PM']['SC'][5] =  60.00;
prices['Grimsby']['Friday']['9:PM']['SC'][6] =  72.00;
prices['Grimsby']['Friday']['9:PM']['FA'] =  new Array();
prices['Grimsby']['Friday']['9:PM']['FA'][0] =  0.00;
prices['Grimsby']['Friday']['9:PM']['FA'][1] =  30.00;
prices['Grimsby']['Friday']['9:PM']['FA'][2] =  60.00;
prices['Grimsby']['Friday']['9:PM']['FA'][3] =  90.00;
prices['Grimsby']['Friday']['9:PM']['FA'][4] =  120.00;
prices['Grimsby']['Friday']['9:PM']['FA'][5] =  150.00;
prices['Grimsby']['Friday']['9:PM']['FA'][6] =  180.00;
prices['Grimsby']['Friday']['9:PM']['FC'] =  new Array();
prices['Grimsby']['Friday']['9:PM']['FC'][0] =  0.00;
prices['Grimsby']['Friday']['9:PM']['FC'][1] =  25.00;
prices['Grimsby']['Friday']['9:PM']['FC'][2] =  50.00;
prices['Grimsby']['Friday']['9:PM']['FC'][3] =  75.00;
prices['Grimsby']['Friday']['9:PM']['FC'][4] =  100.00;
prices['Grimsby']['Friday']['9:PM']['FC'][5] =  125.00;
prices['Grimsby']['Friday']['9:PM']['FC'][6] =  150.00;
prices['Grimsby']['Friday']['9:PM']['BB'] =  new Array();
prices['Grimsby']['Friday']['9:PM']['BB'][0] =  0.00;
prices['Grimsby']['Friday']['9:PM']['BB'][1] =  30.00;
prices['Grimsby']['Friday']['9:PM']['BB'][2] =  60.00;
prices['Grimsby']['Friday']['9:PM']['BB'][3] =  90.00;
prices['Grimsby']['Friday']['9:PM']['BB'][4] =  120.00;
prices['Grimsby']['Friday']['9:PM']['BB'][5] =  150.00;
prices['Grimsby']['Friday']['9:PM']['BB'][6] =  180.00;
prices['Grimsby']['Saturday'] =  new Array();
prices['Grimsby']['Saturday']['9:PM'] =  new Array();
prices['Grimsby']['Saturday']['9:PM']['SA'] =  new Array();
prices['Grimsby']['Saturday']['9:PM']['SA'][0] =  0.00;
prices['Grimsby']['Saturday']['9:PM']['SA'][1] =  18.00;
prices['Grimsby']['Saturday']['9:PM']['SA'][2] =  36.00;
prices['Grimsby']['Saturday']['9:PM']['SA'][3] =  54.00;
prices['Grimsby']['Saturday']['9:PM']['SA'][4] =  72.00;
prices['Grimsby']['Saturday']['9:PM']['SA'][5] =  90.00;
prices['Grimsby']['Saturday']['9:PM']['SA'][6] =  108.00;
prices['Grimsby']['Saturday']['9:PM']['SP'] =  new Array();
prices['Grimsby']['Saturday']['9:PM']['SP'][0] =  0.00;
prices['Grimsby']['Saturday']['9:PM']['SP'][1] =  15.00;
prices['Grimsby']['Saturday']['9:PM']['SP'][2] =  30.00;
prices['Grimsby']['Saturday']['9:PM']['SP'][3] =  45.00;
prices['Grimsby']['Saturday']['9:PM']['SP'][4] =  60.00;
prices['Grimsby']['Saturday']['9:PM']['SP'][5] =  75.00;
prices['Grimsby']['Saturday']['9:PM']['SP'][6] =  90.00;
prices['Grimsby']['Saturday']['9:PM']['SC'] =  new Array();
prices['Grimsby']['Saturday']['9:PM']['SC'][0] =  0.00;
prices['Grimsby']['Saturday']['9:PM']['SC'][1] =  12.00;
prices['Grimsby']['Saturday']['9:PM']['SC'][2] =  24.00;
prices['Grimsby']['Saturday']['9:PM']['SC'][3] =  36.00;
prices['Grimsby']['Saturday']['9:PM']['SC'][4] =  48.00;
prices['Grimsby']['Saturday']['9:PM']['SC'][5] =  60.00;
prices['Grimsby']['Saturday']['9:PM']['SC'][6] =  72.00;
prices['Grimsby']['Saturday']['9:PM']['FA'] =  new Array();
prices['Grimsby']['Saturday']['9:PM']['FA'][0] =  0.00;
prices['Grimsby']['Saturday']['9:PM']['FA'][1] =  30.00;
prices['Grimsby']['Saturday']['9:PM']['FA'][2] =  60.00;
prices['Grimsby']['Saturday']['9:PM']['FA'][3] =  90.00;
prices['Grimsby']['Saturday']['9:PM']['FA'][4] =  120.00;
prices['Grimsby']['Saturday']['9:PM']['FA'][5] =  150.00;
prices['Grimsby']['Saturday']['9:PM']['FA'][6] =  180.00;
prices['Grimsby']['Saturday']['9:PM']['FC'] =  new Array();
prices['Grimsby']['Saturday']['9:PM']['FC'][0] =  0.00;
prices['Grimsby']['Saturday']['9:PM']['FC'][1] =  25.00;
prices['Grimsby']['Saturday']['9:PM']['FC'][2] =  50.00;
prices['Grimsby']['Saturday']['9:PM']['FC'][3] =  75.00;
prices['Grimsby']['Saturday']['9:PM']['FC'][4] =  100.00;
prices['Grimsby']['Saturday']['9:PM']['FC'][5] =  125.00;
prices['Grimsby']['Saturday']['9:PM']['FC'][6] =  150.00;
prices['Grimsby']['Saturday']['9:PM']['BB'] =  new Array();
prices['Grimsby']['Saturday']['9:PM']['BB'][0] =  0.00;
prices['Grimsby']['Saturday']['9:PM']['BB'][1] =  30.00;
prices['Grimsby']['Saturday']['9:PM']['BB'][2] =  60.00;
prices['Grimsby']['Saturday']['9:PM']['BB'][3] =  90.00;
prices['Grimsby']['Saturday']['9:PM']['BB'][4] =  120.00;
prices['Grimsby']['Saturday']['9:PM']['BB'][5] =  150.00;
prices['Grimsby']['Saturday']['9:PM']['BB'][6] =  180.00;
prices['Grimsby']['Sunday'] =  new Array();
prices['Grimsby']['Sunday']['9:PM'] =  new Array();
prices['Grimsby']['Sunday']['9:PM']['SA'] =  new Array();
prices['Grimsby']['Sunday']['9:PM']['SA'][0] =  0.00;
prices['Grimsby']['Sunday']['9:PM']['SA'][1] =  18.00;
prices['Grimsby']['Sunday']['9:PM']['SA'][2] =  36.00;
prices['Grimsby']['Sunday']['9:PM']['SA'][3] =  54.00;
prices['Grimsby']['Sunday']['9:PM']['SA'][4] =  72.00;
prices['Grimsby']['Sunday']['9:PM']['SA'][5] =  90.00;
prices['Grimsby']['Sunday']['9:PM']['SA'][6] =  108.00;
prices['Grimsby']['Sunday']['9:PM']['SP'] =  new Array();
prices['Grimsby']['Sunday']['9:PM']['SP'][0] =  0.00;
prices['Grimsby']['Sunday']['9:PM']['SP'][1] =  15.00;
prices['Grimsby']['Sunday']['9:PM']['SP'][2] =  30.00;
prices['Grimsby']['Sunday']['9:PM']['SP'][3] =  45.00;
prices['Grimsby']['Sunday']['9:PM']['SP'][4] =  60.00;
prices['Grimsby']['Sunday']['9:PM']['SP'][5] =  75.00;
prices['Grimsby']['Sunday']['9:PM']['SP'][6] =  90.00;
prices['Grimsby']['Sunday']['9:PM']['SC'] =  new Array();
prices['Grimsby']['Sunday']['9:PM']['SC'][0] =  0.00;
prices['Grimsby']['Sunday']['9:PM']['SC'][1] =  12.00;
prices['Grimsby']['Sunday']['9:PM']['SC'][2] =  24.00;
prices['Grimsby']['Sunday']['9:PM']['SC'][3] =  36.00;
prices['Grimsby']['Sunday']['9:PM']['SC'][4] =  48.00;
prices['Grimsby']['Sunday']['9:PM']['SC'][5] =  60.00;
prices['Grimsby']['Sunday']['9:PM']['SC'][6] =  72.00;
prices['Grimsby']['Sunday']['9:PM']['FA'] =  new Array();
prices['Grimsby']['Sunday']['9:PM']['FA'][0] =  0.00;
prices['Grimsby']['Sunday']['9:PM']['FA'][1] =  30.00;
prices['Grimsby']['Sunday']['9:PM']['FA'][2] =  60.00;
prices['Grimsby']['Sunday']['9:PM']['FA'][3] =  90.00;
prices['Grimsby']['Sunday']['9:PM']['FA'][4] =  120.00;
prices['Grimsby']['Sunday']['9:PM']['FA'][5] =  150.00;
prices['Grimsby']['Sunday']['9:PM']['FA'][6] =  180.00;
prices['Grimsby']['Sunday']['9:PM']['FC'] =  new Array();
prices['Grimsby']['Sunday']['9:PM']['FC'][0] =  0.00;
prices['Grimsby']['Sunday']['9:PM']['FC'][1] =  25.00;
prices['Grimsby']['Sunday']['9:PM']['FC'][2] =  50.00;
prices['Grimsby']['Sunday']['9:PM']['FC'][3] =  75.00;
prices['Grimsby']['Sunday']['9:PM']['FC'][4] =  100.00;
prices['Grimsby']['Sunday']['9:PM']['FC'][5] =  125.00;
prices['Grimsby']['Sunday']['9:PM']['FC'][6] =  150.00;
prices['Grimsby']['Sunday']['9:PM']['BB'] =  new Array();
prices['Grimsby']['Sunday']['9:PM']['BB'][0] =  0.00;
prices['Grimsby']['Sunday']['9:PM']['BB'][1] =  30.00;
prices['Grimsby']['Sunday']['9:PM']['BB'][2] =  60.00;
prices['Grimsby']['Sunday']['9:PM']['BB'][3] =  90.00;
prices['Grimsby']['Sunday']['9:PM']['BB'][4] =  120.00;
prices['Grimsby']['Sunday']['9:PM']['BB'][5] =  150.00;
prices['Grimsby']['Sunday']['9:PM']['BB'][6] =  180.00;







function setDays() {
  movSel = document.getElementById('movie');
  dayList = days[movSel.value];
  changeSelect('day', dayList, dayList);
  setTimes();
  cTotal0();

}

function setTimes() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeList = times[movSel.value][daySel.value];
  changeSelect('time', timeList, timeList);
  setSeats();
  setSeats1();
  setSeats2();
  setSeats3();
  setSeats4();
  setSeats5();

}
function setSeats() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatList = seats[movSel.value][daySel.value][timeSel.value];

  setStypes();
  setPrice();
}
function setSeats1() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatList = seats[movSel.value][daySel.value][timeSel.value];

  setStypes1();
  setPrice1();
}
function setSeats2() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatList = seats[movSel.value][daySel.value][timeSel.value];

  setStypes2();
  setPrice2();
}
function setSeats3() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatList = seats[movSel.value][daySel.value][timeSel.value];

  setStypes3();
  setPrice3();
}
function setSeats4() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatList = seats[movSel.value][daySel.value][timeSel.value];

  setStypes4();
  setPrice4();
}
function setSeats5() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatList = seats[movSel.value][daySel.value][timeSel.value];

  setStypes5();
  setPrice5();
}


function setStypes() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel = document.getElementById('seat');
  qntyList = qntys[movSel.value][daySel.value][timeSel.value][seatSel.value];
  changeSelect('qnty', qntyList, qntyList);
  setPrice();

}
function setStypes1() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel = document.getElementById('seat1');
  qntyList = qntys[movSel.value][daySel.value][timeSel.value][seatSel.value];
  changeSelect('qnty1', qntyList, qntyList);
  setPrice1();

}
function setStypes2() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel = document.getElementById('seat2');
  qntyList = qntys[movSel.value][daySel.value][timeSel.value][seatSel.value];
  changeSelect('qnty2', qntyList, qntyList);
  setPrice2();

}
function setStypes3() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel = document.getElementById('seat3');
  qntyList = qntys[movSel.value][daySel.value][timeSel.value][seatSel.value];
  changeSelect('qnty3', qntyList, qntyList);
  setPrice3();

}
function setStypes4() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel = document.getElementById('seat4');
  qntyList = qntys[movSel.value][daySel.value][timeSel.value][seatSel.value];
  changeSelect('qnty4', qntyList, qntyList);
  setPrice4();

}
function setStypes5() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel = document.getElementById('seat5');
  qntyList = qntys[movSel.value][daySel.value][timeSel.value][seatSel.value];
  changeSelect('qnty5', qntyList, qntyList);
  setPrice5();

}

function setPrice() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel = document.getElementById('seat');
  qntySel = document.getElementById('qnty');
  priceList = prices[movSel.value][daySel.value][timeSel.value][seatSel.value][qntySel.value];

}
function setPrice1() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel1 = document.getElementById('seat1');
  qntySel1 = document.getElementById('qnty1');
  priceList = prices[movSel.value][daySel.value][timeSel.value][seatSel1.value][qntySel1.value];

}
function setPrice2() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel2 = document.getElementById('seat2');
  qntySel2 = document.getElementById('qnty2');
  priceList = prices[movSel.value][daySel.value][timeSel.value][seatSel2.value][qntySel2.value];

}
function setPrice3() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel3 = document.getElementById('seat3');
  qntySel3 = document.getElementById('qnty3');
  priceList = prices[movSel.value][daySel.value][timeSel.value][seatSel3.value][qntySel3.value];

}
function setPrice4() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel4 = document.getElementById('seat4');
  qntySel4 = document.getElementById('qnty4');
  priceList = prices[movSel.value][daySel.value][timeSel.value][seatSel4.value][qntySel4.value];

}
function setPrice5() {
  movSel = document.getElementById('movie');
  daySel = document.getElementById('day');
  timeSel = document.getElementById('time');
  seatSel5 = document.getElementById('seat5');
  qntySel5 = document.getElementById('qnty5');
  priceList = prices[movSel.value][daySel.value][timeSel.value][seatSel5.value][qntySel5.value];

}


function cTotal()
{
      movSel = document.getElementById('movie');
     daySel = document.getElementById('day');
     timeSel = document.getElementById('time');
     seatSel = document.getElementById('seat');
     qntySel = document.getElementById('qnty');
     seatSel1 = document.getElementById('seat1');
     qntySel1 = document.getElementById('qnty1');
     seatSel2 = document.getElementById('seat2');
     qntySel2 = document.getElementById('qnty2');
     seatSel3 = document.getElementById('seat3');
     qntySel3= document.getElementById('qnty3');
     seatSel4 = document.getElementById('seat4');
     qntySel4= document.getElementById('qnty4');
     seatSel5 = document.getElementById('seat5');
     qntySel5= document.getElementById('qnty5');
     ttp6 = prices[movSel.value][daySel.value][timeSel.value][seatSel5.value][qntySel5.value];
     ttp5 = prices[movSel.value][daySel.value][timeSel.value][seatSel4.value][qntySel4.value];
     ttp4 = prices[movSel.value][daySel.value][timeSel.value][seatSel3.value][qntySel3.value];
     ttp3 = prices[movSel.value][daySel.value][timeSel.value][seatSel2.value][qntySel2.value];
     ttp2 = prices[movSel.value][daySel.value][timeSel.value][seatSel1.value][qntySel1.value];
     ttp1 = prices[movSel.value][daySel.value][timeSel.value][seatSel.value][qntySel.value];
     ttp=ttp1+ttp2+ttp3+ttp4+ttp5+ttp6;
    var divobj = document.getElementById('totalPrice');
    divobj.value = ttp.toFixed(2);
    var divobj = document.getElementById('price1');
    divobj.value = ttp1.toFixed(2);
    var divobj = document.getElementById('price2');
    divobj.value = ttp2.toFixed(2);
    var divobj = document.getElementById('price3');
    divobj.value = ttp3.toFixed(2);
    var divobj = document.getElementById('price4');
    divobj.value = ttp4.toFixed(2);
    var divobj = document.getElementById('price5');
    divobj.value = ttp5.toFixed(2);
    var divobj = document.getElementById('price6');
    divobj.value = ttp6.toFixed(2);


}

function cTotal0()
{     tp=0.00;
     tp1=0.00;
     tp2=0.00;
     tp3=0.00;
     tp4=0.00;
     tp5=0.00;
     tp6=0.00;
    var divobj = document.getElementById('totalPrice');
    divobj.value = tp.toFixed(2);
    var divobj = document.getElementById('price1');
    divobj.value = tp1.toFixed(2);
    var divobj = document.getElementById('price2');
    divobj.value = tp2.toFixed(2);
    var divobj = document.getElementById('price3');
    divobj.value = tp3.toFixed(2);
    var divobj = document.getElementById('price4');
    divobj.value = tp4.toFixed(2);
    var divobj = document.getElementById('price5');
    divobj.value = tp5.toFixed(2);
    var divobj = document.getElementById('price6');
    divobj.value = tp6.toFixed(2);





}

function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}


function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
myFunction();
  setDays();




});



function validateForm() {

var x = document.forms["test"]["qnty"].value;
var y = document.forms["test"]["qnty1"].value;
var z = document.forms["test"]["qnty2"].value;
var a = document.forms["test"]["qnty3"].value;
var b = document.forms["test"]["qnty4"].value;
var c = document.forms["test"]["qnty5"].value;
var d = document.forms["test"]["movie"].value;


    if (d=='Select movie'|| x == 0 && y==0 && z==0 && a == 0 && b==0 && c==0){
        alert("Please select atleat one seat");
        return false;
    }


}
function myFunction() {



  var textnode =  document.createTextNode("$0.00");
  var textnode2 = document.createTextNode("$0.00");
  var textnode3 = document.createTextNode("$0.00");
  var textnode4 = document.createTextNode("$0.00");
  var textnode5 = document.createTextNode("$0.00");
  var textnode6 = document.createTextNode("$0.00");
  var textnode7 = document.createTextNode("$0.00");
  var textnode8 = document.createTextNode("$0.00");
        document.getElementById('price1').appendChild(textnode8);
	document.getElementById('price2').appendChild(textnode7);
        document.getElementById('price3').appendChild(textnode6);
	document.getElementById('price4').appendChild(textnode5);
        document.getElementById('price5').appendChild(textnode4);
document.getElementById('price6').appendChild(textnode3);
document.getElementById('totalPrice').appendChild(textnode2);
}


</script>

<title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.css">


</head>
<body>
  <div class="transbox">
<?php include_once("rh.php");?>

<fieldset>
<legend><strong>Make your selection</strong></legend>

<form class="fc" name="test" method="POST" action="get.php" onsubmit="return validateForm()" >
Movie:
<select name="movie" id="movie" onchange="setDays();cTotal0();">
  <option value="">Select movie</option>
  <option value="Zootopia">Zootopia</option>
  <option value="Mustang">Mustang</option>
  <option value="Kii&Kaa">Kii&Kaa</option>
  <option value="Grimsby">Grimsby</option>
</select>
Day:
<select name="day" id="day" onchange="setTimes();cTotal0();">
  <option value=""></option>
</select>
Time:
<select name="time"  id="time" onchange="setSeats();setStypes();setPrice();cTotal();
setSeats1();setStypes1();setPrice1();cTotal();
setSeats2();setStypes2();setPrice2();cTotal();
setSeats3();setStypes3();setPrice3();cTotal();
setSeats4();setStypes4();setPrice4();cTotal();
setSeats5();setStypes5();setPrice5();cTotal();">
  <option value=""></option>
</select>
<table>
<tr>
   <th>Seat</th>
   <th>Quantity</th>
   <th>Subtotal price</th>
 </tr>
<tr>

<td>Standard Adult:<input type="text" name="seat"  id="seat" value="SA" readonly/></td>

<td>

<select name="qnty"  id="qnty" onchange="setPrice();cTotal()" >
  <option value=""></option>
</select></td>

<td><input type="number"  id="price1" value="" readonly/></td>


</tr>
<tr>
<td>Standard Concession:<input type="text" name="seat1"  id="seat1" value="SP" readonly/></td>
<td><select name="qnty1"  id="qnty1" onchange="setPrice1();cTotal()" >
  <option value=""></option>
</select></td>
<td><input type="number"  id="price2" value="" readonly/></td>
</tr>

<tr>
<td>

</tr>
<tr>
<td>Standard Child:<input type="text" name="seat2"  id="seat2" value="SC" readonly/></td>
<td><select name="qnty2"  id="qnty2" onchange="setPrice2();cTotal()" >
  <option value=""></option>
</select></td>
<td><input type="number"  id="price3" value="" readonly/></td>
</tr>
<tr>

<td>First Class Adult:<input type="text" name="seat3"  id="seat3" value="FA" readonly/></td>

<td>

<select name="qnty3"  id="qnty3" onchange="setPrice3();cTotal()" >
  <option value=""></option>
</select></td>


<td><input type="number"  id="price4" value="" readonly/></td>

</tr>
<tr>
<td>First Class Child:<input type="text" name="seat4"  id="seat4" value="FC" readonly/></td>

<td>
<select name="qnty4"  id="qnty4" onchange="setPrice4();cTotal()" >
  <option value=""></option>
</select></td>

<td><input type="number"  id="price5" value="" readonly/></td>
</tr>


<tr>
<td>Beanbag:<input type="text" name="seat5"  id="seat5" value="BB" readonly/></td>
<td><select name="qnty5"  id="qnty5" onchange="setPrice5();cTotal()" >
  <option value=""></option>
</select></td>
<td><input type="number"  id="price6" value="" readonly/></td>
</tr>

<tr>
<td colspan="2">Total amount(AUD)</td>
<td><input type="number"  id="totalPrice" value="" readonly/></td>
</tr>


</table>
<input type="submit">
</form>

</fieldset>

<?php include_once("footer.php");?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>

</div>
</body>
</html>
