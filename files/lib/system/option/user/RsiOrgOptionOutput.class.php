<?php
/**
 @author		D1strict-Development
 @copyright 	2020 Felix Waßmuth
*/

namespace wcf\system\option\user;
use wcf\data\user\option\UserOption;
use wcf\data\user\User;
use wcf\util\StringUtil;
class RsiOrgOptionOutput implements IUserOptionOutput {

/**
 * @see wcf\system\option\user\IUserOptionOutput::getOutput()
 */
public function getOutput(User $user, UserOption $option, $value) {
		if (empty($value)) return '';

		$value = StringUtil::trim($value);
		$link = 'https://robertsspaceindustries.com/orgs/' . $value;

		$link = StringUtil::encodeHTML($link);
		$value = StringUtil::encodeHTML($value);
		
		return '<a href="'.$link.'" class="externalURL"'.(EXTERNAL_LINK_REL_NOFOLLOW ? ' rel="nofollow"' : '').(EXTERNAL_LINK_TARGET_BLANK ? ' target="_blank"' : '').'>'.$value.'</a>';
	}
}
