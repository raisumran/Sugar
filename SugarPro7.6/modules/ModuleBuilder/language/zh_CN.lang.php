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
    'LBL_LOADING' => '加载' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => '隐藏选项' /*for 508 compliance fix*/,
    'LBL_DELETE' => '删除' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'SugarCRM提供技术支持' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'提供 <b>名称</b> 给文件包。输入的名称必须为字母并且不包含空格。 (Example: HR_Management)<br/><br/> 你可以提供 <b>作者</b> 和 <b>说明</b> 信息给文件包。 <br/><br/>点击 <b>保存</b> 来创建新文件包。',
            'modify'=>'<b>文件包</b> 属性和可能的行为出现在这。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。',
            'name'=>'这是当前文件包的 <b>名称</b> 。<br/><br/>您输入的姓名必须为字母， 以字母开头并且不包含空格。 (例如: HR_Management)',
            'author'=>'这是在安装过程中显示的 <b>作者</b>  作为实体的名称创建文件包。<br><br>作者可以是个人或者是一个公司。',
            'description'=>'这是在安装是显示的文件包的 <b>说明</b> 。',
            'publishbtn'=>'点击 <b>公布</b> 保存所有输入的数据并创建一个 .zip 文件，是文件包的可安装版。<br><br>用<b>模块加载器</b> 上传 .zip 文件 并安装文件包。',
            'deploybtn'=>'点击 <b>显示</b> 保留所有输入的数据并安装文件包，包含当前例证中的所有模块 。',
            'duplicatebtn'=>'点击<b>复制</b> 去复制文件包的内容到一个新文件夹并显示这个新文件包。 <br/><br/>对于此新文件包，添加数字到用来创建新文件包的名字的结尾时，新名称会自动生成。 您可以通过输入新<b>名称</b> 并点击 <b>保存</b>来重新命名此新文件夹。',
            'exportbtn'=>'点击<b>导出</b> 来创建 一个 .zip 文件包含文件包中的自定义。<br><br> 生成的文件不是文件包的自动安装版本。<br><br>用 <b>模块加载器</b>去导入 .zip 文件 和文件包，包含出现在模块加载器中的自定义。',
            'deletebtn'=>'点击 <b>删除</b> 去删除此文件包中的所有相关文件。',
            'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
            'existing_module'=>'点击 <b>模块</b> 图标去编辑属性和自定义模块，关系和与模块相关的布局。',
            'new_module'=>'点击 <b>新模块</b> 来给文件包创建一个新模块。',
            'key'=>'这个五个字母的字母<b>关键值</b> 会被使用加在所有当前文件包模块的目录，分类名和数据库表之前。<br><br>关键值用来使表格名称独特。',
            'readme'=>'点击增加文件包的<b>自述文件</b> 。<br><br>自述文件在安装期间可利用。',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'给模块一个提供<b>名称</b> 。 您提供的<b>标签</b>将会出现在导航标签中。 <br/><br/>选择显示模块的导航标签通过核对 <b>导航标签</b> 检查框.<br/><br/>然后选择你想要新增的模块类型。 <br/><br/>选择一个模板类型。每个模板包含一套指定字段，和预定义布局 作为你模块的基础。 <br/><br/>点击<b>保存</b> 来新增模块。',
        'modify'=>'你可以改变模块属性或自定义模块相关的 <b>字段</b>, <b>关系</b> 和 <b>布局</b> 。',
        'importable'=>'检查 <b>可导入的</b> 检查框会使模块进行导入。<br><br>一个导入向导的链接会出现在模块的快捷版面中。导入向导促进从外部资源到自定义模块的数据导入。',
        'team_security'=>'检查 <b>团队安全</b> 检查框会使模块团队安全。<br/><br/>如果团队安全性能保证，团队选择将会出现在模块的数据中。',
        'reportable'=>'检查这个盒子会使模块有数据与之冲突。',
        'assignable'=>'检查这个盒子会允许模块的数据分配给选定的用户。',
        'has_tab'=>'检查 <b>导航标签</b> 将会给模块提供一个导航标签。',
        'acl'=>'检查这个盒子会使模块有访问控制，包含字段级安全。',
        'studio'=>'检查这个盒子会允许管理员在工作室内自定义这个模块。',
        'audit'=>'检查这个盒子会孕育模块的审计。某些字段的改变将会被记录以至于管理员可以回顾更改历史记录。',
        'viewfieldsbtn'=>'点击 <b>查看字段</b> 来查看模块相关字段并且创建和编辑自定义字段。',
        'viewrelsbtn'=>'点击 <b>查看关系</b>来查看与模块相关的关系并且创建新关系。',
        'viewlayoutsbtn'=>'点击 <b>查看布局</b> 来查看模块的布局和自定义布局内的字段安排。',
        'viewmobilelayoutsbtn' => '单击<b>查看手机布局</b>查看模块的手机布局并定制布局内的字段排列。',
        'duplicatebtn'=>'点击 <b>复制</b> 来把模块的属性复制到新模块并且显示新模块。 <br/><br/>对于此新文件包，添加数字到用来创建新文件包的名字的结尾时，新名称会自动生成。',
        'deletebtn'=>'点击 <b>删除</b> 来删除这个模块。',
        'name'=>'这是当前模块的 <b>名称</b> 。<br/><br/>此名称必须为字母并且以字母开始，不包含空格。(例如: HR_Management)',
        'label'=>'这是将会出现在模块导航标签中的 <b>标签</b> 。',
        'savebtn'=>'点击<b>保存</b> 保存所有与模块相关的所有输入数据。',
        'type_basic'=>'<b>基础</b> 模板类型提供基本字段，例如姓名，负责人，团队，创建日期和字段说明。',
        'type_company'=>'<b>公司</b> 模板类型提供特殊的组织字段，例如公司名称，行业，和账单地址。<br/><br/>使用这个模板来创建与标准账户模块相似的模块。',
        'type_issue'=>'<b>发行</b>模板会提供客户反馈和特殊缺陷字段，例如数字，状态，属性和描述。<br/><br/>使用这个模板还创建与标准客户反馈和追踪系统模块类似的模块。',
        'type_person'=>'<b>个人</b> 模板类型提供个人专用字段，例如称谓，头衔，姓名，地址和电话号码。<br/><br/>使用这个模板来新增与标准联系人和潜在客户模块类似的模块。',
        'type_sale'=>'<b>销售</b>模板提供指定字段机会，例如 潜在客户资源，阶段，数量和可能性。<br/><br/>使用这个模板来创建与标准机会模板相似的模板。',
        'type_file'=>'<b>文件</b> 模板提供文档指定字段，例如文件名，文档类型和公布日期。<br><br>使用这个模板来创建与标准文档模块相似的模块。',

    ),
    'dropdowns'=>array(
        'default' => '所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
        'editdropdown'=>'下拉列表可被用在模块中标准和自定义的下拉字段。<br><br>提供一个<b>名称</b> 给下拉列表。<br><br>如果任何语言包被安装在应用程序中，你可以选择  <b>语言</b> 用于列表项目。<br><br>在<b>项目名称</b> 字段，提供一个名称给下拉列表选项。这个名字不会出现在对用户可见的下拉列表中。<br><br>在 <b>显示标签</b> 字段，提供一个对使用者可见的标签。<br><br>在提供项目名称和显示标签之后，点击 <b>添加</b>来添加项目到下拉列表。 <br><br>拖放项目到想所需位置来重新排序表单中的项目。<br><br>点击 <b>编辑图标</b>, 并输入新标签来编辑项目的显示标签并进入新标签。 点击<b>删除图标</b>来删除下拉列表中的项目.<br><br> 点击<b>撤销</b>来撤销显示表格的改变。 点击<b>重置</b>来重置没做完的修改。<br><br>点击 <b>保存</b> 来保存下拉列表。',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '点击<b>保存和部署</b> 来保存您所做的更改并使他们在模块内启用。',
        'historyBtn'=> '点击 <b>查看历史记录</b>从历史记录中来查看和恢复先前保存的布局 。',
        'historyDefault'=> '点击 <b>恢复默认</b>来恢复对原始布局的查看。',
        'Hidden' 	=> '<b>隐藏</b> 字段不出现在子面板中。',
        'Default'	=> '<b>默认</b>字段出现在子面板中。',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '点击<b>保存和部署</b> 来保存您所做的更改并使他们在模块内启用。',
        'historyBtn'=> '点击 <b>查看历史记录</b>来查看和恢复先前保存的布局在历史记录中。',
        'historyDefault'=> '点击 <b>恢复默认</b> 来恢复对原始布局的查看。',
        'Hidden' 	=> '<b>隐藏</b> 字段用户现行在列表视图中不可见。',
        'Available' => '<b>可利用的</b> 字段不通过默认显示，但是可以被用户添加到列表视图中。',
        'Default'	=> '出现在试图列表中的<b>默认</b> 字段不是用户自定义的。'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> '点击<b>保存和部署</b> 来保存您所做的更改并使他们在模块内启用。',
        'historyBtn'=> '点击 <b>查看历史记录</b>来查看和恢复先前保存的布局在历史记录中。',
        'historyDefault'=> '点击 <b>恢复默认</b> 来恢复对原始布局的查看。',
        'Hidden' 	=> '<b>隐藏</b> 字段用户现行在列表视图中不可见。',
        'Default'	=> '出现在试图列表中的<b>默认</b> 字段不是用户自定义的。'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> '点击 <b>保存和部署</b> 将会保存您所有的更改并启用他们。',
        'Hidden' 	=> '<b>隐藏</b> 字段不出现在搜索中。',
        'historyBtn'=> '点击 <b>查看历史记录</b>来查看和恢复先前保存的布局在历史记录中。',
        'historyDefault'=> '点击 <b>恢复默认</b> 来恢复对原始布局的查看。',
        'Default'	=> '<b>默认</b> 字段出现在查找中。'
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
        'saveBtn'	=> '点击 <b>保存</b> 来保存自从上次保存以来您对布局所做的更改。<br><br>更改将不会显示到模块中直到你部署所做的更改。',
        'historyBtn'=> '点击 <b>查看历史记录</b>来查看和恢复先前保存的布局在历史记录中。',
        'historyDefault'=> '点击 <b>恢复默认</b> 来恢复对原始布局的查看。',
        'publishBtn'=> '点击 <b>保存和部署</b> 来保存自从上次保存以来您对布局所做的更改并使更改在模块中启用。<br><br>布局将会立即被显示在模块中。',
        'toolbox'	=> '<b>工具箱</b> 包含 <b>回收站</b>, 额外布局元素和一系列添加到布局中的可用字段。<br/><br/>在工具箱中的布局元素和字段可以被拖拽到布局中，布局元素和字段可以从布局中被拖拽到工具箱中。<br><br>布局元素是<b>面板</b>和 <b>行</b>. 添加一个新的行或面板在布局中给字段提供额外的位置。<br/><br/>拖拽工具箱或布局中的任意字段到已占用的字段位置来置换两个字段的位置。<br/><br/><b>填充</b> 字段在布局中创建了它被放置的空白区。',
        'panels'	=> '<b>布局</b>区域提供了布局将会如何出现在模块中的视图当对布局所做的改变被显示的时候。<br/><br/>您可以通过拖拽他们到所需位置来重置字段，行和面板。<br/><br/>通过拖拽他们到工具箱中的<b>回收站</b> 来去除要素，或者通过从<b>工具箱</b>中拖拽出它们来增加新元素和字段，把它们放到布局中所需位置。',
        'delete'	=> '拖拽任何元素来从布局中移除它。',
        'property'	=> '编辑这为这个字段显示的标签。 <br/><b>定位顺序</b> 控制以什么顺序跳格键在字段之间转换。',
    ),
    'fieldsEditor'=>array(
        'default'	=> '模块可用<b>字段</b>通过字段名显示在这。<br><br>模块自定义字段通过默认出现在字段上面。<br><br>点击<b>字段名来编辑一个字段</b>.<br/><br/>点击 <b>增加字段</b>来新增一个字段。',
        'mbDefault'=>'模块可用<b>字段</b> 通过字段名显示在这。<br><br>点击字段名来给字段配置属性。<br><br> 点击<b>添加字段</b>来新增一个字段。 标签和新字段的其他属性可以在通过点击字段名创建后被编辑。 <br><br>在模块被显示之后，在 Module Builder中新增的字段在工作室显示的模块中被视为标准字段。',
        'addField'	=> '选择一个 <b>日期类型</b> 给新字段。 您选择的类型决定可以被输入的字段字符种类。 例如, 只有整数可以被输入到整数数据型字段中。<br><br> 提供一个 <b>名字</b> 给字段。名字必须是字母并且不能包含空格。 底线是有效的。<br><br> <b>显示标签</b> 是在模块布局中为字段出现的标签 。<b>系统标签</b> 用于指代码中的字段。<br><br> 取决于为字段所选的数据类型，一些或下面所有属性可以给字段设置:<br><br> <b>帮助文本</b> 在用户在字段徘徊是短暂出现，可以被用来提示用户想要的输入类型。<br><br> <b>批注文字</b> i仅在工作室和/Module Builder中可见, 可以被用来为管理员描述字段。<br><br> <b>默认值</b> 将会出现在字段中。  用可以在字段中输入新值或使用默认值。<br><br> 选择<b>批量更新</b> 检查框以便能够为字段使用批量更新特征。<br><br><b>最大值</b> 决定了可以被输入到字段中最大字符数量。<br><br> 选择<b>必须字段</b> 检查框为了使字段必要。必须为字段提供一个值以便能够保存包含字段的记录。<br><br> 选择 <b>可报告的</b> 检查框为了允许字段为过滤去所使用 和为了显示记录中的数据。<br><br> 选择<b>审计</b> 检查框为了能够在变更日志中追踪字段的变更。<br><br> 选择一个选项在 <b>可导入的</b> 字段来允许，不允许或者要求字段被导入到导入向导。<br><br>选择一个选项在<b>副本合并</b>字段来允许或不允许副本合并，并找到副本特征。<br><br>额外的特征可以为一些数据类型设置。',
        'editField' => '这个字段的属性可以自定义。<br><br>点击<b>复制</b> 来创建一个有同样属性的新字段。',
        'mbeditField' => '模板字段的<b>显示标签</b> 可以被自定义 。字段的其他属性不能被自定义。<br><br>点击 <b>复制</b> 来创建一个有相同属性的新字段。<br><br>要移除一个模板字段以至于它不会显示在模块中，从适当的<b>布局</b>中移除字段。'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'导出工作室的自定义通过创建可以通过<b>Module Loader</b>被上传到另外一个Sugar例证的文件包 。<br><br> 首先，提供一个<b>文件包名称</b>.  你可以提供 <b>作者</b> 和 <b>说明</b> 信息为文件包.<br><br>选择包含你想要导出的包含自定义的模块。仅仅包含自定义的模块会出现供您选择。<br><br>然后点击 <b>导出</b> 来为文件包创建一个包含自定义的 .zip 文件',
        'exportCustomBtn'=>'点击<b>导出</b>来为您想导出的包含自定义的文件包创建一个 .zip 文件。',
        'name'=>'这是文件包的<b>名称</b>。这个名称将会在安装中被显示。',
        'author'=>'这是安装中被显示的<b>作者</b> 作为创建文件包的实体的名称。 作者可以是个人或者公司。',
        'description'=>'这是在安装是显示的文件包的 <b>说明</b> 。',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '欢迎来到 <b>开发工具</b> 区域。 <br/><br/>使用这个区域的工具来创建和管理标准和自定义的模块和字段。',
        'studioBtn'	=> '使用 <b>工作室</b> 来自定义显示的模块。',
        'mbBtn'		=> '使用<b>Module Builder</b> 来新增模块。',
        'sugarPortalBtn' => '使用<b>Sugar 门户编辑</b> 来管理和自定义Sugar门户。',
        'dropDownEditorBtn' => '使用 <b>下拉编辑器</b> 来为下拉字段新增和编辑全局的下拉单 。',
        'appBtn' 	=> '应用模式是您可以自定义程序不同属性的地方，例如多少 TPS 记录显示在首页中。',
        'backBtn'	=> '返回上一步。',
        'studioHelp'=> '使用 <b>工作室</b>来决定什么信息要被显示在模块中。',
        'studioBCHelp' => '指示模块式向后兼容的模块',
        'moduleBtn'	=> '点击编辑这个模块。',
        'moduleHelp'=> '你可以为模块自定义的组件出现在这。<br><br>点击一个图标选择编辑的组件。',
        'fieldsBtn'	=> '创建和自定义<b>字段</b> 来在模块内储存信息。',
        'labelsBtn' => '编辑为字段和模块中其他标题显示的 <b>标签</b> 。'	,
        'relationshipsBtn' => '添加新的或查看已经存在的模块 <b>关系</b> 。' ,
        'layoutsBtn'=> '自定义模块<b>布局</b>.  布局是包含字段的模块的不同视图。<br><br>您可以决定哪些模块出现和他们在每个布局中的组织。',
        'subpanelBtn'=> '决定哪些字段出现在模块的<b>子面板</b> 中。',
        'portalBtn' =>'自定义出现在 <b>Sugar 门户</b>模块<b>布局</b> 。',
        'layoutsHelp'=> '可以被自定义的模块<b>布局</b>出现在这 。<br><br>布局显示字段和字段数据。<br><br>点击一个图标选择编辑的布局。',
        'subpanelHelp'=> '模块中可以被自定义的<b>子面板</b> 出现在这.<br><br>点击一个图标选择编辑的模块。',
        'newPackage'=>'点击 <b>新闻简报</b>来创建一个新文件包。',
        'exportBtn' => '点击 <b>到处自定义</b>来创建和下载一个在工作室中为指定模块制定的包含自定义的文件包。',
        'mbHelp'    => '使用<b>Module Builder</b> 来创建一个文件包，它包含基于标准或自定义对象的自定义模块。',
        'viewBtnEditView' => '自定义模块&#39;s的 <b>编辑视图</b> 布局。<br><br>编辑视图是为锁定用户输入数据的包含输入字段的表格。',
        'viewBtnDetailView' => '爱定义模块&#39;s 的<b>细节视图</b> 布局。<br><br>细节视图显示了用户输入字段数据。',
        'viewBtnDashlet' => '自定义模块&#39;s的 <b>Sugar Dashlet</b>, 包含 Sugarr仪表盘的列表视图和查找.<br><br>Sugar仪表盘将会在增加首页模块页数是可用。',
        'viewBtnListView' => '自定义模块&#39;的 <b>列表视图</b> 布局<br><br>查找结果出现在列表视图中。',
        'searchBtn' => '自定义模块&#39;的 <b>查找</b> 布局。<br><br>决定什么字段可被用来过滤出现在列表视图中的记录。',
        'viewBtnQuickCreate' =>  '自定义模块&#39;的 <b>快速创建</b> 布局<br><br>快速创建表格出现在子面板和电子邮件模板中。',

        'searchHelp'=> '可以被自定义的<b>查找</b> 表格出现在这。<br><br>查找表格包含为过滤记录的字段。<br><br>点击图标来选择查找编辑的布局。',
        'dashletHelp' =>'可以被自定义的<b>Sugar Dashlet</b> 布局出现在这.<br><br>Sugar Dashlet 将会在添加主页模块页数时可用。',
        'DashletListViewBtn' =>'<b>Sugarr仪表盘列表视图</b> 显示了基于Sugarr仪表盘查找过滤器的记录。',
        'DashletSearchViewBtn' =>'<b>Sugar仪表盘查找</b> 为 the Sugar仪表盘列表视图过滤记录。',
        'popupHelp' =>'可以被自定义的<b>弹出</b>布局出现在这。<br>',
        'PopupListViewBtn' => '<b>弹窗列表视图</b> 显示了基于弹出查找视图的记录.',
        'PopupSearchViewBtn' => '<b>弹窗查找视图</b> 为弹窗列表视图查看记录。',
        'BasicSearchBtn' => '自定义 <b>基本查找</b>表格，它出现在模块查找区域基本查找标签。',
        'AdvancedSearchBtn' => '自定义 <b>高级搜索</b>表格，它出现在模块查找区域的高级查找标签。',
        'portalHelp' => '管理和自定义<b>Sugar 门户</b>.',
        'SPUploadCSS' => '上传一个<b>样式表</b>为Sugar门户.',
        'SPSync' => '<b>数据同步</b>  Sugar门户例证的自定义。',
        'Layouts' => '自定义Sugar门户模块的<b>布局</b> 。',
        'portalLayoutHelp' => '门户内的模块出现在此区域。<br><br>选择一个模块来编辑<b>布局</b>。',
        'relationshipsHelp' => '所有的存在在模块和其他显示模块之间 <b>关系</b>出现在这。<br><br>关系 <b>名称</b>是系统为关系生成的名称。<br><br> <b>主要模块</b> 使用有关系的模块。 例如，关系的所有属性，账户模块为主要模块，储存在在账户数据库表格中。<br><br><b>类型</b> 存在在主要模块和 <b>相关模块</b>之间的关系类型。<br><br>点击列标题来排序列.<br><br> 点击关系表格中的一行来查看与关系相关的属性。<br><br>点击 <b>添加关系</b> 来创建一个新关系。<br><br>关系可以在两个被部署的模块之间被创建。',
        'relationshipHelp'=>'<b>关系</b> 可以在模块和其他部署的模块之间被创建。<br><br> 关系通过子面板被从视觉上表现出来并使字段在模块记录中产生关联。<br><br>为模块选择下面其中一个关系<b>类型</b> :<br><br> <b>一对一</b> - 两个模块&#39; 记录都会包含相关字段 。<br><br> <b>一对多</b> - 主要模块的&#39;记录会包含一个子面板， 并且相关模块的&#39;记录 会包含相关字段。<br><br> <b>多对多</b> - 两个模块&#39; 记录都会显示子面板。<br><br>为关系选择 <b>相关模块</b> 。<br><br>如果关系类型包含子面板，为合适的模块选择子面板视图。<br><br> 点击<b>保存</b> 来创建关系。',
        'convertLeadHelp' => "这儿您可以添加模块来转换布局 清理已经存在的布局。<br/><br />		您可以通过拖拽表格中的行来重新排粗模块。<br/><br/><br /><br />		<b>Module:</b> 模块名称。<br/><br/><br />		<b>Required:</b> 必须创建必选模块或者在潜在客户装换之前选择。<br/><br/><br />		<b>Copy Data:</b> If checked, 来自潜在客户的字段将会被复制到新创建的记录中有相同名字的字段中。<br/><br/><br />		<b>Allow Selection:</b> 再联系人中有相关字段的模块可以被选择而不是在转换潜在客户过程中创建。<br/><br/><br />		<b>Edit:</b> 为模块修改转换布局。<br/><br/><br />		<b>Delete:</b> 把这个模块从转换布局中移除。<br/><br/>",
        'editDropDownBtn' => '编辑一个全局下拉单',
        'addDropDownBtn' => '添加一个全局下拉单',
    ),
    'fieldsHelp'=>array(
        'default'=>'模块中的<b>字段</b> 通过字段名被列在这。<br><br>模块模板包含预先决定的一系列字段。<br><br>点击 <b>添加字段</b>来添加一个新字段。<br><br>点击 <b>字段名</b>来编辑字段。<br/><br/>在模块背不熟之后，在Module Builder中创建新字段，和模板一起，在工作室中被视为标准字段。',
    ),
    'relationshipsHelp'=>array(
        'default'=>'应经创建的在模块和其他模块之间的关系<b>关系</b> 将会出现在这。<br><br>关系 <b>名称</b> 是系统为关系生成的。<br><br> <b>主要模块</b> 使用有关系的模块。 关系属性被储存在属于主要模块的数据库表格中。<br><br><b>类型</b> 是存在在主要模块和相关模块中的关系类型。 <b>相关模块</b>。<br><br>点击列标题来通过列排序。<br><br>点击关系表格中的一行来查看和编辑关系的相关属性。<br><br>点击 <b>添加关系</b> 来新增一个关系。',
        'addrelbtn'=>'滑动鼠标添加新关系..',
        'addRelationship'=>'<b>关系</b> 可以在模块和其他自定义模块之间活在部署模块中被创建。<br><br> 关系通过自面板和模块记录中的相关字段被形象地表达。<br><br>从下面的关系<b>中</b> 中为模块选择一个关系类型:<br><br> <b>一对一</b> - 两个模块&#39; 记录都会包含相关字段 。<br><br> <b>一对多</b> - 主要模块的&#39;记录会包含一个子面板， 并且相关模块的&#39;记录 会包含相关字段。<br><br> <b>多对多</b> -两个模块&#39; 记录都会显示子面板。<br><br>为关系选择 <b>相关模块</b> 。 <br><br>如果关系类型包含子面板，为合适的模块选择子面板视图。<br><br> 点击<b>保存</b> 来创建关系。',
    ),
    'labelsHelp'=>array(
        'default'=> '<b>标签</b> 字段和模块中的其他标题可以改变。<br><br>在字段内通过点击编辑标签，进入一个新标签并点击 <b>保存</b>。<br><br>如果应用程序中安装了任何语言包，您可以选择为标签使用的<b>语言</b> 。',
        'saveBtn'=>'点击 <b>保存</b> 来保存所有更改。',
        'publishBtn'=>'点击 <b>保存和部署</b> 来保存所有更改并启用它们。',
    ),
    'portalSync'=>array(
        'default' => '进入门户实例的 <b>Sugar 门户URL</b>来更新，并点击 <b>Go</b>。<br><br>然后输入一个有效的Sugar用户名和密码，然后点击 <b>开始同步</b>。<br><br> 对Sugar 门户 <b>布局</b>做的自定义, 和 <b>样式表</b> 一起，如果一个被上传了，将会被转移到指定的门户实例中。',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => '您可以通过使用样式表来自定义Sugar门户的样子。<br><br>选择一个<b>样式单</b> 来上传。<br><br>在下次执行同步时，样式单会被应用在sugar门户中。',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'要开始项目，点击 <b>新闻简报</b>来新增一个文件包到你的自定义模块。 <br/><br/>每个文件包可以包含一个或多个模块。<br/><br/>例如, 您可能想要新增一个文件包，其包含一个与标准账户模块相关的自定义模块。或者，您可能想要新增一个文件包，文件包包含几个新的模块，它们作为一个项目一起工作并且比起关联或是与已经存在于应用程序中的其他模块相关联。',
            'somepackages'=>'<b>文件包</b>作为一个包含自定义模块的容器，其所有部分都是项目的一部分。文件包可以包含一个或多个自定义 <b>模块</b> ，他们可以彼此关联或与应用程序其他模块关联。<br/><br/>在为您的项目创建了文件包之后，您可以立即创建文件包的模块，或者您可以稍后返回 Module Builder 来完成此项目。<br><br>当项目完成时，您可以 <b>部署</b>文件包在应用程序内安装自定义模块。',
            'afterSave'=>'您的新文件包应该包含至少一个模块。您可以给文件包新增一个或多个自定义模块。<br/><br/>点击<b>新模块</b>来为这个文件包创建一个自定义模块。<br/><br/>在创建至少一个模块之后，您可以公布或部署文件包，使它为您的例证或/其他用户&#39; 例证可用。<br/><br/>要在您sugar例证中部署文件包，点击 <b>部署</b>。<br><br>点击 <b>公布</b>来保存文件包作为一个 zip 文件。 在zip文件被保存到您的系统之后，使用<b>模块加载器</b> 来上传和安装文件包在您的 Sugar instance中。 <br/><br/>您可以分配这个文件给其他用户在他们的Sugar 例证中上传和安装。',
            'create'=>'一个<b>文件包</b> 作为包含自定义模块的容器，其所有都是项目的一部分。文件包可以包含一个或多个自定义<b>模块</b> 模块可以彼此关联或和应用程序中的其他模块关联。<br/><br/>在为您的项目创建了文件包之后，您可以立即为文件包创建模块，或者您可以稍后返回到 Module Builder 来完成此项目。',
            ),
    'main'=>array(
        'welcome'=>'使用 <b>开发工具</b> 来创建和管理标准的和自定义的模块和字段。 <br/><br/>要管理应用程序中的模块，点击 <b>工作室</b>。 <br/><br/>要创建自定义模块，点击 <b>Module Builder</b>.',
        'studioWelcome'=>'所有现在已经安装的模块，包含标准的和模块加载的物件，都是在工作室内自定义的。'
    ),
    'module'=>array(
        'somemodules'=>"既然当前的文件包包含至少一个模块，您可以 <b>部署</b> 文件包中的模块在您的Sugar例证中，或者 <b>公布</b>将要被安装到当前例证中或另外一个使用  <b>模块加载器</b>的文件包。<br/><br/>要在您的Sugar例证中直接安装文件包，点击<b>部署</b>。<br><br>要新增一个zip 文件给文件包，文件包是可以被加载和安装在当前的Sugar例证中和 其他使用<b>模块加载器</b>中, 点击 <b>公布</b>.<br/><br/> 您可以有阶段性的为文件包构建模块，公布或部署当您准备好要这么做的时候。<br/><br/>在公布或部署一个文件包之后，您可以改变文件包的属性并进一步自定义模块。然后再次公布或再次部署文件包来应用更改。" ,
        'editView'=> '在这您可以编辑已经存在的字段。您可以移除任何已经存在的字段或添加在左侧面板可用的字段。',
        'create'=>'当选择您想要创建的模块类型<b>类型</b>时，牢记您想要拥有的模块中的字段类型。<br/><br/>每个模块模板包含一系列标题描述的适宜模块类型的字段。<br/><br/><b>基本的</b> - 提供出现在标准模块中的基本字段，例如姓名，负责人，团队，创建日期和说明字段。<br/><br/> <b>公司</b> - 提供组织指定的字段，例如公司名称，行业，账单地址。使用这个模板来创建与标准模块相似的模块。<br/><br/> <b>个人</b> - 提供个人指定字段，例如称谓，标题，名称，地址和电话号码。使用这个模板来创建与标准联系人和模块潜在客户相似的模块。<br/><br/><b>发行</b> - 提供客户反馈- 和制定缺陷字段，例如数量，状态，优先权和说明描述。使用这个模板来创建与标准客户反馈和缺陷追踪模块相似的模块。<br/><br/>注意: 在您创建了模块之后，您可以编辑模板提供的字段的标签，也可以创建自定义字段来新增模块布局。',
        'afterSave'=>'通过编辑和创建字段来自定义适合您需要的模块。和其他的模块建立关系并在布局内安排字段。<br/><br/>要在模块内查看模板字段和管理自定义字段，点击<b>查看字段</b>。<br/><br/>要创建和管理模块和其他模块之间的关系，无论是已经存在于应用程序中的或是其他在相同文件包中的自定义模块，点击 <b>查看关系</b>。<br/><br/>要编辑模块布局，点击 <b>查看布局</b>。您可以改变细节查看，编辑查看和列表显示布局，就像您为工作室内应经存在与应用程序中的模块那样。<br/><br/> 要创建一个和当前模块相同属性的的模块，点击<b>复制</b>. 您可以进一步自定义新模块。',
        'viewfields'=>'模块中的字段可以被自定义来适应您的需要。<br/><br/>您可以删除标准字段，但是您可以从布局页中适当的布局中移除他们。<br/><br/>您可以快速创建与已经存在有相思树行的新字段，通过点击 <b>复制</b> 在<b>属性</b> 表格中。输入任何新属性，然后点击 <b>保存</b>。<br/><br/>建议您为标准字段和自定义字段设置所有属性，在您公布和安装包含自定义模块的文件包之前。',
        'viewrelationships'=>'您可以创建当前模块和文件包中其他模块之间的多对多关系，并且/或者，在当前模块和应经安装在应用程序中的模块之间。<br><br> 要创建一对多和一对一关系，为模块创建 <b>关联</b> 和<b>弹性关联</b>字段。',
        'viewlayouts'=>'您可以控制在 <b>编辑视图</b>中什么字段可用于捕获数据， 您也可以控制什么数据显示在<b>细节视图</b>中。试图不需要匹配。 <br/><br/>快速创建表格被显示，当<b>创建</b> 在子面板中被点击时。通过默认，<b>快速创建</b> f表格布局与默认 <b>编辑视图</b> 布局相同。您可以自定义快速创建表格使它比编辑视图布局包含更少的和/或不同的字段。<br><br>您可以决定模块的安全性，使用自定义和<b>角色管理</b>。<br><br>',
        'existingModule' =>'在创建和自定义这个模块之后，您可以创建额外的模块或返回到文件包中去<b>公布</b> 或 <b>部署</b> 文件包。<br><br>要创建额外的模块，点击 <b>复制</b> 来创建一个与当前模块有相同属性的模块，或返回文件包，并点击 <b>新模块</b>。<br><br> 如果您准备好去 <b>公布</b> 或 <b>部署</b> 包含这个模块的文件包，导航返回文件包去执行这些功能。您可以公布或部署包含至少一个模块的文件包。',
        'labels'=> '标准字段和自定义字段的标签可以被改变。 改编字段标签不会影响储存在字段中的数据。',
    ),
    'listViewEditor'=>array(
        'modify'	=> '左侧显示三列。  "默认"列包含通过默认显示在列表显示中的字段，"可用" 列包含用户可以选择使用来创建自定义列表显示的字段，"隐藏" 列包含了您作为管理员来为用户添加到默认或可用列的但是现在禁用的字段。',
        'savebtn'	=> '点击<b>保存</b> 将会保存所有更改并使启用它们。',
        'Hidden' 	=> '隐藏字段是现在用户在列表显示中不可用的字段。',
        'Available' => '可用字段是不是通过默认显示的字段，但是可以被用户使用。',
        'Default'	=> '默认字段是显示给没有创建的自定义列表显示设置的用户。'
    ),

    'searchViewEditor'=>array(
        'modify'	=> '左侧有两列显示。 "默认"列包含将会显示在查找视图中的字段， "隐藏"列包含您作为管理员添加到视图的字段。',
        'savebtn'	=> '点击 <b>保存和部署</b>会保存所有更改启用它们。',
        'Hidden' 	=> '隐藏字段是不会出现在查找视图中的字段。',
        'Default'	=> '默认字段是将会被显示在查找视图中的字段。'
    ),
    'layoutEditor'=>array(
        'default'	=> '左侧显示两列。 右手列，标签为当前布局或布局预览，是您可以修改模块布局的地方。 左手列，标签为工具箱，包含当编辑布局时有用的元素和工具。<br/><br/>如果布局区域被标为当前布局，那么您正在工作当前于被为显示的模块使用的布局副本。<br/><br/>如果被标为预览布局，那么您正工作于早期通过点击保存按钮而创建的副本，而那有可能已经从用户见过的模块版本中被改变了。',
        'saveBtn'	=> '点击这个按钮保存布局以便您可以保存您的修改。当您返回到这个模块时您将会从这个已经被修改了的布局开始。 您的布局不会被模块的使用者看见知道您点击保存和公布按钮。',
        'publishBtn'=> '点击这个按钮来部署布局。这意味着这个布局将会立即被模块的用户所见。',
        'toolbox'	=> '工具箱包含了编辑布局是各种有用的特性装置，包含一个垃圾区域，一套额外的元素和一套可用字段。这些中的任意一个都可以被拖拽到布局中。',
        'panels'	=> '这个区域显示了您的布局将会如何注意到模块的用户当它被显示的时候。<br/><br/>您可以通过拖拽他们来重置元素，例如字段，行和面板;通过拖拽他们到工具箱中的垃圾箱来删除元素， 或通过把它们从工具箱中脱到理想的位置的布局中来新增元素。'
    ),
    'dropdownEditor'=>array(
        'default'	=> '左侧显示两列。 右手列，标签为当前布局或布局预览，是您可以修改模块布局的地方。 左手列，标签为工具箱，包含当编辑布局时有用的元素和工具。<br/><br/>如果布局区域被标为当前布局，那么您正在工作当前于被为显示的模块使用的布局副本。<br/><br/>如果被标为预览布局，那么您正工作于早期通过点击保存按钮而创建的副本，而那有可能已经从用户见过的模块版本中被改变了。',
        'dropdownaddbtn'=> '点击这个按钮给下拉式菜单新增一个项目。',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'在这个案例中在工作室中制作的自定义可以被打包并显示在另一个案例中。<br><br>提供<b>文件包名称</b>. 您可以提供<b>作者</b> 和 <b>描述</b> 信息给文件包。<br><br>选择包含要导出的自定义的模块。(仅包含自定义的模块会出现供您选择。)<br><br>点击 <b>导出</b> ；为包含自定义的文件包来创建一个.zip 文件。 file文件可以通过<b>Module Loader</b>被上传到另一个例证中。',
        'exportCustomBtn'=>'点击 <b>导出</b> 来为包含你想要导出的自定义的文件包新增一个.zip 文件 。’',
        'name'=>'<b>名称</b> 文件包的名称将会被显示在 Module Loader 中在文件在工作室包被上传安装之后',
        'author'=>'<b>作者</b>是创建文件包的实体的名称。 作者可以是一个个体或是一个公司。<br><br>作者将会被显示在Module Loader 中，在文件在工作室包被上传安装之后.’',
        'description'=>'文件包 <b>说明</b> 将会被显示在 Module Loader中，在文件包被上传安装之后。',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '欢迎来到<b>开发者工具</b1> 区域. <br/><br/>使用这个区域的工具来创建和管理标准和自定义模块和字段。',
        'studioBtn'	=> '使用 <b>工作室</b> 通过改变字段安排来自定义安装的模块。',
        'mbBtn'		=> '使用<b>Module Builder</b> 来新增模块。',
        'appBtn' 	=> '使用应用模式来自定义程序的不同属性，例如 多少TPS记录被显示在首页',
        'backBtn'	=> '返回上一步。',
        'studioHelp'=> '使用 <b>工作室</b> 来自定义安装的模块。',
        'moduleBtn'	=> '点击编辑这个模块。',
        'moduleHelp'=> '选择您想要编辑的模块组件。',
        'fieldsBtn'	=> '通过控制模块中的 <b>字段</b>，编辑什么信息是储存在模块中。<br/><br/>您可以在这编辑和创建自定义字段。',
        'labelsBtn' => '编辑<b>标签</b>来显示值在模块中。'	,
        'layoutsBtn'=> '自定义编辑，细节，列表和查找视图的<b>布局</b> 。',
        'subpanelBtn'=> '编辑什么信息将在在模块子面板中显示',
        'layoutsHelp'=> '选择一个 <b>布局来编辑</b>。<br/<br/>点击<b>编辑视图</b>来改变为了输入数据的包含数据字段的布局。<br/><br/>要改变在编辑视图中显示了输入字段的布局， 点击<b>细节视图</b>。<br/><br/>要改变出现在默认列单中的列，点击 <b>列表视图</b>。<br/><br/> 要改变基本和高级搜索表格布局，点击<b>搜索</b>.',
        'subpanelHelp'=> '选择一个<b>子面板</b> 来编辑。',
        'searchHelp' => '选择一个<b>查找</b> 布局来编辑。',
        'labelsBtn'	=> '编辑<b>标签</b>来显示值在模块中。',
        'newPackage'=>'点击 <b>新闻简报</b>来创建一个新文件包。',
        'mbHelp'    => '<b>欢迎来到模块生成器。</b><br/><br/>用 <b>模块生成器</b> 来新增文件包，文件包包含基于标准或自定义对象的自定义模块。<br/><br/>要开始 ，点击<b>新文件包</b> 来新增一个新文件包或者选择一个文件包来编辑。<br/><br/> 一个<b>文件包</b> 作为一个班含自定义模块的容器，其所有都是项目的一部分。 文件包可以包含一个或更多自定义文件，可以彼此关联或在应用程序中与模块关联。 <br/><br/>例如:您可能想要创建一个包含一个自定义模块的文件包，文件包与标准账户模块相关。或者您想要创建包含几个新模块的文件包，模块一起工作作为一个程序，并且彼此关联活在应用程序中和其他模块关联。',
        'exportBtn' => '点击 <b>导出自定义</b> 来创建一个包含在工作室为指定模块制定的自定义。',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'下拉列表编辑器',

//ASSISTANT
'LBL_AS_SHOW' => '今后显示助手。',
'LBL_AS_IGNORE' => '今后忽略助手。',
'LBL_AS_SAYS' => '助手说:',

//STUDIO2
'LBL_MODULEBUILDER'=>'模块生成器',
'LBL_STUDIO' => '工作室',
'LBL_DROPDOWNEDITOR' => '下拉列表编辑器',
'LBL_EDIT_DROPDOWN'=>'编辑下拉列表',
'LBL_DEVELOPER_TOOLS' => '开发者工具',
'LBL_SUGARPORTAL' => 'Sugar门户编辑',
'LBL_SYNCPORTAL' => '同步门户',
'LBL_PACKAGE_LIST' => '文件包列表',
'LBL_HOME' => '首页',
'LBL_NONE'=>'-无-',
'LBL_DEPLOYE_COMPLETE'=>'部署完成',
'LBL_DEPLOY_FAILED'   =>'部署时发生错误，您部署的包可能没有正确被安装。',
'LBL_ADD_FIELDS'=>'增加自定义字段',
'LBL_AVAILABLE_SUBPANELS'=>'可用子面板',
'LBL_ADVANCED'=>'高级',
'LBL_ADVANCED_SEARCH'=>'高级搜索',
'LBL_BASIC'=>'普通',
'LBL_BASIC_SEARCH'=>'普通搜索',
'LBL_CURRENT_LAYOUT'=>'当前布局',
'LBL_CURRENCY' => '货币',
'LBL_CUSTOM' => '自定义',
'LBL_DASHLET'=>'Sugar仪表盘',
'LBL_DASHLETLISTVIEW'=>'Sugar仪表盘列表视图',
'LBL_DASHLETSEARCH'=>'Sugar统计图查找',
'LBL_POPUP'=>'弹窗视图',
'LBL_POPUPLIST'=>'弹窗列表视图',
'LBL_POPUPLISTVIEW'=>'弹窗列表视图',
'LBL_POPUPSEARCH'=>'弹窗查询',
'LBL_DASHLETSEARCHVIEW'=>'Sugar统计图查找',
'LBL_DISPLAY_HTML'=>'显示HTML源代码',
'LBL_DETAILVIEW'=>'显示细节',
'LBL_DROP_HERE' => '[拖拽到此处]',
'LBL_EDIT'=>'编辑',
'LBL_EDIT_LAYOUT'=>'编辑布局',
'LBL_EDIT_ROWS'=>'编辑行',
'LBL_EDIT_COLUMNS'=>'编辑列',
'LBL_EDIT_LABELS'=>'编辑标签',
'LBL_EDIT_PORTAL'=>'编辑门户',
'LBL_EDIT_FIELDS'=>'编辑字段',
'LBL_EDITVIEW'=>'编辑显示',
'LBL_FILTER_SEARCH' => "搜索",
'LBL_FILLER'=>'(填充器)',
'LBL_FIELDS'=>'字段',
'LBL_FAILED_TO_SAVE' => '保存失败',
'LBL_FAILED_PUBLISHED' => '公布失败',
'LBL_HOMEPAGE_PREFIX' => '我的',
'LBL_LAYOUT_PREVIEW'=>'预览布局',
'LBL_LAYOUTS'=>'版面布局',
'LBL_LISTVIEW'=>'列表',
'LBL_RECORDVIEW'=>'记录视图',
'LBL_MODULE_TITLE' => '工作室',
'LBL_NEW_PACKAGE' => '新建文件包',
'LBL_NEW_PANEL'=>'新建面板',
'LBL_NEW_ROW'=>'新建行',
'LBL_PACKAGE_DELETED'=>'已删除的包',
'LBL_PUBLISHING' => '公布中 ...',
'LBL_PUBLISHED' => '已公布',
'LBL_SELECT_FILE'=> '显示HTML源代码',
'LBL_SAVE_LAYOUT'=> '保存布局',
'LBL_SELECT_A_SUBPANEL' => '选择一个子面板',
'LBL_SELECT_SUBPANEL' => '选择子面板',
'LBL_SUBPANELS' => '子面板',
'LBL_SUBPANEL' => '子面板',
'LBL_SUBPANEL_TITLE' => '职称:',
'LBL_SEARCH_FORMS' => '搜索',
'LBL_STAGING_AREA' => '规划区 (在此处拖拉项目)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar 字段(点击项目添加到规划区)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar 指令 (点击条目减价到规划区)',
'LBL_TOOLBOX' => '工具箱',
'LBL_VIEW_SUGAR_FIELDS' => '查看 Sugar 字段',
'LBL_VIEW_SUGAR_BIN' => '查看 Sugar 指令',
'LBL_QUICKCREATE' => '快速创建',
'LBL_EDIT_DROPDOWNS' => '编辑一个全局下拉列表',
'LBL_ADD_DROPDOWN' => '添加一个新的全局下拉列表',
'LBL_BLANK' => '-空白-',
'LBL_TAB_ORDER' => '标签顺序',
'LBL_TAB_PANELS' => '将面板显示为标签',
'LBL_TAB_PANELS_HELP' => '显示标签下的所有面板，而不是在一个屏幕显示所有标签下的面板。',
'LBL_TABDEF_TYPE' => '显示类型',
'LBL_TABDEF_TYPE_HELP' => '选择这个区域如何被显示。这个选项只有在这个视图有标签时才受影响。',
'LBL_TABDEF_TYPE_OPTION_TAB' => '标签',
'LBL_TABDEF_TYPE_OPTION_PANEL' => '面板',
'LBL_TABDEF_TYPE_OPTION_HELP' => '选择面板来让这个面板是视图中显示。选择标签来让面板在视图内以标签形式显示。当标签启动时，附属面板将作为标签显示。每一个附属面板都将作为一个标签。如果标签模式被启用，第一个面板也将变为标签。',
'LBL_TABDEF_COLLAPSE' => '收起',
'LBL_TABDEF_COLLAPSE_HELP' => '选择来设置这个面板默认为收起。',
'LBL_DROPDOWN_TITLE_NAME' => '名称',
'LBL_DROPDOWN_LANGUAGE' => '语言',
'LBL_DROPDOWN_ITEMS' => '列表条目',
'LBL_DROPDOWN_ITEM_NAME' => '条目名称',
'LBL_DROPDOWN_ITEM_LABEL' => '显示标签',
'LBL_SYNC_TO_DETAILVIEW' => '同步到细节视图',
'LBL_SYNC_TO_DETAILVIEW_HELP' => '选择这个选项来同步这个编辑视图到相应的细节视图布局。编辑视图中字段和字段的位置<br>将会被同步&#39;d 并且自动保存到细节视图中，在点击保存或保存和部署的时候。<br>细节视图中将不可以进行布局更改。',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => '这个细节视图是同步的&#39;d 与相应的编辑视图。<br> 细节视图中字段和字段位置反映了编辑视图中字段和字段的位置。<br> 在此页中对细节视图的更改不能被保存或显示。做更改或不同步布局在编辑视图中。',
'LBL_COPY_FROM_EDITVIEW' => '从编辑视图复制',
'LBL_DROPDOWN_BLANK_WARNING' => '项目名称和显示标签都需要值。 要增加一个空白项，点击添加但不输入任何项目名称和显示标签的值。',
'LBL_DROPDOWN_KEY_EXISTS' => '钥已经存在于列表',
'LBL_NO_SAVE_ACTION' => '找不到此视图的保存操作',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2：建立位置：形成严重的文件',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '**表示组合字段。组合字段是一种多个字段的集成。例如，“地址”是一个组合字段中包含“地址”，“城市”，“邮编”，“国家”和“国家”。<br /><br />双击打开一个组合字段查看它包含哪些字段。',
'LBL_COMBO_FIELD_CONTAINS' => '包括:',

'LBL_WIRELESSLAYOUTS'=>'手机版面布局',
'LBL_WIRELESSEDITVIEW'=>'手机编辑视图',
'LBL_WIRELESSDETAILVIEW'=>'手机详细视图',
'LBL_WIRELESSLISTVIEW'=>'手机列表视图',
'LBL_WIRELESSSEARCH'=>'手机搜索视图',

'LBL_BTN_ADD_DEPENDENCY'=>'添加依赖',
'LBL_BTN_EDIT_FORMULA'=>'编辑公式',
'LBL_DEPENDENCY' => '依赖',
'LBL_DEPENDANT' => '依赖',
'LBL_CALCULATED' => '计算值',
'LBL_READ_ONLY' => '只读',
'LBL_FORMULA_BUILDER' => '公式编辑器',
'LBL_FORMULA_INVALID' => '无效公式',
'LBL_FORMULA_TYPE' => '公式必须具有类型',
'LBL_NO_FIELDS' => '找不到字段',
'LBL_NO_FUNCS' => '找不到相关函数',
'LBL_SEARCH_FUNCS' => '查找函数...',
'LBL_SEARCH_FIELDS' => '查找字段...',
'LBL_FORMULA' => '公式',
'LBL_DYNAMIC_VALUES_CHECKBOX' => '依赖的',
'LBL_DEPENDENT_DROPDOWN_HELP' => '当父选项被选中时，从左边附属下拉表的可选选项中拖动选项到右边以使选项生效.如果当父选项被选中时，其下没有选择，那么附属下拉表就无法显示.',
'LBL_AVAILABLE_OPTIONS' => '有效选项',
'LBL_PARENT_DROPDOWN' => '父项下拉表',
'LBL_VISIBILITY_EDITOR' => '能见度编辑器',
'LBL_ROLLUP' => '汇总',
'LBL_RELATED_FIELD' => '相关字段',
'LBL_CONFIG_PORTAL_URL'=>'自定义Logo图像的URL。推荐的Logo尺寸为163 × 18像素。',
'LBL_PORTAL_ROLE_DESC' => '不要删除此角色。客户自助服务门户网站角色是一个系统生成的角色，在Sugar门户网站激活过程中创建的。用这个角色来访问控制、启用/禁用Sugar门户网站中的错误、案例或知识库模块。请不要修改这个角色的任何其他访问控制，以避免未知的与不可预测的系统行为。在这个角色被意外删除的情况下，通过禁用和启用Sugar门户网站来重新创建它。',

//RELATIONSHIPS
'LBL_MODULE' => '模块',
'LBL_LHS_MODULE'=>'主模块',
'LBL_CUSTOM_RELATIONSHIPS' => '* 工作室创建的关系',
'LBL_RELATIONSHIPS'=>'关系',
'LBL_RELATIONSHIP_EDIT' => '编辑关系',
'LBL_REL_NAME' => '名称',
'LBL_REL_LABEL' => '标签',
'LBL_REL_TYPE' => '类型',
'LBL_RHS_MODULE'=>'相关模块',
'LBL_NO_RELS' => '无关联',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'可选条件' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'列',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'值',
'LBL_SUBPANEL_FROM'=>'子面板来自',
'LBL_RELATIONSHIP_ONLY'=>'没有创建该关联的可见元素，因为两模块已存在可见关联。',
'LBL_ONETOONE' => '一对一',
'LBL_ONETOMANY' => '一对多',
'LBL_MANYTOONE' => '多对一',
'LBL_MANYTOMANY' => '多对多',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => '选择一项功能或组件',
'LBL_QUESTION_MODULE1' => '选择一个模块。',
'LBL_QUESTION_EDIT' => '选择一个模块来编辑',
'LBL_QUESTION_LAYOUT' => '选择一个布局来编辑',
'LBL_QUESTION_SUBPANEL' => '选择一个子面板来编辑。',
'LBL_QUESTION_SEARCH' => '选择一个搜索版面来编辑',
'LBL_QUESTION_MODULE' => '选择一个模块组件来编辑',
'LBL_QUESTION_PACKAGE' => '选择一个文件包来编辑,或创建一个新文件包。',
'LBL_QUESTION_EDITOR' => '选择一工具。',
'LBL_QUESTION_DROPDOWN' => '选择一个下拉列表来编辑,或创建一个新下拉列表。',
'LBL_QUESTION_DASHLET' => '选择编辑一个统计图布局。',
'LBL_QUESTION_POPUP' => '选择一个弹出式布局编辑。',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'相关',
'LBL_NAME'=>'名称',
'LBL_LABELS'=>'标签',
'LBL_MASS_UPDATE'=>'批量更新',
'LBL_AUDITED'=>'审计',
'LBL_CUSTOM_MODULE'=>'模块',
'LBL_DEFAULT_VALUE'=>'默认值',
'LBL_REQUIRED'=>'必填项',
'LBL_DATA_TYPE'=>'类型',
'LBL_HCUSTOM'=>'定制',
'LBL_HDEFAULT'=>'默认',
'LBL_LANGUAGE'=>'语言:',
'LBL_CUSTOM_FIELDS' => '* 工作室创建的字段',

//SECTION
'LBL_SECTION_EDLABELS' => '编辑标签',
'LBL_SECTION_PACKAGES' => '文件包',
'LBL_SECTION_PACKAGE' => '文件包',
'LBL_SECTION_MODULES' => '模块',
'LBL_SECTION_PORTAL' => '门户',
'LBL_SECTION_DROPDOWNS' => '下拉列表',
'LBL_SECTION_PROPERTIES' => '属性',
'LBL_SECTION_DROPDOWNED' => '编辑下拉列表',
'LBL_SECTION_HELP' => '帮助',
'LBL_SECTION_ACTION' => '动作',
'LBL_SECTION_MAIN' => '主要',
'LBL_SECTION_EDPANELLABEL' => '编辑面板标签',
'LBL_SECTION_FIELDEDITOR' => '字段编辑器',
'LBL_SECTION_DEPLOY' => '部署',
'LBL_SECTION_MODULE' => '模块',
'LBL_SECTION_VISIBILITY_EDITOR'=>'编辑可见度',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'默认',
'LBL_HIDDEN'=>'隐藏',
'LBL_AVAILABLE'=>'有效的',
'LBL_LISTVIEW_DESCRIPTION'=>'下面显示了三列。 <b>默认</b> 列包含的字段被默认显示在列表视图中。 <b>附加</b> 列包含的字段用户可以选择使用创建客户视图。<b>可用</b> 行显示当您为管理员是添加默认或附加行被用户使用。',
'LBL_LISTVIEW_EDIT'=>'编辑列表查看',

//Manager Backups History
'LBL_MB_PREVIEW'=>'预览',
'LBL_MB_RESTORE'=>'恢复',
'LBL_MB_DELETE'=>'删除',
'LBL_MB_COMPARE'=>'比较',
'LBL_MB_DEFAULT_LAYOUT'=>'默认布局',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'新增',
'LBL_BTN_SAVE'=>'保存',
'LBL_BTN_SAVE_CHANGES'=>'保存更改',
'LBL_BTN_DONT_SAVE'=>'放弃更改',
'LBL_BTN_CANCEL'=>'取消',
'LBL_BTN_CLOSE'=>'关闭',
'LBL_BTN_SAVEPUBLISH'=>'保存 & 部署',
'LBL_BTN_NEXT'=>'下一步',
'LBL_BTN_BACK'=>'返回',
'LBL_BTN_CLONE'=>'复制',
'LBL_BTN_ADDCOLS'=>'新增列',
'LBL_BTN_ADDROWS'=>'新增行',
'LBL_BTN_ADDFIELD'=>'新增字段',
'LBL_BTN_ADDDROPDOWN'=>'添加下拉列表',
'LBL_BTN_SORT_ASCENDING'=>'升序排序',
'LBL_BTN_SORT_DESCENDING'=>'降序排序',
'LBL_BTN_EDLABELS'=>'编辑标签',
'LBL_BTN_UNDO'=>'取消',
'LBL_BTN_REDO'=>'重做',
'LBL_BTN_ADDCUSTOMFIELD'=>'增加自定义字段',
'LBL_BTN_EXPORT'=>'导出客户化订制',
'LBL_BTN_DUPLICATE'=>'复制',
'LBL_BTN_PUBLISH'=>'发表',
'LBL_BTN_DEPLOY'=>'部署',
'LBL_BTN_EXP'=>'导出',
'LBL_BTN_DELETE'=>'删除',
'LBL_BTN_VIEW_LAYOUTS'=>'查看布局',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'查看手机布局',
'LBL_BTN_VIEW_FIELDS'=>'查看字段',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'查看关系项',
'LBL_BTN_ADD_RELATIONSHIP'=>'添加关系',
'LBL_BTN_RENAME_MODULE' => '改变模块名字',
'LBL_BTN_INSERT'=>'插入',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> '错误: 字段已经存在',
'ERROR_INVALID_KEY_VALUE'=> "错误: 无效关键值: [$#39;]",
'ERROR_NO_HISTORY' => '没有找到历史文件',
'ERROR_MINIMUM_FIELDS' => '布局中必须包含一个字段',
'ERROR_GENERIC_TITLE' => '一个错误已发生',
'ERROR_REQUIRED_FIELDS' => '您确定要继续吗？布局中缺少以下必填字段：',
'ERROR_ARE_YOU_SURE' => '您确定要继续么？',

'ERROR_CALCULATED_MOBILE_FIELDS' => '以下含有计算字段将不会SugarCRM 移动版本编辑视图中实时重新计算：',
'ERROR_CALCULATED_PORTAL_FIELDS' => '以下含有计算字段将不会SugarCRM 门户编辑视图中实时重新计算：',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => '以下模块已被禁用：',
    'LBL_PORTAL_ENABLE_MODULES' => '如果您希望在门户内启用他们，请在这里启用。',
    'LBL_PORTAL_CONFIGURE' => '配置门户',
    'LBL_PORTAL_THEME' => '门户主题',
    'LBL_PORTAL_ENABLE' => '启用',
    'LBL_PORTAL_SITE_URL' => '您的门户站点已可访问：',
    'LBL_PORTAL_APP_NAME' => '应用名称',
    'LBL_PORTAL_LOGO_URL' => '图标URL',
    'LBL_PORTAL_LIST_NUMBER' => '列表中显示的纪录条数',
    'LBL_PORTAL_DETAIL_NUMBER' => '细节视图中显示的字段数量',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => '全局搜索时显示的结果数量',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => '默认门户注册分配',
'LBL_PORTAL'=>'门户',
'LBL_PORTAL_LAYOUTS'=>'门户布局',
'LBL_SYNCP_WELCOME'=>'请输入您想要更新门户实例的URL.',
'LBL_SP_UPLOADSTYLE'=>'选择一种表单类型从您的计算机上进行上传.<br> 表单类型将应用于Sugar门户下次实施同步时.',
'LBL_SP_UPLOADED'=> '已上传',
'ERROR_SP_UPLOADED'=>'请确定您将上传一个CSS格式的表单.',
'LBL_SP_PREVIEW'=>'这是关于Sugar门户网站被喜欢使用的样式表的预演.',
'LBL_PORTALSITE'=>'Sugar门户的URL:',
'LBL_PORTAL_GO'=>'到',
'LBL_UP_STYLE_SHEET'=>'上传风格表单',
'LBL_QUESTION_SUGAR_PORTAL' => '选择一种 Sugar门户界面来编辑.',
'LBL_QUESTION_PORTAL' => '选择一种门户界面来编辑.',
'LBL_SUGAR_PORTAL'=>'Sugar门户编辑',
'LBL_USER_SELECT' => '-- 选择 --',

//PORTAL PREVIEW
'LBL_CASES'=>'客户反馈',
'LBL_NEWSLETTERS'=>'新闻邮件',
'LBL_BUG_TRACKER'=>'缺陷追踪器',
'LBL_MY_ACCOUNT'=>'我的帐户',
'LBL_LOGOUT'=>'退出',
'LBL_CREATE_NEW'=>'新增',
'LBL_LOW'=>'低',
'LBL_MEDIUM'=>'中',
'LBL_HIGH'=>'高',
'LBL_NUMBER'=>'数量:',
'LBL_PRIORITY'=>'优先级:',
'LBL_SUBJECT'=>'主题',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'文件包名称:',
'LBL_MODULE_NAME'=>'模块名称:',
'LBL_MODULE_NAME_SINGULAR' => '单一模块名',
'LBL_AUTHOR'=>'作者:',
'LBL_DESCRIPTION'=>'说明：',
'LBL_KEY'=>'关键值:',
'LBL_ADD_README'=>'自述',
'LBL_MODULES'=>'模块：',
'LBL_LAST_MODIFIED'=>'最新修改:',
'LBL_NEW_MODULE'=>'新增模块',
'LBL_LABEL'=>'复数标签',
'LBL_LABEL_TITLE'=>'标签',
'LBL_SINGULAR_LABEL' => '单数标签',
'LBL_WIDTH'=>'宽度',
'LBL_PACKAGE'=>'文件包:',
'LBL_TYPE'=>'类型：',
'LBL_TEAM_SECURITY'=>'团队安全',
'LBL_ASSIGNABLE'=>'可分配',
'LBL_PERSON'=>'人员',
'LBL_COMPANY'=>'公司',
'LBL_ISSUE'=>'发行',
'LBL_SALE'=>'销售',
'LBL_FILE'=>'文件',
'LBL_NAV_TAB'=>'导航标签',
'LBL_CREATE'=>'新增',
'LBL_LIST'=>'列表',
'LBL_VIEW'=>'显示',
'LBL_LIST_VIEW'=>'列表',
'LBL_HISTORY'=>'查看历史记录',
'LBL_RESTORE_DEFAULT'=>'恢复默认值',
'LBL_ACTIVITIES'=>'活动',
'LBL_SEARCH'=>'搜索',
'LBL_NEW'=>'新建',
'LBL_TYPE_BASIC'=>'基本',
'LBL_TYPE_COMPANY'=>'公司',
'LBL_TYPE_PERSON'=>'人员',
'LBL_TYPE_ISSUE'=>'发行',
'LBL_TYPE_SALE'=>'销售',
'LBL_TYPE_FILE'=>'文件',
'LBL_RSUB'=>'这是将显示在您模块中的子面板',
'LBL_MSUB'=>'这是您模块的子面板用于提供给相关模块显示。',
'LBL_MB_IMPORTABLE'=>'导入',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'可见',
'LBL_VE_HIDDEN'=>'隐藏',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] 已删除',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'导出客户化订制',
'LBL_EC_NAME'=>'文件包名称:',
'LBL_EC_AUTHOR'=>'作者:',
'LBL_EC_DESCRIPTION'=>'说明：',
'LBL_EC_KEY'=>'关键值:',
'LBL_EC_CHECKERROR'=>'前选择一个模块。',
'LBL_EC_CUSTOMFIELD'=>'客户化订制字段',
'LBL_EC_CUSTOMLAYOUT'=>'定制界面',
'LBL_EC_CUSTOMDROPDOWN' => '定制下拉选项',
'LBL_EC_NOCUSTOM'=>'无模块被客户化订制。',
'LBL_EC_EXPORTBTN'=>'导出',
'LBL_MODULE_DEPLOYED' => '模块已部署。',
'LBL_UNDEFINED' => '未定义',
'LBL_EC_CUSTOMLABEL'=>'自定义标签',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => '挽回数据失败',
'LBL_AJAX_TIME_DEPENDENT' => '动作正在进行中,请耐心等待并在几秒钟后重试。',
'LBL_AJAX_LOADING' => '加载中...',
'LBL_AJAX_DELETING' => '删除中...',
'LBL_AJAX_BUILDPROGRESS' => '建设过程中...',
'LBL_AJAX_DEPLOYPROGRESS' => '部署过程中...',
'LBL_AJAX_FIELD_EXISTS' =>'你输入的字段名已经存在。请输入新字段名。',
//JS
'LBL_JS_REMOVE_PACKAGE' => '你确定要删除此模块？这会永久删除这个模块相关的所有文件。',
'LBL_JS_REMOVE_MODULE' => '你确定要删除此模块？这会永久删除这个模块相关的所有文件。',
'LBL_JS_DEPLOY_PACKAGE' => '重新部署该模块将覆盖所有你在工作室中针对该模块所做的定制。你确定要继续吗？',

'LBL_DEPLOY_IN_PROGRESS' => '正部署文件包',
'LBL_JS_VALIDATE_NAME'=>'名称 - 必须为字母数字并且以字母开头。',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'文件包名称已经存在',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Key-必须是含有字母数字，而且首位必须是字母。',
'LBL_JS_VALIDATE_KEY'=>'关键值 - 必须为字母数字并且以字母开头。',
'LBL_JS_VALIDATE_LABEL'=>'请输入一条标签作为此模块的显示名称',
'LBL_JS_VALIDATE_TYPE'=>'请在列表中选择你喜欢的模块类型',
'LBL_JS_VALIDATE_REL_NAME'=>'名称 - 必须为字母数字并且无空格',
'LBL_JS_VALIDATE_REL_LABEL'=>'标签 - 请添加一条可显示于子面板上',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => '您确定您要删除此所需的下拉列表项？这可能会影响您的应用程序的功能。',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => '您确定您要删除此下拉列表项吗？删除成功关闭和失败关闭这两个阶段，将导致预测模块不能正常工作',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => '您确定您要删除此下拉列表项吗？删除成功关闭这一阶段，将导致预测模块不能正常工作',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => '删除成功关闭这一阶段，将导致预测模块不能正常工作',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?<br>Note: This operation may not complete for several minutes.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'将永久添加该关联，是否部署？',
'LBL_CONFIRM_DONT_SAVE' => '自上次保存已变化,您真要保存吗？',
'LBL_CONFIRM_DONT_SAVE_TITLE' => '保存更改?',
'LBL_CONFIRM_LOWER_LENGTH' => '数据可能被截断并且该操作不能被撤消，你确定要继续吗?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'请按照加入该字段的数据类型选择合适的数据类型。',
'LBL_POPHELP_SEARCHABLE'=>'选择这个字段的boost级别。<br />字段的boost级别越高，执行搜索的时候则权限越重。<br />当进行搜索时，符合条件的纪录字段权重大时将排列靠前。<br />如果您修改一个字段的boost级别，执行system index来让修改生效。<br />确保您在执行system index时删除选择已有纪录。',
'LBL_POPHELP_IMPORTABLE'=>'<b>是:</b> 导入操作将加入该字段。\\n<b>否:</b> 导入操作不会加入该字段。\\n<b>必要:</b> 任何导入操作必须提供该字段数值。',
'LBL_POPHELP_IMAGE_WIDTH'=>'输入一个以像素为单位的宽度值。',
'LBL_POPHELP_IMAGE_HEIGHT'=>'输入一个以像素为单位的宽度值。<br> 传的图像将被缩放到这个宽度。',
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
'LBL_RESET' => '重置',
'LBL_RESET_MODULE' => '复位模块',
'LBL_REMOVE_CUSTOM' => '删除自定义',
'LBL_CLEAR_RELATIONSHIPS' => '消除关系',
'LBL_RESET_LABELS' => '复位标签',
'LBL_RESET_LAYOUTS' => '复位布局"',
'LBL_REMOVE_FIELDS' => '删除自定义字段',
'LBL_CLEAR_EXTENSIONS' => '消除扩展',

'LBL_HISTORY_TIMESTAMP' => '时间戳',
'LBL_HISTORY_TITLE' => '历史',

'fieldTypes' => array(
                'varchar'=>'文本字段',
                'int'=>'整型',
                'float'=>'数值型',
                'bool'=>'复选框',
                'enum'=>'下拉表单',
                'multienum' => '多选',
                'date'=>'日期',
                'phone' => '电话',
                'currency' => '货币',
                'html' => 'HTML',
                'radioenum' => '单选框',
                'relate' => '关系',
                'address' => '地址',
                'text' => '文本框',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => '图片',
                'encrypt'=>'加密',
                'datetimecombo' =>'日期时间',
                'decimal'=>'小数',
),
'labelTypes' => array(
    "" => "经常使用的标签",
    "all" => "所有标签",
),

'parent' => '弹性关联',

'LBL_ILLEGAL_FIELD_VALUE' =>"下拉列表的键中不能含有引号。",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"你是选择从下拉列表中删除这一项目。任何使用此下拉列表的字段将不再显示该值，该值将不再能够从下拉字段选中。您确定要继续吗？",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
