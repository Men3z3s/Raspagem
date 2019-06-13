<?php
    $global_municipio = '24';
    $global_local = '40';
    $global_ano = '2018';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://balneabilidade.ima.sc.gov.br/relatorio/historico');
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, 'municipioID='.$global_municipio.'&localID='.$global_local.'&ano='.$global_ano.'&redirect=true');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $html = curl_exec($curl);
    $doc = new DOMDocument();
    $doc->loadHTML($html);
    $tabelas = $doc->getElementsByTagName('table');
    $dados = array();
    $y = 0;

        foreach ($tabelas as $indice => $tabela) {
            if ($indice != 0) {
                if ($indice % 2 != 0) {
                    $pontos = array();
                    $labels = $tabela->getElementsByTagName('label');
                        
                        foreach ($labels as $label) {
                            $partes = explode(': ', $label->nodeValue);
                            $pontos[str_replace(' ', '_', $partes[0])] = $partes[1];
                        }

                    $dados[]['descricao'] = $pontos;
                } else {
                    $linhas = $tabela->getElementsByTagName('tr');
                    $coletas = array();

                        foreach ($linhas as $i => $linha) {
                            if ($i != 0) {
                                $celulas = $linha->getElementsByTagName('td');
                                $coleta = array();

                                    foreach ($celulas as $celula) {
                                        $titulo = $celula->getAttribute('class');
                                        $coleta[$titulo] = $celula->nodeValue;
                                    }
                                
                                $coletas[] = $coleta;
                            }
                        }

                    $dados[$y]['coletas'] = $coletas;
                    $y++;
                }
            }
        }

    #echo json_encode($dados);
    $fp = fopen('data.json', 'w');
    fwrite($fp, json_encode($dados));
    fclose($fp);
?>