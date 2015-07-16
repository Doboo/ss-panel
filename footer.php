<div class="footer">
    <p>&copy; <?php echo $site_name."  ".date('Y'); ?>  Powered by <a href="https://telegram.me/guoke">guoke</a> <?php echo $version; ?>
        Processed in <?php
        $Runtime->Stop();
        echo $Runtime->SpendTime()."ms";
        ?>
    </p>
</div>
