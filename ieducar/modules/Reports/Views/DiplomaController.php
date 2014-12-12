<?php

require_once "lib/Portabilis/Controller/ReportCoreController.php";
require_once "Reports/Reports/DiplomaReport.php";

class DiplomaController extends Portabilis_Controller_ReportCoreController
{

  protected $_titulo = 'Diploma';

  function form() {
    $this->inputsHelper()->input('ano');
    $this->inputsHelper()->dynamic(array('instituicao', 'escola'));
    $this->inputsHelper()->simpleSearchMatricula();
    $this->inputsHelper()->date('data_conclusao', array('required' => true, 'label' => 'dd/mm/aaaa'));
  }

  function report() {
    return new DiplomaReport();
  }

  function beforeValidation() {
    $this->report->addArg('ano', (int)$this->getRequest()->ano);
    $this->report->addArg('instituicao', (int)$this->getRequest()->ref_cod_instituicao);
    $this->report->addArg('escola', (int)$this->getRequest()->ref_cod_escola);
    $this->report->addArg('matricula', (int)$this->getRequest()->matricula_id);
    $this->report->addArg('data_conclusao', $this->getRequest()->data_conclusao);
  }
}

?>
