<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
// require_once 'config.php';
<<<<<<< Updated upstream
// $approvedstatus = new approvedstatus();
=======
>>>>>>> Stashed changes

class viewtable extends config{


public function viewFirstTable(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_std` WHERE `status`='PENDING'";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='text-center'> Discounts for Review </h3>";
  echo "<div class='table-responsive'>";
  echo "<table id='scholartable' class='table table-bordered table-sm table-bordered table-hover shadow display' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th class='d-none d-sm-table-cell'>Student Number</th>";
  echo "<th>Fullname</th>";
  echo "<th class='d-none d-sm-table-cell'>Application Type</th>";
  echo "<th class='d-none d-sm-table-cell'>Email Address</th>";
  echo "<th class='d-none d-sm-table-cell'>Status</th>";
  echo "<th style='font-size: 85%;'>Actions</th>";
  echo "</thead>";
  foreach ($result as $data) {
  echo "<tr>";
  echo "<td class='d-none d-sm-table-cell' >$data[stdnumber]</td>";
  echo "<td style='font-size: 85%;'>$data[fullname]</td>";
  echo "<td class='d-none d-sm-table-cell' style='font-size: 85%;'>".$data['application_type']."</td>";
  echo "<td class='d-none d-sm-table-cell'>$data[email]</td>";
  echo "<td class='d-none d-sm-table-cell'>$data[status]</td>";

  echo "<td>
            <a href='editES.php?tn=' class='btn btn-success btn-sm col-12 mt-1'><i class='fa fa-edit'></i>Approve Discounts</a>
            <a href='admesreject.php?tn=' class='btn btn-danger btn-sm col-lg-12 mt-1'><i class='fa fa-trash'></i>Reject Discount</a>
        </td>";
  echo "</tr>";
  }
  echo "</table>";

}

public function viewApproveTable(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_std` WHERE `status`='APPROVE'";
  $data= $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='text-center'> Discounts for Review </h3>";
  echo "<div class='table-responsive'>";
  echo "<table id='scholartable' class='table table-bordered table-sm table-bordered table-hover shadow display' width='100%'>";
  echo "<thead class='thead-dark'>";
  echo "<th class='d-none d-sm-table-cell'>Student Number</th>";
  echo "<th>Fullname</th>";
  echo "<th class='d-none d-sm-table-cell'>Application Type</th>";
  echo "<th class='d-none d-sm-table-cell'>Email Address</th>";
  echo "<th class='d-none d-sm-table-cell'>Status</th>";
  echo "</thead>";
  foreach ($result as $data) {
  echo "<tr>";
  echo "<td class='d-none d-sm-table-cell' >$data[stdnumber]</td>";
  echo "<td style='font-size: 85%;'>$data[fullname]</td>";
  echo "<td class='d-none d-sm-table-cell' style='font-size: 85%;'>".$data['application_type']."</td>";
  echo "<td class='d-none d-sm-table-cell'>$data[email]</td>";
  echo "<td class='d-none d-sm-table-cell'>$data[status]</td>";


  echo "</tr>";
  }
  echo "</table>";

}

//for clientdash
<<<<<<< Updated upstream
public function viewData_client(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user`";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>Verification Requests</h3>";
  echo "<table class='table table-dark table-stripe table-sm'>";
  echo "<thead>
          <tr>
          <th>Student ID</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Degree</th>
          <th>Consent Form</th>
          <th>Status</th>
          <th>Download</th>
          </tr>
  </thead>
  <tbody>";
  foreach ($result as $data) {
    echo "<tr>";
    echo "<td>$data[studentID]</td>";
=======
public function viewData_clients(){
  $user = new user();
  $agentID = $user->data()->id;
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `agentID` = $agentID";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'></h3>";
  echo "<div class='table-responsive'>";
  echo "<table id='candtable' class='table table-borderless  table-hover shadow' width='100%'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th scope='col'>First Name</th>";
  echo "<th scope='col'>Middle Name</th>";
  echo "<th scope='col'>Last Name</th>";
  echo "<th scope='col'>Degree</th>";
  echo "<th scope='col'>Status</th>";
  echo "<th scope='col'>Actions</th>";
  echo "</tr>";
  echo "</thead>";
  foreach ($result as $data) {
    echo "<tr>";
>>>>>>> Stashed changes
    echo "<td>$data[firstName]</td>";
    echo "<td>$data[middleName]</td>";
    echo "<td>$data[lastName]</td>";
    echo "<td>$data[degree]</td>";
<<<<<<< Updated upstream
    echo "<td>$data[consentForm]</td>";
    echo "<td>$data[status]</td>";
    echo "<td><a class='btn btn-success btn-sm' href='#'>Download Certificate</a></td>";
    echo "</tr>";
  }
  echo "</tbody>
  </table>";
=======
    echo "<td>$data[status]</td>";
    echo "<td>";
    if($data['status'] === 'APPROVED'){
      echo "<a class='btn btn-sm'href='pdfcertificates.php?id=$data[id]' download>Download Certificate
      <div class='icon'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-download' viewBox='0 0 16 16'>
      <path d='M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z'/>
      <path d='M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z'/>
    </svg>
          </div>
      </a></td>";
    }
    echo "</tr>";
  }
  echo "</table>";
>>>>>>> Stashed changes
}


public function viewApprovedData(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `status` = 'APPROVED'";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>APPROVED APPLICATIONS</h3>";
<<<<<<< Updated upstream
  echo "<table class='table table-dark table-stripe table-sm'>";
  echo "<thead>
          <tr>
          <th>Student ID</th>
          <th>Agent ID</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Degree</th>
          <th>Date Added</th>
          <th>Consent Form</th>
          <th>Diploma</th>
          <th>Date Completed</th>
          <th>Status</th>
          </tr>
  </thead><tbody>";
  foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[studentID]</td>";
=======
  echo "<div class='table-responsive'>";
  echo "<table id='candtable' class='table table-borderless shadow' width='100%'>";
  echo "<thead>
          <tr>
          <th scope='col'>Agent ID</th>
          <th scope='col'>First Name</th>
          <th scope='col'>Middle Name</th>
          <th scope='col'>Last Name</th>
          <th scope='col'>Degree</th>
          <th scope='col'>Date Added</th>
          <th scope='col'>Consent Form</th>
          <th scope='col'>Diploma</th>
          <th scope='col'>Date Completed</th>
          <th scope='col'>Status</th>

          </tr>
  </thead>";
  foreach ($result as $data) {
      echo "<tr>";
>>>>>>> Stashed changes
      echo "<td>$data[agentID]</td>";
      echo "<td>$data[firstName]</td>";
      echo "<td>$data[middleName]</td>";
      echo "<td>$data[lastName]</td>";
      echo "<td>$data[degree]</td>";
      echo "<td>$data[date_added]</td>";
<<<<<<< Updated upstream
      echo "<td>$data[consentForm]</td>";
      echo "<td>$data[diploma]</td>";
      echo "<td>$data[date_completed]</td>";
      echo "<td>$data[status]</td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
=======
      echo "<td><a href='$data[consentForm]' target='_blank'><i class='bi bi-eye-fill icons'title='View PDF'></i></a><a href='$data[consentForm]' download><i class='bi bi-arrow-down-circle-fill icons'title='Download PDF'></i></a></td>";
      echo "<td><a href='$data[diploma]' target='_blank'><i class='bi bi-eye-fill icons'title='View PDF'></i></a><a href='$data[diploma]' download><i class='bi bi-arrow-down-circle-fill icons'title='Download PDF'></i></a></td>";
      echo "<td>$data[date_completed]</td>";
      echo "<td>$data[status]</td>";
      echo "</tr>";


  }
  echo "</table>";
>>>>>>> Stashed changes
}
public function viewOnHoldData(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `status` = 'ON-HOLD'";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>ON-HOLD APPLICATIONS</h3>";
<<<<<<< Updated upstream
  echo "<table class='table table-dark table-stripe table-sm'>";
  echo "<thead>
          <tr>
          <th>Student ID</th>
          <th>Agent ID</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Degree</th>
          <th>Date Added</th>
          <th>Consent Form</th>
          <th>Diploma</th>
          <th>Status</th>
          <th>Admin Actions</th>
=======
  echo "<div class='table-responsive'>";
  echo "<table id='onHoldtable' class='table table-borderless  table-hover shadow' width='100%'>";
  echo "<thead>
          <tr>
          <th scope='col'>Agent ID</th>
          <th scope='col'>First Name</th>
          <th scope='col'>Middle Name</th>
          <th scope='col'>Last Name</th>
          <th scope='col'>Degree</th>
          <th scope='col'>Date Added</th>
          <th scope='col'>Consent Form</th>
          <th scope='col'>Diploma</th>
          <th scope='col'>Status</th>
          <th scope='col'>Remarks</th>
          <th scope='col'>Actions</th>
>>>>>>> Stashed changes

          </tr>
  </thead><tbody>";
  foreach ($result as $data) {
      echo "<tr>";
<<<<<<< Updated upstream
      echo "<td>$data[studentID]</td>";
=======
>>>>>>> Stashed changes
      echo "<td>$data[agentID]</td>";
      echo "<td>$data[firstName]</td>";
      echo "<td>$data[middleName]</td>";
      echo "<td>$data[lastName]</td>";
      echo "<td>$data[degree]</td>";
      echo "<td>$data[date_added]</td>";
<<<<<<< Updated upstream
      echo "<td>$data[consentForm]</td>";
      echo "<td>$data[diploma]</td>";
      echo "<td>$data[status]</td>";
      echo "<td>
      <a class='btn btn-primary btn-sm' href='index.php?approvedstatus=$data[id]'>Mark as APPROVED</a>
      <a class='btn btn-danger btn-sm'>Mark as DENIED</a>
=======
      echo "<td><a href='$data[consentForm]' target='_blank'><i class='bi bi-eye-fill icons''title='View PDF'></i></a><a href='$data[consentForm]' download><i class='bi bi-arrow-down-circle-fill icons'title='Download PDF'></i></a></td>";
      echo "<td><a href='$data[diploma]' target='_blank'><i class='bi bi-eye-fill icons'title='View PDF'></i></a><a href='$data[diploma]' download><i class='bi bi-arrow-down-circle-fill icons' title='Download PDF'></i></a></td>";
      echo "<td>$data[status]</td>";
      echo "<td>$data[remarks]</td>";
      echo "<td>
      <li class='actions'>
        <a class='btn btn-sm' href='adminfunctions.php?approved=$data[id]'>Approve 
          <div class='icon'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check2' viewBox='0 0 16 16'>
          <path d='M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z'/>
        </svg>
          </div>
        </a>
      </li>
      <li class='actions'><a class='btn btn-sm'href='remarks.php?denied=$data[id]'>Denied
      <div class='icon'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'>
      <path d='M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z'/>
    </svg>
          </div>
      </a></li>

>>>>>>> Stashed changes
      </td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
}
public function viewPendingData(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `status` = 'PENDING'";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>PENDING APPLICATIONS</h3>";
<<<<<<< Updated upstream
  echo "<table class='table table-dark table-stripe table-sm'>";
  echo "<thead>
          <tr>
          <th>Student ID</th>
          <th>Agent ID</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Degree</th>
          <th>Date Added</th>
          <th>Consent Form</th>
          <th>Diploma</th>
          <th>Status</th>
          <th>Admin Actions</th>
=======
  echo "<div class='table-responsive'>";
  echo "<table id='pendingtable' class='table table-borderless  table-hover shadow' width='100%'>";
  echo "<thead>
          <tr>
          <th scope='col'>Agent ID</th>
          <th scope='col'>First Name</th>
          <th scope='col'>Middle Name</th>
          <th scope='col'>Last Name</th>
          <th scope='col'>Degree</th>
          <th scope='col'>Date Added</th>
          <th scope='col'>Consent Form</th>
          <th scope='col'>Diploma</th>
          <th scope='col'>Status</th>
          <th scope='col'>Remarks</th>
          <th scope='col'>Admin Actions</th>
>>>>>>> Stashed changes

          </tr>
  </thead><tbody>";
  foreach ($result as $data) {
      echo "<tr>";
<<<<<<< Updated upstream
      echo "<td>$data[studentID]</td>";
=======
>>>>>>> Stashed changes
      echo "<td>$data[agentID]</td>";
      echo "<td>$data[firstName]</td>";
      echo "<td>$data[middleName]</td>";
      echo "<td>$data[lastName]</td>";
      echo "<td>$data[degree]</td>";
      echo "<td>$data[date_added]</td>";
<<<<<<< Updated upstream
      echo "<td>$data[consentForm]</td>";
      echo "<td>$data[diploma]</td>";
      echo "<td>$data[status]</td>";
      echo "<td>   
      <a class='btn btn-primary btn-sm' href='index.php?approvedstatus=$data[id]'>Mark as APPROVED</a>
      <a class='btn btn-warning btn-sm'>Mark as ON-HOLD</a>
      <a class='btn btn-danger btn-sm'>Mark as DENIED</a>
=======
      echo "<td><a href='$data[consentForm]' target='_blank'><i class='bi bi-eye-fill icons' title='View PDF'></i></a><a href='$data[consentForm]' download><i class='bi bi-arrow-down-circle-fill icons'title='Download PDF'></i></a></td>";
      echo "<td><a href='$data[diploma]' target='_blank'><i class='bi bi-eye-fill icons' title='View PDF'></i></a><a href='$data[diploma]' download><i class='bi bi-arrow-down-circle-fill icons'title='Download PDF'></i></a></td>";
      echo "<td>$data[status]</td>";
      echo "<td>$data[remarks]</td>";
      echo "<td>   
      <li class='actions'>
        <a class='btn btn-sm' href='adminfunctions.php?approved=$data[id]'>Approve 
          <div class='icon'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check2' viewBox='0 0 16 16'>
          <path d='M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z'/>
        </svg>
          </div>
        </a>
      </li>
      <li class='actions'><a class='btn btn-sm btn-sm-1'href='remarks.php?hold=$data[id]'>On-Hold
        <div class='icon'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-clock' viewBox='0 0 16 16'>
        <path d='M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z'/>
        <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z'/>
      </svg>
        </div>
      </a></li>

      <li class='actions'><a class='btn btn-sm'href='remarks.php?denied=$data[id]'>Denied
      <div class='icon'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'>
      <path d='M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z'/>
    </svg>
          </div>
      </a></li>

>>>>>>> Stashed changes
      </td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
}
<<<<<<< Updated upstream
=======
public function viewDeniedData(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `status` = 'DENIED'";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>DENIED APPLICATIONS</h3>";
  echo "<div class='table-responsive'>";
  echo "<table id='deniedtable' class='table table-borderless table-hover shadow' width='100%'>";

  echo "<thead>
          <tr>
          <th scope='col'>Agent ID</th>
          <th scope='col'>First Name</th>
          <th scope='col'>Middle Name</th>
          <th scope='col'>Last Name</th>
          <th scope='col'>Degree</th>
          <th scope='col'>Date Added</th>
          <th scope='col'>Consent Form</th>
          <th scope='col'>Diploma</th>
          <th scope='col'>Date Completed</th>
          <th scope='col'>Status</th>
          <th scope='col'>Remarks</th>
          <th scope='col'>Actions</th>

          </tr>
  </thead><tbody>";
  foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[agentID]</td>";
      echo "<td>$data[firstName]</td>";
      echo "<td>$data[middleName]</td>";
      echo "<td>$data[lastName]</td>";
      echo "<td>$data[degree]</td>";
      echo "<td>$data[date_added]</td>";
      echo "<td><a href='$data[consentForm]' target='_blank'><i class='bi bi-eye-fill icons'title='View PDF'></i></a><a href='$data[consentForm]' download><i class='bi bi-arrow-down-circle-fill icons'title='Download PDF'></i></a></td>";
      echo "<td><a href='$data[diploma]' target='_blank'><i class='bi bi-eye-fill icons'title='View PDF'></i></a><a href='$data[diploma]' download><i class='bi bi-arrow-down-circle-fill icons'title='Download PDF'></i></a></td>";
      echo "<td>$data[date_completed]</td>";
      echo "<td>$data[status]</td>";
      echo "<td>$data[remarks]</td>";
      echo "</tr>";


  }
  echo "</tbody></table>";
}

>>>>>>> Stashed changes
}
