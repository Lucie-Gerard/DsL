<script setup>

</script>

<template>
    <!-- 18b. the Nav -->
    <nav class="text-center header_nav sticky">
            

            <ul class="nav_links">
                <li><a href="public.html">Shared decks</a></li>
                <li><a href="account.html">Account</a></li>
                <li><a href="donation.html">Donation</a></li>
                <li><a href="logout.html"><img src="./assets/img/nav/disconnect.png" alt="disconnect"
                            id="disconnect-btn"></a></li>
                <ul class="dropdown_menu">
                    <li class="dropdown_content isActive"><a href=""><img src="./assets/img/nav/nav_en.png"
                                alt="English" class="language-icon"></a></li>
                    <li class="dropdown_content"><a href=""><img src="./assets/img/nav/nav_fr.png" alt="Francais"
                                class="language-icon"></a></li>
                    <li class="dropdown_content"><a href=""><img src="./assets/img/nav/nav_de.png" alt="Deutsch"
                                class="language-icon"></a></li>
                </ul>
            </ul>
        </nav>
</template>