var a = "rgb(255, 0, 0)",
    b = "rgb(227, 227, 227)"; 
//Цвета для кнопак a = основно, b = активная, abend = дополнительная для отметки цвета на нарушение игрока.
var score1 = 0,
    score2 = 0; //Счёт игры. 
var shots1 = 0,
    shots2 = 0;
var BanHome = 0,
    BanAWAY = 0; //КОЛИЧЕСТВО штрафа. correction*
var bshots1 = 0,
    bshots2 = 0;
var idgwin = 0; // айди игрока забившего победный гол

var gkeeperIDh = -1;
var gkeeperIDa = -1;
var gkeeperprevh = -1;
var gkeeperpreva = -1;

var quarter = 1;

var g1 = [0, 0, 0, 0, 0, 0];
var g2 = [0, 0, 0, 0, 0, 0];
var s1 = [0, 0, 0, 0];
var s2 = [0, 0, 0, 0];
var bs1 = [0, 0, 0, 0];
var bs2 = [0, 0, 0, 0];
var f1 = [0, 0, 0, 0];
var f2 = [0, 0, 0, 0];
var p1 = [0, 0, 0, 0];
var p2 = [0, 0, 0, 0];
var per = "";
var PlayerGoal = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var PlayerPas = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var PlayerShot = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var PlayerFaceoff = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var PlayerPenalty = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var PlayerFLost = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var PlayerBlocked = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var lostG = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var allShot = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];


var noVBRHome = 0,
    noVBRAWAY = 0; // колво вбрасываний correction*

function setgkeeper() {
    var i = 0;
    while (i < 60) {
    if (document.getElementById("button" + i).style.backgroundColor == a) {

            document.getElementById("button" + i).style.backgroundColor = b;
        
            if (i >= 0 && i <= 29){
            
            if (gkeeperIDh>=0){
                gkeeperprevh = gkeeperIDh;
                }
                gkeeperIDh = i;
             }
        
            if (i >= 30 && i <= 59){
                
            if (gkeeperIDa>=0){
                gkeeperpreva = gkeeperIDa;
                }
               gkeeperIDa = i;
            }
        }
        i++;
    }
}

function VBR(j) {
    var i = 0;

    while (i < 60) {
        if (document.getElementById("button" + i).style.backgroundColor == a) {

            document.getElementById("button" + i).style.backgroundColor = b;

            if (j == true) {
                if (i >= 0 && i <= 29) {
                    PlayerFaceoff[i]++;
                    noVBRHome++;
                } else {
                  PlayerFLost[i]++;
                }
            } else {
                if (i >= 30 && i <= 59) {
                    PlayerFaceoff[i]++;
                    noVBRAWAY++;
                } else {
                  PlayerFLost[i]++;
                }
            }
        }
        i++;

    }

} //Фун. для ввода VBR для всех игроков.

function NoVBRALL(j) {
    var i = 0;

    while (i < 60) {
        if (document.getElementById("button" + i).style.backgroundColor == a) {

            document.getElementById("button" + i).style.backgroundColor = b;

            if (j == true) {
                if (i >= 0 && i <= 29) {
                    PlayerFaceoff[i]--;
                    noVBRHome--;
                } else {
                  PlayerFLost[i]--;
                }
            } else {
                if (i >= 30 && i <= 59) {
                    PlayerFaceoff[i]--;
                    noVBRAWAY--;
                } else {
                  PlayerFLost[i]--;
                }
            }
        }
        i++;

    }

} //Фун. для ввода VBR для всех игроков.




    function NoVBR(j) {
    var i = 0;

    while (i < 60) {
        if (document.getElementById("button" + i).style.backgroundColor == a) {

            document.getElementById("button" + i).style.backgroundColor = b;

            if (j == true) {
                if (i >= 0 && i <= 29) {
                    noVBRHome--;
                    PlayerFaceoff[i]--;
                }
                if (i >= 30 && i <= 59) {
                    noVBRAWAY--;
                    PlayerFaceoff[i]--;
                }
            } else {
                if (i >= 0 && i <= 29) {
                 if (PlayerFLost[i]>0) {PlayerFLost[i]--;}
                }
                if (i >= 30 && i <= 59) {
                  if (PlayerFLost[i]>0) {PlayerFLost[i]--;}
                }
            }
        }
            i++;
        }

    } //Фун. для ввода -VBR для всех команд.***
    
    function Penalty(j) {
        var i = 0;
        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {
                PlayerPenalty[i] = PlayerPenalty[i] + j;

                if (i >= 0 && i <= 29) {
                    BanHome = BanHome + j;
                    
                } else {
                    BanAWAY = BanAWAY + j;
                }

            }
            i++;
        }

    } //Фун. для подсчёта ВремяНаСкамьеЗаНарушение ++.
    function NoPenalty(j) {

        var i = 0;

        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {

                document.getElementById("button" + i).style.backgroundColor = b;

                PlayerPenalty[i] = PlayerPenalty[i] - j;

                if (i > 0 && i <= 29) {
                    BanHome = BanHome - j
                } else {
                    BanAWAY = BanAWAY - j
                }

            }
            i++;
        }

    } //Фун. для подсчёта ВремяНаСкамеЗаНарушение --.
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
    
    function goal() {
        
        var i = 0;

        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {
                
                if (i <= 29 && score1 == score2){
                    idgwin = identifiers[i];
                    }
                if (i >= 29 && i <= 59 && score1 == score2){
                    idgwin = identifiers[i];
                    }
                PlayerGoal[i]++;
                PlayerShot[i]++;
                GoalScore(i, true);   
            }
            i++;
        }
    } //Фун. для голов++. 
    function NoGoal() {
        var i = 0;

        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {

                document.getElementById("button" + i).style.backgroundColor = b;

                PlayerGoal[i]--;
                PlayerShot[i]--;
                GoalScore(i, false);
            }
            i++;
        }

    } //Фун. для голов--. 
    function GoalScore(redButton, boolGol) {

        if (redButton <= 29) {
            if (boolGol == true) {
                score1++;
                shots1++;
                
                if (z6!=4){
                lostG[gkeeperIDa]++;
                allShot[gkeeperIDa]++;
                }
                
            } else {
                score1--;
                shots1--;
                lostG[gkeeperIDa]--;
                allShot[gkeeperIDa]--;
            }
        }

        if (redButton > 29 && redButton <= 59) {
            if (boolGol == true) {
                score2++;
                shots2++;
                
                if (z6!=4){
                lostG[gkeeperIDh]++;
                allShot[gkeeperIDh]++;
                }
                
            } else {
                score2--;
                shots2--;
                lostG[gkeeperIDh]--;
                allShot[gkeeperIDh]--;
            }
        }
        document.getElementById("labelscore").innerHTML = "Cчет " + score1 + " : " + score2;

    } //Фун. для анализа голов от всех игроков.
 //   function Pas() {
//
 //       var i = 0;
//
//        while (i < 60) {
 //           if (document.getElementById("button" + i).style.backgroundColor == a) //{
//
 //               document.getElementById("button" + i).style.backgroundColor = b;
//
 //               PlayerPas[i]++;
 //           }
 //           i++;
 //       }
//
 //   } //Фун. для паса++.
    function NoPas() {

        var i = 0;

        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {

                document.getElementById("button" + i).style.backgroundColor = b;

                PlayerPas[i]--;

            }
            i++;
        }

    } //Фун. для паса--.

    function shot() {
        var i = 0;

        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {

                document.getElementById("button" + i).style.backgroundColor = b;
                if (i >= 0 && i <= 29) {
                    PlayerShot[i]++;
                    shots1++;
                    
                    allShot[gkeeperIDa]++; // броски
                }
                if (i >= 30 && i <= 59) {
                    PlayerShot[i]++;
                    shots2++;
                    
                    allShot[gkeeperIDh]++;// броски 
                }
            }
            i++;
        }
    } //Фун. для бросков++.

function bshot() {
        var i = 0;

        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {

                document.getElementById("button" + i).style.backgroundColor = b;
                if (i >= 0 && i <= 29) {
                    PlayerBlocked[i]++;
                    bshots1++;
                }
                if (i >= 30 && i <= 59) {
                    PlayerBlocked[i]++;
                    bshots2++;
                }
            }
            i++;
        }
    } //Фун. для заблокированных бросков++.

function nobshot() {
        var i = 0;

        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {

                document.getElementById("button" + i).style.backgroundColor = b;
                if (i >= 0 && i <= 29) {
                    PlayerBlocked[i]--;
                    bshots1--;
                }
                if (i >= 30 && i <= 59) {
                    PlayerBlocked[i]--;
                    bshots2--;
                }
            }
            i++;
        }
    } //Фун. для заблокированных бросков++.


    function NoShot() {


        var i = 0;

        while (i < 60) {
            if (document.getElementById("button" + i).style.backgroundColor == a) {

                document.getElementById("button" + i).style.backgroundColor = b;

                if (i >= 0 && i <= 29) {
                    PlayerShot[i]--;
                    shots1--;
                    
                    allShot[gkeeperIDa]--; // броски
                }
                if (i >= 30 && i <= 59) {
                    PlayerShot[i]--;
                    shots2--;
                    
                    allShot[gkeeperIDh]--;// броски 
                }
            }
            i++;
        }

    } //Фун. для бросков--.
    function period(j) {
        if (j == 1) {
            quarter = 2;
            g1[0] = score1, g2[0] = score2;
            s1[0] = shots1, s2[0] = shots2;
            f1[0] = noVBRHome, f2[0] = noVBRAWAY;
            p1[0] = BanHome, p2[0] = BanAWAY;
            bs1[0] = bshots1, bs2[0] = bshots2;
            per = "1-ый период";
            $.ajax({
                        url: 'ajax_periods.php',
                        type: 'POST',
                        data: {
                            prtk: protokol,
                            goal1: g1,
                            goal2: g2,
                            shot1: s1,
                            shot2: s2,
                            bshot1: bs1,
                            bshot2: bs2,
                            face1: f1,
                            face2: f2,
                            pen1: p1,
                            pen2: p2
                        }
                    });
        }
        if (j == 2) {
            quarter = 3;
            g1[1] = score1 - g1[0], g2[1] = score2 - g2[0];
            s1[1] = shots1 - s1[0], s2[1] = shots2 - s2[0];
            bs1[1] = bshots1 - bs1[0], bs2[1] = bshots2 - bs2[0];
            f1[1] = noVBRHome - f1[0], f2[1] = noVBRAWAY - f2[0];
            p1[1] = BanHome - p1[0], p2[1] = BanAWAY - p2[0];
            per = "2-ой период";
            $.ajax({
                        url: 'ajax_periods.php',
                        type: 'POST',
                        data: {
                            prtk: protokol,
                            goal1: g1,
                            goal2: g2,
                            shot1: s1,
                            shot2: s2,
                            bshot1: bs1,
                            bshot2: bs2,
                            face1: f1,
                            face2: f2,
                            pen1: p1,
                            pen2: p2
                        }
                    });
        }
        if (j == 3) {
            quarter = 4;
            g1[2] = score1 - (g1[0] + g1[1]), g2[2] = score2 - (g2[0] + g2[1]);
            s1[2] = shots1 - (s1[0] + s1[1]), s2[2] = shots2 - (s2[0] + s2[1]);
            bs1[2] = bshots1 - (bs1[0] + bs1[1]), bs2[2] = bshots2 - (bs2[0] + bs2[1]);
            f1[2] = noVBRHome - (f1[0] + f1[1]), f2[2] = noVBRAWAY - (f2[0] + f2[1]);
            p1[2] = BanHome - (p1[0] + p1[1]), p2[2] = BanAWAY - (p2[0] + p2[1]);
            per = "3-ий период";
            $.ajax({
                        url: 'ajax_periods.php',
                        type: 'POST',
                        data: {
                            prtk: protokol,
                            goal1: g1,
                            goal2: g2,
                            shot1: s1,
                            shot2: s2,
                            bshot1: bs1,
                            bshot2: bs2,
                            face1: f1,
                            face2: f2,
                            pen1: p1,
                            pen2: p2
                        }
                    });
        }
        if (j == 4) {
            quarter = 5;
            g1[3] = score1 - (g1[0] + g1[1] + g1[2]), g2[3] = score2 - (g2[0] + g2[1] + g2[2]);
            s1[3] = shots1 - (s1[0] + s1[1] + s1[2]), s2[3] = shots2 - (s2[0] + s2[1] + s2[2]);
            bs1[3] = bshots1 - (bs1[0] + bs1[1] + bs1[2]), bs2[3] = bshots2 - (bs2[0] + bs2[1] + bs2[2]);
            f1[3] = noVBRHome - (f1[0] + f1[1] + f1[2]), f2[3] = noVBRAWAY - (f2[0] + f2[1] + f2[2]);
            p1[3] = BanHome - (p1[0] + p1[1] + p1[2]), p2[3] = BanAWAY - (p2[0] + p2[1] + p2[2]);
            per = "Овертайм";
            $.ajax({
                        url: 'ajax_periods.php',
                        type: 'POST',
                        data: {
                            prtk: protokol,
                            goal1: g1,
                            goal2: g2,
                            shot1: s1,
                            shot2: s2,
                            bshot1: bs1,
                            bshot2: bs2,
                            face1: f1,
                            face2: f2,
                            pen1: p1,
                            pen2: p2
                        }
                    });
        }
        if (j == 5) {
            g1[4] = score1 - (g1[0] + g1[1] + g1[2] + g1[3]), g2[4] = score2 - (g2[0] + g2[1] + g2[2] + g2[3]);
            per = "Буллиты";
            $.ajax({
                        url: 'ajax_periods.php',
                        type: 'POST',
                        data: {
                            prtk: protokol,
                            goal1: g1,
                            goal2: g2,
                            shot1: s1,
                            shot2: s2,
                            bshot1: bs1,
                            bshot2: bs2,
                            face1: f1,
                            face2: f2,
                            pen1: p1,
                            pen2: p2
                        }
                    });
        }
        if (j < 5) {
        document.getElementById("label_period").innerHTML = per + " -  Г: " + g1[j - 1] + ":" + g2[j - 1] + " БВ: " + s1[j - 1] + ":" + s2[j - 1] + " ЗБ: " + bs1[j - 1] + ":" + bs2[j - 1] + " Вбр: " + f1[j - 1] + ":" + f2[j - 1] + " Штр: " + p1[j - 1] + ":" + p2[j - 1];}
        if (j == 6) {
            document.getElementById("label_period_end").innerHTML = "Стат. матча -  Г: " + score1 + ":" + score2 + " БВ: " + shots1 + ":" + shots2 + " ЗБ: " + bshots1 + ":" + bshots2 + " Вбр: " + noVBRHome + ":" + noVBRAWAY + " Штр: " + BanHome + ":" + BanAWAY;
        }
    }
