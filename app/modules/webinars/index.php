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
                                <a data-toggle='tooltip' href='?module=webinars&view=asistentes' title='Asistentes' class='btn btn-default btn-xs glyphicon glyphicon-list'></a>
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
            <form action="?module=webinars&view=register" method="post">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Registrar Asistentes</h4>
                    </div>
                    <div class="modal-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Cargo</th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="first_name" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="last_name" class="form-control" required>
                                </td>
                                <td>
                                    <input type="email" name="email" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="charge" class="form-control" required>
                                    <input type="hidden" name="idWebinars" value="964949390">
                                </td>
                            </tr>
                            </tbody>
                            </thead>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="register" class="btn btn-primary">Guardar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- end modal -->

    </body>

<?php include 'inc/footer.php'; ?>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
