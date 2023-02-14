<!-- <?php

// Import the MySQLi library to connect to the database
// and the PHPExcel library to read the Excel file
require_once 'PHPExcel/IOFactory.php';
$mysqli = new mysqli('localhost', 'username', 'password', 'database');

// Load the Excel file
$inputFileName = 'data.xlsx';
$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($inputFileName);

// Get the first worksheet
$worksheet = $objPHPExcel->getSheet(0);

// Get the highest row and column numbers
$highestRow = $worksheet->getHighestRow();
$highestColumn = $worksheet->getHighestColumn();

// Loop through each row of the worksheet
for ($row = 1; $row <= $highestRow; $row++) {
  // Get the row data
  $rowData = $worksheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

  // Insert the row data into the MySQL database table
  $sql = "INSERT INTO table_name (column1, column2, column3) VALUES (?, ?, ?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("sss", $rowData[0][0], $rowData[0][1], $rowData[0][2]);
  $stmt->execute();
} -->

///
$hostname = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($hostname, $username, $password, $database);


// Include the PHPExcel library
require_once 'PHPExcel/Classes/PHPExcel.php';

// Read the Excel file
$inputFileName = 'your_excel_file.xlsx';

// Create a new PHPExcel object
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

// Get the sheet data as an array
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);



// Iterate over the rows of the sheet data
foreach ($sheetData as $row) {
    // Insert the data into the MySQL table
    $query = "INSERT INTO your_table (column1, column2, column3) VALUES ('$row[column1]', '$row[column2]', '$row[column3]')";
    mysqli_query($conn, $query);
}

mysqli_close($conn);
