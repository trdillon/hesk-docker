<?php
// Settings file for HESK 3.4.5

// ==> GENERAL

// --> General settings
$hesk_settings['site_title'] = getenv('HESK_SITE_TITLE') ?: 'Website';
$hesk_settings['site_url'] = getenv('HESK_SITE_URL') ?: 'http://www.example.com';
$hesk_settings['hesk_title'] = getenv('HESK_TITLE') ?: 'Help Desk';
$hesk_settings['hesk_url'] = getenv('HESK_URL') ?: 'http://www.example.com/helpdesk';
$hesk_settings['webmaster_mail'] = getenv('HESK_WEBMASTER_MAIL') ?: 'support@example.com';
$hesk_settings['site_theme'] = getenv('HESK_SITE_THEME') ?: 'hesk3';
$hesk_settings['admin_css'] = getenv('HESK_ADMIN_CSS') ?: 0;
$hesk_settings['admin_css_url'] = getenv('HESK_ADMIN_CSS_URL') ?: 'https://www.example.com/hesk-style.css';

// --> Language settings
$hesk_settings['can_sel_lang'] = getenv('HESK_CAN_SEL_LANG') ?: 0;
$hesk_settings['language'] = getenv('HESK_LANGUAGE') ?: 'English';
$hesk_settings['languages'] = array(
    'English' => array('folder' => 'en', 'hr' => '------ Reply above this line ------'),
);

// --> Database settings
$hesk_settings['db_host'] = getenv('HESK_DB_HOST') ?: 'localhost';
$hesk_settings['db_name'] = getenv('HESK_DB_NAME') ?: 'hesk';
$hesk_settings['db_user'] = getenv('HESK_DB_USER') ?: 'test';
$hesk_settings['db_pass'] = getenv('HESK_DB_PASS') ?: 'test';
$hesk_settings['db_pfix'] = getenv('HESK_DB_PFIX') ?: 'hesk_';

// ==> HELP DESK

// --> Help desk settings
$hesk_settings['admin_dir'] = getenv('HESK_ADMIN_DIR') ?: 'admin';
$hesk_settings['attach_dir'] = getenv('HESK_ATTACH_DIR') ?: 'attachments';
$hesk_settings['cache_dir'] = getenv('HESK_CACHE_DIR') ?: 'cache';
$hesk_settings['max_listings'] = getenv('HESK_MAX_LISTINGS') ?: 20;
$hesk_settings['print_font_size'] = getenv('HESK_PRINT_FONT_SIZE') ?: 12;
$hesk_settings['autoclose'] = getenv('HESK_AUTOCLOSE') ?: 0;
$hesk_settings['max_open'] = getenv('HESK_MAX_OPEN') ?: 0;
$hesk_settings['due_soon'] = getenv('HESK_DUE_SOON') ?: 7;
$hesk_settings['new_top'] = getenv('HESK_NEW_TOP') ?: 0;
$hesk_settings['reply_top'] = getenv('HESK_REPLY_TOP') ?: 0;
$hesk_settings['hide_replies'] = getenv('HESK_HIDE_REPLIES') ?: 0;
$hesk_settings['limit_width'] = getenv('HESK_LIMIT_WIDTH') ?: 800;

// --> Features
$hesk_settings['autologin'] = getenv('HESK_AUTOLOGIN') ?: 1;
$hesk_settings['autoassign'] = getenv('HESK_AUTOASSIGN') ?: 1;
$hesk_settings['require_email'] = getenv('HESK_REQUIRE_EMAIL') ?: 1;
$hesk_settings['require_owner'] = getenv('HESK_REQUIRE_OWNER') ?: 0;
$hesk_settings['require_subject'] = getenv('HESK_REQUIRE_SUBJECT') ?: 1;
$hesk_settings['require_message'] = getenv('HESK_REQUIRE_MESSAGE') ?: 1;
$hesk_settings['custclose'] = getenv('HESK_CUSTCLOSE') ?: 1;
$hesk_settings['custopen'] = getenv('HESK_CUSTOPEN') ?: 1;
$hesk_settings['rating'] = getenv('HESK_RATING') ?: 1;
$hesk_settings['cust_urgency'] = getenv('HESK_CUST_URGENCY') ?: 1;
$hesk_settings['sequential'] = getenv('HESK_SEQUENTIAL') ?: 1;
$hesk_settings['time_worked'] = getenv('HESK_TIME_WORKED') ?: 1;
$hesk_settings['spam_notice'] = getenv('HESK_SPAM_NOTICE') ?: 1;
$hesk_settings['list_users'] = getenv('HESK_LIST_USERS') ?: 0;
$hesk_settings['debug_mode'] = getenv('HESK_DEBUG_MODE') ?: 1;
$hesk_settings['short_link'] = getenv('HESK_SHORT_LINK') ?: 0;
$hesk_settings['select_cat'] = getenv('HESK_SELECT_CAT') ?: 0;
$hesk_settings['select_pri'] = getenv('HESK_SELECT_PRI') ?: 0;
$hesk_settings['cat_show_select'] = getenv('HESK_CAT_SHOW_SELECT') ?: 15;
$hesk_settings['staff_ticket_formatting'] = getenv('HESK_STAFF_TICKET_FORMATTING') ?: 0;

// --> SPAM Prevention
$hesk_settings['secimg_use'] = getenv('HESK_SECIMG_USE') ?: 1;
$hesk_settings['secimg_sum'] = getenv('HESK_SECIMG_SUM') ?: '13N4BRS4WW';
$hesk_settings['recaptcha_use'] = getenv('HESK_RECAPTCHA_USE') ?: 0;
$hesk_settings['recaptcha_public_key'] = getenv('HESK_RECAPTCHA_PUBLIC_KEY') ?: '';
$hesk_settings['recaptcha_private_key'] = getenv('HESK_RECAPTCHA_PRIVATE_KEY') ?: '';
$hesk_settings['question_use'] = getenv('HESK_QUESTION_USE') ?: 0;
$hesk_settings['question_ask'] = getenv('HESK_QUESTION_ASK') ?: 'Type <i>PB6YM</i> here to fight SPAM:';
$hesk_settings['question_ans'] = getenv('HESK_QUESTION_ANS') ?: 'PB6YM';

// --> Security
$hesk_settings['attempt_limit'] = getenv('HESK_ATTEMPT_LIMIT') ?: 6;
$hesk_settings['attempt_banmin'] = getenv('HESK_ATTEMPT_BANMIN') ?: 60;
$hesk_settings['flood'] = getenv('HESK_FLOOD') ?: 3;
$hesk_settings['reset_pass'] = getenv('HESK_RESET_PASS') ?: 1;
$hesk_settings['email_view_ticket'] = getenv('HESK_EMAIL_VIEW_TICKET') ?: 1;
$hesk_settings['x_frame_opt'] = getenv('HESK_X_FRAME_OPT') ?: 1;
$hesk_settings['samesite'] = getenv('HESK_SAMESITE') ?: 'Lax';
$hesk_settings['force_ssl'] = getenv('HESK_FORCE_SSL') ?: 0;
$hesk_settings['url_key'] = getenv('HESK_URL_KEY') ?: '';
$hesk_settings['require_mfa'] = getenv('HESK_REQUIRE_MFA') ?: 0;
$hesk_settings['elevator_duration'] = getenv('HESK_ELEVATOR_DURATION') ?: '60M';

// --> Attachments
$hesk_settings['attachments'] = array(
    'use' => getenv('HESK_ATTACHMENTS_USE') ?: 1,
    'max_number' => getenv('HESK_ATTACHMENTS_MAX_NUMBER') ?: 2,
    'max_size' => getenv('HESK_ATTACHMENTS_MAX_SIZE') ?: 2097152,
    'allowed_types' => array('.gif','.jpg','.png','.zip','.rar','.csv','.doc','.docx','.xls','.xlsx','.txt','.pdf')
);

// ==> KNOWLEDGEBASE

// --> Knowledgebase settings
$hesk_settings['kb_enable'] = getenv('HESK_KB_ENABLE') ?: 1;
$hesk_settings['kb_wysiwyg'] = getenv('HESK_KB_WYSIWYG') ?: 1;
$hesk_settings['kb_search'] = getenv('HESK_KB_SEARCH') ?: 2;
$hesk_settings['kb_search_limit'] = getenv('HESK_KB_SEARCH_LIMIT') ?: 10;
$hesk_settings['kb_views'] = getenv('HESK_KB_VIEWS') ?: 0;
$hesk_settings['kb_date'] = getenv('HESK_KB_DATE') ?: 0;
$hesk_settings['kb_recommendanswers'] = getenv('HESK_KB_RECOMMENDANSWERS') ?: 1;
$hesk_settings['kb_rating'] = getenv('HESK_KB_RATING') ?: 1;
$hesk_settings['kb_substrart'] = getenv('HESK_KB_SUBSTRART') ?: 200;
$hesk_settings['kb_cols'] = getenv('HESK_KB_COLS') ?: 2;
$hesk_settings['kb_numshow'] = getenv('HESK_KB_NUMSHOW') ?: 3;
$hesk_settings['kb_popart'] = getenv('HESK_KB_POPART') ?: 6;
$hesk_settings['kb_latest'] = getenv('HESK_KB_LATEST') ?: 6;
$hesk_settings['kb_index_popart'] = getenv('HESK_KB_INDEX_POPART') ?: 6;
$hesk_settings['kb_index_latest'] = getenv('HESK_KB_INDEX_LATEST') ?: 0;
$hesk_settings['kb_related'] = getenv('HESK_KB_RELATED') ?: 5;

// ==> EMAIL

// --> Email sending
$hesk_settings['noreply_mail'] = getenv('HESK_NOREPLY_MAIL') ?: 'support@example.com';
$hesk_settings['noreply_name'] = getenv('HESK_NOREPLY_NAME') ?: 'Help Desk';
$hesk_settings['email_formatting'] = getenv('HESK_EMAIL_FORMATTING') ?: 3;
$hesk_settings['smtp'] = getenv('HESK_SMTP') ?: 0;
$hesk_settings['smtp_host_name'] = getenv('HESK_SMTP_HOST_NAME') ?: 'mail.example.com';
$hesk_settings['smtp_host_port'] = getenv('HESK_SMTP_HOST_PORT') ?: 587;
$hesk_settings['smtp_timeout'] = getenv('HESK_SMTP_TIMEOUT') ?: 20;
$hesk_settings['smtp_enc'] = getenv('HESK_SMTP_ENC') ?: 'tls';
$hesk_settings['smtp_noval_cert'] = getenv('HESK_SMTP_NOVAL_CERT') ?: 0;
$hesk_settings['smtp_user'] = getenv('HESK_SMTP_USER') ?: '';
$hesk_settings['smtp_password'] = getenv('HESK_SMTP_PASSWORD') ?: '';
$hesk_settings['smtp_conn_type'] = getenv('HESK_SMTP_CONN_TYPE') ?: 'basic';
$hesk_settings['smtp_oauth_provider'] = getenv('HESK_SMTP_OAUTH_PROVIDER') ?: 0;

// --> Email piping
$hesk_settings['email_piping'] = getenv('HESK_EMAIL_PIPING') ?: 0;

// --> IMAP Fetching
$hesk_settings['imap'] = getenv('HESK_IMAP') ?: 0;
$hesk_settings['imap_job_wait'] = getenv('HESK_IMAP_JOB_WAIT') ?: 15;
$hesk_settings['imap_host_name'] = getenv('HESK_IMAP_HOST_NAME') ?: 'mail.example.com';
$hesk_settings['imap_host_port'] = getenv('HESK_IMAP_HOST_PORT') ?: 993;
$hesk_settings['imap_enc'] = getenv('HESK_IMAP_ENC') ?: 'ssl';
$hesk_settings['imap_noval_cert'] = getenv('HESK_IMAP_NOVAL_CERT') ?: 0;
$hesk_settings['imap_keep'] = getenv('HESK_IMAP_KEEP') ?: 0;
$hesk_settings['imap_user'] = getenv('HESK_IMAP_USER') ?: '';
$hesk_settings['imap_password'] = getenv('HESK_IMAP_PASSWORD') ?: '';
$hesk_settings['imap_conn_type'] = getenv('HESK_IMAP_CONN_TYPE') ?: 'basic';
$hesk_settings['imap_oauth_provider'] = getenv('HESK_IMAP_OAUTH_PROVIDER') ?: 0;

// --> POP3 Fetching
$hesk_settings['pop3'] = getenv('HESK_POP3') ?: 0;
$hesk_settings['pop3_job_wait'] = getenv('HESK_POP3_JOB_WAIT') ?: 15;
$hesk_settings['pop3_host_name'] = getenv('HESK_POP3_HOST_NAME') ?: 'mail.example.com';
$hesk_settings['pop3_host_port'] = getenv('HESK_POP3_HOST_PORT') ?: 110;
$hesk_settings['pop3_tls'] = getenv('HESK_POP3_TLS') ?: 0;
$hesk_settings['pop3_keep'] = getenv('HESK_POP3_KEEP') ?: 0;
$hesk_settings['pop3_user'] = getenv('HESK_POP3_USER') ?: '';
$hesk_settings['pop3_password'] = getenv('HESK_POP3_PASSWORD') ?: '';
$hesk_settings['pop3_conn_type'] = getenv('HESK_POP3_CONN_TYPE') ?: 'basic';
$hesk_settings['pop3_oauth_provider'] = getenv('HESK_POP3_OAUTH_PROVIDER') ?: 0;

$hesk_settings['strip_quoted'] = getenv('HESK_STRIP_QUOTED') ?: 1;
$hesk_settings['eml_req_msg'] = getenv('HESK_EML_REQ_MSG') ?: 0;
$hesk_settings['save_embedded'] = getenv('HESK_SAVE_EMBEDDED') ?: 1;

// --> Ignore emails
$hesk_settings['pipe_block_noreply'] = getenv('HESK_PIPE_BLOCK_NOREPLY') ?: 1;
$hesk_settings['pipe_block_returned'] = getenv('HESK_PIPE_BLOCK_RETURNED') ?: 1;
$hesk_settings['pipe_block_duplicate'] = getenv('HESK_PIPE_BLOCK_DUPLICATE') ?: 1;
$hesk_settings['loop_hits'] = getenv('HESK_LOOP_HITS') ?: 5;
$hesk_settings['loop_time'] = getenv('HESK_LOOP_TIME') ?: 300;

// --> Detect email typos
$hesk_settings['detect_typos'] = getenv('HESK_DETECT_TYPOS') ?: 1;
$hesk_settings['email_providers'] = array(
    'aim.com','aol.co.uk','aol.com','att.net','bellsouth.net','blueyonder.co.uk','bt.com','btinternet.com','btopenworld.com',
    'charter.net','comcast.net','cox.net','earthlink.net','email.com','facebook.com','fastmail.fm','free.fr','freeserve.co.uk',
    'gmail.com','gmx.at','gmx.ch','gmx.com','gmx.de','gmx.fr','gmx.net','gmx.us','googlemail.com','hotmail.be','hotmail.co.uk',
    'hotmail.com','hotmail.com.ar','hotmail.com.mx','hotmail.de','hotmail.es','hotmail.fr','hushmail.com','icloud.com','inbox.com',
    'laposte.net','lavabit.com','list.ru','live.be','live.co.uk','live.com','live.com.ar','live.com.mx','live.de','live.fr','love.com',
    'lycos.com','mac.com','mail.com','mail.ru','me.com','msn.com','nate.com','naver.com','neuf.fr','ntlworld.com','o2.co.uk','online.de',
    'orange.fr','orange.net','outlook.com','pobox.com','prodigy.net.mx','qq.com','rambler.ru','rocketmail.com','safe-mail.net','sbcglobal.net',
    't-online.de','talktalk.co.uk','tiscali.co.uk','verizon.net','virgin.net','virginmedia.com','wanadoo.co.uk','wanadoo.fr','yahoo.co.id',
    'yahoo.co.in','yahoo.co.jp','yahoo.co.kr','yahoo.co.uk','yahoo.com','yahoo.com.ar','yahoo.com.mx','yahoo.com.ph','yahoo.com.sg','yahoo.de',
    'yahoo.fr','yandex.com','yandex.ru','ymail.com'
);

// --> Notify customer when
$hesk_settings['notify_new'] = getenv('HESK_NOTIFY_NEW') ?: 1;
$hesk_settings['notify_skip_spam'] = getenv('HESK_NOTIFY_SKIP_SPAM') ?: 1;
$hesk_settings['notify_spam_tags'] = array('Spam?}','***SPAM***','[SPAM]','SPAM-LOW:','SPAM-MED:');
$hesk_settings['notify_closed'] = getenv('HESK_NOTIFY_CLOSED') ?: 1;

// --> Other
$hesk_settings['multi_eml'] = getenv('HESK_MULTI_EML') ?: 0;
$hesk_settings['confirm_email'] = getenv('HESK_CONFIRM_EMAIL') ?: 0;
$hesk_settings['open_only'] = getenv('HESK_OPEN_ONLY') ?: 1;

// ==> TICKET LIST

$hesk_settings['ticket_list'] = array('trackid','lastchange','name','subject','status','lastreplier');

// --> Other
$hesk_settings['submittedformat'] = getenv('HESK_SUBMITTEDFORMAT') ?: 2;
$hesk_settings['updatedformat'] = getenv('HESK_UPDATEDFORMAT') ?: 2;
$hesk_settings['format_submitted'] = getenv('HESK_FORMAT_SUBMITTED') ?: 'Y-m-d g:i a';
$hesk_settings['format_updated'] = getenv('HESK_FORMAT_UPDATED') ?: 'Y-m-d g:i a';

// ==> MISC

// --> Date & Time
$hesk_settings['timezone'] = getenv('HESK_TIMEZONE') ?: 'UTC';
$hesk_settings['format_time'] = getenv('HESK_FORMAT_TIME') ?: 'H:i:s';
$hesk_settings['format_date'] = getenv('HESK_FORMAT_DATE') ?: 'Y-m-d';
$hesk_settings['format_timestamp'] = getenv('HESK_FORMAT_TIMESTAMP') ?: 'Y-m-d H:i:s';
$hesk_settings['time_display'] = getenv('HESK_TIME_DISPLAY') ?: 1;
$hesk_settings['format_datepicker_js'] = getenv('HESK_FORMAT_DATEPICKER_JS') ?: 'dd/mm/yyyy';
$hesk_settings['format_datepicker_php'] = getenv('HESK_FORMAT_DATEPICKER_PHP') ?: 'd/m/Y';

// --> Other
$hesk_settings['ip_whois'] = getenv('HESK_IP_WHOIS') ?: 'https://whois.domaintools.com/{IP}';
$hesk_settings['maintenance_mode'] = getenv('HESK_MAINTENANCE_MODE') ?: 0;
$hesk_settings['alink'] = getenv('HESK_ALINK') ?: 1;
$hesk_settings['submit_notice'] = getenv('HESK_SUBMIT_NOTICE') ?: 0;
$hesk_settings['online'] = getenv('HESK_ONLINE') ?: 0;
$hesk_settings['online_min'] = getenv('HESK_ONLINE_MIN') ?: 10;
$hesk_settings['check_updates'] = getenv('HESK_CHECK_UPDATES') ?: 1;

#############################
#     DO NOT EDIT BELOW     #
#############################
$hesk_settings['hesk_version'] = '3.4.5';
if ($hesk_settings['debug_mode']) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}
if (!defined('IN_SCRIPT')) {
    die('Invalid attempt!');
}
?>
