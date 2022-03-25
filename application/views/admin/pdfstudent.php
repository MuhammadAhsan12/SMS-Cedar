<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Student information</title>

  <style>
    body {
      font-family: "avenir";
    }

    .invoice-box {
      max-width: 800px;
      margin: auto;
      padding: 30px;
      border: 1px solid #eee;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
      font-size: 16px;
      line-height: 24px;
      font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      color: #555;
    }

    .invoice-box table {
      width: 100%;
      line-height: inherit;
      text-align: left;
    }

    .invoice-box table td {
      padding: 5px;
      vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
      text-align: right;
    }

    .invoice-box table tr.top table td {
      padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
      font-size: 20px;
      line-height: 45px;
      color: #333;
    }

    .invoice-box table tr.information table td {
      padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
      background: #eee;
      border-bottom: 1px solid #ddd;
      font-weight: bold;
    }

    .invoice-box table tr.details td {
      padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
      border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
      border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
      border-top: 2px solid #eee;
      font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
      .invoice-box table tr.top table td {
        width: 100%;
        display: block;
        text-align: center;
      }

      .invoice-box table tr.information table td {
        width: 100%;
        display: block;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
      <tr class="top">
        <td colspan="2">
          <table>
            <tr>
              <td class="title">
                <h1>SMS</h1>
              </td>

              <td>
                Invoice #: <?php echo (rand(10, 100)); ?><br />
                Date: <?php echo date("F jS, Y") ?><br />
                Time: <?php echo date("h:i:s A") ?><br />
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr class="information">
        <td colspan="2">
          <table>
            <tr>
              <td>
                Cedar School<br />
                Clifton Phase 8<br />
                L-155 Block 8
              </td>

              <td>
                M Ahsan.<br />
                Waseem Akhter<br />
                Cedar@gmail.com
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr class="">
        <td></td>
        <td style="text-align: centerp;"><img src="<?php echo base_url() . $output['image'] ?>" alt="" width="30%" height="30%"></td>
        <td></td>
      </tr>

      <tr class="heading">
        <td></td>
        <td style="text-align: centerp;">Name : <?php echo $output['fname'] . " " . $output['lname']; ?></td>
        <td></td>
      </tr>
      <tr class="item">
        <td>Teacher Id</td>
        <td><?php echo $output['student_id']; ?></td>
      </tr>
      <tr class="item">
        <td>First Name</td>
        <td><?php echo $output['fname']; ?></td>
      </tr>
      <tr class="item">
        <td>Last Name</td>
        <td><?php echo $output['lname']; ?></td>
      </tr>
      <tr class="item">
        <td>Date of Birth</td>
        <td><?php echo $output['dob']; ?></td>
      </tr>
      <tr class="item">
        <td>Age</td>
        <td><?php echo $output['age']; ?></td>
      </tr>
      <tr class="item">
        <td>Contact</td>
        <td><?php echo $output['contact']; ?></td>
      </tr>
      <tr class="item">
        <td>Email</td>
        <td><?php echo $output['email']; ?></td>
      </tr>
      <tr class="item">
        <td>Address</td>
        <td><?php echo $output['address']; ?></td>
      </tr>
      <tr class="item">
        <td>City</td>
        <td><?php echo $output['city']; ?></td>
      </tr>
      <tr class="item">
        <td>Country</td>
        <td><?php echo $output['country']; ?></td>
      </tr>
      <tr class="item">
        <td>Regesteration Dae</td>
        <td><?php echo $output['register_date']; ?></td>
      </tr>
    </table>
  </div>
</body>

</html>