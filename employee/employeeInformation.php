<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/689f460c4e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <!--HEADER -->
  
  <!--/HEADER -->

  <!-- main -->
   <main>
    <div class="container ">
        <div class="row">
            <div class="profile_container">
                <div class="containerProfile" id="profile">
                    <img src="me.jpg" alt="Profile Picture">
                    <div class="content">
                        <h3>Juan Delacruz </h3>
                        <p>HR Admin</p>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
  <!-- Information -->
  <div class="row-md-3 p-4" >
    <ul class="nav nav-tabs p-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Personal Information</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Account Information</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Change Password</button>
        </li>
    </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <div class="row  m-3 p-3 mb-2 mt-3" id="info-container">
        <div class="col_information">
            <div class="col1">
                <img src="me.jpg" alt="Profile Picture">
                <div class="mb-2">
                    <label for="formFileSm" class="form-label">Profile Picture</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
            </div>
            <div class="col2">
            <form class="row m-5 mt-1">
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationDefault01" value="" placeholder="Juan" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault02" class="form-label">Middle name</label>
                <input type="text" class="form-control" id="validationDefault02" value="" placeholder="Tamad" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault03" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" value="" placeholder="Delacruz" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault03" class="form-label">DateOfBirth</label>
                <input type="date" class="form-control" id="DateOfBirth" placeholder="01/03/2002" required >
            </div>


            <div class="col-md-4">
                <label for="validationDefault03" class="form-label">Address</label>
                <input type="text" class="form-control" id="Address" placeholder="address" required >
            </div>
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Contact Number</label>
                <input type="number" class="form-control" id="validationDefault01" value="" placeholder="+0966xxxxxxx" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="validationDefault01" value="" placeholder="Email address" required>
            </div>
            

            <div class="col-md-2">
                <label for="validationDefault04" class="form-label">Status</label>
                <select class="form-select" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option>Single</option>
                <option>Taken</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="validationDefault04" class="form-label">Gender</label>
                <select class="form-select" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option>Male</option>
                <option>Female</option>
                </select>
            </div>
        </form>
        </div>
                
            </div>
            
    </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
        </div>

</div>
    
    </div>
   </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>