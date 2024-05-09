<?php
if (isset($_SESSION['auth']))
{
?>
    <div class="profile-item">
        <div class="profile-item-img">
            <img src="img/profile-icon.png" alt="Profile" />
        </div>
    </div>
    <div class="username">
        <h2><?= $_SESSION['auth_user']['name']; ?> ?></h2>
    </div>
    </div>

<?php
}
?>