<?php
echo "<p><h2>Liste des élèves</h2></p><br/><table>";
foreach ($A_vue['tableau'] as $data) {
    $line = str_replace(";", " ", $data[0]);
    echo "<tr><td>" . $line . "</td></tr>";
}
echo "</table>";
