<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raspagem Materialize</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .pie-custom {
            float: left;
            margin: 0 auto;
            min-width: 360px;
            height: 400px;
            max-width: 600px;
            overflow: hidden; 
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
            <?php
                include_once('getJson.php');
                $url = 'data.json'; // path to your JSON file
                $data = file_get_contents($url); // put the contents of the file into a variable
                $beaches = json_decode($data); // decode the JSON feed

                echo'
                <table class="centered">
                    <thead>
                        <tr>
                            <th colspan="3" class="text-uppercase">Balneário Camboriú - '.$global_ano.'</th>
                        </tr>
                        <tr>
                            <th class="text-uppercase">Balneário</th>
                            <th class="text-uppercase">Ponto de Coleta</th>
                            <th class="text-uppercase">Localização</th>
                        </tr>
                    </thead>
                    <tbody>';

                    $jan_propria = 0;
                    $jan_impropria = 0;
                    $fev_propria = 0;
                    $fev_impropria = 0;
                    $mar_propria = 0;
                    $mar_impropria = 0;
                    $abr_propria = 0;
                    $abr_impropria = 0;
                    $mai_propria = 0;
                    $mai_impropria = 0;
                    $jun_propria = 0;
                    $jun_impropria = 0;
                    $jul_propria = 0;
                    $jul_impropria = 0;
                    $ago_propria = 0;
                    $ago_impropria = 0;
                    $set_propria = 0;
                    $set_impropria = 0;
                    $out_propria = 0;
                    $out_impropria = 0;
                    $nov_propria = 0;
                    $nov_impropria = 0;
                    $dez_propria = 0;
                    $dez_impropria = 0;

                    $inc_beach = 1;

                    $jan_pie = '';
                    $fev_pie = '';
                    $mar_pie = '';
                    $abr_pie = '';
                    $mai_pie = '';
                    $jun_pie = '';
                    $jul_pie = '';
                    $ago_pie = '';
                    $set_pie = '';
                    $out_pie = '';
                    $nov_pie = '';
                    $dez_pie = '';

                        foreach($beaches as $beach){
                            echo'
                            <tr>
                                <td class="text-uppercase">'.$beach->descricao->Balneário.'</td>
                                <td class="text-uppercase">'.$beach->descricao->Ponto_de_Coleta.'</td>
                                <td class="text-uppercase">'.$beach->descricao->Localização.'</td>
                            </tr>';

                                foreach($beach->coletas as $coleta){
                                    #$dia_coleta = substr($coleta->data,0,2);
                                    $mes_coleta = substr($coleta->data,3,2);
                                    #$ano_coleta = substr($coleta->data,6);

                                        if($mes_coleta == '01'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $jan_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $jan_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '02'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $fev_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $fev_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '03'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $mar_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $mar_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '04'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $abr_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $abr_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '05'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $mai_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $mai_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '06'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $jun_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $jun_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '07'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $jul_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $jul_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '08'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $ago_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $ago_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '09'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $set_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $set_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '10'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $out_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $out_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '11'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $nov_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $nov_impropria++;
                                            }
                                        }

                                        if($mes_coleta == '12'){
                                            if($coleta->condicao == 'PRÓPRIA'){
                                                $dez_propria++;
                                            }

                                            if($coleta->condicao == 'IMPRÓPRIA'){
                                                $dez_impropria++;
                                            }
                                        }
                                }

                            echo'
                            <tr>
                                <td colspan="3">
                                    <div class="pie-custom chart-pie-jan-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-fev-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-mar-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-abr-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-mai-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-jun-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-jul-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-ago-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-set-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-out-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-nov-'.$inc_beach.'"></div>
                                    <div class="pie-custom chart-pie-dez-'.$inc_beach.'"></div>
                                </td>
                            </tr>';
                            
                            $jan_pie .= '
                            $(".chart-pie-jan-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Janeiro"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Janeiro",
                                    data: [{
                                        name: "Própria",
                                        y: '.$jan_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$jan_impropria.'
                                    }]
                                }]
                            });';

                            $fev_pie .= '
                            $(".chart-pie-fev-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Fevereiro"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Fevereiro",
                                    data: [{
                                        name: "Própria",
                                        y: '.$fev_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$fev_impropria.'
                                    }]
                                }]
                            });';

                            $mar_pie .= '
                            $(".chart-pie-mar-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Março"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Março",
                                    data: [{
                                        name: "Própria",
                                        y: '.$mar_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$mar_impropria.'
                                    }]
                                }]
                            });';

                            $abr_pie .= '
                            $(".chart-pie-abr-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Abril"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Abril",
                                    data: [{
                                        name: "Própria",
                                        y: '.$abr_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$abr_impropria.'
                                    }]
                                }]
                            });';

                            $mai_pie .= '
                            $(".chart-pie-mai-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Maio"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Maio",
                                    data: [{
                                        name: "Própria",
                                        y: '.$mai_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$mai_impropria.'
                                    }]
                                }]
                            });';

                            $jun_pie .= '
                            $(".chart-pie-jun-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Junho"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Junho",
                                    data: [{
                                        name: "Própria",
                                        y: '.$jun_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$jun_impropria.'
                                    }]
                                }]
                            });';

                            $jul_pie .= '
                            $(".chart-pie-jul-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Julho"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Julho",
                                    data: [{
                                        name: "Própria",
                                        y: '.$jul_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$jul_impropria.'
                                    }]
                                }]
                            });';

                            $ago_pie .= '
                            $(".chart-pie-ago-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Agosto"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Agosto",
                                    data: [{
                                        name: "Própria",
                                        y: '.$ago_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$ago_impropria.'
                                    }]
                                }]
                            });';

                            $set_pie .= '
                            $(".chart-pie-set-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Setembro"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Setembro",
                                    data: [{
                                        name: "Própria",
                                        y: '.$set_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$set_impropria.'
                                    }]
                                }]
                            });';

                            $out_pie .= '
                            $(".chart-pie-out-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Outubro"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Outubro",
                                    data: [{
                                        name: "Própria",
                                        y: '.$out_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$out_impropria.'
                                    }]
                                }]
                            });';

                            $nov_pie .= '
                            $(".chart-pie-nov-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Novembro"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Novembro",
                                    data: [{
                                        name: "Própria",
                                        y: '.$nov_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$nov_impropria.'
                                    }]
                                }]
                            });';

                            $dez_pie .= '
                            $(".chart-pie-dez-'.$inc_beach.'").highcharts({
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: 1,
                                    plotShadow: false
                                },
                                title: {
                                    text: "Dezembro"
                                },
                                tooltip: {
                                    pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>"
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: "pointer",
                                        dataLabels: {
                                            enabled: true,
                                            format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                                            style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || "black"
                                            }
                                        }
                                    }
                                },
                                series: [{
                                    type: "pie",
                                    name: "Dezembro",
                                    data: [{
                                        name: "Própria",
                                        y: '.$dez_propria.'
                                    }, {
                                        name: "Imprória",
                                        y: '.$dez_impropria.'
                                    }]
                                }]
                            });';
                                
                            $inc_beach++;
                        }

                    echo'
                    </tbody>
                </table>';
            ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>
    <script>
        (function ($) {
        <?php
            echo $jan_pie.$fev_pie.$mar_pie.$abr_pie.$mai_pie.$jun_pie.$jul_pie.$ago_pie.$set_pie.$out_pie.$nov_pie.$dez_pie;
        ?>
        })(jQuery);
    </script>
</body>
</html>