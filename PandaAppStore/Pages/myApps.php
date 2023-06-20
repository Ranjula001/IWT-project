<script src="Js/sendToken.js"></script>
<ul class="cate-menu">
    <li class="cate-menu"><a href="?page=freeApps" class="apptype">Free Apps</a></li> 
    <li class="cate-menu"><a href="?page=paidApps" class="apptype">Paid Apps</a></li>
</ul>

<div class="comtainer-fluid">
    <?php
    $data = array(
        array("app1", "Facebook", "IMAGE/Apps/Facebook.png", 0, "$2.50"),
        array("app2", "Instragram", "IMAGE/Apps/Instagram.png", 0, "$2.50"),
        array("app3", "Picn2k", "IMAGE/Apps/picn2k.png", 1, "$2.50"),
        array("app4", "Whatsapp", "IMAGE/Apps/Whatsapp.jpg", 0, "$2.50"),
        array("app5", "TeamSpeak", "IMAGE/Apps/TeamSpeak.jpg", 1, "$2.50"),
        array("app6", "SnapChat", "IMAGE/Apps/SnapChat.jpg", 0, "$2.50"),
        array("app7", "YouTube", "IMAGE/Apps/YouTube.png", 0, "$2.50"),
        array("app8", "Spotify", "IMAGE/Apps/Spotify.png", 0, "$2.50"),
        array("app9", "NewState", "IMAGE/Apps/NewState.jfif", 1, "$2.50"),
    );
    ?>
    <h2 class="p-2">App Suggestions</h2>
    <div class="row g-0 p-2">
        <?php for ($i = 0; $i < sizeof($data); $i++) { ?>
            <div class="col-xl-2 col-md-3 col-sm-4 col-xs-12">
                <div class="card p-2 m-2">
                    <img src=<?php echo $data[$i][2] ?> class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $data[$i][1] ?></h5>
                        <button type="button" class="btn btn-primary">
                            <a class="text-light" style="text-decoration: none;" href=<?php echo "?page=download&id=" . $data[$i][0] ?>><?php echo $data[$i][3] == 0  ? "Get" : $data[$i][4] ?></a>
                        </button>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>