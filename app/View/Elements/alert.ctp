<?php
$alertTypes = array();
$alertTypes['ok'] = 'alert-success';
$alertTypes['success'] = 'alert-success';
$alertTypes['error'] = 'alert-danger';
$alertTypes['info'] = 'alert-info';
$alertTypes['warn'] = 'alert-warning';

if($this->Session->check('_alert')) {
	$_alert = $this->Session->read('_alert');
	$class = 'alert ' . $alertTypes[$_alert['type']];

	$dismiss = $_alert['dismissOnClick'] ? sprintf('title="%s"', __('Click to dismiss')) : '';
	unset($_SESSION['_alert']);
	if(!isset($tabSelected)){
		$tabSelected = '';
	}
?>
    <div class="<?php echo $class; ?>" <?php echo $dismiss; ?>>
        <div class="alert_icon"></div>
        <div class="alert_content"><?php echo $_alert['message']; ?></div>
    </div>

<?php } ?>