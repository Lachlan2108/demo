<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Codeigniter 3 CRUD Example from scratch</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create') ?>"> Create New Item</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>Title</th>
          <th>Email</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $Name) { ?>      
      <tr>
          <td><?php echo $Name->title; ?></td>
          <td><?php echo $Email->Email; ?></td>   
          <td><?php echo $Number->Number; ?></td>       
      <td>
        <form method="DELETE" action="<?php echo base_url('itemCRUD/delete/'.$Name->User_ID);?>">
          <a class="btn btn-info" href="<?php echo base_url('itemCRUD/'.$Name->User_ID) ?>"> show</a>
         <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/edit/'.$Name->User_ID) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>