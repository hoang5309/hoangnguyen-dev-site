<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hoang Nguyen</title>
      <link rel="apple-touch-icon" sizes="180x180" href="../../assets/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicon-16x16.png">
      <link rel="manifest" href="../../assets/site.webmanifest">
      <link   href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"      rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <link rel="stylesheet" href="../../index.css">
    </head>
    <body class="background-0">
        <div class="container" style="margin-top: 0.8rem">
            <div class="main-body">
                <div class="row gutters-sm">
                    <!-- LEFT -->
                    <div class="col-xxl-4 mb-3">
                        <div class="row gutters-sm mb-3">
                            <div class="col-xxl-12 mb-3">
                                <div class="card special-card1 border-blue">
                                    <div class="card-body">
                                        <h2>Email Module</h2>
                                        <p>
                                            This module allows user to select an email template they one, edit the content within the template (user can see the content change live).
                                            Then, send out the email to contacts they selected using sendgrid API.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- ADD CONTACT FORM -->
                            <div class="col-xxl-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3">
                                            <i class="material-icons text-info mr-2">Add New Contact Form</i>
                                        </h6>
                                        <div class="row mb-3">
                                            <div class="col-xxl-12 mb-1">
                                                <div class="form-group">
                                                    <label  for="name">Name</label>
                                                    <input  class="form-control hn-input-sm" id="name" name="name" type="text" 
                                                            placeholder="Name" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 mb-1">
                                                <div class="form-group">
                                                    <label  for="email">Email</label>
                                                    <input  class="form-control hn-input-sm" id="email" name="email" type="text" 
                                                            placeholder="Email"autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xxl-4">
                                                <button class="btn btn-rounded btn-space btn-primary" id="createNewContact">Add New Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CONTACT LIST -->
                            <div class="col-xxl-12 mb-3">
                                <div class="card contact-list-card">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3">
                                            <i class="material-icons text-info mr-2">Contact List</i>
                                        </h6>
                                        <div class="row">
                                            <div class="col-xxl-12 email-table">
                                                <table class="table table-striped table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th>name</th>
                                                            <th style="width:30%;">Email</th>
                                                            <th class="actions" style="width:5%;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="no-border-x" id="tableHN">
                                                        <tr>
                                                            <td>Hoang Nguyen</td>
                                                            <td class="text-success">hoang_hoang5309@hotmail.com</td>
                                                            <td class="actions">
                                                                <i class="zmdi zmdi-plus-circle-o clickable" value="hoang_hoang5309@hotmail.com-Hoang Nguyen"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hoang Dev</td>
                                                            <td class="text-success">hoangdev5309@gmail.com</td>
                                                            <td class="actions">
                                                                <i class="zmdi zmdi-plus-circle-o clickable" value="hoangdev5309@gmail.com-Hoang Dev"></i>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <h2 class="hn-divider-text-sm"><span>Selected List</span></h2>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-xxl-12" id="customerList">
                                                
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 mb-3">
                                <div class="card card-loading" id="cardLoading">
                                    <div class="card-body">
                                        <div class="loader">
                                            <span style="color: #4285F4">S</span>
                                            <span style="color: #EA4335">E</span>
                                            <span style="color: #FBBC05">N</span>
                                            <span style="color: #4285F4">D</span>
                                            <span style="color: #34A853">I</span>
                                            <span style="color: #4285F4">N</span>
                                            <span style="color: #EA4335">G</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEND MAIL BUTTON -->
                            <div class="col-xxl-12 mb-3">
                                <button class="btn btn-rounded btn-space btn-primary w-100" id="sendEmailBtn">Send Email</button>
                            </div>
                        </div>
                    </div>
                    <!-- RIGHT -->
                    <div class="col-xxl-8 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3">
                                    <i class="material-icons text-info mr-2">Email</i>
                                </h6>
                                <div class="row mb-3" id="emailDivTemplate">
 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"  crossorigin="anonymous"></script>
        <script src="email.js"></script>
    </body>
</html>