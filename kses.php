<?php
/**
 * Filters: kses_allowed_protocols, pre_kses, wp_kses_allowed_html
 */

function apply_filters( $filter, $data ) {
	return $data;
}

function _deprecated_argument( $arg1, $arg2 ) {
	return true;
}

/**
 * Kses global for default allowable HTML tags.
 *
 * Can be override by using CUSTOM_TAGS constant.
 *
 * @global array $allowedposttags
 * @since 2.0.0
 */
$allowedposttags = array(
	'address' => array(),
	'a' => array(
		'href' => true,
		'rel' => true,
		'rev' => true,
		'name' => true,
		'target' => true,
	),
	'abbr' => array(),
	'acronym' => array(),
	'area' => array(
		'alt' => true,
		'coords' => true,
		'href' => true,
		'nohref' => true,
		'shape' => true,
		'target' => true,
	),
	'article' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'aside' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'b' => array(),
	'big' => array(),
	'blockquote' => array(
		'cite' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'br' => array(),
	'button' => array(
		'disabled' => true,
		'name' => true,
		'type' => true,
		'value' => true,
	),
	'caption' => array(
		'align' => true,
	),
	'cite' => array(
		'dir' => true,
		'lang' => true,
	),
	'code' => array(),
	'col' => array(
		'align' => true,
		'char' => true,
		'charoff' => true,
		'span' => true,
		'dir' => true,
		'valign' => true,
		'width' => true,
	),
	'del' => array(
		'datetime' => true,
	),
	'dd' => array(),
	'dfn' => array(),
	'details' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'open' => true,
		'xml:lang' => true,
	),
	'div' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'dl' => array(),
	'dt' => array(),
	'em' => array(),
	'fieldset' => array(),
	'figure' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'figcaption' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'font' => array(
		'color' => true,
		'face' => true,
		'size' => true,
	),
	'footer' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'form' => array(
		'action' => true,
		'accept' => true,
		'accept-charset' => true,
		'enctype' => true,
		'method' => true,
		'name' => true,
		'target' => true,
	),
	'h1' => array(
		'align' => true,
	),
	'h2' => array(
		'align' => true,
	),
	'h3' => array(
		'align' => true,
	),
	'h4' => array(
		'align' => true,
	),
	'h5' => array(
		'align' => true,
	),
	'h6' => array(
		'align' => true,
	),
	'header' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'hgroup' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'hr' => array(
		'align' => true,
		'noshade' => true,
		'size' => true,
		'width' => true,
	),
	'i' => array(),
	'img' => array(
		'alt' => true,
		'align' => true,
		'border' => true,
		'height' => true,
		'hspace' => true,
		'longdesc' => true,
		'vspace' => true,
		'src' => true,
		'usemap' => true,
		'width' => true,
	),
	'ins' => array(
		'datetime' => true,
		'cite' => true,
	),
	'kbd' => array(),
	'label' => array(
		'for' => true,
	),
	'legend' => array(
		'align' => true,
	),
	'li' => array(
		'align' => true,
		'value' => true,
	),
	'map' => array(
		'name' => true,
	),
	'mark' => array(),
	'menu' => array(
		'type' => true,
	),
	'nav' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'p' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'pre' => array(
		'width' => true,
	),
	'q' => array(
		'cite' => true,
	),
	's' => array(),
	'samp' => array(),
	'span' => array(
		'dir' => true,
		'align' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'section' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'small' => array(),
	'strike' => array(),
	'strong' => array(),
	'sub' => array(),
	'summary' => array(
		'align' => true,
		'dir' => true,
		'lang' => true,
		'xml:lang' => true,
	),
	'sup' => array(),
	'table' => array(
		'align' => true,
		'bgcolor' => true,
		'border' => true,
		'cellpadding' => true,
		'cellspacing' => true,
		'dir' => true,
		'rules' => true,
		'summary' => true,
		'width' => true,
	),
	'tbody' => array(
		'align' => true,
		'char' => true,
		'charoff' => true,
		'valign' => true,
	),
	'td' => array(
		'abbr' => true,
		'align' => true,
		'axis' => true,
		'bgcolor' => true,
		'char' => true,
		'charoff' => true,
		'colspan' => true,
		'dir' => true,
		'headers' => true,
		'height' => true,
		'nowrap' => true,
		'rowspan' => true,
		'scope' => true,
		'valign' => true,
		'width' => true,
	),
	'textarea' => array(
		'cols' => true,
		'rows' => true,
		'disabled' => true,
		'name' => true,
		'readonly' => true,
	),
	'tfoot' => array(
		'align' => true,
		'char' => true,
		'charoff' => true,
		'valign' => true,
	),
	'th' => array(
		'abbr' => true,
		'align' => true,
		'axis' => true,
		'bgcolor' => true,
		'char' => true,
		'charoff' => true,
		'colspan' => true,
		'headers' => true,
		'height' => true,
		'nowrap' => true,
		'rowspan' => true,
		'scope' => true,
		'valign' => true,
		'width' => true,
	),
	'thead' => array(
		'align' => true,
		'char' => true,
		'charoff' => true,
		'valign' => true,
	),
	'title' => array(),
	'tr' => array(
		'align' => true,
		'bgcolor' => true,
		'char' => true,
		'charoff' => true,
		'valign' => true,
	),
	'tt' => array(),
	'u' => array(),
	'ul' => array(
		'type' => true,
	),
	'ol' => array(
		'start' => true,
		'type' => true,
	),
	'var' => array(),
);

/**
 * Kses allowed HTML elements.
 *
 * @global array $allowedtags
 * @since 1.0.0
 */
$allowedtags = array(
	'a' => array(
		'href' => true,
		'title' => true,
	),
	'abbr' => array(
		'title' => true,
	),
	'acronym' => array(
		'title' => true,
	),
	'b' => array(),
	'blockquote' => array(
		'cite' => true,
	),
	'cite' => array(),
	'code' => array(),
	'del' => array(
		'datetime' => true,
	),
	'em' => array(),
	'i' => array(),
	'q' => array(
		'cite' => true,
	),
	'strike' => array(),
	'strong' => array(),
);

$allowedentitynames = array(
	'nbsp',    'iexcl',  'cent',    'pound',  'curren', 'yen',
	'brvbar',  'sect',   'uml',     'copy',   'ordf',   'laquo',
	'not',     'shy',    'reg',     'macr',   'deg',    'plusmn',
	'acute',   'micro',  'para',    'middot', 'cedil',  'ordm',
	'raquo',   'iquest', 'Agrave',  'Aacute', 'Acirc',  'Atilde',
	'Auml',    'Aring',  'AElig',   'Ccedil', 'Egrave', 'Eacute',
	'Ecirc',   'Euml',   'Igrave',  'Iacute', 'Icirc',  'Iuml',
	'ETH',     'Ntilde', 'Ograve',  'Oacute', 'Ocirc',  'Otilde',
	'Ouml',    'times',  'Oslash',  'Ugrave', 'Uacute', 'Ucirc',
	'Uuml',    'Yacute', 'THORN',   'szlig',  'agrave', 'aacute',
	'acirc',   'atilde', 'auml',    'aring',  'aelig',  'ccedil',
	'egrave',  'eacute', 'ecirc',   'euml',   'igrave', 'iacute',
	'icirc',   'iuml',   'eth',     'ntilde', 'ograve', 'oacute',
	'ocirc',   'otilde', 'ouml',    'divide', 'oslash', 'ugrave',
	'uacute',  'ucirc',  'uuml',    'yacute', 'thorn',  'yuml',
	'quot',    'amp',    'lt',      'gt',     'apos',   'OElig',
	'oelig',   'Scaron', 'scaron',  'Yuml',   'circ',   'tilde',
	'ensp',    'emsp',   'thinsp',  'zwnj',   'zwj',    'lrm',
	'rlm',     'ndash',  'mdash',   'lsquo',  'rsquo',  'sbquo',
	'ldquo',   'rdquo',  'bdquo',   'dagger', 'Dagger', 'permil',
	'lsaquo',  'rsaquo', 'euro',    'fnof',   'Alpha',  'Beta',
	'Gamma',   'Delta',  'Epsilon', 'Zeta',   'Eta',    'Theta',
	'Iota',    'Kappa',  'Lambda',  'Mu',     'Nu',     'Xi',
	'Omicron', 'Pi',     'Rho',     'Sigma',  'Tau',    'Upsilon',
	'Phi',     'Chi',    'Psi',     'Omega',  'alpha',  'beta',
	'gamma',   'delta',  'epsilon', 'zeta',   'eta',    'theta',
	'iota',    'kappa',  'lambda',  'mu',     'nu',     'xi',
	'omicron', 'pi',     'rho',     'sigmaf', 'sigma',  'tau',
	'upsilon', 'phi',    'chi',     'psi',    'omega',  'thetasym',
	'upsih',   'piv',    'bull',    'hellip', 'prime',  'Prime',
	'oline',   'frasl',  'weierp',  'image',  'real',   'trade',
	'alefsym', 'larr',   'uarr',    'rarr',   'darr',   'harr',
	'crarr',   'lArr',   'uArr',    'rArr',   'dArr',   'hArr',
	'forall',  'part',   'exist',   'empty',  'nabla',  'isin',
	'notin',   'ni',     'prod',    'sum',    'minus',  'lowast',
	'radic',   'prop',   'infin',   'ang',    'and',    'or',
	'cap',     'cup',    'int',     'sim',    'cong',   'asymp',
	'ne',      'equiv',  'le',      'ge',     'sub',    'sup',
	'nsub',    'sube',   'supe',    'oplus',  'otimes', 'perp',
	'sdot',    'lceil',  'rceil',   'lfloor', 'rfloor', 'lang',
	'rang',    'loz',    'spades',  'clubs',  'hearts', 'diams',
	'sup1',    'sup2',   'sup3',    'frac14', 'frac12', 'frac34',
	'there4',
);

$allowedposttags = array_map( '_wp_add_global_attributes', $allowedposttags );

/**
 * Helper function to add global attributes to a tag in the allowed html list.
 *
 * @since 3.5.0
 * @access private
 *
 * @param array $value An array of attributes.
 * @return array The array of attributes with global attributes added.
 */
function _wp_add_global_attributes( $value ) {
	$global_attributes = array(
		'class' => true,
		'id' => true,
		'style' => true,
		'title' => true,
		'role' => true,
	);

	if ( true === $value )
		$value = array();

	if ( is_array( $value ) )
		return array_merge( $value, $global_attributes );

	return $value;
}

/**
 * Retrieve a list of protocols to allow in HTML attributes.
 *
 * @since 3.3.0
 *
 * @see wp_kses()
 * @see esc_url()
 *
 * @return array Array of allowed protocols.
 */
function wp_allowed_protocols() {
	static $protocols;

	if ( empty( $protocols ) ) {
		$protocols = array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'mms', 'rtsp', 'svn', 'tel', 'fax', 'xmpp' );

		/**
		 * Filter the list of protocols allowed in HTML attributes.
		 *
		 * @since 3.0.0
		 *
		 * @param array $protocols Array of allowed protocols e.g. 'http', 'ftp', 'tel', and more.
		 */
		$protocols = apply_filters( 'kses_allowed_protocols', $protocols );
	}

	return $protocols;
}

/**
 * Removes any invalid control characters in $string.
 *
 * Also removes any instance of the '\0' string.
 *
 * @since 1.0.0
 *
 * @param string $string
 * @return string
 */
function wp_kses_no_null($string) {
	$string = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/', '', $string);
	$string = preg_replace('/(\\\\0)+/', '', $string);

	return $string;
}

/**
 * Removes the HTML JavaScript entities found in early versions of Netscape 4.
 *
 * @since 1.0.0
 *
 * @param string $string
 * @return string
 */
function wp_kses_js_entities($string) {
	return preg_replace('%&\s*\{[^}]*(\}\s*;?|$)%', '', $string);
}

/**
 * Converts and fixes HTML entities.
 *
 * This function normalizes HTML entities. It will convert "AT&T" to the correct
 * "AT&amp;T", "&#00058;" to "&#58;", "&#XYZZY;" to "&amp;#XYZZY;" and so on.
 *
 * @since 1.0.0
 *
 * @param string $string Content to normalize entities
 * @return string Content with normalized entities
 */
function wp_kses_normalize_entities($string) {
	# Disarm all entities by converting & to &amp;

	$string = str_replace('&', '&amp;', $string);

	# Change back the allowed entities in our entity whitelist

	$string = preg_replace_callback('/&amp;([A-Za-z]{2,8}[0-9]{0,2});/', 'wp_kses_named_entities', $string);
	$string = preg_replace_callback('/&amp;#(0*[0-9]{1,7});/', 'wp_kses_normalize_entities2', $string);
	$string = preg_replace_callback('/&amp;#[Xx](0*[0-9A-Fa-f]{1,6});/', 'wp_kses_normalize_entities3', $string);

	return $string;
}

/**
 * You add any kses hooks here.
 *
 * There is currently only one kses WordPress hook and it is called here. All
 * parameters are passed to the hooks and expected to receive a string.
 *
 * @since 1.0.0
 *
 * @param string $string Content to filter through kses
 * @param array $allowed_html List of allowed HTML elements
 * @param array $allowed_protocols Allowed protocol in links
 * @return string Filtered content through 'pre_kses' hook
 */
function wp_kses_hook( $string, $allowed_html, $allowed_protocols ) {
	/**
	 * Filter content to be run through kses.
	 *
	 * @since 2.3.0
	 *
	 * @param string $string            Content to run through kses.
	 * @param array  $allowed_html      Allowed HTML elements.
	 * @param array  $allowed_protocols Allowed protocol in links.
	 */
	$string = apply_filters( 'pre_kses', $string, $allowed_html, $allowed_protocols );
	return $string;
}

/**
 * Searches for HTML tags, no matter how malformed.
 *
 * It also matches stray ">" characters.
 *
 * @since 1.0.0
 *
 * @param string $string Content to filter
 * @param array $allowed_html Allowed HTML elements
 * @param array $allowed_protocols Allowed protocols to keep
 * @return string Content with fixed HTML tags
 */
function wp_kses_split( $string, $allowed_html, $allowed_protocols ) {
	global $pass_allowed_html, $pass_allowed_protocols;
	$pass_allowed_html = $allowed_html;
	$pass_allowed_protocols = $allowed_protocols;
	return preg_replace_callback( '%(<!--.*?(-->|$))|(<[^>]*(>|$)|>)%', '_wp_kses_split_callback', $string );
}

/**
 * Callback for wp_kses_split.
 *
 * @since 3.1.0
 * @access private
 */
function _wp_kses_split_callback( $match ) {
	global $pass_allowed_html, $pass_allowed_protocols;
	return wp_kses_split2( $match[0], $pass_allowed_html, $pass_allowed_protocols );
}

/**
 * Strips slashes from in front of quotes.
 *
 * This function changes the character sequence \" to just ". It leaves all
 * other slashes alone. It's really weird, but the quoting from
 * preg_replace(//e) seems to require this.
 *
 * @since 1.0.0
 *
 * @param string $string String to strip slashes
 * @return string Fixed string with quoted slashes
 */
function wp_kses_stripslashes($string) {
	return preg_replace('%\\\\"%', '"', $string);
}

/**
 * Return a list of allowed tags and attributes for a given context.
 *
 * @since 3.5.0
 *
 * @param string $context The context for which to retrieve tags. Allowed values are
 *  post | strip | data | entities or the name of a field filter such as pre_user_description.
 * @return array List of allowed tags and their allowed attributes.
 */
function wp_kses_allowed_html( $context = '' ) {
	global $allowedposttags, $allowedtags, $allowedentitynames;

	if ( is_array( $context ) ) {
		/**
		 * Filter HTML elements allowed for a given context.
		 *
		 * @since 3.5.0
		 *
		 * @param string $tags    Allowed tags, attributes, and/or entities.
		 * @param string $context Context to judge allowed tags by. Allowed values are 'post',
		 *                        'data', 'strip', 'entities', 'explicit', or the name of a filter.
		 */
		return apply_filters( 'wp_kses_allowed_html', $context, 'explicit' );
	}

	switch ( $context ) {
		case 'post':
			/** This filter is documented in wp-includes/kses.php */
			return apply_filters( 'wp_kses_allowed_html', $allowedposttags, $context );
			break;
		case 'user_description':
		case 'pre_user_description':
			$tags = $allowedtags;
			$tags['a']['rel'] = true;
			/** This filter is documented in wp-includes/kses.php */
			return apply_filters( 'wp_kses_allowed_html', $tags, $context );
			break;
		case 'strip':
			/** This filter is documented in wp-includes/kses.php */
			return apply_filters( 'wp_kses_allowed_html', array(), $context );
			break;
		case 'entities':
			/** This filter is documented in wp-includes/kses.php */
			return apply_filters( 'wp_kses_allowed_html', $allowedentitynames, $context);
			break;
		case 'data':
		default:
			/** This filter is documented in wp-includes/kses.php */
			return apply_filters( 'wp_kses_allowed_html', $allowedtags, $context );
	}
}

/**
 * Removes all attributes, if none are allowed for this element.
 *
 * If some are allowed it calls wp_kses_hair() to split them further, and then
 * it builds up new HTML code from the data that kses_hair() returns. It also
 * removes "<" and ">" characters, if there are any left. One more thing it does
 * is to check if the tag has a closing XHTML slash, and if it does, it puts one
 * in the returned code as well.
 *
 * @since 1.0.0
 *
 * @param string $element HTML element/tag
 * @param string $attr HTML attributes from HTML element to closing HTML element tag
 * @param array $allowed_html Allowed HTML elements
 * @param array $allowed_protocols Allowed protocols to keep
 * @return string Sanitized HTML element
 */
function wp_kses_attr($element, $attr, $allowed_html, $allowed_protocols) {
	# Is there a closing XHTML slash at the end of the attributes?

	if ( ! is_array( $allowed_html ) )
		$allowed_html = wp_kses_allowed_html( $allowed_html );

	$xhtml_slash = '';
	if (preg_match('%\s*/\s*$%', $attr))
		$xhtml_slash = ' /';

	# Are any attributes allowed at all for this element?
	if ( ! isset($allowed_html[strtolower($element)]) || count($allowed_html[strtolower($element)]) == 0 )
		return "<$element$xhtml_slash>";

	# Split it
	$attrarr = wp_kses_hair($attr, $allowed_protocols);

	# Go through $attrarr, and save the allowed attributes for this element
	# in $attr2
	$attr2 = '';

	$allowed_attr = $allowed_html[strtolower($element)];
	foreach ($attrarr as $arreach) {
		if ( ! isset( $allowed_attr[strtolower($arreach['name'])] ) )
			continue; # the attribute is not allowed

		$current = $allowed_attr[strtolower($arreach['name'])];
		if ( $current == '' )
			continue; # the attribute is not allowed

		if ( strtolower( $arreach['name'] ) == 'style' ) {
			$orig_value = $arreach['value'];
			$value = safecss_filter_attr( $orig_value );

			if ( empty( $value ) )
				continue;

			$arreach['value'] = $value;
			$arreach['whole'] = str_replace( $orig_value, $value, $arreach['whole'] );
		}

		if ( ! is_array($current) ) {
			$attr2 .= ' '.$arreach['whole'];
			# there are no checks

		} else {
			# there are some checks
			$ok = true;
			foreach ($current as $currkey => $currval) {
				if ( ! wp_kses_check_attr_val($arreach['value'], $arreach['vless'], $currkey, $currval) ) {
					$ok = false;
					break;
				}
			}

			if ( $ok )
				$attr2 .= ' '.$arreach['whole']; # it passed them
		} # if !is_array($current)
	} # foreach

	# Remove any "<" or ">" characters
	$attr2 = preg_replace('/[<>]/', '', $attr2);

	return "<$element$attr2$xhtml_slash>";
}

/**
 * Performs different checks for attribute values.
 *
 * The currently implemented checks are "maxlen", "minlen", "maxval", "minval"
 * and "valueless".
 *
 * @since 1.0.0
 *
 * @param string $value Attribute value
 * @param string $vless Whether the value is valueless. Use 'y' or 'n'
 * @param string $checkname What $checkvalue is checking for.
 * @param mixed $checkvalue What constraint the value should pass
 * @return bool Whether check passes
 */
function wp_kses_check_attr_val($value, $vless, $checkname, $checkvalue) {
	$ok = true;

	switch (strtolower($checkname)) {
		case 'maxlen' :
			# The maxlen check makes sure that the attribute value has a length not
			# greater than the given value. This can be used to avoid Buffer Overflows
			# in WWW clients and various Internet servers.

			if (strlen($value) > $checkvalue)
				$ok = false;
			break;

		case 'minlen' :
			# The minlen check makes sure that the attribute value has a length not
			# smaller than the given value.

			if (strlen($value) < $checkvalue)
				$ok = false;
			break;

		case 'maxval' :
			# The maxval check does two things: it checks that the attribute value is
			# an integer from 0 and up, without an excessive amount of zeroes or
			# whitespace (to avoid Buffer Overflows). It also checks that the attribute
			# value is not greater than the given value.
			# This check can be used to avoid Denial of Service attacks.

			if (!preg_match('/^\s{0,6}[0-9]{1,6}\s{0,6}$/', $value))
				$ok = false;
			if ($value > $checkvalue)
				$ok = false;
			break;

		case 'minval' :
			# The minval check makes sure that the attribute value is a positive integer,
			# and that it is not smaller than the given value.

			if (!preg_match('/^\s{0,6}[0-9]{1,6}\s{0,6}$/', $value))
				$ok = false;
			if ($value < $checkvalue)
				$ok = false;
			break;

		case 'valueless' :
			# The valueless check makes sure if the attribute has a value
			# (like <a href="blah">) or not (<option selected>). If the given value
			# is a "y" or a "Y", the attribute must not have a value.
			# If the given value is an "n" or an "N", the attribute must have one.

			if (strtolower($checkvalue) != $vless)
				$ok = false;
			break;
	} # switch

	return $ok;
}

/**
 * Inline CSS filter
 *
 * @since 2.8.1
 */
function safecss_filter_attr( $css, $deprecated = '' ) {
	if ( !empty( $deprecated ) )
		_deprecated_argument( __FUNCTION__, '2.8.1' ); // Never implemented

	$css = wp_kses_no_null($css);
	$css = str_replace(array("\n","\r","\t"), '', $css);

	if ( preg_match( '%[\\\\(&=}]|/\*%', $css ) ) // remove any inline css containing \ ( & } = or comments
		return '';

	$css_array = explode( ';', trim( $css ) );

	/**
	 * Filter list of allowed CSS attributes.
	 *
	 * @since 2.8.1
	 *
	 * @param array $attr List of allowed CSS attributes.
	 */
	$allowed_attr = apply_filters( 'safe_style_css', array( 'text-align', 'margin', 'color', 'float',
		'border', 'background', 'background-color', 'border-bottom', 'border-bottom-color',
		'border-bottom-style', 'border-bottom-width', 'border-collapse', 'border-color', 'border-left',
		'border-left-color', 'border-left-style', 'border-left-width', 'border-right', 'border-right-color',
		'border-right-style', 'border-right-width', 'border-spacing', 'border-style', 'border-top',
		'border-top-color', 'border-top-style', 'border-top-width', 'border-width', 'caption-side',
		'clear', 'cursor', 'direction', 'font', 'font-family', 'font-size', 'font-style',
		'font-variant', 'font-weight', 'height', 'letter-spacing', 'line-height', 'margin-bottom',
		'margin-left', 'margin-right', 'margin-top', 'overflow', 'padding', 'padding-bottom',
		'padding-left', 'padding-right', 'padding-top', 'text-decoration', 'text-indent', 'vertical-align',
		'width' ) );

	if ( empty($allowed_attr) )
		return $css;

	$css = '';
	foreach ( $css_array as $css_item ) {
		if ( $css_item == '' )
			continue;
		$css_item = trim( $css_item );
		$found = false;
		if ( strpos( $css_item, ':' ) === false ) {
			$found = true;
		} else {
			$parts = explode( ':', $css_item );
			if ( in_array( trim( $parts[0] ), $allowed_attr ) )
				$found = true;
		}
		if ( $found ) {
			if( $css != '' )
				$css .= ';';
			$css .= $css_item;
		}
	}

	return $css;
}

/**
 * Builds an attribute list from string containing attributes.
 *
 * This function does a lot of work. It parses an attribute list into an array
 * with attribute data, and tries to do the right thing even if it gets weird
 * input. It will add quotes around attribute values that don't have any quotes
 * or apostrophes around them, to make it easier to produce HTML code that will
 * conform to W3C's HTML specification. It will also remove bad URL protocols
 * from attribute values. It also reduces duplicate attributes by using the
 * attribute defined first (foo='bar' foo='baz' will result in foo='bar').
 *
 * @since 1.0.0
 *
 * @param string $attr Attribute list from HTML element to closing HTML element tag
 * @param array $allowed_protocols Allowed protocols to keep
 * @return array List of attributes after parsing
 */
function wp_kses_hair($attr, $allowed_protocols) {
	$attrarr = array();
	$mode = 0;
	$attrname = '';
	$uris = array('xmlns', 'profile', 'href', 'src', 'cite', 'classid', 'codebase', 'data', 'usemap', 'longdesc', 'action');

	# Loop through the whole attribute list

	while (strlen($attr) != 0) {
		$working = 0; # Was the last operation successful?

		switch ($mode) {
			case 0 : # attribute name, href for instance

				if ( preg_match('/^([-a-zA-Z:]+)/', $attr, $match ) ) {
					$attrname = $match[1];
					$working = $mode = 1;
					$attr = preg_replace( '/^[-a-zA-Z:]+/', '', $attr );
				}

				break;

			case 1 : # equals sign or valueless ("selected")

				if (preg_match('/^\s*=\s*/', $attr)) # equals sign
				{
					$working = 1;
					$mode = 2;
					$attr = preg_replace('/^\s*=\s*/', '', $attr);
					break;
				}

				if (preg_match('/^\s+/', $attr)) # valueless
				{
					$working = 1;
					$mode = 0;
					if(false === array_key_exists($attrname, $attrarr)) {
						$attrarr[$attrname] = array ('name' => $attrname, 'value' => '', 'whole' => $attrname, 'vless' => 'y');
					}
					$attr = preg_replace('/^\s+/', '', $attr);
				}

				break;

			case 2 : # attribute value, a URL after href= for instance

				if (preg_match('%^"([^"]*)"(\s+|/?$)%', $attr, $match))
					# "value"
				{
					$thisval = $match[1];
					if ( in_array(strtolower($attrname), $uris) )
						$thisval = wp_kses_bad_protocol($thisval, $allowed_protocols);

					if(false === array_key_exists($attrname, $attrarr)) {
						$attrarr[$attrname] = array ('name' => $attrname, 'value' => $thisval, 'whole' => "$attrname=\"$thisval\"", 'vless' => 'n');
					}
					$working = 1;
					$mode = 0;
					$attr = preg_replace('/^"[^"]*"(\s+|$)/', '', $attr);
					break;
				}

				if (preg_match("%^'([^']*)'(\s+|/?$)%", $attr, $match))
					# 'value'
				{
					$thisval = $match[1];
					if ( in_array(strtolower($attrname), $uris) )
						$thisval = wp_kses_bad_protocol($thisval, $allowed_protocols);

					if(false === array_key_exists($attrname, $attrarr)) {
						$attrarr[$attrname] = array ('name' => $attrname, 'value' => $thisval, 'whole' => "$attrname='$thisval'", 'vless' => 'n');
					}
					$working = 1;
					$mode = 0;
					$attr = preg_replace("/^'[^']*'(\s+|$)/", '', $attr);
					break;
				}

				if (preg_match("%^([^\s\"']+)(\s+|/?$)%", $attr, $match))
					# value
				{
					$thisval = $match[1];
					if ( in_array(strtolower($attrname), $uris) )
						$thisval = wp_kses_bad_protocol($thisval, $allowed_protocols);

					if(false === array_key_exists($attrname, $attrarr)) {
						$attrarr[$attrname] = array ('name' => $attrname, 'value' => $thisval, 'whole' => "$attrname=\"$thisval\"", 'vless' => 'n');
					}
					# We add quotes to conform to W3C's HTML spec.
					$working = 1;
					$mode = 0;
					$attr = preg_replace("%^[^\s\"']+(\s+|$)%", '', $attr);
				}

				break;
		} # switch

		if ($working == 0) # not well formed, remove and try again
		{
			$attr = wp_kses_html_error($attr);
			$mode = 0;
		}
	} # while

	if ($mode == 1 && false === array_key_exists($attrname, $attrarr))
		# special case, for when the attribute list ends with a valueless
		# attribute like "selected"
		$attrarr[$attrname] = array ('name' => $attrname, 'value' => '', 'whole' => $attrname, 'vless' => 'y');

	return $attrarr;
}

/**
 * Handles parsing errors in wp_kses_hair().
 *
 * The general plan is to remove everything to and including some whitespace,
 * but it deals with quotes and apostrophes as well.
 *
 * @since 1.0.0
 *
 * @param string $string
 * @return string
 */
function wp_kses_html_error($string) {
	return preg_replace('/^("[^"]*("|$)|\'[^\']*(\'|$)|\S)*\s*/', '', $string);
}

/**
 * Sanitize string from bad protocols.
 *
 * This function removes all non-allowed protocols from the beginning of
 * $string. It ignores whitespace and the case of the letters, and it does
 * understand HTML entities. It does its work in a while loop, so it won't be
 * fooled by a string like "javascript:javascript:alert(57)".
 *
 * @since 1.0.0
 *
 * @param string $string Content to filter bad protocols from
 * @param array $allowed_protocols Allowed protocols to keep
 * @return string Filtered content
 */
function wp_kses_bad_protocol($string, $allowed_protocols) {
	$string = wp_kses_no_null($string);
	$iterations = 0;

	do {
		$original_string = $string;
		$string = wp_kses_bad_protocol_once($string, $allowed_protocols);
	} while ( $original_string != $string && ++$iterations < 6 );

	if ( $original_string != $string )
		return '';

	return $string;
}


/**
 * Sanitizes content from bad protocols and other characters.
 *
 * This function searches for URL protocols at the beginning of $string, while
 * handling whitespace and HTML entities.
 *
 * @since 1.0.0
 *
 * @param string $string Content to check for bad protocols
 * @param string $allowed_protocols Allowed protocols
 * @return string Sanitized content
 */
function wp_kses_bad_protocol_once($string, $allowed_protocols, $count = 1 ) {
	$string2 = preg_split( '/:|&#0*58;|&#x0*3a;/i', $string, 2 );
	if ( isset($string2[1]) && ! preg_match('%/\?%', $string2[0]) ) {
		$string = trim( $string2[1] );
		$protocol = wp_kses_bad_protocol_once2( $string2[0], $allowed_protocols );
		if ( 'feed:' == $protocol ) {
			if ( $count > 2 )
				return '';
			$string = wp_kses_bad_protocol_once( $string, $allowed_protocols, ++$count );
			if ( empty( $string ) )
				return $string;
		}
		$string = $protocol . $string;
	}

	return $string;
}

/**
 * Callback for wp_kses_bad_protocol_once() regular expression.
 *
 * This function processes URL protocols, checks to see if they're in the
 * whitelist or not, and returns different data depending on the answer.
 *
 * @access private
 * @since 1.0.0
 *
 * @param string $string URI scheme to check against the whitelist
 * @param string $allowed_protocols Allowed protocols
 * @return string Sanitized content
 */
function wp_kses_bad_protocol_once2( $string, $allowed_protocols ) {
	$string2 = wp_kses_decode_entities($string);
	$string2 = preg_replace('/\s/', '', $string2);
	$string2 = wp_kses_no_null($string2);
	$string2 = strtolower($string2);

	$allowed = false;
	foreach ( (array) $allowed_protocols as $one_protocol )
		if ( strtolower($one_protocol) == $string2 ) {
			$allowed = true;
			break;
		}

	if ($allowed)
		return "$string2:";
	else
		return '';
}

/**
 * Convert all entities to their character counterparts.
 *
 * This function decodes numeric HTML entities (&#65; and &#x41;). It doesn't do
 * anything with other entities like &auml;, but we don't need them in the URL
 * protocol whitelisting system anyway.
 *
 * @since 1.0.0
 *
 * @param string $string Content to change entities
 * @return string Content after decoded entities
 */
function wp_kses_decode_entities($string) {
	$string = preg_replace_callback('/&#([0-9]+);/', '_wp_kses_decode_entities_chr', $string);
	$string = preg_replace_callback('/&#[Xx]([0-9A-Fa-f]+);/', '_wp_kses_decode_entities_chr_hexdec', $string);

	return $string;
}

/**
 * Regex callback for wp_kses_decode_entities()
 *
 * @param array $match preg match
 * @return string
 */
function _wp_kses_decode_entities_chr( $match ) {
	return chr( $match[1] );
}

/**
 * Regex callback for wp_kses_decode_entities()
 *
 * @param array $match preg match
 * @return string
 */
function _wp_kses_decode_entities_chr_hexdec( $match ) {
	return chr( hexdec( $match[1] ) );
}

/**
 * Callback for wp_kses_split for fixing malformed HTML tags.
 *
 * This function does a lot of work. It rejects some very malformed things like
 * <:::>. It returns an empty string, if the element isn't allowed (look ma, no
 * strip_tags()!). Otherwise it splits the tag into an element and an attribute
 * list.
 *
 * After the tag is split into an element and an attribute list, it is run
 * through another filter which will remove illegal attributes and once that is
 * completed, will be returned.
 *
 * @access private
 * @since 1.0.0
 * @uses wp_kses_attr()
 *
 * @param string $string Content to filter
 * @param array $allowed_html Allowed HTML elements
 * @param array $allowed_protocols Allowed protocols to keep
 * @return string Fixed HTML element
 */
function wp_kses_split2($string, $allowed_html, $allowed_protocols) {
	$string = wp_kses_stripslashes($string);

	if (substr($string, 0, 1) != '<')
		return '&gt;';
	# It matched a ">" character

	if ( '<!--' == substr( $string, 0, 4 ) ) {
		$string = str_replace( array('<!--', '-->'), '', $string );
		while ( $string != ($newstring = wp_kses($string, $allowed_html, $allowed_protocols)) )
			$string = $newstring;
		if ( $string == '' )
			return '';
		// prevent multiple dashes in comments
		$string = preg_replace('/--+/', '-', $string);
		// prevent three dashes closing a comment
		$string = preg_replace('/-$/', '', $string);
		return "<!--{$string}-->";
	}
	# Allow HTML comments

	if (!preg_match('%^<\s*(/\s*)?([a-zA-Z0-9]+)([^>]*)>?$%', $string, $matches))
		return '';
	# It's seriously malformed

	$slash = trim($matches[1]);
	$elem = $matches[2];
	$attrlist = $matches[3];

	if ( ! is_array( $allowed_html ) )
		$allowed_html = wp_kses_allowed_html( $allowed_html );

	if ( ! isset($allowed_html[strtolower($elem)]) )
		return '';
	# They are using a not allowed HTML element

	if ($slash != '')
		return "</$elem>";
	# No attributes are allowed for closing elements

	return wp_kses_attr( $elem, $attrlist, $allowed_html, $allowed_protocols );
}

/**
 * Filters content and keeps only allowable HTML elements.
 *
 * This function makes sure that only the allowed HTML element names, attribute
 * names and attribute values plus only sane HTML entities will occur in
 * $string. You have to remove any slashes from PHP's magic quotes before you
 * call this function.
 *
 * The default allowed protocols are 'http', 'https', 'ftp', 'mailto', 'news',
 * 'irc', 'gopher', 'nntp', 'feed', 'telnet, 'mms', 'rtsp' and 'svn'. This
 * covers all common link protocols, except for 'javascript' which should not
 * be allowed for untrusted users.
 *
 * @since 1.0.0
 *
 * @param string $string Content to filter through kses
 * @param array $allowed_html List of allowed HTML elements
 * @param array $allowed_protocols Optional. Allowed protocol in links.
 * @return string Filtered content with only allowed HTML elements
 */
function wp_kses( $string, $allowed_html, $allowed_protocols = array() ) {
	if ( empty( $allowed_protocols ) )
		$allowed_protocols = wp_allowed_protocols();
	$string = wp_kses_no_null($string);
	$string = wp_kses_js_entities($string);
	$string = wp_kses_normalize_entities($string);
	$string = wp_kses_hook($string, $allowed_html, $allowed_protocols); // WP changed the order of these funcs and added args to wp_kses_hook
	return wp_kses_split($string, $allowed_html, $allowed_protocols);
}

/**
 * Convert lone less than signs.
 *
 * KSES already converts lone greater than signs.
 *
 * @uses wp_pre_kses_less_than_callback in the callback function.
 * @since 2.3.0
 *
 * @param string $text Text to be converted.
 * @return string Converted text.
 */
function wp_pre_kses_less_than( $text ) {
	return preg_replace_callback('%<[^>]*?((?=<)|>|$)%', 'wp_pre_kses_less_than_callback', $text);
}

/**
 * Callback function used by preg_replace.
 *
 * @uses esc_html to format the $matches text.
 * @since 2.3.0
 *
 * @param array $matches Populated by matches to preg_replace.
 * @return string The text returned after esc_html if needed.
 */
function wp_pre_kses_less_than_callback( $matches ) {
	if ( false === strpos($matches[0], '>') )
		return esc_html($matches[0]);
	return $matches[0];
}

/**
 * Escaping for HTML blocks.
 *
 * @since 2.8.0
 *
 * @param string $text
 * @return string
 */
function esc_html( $text ) {
	$safe_text = wp_check_invalid_utf8( $text );
	$safe_text = _wp_specialchars( $safe_text, ENT_QUOTES );
	/**
	 * Filter a string cleaned and escaped for output in HTML.
	 *
	 * Text passed to esc_html() is stripped of invalid or special characters
	 * before output.
	 *
	 * @since 2.8.0
	 *
	 * @param string $safe_text The text after it has been escaped.
	 * @param string $text      The text prior to being escaped.
	 */
	return apply_filters( 'esc_html', $safe_text, $text );
}

/**
 * Checks for invalid UTF8 in a string.
 *
 * @since 2.8.0
 *
 * @param string $string The text which is to be checked.
 * @param boolean $strip Optional. Whether to attempt to strip out invalid UTF8. Default is false.
 * @return string The checked text.
 */
function wp_check_invalid_utf8( $string, $strip = false ) {
	$string = (string) $string;

	if ( 0 === strlen( $string ) ) {
		return '';
	}

	// Store the site charset as a static to avoid multiple calls to get_option()
	static $is_utf8;
	if ( !isset( $is_utf8 ) ) {
		$is_utf8 = true; //in_array( get_option( 'blog_charset' ), array( 'utf8', 'utf-8', 'UTF8', 'UTF-8' ) );
	}
	if ( !$is_utf8 ) {
		return $string;
	}

	// Check for support for utf8 in the installed PCRE library once and store the result in a static
	static $utf8_pcre;
	if ( !isset( $utf8_pcre ) ) {
		$utf8_pcre = @preg_match( '/^./u', 'a' );
	}
	// We can't demand utf8 in the PCRE installation, so just return the string in those cases
	if ( !$utf8_pcre ) {
		return $string;
	}

	// preg_match fails when it encounters invalid UTF8 in $string
	if ( 1 === @preg_match( '/^./us', $string ) ) {
		return $string;
	}

	// Attempt to strip the bad chars if requested (not recommended)
	if ( $strip && function_exists( 'iconv' ) ) {
		return iconv( 'utf-8', 'utf-8', $string );
	}

	return '';
}

/**
 * Converts a number of special characters into their HTML entities.
 *
 * Specifically deals with: &, <, >, ", and '.
 *
 * $quote_style can be set to ENT_COMPAT to encode " to
 * &quot;, or ENT_QUOTES to do both. Default is ENT_NOQUOTES where no quotes are encoded.
 *
 * @since 1.2.2
 * @access private
 *
 * @param string $string The text which is to be encoded.
 * @param mixed $quote_style Optional. Converts double quotes if set to ENT_COMPAT, both single and double if set to ENT_QUOTES or none if set to ENT_NOQUOTES. Also compatible with old values; converting single quotes if set to 'single', double if set to 'double' or both if otherwise set. Default is ENT_NOQUOTES.
 * @param string $charset Optional. The character encoding of the string. Default is false.
 * @param boolean $double_encode Optional. Whether to encode existing html entities. Default is false.
 * @return string The encoded text with HTML entities.
 */
function _wp_specialchars( $string, $quote_style = ENT_NOQUOTES, $charset = false, $double_encode = false ) {
	$string = (string) $string;

	if ( 0 === strlen( $string ) )
		return '';

	// Don't bother if there are no specialchars - saves some processing
	if ( ! preg_match( '/[&<>"\']/', $string ) )
		return $string;

	// Account for the previous behaviour of the function when the $quote_style is not an accepted value
	if ( empty( $quote_style ) )
		$quote_style = ENT_NOQUOTES;
	elseif ( ! in_array( $quote_style, array( 0, 2, 3, 'single', 'double' ), true ) )
		$quote_style = ENT_QUOTES;

	// Store the site charset as a static to avoid multiple calls to wp_load_alloptions()
	if ( ! $charset ) {
		static $_charset;
		if ( ! isset( $_charset ) ) {
			$alloptions = array(); //wp_load_alloptions();
			$_charset = isset( $alloptions['blog_charset'] ) ? $alloptions['blog_charset'] : '';
		}
		$charset = $_charset;
	}

	if ( in_array( $charset, array( 'utf8', 'utf-8', 'UTF8' ) ) )
		$charset = 'UTF-8';

	$_quote_style = $quote_style;

	if ( $quote_style === 'double' ) {
		$quote_style = ENT_COMPAT;
		$_quote_style = ENT_COMPAT;
	} elseif ( $quote_style === 'single' ) {
		$quote_style = ENT_NOQUOTES;
	}

	// Handle double encoding ourselves
	if ( $double_encode ) {
		$string = @htmlspecialchars( $string, $quote_style, $charset );
	} else {
		// Decode &amp; into &
		$string = wp_specialchars_decode( $string, $_quote_style );

		// Guarantee every &entity; is valid or re-encode the &
		$string = wp_kses_normalize_entities( $string );

		// Now re-encode everything except &entity;
		$string = preg_split( '/(&#?x?[0-9a-z]+;)/i', $string, -1, PREG_SPLIT_DELIM_CAPTURE );

		for ( $i = 0; $i < count( $string ); $i += 2 )
			$string[$i] = @htmlspecialchars( $string[$i], $quote_style, $charset );

		$string = implode( '', $string );
	}

	// Backwards compatibility
	if ( 'single' === $_quote_style )
		$string = str_replace( "'", '&#039;', $string );

	return $string;
}

/**
 * Converts a number of HTML entities into their special characters.
 *
 * Specifically deals with: &, <, >, ", and '.
 *
 * $quote_style can be set to ENT_COMPAT to decode " entities,
 * or ENT_QUOTES to do both " and '. Default is ENT_NOQUOTES where no quotes are decoded.
 *
 * @since 2.8.0
 *
 * @param string $string The text which is to be decoded.
 * @param mixed $quote_style Optional. Converts double quotes if set to ENT_COMPAT, both single and double if set to ENT_QUOTES or none if set to ENT_NOQUOTES. Also compatible with old _wp_specialchars() values; converting single quotes if set to 'single', double if set to 'double' or both if otherwise set. Default is ENT_NOQUOTES.
 * @return string The decoded text without HTML entities.
 */
function wp_specialchars_decode( $string, $quote_style = ENT_NOQUOTES ) {
	$string = (string) $string;

	if ( 0 === strlen( $string ) ) {
		return '';
	}

	// Don't bother if there are no entities - saves a lot of processing
	if ( strpos( $string, '&' ) === false ) {
		return $string;
	}

	// Match the previous behaviour of _wp_specialchars() when the $quote_style is not an accepted value
	if ( empty( $quote_style ) ) {
		$quote_style = ENT_NOQUOTES;
	} elseif ( !in_array( $quote_style, array( 0, 2, 3, 'single', 'double' ), true ) ) {
		$quote_style = ENT_QUOTES;
	}

	// More complete than get_html_translation_table( HTML_SPECIALCHARS )
	$single = array( '&#039;'  => '\'', '&#x27;' => '\'' );
	$single_preg = array( '/&#0*39;/'  => '&#039;', '/&#x0*27;/i' => '&#x27;' );
	$double = array( '&quot;' => '"', '&#034;'  => '"', '&#x22;' => '"' );
	$double_preg = array( '/&#0*34;/'  => '&#034;', '/&#x0*22;/i' => '&#x22;' );
	$others = array( '&lt;'   => '<', '&#060;'  => '<', '&gt;'   => '>', '&#062;'  => '>', '&amp;'  => '&', '&#038;'  => '&', '&#x26;' => '&' );
	$others_preg = array( '/&#0*60;/'  => '&#060;', '/&#0*62;/'  => '&#062;', '/&#0*38;/'  => '&#038;', '/&#x0*26;/i' => '&#x26;' );

	if ( $quote_style === ENT_QUOTES ) {
		$translation = array_merge( $single, $double, $others );
		$translation_preg = array_merge( $single_preg, $double_preg, $others_preg );
	} elseif ( $quote_style === ENT_COMPAT || $quote_style === 'double' ) {
		$translation = array_merge( $double, $others );
		$translation_preg = array_merge( $double_preg, $others_preg );
	} elseif ( $quote_style === 'single' ) {
		$translation = array_merge( $single, $others );
		$translation_preg = array_merge( $single_preg, $others_preg );
	} elseif ( $quote_style === ENT_NOQUOTES ) {
		$translation = $others;
		$translation_preg = $others_preg;
	}

	// Remove zero padding on numeric entities
	$string = preg_replace( array_keys( $translation_preg ), array_values( $translation_preg ), $string );

	// Replace characters according to translation table
	return strtr( $string, $translation );
}

/**
 * Callback for wp_kses_normalize_entities() regular expression.
 *
 * This function only accepts valid named entity references, which are finite,
 * case-sensitive, and highly scrutinized by HTML and XML validators.
 *
 * @since 3.0.0
 *
 * @param array $matches preg_replace_callback() matches array
 * @return string Correctly encoded entity
 */
function wp_kses_named_entities($matches) {
	global $allowedentitynames;

	if ( empty($matches[1]) )
		return '';

	$i = $matches[1];
	return ( ( ! in_array($i, $allowedentitynames) ) ? "&amp;$i;" : "&$i;" );
}

/**
 * Callback for wp_kses_normalize_entities() regular expression.
 *
 * This function helps wp_kses_normalize_entities() to only accept 16-bit values
 * and nothing more for &#number; entities.
 *
 * @access private
 * @since 1.0.0
 *
 * @param array $matches preg_replace_callback() matches array
 * @return string Correctly encoded entity
 */
function wp_kses_normalize_entities2($matches) {
	if ( empty($matches[1]) )
		return '';

	$i = $matches[1];
	if (valid_unicode($i)) {
		$i = str_pad(ltrim($i,'0'), 3, '0', STR_PAD_LEFT);
		$i = "&#$i;";
	} else {
		$i = "&amp;#$i;";
	}

	return $i;
}

/**
 * Callback for wp_kses_normalize_entities() for regular expression.
 *
 * This function helps wp_kses_normalize_entities() to only accept valid Unicode
 * numeric entities in hex form.
 *
 * @access private
 *
 * @param array $matches preg_replace_callback() matches array
 * @return string Correctly encoded entity
 */
function wp_kses_normalize_entities3($matches) {
	if ( empty($matches[1]) )
		return '';

	$hexchars = $matches[1];
	return ( ( ! valid_unicode(hexdec($hexchars)) ) ? "&amp;#x$hexchars;" : '&#x'.ltrim($hexchars,'0').';' );
}

/**
 * Helper function to determine if a Unicode value is valid.
 *
 * @param int $i Unicode value
 * @return bool True if the value was a valid Unicode number
 */
function valid_unicode($i) {
	return ( $i == 0x9 || $i == 0xa || $i == 0xd ||
	         ($i >= 0x20 && $i <= 0xd7ff) ||
	         ($i >= 0xe000 && $i <= 0xfffd) ||
	         ($i >= 0x10000 && $i <= 0x10ffff) );
}

/**
 * Sanitize content for allowed HTML tags for post content.
 *
 * Post content refers to the page contents of the 'post' type and not $_POST
 * data from forms.
 *
 * @since 2.9.0
 *
 * @param string $data Post content to filter
 * @return string Filtered post content with allowed HTML tags and attributes intact.
 */
function wp_kses_post($data) {
	return wp_kses( $data , 'post' );
}

/**
 * Escaping for HTML attributes.
 *
 * @since 2.8.0
 *
 * @param string $text
 * @return string
 */
function esc_attr( $text ) {
	$safe_text = wp_check_invalid_utf8( $text );
	$safe_text = _wp_specialchars( $safe_text, ENT_QUOTES );
	/**
	 * Filter a string cleaned and escaped for output in an HTML attribute.
	 *
	 * Text passed to esc_attr() is stripped of invalid or special characters
	 * before output.
	 *
	 * @since 2.0.6
	 *
	 * @param string $safe_text The text after it has been escaped.
	 * @param string $text      The text prior to being escaped.
	 */
	return apply_filters( 'attribute_escape', $safe_text, $text );
}

/**
 * Properly strip all HTML tags including script and style
 *
 * This differs from strip_tags() because it removes the contents of
 * the `<script>` and `<style>` tags. E.g. `strip_tags( '<script>something</script>' )`
 * will return 'something'. wp_strip_all_tags will return ''
 *
 * @since 2.9.0
 *
 * @param string $string String containing HTML tags
 * @param bool $remove_breaks optional Whether to remove left over line breaks and white space chars
 * @return string The processed string.
 */
function wp_strip_all_tags($string, $remove_breaks = false) {
	$string = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $string );
	$string = strip_tags($string);

	if ( $remove_breaks )
		$string = preg_replace('/[\r\n\t ]+/', ' ', $string);

	return trim( $string );
}