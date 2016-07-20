<?php include '/inc/header.php'; ?>

    <body>
    <div class="container">

        <div class="page-header">
            <h1>Rest Api Zoom</h1>
        </div>

        <div class="row">

            <div class="col-lg-4">

                <?php include 'inc/nav.php'; ?>

            </div>
            <div class="col-lg-8">

                <?php
                $listWebinars = $zoomApi->listWebinars();

                $obj = json_decode($listWebinars);

                foreach ($obj->webinars as $item) {

                    echo $item->id." ".$item->topic."<br>";

                }

                ?>

            </div>

        </div>

    </div>

    </body>

<?php include 'inc/footer.php'; ?>