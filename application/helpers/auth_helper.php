<?php

function is_auth_log()
{
    $sess = get_instance();
    if (!$sess->session->userdata('email')) {
        redirect('auth');
    }
}
