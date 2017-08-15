<?php 
/** 
 * Charts 4 PHP 
 * 
 * @author Shani <support@chartphp.com> - http://www.chartphp.com 
 * @version 1.2.3 
 * @license: see license.txt included in package 
 */ 
  
include("../lib/inc/chartphp_dist.php"); 

$p = new chartphp(); 

$p->data = array(array(array("Jan",48.25),array("Feb",238.75),array("Mar",95.50),array("Apr",300.50),array("May",286.80),array("Jun",400)),array(array("Jan",300.25),array("Feb",225.75),array("Mar",44.50),array("Apr",259.50),array("May",250.80),array("Jun",300)));

$p->chart_type = "line"; 

// Common Options 
$p->title = "Sales - 2014 vs 2015"; 
$p->ylabel = "Sales"; 
$p->series_label = array("2014","2015"); 

$p->options["axes"]["yaxis"]["tickOptions"]["prefix"] = '$'; 

$out = $p->render('c1'); 
?>

<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var fusionchartsLine = new FusionCharts({
    type: 'msline',
    renderAt: 'chart-containerLine',
    width: '550',
    height: '350',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Revenu Analysis",
            "subCaption": "Target vs Revenue",
            "captionFontSize": "14",
            "subcaptionFontSize": "14",
            "subcaptionFontBold": "0",
            "paletteColors": "#0075c2,#1aaf5d",
            "bgcolor": "#dddddd",
            "showBorder": "0",
            "showShadow": "0",
            "showCanvasBorder": "0",
            "usePlotGradientColor": "0",
            "legendBorderAlpha": "0",
            "legendShadow": "0",
            "showAxisLines": "0",
            "showAlternateHGridColor": "0",
            "divlineThickness": "1",
            "divLineIsDashed": "1",
            "divLineDashLen": "1",
            "divLineGapLen": "1",
            "xAxisName": "Months of Year",
            "showValues": "0"               
        },
        "categories": [{
            "category": [{
                "label": "Jan"
            }, {
                "label": "Feb"
            }, {
                "label": "Mar"
            }, {
                "label": "Apr"
            }, {
                "label": "May"
            }, {
                "label": "June"
            }, {
                "label": "July"
            }, {
                "label": "Aug"
            }, {
                "label": "Sep"
            }, {
                "label": "Oct"
            }, {
                "label": "Nov"
            }, {
                "label": "Dec"
            }]
        }],
        "dataset": [
                {
                    "seriesname": "Target",
                    "data": [{
                            "value": "1137500"
                        }, {
                            "value": "1124350"
                        }, {
                            "value": "1256700"
                        }, {
                            "value": "1311450"
                        }, {
                            "value": "1208300"
                        }, {
                            "value": "1219900"
                        }, {
                            "value": "1227500"
                        }, {
                            "value": "1254300"
                        }, {
                            "value": "1155900"
                        }, {
                            "value": "1105650"
                        }, {
                            "value": "1120950"
                        }, {
                            "value": "1127500"
                        }]
                }, 
                {
                    "seriesname": "Revenue",
                    "data": [{
                            "value": "1122567"
                        }, {
                            "value": "1121348"
                        }, {
                            "value": "1224846"
                        }, {
                            "value": "1219237"
                        }, {
                            "value": "1120672"
                        }, {
                            "value": "923403"
                        }, {
                            "value": "1030278"
                        }, {
                            "value": "1126719"
                        }, {
                            "value": "2221940"
                        }, {
                            "value": "2224396"
                        }, {
                            "value": "2122340"
                        }, {
                            "value": "2225439"
                        }]
                }
            ]
        
    }
}
);
    fusionchartsLine.render();
});

</script>