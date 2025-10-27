    <script>
        // скипт для неактивной/активной кнопки
        q = 0;
        var unactive = "rgb(255, 255, 255)";
        var gpl = [];
        var a_squad = [];
        //b0.disabled = true;b0.style.backgroundColor = unactive;
         while (q < 60) {
           document.getElementById('button' + q).disabled = true;
            document.getElementById('button' + q).style.backgroundColor = unactive;
             
            q++;
         }
        
        var c0 = document.querySelector('#option1'); var but0 = 'button0';
        var c1 = document.querySelector('#option2'); var but1 = 'button1';
        var c2 = document.querySelector('#option3'); var but2 = 'button2';
        var c3 = document.querySelector('#option4'); var but3 = 'button3';
        var c4 = document.querySelector('#option5'); var but4 = 'button4';
        var c5 = document.querySelector('#option6'); var but5 = 'button5';
        var c6 = document.querySelector('#option7'); var but6 = 'button6';
        var c7 = document.querySelector('#option8'); var but7 = 'button7';
        var c8 = document.querySelector('#option9'); var but8 = 'button8';
        var c9 = document.querySelector('#option10'); var but9 = 'button9';
        
        var c10 = document.querySelector('#option11'); var but10 = 'button10';
        var c11 = document.querySelector('#option12'); var but11 = 'button11';
        var c12 = document.querySelector('#option13'); var but12 = 'button12';
        var c13 = document.querySelector('#option14'); var but13 = 'button13';
        var c14 = document.querySelector('#option15'); var but14 = 'button14';
        var c15 = document.querySelector('#option16'); var but15 = 'button15';
        var c16 = document.querySelector('#option17'); var but16 = 'button16';
        var c17 = document.querySelector('#option18'); var but17 = 'button17';
        var c18 = document.querySelector('#option19'); var but18 = 'button18';
        var c19 = document.querySelector('#option20'); var but19 = 'button19';
        
        var c20 = document.querySelector('#option21'); var but20 = 'button20';
        var c21 = document.querySelector('#option22'); var but21 = 'button21';
        var c22 = document.querySelector('#option23'); var but22 = 'button22';
        var c23 = document.querySelector('#option24'); var but23 = 'button23';
        var c24 = document.querySelector('#option25'); var but24 = 'button24';
        var c25 = document.querySelector('#option26'); var but25 = 'button25';
        var c26 = document.querySelector('#option27'); var but26 = 'button26';
        var c27 = document.querySelector('#option28'); var but27 = 'button27';
        var c28 = document.querySelector('#option29'); var but28 = 'button28';
        var c29 = document.querySelector('#option30'); var but29 = 'button29';
        
        var c30 = document.querySelector('#option31'); var but30 = 'button30';
        var c31 = document.querySelector('#option32'); var but31 = 'button31';
        var c32 = document.querySelector('#option33'); var but32 = 'button32';
        var c33 = document.querySelector('#option34'); var but33 = 'button33';
        var c34 = document.querySelector('#option35'); var but34 = 'button34';
        var c35 = document.querySelector('#option36'); var but35 = 'button35';
        var c36 = document.querySelector('#option37'); var but36 = 'button36';
        var c37 = document.querySelector('#option38'); var but37 = 'button37';
        var c38 = document.querySelector('#option39'); var but38 = 'button38';
        var c39 = document.querySelector('#option40'); var but39 = 'button39';
        
        var c40 = document.querySelector('#option41'); var but40 = 'button40';
        var c41 = document.querySelector('#option42'); var but41 = 'button41';
        var c42 = document.querySelector('#option43'); var but42 = 'button42';
        var c43 = document.querySelector('#option44'); var but43 = 'button43';
        var c44 = document.querySelector('#option45'); var but44 = 'button44';
        var c45 = document.querySelector('#option46'); var but45 = 'button45';
        var c46 = document.querySelector('#option47'); var but46 = 'button46';
        var c47 = document.querySelector('#option48'); var but47 = 'button47';
        var c48 = document.querySelector('#option49'); var but48 = 'button48';
        var c49 = document.querySelector('#option50'); var but49 = 'button49';
        
        var c50 = document.querySelector('#option51'); var but50 = 'button50';
        var c51 = document.querySelector('#option52'); var but51 = 'button51';
        var c52 = document.querySelector('#option53'); var but52 = 'button52';
        var c53 = document.querySelector('#option54'); var but53 = 'button53';
        var c54 = document.querySelector('#option55'); var but54 = 'button54';
        var c55 = document.querySelector('#option56'); var but55 = 'button55';
        var c56 = document.querySelector('#option57'); var but56 = 'button56';
        var c57 = document.querySelector('#option58'); var but57 = 'button57';
        var c58 = document.querySelector('#option59'); var but58 = 'button58';
        var c59 = document.querySelector('#option60'); var but59 = 'button59';
        
        var ch1 = 1;
        var ch2 = 2;
 
        c0.onclick = function() {
            var b0 = document.getElementById(but0);
            if (c0.checked) {
                b0.disabled = false;
                //===================================================================
                
                    if (poz[0]!='Вр'){
                    //=====================
                (gpl[0] = 1);
                    //======================
                
                    } else { gpl[0] = 0 }
                //===================================================================
                b0.style.backgroundColor = b;
                
                a_squad[0] = identifiers[0];
                
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[0],
                            prtk: protokol,
                            check: ch1
                        }
                    });
                
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                
                gpl[0] = 0;
                a_squad[0] = 0;
                
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[0],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c1.onclick = function() {
            var b0 = document.getElementById(but1);
            if (c1.checked) {
                b0.disabled = false;
                
                if (poz[1]!='Вр'){
                (gpl[1] = 1);
                } else { gpl[1] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[1] = identifiers[1];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[1],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[1] = 0;
                a_squad[1] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[1],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c2.onclick = function() {
            var b0 = document.getElementById(but2);
            if (c2.checked) {
                b0.disabled = false;
                //==================================
                if (poz[2]!='Вр'){
                    (gpl[2] = 1);
                } else { gpl[2] = 0 }
                
                //=================================
                b0.style.backgroundColor = b;
                a_squad[2] = identifiers[2];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[2],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[2] = 0;
                a_squad[2] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[2],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c3.onclick = function() {
            var b0 = document.getElementById(but3);
            if (c3.checked) {
                b0.disabled = false;
                
                if (poz[3]!='Вр'){
                    (gpl[3] = 1);
                } else { gpl[3] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[3] = identifiers[3];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[3],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[3] = 0;
                a_squad[3] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[3],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c4.onclick = function() {
            var b0 = document.getElementById(but4);
            if (c4.checked) {
                b0.disabled = false;
                
                if (poz[4]!='Вр'){
                    (gpl[4] = 1);
                } else { gpl[4] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[4] = identifiers[4];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[4],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[4] = 0;
                a_squad[4] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[4],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c5.onclick = function() {
            var b0 = document.getElementById(but5);
            if (c5.checked) {
                b0.disabled = false;
                
                if (poz[5]!='Вр'){
                    (gpl[5] = 1);
                } else { gpl[5] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[5] = identifiers[5];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[5],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[5] = 0;
                a_squad[5] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[5],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c6.onclick = function() {
            var b0 = document.getElementById(but6);
            if (c6.checked) {
                b0.disabled = false;
                if (poz[6]!='Вр'){
                    (gpl[6] = 1);
                } else { gpl[6] = 0 }
                b0.style.backgroundColor = b;
                a_squad[6] = identifiers[6];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[6],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[6] = 0;a_squad[6] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[6],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c7.onclick = function() {
            var b0 = document.getElementById(but7);
            if (c7.checked) {
                b0.disabled = false;
                
                if (poz[7]!='Вр'){
                    (gpl[7] = 1);
                } else { gpl[7] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[7] = identifiers[7];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[7],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[7] = 0;a_squad[7] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[7],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c8.onclick = function() {
            var b0 = document.getElementById(but8);
            if (c8.checked) {
                b0.disabled = false;
                
                if (poz[8]!='Вр'){
                    (gpl[8] = 1);
                } else { gpl[8] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[8] = identifiers[8];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[8],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[8] = 0;a_squad[8] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[8],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c9.onclick = function() {
            var b0 = document.getElementById(but9);
            if (c9.checked) {
                b0.disabled = false;
                
                if (poz[9]!='Вр'){
                    (gpl[9] = 1);
                } else { gpl[9] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[9] = identifiers[9];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[9],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[9] = 0;a_squad[9] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[9],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c10.onclick = function() {
            var b0 = document.getElementById(but10);
            if (c10.checked) {
                b0.disabled = false;
                if (poz[10]!='Вр'){
                    (gpl[10] = 1);
                } else { gpl[10] = 0 }
                b0.style.backgroundColor = b;
                a_squad[10] = identifiers[10];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[10],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[10] = 0;a_squad[10] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[10],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c11.onclick = function() {
            var b0 = document.getElementById(but11);
            if (c11.checked) {
                b0.disabled = false;
                if (poz[11]!='Вр'){
                    (gpl[11] = 1);
                } else { gpl[11] = 0 }
                b0.style.backgroundColor = b;
                a_squad[11] = identifiers[11];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[11],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[11] = 0;
                a_squad[11] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[11],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c12.onclick = function() {
            var b0 = document.getElementById(but12);
            if (c12.checked) {
                b0.disabled = false;
                if (poz[12]!='Вр'){
                    (gpl[12] = 1);
                } else { gpl[12] = 0 }
                b0.style.backgroundColor = b;
                a_squad[12] = identifiers[12];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[12],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[12] = 0;a_squad[12] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[12],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c13.onclick = function() {
            var b0 = document.getElementById(but13);
            if (c13.checked) {
                b0.disabled = false;
                if (poz[13]!='Вр'){
                    (gpl[13] = 1);
                } else { gpl[13] = 0 }
                b0.style.backgroundColor = b;
                a_squad[13] = identifiers[13];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[13],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[13] = 0;a_squad[13] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[13],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c14.onclick = function() {
            var b0 = document.getElementById(but14);
            if (c14.checked) {
                b0.disabled = false;
                if (poz[14]!='Вр'){
                    (gpl[14] = 1);
                } else { gpl[14] = 0 }
                b0.style.backgroundColor = b;
                a_squad[14] = identifiers[14];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[14],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[14] = 0;a_squad[14] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[14],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c15.onclick = function() {
            var b0 = document.getElementById(but15);
            if (c15.checked) {
                b0.disabled = false;
                if (poz[15]!='Вр'){
                    (gpl[15] = 1);
                } else { gpl[15] = 0 }
                b0.style.backgroundColor = b;
                a_squad[15] = identifiers[15];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[15],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[15] = 0;a_squad[15] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[15],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c16.onclick = function() {
            var b0 = document.getElementById(but16);
            if (c16.checked) {
                b0.disabled = false;
                if (poz[16]!='Вр'){
                    (gpl[16] = 1);
                } else { gpl[16] = 0 }
                b0.style.backgroundColor = b;
                a_squad[16] = identifiers[16];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[16],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[16] = 0;a_squad[16] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[16],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c17.onclick = function() {
            var b0 = document.getElementById(but17);
            if (c17.checked) {
                b0.disabled = false;
                if (poz[17]!='Вр'){
                    (gpl[17] = 1);
                } else { gpl[17] = 0 }
                b0.style.backgroundColor = b;
                a_squad[17] = identifiers[17];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[17],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[17] = 0;a_squad[17] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[17],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c18.onclick = function() {
            var b0 = document.getElementById(but18);
            if (c18.checked) {
                b0.disabled = false;
                
                if (poz[18]!='Вр'){
                    (gpl[18] = 1);
                } else { gpl[18] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[18] = identifiers[18];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[18],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[18] = 0;a_squad[18] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[18],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c19.onclick = function() {
            var b0 = document.getElementById(but19);
            if (c19.checked) {
                b0.disabled = false;
                
                if (poz[19]!='Вр'){
                    (gpl[19] = 1);
                } else { gpl[19] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[19] = identifiers[19];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[19],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[19] = 0;a_squad[19] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[19],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c20.onclick = function() {
            var b0 = document.getElementById(but20);
            if (c20.checked) {
                b0.disabled = false;
                
                if (poz[20]!='Вр'){
                    (gpl[20] = 1);
                } else { gpl[20] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[20] = identifiers[20];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[20],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[20] = 0;a_squad[20] = identifiers[0];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[20],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c21.onclick = function() {
            var b0 = document.getElementById(but21);
            if (c21.checked) {
                b0.disabled = false;
                
                if (poz[21]!='Вр'){
                    (gpl[21] = 1);
                } else { gpl[21] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[21] = identifiers[21];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[21],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[21] = 0;
                a_squad[21] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[21],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c22.onclick = function() {
            var b0 = document.getElementById(but22);
            if (c22.checked) {
                b0.disabled = false;
                
                if (poz[22]!='Вр'){
                    (gpl[22] = 1);
                } else { gpl[22] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[22] = identifiers[22];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[22],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[22] = 0;
                a_squad[22] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[22],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c23.onclick = function() {
            var b0 = document.getElementById(but23);
            if (c23.checked) {
                b0.disabled = false;
                
                if (poz[23]!='Вр'){
                    (gpl[23] = 1);
                } else { gpl[23] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[23] = identifiers[23];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[23],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[23] = 0;
                a_squad[23] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[23],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c24.onclick = function() {
            var b0 = document.getElementById(but24);
            if (c24.checked) {
                b0.disabled = false;
                
                if (poz[24]!='Вр'){
                    (gpl[24] = 1);
                } else { gpl[24] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[24] = identifiers[24];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[24],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[24] = 0;
                a_squad[24] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[24],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c25.onclick = function() {
            var b0 = document.getElementById(but25);
            if (c25.checked) {
                b0.disabled = false;
                
                if (poz[25]!='Вр'){
                    (gpl[25] = 1);
                } else { gpl[25] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[25] = identifiers[25];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[25],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[25] = 0;
                a_squad[25] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[25],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c26.onclick = function() {
            var b0 = document.getElementById(but26);
            if (c26.checked) {
                b0.disabled = false;
                
                if (poz[26]!='Вр'){
                    (gpl[26] = 1);
                } else { gpl[26] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[26] = identifiers[26];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[26],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[26] = 0;
                a_squad[26] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[26],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c27.onclick = function() {
            var b0 = document.getElementById(but27);
            if (c27.checked) {
                b0.disabled = false;
                
                if (poz[27]!='Вр'){
                    (gpl[27] = 1);
                } else { gpl[27] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[27] = identifiers[27];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[27],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[27] = 0;
                a_squad[27] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[27],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c28.onclick = function() {
            var b0 = document.getElementById(but28);
            if (c28.checked) {
                b0.disabled = false;
                
                if (poz[28]!='Вр'){
                    (gpl[28] = 1);
                } else { gpl[28] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[28] = identifiers[28];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[28],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[28] = 0;
                a_squad[28] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[28],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c29.onclick = function() {
            var b0 = document.getElementById(but29);
            if (c29.checked) {
                b0.disabled = false;
                
                if (poz[28]!='Вр'){
                    (gpl[28] = 1);
                } else { gpl[28] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[29] = identifiers[29];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[29],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[29] = 0;
                a_squad[29] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[29],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c30.onclick = function() {
            var b0 = document.getElementById(but30);
            if (c30.checked) {
                b0.disabled = false;
                
                if (poz[30]!='Вр'){
                    (gpl[30] = 1);
                } else { gpl[30] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[30] = identifiers[30];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[30],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[30] = 0;
                a_squad[30] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[30],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c31.onclick = function() {
            var b0 = document.getElementById(but31);
            if (c31.checked) {
                b0.disabled = false;
                
                if (poz[31]!='Вр'){
                    (gpl[31] = 1);
                } else { gpl[31] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[31] = identifiers[31];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[31],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[31] = 0;
                a_squad[31] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[31],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c32.onclick = function() {
            var b0 = document.getElementById(but32);
            if (c32.checked) {
                b0.disabled = false;
                
                if (poz[32]!='Вр'){
                    (gpl[32] = 1);
                } else { gpl[32] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[32] = identifiers[32];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[32],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[32] = 0;
                a_squad[32] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[32],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c33.onclick = function() {
            var b0 = document.getElementById(but33);
            if (c33.checked) {
                b0.disabled = false;
                
                if (poz[33]!='Вр'){
                    (gpl[33] = 1);
                } else { gpl[33] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[33] = identifiers[33];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[33],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[33] = 0;
                a_squad[33] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[33],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c34.onclick = function() {
            var b0 = document.getElementById(but34);
            if (c34.checked) {
                b0.disabled = false;
                
                if (poz[34]!='Вр'){
                    (gpl[34] = 1);
                } else { gpl[34] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[34] = identifiers[34];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[34],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[34] = 0;
                a_squad[34] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[34],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c35.onclick = function() {
            var b0 = document.getElementById(but35);
            if (c35.checked) {
                b0.disabled = false;
                
                if (poz[35]!='Вр'){
                    (gpl[35] = 1);
                } else { gpl[35] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[35] = identifiers[35];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[35],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[35] = 0;
                a_squad[35] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[35],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c36.onclick = function() {
            var b0 = document.getElementById(but36);
            if (c36.checked) {
                b0.disabled = false;
                
                if (poz[36]!='Вр'){
                    (gpl[36] = 1);
                } else { gpl[36] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[36] = identifiers[36];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[36],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[36] = 0;
                a_squad[36] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[36],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c37.onclick = function() {
            var b0 = document.getElementById(but37);
            if (c37.checked) {
                b0.disabled = false;
                
                if (poz[37]!='Вр'){
                    (gpl[37] = 1);
                } else { gpl[37] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[37] = identifiers[37];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[37],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[37] = 0;
                a_squad[37] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[37],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c38.onclick = function() {
            var b0 = document.getElementById(but38);
            if (c38.checked) {
                b0.disabled = false;
                
                if (poz[38]!='Вр'){
                    (gpl[38] = 1);
                } else { gpl[38] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[38] = identifiers[38];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[38],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[38] = 0;
                a_squad[38] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[38],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c39.onclick = function() {
            var b0 = document.getElementById(but39);
            if (c39.checked) {
                b0.disabled = false;
                
                if (poz[39]!='Вр'){
                    (gpl[39] = 1);
                } else { gpl[39] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[39] = identifiers[39];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[39],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[39] = 0;
                a_squad[39] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[39],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c40.onclick = function() {
            var b0 = document.getElementById(but40);
            if (c40.checked) {
                b0.disabled = false;
                
                if (poz[40]!='Вр'){
                    (gpl[40] = 1);
                } else { gpl[40] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[40] = identifiers[40];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[40],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[40] = 0;
                a_squad[40] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[40],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c41.onclick = function() {
            var b0 = document.getElementById(but41);
            if (c41.checked) {
                b0.disabled = false;
                
                if (poz[41]!='Вр'){
                    (gpl[41] = 1);
                } else { gpl[41] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[41] = identifiers[41];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[41],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[41] = 0;
                a_squad[41] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[41],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c42.onclick = function() {
            var b0 = document.getElementById(but42);
            if (c42.checked) {
                b0.disabled = false;
                
                if (poz[42]!='Вр'){
                    (gpl[42] = 1);
                } else { gpl[42] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[42] = identifiers[42];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[42],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[42] = 0;
                a_squad[42] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[42],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c43.onclick = function() {
            var b0 = document.getElementById(but43);
            if (c43.checked) {
                b0.disabled = false;
                
                if (poz[43]!='Вр'){
                    (gpl[43] = 1);
                } else { gpl[43] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[43] = identifiers[43];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[43],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[43] = 0;
                a_squad[43] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[43],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c44.onclick = function() {
            var b0 = document.getElementById(but44);
            if (c44.checked) {
                b0.disabled = false;
                
                if (poz[44]!='Вр'){
                    (gpl[44] = 1);
                } else { gpl[44] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[44] = identifiers[44];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[44],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[44] = 0;
                a_squad[44] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[44],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c45.onclick = function() {
            var b0 = document.getElementById(but45);
            if (c45.checked) {
                b0.disabled = false;
                
                if (poz[45]!='Вр'){
                    (gpl[45] = 1);
                } else { gpl[45] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[45] = identifiers[45];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[45],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[45] = 0;
                a_squad[45] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[45],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c46.onclick = function() {
            var b0 = document.getElementById(but46);
            if (c46.checked) {
                b0.disabled = false;
                
                if (poz[46]!='Вр'){
                    (gpl[46] = 1);
                } else { gpl[46] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[46] = identifiers[46];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[46],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[46] = 0;
                a_squad[46] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[46],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c47.onclick = function() {
            var b0 = document.getElementById(but47);
            if (c47.checked) {
                b0.disabled = false;
                
                if (poz[47]!='Вр'){
                    (gpl[47] = 1);
                } else { gpl[47] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[47] = identifiers[47];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[47],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[47] = 0;
                a_squad[47] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[47],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c48.onclick = function() {
            var b0 = document.getElementById(but48);
            if (c48.checked) {
                b0.disabled = false;
                
                if (poz[48]!='Вр'){
                    (gpl[48] = 1);
                } else { gpl[48] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[48] = identifiers[48];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[48],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[48] = 0;
                a_squad[48] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[48],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c49.onclick = function() {
            var b0 = document.getElementById(but49);
            if (c49.checked) {
                b0.disabled = false;
                
                if (poz[49]!='Вр'){
                    (gpl[49] = 1);
                } else { gpl[49] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[49] = identifiers[49];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[49],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[49] = 0;
                a_squad[49] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[49],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c50.onclick = function() {
            var b0 = document.getElementById(but50);
            if (c50.checked) {
                b0.disabled = false;
                
                if (poz[50]!='Вр'){
                    (gpl[50] = 1);
                } else { gpl[50] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[50] = identifiers[50];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[50],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[50] = 0;
                a_squad[50] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[50],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c51.onclick = function() {
            var b0 = document.getElementById(but51);
            if (c51.checked) {
                b0.disabled = false;
                
                if (poz[51]!='Вр'){
                    (gpl[51] = 1);
                } else { gpl[51] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[51] = identifiers[51];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[51],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[51] = 0;
                a_squad[51] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[51],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c52.onclick = function() {
            var b0 = document.getElementById(but52);
            if (c52.checked) {
                b0.disabled = false;
                
                if (poz[52]!='Вр'){
                    (gpl[52] = 1);
                } else { gpl[52] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[52] = identifiers[52];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[52],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[52] = 0;
                a_squad[52] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[52],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c53.onclick = function() {
            var b0 = document.getElementById(but53);
            if (c53.checked) {
                b0.disabled = false;
                
                if (poz[53]!='Вр'){
                    (gpl[53] = 1);
                } else { gpl[53] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[53] = identifiers[53];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[53],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[53] = 0;
                a_squad[53] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[53],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c54.onclick = function() {
            var b0 = document.getElementById(but54);
            if (c54.checked) {
                b0.disabled = false;
                
                if (poz[54]!='Вр'){
                    (gpl[54] = 1);
                } else { gpl[54] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[54] = identifiers[54];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[54],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[54] = 0;
                a_squad[54] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[54],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c55.onclick = function() {
            var b0 = document.getElementById(but55);
            if (c55.checked) {
                b0.disabled = false;
                
                if (poz[55]!='Вр'){
                    (gpl[55] = 1);
                } else { gpl[55] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[55] = identifiers[55];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[55],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[55] = 0;
                a_squad[55] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[55],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c56.onclick = function() {
            var b0 = document.getElementById(but56);
            if (c56.checked) {
                b0.disabled = false;
                
                if (poz[56]!='Вр'){
                    (gpl[56] = 1);
                } else { gpl[56] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[56] = identifiers[56];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[56],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[56] = 0;
                a_squad[56] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[56],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c57.onclick = function() {
            var b0 = document.getElementById(but57);
            if (c57.checked) {
                b0.disabled = false;
                
                if (poz[57]!='Вр'){
                    (gpl[57] = 1);
                } else { gpl[57] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[57] = identifiers[57];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[57],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[57] = 0;
                a_squad[57] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[57],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c58.onclick = function() {
            var b0 = document.getElementById(but58);
            if (c58.checked) {
                b0.disabled = false;
                
                if (poz[58]!='Вр'){
                    (gpl[58] = 1);
                } else { gpl[58] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[58] = identifiers[58];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[58],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[58] = 0;
                a_squad[58] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[58],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
        c59.onclick = function() {
            var b0 = document.getElementById(but59);
            if (c59.checked) {
                b0.disabled = false;
                
                if (poz[59]!='Вр'){
                    (gpl[59] = 1);
                } else { gpl[59] = 0 }
                
                b0.style.backgroundColor = b;
                a_squad[59] = identifiers[59];
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[59],
                            prtk: protokol,
                            check: ch1
                        }
                    });
            } else {
                b0.disabled = true;
                b0.style.backgroundColor = unactive;
                gpl[59] = 0;
                a_squad[59] = 0;
                $.ajax({
                        url: 'ajax_squad.php',
                        type: 'POST',
                        data: {
                            identy: identifiers[59],
                            prtk: protokol,
                            check: ch2
                        }
                    });
            }
        }
// -------------------------------------------------------переменные из php
        
    </script>