<?php
include'../db_conn.php';

$tid = $_GET['tid'];
$selectQuery = mysqli_query($conn, "SELECT * FROM `transactions` WHERE trans_id = '$tid'");

$result = mysqli_fetch_assoc($selectQuery);

$html .= '
<div class="container">
<div class="row">
            <!-- BEGIN INVOICE -->
          <div class="col-xs-12">
            <div class="grid invoice">
              <div class="grid-body">
                <div class="invoice-title">
                  <br>
                  <div class="row">
                    <div class="col-xs-12">
                      <h2>Payment invoice<br>
                      </h2>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-xs-6">
                    <address>
                      <strong>Billed To:</strong><br>'
                      .$result['student_name'].'<br>
                    </address>
                  </div>
                  <div class="col-xs-6 text-right">
                    <address>
                      <strong>Date:</strong><br>
                      '.$result['date'].'<br>
                    </address>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h3>Payment Summary</h3>
                    <table>
                      <thead>
                        <tr class="line">
                          <td><strong>transc_id</strong></td>
                          <td class="text-center"><strong></strong></td>
                          <td class="text-center"><strong>Email</strong></td>
                          <td class="text-center"><strong></strong></td>
                          <td class="text-center"><strong>Purpose</strong></td>
                          <td class="text-center"><strong></strong></td>
                          <td class="text-right"><strong>Amount</strong></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>'.$result['trans_id'].'<br></td>
                          <td class="text-center"><strong></strong></td>
                          <td><strong>'.$result['student_email'].'</strong><br></td>
                          <td class="text-center"><strong></strong></td>
                          <td class="text-center ml-3">'.$result['fees_remark'].'</td>
                          <td class="text-center ml-3"></td>
                          <td class="text-center">'.$result['fees'].'</td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <hr>
                    <table>
                      <tbody>
                        <tr>
                          <td colspan="3">
                          </td><td class="text-right"><strong>Tax :</strong></td>
                          <td class="text-right"><strong>Null</strong></td>
                        </tr>
                        <tr>
                          <td colspan="3">
                          </td><td class="text-right"><strong>Total :</strong></td>
                          <td class="text-right"><strong>'.$result['fees'].'</strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>                  
                </div>
                <div class="row">
                  <div class="col-md-12 text-right identity">
                    <p>Approved By<br><strong>Some One(Name)</strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END INVOICE -->
        </div>
</div>';


require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
