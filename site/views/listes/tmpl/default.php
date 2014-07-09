<ul>
<?php
foreach ($this->especes as $e) {
	echo "<li><a href=\"?option=com_clicnat&view=taxon&id={$e->id_espece}\">{$e->nom_f} {$e->nom_s}</a></li>";
}
?>
</ul>
<pre><?php print_r($this->especes); ?></pre>

