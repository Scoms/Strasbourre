<div id="Gmap">
	<div class="infoBubble">
		<div>
			<h2 id="barName">Select a place to drink !</h2>
			<div id="beverageDisplay">
			</div>
		</div>
	</div>
	<?php
		echo $this->googlemap->map();

		//Set the differents bars on the map 
		foreach ($bars as $bar) {
			echo $this->googlemap->addMarker("map_canvas", $bar['Bar']['id'], array('latitude' => $bar['Bar']['lat'], 'longitude' => $bar['Bar']['lgt']),array(
					'windowText'=> ($bar['Bar']['name']),
					'markerTitle'=>($bar['Bar']['name'])
				));
		}
	?>
</div>
<?php
	echo $this->Html->script('GmapScript');
?>