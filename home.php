<style>
	a{
		font-weight: bold;
	}
</style>

<?php
	/* Check if required software is installed. Issue warning if not. */
 
	if (!$RequiredSoftwareHandler->isPHPCurlIsInstalled()){
		echo $RequiredSoftwareHandler->getNoCurlAdviceBasedOnOperatingSystem();
	}// end if

	if (!$RequiredSoftwareHandler->isPHPJSONIsInstalled()){
		echo $RequiredSoftwareHandler->getNoJSONAdviceBasedOnOperatingSystem();
	}// end if
?>


<header class="cf-completo">
<link rel="stylesheet" href="styles/global-styles.css">
	<link rel="stylesheet" href="styles/ddsmoothmenu/ddsmoothmenu.css">
		
        <div class="texto">
		
        </div>

		
    </header>

	
