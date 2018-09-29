
<!--<ul>
<li class="nav-item">
        --><?php
/*$counter = 4;
$cur_page = 1;

while ($cur_page <= $nav) {
    //первая итерация $curpage
    echo "<li class=\"nav-item\">
        <a class=\"nav-link active\" href=\"?page = $cur_page\">Active</a>
</li>";
    $cur_page++;
    }
    */?>

        <!--Необходимо создать выпадающий список годов от 2000 до 2050.-->
        <?php
        $year = 2000;
        ?>

        <select>
<?php for($year; $year<=2050; $year++)
    echo "<option>$year</option>"
    ?>
    </select>