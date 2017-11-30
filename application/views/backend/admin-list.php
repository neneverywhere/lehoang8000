<?php if($this->session->userdata('User_Group')==2) { ?>
<div class="list-menu">
  <div class="panel panel-default">
    <div class="panel-heading">
      <span>Quản lý thành viên</span>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th width="5%">#</th>
          <th width="15%">Tên</th>
          <th width="15%">Email</th>
          <th width="15%">Điện thoại</th>
          <th width="15%">Phân quyền</th>
          <th width="15%">Ngày tạo</th>
          <th width="10%">Trạng thái</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      $i = 1;
      foreach ($ListAdmin as $key) { ?>
        <tr>
          <td><?=$i++?></td>
          <td><?=$key['User_Name']?></td>
          <td><?=$key['User_Email']?></td>
          <td><?=$key['User_Mobile']?></td>
          <td>
            <b>
            <?php if($key['User_Group']==0) echo 'Editor' ?>
            <?php if($key['User_Group']==1) echo 'Admin' ?>
            </b>
          </td>
          <td>
            <?php 
              $date = new DateTime($key['User_Date']);
              echo $date->format('d/m/Y'); // Hiển thị ngày tháng dạng d/m/Y
            ?>
          </td>
          <td class="text-center">
            <?php if ($key['User_Active']==1) {?> <img title="kích hoạt" width="30" src="<?=base_url()?>public/backend/images/active.png" alt=""> <?php } ?>
            <?php if ($key['User_Active']==0) {?> <img title="chưa kích hoạt" width="30" src="<?=base_url()?>public/backend/images/disable.png" alt=""> <?php } ?>
          </td>
          <td class="action">
            <a href="<?=base_url()?>backend/c_admin/DetailUser/<?=$key['User_ID']?>" title="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="<?=base_url()?>backend/c_admin/DeleteUser/<?=$key['User_ID']?>" onclick='return confirm("Bạn có chắc muốn xóa thành viên này không ?")' title="delete"><i style="color: red" class="fa fa-trash-o" aria-hidden="true"></i></a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>          
</div>
<?php }else echo 'Bạn không có quyền vào trang này' ?>