<?php include 'header.php'; ?>
<div id="main">
    <div id="main">
        <h1>Countries</h1>
        <h2>Please Choose a Country</h2>
        <h2>The choice will display in the Winners area</h2>
        <ul class="nav">
            <!-- display links for all categories -->
            <?php foreach($semesters as $semester) : ?>
            <li>
                <a href="?semester_id=<?php echo $semester['ID']; ?>">
                    <?php echo $semester['Country']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        
         <h1>Olympiads</h1>
         <h2>Please Choose a Olympic</h2>
         <h2>The choice will display in the Winners area</h2>
        <ul class="nav">
            <!-- display links for all categories -->
            <?php foreach($olympiads as $value) : ?>
            <li>
                <a href="?semester_id=<?php echo $value['ID']; ?>">
                    <?php echo $value['City']; ?>
                    <?php echo $value['Year']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
         
        <div id="main_content">
            <h1>Winners</h1>
            <div id="legend">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-body">
                        
                        <ul class="nav">
                            <table class="table">
                                <?php foreach ($classes as $classes1) : ?>
                                <h2>
                                    <?php 
                                    if ($classes1['Country'] == 1)
                                    {
                                     echo "China"; 
                                    }
                                    elseif ($classes1['Country'] == 2)
                                    {
                                     echo "America"; 
                                    }
                                    ?>
                                </h2>
                                <table class="GeneratedTable">
                                    <tbody>
                                        <tr>
                                            <td>Name of Winner:
                                                <?php echo $classes1['FirstName']; ?>
                                                <?php echo $classes1['LastName']; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="GeneratedTable">
                                    <tbody>
                                        <tr>
                                            <td>Olympiad:
                                                <?php 
                                    if ($classes1['YearID'] == 1)
                                    {
                                     echo "London 2012"; 
                                    }
                                    elseif ($classes1['YearID'] == 2)
                                    {
                                     echo "London 2008"; 
                                    }
                                    ?>             
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="GeneratedTable">
                                    <tbody>
                                        <tr>
                                            <td>Country :
                                                <?php 
                                    if ($classes1['Country'] == 1)
                                    {
                                     echo "China"; 
                                    }
                                    elseif ($classes1['Country'] == 2)
                                    {
                                     echo "America"; 
                                    }
                                    ?>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                               

                                </a>
                                <?php endforeach; ?>
                            </table>
                        </ul>
                    </div>
                </div>


    <h2>Add Country</h2>
    <form action="index.php" method="post" id="add_country_form">
        <input type="hidden"  />

     
        <label>Country:</label>
        <input type="input" name="country" />
        <br />


        <label>&nbsp;</label>
        <input type="submit" value="Add Country" />
        <br />
    </form>

    <?php

    
$countryName = $_POST['country'];

// Validate inputs
if (empty($countryName) ) {
    $error = "Invalid Country data. Check all fields and try again.";
} else {
    // If valid, add the product to the database
   // require_once('database.php');
    $query = "INSERT INTO countries
                 (Country)
              VALUES
                 ('$countryName')";
    $db->exec($query);

    // Display the Product List page
}
?>
    
        <h2>Add Olympiad</h2>
    <form action="index.php" method="post" id="add_olypiad_form">
        <input type="hidden"  />

     
        <label>City:</label>
        <input type="input" name="city" />
        <br />
        
         <label>Year:</label>
        <input type="number" name="year" />
        <br />


        <label>&nbsp;</label>
        <input type="submit" value="Add Olympaid" />
        <br />
    </form>

    <?php

if (!isset($_POST['city']) || $_POST['year'] ){
    $olympiadName = $_POST['city'];
    $olympiadYear = $_POST['year'];
    
    // Validate inputs
if (empty($olympiadName) || empty($olympiadYear) ) {
    $error = "Invalid Country data. Check all fields and try again.";
} else {
    // If valid, add the product to the database
   // require_once('database.php');
    $query = "INSERT INTO Olympiads
                 (City, Year)
              VALUES
                 ('$olympiadName', '$olympiadYear')";
    $db->exec($query);

    // Display the Product List page
}
}    



?>
    
</div>


            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>