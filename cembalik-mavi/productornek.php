<?php
session_start();
include "config.php";
$conn = getDatabaseConnection();
$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="product-card">
                    <a href="summary.php?id=<?php echo $row['id']; ?>">
                    <img style='width:350px' src=<?php echo $row['image'] ?> alt= <?php $row['title'] ?>  />
                    </a>
                    <h2 class="product-name"><?php echo $row['title']; ?></h2>
                    <p class="product-size"><?php echo $row['productsize']; ?></p>
                    <p class="product-price"><?php echo $row['productprice']; ?> TL</p>
                    <button>
                    <a href="shopping.php?id=<?php echo $row['id']; ?>">Sepete Ekle</a>
                    </button>

                </div>
        <?php
            }
        } else {
            echo "<p>Hiç ürün bulunamadı.</p>";
        }
        ?>
    </div>

</body>
</html>