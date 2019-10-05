<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$val = 15;
?>
 
  
  
  <script src="<?= base_url('Assets/Js/pureknob.js'); ?>" type="text/javascript"></script>
  <script type="text/javascript">
			// <![CDATA[
			
			/*
			 * Demo code for knob element.
			 */
			function demoKnob() {
				// Create knob element, 300 x 300 px in size.
				var knob = pureknob.createKnob(300, 300);
				
				// Set properties.
				knob.setProperty('angleStart', -0.75 * Math.PI);
				knob.setProperty('angleEnd', 0.75 * Math.PI);
				knob.setProperty('colorFG', '#8fffff');
				knob.setProperty('trackWidth', 0.4);
				knob.setProperty('valMin', 0);
				knob.setProperty('valMax', 100);
				
				// Set initial value.
				knob.setValue(<?= $val; ?>);

				/*
				 * Event listener.
				 *
				 * Parameter 'knob' is the knob object which was
				 * actuated. Allows you to associate data with
				 * it to discern which of your knobs was actuated.
				 *
				 * Parameter 'value' is the value which was set
				 * by the user.
				 */
				var listener = function(knob, value) {
					console.log(value);
				};
				
				knob.addListener(listener);
				
				// Create element node.
				var node = knob.node();
				
				// Add it to the DOM.
				var elem = document.getElementById('some_element');
				elem.appendChild(node);
				
			}
			
			
			function demoKnobx() {
				// Create knob element, 300 x 300 px in size.
				var knob = pureknob.createKnob(300, 300);
				
				// Set properties.
				knob.setProperty('angleStart', -0.75 * Math.PI);
				knob.setProperty('angleEnd', 0.75 * Math.PI);
				knob.setProperty('colorFG', '#8fffff');
				knob.setProperty('trackWidth', 0.4);
				knob.setProperty('valMin', 0);
				knob.setProperty('valMax', 100);
				
				// Set initial value.
				knob.setValue(<?= $val-3;?>);

				/*
				 * Event listener.
				 *
				 * Parameter 'knob' is the knob object which was
				 * actuated. Allows you to associate data with
				 * it to discern which of your knobs was actuated.
				 *
				 * Parameter 'value' is the value which was set
				 * by the user.
				 */
				var listener = function(knob, value) {
					console.log(value);
				};
				
				knob.addListener(listener);
				
				// Create element node.
				var node = knob.node();
				
				// Add it to the DOM.
				var elem = document.getElementById('some_elementx');
				elem.appendChild(node);
				
			}
			
			
			/*
			 * This is executed after the document finished loading.
			 */
			function ready() {
				demoKnob();
				demoKnobx();
				
				
			}

			document.addEventListener('DOMContentLoaded', ready, true);
			
			// ]]>
			
			
		</script>
  
