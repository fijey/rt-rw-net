<style>

#jam {
  color:white;
}


</style>




<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
       <i class="fas fa-wifi"></i>
  </div>
  <div class="sidebar-brand-text mx-3">RT/RW NET </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- QUERY MENU  -->
<?php 
  $role_id = $this->session->userdata('role_id');
  $queryMenu = "SELECT `user_menu`.`id`, `menu`
                FROM `user_menu` JOIN `user_access_menu` 
                ON `user_menu` . `id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu` . `role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC 
   ";

   $menu = $this->db->query($queryMenu)->result_array();

?>

 <!-- Looping MENU  -->
 <?php foreach ($menu as $m) : ?>
 <div class="sidebar-heading">
    <?= $m['menu'];?>
</div>

<!-- SIAPKAN SUB_MENU SESUAI MENU  -->
<?php 
$menuId = $m['id'];
$querysubmenu = "SELECT *
                FROM `user_sub_menu` JOIN `user_menu` 
                ON `user_sub_menu` . `menu_id` = `user_menu`.`id`
                WHERE `user_sub_menu` . `menu_id` = $menuId
                AND `user_sub_menu`.`is_active` =1 "; 
                
$subMenu = $this->db->query($querysubmenu)->result_array();
?>

      <?php foreach ($subMenu as $sm) : ?>
      <?php if ($title == $sm ['title']) : ?> 
       <li class="nav-item active">
       <?php else : ?>
        <li class="nav-item">
       <?php endif; ?>
       <a class="nav-link" href="<?= base_url($sm['url']);?>">
       <i class="<?= $sm['icon'];?>"></i>
      <span><?= $sm['title'];?>
      </span></a>
</li>


      <?php endforeach; ?>

      <hr class="sidebar-divider">

      <?php endforeach;?>
 

<!-- Divider -->


<li class="nav-item">
  <a class="nav-link" href="<?= base_url('auth/logout');?>">
    <i class="fas fa-fw fa-sign-out-alt"></i>
    <span>Logout</span></a>
</li>


 




<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<center>
<div id="jam">
        <script language="javascript">
        function jam(){
        var waktu = new Date();
        var jam = waktu.getHours();
        var menit = waktu.getMinutes();
        var detik = waktu.getSeconds();
      
            if (jam < 10){
            jam = "0" + jam;
            }
            if (menit < 10){
            menit = "0" + menit;
            }
            if (detik < 10){
            detik = "0" + detik;
            }
            var jam_div = document.getElementById('jam');
            jam_div.innerHTML = jam + ":" + menit + ":" + detik;
            setTimeout("jam()", 1000);
            }
            jam();
      </script>
      </div>


      <center>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->