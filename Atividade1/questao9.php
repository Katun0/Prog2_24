<?php 
interface pagamento{
    public function processar($valor);
}

class cartao implements pagamento{
    public function processar($valor)
    {
        echo "Pagamento de R$ $valor processado via Cartão de Crédito";
    }
}

class pix implements pagamento{
    public function processar($valor)
    {
        echo "Pagamento no valor de R$ $valor processado via PIX";
    }
}


// Função para processar os pagamentos de forma Polimórfica
function realizaPagamento(pagamento $metodoPagamento, $valor){
    $metodoPagamento->processar($valor);
}

?>