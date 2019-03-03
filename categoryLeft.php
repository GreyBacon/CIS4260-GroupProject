            <div class="category_left">
                <h1>Category</h1>
                <ul>
                    <?php foreach($categories as $category) : ?>
                    <li>
                        <a href="?category= <?php echo $category['category_id']?>">
                           <?php echo $category['category']?> </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>