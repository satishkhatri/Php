
<?php
/**
 * Created by PhpStorm.
 * User: Satish Khatri
 * Date: 26/11/2017
 * Time: 01:58 PM
 */


?>
<table>
  <thead>
    <tr>
      <th>title</th>
      <th>link</th>
      <th>description</th>

    </tr>
  </thead>
  <tbody>

<?php
$xml = simplexml_load_file("http://www.floatrates.com/daily/gbp.xml") or die("Error: Cannot create object");
foreach ($xml->item as $licenseElement) :?>
    <tr>
        <td><?php echo $licenseElement->targetName; ?></td>
        <td><?php echo $licenseElement->targetCurrency; ?></td>
        <td><?php echo $licenseElement->exchangeRate; ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>