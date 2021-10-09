<?php include('inc/header.php') ;?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Wellcome: Nayon Talukder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Read Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Send Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
     
    </ul>
  </div>
</nav>
    <section id="user_dashboard">
      <div class="container">
          <div class="row">
           
                <div class="col-md-6">
                   <a href="all_information.php">
                    <div class="card user__read_info bg-info">
                            <div class="user__read_info_icons">
                                <i><i class="fa fa-info-circle" aria-hidden="true"></i></i>
                            </div>
                            <div class="user__read_info_text">
                                <h3>All Information</h3>
                            </div>
                        </div>
                   </a>
                </div>
                <div class="col-md-6">
                    <a href="send_information.php">
                        <div class="card user__read_info bg-primary">
                            <div class="user__read_info_icons">
                                <i><i class="fa fa-info-circle" aria-hidden="true"></i></i>
                            </div>
                            <div class="user__read_info_text">
                                <h3>Send Information</h3>
                            </div>
                        </div>
                    </a>
                </div>
             </div>
      
      </div>

    </section>      
    <?php include('inc/footer.php'); ?>
 