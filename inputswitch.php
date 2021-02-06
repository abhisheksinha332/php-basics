<form method="POST">

<input type="text" name="brand"><br><br>
<input type="text" name="product"><br><br>
<input type="submit"><br><br>
</from>

<?php
if($_POST)
{

    $brand = $_POST['brand'];
    $product = $_POST['product'];

    switch($brand){
        case 'nike':
            switch($product){
                case 'shoe':
                    echo "Brand is nike and product is shoe 300Rs";
                    break;
                case 'bag':
                    echo "Brand is nike and product is bag  400Rs";
                    break;
                default:
                    echo "Brand found but product not found";
                    
            }
            break;
        case 'puma':
            switch($product){
                case 'shoe':
                    echo "Brand is puma and product is shoe 300Rs";
                    break;
                case 'bag':
                    echo "Brand is puma and product is bag  400Rs";
                    break;
                default:
                    echo "Brand found but product not found";
            }
        default:
            echo "Brand not found";
    }

}
?>

