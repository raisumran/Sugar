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

$mod_strings = array(
    'LBL_LOADING' => 'Carregando' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Esconder opções' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'Fornecer um <b>Nome</b> para o pacote.  O nome que for inserido terá que ser alfanumérico e não pode conter espaços. (Exemplo: Recursos_Humanos)<br/><br/> Poderá indicar a informação do <b>Autor</b> e da <b>Descrição</b> do pacote. <br/><br/>Clicar <b>Guardar</b> para criar o pacote.',
            'modify'=>'As propriedades e ações possíveis para o <b>Pacote</b> aparecem aqui.<br/><br/>Poderá modificar o <b>Nome</b>, o <b> Autor</b> e a <b>Descrição</b> do pacote, assim como ver e personalizar todos os módulos contidos dentro do pacote.<br/><br/>Clicar <b>Novo Módulo</b> para criar o módulo para o pacote.<br/><br/>Se o pacote conter pelo menos um módulo, poderá <b>Publicar</b> e <b>Implementar</b> o pacote, assim como <b>Exportar</b> as personalizações feitas ao pacote.',
            'name'=>'Este é o <b>Nome</b> do pacote atual. <br/><br/>O nome a inserir terá que ser alfanumérico, começar com uma letra e não pode conter espaços. (Exemplo: Recursos_Humanos)',
            'author'=>'Este é o <b>Autor</b> que é mostrado durante a instalação, como o nome da conta que criou o pacote.<br/><br/>O Autor poderá ser um individuo ou uma companhia.',
            'description'=>'Esta é a <b>Descrição</b> do pacote que é mostrada durante a instalação.',
            'publishbtn'=>'Clicar <b>Publicar</b> para gravar todos os dados inseridos e criar um Arquivo .zip que é a versão de instalação do pacote.<br/><br/>Usar o <b>Carregador de Módulo</b> para carregar o Arquivo .zip e instalar o pacote.',
            'deploybtn'=>'Carregar para <b>Implementar</b> para gravar todos os dados inseridos e para instalar o pacote, incluindo todos os módulos, na instância atual.',
            'duplicatebtn'=>'Clicar <b>Duplicar</b> para copiar os conteúdos do pacote para outro pacote e para mostrar o novo pacote. <br/><br/>Para o novo pacote, um novo nome será gerado automaticamente, com a adição de um número no fim do nome do pacote usado para criar o novo. Poderá renomear o novo pacote inserindo o novo <b>Nome</b> e clicando <b>Guardar</b>.',
            'exportbtn'=>'Clicar <b>Exportar</b> para criar um Arquivo .zip contendo as personalizações feitas ao pacote.<br/><br/> O Arquivo gerado não será uma versão de instalação do pacote.<br><br>Use o <b>Carregador de Módulo</b> para importar o Arquivo .zip para ter o pacote, incluindo as suas personalizações, a aparecer no Construtor de Módulos.',
            'deletebtn'=>'Clicar <b>Eliminar</b> para eliminar este pacote e todos os Arquivos relacionados com este pacote.',
            'savebtn'=>'Clicar <b>Guardar</b> para guardar todos os dados inseridos relacionados com o pacote.',
            'existing_module'=>'Clicar no ícone do <b>Módulo</b> para editar as propriedades e personalizações dos campos, relações e layouts associados com o módulo.',
            'new_module'=>'Clicar <b>Novo Módulo</b> para criar um novo módulo para este pacote.',
            'key'=>'Esta <b>Chave</b> de cinco letras, alfanumérica será usada como prefixo em todas os diretórios, nomes de classes e tabelas de base de dados para todos os módulos do pacote atual.<br/><br/>A chave é usada para garantir que o nome das tabelas seja único.',
            'readme'=>'Clicar para adicionar texto <b>Leia-me</b> para este pacote.<br/><br/>O Leia-me estará disponível na altura da instalação.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Fornece um <b>Nome</b> para o módulo. O <b>Rótulo</b> que indicou irá aparecer no separador de navegação. <br/><br/>Escolha apresentar o separador de navegação para o módulo clicando na caixa de selecção <b>Separador de Navegação</b>.<br/><br/>Verificar a caixa de selecção <b>Segurança de Equipe</b> para ter um campo de selecção de Equipe dentro dos registros do módulo. <br/><br/>Depois escolher o tipo de módulo que gostaria de criar. <br/><br/>Escolher um tipo de modelo. Cada modelo contém um conjunto de campos específico, assim como layouts pré-definidos, para usar como base para o seu módulo. <br/><br/>Clicar em <b>Guardar</b> para criar o módulo.',
        'modify'=>'Poderá alterar as propriedades do módulo ou personalizar os <b>Campos</b>, <b>Relações</b> e <b>Layouts</b> relacionados com o módulo.',
        'importable'=>'Selecionar a caixa de selecção <b>Importável</b> irá permitir importar este módulo.<br/><br/> Um link para o Assistente de Importação irá aparecer no painel de Atalhos dentro do módulo.  O Assistente de Importação facilita a importação de dados de fontes externas para o módulo.',
        'team_security'=>'Selecionar a caixa de selecção <b>Segurança de Equipe</b> irá disponibilizar segurança de equipe para este módulo. <br/><br/>Se a segurança de equipe estiver ligada, o campo de selecção Equipe irá aparecer nos registros do módulo',
        'reportable'=>'Selecionar esta caixa irá permitir que este módulo terá relatórios a correr sobre ele.',
        'assignable'=>'Selecionar esta caixa irá permitir a um registro deste módulo ser atribuído a um utilizador selecionado.',
        'has_tab'=>'Selecionar <b>Separador de Navegação</b> irá fornecer um separador de navegação para o módulo.',
        'acl'=>'Selecionar esta caixa irá permitir Controlo de Acessos neste módulo, incluindo Segurança ao Nível de Campos.',
        'studio'=>'Selecionar esta caixa irá permitir aos administradores personalizar este módulo dentro do Studio.',
        'audit'=>'Selecionar esta caixa irá permitir Auditorias para este módulo. Alterações a certos campos serão registados para que os administradores possam rever a história de alterações.',
        'viewfieldsbtn'=>'Clique em <b>Ver Campos</b> para ver os campos associados com o módulo e criar ou editar campos personalizados.',
        'viewrelsbtn'=>'Clique em <b>Ver Relações</b> para ver as relações associadas com este módulo e para criar novas relações.',
        'viewlayoutsbtn'=>'Clique em <b>Ver Layouts</b> para ver os layouts para o módulo e para personalizar a disposição dos campos dentro dos layouts.',
        'viewmobilelayoutsbtn' => 'Clique em Visualizar Layouts Móveis para visualizar os layouts móveis para o módulo e personalizar a organização dos campos nos layouts.',
        'duplicatebtn'=>'Clique em <b>Duplicar</b> para copiar as propriedades do módulo para um novo módulo e mostrar o novo módulo. <br/><br/>Para este novo módulo, um novo nome será gerado automaticamente com a adição de um número no fim do nome do módulo usado para criar o novo.',
        'deletebtn'=>'Clique em <b>Eliminar</b> para eliminar este módulo.',
        'name'=>'Este é o <b>Nome</b> do módulo atual.<br/><br/>O nome terá que ser alfanumérico e deverá começar com uma letra e não conter espaços. (Exemplo: Recursos_Humanos)',
        'label'=>'Este é o <b>Rótulo</b> que irá aparecer no separador de navegação do módulo.',
        'savebtn'=>'Clique em <b>Guardar</b> para guardar todos os dados inseridos relacionados com o módulo.',
        'type_basic'=>'O tipo de modelo <b>Básico</b> fornece campos básicos, como o Nome, Atribuído a, Equipe, Data de Criação e Descrição.',
        'type_company'=>'O tipo de modelo <b>Companhia</b> fornece campos específicos de organizações, como Nome da Companhia, Indústria e Morada de Faturação.<br/><br/>Usar este modelo para criar módulos que são similares ao módulo padrão Entidades.',
        'type_issue'=>'O tipo de modelo <b>Questão</b> fornece campos específicos de Ocorrências e Bugs, como por exemplo Número, Estado, Prioridade e Descrição.<br/><br/>Usar este modelo para criar módulos que são similares aos módulos padrão Ocorrências e Bug Tracker.',
        'type_person'=>'O tipo de modelo <b>Pessoa</b> fornece campos específicos de indivíduos, como a Saudação, Título, Nome, Morada e Número de Telefone.<br/><br/>Usar este modelo para criar módulos que são similares aos módulos padrão Contatos e Leads.',
        'type_sale'=>'O tipo de modelo  <b>Venda</b> fornece campos específicos de oportunidade, como a Fonte da Lead, Fase, Quantidade e Probabilidade.<br/><br/>Usar este modelo para criar módulos que são similares ao módulo padrão Oportunidades.',
        'type_file'=>'O tipo de modelo  <b>Arquivo</b> fornece campos específicos de Documento, como o Nome do Arquivo, tipo de Documento e Data de Publicação.<br><br>Usar este modelo para criar módulos que são similares ao módulo padrão Documentos.',

    ),
    'dropdowns'=>array(
        'default' => 'Todas as <b>Caixas de Selecção</b> para a aplicação estão listadas aqui.<br/><br/>As caixas de selecção podem ser usadas em campos de caixa de selecção de qualquer módulo.<br/><br/>Para efectuar alterações a uma caixa de selecção já existente, clicar no nome da caixa de selecção.<br/><br/>Clicar <b>Adicionar Caixa de Selecção</b> para criar uma nova caixa de selecção.',
        'editdropdown'=>'Listas das Caixas de Selecção podem ser usadas em campos de caixas de selecção padrão ou personalizadas em qualquer módulo.<br/><br/>Fornecer um <b>Nome</b> para a lista da caixa de selecção.<br/><br/>Se algum pacote de idioma estiver instalado na aplicação, poderá Selecionar o <b>Idioma</b> para usar os itens da lista.<br/><br/>No campo <b>Nome do Item</b>, fornecer um nome para a opção na lista da caixa de selecção.  Este nome não irá aparecer na lista da caixa de selecção que é visível aos utilizadores.<br/><br/>Depois de fornecer o nome do item e o rótulo, clicar <b>Adicionar</b> para adicionar o item à lista da caixa de selecção.<br/><br/>Para reordenar os itens na lista, arrastar e largar os itens na posição desejada.<br/><br/>Para editar um rótulo de um item, clicar no <b>ícone de Edição</b>, e inserir um novo rótulo. Para apagar um item da lista da caixa de selecção, clicar no  <b>ícone de Eliminação</b>.<br/><br/>Para voltar atrás na alteração feita a um rótulo, clicar <b>Voltar atrás</b>. Para voltar a fazer a alteração que foi desfeita, clicar <b>Voltar a fazer</b>.<br/><br/>Clicar <b>Guardar</b> para guardar a lista da caixa de selecção.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Clicar <b>Guardar e Implementar</b> para guardar as alterações feitas e coloca-las ativas dentro do módulo.',
        'historyBtn'=> 'Clicar <b>Ver Histórico</b> para ver e restaurar um layout gravado previamente do histórico.',
        'historyDefault'=> 'Clicar <b>Restaurar Por Defeito</b> para restaurar o layout original.',
        'Hidden' 	=> 'Campos <b>Escondidos</b> que não aparecem no sub-painel.',
        'Default'	=> 'Campos <b>Por Defeito</b> aparecem no sub-painel.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Clicar <b>Guardar e Implementar</b> para guardar as alterações feitas e coloca-las ativas dentro do módulo.',
        'historyBtn'=> 'Clicar <b>Ver Histórico</b> para ver e restaurar um layout gravado previamente do histórico.',
        'historyDefault'=> 'Clicar <b>Restaurar Por Defeito</b> para restaurar o layout original.',
        'Hidden' 	=> 'Campos <b>Escondidos</b> não disponíveis de momento aos utilizadores para visualização em Listagens.',
        'Available' => 'Campos <b>Disponíveis</b> não são mostrados por defeito, mas poderão ser adicionados às Listagens pelos utilizadores.',
        'Default'	=> 'Campos <b>Padrões</b> aparecem nas Listagens que não personalizáveis pelos utilizadores.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Clicar <b>Guardar e Implementar</b> para guardar as alterações feitas e coloca-las ativas dentro do módulo.',
        'historyBtn'=> 'Clicar <b>Ver Histórico</b> para ver e restaurar um layout gravado previamente do histórico.',
        'historyDefault'=> 'Clicar <b>Restaurar Por Defeito</b> para restaurar o layout original.',
        'Hidden' 	=> 'Campos <b>Escondidos</b> não disponíveis de momento aos utilizadores para visualização em Listagens.',
        'Default'	=> 'Campos <b>Padrões</b> aparecem nas Listagens que não personalizáveis pelos utilizadores.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Clicando <b>Guardar e Implementar</b> irá guardar todas as alterações e coloca-las ativas.',
        'Hidden' 	=> 'Campos <b>Escondidos</b> não aparecem na Pesquisa.',
        'historyBtn'=> 'Clicar <b>Ver Histórico</b> para ver e restaurar um layout gravado previamente do histórico.',
        'historyDefault'=> 'Clicar <b>Restaurar Por Defeito</b> para restaurar o layout original.',
        'Default'	=> 'Campos <b>Padrões</b> aparecem na Pesquisa.'
    ),
    'layoutEditor'=>array(
        'defaultdetailview'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'defaultquickcreate'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'defaultrecordview'   => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>Record View</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'saveBtn'	=> 'Clicar em <b>Guardar</b> para preservar as alterações feitas ao layout desde a ultima vez que foi feita uma gravação.<br/><br/>As alterações não serão exibidas no módulo enquanto não forem Implementadas as alterações gravadas.',
        'historyBtn'=> 'Clicar <b>Ver Histórico</b> para ver e restaurar um layout gravado previamente do histórico.',
        'historyDefault'=> 'Clicar <b>Restaurar Por Defeito</b> para restaurar o layout original.',
        'publishBtn'=> 'Clicar <b>Guardar e Implementar</b> para guardar todas as alterações feitas ao layout desde a ultima vez que foi feita uma gravação, e para tornar as alterações ativas no módulo.<br/><br/>O layout irá ser exibido imediatamente no módulo.',
        'toolbox'	=> 'As <b>Ferramentas</b> contêm a <b>Reciclagem</b>, elementos adicionais de layout e um conjunto de campos disponíveis para adicionar ao layout.<br/><br/>Os elementos de layout e os campos nas Ferramentas podem ser arrastados e largados para o layout, e os elementos de layout e os campos podem ser arrastados e largados do layout para as Ferramentas.<br/><br/>O elementos de layout são os <b>Painéis</b> e as <b>Linhas</b>. Adicionar uma nova linha ou um novo painel ao layout proporciona localizações adicionais no layout para os campos.<br/><br/>Arrastar e largar qualquer um dos campos nas Ferramentas ou layout para uma posição ocupada por um campo para trocar as localizações destes dois campos.<br/><br/>O campo <b>Filler</b> cria espaços em branco no layout onde este é colocado.',
        'panels'	=> 'A área <b>Layout</b> providência uma visão de como o layout irá ficar dentro do módulo quando as alterações feitas ao layout forem implementadas.<br/><br/>Poderá reposicionar campos, linhas e painéis, arrastando-os e largando-os na localização pretendida.<br/><br/>Remover elementos arrastando-os e largando-os na <b>Reciclagem</b> nas Ferramentas, ou então adicionando novos elementos e campos arrastando-os das <b>Ferramentas</b> e largando-os na localização pretendida do layout.',
        'delete'	=> 'Arrastar e largar qualquer elemento aqui para o remover do layout',
        'property'	=> 'Editar o rótulo exibido para este campo. <br/><b>Ordem dos Separadores</b> controla em que ordem a tecla tab muda entre os campos.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Os <b>Campos</b> que estão disponíveis para o módulo estão listados aqui por Nome do Campo.<br/><br/>Campos personalizados criados para o módulo aparecem sobre os campos que estão disponíveis para o módulo por defeito.<br/><br/>Para editar um campo, clicar no <b>Nome do Campo</b>.<br/><br/>Para criar um novo campo, clicar em <b>Adicionar Campo</b>.',
        'mbDefault'=>'Os <b>Campos</b> que estão disponíveis para o módulo estão listados aqui por Nome do Campo.<br/><br/>Para configurar as propriedades para um campo, clicar no Nome do Campo.<br/><br/>Para criar um novo campo, clicar em <b>Adicionar Campo</b>. O rótulo e as outras propriedades do novo campo podem ser editadas depois da criação carregando no Nome do Campo.<br/><br/>Depois do módulo ser implementado, os novos campos criados no Construtor de Módulos são considerados como campos standard no módulo implementado no Studio.',
        'addField'	=> 'Selecionar um <b>Tipo de Dados</b> para o novo campo. O tipo escolhido determina que tipo de caracteres podem ser inseridos no campo. Por exemplo, apenas números inteiros poderão ser inseridos em campos que são do tipo de dados Inteiros.<br/><br/> Fornecer um <b>Nome</b> para o campo. O nome terá que ser alfanumérico e não poderá conter nenhum espaço. Underscores são válidos.<br/><br/> O <b>Rótulo de Exibição</b> é o rótulo que irá aparecer para os campos nos layouts do módulo. O <b>Rótulo de Sistema</b> é usado para referir o campo no código.<br/><br/> Dependendo do tipo de dados selecionado para o campo, alguma ou todas as seguintes propriedades podem ser agrupadas para o campo:<br/><br/> <b>Texto de Ajuda</b> aparece temporariamente enquanto o utilizador passa por cima do campo e pode ser usado para perguntar ao utilizador qual o tipo de input desejado.<br/><br/> <b>Texto de Comentário</b> é apenas visível dentro do Studio e/ou no Construtor de Módulos e pode ser usado para descrever o campo para administradores.<br/><br/> <b>Valor por Defeito</b> irá aparecer no campo. Os utilizadores poderão inserir um novo valor no campo ou usar o valor por defeito.<br/><br/> Selecionar a caixa de selecção <b>Atualização Maciça</b> de forma a ser possível utilizar a funcionalidade de Atualização Maciça para o campo.<br/><br/>O valor <b>Tamanho Máximo</b> determina o número máximo de caracteres que podem ser inserido no campo.<br/><br/> Selecionar a caixa de selecção <b>Campo Obrigatório</b> de forma a tornar o campo obrigatório. Um valor terá que ser fornecido para o campo de maneira a ser possível gravar o registro que contenha o campo.<br/><br/> Selecionar a caixa de selecção <b>Reportável</b> de forma a permitir ao campo de ser usado por filtros e para mostrar dados em Relatórios.<br/><br/> Selecionar a caixa de selecção <b>Auditoria</b> de forma a ser possível de controlar alterações ao campo no registro de Alterações.<br/><br/>Selecionar a opção no campo <b>Importável</b> para permitir, negar ou requer que o campo seja importado para o Assistente de Importação<br/><br/>Selecionar uma opção no campo <b>Juntar Duplicados</b> para permitir ou negar as funcionalidades de Juntar Duplicados e Encontrar Duplicados.<br/><br/>Propriedades adicionais podem ser definidas para determinados tipos de dados.',
        'editField' => 'As propriedades deste campo podem ser personalizadas.<br/><br/>Clicar <b>Clonar</b> para criar um novo campo com as mesmas propriedades.',
        'mbeditField' => 'O <b>Rótulo de Exibição</b> de um campo modelo pode ser personalizado. As outras propriedades do campo não poderão ser personalizadas.<br/><br/>Clicar <b>Clonar</b> para criar um novo campo com as mesmas propriedades.<br/><br/>Para remover o campo modelo para que não seja mostrado no módulo, remover o campo dos <b>Layouts</b> apropriados.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Exportar personalizações feitas no Studio criando pacotes que possam ser carregados em outra instância do Sugar através do <b>Carregador de Módulos</b>.<br/><br/>Primeiro, fornecer um <b>Nome do Pacote</b>.  Poderá também fornecer a informação do <b>Autor</b> e da <b>Descrição</b> para o pacote.<br/><br/>Selecionar o(s) módulo(s) que contenham as personalizações que queira exportar. Apenas módulos que contenham personalizações irão aparecer para Selecionar.<br/><br/>Clicar em <b>Exportar</b> para criar um Arquivo .zip para o pacote contendo as personalizações.',
        'exportCustomBtn'=>'Clicar <b>Exportar</b> para criar um Arquivo .zip para o pacote contendo o que for pretendido para exportação.',
        'name'=>'Este é o <b>Nome</b> do pacote. Este nome será exibido durante a instalação.',
        'author'=>'Este é o <b>Autor</b> que é exibido durante a instalação como o nome da entidade que criou o pacote. O Autor poderá ser um indivíduo ou uma companhia.',
        'description'=>'Esta é a <b>Descrição</b> do pacote que é mostrada durante a instalação.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Bem-vindo à área de <b>Ferramentas do Programador</b>. <br/><br/>Use as ferramentas desta área para criar e gerir módulos padrão e personalizados e campos.',
        'studioBtn'	=> 'Use o <b>Studio</b> para personalizar módulos implementados.',
        'mbBtn'		=> 'Use o <b>Construtor de Módulos</b> para criar novos módulos.',
        'sugarPortalBtn' => 'Use o <b>Editor do Sugar Portal</b> para gerir e personalizar o Sugar Portal.',
        'dropDownEditorBtn' => 'Use o <b>Editor de Caixa de Selecção</b> para adicionar e editar caixas de selecção globais para campos de caixa de selecção.',
        'appBtn' 	=> 'Modo de Aplicação é onde se pode personalizar várias propriedades do programa, como por exemplo quantos relatórios TPS são exibidos na página principal',
        'backBtn'	=> 'Voltar ao passo anterior.',
        'studioHelp'=> 'Use o <b>Studio</b> para determinar qual e como a informação é mostrada nos módulos.',
        'studioBCHelp' => 'indicates the module is a backward compatible module',
        'moduleBtn'	=> 'Clicar para editar este módulo.',
        'moduleHelp'=> 'Os componentes do módulo que podem ser personalizados aparecem aqui.<br/><br/>Clicar num ícone para Selecionar o componente a editar.',
        'fieldsBtn'	=> 'Criar e personalizar os <b>Campos</b> para guardar informação no módulo.',
        'labelsBtn' => 'Editar os <b>Rótulos</b> que são exibidos para os campos e outros títulos do módulo.'	,
        'relationshipsBtn' => 'Adicionar uma nova ou ver as <b>Relações</b> existentes no módulo.' ,
        'layoutsBtn'=> 'Personalizar o módulo <b>Layouts</b>. Os layouts são diferentes vistas do módulo contendo campos.<br/><br/>Poderá determinar quais os campos que aparecem e como são organizados em cada layout.',
        'subpanelBtn'=> 'Determine quais os campos que aparecem nos <b>Sub-Painéis</b> no módulo.',
        'portalBtn' =>'Personalizar o módulo <b>Layouts</b> que aparece no <b>Sugar Portal</b>.',
        'layoutsHelp'=> 'O módulo <b>Layouts</b> que pode ser personalizado aparece aqui.<br/><br/>Os layouts mostram campos e os dados dos campos.<br/><br/>Clicar num ícone para Selecionar o layout a editar.',
        'subpanelHelp'=> 'Os <b>Sub-Painéis</b> no módulo que podem ser personalizados aparecem aqui.<br/><br/>Clicar no ícone para Selecionar o módulo a editar.',
        'newPackage'=>'Clicar em <b>Novo Pacote</b> para criar um novo pacote.',
        'exportBtn' => 'Clicar <b>Exportar Personalizações</b> para criar e fazer download do pacote contendo as personalizações feitas no Studio para módulos específicos.',
        'mbHelp'    => 'Use o <b>Construtor de Módulos</b> para criar pacotes contendo módulos personalizados baseados em módulos padrão ou objectos personalizados.',
        'viewBtnEditView' => 'Personalizar o layout da <b>Edição</b> do módulo.<br/><br/>A Edição é um formulário que contem os campos para guardar os dados inseridos pelo utilizador.',
        'viewBtnDetailView' => 'Personalizar o layout da <b>Detalhe</b> do módulo.<br/><br/>O Detalhe exibe os dados inseridos pelo utilizador.',
        'viewBtnDashlet' => 'Personalizar o <b>Sugar Dashlet</b> do módulo, incluindo a Listagem do Sugar Dashlet e a Pesquisa.<br/><br/>O Sugar Dashlet estará disponível para adicionar a páginas no módulo Principal.',
        'viewBtnListView' => 'Personalizar o layout da <b>Listagem</b> do layout.<br/><br/>Os resultados da Pesquisa aparecem na Listagem.',
        'searchBtn' => 'Personalizar o layout da <b>Pesquisa</b>.<br/><br/>Determinar quais os campos que podem ser usados para filtrar registros que aparecem na Listagem.',
        'viewBtnQuickCreate' =>  'Personalizar o layout do <b>Criar Rápido</b> do módulo.<br/><br/>O formulário do Criar Rápido aparece em sub-painéis e no módulo de Emails.',

        'searchHelp'=> 'Os formulários de <b>Pesquisa</b> que podem ser personalizados aparecem aqui.<br/><br/>Os formulários de Pesquisa contêm campos para filtrar registros.<br/><br/>Clicar num ícone para escolher o layout de pesquisa a editar.',
        'dashletHelp' =>'Os layouts de <b>Sugar Dashlet</b> que podem ser personalizados aparecem aqui.<br/><br/>O Sugar Dashlet irá estar disponível para adicionar a páginas no módulo Principal.',
        'DashletListViewBtn' =>'A <b>Listagem do Sugar Dashlet</b> exibe registros baseados nos filtros de pesquisa do Sugar Dashlet.',
        'DashletSearchViewBtn' =>'A <b>Pesquisa do Sugar Dashlet</b> filtra registros para a listagem do Sugar Dashlet.',
        'popupHelp' =>'Os layouts de <b>Popup</b> que podem ser personalizados aparecem aqui.<br/>',
        'PopupListViewBtn' => 'A <b>Listagem do Popup</b> mostra registros baseados na pesquisa do Popup.',
        'PopupSearchViewBtn' => 'A <b>Pesquisa do Popup</b> mostra registros para a listagem do Popup.',
        'BasicSearchBtn' => 'Personalizar o formulário da <b>Pesquisa Básica</b> que aparece no separador da Pesquisa Básica na área de Pesquisa para o módulo.',
        'AdvancedSearchBtn' => 'Personalizar o formulário da <b>Pesquisa Avançada</b> que aparece no separador da Pesquisa Avançada na área de Pesquisa para o módulo.',
        'portalHelp' => 'Gerir e personalizar o <b>Sugar Portal</b>.',
        'SPUploadCSS' => 'Carregar uma <b>Folha de Estilos</b> para o Sugar Portal.',
        'SPSync' => '<b>Sincronizar</b> personalizações com a instância do Sugar Portal.',
        'Layouts' => 'Personalizar os <b>Layouts</b> dos módulos do Sugar Portal.',
        'portalLayoutHelp' => 'Os módulos dentro do Sugar Portal aparecem nesta área.<br/><br/>Selecionar o módulo a editar os  <b>Layouts</b>.',
        'relationshipsHelp' => 'Todas as <b>Relações</b> que existem entre os módulos e outros módulos implementados aparecem aqui.<br/><br/>O <b>Nome</b> da relação é um nome gerado pelo sistema para esta relação.<br/><br/>O <b>Módulo Primário</b> é o módulo que detém as relações. Por exemplo, todas as propriedades das relações cujo módulo Entidades é o módulo primário estão guardadas nas tabelas da base de dados das Entidades.<br/><br/>O <b>Tipo</b> é o tipo de relação que existe entre o módulo Primário e o  <b>Módulo Relacionado</b>.<br/><br/>Clicar num título da coluna irá ordenar pela coluna.<br/><br/>clicar na linha da tabela de relações para ver as propriedades associadas com a relação.<br/><br/>Clicar <b>Adicionar Relação</b> para criar uma nova relação.<br/><br/>Relações podem ser criadas entre quaisquer dois módulos implementados.',
        'relationshipHelp'=>'<b>Relações</b> podem ser criadas entre o módulo e outro módulo implementado.<br/><br/>Relações são expressadas visualmente através de sub-painéis e campos relacionados nos registros do módulo.<br/><br/>Selecione um dos seguintes <b>Tipos</b> de relações para o módulo:<br/><br/> <b>Um-para-Um</b> - Ambos os registros dos módulos irão ter campos relacionados.<br/><br/> <b>Um-para-Muitos</b> - Os registros do Módulo Primário irão ter um sub-painel e os registros do Módulo Relacionado irão ter um campo relacionado.<br/><br/> <b>Muitos-para-Muitos</b> - Ambos os registros dos módulos irão mostrar sub-painéis.<br/><br/> Selecionar o <b>Módulo Relacionado</b> para a relação.<br/><br/>Se o tipo de relação involver sub-painéis, escolher uma visualização de sub-painel para os módulos apropriados.<br/><br/> Clicar <b>Guardar</b> para criar a relação.',
        'convertLeadHelp' => "Aqui pode-se adicionar módulos para ecrã de layouts de conversão e modificar os layouts existentes.<br/><br />		Poderá reordenar os módulos arrastando as suas linhas na tabela.<br/><br/><br /><br />		<b>Módulo:</b>O nome do módulo.<br/><br/><br />		<b>Obrigatório:</b>Módulos obrigatórios terão que ser criados ou selecionados antes que a lead possa ser convertida.<br/><br/><br />		<b>Data da Cópia:</b> Se selecionado, os campos da lead serão copiados para campos com o mesmo nome para o registro acabado de criar.<br/><br/><br />		<b>Permitir Selecção:</b> Módulos com um campo relacionado em Contatos podem ser escolhidos  em vez de criados durante o processo de conversão para lead.<br/><br/><br />		<b>Editar:</b> Modifica o layout de conversão para este módulo.<br/><br/><br />		<b>Eliminar:</b> Remove este módulo do layout de conversão.<br/><br/>",
        'editDropDownBtn' => 'Editar um Menu de Selecção global',
        'addDropDownBtn' => 'Adicionar um novo Menu de Selecção global',
    ),
    'fieldsHelp'=>array(
        'default'=>'Os <b>Campos</b> do módulo são listados aqui por Nome de Campo.<br/><br/>O modelo do módulo inclui um conjunto pré-determinado de campos.<br/><br/>Para criar um novo campo, clicar <b>Adicionar Campo</b>.<br/><br/>Para editar um campo, clicar no <b>Nome do Campo</b>.<br/><br/>Depois do módulo ser implementado, os novos campos criados no Construtor de Módulos, juntamente com os campos do modelo, são considerados como campos padrão no Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'As <b>Relações</b> que foram criadas entre o módulo e outros módulos aparecem aqui.<br/><br/>O <b>Nome</b> da relação é o nome gerado pelo sistema para a relação.<br/><br/>O <b>Módulo Primário</b> é o módulo que detém as relações. As propriedades da relação são guardadas nas tabelas da base de dados pertencente ao módulo primário.<br/><br/>O <b>Tipo</b> é o tipo de relação que existe entre o módulo Primário e o <b>Módulo Relacionado</b>.<br/><br/>Clicar no título da coluna para ordenar pela coluna.<br/><br/>Clicar numa linha da tabela da relação para ver e editar as propriedades associadas à relação.<br><br>Clicar <b>Adicionar Relação</b> para criar uma nova relação.',
        'addrelbtn'=>'ajuda para adicionar relações.',
        'addRelationship'=>'<b>Relações</b> podem ser criadas entre o módulo e outro módulo personalizado ou um módulo implementado.<br/><br/> Relações são expressadas visualmente através de sub-painéis e relaciona campos nos registros do módulo.<br/><br/>Selecionar um dos seguintes <b>Tipos</b> de relações para o módulo:<br/><br/> <b>Um-para-Um</b> - Ambos os registros dos módulos irão ter campos relacionados.<br/><br/> <b>Um-para-Muitos</b> - Os registros do Módulo Primário irão ter um sub-painel e os registros do Módulo Relacionado irão ter um campo relacionado.<br/><br/> <b>Muitos-para-Muitos</b> - Ambos os registros dos módulos irão mostrar sub-painéis.<br/><br/> Selecionar o <b>Módulo Relacionado</b> para a relação.<br/><br/>Se o tipo de relação involver sub-painéis, escolher uma visualização de sub-painel para os módulos apropriados.<br/><br/> Clicar <b>Guardar</b> para criar a relação.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Os <b>Rótulos</b> para os campos e outros títulos no módulo podem ser alterados.<br/><br/>Editar o rótulo clicando dentro do campo, inserir o novo rótulo e clicar <b>Guardar</b>.<br/><br/>Se algum pacote de idioma estiver instalado na aplicação, poderá Selecionar o <b>Idioma</b> a usar para os rótulos.',
        'saveBtn'=>'Clickar <b>Guardar</b> para guardar todas as alterações.',
        'publishBtn'=>'Clickar <b>Guardar e Implementar</b> para guardar todas as alterações e torna-las ativas.',
    ),
    'portalSync'=>array(
        'default' => 'Inserir o <b>URL do Sugar Portal</b> da instância do portal a atualizar, e clicar <b>Ir</b>.<br/><br/>Depois inserir um nome de utilizador Sugar válido e palavra-chave e clicar <b>Começar Sincronização</b>.<br/><br/>As personalizações feitas aos <b>Layouts</b> do Sugar Portal, juntamente com a <b>Folha de Estilos</b> se alguma foi carregada, serão transferidas para a instância especificada.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Pode personalizar o aspecto do Sugar Portal usando uma folha de estilos.<br/><br/>Selecionar uma <b>Folha de Estilos</b> para carregar.<br/><br/>A folha de estilos será implementada no Sugar Portal da próxima vez que uma sincronização for efectuada.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Para começar um projecto, clicar em <b>Novo Pacote</b> para criar um novo pacote para albergar o(s) seu(s) módulo(s) personalizado(s). <br/><br/>Cada pacote pode conter um ou mais módulos.<br/><br/>Por exemplo, poderá querer criar um pacote contendo um módulo personalizado que está relacionado com o módulo padrão Entidades. Ou poderá querer criar um pacote contendo vários módulos novos que trabalhem junto como um projecto e que estão relacionados entre si e com outros módulos já existentes na aplicação.',
            'somepackages'=>'Um <b>pacote</b> funciona com um recipiente para módulos personalizados que fazem parte de um projecto. O pacote pode conter um ou mais <b>módulos</b> personalizados que podem estar relacionados entre si ou com outros módulos da aplicação.<br/><br/>Depois de criar um pacote para o projecto, pode criar módulos para o pacote logo de seguida, ou poderá voltar ao Construtor de Módulos mais tarde para completar o projecto.<br/><br/>Quando o projecto é completado, pode <b>Implementar</b> o pacote para instalar os módulos personalizados na aplicação.',
            'afterSave'=>'O novo pacote deverá conter pelo menos um módulo. Poderá criar um ou mais módulos personalizados para o pacote.<br/><br/>Clicar <b>Novo Módulo</b> para criar um módulo personalizado para este pacote.<br/><br/>Depois de criar pelo menos um módulo, poderá publicar ou implementar o pacote para o tornar disponível para a sua instância e/ou para as instâncias de outros utilizadores.<br/><br/> Para implementar o pacote em apenas um passo dentro da sua instância do Sugar, clicar <b>Implementar</b>.<br/><br/>Clicar <b>Publicar</b> para guardar o pacote como um Arquivo .zip. Depois do Arquivo .zip ser gravado no seu sistema, use o <b>Carregador do Módulo</b> para carregar e instalar o pacote dentro da sua instância do Sugar.<br/><br/>Poderá distribuir o Arquivo por outros utilizadores para carregarem e instalarem nas suas próprias instâncias de Sugar.',
            'create'=>'Um <b>pacote</b> funciona com um recipiente para módulos personalizados que fazem parte de um projecto.  O pacote pode conter um ou mais <b>módulos</b> personalizados que podem estar relacionados entre si ou com outros módulos da aplicação.<br/><br/>Depois de criar um pacote para o projecto, pode criar módulos para o pacote logo de seguida, ou poderá voltar ao Construtor de Módulos mais tarde para completar o projecto.',
            ),
    'main'=>array(
        'welcome'=>'Use as <b>Ferramentas de Programador</b> para criar e gerir módulos padrão e personalizados e campos. <br/><br/>Para gerir módulos na aplicação, clicar <b>Studio</b>. <br/><br/>Para criar módulos personalizados, clicar <b>Construtor de Módulos</b>.',
        'studioWelcome'=>'Todos os módulos instalados, incluindo os padrão e objectos carregados por módulos, são personalizáveis dentro do Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Como o pacote atual contem pelo menos um módulo, pode <b>Implementar</b> os módulos do pacote dentro da sua instância do Sugar ou <b>Publicar</b> o pacote a ser instalado na instância atual do Sugar ou em outra instância usando o <b>Carregador de Módulo</b>.<br/><br/>Para instalar o pacote directamente dentro da sua instância do Sugar, clicar <b>Implementar</b>.<br/><br/>Para criar um Arquivo .zip para o pacote que possa ser carregado e instalado na instância atual de Sugar e outras instâncias usando o <b>Carregador de Módulo</b>, clicar em <b>Publicar</b>.<br/><br/> Poderá construir os módulos para este pacote em etapas, e publicar ou implementar quanto estiver pronto para tal.<br/><br/>Depois de publicar ou implementar o pacote, poderá fazer alterações às propriedades do pacote e personalizar mais os módulos. Em seguida, voltar a publicar ou a implementar o pacote para aplicar as alterações." ,
        'editView'=> 'Aqui pode editar os campos existentes. Pode remover qualquer dos campos existentes ou adicionar campos disponíveis no painel esquerdo.',
        'create'=>'Ao escolher o tipo de <b>Tipo</b> de módulo que queira criar, tenha em mente que tipos de campos que gostaria de ter dentro do módulo. <br/><br/>Cada modelo de módulo contém um conjunto de campos pertencentes ao tipo de módulos descrito pelo título.<br/><br/><b>Básico</b> - Fornece campos básicos que aparecem em módulos padrão, como o campo Nome, Atribuído a, Equipe, Data de Criação e Descrição.<br/><br/> <b>Companhia</b> - Fornece campos específicos de organizações, como Nome da Companhia e Morada de Faturamento. Use este modelo para criar módulos que são similares ao módulo padrão de Entidades.<br/><br/> <b>Pessoal</b> - Fornece campos específicos de indivíduos, como Saudação, Título, Nome, Morada e Número de Telefone. Use este modelo para criar módulos que são similares com os módulos padrão Contatos e Leads.<br/><br/><b>Questões</b> - Fornece campos relacionados com ocorrências e de bugs, como Número, Estado, Prioridade e Descrição. Use este modelo para criar módulos que são similares com os módulos padrão Ocorrências e Bug Tracker.<br/><br/>Nota: Depois de criar o módulo, poderá editar os rótulos dos campos fornecidos pelo modelo, assim como criar campos personalizados para adicionar ao layout do módulo.',
        'afterSave'=>'Personalize o módulo para servir as necessidades editando e criando campos, estabelecendo relações com outros módulos e dispondo os campos dentro dos layouts.<br/><br/>Para ver os campos do modelo e gerir os campos personalizados dentro do módulo, clicar <b>Ver Campos</b>.<br/><br/>Para criar e gerir relações entre o módulo e outros módulos, quer módulos já na aplicação ou outros módulos personalizados dentro do mesmo pacote, clicar <b>Ver Relações</b>.<br/><br/>Para editar os layouts dos módulos, clicar <b>Ver Layouts</b>. Poderá alterar os layouts dos Detalhes, Edição e Listagem do módulo tal como faria com módulos já na aplicação dentro do Studio.<br/><br/> Para criar um módulo com as mesmas propriedades que o módulo atual, clicar <b>Duplicar</b>.  Depois poderá personalizar mais o novo módulo.',
        'viewfields'=>'Os campos no módulo podem ser personalizados para servir as necessidades.<br/><br/>Não é possível apagar os campos padrão, mas é possível remove-los dos layouts adequados dentro das páginas de Layout.<br/><br/>Pode criar rapidamente novos campos que têm propriedades similares dos campos existentes clicando em <b>Clonar</b> no formulário das <b>Propriedades</b>. Inserir quaisquer novas propriedades e clicar <b>Guardar</b>.<br/><br/>É recomendado que se defina todas as propriedades para os campos padrão e os campos personalizados antes de publicar e instalar o pacote que contém o módulo personalizado.',
        'viewrelationships'=>'Pode criar relações muitos-para-muitos entre o módulo atual e outros módulos do pacote, e/ou entre o módulo atual e módulos já instalados na aplicação.<br><br> Para criar relações um-para-muitos e um-para-um, criar campos <b>Relacionado</b> and <b>Relacionado Flexível </b> para os módulos.',
        'viewlayouts'=>'Pode controlar quais os campos que estão disponíveis para capturar dados dentro da <b>Edição</b>.  Pode também controlar que dados são exibidos dentro dos <b>Detalhes</b>.  As vistas não precisam de coincidir. <br/><br/>O formulário de Criar Rápido é mostrado quando <b>Criar</b> é clicado num sub-painel de um módulo. Por defeito, o layout doformulário <b>Criar Rápido </b> é o mesmo que o layout de <b>Edição</b> por defeito. Pode personalizar o formulário Criar Rápido para que contenha menos campos e/ou campos diferentes que o layout de Edição.<br><br>Pode determinar a segurança do módulo usando a personalização do Layout, juntamente com a <b>Gestão de Funções</b>.<br/><br/>',
        'existingModule' =>'Depois de criar e personalizar este módulo, poderá criar módulos adicionais ou voltar ao pacote para <b>Publicar</b> ou <b>Implementar</b> o pacote.<br/><br/>Para criar módulos adicionais, clicar <b>Duplicar</b> para criar um módulo com as mesmas propriedades que o módulo atual, ou voltar ao pacote e clicar <b>Novo Módulo</b>.<br/><br/>Se já está pronto para <b>Publicar</b> ou <b>Implementar</b> o pacote que contém este módulo, voltar ao pacote para realizar estas funções. Pode publicar e implementar pacotes que contenham pelo menos um módulo.',
        'labels'=> 'Os rótulos dos campos padrão assim com os dos campos personalizados podem ser alterados. Alterar os rótulos dos campos não afecta os dados guardados nos campos.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Existem três colunas exibidas à esquerda. A coluna "Por Defeito" contêm os campos que são mostrados na listagem por defeito, a coluna "Disponíveis" contém campos que um utilizador poder escolher usar quando está a criar uma listagem personalizada e a coluna "Escondidos" contém campos escondidos mas que estão disponíveis ao administrador para adicionar às colunas por defeito ou disponíveis para serem utilizados pelos utilizadores.',
        'savebtn'	=> 'Clicar <b>Guardar</b> irá guardar todas as alterações e torna-las ativas.',
        'Hidden' 	=> 'Campos escondidos são campos que não estão visíveis aos utilizadores para utilização nas listagens.',
        'Available' => 'Campos disponíveis são campos que não são exibidos por defeito, mas podem ser ativados pelos utilizadores.',
        'Default'	=> 'Campos por defeito são exibidos aos utilizadores que não criaram uma lista personalizada.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Existem duas colunas exibidas à esquerda. A coluna "Por Defeito" contêm os campos que são mostrados na pesquisa e a coluna "Escondidos" contém campos escondidos mas que estão disponíveis ao administrador para adicionar à vista.',
        'savebtn'	=> 'Clicando <b>Guardar e Implementar</b> irá guardar todas as alterações e coloca-las ativas.',
        'Hidden' 	=> 'Campos escondidos são campos que não estão visíveis na pesquisa.',
        'Default'	=> 'Campos por defeito serão exibidos na pesquisa.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Existem duas colunas exibidas à esquerda. A coluna da direita, rotulada de Layout atual ou Pré-visualização de Layout é onde pode alterar o layout do módulo. A coluna da esquerda, intitulada Ferramentas, contém elementos úteis e ferramentas para utilizar aquando a edição do layout.<br/><br/>Se a área do layout tem o título de Layout atual então está a trabalhar numa cópia do layout usado atualmente pelo módulo para exibição.<br/><br/>Se é intitulada Pré-visualização de Layout então está a trabalhar numa cópia criada anteriormente quando o botão Guardar foi clicado, que poderia já ter sido mudada da versão visualizada pelos utilizadores deste módulo.',
        'saveBtn'	=> 'Clicar neste botão grava o layout para que possa preservar as suas alterações. Quando voltar a este módulo irá começar a partir deste layout alterado. No entanto o seu layout não será mostrado aos utilizadores do módulo enquanto não carregar no botão Guardar e Publicar.',
        'publishBtn'=> 'Clicar este botão para implementar o layout. Isto significa que este layout será exibido aos utilizadores deste módulo imediatamente.',
        'toolbox'	=> 'A caixa de ferramentas contém vários recursos úteis para a edição de layouts, incluindo uma área de reciclagem, um conjunto de elementos adicionais e um conjunto de campos disponíveis. Qualquer um destes podem ser arrastados e largados no layout.',
        'panels'	=> 'Esta área mostra como o layout irá ser exibido aos utilizadores deste módulo quando implementado.<br/><br/>Poderá reposicionar elementos como campos, linhas e painéis arrastando e largando-os; apagar elementos arrastando e largando-os na na área de reciclagem na caixa de ferramentas, ou adicionar novos elementos arrastando e largando-os no layout na posição desejada.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Existem duas colunas exibidas à esquerda. A coluna da direita, rotulada de Layout atual ou Pré-visualização de Layout é onde pode alterar o layout do módulo. A coluna da esquerda, intitulada Ferramentas, contém elementos úteis e ferramentas para utilizar aquando a edição do layout.<br/><br/>Se a área do layout tem o título de Layout atual então está a trabalhar numa cópia do layout usado atualmente pelo módulo para exibição.<br/><br/>Se é intitulada Pré-visualização de Layout então está a trabalhar numa cópia criada anteriormente quando o botão Guardar foi clicado, que poderia já ter sido mudada da versão visualizada pelos utilizadores deste módulo.',
        'dropdownaddbtn'=> 'Clicando neste botão adicionar um novo item no menu de selecção.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Personalizações feitas no Studio dentro desta instância podem ser empacotados e implementados em outra instância.  <br><br>Fornecer um <b>Nome de Pacote</b>. Pode fornecer a informação do <b>Autor</b> e da <b>Descrição</b> para o pacote.<br><br>Selecionar o(s) módulo(s) que contenham as personalizações a exportar. (Apenas módulos que contenham personalizações irão aparecer para selecção.)<br><br>Clicar <b>Exportar</b> para criar um Arquivo .zip para o pacote contendo as personalizações. O Arquivo .zip pode ser carregado para outra instância através do  <b>Carregador de Módulo</b>.',
        'exportCustomBtn'=>'Clicar <b>Exportar</b> para criar um Arquivo .zip para o pacote contendo as personalizações do que pretende exportar.',
        'name'=>'Este é o <b>Nome</b> do pacote a ser exibido no Carregador de Módulo depois do pacote ser carregado para instalação no Studio.',
        'author'=>'O <b>Autor</b> é o nome da entidade que criou o pacote. O Autor poderá ser um indivíduo ou uma companhia.<br><br>O Autor será exibido no Carregador de Módulo depois do pacote ser carregado para instalação no Studio.',
        'description'=>'A <b>Descrição</b> do pacote que é exibida no Carregador de Módulo depois do pacote ser carregado para instalação no Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Bem-vindo à área de <b>Ferramentas do Programador</b>. <br/><br/>Use as ferramentas desta área para criar e gerir módulos padrão e personalizados e campos.',
        'studioBtn'	=> 'Use o <b>Studio</b> para personalizar módulos instalados alterando a disposição dos campos, escolhendo quais os campos que estão disponíveis e criando novos campos de dados personalizados.',
        'mbBtn'		=> 'Use o <b>Construtor de Módulos</b> para criar novos módulos.',
        'appBtn' 	=> 'Use o modo de Aplicação para personalizar várias propriedades do programa, como por exemplo quantos relatórios TPS são exibidos na página principal',
        'backBtn'	=> 'Voltar ao passo anterior.',
        'studioHelp'=> 'Use o <b>Studio</b> para personalizar módulos instalados.',
        'moduleBtn'	=> 'Clicar para editar este módulo.',
        'moduleHelp'=> 'Selecionar o componente do módulo que pretenda editar',
        'fieldsBtn'	=> 'Edite a informação que é gravada no módulo controlando os <b>Campos</b> no módulo.<br/><br/>Pode editar e criar campos personalizados aqui.',
        'labelsBtn' => 'Edite os <b>Rótulos</b> para exibir os valores neste módulo.'	,
        'layoutsBtn'=> 'Personalize os <b>Layouts</b> da Edição, Detalhe, Listagem e pesquisa.',
        'subpanelBtn'=> 'Edite qual a informação que é exibida nos sub-painéis deste módulo.',
        'layoutsHelp'=> 'Selecionar o <b>Layout a editar</b>.<br/<br/>Para alterar o layout que contenha campo de dados para inserir dados, clique em <b>Edição</b>.<br/><br/>Para alterar o layout que exiba os dados inseridos nos campos da Edição, clique em <b>Detalhes</b>.<br/><br/>Para alterar as colunas que aparecem na lista por defeito, clique na <b>Listagem</b>.<br/><br/>Para alterar o layout do formulário de pesquisa Básica e Avançada, clique <b>Pesquisa</b>.',
        'subpanelHelp'=> 'Selecione um <b>Sub-painel</b> para editar.',
        'searchHelp' => 'Selecione um layout de <b>Pesquisa</b> para editar.',
        'labelsBtn'	=> 'Edite os <b>Rótulos</b> para exibir os valores neste módulo.',
        'newPackage'=>'Clicar em <b>Novo Pacote</b> para criar um novo pacote.',
        'mbHelp'    => '<b>Bem vindo ao Construtor de Módulos.</b><br/><br/>Use o <b>Construtor de Módulos</b> para criar pacotes que contenham módulos personalizados baseados em objectos padrão ou personalizados. <br/><br/>Para começar, clique em <b>Novo Pacote</b> para criar um novo pacote, ou Selecione um pacote a editar.<br/><br/> Um <b>pacote</b> funciona como um recipiente para módulos personalizados, que fazem parte de todo um projecto. O pacote pode conter um ou mais módulos personalizados que podem estar relacionados um com os outros ou com módulos da aplicação. <br/><br/>Exemplos: Poderá querer criar um pacote que contenha um módulo personalizado que está relacionado com o módulo padrão de Entidades. Ou poderá querer criar um pacote que contenha novos módulos que funcionem juntos como um projecto que estão relacionados entre si e com outros módulos da aplicação.',
        'exportBtn' => 'Clicar <b>Exportar Personalizações</b> para criar o pacote contendo as personalizações feitas no Studio para módulos específicos.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor da Lista Dropdown',

//ASSISTANT
'LBL_AS_SHOW' => 'Mostrar Assistente no futuro.',
'LBL_AS_IGNORE' => 'Ignorar Assistente no futuro.',
'LBL_AS_SAYS' => 'Assistente diz:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Construtor de Módulos',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Editor da Lista Dropdown',
'LBL_EDIT_DROPDOWN'=>'Editar Lista Lista Dropdown',
'LBL_DEVELOPER_TOOLS' => 'Ferramentas de Desenvolvimento',
'LBL_SUGARPORTAL' => 'Editor Sugar Portal',
'LBL_SYNCPORTAL' => 'Sincronizar com Portal',
'LBL_PACKAGE_LIST' => 'Lista de Pacotes',
'LBL_HOME' => 'Tela Principal',
'LBL_NONE'=>'-Nenhum-',
'LBL_DEPLOYE_COMPLETE'=>'Instalação Completa',
'LBL_DEPLOY_FAILED'   =>'Ocorreu um erro durante o processo de instalação, o pacote pode não ter instalado corretamente',
'LBL_ADD_FIELDS'=>'Adicionar Campos Personalizados',
'LBL_AVAILABLE_SUBPANELS'=>'Sub-painéis Disponíveis',
'LBL_ADVANCED'=>'Avançado',
'LBL_ADVANCED_SEARCH'=>'Pesquisa Avançada',
'LBL_BASIC'=>'Básica',
'LBL_BASIC_SEARCH'=>'Pesquisa Básica',
'LBL_CURRENT_LAYOUT'=>'Layout atual',
'LBL_CURRENCY' => 'Moeda:',
'LBL_CUSTOM' => 'Personalizar',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Listagem Sugar Dashlet',
'LBL_DASHLETSEARCH'=>'Pesquisa Sugar Dashlet',
'LBL_POPUP'=>'Visualização do Popup',
'LBL_POPUPLIST'=>'Listagem do Popup',
'LBL_POPUPLISTVIEW'=>'Listagem do Popup',
'LBL_POPUPSEARCH'=>'Pesquisa do Popup',
'LBL_DASHLETSEARCHVIEW'=>'Pesquisa Sugar Dashlet',
'LBL_DISPLAY_HTML'=>'Mostrar Código HTML',
'LBL_DETAILVIEW'=>'Detalhe',
'LBL_DROP_HERE' => '[Solte Aqui]',
'LBL_EDIT'=>'Editar',
'LBL_EDIT_LAYOUT'=>'Editar Layout',
'LBL_EDIT_ROWS'=>'Editar Linhas',
'LBL_EDIT_COLUMNS'=>'Editar Colunas',
'LBL_EDIT_LABELS'=>'Editar Etiquetas',
'LBL_EDIT_PORTAL'=>'Editar Portal para',
'LBL_EDIT_FIELDS'=>'Editar Campos',
'LBL_EDITVIEW'=>'Edição',
'LBL_FILTER_SEARCH' => "Pesquisar",
'LBL_FILLER'=>'(vazio)',
'LBL_FIELDS'=>'Campos',
'LBL_FAILED_TO_SAVE' => 'Falhou ao Gravar',
'LBL_FAILED_PUBLISHED' => 'Falhou ao publicar',
'LBL_HOMEPAGE_PREFIX' => 'Minha',
'LBL_LAYOUT_PREVIEW'=>'Prever Layout',
'LBL_LAYOUTS'=>'Layouts',
'LBL_LISTVIEW'=>'Listagem',
'LBL_RECORDVIEW'=>'Ver Registro',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Novo Pacote',
'LBL_NEW_PANEL'=>'Novo Painel',
'LBL_NEW_ROW'=>'Nova Linha',
'LBL_PACKAGE_DELETED'=>'Pacote Eliminado',
'LBL_PUBLISHING' => 'Publicando...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_SELECT_FILE'=> 'Selecionar um arquivo',
'LBL_SAVE_LAYOUT'=> 'Gravar o Layout',
'LBL_SELECT_A_SUBPANEL' => 'Selecionar um Sub-painel',
'LBL_SELECT_SUBPANEL' => 'Selecionar Sub-painel',
'LBL_SUBPANELS' => 'Sub-painéis',
'LBL_SUBPANEL' => 'Sub-painel',
'LBL_SUBPANEL_TITLE' => 'Cargo:',
'LBL_SEARCH_FORMS' => 'Pesquisar',
'LBL_STAGING_AREA' => 'Área de Armazenamento (arraste e solte os itens aqui)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (clique nos itens para adicionar à área de armazenamento)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (clique nos itens para adicionar à área de armazenamento)',
'LBL_TOOLBOX' => 'Caixa de Ferramentas',
'LBL_VIEW_SUGAR_FIELDS' => 'Ver Campos do Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Ver o Sugar Bin',
'LBL_QUICKCREATE' => 'Criação Rápida',
'LBL_EDIT_DROPDOWNS' => 'Editar uma Lista Dropdown Global',
'LBL_ADD_DROPDOWN' => 'Adicionar uma nova Lista Dropdown Global',
'LBL_BLANK' => '-vazio-',
'LBL_TAB_ORDER' => 'Ordem de Tabulador',
'LBL_TAB_PANELS' => 'Exibir painéis como tabuladores',
'LBL_TAB_PANELS_HELP' => 'Ver cada painel como o seu próprio tabulador, em vez de ter todos no mesmo ecrã',
'LBL_TABDEF_TYPE' => 'Tipo de Tela:',
'LBL_TABDEF_TYPE_HELP' => 'Selecione como esta seção será visualizada. Esta opção tera efeito se você tiver habilitado "abas"nesta visualização.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Aba',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Painel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Selecione Painel para ter essa visualização do painel dentro da visão do layout. Selecione a aba para ter este painel exibido dentro de uma aba separada dentro do layout. Quando a Aba é especificado para um painel, painéis subsequentes estabelecidos para exibir como o painel será exibido na guia. Uma nova aba será iniciada para o painel seguinte para o qual a Aba está selecionada. Se a Aba é seleccionada para um painel abaixo do primeiro painel, o primeiro painel será necessariamente uma aba.',
'LBL_TABDEF_COLLAPSE' => 'Recolher',
'LBL_TABDEF_COLLAPSE_HELP' => 'Selecione para padronizar o Painel Recolhido',
'LBL_DROPDOWN_TITLE_NAME' => 'Nome',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
'LBL_DROPDOWN_ITEMS' => 'Listar Itens',
'LBL_DROPDOWN_ITEM_NAME' => 'Nome do Item',
'LBL_DROPDOWN_ITEM_LABEL' => 'Exibir Rótulo',
'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizar para o Detalhe',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Escolher esta opção para sincronizar este layout de Edição para o layout de Detalhe correspondente. Os campos e os seus posicionamentos na Edição serão sincronizados e gravados para o Detalhe automaticamente quando carregar em Gravar ou Gravar & Implementar na Edição. Alterações no layout de Detalhe não serão possível de ser feitas.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Este Detalhe está sincronizado com a Edição correspondente.Os campos e os seus posicionamentos neste Detalhe refletem os campo e os seus posicionamentos na Edição. Alterações ao Detalhe não poderão ser gravados ou implementados dentro desta página. Faça alterações ou dessincronize os layouts na Edição.',
'LBL_COPY_FROM_EDITVIEW' => 'Copiar da Edição',
'LBL_DROPDOWN_BLANK_WARNING' => 'Os valores requeridos são ambos para o Nome do Item e para Legenda do Display. Para adicionar um item em branco, clicar em Adicionar sem introduzir qualquer valor para o Nome do Item e para a Legenda do Display.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Chave já existente na lista',
'LBL_NO_SAVE_ACTION' => 'Não foi possível salvar esta ação',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2: establishLocation: documento mal formado',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indica um campo de combinação. Um campo de combinação é uma coleção de campos individuais. Por exemplo, "Endereço" é um campo de combinação que contém "Rua" "Cidade", "CEP", "Estado" e "País".<br /><br />De dois cliques um campo de combinação para ver quais os campos que ele contém.',
'LBL_COMBO_FIELD_CONTAINS' => 'Contém',

'LBL_WIRELESSLAYOUTS'=>'Layouts dispositivo Portátil',
'LBL_WIRELESSEDITVIEW'=>'Edição do dispositivo portatil',
'LBL_WIRELESSDETAILVIEW'=>'Detalhe do dispositivo portatil',
'LBL_WIRELESSLISTVIEW'=>'Listagem do dispositivo portatil',
'LBL_WIRELESSSEARCH'=>'Pesquisa',

'LBL_BTN_ADD_DEPENDENCY'=>'Adicionar Dependência',
'LBL_BTN_EDIT_FORMULA'=>'Editar Fórmula',
'LBL_DEPENDENCY' => 'Dependência',
'LBL_DEPENDANT' => 'Dependente',
'LBL_CALCULATED' => 'Calculado',
'LBL_READ_ONLY' => 'Somente leitura',
'LBL_FORMULA_BUILDER' => 'Construtor de Fórmulas',
'LBL_FORMULA_INVALID' => 'Fórmula Inválida',
'LBL_FORMULA_TYPE' => 'A fórmula deverá ser do tipo',
'LBL_NO_FIELDS' => 'Nenhum campo encontrado',
'LBL_NO_FUNCS' => 'Nenhuma função encontrada',
'LBL_SEARCH_FUNCS' => 'Funções de busca...',
'LBL_SEARCH_FIELDS' => 'Campos de pesquisa...',
'LBL_FORMULA' => 'Fórmula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependente',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Arraste os itens da lista de opções disponíveis à esquerda para uma das listas da direita para fazer essa opção disponível quando a opção "parent" estiver selecionada',
'LBL_AVAILABLE_OPTIONS' => 'Opcões Disponíveis',
'LBL_PARENT_DROPDOWN' => 'Dropdown Relacionado',
'LBL_VISIBILITY_EDITOR' => 'Editor',
'LBL_ROLLUP' => 'Rollup (Cumulativo)',
'LBL_RELATED_FIELD' => 'Campo relacionado',
'LBL_CONFIG_PORTAL_URL'=>'URL para a imagem do logotipo personalizado. As dimensões logotipo recomendados são 163 × 18 pixels.',
'LBL_PORTAL_ROLE_DESC' => 'Não exclua esse perfil. Perfil Portal Self-Service é um perfil gerado pelo sistema criado durante o processo de ativação de Sugar Portal. Use os controles de acesso dentro desta função para ativar e / ou desativar Bugs, estojos ou módulos base de conhecimento em Portal do Sugar. Não modificar quaisquer outros controles de acesso para este perfil para evitar o comportamento do sistema desconhecido e imprevisível. No caso de exclusão acidental deste perfil, recriá-lo ao desabilitar e habilitar Portal do Sugar.',

//RELATIONSHIPS
'LBL_MODULE' => 'Módulo',
'LBL_LHS_MODULE'=>'Módulo Principal',
'LBL_CUSTOM_RELATIONSHIPS' => '* relacionamento criado no Studio ou no Construtor de Módulos',
'LBL_RELATIONSHIPS'=>'Relacionamentos',
'LBL_RELATIONSHIP_EDIT' => 'Editar Relacionamento',
'LBL_REL_NAME' => 'Nome',
'LBL_REL_LABEL' => 'Etiqueta',
'LBL_REL_TYPE' => 'Tipo',
'LBL_RHS_MODULE'=>'Módulo Relacionado',
'LBL_NO_RELS' => 'Sem Relacionamentos',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Condição Opcional' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Coluna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valor',
'LBL_SUBPANEL_FROM'=>'Sub-painel de',
'LBL_RELATIONSHIP_ONLY'=>'Nenhum elemento visível será criado para este relacionamento, dado que há um relacionamento visível pré-existente entre estes dois módulos.',
'LBL_ONETOONE' => 'Um para Um',
'LBL_ONETOMANY' => 'Um para Muitos',
'LBL_MANYTOONE' => 'Muitos para Um',
'LBL_MANYTOMANY' => 'Muitos para Muitos',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Selecione uma função ou componente.',
'LBL_QUESTION_MODULE1' => 'Selecione um módulo.',
'LBL_QUESTION_EDIT' => 'Selecione um módulo para editar.',
'LBL_QUESTION_LAYOUT' => 'Selecione um layout para editar.',
'LBL_QUESTION_SUBPANEL' => 'Selecione um sub-painel para editar.',
'LBL_QUESTION_SEARCH' => 'Selecione um layout de pesquisa para editar.',
'LBL_QUESTION_MODULE' => 'Selecione um componente de módulo para editar.',
'LBL_QUESTION_PACKAGE' => 'Selecione um pacote para editar, ou crie um novo pacote.',
'LBL_QUESTION_EDITOR' => 'Selecione uma ferramenta.',
'LBL_QUESTION_DROPDOWN' => 'Selecione uma lista dropdown para editar, ou crie uma nova lista dropdown.',
'LBL_QUESTION_DASHLET' => 'Selecione um layout de dashlet para editar.',
'LBL_QUESTION_POPUP' => 'Selecione o layout de um popup para editar.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relacionar Com',
'LBL_NAME'=>'Nome',
'LBL_LABELS'=>'Rótulos',
'LBL_MASS_UPDATE'=>'Atualização em Massa',
'LBL_AUDITED'=>'Auditado',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor Padrão',
'LBL_REQUIRED'=>'Obrigatório',
'LBL_DATA_TYPE'=>'Tipo',
'LBL_HCUSTOM'=>'PERSONALIZADO',
'LBL_HDEFAULT'=>'PADRÃO',
'LBL_LANGUAGE'=>'Idioma do Grupo de Tabuladores',
'LBL_CUSTOM_FIELDS' => 'Campos Customizados',

//SECTION
'LBL_SECTION_EDLABELS' => 'Editar Etiquetas',
'LBL_SECTION_PACKAGES' => 'Pacotes',
'LBL_SECTION_PACKAGE' => 'Pacote',
'LBL_SECTION_MODULES' => 'Módulos',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Listas Dropdown',
'LBL_SECTION_PROPERTIES' => 'Propriedades',
'LBL_SECTION_DROPDOWNED' => 'Editar Lista Lista Dropdown',
'LBL_SECTION_HELP' => 'Ajuda',
'LBL_SECTION_ACTION' => 'Ação',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Editar Rótulo de Painel',
'LBL_SECTION_FIELDEDITOR' => 'Editar Campo',
'LBL_SECTION_DEPLOY' => 'Implementar',
'LBL_SECTION_MODULE' => 'Módulo',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Editar Visibilidade',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Padrão',
'LBL_HIDDEN'=>'Escondido',
'LBL_AVAILABLE'=>'Disponível',
'LBL_LISTVIEW_DESCRIPTION'=>'Existem três colunas disponíveis abaixo. A coluna <b>Padrão</b> contém campos que são exibidos numa visualização de lista por defeito. A coluna <b>Adicional</b> contém campos que um utilizador pode escolher usar para criar uma visualização personalizada. A coluna <b>Disponível</b> exibe campos disponíveis para si como administrador para adicionar às colunas Padrão ou Adicional para uso dos usuários.',
'LBL_LISTVIEW_EDIT'=>'Editor da Lista de Visualização',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Pré-Visualização',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_DEFAULT_LAYOUT'=>'Layout Padrão',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Adicionar [Alt+C]',
'LBL_BTN_SAVE'=>'Gravar',
'LBL_BTN_SAVE_CHANGES'=>'Gravar Alterações',
'LBL_BTN_DONT_SAVE'=>'Descartar Alterações',
'LBL_BTN_CANCEL'=>'Cancelar',
'LBL_BTN_CLOSE'=>'Fechar',
'LBL_BTN_SAVEPUBLISH'=>'Gravar e Publicar',
'LBL_BTN_NEXT'=>'Próximo',
'LBL_BTN_BACK'=>'Voltar',
'LBL_BTN_CLONE'=>'Duplicar',
'LBL_BTN_ADDCOLS'=>'Adicionar Colunas',
'LBL_BTN_ADDROWS'=>'Adicionar Linhas',
'LBL_BTN_ADDFIELD'=>'Adicionar Campo',
'LBL_BTN_ADDDROPDOWN'=>'Adicionar Lista Dropdown',
'LBL_BTN_SORT_ASCENDING'=>'Ordenação Crescente',
'LBL_BTN_SORT_DESCENDING'=>'Ordenação Decrescente',
'LBL_BTN_EDLABELS'=>'Editar Etiquetas',
'LBL_BTN_UNDO'=>'Desfazer',
'LBL_BTN_REDO'=>'Refazer',
'LBL_BTN_ADDCUSTOMFIELD'=>'Adicionar Campo Personalizado',
'LBL_BTN_EXPORT'=>'Exportar Personalizações',
'LBL_BTN_DUPLICATE'=>'Duplicar',
'LBL_BTN_PUBLISH'=>'Publicar:',
'LBL_BTN_DEPLOY'=>'Implementar',
'LBL_BTN_EXP'=>'Exportar',
'LBL_BTN_DELETE'=>'Eliminar',
'LBL_BTN_VIEW_LAYOUTS'=>'Ver Layouts',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Visualizar Layouts Móveis',
'LBL_BTN_VIEW_FIELDS'=>'Ver Campos',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Ver Relacionamentos',
'LBL_BTN_ADD_RELATIONSHIP'=>'Adicionar Relacionamento',
'LBL_BTN_RENAME_MODULE' => 'Renomear Módulo',
'LBL_BTN_INSERT'=>'Introduzir',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Erro: Campo Já Existe',
'ERROR_INVALID_KEY_VALUE'=> "Erro: Valor da Chave Inválido: [*]",
'ERROR_NO_HISTORY' => 'Nenhuns Arquivos de histórico encontrados',
'ERROR_MINIMUM_FIELDS' => 'Este layout deve conter pelo menos um campo',
'ERROR_GENERIC_TITLE' => 'Ocorreu um erro',
'ERROR_REQUIRED_FIELDS' => 'Tem certeza que deseja continuar? Os seguintes campos obrigatórios não estão no layout:',
'ERROR_ARE_YOU_SURE' => 'De certeza que deseja continuar?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'O(s) seguinte(s) campo(s) têm valores calculados que não serão re-calculados em tempo real na Edição do SugarCRM Portátil:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'O(s) seguinte(s) campo(s) têm valores calculados que não serão re-calculados em tempo real na Edição do SugarCRM Portal:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Os seguintes Módulos estão desativados',
    'LBL_PORTAL_ENABLE_MODULES' => 'Se tiver interesse de ativá-los no Portal favor ativá-los aqui  <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">here</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Configurar Portal',
    'LBL_PORTAL_THEME' => 'Tema do Portal',
    'LBL_PORTAL_ENABLE' => 'Ativar',
    'LBL_PORTAL_SITE_URL' => 'Seu site Portal está disponível em:',
    'LBL_PORTAL_APP_NAME' => 'Nome do Portal',
    'LBL_PORTAL_LOGO_URL' => 'Logo URL',
    'LBL_PORTAL_LIST_NUMBER' => 'Número de registros para aparecer na lista',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Número de campos para aparecer nos detalhes',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'número de resultados para aparecer na pesquisa Global',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Padrão atribuído para o registro de novos portais',
'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Layouts do Portal',
'LBL_SYNCP_WELCOME'=>'Por favor introduza o URL da instância do portal que deseja atualizar.',
'LBL_SP_UPLOADSTYLE'=>'Selecione uma folha de estilo para carregar do seu computador.<br>A folha de estilo será implementada no Portal Sugar da próxima vez que desempenhar uma sincronização.',
'LBL_SP_UPLOADED'=> 'Carregado',
'ERROR_SP_UPLOADED'=>'Por favor certifique-se que está carregando uma folha de estilo css.',
'LBL_SP_PREVIEW'=>'Eis uma previsão do aspecto do Sugar Portal utilizando a folha de estilo.',
'LBL_PORTALSITE'=>'URL Sugar Portal:',
'LBL_PORTAL_GO'=>'Ir',
'LBL_UP_STYLE_SHEET'=>'Carregar Folha de Estilo',
'LBL_QUESTION_SUGAR_PORTAL' => 'Selecione um layout Sugar Portal para editar.',
'LBL_QUESTION_PORTAL' => 'Selecione um layout de portal para editar.',
'LBL_SUGAR_PORTAL'=>'Editor Sugar Portal',
'LBL_USER_SELECT' => 'Selecionar Usuários',

//PORTAL PREVIEW
'LBL_CASES'=>'Ocorrências',
'LBL_NEWSLETTERS'=>'Newsletters',
'LBL_BUG_TRACKER'=>'Bug Tracker',
'LBL_MY_ACCOUNT'=>'A Minha Conta',
'LBL_LOGOUT'=>'Sair',
'LBL_CREATE_NEW'=>'Criar Novo',
'LBL_LOW'=>'Baixo',
'LBL_MEDIUM'=>'Médio',
'LBL_HIGH'=>'Alto',
'LBL_NUMBER'=>'Número:',
'LBL_PRIORITY'=>'Prioridade:',
'LBL_SUBJECT'=>'Assunto',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nome do Pacote',
'LBL_MODULE_NAME'=>'Nome do Módulo:',
'LBL_MODULE_NAME_SINGULAR' => 'Nome do módulo no singular:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Descrição:',
'LBL_KEY'=>'Chave:',
'LBL_ADD_README'=>'Leia-me',
'LBL_MODULES'=>'Módulos:',
'LBL_LAST_MODIFIED'=>'Última Modificação:',
'LBL_NEW_MODULE'=>'Novo Módulo',
'LBL_LABEL'=>'Rótulo Plural',
'LBL_LABEL_TITLE'=>'Etiqueta',
'LBL_SINGULAR_LABEL' => 'Rótulo Singular',
'LBL_WIDTH'=>'Largura',
'LBL_PACKAGE'=>'Pacote:',
'LBL_TYPE'=>'Tipo:',
'LBL_TEAM_SECURITY'=>'Segurança de Equipe',
'LBL_ASSIGNABLE'=>'Atribuível',
'LBL_PERSON'=>'Pessoa',
'LBL_COMPANY'=>'Empresa',
'LBL_ISSUE'=>'Assunto',
'LBL_SALE'=>'Venda',
'LBL_FILE'=>'Arquivo',
'LBL_NAV_TAB'=>'Tabulador de Navegação',
'LBL_CREATE'=>'Criar',
'LBL_LIST'=>'Lista',
'LBL_VIEW'=>'Ver',
'LBL_LIST_VIEW'=>'Listagem',
'LBL_HISTORY'=>'Ver Histórico',
'LBL_RESTORE_DEFAULT'=>'Restaurar Padrão',
'LBL_ACTIVITIES'=>'Atividades',
'LBL_SEARCH'=>'Pesquisar',
'LBL_NEW'=>'Novo',
'LBL_TYPE_BASIC'=>'básico',
'LBL_TYPE_COMPANY'=>'empresa',
'LBL_TYPE_PERSON'=>'pessoa',
'LBL_TYPE_ISSUE'=>'assunto',
'LBL_TYPE_SALE'=>'venda',
'LBL_TYPE_FILE'=>'Arquivo',
'LBL_RSUB'=>'Este é o sub-painel que será exibido no seu módulo',
'LBL_MSUB'=>'Este é o sub-painel que o seu módulo fornece ao módulo relacionado para exibir',
'LBL_MB_IMPORTABLE'=>'Importando',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visível',
'LBL_VE_HIDDEN'=>'oculto',
'LBL_PACKAGE_WAS_DELETED'=>'[[pacote]] foi eliminado',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportar Personalizações',
'LBL_EC_NAME'=>'Nome do Pacote',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Descrição:',
'LBL_EC_KEY'=>'Chave:',
'LBL_EC_CHECKERROR'=>'Por favor Selecione um módulo.',
'LBL_EC_CUSTOMFIELD'=>'campo(s) personalizado(s)',
'LBL_EC_CUSTOMLAYOUT'=>'layout(s) personalizado(s)',
'LBL_EC_CUSTOMDROPDOWN' => 'lista(s) suspensa(s) personalizável(is)',
'LBL_EC_NOCUSTOM'=>'Nenhum módulo foi personalizados.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'Módulo foi implementado.',
'LBL_UNDEFINED' => 'indefinido',
'LBL_EC_CUSTOMLABEL'=>'Rotulo customizado (s)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Falhou ao recuperar dados',
'LBL_AJAX_TIME_DEPENDENT' => 'Uma ação dependente do tempo está em progresso. Por favor aguarde e tente de novo daqui a uns segundos.',
'LBL_AJAX_LOADING' => 'Carregando...',
'LBL_AJAX_DELETING' => 'Excluindo...',
'LBL_AJAX_BUILDPROGRESS' => 'Construção em Progresso...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Implementação em Progresso...',
'LBL_AJAX_FIELD_EXISTS' =>'O nome do campo que introduziu já existe. Por favor insira um novo nome de campo.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Tem a certeza que pretende remover este pacote? Isto irá eliminar permanentemente todos os Arquivos associados a este pacote.',
'LBL_JS_REMOVE_MODULE' => 'Tem a certeza que pretende remover este módulo? Isto irá eliminar permanentemente todos os Arquivos associados a este módulo.',
'LBL_JS_DEPLOY_PACKAGE' => 'Todas as personalizações que você fez no Studio serão apagadas quando este módulo for re-instalado. Tem certeza que deseja continuar?',

'LBL_DEPLOY_IN_PROGRESS' => 'Implementando Pacote',
'LBL_JS_VALIDATE_NAME'=>'Nome - Deve ser alfanumérico, sem espaços e começando por uma letra',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'O Nome do Pacote já existe',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Chave - Deve ser um código alfanumérico e começar com uma letra',
'LBL_JS_VALIDATE_KEY'=>'Chave - Deve ser alfanumérica, sem espaços e começando por uma letra',
'LBL_JS_VALIDATE_LABEL'=>'Por favor introduza um rótulo que será utilizado como Nome de Exibição para este módulo',
'LBL_JS_VALIDATE_TYPE'=>'Por favor Selecione o tipo de módulo que pretende construir da lista acima',
'LBL_JS_VALIDATE_REL_NAME'=>'Nome - Deve ser alfanumérico e sem espaços',
'LBL_JS_VALIDATE_REL_LABEL'=>'Rótulo - por favor adicione um rótulo que será exibido acima do sub-painel',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Tem certeza de que deseja apagar este item do dropdown? Isso pode afetar a funcionalidade do seu aplicativo.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Tem certeza de que deseja apagar este item do dropdown? Eliminar o estágio ganhamos ou estágio Perdido fará com que o módulo Previsão  não funcionar corretamente',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Tem certeza de que deseja apagar a fase de vendas Ganhamos? Excluindo esta fase fará com que o módulo Previsão não funcionar corretamente',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Tem certeza de que deseja apagar a fase de vendas Perdemos? Excluindo esta fase fará com que o módulo Previsão não funcionar corretamente',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?<br>Note: This operation may not complete for several minutes.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Isto irá tornar este relacionamento permanente. Tem a certeza que pretende implementar este relacionamento?',
'LBL_CONFIRM_DONT_SAVE' => 'Foram feitas alterações desde a sua última gravação, pretende gravar?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Gravar Alterações?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Há dados que podem ser eliminados, e isso não pode ser desfeito, tem certeza que deseja continuar?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Selecione o tipo de base de dados apropriado baseado no tipo de dados que será introduzido no campo.',
'LBL_POPHELP_SEARCHABLE'=>'Você tem que acionar o Full System Index após alterar o &#39;boost level"',
'LBL_POPHELP_IMPORTABLE'=>'<b>Sim</b>: O campo será incluído numa operação de importação.<br><b>Não</b>: O campo não será incluído numa importação.<br><b>Obrigatório</b>: Um valor para o campo deve ser fornecido em qualquer importação.',
'LBL_POPHELP_IMAGE_WIDTH'=>'A imagem carregada vai ser dimensionada para esta largura.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'A imagem carregada vai ser dimensionada para esta altura.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
. '<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
'LBL_POPHELP_CALCULATED'=>"Create a formula to determine the value in this field.<br>"
   . "Workflow definitions containing an action that are set to update this field will no longer execute the action.<br>"
   . "Fields using formulas will not be calculated in real-time in "
   . "Mobile EditView layouts.",

'LBL_POPHELP_DEPENDENT'=>"Create a formula to determine whether this field is visible in layouts.<br/>"
        . "Dependent fields will follow the dependency formula in the browser-based mobile view, <br/>"
        . "but will not follow the formula in the native applications, such as Sugar Mobile for iPhone. <br/>"
        . "They will not follow the formula in the Sugar Self-Service Portal.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
'LBL_RESET' => 'Reiniciar',
'LBL_RESET_MODULE' => 'Reiniciar Módulo',
'LBL_REMOVE_CUSTOM' => 'Remover personalizações',
'LBL_CLEAR_RELATIONSHIPS' => 'Limpar Relacionamentos',
'LBL_RESET_LABELS' => 'Reiniciar Rótulos',
'LBL_RESET_LAYOUTS' => 'Reiniciar Layouts',
'LBL_REMOVE_FIELDS' => 'Remover os Campos Personalizados',
'LBL_CLEAR_EXTENSIONS' => 'Limpar Extensões',

'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
'LBL_HISTORY_TITLE' => 'histórico',

'fieldTypes' => array(
                'varchar'=>'Campo de Texto',
                'int'=>'Número Inteiro',
                'float'=>'Decimal',
                'bool'=>'Caixa de Seleção',
                'enum'=>'DropDown',
                'multienum' => 'Multi-Seleção',
                'date'=>'Data',
                'phone' => 'Telefone',
                'currency' => 'Moeda:',
                'html' => 'HTML',
                'radioenum' => 'Rádio',
                'relate' => 'Relacionar',
                'address' => 'Endereço',
                'text' => 'Área de Texto',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Imagem',
                'encrypt'=>'Encriptar',
                'datetimecombo' =>'Data/Hora',
                'decimal'=>'Decimal',
),
'labelTypes' => array(
    "" => "Rótulos usados frequentemente",
    "all" => "Todos os rótulos",
),

'parent' => 'Relação Flexível',

'LBL_ILLEGAL_FIELD_VALUE' =>"Chaves de dropdowns não podem conter plicas.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Quaisquer dropdowns que utilizem tenham este item como valor vão deixar de o exibir, e o valor vai deixar de ser selecionável nas dropdowns. Tem a certeza que quer continuar?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionado {1} ID)',
);
