<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
// require_once 'config.php';

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
public function viewData_clients(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user`";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>Completed Tasks</h3>";
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
    echo "<td>$data[firstName]</td>";
    echo "<td>$data[middleName]</td>";
    echo "<td>$data[lastName]</td>";
    echo "<td>$data[degree]</td>";
    echo "<td>$data[status]</td>";
    echo "<td><a class='btn btn-sm icons'href='#'><i class='bi bi-person-lines-fill'></i>
    <a class='btn btn-sm icons'href='#'><i class='bi bi-download'></i>
   </a></td>";
    echo "</tr>";
  }

  echo "</table>";
}


public function viewApprovedData(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `status` = 'APPROVED'";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>APPROVED APPLICATIONS</h3>";
  echo "<table id='candtable' class='table table-dark table-stripe table-sm'>";
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
          <th>Remarks</th>
          <th>Admin Actions</th>

          </tr>
  </thead><tbody>";
  foreach ($result as $data) {
      echo "<tr>";
      echo "<td class='d-none d-sm-table-cell'>$data[studentID]</td>";
      echo "<td>$data[agentID]</td>";
      echo "<td>$data[firstName]</td>";
      echo "<td>$data[middleName]</td>";
      echo "<td>$data[lastName]</td>";
      echo "<td>$data[degree]</td>";
      echo "<td>$data[date_added]</td>";
      echo "<td>$data[consentForm]</td>";
      echo "<td>$data[diploma]</td>";
      echo "<td>$data[date_completed]</td>";
      echo "<td>$data[status]</td>";
      echo "<td>      </td>";


      echo "<td>
      <a class=' btn btn-primary btn-sm' href='adminfunctions.php?delete=$data[id]'>Delete </a>

      </td>";
      echo "</tr>";


  }
  echo "</tbody></table>";
}
public function viewOnHoldData(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `status` = 'ON-HOLD'";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>ON-HOLD APPLICATIONS</h3>";
  echo "<table id='onHoldtable' class='table table-dark table-stripe table-sm'>";
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
          <th>Remarks</th>
          <th>Admin Actions</th>

          </tr>
  </thead><tbody>";
  foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[studentID]</td>";
      echo "<td>$data[agentID]</td>";
      echo "<td>$data[firstName]</td>";
      echo "<td>$data[middleName]</td>";
      echo "<td>$data[lastName]</td>";
      echo "<td>$data[degree]</td>";
      echo "<td>$data[date_added]</td>";
      echo "<td>$data[consentForm]</td>";
      echo "<td>$data[diploma]</td>";
      echo "<td>$data[status]</td>";
      echo "<td>      </td>";
      echo "<td>
      <a class='btn btn-success btn-sm' href='adminfunctions.php?approvedstatus=$data[id]'>Mark as APPROVED</a><br>
      <a class='btn btn-danger btn-sm'href='adminfunctions.php?deniedstatus=$data[id]'>Mark as DENIED</a><br>
      <a class=' btn btn-primary btn-sm' href='adminfunctions.php?delete=$data[id]'>Delete </a>

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
  echo "<table id='pendingtable' class='table table-dark table-stripe table-sm'>";
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
          <th>Remarks</th>
          <th>Admin Actions</th>

          </tr>
  </thead><tbody>";
  foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[studentID]</td>";
      echo "<td>$data[agentID]</td>";
      echo "<td>$data[firstName]</td>";
      echo "<td>$data[middleName]</td>";
      echo "<td>$data[lastName]</td>";
      echo "<td>$data[degree]</td>";
      echo "<td>$data[date_added]</td>";
      echo "<td>$data[consentForm]</td>";
      echo "<td>$data[diploma]</td>";
      echo "<td>$data[status]</td>";
      echo "<td>      </td>";
      echo "<td>   
      <a class='btn btn-success btn-sm' href='adminfunctions.php?approvedstatus=$data[id]'>Mark as APPROVED</a><br>
      <a class='btn btn-warning btn-sm'href='adminfunctions.php?onholdstatus=$data[id]'>Mark as ON-HOLD</a><br>
      <a class='btn btn-danger btn-sm'href='adminfunctions.php?deniedstatus=$data[id]'>Mark as DENIED</a><br>
      <a class=' btn btn-primary btn-sm' href='adminfunctions.php?delete=$data[id]'>Delete </a>

      </td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
}
public function viewDeniedData(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `status` = 'DENIED'";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>DENIED APPLICATIONS</h3>";
  echo "<table id='deniedtable' class='table table-dark table-stripe table-sm'>";
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
          <th>Remarks</th>
          <th>Admin Actions</th>

          </tr>
  </thead><tbody>";
  foreach ($result as $data) {
      echo "<tr>";
      echo "<td>$data[studentID]</td>";
      echo "<td>$data[agentID]</td>";
      echo "<td>$data[firstName]</td>";
      echo "<td>$data[middleName]</td>";
      echo "<td>$data[lastName]</td>";
      echo "<td>$data[degree]</td>";
      echo "<td>$data[date_added]</td>";
      echo "<td>$data[consentForm]</td>";
      echo "<td>$data[diploma]</td>";
      echo "<td>$data[date_completed]</td>";
      echo "<td>$data[status]</td>";
      echo "<td>      </td>";


      echo "<td>
      <a class=' btn btn-primary btn-sm' href='adminfunctions.php?delete=$data[id]'>Delete </a>

      </td>";
      echo "</tr>";


  }
  echo "</tbody></table>";
}

}
