<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class MyTaxOverride extends Module
{
    public function __construct()
    {
        $this->name = 'mytaxoverride';
        $this->tab = 'pricing_promotion';
        $this->version = '1.0.0';
        $this->author = 'ChatGPT';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Order Tax Group Modifier');
        $this->description = $this->l('Modify tax rules group for order details when an order is created.');
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('actionValidateOrder')
            && $this->registerHook('actionObjectOrderDetailAddBefore');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookActionValidateOrder($params)
    {
        return 1;
    }

    public function hookActionObjectOrderDetailAddBefore($params)
    {
        /** @var OrderDetail $detail */
        $detail = $params['object'];

        if (empty($detail->id_order)) {
            return;
        }

        $order = new Order((int)$detail->id_order);
        $newTaxGroup = $this->getTaxGroupByCustomer((int)$order->id_customer);

        if ($newTaxGroup) {
            $detail->id_tax_rules_group = $newTaxGroup;
        }
    }

    protected function getTaxGroupByCustomer($customerId)
    {
        // ⚙️ 在这里定义你的规则
        $map = [
            5 => 6,  // 用户ID=5 -> 税率组6
            8 => 2,  // 用户ID=8 -> 税率组2
            // 你可以继续添加更多规则
        ];

        return $map[$customerId] ?? null;
    }
}