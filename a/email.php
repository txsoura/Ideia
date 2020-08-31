<?php
$mailbox=imap_open("{imap.gmail.com:993/ss1}INBOX", "info.ideiamz@gmail.com", "ideia000");
$mail=imap_search($mailbox, "ALL");
$mail_headers=imap_header($mailbox, $mail[0]);
$subject=$mail_headers ->subject;
$from=$mail_headers ->fromaddress;
imap_setflag_full($mailbox,$mail[0], "\\sen \\flagged");
imap_close($mailbox);
?>