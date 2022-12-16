<?php
if (!empty($title)) {
    $this->assign("title", $title);
}

$this->Html->css([
    "/plugins/datatables-bs4/css/dataTables.bootstrap4.css"
], ["block" => "TopStyleLinks"]);

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>List Clients</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">List Clients</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">List Clients</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tbl-clients" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Company Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Personal Code</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (count($clients) > 0) {

                                    foreach ($clients as $client) {
                                ?>
                                        <tr>
                                            <td><?= $client->id ?></td>
                                            <td><?= "<b>First Name: </b>" . $client->f_name . "<br/><b>Last Name: </b>" . $client->l_name . "<br/><b>Personal Code: </b>" . $client->personal_code . "<br/><b>Email: </b>" . $client->email ?></td>
                                            <td><?= isset($client->client_company->name) ? $client->client_company->name : "N/A"; ?></td>
                                            <td>
                                                <form action="<?= $this->Url->build('/admin/delete-client/' . $client->id, ['fullBase' => true]) ?>" method="post" id="frm-delete-client-<?= $client->id ?>">
                                                    <input type="hidden" name="id" value="$client->id" />
                                                </form>
                                                <a href="<?= $this->Url->build('/admin/edit-client/' . $client->id, ['fullBase' => true]) ?>" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0)" onclick="if(confirm('Are you sure want to delete ?')){ $('#frm-delete-client-<?= $client->id ?>').submit() }" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?=
    $this->Html->script([
        "/plugins/datatables/jquery.dataTables.js",
        "/plugins/datatables-bs4/js/dataTables.bootstrap4.js"
    ], ["block" => "bottomScriptLinks"]);
?>

<?php
$this->Html->scriptStart(["block" => true]);
echo '$("#tbl-clients").DataTable();';
$this->Html->scriptEnd();
?>