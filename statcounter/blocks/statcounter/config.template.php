<?php
/**
 * Stat Counter - Config
 * 
 * 
 *
 * 
 *
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package statcounter
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<p><?= ___('Stat Counter Configuration') ?></p>
<!-- Example begins -->
<schlix-config:textbox config-key='str_statcounter_project_number' label='<?= ___('Project Number') ?>' class='form-control' />
<schlix-config:textbox config-key='str_security_code' label='<?= ___('Stat Counter Security Code') ?>' />
<schlix-config:checkbox config-key='bool_invisible' label='<?= ___('Invisible') ?>' />
   
<!-- Example Ends -->
<h3>Analyze your traffic trends over time.</h3>
<p>
Track how your key metrics are performing over time by comparing pageviews, sessions, visitors and new visitors for any date range. Spot negative trends so you can react quickly and turn things around and positive trends so you can see the results of your efforts.
</p>

<p>
    Get your stat counter project code and security code from <a href="https://statcounter.com/" target="_blank"> StatCounter</a>.
</p>