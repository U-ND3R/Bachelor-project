<?php
if (!empty($title)) {
    $this->assign("title", $title);
}
?>
<?=
    $this->Html->css([
        "pickmeup.css"
    ], ["block" => "TopStyleLinks"])
?>
<style>
    #frm-edit-client label.error {
        color: red;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Edit Client</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Client</li>
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
                        <h3 class="card-title">Edit Client</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?=
                            $this->Form->create($client, [
                                "id" => "frm-edit-client"
                            ])
                        ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Company*</label>
                                    <select required class="form-control" name="company_id" id="company_id">
                                        <option value="">Choose Company</option>
                                        <?php
                                        if (count($companies) > 0){
                                            foreach ($companies as $index => $company){
                                        ?>
                                                <option <?= $branch->company_id == $company->id ? "selected" : "" ?> value="<?= $company->id ?>"><?= strtoupper($company->name) ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name (first 3 letters)*</label>
                                    <input type="text" value="<?= $client->f_name ?>" required name="f_name" id="f_name" minlength="3" maxlength="3" placeholder="E.g. Jon (Jonas)" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name (first 3 letters)*</label>
                                    <input type="text" value="<?= $client->l_name ?>" required name="l_name" id="l_name" minlength="3" maxlength="3" placeholder="E.g. Jon (Jonaitis)" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Personal Code (last 4 digits)*</label>
                                    <input type="number" value="<?= $client->personal_code ?>" required name="personal_code" id="personal_code" minlength="4" maxlength="4" placeholder="E.g. 1234" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                     <label>Email*</label>
                                     <input type="email" value="<?= $client->email ?>" required name="email" id="email" placeholder="E.g. jonasjonaitis@example.lt" class="form-control" />
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Status*</label>
                                    <select required class="form-control" name="status" id="status">
                                        <option <?= $client->status == 1 ? "selected" : "" ?> value="1">Active</option>
                                        <option <?= $client->status == 0 ? "selected" : "" ?> value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <button name="btn_submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
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
        "jquery.validate.min.js",
        "pickmeup.js"
    ], ["block" => "bottomScriptLinks"]);
?>

<?php
$this->Html->scriptStart(["block" => true]);
echo '$("#frm-edit-client").validate();';
$this->Html->scriptEnd();
?>