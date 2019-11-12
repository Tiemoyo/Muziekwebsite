        
        <?php
        echo
        '<a href="Article.php?article='. $fetch['Article_ID'] .'" class="product_container" >
        <img src="uplaoded-imgs/' . $fetch['Thumbnail'] . '" alt="img/no_image.png">
        <div>
            <h2>
            ' . $fetch['Title'] . ' 
            </h2>
            <p>
            $' . $fetch['Price'] . '
            </p>
        </div>
        </a>';
        ?>