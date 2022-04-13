=== AQPago Pagamentos para WooCommerce ===

Contributors: AQBAnk
Tags: woocommerce, aqpago, payment
Requires at least: 4.7
Tested up to: 5.9
Requires at least: 5.6
Requires PHP: 7.0
Stable tag: 1.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Nossa solução de pagamento é a mais completa do Brasil, com a menor tarifa nas vendas por cartão de crédito, pix e boleto, e podendo contar com nosso MULTIPAGAMENTO, seu cliente pode efetuar o pagamento por dois meios, trazendo vantagens e praticidade, facilitando sua venda, nossas operações financeiras faz tudo isso acontecer, e o seu recebimento é com 1 dia útil está na conta.

== Description ==

= Integração AQPago para Woocommerce =

Taxa de vendas online a partir de 14,40%
Para saber mais sobre nossas tarifas utilize nosso [simulador AQPago](https://aqpago.com.br/#simulador)
Para utilizar o serviço de Pagamentos AQPago, é necessário entrar em [https://euquero.aqpago.com.br/integracao-pagamento](https://euquero.aqpago.com.br/integracao-pagamento) é grátis!
Faça seu crendenciamento na [AQPago](https://www.aqpago.com.br) para utilizar este plugin.

== Configurações do Plugin: ==
Atenção Documento do cliente é orbigatório no checkout, você pode utilizar o campo padrão do plugin ou
informar o seu campo personalizado que recebe o documento em "WooCommerce" > "Configurações" > Geral > AQPago - configuração de campos
e selecionar o campo de documento do seu checkout em "Campo de documento".

Com o plugin instalado acesse o admin do WordPress e entre em "WooCommerce" > "Configurações" > "Pagamentos" > "AQPago"

Habilite o AQPago, adicione o seu documento e o token do AQPago.

Você pode conseguir um token no APP AQPAgo gestor ou em https://aqbank.app/

- Ambiente: SandBox para realizar teste Produção para pamentos reais.
- Documento: documento do lojista (CPF ou CNPJ) utilizado no crendeciamento da AQPago.
- AQPago Token: token gerado para poder processar pagamentos, se atentar para sandbox e produção.
- Parcelar em até: número máximo de vezes que irá permitir de parcelas.
- Valor mínimo para parcelamento: o menor valor que uma parcela poderá ter, utilizar 0 para deixar qualquer valor.
- Gravar Log: se ativo irá gerar log de envio e resposta do processo de pagamento em WooCommerce -> Status -> Log.


== Changelog ==

= 1.2.2 - 2022-04-13 =
* Fixed item data in order detail
* Added calculate interest for customer
* Added active payment methods to pay
