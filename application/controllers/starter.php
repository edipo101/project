<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class starter extends CI_Controller {
	public function index(){
		$this->load->model('pasivo_mdl');
		$this->load->model('gasto_mdl');
		$id = 3;
		$data = array(
			'pasivos' => $this->pasivo_mdl->fetch_all($id),
			'gastos' => $this->gasto_mdl->fetch_all($id)
		);
		$this->load->view('page/page_header');
		$this->load->view('cashflow', $data);
		$this->load->view('page/page_footer');
	}

	public function iniciar_valores($id_profesion){
		$this->load->model('profesion_mdl');
		$this->load->model('pasivo_mdl');
		$this->load->model('gasto_mdl');
		$this->load->model('datos_iniciales_mdl');
		$profesion = $this->profesion_mdl->fetch_by_id($id_profesion);
		if (!is_null($profesion)){
			//Eliminar datos de todas las tablas
			$this->pasivo_mdl->delete_by_profesion($id_profesion);
			$this->gasto_mdl->delete_by_profesion($id_profesion);
			
			//Cantidad de hijos
			$this->profesion_mdl->update_hijos($id_profesion, 0);

			//Asignar gastos iniciales (1: Gasto)
			$gastos_iniciales = $this->datos_iniciales_mdl->fetch_by_id($id_profesion, 1);
			foreach ($gastos_iniciales as $key => $datos) {
				$values = array(
					'descripcion' => $datos->nombre,
					'monto' => $datos->monto,
					'id_profesion' => $id_profesion,
					'color_etiqueta' => $datos->color_etiqueta
				);
				$this->gasto_mdl->insert($values);
			}
			
			//Asignar pasivos iniciales (2: Pasivo)
			$pasivos_iniciales = $this->datos_iniciales_mdl->fetch_by_id($id_profesion, 2);
			foreach ($pasivos_iniciales as $key => $datos) {
				$values = array(
					'descripcion' => $datos->nombre,
					'monto' => $datos->monto,
					'id_profesion' => $id_profesion,
					'color_etiqueta' => $datos->color_etiqueta	
				);
				$this->pasivo_mdl->insert($values);
			}
		}
		else
			echo 'error, no existe una profesion con esa id';
	}
}
