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
      <link rel="stylesheet" href="../../index.css">
    </head>
    <body class="background-0">
        <div class="container" style="margin-top: 0.8rem">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-xxl-4 mb-3">
                        <div class="row gutters-sm mb-3">
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
                                <button class="btn btn-rounded btn-space btn-primary w-100" id="createNewContact">Send Email</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3">
                                    <i class="material-icons text-info mr-2">Email</i>
                                </h6>
                                <div class="row mb-3">
                                    <div class="col-xxl-4">
                                        <form id="sendEmailCampaignForm" _lpchecked="1">
                                            <div class="form-body email-form" id="emailForm">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailTemplate">Templates</label>
                                                            <select class="form-control" id="emailTemplate" name="emailTemplate">
                                                                <option>Template 1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailSubject">Subject</label>
                                                            <input type="text" id="emailSubject" class="form-control" name="emailSubject" placeholder="Subject" value="Subject">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailTitle">Title</label>
                                                            <input type="text" id="emailTitle" class="form-control" name="emailTitle" placeholder="Title" value="Donation Is The Best Humanity">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailCT1">Content Title 1:</label>
                                                            <input type="text" id="emailCT1" class="form-control" name="emailCT1" placeholder="Content Title 1" value="We are here to help the People in need">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailC1">Content 1:</label>
                                                            <textarea class="form-control" name="emailC1" id="emailC1" rows="6">Volutpat sit amet leo id, efficitur mattis turpis. Dunec bibendum est. Proin ligula nisl, mattiss ollicitudin and magna et, rhvenena ipsum efficitur turpis. Dunec bibendum est.</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailC2">Content 2:</label>
                                                            <textarea class="form-control" name="emailC2" id="emailC2" rows="4">Amet leo id, efficitur mattis turpis. Dunec bibendum est. Proin ligula nisl, mattiss ollicitudin and magna.</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailLM">Learn More URL</label>
                                                            <input type="text" id="emailLM" class="form-control" name="emailLM" placeholder="Learn More URL" value="https://www.google.com">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailFooterPhone">Phone</label>
                                                            <input type="text" id="emailFooterPhone" class="form-control" name="emailFooterPhone" placeholder="Phone" value="+1.234.556789">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailFooterEmail">Email</label>
                                                            <input type="text" id="emailFooterEmail" class="form-control" name="emailFooterEmail" placeholder="Email" value="sampleenail123@gmail.com">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <ul class="nav nav-tabs nav-justified" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="homeIcon-tab" data-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="profileIcon-tab" data-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="#aboutIcon" aria-controls="about" role="tab" aria-selected="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                                                                <input type="text" id="facebookFooter" class="form-control" name="facebookFooter" placeholder="Facebook" value="http://facebook.com">
                                                            </div>
                                                            <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                                                                <input type="text" id="twitterFooter" class="form-control" name="twitterFooter" placeholder="Twitter" value="https://twitter.com/">
                                                            </div>
                                                            <div class="tab-pane" id="aboutIcon" aria-labelledby="aboutIcon-tab" role="tabpanel">
                                                                <input type="text" id="instagramFooter" class="form-control" name="instagramFooter" placeholder="Instagram" value="https://www.instagram.com/">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xxl-8">
                                        <div class="template-container">
                                            <?php 
                                                $file = file_get_contents("../../assets/email-templates/template1/template1.php");
                                                echo $file;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="row gutters-sm mb-3">
                    <div class="col-xxl-5">

                    </div>
                    <div class="col-xxl-7">
                        
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-xxl-12">
                       
                    </div>
                </div>
                -->
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5Cnxxl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="email.js"></script>
    </body>
</html>