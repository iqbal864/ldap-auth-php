<?php
// post dari form input
$username = $this->input->post('username');
$password = $this->input->post('password');
$pass = urlencode($password);

$ldap_host = "ldap://xx.x.x.xx"; // contoh : ldap://10.1.1.10
$ldap_port = 389;

$user_login = $username . "@yourcompany.co.id";

$ldap = ldap_connect($ldap_host, $ldap_port);

ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

if (ldap_bind($ldap, $user_login, $pass)) {
    // jika bind berhasil
} else {
    // jika gagal
}
