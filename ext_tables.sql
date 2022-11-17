CREATE TABLE tt_content (
    tx_altaahsimplegallerie_simplegalerieimg int(11) unsigned DEFAULT '0' NOT NULL
);
CREATE TABLE tx_altaahsimplegallerie_simplegalerieimg (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    tx_altaahsimplegallerie_simpleimg int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
