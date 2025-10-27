var a = "rgb(255, 0, 0)",
    b = "rgb(230, 230, 230)"; //Цвета для кнопак a = основно, b = активная, abend = дополнительная для отметки цвета на нарушение игрока.
var score1 = 0,
    score2 = 0; //Счёт игры.

var PlayerPM = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var PlayerPlayed = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];


// вызов модального окна! и запись туда гола
// вывод таблицы протокола.ревью# со значениями и инсерт в таблицу новую строку без времени
// окно с минутами / окно с сек / окно с событием / окно с номером ключевого игрока / окно с вводом доп информации (если гол, то ввод ассистентов) (если удаление, то ввод нарушения, ввод раскрывающимся списком и возможностью ввести вручную)
// подчитать кол-во игроков на поле во время гола, завести счетчик, если нажата кнока то х=1, если нет, то х=0. а при нажатии гол - считать кол-во.
// 


function colorbutton(buttonThis) {

    if (buttonThis.style.backgroundColor == a) {
        buttonThis.style.backgroundColor = b;
    } else {
        buttonThis.style.backgroundColor = a;
    }

} //Фун. Глав. для отметки цветов актив и основной.

function resetColor1() {

    var i = 0;
    while (i < 30) {
        document.getElementById("button" + i).style.backgroundColor = b;
        i++;
    }

} //Фун. Доп. для отметки всех неоктив кроме входной. 
function resetColor2() {

    var i = 30;
    while (i < 60) {
        document.getElementById("button" + i).style.backgroundColor = b;
        i++;
    }

} //Фун. Доп. для отметки всех неоктив кроме входной. 
function plushome() {

    var i = 0;
    score1++;
        var b0 = document.getElementById("but" + i);
         var poleplh = 0;
          var polepla = 0;
           var etc = "";
        while (i<60) {
            b0 = document.getElementById("button" + i).style.backgroundColor;
            if (b0 == a && i<=29) {
                poleplh++;
                PlayerPM[i]++;
                b0 = b;
            } else if (b0 == a &&  i>=30) {
                polepla++;
                PlayerPM[i]--;
                b0=b;
            }
            i++;
        }
        if (poleplh>polepla && polepla !=5) { etc="Бол." }
        if (poleplh<polepla && poleplh !=5) { etc="Мен." }
        if (poleplh==polepla) { etc="Равн." }
    
    
    
    document.getElementById("labelscore").innerHTML = "Cчет " + score1 + " : " + score2;
    
    alert(" Показатели зафиксированы ");
} //Фун. Гол хозяева и гости. 

function plusaway() {

    var i = 0;
    score2++;
var b0 = document.getElementById("but" + i);
         var poleplh = 0;
          var polepla = 0;
           var etc = "";
        while (i<60) {
            b0 = document.getElementById("button" + i).style.backgroundColor;
            if (b0 == a && i<=29) {
                poleplh++;
                PlayerPM[i]--;
                b0 = b;
            } else if (b0 == a &&  i>=30) {
                polepla++;
                PlayerPM[i]++;
                b0=b;
            }
            i++;
        }
        if (polepla>poleplh && poleplh !=5) { etc="Бол." }
        if (polepla<poleplh && polepla !=5) { etc="Мен." }
        if (poleplh==polepla) { etc="Равн." }
    
    
    
    document.getElementById("labelscore").innerHTML = "Cчет " + score1 + " : " + score2;
    
    alert(" Показатели зафиксированы ");
} //Фун. Гол хозяева и гости. 

function plus() {

    var i = 0;

    while (i < 60) {
        if (document.getElementById("button" + i).style.backgroundColor == a) {

            document.getElementById("button" + i).style.backgroundColor = b;
            PlayerPM[i]++;

        }
        i++;
    }
    alert(" Показатель изменен (+1) ");
} //Фун. Плюс игроку. 
function minus() {

    var i = 0;

    while (i < 60) {
        if (document.getElementById("button" + i).style.backgroundColor == a) {

            document.getElementById("button" + i).style.backgroundColor = b;
            PlayerPM[i]--;

        }
        i++;
    }
    alert(" Показатель изменен (-1) ");
} //Фун. Минус игроку.

function goal(k) {
    if (k == true) {
        score1--;
    } else {
        score2--;
    }

    document.getElementById("labelscore").innerHTML = "Cчет " + score1 + " : " + score2;
} //Фун. минус голы
