<?php
/**
 * Stat Counter - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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

global $HTMLHeader;
?>

<?php if ($project_number && $security_code): ?>
    <?php $edward = $invisible ? 
            'asnyc= "1"' : ''; ?>
    <script type="text/javascript">
        var sc_project = <?= ___h($project_number) ?>;
        var sc_invisible =<?= (int) ($invisible) ?>;
        var sc_security ="<?= ___h($security_code) ?>";
        var sc_https = 1;
        //var scJsHost = "https://";
        //document.write("<script type='text/javascript' src='" + scJsHost+ "statcounter.com/counter/counter.js'></"+"script>");
    </script>
    <script src="https://www.statcounter.com/counter/counter.js" <?= $edward ?>></script>
    
    <noscript>
    <div class="statcounter">
        <a title="Web Analytics" href="https://statcounter.com/" target="_blank">
            <img class="statcounter" src="https://c.statcounter.com/<?= ___h($project_number) ?>/0/<?= ___h($security_code) ?>/1/" alt="Web Analytics">
        </a>
    </div>
    </noscript>

    <?php else: ?>
    <x-ui:alert type="danger">
    <?= ___('Clicky tracking number has not been provided') ?>
    </x-ui:alert>

<?php endif; ?>

