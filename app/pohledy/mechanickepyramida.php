<?php
/**
 * Created by PhpStorm.
 * User: František
 * Date: 22.06.2017
 * Time: 1:22
 */
?>


<div class="container sghk">
    <form id="tbzp" method="post">
        <input type="radio" name="Pyramida" value="5" id="5" hidden>
        &nbsp; &nbsp;&nbsp;<label for="5"><img src="img/sghk/main.png" alt="" /></label> <br>
        <input type="radio" name="Pyramida" value="4" id="4" >
        <label for="4"><img src="img/sghk/4.png" alt="" /></label> <br>
        <input type="radio" name="Pyramida" value="3" id="3">
        <label for="3"><img src="img/sghk/3.png" alt="" /></label> <br>
        <input type="radio" name="Pyramida" value="2" id="2">
        <label for="2"><img src="img/sghk/2.png" alt="" /></label> <br>
        <input id="1" type="radio" name="Pyramida" value="1")
        " visibilty="hidden">
        <label for="1"><img src="img/sghk/1.png" alt="" /></label> <br>


        <p style="padding-top:5%;" id="vypis"></p>

        <div class="navigace" >
            <button type="submit" name="prev">
                <img src="/img/preview.png" alt="submit" />
            </button>
            <button type="submit" id="next" name="next">
                <img src="/img/next.png" alt="submit" />
            </button>
    </form>
</div>



</div>

<script>
    var uvod='Pyramida bezpečnosti je odborným rádcem při orientaci ve škále výrobků značky FAB poskytujících různou míru zabezpečení. Čtyři barevně odlišné stupně bezpečnosti reprezentují jednotlivé bezpečnostní třídy dle normy ČSN P ENV 1627. Ta definuje odolnost výrobků např. proti odvrtání, vyhmatání, vytržení, hrubému násilí, atd. Hodnocení a certifikaci výrobků zajišťuje nezávislá akreditovaná zkušební laboratoř a certifikační orgán. PYRAMIDA usnadňuje volbu při výběru vhodných výrobků splňujících požadovanou úroveň  zabezpečení majetku.';
    document.getElementById("vypis").innerHTML=uvod;
    $("#next").hide();



    $(document).ready(function(){
        $("input[type=radio]").click(function(){
            $("#tbzp").val(this.value);
            order=$("#tbzp").val();
            switch(order){
                case "1":
                    text="Výrobky nejsou certifikovány, systém generálního klíče. Není možné vyrobit. <br/>Vyberte jinou třídu bezpečnosti.";
                    document.getElementById("vypis").innerHTML=text;
                    $("#next").hide();
                    break;

                case "2":
                    text="Základní ochrana (vhodné pouze pro systémy malého rozsahu bez zvýšeného nároku na bezpečnost).";
                    document.getElementById("vypis").innerHTML=text;
                    $("#next").show();
                    break;

                case "3":
                    text="Vysoká ochrana nejčastější třída bezpečnosti pro výrobu systémů malého a středního rozsahu.";
                    document.getElementById("vypis").innerHTML=text;
                    $("#next").show();
                    break;

                case "4":
                    text="Velmi vysoká ochrana vhodné pro projekty malého, středního i velkého rozsahu.";
                    document.getElementById("vypis").innerHTML=text;
                    $("#next").show();
                    break;

                case "5":
                    document.getElementById("vypis").innerHTML=uvod;
                    $("#next").hide();
                    break;

                default:
                    document.getElementById("vypis").innerHTML=uvod;
                    $("#next").hide();
                    break;

            }

        });
    });


    function  testTBZP(tbzp){
        text="Velmi vysoká ochrana vhodné pro projekty malého, středního i velkého rozsahu.";
        document.getElementById("vypis").innerHTML=text;

    }





</script>


