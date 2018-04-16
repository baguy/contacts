<?php
class Membership_model extends CI_Model {

    # valida usuário
    function validate() {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $this->db->where('status', 1); // Verifica o status do usuário

        $query = $this->db->get('membership');

        if ($query->num_rows == 1) {
            return true;
        }
    }

    # verifica se usuário está logado
    function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            echo 'Voce não tem permissão para entrar nessa página. <a href="http://oficina2015/login">Efetuar Login</a>';
            die();
        }
    }
}
