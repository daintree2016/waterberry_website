<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist </title>
    <link rel="stylesheet" href="css/wishlist.css">
</head>
<body>
<?php include("header.php") ?> 
    
<div class="wishlist-container">
    <h2>♡ WISHLIST</h2>
    <table>
        <thead>
            <tr>
                <th>PRODUCT</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>STOCK STATUS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="https://au.stanley1913.com/cdn/shop/files/10-11287-469_-_Web_PNG_Square-The_IceFlow_Aerolight_Bottle_Fast_Flow_24OZ_-_Hydrangea_-_Front_3.png?v=1748480647&width=1515" alt="Camera">
                        <span>Camera</span>
                    </div>
                </td>
                <td>
                    <div class="quantity">
                        <button>-</button>
                        <input type="text" value="1">
                        <button>+</button>
                    </div>
                </td>
                <td>
                    <span class="price-old">405.00</span>
                    <span class="price-new">375.00</span>
                </td>
                <td><span class="stock">✓ 6 in stock</span></td>
                <td>
                    <button class="btn">Add To Cart</button>
                    <span class="remove">🗑️</span>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="https://www.tastingtable.com/img/gallery/17-types-of-stanley-drinkware-ranked/l-intro-1701086625.jpg" alt="Speaker">
                        <span>Speaker</span>
                    </div>
                </td>
                <td>
                    <div class="quantity">
                        <button>-</button>
                        <input type="text" value="1">
                        <button>+</button>
                    </div>
                </td>
                <td>
                    <span class="price-new">505.00</span>
                </td>
                <td><span class="stock">✓ 5 in stock</span></td>
                <td>
                    <button class="btn">Add To Cart</button>
                    <span class="remove">🗑️</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
