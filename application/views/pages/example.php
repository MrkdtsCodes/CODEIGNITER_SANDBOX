<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    padding: 30px;
    background-color: #f0f4f8;
  }

  h2 {
    color: #333;
    margin-bottom: 16px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
  }

  thead {
    background-color: #4a90d9;
    color: white;
  }

  th {
    padding: 12px 16px;
    text-align: left;
    font-size: 14px;
    letter-spacing: 0.05em;
  }

  td {
    padding: 12px 16px;
    font-size: 14px;
    color: #333;
    border-bottom: 1px solid #e8e8e8;
  }

  tbody tr:last-child td {
    border-bottom: none;
  }

  tbody tr:nth-child(even) {
    background-color: #f7faff;
  }

  tbody tr:hover {
    background-color: #eaf2ff;
  }
</style>
</head>
<body>

  <h2>Student List</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Course</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php 

        foreach($student_list as $stud){
            echo '<tr>';
                echo '<td>'. $stud['id'] .'</td>';
                echo '<td>'. $stud['Name'] .'</td>';
                echo '<td>'. $stud['Age'] .'</td>';
                echo '<td>'. $stud['Course'] .'</td>';
                echo '<td>'. $stud['grade'] .'</td>';
            echo '</tr>';

            if($stud['Name'] === "Mark Andrie"){
                $find = $stud['Name'];
            }
        }
         
        

        
        
        ?>
      </tr>
    </tbody>
  </table>

 

</body>
</html>