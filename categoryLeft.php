            <div class="category_left">
                <h1>Category</h1>
                <ul>
                    <?php foreach($categories as $category) : ?> <!-- Lists/links all the categories in the left panel -->
                    <li>
                        <a href="?category=<?php echo $category['category_id']?>&view=list">
                           <?php echo $category['category']?> </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>