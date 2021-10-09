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
    <section id="user_readinfo">
      <div class="container">
          <h2 class="mt-4">View All Information</h2>

          <div class="info">
          <table class="table table-striped mt-3">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th>Acciton</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="view_information.php" class="btn btn-warning text-white"> View</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-warning text-white"> View</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-warning text-white"> View</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-warning text-white"> View</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-warning text-white"> View</a>
                        </td>
                        
                    </tr>
                  
                </tbody>
            </table>
          </div>



      </div>

    </section>      
    <?php include('inc/footer.php'); ?>
 