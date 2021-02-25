<?php return array (
  'admin.hostedContexts' => 'Hosted Journals',
  'admin.settings.appearance.success' => 'The site appearance settings have been successfully updated.',
  'admin.settings.config.success' => 'The site configuration settings have been successfully updated.',
  'admin.settings.info.success' => 'The site information has been successfully updated.',
  'admin.settings.redirect' => 'Journal redirect',
  'admin.settings.redirectInstructions' => 'Requests to the main site will be redirected to this journal. This may be useful if the site is hosting only a single journal, for example.',
  'admin.settings.defaultMetricDescription' => '
		Your OJS installation is configured to record more than one usage metric. Usage statistics will be displayed in several contexts.
		There are cases where a single usage statistic must be used, e.g. to display an ordered list of most-used articles or to rank
		search results. Please select one of the configured metrics as a default.
	',
  'admin.languages.confirmDisable' => 'Are you sure you want to disable this locale? This may affect any hosted journals currently using the locale.',
  'admin.languages.downloadUnavailable' => '<p>Downloading language packs from the Public Knowledge Project web server is not currently available because:</p>
	<ul>
		<li>Your server does not have or allow execution of the GNU "tar" utility.</li>
		<li>OJS is unable to modify the locale registry file, typically "registry/locales.xml".</li>
	</ul>
<p>Language packs can be manually downloaded from the <a href="http://pkp.sfu.ca">PKP web site</a>.</p>',
  'admin.languages.primaryLocaleInstructions' => 'This will be the default language for the site and any hosted journals.',
  'admin.languages.supportedLocalesInstructions' => 'Select all locales to support on the site. The selected locales will be available for use by all journals hosted on the site, and also appear in a language select menu to appear on each site page (which can be overridden on journal-specific pages). If multiple locales are not selected, the language toggle menu will not appear and extended language settings will not be available to journals.',
  'admin.locale.maybeIncomplete' => 'Marked locales may be incomplete.',
  'admin.languages.confirmUninstall' => 'Are you sure you want to uninstall this locale? This may affect any hosted journals currently using the locale.',
  'admin.languages.installNewLocalesInstructions' => 'Select any additional locales to install support for in this system. Locales must be installed before they can be used by hosted journals. See the OJS documentation for information on adding support for new languages.',
  'admin.languages.downloadFailed' => 'The locale download failed. The error message(s) below describe the failure.',
  'admin.languages.localeInstalled' => 'The "{$locale}" locale has been installed.',
  'admin.languages.download' => 'Download Locale',
  'admin.languages.download.cannotOpen' => 'Cannot open language descriptor from PKP web site.',
  'admin.languages.download.cannotModifyRegistry' => 'Cannot add the new locale to the locale registry file, typically "registry/locales.xml".',
  'admin.auth.ojs' => 'OJS User Database',
  'admin.auth.enableSyncProfiles' => 'Enable user profile synchronization (if supported by this authentication plugin). User profile information will be automatically updated from the remote source when a user logs in, and profile changes (including password changes) made within OJS will be automatically updated on the remote source. If this option is not enabled OJS profile information will be kept separate from remote source profile information.',
  'admin.auth.enableSyncPasswords' => 'Enable user password modification (if supported by this authentication plugin). Enabling this option allows users to modify their password from within OJS and to use the OJS "lost password" feature to reset a forgotten password. These functions will be unavailable to users with this authentication source if this option is not enabled.',
  'admin.auth.enableCreateUsers' => 'Enable user creation (if supported by this authentication plugin). Users created within OJS with this authentication source will be automatically added to the remote authentication source if they do not already exist. Additionally, if this source is the default authentication source, OJS accounts created through user registration will also be added to the remote authentication source.',
  'admin.systemVersion' => 'OJS Version',
  'admin.systemConfiguration' => 'OJS Configuration',
  'admin.systemConfigurationDescription' => 'OJS configuration settings from <tt>config.inc.php</tt>.',
  'admin.journals.createInstructions' => 'You will automatically be enrolled as the manager of this journal. After creating a new journal, you will be redirected to its settings wizard, to complete the initial journal setup.',
  'admin.journals.journalSettings' => 'Journal Settings',
  'admin.journals.noneCreated' => 'No journals have been created.',
  'admin.contexts.create' => 'Create Journal',
  'admin.journals.urlWillBe' => 'This should be a single short word or acronym that identifies the journal. The journal\'s URL will be {$sampleUrl}.',
  'admin.contexts.form.titleRequired' => 'A title is required.',
  'admin.contexts.form.pathRequired' => 'A path is required.',
  'admin.contexts.form.pathAlphaNumeric' => 'The path can only include letters, numbers and the characters _ and -. It must begin and end with a letter or number.',
  'admin.contexts.form.pathExists' => 'The path you provided is already in use by another journal.',
  'admin.contexts.form.create.success' => '{$name} was created successfully.',
  'admin.contexts.form.edit.success' => '{$name} was edited successfully.',
  'admin.journals.enableJournalInstructions' => 'Enable this journal to appear publicly on the site',
  'admin.contexts.contextDescription' => 'Journal description',
  'admin.journal.pathImportInstructions' => 'Existing journal path or path to create (e.g., "ojs").',
  'admin.journals.importSubscriptions' => 'Import subscriptions',
  'admin.journals.transcode' => 'Transcode article metadata from ISO8859-1',
  'admin.journals.redirect' => 'Generate code to map OJS 1 URLs to OJS 2 URLs',
  'admin.journals.form.importPathRequired' => 'The import path is required.',
  'admin.journals.importErrors' => 'Importing failed to complete successfully',
  'admin.mergeUsers' => 'Merge Users',
  'admin.mergeUsers.mergeUser' => 'Merge User',
  'admin.mergeUsers.into.description' => 'Select a user to whom to attribute the previous user\'s authorships, editing assignments, etc.',
  'admin.mergeUsers.from.description' => 'Select a user (or several) to merge into another user account (e.g., when someone has two user accounts). The account(s) selected first will be deleted and any submissions, assignments, etc. will be attributed to the second account.',
  'admin.mergeUsers.allUsers' => 'All Enrolled Users',
  'admin.mergeUsers.confirm' => 'Are you sure you wish to merge the selected {$oldAccountCount} account(s) into the account with the username "{$newUsername}"? The selected {$oldAccountCount} accounts will not exist afterwards. This action is not reversible.',
  'admin.mergeUsers.noneEnrolled' => 'No enrolled users.',
  'admin.scheduledTask.subscriptionExpiryReminder' => 'Subscription Expiry Reminder',
  'admin.scheduledTask.openAccessNotification' => 'Open Access Notification',
  'admin.scheduledTask.reviewReminder' => 'Review Reminder',
);