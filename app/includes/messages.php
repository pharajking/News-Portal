<?php if(isset($_SESSION['message'])): ?>
    <div class="message <?php echo $_SESSION['type']; ?>">
    <ion-icon name="checkmark-circle" class="message-icon"></ion-icon>
    <span><?php echo $_SESSION['message']; ?></span>

    <?php 
        unset($_SESSION['message']);
        unset($_SESSION['type']);
    ?>
    </div>

    <?php endif; ?>