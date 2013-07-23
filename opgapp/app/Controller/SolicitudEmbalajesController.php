<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */

class SolicitudEmbalajesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'SolicitudEmbalajes';

	public function index($filtro){
		if(isset($filtro)){
			$this->set('solicitudes', $this->SolicitudEmbalaje->find('all', array('conditions' => array('SolicitudEmbalaje.id_historial_solicitud_embalaje' => $filtro))));				
		}else{
			$this->loadModel('EstadoAutomata');
			$this->loadModel('HistorialSolicitudEmbalaje');
			$solicitudes = $this->SolicitudEmbalaje->find('all');
			$contador = 0;
			foreach($solicitudes as $solicitud){
				$historiales[$contador] = $this->HistorialSolicitudEmbalaje->findById($solicitud['SolicitudEmbalaje']['id_historial_solicitud_embalaje']);
				$contador = $contador + 1;
			}
			$contador = 0;
			foreach($historiales as $historial){
				$estados[$contador] = $this->EstadoAutomata->findById($historial['HistorialSolicitudEmbalaje']['id_estado_automata']);
				$contador = $contador + 1;
			}
	        $this->set('solicitudes', $solicitudes);
	        $this->set('estados', $estados);
		}
	}
}
