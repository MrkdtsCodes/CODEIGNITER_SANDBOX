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
        <td><?php echo $message; ?></td>
        
      </tr>
      <tr>
        <td>2</td>
        <td>Juan Dela Cruz</td>
        <td>21</td>
        <td>Information Technology</td>
        <td>B+</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Ana Reyes</td>
        <td>19</td>
        <td>Computer Engineering</td>
        <td>A-</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Carlo Mendoza</td>
        <td>22</td>
        <td>Information Systems</td>
        <td>B</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Lea Garcia</td>
        <td>20</td>
        <td>Computer Science</td>
        <td>A+</td>
      </tr>
    </tbody>
  </table>

</body>
</html>