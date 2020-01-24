<?php
namespace Stanford\JSFormRenderer;

require_once "emLoggerTrait.php";


class JSFormRenderer extends \ExternalModules\AbstractExternalModule {

  use emLoggerTrait;

  public $Proj;   /** var \Project $Proj  */
  public $project_id;

  // Set up constructor to handle per-project instantiation
	public function __construct($project_id = null) {
		parent::__construct();

		// Configure Project ID
		if (!empty($project_id)) {
		  // Instantiate Project
      global $Proj;
      if (empty($Proj) || $Proj->project_id !== $project_id) {
        $this->Proj = new \Project($project_id);
      } else {
        $this->Proj = $Proj;
      }
      $this->project_id = $project_id;
    }

	}


  /**
   * Return the 'metadata' for rendering the requested instrument
   *
   * @param      $event_id
   * @param      $form_name
   * @param null $record_id
   * @param null $instance_id
   */
  function getForm($event_id, $form_name, $record_id = null, $instance_id = null) {

  }

  /**
   * Write a key value pair to the log table with an expiration time to be cleared by cron
   * @param     $key
   * @param     $val
   * @param int $minutes_to_expire
   */
  function saveKeyVal($key, $val, $minutes_to_expire = 60) {
    $expires_at =
  }

  function getKeyVal($key) {

  }

  /**
   * Remove any key-value pairs that have an expires_at in the past
   */
  function clearKeyValStore() {

  }


}
