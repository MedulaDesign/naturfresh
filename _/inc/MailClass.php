<?php 

/******************
MAIL CLASS

Requisitos:
El botón submit debe tener name=send y valor que evalue a true

*****************************************/


class MailClass
{
  protected $transport;
  protected $mailer;
  protected $to = array('agustin@fliin.com' => 'Contacto NaturFresh.cl');
  protected $from = array('agustin@medula.cl' => 'Formulario de Contacto');
  protected $messageBody;
  protected $_errores=array();
  protected $_exito=false;

  function __construct()
  {
    error_reporting(-1);
    if(!isset($_POST['send']) || !$_POST['send'])return;
    $this->revisaCampos();
    if(count($this->_errores))return;

    $this->inicia();
    if(!$this->enviaCorreo())$this->_errores['problema']=true;
    if(count($this->_errores))return;
    $_POST=array();
    $this->_exito=true;
  }

  public function exito(){
    return $this->_exito;
  }

  protected function revisaCampos(){
    if(!$this->validaEmail($_POST['mail'])){
      $this->_errores['mail']=true;
    }
    if(strlen($_POST['nombre'])<3){
      $this->_errores['nombre']=true;
    }
  }

  public function getError($nombre=false){
    if($nombre===false){
      return (bool) count($this->_errores);
    }else{
      if(!isset($this->_errores[$nombre]))return false;
      return (bool) $this->_errores[$nombre];
    }
    return false;
  }

  protected function inicia(){
    $this->transport = Swift_SmtpTransport::newInstance('aspmx.l.google.com', 25)
      ->setUsername('agustin@fliin.com')
      ->setPassword('kloaka')
      ;
  }

  public function enviaCorreo($messageBody='',$replyTo=''){
    if (!$messageBody) {
      $messageBody='<h1>Mensaje de Contacto</h1>
      <p><strong>Nombre: </strong> '.$_POST['nombre'].'</p>
      <p><strong>Email: </strong> '.$_POST['mail'].'</p>
      <p><strong>Teléfono: </strong> '.$_POST['telefono'].'</p>
      <h2>Mensaje</h2>
      <p>'.nl2br($_POST['comments']).'</p>';
    }
    $message = Swift_Message::newInstance()

      // Give the message a subject
      ->setSubject('Mensaje')

      // Set the From address with an associative array
      ->setFrom($this->from)

      // Set the To addresses with an associative array
      ->setTo($this->to)

      //Set the content type
      //->setContentType('text/html; charset=utf-8')

      // Give it a body
      ->setBody($messageBody, 'text/html');

      // And optionally an alternative body
      //->addPart('<q>Here is the message in html</q>', 'text/html')

      // Optionally add any attachments
      //->attach(Swift_Attachment::fromPath('my-document.pdf'))
      

    $this->mailer = Swift_Mailer::newInstance($this->transport);

    $result = $this->mailer->send($message);
    return $result;
  }

  public function validaEmail($email) {
    if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
      return false;
    }
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) {
      if
  (!@ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
  $local_array[$i])) {
        return false;
      }
    }
    if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) {
      $domain_array = explode(".", $email_array[1]);
      if (sizeof($domain_array) < 2) {
          return false; // Not enough parts to domain
      }
      for ($i = 0; $i < sizeof($domain_array); $i++) {
        if
  (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/",
  $domain_array[$i])) {
          return false;
        }
      }
    }
    return true;
  }

  public function revisaEImprime($llave, $returnBoolean=false){
    if(isset($_POST[$llave]) && $_POST[$llave]){
      if($returnBoolean)return true;
      echo $_POST[$llave];
      return;
    }
    return false;
  }
}

 ?>
