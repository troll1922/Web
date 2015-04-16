function variant_1()
{
	alert ('Вариант № 1 "В предложении удалить все гласные буквы. Вывести результат в новом окне."');
	var str = prompt("Введите предложение","");
	var dlina_str = str.length;
	var str_otvet = "";
	var arr_glasn = new Array("А","а","E","е","Ё","ё","И","и","О","о","У","у","Ы","ы","Э","э","Ю","ю","Я","я");
	for (var i=0;i<dlina_str;i++) {
	var char_buf = str.substr(i,1);
	var znak;
		for (var j=0;j<arr_glasn.length;j++) {
			if (char_buf==arr_glasn[j]) {znak = 0; break;}
			else znak = 1;
			}
		if (znak == 1) str_otvet += char_buf;
		}
	document.write('<h3>Вариант № 1 "В предложении удалить все гласные буквы. Вывести результат в новом окне."</h3>');
	document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
	document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
	document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_2(){
	alert ('Вариант № 2 "В предложении удалить все согласные буквы. Вывести результат в новом окне."');
	var str = prompt("Введите предложение","");
	var dlina_str = str.length;
	var str_otvet = "";
	var arr_glasn = new Array("А","а","E","е","Ё","ё","И","и","О","о","У","у","Ы","ы","Э","э","Ю","ю","Я","я");
	for (var i=0;i<dlina_str;i++) {
	var char_buf = str.substr(i,1);
	var znak;
		for (var j=0;j<arr_glasn.length;j++) {
			if (char_buf==arr_glasn[j]) {znak = 1; break;}
			else znak = 0;
		}
		if (znak == 1) str_otvet += char_buf;
	}
	document.write('<h3>Вариант № 2 "В предложении удалить все согласные буквы. Вывести результат в новом окне."</h3>');
	document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
	document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
	document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_3(){
	alert ('Вариант № 3 "В предложении удалить все слова, состоящие более чем из 5 букв. Вывести результат в новом окне."');
	var str = prompt("Введите предложение","");
	var arr_str  = str.split(" ");
	var dlina_arr_str = arr_str.length;
	var str_otvet = "";
	for (var i=0;i<dlina_arr_str;i++) {
		if (arr_str[i].length<=5) str_otvet = str_otvet + arr_str[i] + " ";
	}
	document.write('<h3>Вариант № 3 "В предложении удалить все слова, состоящие более чем из 5 букв. Вывести результат в новом окне."</h3>');
	document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
	document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
	document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_4(){
	alert ('Вариант № 4 "В предложении удалить наиболее часто встречающуюся букву. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var str_otvet = "";
		var len = str.length;
		var char_more;
		var n1 = 0;
		for (var i=0;i<len;i++) {
			var char1 = str.substr(i,1);
			if (char1==" ") continue;
			var n2 = 0;
				for (var j=0;j<len;j++){
					var char2 = str.substr(j,1);
					if (char1==char2) n2++; 
				}
			if (n2>n1) {char_more = char1; n1=n2;}
		}str_otvet
		for (var i=0;i<len;i++){
			var char_buf = str.substr(i,1);
			if (!(char_more==char_buf)) str_otvet += char_buf;
		}
		document.write('<h3>Вариант № 4 "В предложении удалить наиболее часто встречающуюся букву. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Наиболее встречающая буква:</I> ' + char_more + '<br>');
		document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_5(){
		alert ('Вариант № 5 "Предложение вывести на экран в обратном порядке. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var str_otvet = "";
		var len = str.length;
		for (var i=len;i>0;i--) {
			var char_buf = str.substring(i-1,i); 
			str_otvet+=char_buf;
		}
		document.write('<h3>Вариант № 5 "Предложение вывести на экран в обратном порядке. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_6(){
		alert ('Вариант № 6 "Удалить в предложении все цифры. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var str_otvet = "";
		var len = str.length;
		var arr_numbers = Array("0","1","2","3","4","5","6","7","8","9");
		for (var i=0;i<len;i++) {
			var char_buf = str.substr(i,1);
			var flag = 0;
				for (var j=0;j<arr_numbers.length;j++){
					if (char_buf==arr_numbers[j]) {flag = 1; break;}
				}
			if (flag==0) str_otvet+=char_buf;
		}
		document.write('<h3>Вариант № 6 "Удалить в предложении все цифры. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}	
function variant_7(){
	alert ('Вариант № 7 "Все гласные буквы в предложении вывести в том порядке, в каком они стоят в алфавите. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var str_otvet = "";
		var len = str.length;
		var arr_glasn = new Array("А","а","E","е","Ё","ё","И","и","О","о","У","у","Ы","ы","Э","э","Ю","ю","Я","я");
		var str_glasn = new Array();
		for (var i=0;i<len;i++) {
		var char_buf = str.substr(i,1);
		var n = 0;
		var znak;
			for (var j=0;j<arr_glasn.length;j++) {
				if (char_buf==arr_glasn[j]) {znak = 1; break;}
				else znak = 0;
			}
			if (znak == 1) {str_glasn.push(char_buf); n++;}
		}
		str_glasn = str_glasn.sort(); 
		str_otvet = str_glasn.join(" ");
		document.write('<h3>Вариант № 7 "Все гласные буквы в предложении вывести в том порядке, в каком они стоят в алфавите. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_8(){
		alert ('Вариант № 8 "В предложении все гласные буквы заменить любыми цифрами. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var str_otvet = "";
		var len = str.length;
		var arr_glasn = new Array("А","а","E","е","Ё","ё","И","и","О","о","У","у","Ы","ы","Э","э","Ю","ю","Я","я");
		for (var i=0;i<len;i++) {
		var char_buf = str.substr(i,1);
		var znak;
			for (var j=0;j<arr_glasn.length;j++) {
				if (char_buf==arr_glasn[j]) {znak = 1; break;}
				else znak = 0;
			}
			if (znak == 1) {var a = Math.round(Math.random()*9); str_otvet+=a;}
			else  str_otvet+=char_buf;
		}
        document.write('<h3>Вариант № 8 "В предложении все гласные буквы заменить любыми цифрами. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_9(){
		alert ('Вариант № 9 "В предложении все согласные буквы заменить любыми цифрами. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var str_otvet = "";
		var len = str.length;
		var arr_glasn = new Array("А","а","E","е","Ё","ё","И","и","О","о","У","у","Ы","ы","Э","э","Ю","ю","Я","я");
		for (var i=0;i<len;i++) {
		var char_buf = str.substr(i,1);
		var znak;
			for (var j=0;j<arr_glasn.length;j++) {
				if (char_buf==arr_glasn[j]) {znak = 1; break;}
				else znak = 0;
			}
			if (znak == 0) {var a = Math.round(Math.random()*9); str_otvet+=a;}
			else  str_otvet+=char_buf;
		}
        document.write('<h3>Вариант № 9 "В предложении все согласные буквы заменить любыми цифрами. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Ответ:</I> ' + str_otvet + '</p>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_10(){
		alert ('Вариант № 10 "В предложении найти пятую гласную букву с конца. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var len = str.length;
		var count = 0;
		var arr_glasn = new Array("А","а","E","е","Ё","ё","И","и","О","о","У","у","Ы","ы","Э","э","Ю","ю","Я","я");
		var char_buf = "";
		for (var i=len;i>0;i--) {
		if (count<5) {
			char_buf = str.substring(i-1,i);
			for (var j=0;j<arr_glasn.length;j++) {
				if (char_buf==arr_glasn[j]) {count++; break;}
				}
			}
			else break;
		}
		if (!(count==5)) char_buf = "Такой позиции нету";
        document.write('<h3>Вариант № 10 "В предложении найти пятую гласную букву с конца. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Ответ:</I> ' + char_buf + '<br>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_11(){
		alert ('Вариант № 11 "В предложении найти седьмую согласную букву с начала. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var len = str.length;
		var count = 0;
		var arr_glasn = new Array("А","а","E","е","Ё","ё","И","и","О","о","У","у","Ы","ы","Э","э","Ю","ю","Я","я");
		var char_buf = "";
		for (var i=0;i<len;i++) {
		if (count<7) {
			char_buf = str.substr(i,1);
			var flag = 0;
			for (var j=0;j<arr_glasn.length;j++) {
				if (char_buf==arr_glasn[j]) {flag = 0; break;} else flag = 1;
				}
			if (flag==1) count++;
			}
			else break;
		}
		if (count<7) char_buf = "Такой позиции нету";
        document.write('<h3>Вариант № 11 "В предложении найти седьмую согласную букву с начала. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Ответ:</I> ' + char_buf + '<br>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_12(){
		alert ('Вариант № 12 "Слова, содержащие более 7 букв перенести в конец предложения, в том порядке в котором они были изначально. Вывести результат в новом окне."');
		var str = prompt("Введите предложение","");
		var arr_buf = new Array();
		arr_buf = str.split(" ");
		var arr_buf_7 = new Array();
		for (var i=0;i<arr_buf.length;i++) {
			if (arr_buf[i].length>7) {var a = arr_buf.splice(i,1); i--;
			arr_buf_7.push(a);}
		}
		var str_otvet = arr_buf.join(" ");
		var str_otvet2 = arr_buf_7.join(" ");
		document.write('<h3>Вариант № 12 "Слова, содержащие более 7 букв перенести в конец предложения, в том порядке в котором они были изначально. Вывести результат в новом окне."</h3>');
		document.write('<p><I>Ваше предложение:</I> ' + str + '<br>');
		document.write('<I>Ответ:</I> ' + str_otvet + " " + str_otvet2 + '<br>');
		document.write('<div>Задание выполнил студент гр.ЦИСТв-51 Фомичёв А.В.</div>');
}
function variant_13(){
	open("labs/JavaScript_13_lab.html","var13");
}
function variant_14(){
	alert("Данная работа является Вариантом №14");
}
function variant_15(){
	open("labs/JavaScript_15_lab.html","var13");
}
function variant_16(){
	open("labs/JavaScript_16_lab.html","var13");
}
function variant_17(){
	open("labs/JavaScript_17_lab.html","var13");
}	
function variant_18(){
	open("labs/JavaScript_18_lab.html","var13");
}	
function variant_19(){
	open("labs/JavaScript_19_lab.html","var13");
}
function variant_20(){
	open("labs/JavaScript_20_lab.html","var13");
}
