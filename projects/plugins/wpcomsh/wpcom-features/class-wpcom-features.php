<?php
/**
 * THIS FILE EXISTS VERBATIM IN WPCOM AND WPCOMSH.
 *
 * DANGER DANGER DANGER!!!
 * If you make any changes to this class you must MANUALLY update this file in both WPCOM and WPCOMSH.
 *
 * @package WPCOM_Features
 */

/**
 * Map features to purchases.
 */
class WPCOM_Features {
	/*
	 * Private const for every mapped purchase.
	*/
	private const FREE_PLAN                         = 'free_plan'; // 1
	private const YOAST_PREMIUM                     = 'yoast_premium'; // 900
	private const VALUE_BUNDLE                      = 'value_bundle'; // 1003
	private const BUNDLE_PRO                        = 'bundle_pro'; // 1004
	private const BUNDLE_SUPER                      = 'bundle_super'; // 1005
	private const WPCOM_ENTERPRISE                  = 'wpcom-enterprise'; // 1007
	private const BUSINESS_BUNDLE                   = 'business-bundle'; // 1008
	private const PERSONAL_BUNDLE                   = 'personal-bundle'; // 1009
	private const BLOGGER_BUNDLE                    = 'blogger-bundle'; // 1010
	private const ECOMMERCE_BUNDLE                  = 'ecommerce-bundle'; // 1011
	private const VALUE_BUNDLE_MONTHLY              = 'value_bundle_monthly'; // 1013
	private const BUSINESS_BUNDLE_MONTHLY           = 'business-bundle-monthly'; // 1018
	private const PERSONAL_BUNDLE_MONTHLY           = 'personal-bundle-monthly'; // 1019
	private const ECOMMERCE_BUNDLE_MONTHLY          = 'ecommerce-bundle-monthly'; // 1021
	private const VALUE_BUNDLE_2Y                   = 'value_bundle-2y'; // 1023
	private const BUSINESS_BUNDLE_2Y                = 'business-bundle-2y'; // 1028
	private const PERSONAL_BUNDLE_2Y                = 'personal-bundle-2y'; // 1029
	private const BLOGGER_BUNDLE_2Y                 = 'blogger-bundle-2y'; // 1030
	private const ECOMMERCE_BUNDLE_2Y               = 'ecommerce-bundle-2y'; // 1031
	private const WP_P2_PLUS_MONTHLY                = 'wp_p2_plus_monthly'; // 1040
	private const JETPACK_PREMIUM                   = 'jetpack_premium'; // 2000
	private const JETPACK_BUSINESS                  = 'jetpack_business'; // 2001
	private const JETPACK_FREE                      = 'jetpack_free'; // 2002
	private const JETPACK_PREMIUM_MONTHLY           = 'jetpack_premium_monthly'; // 2003
	private const JETPACK_BUSINESS_MONTHLY          = 'jetpack_business_monthly'; // 2004
	private const JETPACK_PERSONAL                  = 'jetpack_personal'; // 2005
	private const JETPACK_PERSONAL_MONTHLY          = 'jetpack_personal_monthly'; // 2006
	private const JETPACK_SECURITY_DAILY            = 'jetpack_security_daily'; // 2010
	private const JETPACK_SECURITY_DAILY_MONTHLY    = 'jetpack_security_daily_monthly'; // 2011
	private const JETPACK_SECURITY_REALTIME         = 'jetpack_security_realtime'; // 2012
	private const JETPACK_SECURITY_REALTIME_MONTHLY = 'jetpack_security_realtime_monthly'; // 2013
	private const JETPACK_COMPLETE                  = 'jetpack_complete'; // 2014
	private const JETPACK_COMPLETE_MONTHLY          = 'jetpack_complete_monthly'; // 2015
	private const JETPACK_SECURITY_T1_YEARLY        = 'jetpack_security_t1_yearly'; // 2016
	private const JETPACK_SECURITY_T1_MONTHLY       = 'jetpack_security_t1_monthly'; // 2017
	private const JETPACK_SECURITY_T2_YEARLY        = 'jetpack_security_t2_yearly'; // 2019
	private const JETPACK_SECURITY_T2_MONTHLY       = 'jetpack_security_t2_monthly'; // 2020

	// WPCOM "Level 2": Groups of level 1s
	private const WPCOM_BLOGGER_PLANS   = [ self::BLOGGER_BUNDLE, self::BLOGGER_BUNDLE_2Y ];
	private const WPCOM_PERSONAL_PLANS  = [ self::PERSONAL_BUNDLE, self::PERSONAL_BUNDLE_MONTHLY, self::PERSONAL_BUNDLE_2Y ];
	private const WPCOM_PREMIUM_PLANS   = [ self::BUNDLE_PRO, self::VALUE_BUNDLE, self::VALUE_BUNDLE_MONTHLY, self::VALUE_BUNDLE_2Y ];
	private const WPCOM_BUSINESS_PLANS  = [ self::BUSINESS_BUNDLE, self::BUSINESS_BUNDLE_MONTHLY, self::BUSINESS_BUNDLE_2Y ];
	private const WPCOM_ECOMMERCE_PLANS = [ self::ECOMMERCE_BUNDLE, self::ECOMMERCE_BUNDLE_MONTHLY, self::ECOMMERCE_BUNDLE_2Y ];

	// WPCOM "Level 3": Groups of level 2s
	private const WPCOM_BLOGGER_AND_HIGHER_PLANS  = [ self::WPCOM_BLOGGER_PLANS, self::WPCOM_PERSONAL_PLANS, self::WPCOM_PREMIUM_PLANS, self::WPCOM_BUSINESS_PLANS, self::WPCOM_ECOMMERCE_PLANS ];
	private const WPCOM_PERSONAL_AND_HIGHER_PLANS = [ self::WPCOM_PERSONAL_PLANS, self::WPCOM_PREMIUM_PLANS, self::WPCOM_BUSINESS_PLANS, self::WPCOM_ECOMMERCE_PLANS ];
	private const WPCOM_PREMIUM_AND_HIGHER_PLANS  = [ self::WPCOM_PREMIUM_PLANS, self::WPCOM_BUSINESS_PLANS, self::WPCOM_ECOMMERCE_PLANS ];
	private const WPCOM_BUSINESS_AND_HIGHER_PLANS = [ self::WPCOM_BUSINESS_PLANS, self::WPCOM_ECOMMERCE_PLANS ];

	// Jetpack "Level 2": Groups of level 1s:
	private const JETPACK_BUSINESS_PLANS = [ self::JETPACK_BUSINESS, self::JETPACK_BUSINESS_MONTHLY ];
	private const JETPACK_PREMIUM_PLANS  = [ self::JETPACK_PREMIUM, self::JETPACK_PREMIUM_MONTHLY ];
	private const JETPACK_PERSONAL_PLANS = [ self::JETPACK_PERSONAL, self::JETPACK_PERSONAL_MONTHLY ];
	private const JETPACK_COMPLETE_PLANS = [ self::JETPACK_COMPLETE, self::JETPACK_COMPLETE_MONTHLY ];

	private const JETPACK_SECURITY_DAILY_PLANS    = [ self::JETPACK_SECURITY_DAILY, self::JETPACK_SECURITY_DAILY_MONTHLY ];
	private const JETPACK_SECURITY_REALTIME_PLANS = [ self::JETPACK_SECURITY_REALTIME, self::JETPACK_SECURITY_REALTIME_MONTHLY ];
	private const JETPACK_SECURITY_T1_PLANS       = [ self::JETPACK_SECURITY_T1_MONTHLY, self::JETPACK_SECURITY_T1_YEARLY ];
	private const JETPACK_SECURITY_T2_PLANS       = [ self::JETPACK_SECURITY_T2_MONTHLY, self::JETPACK_SECURITY_T2_YEARLY ];

	// Jetpack "Level 3": Groups of level 2:
	private const JETPACK_PLANS                   = [
		self::JETPACK_FREE,
		self::JETPACK_PERSONAL_PLANS,
		self::JETPACK_PREMIUM_PLANS,
		self::JETPACK_BUSINESS_PLANS,
		self::JETPACK_COMPLETE_PLANS,
		self::JETPACK_SECURITY_DAILY_PLANS,
		self::JETPACK_SECURITY_REALTIME_PLANS,
		self::JETPACK_SECURITY_T1_PLANS,
		self::JETPACK_SECURITY_T2_PLANS,
	];
	private const PAID_JETPACK_PLANS              = [
		self::JETPACK_PERSONAL_PLANS,
		self::JETPACK_PREMIUM_PLANS,
		self::JETPACK_BUSINESS_PLANS,
		self::JETPACK_COMPLETE_PLANS,
		self::JETPACK_SECURITY_DAILY_PLANS,
		self::JETPACK_SECURITY_REALTIME_PLANS,
		self::JETPACK_SECURITY_T1_PLANS,
		self::JETPACK_SECURITY_T2_PLANS,
	];
	private const PAID_JETPACK_PREMIUM_AND_HIGHER = [
		self::JETPACK_PREMIUM_PLANS,
		self::JETPACK_BUSINESS_PLANS,
		self::JETPACK_COMPLETE_PLANS,
		self::JETPACK_SECURITY_DAILY_PLANS,
		self::JETPACK_SECURITY_REALTIME_PLANS,
		self::JETPACK_SECURITY_T1_PLANS,
		self::JETPACK_SECURITY_T2_PLANS,
	];

	// get_bundle_product_ids() from wpcomstore - This is all paid plans
	const BUNDLE_PRODUCT_IDS = [
		self::BUNDLE_SUPER,
		self::WPCOM_ENTERPRISE,
		self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
		self::WP_P2_PLUS_MONTHLY,
		self::PAID_JETPACK_PLANS,
	];

	/*
	 * Public const for every mapped feature, sorted alphabetically.
	 */
	public const ADVANCED_SEO                  = 'advanced-seo';
	public const AKISMET                       = 'akismet';
	public const CALENDLY                      = 'calendly';
	public const CORE_AUDIO                    = 'core/audio';
	public const CORE_COVER                    = 'core/cover';
	public const CORE_VIDEO                    = 'core/video';
	public const CUSTOM_DESIGN                 = 'custom-design';
	public const CUSTOM_DOMAIN                 = 'custom-domain';
	public const DONATIONS                     = 'donations';
	public const FREE_BLOG                     = 'free-blog';
	public const GOOGLE_ANALYTICS              = 'google-analytics';
	public const LIVE_SUPPORT                  = 'live_support';
	public const NO_ADVERTS_NO_ADVERTS_PHP     = 'no-adverts/no-adverts.php';
	public const NO_WPCOM_BRANDING             = 'no-wpcom-branding';
	public const OPENTABLE                     = 'opentable';
	public const POLLDADDY                     = 'polldaddy';
	public const PREMIUM_CONTENT_CONTAINER     = 'premium-content/container';
	public const PREMIUM_THEMES                = 'premium-themes';
	public const PRIVATE_WHOIS                 = 'private_whois';
	public const REPUBLICIZE                   = 'republicize';
	public const SECURITY_SETTINGS             = 'security-settings';
	public const SEND_A_MESSAGE                = 'send-a-message';
	public const SET_PRIMARY_CUSTOM_DOMAIN     = 'set-primary-custom-domain';
	public const SIMPLE_PAYMENTS               = 'simple-payments';
	public const SOCIAL_PREVIEWS               = 'social-previews';
	public const SPACE                         = 'space';
	public const SUPPORT                       = 'support';
	public const UNLIMITED_THEMES              = 'unlimited_themes';
	public const UPLOAD_VIDEO_FILES            = 'upload-video-files';
	public const VAULTPRESS_AUTOMATED_RESTORES = 'vaultpress-automated-restores';
	public const VAULTPRESS_BACKUP_ARCHIVE     = 'vaultpress-backup-archive';
	public const VAULTPRESS_BACKUPS            = 'vaultpress-backups';
	public const VAULTPRESS_SECURITY_SCANNING  = 'vaultpress-security-scanning';
	public const VAULTPRESS_STORAGE_SPACE      = 'vaultpress-storage-space';
	public const VIDEO_HOSTING                 = 'video-hosting';
	public const VIDEOPRESS                    = 'videopress';
	public const WHATSAPP_BUTTON               = 'whatsapp-button';
	public const WOOP                          = 'woop';
	public const WORDADS_JETPACK               = 'wordads-jetpack';

	/*
	 * Private const array of features with sub-array of purchases that include that feature.
	 */
	private const FEATURES_MAP = array(
		self::FREE_BLOG                     => array(
			self::FREE_PLAN,
			self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
		),
		self::CUSTOM_DOMAIN                 => array(
			self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
		),
		/*
		 * Set custom domain as primary.
		 * It allows to set a custom domain of the site as primary.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Blogger plans
		 * - Personal plans
		 */
		self::SET_PRIMARY_CUSTOM_DOMAIN     => array(
			self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
			self::YOAST_PREMIUM,
		),
		self::SPACE                         => array(
			self::FREE_PLAN,
			self::WPCOM_BLOGGER_AND_HIGHER_PLANS,
			self::WP_P2_PLUS_MONTHLY,
		),
		self::NO_ADVERTS_NO_ADVERTS_PHP     => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::CUSTOM_DESIGN                 => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::VIDEOPRESS                    => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::WP_P2_PLUS_MONTHLY,
		),
		self::UNLIMITED_THEMES              => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::LIVE_SUPPORT                  => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::PRIVATE_WHOIS                 => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
		),
		self::PREMIUM_THEMES                => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		/*
		 * `google-analytics` feature.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Jetpack sites with Premium or up plan.
		 */
		self::GOOGLE_ANALYTICS              => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::PAID_JETPACK_PREMIUM_AND_HIGHER,
		),
		/*
		 * `security settings` feature.
		 *
		 * Initially added to determine whether to show /settings/security.
		 * More info: https://github.com/Automattic/wp-calypso/issues/51820
		 *
		 * Active for:
		 * - Simple and Atomic sites with Business or up plan.
		 * - Jetpack sites with any plan.
		 */
		self::SECURITY_SETTINGS             => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::JETPACK_PLANS,
		),
		/*
		 * `advanced-seo` feature.
		 * Called seo-tools in Jetpack.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Business or up plan.
		 * - Jetpack sites with any plan.
		 * - Not VIP sites.
		 */
		self::ADVANCED_SEO                  => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::JETPACK_PLANS,
		),
		/*
		 * `upload-video-files` feature.
		 *
		 * This feature is linked to the ability to upload video files to the website.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Jetpack sites with any plan.
		 */
		self::UPLOAD_VIDEO_FILES            => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PLANS,
		),
		/*
		 * `video-hosting` feature.
		 *
		 * Host video effortlessly and deliver it at high speeds to your viewers.
		 * https://jetpack.com/features/design/video-hosting/
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Jetpack sites with Premium or up plan.
		 */
		self::VIDEO_HOSTING                 => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::PAID_JETPACK_PREMIUM_AND_HIGHER,
		),
		/*
		 * `wordads-jetpack` feature.
		 *
		 * WordAds is the official WordPress.com advertising program available for site owners.
		 * https://wordpress.com/support/wordads-and-earn/
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Jetpack sites with Premium or up plan.
		 *
		 * TODO:
		 *  - wordads-jetpack is mapped to wordads in Jetpack plugin here: https://git.io/JRU4w -
		 *     projects/plugins/jetpack/class.jetpack-plan.php Line 328
		 *  - It's hardcoded as True (Jetpack and Atomic sites)
		 *  - We can simplify Calypso here: https://git.io/JRU4F - client/my-sites/stats/site.jsx Line 210
		 */
		self::WORDADS_JETPACK               => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::PAID_JETPACK_PREMIUM_AND_HIGHER,
		),
		// Jetpack all the things
		// @todo Jetpack free plans do not support Akismet.
		self::AKISMET                       => array(
			self::JETPACK_PLANS,
		),
		self::VAULTPRESS_BACKUPS            => array(
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::VAULTPRESS_BACKUP_ARCHIVE     => array(
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::VAULTPRESS_STORAGE_SPACE      => array(
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::VAULTPRESS_AUTOMATED_RESTORES => array(
			self::JETPACK_PREMIUM_PLANS,
			self::JETPACK_BUSINESS_PLANS,
		),
		self::VAULTPRESS_SECURITY_SCANNING  => array(
			self::JETPACK_BUSINESS_PLANS,
		),
		self::POLLDADDY                     => array(
			self::JETPACK_BUSINESS_PLANS,
		),
		self::SIMPLE_PAYMENTS               => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::PAID_JETPACK_PLANS, // Differs from Simple_Payments_Utils::get_enabled_plans by adding T1/T2 security
		),
		self::CALENDLY                      => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_PREMIUM_PLANS,
			self::WP_P2_PLUS_MONTHLY,
		),
		self::OPENTABLE                     => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_PREMIUM_PLANS,
		),
		self::SEND_A_MESSAGE                => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PLANS,
		),
		self::WHATSAPP_BUTTON               => array(
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_PLANS,
		),
		self::SOCIAL_PREVIEWS               => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
			self::JETPACK_PLANS,
		),
		self::DONATIONS                     => array(
			self::WPCOM_PERSONAL_AND_HIGHER_PLANS,
			self::PAID_JETPACK_PLANS,
		),
		// core/video requires a paid plan.
		self::CORE_VIDEO                    => array(
			self::WP_P2_PLUS_MONTHLY,
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_PREMIUM_PLANS,
		),
		// core/cover requires a paid plan for uploading video files.
		self::CORE_COVER                    => array(
			self::WP_P2_PLUS_MONTHLY,
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::JETPACK_BUSINESS_PLANS,
			self::JETPACK_PREMIUM_PLANS,
		),
		// core/audio requires a paid plan for uploading audio files.
		self::CORE_AUDIO                    => array(
			self::WP_P2_PLUS_MONTHLY,
			self::WPCOM_PERSONAL_AND_HIGHER_PLANS,
			self::PAID_JETPACK_PLANS,
		),
		/*
		 * // RePublicize feature. feature.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Premium or up plan.
		 * - Jetpack sites with Premium or up plan.
		 */
		self::REPUBLICIZE                   => array(
			self::WP_P2_PLUS_MONTHLY,
			self::WPCOM_PREMIUM_AND_HIGHER_PLANS,
			self::PAID_JETPACK_PREMIUM_AND_HIGHER,
		),
		// premium-content requires a paid plan.
		self::PREMIUM_CONTENT_CONTAINER     => array(
			self::WPCOM_PERSONAL_AND_HIGHER_PLANS,
			self::WP_P2_PLUS_MONTHLY,
			self::PAID_JETPACK_PLANS,
		),
		// Everybody needs somebody
		self::SUPPORT                       => array(
			self::FREE_PLAN,
			self::BUNDLE_PRODUCT_IDS,
		),
		/*
		 * WooCommerce on all Plans is available to install.
		 *
		 * Active for:
		 * - Simple and Atomic sites with Business or up plan.
		 * - Not Jetpack sites
		 */
		self::WOOP                          => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
		),
		// Enable the ability to hide the WP.com branding in the site footer.
		self::NO_WPCOM_BRANDING     => array(
			self::WPCOM_BUSINESS_AND_HIGHER_PLANS,
		),
	);

	/**
	 * Given a primitive type $needle, and an array $haystack, recursively
	 * search $haystack for an instance of $needle. If arrays are encountered,
	 * they will also be searched. Only strict comparisons are used.
	 *
	 * @param mixed $needle   - What to look for
	 * @param array $haystack - Array of items to check, may contain other arrays
	 *
	 * @return bool Is the needle in the haystack somewhere?
	 */
	public static function in_array_recursive( $needle, $haystack ) {
		foreach ( $haystack as $item ) {
			if ( is_array( $item ) ) {
				if ( self::in_array_recursive( $needle, $item ) ) {
					return true;
				}
			} elseif ( $item === $needle ) {
				return true;
			}
		}
		return false;
	}
	/**
	 * Given an array of $purchases and a single feature name, consult the FEATURES_MAP to determine if the feature
	 * is included in one of the $purchases.
	 *
	 * Use the function wpcom_site_has_feature( $feature ) to determine if a site has access to a certain feature.
	 *
	 * @param string $feature A singular feature.
	 * @param array  $purchases A collection of purchases.
	 *
	 * @return bool Is the feature included in one of the purchases.
	 */
	public static function has_feature( $feature, $purchases ) {
		if ( empty( $purchases ) || empty( self::FEATURES_MAP[ $feature ] ) ) {
			return false;
		}
		foreach ( $purchases as $purchase ) {
			if ( self::in_array_recursive( $purchase, self::FEATURES_MAP[ $feature ] ) ) {
				return true;
			}
		}
		return false;
	}
}
