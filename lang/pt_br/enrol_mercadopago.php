<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * MercadoPago enrolment plugin
 *
 * @package    enrol_mercadopago
 * @copyright  2020 Hernan Arregoces
 * @author     Igor Pereira igorp9971@gmail.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Definir regras';
$string['access_token'] = 'Access Token Mercado Pago';
$string['access_token_desc'] = 'O token de acesso da sua conta Mercado Pago';
$string['public_key'] = 'Public Key Mercado Pago';
$string['public_key_desc'] = 'A chave pública da sua conta Mercado Pago';
$string['cost'] = 'Valor da inscrição';
$string['costerror'] = 'O valor da inscrição não é numérico';
$string['costorkey'] = 'Selecione um dos métodos de inscrição a seguir.';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Papel padrão';
$string['defaultrole_desc'] = 'Selecione qual o papel deve ser atribuído aos usuários durante as inscrições via Mercado Pago';
$string['enrolenddate'] = 'Data limite';
$string['enrolenddate_help'] = 'Se ativado, os usuários somente podem se escrever até esta data.';
$string['enrolenddaterror'] = 'A data limite de inscrição não pode ser anterior a data de início';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Duração padrão da inscrição. Se definido como zero, as inscrições não serão removidas automaticamente.';
$string['enrolperiod_help'] = 'Duração da inscrição, contando a partir do momento em que o usuário se inscreve. Se desativado, a inscrição não vai expirar.';
$string['enrolstartdate'] = 'Data início';
$string['enrolstartdate_help'] = 'Se ativo, os usuários somente podem se inscrever a partir desta data.';
$string['errdisabled'] = 'O plugin de inscrição mercadopago está desativado e não está manipulando notificações de pagamento.';
$string['erripninvalid'] = 'A notificação de pagamento instantâneo não foi verificada pelo Mercado Pago.';
$string['errconnect'] = 'Não foi possível se conectar a {$a->url} para verificar a notificação de pagamento instantâneo: {$a->result}';
$string['expiredaction'] = 'Ação ao expirar inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando a inscrição do usuário expirar. Note que alguns dados do usuário e configurações são apagados do curso durante a desincrição.';
$string['mailadmins'] = 'Notificar administrador';
$string['mailstudents'] = 'Notificar estudantes';
$string['mailteachers'] = 'Notificar professores';
$string['messageprovider:mercadopago_enrolment'] = 'Mensagens de inscrição Mercado Pago';
$string['nocost'] = 'Não há custo associado à inscrição neste curso!';
$string['mercadopago:config'] = 'Configurar instâncias mercadopago enrol';
$string['mercadopago:manage'] = 'Gerenciar usuários inscritos';
$string['mercadopago:unenrol'] = 'Desinscrever usuários deste curso';
$string['mercadopago:unenrolself'] = 'Me desinscrever deste curso';
$string['accepted'] = 'Pagamentos Mercado Pago aceitos';
$string['pluginname'] = 'MercadoPago';
$string['pluginname_desc'] = 'O módulo MercadoPago permite que você configure cursos pagos. Se o custo para algum curso for zero, os estudantes não recebem uma solicitação para pagar pela matrícula. Existe um custo abrangendo o todo o site, que pode ser definido aqui, assim como podem ser definidos valores para cada curso. Este valor é utilizado no lugar do valor definido globalmente para o site.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago'] = 'Informações sobre as transações do Mercado Pago para inscrições por esta via.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:business'] = 'Endereço de e-mail ou ID de conta Mercado Pago do recebedor (ou seja, o lojista).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:courseid'] = 'A identificação do curso vendido.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:instanceid'] = 'A identificação da instância de matrícula no curso.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:item_name'] = 'O nome completo do curso no qual a matrícula foi vendida.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:memo'] = 'Uma nota que foi definida pelo comprador no respectivo compo no site Mercado Pago.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:option_selection1_x'] = 'Nome completo do comprador.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:parent_txn_id'] = 'No caso de um reembolso, estorno ou cancelamento, esta seria a ID da transação original.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:payment_status'] = 'A situação do pagamento.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:payment_type'] = 'Armazena a forma de pagamento utilizada pelo usuário na transação.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:pending_reason'] = 'A razão da pendência no pagamento, se houver.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:reason_code'] = 'A razão para a recusa ou estorno dos valores, se for o caso.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:receiver_email'] = 'E-mail primário do recebedor (ou seja, o lojista).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:receiver_id'] = 'ID única de conta Mercado Pago do recebedor (no caso, o lojista).';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:tax'] = 'Impostos e taxas cobrados no pagamento.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:timeupdated'] = 'Data em que o Moodle foi notificado pelo Mercado Pago sobre o pagamento.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:txn_id'] = 'O número original do lojista de identificação da transação de pagamento do comprador, no qual se deu o registro.';
$string['privacy:metadata:enrol_mercadopago:enrol_mercadopago:userid'] = 'A ID do usuário que comprou a matrícula no curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com'] = 'O plugin de inscrição MercadoPago transmite dados do usuário do Moodle até o site do Mercado Pago.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:address'] = 'Endereço do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:city'] = 'Cidade do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:country'] = 'País do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:custom'] = 'Uma linha de texto separada por traços contendo o ID de usuário (comprador), ID do curso e ID de instância de matrícula.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:email'] = 'E-mail do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:first_name'] = 'Nome do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:last_name'] = 'Sobrenome do usuário que está comprando o curso.';
$string['privacy:metadata:enrol_mercadopago:mercadopago_com:os0'] = 'Nome completo do comprador.';
$string['processexpirationstask'] = 'Tarefa de envio de notificações de término de inscrição do Mercado Pago';
$string['sendpaymentbutton'] = 'Enviar pagamento via Mercado Pago';
$string['status'] = 'Permitir inscrições via MercadoPago';
$string['status_desc'] = 'Permitir que os usuários utilizem o Mercado Pago para se inscrever em um curso por padrão.';
$string['transactions'] = 'Transações Mercado Pago';
$string['unenrolselfconfirm'] = 'Você realmente deseja se desinscrever do curso "{$a}"?';
