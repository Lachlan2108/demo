<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show <?php echo $Name->Name; ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo site_url('itemCRUD');?>"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <?php echo $Name->Name; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            <?php echo $Name->Email; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Number:</strong>
            <?php echo $Name->Number; ?>
        </div>
    </div>
</div>