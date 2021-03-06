<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	/*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
	'ADVANCED'=>'Avançado',
	'DEFAULT_CURRENCY_ISO4217'=>'Código da moeda em formato ISO 4217',
	'DEFAULT_CURRENCY_NAME'=>'Nome da moeda',
	'DEFAULT_CURRENCY_SYMBOL'=>'Símbolo da moeda',
	'DEFAULT_CURRENCY'=>'Moeda Padrão',
	'DEFAULT_DATE_FORMAT'=>'Formato de data padrão',
	'DEFAULT_DECIMAL_SEP'					=> 'Símbolo decimal',
	'DEFAULT_LANGUAGE'=>'Idioma padrão',
	'DEFAULT_NUMBER_GROUPING_SEP'			=> 'Separador 1000s',
	'DEFAULT_SYSTEM_SETTINGS'=>'Interface do Usuário',
	'DEFAULT_THEME'=> 'Tema padrão',
	'DEFAULT_TIME_FORMAT'=>'Formato de horário padrão',
/*	'DISABLE_EXPORT'=>'Disable export',*/
	'DISPLAY_RESPONSE_TIME'=>'Mostrar o tempo de resposta do servidor',
	/*'EXPORT'=>'Export',
	'EXPORT_CHARSET' => 'Default Export Character Set',
	'EXPORT_DELIMITER' => 'Export Delimiter',*/
	'IMAGES'=>'Logotipos',
	'LBL_ADMIN_WIZARD' => 'Wizard de Administração',
	'LBL_ALLOW_USER_TABS' => 'Permitir aos Usuários configurar tabuladores',
	'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configuração do Sistema',
	'LBL_ENABLE_MAILMERGE' => 'Ativar o Mail Merge?',
	'LBL_LOGVIEW' => 'Configurar as definições do Log',
	'LBL_MAIL_SMTPAUTH_REQ'				=> 'Utilize Autenticação SMTP?',
	'LBL_MAIL_SMTPPASS'					=> 'Senha SMTP:',
	'LBL_MAIL_SMTPPORT'					=> 'Porta SMTP',
	'LBL_MAIL_SMTPSERVER'				=> 'Servidor SMTP:',
	'LBL_MAIL_SMTPUSER'					=> 'Usuário SMTP:',
	'LBL_MAIL_SMTPTYPE'                => 'Tipo de servidor SMTP:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'Especificação servidor SMTP',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Escolha o seu fornecedor de e-mail',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Senha Yahoo! Mail',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID Yahoo! Mail',
	'LBL_GMAIL_SMTPPASS'					=> 'Senha Gmail',
	'LBL_GMAIL_SMTPUSER'					=> 'Endereço de e-mail Gmail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Senha Exchange',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Usuário Exchange',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Porta Servidor Exchange',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor Exchange',
    'LBL_ALLOW_DEFAULT_SELECTION'           => 'Permitir que Usuárioes usem esta conta para enviar e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Quando esta opção for selecionada, todos os Usuários serão capazes de enviar e-mails usando a mesma conta que o sistema usa para enviar notificações e alertas. Se a opção não for selecionada, os Usuários podem ainda utilizar o servidor de correio de saída, se assim o configurarem nas suas definições.',
	'LBL_MAILMERGE_DESC' => 'Esta opção deverá ser selecionada apenas se o Sugar Plug-in para Microsoft Word foi comprado e licenciado',
	'LBL_MAILMERGE' => 'Mala direta',
	'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalo Minimo do Auto-Refresh do Dashlet',
	'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este é o valor mínimo que pode ser escolhido para o auto-refresh dos dashlets. Definir para &#39;Nunca&#39; desabilita o auto-refresh dos dashlets completamente.',
	'LBL_MODULE_FAVICON'               => 'Exibir ícone de módulo como favicon',
    'LBL_MODULE_FAVICON_HELP'   => 'Se está num módulo com um ícone, utilize o ícone do módulo como favicon, em vez do favicon do tema, no tabulador do browser.',
	'LBL_MODULE_NAME'=>'Configuração do Sistema',
	'LBL_MODULE_NAME_SINGULAR' => 'Ajustes Sistema',
    'LBL_MODULE_ID'  => 'Configurador',
	'LBL_MODULE_TITLE'=>'Interface do Usuário',
	'LBL_NOTIFY_FROMADDRESS' => 'Endereço "De":',
	'LBL_NOTIFY_SUBJECT' => 'Assunto do E-mail:',
	'LBL_PORTAL_ON_DESC' => 'Ativa o acesso externo pelo Portal de Self-Service a Ocorrências, Notas e outros dados.',
	'LBL_PORTAL_ON' => 'Ativar a Integração com o Portal de Gestão do Usuário',
	'LBL_PORTAL_TITLE' => 'Portal de Self-Service do Cliente',
	'LBL_PROXY_AUTH'=>'Autenticação?',
	'LBL_PROXY_HOST'=>'Host do Proxy',
	'LBL_PROXY_ON_DESC'=>'Configurar o endereço do Host do Proxy e autenticação',
	'LBL_PROXY_ON'=>'Utilizar um host do proxy?',
	'LBL_PROXY_PASSWORD'=>'senha:',
	'LBL_PROXY_PORT'=>'Porta',
	'LBL_PROXY_TITLE'=>'Configuração do Proxy',
	'LBL_PROXY_USERNAME'=>'Nome do Usuário',
	'LBL_RESTORE_BUTTON_LABEL'=>'Restaurar',
	'LBL_SYSTEM_SETTINGS' => 'Configuração do Sistema',
	'LBL_SKYPEOUT_ON_DESC' => 'Ativar o SkypeOut®. Os números de telefone devem ser formatados corretamente para utilizar este recurso. Formato: "+" "Código Pais" "Telefone", por exemplo +1 (555) 555-1234. Mais informações em: http://www.skype.com/help/faq/skypeout.html#calling',
	'LBL_SKYPEOUT_ON' => 'Ativar a Integração com SkypeOut®?',
	'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
    'LBL_TWEETTOCASE_ON_DESC' => 'Permitir usuários criarem casos a partir de Tweets',
    'LBL_TWEETTOCASE_ON' => 'Habilitar Ocorrência Tweet&reg;',
    'LBL_TWEETTOCASE_TITLE' => 'Tweet&reg; Ocorrências',
	'LBL_USE_REAL_NAMES'	=> 'Mostra nome completo',
	'LBL_USE_REAL_NAMES_DESC'			=> 'Mostrar o nome completo dos Usuários ao invés do nome de Usuário',
    'LBL_DISALBE_CONVERT_LEAD' => 'Desativar a$#39;ção de conversão de Leads para Leads Convertidos',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Se um Lead já foi convertido, habilitar esta opção irá remover a ação de conversão de Leads',
    'LBL_ENABLE_ACTION_MENU' => 'Visualizar ações dentro do Menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Selecione para exibir DetailView e ações do subpainel dentro de um menu suspenso. Se não  selecionados, as ações serão exibidas como botões separados.',
    'LBL_LOCK_SUBPANELS_DESC' => 'Esta definição aplica-se aos módulos no modo legado.',
    'LBL_COLLAPSE_SUBPANELS_DESC' => 'When selected, all subpanels in the record view will be collapsed by default to improve performance. Users wishing to view subpanel data will need to expand the subpanel each time they access the record. Note: this setting does not apply to Legacy modules.',
    'LIST_ENTRIES_PER_LISTVIEW'=>'Número de registos por página nas Listagens',
    'TPL_LIST_ENTRIES_PER_LISTVIEW_HELP'=>'Configuração recomendada está abaixo {{listEntriesNum}} para níveis de desempenho aceitáveis. Como campos adicionais são adicionados ao listview, este número deve ser na extremidade inferior do valor recomendado.',
	'LIST_ENTRIES_PER_SUBPANEL'=>'Número de registos por página nos Sub-painéis',
    'TPL_LIST_ENTRIES_PER_SUBPANEL_HELP'=>'Configuração recomendada está abaixo {{subpanelEntriesNum }}  para níveis de desempenho aceitáveis. Como campos adicionais são adicionados ao listview, este número deve ser na extremidade inferior do valor recomendado.',
	'LBL_WIRELESS_LIST_ENTRIES' => 'Número de registos por página nas Listagens',
    'LBL_WIRELESS_SERVER_URL' => 'Servidor Sugar Mobile Edge',
	'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Número de registos por página nos Sub-painéis',
	'LOG_MEMORY_USAGE'=>'Registar a utilização da memória no log',
	'LOG_SLOW_QUERIES'=>'Registar as consultas mais lentas no log',
    'LOCK_HOMEPAGE_HELP'=>'Esta configuração destina-se a prever<BR> 1) a adição de novas páginas principais e dashlets no módulo Página Principal, <BR>2) customização do posicionamento do dashlet nas páginas principais através de arrastar e soltar.',
    'CURRENT_LOGO'=>'logotipo atual',
    'CURRENT_LOGO_HELP'=>'Este logotipo é exibido no canto superior esquerdo da aplicação Sugar.',
    'NEW_LOGO'=>'Selecionar um novo logotipo (212x40)',
    'NEW_LOGO_HELP' => 'O formato do arquivo de imagem pode ser em .png ou .jpg. <BR> O tamanho recomendado é 212x40 px.',
    'NEW_LOGO_HELP_NO_SPACE' => 'O formato de arquivo de imagem pode ser qualquer um. Png ou. Jpg. A altura máxima é 17px, e a largura máxima é de 450px. Qualquer imagem de upload que é maior em qualquer direção será dimensionada para essas dimensões max. Nome do arquivo de imagem não deve conter um caractere de espaço.',
    'NEW_QUOTE_LOGO'=>'Carregar um novo logotipo para o módulo de Cotações (867x74)',
    'NEW_QUOTE_LOGO_HELP'=>'O formato do arquivo de imagem necessário é em .jpg. <BR> O tamanho recomendado é 867x74 px.',
    'QUOTES_CURRENT_LOGO'=>'logotipo utilizado nas Cotações',
	'SLOW_QUERY_TIME_MSEC'=>'Limite em milissegundos das consultas mais lentas',
	'STACK_TRACE_ERRORS'=>'Mostrar o stack trace de erros',
	'UPLOAD_MAX_SIZE'=>'Tamanho máximo de Arquivos a carregar',
	'VERIFY_CLIENT_IP'=>'Validar o IP do Usuário',
    'LOCK_HOMEPAGE' => 'Inibir o Usuário de alterar o Layout da página principal',
    'LOCK_SUBPANELS' => 'Inibir o Usuário de alterar os Subpainéis',
    'COLLAPSE_SUBPANELS' => 'Collapse all subpanels and disable sticky feature',
    'MAX_DASHLETS' => 'Número máximo de Dashlets na Página Principal',
	'SYSTEM_NAME'=>'Nome do Sistema',
	'SYSTEM_NAME_WIZARD'=>'Nome:',
	'SYSTEM_NAME_HELP'=>'Nome que aparece na barra de título do seu navegador.',
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Ativar / Desativar e-mails de contatos relacionados (ou ligados) para mostrar no e-mail Subpainel.',

    'LBL_OC_STATUS'                     => 'Estado do Cliente Off-line por defeito',
    'DEFAULT_OC_STATUS'                 => 'Habilitar o Cliente Off-line por defeito',
    'LBL_OC_STATUS_DESC' => 'Seleccione esta opção se pretender que qualquer Usuário tenha acesso ao Cliente Off-line. Caso contrário poderá configurar isto ao nível de cada Usuário.',
    'SESSION_TIMEOUT' => 'Tempo de Expiração da Sessão',
    'LBL_SESSION_TIMEOUT_TOOLTIP' => 'O tempo limite da sessão do portal é para versões legadas do Portal Sugar disponível nas versões 6,5 e anteriores.',
    'SESSION_TIMEOUT_UNITS' => 'segundos',
    'LBL_LDAP_TITLE'=>'Suporte para Autenticação LDAP',
    'LBL_LDAP_ENABLE'=>'Ativar LDAP',
    'LBL_LDAP_SERVER_HOSTNAME'=> 'Servidor:',
    'LBL_LDAP_SERVER_PORT'=> 'Número da Porta',
    'LBL_LDAP_ADMIN_USER'=> 'Nome do Usuário:',
    'LBL_LDAP_ADMIN_USER_DESC'=>'Utilizado para procurar por Usuários do Sugar. [Pode precisar de ser completamente qualificado] Irá ligar-se anonimamente caso não seja fornecido.',
    'LBL_LDAP_ADMIN_PASSWORD'=> 'senha:',
	'LBL_LDAP_AUTHENTICATION'=> 'Autenticação:',
	'LBL_LDAP_AUTHENTICATION_DESC'=>'Ligar-se ao servidor LDAP usando credenciais específicas dos Usuários',
    'LBL_LDAP_AUTO_CREATE_USERS'=>'Criar Usuários automaticamente',
    'LBL_LDAP_USER_DN'=>'DN do Usuário',
	'LBL_LDAP_GROUP_DN'=>'DN do Grupo',
	'LBL_LDAP_GROUP_DN_DESC'=>'Exemplo: <em>ou=groups,dc=example,dc=com</em>',
	'LBL_LDAP_USER_FILTER'=>'Filtro de Usuário:',
	'LBL_LDAP_GROUP_MEMBERSHIP'=>'Adesão ao Grupo:',
	'LBL_LDAP_GROUP_MEMBERSHIP_DESC'=>'Usuários devem ser membros de um grupo específico',
	'LBL_LDAP_GROUP_USER_ATTR'=>'Atributo de Usuário:',
	'LBL_LDAP_GROUP_USER_ATTR_DESC'=>'O identificador exclusivo que será usado para verificar se eles são um membro do grupo Exemplo: <em>uid</em>',
	'LBL_LDAP_GROUP_ATTR_DESC'=>'O atributo de Grupo que será usado para filtrar face ao Atributo de Usuário Exemplo: <em>memberUid</em>',
	'LBL_LDAP_GROUP_ATTR'=>'Atributo de Grupo:',
	'LBL_LDAP_USER_FILTER_DESC'=>'Quaisquer parâmetros de filtro adicionais a aplicar quando da autenticação de Usuários ex:<em>is_sugar_user=1 ou (is_sugar_user=1)(is_sales=1)</em>;',
    'LBL_LDAP_LOGIN_ATTRIBUTE'=>'Atributo de Login:',
    'LBL_LDAP_BIND_ATTRIBUTE'=>'Atributo de Ligação:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC'=>'Para ligação de Usuários LDAP Exemplos:[<b>AD</b>: userPrincipalName] [<b>openLDAP</b>: userPrincipalName] [<b>Mac OS X:</b> uid]',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC'=>'Para pesquisar por Usuários LDAP Exemplos: [<b>AD</b>: userPrincipalName] [<b>openLDAP</b>: dn] [<b>Mac OS X:</b>: dn]',
    'LBL_LDAP_SERVER_HOSTNAME_DESC'=>'Exemplo: ldap.example.com',
    'LBL_LDAP_SERVER_PORT_DESC'=>'Exemplo: 389',
	'LBL_LDAP_GROUP_NAME'=>'Nome do Grupo',
	'LBL_LDAP_GROUP_NAME_DESC'=>'Exemplo <em>cn=sugarcrm</em>',
    'LBL_LDAP_USER_DN_DESC'=>'Exemplo: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC'=> 'Caso um Usuário autenticado não exista será criado no Sugar.',
    'LBL_LDAP_ENC_KEY'	=> 'Chave de Encriptação',
    'DEVELOPER_MODE'=>'Modo de Programador',

	'SHOW_DOWNLOADS_TAB' =>'Mostrar o Separador de Downloads',
	'SHOW_DOWNLOADS_TAB_HELP' =>'Quando selecionado, o separador de Downloads irá aparecer na definições do Usuário e fornece aos Usuários acesso a plug-ins e outro Arquivos disponíveis do Sugar.',
    'LBL_LDAP_ENC_KEY_DESC'	=> 'Para autenticação SOAP quando utilizar LDAP',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'A extensão php_mcrypt deve ser Ativada no seu arquivo php.ini',
    'LBL_ALL' => 'Todos',
    'LBL_MARK_POINT' => 'Marcar Ponto',
    'LBL_NEXT_' => 'Próximo >>',
    'LBL_REFRESH_FROM_MARK' => 'atualizar a Partir da Marca',
    'LBL_SEARCH' => 'Pesquisar:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignorar-se:',
    'LBL_MARKING_WHERE_START_LOGGING'=>'Marcação Inicial do Logging',
    'LBL_DISPLAYING_LOG'=>'Exibindo Registo',
    'LBL_YOUR_PROCESS_ID'=>'O seu ID do processo',
    'LBL_YOUR_IP_ADDRESS'=>'O seu Endereço de IP é',
    'LBL_IT_WILL_BE_IGNORED'=>'será ignorado',
    'LBL_LOG_NOT_CHANGED'=>'Registo não se alterou',
    'LBL_ALERT_JPG_IMAGE' => 'O formato do arquivo da imagem deve ser JPEG. Carregue um novo arquivo com a extensão .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'O formato do arquivo da imagem deve ser JPEG ou PNG. Carregue um novo arquivo com a extensão .jpg ou .png.',
    'LBL_ALERT_SIZE_RATIO' => 'A proporção do aspecto da imagem deve estar entre 1:1 e 10:1. A imagem será redimensionada.',
    'LBL_ALERT_SIZE_RATIO_QUOTES' => 'A proporção do aspecto da imagem deve estar entre 3:1 e 20:1. Carregue um novo arquivo com esta proporção.',
    'ERR_ALERT_FILE_UPLOAD' => 'Erro durante o carregamento da imagem.',
    'LBL_LOGGER'=>'Configurações de Logger',
	'LBL_LOGGER_FILENAME'=>'Nome do arquivo Log',
	'LBL_LOGGER_FILE_EXTENSION'=>'Extensão',
	'LBL_LOGGER_MAX_LOG_SIZE'=>'Tamanho máximo do log',
	'LBL_LOGGER_DEFAULT_DATE_FORMAT'=>'Formato de data padrão',
	'LBL_LOGGER_LOG_LEVEL'=>'Nível do Log',
        'LBL_LEAD_CONV_OPTION' => 'Opções Conversão de Leads',
        'LEAD_CONV_OPT_HELP' => "Copy - Cria e relaciona cópias de todas as atividades dos Leads para novos registros que são selecionados pelo usuário durante a conversão. Cópias são criadas para cada um dos registros selecionados.<br /><br />Move - Move todas as atividades dos Leads de um novo registro que é selecionado pelo usuário durante a conversão.<br /><br />Não fazer nada - Não faz nada com as atividades dos Leads durante a conversão. As atividades continuam relacionados apenas ao Lead .",
	'LBL_LOGGER_MAX_LOGS'=>'Número máximo de logs (antes do rolling)',
	'LBL_LOGGER_FILENAME_SUFFIX' =>'Anexar após o nome do arquivo',
	'LBL_VCAL_PERIOD' => 'Período de Tempo das atualizações vCal',
    'LBL_NO_PRIVATE_TEAM_UPDATE' => 'Evita alterações de nome por usuários para atualizar seu Nome de Equipe Privado',
    'LBL_IMPORT_MAX_RECORDS' => 'Importar: Número máximo de linhas',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especificar quantas linhas são permitidas dentro de arquivos de importação. Se o número de linhas<br />em um arquivo de importação exceder este número, o usuário será alertado. Se nenhum número<br />é inserido, um número ilimitado de linhas são permitidos.',
	'vCAL_HELP' => 'Utilize esta configuração para determinar o número de meses em antecedência à atual data em que a informação Free/Busy para chamadas telefônicas e reuniões é publicada.</BR>Para desligar a publicação Free/Busy, introduza "0". O mínimo é 1 mês; o máximo são 12 meses.',
    'LBL_PDFMODULE_NAME' => 'Definições de PDF',
    'SUGARPDF_BASIC_SETTINGS' => 'Propriedades do Documento',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Definições Avançadas',
    'SUGARPDF_LOGO_SETTINGS' => 'Imagens',

    'PDF_CREATOR' => 'Criador de PDF',
    'PDF_CREATOR_INFO' => 'Define o criador do documento. <br>Este é tipicamente o nome da aplicação que gera o PDF.',

    'PDF_AUTHOR' => 'Autor:',
    'PDF_AUTHOR_INFO' => 'O Autor aparece nas propriedades do documento.',

    'PDF_HEADER_LOGO' => 'Para Documentos PDF Cotações',
    'PDF_HEADER_LOGO_INFO' => 'Esta imagem aparece no Cabeçalho padrão em Documentos PDF Cotações',

    'PDF_NEW_HEADER_LOGO' => 'Selecionar Nova Imagem para Cotações',
    'PDF_NEW_HEADER_LOGO_INFO' => 'O formato do arquivo pode ser .jpg ou .png. (Apenas .jpg para EZPDF)<BR>O tamanho recomendado é 867x74 px.',

    'PDF_HEADER_LOGO_WIDTH' => 'Largura da Imagem de Cotações',
    'PDF_HEADER_LOGO_WIDTH_INFO' => 'Modificar a escala da imagem carregada que aparece nos Documentos PDF Cotações. (Apenas TCPDF)',

    'PDF_SMALL_HEADER_LOGO' => 'Para Documentos PDF Relatórios',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Esta imagem aparece no Cabeçalho padrão em Documentos PDF Relatórios.<br> Esta imagem também aparece no canto superior esquerdo da aplicação Sugar.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Selecionar Nova Imagem para Relatórios',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'O formato do arquivo pode ser .jpg ou .png. (Apenas .jpg para EZPDF)<BR>O tamanho recomendado é 212x40 px.',

    'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Largura da Imagem de Relatórios',
    'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Modificar a escala da imagem carregada que aparece nos Documentos PDF Relatórios. (Apenas TCPDF)',


    'PDF_HEADER_STRING' => 'String do Cabeçalho',
    'PDF_HEADER_STRING_INFO' => 'String da descrição do Cabeçalho',

    'PDF_HEADER_TITLE' => 'Título do Cabeçalho',
    'PDF_HEADER_TITLE_INFO' => 'String para imprimir como título no cabeçalho do documento',

    'PDF_FILENAME' => 'Nome de arquivo Padrão',
    'PDF_FILENAME_INFO' => 'Nome de arquivo padrão para os Arquivos PDF gerados',

    'PDF_TITLE' => 'Título',
    'PDF_TITLE_INFO' => 'O Título aparece nas propriedades do documento.',

    'PDF_SUBJECT' => 'Assunto',
    'PDF_SUBJECT_INFO' => 'O Assunto aparece nas propriedades do documento.',

    'PDF_KEYWORDS' => 'Palavra(s)-chave',
    'PDF_KEYWORDS_INFO' => 'Associar Palavras-chave ao documento, geralmente no formato "palavra-chave1 palavra-chave2..."',

    'PDF_COMPRESSION' => 'Compressão',
    'PDF_COMPRESSION_INFO' => 'Ativa ou desativa a compressão da página. <br>Quando Ativada, a representação interna de cada página é comprimida, o que leva a uma taxa de compressão de aproximadamente 2 para o documento resultante.',

    'PDF_JPEG_QUALITY' => 'Qualidade JPEG (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Definir a qualidade de compressão JPEG padrão (1-100)',

    'PDF_PDF_VERSION' => 'Versão PDF',
    'PDF_PDF_VERSION_INFO' => 'Definir a versão PDF (verificar a referência PDF para valores válidos).',

    'PDF_PROTECTION' => 'Proteção do Documento',
    'PDF_PROTECTION_INFO' => 'Definir a proteção do documento<br>- copiar: copiar texto e imagens para o clipboard<br>- imprimir: imprimir o documento <br>- modificar: modificá-lo (excepto para anotações e formulários)<br>- anotar-formulários: adicionar anotações e formulários<br>Nota: a proteção contra a modificação é para as pessoas que têm o produto Acrobat completo.',

    'PDF_USER_PASSWORD' => 'Senha do Usuário',
    'PDF_USER_PASSWORD_INFO' => 'Se não definir nenhuma Senha, o documento abrirá como habitual. <br>Se definir uma Senha de Usuário, o visualizador de PDF irá pedi-la antes de exibir o documento. <br>A Senha principal, se for diferente da do Usuário, pode ser usada para obter acesso total.',

    'PDF_OWNER_PASSWORD' => 'Senha do Proprietário',
    'PDF_OWNER_PASSWORD_INFO' => 'Se não definir nenhuma Senha, o documento abrirá como habitual. <br>Se definir uma Senha de Usuário, o visualizador de PDF irá pedi-la antes de exibir o documento. <br>A Senha principal, se for diferente da do Usuário, pode ser usada para obter acesso total.',

    'PDF_ACL_ACCESS' => 'Controle de Acesso',
    'PDF_ACL_ACCESS_INFO' => 'Controle de Acesso Padrão para a geração de PDF.',

    'K_CELL_HEIGHT_RATIO' => 'Proporção da Altura da Célula',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Se a altura de uma célula é menor que (Proporção Altura da Fonte x Altura da Célula), então (Proporção Altura da Fonte x Altura da Célula) é usada como a altura da célula.<br>(Proporção Altura da Fonte x Altura da Célula) é também usada como altura da célula quando não está definida nenhuma altura.',

    'K_TITLE_MAGNIFICATION' => 'Ampliação do Título',
    'K_TITLE_MAGNIFICATION_INFO' => 'Ampliação do título respeita o tamanho principal da fonte.',

    'K_SMALL_RATIO' => 'Fator Fonte Pequena',
    'K_SMALL_RATIO_INFO' => 'Fator de redução para fonte pequena.',

    'HEAD_MAGNIFICATION' => 'Ampliação do Cabeçalho',
    'HEAD_MAGNIFICATION_INFO' => 'Fator de ampliação para títulos.',

    'PDF_IMAGE_SCALE_RATIO' => 'Proporção da escala da imagem',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Proporção usada para escalar as imagens',

    'PDF_UNIT' => 'Unidade',
    'PDF_UNIT_INFO' => 'Unidade de medição do documento',
	'PDF_GD_WARNING'=>'Não tem a biblioteca GD instalada para PHP. Sem a biblioteca GD instalada, apenas os logotipos JPEG podem ser exibidos em documentos PDF.',
    'ERR_EZPDF_DISABLE'=>'Aviso: A classe EZPDF está desativada na tabela de configuração e foi definida como a classe PDF. Por favor "Grave" este formulário para definir TCPDF como a Classe PDF e retornar num estado estável.',
    'LBL_IMG_RESIZED'=>"(redimensionado para exibição)",


    'LBL_FONTMANAGER_BUTTON' => 'Gestor de Fonte PDF',
    'LBL_FONTMANAGER_TITLE' => 'Gestor de Fonte PDF',
    'LBL_FONT_BOLD' => 'Negrito',
    'LBL_FONT_ITALIC' => 'Itálico',
    'LBL_FONT_BOLDITALIC' => 'Negrito/Itálico',
    'LBL_FONT_REGULAR' => 'Regular',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Nuclear',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Nome',
    'LBL_FONT_LIST_FILENAME' => 'Nome do arquivo',
    'LBL_FONT_LIST_TYPE' => 'Tipo',
    'LBL_FONT_LIST_STYLE' => 'Estilo',
    'LBL_FONT_LIST_STYLE_INFO' => 'Estilo da fonte',
    'LBL_FONT_LIST_ENC' => 'Codificação',
    'LBL_FONT_LIST_EMBEDDED' => 'Embutido',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Verificar para embutir a fonte no arquivo PDF',
    'LBL_FONT_LIST_CIDINFO' => 'Informação CID',
    'LBL_FONT_LIST_CIDINFO_INFO' => "Examples :".
"<ul><li>".
"Chinese Traditional :<br>".
"include(\\'vendor/tcpdf/fonts/uni2cid_ac15.php\\');</pre>".
"</li><li>".
"Chinese Simplified :<br>".
"include(\\'vendor/tcpdf/fonts/uni2cid_ag15.php\\');</pre>".
"</li><li>".
"Korean :<br>".
"include(\\'vendor/tcpdf/fonts/uni2cid_ak12.php\\');</pre>".
"</li><li>".
"include(\\'vendor/tcpdf/fonts/uni2cid_ag15.php\\');</pre>".
"include(\\'vendor/tcpdf/fonts/uni2cid_aj16.php\\');</pre>".
"</li></ul>".
"More help : www.tcpdf.org".
"include(\\'vendor/tcpdf/fonts/uni2cid_ak12.php\\');</pre>".
"include(\\'vendor/tcpdf/fonts/uni2cid_ag15.php\\');</pre>".
"Japanese :<br>".
"<pre>\\$enc=\\'UniJIS-UTF16-H\\';<br>".
"\\$cidinfo=array(\\'Registry\\'=>\\'Adobe\\', \\'Ordering\\'=>\\'Japan1\\',\\'Supplement\\'=>5);<br>".
"include(\\'vendor/tcpdf/fonts/uni2cid_aj16.php\\');</pre>".
"</li></ul>".
"More help : www.tcpdf.org",
    'LBL_FONT_LIST_FILESIZE' => 'Tamanho da Fonte (KB)',
    'LBL_ADD_FONT' => 'Adicionar uma fonte',
    'LBL_BACK' => 'Voltar',
    'LBL_REMOVE' => 'rem',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Tem a certeza que pretende eliminar esta fonte?',

    'LBL_ADDFONT_TITLE' => 'Adicionar uma Fonte PDF',
    'LBL_PDF_PATCH' => 'Patch',
    'LBL_PDF_PATCH_INFO' => 'Modificação personalizada da codificação. Escrever um array PHP. <br>Exemplo :<br>ISO-8859-1 não contém o símbolo do euro. Para adicioná-lo na posição 164, escreva "array(164=>\\&#39;Euro\\&#39;)".',
    'LBL_PDF_ENCODING_TABLE' => 'Tabela de Codificação',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Nome da tabela de codificação.<br>Esta opção é ignorada para TrueType Unicode, Unicode OpenType e fontes simbólicas.<br>A codificação define a associação entre um código (de 0 a 255) e um caractere contido na fonte.<br>Os primeiros 128 são fixos e correspondem ao ASCII.',
    'LBL_PDF_FONT_FILE' => 'arquivo da Fonte',
    'LBL_PDF_FONT_FILE_INFO' => 'arquivo .ttf ou .otf ou .pfb',
    'LBL_PDF_METRIC_FILE' => 'arquivo Métrico',
    'LBL_PDF_METRIC_FILE_INFO' => 'arquivo .afm ou .ufm',
    'LBL_ADD_FONT_BUTTON' => 'Adicionar [Alt+C]',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Este arquivo não tem uma boa extensão de arquivo.',
    'LBL_PDF_INSTRUCTIONS' => 'Instruções',
    'PDF_INSTRUCTIONS_ADD_FONT' => <<<BSOFR
Fonts supported by SugarPDF :
<ul>
<li>TrueTypeUnicode (UTF-8 Unicode)</li>
<li>OpenTypeUnicode</li>
<li>TrueType</li>
<li>OpenType</li>
<li>Type1</li>
<li>CID-0</li>
</ul>
<br>
If you choose to not embed your font in the PDF, the generated PDF file will be lighter but a substitution will be use if the font is not available in the system of your reader.
<br><br>
Adding a PDF font to SugarCRM requires to follow steps 1 and 2 of the TCPDF Fonts documentation available in the "DOCS" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.
<br><br>The pfm2afm and ttf2ufm utils are available in fonts/utils in the TCPDF package that you can download on the "DOWNLOAD" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.
<br><br>Load the metric file generated in step 2 and your font file below.
BSOFR
,
    'ERR_MISSING_CIDINFO' => 'O campo Informação CID não pode estar em branco.',
    'LBL_ADDFONTRESULT_TITLE' => 'Resultado do processo de adicionamento de fonte',
    'LBL_STATUS_FONT_SUCCESS' => 'SUCESSO: A fonte foi adicionada ao SugarCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERRO: A fonte não foi adicionada. Consulte o registo abaixo.',
    'LBL_FONT_MOVE_DEFFILE' => 'arquivo de definição de fonte movido para :',
    'LBL_FONT_MOVE_FILE' => 'arquivo de definição movido para :',

// Font manager
    'ERR_LOADFONTFILE' => 'ERRO: Erro LoadFontFile!',
    'ERR_FONT_EMPTYFILE' => 'ERRO: Nome de arquivo vazio!',
    'ERR_FONT_UNKNOW_TYPE' => 'ERRO: Tipo de fonte desconhecido:',
    'ERR_DELETE_CORE_FILE' => 'ERRO: Não é possível eliminar uma fonte nuclear.',
    'ERR_NO_FONT_PATH' => 'ERRO: Nenhum path de fonte disponível!',
    'ERR_NO_CUSTOM_FONT_PATH' => 'ERRO: Nenhum path de fonte personalizado disponível!',
    'ERR_FONT_NOT_WRITABLE' => 'não é editável.',
    'ERR_FONT_FILE_DO_NOT_EXIST' => 'não existe ou não é uma diretoria.',
    'ERR_FONT_MAKEFONT' => 'ERRO: Erro MakeFont',
    'ERR_FONT_ALREADY_EXIST' => 'ERRO : Esta fonte já existe. Retroceder...',
    'ERR_PDF_NO_UPLOAD' => 'Erro durante o carregamento da fonte ou arquivo métrico.',

// Wizard
    'LBL_WIZARD_TITLE' => 'Wizard de Administração',
    'LBL_WIZARD_WELCOME_TAB' => 'Bem-vindo',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bem-vindo ao Sugar!',
    'LBL_WIZARD_WELCOME' => 'Clique em <b>Próximo</b> para configurar algumas configurações básicas para o uso do Sugar.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Próximo >',
    'LBL_WIZARD_BACK_BUTTON' => 'Voltar',
    'LBL_WIZARD_SKIP_BUTTON' => 'Pular',
    'LBL_WIZARD_FINISH_BUTTON' => 'Concluir',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
    'LBL_WIZARD_FINISH_TAB' => 'Concluir',
    'LBL_WIZARD_FINISH_TITLE' => 'Você está pronto para usar o Sugar!',
    'LBL_WIZARD_FINISH' => 'Clique em Continue para configurar as definições de Usuário.<br /><br />Para configurar definições adicionais do sistema, clique <a href="index.php?module=Administration&amp;action=index" target="_blank">aqui</a>.',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Marca',
    'LBL_WIZARD_SYSTEM_DESC' => 'Insira o nome de sua organização e logo para a marca do seu Sugar.',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique o fuso horário e a forma como deseja que datas, moedas e nomes apareçam no Sugar. Estas serão as definições padrão. Cada Usuário poderá definir suas próprias preferências.',
    'LBL_WIZARD_SMTP_DESC' => 'Forneça dados da sua conta de e-mail e Senha para o servidor de e-mail de saída padrão. Os Usuários vão receber e-mails do Sugar vindos desta conta de e-mail.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Carregando...' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
	'LBL_WELCOME' => 'Bem-vindo' /*for 508 compliance fix*/,
	'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* O módulo de Relatórios apenas está disponível para o cliente Sugar Mobile iPhone.',
    'LBL_MOBILE_MOD_REPORTS_RESTRICTION2' => 'O módulo de Relatórios não está disponível para o browser na versão mobile.',

// Password settings
    'ERR_EMPTY_SAML_LOGIN' => 'A URL de Login do SAML não pode ficar vazia',
    'ERR_EMPTY_SAML_CERT' => 'O certificado SAML não pode ficar vazio',
    'ERR_SAML_LOGIN_URL' => 'A URL de Login do SAML não é válida',
    'ERR_SAML_SLO_URL' => 'A URL de SLO do SAML não é válida',
);


