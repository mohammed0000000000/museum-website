<?php 
function generateGallery(){
                $host = 'localhost';
                $user = 'root';
                $password = "";
                $db = 'museumdb';
                $theConnection = mysqli_connect($host, $user, $password, $db);
                $gallaryPhotos = mysqli_query($theConnection, 'select * from gallery;');

                while ($row = mysqli_fetch_array($gallaryPhotos)) {
                    $imagePath = $row ['src'];
                    $name = $row['name'];   
                    $info = $row['info'];
                    ?>
                    <div class="box">
                        <div class="image">
                            <img src=<?php echo $imagePath;?> alt="">
                        </div>
                        <div class="text">
                            <h2>
                                <?php echo $name; ?>
                            </h2>
                            <p>
                                <?php echo $info; ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>

<?php
}
?>

