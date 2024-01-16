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
                    <h2>Welcome to Our Project</h2>
                    <p>
                        we strive to provide the best products to our customers with a commitment to quality and excellence. Our journey began with a passion for [your industry or product], and since then, we have been dedicated to offering exceptional services and building lasting relationships.
                    </p>

                    <h3>Our Mission</h3>
                    <p>
                        Our mission is to Be The first choice For Your Dream. We aim to Deliver Product in Really Good Price.
                    </p>

                    <h3>Top Sellers and Featured Products</h3>
                    <p>
                        Explore our top-selling products and featured items that showcase the essence of our commitment to quality and customer satisfaction.
                    </p>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Include your carousel code here -->
                    </div>

                    <h3>Meet the Team</h3>
                    <p>
                        Behind Our Company is a dedicated team of professionals passionate about your industry or product. Meet the individuals who work tirelessly to bring you the best products and services.
                        Syed Zafran Haider,Abdul Ahad,Huzaifa Iftikhar Thank you
                    </p>

                    

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
