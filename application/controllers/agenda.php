<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index() {
			// regras de validação
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_error_delimiters('<p class="error">', '</p>');

			// modelo MEMBERSHIP
			$this->load->model('membership_model', 'membership');
			$query = $this->membership->validate();

			if ($this->form_validation->run() == FALSE) {

					$this->load->view('login/login_view');
			} else {

					if ($query) { // verifica login e senha
							$data = array(
									'username' => $this->input->post('username'),
									'logged' => true
							);
							$this->session->set_userdata($data);
							redirect('login/area_restrita');
					} else {
							redirect($this->index());
					}
			}
	}

	public function inicial(){
		// carrega a model   nome página     apelido
		$this->load->model('agenda_model', 'agenda');
		// pega dados do model armazenando-os num array
		$data['agenda'] = $this->agenda->getAgenda();
		$this->load->view('listaragenda', $data);
	}
	 // adicionar contato
		public function adicionarcontato(){
			$this->load->model('agenda_model', 'agenda');
			$this->load->view('adicionarcontato');
		}
		public function salvar(){
			// verifica se foi passado o campo nome vazio
			if($this->input->post('nome') == NULL){
				echo 'Insira nome do contato. <br/>';
				// link para VOLTAR à página do cadastro
				echo "<a href='adicionarcontato' title='voltar'>Voltar</a>";
			}else{
				$this->load->model('agenda_model', 'agenda');
				// armazena dados num array de $dados
				$dados['nome'] = $this->input->post('nome');
				$dados['email'] = $this->input->post('email');
				$dados['telefone'] =$this->input->post('telefone');
				$dados['ativo'] = $this->input->post('ativo');
				// verifica se foi passado id do contato via 'post'
				if($this->input->post('id') != NULL){
					// atualizar registro
					$this->agenda->alterarContato($dados,$this->input->post('id'));
				}else{
					// chama função produtos_model addContatos()
					// se não encontrar o id, adiciona novo registro
					$this->agenda->addAgenda($dados);
			  }
				// redirecionamento para a página anterior
				redirect("/");
			}
		}
		// página editar contato
		public function editarcontato($id=NULL){
			// verifica se foi passado id, senão retorna página
			if($id == NULL){
				redirect('/');
			}
			$this->load->model('agenda_model', 'agenda');
			// faz consulta no bd para verificar se existe
			$query = $this->agenda->getContatoById($id);
			// verifica se consulta retornou registros
			if($query == NULL){
				redirect('/');
			}
			// dados guardados em array e passados para a view
			$dados['agenda'] = $query;
			// carrega a view
		  $this->load->view('editarcontato', $dados);
		}
		// deletar cadastro
		public function apagarcontato($id=null){
			// Verifica id
			if($id == NULL){
				redirect('/');
			}
			// carrega model agenda
			$this->load->model('agenda_model', 'agenda');
			// consulta no bd
			$query = $this->agenda->getContatoById($id);
			if($query != NULL){
				//executa a função delContato de Agenda_model
				$this->agenda->delContato($query->id);
				redirect('/');
			}else{
				//se não encontrou registro do id no bd retorna uma página (listaragenda)
				redirect('/');
			}
		}
}
