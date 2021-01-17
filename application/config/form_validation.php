<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'signup' => array(
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required|min_length[5]',
            'errors' => array(
                'min_length' => '{field} paling sedikit {param} karakter.'
            )
        ),
        array(
            'field' => 'telepon',
            'label' => 'Telepon',
            'rules' => 'required|min_length[3]|max_length[15]',
            'errors' => array(
                'min_length' => '{field} paling sedikit {param} karakter.'
            )
        ),
        array(
            'field' => 'username',
            'label' => 'Email',
            'rules' => 'trim|required|min_length[6]|callback_username_check',
            'errors' => array(
                'min_length' => '{field} paling sedikit {param} karakter.'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[6]',
            'errors' => array(
                'min_length' => '{field} paling sedikit {param} karakter.'
            )
        ),
        array(
            'field' => 'passconf',
            'label' => 'Konfirmasi Password',
            'rules' => 'trim|required|matches[password]',
            'errors' => array(
                'matches' => 'Password tidak sama'
            )
        ),
    )
);

