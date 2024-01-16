<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
     
      <div class="content-wrapper">
        <div class="container">

          <!-- Main content -->
          <section class="content">
            <div class="row">
                <div class="col-sm-9">
                    <?php
                        if(isset($_SESSION['error'])){
                            echo "
                                <div class='alert alert-danger'>
                                    ".$_SESSION['error']."
                                </div>
                            ";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <h2>Feel Free To Contact Us Here For Support</h2>
                    <p>
                        Syed Zafran Haider: zraaeae@gmail.com</p>
                    <p> Abdul Ahad: gokuahad11@gmail.com</p>
                    <p> Huzaifa Iftikhar Ph# +92 323 9583860</p>
                    

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Include your carousel code here -->
                    </div>
                    

                </div>
                <div class="col-sm-3">
                    <?php include 'includes/sidebar.php'; ?>
                </div>
            </div>
          </section>
         
        </div>
      </div>
  
    <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
