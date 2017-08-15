<?php 
/** 
 * Charts 4 PHP 
 * 
 * @author Shani <support@chartphp.com> - http://www.chartphp.com 
 * @version 1.2.3 
 * @license: see license.txt included in package 
 */ 
  
include("charts4php/lib/inc/chartphp_dist.php"); 

$p = new chartphp(); 

$p->data = array(array(array('a',6), array('b',8), array('c',14), array('d',20)));
$p->chart_type = "donut"; 

// Common Options 
$p->title = "Donut Chart"; 

$out = $p->render('c1'); 
?> 
	<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
	<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
	<script type="text/javascript">
	  	FusionCharts.ready(function(){
		    var fusioncharts = new FusionCharts({
			    type: 'doughnut2d',
			    renderAt: 'chart-container',
			    width: '300',
			    height: '300',
			    dataFormat: 'json',
			    dataSource: {
			        "chart": {
		                "caption": "",
		                "subCaption": "",
		                "numberPrefix": "",
		                "paletteColors": "#ffffff,#1aaf5d,#f2c500,#f45b00,#8e0000",
		                "bgColor": "#dddddd",
		                "showBorder": "0",
		                "use3DLighting": "1",
		                "showShadow": "0",
		                "enableSmartLabels": "0",
		                "startingAngle": "310",
		                "showLabels": "0",
		                "showPercentValues": "1",
		                "showLegend": "1",
		                "legendShadow": "0",
		                "legendBorderAlpha": "0",
		                "defaultCenterLabel": "",
		                "centerLabel": " $label: $value",
		                "centerLabelBold": "1",
		                "showTooltip": "0",
		                "decimals": "0",
		                "captionFontSize": "14",
		                "subcaptionFontSize": "14",
		                "subcaptionFontBold": "0"
		            },
			        "data": [{
			            "label": "Target",
			            "value": "175"
			        }, {
			            "label": "Achive",
			            "value": "14"
			        }]
			    }
			}
			);

			var fusionchartSecond = new FusionCharts({
				type: 'doughnut2d',
			    renderAt: 'chart-containerSecond',
			    width: '300',
			    height: '300',
			    dataFormat: 'json',
			    dataSource: {
			        "chart": {
			            "caption": "",
		                "subCaption": "",
		                "numberPrefix": "",
		                "paletteColors": "#ffffff,#1aaf5d,#f2c500,#f45b00,#8e0000",
		                "bgColor": "#dddddd",
		                "showBorder": "0",
		                "use3DLighting": "1",
		                "showShadow": "0",
		                "enableSmartLabels": "0",
		                "startingAngle": "310",
		                "showLabels": "0",
		                "showPercentValues": "1",
		                "showLegend": "1",
		                "legendShadow": "0",
		                "legendBorderAlpha": "0",
		                "defaultCenterLabel": "",
		                "centerLabel": " $label: $value",
		                "centerLabelBold": "1",
		                "showTooltip": "0",
		                "decimals": "0",
		                "captionFontSize": "14",
		                "subcaptionFontSize": "14",
		                "subcaptionFontBold": "0"
			        },
			        "data": [{
			            "label": "Target",
			            "value": "175"
			        }, {
			            "label": "Achive",
			            "value": "100"
			        }]
			    }
			});
			var fusionchartThird = new FusionCharts({
			    type: 'doughnut2d',
			    renderAt: 'chart-containerThird',
			    width: '300',
			    height: '300',
			    dataFormat: 'json',
			    dataSource: {
			        "chart": {
		                "caption": "",
		                "subCaption": "",
		                "numberPrefix": "",
		                "paletteColors": "#ffffff,#1aaf5d,#f2c500,#f45b00,#8e0000",
		                "bgColor": "#dddddd",
		                "showBorder": "0",
		                "use3DLighting": "1",
		                "showShadow": "0",
		                "enableSmartLabels": "0",
		                "startingAngle": "310",
		                "showLabels": "0",
		                "showPercentValues": "1",
		                "showLegend": "1",
		                "legendShadow": "0",
		                "legendBorderAlpha": "0",
		                "defaultCenterLabel": "",
		                "centerLabel": " $label: $value",
		                "centerLabelBold": "1",
		                "showTooltip": "0",
		                "decimals": "0",
		                "captionFontSize": "14",
		                "subcaptionFontSize": "14",
		                "subcaptionFontBold": "0"
		            },
			        "data": [{
			            "label": "Target",
			            "value": "175"
			        }, {
			            "label": "Achive",
			            "value": "140"
			        }]
			    }
			}
			);
			var sales = new FusionCharts({
			    type: 'doughnut2d',
			    renderAt: 'chart-containerSales',
			    width: '300',
			    height: '300',
			    dataFormat: 'json',
			    dataSource: {
			        "chart": {
		                "caption": "",
		                "subCaption": "",
		                "numberPrefix": "",
		                "paletteColors": "#ffffff,#1aaf5d,#f2c500,#f45b00,#8e0000",
		                "bgColor": "#dddddd",
		                "showBorder": "0",
		                "use3DLighting": "1",
		                "showShadow": "0",
		                "enableSmartLabels": "0",
		                "startingAngle": "310",
		                "showLabels": "0",
		                "showPercentValues": "1",
		                "showLegend": "1",
		                "legendShadow": "0",
		                "legendBorderAlpha": "0",
		                "defaultCenterLabel": "",
		                "centerLabel": " $label: $value",
		                "centerLabelBold": "1",
		                "showTooltip": "0",
		                "decimals": "0",
		                "captionFontSize": "14",
		                "subcaptionFontSize": "14",
		                "subcaptionFontBold": "0"
		            },
			        "data": [{
			            "label": "Target",
			            "value": "175"
			        }, {
			            "label": "Achive",
			            "value": "140"
			        }]
			    }
			}
			);
			var salesSecond = new FusionCharts({
			    type: 'doughnut2d',
			    renderAt: 'chart-containerSalesSecond',
			    width: '300',
			    height: '300',
			    dataFormat: 'json',
			    dataSource: {
			        "chart": {
		                "caption": "",
		                "subCaption": "",
		                "numberPrefix": "",
		                "paletteColors": "#ffffff,#1aaf5d,#f2c500,#f45b00,#8e0000",
		                "bgColor": "#dddddd",
		                "showBorder": "0",
		                "use3DLighting": "1",
		                "showShadow": "0",
		                "enableSmartLabels": "0",
		                "startingAngle": "310",
		                "showLabels": "0",
		                "showPercentValues": "1",
		                "showLegend": "1",
		                "legendShadow": "0",
		                "legendBorderAlpha": "0",
		                "defaultCenterLabel": "",
		                "centerLabel": " $label: $value",
		                "centerLabelBold": "1",
		                "showTooltip": "0",
		                "decimals": "0",
		                "captionFontSize": "14",
		                "subcaptionFontSize": "14",
		                "subcaptionFontBold": "0"
		            },
			        "data": [{
			            "label": "Target",
			            "value": "175"
			        }, {
			            "label": "Achive",
			            "value": "140"
			        }]
			    }
			}
			);
			var salesThird = new FusionCharts({
			    type: 'doughnut2d',
			    renderAt: 'chart-containerSalesThird',
			    width: '300',
			    height: '300',
			    dataFormat: 'json',
			    dataSource: {
			        "chart": {
		                "caption": "",
		                "subCaption": "",
		                "numberPrefix": "",
		                "paletteColors": "#ffffff,#1aaf5d,#f2c500,#f45b00,#8e0000",
		                "bgColor": "#dddddd",
		                "showBorder": "0",
		                "use3DLighting": "1",
		                "showShadow": "0",
		                "enableSmartLabels": "0",
		                "startingAngle": "310",
		                "showLabels": "0",
		                "showPercentValues": "1",
		                "showLegend": "1",
		                "legendShadow": "0",
		                "legendBorderAlpha": "0",
		                "defaultCenterLabel": "",
		                "centerLabel": " $label: $value",
		                "centerLabelBold": "1",
		                "showTooltip": "0",
		                "decimals": "0",
		                "captionFontSize": "14",
		                "subcaptionFontSize": "14",
		                "subcaptionFontBold": "0"
		            },
			        "data": [{
			            "label": "Target",
			            "value": "175"
			        }, {
			            "label": "Achive",
			            "value": "140"
			        }]
			    }
			}
			);
			fusionchartSecond.render();
	    	fusioncharts.render();
	    	fusionchartThird.render();
	    	sales.render();
	    	salesSecond.render();
	    	salesThird.render();
		});
	</script>