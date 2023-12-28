<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'museumdb';
$theConnection = mysqli_connect($host, $user, $password, $db);

$fetch_ex = "SELECT name, info, exhibiDATE  FROM exhibitions ORDER BY exhibiDATE ;";
$stmt = mysqli_prepare($theConnection, $fetch_ex);
mysqli_stmt_execute($stmt);

// Bind variables to store the fetched data
mysqli_stmt_bind_result($stmt, $name, $info, $exbtiondate);
// Fetch the first two rows
$rows = array();
$count = 0;
while (mysqli_stmt_fetch($stmt) && $count < 2) {
    // Store the fetched data in an array or process it as needed
    $row = array(
        'name' => $name,
        'info' => $info,
        'exbtiondate' => $exbtiondate,
    );
    $rows[] = $row;
    $count++;
}
$mons = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'];
// Display or use the fetched data
foreach ($rows as $row) {
    // Access the values using $row['column_name']
?>
    <div class="exbhs">
        <div class='imag'>
        <img src ='image/4a.jpg'>
        </div>
        <h1 class="name" id='name'>
            <?php echo $row['name']; ?>
        </h1>
        <p id='info' class="info">
            <?php echo $row['info']; ?>

        </p>
        <div class="count">
            <span>after</span>
            <script>
                (function () {
                    const second = 1000,
                        minute = second * 60,
                        hour = minute * 60,
                        day = hour * 24;

                    let offer = "<?php echo $mons[substr($row['exbtiondate'],-4,2)-1].' '; echo substr($row['exbtiondate'],-2,2) .',';  echo substr($row['exbtiondate'],0,4);?>  00:00:00",

                        countDown = new Date(offer).getTime(),
                        x = setInterval(function () {

                            let now = new Date().getTime(),
                                distance = countDown - now;

                            document.getElementById("days<?php echo $row['name']?>").innerText = Math.floor(distance / (day));

                        }, 0)
                }());
            </script>
            <span id='days<?php echo $row['name']?>'></span>
            <span>days</span>
        </div>
    </div>
<?php }

// Close the statement and the database connection
mysqli_stmt_close($stmt);
mysqli_close($theConnection);
?>