<?php

if (!$this->hasConfig()) {
	$this->setConfig('player', 'Plyr');
	$this->setConfig('autoplay_plyr', 'Nein');
	$this->setConfig('autoplay_afterglow', '');
	$this->setConfig('sound_afterglow', '1');
	$this->setConfig('theme_afterglow', 'dark');
	$this->setConfig('controls_plyr', 'Ausblenden');
	$this->setConfig('click_plyr', 'Aktivieren');
	
}

$somethingIsWrong = false;
if ($somethingIsWrong) {
    throw new rex_functional_exception('Something is wrong');
}

if ($somethingIsWrong) {
    $this->setProperty('installmsg', 'Something is wrong');
    $this->setProperty('install', false);
}
?>