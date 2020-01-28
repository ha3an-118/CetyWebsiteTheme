<?php
//theme customizer
require_once(get_template_directory() . '/inc/WpCustomizerBuilder.php');

//front page slogan title
(new WpCusomizerBuilder())
    ->AddPanel(CustomizerFrontPagePanelId, __(CustomizerFrontPagePanelTitle, CetyWebsiteThemeTextDomain))
    ->AddSection(CustomizerFrontPageSloganSectionId, __(CustomizerFrontPageSloganSectionTitle, CetyWebsiteThemeTextDomain))
    ->AddSetting(FrontPageCustomizeSloganTitleSettingId, __(FrontPageCustomizeSloganTitleSettingDefault, CetyWebsiteThemeTextDomain), 'postMessage')
    ->AddSelectiveRefresh('#' . FrontPageCustomizeSloganTitleSettingId, function () {
        echo get_theme_mod(FrontPageCustomizeSloganTitleSettingId);
    })
    ->AddCustomizeControl(FrontPageCustomizeSloganTitleControlId, __(FrontPageCustomizeSloganTitleControlLabel, CetyWebsiteThemeTextDomain))
    ->Build();


//front page slogan content
(new WpCusomizerBuilder())
    ->AddPanel(CustomizerFrontPagePanelId, __(CustomizerFrontPagePanelTitle, CetyWebsiteThemeTextDomain))
    ->AddSection(CustomizerFrontPageSloganSectionId, __(CustomizerFrontPageSloganSectionTitle, CetyWebsiteThemeTextDomain))
    ->AddSetting(FrontPageCustomizeSloganContentSettingId, __(FrontPageCustomizeSloganContentSettingDefault, CetyWebsiteThemeTextDomain), 'postMessage')
    ->AddSelectiveRefresh('#' . FrontPageCustomizeSloganContentSettingId, function () {
        echo get_theme_mod(FrontPageCustomizeSloganContentSettingId);
    })
    ->AddCustomizeControl(FrontPageCustomizeSloganContentControlId, __(FrontPageCustomizeSloganContentControlLabel, CetyWebsiteThemeTextDomain), 'textarea')
    ->Build();


//front page order button title
(new WpCusomizerBuilder())
    ->AddPanel(CustomizerFrontPagePanelId, __(CustomizerFrontPagePanelTitle, CetyWebsiteThemeTextDomain))
    ->AddSection(CustomizerFrontPageOrderButtonSectionId, __(CustomizerFrontPageOrderButtonSectionTitle, CetyWebsiteThemeTextDomain))
    ->AddSetting(FrontPageCustomizeOrderButtonTitleSettingId, __(FrontPageCustomizeOrderButtonTitleSettingDefault, CetyWebsiteThemeTextDomain), 'postMessage')
    ->AddSelectiveRefresh('#' . FrontPageCustomizeOrderButtonTitleSettingId, function () {
        echo get_theme_mod(FrontPageCustomizeOrderButtonTitleSettingId);
    })
    ->AddCustomizeControl(FrontPageCustomizeOrderButtonTitleControlId, __(FrontPageCustomizeOrderButtonTitleControlLabel, CetyWebsiteThemeTextDomain))
    ->Build();


//front page order button link
(new WpCusomizerBuilder())
    ->AddPanel(CustomizerFrontPagePanelId, __(CustomizerFrontPagePanelTitle, CetyWebsiteThemeTextDomain))
    ->AddSection(CustomizerFrontPageOrderButtonSectionId, __(CustomizerFrontPageOrderButtonSectionTitle, CetyWebsiteThemeTextDomain))
    ->AddSetting(FrontPageCustomizeOrderButtonLinkSettingId, null, 'postMessage')
    ->AddSelectiveRefresh('#' . FrontPageCustomizeOrderButtonLinkSettingId, function () {
        echo get_theme_mod(FrontPageCustomizeOrderButtonLinkSettingId);
    })
    ->AddCustomizeControl(FrontPageCustomizeOrderButtonLinkControlId, __(FrontPageCustomizeOrderButtonLinkControlLabel, CetyWebsiteThemeTextDomain), 'dropdown-pages')
    ->Build();


//front page phone number
(new WpCusomizerBuilder())
    ->AddPanel(CustomizerFrontPagePanelId, __(CustomizerFrontPagePanelTitle, CetyWebsiteThemeTextDomain))
    ->AddSection(CustomizerFrontPagePhoneNumberSectionId, __(CustomizerFrontPagePhoneNumberSectionTitle, CetyWebsiteThemeTextDomain))
    ->AddSetting(FrontPageCustomizePhoneNumberSettingId, __(FrontPageCustomizePhoneNumberSettingDefault, CetyWebsiteThemeTextDomain), 'postMessage')
    ->AddSelectiveRefresh('#' . FrontPageCustomizePhoneNumberSettingId, function () {
        echo get_theme_mod(FrontPageCustomizePhoneNumberSettingId);
    })
    ->AddCustomizeControl(FrontPageCustomizePhoneNumberControlId, __(FrontPageCustomizePhoneNumberControlLabel, CetyWebsiteThemeTextDomain))
    ->Build();
