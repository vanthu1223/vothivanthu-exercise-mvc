
<p>
    Here are all the fruits :
</p>
<ul>
    <?php 
    foreach ($rows as $fruit) : ?>
        <li> <?php echo $fruit->name ?> cost <?php echo $fruit->price ?></li>
   <?php endforeach ?>
</ul>
