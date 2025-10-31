<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__1d0ddb7b80a9d61c0c33a8686d015e06ccf536a741cef09a5ab24204acea403e */
class __TwigTemplate_460001dc634d224cb4a26d13201e66eb70171aa8675a8c6e086567ecd5a9e70b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Themes • shopapp</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsxDesignThemeGeneral';
    var iso_user = 'zh';
    var lang_is_rtl = '0';
    var full_language_code = 'zh-cn';
    var full_cldr_language_code = 'zh-CN';
    var country_iso_code = 'CN';
    var _PS_VERSION_ = '8.2.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = '订单编号: ';
    var total_msg = '总计： ';
    var from_msg = '自： ';
    var see_order_msg = '查看此订单';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = '客户姓名: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = '阅读留言';
    var token = 'a1847e2799fe4dd0a2075fe24c911422';
    var currentIndex = 'index.php?controller=AdminPsxDesignThemeGeneral';
    var employee_token = '5e17c0769ac195b6a030ae95c7f79055';
    var choose_language_translate = '选择语言：';
    var default_language = '1';
    var admin_modules_link = '/admin927jijhdjzkzyjnylkn/index.php/improve/modules/manage?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U';
    var admin_notification_get_link = '/admin927jijhdjzkzyjnylkn/index.php/common/notifications?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U';
    var admin_notification_push_link = adminNotificationPushLink = '/admin927jijhdjzkzyjnylkn/index.php/common/notifications/ack?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U';
    var tab_modules_list = '';
    var update_success_msg = '更新成功';
";
        // line 43
        echo "    var search_product_msg = '查询商品';
  </script>



<link
      rel=\"preload\"
      href=\"/admin927jijhdjzkzyjnylkn/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin927jijhdjzkzyjnylkn/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin927jijhdjzkzyjnylkn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.b13cfc23.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin927jijhdjzkzyjnylkn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin927jijhdjzkzyjnylkn\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin927jijhdjzkzyjnylkn\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\";
var currency = {\"iso_code\":\"CNY\",\"sign\":\"\\u00a5\",\"name\":\"\\u4eba\\u6c11\\u5e01\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-";
        // line 72
        echo "\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"CNY\",\"currencySymbol\":\"\\u00a5\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var getUuidAjaxUrl = \"\\/admin927jijhdjzkzyjnylkn\\/index.php\\/modules\\/improve\\/design\\/user\\/userId?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\";
var importThemeLink = \"\\/admin927jijhdjzkzyjnylkn\\/index.php\\/modules\\/improve\\/design\\/themes\\/import?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var ps_edition_basic_favicon = \"\\/modules\\/ps_edition_basic\\/views\\/favicon.png\";
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/admin927jijhdjzkzyjnylkn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.3\"></script>
<script type=\"text/javascript\" src=\"/admin927jijhdjzkzyjnylkn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.3\"></script>
<script type=\"text/javascript\" src=\"/admin927jijhdjzk";
        // line 90
        echo "zyjnylkn/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.13.3\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin927jijhdjzkzyjnylkn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script type=\"module\" src=\"/modules/psxdesign/views/js/index-themes.js\"></script>
    <script>
        window.userLocale  = 'zh';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
            var admin_gamification_ajax_url = \"http:\\/\\/prestashop.wojiataotao.com\\/admin927jijhdjzkzyjnylkn\\/index.php?controller=AdminGamification&token=ef7b63be8adcf68abec618dc315e351c\";
            var current_id_tab = 132;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin927jijhdjzkzyjnylkn/index.php/common/notifications?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 124
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-zh adminpsxdesignthemegeneral\"
  data-base-url=\"/admin927jijhdjzkzyjnylkn/index.php\"  data-token=\"nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/pseditionbasic/homepage?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\"></a>
      <span id=\"shop_version\">8.2.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    快速通道
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=25ad6f713c358684df9e0203a9e716c4\"
                 data-item=\"产品评估\"
      >产品评估</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php/improve/modules/manage?token=536610137c4b2f5c0c07e9205c100044\"
                 data-item=\"已安装的模块\"
      >已安装的模块</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/categories/new?token=536610137c4b2f5c0c07e9205c100044\"
                 data-item=\"新分类\"
      >新分类</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/products-v2/create?token=536610137c4b2f5c0c07e920";
        // line 158
        echo "5c100044\"
                 data-item=\"新商品\"
      >新商品</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5ea5202ee4084908c5683d3ea148c4a8\"
                 data-item=\"新的优惠券\"
      >新的优惠券</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php/sell/orders?token=536610137c4b2f5c0c07e9205c100044\"
                 data-item=\"订单\"
      >订单</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"106\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/themes?-rj8X57xnerc_U\"
        data-post-link=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminQuickAccesses&token=6fc0162d559683cbcac240a30b5bf55e\"
        data-prompt-text=\"请命名此快捷方式\"
        data-link=\"Themes - 列表\"
      >
        <i class=\"material-icons\">add_circle</i>
        添加当前页面到“快速访问”里
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminQuickAccesses&token=6fc0162d559683cbcac240a30b5bf55e\">
      <i class=\"material-icons\">settings</i>
      管理你的快速访问
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin927jijhdjzkzyjnylkn/index.php?controller=AdminSearch&amp;token=eb212ba5b9ab06ed129a2a";
        // line 197
        echo "edb0793b29\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"搜寻（例如：产品参考，客户名字)\" aria-label=\"搜索栏\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        全部
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"全部\" href=\"#\" data-value=\"0\" data-placeholder=\"您在找什么？\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> 全部</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"分类\" href=\"#\" data-value=\"1\" data-placeholder=\"产品名称，参考，等。\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> 分类</a>
        <a class=\"dropdown-item\" data-item=\"客户 名\" href=\"#\" data-value=\"2\" data-placeholder=\"名称\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> 客户 名</a>
        <a class=\"dropdown-item\" data-item=\"客户 IP地址\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> 客户 依IP地址</a>
        <a class=\"dropdown-item\" data-item=\"订单\" href=\"#\" data-value=\"3\" data-placeholder=\"订单号\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> 订单</a>
        <a class=\"dropdown-item\" data-item=\"发票\" href=\"#\" data-value=\"4\" data-placeholder=\"发票编号：\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> 发票</a>
        <a class=\"dropdown-item\" data-item=\"购物车\" href=\"#\" data-value=\"5\" data-placeholder=\"信用卡号码\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart<";
        // line 214
        echo "/i> 购物车</a>
        <a class=\"dropdown-item\" data-item=\"模块\" href=\"#\" data-value=\"7\" data-placeholder=\"模块名称\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> 模块</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">搜索</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">取消</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">快速通道</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=25ad6f713c358684df9e0203a9e716c4\"
             data-item=\"产品评估\"
    >产品评估</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php/improve/modules/manage?token=536610137c4b2f5c0c07e9205c100044\"
             data-item=\"已安装的模块\"
    >已安装的模块</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/categories/new?token=536610137c4b2f5c0c07e9205c100044\"
             data-item=\"新分类\"
    >新分类</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/products-v2/create?token=536610137c4b2f5c0c07e9205c100044\"
             data-item=\"新商品\"
    >新商品</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5ea52";
        // line 251
        echo "02ee4084908c5683d3ea148c4a8\"
             data-item=\"新的优惠券\"
    >新的优惠券</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php/sell/orders?token=536610137c4b2f5c0c07e9205c100044\"
             data-item=\"订单\"
    >订单</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"31\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/themes?-rj8X57xnerc_U\"
      data-post-link=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminQuickAccesses&token=6fc0162d559683cbcac240a30b5bf55e\"
      data-prompt-text=\"请命名此快捷方式\"
      data-link=\"Themes - 列表\"
    >
      <i class=\"material-icons\">add_circle</i>
      添加当前页面到“快速访问”里
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminQuickAccesses&token=6fc0162d559683cbcac240a30b5bf55e\">
    <i class=\"material-icons\">settings</i>
    管理你的快速访问
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;te";
        // line 296
        echo "xt-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/shop/maintenance/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>维护模式</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://prestashop.wojiataotao.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              订单 #<span id=\"_nb_new_orders_\"> (</span>
            </a>
          </li>
                                    <li class";
        // line 342
        echo "=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              客户<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              信息<span id=\"_nb_new_messages_\"><span id=\"_nb_new_messages_\">
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              现在没新订单：（<br>
              你查看了你<strong><a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=9151e385c1497a8f6bbdcbfa29450ae1\">放弃购物车</a></strong>了吗？<br>你的下个订单可能隐藏在哪里。
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              现在没新客户：（<br>
              你最近是否活跃在社交网站上
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              现在没有新信息<br>
              看起来你所有的顾客都很开心：）
            </";
        // line 388
        echo "p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      从 <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - 已注册 <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://prestashop.wojiataotao.com/img/pr/default.jpg\" alt=\"Likang\" /></span>
        <span class=\"employee_profile\">欢迎回来Likang</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/employees/1/edit?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\">
      <i class=\"material-icons\">edit</i>
      <span>您的个人资料</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts";
        // line 440
        echo ".distribution.prestashop.net?utm_source=prestashop.wojiataotao.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-zh\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-zh\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-zh\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-zh\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminLogin&amp;logout=1&amp;token=bbb41e1d20cc9efa586c59ddefedd8a6\">
      <i class=\"";
        // line 458
        echo "material-icons d-lg-none\">power_settings_new</i>
      <span>登出</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/employees/toggle-navigation?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/pseditionbasic/homepage?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.3</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"139\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/pseditionbasic/homepage?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                ";
        // line 503
        echo "        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminDashboard&amp;token=83019a1ea341f2bc598a09e020180672\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      仪表盘
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">出售</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/orders/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      订单
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                      ";
        // line 541
        echo "      </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/orders/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 订单
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/orders/invoices/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 发票
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/orders/credit-slips/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href";
        // line 572
        echo "=\"/admin927jijhdjzkzyjnylkn/index.php/sell/orders/delivery-slips/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 交货单
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCarts&amp;token=9151e385c1497a8f6bbdcbfa29450ae1\" class=\"link\"> 购物车
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/products?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      分类
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                    ";
        // line 604
        echo "          <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/products?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 单件商品
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/categories?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 分类
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/monitoring/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 监测
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminAttributesGroups&amp;token=e7d559eb9e568e446c8824d03de94506\" class=\"link\"> 属性和功能
                                </a>
                              </li>

                                   ";
        // line 633
        echo "                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/catalog/brands/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 品牌 &amp; 供应商
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/attachments/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 文件
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCartRules&amp;token=5ea5202ee4084908c5683d3ea148c4a8\" class=\"link\"> 折扣
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/stocks/?_token=nc6OmcOGtptFOMuKLihNX8baoEoh";
        // line 661
        echo "v-rj8X57xnerc_U\" class=\"link\"> 库存
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/customers/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      客户
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/customers/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 客户
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              ";
        // line 694
        echo "  <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/addresses/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 地址
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCustomerThreads&amp;token=9dd2802621a79a03e9d116347bec64ce\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      客户服务
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCustomerThreads&amp;token=9dd2802621a79a03e9d116347bec64ce\" class=\"link\"> 客户服务
                                </a>
                              </li>

                                                                    ";
        // line 723
        echo "              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/sell/customer-service/order-messages/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminReturn&amp;token=5d1ae556c24c1716dd7a562499d6a371\" class=\"link\"> Retours produit
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/metrics/legacy/stats?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      统计信息
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
          ";
        // line 754
        echo "                                  </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/metrics/legacy/stats?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 统计信息
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"138\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/metrics?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">改进</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/mbo/modules/catalog/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57x";
        // line 789
        echo "nerc_U\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      模块
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/mbo/modules/catalog/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/modules/manage?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 模块管理
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                            ";
        // line 817
        echo "                  
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=a3f132a7eb8450ca56d089d15aed8629\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      设计
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=a3f132a7eb8450ca56d089d15aed8629\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"165\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/mbo/themes/catalog/?_token=nc6OmcOGtptFOMuKLi";
        // line 844
        echo "hNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"131\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/improve/design/themes?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/design/mail_theme/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 电子邮件主题
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/design/cms-pages/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 网页
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-";
        // line 875
        echo "submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/design/modules/positions/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 位置
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminImages&amp;token=5f3289a0ed59efa36ec060e57e90390b\" class=\"link\"> 图像设置
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/link-widget/list?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 链接列表
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCarriers&amp;token=40e48b4cd66d1fd15661727ba7f7eee8\" class=\"link\">
                      <i class=\"material-icons mi-";
        // line 904
        echo "local_shipping\">local_shipping</i>
                      <span>
                      配送
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminCarriers&amp;token=40e48b4cd66d1fd15661727ba7f7eee8\" class=\"link\"> 货运商
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/shipping/preferences/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 选项
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin927jijhdjzkzyjny";
        // line 936
        echo "lkn/index.php/improve/payment/payment_methods?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      付款
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/payment/payment_methods?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 付款方法
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/payment/preferences?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 选项
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                 ";
        // line 968
        echo " <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/international/localization/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      国际
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/international/localization/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 本地化
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/international/zones/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 地点
                                </a>
                              </li>

                                                                                  
                              
                 ";
        // line 997
        echo "                                           
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/international/taxes/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 税
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/improve/international/translations/settings?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 翻译
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"151\" id=\"subtab-Marketing\">
                    <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=9eee31c3af3a7760264718c2a1dad2d8\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      商场
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                 ";
        // line 1027
        echo "             <ul id=\"collapse-151\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=9eee31c3af3a7760264718c2a1dad2d8\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminPsfacebookModule&amp;token=103729110fd771d488cc1fa67d013b0d\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">配置</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/pseditionbasic/settings?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57x";
        // line 1061
        echo "nerc_U\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/shop/preferences/preferences?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      商店的参数
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/shop/preferences/preferences?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 一般
                                </a>
             ";
        // line 1092
        echo "                 </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/shop/order-preferences/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 订单设置
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/shop/product-preferences/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/shop/customer-preferences/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 客户设置
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=";
        // line 1122
        echo "\"/admin927jijhdjzkzyjnylkn/index.php/configure/shop/contacts/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 联系我们
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/shop/seo-urls/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 流量&amp;SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminSearchConf&amp;token=4c7072e2859083e2b1c2830a78a7526f\" class=\"link\"> 搜索
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/system-information/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
           ";
        // line 1152
        echo "           高级参数
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/system-information/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 信息
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/performance/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 性能
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/administration/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 行政
                                <";
        // line 1180
        echo "/a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/emails/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/import/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 上传
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/employees/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Employees
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configu";
        // line 1211
        echo "re/advanced/sql-requests/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 数据库
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/logs/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 日志
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/webservice-keys/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Web服务
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/feature-flags/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> 新功能和试验性功能
                                </a>
                              </li>

                                       ";
        // line 1239
        echo "                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin927jijhdjzkzyjnylkn/index.php/configure/advanced/security/?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://prestashop.wojiataotao.com/admin927jijhdjzkzyjnylkn/index.php?controller=AdminKlaviyoPsConfig&amp;token=a92ccbf9ea87618f4c7bbb60f27f986a\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"129\" id=\"tab-AdminPsdistributionapiclientCommunity\">
                <span class=\"title\">Community</span>
            </li>

                              
                  
                                                      
             ";
        // line 1277
        echo "     
                  <li class=\"link-levelone\" data-submenu=\"130\" id=\"subtab-AdminPsdistributionapiclient\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/ps_distributionapiclient/top-contributors?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"link\">
                      <i class=\"material-icons mi-groups\">groups</i>
                      <span>
                      Wall of Fame
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Customization</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/improve/design/themes?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" aria-current=\"page\">Themes</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Themes          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/zh/doc/AdminPsxDesignThemeGeneral?version=8.2.3&amp;country=zh\" title=\"帮助\">
                  帮助
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-hea";
        // line 1336
        echo "d-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/improve/design/themes?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab active current\" data-submenu=\"132\">
                      Themes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/improve/design/logos?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" id=\"subtab-AdminPsxDesignLogos\" class=\"nav-link tab \" data-submenu=\"133\">
                      Logos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
          ";
        // line 1354
        echo "                                                      <li class=\"nav-item\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/improve/design/colors?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" id=\"subtab-AdminPsxDesignColors\" class=\"nav-link tab \" data-submenu=\"134\">
                      Colors
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/improve/design/fonts?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"135\">
                      Fonts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ";
        // line 1370
        echo "                                                                                                                               </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/zh/doc/AdminPsxDesignThemeGeneral?version=8.2.3&amp;country=zh\" title=\"帮助\">
              帮助
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1401
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>哦，不！</h1>
  <p class=\"mt-3\">
    此页面的该模块版本暂时还没有。
  </p>
  <p class=\"mt-2\">
    请使用桌面电脑来进入该页面，知道它被调试好可以在手机上使用。
  </p>
  <p class=\"mt-2\">
    谢谢。
  </p>
  <a href=\"/admin927jijhdjzkzyjnylkn/index.php/modules/pseditionbasic/homepage?_token=nc6OmcOGtptFOMuKLihNX8baoEohv-rj8X57xnerc_U\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    返回
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1435
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 124
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1401
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1435
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__1d0ddb7b80a9d61c0c33a8686d015e06ccf536a741cef09a5ab24204acea403e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1616 => 1435,  1595 => 1401,  1584 => 124,  1575 => 1435,  1535 => 1401,  1502 => 1370,  1484 => 1354,  1464 => 1336,  1403 => 1277,  1363 => 1239,  1333 => 1211,  1300 => 1180,  1270 => 1152,  1238 => 1122,  1206 => 1092,  1173 => 1061,  1137 => 1027,  1105 => 997,  1074 => 968,  1040 => 936,  1006 => 904,  975 => 875,  942 => 844,  913 => 817,  883 => 789,  846 => 754,  813 => 723,  782 => 694,  747 => 661,  717 => 633,  686 => 604,  652 => 572,  619 => 541,  579 => 503,  532 => 458,  512 => 440,  458 => 388,  410 => 342,  362 => 296,  315 => 251,  276 => 214,  257 => 197,  216 => 158,  177 => 124,  141 => 90,  121 => 72,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1d0ddb7b80a9d61c0c33a8686d015e06ccf536a741cef09a5ab24204acea403e", "");
    }
}
