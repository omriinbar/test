</script>
PHP
<?php
if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
$res = $con->query("SELECT * FROM items WHERE category_id=".$_GET['id'].";");
if ($res) {
echo "<table><tr><th>ITEM NAME</th><th>PRICE</th><th>AVAILABLE?</th></tr>";
while($row = $res->fetch_assoc()) {
$item = htmlspecialchars($row['item'], ENT_QUOTES, 'UTF-8');
$price = htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8');
$_GET['id']
$available = htmlspecialchars($row['available'], ENT_QUOTES, 'UTF-8');
echo "<tr><td>".$item."</td><td>".$price."</td><td>".$available."</td></tr>";
}
echo "</table>";
}
}
?>
