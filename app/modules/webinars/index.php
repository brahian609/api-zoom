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
                        <th></th>
                    </tr>
                    </thead>

                    <?php
                    $listWebinars = $zoomApi->listRegistrationWebinars();

                    $obj = json_decode($listWebinars);

                    foreach ($obj->webinars as $row) {

                        echo "
                        <tr>
                            <td>$row->id</td>
                            <td>$row->topic</td>
                            <td>
                                <a data-toggle='modal' data-target='#modalRegister' class='btn btn-default btn-xs glyphicon glyphicon-user'></a>
                            </td>
                        </tr>";

                    }

                    ?>

                </table>


            </div>

        </div>

    </div>

    <!-- modal registrar asistentes -->
    <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>
    <!-- end modal -->

    </body>

<?php include 'inc/footer.php'; ?>