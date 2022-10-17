<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/caveportal/resource/php/class/core/init.php';
// require_once 'config.php';
// $approvedstatus = new approvedstatus();

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
  echo "<h3 class='mb-4 mt-5'>Verification Requests</h3>";
  echo "<div class='table-responsive'>";
  echo "<table class='table table-dark table-stripe table-sm'>";
  echo "<thead>
          <tr>
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
    echo "<td>$data[firstName]</td>";
    echo "<td>$data[middleName]</td>";
    echo "<td>$data[lastName]</td>";
    echo "<td>$data[degree]</td>";
    echo "<td>$data[consentForm]</td>";
    echo "<td>$data[status]</td>";
    echo "<td><a class='btn btn-success btn-sm' href='#'>Download Certificate</a></td>";
    echo "</tr>";
  }
  echo "</tbody>
  </table>";
}


public function viewApprovedData(){
  $con = $this->con();
  $sql = "SELECT * FROM `tbl_client_user` WHERE `status` = 'APPROVED'";
  $data = $con->prepare($sql);
  $data->execute();
  $result = $data->fetchAll(PDO::FETCH_ASSOC);
  echo "<h3 class='mb-4 mt-5'>APPROVED APPLICATIONS</h3>";
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
      echo "<td>
      <a class='btn btn-primary btn-sm' href='index.php?approvedstatus=$data[id]'>Mark as APPROVED</a>
      <a class='btn btn-danger btn-sm'>Mark as DENIED</a>
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
      echo "<td>   
      <a class='btn btn-primary btn-sm' href='index.php?approvedstatus=$data[id]'>Mark as APPROVED</a>
      <a class='btn btn-warning btn-sm'>Mark as ON-HOLD</a>
      <a class='btn btn-danger btn-sm'>Mark as DENIED</a>
      </td>";
      echo "</tr>";
  }
  echo "</tbody></table>";
}
}
