<?php

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student ID Card</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background: #2e2e2e;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .id-card {
      width: 62 0px;
      background: #ffffff;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
      display: flex;
      flex-direction: column;
    }

    /* Top banner */
    .card-header {
      background: #c8b97a;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 10px 20px;
      gap: 10px;
    }

    .school-name {
      text-align: right;
      line-height: 1.2;
    }

    .school-name .top {
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 1.5px;
      color: #3a2e00;
    }

    .school-name .bottom {
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 1.5px;
      color: #3a2e00;
    }

    .school-logo {
      width: 44px;
      height: 44px;
      background: #b8a55a;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .school-logo svg {
      width: 28px;
      height: 28px;
      fill: #3a2e00;
    }

    /* Card body */
    .card-body {
      background: linear-gradient(135deg, #e8e0d0 0%, #f5f0e8 60%, #ddd8c8 100%);
      padding: 28px 28px 28px 20px;
      display: flex;
      gap: 24px;
      align-items: center;
    }

    /* Photo */
    .photo-frame {
      flex-shrink: 0;
      width: 130px;
      height: 150px;
      border-radius: 10px;
      border: 5px solid #c8b97a;
      overflow: hidden;
      background: #d0c8a0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .photo-frame img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .photo-placeholder {
      font-size: 48px;
      color: #888;
    }

    /* Info section */
    .card-info {
      flex: 1;
    }

    .card-title {
      font-size: 26px;
      font-weight: 800;
      color: #b8860b;
      letter-spacing: 1px;
      margin-bottom: 18px;
      text-transform: uppercase;
    }

    .info-table {
      width: 100%;
      border-collapse: collapse;
    }

    .info-table tr {
      height: 32px;
    }

    .info-table td.label {
      font-size: 13px;
      font-weight: 700;
      color: #444;
      letter-spacing: 0.5px;
      width: 80px;
      text-transform: uppercase;
    }

    .info-table td.colon {
      font-size: 13px;
      font-weight: 700;
      color: #444;
      padding: 0 8px;
      width: 12px;
    }

    .info-table td.value {
      font-size: 13px;
      font-weight: 600;
      color: #222;
      letter-spacing: 0.3px;
    }
  </style>
</head>
<body>

  <div class="id-card">
    <!-- Header with school name and logo -->
    <div class="card-header">
      <div class="school-name">
        <div class="top">LHOOPA</div>
        <div class="bottom">INC</div>
      </div>
      <div class="school-logo">
        <!-- House/school icon -->
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 12L12 3l9 9H18v9H6v-9H3z"/>
        </svg>
      </div>
    </div>

    <!-- Card body with photo and info -->
    <div class="card-body">
      <!-- Student photo -->
      <div class="photo-frame">
        <!-- Replace src with actual image path -->
        <span class="photo-placeholder">&#128100;</span>
        <!-- <img src="student-photo.jpg" alt="Student Photo" /> -->
      </div>

      <!-- Student info -->
      <div class="card-info">
        <div class="card-title">Student ID CARD</div>
        <table class="info-table">
          <tr>
            <td class="label">NAME</td>
            <td class="colon">:</td>
            <td class="value">
                <?php 
                    echo $students_identity['Name'];
                ?>
            </td>
          </tr>
          <tr>
            <td class="label">ID</td>
            <td class="colon">:</td>
            <td class="value">
                <?php 
                    echo $students_identity['id'];
                ?>
            </td>
          </tr>
          <tr>
            <td class="label">Course/Program</td>
            <td class="colon">:</td>
            <td class="value">
                <?php 
                    echo $students_identity['Course'];
                ?>
            </td>
          </tr>
          <tr>
            <td class="label">Year Level</td>
            <td class="colon">:</td>
            <td class="value">
                 <?php 
                    echo $students_identity['grade'];
                ?>
            </td>
          </tr>
        </table>

        <a href="<?php echo base_url();?>">MArk</a>
        <a href="<?php echo base_url();?>/example">MArk</a>
      </div>
    </div>
  </div>

</body>
</html>    