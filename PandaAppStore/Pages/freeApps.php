<script src="Js/sendToken.js"></script>
<ul class="cate-menu">
    <li class="cate-menu"><a href="?page=myApps" class="apptype">Go-Back</a></li>
    <li class="cate-menu"><a href="?Page=PaidApps" class="apptype">Paid Apps</a></li>
</ul>

<div class="comtainer-flude">
    <?php
    $data = array(
        array("app1", "Facebook", "IMAGE/Apps/Facebook.png", 0, "$0.00"),
        array("app2", "Instagram", "IMAGE/Apps/Instagram.png", 0, "$0.00"),
        array("app4", "Whatsapp", "IMAGE/Apps/Whatsapp.jpg", 0, "$0.00"),
        array("app5", "TeamSpeak 3", "IMAGE/Apps/TeamSpeak.jpg", 0, "$0.00"),
        array("app6", "SnapChat", "IMAGE/Apps/SnapChat.jpg", 0, "$0.00"),
        array("app7", "YouTube", "IMAGE/Apps/YouTube.png", 0, "$0.00"),
        array("app8", "Spotify", "IMAGE/Apps/Spotify.png", 0, "$0.00"),
        array("app10", "Socratic", "IMAGE/Apps/socratic.png", 0, "$0.00"),
        array("app11", "Zoom Meeting", "IMAGE/Apps/Zoom.png", 0, "$0.00"),
        array("app12", "MS Teams", "IMAGE/Apps/Teams.png", 0, "$0.00"),
        array("app13", "PUBG", "IMAGE/Apps/PUBG.png", 0, "$0.00"),
        array("app14", "Wikipedia", "IMAGE/Apps/wikipedia.png", 0, "$0.00"),
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