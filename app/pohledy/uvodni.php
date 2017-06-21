<?php
/**
 * Created by PhpStorm.
 * User: František
 * Date: 21.06.2017
 * Time: 19:38
 */
?>
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="konfigurator-box">
                <a href="mechanicke">
                    <div>
                        <img src="<?= STATIC_IMG ?>fabka.png" alt="">
                        <h3>Mechanické systémy generálního klíče</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="konfigurator-box">
                <a href="#">
                    <div>
                        <img src="<?= STATIC_IMG ?>unnamed.png" alt="">
                        <h3>Mechatronické systémy generálního klíče</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="konfigurator-box">
                <a href="#">
                    <div>
                        <img src="<?= STATIC_IMG ?>hid.png" alt="">
                        <h3>Čipové přístupové systémy</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="reference">
        <h3>Reference</h3>
        <hr>

        <ul id="flexiselDemo3">
            <li><img src="<?= STATIC_IMG ?>loga/muzeum.png"/></li>
            <li><img src="<?= STATIC_IMG ?>loga/ct.png"/></li>
            <li><img src="<?= STATIC_IMG ?>loga/mvcr.png"/></li>
            <li><img src="<?= STATIC_IMG ?>loga/csob.png"/></li>
            <li><img src="<?= STATIC_IMG ?>loga/skoda.png"/></li>
            <li><img src="<?= STATIC_IMG ?>loga/hrad.png"/></li>
        </ul>
    </div>

</div>

<script type="text/javascript">

    $(document).ready(function () {

        $("#flexiselDemo3").flexisel({
            visibleItems: 3,
            itemsToScroll: 1,
            autoPlay: {
                enable: true,
                interval: 2500,
                pauseOnHover: true
            }
        });


    });
</script>