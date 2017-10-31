<?php
function mail_attachment($mailto, $from_mail, $from_name, $replyto, $subject, $message) {
	if (mail($mailto, $subject, $message, "")) {
		return "OK";
	} else {
		return "KO";
	}
}