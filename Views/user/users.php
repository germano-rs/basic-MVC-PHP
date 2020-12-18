This is the Users page.
<br>
<?php
$data = $this->data['users'];
extract($this->data['user']);
echo '<pre>';
print_r($data);
echo '</pre>';

foreach ($data as $key) {
    echo $key['name'] . ' => ' .  $key['login'] . '<br>';
}
echo '<br><br>' . $name;
