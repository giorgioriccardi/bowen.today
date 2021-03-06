<?php 
// page variables
$title = 'Bowen Today';

require_once PAGES_DIR . '/templates/header-home.php';

$arrow = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>';
?>
<div id="home" class="shell">
    <h3>Ferry Schedule</h3>
    <a href="/ferry/bowen-vancouver" class="link-button">Bowen <?php echo $arrow; ?> Vancouver</a>
    <a href="/ferry/vancouver-bowen" class="link-button">Vancouver <?php echo $arrow; ?> Bowen</a>

    <h3>Current Conditions</h3>
    <a href="/weather" class="link-button">Weather</a>
    <a href="/tide" class="link-button">Tide</a>

</div>
<?php 
require_once PAGES_DIR . '/templates/footer.php';