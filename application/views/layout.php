<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('common/header.php');?>
  </head>
  <body>
    <?php $this->load->view('common/nav.php');?>
    <?php $this->load->view($sub_page); ?>
    <?php $this->load->view('common/footer.php'); ?>
    <?php $this->load->view('common/script.php'); ?>
  </body>
</html>