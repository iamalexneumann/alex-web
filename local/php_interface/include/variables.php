<?php
$siteparam_main_logo = CFile::GetPath(\COption::GetOptionString( 'askaron.settings', 'UF_MAIN_LOGO') ?? '');
$siteparam_main_phone = \COption::GetOptionString( 'askaron.settings', 'UF_MAIN_PHONE') ?? '';
$siteparam_whatsapp_number = \COption::GetOptionString( 'askaron.settings', 'UF_WHATSAPP_NUMBER') ?? '';
$siteparam_whatsapp_message = convert_space_to_url_code(\COption::GetOptionString( 'askaron.settings', 'UF_WHATSAPP_MESSAGE') ?? '');
$siteparam_telegram_link = \COption::GetOptionString( 'askaron.settings', 'UF_TELEGRAM_LINK') ?? '';
$siteparam_main_email = \COption::GetOptionString( 'askaron.settings', 'UF_MAIN_EMAIL') ?? '';
$siteparam_main_address = \COption::GetOptionString( 'askaron.settings', 'UF_MAIN_ADDRESS') ?? '';
$siteparam_schedule = \COption::GetOptionString( 'askaron.settings', 'UF_SCHEDULE') ?? '';

$siteparam_scripts_head = \COption::GetOptionString( 'askaron.settings', 'UF_SCRIPTS_HEAD') ?? '';
$siteparam_scripts_body_before = \COption::GetOptionString( 'askaron.settings', 'UF_SCRIPTS_BODY_BEFORE') ?? '';
$siteparam_scripts_body_after = \COption::GetOptionString( 'askaron.settings', 'UF_SCRIPTS_BODY_AFTER') ?? '';

$siteparam_main_phone_tel = get_tel_from_phone($siteparam_main_phone);
$siteparam_whatsapp_number_tel = get_tel_from_phone($siteparam_whatsapp_number);

$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();