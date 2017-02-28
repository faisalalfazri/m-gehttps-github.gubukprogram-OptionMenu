<?php
	class Language {
		function detectLanguage() {
			global $DEFAULT_LANGUAGE;
			if ($_SERVER['HTTP_ACCEPT_LANGUAGE']) {
				$this->languages = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
				$this->language = substr($this->languages,0,2);
				return $this->language;
			}
			else if ($_SERVER['HTTP_USER_AGENT']) {
                $this->user_agent = explode(";" , $_SERVER['HTTP_USER_AGENT']);

				for ($i=0; $i < sizeof($this->user_agent); $i++) {
					$this->languages = explode("-",$this->user_agent[$i]);
					if (sizeof($this->languages) == 2) {
						if (strlen(trim($this->languages[0])) == 2) {
							$size = sizeof($this->language);
							$this->language[$size]=trim($this->languages[0]);
						}
					}
				}
				return $this->language[0];
			}
			else {
				$this->language = $DEFAULT_LANGUAGE;
				return $this->language;
			}
		}
		function checkLanguage($language = null) {
			global $LANGUAGE_DIR;
			$language = $LANGUAGE_DIR."/".$language.".conf";
			if (file_exists($language))
				return TRUE;
			else
				return FALSE;
		}
		function setLanguage($language = null){
			global $DEFAULT_LANGUAGE;
			if ($language)
				$_SESSION['LANGUAGE'] = $language;

			if (@!$_SESSION['LANGUAGE'])
				$_SESSION['LANGUAGE'] = $this->detectLanguage();

            if ($this->checkLanguage($_SESSION['LANGUAGE'])) {
            	$lang =  $_SESSION['LANGUAGE'];
            	return $lang;
            }
            else {
            	return  $DEFAULT_LANGUAGE;
            }
		}
		function getLanguage($language = null) {
			global $LANGUAGE_DIR;
            $lang = $this->setLanguage($language);
			include_once $LANGUAGE_DIR."/".$lang.".conf";
			return $language = $lang;
		}
	}
?>