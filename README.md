# AQPago Pagamentos

**Contributors:** [AQBAnk](https://profiles.wordpress.org/aqbank/) 
**Tags:** woocommerce, aqpago, payment
**Requires at least:** 4.7
**Tested up to:** 5.9
**Stable tag:** 1.0.1
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  


## Integração AQPago para Woocommerce

## Configurações do Plugin:
Com o plugin instalado acesse o admin do WordPress e entre em "WooCommerce" > "Configurações" > "Pagamentos" > "AQPago"

Habilite o AQPago, adicione o seu documento e o token do AQPago.

Você pode conseguir um token no APP AQPAgo gestor ou em https://aqbank.app/

- Ambiente: SandBox para realizar teste Produção para pamentos reais.
- Documento: documento do lojista (CPF ou CNPJ) utilizado no crendeciamento da AQPago.
- AQPago Token: token gerado para poder processar pagamentos, se atentar para sandbox e produção.
- Parcelar em até: número máximo de vezes que irá permitir de parcelas.
- Valor mínimo para parcelamento: o menor valor que uma parcela poderá ter, utilizar 0 para deixar qualquer valor.
- Gravar Log: se ativo irá gerar log de envio e resposta do processo de pagamento em WooCommerce -> Status -> Log.
