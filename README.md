#Conta Bancária

Este é um projeto de uma simples classe de conta bancária, escrito em PHP. Ela permite abrir e fechar contas, depositar e sacar dinheiro e cobrar tarifas mensais.
Funcionalidades

    Abertura e fechamento de conta
    Depósitos e saques
    Cobrança de tarifas mensais
    Verificação de saldo
    Proteção contra saques com saldo insuficiente
    Proteção contra operações em contas fechadas

#Utilização

Para usar esta classe, você precisará criar uma nova instância da classe e chamar os métodos apropriados.
Exemplo:

$minha_conta = new BankAccount();
$minha_conta->openAccount("CC");
$minha_conta->setOwner("Lucas");
$minha_conta->deposit(100);
$minha_conta->withdrawn(50);
echo "Saldo atual: " . $minha_conta->getBalance();

#Observação

Este é um projeto de nível junior, então algumas funcionalidades podem estar faltando ou não estar otimizadas.

#Como contribuir

Se você deseja contribuir com este projeto, você pode:

    Reportar bugs e sugerir novas funcionalidades
    Criar pull requests para corrigir problemas ou adicionar funcionalidades

Este projeto é mantido por mim, sinta-se à vontade para entrar em contato comigo se tiver alguma sugestão.
