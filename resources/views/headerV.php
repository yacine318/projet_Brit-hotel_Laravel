
<div id="header">
    <div class="navbar-content">
        <h1>
            <a href="<?php echo url('/'); ?>" class="logo">
                <img src="<?php echo asset('images/logo.png'); ?>" alt="Brit Hotel" height="60">
            </a>
        </h1>
        
        <nav class="main-nav">
            <ul style="display: flex; align-items: center;">
                <?php include('menuV.php'); ?>
                
                <?php if(session('is_connected')): ?>
                    <div style="color: white; line-height: 1.2; font-size: 0.85em; margin: 0 15px;">
                        Bonjour, <br />
                        <strong><?php echo session('client_nom'); ?></strong>
                    </div>

                    <li>
                        <a href="<?php echo url('/deconnexion'); ?>">DÉCONNEXION</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>
