<h1>
	<?php echo empty($this->taxon->nom_f)?"<i>{$this->taxon->nom_s}</i>":"{$this->taxon->nom_f} <i>{$this->taxon->nom_s}</i>"; ?>
</h1>
<h3>
	<?php echo "{$this->taxon->classe} / {$this->taxon->ordre} / {$this->taxon->famille}"; ?>
</h3>
<div class="pull-right">
	<span class="label label-default"><?php echo $this->taxon->ref_regional->indice_rar; ?></span>
	<span class="label label-default"><?php echo $this->taxon->ref_regional->menace; ?></span>
</div>
<?php if (!empty($this->taxon->commtr_repartition)) { ?>
	<h4>Répartition</h4>
	<p><?php echo $this->taxon->commtr_repartition;  ?></p>
<?php } ?>
<?php if (!empty($this->taxon->commtr_menace)) { ?>
	<h4>Menaces</h4>
	<p><?php echo $this->taxon->commtr_menace;  ?></p>
<?php } ?>
<?php if (!empty($this->taxon->commtr_habitat)) { ?>
	<h4>Habitat</h4>
	<p><?php echo $this->taxon->commtr_habitat;  ?></p>
<?php } ?>
<?php if (!empty($this->taxon->commtr_act_cons)) { ?>
	<h4>Actions de conservation</h4>
	<p><?php echo $this->taxon->commtr_act_cons;  ?></p>
<?php } ?>

<?php 
foreach ($this->taxon->docs as $doc) { 
	if ($doc->type == "image") {
		echo "<a href=\"http://obs.picardie-nature.org/?page=img_esp_grand&id={$doc->id}\"><img src=\"http://obs.picardie-nature.org/?page=img_esp&id={$doc->id}\"></a>";
	}
}
?>
<pre><?php print_r($this->taxon); ?></pre>

