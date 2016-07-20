<?php include '/inc/header.php'; ?>

    <body>
    <div class="container">

        <div class="page-header">
            <h1>Rest Api Zoom</h1>
        </div>

        <div class="row">

            <div class="col-lg-3">

                <?php include 'inc/nav.php'; ?>

            </div>
            <div class="col-lg-9">

                <table class="table table-striped">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                    </thead>

                    <?php
                    $listWebinars = $zoomApi->listWebinars();

                    $obj = json_decode($listWebinars);

                    foreach ($obj->webinars as $row) {

                        echo "
                        <tr>
                            <td>$row->id</td>
                            <td>$row->topic</td>
                        </tr>";

                    }

                    ?>

                </table>


            </div>

        </div>

    </div>

    </body>

<?php include 'inc/footer.php'; ?>