<?php

class CustomizeControlModel
{
    const Normal = 'Normal';
}

class WpCusomizerBuilder
{
    private $PanelInfo = array();
    private $SectionInfo = array();
    private $SettingInfo = array();
    private $ControlInfo = array();
    private $SelectiveRefreshPartial = array();

    function __construct()
    { }

    public function AddPanel(string $PanelId, string $PanelTitle, int $PanelPriority = null, string $PanelDescription = null)
    {
        if (!isset($PanelId) || !isset($PanelTitle))
            return $this;

        $this->PanelInfo['Id'] = $PanelId;
        $this->PanelInfo['title'] = $PanelTitle;

        if (isset($PanelPriority))
            $this->PanelInfo['priority'] = $PanelPriority;

        if (isset($PanelDescription))
            $this->PanelInfo['description'] = $PanelDescription;

        return $this;
    }

    public function AddSection(string $SectionId, string $SectionTitle, int $SectionPriority = null, string $SectionDescription = null, bool $AddToPannel = true)
    {
        if (!isset($SectionId) || !isset($SectionTitle))
            return $this;

        $this->SectionInfo['Id'] = $SectionId;
        $this->SectionInfo['title'] = $SectionTitle;

        if (isset($SectionPriority))
            $this->SectionInfo['priority'] = $SectionPriority;

        if (isset($SectionDescription))
            $this->SectionInfo['description'] = $SectionDescription;

        if ($AddToPannel && isset($this->PanelInfo['Id']))
            $this->SectionInfo['panel'] = $this->PanelInfo['Id'];

        return $this;
    }

    public function AddSetting(string $SettingId, string $SettingDefault = null, string $SettingTransport = 'refresh')
    {
        if (!isset($SettingId))
            return $this;

        $this->SettingInfo['Id'] = $SettingId;
        $this->SettingInfo['transport'] = $SettingTransport;

        if (isset($SettingDefault))
            $this->SettingInfo['default'] = $SettingDefault;

        return $this;
    }

    public function AddSelectiveRefresh(string $Selector, callable $RenderCallBack)
    {
        if (!isset($Selector) || !isset($RenderCallBack))
            return this;

        $this->SelectiveRefreshPartial['selector'] = $Selector;
        $this->SelectiveRefreshPartial['render_callback'] = $RenderCallBack;

        return $this;
    }

    public function AddCustomizeControl(string $ControlId, string $ControlLabel, string $ControlType = 'text', string $ControlDescription = null)
    {
        if (!isset($ControlId) || !isset($ControlLabel) || isset($this->ControlInfo['Id']))
            return $this;

        $this->ControlInfo['Id'] = $ControlId;
        $this->ControlInfo['label'] = $ControlLabel;
        $this->ControlInfo['type'] = $ControlType;
        $this->ControlInfo['Model'] = CustomizeControlModel::Normal;

        if (isset($ControlDescription))
            $this->ControlInfo['default'] = $ControlDescription;

        if (isset($this->SectionInfo['Id']))
            $this->ControlInfo['section'] = $this->SectionInfo['Id'];

        if (isset($this->SettingInfo['Id']))
            $this->ControlInfo['settings'] = $this->SettingInfo['Id'];

        return $this;
    }

    public function Build()
    {
        add_action('customize_register', function ($wp_customize) {
            if (isset($this->PanelInfo['Id']) && isset($this->PanelInfo['title']))
                $wp_customize->add_panel($this->PanelInfo['Id'], $this->PanelInfo);

            if (isset($this->SectionInfo['Id']) && isset($this->SectionInfo['title']))
                $wp_customize->add_section($this->SectionInfo['Id'], $this->SectionInfo);

            if (isset($this->SettingInfo['Id']))
                $wp_customize->add_setting($this->SettingInfo['Id'], $this->SettingInfo);

            if (isset($this->SelectiveRefreshPartial['selector']) && isset($this->SelectiveRefreshPartial['render_callback']))
                $wp_customize->selective_refresh->add_partial($this->SettingInfo['Id'], $this->SelectiveRefreshPartial);

            if ($this->ControlInfo['Model'] === CustomizeControlModel::Normal)
                $wp_customize->add_control(new WP_Customize_Control($wp_customize, $this->ControlInfo['Id'], $this->ControlInfo));
        });
    }
}
