<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda_model extends CI_Model {
  // Lista todos os contatos da agenda
	public function getAgenda()
	{
    //                    nome da tabela
		$query = $this->db->get('agenda');
    return $query->result();
	}
	// Adiciona novo contato
	public function addAgenda($dados=NULL){
		if($dados != NULL):
			$this->db->insert('agenda', $dados);
		endif;
	}
	// Get contato by id
	public function getContatoById($id=NULL){
		if($id != NULL):
			// Verifica id no bd
			$this->db->where('id', $id);
			// limita para apenas um registro
			$this->db->limit(1);
			// pega contato da tabela
			$query = $this->db->get("agenda");
			// retorna contato
			return $query->row();
		endif;
	}
	// atualizar contato na tabela
	public function alterarContato($dados=NULL, $id=NULL){
		if($dados != NULL && $id != NULL):
			$this->db->update('agenda', $dados, array('id'=>$id));
		endif;
	}
	// apagar contato
	public function delContato($id=NULL){
		// verifica se foi passada id
		if($id != NULL):
			$this->db->delete('agenda', array('id'=>$id));
		endif;
	}
}
