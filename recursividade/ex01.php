<?php 

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    // Início: Gerente de Vendas
                    array (
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    // Término: Gerente de Vendas
                )
            ),
            // Término: Diretor Comercial
            // Início: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    // Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Término: Supervisor de Pagamentos
                        )
                    ),
                    // Término: Gerente de Contas a Pagar
                    // Início: Gerente de Compras        
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            // Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados' => array(

                                    array(
                                        'nome_cargo' => 'Funcionário'
                                    )
                                )
                            )
                            // Término: Supervisor de Suprimentos
                        )
                    )      
                )
                // Término: Gerente de Compras
            )
            // Término: Diretor Financeiro
        )
    )
);

function exibe($cargos) 
{
    $html = '<ul>';

    foreach ($cargos as $cargo) 
    {
        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']))
        {
            if (count($cargo['subordinados']) >= 1) 
            {
                $html .= exibe($cargo['subordinados']);
            }
        }

        $html .= "</li>";
    }


    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);

?>