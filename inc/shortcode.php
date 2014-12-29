<?php
function chart_expert_shortcode($atts, $content = null) {
	extract( shortcode_atts( array(
		'type' => 'bar',
		'id' => '',
		'url' => '',
		'timeout' => '',
		'timeouturl' => '',
		'types' => '',
		'dataname' => '',
		'axis' => '',
		'axis_date_format' => '%Y-%m-%d',

	), $atts ) );
	
		if($timeout == null && $types == null && $axis == null){
			return"
				<script>
				var chart_".$id." = c3.generate({
					bindto: '#".$id."',
					data: {

						url: '".$url."',

						type: '".$type."',
					},

				});
				</script>			
			";
		}
		else if($timeout && $timeouturl ){
			return"
				<script>
				var chart_".$id." = c3.generate({
					bindto: '#".$id."',
					data: {

						url: '".$url."',

						type: '".$type."',
					},

				});
				setTimeout(function () {
				    chart_".$id.".load({	
				        url: '".$timeouturl."',

				    });
				}, ".$timeout.");
				</script>			
			";
		}
		else if($types && $dataname){
			return"
				<script>
				var chart_".$id." = c3.generate({
					bindto: '#".$id."',
					data: {
						url: '".$url."',
						type: '".$type."',
				        types: {
				            ".$dataname.": '".$types."',
				        },						
					},

				});
				</script>			
			";
		}
		else if($axis){
			return"
				<script>
				var chart_".$id." = c3.generate({
					bindto: '#".$id."',
					data: {
						X: '".$axis."',
						url: '".$url."',
						type: '".$type."',
						
					},
				    axis: {
				        X: {
				            type: '".$type."',
				            tick: {
				                format: '".$axis_date_format."'
				            }
				        }
				    }					
				});
				</script>			
			";
		}
}
add_shortcode('pmzez_chart', 'chart_expert_shortcode');