
<script>
<?php echo $photoviewer; ?>
</script> 

<div id="tabs" class="tabs-bottom">
    <ul>
        <li><a href="#tabs-1">My Current Listings</a></li>
        <li><a href="#tabs-2">My Recently Sold</a></li>
    </ul>

    <div class="tabs-spacer"></div>
    <div id="tabs-1">
        <table background="images/fadblu.jpg" id="listinggallery" border="1" >
            <tr style="border-collapse: collapse;"><td style="background-color:#E6E6B8; "><div class="ah" >Picture</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Address/Description</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Asking&nbsp;Price</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Bedrooms</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Bathrooms</div></td><td style="background-color:#E6E6B8;"><div class="ah" >House&nbsp;Size(Sq/Ft)</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Lot&nbsp;Size(Acres)</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Year&nbspBuilt</div></td></tr>
            <?php
            foreach ($activeListings->result_array() as $active_row) {
                echo "<tr class='border_top'>";
                echo "<td><a href='javascript:void(viewer" . $active_row['listing_id'] . ".show(0))'><img alt='michael zambito, realtor, tampa, fl, realty, northdale, carrollwood, lake magdalene, real estate agent, michael, zambito, anthony' src='assets/" . (empty($active_row['default_img_path']) ? 'images/defaultactive.png' : $active_row['default_img_path']) . "'></a></td>";
                echo "<td>" . $active_row['street'] . "<br>" . $active_row['city_state_zip'] . "</td>";
                echo "<td>$" . number_format($active_row['price']) . "</td>";
                echo "<td>" . (empty($active_row['bedrooms']) ? 'N/A' : $active_row['bedrooms']) . "</td>";
                echo "<td>" . (empty($active_row['bathrooms']) ? 'N/A' : $active_row['bathrooms']) . "</td>";
                echo "<td>" . (empty($active_row['sqft']) ? 'N/A' : number_format($active_row['sqft'])) . "</td>";
                echo "<td>" . (empty($active_row['lotsize']) ? 'N/A' : $active_row['lotsize']) . "</td>";
                echo "<td>" . (empty($active_row['year_built']) ? 'N/A' : $active_row['year_built']) . "</td></tr>";
            }
            ?>
        </table>
    </div>
    <div id="tabs-2">
        <table background="images/fadblu.jpg" id="listinggallery" border="1" >
            <tr style="border-collapse: collapse;"><td style="background-color:#E6E6B8; "><div class="ah" >Picture</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Address/Description</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Sold&nbsp;Price</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Bedrooms</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Bathrooms</div></td><td style="background-color:#E6E6B8;"><div class="ah" >House&nbsp;Size(Sq/Ft)</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Lot&nbsp;Size(Acres)</div></td><td style="background-color:#E6E6B8;"><div class="ah" >Year&nbspBuilt</div></td></tr>
            <?php
            foreach ($inactiveListings->result_array() as $inactiverow) {
                echo "<tr class='border_top'>";
                echo "<td><a href='javascript:void(viewer" . $inactiverow['listing_id'] . ".show(0))'><img alt='$img_alt_tag' src='assets/" . (empty($inactiverow['default_img_path']) ? 'images/defaultactive.png' : $inactiverow['default_img_path']) . "'></a></td>";
                echo "<td>" . $inactiverow['street'] . "<br>" . $inactiverow['city_state_zip'] . "</td>";
                echo "<td>$" . number_format($inactiverow['price']) . "</td>";
                echo "<td>" . (empty($inactiverow['bedrooms']) ? 'N/A' : $inactiverow['bedrooms']) . "</td>";
                echo "<td>" . (empty($inactiverow['bathrooms']) ? 'N/A' : $inactiverow['bathrooms']) . "</td>";
                echo "<td>" . (empty($inactiverow['sqft']) ? 'N/A' : number_format($inactiverow['sqft'])) . "</td>";
                echo "<td>" . (empty($inactiverow['lotsize']) ? 'N/A' : $inactiverow['lotsize']) . "</td>";
                echo "<td>" . (empty($inactiverow['year_built']) ? 'N/A' : $inactiverow['year_built']) . "</td></tr>";
            }
            ?>

        </table>

    </div>

</div>	



<br>


<br><br>
<p>
    <a href="index.php"><img alt="<?php echo $img_alt_tag ?>" class="linkbutton" src="assets/images/back-button1.png"></a>
</p>