<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lachlan Crud thing</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo site_url('itemCRUD/create') ?>"> Create New Item</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
            <th>User ID</th>
            <th>Title</th>
            <th>Email</th>
            <th>Number</th>
            <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $Data) { ?>      
      <tr>
            <td><?php echo $Data->User_ID; ?></td>
            <td><?php echo $Data->Name; ?></td>
            <td><?php echo $Data->Email; ?></td>   
            <td><?php echo $Data->Number; ?></td>       
      <td>
        <form method="DELETE" action="<?php echo site_url('itemCRUD/delete/'.$Data->User_ID);?>">
            <a class="btn btn-info" href="<?php echo site_url('itemCRUD/'.$Data->User_ID) ?>"> show</a>
            <a class="btn btn-primary" href="<?php echo site_url('itemCRUD/edit/'.$Data->User_ID) ?>"> Edit</a>
            <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>